<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\File;


use Illuminate\Http\Request;

class ProductController extends Controller
{
     public function form(){
        $category = Category::all();
        return view('product.form',compact('category'));
        }

    public function store(Request $request){
        $product = new product;
        $product->category = $request->category;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;
         $image = $request->file('image');
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $image->move('images',$imagename);
        $product->image = $imagename;
        $product->save();
        return redirect()->route('Product.show');
    } 
    public function show(){
        $product = Product::all();
        return view('Product.show',compact('product'));
    }
    public function edit($id){
        $category = category::all();
        $product = product::find($id);
        return view('Product.edit',compact('product','category'));
    }
    public function update(Request $request,$id){
        $product = product::find($id);
        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;
        $image = $request->file('image');
        if($image){
            File::delete('images/'.$product->image);
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move('images',$imageName);
            $product->image = $imageName;
        }
        $product->update();
        return redirect()->route('Product.show');
    }
    public function delete($id){
        $product = product::find($id);
        File::delete('images/'.$product->image);
        $product->delete();
        return redirect()->route('Product.show');
    }

}
