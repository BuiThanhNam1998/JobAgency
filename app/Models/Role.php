<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    const ADMIN = 2;
    const USER = 1;
    const EMPLOYER = 3;
}
