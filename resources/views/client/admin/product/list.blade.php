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
                                <h4 class="card-title">SẢN PHẨM</h4>

                                <div class="table-responsive">
                                    <a type="button" class="btn btn-primary nav-link" href="/product/create">Thêm Sản
                                        Phẩm</a>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col"></th>
                                                <th scope="col">ID</th>
                                                <th scope="col">Tên Sản Phẩm</th>
                                                <th scope="col">Giá Sản Phẩm</th>
                                                <th scope="col">Lượt Xem</th>
                                                <th scope="col">Ngày Đăng</th>
                                                <th scope="col">Loại Sản Phẩm</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($list as $item)
                                                <tr>
                                                    <td><img style="width: 100px" src='{{ asset('images/' . $item->hinh) }}'
                                                            alt="{{ $item->hinh }}"></td>
                                                    <td>{{ $item->id_sp }}</td>
                                                    <td>{{ $item->ten_sp }}</td>
                                                    <td>{{ number_format($item->gia) }} VND</td>
                                                    <td>{{ $item->luot_xem }}</td>
                                                    <td>{{ $item->created_at }}</td>
                                                    <td>{{ $item->id_dm }}</td>

                                                    <td>
                                                        <form action="/product/{{ $item->id_sp }}" method="GET">
                                                            <button type="submit" class="btn btn-primary">Sửa</button>
                                                        </form>
                                                    </td>
                                                    <td>
                                                        <form action="{{ route('product.destroy', $item->id_sp) }}"
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
