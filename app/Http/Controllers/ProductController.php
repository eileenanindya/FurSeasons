<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Profile;
use Session;
use Stripe;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('productcatalog', compact('products'));
    }

    public function product_details($id){
        $products = Product::find($id);
        return view('detailproduct', compact('products'));
    }

    public function add_cart(Request $request, $id){
        if(Auth::id()){
            // return redirect()->back();
            $user = Auth::user();
            $products = Product::find($id);
            $cart = new cart;
            $cart->user_id = $user->id;
            $cart->name = $user->name;
            $cart->email = $user->email;
            $cart->product_id = $products->id;
            $cart->product_name = $products->product_name;
            $cart->product_price = $products->product_price;
            $cart->product_pic = $products->product_pic;
            $cart->product_quantity = $request->product_quantity;
            $cart->save();

            $user_id = Auth::id();
            $cart_items = Cart::where('user_id', $user_id)->sum('product_quantity');
            Session::put('cart_count', $cart_items);
            return redirect()->back();
            
        }
        else{
            return redirect('login');
        }
    }

    public function cart(){

        if(Auth::id()){
             $id = Auth::user()->id;
            $cart = Cart::where('user_id', '=', $id)->get();
            $totalprice = 0;
            $totalitems = 0;
            foreach ($cart as $item) {
                $totalprice += $item->product_price * $item->product_quantity;
                $totalitems += $item->product_quantity;
            }
            Session::put('cart_count', $totalitems);
            return view('cart', compact('cart', 'totalprice'));
        }
        else{
            return redirect('login');
        }
    }

    public function remove_cart($id){
        $cart = Cart::find($id);
        $cart->delete();
        $user_id = Auth::id();
        $cart_items = Cart::where('user_id', $user_id)->sum('product_quantity');
        Session::put('cart_count', $cart_items);
        return redirect()->back();
    }
       
    public function showCheckout()
    {
        $cart = Cart::all(); // Or however you retrieve your cart data
        $user = Auth::user(); // Example of another variable to pass to the view
        $totalquantity = $cart->sum('product_quantity'); // Example of calculating the total price

        return view('checkout', compact('cart', 'user', 'totalquantity'));
    }

    public function cod_order(){
        $user = Auth::user();
        // $profile = Profile::where('id', $user->id)->first();

        if (!$user || !$user->phone_number || !$user->address) {
            return redirect()->back()->with('error', 'Please enter your phone number and address first.');
        }

        $userid = $user->id;
        $data = Cart::where('user_id', '=', $userid)->get();
        $totalprice = 0;
        foreach ($data as $item) {
            $totalprice += $item->product_price * $item->product_quantity;
        }
        foreach($data as $data){
            $order = new order;
            $order->order_date = today();
            $order->name = $data->name;
            $order->email = $data->email;
            $order->phone_number = $user->phone_number;
            $order->address = $user->address;
            $order->user_id = $data->user_id;

            $order->product_name = $data->product_name;
            $order->product_quantity = $data->product_quantity;
            $order->product_price = $data->product_price;
            $order->product_pic = $data->product_pic;
            $order->product_id = $data->product_id;
            $order->total_price = $totalprice;

            $order->payment_status = 'Cash On Delivery';
            $order->save();

            $cart_id = $data->id;
            $cart = cart::find($cart_id);
            $cart->delete();
        }
        return redirect()->route('summary')->with('success', 'Order placed successfully.');
    }

    public function summary()
    {
        return view('orderend');
    }

    public function stripe($totalprice){
        return view('stripe', compact('totalprice'));
    }

    public function stripePost(Request $request)
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
    
        Stripe\Charge::create ([
                "amount" => 100 * 100,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "Test payment from itsolutionstuff.com." 
        ]);

        $user = Auth::user();
        // $user = Profile::where('id', $user->id)->first();

        if (!$user || !$user->phone_number || !$user->address) {
            return redirect()->back()->with('error', 'Please enter your phone number and address first.');
        }

        $userid = $user->id;
        $data = Cart::where('user_id', '=', $userid)->get();
        $totalprice = 0;
        foreach ($data as $item) {
            $totalprice += $item->product_price * $item->product_quantity;
        }
        foreach($data as $data){
            $order = new order;
            $order->name = $data->name;
            $order->email = $data->email;
            $order->phone_number = $user->phone_number;
            $order->address = $user->address;
            $order->user_id = $data->user_id;

            $order->product_name = $data->product_name;
            $order->product_quantity = $data->product_quantity;
            $order->product_price = $data->product_price;
            $order->product_pic = $data->product_pic;
            $order->product_id = $data->product_id;
            $order->total_price = $totalprice;

            $order->payment_status = 'Paid';
            $order->save();

            $cart_id = $data->id;
            $cart = cart::find($cart_id);
            $cart->delete();
        }
      
        Session::flash('success', 'Payment successful!');
              
        return redirect()->route('summary');
    }

}
