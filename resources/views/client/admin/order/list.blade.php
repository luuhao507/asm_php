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
                                                <th scope="col">ID Khách Hàng</th>
                                                <th scope="col">Tổng Tiền</th>
                                                <th scope="col">Trạng Thái</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($list as $item)
                                                <tr>
                                                    <th scope="row">{{ $item->id_hd }}</th>
                                                    <td>{{ $item->id_kh }}</td>
                                                    <td><?= number_format($item->tong_tien) ?></td>
                                                    <td>{{ $item->trang_thai }}</td>
                                                    <td>
                                                        <form action="/list_order/{{ $item->id_hd }}/edit" method="GET">
                                                            <button type="submit" class="btn btn-primary">Cập nhật trạng
                                                                thái</button>
                                                        </form>
                                                    </td>
                                                    <td>
                                                        <form action="/list_order/{{ $item->id_hd }}" method="GET">
                                                            <button type="submit" class="btn btn-primary">Chi Tiết Đơn
                                                                Hàng</button>
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
