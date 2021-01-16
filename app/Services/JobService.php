<?php

namespace App\Services;

use App\Models\Job;
use App\Models\JobStatus;
use http\Env\Request;
use Illuminate\Support\Facades\Auth;

class JobService {
    protected $fieldsForList = [
        '*'
    ];

    public function getList($params)
    {
        $perPage = isset($params['per_page']) ? trim($params['per_page']) : config('setup.job.number_display_home');
        $careerId = isset($params['career_id']) ? $params['career_id'] : '';
        $typeId = isset($params['type_id']) ? $params['type_id'] : '';
        $cityId = isset($params['city_id']) ? $params['city_id'] : '';
        $search = isset($params['search']) ? trim($params['search']) : '';
        $sort = isset($params['sort']) ? trim($params['sort']) : '';
        $order = isset($params['order']) ? trim($params['order']) : '';

        return Job::select($this->fieldsForList)->with(['career', 'type'])
            ->where('status_id', JobStatus::AVAILABLE)
            ->when(!empty($careerId) && $careerId > 0, function ($query) use ($careerId) {
                return $query->where('career_id', $careerId);
            })
            ->when(!empty($typeId) && $typeId > 0, function ($query) use ($typeId) {
                return $query->where('type_id', $typeId);
            })
            ->when(!empty($cityId) && $cityId > 0, function ($query) use ($cityId) {
                return $query->where('city_id', $cityId);
            })
            ->when(!empty($search),function ($query) use ($search) {
                return $query->where('title', 'LIKE', "%{$search}%");
            })
            ->when(!empty($sort) && !empty($order), function ($query) use ($sort, $order) {
                return $query->orderBy($sort, $order);
            })
            ->paginate($perPage);
    }

    public function getDetail($params)
    {
        return Job::select(['*'])
            ->with(['career', 'type', 'city'])
            ->where('id', $params['id'])
            ->first();
    }

    public function getAllByUser() {
        return Job::select(['*'])
            ->with(['career', 'type'])
            ->where('user_id', Auth::id())
            ->get();
    }

    public function store($params)
    {
        $id = isset($params['id']) ? $params['id'] : null;
        $job = (isset($id)) ? Job::find($id) : new Job();
        $job->title = $params['title'];
        $job->description = $params['description'];
        $job->salary = $params['salary'];
        $job->career_id = $params['career_id'];
        $job->status_id = $params['status_id'];
        $job->type_id = $params['type_id'];
        $job->city_id = $params['city_id'];
        $job->post_date = $params['post_date'];
        $job->company_des = $params['company_des'];
        $job->company_name = $params['company_name'];
        $job->employer_name = $params['employer_name'];
        $job->phone = $params['phone'];
        $job->email = $params['email'];
        $job->website = $params['website'];
        $job->user_id = Auth::id();
        if ($params['image']) {
            $fileExtension = $params['image']->getClientOriginalExtension();
            $fileName = time() . "_" . rand(0,99) . "." . $fileExtension;
            $uploadPath = public_path('images/job');
            $params['image']->move($uploadPath, $fileName);
            $image = 'images/job/' . $fileName;
            $job->image = $image;
        }
        $job->save();
        return $job;
    }

    public function destroy($params)
    {
        return Job::where('id', $params['id'])
            ->delete();
    }
}
