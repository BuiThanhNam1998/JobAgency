<?php

namespace App\Http\Controllers\Employer\Application;

use App\Services\ApplicationService;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\ApplicationStatus;


class ListController extends Controller
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

        $employee = Auth::user();
        $applications = $employee->applications()->get();
        $applicationStatuses = ApplicationStatus::all();
        return view('admin.application.index',
            compact('applications', 'applicationStatuses')
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
