<?php

namespace App\Http\Controllers\quantri;

use App\Danhgia;
use App\hoso;
use App\Http\Requests\LichHenStoreRequest;
use App\Http\Requests\QuanTriVien\LichHenUpdateRequest;
use App\lichhen;
use App\Mail\ThongBaoHuyLichHen_ChoNhanVien;
use App\Mail\ThongBaoLichHenChoNhanVien;
use App\tintuyendung;
use App\trangthai_hoso;
use App\trangthai_lichhen;
use App\trangthai_tintuyendung;
use App\User;
use App\vaitro;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class LichhenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Request $request)
    {
        $lichhens = lichhen::query();
        $user = auth()->user();
        if($user->vaitro->ten == 'Nhân viên') {
            $lichhens->whereHas('nhanviens', function (Builder $query) use ($user) {
               $query->where('user.id', $user->id);
            });
        }
        $filter_hoso_email = $request->get('filter_hoso_email');
        $filter_hoso_ten = $request->get('filter_hoso_ten');
        $filter_hoso_socmt = $request->get('filter_hoso_socmt');
        $filter_trang_thai_lich_hen = $request->get('filter_trang_thai_lich_hen');
        if($request->has('filter_hoso_email') && empty($request->get('filter_hoso_email')) == false) {
            $lichhens = $lichhens->whereHas('hoso', function ($query) use ($filter_hoso_email) {
                $query->where('email', 'like', "%$filter_hoso_email%");
            });
        }
        if($request->has('filter_hoso_ten') && empty($request->get('filter_hoso_ten')) == false) {
            $lichhens = $lichhens->whereHas('hoso', function ($query) use ($filter_hoso_ten) {
                $query->where('ten', 'like', "%$filter_hoso_ten%");
            });
        }
        if($request->has('filter_hoso_socmt') && empty($request->get('filter_hoso_socmt')) == false) {
            $lichhens = $lichhens->whereHas('hoso', function ($query) use ($filter_hoso_socmt) {
                $query->where('socmt', 'like', "%$filter_hoso_socmt%");
            });
        }
        if($request->has('filter_trang_thai_lich_hen') && empty($request->get('filter_trang_thai_lich_hen')) == false) {
            $lichhens = $lichhens->where('trangthai_id', '=', "$filter_trang_thai_lich_hen");
        }


        $lichhens = $lichhens->get()->load('nhanviens');
        $hoso_id = lichhen::query()->get();
        $trangthailichhens = trangthai_lichhen::query()->get();
        $trangthailichhen_plucks = $trangthailichhens->pluck('id','ten');

        return view('quantri.lichhens.index',compact(
            'lichhens',
            'hoso_id',
            'filter_hoso_email',
            'filter_hoso_ten',
            'filter_hoso_socmt',
            'trangthailichhens',
            'filter_trang_thai_lich_hen',
            'trangthailichhen_plucks'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $trangthai_hosos = trangthai_hoso::query()->get();
        $trangthai_hoso_plucks = $trangthai_hosos->pluck('id', 'ten');
        $trangthai_lichhens = trangthai_lichhen::query()->get();
        $hoso_id = $request->get('hoso_id');
        $hoso = hoso::query()->find($hoso_id);
        $hosos = hoso::query()
            ->whereIn('trangthai_hoso_id', [
                $trangthai_hoso_plucks['Được chấp nhận CV'],
                $trangthai_hoso_plucks['Chờ tiếp tục phỏng vấn'],
                $trangthai_hoso_plucks['Không tham gia phỏng vấn'],
            ])
            ->get();
        $vaitros = vaitro::all()->pluck('id', 'ten');
        $nhanviens = User::query()->where('vaitro_id', '<>', $vaitros['Ứng viên'])->get();

        return view('quantri.lichhens.create',compact(
            'trangthai_lichhens','hoso_id', 'hosos',
            'nhanviens',
            'hoso'
        ));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LichHenStoreRequest $request)
    {
//        return $request->all();
        $thoigian = $request->get('thoigian');
        $thoigian = Carbon::create($thoigian);
        $diadiem = $request->get('diadiem');
        $mota = $request->get('mota');
        $trangthai_lichhens = trangthai_lichhen::query()->get()->pluck('id','ten');
        $trangthai_id=$trangthai_lichhens['Chờ phỏng vấn'];
        $hoso_id=$request->get('hoso_id');
        $lichhenmoi = lichhen::query()->create([
           'thoigian'=>$thoigian,
           'diadiem'=>$diadiem,
            'mota'=>$mota,
            'trangthai_id'=>$trangthai_id,
            'hoso_id'=>$hoso_id
        ]);
        $trangthailichhens = trangthai_lichhen::query()->get();
        $trangthailichhen_plucks = $trangthailichhens->pluck('id','ten');
        $hoso_id = $request->get('hoso_id');

        $hoso = hoso::query()->find($hoso_id);
        $trangthaihosos = trangthai_hoso::query()->get();
        $trangthaihosos_plucks = $trangthaihosos->pluck('id','ten');

        if($lichhenmoi->trang_thai_id != $trangthai_id && $trangthai_id == $trangthailichhen_plucks['Chờ phỏng vấn']) {
            \Mail::to($lichhenmoi->hoso)->send(new \App\Mail\Thongbaolichhen($lichhenmoi));
            $hoso->update([
                'trangthai_hoso_id_truoc_day' => $hoso->trangthai_hoso_id,
                'trangthai_hoso_id' => $trangthaihosos_plucks['Đặt lịch thành công']
            ]);
        }
        $nhanvien_ids = $request->get('nhanvien_ids');
        $lichhenmoi->nhanviens()->sync($nhanvien_ids);
        return redirect()->route('quantri.lichhens.index');
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
        $lichhen = lichhen::query()->find($id);
        $trangthai_lichhens = trangthai_lichhen::query()->get();
        $hosos =hoso::query()->get();

        $trangthailichhens = trangthai_lichhen::query()->get();
        $trangthailichhen_plucks = $trangthailichhens->pluck('id','ten');

        $lichhen = lichhen::query()->find($id);
        if ($lichhen->danhgias()->count() || $lichhen->trangthai_id == $trangthailichhen_plucks['Đã hoàn tất, không tham gia phỏng vấn']) {

            return back()->withErrors(['Bạn không thể sửa buổi phỏng vấn đã diễn ra']);
        }
        $vaitros = vaitro::all()->pluck('id', 'ten');
        $nhanviens = User::query()->where('vaitro_id', '<>', $vaitros['Ứng viên'])->get();
        $nhanvien_ids = $lichhen->nhanviens()->pluck('nhanvien_id')->toArray();
        return view('quantri.lichhens.edit',compact('lichhen','trangthai_lichhens','hosos',
        'nhanviens', 'nhanvien_ids'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(LichHenUpdateRequest $request, $id)
    {
        $thoigian = $request->get('thoigian');
        $thoigian = Carbon::create($thoigian);
        $diadiem=$request->get('diadiem');
        $mota=$request->get('mota');

        $lichhen = lichhen::query()->find($id);
        if($request->has('trangthai_id')) {
            $trangthai_id = $request->get('trangthai_id');
        } else {
            $trangthai_id = $lichhen->trangthai_id;
        }


//        $hoso_id = $request->get('hoso_id');
        $lichhen = lichhen::query()->find($id);

        $trangthailichhens = trangthai_lichhen::query()->get();
        $trangthailichhen_plucks = $trangthailichhens->pluck('id','ten');
        $hoso = $lichhen->hoso;
        $trangthaihosos = trangthai_hoso::query()->get();
        $trangthaihosos_plucks = $trangthaihosos->pluck('id','ten');

        if($lichhen->trang_thai_id != $trangthai_id && $trangthai_id == $trangthailichhen_plucks['Đã hoàn tất, từ chối ứng viên']) {
            \Mail::to($lichhen->hoso)->send(new \App\Mail\TuChoiUngVien($lichhen));
            $hoso->update(['trangthai_hoso_id' => $trangthaihosos_plucks['Phỏng vấn thất bại']]);
         }
        if($lichhen->trang_thai_id != $trangthai_id && $trangthai_id == $trangthailichhen_plucks['Đã hoàn tất, được nhận làm việc']) {
            \Mail::to($lichhen->hoso)->send(new \App\Mail\ChapNhanUngVien($lichhen->hoso));
            $hoso->update(['trangthai_hoso_id' => $trangthaihosos_plucks['Đã trở thành nhân viên']]);
        }
        if($lichhen->trang_thai_id != $trangthai_id && $trangthai_id == $trangthailichhen_plucks['Tiếp tục phỏng vấn']) {
            \Mail::to($lichhen->hoso)->send(new \App\Mail\TiepTucPhongVan($lichhen));
            $hoso->update(['trangthai_hoso_id' => $trangthaihosos_plucks['Chờ tiếp tục phỏng vấn']]);
        }
        if($lichhen->trang_thai_id != $trangthai_id && $trangthai_id == $trangthailichhen_plucks['Đã hoàn tất, không tham gia phỏng vấn']) {
            \Mail::to($lichhen->hoso)->send(new \App\Mail\ThongBaoHuyLichHen_ChoUngVien($lichhen));

                $nhanviens = $lichhen->nhanviens;
                foreach ($nhanviens as $nhanvien) {
                    \Mail::to($nhanvien)->send(new ThongBaoHuyLichHen_ChoNhanVien($lichhen));
                }

            $hoso->update(['trangthai_hoso_id' => $trangthaihosos_plucks['Không tham gia phỏng vấn']]);
        }

        $lichhen->update([
            'thoigian'=> $thoigian,
            'diadiem'=>$diadiem,
            'mota'=>$mota,
            'trangthai_id'=>$trangthai_id,
//            'hoso_id'=>$hoso_id
        ]);
        $nhanvien_ids = $request->get('nhanvien_ids');
        $nhanvien_ids = array_merge($nhanvien_ids, $lichhen->danhgias()->pluck('user_id')->toArray());
        $lichhen->nhanviens()->sync($nhanvien_ids);
        return redirect()->route('quantri.lichhens.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lichhen = lichhen::query()->find($id);
        if ($lichhen->danhgias()->count()) {
            return back()->withErrors(['Bạn không thể xóa buổi phỏng vấn đã diễn ra']);
        }
        $lichhen =lichhen::query()->find($id);

        $lichhen->hoso->update([
            'trangthai_hoso_id' => $lichhen->hoso->trangthai_hoso_id_truoc_day,
        ]);

        $lichhen->delete();
        return redirect()->route('quantri.lichhens.index');
    }
}
