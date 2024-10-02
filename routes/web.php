<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mainlayoutdemo;
use App\Http\Controllers\firstcontroller;
use App\Http\Controllers\customerController;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/product',function(){
//     return "products page";
// });

// Route::get('/course/php',function(){
//     return "course php page";
// });

//dynamic parameter
// Route::get('/product/{name}',function($name){
//     return "dynamic ".$name;
// });

// Route::get('/course/php/{id}/{address}',function($id,$add){
//     return "ID = ".$id."<BR> Address = ".$add;
// })->where('id','[\d]+')->whereAlpha('address');


// Route::redirect('login', 'logout', 301);

// Route::fallback(function(){
//     return "error";
// });

/////////////controllers-///////////

// Route::get('/product',[firstcontroller::class,'index']);
// Route::get('/product/details',[firstcontroller::class,'details']);
// Route::get('/product/{name}',[firstcontroller::class,'namefetch']);


Route::get('/',[mainlayoutdemo::class,'index']);
Route::get('/about',[mainlayoutdemo::class,'aboutus']);
Route::get('/products',[mainlayoutdemo::class,'products']);

Route::get('/customer',[customerController::class,'index']);
Route::get('/customer/add',[customerController::class,'create']);
Route::post('/customer/add',[customerController::class,'add']);