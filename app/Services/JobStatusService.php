<?php

namespace App\Services;

use App\Models\JobStatus;

class JobStatusService {
    protected $fieldsForList = [
        '*'
    ];

    public function getAll()
    {
        return JobStatus::select($this->fieldsForList)
            ->get();
    }
}
