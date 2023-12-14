@extends('user');
@section('title')
    {{ $title }}
@endsection
@section('container')
    <div class="colorlib-product">
        <?php
        session_start();
        if (isset($_SESSION['cart'])) {
            unset($_SESSION['cart']);
        } ?>
        <div class="container">
            <div class="row">
                <div class="col-sm-10 offset-sm-1 text-center">
                    <p class="icon-addcart"><span><i class="icon-check"></i></span></p>
                    <h2 class="mb-4">Cảm ơn bạn đã mua hàng, đơn đặt hàng của bạn đã hoàn tất</h2>
                    <p>
                        <a href="{{ route('index') }}" class="btn btn-primary btn-outline-primary">TRANG CHỦ</a>
                        <a href="{{ route('men') }}" class="btn btn-primary btn-outline-primary"><i
                                class="icon-shopping-cart"></i> Tiếp tục mua sắm</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
