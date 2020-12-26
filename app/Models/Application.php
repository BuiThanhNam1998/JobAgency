<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $table = 'applications';
    protected $fillable = [
        'job_id',
        'profile_id',
        'status_id'
    ];

    public function job()
    {
        return $this->belongsTo(Job::class);
    }

    public function profile()
    {
        return $this->belongsTo(Profile::class);
    }

    public function status()
    {
        return $this->belongsTo(ApplicationStatus::class);
    }
}
