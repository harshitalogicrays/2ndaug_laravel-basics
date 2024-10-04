<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Rules\uppercase;
use Illuminate\Http\Request;

class customerController extends Controller
{
    public function index(){
        return view('customer.index');
    }
    public function create(){
        return view('customer.add');
    }
    public function add(Request $request){
        // return $request->all();
        // return $request->input('email');
        // return $request->email;
        // return $request['email'];
      
        // if($request->isMethod('post')){
        //     return $request['email'];
        // }

        // if($request->has('email')){
        //     return $request->name;
        // }

        // return $request->only(['name','email']);

        // return $request->except('_token','password','password_confirmation');

        //  if($request->has(['email','username'])){
        //     return $request->name;
        // }

        // if($request->hasAny(['email','username'])){
        //     return $request->name;
        // }
        //  dd($request->all());
        $request->validate([
            'name'=>['required',new uppercase],
            'email'=>['required',function($attribute,$value,$fail){
                if(!preg_match("/^([\w\.]+)\@([\w]+)\.([a-zA-Z]{3})$/",$value)){
                    $fail("Invalid :attribute");
                } }],
            'password'=>['required','min:5','max:15'],
            'cpassword'=>['required','same:password'],
            'mobile'=>'required',
            'gender'=>'required'  ]);
        
        //insert into customers table
        $customer = new Customer();
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->dob = $request->dob;
        $customer->mobile = $request->mobile;
        $customer->password = $request->password;
        $customer->gender = $request->gender;
        $customer->address = $request->address;
        if($customer->save()){
            return redirect('/customer')->with('message','customer added');
        }
        
    }



}


//'password'=>['required','min:5','max:15','confirmed']