﻿<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="QuocTuan.Info" />
    <link style ="text/css"rel="stylesheet" href="{!! asset('public/user/templates/css/style.css') !!}" />
    <title>@yield('title')</title>
</head>
<body>
    <div id="layout">
        <div id="top">
            Banner
        </div>
        <div id="topmenu">
            <ul>
                <li><a href="">Trang Chủ</a></li>
                <li><a href="#">Giới Thiệu</a></li>
                <li><a href="#">Tin Tức</a>
                    <ul>
                        <li><a href="">Chuyện lạ</a></li>
                        <li><a href="">Giải trí</a></li>
                        <li><a href="">Giáo dục</a></li>
                        <li><a href="">Kinh doanh</a></li>
                        <li><a href="">Nhân ái</a></li>
                        <li><a href="">Nhịp sống trẻ</a></li>
                        <li><a href="">Pháp luật</a></li>
                        <li><a href="">Sự kiện</a></li>
                        <li><a href="">Sức khỏe</a></li>
                        <li><a href="">Sức mạnh số</a></li>
                        <li><a href="">Thế giới</a></li>
                        <li><a href="">Thể thao</a></li>
                        <li><a href="">Tình yêu</a></li>
                        <li><a href="">Văn hóa</a></li>
                        <li><a href="">Xã hội</a></li>
                    </ul>
                </li>
                <li><a href="#">Dịch Vụ</a></li>
                <li><a href="#">Sản Phẩm</a></li>
                <li><a href="#">Liên Hệ</a></li>
            </ul>
        </div>
        <div id="content">
            <div id="left">
                <div id="leftmenu">
                    <h1>
                        Menu Chính
                    </h1>
                    <ul>
                        <li><a href="">Trang Chủ</a></li>
                        <li><a href="#">Giới Thiệu</a></li>
                        <li><a href="#">Tin Tức</a>
                            <ul>
                                <li><a href="">Chuyện lạ</a></li>
                                <li><a href="">Giải trí</a></li>
                                <li><a href="">Giáo dục</a></li>
                                <li><a href="">Kinh doanh</a></li>
                                <li><a href="">Nhân ái</a></li>
                                <li><a href="">Nhịp sống trẻ</a></li>
                                <li><a href="">Pháp luật</a></li>
                                <li><a href="">Sự kiện</a></li>
                                <li><a href="">Sức khỏe</a></li>
                                <li><a href="">Sức mạnh số</a></li>
                                <li><a href="">Thế giới</a></li>
                                <li><a href="">Thể thao</a></li>
                                <li><a href="">Tình yêu</a></li>
                                <li><a href="">Văn hóa</a></li>
                                <li><a href="">Xã hội</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Dịch Vụ</a></li>
                        <li><a href="#">Sản Phẩm</a></li>
                        <li><a href="#">Liên Hệ</a></li>
                    </ul>
                </div>
            </div>
            <div id="main">
				@yield('content')
			</div>
            <div class="clearfix"></div>
        </div>
        <div id="bottom">
            Copyright &copy; 2016 by QuocTuan.Info & QHOnline.Edu.Vn
        </div>
    </div>
</body>
</html>