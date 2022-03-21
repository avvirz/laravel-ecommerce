<?php

namespace App\Http\Controllers;

use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller {
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function index() {
        $user = Auth::user()->id;
        $wishlistData = Wishlist::select( 'wishlists.id', 'wishlists.size', 'wishlists.product_id', 'products.product_name', 'products.discount_price', 'products.image' )
        ->join( 'products', 'wishlists.product_id', '=', 'products.id' )
        ->where( 'user_id', $user )
        ->paginate( 4 );
        // dd($wishlistData);
        return view( 'wishlist' )->with( 'wishlist', $wishlistData );
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

    public function store( Request $request ) {
        $id = $request->wishlistId;
        $wishlistItem = Wishlist::where( [
            [ 'user_id', '=', Auth::user()->id ],
            [ 'product_id', '=', $id ],
        ] )->first();
        if ( isset( $wishlistItem ) ) {
            session()->flash( 'error', 'Product is already in your WishList' );
            return redirect()->back();
        } else {
            Wishlist::create( [
                'product_id' => $id,
                'user_id' => Auth::user()->id,
                'size' => $request->size,
                'quantity' =>  $request->quantity,
            ] );
            session()->flash( 'success', 'Product Added to the Wishlist successfully' );
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

    public function update( Request $request, $id ) {
        //
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */

    public function destroy( Wishlist $wishlist ) {

        $wishlist->delete();
        session()->flash( 'message', 'Successfully deleted from Wishlist' );
        return redirect()->back();
    }
}
