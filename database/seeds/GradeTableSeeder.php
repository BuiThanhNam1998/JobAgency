<?php

use Illuminate\Database\Seeder;

class GradeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Grade::query()->create([
            'name'=>'Xuất sắc',
        ]);
        \App\Models\Grade::query()->create([
            'name'=>'Tốt',
        ]);
        \App\Models\Grade::query()->create([
            'name'=>'Đạt',
        ]);
        \App\Models\Grade::query()->create([
            'name'=>'Không đạt',
        ]);
    }
}
