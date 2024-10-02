<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class firstcontroller extends Controller
{
   public function index(){
    return "product page";
   }

   public function namefetch($name){
    return $name;
   }

   function details(){
      $username="LRA";
      $address="Ahmedabad";
      $email = "<b>happy@gmail.com</b>";
      $sports = ["cricket","badminton","tennis","hockey","kho-kho","TT","football","Kabbdi","BascketBall","vollyball"];

      // return view('first')->with('username',$username);


      // return view('first')->with(['name'=>$username,'address'=>$address,'email'=>$email]);

      return view('first',compact('username','address','email','sports'));


   }
   
}
