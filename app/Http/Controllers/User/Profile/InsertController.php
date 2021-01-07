<?php

namespace App\Http\Controllers\User\Profile;

use App\Services\ProfileService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class InsertController extends Controller
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
        $result = $this->profileService->store($params)->getData();
        $success = ($result->code == 200) ? 1 : 0;
        return redirect()->route('user.profile.list')->with('message', $result->message)->with('success', $success);
    }

    public function getParams(Request $request)
    {
        return [
            'name' => $request->name,
            'user_name' => $request->user_name,
            'date_of_birth' => $request->date_of_birth,
            'sex' => $request->sex,
            'phone_number' => $request->phone_number,
            'address' => $request->address,
            'email' => $request->email,
            'experience' => $request->experience,
            'education' => $request->education,
            'city_id' => $request->city_id,
            'image' => $request->image
        ];
    }

    private function rules()
    {
        return [
        ];
    }

}
