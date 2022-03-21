<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Settings;

class SettingsController extends Controller {
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function index() {
        $id = 1;
        $settings = Settings::find( $id );
        // $setting = Settings::where( 'id', $id )->get();
        // dd( $settings );
        return view( 'pages.admin.settings.index', compact( 'settings' ) );
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
        //
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
        $setting = Settings::find( $id );
        $data = array(
            'logo'=> $request->logo,
            'address'=> $request->address,
            'phone'=> $request->phone,
            'email'=> $request->email,
            'about_site'=> $request->about_site,
            'fb_link'=> $request->fb_link,
        );
        if ( $request->hasFile( 'logo' ) ) {

                $image = $request->file( 'logo' );
                $fileName = date( 'dmy' ).time().'.'.$image->getClientOriginalExtension();
                $image->move( public_path( '/imagesuser' ), $fileName );
                $name = $image->getClientOriginalName();
                $data[ 'logo' ] = $fileName;
            }
        $settings = Settings::where( 'id', $id )->update( $data );
        return redirect()->route( 'settings.index' );
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
    public static function dynamicContent() {
        $id = 1;
        $dynamicData = Settings::where( 'id', $id )->get();
        return $dynamicData;
    }
}
