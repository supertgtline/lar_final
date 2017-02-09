<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use App\User;
class LoginController extends Controller
{
    public function getLogin(){

    	return view('admin.login.login');
    }
    public function postLogin(LoginRequest $request)
    {
    	$login = ['username' => $request->txtUser,
    			 'password' => $request->txtPass,
    			 'level' => 1
    			 ];
    	if (Auth::attempt($login)) {
            // Authentication passed...
            return redirect()->route('admin');
        }
        else {
        	return redirect()->back();
        }

    }
}
