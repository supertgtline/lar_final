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
        $data = Cate::select('id','name','parent_id')->get()->toArray();
        
    	return view('admin.module.category.add',['dataCate' => $data]);
    }public function postCateAdd(CateAddRequest $request){
    	$cate = new Cate;
        $cate->name = $request->txtCateName;
        $cate->slug = str_slug($request->txtCateName,"-");
        $cate->parent_id = $request->sltCate;
        $cate->created_at = new DateTime();
        $cate->save();
        return redirect()-> route('getCateList')->with(['flash_level'=>'result_msg','flash_message'=>'Thêm Danh Mục Thành Công']);
    }
    public function getCateList(){
        $data = Cate::select('id','name','parent_id')->get()->toArray();
    	return view('admin.module.category.list',['dataListCate' => $data]);
    }
}
