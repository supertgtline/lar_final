<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CateAddRequest;
use App\Models\Cate;
use DateTime;
class CateController extends Controller
{
    //
    public function getCateAdd(){
    	return view('admin.module.category.add');
    }public function postCateAdd(CateAddRequest $request){
    	$cate = new Cate;
        $cate->name = $request->txtCateName;
        $cate->slug = str_slug($request->txtCateName,"-");
        $cate->parent_id = $request->sltCate;
        $cate->created_at = new DateTime();
        $cate->save();
        return redirect()-> route('getCateList')->with(['flash_level'=>'result_message','flash_message'=>'Thêm Danh Mục Thành Công']);
    }
    public function getCateList(){
    	return view('admin.module.category.list');
    }
}
