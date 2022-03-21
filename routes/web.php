<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\frontEndController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\admin\CartsController;
use App\Http\Controllers\admin\AddressController;
use App\Http\Controllers\admin\OrderController;
use App\Http\Controllers\admin\CkeditorController;
use App\Http\Controllers\admin\SettingsController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\StripePaymentController;
use App\Mail\WelcomeMail;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
| Middleware options can be located in `app/Http/Kernel.php`
|
*/

// Homepage Route
Route::group(['middleware' => ['web', 'checkblocked']], function () {
    Route::get('/', 'App\Http\Controllers\WelcomeController@welcome')->name('welcome');
    Route::get('/terms', 'App\Http\Controllers\TermsController@terms')->name('terms');
});

// Authentication Routes
Auth::routes();

// Public Routes
Route::group(['middleware' => ['web', 'activity', 'checkblocked']], function () {

    // Activation Routes
    Route::get('/activate', ['as' => 'activate', 'uses' => 'App\Http\Controllers\Auth\ActivateController@initial']);

    Route::get('/activate/{token}', ['as' => 'authenticated.activate', 'uses' => 'App\Http\Controllers\Auth\ActivateController@activate']);
    Route::get('/activation', ['as' => 'authenticated.activation-resend', 'uses' => 'App\Http\Controllers\Auth\ActivateController@resend']);
    Route::get('/exceeded', ['as' => 'exceeded', 'uses' => 'App\Http\Controllers\Auth\ActivateController@exceeded']);

    // Socialite Register Routes
    Route::get('/social/redirect/{provider}', ['as' => 'social.redirect', 'uses' => 'App\Http\Controllers\Auth\SocialController@getSocialRedirect']);
    Route::get('/social/handle/{provider}', ['as' => 'social.handle', 'uses' => 'App\Http\Controllers\Auth\SocialController@getSocialHandle']);

    // Route to for user to reactivate their user deleted account.
    Route::get('/re-activate/{token}', ['as' => 'user.reactivate', 'uses' => 'App\Http\Controllers\RestoreUserController@userReActivate']);
});

// Registered and Activated User Routes
Route::group(['middleware' => ['auth', 'activated', 'activity', 'checkblocked']], function () {

    // Activation Routes
    Route::get('/activation-required', ['uses' => 'App\Http\Controllers\Auth\ActivateController@activationRequired'])->name('activation-required');
    Route::get('/logout', ['uses' => 'App\Http\Controllers\Auth\LoginController@logout'])->name('logout');
});

// Registered and Activated User Routes
Route::group(['middleware' => ['auth', 'activated', 'activity', 'twostep', 'checkblocked']], function () {

    //  Homepage Route - Redirect based on user role is in controller.
    Route::get('/home', ['as' => 'public.home',   'uses' => 'App\Http\Controllers\UserController@index']);

    // Show users profile - viewable by other users.
    Route::get('profile/{username}', [
        'as'   => '{username}',
        'uses' => 'App\Http\Controllers\ProfilesController@show',
    ]);
});



// Registered, activated, and is current user routes.
Route::group(['middleware' => ['auth', 'activated', 'currentUser', 'activity', 'twostep', 'checkblocked']], function () {

    // User Profile and Account Routes
    Route::resource(
        'profile',
        \App\Http\Controllers\ProfilesController::class,
        [
            'only' => [
                'show',
                'edit',
                'update',
                'create',
            ],
        ]
    );
    Route::put('profile/{username}/updateUserAccount', [
        'as'   => '{username}',
        'uses' => 'App\Http\Controllers\ProfilesController@updateUserAccount',
    ]);
    Route::put('profile/{username}/updateUserPassword', [
        'as'   => '{username}',
        'uses' => 'App\Http\Controllers\ProfilesController@updateUserPassword',
    ]);
    Route::delete('profile/{username}/deleteUserAccount', [
        'as'   => '{username}',
        'uses' => 'App\Http\Controllers\ProfilesController@deleteUserAccount',
    ]);

    // Route to show user avatar
    Route::get('images/profile/{id}/avatar/{image}', [
        'uses' => 'App\Http\Controllers\ProfilesController@userProfileAvatar',
    ]);

    // Route to upload user avatar.
    Route::post('avatar/upload', ['as' => 'avatar.upload', 'uses' => 'App\Http\Controllers\ProfilesController@upload']);
});

// Registered, activated, and is admin routes.
Route::group(['middleware' => ['auth', 'activated', 'role:admin', 'activity', 'twostep', 'checkblocked']], function () {
    Route::resource('/users/deleted', \App\Http\Controllers\SoftDeletesController::class, [
        'only' => [
            'index', 'show', 'update', 'destroy',
        ],
    ]);

    Route::resource('users', \App\Http\Controllers\UsersManagementController::class, [
        'names' => [
            'index'   => 'users',
            'destroy' => 'user.destroy',
        ],
        'except' => [
            'deleted',
        ],
    ]);
    Route::post('search-users', 'App\Http\Controllers\UsersManagementController@search')->name('search-users');

    Route::resource('themes', \App\Http\Controllers\ThemesManagementController::class, [
        'names' => [
            'index'   => 'themes',
            'destroy' => 'themes.destroy',
        ],
    ]);

    Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
    Route::get('routes', 'App\Http\Controllers\AdminDetailsController@listRoutes');
    Route::get('active-users', 'App\Http\Controllers\AdminDetailsController@activeUsers');
});

Route::redirect('/php', '/phpinfo', 301);

Route::group(['middleware'=>'auth'],function(){
    //route for custom pages in admin theme
    Route::get('pdfview/{id}',[OrderController::class,'pdfdownload'])->name('pdfview');
    Route::resource('home/category',CategoryController::class);
    Route::resource('home/product',ProductController::class);
    Route::resource('home/adminCart',CartsController::class);
    Route::resource('home/address',AddressController::class);
    Route::resource('/home/orders',OrderController::class);
    Route::resource('home/settings',SettingsController::class);
    // Route::get('home/email',[MailController::class,'sendMail'])->name('email');
});
Route::get('OrderDetails',[frontEndController::class,'OrderDetails'])->name('OrderDetails');
//route for blog pages
Route::resource('/blogs',BlogController::class);

//Product Detail Route
Route::get('productDetail/{id}',[frontEndController::class,'getProductDetail'])->name('product.detail');
//Display Products
// Route::get('products',[frontEndController::class,'getProducts'])->name('products');
Route::get('products/{id?}',[frontEndController::class,'getProductsById'])->name('products.getById');
//Route for value based on slider range
Route::post('getProductsByPrice',[frontEndController::class,'getProductsByPrice'])->name('productsByPrice');
//Cart Page Route

Route::group(['middleware'=>'auth'],function(){
    //route for Cart
    Route::resource('cart',CartController::class);
    //wishList
    Route::resource('wishlist',WishlistController::class);
    //Stripe route
    Route::post('stripePayment',[StripePaymentController::class,'stripePaymentView'])->name('paymentView');
    Route::post('stripePay',[StripePaymentController::class,'stripePay'])->name('stripePayMethod');
});

//pdf download
Route::get('pdfView/{id}',[frontEndController::class,'pdfDownload'])->name('pdfView');
//newsletter routes
Route::post('/',[NewsletterController::class,'store'])->name('newsletter.store');
Route::get('home/emails',[StripePaymentController::class,'sendmail'])->name('email');
Route::get('offer',[NewsletterController::class,'index'])->name('offers');
Route::post('home/offers',[NewsletterController::class,'sendMail']);
// //Stripe route
// Route::post('stripePayment',[StripePaymentController::class,'stripePaymentView'])->name('paymentView');
// Route::post('stripePay',[StripePaymentController::class,'stripePay'])->name('stripePayMethod');
