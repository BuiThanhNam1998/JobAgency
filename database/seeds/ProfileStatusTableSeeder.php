<?php

use Illuminate\Database\Seeder;

class ProfileStatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\ProfileStatus::query()->create([
            'name'=>'Chờ phê duyệt CV'
        ]);
        \App\Models\ProfileStatus::query()->create([
            'name'=>'Được chấp nhận CV'
        ]);
        \App\Models\ProfileStatus::query()->create([
            'name'=>'Bị từ chối CV'
        ]);
        \App\Models\ProfileStatus::query()->create([
            'name'=>'Đã trở thành nhân viên'
        ]);
        \App\Models\ProfileStatus::query()->create([
            'name'=>'Phỏng vấn thất bại'
        ]);
        \App\Models\ProfileStatus::query()->create([
            'name'=>'Chờ tiếp tục phỏng vấn'
        ]);
        \App\Models\ProfileStatus::query()->create([
            'name'=>'Không tham gia phỏng vấn'
        ]);
        \App\Models\ProfileStatus::query()->create([
            'name'=>'Đặt lịch thành công'
        ]);
        \App\Models\ProfileStatus::query()->create([
            'name'=>'Từ chối tham gia phỏng vấn'
        ]);
    }
}
