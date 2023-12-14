@extends('user');
@section('title')
{{$title}}
@endsection
@section('container')
<div class="row">
    <div class="col-sm-8 offset-sm-2 text-center colorlib-heading colorlib-heading-sm">
        <h2>Related Products</h2>
    </div>
</div>
<div class="row">
    <div class="col-md-3 col-lg-3 mb-4 text-center">
        <div class="product-entry border">
            <a href="#" class="prod-img">
                <img src="images/item-1.jpg" class="img-fluid" alt="Free html5 bootstrap 4 template">
            </a>
            <div class="desc">
                <h2><a href="#">Women's Boots Shoes Maca</a></h2>
                <span class="price">120.000 VND</span>
            </div>
        </div>
    </div>
    <div class="col-md-3 col-lg-3 mb-4 text-center">
        <div class="product-entry border">
            <a href="#" class="prod-img">
                <img src="images/item-2.jpg" class="img-fluid" alt="Free html5 bootstrap 4 template">
            </a>
            <div class="desc">
                <h2><a href="#">Women's Minam Meaghan</a></h2>
                <span class="price">120.000 VND</span>
            </div>
        </div>
    </div>
    <div class="col-md-3 col-lg-3 mb-4 text-center">
        <div class="product-entry border">
            <a href="#" class="prod-img">
                <img src="images/item-3.jpg" class="img-fluid" alt="Free html5 bootstrap 4 template">
            </a>
            <div class="desc">
                <h2><a href="#">Men's Taja Commissioner</a></h2>
                <span class="price">120.000 VND</span>
            </div>
        </div>
    </div>
    <div class="col-md-3 col-lg-3 mb-4 text-center">
        <div class="product-entry border">
            <a href="#" class="prod-img">
                <img src="images/item-4.jpg" class="img-fluid" alt="Free html5 bootstrap 4 template">
            </a>
            <div class="desc">
                <h2><a href="#">Russ Men's Sneakers</a></h2>
                <span class="price">120.000 VND</span>
            </div>
        </div>
    </div>
</div>
@endsection