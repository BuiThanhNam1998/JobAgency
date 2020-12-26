<?php

namespace App\Http\Controllers\Employer\Job;

use App\Services\JobService;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;



class DestroyController extends Controller
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

        $this->jobService->destroy($params);
        return \Redirect::back();

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
            'id' => 'exists:jobs,id',
        ];
    }

}
