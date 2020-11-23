<?php

use Illuminate\Database\Seeder;

class SlideTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Slide::query()->create([
            'image'=>'banner1.png',
        ]);
        \App\Models\Slide::query()->create([
            'image'=>'banner2.png',
        ]);

    }
}
