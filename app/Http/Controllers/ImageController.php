<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
use Illuminate\Support\Facades\View;

class ImageController extends Controller
{
    //
    function uploadImage(Request $req)
    {
       $path= $req->file('image')->store('img','public');
         $pathArray = \explode('/',$path);
         $imgPath = $pathArray[1];
            $image = new Image;
            $image->path = $imgPath;
         if ($image->save()) {
             return redirect('list-image');
         } else {
             return "Data has not been saved";
         }
    }

    function listImage()
    {
        $images= Image::all();
        return view('display-image',['images'=>$images]);
    }
}
