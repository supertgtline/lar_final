<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\News;

class MainController extends Controller
{
    public function getIndex(){
    	$data = News::with('cate')->orderBy('id','DESC')->get()->toArray();
    	print_r($data);
    	//return view('User.pages.index',["data"=>$data]);
    }
    public function getCate(){
    	return view('User.pages.cate');
    }
    public function getDetail(){
    	return view('User.pages.detail');
    }
}
