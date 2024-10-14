<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    public function index(){
            return view('fileupload');
    }

    function uploadfile(Request $request){
        // dd($request->all());
        // return $request->file('image1');
        // if($request->file('image1')){
        //     $filename = time()."dummy.".$request->file('image1')->getClientOriginalExtension();
        //     $request->file('image1')->storeAs('uploads',$filename); //storage/app/uploads
        // }

        //public folder - 
        $file = $request->file('image1');
        if($request->hasFile('image1')){
            $filename =time()."dummy.".$file->getClientOriginalExtension(); 
            $file->move('uploads',$filename); //public /uploads 
            return redirect('/')->with('message','file uploaded successfully');
        }

    }
}
