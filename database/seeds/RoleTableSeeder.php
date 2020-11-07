<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Role::query()->create(['name' => 'Ứng viên']);
        \App\Models\Role::query()->create(['name' => 'Quản trị viên']);
        \App\Models\Role::query()->create(['name' => 'Nhân viên']);
    }
}
