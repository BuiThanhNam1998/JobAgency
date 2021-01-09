<?php

namespace App\Services;

use App\Models\Profile;
use App\Models\Application;
use Carbon\Carbon;
use http\Env\Response;
use Illuminate\Support\Facades\Auth;

class ApplicationService {
    protected $fieldsForList = [
        '*'
    ];

    public function getList($params)
    {
        $userId = isset($params['user_id']) ? $params['user_id'] : '';
        return Application::select($this->fieldsForList)
            ->when($userId, function($query) use ($userId) {
                $profileIds = Profile::where('user_id', $userId)->pluck('id')->toArray();
                return $query->whereIn('profile_id', $profileIds);
            })
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
            Application::create([
                'job_id' => $params['job_id'],
                'profile_id' => $params['profile_id'],
                'job_profile' => $params['job_id'] . '_' . $params['profile_id'],
            ]);
            return response()->json([
                "code" => 200,
                "message" => "Apply success"
            ], 200);
        } catch (\Exception $exception) {
            dd($exception->getMessage());
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

    public function cancel($params)
    {
        try {
            $now = Carbon::now();
            $application = Application::find($params['application_id']);
            Application::where('id', $params['application_id'])
                ->update([
                    'job_profile' => $application->job_profile . '_deleted_' . $now,
                    'deleted_at' => $now,
                ]);
            return response()->json([
                "code" => 200,
                "message" => "Cancel success"
            ], 200);
        } catch (\Exception $exception) {
            return response()->json([
                "code" => 400,
                "message" => "Something went wrong!"
            ], 200);
        }
    }
}
