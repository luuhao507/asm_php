@extends('user');
@section('title')
    {{ $title }}
@endsection
@section('container')
    <form class="" action="/order" method="POST">
        @csrf
        <div class="colorlib-product">
            <div class="container">
                <div class="row row-pb-lg">
                    <div class="col-md-12">
                        <div class="product-name d-flex">
                            <div class="one-forth text-left px-4">
                                <span>Tên Sản Phẩm</span>
                            </div>
                            <div class="one-eight text-center">
                                <span>Giá</span>
                            </div>
                            <div class="one-eight text-center">
                                <span>Số Lượng</span>
                            </div>
                            <div class="one-eight text-center">
                                <span>Thành Tiền</span>
                            </div>
                        </div>
                        <?php if(isset($_SESSION['cart'])){
					$tong = 0;
					foreach ($_SESSION['cart'] as $key => $a) { ?>
                        <div class="product-cart d-flex">
                            <div class="one-forth">
                                <img class="product-img" src="images/<?php echo $a['hinh_sp']; ?>">
                                <div class="display-tc">
                                    <h3><?php echo $a['ten_sp']; ?></h3>
                                    <input name="id_sp" type="hidden" value="<?php echo $a['id']; ?>">
                                </div>
                            </div>
                            <div class="one-eight text-center">
                                <div class="display-tc">
                                    <span class="price pricesp"><?php echo $a['gia_sp']; ?> </span>
                                    <input name="price_sp" type="hidden" value="<?php echo $a['gia_sp']; ?>">
                                </div>
                            </div>
                            <div class="one-eight text-center">
                                <div class="display-tc">
                                    <input type="number" name="soluong_sp"
                                        class="form-control input-number text-center soluongsp" min="1"
                                        value="<?php echo $a['quantity']; ?>">
                                </div>
                            </div>
                            <div class="one-eight text-center">
                                <div class="display-tc">
                                    <span class="priceThanhTien"><?php echo $a['gia_sp'] * $a['quantity']; ?></span>
                                </div>
                            </div>
                            <div class="one-eight text-center">
                                <div class="display-tc">
                                    <a href="/delete_cart?id=<?php echo $a['id']; ?>" class="closed"></a>
                                </div>
                            </div>
                        </div>
                        <?php $acb = $a['gia_sp']*$a['quantity']; $tong+= $acb; }} ?>
                    </div>
                </div>
                <div class="row row-pb-lg">
                    <div class="col-md-12">
                        <div class="total-wrap">
                            <div class="row">
                                <div class="col-sm-8">
                                    <form action="#">
                                        <div class="row form-group">
                                            <div class="col-sm-9">
                                                <input type="text" name="" class="form-control input-number"
                                                    placeholder="Nhập Phiếu Giảm Giá Của Bạn...">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="submit" value="Áp dụng phiếu giảm giá"
                                                    class="btn btn-primary">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-sm-4 ">
                                    <div class="total">
                                        <div class="sub">
                                            <p>
                                                <span>Tổng phụ:</span>
                                                <span id="tongtienphu">
                                                    <?php if (isset($_SESSION['cart'])) {
                                                        echo number_format($tong);
                                                    } else {
                                                        echo '0';
                                                    }
                                                    ?>
                                                    VND</span>
                                            </p>
                                            <p><span>Vận chuyển:</span> <span>0 VND</span></p>
                                        </div>
                                        <div class="grand-total">
                                            <p>
                                                <span>
                                                    <strong>Tổng:</strong>
                                                </span>
                                                <span id="tongtien">
                                                    <?php if (isset($_SESSION['cart'])) {
                                                        echo number_format($tong);
                                                    } else {
                                                        echo '0';
                                                    }
                                                    ?> VND
                                                </span>
                                                <input id="tongtien_input" name="tongtien" type="hidden"
                                                    value="<?php if (isset($_SESSION['cart'])) {
                                                        echo $tong;
                                                    } else {
                                                        echo '0';
                                                    }
                                                    ?>">
                                            </p>
                                        </div>
                                    </div>

                                    <button type="submit" style="margin: 10px 0" class="btn btn-primary">Thanh Toán</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
