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
            ->where('id', $params['id'])
            ->first();
    }

    public function store($params)
    {
        $id = isset($params['id']) ? $params['id'] : null;
        $profile = (isset($id)) ? Profile::find($id) : new Profile();

        $profile->user_name = $params['user_name'];
        $profile->date_of_birth = $params['date_of_birth'];
        $profile->sex = $params['sex'];
        $profile->phone_number = $params['phone_number'];
        $profile->email = $params['email'];
        $profile->experience = $params['experience'];

        if ($params['image']) {
            $fileExtension = $params['image']->getClientOriginalExtension();
            $fileName = time() . "_" . rand(0,99) . "." . $fileExtension;
            $uploadPath = public_path('images/profile');
            $params['image']->move($uploadPath, $fileName);
            $image = 'images/profile/' . $fileName;
            $profile->image = $image;
        }
        $profile->save();
        return $profile;
    }
}
