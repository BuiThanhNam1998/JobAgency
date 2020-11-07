<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Job;
use App\Models\JobStatus;

class PageController extends Controller
{
    public function getHome() 
    {
        $newJobs = Job::where('status_id', JobStatus::AVAILABLE)
                    ->orderBy('created_at', 'DESC')
                    ->paginate(9);

        return view('user.pages.home', compact('newJobs'));
    }
}
