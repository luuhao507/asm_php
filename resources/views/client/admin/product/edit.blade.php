@extends('admin');
@section('title')
{{$title}}
@endsection
@section('container-admin')
<div id="main-wrapper" data-navbarbg="skin6" data-theme="light" data-layout="vertical" data-sidebartype="full"
data-boxed-layout="full">
<div class="page-wrapper">
    <div class="container-fluid">
        <h1>Thêm tin mới</h1>
        <form action="/product/{{$list->id_sp}}/edit" method="GET" enctype="multipart/form-data">
        @csrf
            <div class="form-group">
                <label for="usr">Tên Sản Phẩm</label>
                <input type="text" class="form-control" name="tieuDe" value="{{$list->ten_sp}}">
            </div>
            <div class="form-group">
                <label for="comment">Giá</label>
                <input type="text" class="form-control" name="gia" value="{{$list->gia}}">
            </div>
            <div class="form-group">
                <label for="pwd">URL hình</label>
                <input type="file" class="form-control" name="hinh" value="{{$list->hinh}}">
            </div>
            <div class="form-group">
                <label for="comment">Tóm tắt</label>
                <textarea class="form-control" rows="5" name="tomTat" value="">{{$list->mo_ta}}</textarea>
            </div>
           
            <div class="form-group">
                <label for="sel1">ID Danh Mục</label>
                <select class="form-control" name="id_dm" value="{{$list->id_dm}}">
                <option value="30">XIAOMI</option>
                <option value="31">IPHONE</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Cập Nhật Tin</button>
        </form>
    </div>
</div>
</div>
@endsection