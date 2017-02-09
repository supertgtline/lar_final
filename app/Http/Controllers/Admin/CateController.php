<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class CateController extends Controller
{
    //
    public function getAdd(){
    	return view('admin.module.category.add');
    }
}
