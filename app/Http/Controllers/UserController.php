<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\User;
use App\Models\Product;
use App\Models\Category;
use App\Models\Order;
use DB;
use Carbon\Carbon;
use Khill\Lavacharts\Lavacharts;

class UserController extends Controller {
    /**
    * Create a new controller instance.
    *
    * @return void
    */

    public function __construct() {
        $this->middleware( 'auth' );
    }

    /**
    * Show the application dashboard.
    *
    * @return \Illuminate\Http\Response
    */

    public function index() {
        $user = Auth::user();

        if ( $user->isAdmin() ) {
            //users count
            $user = User::all();
            $users = count( $user );
            //product count
            $product = Product::all();
            $products = count( $product );
            // categories count
            $category = Category::select( 'name' )->whereNull( 'category_id' )->get();
            $categorys = count( $category );
            //orders count
            $orders = Order::where( 'order_status', 'pending' )->get();
            $order = count( $orders );
            //piechart using lavachart
            $lava = new Lavacharts;
            $pieChart = $lava->DataTable();
            $pieChart->addStringColumn( 'Reasons' )
            ->addNumberColumn( 'Percent' );
            $countProducts = DB::table( 'products' )
            ->select( 'products.category_id', DB::raw( 'COUNT(category_id) as count' ) )
            ->groupBy( 'category_id' )
            ->orderBy( 'category_id' )
            ->get();
            foreach ( $countProducts as $product ) {
                $id = $product->category_id;
                $categoryData = Category::select( 'id', 'name' )->where( 'id', $id )->get();
                $counts = $product->count;
                foreach ( $categoryData as $data ) {
                    $pieChart->addRow( [ $data->name, $counts ] );
                }
            }
            $lava->PieChart( 'products', $pieChart, [
                'title' => 'Products',
                'is3D'   => true,
                'height' =>'400',
                'pieSliceText'=>'label'
            ] );

            return view( 'pages.admin.home', compact( 'users', 'products', 'categorys', 'order', 'lava' ) );
        }
        return redirect( '/' );
    }
}