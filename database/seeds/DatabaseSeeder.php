<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(JobStatusTableSeeder::class);
        $this->call(JobTypeTableSeeder::class);
        $this->call(CareerTableSeeder::class);
        $this->call(JobTableSeeder::class);
        $this->call(ProfileStatusTableSeeder::class);
        $this->call(CityTableSeeder::class);
        $this->call(ProfileTableSeeder::class);
        $this->call(ScheduleStatusTableSeeder::class);
        $this->call(ScheduleTableSeeder::class);
        $this->call(GradeTableSeeder::class);
        $this->call(ReviewTableSeeder::class);
        $this->call(SlideTableSeeder::class);
     }
}
