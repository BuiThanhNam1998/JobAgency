<?php

namespace App\Http\Controllers\User\Job;

use App\Services\JobService;
use App\Services\CareerService;
use App\Services\JobTypeService;
use App\Services\CityService;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class ListController extends Controller
{
    protected $cityService;
    protected $jobService;
    protected $careerService;
    protected $jobTypeService;

    public function __construct(
        CityService $cityService,
        JobService $jobService,
        CareerService $careerService,
        JobTypeService $jobTypeService
    )
    { 
        $this->jobService = $jobService;
        $this->cityService = $cityService;
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
        $cities = $this->cityService->getAll();
        
        return view('user.pages.job.list',
            compact('careers', 'jobs', 'jobTypes', 'cities', 'params')
        );
    }

    public function getParams(Request $request)
    {
        return [
            'career_id' => $request->career_id,
            'type_id' => $request->type_id,
            'sort' => $request->sort,
            'order' => $request->order,
            'city_id' => $request->city_id,
            'search' => $request->search
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
