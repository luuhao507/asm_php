<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product as sp;
use App\Models\Oder as dh;
use App\Models\OrderDetail as dh_ct;

class UserController extends Controller
{
    public function index()
    {
        $title = "PHONE";
        $list = dh_ct::join('sanpham', 'sanpham.id_sp', '=', 'hoadonchitiet.id_sp')
            ->groupBy('sanpham.id_sp')
            ->selectRaw('*,don_gia*SUM(so_luong) as tong')
            ->limit(16)->orderBy('id_hd', 'desc')
            ->get();
        return view('client.user.container', compact('title', 'list'));
    }
    public function cart()
    {
        $title = "Giỏ Hàng";
        return view('client.user.cart', compact('title'));
    }
    public function about()
    {
        $title = "Giới Thiệu";
        return view('client.user.about', compact('title'));
    }
    public function contact()
    {
        $title = "Liên Hệ";
        return view('client.user.contact', compact('title'));
    }
    public function women()
    {
        $title = "XIAOMI";
        $list = sp::where('id_dm', '=', '30')->get();
        $product = sp::Paginate(10);
        return view('client.user.women', compact('title', 'list', 'product'));
    }
    public function men()
    {
        $title = "IPHONE";
        $list = sp::where('id_dm', '=', '31')->get();
        $product = sp::Paginate(10);
        return view('client.user.men', compact('title', 'list', 'product'));
    }
    public function login()
    {
        $title = "Đăng Nhập";
        return view('client.user.login', compact('title'));
    }

    public function order()
    {
        $title = "Đặt Hàng";

        return view('client.user.order-complete', compact('title'));
    }
}
