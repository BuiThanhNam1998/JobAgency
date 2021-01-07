<?php

namespace App\Http\Controllers\Employer\Application;

use App\Services\ApplicationService;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;



class ChangeStatusController extends Controller
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

        $result = $this->applicationService->changeStatus($params)->getData();
        return response()->json($result);
    }

    public function getParams(Request $request)
    {
        return [
            'status_id' => $request->status_id,
            'application_id' => $request->application_id
        ];
    }

    private function rules()
    {
        return [
            'status_id' => 'required',
            'application_id' => 'required'
        ];
    }

}
