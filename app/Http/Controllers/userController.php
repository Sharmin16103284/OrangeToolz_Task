<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class userController extends Controller
{
      public function editUser($eid)
      {
            // return view('admin.editUser');
            $edits = User::findOrFail($eid);
    	      return view('admin.editUser', compact('edits'));
      }


      // update user
      function updateUser(Request $request)
    {
         // validation
         $request->validate([
            'name' => 'required|max:255',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:1024',
        ]);

        $updateUser = User::findOrFail($request->id);
        $updateUser->name = $request-> name;
        $updateUser->email = $request-> email;

        $updateUser->save();

      //   return redirect()->route('admin.editUser')->with('success_msg','Successfully Updated!');
      return redirect()->back()->with('success_msg','Successfully Updated!');
      // if($updateUser){
      //       alert('Successfully Updated!');
      // }
      
    } 

    
}
