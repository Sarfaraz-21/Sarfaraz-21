<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Upload extends Controller
{
    //
    public function index(Request $request){
        if($request->isMethod('post')){
            $file = $request->file('file');
            $path = $file->store('uploads');
            return $path;
        }
        return view('upload');
    }
   
}
