<?php

namespace App\Http\Controllers\User\Profile;

use App\Services\ProfileService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class DetailController extends Controller
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
        $profile = $this->profileService->getDetail($params);
        return view('user.pages.job-profile.detail',
            compact('profile')
        );
    }

    public function getParams(Request $request)
    {
        return [
            'id' => $request->id,
        ];
    }

    private function rules()
    {
        return [
            'id' => 'exists:profiles,id',
        ];
    }

}
