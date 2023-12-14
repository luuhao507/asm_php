<?php

namespace App\Http\Controllers;

use App\Models\Product as sp;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Danh sách sản phẩm";
        $list = sp::all();
        return view('client.admin.product.list', compact('title', 'list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Thêm sản phẩm";
        return view('client.admin.product.add', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new sp();
        $product->ten_sp = $_POST['tieuDe'];
        $product->gia = $_POST['gia'];
        $product->hinh = $_FILES['hinh']['name'];
        move_uploaded_file($_FILES['hinh']['tmp_name'], public_path('images/') . $product->hinh);
        $product->mo_ta = $_POST['tomTat'];
        $product->luot_xem = 0;
        $product->id_dm = $_POST['id_dm'];
        $product->save();
        return redirect('/product/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $list = sp::find($id);
        $title = "Sửa Sản Phẩm";
        return view('client.admin.product.edit', compact('title', 'list'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = sp::find($id);
        $product->ten_sp = $_GET['tieuDe'];
        $product->gia = $_GET['gia'];
        $product->hinh = $_GET['hinh'];
        move_uploaded_file($_GET['hinh'], public_path('images/') . $product->hinh);
        $product->mo_ta = $_GET['tomTat'];
        $product->id_dm = $_GET['id_dm'];
        $product->save();
        return redirect('/product');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = sp::find($id);
        $product->delete();
        return redirect('/product');
    }
}
