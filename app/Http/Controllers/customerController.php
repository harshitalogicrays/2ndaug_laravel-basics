<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class customerController extends Controller
{
    public function index(){
        return view('customer.index');
    }
    public function create(){
        return view('customer.add');
    }
}
