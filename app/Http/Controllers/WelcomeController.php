<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;

class WelcomeController extends Controller {
    /**
    * Show the application dashboard.
    *
    * @return \Illuminate\Http\Response
    */

    public function welcome() {
        $categories = Category::wherenull( 'category_id' )->get();
        $product = Product::paginate( 8 );
        $productLimit = Product::orderBy( 'id', 'desc' )->limit( 4 )->get();

        return view( 'welcome' )->with( 'categories', $categories )->with( 'products', $product )->with( 'productLimit', $productLimit);
    }
}
