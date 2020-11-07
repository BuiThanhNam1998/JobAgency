<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JobController extends Controller
{
    public function getList() 
    {
        return view('user.pages.job.list');
    }

    public function getDetail($id) 
    {
        return view('user.pages.job.detail');
    }
}
