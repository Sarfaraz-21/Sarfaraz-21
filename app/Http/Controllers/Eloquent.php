<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class Eloquent extends Controller
{
    //
    function user()
    {   
        // $resonse = User::where('email','tony@gmail.com')->get();
        //  $resonse= User::insert([
        //     'name'=>'Key',
        //     'email'=>'Key@gmail.com',
        //     'password'=>'3456'
        // ]);
        // if($resonse){
        //     return "Data Inserted";
        // }
        // else{
        //     return "Data not Inserted";
        // }

        // $resonse = User::where('name','1234')->update(['name'=>'Tony']);
        // if($resonse){
        //         return "Data Updated";
        //     }
        //     else{
        //             return "Data not Updated";
        //         }
                // $response = User::where('name','Keyur')->delete();
                // if($response){
                //         return "Data Deleted";
                //     }
                //     else{
                //             return "Data not Deleted";
                //         }
                        
                // $resonse= User::insert(
                    //     ['name'=>'Sahil',
                    //     'email'=>'sahil@gmail.com',
                    //     'password'=>'1234',]);
                    //     if($resonse){
                        //         return "Data Inserted";
                        //     }
                        //     else{
                            //         return "Data not Inserted";
                            //     }
                            
                            // $resonse = User::all()->take(2);
                            // $resonse = User::all()->skip(2)->take(2);
                            // $resonse = User::all()->first();
                            // $resonse = User::all()->last();
                            // $resonse = User::get();
                            // $resonse = User::where('name','Tony')->get();
                            // $resonse = User::where('name','Tony')->first();
                            // $resonse = User::where('name','Tony')->value('email');
                            // $resonse = User::where('name','Tony')->pluck('email');
                            // $resonse = User::where('name','Tony')->count();
                            // $resonse = [$resonse];
                            // $resonse = User::where('name','Tony')->exists();
                            // $resonse = User::where('name','Tony')->doesntExist();
                            // $resonse = User::where('name','Tony')->orWhere('name','Keyur')->get();
                            // $resonse = User::where('name','Tony')->where('email','
                            

        $resonse = User::all();
        return view('eloquent',['eloquent'=>$resonse]);
    }

}
