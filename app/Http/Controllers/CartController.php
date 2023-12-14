<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function save()
    {
        session_start();
        if (isset($_GET['id']) && $_GET['ten_sp'] && $_GET['gia_sp'] && $_GET['hinh_sp'] && $_GET['quantity']) {
            $id = $_GET['id'];
            $ten_sp = $_GET['ten_sp'];
            $gia_sp = $_GET['gia_sp'];
            $hinh_sp = $_GET['hinh_sp'];
            $quantity = $_GET['quantity'];
        }
        if (isset($_GET['submit'])) {
            if (isset($_SESSION['cart'])) {
                if (isset($_SESSION['cart'][$id]['quantity'])) {
                    $_SESSION['cart'][$id]['quantity'] += $quantity;
                } else {
                    $_SESSION['cart'][$id]['quantity'] = $quantity;
                    $_SESSION['cart'][$id]['id'] = $id;
                    $_SESSION['cart'][$id]['ten_sp'] = $ten_sp;
                    $_SESSION['cart'][$id]['gia_sp'] = $gia_sp;
                    $_SESSION['cart'][$id]['hinh_sp'] = $hinh_sp;
                }
                echo "<script>alert('Cập nhật giỏ hàng thành công !')</script>";
                return redirect('/detail/' . $id);
            } else {
                $_SESSION['cart'][$id]['quantity'] = $quantity;
                $_SESSION['cart'][$id]['id'] = $id;
                $_SESSION['cart'][$id]['ten_sp'] = $ten_sp;
                $_SESSION['cart'][$id]['gia_sp'] = $gia_sp;
                $_SESSION['cart'][$id]['hinh_sp'] = $hinh_sp;
                echo "<script>alert('Thêm sản phẩm vào giỏ hàng thành công !')</script>";
                return redirect('/detail/' . $id);
            }
        }
    }
    public function index()
    {
        session_start();
        $title = "cart";
        return view('client.user.cart', compact('title'));
    }
    public function delete()
    {
        session_start();
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            unset($_SESSION['cart'][$id]);
        }
        $title = "cart";
        echo "<script>alert('Xóa giỏ hàng thành công !')</script>";
        return view('client.user.cart', compact('title'));
    }
}
