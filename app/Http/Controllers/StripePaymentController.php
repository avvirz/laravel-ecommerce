<?php
namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use Stripe;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;

class StripePaymentController extends Controller {
    /**
    * success response method.
    *
    * @return \Illuminate\Http\Response
    */

    public function stripePaymentView( Request $request ) {
        $allData = $request->all();
        // dd( $allData );
        return view( 'stripe' )->with( 'allData', $allData );
    }
    /**
    * success response method.
    *
    * @return \Illuminate\Http\Response
    */

    public function stripePay( Request $request ) {
        $amount = $request->grandTotal;
        Stripe\Stripe::setApiKey( env( 'STRIPE_SECRET' ) );

        Stripe\Charge::create ( [
            'amount' => $amount * 100,
            'currency' => 'INR',
            'source' => $request->stripeToken,
            'description' => 'Test payment from R D Solanki'
        ] );
        $uid = Auth::user()->id;
        //Find address of User
        $addressId = Address::where( 'user_id', '=', $uid )->first();

        Order::create( [
            'product_id' => $request->productId,
            'user_id' => $uid,
            'address_id' => $addressId->id,
            'payment_mode' => $request->payment_mode,
            'quantity'=>$request->quantity,
            'grand_total' => $request->grandTotal
        ] );
        // $email = User::
        Mail::to( 'ravizala2689@gmail.com' )->send( new WelcomeMail() );
        //delete the cart item when order is placed
        $cartItemDelete = Cart::where( [
            [ 'user_id', '=', $uid ],
            [ 'product_id', '=', $request->productId ]
        ] )->first()->delete();

        session()->flash( 'success', 'Order placed & invoice mailed successfully' );
        return redirect( route( 'OrderDetails' ) );
    }
}