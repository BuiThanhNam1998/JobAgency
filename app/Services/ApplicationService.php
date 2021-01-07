<?php

namespace App\Services;

use App\Models\Profile;
use App\Models\Application;
use http\Env\Response;
use Illuminate\Support\Facades\Auth;

class ApplicationService {
    protected $fieldsForList = [
        '*'
    ];

    public function getList()
    {
        return Application::select($this->fieldsForList)
            ->with(['job', 'profile', 'status'])
            ->get();
    }

    public function getDetail($params)
    {
        return Application::select(['*'])
            ->with(['career', 'type'])
            ->where('id', $params['id'])
            ->first();
    }

    public function store($params)
    {
        try {
            if($this->isApplicationExist($params['job_id'], $params['profile_id'])) {
                return response()->json([
                    "code" => 400,
                    "message" => "You applied!"
                ], 200);
            }
            Application::create($params);
            return response()->json([
                "code" => 200,
                "message" => "Apply success"
            ], 200);
        } catch (\Exception $exception) {
            return response()->json([
                "code" => 400,
                "message" => "Something went wrong!"
            ], 200);
        }
    }

    public function isApplicationExist($jobId, $profileId) {
        $application =  Application::where('job_id', $jobId)
            ->where('profile_id', $profileId)
            ->first();
        if($application) {
            return true;
        }
        return false;
    }

    public function changeStatus($params)
    {
        try {
            $application = Application::find($params['application_id']);
            $application->status_id = $params['status_id'];
            $application->save();
            return response()->json([
                "code" => 200,
                "message" => "Change status success"
            ], 200);
        } catch (\Exception $exception) {
            return response()->json([
                "code" => 400,
                "message" => "Something went wrong!"
            ], 200);
        }
    }
}
