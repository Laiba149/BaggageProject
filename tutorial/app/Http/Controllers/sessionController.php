<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\session;

class sessionController extends Controller
{
    public function form(){
        return view('session.form');
    }
    public function store(Request $request){
        $data = session('data',[]);
        $id = count($data)+1;
        $data[$id] = [
            'id' => $id,
            'name'=>$request->name,
            'class'=>$request->class,
            'phone'=>$request->phone,

        ];
        session(['data'=>$data]);
        return redirect()->route('session.show');
    }
    public function show(){
        $data = session('data',[]);
        return view('session.show',compact('data'));
    }
    public function edit($id){
        $data = session('data',[]);
        $data = $data[$id];
        return view('session.edit',compact('data'));
    }
    public function update(Request $request,$id){
        $data = session('data',[]);
        $data[$id] = [
            'id' => $id,
            'name'=>$request->name,
            'class'=>$request->class,
            'phone'=>$request->phone,

        ];
        session(['data'=>$data]);
        return redirect()->route('session.show');
    }
    public function delete($id){
        $data = session('data',[]);
        unset($data[$id]);
          session(['data'=>$data]);
        return redirect()->route('session.show');
    }

}
