@extends('user.master')
@section('title','Trang Chính')
@section('content')
@foreach($data as $item)
<div class="news">
	<h1>{!! $item["title"] !!}</h1>
	<img src="{!! asset('public/uploads/news/'.$item["image"]) !!}" class="thumbs" />
	<h3>Thể Loại : {!! $item["category_id"] !!}</h3>
	<p>{!! $item["intro"] !!}</p>
	<a href="" class="readmore">Đọc thêm</a>
	<div class="clearfix"></div>
</div>
@endforeach()
@endsection            