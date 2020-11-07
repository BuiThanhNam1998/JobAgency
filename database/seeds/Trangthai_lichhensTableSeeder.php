<?php

use Illuminate\Database\Seeder;

class Trangthai_lichhensTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\trangthai_lichhen::query()->create([
            'ten' => 'Chờ phỏng vấn'
        ]);
        \App\trangthai_lichhen::query()->create([
            'ten' => 'Tiếp tục phỏng vấn'
        ]);

        \App\trangthai_lichhen::query()->create([
            'ten' => 'Đã hoàn tất, được nhận làm việc'
        ]);
        \App\trangthai_lichhen::query()->create([
            'ten' => 'Đã hoàn tất, từ chối ứng viên'
        ]);
        \App\trangthai_lichhen::query()->create([
            'ten' => 'Đã hoàn tất, không tham gia phỏng vấn'
        ]);
    }
}
