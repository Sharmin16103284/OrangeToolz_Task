<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(Auth::id())
        {
            if(Auth::user()->user_type=='0')
            {
                return view('dashboard');
            }else{
                return view('admin.home');
            }
        }
        else{
            return redirect()->back();
        }
        
    }
// view user data
    public function viewUser(){
        // $data['alldata']=User::all();
        $data['alldata']=User::latest()->paginate(5);
        return view('admin.viewUsers',$data); 
    }

    public function updateUserStatus($user_id , $status_code){
        try {
            $updateUser = User::whereId($user_id)->update(['status' =>  $status_code
        ]);

            if($updateUser) {
                return redirect()->back()->with('success' , 'User is blocked');
                // return redirect()->route('admin.home')->with();
            }
            // return redirect()->route('admin.home')->with('error' , 'fail to update user status');
        
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function deleteUser($id)
    {
        User::findOrFail($id)->delete();
        return redirect()->back()->with('success_msg','Successfully Deleted!');
    }
}
