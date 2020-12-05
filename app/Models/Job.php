<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Job extends Model
{
    use Notifiable,
        SoftDeletes;

    public function career()
    {
        return $this->belongsTo(Career::class);
    }

    public function type()
    {
        return $this->belongsTo(JobType::class);
    }

    public function status()
    {
        return $this->belongsTo(JobStatus::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class)->withDefault(function ($city) {
            $city->name = 'Updating';
        });
    }
}
