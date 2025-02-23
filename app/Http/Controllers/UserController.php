<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;

class UserController extends Controller

{
    //
    public function queries()
    {
        // $data= DB::table('users')->get();
        $data = DB::select('select * from users');
        return response()->json($data);
        // return view('users',['users'=>$data]);
        // $data=DB::table('users')->insert(   //inserting data into the table
        //     [
        //         'name'=>'Tony',
        //         'email'=>'tony@gmail.com',
        //         'password'=>'12345'
        //         ]);
        //         if($data)
        //         {
        //             return "Data has been inserted";
        //         }
        //         else
        //         {
        //             return "Data has not been inserted";
        //         }
        // $data=DB::table('users')->where('name','Tony')->update(['name'=>'1234']);
        //  //updating data in the table
        // if($data)
        // {
        //     return "Data has been updated";
        // }
        // else
        // {
        //     return "Data has not been updated";
        // }
        // $data=DB::table('users')->where('name','Tony')->delete(); //deleting data from the table
        // if($data)
        // {
        //     return "Data has been deleted";
        // }
        // else
        // {
        //     return "Data has not been deleted";
        // }

        // $data=DB::table('users')->get(); //fetching data from the table
        // $data=DB::table('users')->where('name','Tony')->get(); //fetching data from the table
        // $data=DB::table('users')->where('name','Tony')->first(); //fetching data from the table
        // $data=DB::table('users')->where('name','Tony')->value('email'); //fetching data from the table
        // $data=DB::table('users')->where('name','Tony')->pluck('email'); //fetching data from the table
        // $data=DB::table('users')->count(); //counting the number of rows in the table
        // $data=DB::table('users')->where('name','Tony')->exists(); //checking if the data exists in the table
        // $data=DB::table('users')->where('name','Tony')->doesntExist(); //checking if the data does not exist in the table
        // $data=DB::table('users')->where('name','Tony')->orWhere('name','Keyur')->get(); //fetching data from the table
        // $data=DB::table('users')->where('name','Tony')->where('email','
        // return $data;

        
        // return view('users',['users'=>$data]);

    }
}
