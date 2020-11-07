<?php

namespace App\Http\Controllers\quantri;

use App\Http\Requests\QuanTriVien\TrangThaiHoSoUpdateRequest;
use App\Http\Requests\TrangThaiHoSoStoreRequest;
use App\trangthai_hoso;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class Trangthai_hosoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trangthai_hosos = trangthai_hoso::query()->get();
        return view('quantri.trangthai_hosos.index',compact('trangthai_hosos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('quantri.trangthai_hosos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TrangThaiHoSoStoreRequest $request)
    {
        $ten = $request->get('ten');
        $trangthai_hosomoi = trangthai_hoso::query()->create([
            'ten'=>$ten,
        ]);
        return redirect()->route('quantri.trangthai_hosos.index');
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
        $trangthai_hoso = trangthai_hoso::query()->find($id);
        return view('quantri.trangthai_hosos.edit',compact('trangthai_hoso'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TrangThaiHoSoUpdateRequest $request, $id)
    {
        $ten =$request->get('ten');
        $trangthai_hoso = trangthai_hoso::query()->find($id);
        $trangthai_hoso->update([
            'ten' => $ten,
        ]);
        return redirect()->route('quantri.trangthai_hosos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        trangthai_hoso::query()->find($id)->delete();
        return redirect()->route('quantri.trangthai_hosos.index');
    }
}
