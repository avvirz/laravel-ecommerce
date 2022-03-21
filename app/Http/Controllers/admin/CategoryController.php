<?php

namespace App\Http\Controllers\admin;

use App\Models\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class CategoryController extends Controller {
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function index() {
        $categories = Category::paginate( 10 );
        return view( 'pages.admin.category.index', compact( 'categories' ) );

    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function create() {
        $categories = Category::get();
        return view( 'pages.admin.category.add', compact( 'categories' ) );
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */

    public function store( Request $request ) {
        $request->validate( [
            'name'=>'required',
            'image'=>'required'
        ] );
        $data = array(
            'name'=> $request->name,
            'category_id'=> $request->category_id,
        );
        if ( $request->hasFile( 'image' ) ) {
            $image = $request->file( 'image' );
            $fileName = date( 'dmY' ).time().'.'.$image->getClientOriginalExtension();
            $image->move( public_path( '/uploads' ), $fileName );
            $name = $image->getClientOriginalName();
            $data[ 'image' ] = $fileName;
        }

        $create = Category::create( $data );
        return redirect()->route( 'category.index' );
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

    public function edit( $id, Request $request ) {
        // $id = $request->id;
        // dd( $id );
        $categories = Category::wherenull( 'category_id' )->get();
        $category = Category::find( $id );
        return view( 'pages.admin.category.edit', compact( 'categories', 'category' ) );
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */

    public function update( Request $request, $id ) {

        $request->validate( [
            'name'=>'required',
            'image'=>'required'
        ] );
        $data = array(
            'name'=> $request->name,
            'category_id'=> $request->category_id,

        );
        if ( $request->hasFile( 'image' ) ) {
            $image = $request->file( 'image' );
            $fileName = date( 'dmy' ).time().'.'.$image->getClientOriginalExtension();
            $image->move( public_path( '/uploads' ), $fileName );
            $name = $image->getClientOriginalName();
            $data[ 'image' ] = $fileName;
        }

        $category = Category::find( $id );
        $create = Category::where( 'id', $id )->update( $data );
        return redirect()->route( 'category.index' );
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */

    public function destroy( Request $request, Category $category ) {

        $id = $request->id;

        // $category = Category::find( $id );
        $category->delete();
        return redirect()->route( 'category.index' );
    }
}