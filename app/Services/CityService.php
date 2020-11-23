<?php

namespace App\Services;

use App\Models\City;

class CityService {
    protected $fieldsForList = [
        '*'
    ];

    public function getAll()
    {
        return City::select($this->fieldsForList)
            ->get();
    }
    public function getList($params)
    {
        $perPage = isset($params['per_page']) ? trim($params['per_page']) : config('setup.job.number_display_home');
        $currentPage = isset($params['current_page']) ? trim($params['current_page']) : 1;
        $careerId = isset($params['career_id']) ? $params['career_id'] : '';
        $typeId = isset($params['type_id']) ? $params['type_id'] : '';
        $cityId = isset($params['city_id']) ? $params['city_id'] : '';
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
            ->when(!empty($sort) && !empty($order), function ($query) use ($sort, $order) {
                return $query->orderBy($sort, $order);
            })
            ->paginate($perPage, ['*'], 'page', $currentPage);
    }

}
