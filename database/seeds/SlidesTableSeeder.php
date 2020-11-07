<?php

use Illuminate\Database\Seeder;

class SlidesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Slide::query()->create([
            'anh'=>'banner1.png',
        ]);
        \App\Slide::query()->create([
            'anh'=>'banner2.png',
        ]);

    }
}
