<?php

namespace App\Http\Controllers\quantri;

use App\hoso;
use App\Http\Requests\HosoStoreRequest;
use App\Http\Requests\QuanTriVien\HoSoUpdateRequest;
use App\Mail\BiTuChoiCV;
use App\Nganh;
use App\Tinh\Thanhpho;
use App\tintuyendung;
use App\trangthai_hoso;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
class HosoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $hosos = hoso::query();
        $filter_mail = $request->get('filter_mail');
        $filter_trang_thai_ho_so_id = $request->get('filter_trang_thai_ho_so_id');
        $filter_name = $request->get('filter_name');
        $filter_tieude = $request->get('filter_tieude');
        $filter_nganh_id = $request->get('filter_nganh_id');
        $filter_from_date = $request->get('filter_from_date');
        $filter_to_date = $request->get('filter_to_date');
        if($request->has('filter_mail') && empty($request->get('filter_mail')) == false) {
            $hosos = $hosos->where('email', 'like', "%$filter_mail%");
        }

        if($request->has('filter_name') && empty($request->get('filter_name')) == false) {
            $hosos = $hosos->where('ten', 'like', "%$filter_name%");
        }

        if($request->has('filter_trang_thai_ho_so_id')&& empty($request->get('filter_trang_thai_ho_so_id')) == false) {
            $hosos = $hosos->where('trangthai_hoso_id', '=', $filter_trang_thai_ho_so_id);
        }
        if($request->has('filter_tieude') && empty($request->get('filter_tieude')) == false) {
            $hosos = $hosos->where('tintuyendung_id', '=', "$filter_tieude");
        }
        if($request->has('filter_nganh_id') && empty($request->get('filter_nganh_id')) == false) {
            $hosos = $hosos->whereHas('tintuyendung', function ($query) use ($filter_nganh_id) {
                $query->where('nganh_id', '=', "$filter_nganh_id");
            });
        }
        if ($request->has('filter_from_date') && empty($request->get('filter_from_date')) == false) {
            $hosos = $hosos->whereDate('created_at', '>=', $request->get('filter_from_date'));
        }

        if ($request->has('filter_to_date') && empty($request->get('filter_to_date')) == false) {
            $hosos = $hosos->whereDate('created_at', '<=', $request->get('filter_to_date'));
        }

        $hosos = $hosos->get();
        $trangthaihosos = trangthai_hoso::query()->get();
        $trangthaihoso_plucks = $trangthaihosos->pluck('id', 'ten');
        $tintuyendungs = tintuyendung::query()->get();
        $nganhs = Nganh::query()->get();
        return view('quantri.hosos.index',compact(
            'hosos',
            'trangthaihosos',
            'tintuyendungs',
            'nganhs',
            'filter_mail',
            'filter_name',
            'filter_trang_thai_ho_so_id',
            'filter_tieude',
            'filter_nganh_id',
            'trangthaihoso_plucks',
            'filter_from_date',
            'filter_to_date'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $vaitro_quantrivien_id = \App\vaitro::query()->where('ten', '=','Quản trị viên')->first()->id;
        $quantriviens = \App\User::query()->where("vaitro_id", $vaitro_quantrivien_id)->get();
        $thanhphos = Thanhpho::query()->get();
        $trangthai_hosos = trangthai_hoso::query()->get();
        $nganh_tintuyendung_id = Nganh::query()->get();
        $nganh_tintuyendungs = tintuyendung::query()->where("nganh_id",$nganh_tintuyendung_id)->get();

        $tintuyendungs = tintuyendung::query()->get();

        return view('quantri.hosos.create',compact('thanhphos',
            'quantriviens','trangthai_hosos'
            ,'tintuyendungs',
            'nganh_tintuyendungs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HosoStoreRequest $request) // sua HoSoStoreRequest ơ day
    {
        $ten=$request->get('ten');
        $socmt=$request->get('socmt');
        $ngaycapcmt=$request->get('ngaycapcmt');
        $noicapcmt_id=$request->get('noicapcmt_id');
        $ngaysinh =$request->get('ngaysinh');
        $gioitinh=$request->get('gioitinh');
        $ngaycothebatdaulamviec=$request->get('ngaycothebatdaulamviec');
        $sodienthoai=$request->get('sodienthoai');
        $email=$request->get('email');
        $thanhpho_id=$request->get('thanhpho_id');
        $quanhuyen=$request->get('quanhuyen');
        $diachichitiet=$request->get('diachichitiet');
        $hocvan=$request->get('hocvan');
        $kinhnghiemlamviec=$request->get('kinhnghiemlamviec');
        $ngonngu=$request->get('ngonngu');
        $cacgiaychungnhan_chungchi=$request->get('cacgiaychungnhan_chungchi');
//        $ungvien_id=$request->get('ungvien_id');
        $ungvien_id = auth()->user()->id;
//        $trangthai_hoso_id=$request->get('trangthai_hoso_id');
        $trangthaihosos = trangthai_hoso::query()->get()->pluck('id', 'ten');
        $trangthai_hoso_id = $trangthaihosos['Chờ phê duyệt CV'];
        $tintuyendung_id=$request->get('tintuyendung_id');


        $cv = '';
        if ($request->hasFile('cv') && $request->file('cv')->isValid()) {
            // File này có thực, bắt đầu đổi tên và move
            $fileExtension = $request->file('cv')->getClientOriginalExtension(); // Lấy . của file

            // Filename cực shock để khỏi bị trùng
            $fileName = time() . "_" . rand(0,9999999) . "_" . md5(rand(0,9999999)) . "." . $fileExtension;

            // Thư mục upload
            $uploadPath = public_path('image/cv'); // Thư mục upload

            // Bắt đầu chuyển file vào thư mục
            $request->file('cv')->move($uploadPath, $fileName);
            $cv = $fileName;
        }

        $hososmoi = hoso::query()->create([
            'ten'=>$ten,
            'socmt'=>$socmt,
            'ngaycapcmt'=>$ngaycapcmt,
            'noicapcmt_id'=>$noicapcmt_id,
            'thanhpho_id'=>$thanhpho_id,
            'ngaysinh'=>$ngaysinh,
            'gioitinh'=>$gioitinh,
            'ngaycothebatdaulamviec'=>$ngaycothebatdaulamviec,
            'sodienthoai'=>$sodienthoai,
            'email'=>$email,
            'quanhuyen'=>$quanhuyen,
            'diachichitiet'=>$diachichitiet,
            'hocvan'=>$hocvan,
            'kinhnghiemlamviec'=>$kinhnghiemlamviec,
            'ngonngu'=>$ngonngu,
            'cacgiaychungnhan_chungchi'=> $cacgiaychungnhan_chungchi,
            'ungvien_id'=>$ungvien_id,
            'trangthai_hoso_id'=>$trangthai_hoso_id,
            'tintuyendung_id'=>$tintuyendung_id,
            'cv' => $cv,
        ]);
        return redirect()->route('quantri.hosos.index');
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
        $hoso =hoso::query()->find($id);
        $thanhphos = Thanhpho::query()->get();
        $ungviens = User::query()->get();
        $trangthai_hosos = trangthai_hoso::query()->get();
        $trangthaihosos = trangthai_hoso::query()->get()->pluck('id', 'ten');

        if($hoso->trangthai_hoso_id != $trangthaihosos['Chờ phê duyệt CV']) {
            return back()->withErrors(['Bạn không thể sửa CV đã duyệt']);
        }
        $tintuyendungs =tintuyendung::query()->get();
        return view('quantri.hosos.edit',compact('hoso','thanhphos','ungviens','trangthai_hosos','tintuyendungs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(HoSoUpdateRequest $request, $id)
    {
        $ten = $request->get('ten');
        $socmt = $request->get('socmt');
        $ngaycapcmt = $request->get('ngaycapcmt');
        $noicapcmt_id = $request->get('noicapcmt_id');
        $ngaysinh = $request->get('ngaysinh');
        $gioitinh = $request->get('gioitinh');
        $ngaycothebatdaulamviec = $request->get('ngaycothebatdaulamviec');
        $sodienthoai = $request->get('sodienthoai');
        $email = $request->get('email');
        $thanhpho_id = $request->get('thanhpho_id');
        $quanhuyen = $request->get('quanhuyen');
        $diachichitiet = $request->get('diachichitiet');
        $hocvan = $request->get('hocvan');
        $kinhnghiemlamviec = $request->get('kinhnghiemlamviec');
        $ngonngu = $request->get('ngonngu');
        $cacgiaychungnhan_chungchi = $request->get('cacgiaychungnhan_chungchi');
//        $ungvien_id = $request->get('ungvien_id');
        $ungvien_id = auth()->user()->id;

        $trangthaihosos = trangthai_hoso::query()->get()->pluck('id', 'ten');

        $tintuyendung_id = $request->get('tintuyendung_id');
        $hoso = hoso::query()->find($id);
        if ($request->hasFile('cv') && $request->file('cv')->isValid()) {
            // File này có thực, bắt đầu đổi tên và move
            $fileExtension = $request->file('cv')->getClientOriginalExtension(); // Lấy . của file

            // Filename cực shock để khỏi bị trùng
            $fileName = time() . "_" . rand(0,9999999) . "_" . md5(rand(0,9999999)) . "." . $fileExtension;

            // Thư mục upload
            $uploadPath = public_path('image/cv'); // Thư mục upload

            // Bắt đầu chuyển file vào thư mục
            $request->file('cv')->move($uploadPath, $fileName);
            $cv = $fileName;
        } else {
            $cv = $hoso->cv;
        }

        if($request->has('trangthai_hoso_id')) {
            $trangthai_hoso_id = $request->get('trangthai_hoso_id');
        } else {
            $trangthai_hoso_id = $hoso->trangthai_hoso_id;
        }

        $trangthaihosos = trangthai_hoso::query()->get();
        $trangthaihoso_plucks = $trangthaihosos->pluck('id', 'ten');

        if($hoso->trang_thai_id != $trangthai_hoso_id && $trangthai_hoso_id == $trangthaihoso_plucks['Được chấp nhận CV']) {
            Mail::to($hoso)->send(new \App\Mail\DuocChapNhanCV($hoso));
        }
        if($hoso->trang_thai_id != $trangthai_hoso_id && $trangthai_hoso_id == $trangthaihoso_plucks['Bị từ chối CV']) {
            Mail::to($hoso)->send(new \App\Mail\BiTuChoiCV($hoso));
        }
        $hoso -> update([
            'cv'=>$cv,
            'ten'=>$ten,
            'socmt'=>$socmt,
            'ngaycapcmt'=>$ngaycapcmt,
            'noicapcmt_id'=>$noicapcmt_id,
            'ngaysinh'=>$ngaysinh,
            'gioitinh'=>$gioitinh,
            'ngaycothebatdaulamviec'=>$ngaycothebatdaulamviec,
            'sodienthoai'=>$sodienthoai,
            'email'=>$email,
            'thanhpho_id'=>$thanhpho_id,
            'quanhuyen'=>$quanhuyen,
            'diachichitiet'=>$diachichitiet,
            'hocvan'=>$hocvan,
            'kinhnghiemlamviec'=>$kinhnghiemlamviec,
            'ngonngu'=>$ngonngu,
            'cacgiaychungnhan_chungchi'=>$cacgiaychungnhan_chungchi,
//            'ungvien_id'=>$ungvien_id,
            'trangthai_hoso_id'=>$trangthai_hoso_id,
            'tintuyendung_id'=>$tintuyendung_id,
        ]);
        return redirect()->route('quantri.hosos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        hoso::query()->find($id)->delete();
        return redirect()->route('quantri.hosos.index');
    }
}
