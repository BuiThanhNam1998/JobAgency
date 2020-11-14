<?php

namespace App\Http\Controllers\User\Job;

use App\Services\JobService;
use App\Services\CareerService;
use App\Services\JobTypeService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class ListController extends Controller
{
    protected $jobService;
    protected $careerService;
    protected $jobTypeService;

    public function __construct(
        JobService $jobService,
        CareerService $careerService,
        JobTypeService $jobTypeService
    )
    {
        $this->jobService = $jobService;
        $this->careerService = $careerService;
        $this->jobTypeService = $jobTypeService;
    }

    public function main(Request $request)
    {
        $params = $this->getParams($request);
        $params['per_page'] = config('setup.job.number_display_list');
        $validator = Validator::make($params, $this->rules());
        if ($validator->fails()) {
            dd('die');
        }

        $jobs = $this->jobService->getList($params);
        $careers = $this->careerService->getAll();
        $jobTypes = $this->jobTypeService->getAll();
        return view('user.pages.job.list',
            compact('careers', 'jobs', 'jobTypes', 'params')
        );
    }

    public function getParams(Request $request)
    {
        return [
            'career_id' => $request->career_id,
            'type_id' => $request->type_id,
            'sort' => $request->sort,
            'order' => $request->order
        ];
    }

    private function rules()
    {
        return [
            'career_id' => 'nullable|integer',
            'type_id' => 'nullable|integer',
        ];
    }

}
