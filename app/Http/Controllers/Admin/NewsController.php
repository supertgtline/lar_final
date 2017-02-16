<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\NewsAddRequest;

class NewsController extends Controller
{
    public function getNewsAdd(){
    	return view('admin.module.news.add');

    }
    public function postNewsAdd(NewsAddRequest $request){
    	
    }
    public function getNewsList(){
    	return view('admin.module.news.list');
    	
    }
}
