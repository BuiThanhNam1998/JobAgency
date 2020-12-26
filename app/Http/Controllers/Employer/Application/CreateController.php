<?php

namespace App\Http\Controllers\Employer\Job;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\CareerService;
use App\Services\JobStatusService;
use App\Services\JobTypeService;
use App\Services\CityService;

class CreateController extends Controller
{
    protected $careerService;
    protected $jobStatusService;
    protected $jobTypeService;
    protected $cityService;

    public function __construct(
        CareerService $careerService,
        JobStatusService $jobStatusService,
        JobTypeService $jobTypeService,
        CityService $cityService
    )
    {
        $this->careerService = $careerService;
        $this->jobStatusService = $jobStatusService;
        $this->jobTypeService = $jobTypeService;
        $this->cityService = $cityService;
        $this->cityService = $cityService;
    }

    public function main(Request $request)
    {
        $careers = $this->careerService->getAll();
        $jobStatuses = $this->jobStatusService->getAll();
        $jobTypes = $this->jobTypeService->getAll();
        $cities = $this->cityService->getAll();
        return view('admin.job.create',
            compact(
        'careers',
             'jobStatuses',
                'jobTypes',
                'cities'
            )
        );
    }
}
