<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\checkout;



class BaggageController extends Controller
{
    public function showhome(){
        $category = Category::all();
    return view('baggage.home',compact('category'));
}
    public function showabout(){
    return view('baggage.about');
}
    public function showcollection(){
        $product = Product::get();
    return view('baggage.collection',compact('product'));
}
public function showproducts($name){
        $product = Product::where('category',$name)->get();
    return view('baggage.collection',compact('product'));
}
    public function showcontact(){
    return view('baggage.contact');
}
public function showdropdown($id){
    $product =  Product::find($id);
    return view('baggage.dropdown',compact('product'));
}
public function showcart(){
    $product = session('product',[]);
    return view('baggage.cart',compact('product'));
}

public function addcart(Request $request){
        $product = session('product',[]);
        $id = count($product)+1;
        $product[$id] = [
          'id' => $id,
          'name'=>$request->name,
          'price'=>$request->price,
          'image'=>$request->image,
          'quantity'=>$request->quantity,
        ];
        session(['product'=>$product]);
        return redirect()->route('baggage.cart');
}
public function showcheckout(){
    return view('baggage.checkout');
}
public function storecheckout(Request $request){
      $order = new checkout();
      $order->name = $request->name;
      $order->email = $request->email;
      $order->phone = $request->phone;
      $order->location = $request->location;
      
        $product = session('product',[]);
$order->order = json_encode($product);
$order->save();
        return redirect()->route('baggage.cart');
}
public function store(){
        $checkout = checkout::all();
        return view('baggage.store',compact('checkout'));
    }
    public function showdetail(){
        $checkout = checkout::all();
        return view('baggage.detail',compact('checkout'));
    }
}
