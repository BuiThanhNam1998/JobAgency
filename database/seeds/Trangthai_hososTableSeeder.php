<?php

use Illuminate\Database\Seeder;

class Trangthai_hososTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\trangthai_hoso::query()->create([
            'ten'=>'Chờ phê duyệt CV'
        ]);
        \App\trangthai_hoso::query()->create([
            'ten'=>'Được chấp nhận CV'
        ]);
        \App\trangthai_hoso::query()->create([
            'ten'=>'Bị từ chối CV'
        ]);
        \App\trangthai_hoso::query()->create([
            'ten'=>'Đã trở thành nhân viên'
        ]);
        \App\trangthai_hoso::query()->create([
            'ten'=>'Phỏng vấn thất bại'
        ]);
        \App\trangthai_hoso::query()->create([
            'ten'=>'Chờ tiếp tục phỏng vấn'
        ]);
        \App\trangthai_hoso::query()->create([
            'ten'=>'Không tham gia phỏng vấn'
        ]);
        \App\trangthai_hoso::query()->create([
            'ten'=>'Đặt lịch thành công'
        ]);
        \App\trangthai_hoso::query()->create([
            'ten'=>'Từ chối tham gia phỏng vấn'
        ]);
    }
}
