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
        <form action="/product" method="post" enctype="multipart/form-data">
        @csrf
            <div class="form-group">
                <label for="usr">Tên Sản Phẩm</label>
                <input type="text" class="form-control" name="tieuDe" value="">
            </div>
            <div class="form-group">
                <label for="comment">Giá</label>
                <input type="text" class="form-control" name="gia" value="">
            </div>
            <div class="form-group">
                <label for="pwd">URL hình</label>
                <input type="file" class="form-control" name="hinh" value="">
            </div>
            
            <div class="form-group">
                <label for="comment">Tóm tắt</label>
                <textarea class="ckeditor" name="tomTat" id="content" rows="10" cols="150"></textarea>
            </div>
           
            <div class="form-group">
                <label for="sel1">ID Danh Mục</label>
                <select class="form-control" name="id_dm">
                <option value="30">XIAOMI</option>
                <option value="31">IPHONE</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Thêm tin</button>
        </form>
    </div>
</div>
</div>
@endsection