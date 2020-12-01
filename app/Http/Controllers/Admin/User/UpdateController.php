<?php

namespace App\Http\Controllers\Admin\User;

use App\Services\UserService;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;



class UpdateController extends Controller
{
    protected $careerService;

    public function __construct(
      UserService $careerService
    )
    {
      $this->careerService = $careerService;
    }

    public function main(Request $request)
    {
        $params = $this->getParams($request);
        $validator = Validator::make($params, $this->rules());
        if ($validator->fails()) {
            dd('die');
        }

        $this->careerService->store($params);
        return \Redirect::back();

    }

    public function getParams(Request $request)
    {
        return [
            'id' => $request->id,
            'role_id' => $request->role_id
        ];
    }

    private function rules()
    {
        return [
            'id' => 'exists:users,id',
            'role_id' => 'exists:roles,id'
        ];
    }

}
