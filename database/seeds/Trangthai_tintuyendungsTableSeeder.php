<?php

use Illuminate\Database\Seeder;

class Trangthai_tintuyendungsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\trangthai_tintuyendung::query()->create([
            'ten'=>'Đang tuyển'
        ]);
        \App\trangthai_tintuyendung::query()->create([
            'ten'=>'Hết hạn'
        ]);
    }
}
