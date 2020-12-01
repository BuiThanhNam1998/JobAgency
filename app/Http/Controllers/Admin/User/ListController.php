<?php

namespace App\Http\Controllers\Admin\User;

use App\Services\UserService;
use App\Services\RoleService;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;



class ListController extends Controller
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
        $users = $this->userService->getList($params);
        $roles = $this->roleService->getAll();
        return view('admin.user.index',
            compact('users', 'params', 'roles')
        );
    }

    public function getParams(Request $request)
    {
        return [
            'filter_name' => $request->filter_name,
            'filter_mail' => $request->filter_mail,
            'role_id' => $request->role_id
        ];
    }

    private function rules()
    {
        return [
            'filter_name' => 'nullable|string',
            'filter_mail' => 'nullable|string',
            'role_id' => 'nullable|exists:roles,id'
        ];
    }
}
