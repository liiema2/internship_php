<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sinhvien;
class sinhVienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $sinhvien=sinhvien::paginate(100);
        return view('index',compact('sinhvien'))->with('i',(request()->input('page',1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('create');
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
        sinhvien::create($request->all());
        return redirect()->route('sinhvien.index')->with('thongbao','Thêm mới sinh viên thàng công!');
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
    public function edit(sinhvien $sinhvien)
    {
        return view('edit', compact('sinhvien'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,sinhvien $sinhvien)
    {
        //
        $sinhvien->update($request->all());
        return redirect()->route('sinhvien.index')->with('thongbao','cập nhật thành công!');
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
       $id=sinhvien::find($id);
        $id->delete();
       // dd($id);
       // $sinhvien->delete();
        return redirect()->route('sinhvien.index')->with('thongbao','xóa thành công!');

    }
}
