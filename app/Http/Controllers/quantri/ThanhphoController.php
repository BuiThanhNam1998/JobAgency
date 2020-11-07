<?php

namespace App\Http\Controllers\quantri;

use App\Http\Requests\QuanTriVien\ThanhPhoUpdateRequest;
use App\Http\Requests\ThanhPhoStoreRequest;
use App\Tinh\Thanhpho;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class ThanhphoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $thanhphos = Thanhpho::query()->get();
        return view('quantri.thanhphos.index',compact('thanhphos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('quantri.thanhphos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ThanhPhoStoreRequest $request)
    {
        $ten = $request->get('ten');
        $thanhphomoi = Thanhpho::query()->create([
            'ten'=> $ten,
        ]);
        return redirect()->route('quantri.thanhphos.index');
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
        $thanhpho = Thanhpho::query()->find($id);
        return view('quantri.thanhphos.edit', compact('thanhpho'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ThanhPhoUpdateRequest $request, $id)
    {
        $ten = $request->get('ten');
        $thanhpho = Thanhpho::query()->find($id);
        $thanhpho->update([
            'ten'=> $ten,
        ]);
        return redirect()->route('quantri.thanhphos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Thanhpho::query()->find($id)->delete();
        return redirect()->route('quantri.thanhphos.index');
    }
}
