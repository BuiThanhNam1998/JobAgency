<?php

namespace App\Http\Controllers\Employer\Job;

use App\Services\JobService;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;



class UpdateController extends Controller
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

        $this->jobService->store($params);
        return \Redirect::back();

    }

    public function getParams(Request $request)
    {
        return [
            'id' => $request->id,
            'title' => $request->title,
            'description' => $request->description,
            'salary' => $request->salary,
            'career_id' => $request->career_id,
            'status_id' => $request->status_id,
            'type_id' => $request->type_id,
            'city_id' => $request->city_id,
            'post_date' => $request->post_date,
            'image' => $request->image
        ];
    }

    private function rules()
    {
        return [
            'id' => 'exists:jobs,id',
            'title' => 'required|string'
        ];
    }

}
