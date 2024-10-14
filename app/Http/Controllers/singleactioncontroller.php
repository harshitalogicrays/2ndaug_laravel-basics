<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class singleactioncontroller extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    { //logic
        return "single action controller";
    }
}
