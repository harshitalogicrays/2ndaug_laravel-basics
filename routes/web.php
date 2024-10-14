<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mainlayoutdemo;
use App\Http\Controllers\firstcontroller;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\customerController;
use App\Http\Controllers\FileUploadController;
use App\Http\Controllers\singleactioncontroller;

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
Route::get('/about',[mainlayoutdemo::class,'aboutus'])->middleware('routem');
Route::get('/products',[mainlayoutdemo::class,'products']);



// Route::get('/customer',[customerController::class,'index']);
// Route::get('/customer/add',[customerController::class,'create']);
// Route::post('/customer/add',[customerController::class,'add']);
// Route::get('/customer/delete/{id}',[customerController::class,'delete']);
// Route::get('/customer/edit/{id}',[customerController::class,'edit']);
// Route::put('/customer/update/{id}',[customerController::class,'update']);


// Route::controller(customerController::class)->group(function(){
//     Route::get('/customer','index');
//     Route::get('/customer/add','create');
//     Route::post('/customer/add','add');
//     Route::get('/customer/delete/{id}','delete');
//     Route::get('/customer/edit/{id}','edit');
//     Route::put('/customer/update/{id}','update');
// });

Route::controller(customerController::class)->group(function(){
    Route::prefix('/customer')->group(function(){
        Route::get('/','index');
        Route::get('/add','create');
        Route::post('/add','add');
        Route::get('/delete/{id}','delete');
        Route::get('/edit/{id}','edit');
        Route::put('/update/{id}','update');
        Route::get('/trash','trash');
        Route::get('/restore/{id}','restore');
        Route::get('/fdelete/{id}','forcedelete');
        Route::get('/search','index');
    });
});


Route::get('/fileupload',[FileUploadController::class,'index'])->name('file.upload');
Route::post('/fileupload',[FileUploadController::class,'uploadfile'])->name('uploaded');

Route::get('/single',singleactioncontroller::class);

Route::resource('photos', PhotoController::class);
