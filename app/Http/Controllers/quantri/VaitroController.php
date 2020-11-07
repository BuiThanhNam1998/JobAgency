<?php

namespace App\Http\Controllers\quantri;

use App\Http\Requests\QuanTriVien\VaiTroUpdateRequest;
use App\Http\Requests\VaiTroStoreRequest;
use App\Tinh\Thanhpho;
use App\vaitro;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class VaitroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vaitros = vaitro::query()->get();
        return view('quantri.vaitros.index',compact('vaitros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('quantri.vaitros.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(VaiTroStoreRequest $request)
    {
        $ten=$request->get('ten');
        $vaitromoi= vaitro::query()->create([
            'ten'=>$ten,
        ]);
        return redirect()->route('quantri.vaitros.index');
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
        $vaitro =vaitro::query()->find($id);
        return view('quantri.vaitros.edit',compact('vaitro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(VaiTroUpdateRequest $request, $id)
    {
        $ten = $request->get('ten');
        $vaitro = vaitro::query()->find($id);
        $vaitro->update([
            'ten'=> $ten,
        ]);
        return redirect()->route('quantri.vaitros.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        vaitro::query()->find($id)->delete();
        return redirect()->route('quantri.vaitros.index');
    }
}
