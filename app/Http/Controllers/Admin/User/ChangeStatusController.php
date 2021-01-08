<?php

namespace App\Http\Controllers\Admin\User;

use App\Services\UserService;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;



class ChangeStatusController extends Controller
{
    protected $userService;

    public function __construct(
      UserService $userService
    )
    {
      $this->userService = $userService;
    }

    public function main(Request $request)
    {
        $params = $this->getParams($request);
        $validator = Validator::make($params, $this->rules());
        if ($validator->fails()) {
            dd('die');
        }

        $result = $this->userService->changeStatus($params)->getData();
        return response()->json($result);
    }

    public function getParams(Request $request)
    {
        return [
            'user_id' => $request->user_id,
        ];
    }

    private function rules()
    {
        return [
            'user_id' => 'required',
        ];
    }

}
