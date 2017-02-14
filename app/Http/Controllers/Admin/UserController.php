<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\UserAddRequest;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function getUserAdd(){
    	return view('admin.module.user.add');
    }
     public function postUserAdd(UserAddRequest $request){
    	
    }
    public function getUserList(){
    	return view('admin.module.user.list');
    }
}
