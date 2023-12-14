<?php

namespace App\Http\Controllers;


use App\Models\UserAdmin as tk;
use Illuminate\Http\Request;
use App\Models\Category as dm;
use App\Models\Cmt as cmt;
use App\Models\Product as sp;
use App\Models\Oder as dh;
use App\Models\OrderDetail as dh_ct;

class AdminController extends Controller
{
    public function index()
    {
        $title = "Admin PHONE";
        $count_dm = dm::all()->count();
        $count_sp = sp::all()->count();
        $count_dh = dh::all()->count();
        $count_cmt = cmt::all()->count();
        $count_tk = tk::all()->count();
        $list = dh::groupBy('month')
            ->selectRaw('*,month(created_at) month,  sum(tong_tien) as doanh_so')
            ->get();
        return view('client.admin.container', compact('title', 'count_cmt', 'count_dh', 'count_sp', 'count_dm', 'count_tk', 'list'));
    }

    public function list_contact()
    {
        $title = "Danh sách sản phẩm";
        return view('client.admin.contact.list', compact('title'));
    }

    public function list_user()
    {
        $list = tk::all();
        $title = "Danh sách tài khoản";
        return view('client.admin.user.list', compact('title', 'list'));
    }
    public function tk_list_order()
    {
        // $count_dh = dh_ct::all();
        // $list_2 = dh_ct::join('sanpham', 'sanpham.id_sp', '=', 'hoadonchitiet.id_sp')->get();
        $dem_sp = dh_ct::join('sanpham', 'sanpham.id_sp', '=', 'hoadonchitiet.id_sp')
            ->groupBy('sanpham.id_sp')
            ->selectRaw('*,don_gia*SUM(so_luong) as tong')
            ->get();
        $title = "Thống Kê Đơn Hàng";
        return view('client.admin.thongke.list-order', ['title' => $title, 'dem_sp' => $dem_sp]);
    }
    public function tk_list_product()
    {
        $list = sp::groupBy('id_dm')
            ->selectRaw('*,count(id_dm) as so_luong')
            ->get();
        $title = "Thống Kê Sản Phẩm";
        return view('client.admin.thongke.list-product', ['title' => $title], ['list' => $list]);
    }
}
