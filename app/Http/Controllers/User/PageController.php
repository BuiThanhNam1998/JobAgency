<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Job;
use App\Models\JobStatus;
use App\Services\JobService;
use App\Services\ProfileService;

class PageController extends Controller
{
    protected $jobService;
    protected $profileService;

    public function __construct(JobService $jobService, ProfileService $profileService)
    {
        $this->jobService = $jobService;
        $this->profileService = $profileService;
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
        $profiles = $this->profileService->getList();
        return view('user.pages.home',
            compact('newJobs', 'hotJobs', 'profiles')
        );
    }

    public function getAboutUs() {
        return view('user.pages.about');
    }
    public function getContactUs() {
        return view('user.pages.contact');
    }
}
