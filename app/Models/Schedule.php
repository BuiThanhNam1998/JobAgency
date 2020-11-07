<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    public function users()
    {
        return $this->belongsToMany(User::class, 'schedule_user',
            'schedule_id', 'user_id');
    }
}