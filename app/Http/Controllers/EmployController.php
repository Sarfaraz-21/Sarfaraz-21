<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\employ;

class EmployController extends Controller
{
    //
    function insert(Request $req)
    {
        $employ = new employ;
        $employ->name = $req->name;
        $employ->email = $req->email;
        $employ->phone = $req->phone;
        $employ->save();
        return redirect('list');

        // if($req ) {
        //     return "Data Inserted Successfully";
        // } else {
        //     return "Data Insertion Failed";
        // }
    }

    // function list()
    // {
    //     $data = employ::all();
    //     return view('Employ-list',['employs'=>$data]);
    //     // return view('Employ-list');
    // }

    function list()
    {
        $data = employ::paginate(5);

        return view('Employ-list',['employs'=>$data]);
    }

    function delete($id)
    {
        $data = employ::find($id);
        $data->delete();
        return redirect('list');
    }

    function showData($id)
    {
        $data = employ::find($id);
        return view('Employ-edit',['data'=>$data]);
    }

    function update(Request $req)
    {
        $data = employ::find($req->id);
        $data->name = $req->name;
        $data->email = $req->email;
        $data->phone = $req->phone;
        $data->save();
        return redirect('list');
        
    }

    // function search(Request $req)
    // {
    //    $data = employ::where('name','like','%'.$req->search.'%')->get();
    //    return view('Employ-list',['employs'=>$data, 'search'=>$req->search]);
    // }

    function search(Request $req)
{
    $data = employ::where('name', 'like', '%' . $req->search . '%')->paginate(5);
    return view('Employ-list', ['employs' => $data, 'search' => $req->search]);
}

    function deleteMultiple(Request $req)
    {
        $ids = $req->ids;
        employ::destroy($ids);
        return redirect('list');
    }
}
