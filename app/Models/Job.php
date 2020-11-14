<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    public function career()
    {
        return $this->belongsTo(Career::class);
    }

    public function type()
    {
        return $this->belongsTo(JobType::class);
    }
}
