<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\UserAddRequest;
use App\Http\Controllers\Controller;
use App\Models\User;
use DateTime;
class UserController extends Controller
{
    public function getUserAdd(){
    	return view('admin.module.user.add');
    }
     public function postUserAdd(UserAddRequest $request){
     	$user = new User;
     	$user->username = $request->txtUser;
     	$user->password = bcrypt($request->txtPass);
     	$user->level = $request->rdoLevel;
     	$user->created_at = new DateTime();
     	$user->save();
     	return redirect()-> route('getUserList')->with(['flash_level'=>'result_msg','flash_message'=>'Thêm Thanh Vien Thành Công']);

    	
    }
    public function getUserList(){
        $data = User::select('id','username','level')->get()->toArray();
    	return view('admin.module.user.list',['data'=>$data]);
    }
}
