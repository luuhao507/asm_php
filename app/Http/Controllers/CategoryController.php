<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category as dm;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Danh sách danh mục";
        $list = dm::all();
        return view('client.admin.category.list', compact('title', 'list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Thêm Danh Mục";
        return view('client.admin.category.add', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = new dm();
        $category->ten_dm = $_POST['ten_dm'];
        $category->save();
        return redirect('/category/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $list = dm::find($id);
        $title = "Sửa Danh Mục";
        return view('client.admin.category.edit', compact('title', 'list'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = dm::find($id);
        $category->ten_dm = $_GET['ten_dm'];
        $category->save();
        return redirect('/category');
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = dm::find($id);
        $category->delete();
        return redirect('/category');
    }
}
