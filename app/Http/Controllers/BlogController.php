<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class BlogController extends Controller {
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function index() {
        $blogList = Blog::paginate( 3 );
        // $count = Blog::where( 'id', $id )->count();
        return view( 'pages.admin.blogs.index', compact( 'blogList' ) );
    }

    /**
    * Show the
    *  form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function create() {
        return view( 'pages.admin.blogs.create' );

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
            'title'=>'required',
        ] );
        $data = array(
            'name'=>$request->name,
            'slug'=>$request->name.'-',
            'title'=>$request->title,

        );
        $create = Blog::create( $data );
        return redirect()->route( 'blogs.index' );
    }

    /**
    * Display the specified resource.
    *
    * @param  \App\Models\Blog  $blog
    * @return \Illuminate\Http\Response
    */

    public function show( Request $request, $id ) {
        $links = Blog::where( 'id', $id )->get();
        return view( 'pages.admin.blogs.blogPage', compact( 'links' ) );

    }

    public function pages( Blog $blog ) {
        $pages = Blog::all();
        return view( 'pages.admin.blogs.blogPage', compact( 'pages' ) );
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Models\Blog  $blog
    * @return \Illuminate\Http\Response
    */

    public function edit( $id, Request $request ) {
        $blog = Blog::findOrFail( $id );
        return view( 'pages.admin.blogs.edit', compact( 'blog' ) );
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Models\Blog  $blog
    * @return \Illuminate\Http\Response
    */

    public function update( Request $request, $id ) {
        $request->validate( [
            'name'=>'required',
            'title'=>'required',
        ] );
        $data = array(
            'name'=>$request->name,
            'slug'=>$request->slug.'-',
            'title'=>$request->title,
        );
        $blog = Blog::find( $id );
        $create = Blog::where( 'id', $id )->update( $data );
        return redirect()->route( 'blogs.index' );

    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Models\Blog  $blog
    * @return \Illuminate\Http\Response
    */

    public function destroy( Blog $blog, Request $request ) {
        $id = $request->id;
        $blog->delete();
        return redirect()->route( 'blogs.index' );
    }
    // public static function blogs() {
    //     $blog = Blog::select( 'name', 'title' )->get();
    //     return $blog;
    // }
}
