<?php

namespace App\Services;

use App\Models\Profile;
use Illuminate\Support\Facades\Auth;

class ProfileService {
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
}
