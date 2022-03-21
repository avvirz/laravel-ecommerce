<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Wishlist;
use App\Models\Cart;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller {
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function index() {
        $userId = Auth::user()->id;
        $cartAllData = Cart::join( 'products', 'products.id', '=', 'product_id' )
        ->join( 'users', 'users.id', '=', 'user_id' )
        ->where( 'user_id', '=', $userId )
        ->get( [ 'products.product_name', 'products.image', 'products.discount_price', 'products.available_stock', 'carts.total', 'carts.quantity', 'carts.size', 'carts.id' ] );
        // dd( $cartAllData );
        if ( !$cartAllData->isEmpty() )
        return view( 'cart.index' )->with( 'cartAllData', $cartAllData );
        else
        session()->flash( 'error', 'Cart is Empty first Please Add Product to the Cart' );
        return redirect( route( 'products.getById' ) );
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function create() {
        //
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */

    public function store( Request $request, User $user ) {
        $this->validate( $request, [
            'size' => 'required',
            'quantity' => 'required',
            'product_id' => 'required',
            'discount_price' => 'required',
        ] );
        $cartItem = Cart::where( [
            [ 'user_id', '=', Auth::user()->id ],
            [ 'product_id', '=', $request->product_id ],
            [ 'size', '=', $request->size ]
        ] )->first();

        if ( isset( $cartItem ) ) {
            session()->flash( 'error', 'Product is already in your cart' );
            return redirect()->back();
        } else {
            Cart::create( [
                'product_id' => $request->product_id,
                'user_id' => Auth::user()->id,
                'size' => $request->size,
                'quantity' =>  $request->quantity,
                'total' => $request->qty * $request->discount_price
            ] );
            if ( $request->Id ) {
                $wishItemDelete = Wishlist::where( [
                    [ 'user_id', '=', Auth::user()->id ],
                    [ 'product_id', '=', $request->product_id ]
                ] )->first()->delete();
            }
            session()->flash( 'success', 'Product Added to the Cart successfully' );
            return redirect()->back();
        }
    }

    /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */

    public function show( $id ) {
        //
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */

    public function edit( $id ) {
        //
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */

    public function update( Cart $cart, Request $request ) {
        $data = [];
        $data[ 'quantity' ] = $request->productQty;
        $data[ 'total' ] =  $request->productQty * $request->productPrice;
        $userId = Auth::user()->id;
        $cart->update( $data );
        $addressData = Address::where( 'user_id', '=', $userId )->first();
        return view( 'checkOut' )->with( 'cartData', $cart )->with( 'address', $addressData );
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */

    public function destroy( Cart $cart ) {
        $cart->delete();

        session()->flash( 'message', 'Successfully deleted Cart Product' );

        return redirect()->back();
    }
}
