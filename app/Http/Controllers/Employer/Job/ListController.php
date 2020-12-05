<?php

namespace App\Http\Controllers\Employer\Job;

use App\Services\JobService;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;



class ListController extends Controller
{
    protected $jobService;

    public function __construct(
      JobService $jobService
    )
    {
      $this->jobService = $jobService;
    }

    public function main(Request $request)
    {
        $params = $this->getParams($request);
        $validator = Validator::make($params, $this->rules());
        if ($validator->fails()) {
            dd('die');
        }

        $jobs = $this->jobService->getAllByUser();
        return view('admin.job.index',
            compact('jobs')
        );
    }

    public function getParams(Request $request)
    {
        return [

        ];
    }

    private function rules()
    {
        return [

        ];
    }

}
