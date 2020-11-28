<?php

namespace App\Http\Controllers\Admin\Career;

use App\Services\CareerService;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;



class ListController extends Controller
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
        $params = $this->getParams($request);
        $validator = Validator::make($params, $this->rules());
        if ($validator->fails()) {
            dd('die');
        }

        $careers = $this->careerService->getAll();
        return view('admin.nganhs.index',
            compact('careers')
        );
    }

    public function getParams(Request $request)
    {
        return [

        ];
    }

    private function rules()
    {
        return [
            
        ];
    }

}
