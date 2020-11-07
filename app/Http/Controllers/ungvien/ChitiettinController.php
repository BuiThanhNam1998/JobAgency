<?php

namespace App\Http\Controllers\ungvien;

use App\Http\Controllers\Controller;
use App\tintuyendung;
use App\trangthai_tintuyendung;
use Illuminate\Http\Request;

class ChitiettinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

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
        $tintuyendung_hots = tintuyendung::query()
            ->where('trangthai_id', $trangthais['Đang tuyển'])
            ->withCount(['hosos'])
            ->orderBy('hosos_count', 'DESC')
            ->limit(3)->get();
        ;
        $tintuyendung_news = tintuyendung::query()
            ->where('trangthai_id', $trangthais['Đang tuyển'])
            ->orderBy('created_at', 'DESC')
            ->limit(3)->get();

        $tintuyendung = tintuyendung::find($id);
        $tintuyendung_tuongtus = tintuyendung::where('nganh_id',$tintuyendung->nganh_id)->where('trangthai_id', $trangthais['Đang tuyển'])->paginate(6);
        return view('ungvien.chitiettins.show',compact('tintuyendung','tintuyendung_tuongtus','tintuyendung_hots','tintuyendung_news'));
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
