<?php

namespace App\Http\Controllers\quantri;

use App\Http\Requests\NganhStoreRequest;
use App\Http\Requests\QuanTriVien\NganhUpdateRequest;
use App\Nganh;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class NganhController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nganhs = Nganh::query()->get();
        return view('quantri.nganhs.index', compact('nganhs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('quantri.nganhs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NganhStoreRequest $request)
    {
        $ten = $request->get('ten');
        $nganhMoi = Nganh::query()->create([
            'ten' => $ten,
        ]);
        return redirect()->route('quantri.nganhs.index');
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
        $nganh = Nganh::query()->find($id);
        return view('quantri.nganhs.edit',compact('nganh'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(NganhUpdateRequest $request, $id)
    {
        $ten =$request->get('ten');
        $nganh = Nganh::query()->find($id);
        $nganh->update([
            'ten' => $ten,
        ]);
        return redirect()->route('quantri.nganhs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Nganh::query()->find($id)->delete();
        return redirect()->route('quantri.nganhs.index');
    }
}
