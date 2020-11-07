<?php

namespace App\Http\Controllers\ungvien;

use App\Http\Controllers\Controller;
use App\Slide;
use App\tintuyendung;
use App\trangthai_tintuyendung;
use Illuminate\Http\Request;

class TrangchuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $slide = Slide::all();
        //return view('page.trangchus',['slide'=>$slide]);
        $trangthais = trangthai_tintuyendung::query()->get()->pluck('id', 'ten');
        $tintuyendung_news = tintuyendung::query()

            ->where('trangthai_id', $trangthais['Đang tuyển'])
            ->orderBy('created_at', 'DESC')->paginate(8);
        $count_tintuyendung_news = tintuyendung::where('trangthai_id', $trangthais['Đang tuyển'])->count();

        $tintuyendung_hots = tintuyendung::query()
            ->where('trangthai_id', $trangthais['Đang tuyển'])
            ->withCount(['hosos'])
            ->orderBy('hosos_count', 'DESC')
            ->paginate(8)
        ;

        return view('ungvien.trangchus.index',compact('slide','tintuyendung_news','count_tintuyendung_news','tintuyendung_hots'));
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
