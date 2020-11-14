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
}
