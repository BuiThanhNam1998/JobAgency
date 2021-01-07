<?php

namespace App\Http\Controllers\User\Profile;

use App\Services\ProfileService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\City;

class CreateController extends Controller
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
        $cities = City::all();
        return view('user.pages.job-profile.create', compact('cities'));
    }
}
