<?php

namespace App\Http\Controllers\Admin\Career;

use App\Services\CareerService;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;



class CreateController extends Controller
{
    protected $careerService;

    public function __construct(
      CareerService $careerService
    )
    {
      $this->careerService = $careerService;
    }

    public function main(Request $request)
    {
        return view('admin.career.create');
    }
}
