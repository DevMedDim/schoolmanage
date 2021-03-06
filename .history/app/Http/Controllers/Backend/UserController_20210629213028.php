<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
    public function ViewUser(){
        $data['allData'] = User::all();
        return view('backend.user.view_user',$data);
    }
    public function AddUser(){
        return view('backend.user.add_user');
    }

    public function StoreUser(Request $request){
        $validatedData = $request->validate([
            'email' => 'required|unique:users',
            'name' => 'required',
        ]);

        $data = new User();
        $data->usertype = $request->usertype;
        $data->name  = $request->name;
        $data->email = $request->email;
        $data->password = bcrypt($request->password);
        $data->save();

        $notification = array(
            'message' => 'User added successfully',
            'alert-type' => 'success'
        )
        return redirect()->route('user.view')->with($notification);

    }
}
