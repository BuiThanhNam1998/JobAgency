<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lichhen extends Model
{
    protected $table = 'lichhen';
    public function trangthai_lichhen()
    {
        return $this->belongsTo(trangthai_lichhen::class,'trangthai_id','id');
    }
    public function hoso()
    {
        return $this->belongsTo(hoso::class,'hoso_id','id');
    }
    public function danhgias()
    {
        return $this->hasMany(Danhgia::class,'lichhen_id','id');
    }

    public function nhanviens()
    {
        return $this->belongsToMany(User::class, 'lichhen_nhanvien',
            'lichhen_id', 'nhanvien_id');
    }

    protected $guarded=[];
    protected $dates = [
        'thoigian',
    ];
}
