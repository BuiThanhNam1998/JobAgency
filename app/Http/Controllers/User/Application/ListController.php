<?php

namespace App\Http\Controllers\User\Application;

use App\Services\ApplicationService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

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
        $params['user_id'] = Auth::id();
        $validator = Validator::make($params, $this->rules());
        if ($validator->fails()) {
            dd('die');
        }
        $applications = $this->applicationService->getList($params);
        return view('user.pages.application.list',
            compact('applications')
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
