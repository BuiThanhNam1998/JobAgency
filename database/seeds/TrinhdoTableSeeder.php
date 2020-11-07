<?php

use Illuminate\Database\Seeder;

class TrinhdoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Trinhdo::query()->create([
            'ten'=>'Xuất sắc',
        ]);
        \App\Trinhdo::query()->create([
            'ten'=>'Tốt',
        ]);
        \App\Trinhdo::query()->create([
            'ten'=>'Đạt',
        ]);
        \App\Trinhdo::query()->create([
            'ten'=>'Không đạt',
        ]);
    }
}
