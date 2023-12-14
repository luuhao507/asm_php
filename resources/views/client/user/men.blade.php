@extends('user');
@section('title')
    {{ $title }}
@endsection
@section('container')
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col">
                    <p class="bread"><span><a href="index.html">TRANG CHỦ</a></span> / <span>ĐÀN ÔNG</span></p>
                </div>
            </div>
        </div>
    </div>

    <div class="breadcrumbs-two">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="breadcrumbs-img" style="background-image: url(images/cover-img-1.jpg);">
                        <h2>QUÝ ÔNG</h2>
                    </div>
                    <div class="menu text-center">

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="colorlib-featured">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 text-center">
                    <div class="featured">
                        <div class="featured-img featured-img-2" style="background-image: url(images/men.jpg);">
                            <h2>Lịch Lãm</h2>
                            <p><a href="#" class="btn btn-primary btn-lg">ĐẾN NGAY</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 text-center">
                    <div class="featured">
                        <div class="featured-img featured-img-2" style="background-image: url(images/item-11.jpg);">
                            <h2>Thể Thao</h2>
                            <p><a href="#" class="btn btn-primary btn-lg">ĐẾN NGAY</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="colorlib-product">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 offset-sm-2 text-center colorlib-heading colorlib-heading-sm">
                    <h2>XEM TẤT CẢ SẢN PHẨM</h2>
                </div>
            </div>
            <div class="row row-pb-md">
                @foreach ($list as $item)
                    <div class="col-md-3 col-lg-3 mb-4 text-center">
                        <div class="product-entry border">
                            <a href="/detail/{{ $item->id_sp }}" class="prod-img">
                                <img src="images/{{ $item->hinh }}" class="img-fluid" alt="{{ $item->ten_sp }}">
                            </a>
                            <div class="desc">
                                <h2><a href="/detail/{{ $item->id_sp }}">{{ $item->ten_sp }}</a></h2>
                                <span class="price">{{ $item->gia }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="col-md-12 text-center">
                {{ $product->links() }}
            </div>
        </div>
    </div>

    <div class="colorlib-partner">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 offset-sm-2 text-center colorlib-heading colorlib-heading-sm">
                    <h2>ĐỐI TÁC TIN CẬY</h2>
                </div>
            </div>
            <div class="row">
                <div class="col partner-col text-center">
                    <img src="images/brand-1.jpg" class="img-fluid" alt="Free html4 bootstrap 4 template">
                </div>
                <div class="col partner-col text-center">
                    <img src="images/brand-2.jpg" class="img-fluid" alt="Free html4 bootstrap 4 template">
                </div>
                <div class="col partner-col text-center">
                    <img src="images/brand-3.jpg" class="img-fluid" alt="Free html4 bootstrap 4 template">
                </div>
                <div class="col partner-col text-center">
                    <img src="images/brand-4.jpg" class="img-fluid" alt="Free html4 bootstrap 4 template">
                </div>
                <div class="col partner-col text-center">
                    <img src="images/brand-5.jpg" class="img-fluid" alt="Free html4 bootstrap 4 template">
                </div>
            </div>
        </div>
    </div>
@endsection;
