<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\production;
use App\Models\cart;
use App\Models\order;
use Session;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    //
    function index(){
    	$data = production::all();

    	return view('production',['productions' =>$data]);
    }

    function detail($id){
    	$data= production::find($id);
    	return view("detail",['product' => $data]);

    }

    function search(Request $req){
    	$data= production::
    	where('name', 'like', '%'.$req->input('query').'%')
    	->get();
    	return view("search",['productions'=>$data]);
    }

    function addtocart(Request $req){
        if($req->session()->has('user'))
        {
            $cart=new cart;
            $cart->user_id=$req->session()->get('user')['id'];
            $cart->product_id=$req->product_id;
            $cart->save();
            return redirect('/ ');
        }
        else
        {
        return redirect("/login");        }
    }

    static function cartItem()
    {
        $userId=Session::get('user')['id'];
        return cart::where('user_id',$userId)->count();
    }

    function cartlist()
    {
        $userId= Session::get('user')['id'];
        $data= DB::table('cart')
        ->join('production','cart.product_id','production.id')
        ->where('cart.user_id',$userId) 
        ->select('production.*' ,'cart.id as cart_id')
        ->get();

        return view("cartlist",['productions'=>$data]);

    }

    function removecart($id)
    {
        cart::destroy($id);
        return redirect('cartlist');
    }

    function ordernow()
    {
         $userId= Session::get('user')['id'];
         $total= $data= DB::table('cart') 
        ->join('production','cart.product_id','production.id')
        ->where('cart.user_id',$userId) 
        ->sum('production.price');

        return view("ordernow",['total'=>$total]);

    }

    function orderplace(Request $req)
    {
        // $userId=Session::get('user')['id'];
        // $allCart=cart::where('user_id',$userId)->get();
        // foreach ($allCart as $cart)
        //  {
        //     $order = new order;
        //     $order->product_id=$cart['product_id'];
        //     $order->user_id=$cart['user_id'];
        //     $order->status="pending";
        //     $order->payment_method=$req->payment;
        //     $order->payment_status="pending";
        //     $order->address=$req->address;
        //     $order->save();
        // }
        return "your order will be delivered soon";
    }

}
