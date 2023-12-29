<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admession;

class AdmessionController extends Controller
{
    public function create(){
        return view('admessions');
    }

    public function store(Request $request){
        //validate part
        $request->validate([
            'name'=>'required',
            'fname'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'mark'=>'required',
            'percentage'=>'required',
            'class'=>'required',
            'image'=>'required|mimes:png,jpg,jpeg|max:100000',
            'address'=>'required'

        ]);
        //upload image
        $imageName=time().'.'.$request->image->extension();
        $request->image->move(public_path('DMC/images'), $imageName);

        $admession= new Admession;
        $admession->image=$imageName;
        $admession->name=$request->name;
        $admession->fname=$request->fname;
        $admession->email=$request->email;
        $admession->phone=$request->phone;
        $admession->mark=$request->mark;
        $admession->percentage=$request->percentage;
        $admession->class=$request->class;
        $admession->address=$request->address;
        $admession->save();
        return back()->withSuccess('Submit Successfully !!!!');
    }

    //data at admin side of admession submitted form
    function show(){
        $data=Admession::all();
        return view('admin.admessionSubmittedForm',compact('data'));
    }
}
