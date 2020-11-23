<?php

use Illuminate\Database\Seeder;

class ScheduleStatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\ScheduleStatus::query()->create([
           'name' => 'Chờ phỏng vấn'
        ]);
        \App\Models\ScheduleStatus::query()->create([
           'name' => 'Tiếp tục phỏng vấn'
        ]);

        \App\Models\ScheduleStatus::query()->create([
           'name' => 'Đã hoàn tất, được nhận làm việc'
        ]);
        \App\Models\ScheduleStatus::query()->create([
           'name' => 'Đã hoàn tất, từ chối ứng viên'
        ]);
        \App\Models\ScheduleStatus::query()->create([
           'name' => 'Đã hoàn tất, không tham gia phỏng vấn'
        ]);
    }
}
