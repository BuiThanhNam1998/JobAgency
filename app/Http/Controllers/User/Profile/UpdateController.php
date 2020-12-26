<?php

namespace App\Http\Controllers\User\Profile;

use App\Services\ProfileService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class UpdateController extends Controller
{
    protected $profileService;

    public function __construct(
        ProfileService $profileService
    )
    {
        $this->profileService = $profileService;
    }

    public function main(Request $request)
    {
        $params = $this->getParams($request);
        $validator = Validator::make($params, $this->rules());
        if ($validator->fails()) {
            dd('die');
        }
        $this->profileService->store($params);
        return \Redirect::back();
    }

    public function getParams(Request $request)
    {
        return [
            'id' => $request->id,
            'user_name' => $request->user_name,
            'date_of_birth' => $request->date_of_birth,
            'sex' => $request->sex,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
            'experience' => $request->experience,
            'image' => $request->image
        ];
    }

    private function rules()
    {
        return [
            'id' => 'exists:profiles,id',
        ];
    }

}
