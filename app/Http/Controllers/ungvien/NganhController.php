<?php

namespace App\Http\Controllers\ungvien;

use App\Http\Controllers\Controller;
use App\Nganh;
use App\tintuyendung;
use App\trangthai_tintuyendung;
use Illuminate\Http\Request;

class NganhController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trangthais = trangthai_tintuyendung::query()->get()->pluck('id', 'ten');
        $tintuyendung_theonganhs = tintuyendung::query()->where('trangthai_id', $trangthais['Đang tuyển'])->paginate(9);
        $count_tintuyendung_theonganhs = tintuyendung::query()->where('trangthai_id', $trangthais['Đang tuyển'])->count();
        $tintuyendung_nganh_khacs = tintuyendung::query()->where('trangthai_id', $trangthais['Đang tuyển'])->inRandomOrder()->paginate(3);
        $nganhs = Nganh::all();
        return view('ungvien.nganhs.index',compact(
            'tintuyendung_theonganhs',
            'count_tintuyendung_theonganhs',
            'tintuyendung_nganh_khacs',
            'nganhs'
        ));
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
        $trangthais = trangthai_tintuyendung::query()->get()->pluck('id', 'ten');
        $tintuyendung_theonganhs = tintuyendung::query()->where('nganh_id', $id)->where('trangthai_id', $trangthais['Đang tuyển'])->paginate(8);
        $count_tintuyendung_theonganhs = tintuyendung::query()->where('nganh_id', $id)->where('trangthai_id', $trangthais['Đang tuyển'])->count();
        $tintuyendung_nganh_khacs = tintuyendung::query()->where('trangthai_id', $trangthais['Đang tuyển'])->where('id','<>',$id)->inRandomOrder()->paginate(3);
        $nganhs = Nganh::all();
        $nganh_tintuyendungs = Nganh::query()->find($id);
        return view('ungvien.nganhs.show',compact(
            'tintuyendung_theonganhs',
            'count_tintuyendung_theonganhs',
            'nganhs',
            'nganh_tintuyendungs',
            'tintuyendung_nganh_khacs'
        ));
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
