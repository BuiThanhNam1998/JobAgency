<?php

namespace App\Http\Controllers\quantri;

use App\Http\Requests\QuanTriVien\TrangThaiLichHenUpdateRequest;
use App\Http\Requests\TrangThaiLichHenStoreRequest;
use App\trangthai_lichhen;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class Trangthai_lichhenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trangthai_lichhens =trangthai_lichhen::query()->get();
        return view('quantri.trangthai_lichhens.index',compact('trangthai_lichhens'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('quantri.trangthai_lichhens.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TrangThaiLichHenStoreRequest $request)
    {
        $ten = $request->get('ten');
        $trangthai_lichhenmoi = trangthai_lichhen::query()->create([
            'ten'=>$ten,
        ]);
        return redirect()->route('quantri.trangthai_lichhens.index');
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
        $trangthai_lichhen = trangthai_lichhen::query()->find($id);
        return view('quantri.trangthai_lichhens.edit',compact('trangthai_lichhen'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TrangThaiLichHenUpdateRequest $request, $id)
    {
        $ten= $request->get('ten');
        $trangthai_lichhen = trangthai_lichhen::query()->find($id);
        $trangthai_lichhen->update([
           'ten'=>$ten,
        ]);
        return redirect()->route('quantri.trangthai_lichhens.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        trangthai_lichhen::query()->find($id)->delete();
        return redirect()->route('quantri.trangthai_lichhens.index');
    }
}
