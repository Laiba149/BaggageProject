<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    public function form(){
        $category = Category::all();
        return view('product.form',compact('category'));
    }
    public function store(Request $request){
        $product = new Product();
        $product->category = $request->category;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;
        $image = $request->file('image');
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $image->move('images',$imagename);
        $product->image = $imagename;
        $product->save();
        return redirect()->route('product.show');

    }
    public function show(){
        $product = Product::all();
        return view('product.show',compact('product'));
    }
    public function delete($id){
    $product = Product::find($id);
    File::delete('image/'.$product->image);
    $product->delete();
    return redirect()->back();
}
    public function edit($id){
    $product = Product::find($id);
    $category = Category::all();
    return view('product.edit',compact('product','category'));
}
public function update(Request $request,$id){
        $product = Product::find($id);
        $product->category = $request->category;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;
        $image = $request->file('image');
        if($image){
        File::delete('images/'.$product->image);
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $image->move('images',$imagename);
        $product->image = $imagename;
        }
        $product->save();
        return redirect()->route('product.show');
}

}
