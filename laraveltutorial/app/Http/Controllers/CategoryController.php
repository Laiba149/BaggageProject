<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function form(){
        return view('category.form');
    }

    public function store(Request $request){
        $category = new category();
        $category->name = $request->name;
        $category->save();
        return redirect()->route('category.show');
        }

        public function show(){
            $category = Category::all();
            return view('category.show',compact('category'));
        }

        public function edit($id)
        {
            $category = Category::find($id);
            return view('category.edit',compact('category'));
        }
        
        public function update(Request $request,$id){
        $category = Category::find($id);
        $category->name = $request->name;
        $category->update();
        return redirect()->route('category.show');
        }

        public function delete($id){
        $category = Category::find($id);
        $category->delete();
        return redirect()->route('category.show');
}
}