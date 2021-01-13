<?php

namespace App\Http\Controllers\User\Job;

use App\Services\JobService;
use App\Services\CareerService;
use App\Services\JobTypeService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Services\ProfileService;

class DetailController extends Controller
{
    protected $jobService;
    protected $careerService;
    protected $jobTypeService;
    protected $profileService;

    public function __construct(
        JobService $jobService,
        CareerService $careerService,
        JobTypeService $jobTypeService,
        ProfileService $profileService
    )
    {
        $this->jobService = $jobService;
        $this->careerService = $careerService;
        $this->jobTypeService = $jobTypeService;
        $this->profileService = $profileService;
    }

    public function main(Request $request)
    {
        $params = $this->getParams($request);
        $validator = Validator::make($params, $this->rules());
        if ($validator->fails()) {
            dd('die');
        }

        $job = $this->jobService->getDetail($params);
        $profiles = $this->profileService->getList();
        return view('user.pages.job.detail',
            compact('job', 'profiles')
        );
    }

    public function getParams(Request $request)
    {
        return [
            'id' => $request->id,
        ];
    }

    private function rules()
    {
        return [
            'id' => 'integer',
        ];
    }

}
