<?php

namespace App\Models;

use App\Notifications\ResetPassword;
use App\Notifications\Verify;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    const USER = 1;
    const ADMIN = 2;
    const EMPLOYER = 3;

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function jobs()
    {
        return $this->hasMany('App\Models\Job');
    }

    public function applications()
    {
        return $this->hasManyThrough('App\Models\Application', 'App\Models\Job');
    }

    public function hasRole($id, $role)
    {
        return User::where('role_id', $role)->where('id', $id)->first();
    }

}
