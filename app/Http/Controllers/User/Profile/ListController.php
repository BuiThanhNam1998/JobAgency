<?php

namespace App\Http\Controllers\User\Profile;

use App\Services\ProfileService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class ListController extends Controller
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
        $profiles = $this->profileService->getList();
        return view('user.pages.job-profile.list',
            compact('profiles')
        );
    }

}
