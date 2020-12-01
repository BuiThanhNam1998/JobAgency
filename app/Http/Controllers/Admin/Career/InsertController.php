<?php

namespace App\Http\Controllers\Admin\Career;

use App\Services\CareerService;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;



class InsertController extends Controller
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
        $this->careerService->store($params);
        return \Redirect::back();

    }

    public function getParams(Request $request)
    {
        return [
            'name' => $request->name
        ];
    }

    private function rules()
    {
        return [
            'name' => 'required|string'
        ];
    }

}
