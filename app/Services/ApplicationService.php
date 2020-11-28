<?php

namespace App\Services;

use App\Models\Profile;
use App\Models\Application;
use Illuminate\Support\Facades\Auth;

class ApplicationService {
    protected $fieldsForList = [
        '*'
    ];

    public function getList()
    {
        $userId = Auth::id();
        return Profile::select($this->fieldsForList)
            ->where('user_id', $userId)
            ->get();
    }

    public function getDetail($params)
    {
        return Profile::select(['*'])
            ->with(['career', 'type'])
            ->where('id', $params['id'])
            ->first();
    }

    public function store($params)
    {
        return Application::create($params);
    }
}
