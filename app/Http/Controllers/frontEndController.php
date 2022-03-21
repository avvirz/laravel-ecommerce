<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Order;
use App\Models\Product;
use App\Models\Variant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// use Barryvdh\DomPDF\Facade\PDF;
use PDF;

class frontEndController extends Controller {

    public function getProductDetail( $id ) {
        $productData = Product::find( $id );
        $variants = Variant::select( 'product_id', 'size' )->where( 'product_id', $id )->get();
        $product = Product::all();
        //array result and get only size in that array
        foreach ( $variants as $key => $val ) {
            $size = $val->size;
        }
        $image = $productData->image;
        $img = explode( ',', $image );
        $length = count( $img );
        // dd( $length );
        $variant = explode( ',', $size );
        return view( 'productDetails' )
        ->with( 'productData', $productData )
        ->with( 'variantData', $variant )
        ->with( 'product', $product )
        ->with( 'img', $img )
        ->with( 'length', $length );
    }

    public function getProductsById( Request $request ) {
        $val = $request->sort;
        $id = $request->id;
        $price = $request->price;
        $data = $request->data;

        if ( $id ) {
            if ( $val == 'low' ) {
                $products = Product::orderby( 'discount_price', 'asc' )->where( 'category_id', $id )->select( '*' )->get();
                $count = count( $products );
                if ( $count == 0 ) {
                    $request->session()->flash( 'error', 'Oops Data Not Found' );
                }
                return view( 'products', compact( 'products', 'count' ) );
            } else if ( $val == 'high' ) {
                $products = Product::orderby( 'discount_price', 'desc' )->where( 'category_id', $id )->select( '*' )->get();
                $count = count( $products );
                if ( $count == 0 ) {
                    $request->session()->flash( 'error', 'Oops Data Not Found' );
                }
                return view( 'products', compact( 'products', 'count' ) );
            } else if ( $price ) {

                $amountArray = explode( ' - ', $price );
                $min = trim( $amountArray[ 0 ], '₹' );
                $max = trim( $amountArray[ 1 ], '₹' );
                $products = Product::where( 'category_id', $id )->whereBetween( 'discount_price', [ $min, $max ] )->select( '*' )->get();
                $count = count( $products );
                if ( $count == 0 ) {
                    $request->session()->flash( 'error', 'Oops Data Not Found' );
                }
                return view( 'products', compact( 'products', 'count' ) );
            } else {
                $products = Product::where( 'category_id', $id )->paginate( 9 );
                $products = Product::where( 'category_id', $id )->paginate( 9 );
                $count = count( $products );
                if ( $count == 0 ) {
                    $request->session()->flash( 'error', 'Oops Data Not Found' );
                }
                return view( 'products', compact( 'products', 'count' ) );
            }
        } else {
            if ( $val == 'low' ) {
                $products = Product::orderby( 'discount_price', 'asc' )->select( '*' )->get();
                $count = count( $products );
                if ( $count == 0 ) {
                    $request->session()->flash( 'error', 'Oops Data Not Found' );
                }
                return view( 'products', compact( 'products', 'count' ) );
            } else if ( $val == 'high' ) {
                $products = Product::orderby( 'discount_price', 'desc' )->select( '*' )->get();
                $count = count( $products );
                if ( $count == 0 ) {
                    $request->session()->flash( 'error', 'Oops Data Not Found' );
                }
                return view( 'products', compact( 'products', 'count' ) );
            } else if ( $price ) {
                $amountArray = explode( ' - ', $price );
                $min = trim( $amountArray[ 0 ], '₹' );
                $max = trim( $amountArray[ 1 ], '₹' );
                $products = Product::whereBetween( 'discount_price', [ $min, $max ] )->select( '*' )->get();
                $count = count( $products );
                if ( $count == 0 ) {
                    $request->session()->flash( 'error', 'Oops Data Not Found' );
                }
                return view( 'products', compact( 'products', 'count' ) );
            } else if ( $data ) {
                $products = Product::Where( 'name', 'like', '%' . $data . '%' )->select( '*' )->get();
                $count = count( $products );
                if ( $count == 0 ) {
                    $request->session()->flash( 'error', 'Oops Data Not Found' );
                }
                return view( 'products', compact( 'products', 'count' ) );
            }
            $products = Product::paginate( 9 );
            $count = count( $products );
            return view( 'products', compact( 'products', 'count' ) );
        }
    }

    public function OrderDetails() {
        $user = Auth::user()->id;
        $orderData = Order::select( 'orders.id', 'orders.quantity', 'products.product_name', 'products.price', 'products.image', 'orders.payment_mode', 'orders.grand_total', 'orders.order_status' )
        ->join( 'products', 'orders.product_id', '=', 'products.id' )
        ->where( 'user_id', $user )
        ->paginate( 4 );
        // dd( $orderData );

        if ( !$orderData->isEmpty() ) {
            $address = Address::where( 'user_id', $user )->first();
            return view( 'OrderDetails' )->with( 'orderData', $orderData )->with( 'address', $address );
        } else {
            session()->flash( 'error', 'No Order Found' );
            return redirect( route( 'products.getById' ) );
        }

    }

    public function sendmail() {

        Mail::to( 'ravizala2689@gmail.com' )->send( new WelcomeMail() );
        return redirect()->back()->with( 'msg', 'Email sent successfully' ) ;
    }

    public function pdfDownload( $id ) {

        $orders = Order::where( 'id', '=', $id )->first();
        $pdf = PDF::loadView( 'pdfInvoice', compact( 'orders' ) );
        return $pdf->download( 'Order_invoice.pdf' );
    }
}