<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobStatus extends Model
{
    const AVAILABLE = 1,
          EXPIRED   = 2;
}