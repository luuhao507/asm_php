@extends('user');
@section('title')
    {{ $title }}
@endsection
@section('container')
    <div class="colorlib-featured">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="featured">
                        <div class="featured-img featured-img-2" style="background-image: url(images/women.jpg);">
                            <h2>SANG CHẢNH</h2>
                            <p><a href="#" class="btn btn-primary btn-lg">ĐẾN SHOP NGAY</a></p>
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
                <div class="col-12">
                    <div class="row row-pb-md">
                        @foreach ($list as $item)
                            <div class="col-lg-4 mb-4 text-center">
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
@endsection
