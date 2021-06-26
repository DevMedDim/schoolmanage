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

    public function StoreUser(Request $Request){
        $validatedData = $Request->validate([
            'email' => 'required|unique:users',
            'name' => 'required',
        ]);

        $data = new User();
        $data->usertype = $Request->usertype;
        $data->name  = $Request->name;
        $data->email = $Request->email;
        $data->password = bcrypt($Request->password);
        $data->save();
        return redirect()->route('user.view');

    }
}
