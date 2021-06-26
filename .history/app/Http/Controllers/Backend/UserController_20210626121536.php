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

    public function UserStore(){

    }
}
