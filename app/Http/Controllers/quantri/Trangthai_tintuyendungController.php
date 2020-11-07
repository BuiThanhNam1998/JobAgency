<?php

namespace App\Http\Controllers\quantri;

use App\Http\Requests\QuanTriVien\TrangThaiTinTuyenDungUpdateRequest;
use App\Http\Requests\TrangThaiTinTuyenDungStoreRequest;
use App\trangthai_tintuyendung;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class Trangthai_tintuyendungController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trangthai_tintuyendungs = trangthai_tintuyendung::query()->get();
        return view('quantri.trangthai_tintuyendungs.index',compact('trangthai_tintuyendungs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('quantri.trangthai_tintuyendungs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TrangThaiTinTuyenDungStoreRequest $request)
    {
        $ten = $request->get('ten');
        $trangthai_tintuyendungmoi = trangthai_tintuyendung::query()->create([
            'ten'=>$ten,
        ]);
        return redirect()->route('quantri.trangthai_tintuyendungs.index');
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
        $trangthai_tintuyendung = trangthai_tintuyendung::query()->find($id);
        return view('quantri.trangthai_tintuyendungs.edit',compact('trangthai_tintuyendung'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TrangThaiTinTuyenDungUpdateRequest $request, $id)
    {
        $ten =$request->get('ten');
        $trangthai_tintuyendung = trangthai_tintuyendung::query()->find($id);
        $trangthai_tintuyendung->update([
            'ten' => $ten,
        ]);
        return redirect()->route('quantri.trangthai_tintuyendungs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        trangthai_tintuyendung::query()->find($id)->delete();
        return redirect()->route('quantri.trangthai_tintuyendungs.index');
    }
}
