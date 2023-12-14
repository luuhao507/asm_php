@extends('user');
@section('title')
    {{ $title }}
@endsection
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
@section('container')
    <style>
        img {
            max-width: 100% !important;
            height: auto !important;
        }
    </style>
    <div class="container">
        <div class="row row-pb-lg product-detail-wrap">
            <div class="col-sm-8">
                <div class="product-entry border">
                    <img name="hinh_sp" src="../images/{{ $list->hinh }}" class="img-fluid" alt="{{ $list->ten_sp }}">
                </div>
            </div>
            <div class="col-sm-4">

                <div class="product-desc">
                    <h3 name="ten_sp">{{ $list->ten_sp }}</h3>
                    <p class="price" name="gia_sp">{{ number_format($list->gia) }}</p>
                    <div>
                    </div>
                    <div class="size-wrap">
                        <div class="block-26 mb-2">
                            <h4>Size</h4>
                            <ul>
                                <li><a href="#">37</a></li>
                                <li><a href="#">38</a></li>
                                <li><a href="#">39</a></li>
                                <li><a href="#">40</a></li>
                                <li><a href="#">41</a></li>
                                <li><a href="#">42</a></li>
                            </ul>
                        </div>
                    </div>
                    <form action="/save" method="GET" enctype="multipart/form-data">
                        <input type="number" name="quantity" class="form-control input-number" value="1"
                            min="1" max="100">
                        <input type="hidden" name="id" value="{{ $list->id_sp }}">
                        <input type="hidden" name="ten_sp" value="{{ $list->ten_sp }}">
                        <input type="hidden" name="gia_sp" value="{{ $list->gia }}">
                        <input type="hidden" name="hinh_sp" value="{{ $list->hinh }}">
                        <button type="submit" name="submit" style="display:flex;margin:10px 0;"
                            class="btn btn-primary btn-addtocart">
                            <i class="icon-shopping-cart"></i>
                            Thêm vào giỏ hàng
                        </button>
                    </form>
                    <ul>
                        <li>
                            <i class="fa fa-check" aria-hidden="true"></i>
                            Tặng phiếu bảo hiểm giày và vệ sinh giày 6 tháng trị giá 500K
                        </li>
                        <li>
                            <a href=""><i class="fa fa-check" aria-hidden="true"></i>Mua tất giảm ngay 20% (click xem
                                chi tiết)</a>
                        </li>
                        <li>
                            <i class="fa fa-check" aria-hidden="true"></i>
                            Cam kết chính hãng 100%, phát hiện fake đền gấp đôi giá trị đơn hàng
                        </li>
                        <li>
                            <a href="">
                                <i class="fa fa-check" aria-hidden="true"></i>
                                Miễn phí đổi trả 45 ngày (click xem chi tiết)
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="fa fa-check" aria-hidden="true"></i>
                                Miễn phí bảo hành 1 năm trên toàn hệ thống (click xem chi tiết)
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-md-12 pills">
                            <div class="bd-example bd-example-tabs">
                                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="pills-description-tab" data-toggle="pill"
                                            href="#pills-description" role="tab"aria-controls="pills-description"
                                            aria-expanded="true">Mô Tả</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="pills-review-tab" data-toggle="pill" href="#pills-review"
                                            role="tab"aria-controls="pills-review" aria-expanded="true">Đánh Giá và Bình
                                            Luận</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane border fade show active" id="pills-description" role="tabpanel"
                                        aria-labelledby="pills-description-tab">
                                        <div class="gtx-body">
                                            <h3>Thông tin phát hành {{ $list->id_sp }}</h3>
                                        </div>
                                        <div class="product-footer__details">
                                            <strong>Thời gian phát hành:</strong> {{ $list->created_at }}
                                        </div>
                                        <div class="product-footer__item">
                                            <p class="product-footer__item-title">
                                                <strong>Mã sản phẩm:</strong> {{ $list->id_sp }}
                                            </p>
                                        </div>
                                        <div class="product-footer__item">
                                            <?= $list->mo_ta ?>
                                        </div>
                                        <div class="tab-pane border fade" id="pills-review" role="tabpanel"
                                            aria-labelledby="pills-review-tab">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label for="" class="form-label">Hãy ghi đánh giá của bạn
                                                        ?</label>
                                                    <form action="{{ route('cmt.store') }}" method="POST">
                                                        @csrf
                                                        <input type="text" class="form-control" name="noi_dung"
                                                            placeholder="Hãy ghi đánh giá của bạn ?">
                                                        <input type="hidden" name="id_sp"
                                                            value="{{ $list->id_sp }}">
                                                        <button class="btn btn-primary" type="submit"
                                                            name="">Gửi</button>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <h3 class="head"></h3>
                                                    @foreach ($list_2 as $item)
                                                        <div class="review">
                                                            <div class="user-img">
                                                                <span class="text-left">{{ $item->id_kh }}</span>
                                                            </div>
                                                            <div class="user-img">
                                                                <span class="text-left">{{ $item->name }}</span>
                                                            </div>
                                                            <div class="user-img">
                                                                <span class="text-right">{{ $item->noi_dung }}</span>
                                                            </div>
                                                            <div class="user-img">
                                                                <span class="text-right">{{ $item->created_at }}</span>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- </div> --}}
            @endsection
