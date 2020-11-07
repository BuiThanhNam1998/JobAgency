<?php

use Illuminate\Database\Seeder;

class VaitrosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\vaitro::query()->create(['ten' => 'Ứng viên']);
        \App\vaitro::query()->create(['ten' => 'Quản trị viên']);
        \App\vaitro::query()->create(['ten' => 'Nhân viên']);
    }
}
