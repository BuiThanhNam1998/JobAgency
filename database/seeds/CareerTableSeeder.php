<?php

use Illuminate\Database\Seeder;

class CareerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Career::query()->create([
            'name' => 'Công nghệ thông tin'
        ]);
        \App\Models\Career::query()->create([
            'name' => 'Kinh doanh, sản xuất'
        ]);
        \App\Models\Career::query()->create([
            'name' => 'Tư vấn, thị trường'
        ]);
        \App\Models\Career::query()->create([
            'name' => 'Thông tin, truyền thông'
        ]);
        \App\Models\Career::query()->create([
            'name' => 'Nhân viên khối nhân sự chung'
        ]);
        \App\Models\Career::query()->create([
            'name' => 'Nhân viên kỹ thuật'
        ]);
        \App\Models\Career::query()->create([
            'name' => 'Nhân viên sản xuất'
        ]);
        \App\Models\Career::query()->create([
            'name' => 'Nhân viên sản phẩm'
        ]);
        \App\Models\Career::query()->create([
            'name' => 'Nhân viên kinh doanh'
        ]);
        \App\Models\Career::query()->create([
            'name' => 'Quản lý nhân sự'
        ]);
        \App\Models\Career::query()->create([
            'name' => 'Quản lý sản xuất'
        ]);
        \App\Models\Career::query()->create([
            'name' => 'Quản lý sản phẩm'
        ]);
        \App\Models\Career::query()->create([
            'name' => 'Quản lý kinh doanh'
        ]);
        \App\Models\Career::query()->create([
            'name' => 'Giám đốc nhân sự'
        ]);
        \App\Models\Career::query()->create([
            'name' => 'Giám đốc sản xuất'
        ]);
        \App\Models\Career::query()->create([
            'name' => 'Giám đốc sản phẩm'
        ]);
        \App\Models\Career::query()->create([
            'name' => 'Giám đốc kinh doanh'
        ]);
        \App\Models\Career::query()->create([
            'name' => 'Kỹ sư hợp đồng'
        ]);
        \App\Models\Career::query()->create([
            'name' => 'Cán bộ, nhân viên hợp đồng'
        ]);
    }
}
