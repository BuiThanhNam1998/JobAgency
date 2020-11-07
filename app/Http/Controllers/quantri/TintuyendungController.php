<?php

namespace App\Http\Controllers\quantri;

use App\Http\Requests\QuanTriVien\TinTuyenDungUpdateRequest;
use App\Http\Requests\TinTuyenDungStoreRequest;
use App\Nganh;
use App\tintuyendung;
use App\trangthai_tintuyendung;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class TintuyendungController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $tintuyendungs = tintuyendung::query();
        $filter_tieude = $request->get('filter_tieude');
        $filter_luong = $request->get('filter_luong');
        $filter_nganh = $request->get('filter_nganh');
        $filter_trangthai = $request->get('filter_trangthai');
        if($request->has('filter_tieude') && empty($request->get('filter_tieude')) == false) {
            $tintuyendungs = $tintuyendungs->where('tieude', 'like', "%$filter_tieude%");
        }

        if($request->has('filter_luong') && empty($request->get('filter_luong')) == false) {
            $tintuyendungs = $tintuyendungs->where('luong', 'like', "%$filter_luong%");
        }

        if($request->has('filter_nganh')&& empty($request->get('filter_nganh')) == false) {
            $tintuyendungs = $tintuyendungs->where('nganh_id', '=', $filter_nganh);
        }
        if($request->has('filter_trangthai') && empty($request->get('filter_trangthai')) == false) {
            $tintuyendungs = $tintuyendungs->where('trangthai_id', '=', "$filter_trangthai");
        }


        $tintuyendungs = $tintuyendungs->get();
        $nganhs = Nganh::query()->get();
        $trangthais = trangthai_tintuyendung::query()->get();
        return view('quantri.tintuyendungs.index',
            compact('tintuyendungs',
            'nganhs','trangthais',
            'filter_tieude',
            'filter_luong','filter_nganh','filter_trangthai'
            ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $trangthai_tintuyendungs = trangthai_tintuyendung::query()->get();
        $nganhs = Nganh::query()->get();
        return view('quantri.tintuyendungs.create', compact('trangthai_tintuyendungs','nganhs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TinTuyenDungStoreRequest $request)
    {
        $tieude = $request->get('tieude');
        $mota = $request->get('mota');
        $luong = $request->get('luong');
        $nganh_id=$request->get('nganh_id');
        $trangthai_id = $request->get('trangthai_id');
        $ngaydang = $request->get('ngaydang');
        $anh = '';
        if ($request->hasFile('anh') && $request->file('anh')->isValid()) {
            // File này có thực, bắt đầu đổi tên và move
            $fileExtension = $request->file('anh')->getClientOriginalExtension(); // Lấy . của file

            // Filename cực shock để khỏi bị trùng
            $fileName = time() . "_" . rand(0,9999999) . "_" . md5(rand(0,9999999)) . "." . $fileExtension;

            // Thư mục upload
            $uploadPath = public_path('image/career'); // Thư mục upload

            // Bắt đầu chuyển file vào thư mục
            $request->file('anh')->move($uploadPath, $fileName);
            $anh = $fileName;
        }
        $tintuyendungmoi = tintuyendung::query()->create([
            'tieude' => $tieude,
            'mota' => $mota,
            'luong' => $luong,
            'nganh_id' => $nganh_id,
            'trangthai_id' => $trangthai_id,
            'ngaydang' => $ngaydang,
            'anh'=>$anh
        ]);
        return redirect()->route('quantri.tintuyendungs.index');
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
        $tintuyendung =tintuyendung::query()->find($id);
        $nganhs = Nganh::query()->get();
        $trangthai_tintuyendungs = trangthai_tintuyendung::query()->get();
        return view('quantri.tintuyendungs.edit',compact('tintuyendung','nganhs','trangthai_tintuyendungs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TinTuyenDungUpdateRequest $request, $id)
    {
        $tieude = $request->get('tieude');
        $mota = $request->get('mota');
        $luong = $request->get('luong');
        $nganh_id=$request->get('nganh_id');
        $trangthai_id = $request->get('trangthai_id');
        $ngaydang = $request->get('ngaydang');
        $tintuyendung = tintuyendung::query()->find($id);
        if ($request->hasFile('anh') && $request->file('anh')->isValid()) {
            // File này có thực, bắt đầu đổi tên và move
            $fileExtension = $request->file('anh')->getClientOriginalExtension(); // Lấy . của file

            // Filename cực shock để khỏi bị trùng
            $fileName = time() . "_" . rand(0,9999999) . "_" . md5(rand(0,9999999)) . "." . $fileExtension;

            // Thư mục upload
            $uploadPath = public_path('image/career'); // Thư mục upload

            // Bắt đầu chuyển file vào thư mục
            $request->file('anh')->move($uploadPath, $fileName);
            $anh = $fileName;
        } else {
            $anh = $tintuyendung->anh;
        }

        $tintuyendung->update([
            'tieude'=> $tieude,
            'mota'=>$mota,
            'luong' =>$luong,
            'nganh_id'=>$nganh_id,
            'trangthai_id'=>$trangthai_id,
            'ngaydang'=>$ngaydang,
            'anh'=>$anh
        ]);
        return redirect()->route('quantri.tintuyendungs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        tintuyendung::query()->find($id)->delete();
        return redirect()->route('quantri.tintuyendungs.index');
    }

}
