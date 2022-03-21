<?php

namespace App\Providers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Cart;
use Illuminate\Support\Facades\View;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Auth;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        /*$charts->register([
            \App\Charts\SampleChart::class,
            \App\Charts\SalesChart::class

        ]);*/

        Paginator::useBootstrap();
        Schema::defaultStringLength(191);
        View::composer('partials/header',function($view){
            $categories = Category::tree();
            
            if(Auth::user())
            {
                $cartData = Cart::where('user_id',Auth::user()->id)->limit(3)->get();
                $view->with(['categories' => $categories,'cartData' => $cartData]);
            }
        
            $view->with(['categories' => $categories]);
            
        });

        // View::composer('partials/header',function($view){
        //     $categories = Category::all();
        //     $view->with(['categories' => $categories]);
        // });
        View::composer('partials/footer',function($view){
            $blog = Blog::all();
            $view->with(['blog' => $blog]);
        });
        
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
    
}