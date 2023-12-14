<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Oder as hd;
use Illuminate\Support\Facades\Auth;
use App\Models\OrderDetail as oderDetail;
use App\Http\Controllers\Order_detail;

class OrderController extends Controller
{
    public function Order()
    {
        $order = new hd();
        $order->id_kh = Auth::id();
        if (isset($order->id_kh)) {
            $order->tong_tien = $_POST['tongtien'];
            $order->save();
            $detail = new oderDetail();
            $order = hd::limit(1)->orderBy('id_hd', 'desc')->get();
            foreach ($order as $value) {
                $abc = $value->id_hd;
            }
            $detail->id_hd = $abc;
            $detail->so_luong = $_POST['soluong_sp'];
            $detail->don_gia = $_POST['price_sp'];
            $detail->id_sp = $_POST['id_sp'];
            $detail->save();
            return redirect('/order');
        } else {
            $title = "Giỏ hàng";
            echo "<script>alert('Vui lòng đăng nhập tài khoản')</script>";
            return view('client.user.cart', compact('title'));
        }
    }
}
