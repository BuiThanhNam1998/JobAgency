<?php

namespace App\Services;

use App\Models\User;

class UserService {
    protected $fieldsForList = [
        '*'
    ];

    public function getAll()
    {
        return User::select($this->fieldsForList)
            ->get();
    }

    public function getList($params)
    {
        $filterName = isset($params['filter_name']) ? trim($params['filter_name']) : '';
        $filterMail = isset($params['filter_mail']) ? trim($params['filter_mail']) : '';
        $roleId = isset($params['role_id']) ? $params['role_id'] : '';

        return User::select($this->fieldsForList)->with(['role'])
            ->when(!empty($filterName), function ($query) use ($filterName) {
                return $query->where('name', 'LIKE', '%' . $filterName . '%');
            })
            ->when(!empty($filterMail), function ($query) use ($filterMail) {
                return $query->where('email', 'LIKE', '%' . $filterMail . '%');
            })
            ->when(!empty($roleId), function ($query) use ($roleId) {
                return $query->where('role_id', $roleId);
            })
            ->get($this->fieldsForList);
    }

    public function getDetail($params)
    {
        return User::select(['*'])->with(['role'])
            ->where('id', $params['id'])
            ->first();
    }

    public function store($params)
    {
        $id = isset($params['id']) ? $params['id'] : null;
        return User::where('id', $id)->update($params);
    }

    public function destroy($params)
    {
        return User::where('id', $params['id'])
            ->delete();
    }

    public function changeStatus($params)
    {
        try {
            $user = User::find($params['user_id']);
            $user->status = ($user->status == User::ACTIVE) ? User::BLOCK : User::ACTIVE;
            $user->save();
            return response()->json([
                "code" => 200,
                "status" => $user->status,
                "message" => "Change status success"
            ], 200);
        } catch (\Exception $exception) {
            return response()->json([
                "code" => 400,
                "message" => "Something went wrong!"
            ], 200);
        }
    }
}
