<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    public function form(){
        return view('auth.form');
    }
    public function store(Request $request){
       $user = new user();
       $user->name = $request->name;
       $user->email = $request->email;
       $user->password = $request->password;

       $user->save();
       return redirect()->back();
    }
    public function signup(){
        return view('auth.signup');
    }
    public function register(Request $request){
        $request->validate([
            'name' => 'required',
            'email'=> 'required|email',
            'password'=> 'required|confirmed',
        ]);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();
        return redirect()->route('login');
    }
    public function login(){
        return view('auth.login');

}
public function signin(Request $request){
        $credential = $request->validate([
            'email'=> 'required|email',
            'password'=> 'required',
        ]);
        if(Auth::attempt($credential)){
            return redirect()->route('welcome');
        }
            return redirect()->route('login');
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}