<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Job;
use App\Models\JobStatus;
use App\Services\JobService;

class PageController extends Controller
{
    protected $jobService;

    public function __construct(JobService $jobService)
    {
        $this->jobService = $jobService;
    }

    public function getHome()
    {
        $paramNewJobs = [
            'sort' => 'created_at',
            'order' => 'desc'
        ];

        $paramHotJobs = [
            'sort' => 'salary',
            'order' => 'desc'
        ];

        $newJobs = $this->jobService->getList($paramNewJobs);
        $hotJobs = $this->jobService->getList($paramHotJobs);

        return view('user.pages.home', compact('newJobs', 'hotJobs'));
    }
}
