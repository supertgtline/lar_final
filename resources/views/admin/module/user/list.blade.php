@extends('admin.master')
@section('title','Danh sách tài khoản')
@section('content')
<table class="list_table">
    <tr class="list_heading">
        <td class="id_col">STT</td>
        <td>Username</td>
        <td>Level</td>
        <td class="action_col">Quản lý?</td>
    </tr>
    <tr class="list_data">
        <td class="aligncenter">1</td>
        <td class="list_td aligncenter">Vũ Quốc Tuấn</td>
        <td class="list_td aligncenter"><span style="color: red; font-weight: bold;">Super Admin</span></td>
        <td class="list_td aligncenter">
            <a href=""><img src="{!! asset('public/qt64_admin/templates/images/edit.png')!!}" /></a>&nbsp;&nbsp;&nbsp;
            <a href=""><img src="{!! asset('public/qt64_admin/templates/images/delete.png')!!}" /></a>
        </td>
    </tr>
    <tr class="list_data">
        <td class="aligncenter">2</td>
        <td class="list_td aligncenter">Vũ Quốc Tuấn</td>
        <td class="list_td aligncenter"><span style="color: blue; font-weight: bold;">Admin</span></td>
        <td class="list_td aligncenter">
            <a href=""><img src="{!! asset('public/qt64_admin/templates/images/edit.png')!!}" /></a>&nbsp;&nbsp;&nbsp;
            <a href=""><img src="{!! asset('public/qt64_admin/templates/images/delete.png')!!}" /></a>
        </td>
    </tr>
    <tr class="list_data">
        <td class="aligncenter">3</td>
        <td class="list_td aligncenter">Vũ Quốc Tuấn</td>
        <td class="list_td aligncenter"><span style="color: black;">Member</span></td>
        <td class="list_td aligncenter">
            <a href=""><img src="{!! asset('public/qt64_admin/templates/images/edit.png')!!}" /></a>&nbsp;&nbsp;&nbsp;
            <a href=""><img src="{!! asset('public/qt64_admin/templates/images/delete.png')!!}" /></a>
        </td>
    </tr>
</table>
@endsection