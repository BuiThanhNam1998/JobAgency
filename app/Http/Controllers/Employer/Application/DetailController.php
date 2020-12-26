<?php

namespace App\Http\Controllers\Employer\Job;

use App\Services\JobService;
use App\Services\CareerService;
use App\Services\JobStatusService;
use App\Services\JobTypeService;
use App\Services\CityService;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;



class DetailController extends Controller
{
    protected $jobService;
    protected $careerService;
    protected $jobStatusService;
    protected $jobTypeService;
    protected $cityService;

    public function __construct(
        JobService $jobService,
        CareerService $careerService,
        JobStatusService $jobStatusService,
        JobTypeService $jobTypeService,
        CityService $cityService
    )
    {
        $this->jobService = $jobService;
        $this->careerService = $careerService;
        $this->jobStatusService = $jobStatusService;
        $this->jobTypeService = $jobTypeService;
        $this->cityService = $cityService;
    }

    public function main(Request $request)
    {
        $params = $this->getParams($request);
        $validator = Validator::make($params, $this->rules());
        if ($validator->fails()) {
            dd('die');
        }

        $job = $this->jobService->getDetail($params);
        $careers = $this->careerService->getAll();
        $jobStatuses = $this->jobStatusService->getAll();
        $jobTypes = $this->jobTypeService->getAll();
        $cities = $this->cityService->getAll();
        return view('admin.job.edit',
            compact(
                'job',
                'careers',
                'jobStatuses',
                'jobTypes',
                'cities'
            )
        );
    }

    public function getParams(Request $request)
    {
        return [
            'id' => $request->id
        ];
    }

    private function rules()
    {
        return [
            'id' => 'exists:jobs,id'
        ];
    }

}
