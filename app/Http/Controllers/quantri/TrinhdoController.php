<?php

namespace App\Http\Controllers\quantri;

use App\Http\Requests\QuanTriVien\TrinhDoUpdateRequest;
use App\Http\Requests\TrinhDoStoreRequest;
use App\Trinhdo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class TrinhdoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trinhdos = Trinhdo::query()->get();
        return view('quantri.trinhdos.index',compact('trinhdos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('quantri.trinhdos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TrinhDoStoreRequest $request)
    {
        $ten = $request->get('ten');
        $trinhdoMoi = Trinhdo::query()->create([
            'ten' => $ten,
        ]);
        return redirect()->route('quantri.trinhdos.index');
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
        $trinhdo = Trinhdo::query()->find($id);
        return view('quantri.trinhdos.edit',compact('trinhdo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TrinhDoUpdateRequest $request, $id)
    {
        $ten =$request->get('ten');
        $trinhdo = Trinhdo::query()->find($id);
        $trinhdo->update([
            'ten' => $ten,
        ]);
        return redirect()->route('quantri.trinhdos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Trinhdo::query()->find($id)->delete();
        return redirect()->route('quantri.trinhdos.index');
    }
}
