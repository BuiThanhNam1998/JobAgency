<?php

namespace App\Services;

use App\Models\JobType;

class JobTypeService {
    protected $fieldsForList = [
        '*'
    ];

    public function getAll()
    {
        return JobType::select($this->fieldsForList)
            ->get();
    }
}
