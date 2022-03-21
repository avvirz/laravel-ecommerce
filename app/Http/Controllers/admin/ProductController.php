<?php

namespace App\Http\Controllers\admin;
use App\Models\Product;
use App\Models\Category;
use App\Models\Variant;
use Illuminate\Pagination\Paginator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Validator;

class ProductController extends Controller {
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function index( Request $request ) {
        $products = Product::all();
        $variants = Variant::all();

        $search = $request[ 'search' ];
        if ( $search != '' ) {
            $list = Product::where( 'name', 'LIKE', '%'.$search.'%' )->paginate( 4 );
            return view( 'pages.admin.product.index' )->with( 'products', $list )->with( 'variants', $list );

        } else {

            // $products = Product::paginate( 5 );
            // dd( $products );
            return view( 'pages.admin.product.index', compact( 'products', 'variants', ) );

        }
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function create() {

        $categories = Category::all();
        return view( 'pages.admin.product.add', compact( 'categories' ) );
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */

    public function store( Request $request ) {
        $request->validate( [
            'category_id'=> 'required',
            'name'=> 'required',
            'product_name'=>'required',
            'price'=>'required',
            'discount_price'=>'required',
            'available_stock'=>'required',
            'sold_stock'=>'required',
            'description'=>'required',
            'long_description'=>'required',
            'image'=>'required',
            'size'=>'required',
        ] );
        $data = array(
            'category_id'=> $request->category_id,
            'name'=> $request->name,
            'product_name'=>$request->product_name,
            'price'=>$request->price,
            'discount_price'=>$request->discount_price,
            'available_stock'=>$request->available_stock,
            'sold_stock'=>$request->sold_stock,
            'description'=>$request->description,
            'long_description'=>$request->long_description,
        );

        if ( $request->hasFile( 'image' ) ) {
            foreach ( $request->file( 'image' ) as $key => $image ) {
                $path = 'uploads';
                $fileName = $key.date( 'dmY' ).time().'.'.$image->getClientOriginalExtension();
                $image->move( $path, $fileName );
                $imgdata[] = $fileName;
            }
            $data[ 'image' ] = implode( ',', $imgdata );
        }
        $create = Product::create( $data );

        $dataVariant = array(
            'product_id'=>$create->id,
            'size'=>implode( ',', $request->size ),
        );
        $createVariant = Variant::create( $dataVariant );
        return redirect()->route( 'product.index' );
    }

    /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */

    public function show( $id, Request $request ) {

        // $product = Product::findOrFail( $id )->get();
        $product = Product::where( 'id', '=', $id )->get();
        return view( 'pages.admin.product.details', compact( 'product' ) );
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */

    public function edit( $id, Request $request ) {
        // $id = $request->id;
        $product = Product::findOrFail( $id );
        $categories = Category::all();
        // dd( $product );
        $variant = Variant::all();
        // dd( $variant );
        foreach ( $variant as $key => $v ) {
            $size = $v->size;
        }
        // dd( $size );
        $values = explode( ',', $size );
        // dd( $values );
        return view( 'pages.admin.product.edit', compact( 'product', 'categories', 'values' ) );
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */

    public function update( Request $request, $id ) {
        // $id = $request->id;
        $data = array(
            'category_id'=> $request->category_id,
            'name'=> $request->name,
            'product_name'=>$request->product_name,
            'price'=>$request->price,
            'discount_price'=>$request->discount_price,
            'available_stock'=>$request->available_stock,
            'sold_stock'=>$request->sold_stock,
            'description'=>$request->description,
            'long_description'=>$request->long_description,

        );
        if ( $request->hasFile( 'image' ) ) {
            foreach ( $request->file( 'image' ) as $key => $image ) {
                $path = 'uploads';
                $fileName = $key.date( 'dmY' ).time().'.'.$image->getClientOriginalExtension();
                $image->move( $path, $fileName );
                $imgdata[] = $fileName;
            }
            $data[ 'image' ] = implode( ',', $imgdata );
        }

        $product = Product::find( $id );
        $create = Product::where( 'id', $id )->update( $data );
        $dataVariant = array(
            'product_id'=>$id,
            'size'=>implode( ',', $request->size ),
        );

        $createVariant = Variant::where( 'product_id', $id )->update( $dataVariant );
        return redirect()->route( 'product.index' );
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */

    public function destroy( Request $request, Product $product ) {

        $id = $request->id;

        // $product = Product::find( $id );
        $product->delete();
        return redirect()->route( 'product.index' );
    }
}