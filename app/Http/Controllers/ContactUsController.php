<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactUS;

class ContactUsController extends Controller
{
    public function create(){
        return view('contactUs');
    }
    public function store(Request $request){
        //validate part
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'message'=>'required'

        ]);
        //store date
        $contactus= new ContactUs;
        $contactus->name=$request->name;
        $contactus->email=$request->email;
        $contactus->message=$request->message;
        $contactus->save();
        return back()->withSuccess('Your Message Is Register !!!!');
    }
    function show(){
        $data=ContactUs::all();
        return view('admin.contactUS',compact('data'));
    }
    
}
