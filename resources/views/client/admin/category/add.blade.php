@extends('admin');
@section('title')
{{$title}}
@endsection
@section('container-admin')
<div id="main-wrapper" data-navbarbg="skin6" data-theme="light" data-layout="vertical" data-sidebartype="full"
data-boxed-layout="full">
<div class="page-wrapper">
    <div class="container-fluid">
        <h1>Thêm Danh Mục</h1>
        <form action="/category" method="post">
        @csrf
            <div class="form-group">
                <label for="usr">Tên Danh Mục</label>
                <input type="text" class="form-control" name="ten_dm" value="">
            </div>
            <button type="submit" class="btn btn-primary">Thêm tin</button>
        </form>
    </div>
</div>
</div>
@endsection