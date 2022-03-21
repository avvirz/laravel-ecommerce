<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Address;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use App\Models\Order;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use PDF;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller {
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function pdfdownload( $id, Request $request ) {
        // dd( $id );
        $order = Order::where( 'id', $id )->get();
        // dd( $order );
        // return view( 'pages.admin.order.invoice', compact( 'order' ) );
        $pdf = PDF::loadView( 'pages.admin.order.invoice', compact( 'order' ) );
        return $pdf->download( 'Order_invoice.pdf' );
    }

    public function index() {
        $ordersData = Order::paginate( 4 );
        return view( 'pages.admin.order.index', compact( 'ordersData' ) );
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */

    public function store( Request $request, Cart $cart ) {
        $this->validate( $request, [
            'productId' => 'required',
            'payment' => 'required',
            'quantity'=> 'required',
            'grandTotal' => 'required'
        ] );
        $uid = Auth::user()->id;
        //Find address of User
        $addressId = Address::where( 'user_id', '=', $uid )->first();
        Order::create( [
            'product_id' => $request->productId,
            'user_id' => $uid,
            'address_id' => $addressId->id,
            'payment_mode' => $request->payment,
            'quantity'=> $request->quantity,
            'grand_total' => $request->grandTotal
        ] );
        $email = User::select( 'email' )->where( 'id', $uid )->get();
        // dd($email);
        Mail::to( $email )->send( new WelcomeMail() );
        //delete the cart item when order is placed
        $cartItemDelete = Cart::where( [
            [ 'user_id', '=', $uid ],
            [ 'product_id', '=', $request->productId ]
        ] )->first()->delete();
        session()->flash( 'success', 'Order placed & invoice mailed successfully' );
        return redirect()->back();
    }

    /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */

    public function show( $id ) {
        $order = Order::where( 'id', '=', $id )->get();
        return view( 'pages.admin.order.details', compact( 'order' ) );
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */

    public function edit( $id, Request $request ) {
        $orders = Order::find( $id );
        return view( 'pages.admin.order.edit', compact( 'orders' ) );
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */

    public function update( Request $request, $id ) {
        $data = array(
            'user_id'=>$request->user_id,
            'order_status'=>$request->status,
            'date'=>$request->date,
        );
        $orders = Order::find( $id );
        $create = Order::where( 'id', $id )->update( $data );
        return redirect()->route( 'orders.index' );
    }
}
