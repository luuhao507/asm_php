<?php

namespace App\Http\Controllers;

use App\Models\Product as sp;
use App\Models\Cmt as cmt;
use Illuminate\Http\Request;

class DetailProduct extends Controller
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $title = "Detail";
        $list = sp::find($id);
        $abc = $list->luot_xem + 1;
        $list->luot_xem = $abc;
        $list->save();
        $list_2 = cmt::join('users', 'users.id', '=', 'binhluan.id_kh')
            ->where('id_sp', '=', $id)->limit(4)->get();
        // $count = cmt::where($id)->count();
        return view('client.user.detail', compact('title', 'list', 'list_2'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
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
