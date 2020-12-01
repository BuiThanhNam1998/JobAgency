<?php

namespace App\Services;

use App\Models\Career;

class CareerService {
    protected $fieldsForList = [
        'id',
        'name'
    ];

    public function getAll()
    {
        return Career::select($this->fieldsForList)
            ->get();
    }

    public function getDetail($params)
    {
        return Career::select(['*'])
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
        return Career::where('id', $params['id'])
            ->delete();
    }
}
