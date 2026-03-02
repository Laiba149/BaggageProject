<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;


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

}
