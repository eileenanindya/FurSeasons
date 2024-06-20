<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
use App\Models\Posts;
use Illuminate\Support\Facades\DB;  

class AdminController extends Controller
{

    public function main()
    {
        $totalProducts = Product::count();
        $totalRevenue = DB::table(DB::raw('(SELECT DISTINCT user_id, SUM(total_price) AS total_price FROM orders GROUP BY user_id, id) AS final_orders'))
                            ->selectRaw('SUM(total_price) as total_revenue')
                            ->first();
        $totalRevenue = $totalRevenue->total_revenue ?? 0;
        $formattedRevenue = number_format($totalRevenue, 2, '.', ',');
        $totalProfit = DB::table('products')
                     ->selectRaw('SUM(product_price - product_cogs) as total_profit')
                     ->first();
        $totalProfit = $totalProfit->total_profit ?? 0;
        $formattedProfit = number_format($totalProfit, 2, '.', ',');
        $totalOrders = Order::count();

        return view('admin.home', compact('totalProducts', 'totalRevenue', 'totalOrders', 'totalProfit'));
    }

    public function view_product(){
        return view('admin.product');
    }

    public function add_product(Request $request){
        $product = new product;
        $product->product_name = $request->product_name;
        $product->product_cogs = $request->product_cogs;
        $product->product_price = $request->product_price;
        $product->product_desc = $request->product_desc;
        $product->product_stock = $request->product_stock;
        $product_pic = $request->product_pic;
        $picname = time().'.'.$request->product_pic->getClientOriginalExtension();
        $request->product_pic->move(public_path('product'), $picname);
        $product->product_pic = $picname;
        $product->save();

        return redirect()->back()->with('message', 'Product Added Successfully');
    }

    public function show_product(){
        $product = Product::all();
        return view('admin.showproduct', compact('product'));
    }

    public function delete_product($id){
        $product = Product::find($id);
        $product->delete();
        return redirect()->back()->with('message', 'Product Deleted Successfully');
    }

    public function edit_product($id){
        $product = Product::find($id);
        return view('admin.editproduct', compact('product'));
    }
    
    public function edit_product_confirm(Request $request, $id){
        $product = Product::find($id);
        $product->product_name = $request->product_name;
        $product->product_cogs = $request->product_cogs;
        $product->product_price = $request->product_price;
        $product->product_desc = $request->product_desc;
        $product->product_stock = $request->product_stock;
        $product_pic = $request->product_pic;
        $picname = time().'.'.$request->product_pic->getClientOriginalExtension();
        $request->product_pic->move(public_path('product'), $picname);
        $product->product_pic = $picname;
        $product->save();

        return redirect()->back()->with('message', 'Product Edited Successfully');
    }

    public function order(){
        $order = Order::all();
        return view('admin.order', compact('order'));
    }

    public function view_post(){
        return view('admin.post');
    }

    public function add_post(Request $request){
        $posts = new posts;
        $posts->posts_name = $request->posts_name;
        $posts->posts_desc = $request->posts_desc;
        $picname = time().'.'.$request->posts_pic->getClientOriginalExtension();
        $request->posts_pic->move(public_path('posts'), $picname);
        $posts->posts_pic = $picname;
        $posts->save();

        return redirect()->back()->with('message', 'Post Added Successfully');
    }

    public function show_post(){
        $posts = Posts::all();
        return view('admin.showpost', compact('posts'));
    }

    public function delete_post($id){
        $posts = Posts::find($id);
        $posts->delete();
        return redirect()->back()->with('message', 'Post Deleted Successfully');
    }

    public function edit_post($id){
        $posts = Posts::find($id);
        return view('admin.editpost', compact('posts'));
    }
    
    public function edit_post_confirm(Request $request, $id){
        $posts = Posts::find($id);
        $posts->posts_name = $request->posts_name;
        $posts->posts_desc = $request->posts_desc;
        $picname = time().'.'.$request->posts_pic->getClientOriginalExtension();
        $request->posts_pic->move(public_path('posts'), $picname);
        $posts->posts_pic = $picname;
        $posts->save();

        return redirect()->back()->with('message', 'Post Edited Successfully');
    }
}
