<?php

namespace App\Services;

use App\Models\Role;

class RoleService {
    protected $fieldsForList = [
        'id',
        'name'
    ];

    public function getAll()
    {
        return Role::select($this->fieldsForList)
            ->get();
    }

    public function getDetail($params)
    {
        return Role::select(['*'])
            ->where('id', $params['id'])
            ->first();
    }

    public function store($params)
    {
        $id = isset($params['id']) ? $params['id'] : null;
        $career = (isset($id)) ? Career::find($id) : new Career();
        $career->name = $params['name'];
        $career->save();
        return $career;
    }

    public function destroy($params)
    {
        return Role::where('id', $params['id'])
            ->delete();
    }
}
