<?php

namespace App\Http\Controllers;

use App\Mail\WelcomeEmail;
use Illuminate\Support\Facades\Mail;
use App\Models\Category;
use App\Models\Product;


use Illuminate\Http\Request;

class HomeController extends Controller
{
    Public function welcome(){
        $category = Category::all();
        return view('welcome' ,compact('category'));
    }

    public function index($name){
        $product = Product::where('category',$name)->get();
        return view('index',compact('product'));
    }

    public function mail(){
        $to = "laibaumer008@gmail.com";
        MAIL::to($to)->send(new WelcomeEmail);
    }
}
