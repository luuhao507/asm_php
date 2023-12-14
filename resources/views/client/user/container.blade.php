@extends('user');
@section('title')
    {{ $title }}
@endsection
@section('container')
    <aside id="colorlib-hero">
        <div class="flexslider">
            <ul class="slides">
                <li style="background-image: url('images/img_bg_1.jpg');">
                    <div class="overlay"></div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6 offset-sm-3 text-center slider-text">
                                <div class="slider-text-inner">
                                    <div class="desc">
                                        <h1 class="head-1">SẢN PHẨM</h1>
                                        <h2 class="head-2">GIÀY</h2>
                                        <h2 class="head-3">Bộ sưu tập</h2>
                                        <p class="category"><span>Những đôi giày đứng top thị phần</span></p>
                                        <p><a href="#" class="btn btn-primary">Cữa hàng bộ sưu tập</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li style="background-image: url('images/img_bg_2.jpg');">
                    <div class="overlay"></div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6 offset-sm-3 text-center slider-text">
                                <div class="slider-text-inner">
                                    <div class="desc">
                                        <h1 class="head-1">Huge</h1>
                                        <h2 class="head-2">Sale</h2>
                                        <h2 class="head-3"><strong class="font-weight-bold">50%</strong> Off</h2>
                                        <p class="category"><span>Mùa sale lớn nhất năm</span></p>
                                        <p><a href="#" class="btn btn-primary">Cữa hàng bộ sưu tập</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li style="background-image: url('images/img_bg_3.jpg');">
                    <div class="overlay"></div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6 offset-sm-3 text-center slider-text">
                                <div class="slider-text-inner">
                                    <div class="desc">
                                        <h1 class="head-1">New</h1>
                                        <h2 class="head-2">Arrival</h2>
                                        <h2 class="head-3">Sale up <strong class="font-weight-bold">30%</strong> off</h2>
                                        <p class="category"><span>Những thiết kế mới chuẩn nam tính</span></p>
                                        <p><a href="#" class="btn btn-primary">Cữa hàng bộ sưu tập</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </aside>
    <div class="colorlib-intro">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2 class="intro">Nó bắt đầu với một ý tưởng đơn giản: Tạo ra những sản phẩm chất lượng, thiết kế đẹp
                        mà bản thân tôi muốn.</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="colorlib-product">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6 text-center">
                    <div class="featured">
                        <a href="{{ route('men') }}" class="featured-img"
                            style="background-image: url('images/men.jpg');"></a>
                        <div class="desc">
                            <h2><a href="{{ route('men') }}">BỘ SƯU TẬP CỦA QUÝ ÔNG</a></h2>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 text-center">
                    <div class="featured">
                        <a href="{{ route('women') }}" class="featured-img"
                            style="background-image: url('images/women.jpg');"></a>
                        <div class="desc">
                            <h2><a href="{{ route('women') }}">BỘ SƯU TẬP CỦA QUÝ BÀ</a></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="colorlib-product">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 offset-sm-2 text-center colorlib-heading">
                    <h2>SẢN PHẨM BÁN CHẠY NHẤT</h2>
                </div>
            </div>
            <div class="row row-pb-md">
                @foreach ($list as $item)
                    <div class="col-lg-3 mb-4 text-center">
                        <div class="product-entry border">
                            <a href="/detail/{{ $item->id_sp }}" class="prod-img">
                                <img src="/images/{{ $item->hinh }}" class="img-fluid" alt="{{ $item->ten_sp }}">
                            </a>
                            <div class="desc">
                                <h2><a href="/detail/{{ $item->id_sp }}">{{ $item->ten_sp }}</a></h2>
                                <span class="price">{{ $item->gia }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <p><a href="#" class="btn btn-primary btn-lg">TẤT CẢ SẢN PHẨM</a></p>
                </div>
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
                    <img src="{{ asset('images/brand-1.jpg') }}" class="img-fluid" alt="Free html4 bootstrap 4 template">
                </div>
                <div class="col partner-col text-center">
                    <img src="{{ asset('images/brand-2.jpg') }}" class="img-fluid" alt="Free html4 bootstrap 4 template">
                </div>
                <div class="col partner-col text-center">
                    <img src="{{ asset('images/brand-3.jpg') }}" class="img-fluid" alt="Free html4 bootstrap 4 template">
                </div>
                <div class="col partner-col text-center">
                    <img src="{{ asset('images/brand-4.jpg') }}" class="img-fluid"
                        alt="Free html4 bootstrap 4 template">
                </div>
                <div class="col partner-col text-center">
                    <img src="{{ asset('images/brand-5.jpg') }}" class="img-fluid"
                        alt="Free html4 bootstrap 4 template">
                </div>
            </div>
        </div>
    </div>
@endsection
