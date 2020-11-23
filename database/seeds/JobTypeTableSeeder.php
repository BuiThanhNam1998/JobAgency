<?php

use Illuminate\Database\Seeder;

class JobTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\JobType::query()->create([
            'name'=>'Hợp đồng'
        ]);
        \App\Models\JobType::query()->create([
            'name'=>'Toàn thời gian'
        ]);
        \App\Models\JobType::query()->create([
            'name'=>'Bán thời gian'
        ]);
    }
}
