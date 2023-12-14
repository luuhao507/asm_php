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
                                <h4 class="card-title">ĐƠN HÀNG</h4>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">ID</th>
                                                <th scope="col">ID Sản Phẩm</th>
                                                <th scope="col">Giá Sản Phẩm</th>
                                                <th scope="col">Số Lượng</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($list as $item)
                                                <tr>
                                                    <th>{{ $item->id_hdct }}</th>
                                                    <th>{{ $item->id_sp }}</th>
                                                    <td>{{ $item->don_gia }}</td>
                                                    <td>{{ $item->so_luong }}</td>
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
