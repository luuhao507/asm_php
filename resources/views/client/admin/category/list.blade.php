@extends('admin');
@section('container-admin')
    <div id="main-wrapper" data-navbarbg="skin6" data-theme="light" data-layout="vertical" data-sidebartype="full"
        data-boxed-layout="full">
        <div class="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Danh Mục</h4>
                                <a type="button" class="btn btn-primary nav-link" href="/category/create">Thêm Danh Mục</a>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">ID</th>
                                                <th scope="col">Tên Danh Mục</th>

                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach ($list as $item)
                                                <tr>
                                                    <td>{{ $item->id_dm }}</td>
                                                    <td>{{ $item->ten_dm }}</td>
                                                    <td>
                                                        <form action="/category/{{ $item->id_dm }}" method="GET">
                                                            <button type="submit" class="btn btn-primary">Sửa</button>
                                                        </form>
                                                    </td>
                                                    <td>
                                                        <form action="{{ route('category.destroy', $item->id_dm) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-primary"> Xóa</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
