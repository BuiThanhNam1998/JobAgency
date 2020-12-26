<?php

namespace App\Http\Controllers\User\Application;

use App\Services\ApplicationService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class CreateController extends Controller
{
    protected $applicationService;

    public function __construct(
        ApplicationService $applicationService
    )
    {
        $this->applicationService = $applicationService;
    }

    public function main(Request $request)
    {
        $params = $this->getParams($request);
        $validator = Validator::make($params, $this->rules());
        if ($validator->fails()) {
            dd('die');
        }
        $result = $this->applicationService->store($params)->getData();
        if ($result->code == 200) {
            return redirect()->back()->with('success', $result->message);
        }
        else {
            return redirect()->back()->with('errors', $result->message);
        }
    }

    public function getParams(Request $request)
    {
        return [
            'job_id' => $request->job_id,
            'profile_id' => $request->profile_id,
        ];
    }

    private function rules()
    {
        return [

        ];
    }

}
