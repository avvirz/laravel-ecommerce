<?php

namespace App\Http\Controllers\admin;
use App\Models\Address;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;

class AddressController extends Controller {
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function index( Request $request ) {
        $search = $request[ 'search' ];

        if ( $search != '' ) {
            $list = Address::where( 'name', 'LIKE', '%'.$search.'%' )->paginate( 2 );
            return view( 'pages.admin.address.index' )->with( 'addressData', $list );
        } else {
            $addressData = Address::paginate( 4 );
            return view( 'pages.admin.address.index', compact( 'addressData' ) );
        }
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
        $uid = Auth::user()->id;

        $this->validate( $request, [
            'address' => 'required|unique:addresses',
            'pincode' => 'required'
        ] );

        Address::create( [
            'user_id' => $uid,
            'address' => $request->address,
            'pincode' => $request->pincode
        ] );

        return redirect()->back();
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

    public function update( Request $request, Address $address ) {
        $data = [];
        $data[ 'address' ] = $request->address;
        $data[ 'pincode' ] = $request->pincode;

        $address->update( $data );

        return redirect()->back();
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */

    public function destroy( $id ) {
        //
    }
}