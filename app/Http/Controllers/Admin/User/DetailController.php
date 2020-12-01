<?php

namespace App\Http\Controllers\Admin\User;

use App\Services\UserService;
use App\Services\RoleService;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;



class DetailController extends Controller
{
    protected $userService;
    protected $roleService;

    public function __construct(
        UserService $userService,
        RoleService $roleService
    )
    {
        $this->userService = $userService;
        $this->roleService = $roleService;
    }

    public function main(Request $request)
    {
        $params = $this->getParams($request);
        $validator = Validator::make($params, $this->rules());
        if ($validator->fails()) {
            dd('die');
        }

        $user = $this->userService->getDetail($params);
        $roles = $this->roleService->getAll();
        return view('admin.user.edit',
            compact('user', 'roles')
        );
    }

    public function getParams(Request $request)
    {
        return [
            'id' => $request->id
        ];
    }

    private function rules()
    {
        return [
            'id' => 'exists:users,id'
        ];
    }

}
