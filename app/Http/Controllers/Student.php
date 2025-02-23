<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Student extends Controller
{
    //
    function getstudent() {
        $students= \App\Models\Student::all();
        return view('students',['students'=>$students]);
    }
}
