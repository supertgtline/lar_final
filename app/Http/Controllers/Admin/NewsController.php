<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\NewsAddRequest;
use App\Models\Cate;
use App\Models\News;
use Auth,DateTime,File;

class NewsController extends Controller
{
    public function getNewsAdd(){
        $cate = Cate::select('id','name','parent_id')->get()->toArray();
    	return view('admin.module.news.add',['cate' => $cate]);

    }
    public function postNewsAdd(NewsAddRequest $request){
        $news =new  News;
        $file = $request->file('newsImg');
        $news->title =$request->txtTitle;
        $news->alias = str_slug($request->txtTitle,"-");
        $news->author =$request->txtAuthor;
        $news->intro = $request->txtIntro;
        $news->full=$request->txtFull;
        if(strlen($file) > 0){
            $filename = time().'.'.$file->getClientOriginalName();
            $destinationPath = 'public/uploads/news';
            $file->move($destinationPath,$filename);
            $news->image=$filename;
        }
        
        $news->status=$request->rdoPublic;
        $news->category_id=$request->sltCate;
        $news->users_id = Auth::user()->id;
        $news->created_at = new DateTime();
        $news->save();

        return redirect()-> route('getNewsList')->with(['flash_level'=>'result_msg','flash_message'=>'Thêm Tin Tức Thành Công']);

    	
    }
    public function getNewsList(){
        $news = News::select('id','title','author','created_at')->orderBy('id','DESC')->get()->toArray();
       
    	return view('admin.module.news.list',['news'=>$news]);
    	
    }
    public function getNewsDel($id){
        $news = News::findOrFail($id);
        echo public_path()."/uploads/news/".$news->image;
        if(file_exists(public_path()."/uploads/news/".$news->image)){
            File::delete(public_path()."/uploads/news/".$news->image);
        }
         $news->delete();
         return redirect()-> route('getNewsList')->with(['flash_level'=>'result_msg','flash_message'=>'Xoa Tin Tức Thành Công']);
    }
    public function getNewsEdit($id){
        return view('admin.module.news.edit');
        
    }
    public function postNewsEdit($id){
        
    }
}
