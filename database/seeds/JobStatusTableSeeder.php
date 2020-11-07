<?php

use Illuminate\Database\Seeder;

class JobStatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\JobStatus::query()->create([
            'name'=>'Đang tuyển'
        ]);
        \App\Models\JobStatus::query()->create([
            'name'=>'Hết hạn'
        ]);
    }
}
