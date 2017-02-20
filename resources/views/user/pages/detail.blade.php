@extends('user.master')
@section('title','Chi Tiết Tin')
@section('content')
<h1 id ="title_detail">{!!$data["title"]!!}</h1>
    <img src="{!!asset('public/uploads/news/'.$data["image"]) !!}" class="thumbs_details"  />
    <p>
        <i><b>Danh mục</b>: <a href="">{!! $data["cate"]["name"] !!}</a><br />
        <b>Nguồn</b>: VnExpress<br />
        <b>Viết bởi</b>: Hoàng Long<br />
        <b>Ngày viết</b>: {!! $data["created_at"] !!}</i>
    </p>
    <p>
        {!! $data["intro"] !!}
    </p>
    <p>
                  {!! $data["full"] !!} 
 </p>
 @endsection