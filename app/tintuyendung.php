<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tintuyendung extends Model
{
    protected $table = 'tintuyendung';
    public function nganh()
    {
        return $this->belongsTo(Nganh::class, 'nganh_id', 'id');
    }

    public function hosos()
    {
        return $this->hasMany(hoso::class, 'tintuyendung_id', 'id');
    }

    public function trangthai_tintuyendung()
    {
        return $this->belongsTo(trangthai_tintuyendung::class,'trangthai_id','id');
    }
    protected $guarded=[];
    protected $dates = [
        'ngaydang'
    ];
}
