<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mainlayoutdemo extends Controller
{
    public function index(){ return view('index'); //index.blade.php
    }
    
    public function aboutus(){return view('about');}
    public function products(){
        $products = array(
            "pro101" => array("id"=>1,"name"=>"product1","category"=>"cat1","price"=>2000,"stock"=>20,"image"=>"images/a.jpg"),
            "pro102" => array("id"=>2,"name"=>"product2","category"=>"cat2","price"=>1000,"stock"=>100,"image"=>"images/b.jpg"),
             "pro103" => array("id"=>3,"name"=>"product3","category"=>"cat3","price"=>100,"stock"=>0,"image"=>"images/c.jpeg"),
              "pro104" => array("id"=>4,"name"=>"product4","category"=>"cat4","price"=>200,"stock"=>1,"image"=>"images/d.jpg")
        )  ;    
        return view('products',compact('products'));
    }
}
