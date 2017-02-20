@extends('user.master')
@section('title','Trang Category')
@section('content')
 <h1 style="margin-bottom:10px;color:red">Thể Loại : {!! $cate["name"] !!}</h1>
@foreach($news as $item)
<div class="news">
    <h1>{!! $item["title"] !!}</h1>
    <img src="{!! asset('public/uploads/news/'.$item["image"]) !!}" class="thumbs" />
    <p>{!! $item["intro"] !!}</p>
    <a href=" {!! url('chi-tiet/'.$item["id"].'/'.$item["alias"].'.html') !!}" class="readmore">Đọc thêm</a>
    <div class="clearfix"></div>
</div>
@endforeach()

@endsection               