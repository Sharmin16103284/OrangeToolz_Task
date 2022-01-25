<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Files;
use Excel;
use DB;
use App\Imports\DataImport;

class fileController extends Controller
{
    public function uploadFile()
    {
        return view('userFile');
    }

    Public function insertFile(Request $request) 
    {
        Excel::import(new DataImport, $request->file);
        return back();
    }

    // show data table
    Public function viewData()
    {
        $data['alldata']=Files::latest()->paginate(10);
        return view('data-show',$data); 
    }

}
