<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Danhgia extends Model
{
    protected $table = 'danhgia';
    public function lichhen()
    {
        return $this->belongsTo(lichhen::class,'lichhen_id','id');
    }
    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
    public function trinhdo()
    {
        return $this->belongsTo(Trinhdo::class,'trinhdo_id','id');
    }
    protected $guarded=[];
}
