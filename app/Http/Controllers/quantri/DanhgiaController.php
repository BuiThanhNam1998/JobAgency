<?php

namespace App\Http\Controllers\quantri;

use App\Danhgia;
use App\Http\Requests\DanhGiaStoreRequest;
use App\Http\Requests\QuanTriVien\DanhGiaUpdateRequest;
use App\lichhen;
use App\Trinhdo;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class DanhgiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $danhgias = Danhgia::query()->get();
        return view('quantri.danhgias.index',compact('danhgias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
//        lichhen_id=1
        $lichhen_id = $request->get('lichhen_id');
        $lichhen = lichhen::query()->find($lichhen_id);
        $back_url = $request->get('back_url');
        // đã dánh giá rồi thì cho sửa
        if ($lichhen->danhgias()->where('user_id', auth()->id())->count()) {
            $danhgia = Danhgia::query()
                ->where('lichhen_id', $lichhen_id)
                ->where('user_id', auth()->id())->first();
            return $this->edit($danhgia->id, $request);
//            return redirect()->route('quantri.danhgias.edit', $danhgia->id)->with(['back_url' => $back_url]);
        }
        // nếu k tham gia phỏng vấn thì k đc đánh giá
        if ($lichhen->nhanviens()->where('user.id', auth()->id())->count() == 0) {
            return back()->withErrors(['Bạn không thể đánh giá buổi phỏng vấn này!']);
//            return redirect()->route('quantri.lichhens.index');
        }

        $lichhens = lichhen::query()->get();
        $users = User::query()->get();
        $trinhdos = Trinhdo::query()->get();
        $lichhen_id = $request->get('lichhen_id');
        $back_url = $request->get('back_url');
        return view('quantri.danhgias.create',compact(
            'lichhens','users','trinhdos','lichhen_id', 'lichhen',
            'back_url'
        ));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DanhGiaStoreRequest $request)
    {
        $lichhen_id = $request->get('lichhen_id');
        $lichhen = lichhen::query()->find($lichhen_id);
        // nếu k tham gia phỏng vấn thì k đc đánh giá
        if ($lichhen->nhanviens()->where('user.id', auth()->id())->count() == 0) {
            return back()->withErrors(['Bạn không thể đánh giá buổi phỏng vấn này!']);
//            return redirect()->route('quantri.lichhens.index');
        }

        $lichhen_id = $request->get('lichhen_id');
        $user_id = auth()->id();
        $trinhdo_id = $request->get('trinhdo_id');
        $diemchuyenmon = $request->get('diemchuyenmon');
        $nhanxet = $request->get('nhanxet');
        $danhgiaMoi = Danhgia::query()->create([
            'lichhen_id'=>$lichhen_id,
            'user_id'=>$user_id,
            'trinhdo_id'=>$trinhdo_id,
            'diemchuyenmon'=>$diemchuyenmon,
            'nhanxet'=>$nhanxet,
        ]);
        if($request->has('back_url')) {
            return redirect($request->get('back_url'));
        } else {
            return redirect()->route('quantri.lichhens.index');
        }
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
    public function edit($id, Request $request)
    {
        $danhgia = Danhgia::query()->find($id);

        // chỉ đc sửa đánh giá của mình
        if($danhgia->user_id != auth()->id()) {
            return back()->withErrors(['Bạn không thể sửa đánh giá này!']);
        }

        $lichhen = $danhgia->lichhen;
        $lichhens = lichhen::query()->get();
        $users = User::query()->get();
        $trinhdos = Trinhdo::query()->get();
        $back_url = $request->get('back_url');
        return view('quantri.danhgias.edit',compact(
            'lichhens','users','trinhdos','danhgia', 'lichhen',
            'back_url'
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DanhGiaUpdateRequest $request, $id)
    {

        $user_id = auth()->id();
        $danhgia = Danhgia::query()->find($id);

        // chỉ đc sửa đánh giá của mình
        if($danhgia->user_id != auth()->id()) {
            return back()->withErrors(['Bạn không thể sửa đánh giá này!']);
        }

        $trinhdo_id = $request->get('trinhdo_id');
        $diemchuyenmon = $request->get('diemchuyenmon');
        $nhanxet = $request->get('nhanxet');
        $danhgia->update([
            'trinhdo_id'=>$trinhdo_id,
            'diemchuyenmon'=>$diemchuyenmon,
            'nhanxet'=>$nhanxet,
        ]);
        if($request->has('back_url')) {
            return redirect($request->get('back_url'));
        } else {
            return redirect()->route('quantri.lichhens.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
//    public function destroy($id)
//    {
//        Danhgia::query()->find($id)->delete();
//        return redirect()->route('quantri.danhgias.index');
//    }
}
