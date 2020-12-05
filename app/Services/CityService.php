<?php

namespace App\Services;

use App\Models\City;

class CityService {
    protected $fieldsForList = [
        '*'
    ];

    public function getAll()
    {
        return City::select($this->fieldsForList)
            ->get();
    }
}
