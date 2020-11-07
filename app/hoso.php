<?php

namespace App;

use App\Tinh\Thanhpho;
use Illuminate\Database\Eloquent\Model;

class hoso extends Model
{
    protected $table = 'hoso';
    public function thanhpho()
    {
        return $this->belongsTo(Thanhpho::class,'thanhpho_id','id');
    }
    public function user()
    {
        return $this->belongsTo(User::class,'ungvien_id','id');
    }
    public function trangthai_hoso()
    {
        return $this->belongsTo(trangthai_hoso::class,'trangthai_hoso_id','id');
    }
    public function tintuyendung()
    {
        return $this->belongsTo(tintuyendung::class,'tintuyendung_id','id');
    }
    public function noicapcmt()
    {
        return $this->belongsTo(Thanhpho::class,'noicapcmt_id','id');
    }
    protected $guarded=[];
    protected $dates = [
        'ngaycapcmt','ngaycothebatdaulamviec','ngaysinh'
    ];
}
