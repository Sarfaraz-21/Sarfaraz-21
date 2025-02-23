<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Routes extends Controller
{
    //
    function get() {
        // return "Hello from get method";
        return view('route');
    }
}
