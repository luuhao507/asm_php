<?php

namespace App\Http\Controllers;

use App\Models\Cmt as cmt;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CmtController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $bl = new Cmt();
        $bl->id_kh = Auth::id();
        $bl->id_sp = $_POST['id_sp'];
        if (isset($bl->id_kh)) {
            $bl->noi_dung = $_POST['noi_dung'];
            $bl->save();
            return redirect('/detail/' . $bl->id_sp);
        }
        $title = "Chi tiết Sản Phẩm";
        return view('client.user.cart', compact('title'));
        echo "<script>alert('Vui lòng đăng nhập tài khoản')</script>";
        return view('client.user.detail' . $bl->id_sp, compact('title'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }
}
