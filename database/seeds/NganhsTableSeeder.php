<?php

use Illuminate\Database\Seeder;

class NganhsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Nganh::query()->create([
            'ten' => 'Công nghệ thông tin'
        ]);
        \App\Nganh::query()->create([
            'ten' => 'Kinh doanh, sản xuất'
        ]);
        \App\Nganh::query()->create([
            'ten' => 'Tư vấn, thị trường'
        ]);
        \App\Nganh::query()->create([
            'ten' => 'Thông tin, truyền thông'
        ]);
        \App\Nganh::query()->create([
            'ten' => 'Nhân viên khối nhân sự chung'
        ]);
        \App\Nganh::query()->create([
            'ten' => 'Nhân viên kỹ thuật'
        ]);
        \App\Nganh::query()->create([
            'ten' => 'Nhân viên sản xuất'
        ]);
        \App\Nganh::query()->create([
            'ten' => 'Nhân viên sản phẩm'
        ]);
        \App\Nganh::query()->create([
            'ten' => 'Nhân viên kinh doanh'
        ]);
        \App\Nganh::query()->create([
            'ten' => 'Quản lý nhân sự'
        ]);
        \App\Nganh::query()->create([
            'ten' => 'Quản lý sản xuất'
        ]);
        \App\Nganh::query()->create([
            'ten' => 'Quản lý sản phẩm'
        ]);
        \App\Nganh::query()->create([
            'ten' => 'Quản lý kinh doanh'
        ]);
        \App\Nganh::query()->create([
            'ten' => 'Giám đốc nhân sự'
        ]);
        \App\Nganh::query()->create([
            'ten' => 'Giám đốc sản xuất'
        ]);
        \App\Nganh::query()->create([
            'ten' => 'Giám đốc sản phẩm'
        ]);
        \App\Nganh::query()->create([
            'ten' => 'Giám đốc kinh doanh'
        ]);
        \App\Nganh::query()->create([
            'ten' => 'Kỹ sư hợp đồng'
        ]);
        \App\Nganh::query()->create([
            'ten' => 'Cán bộ, nhân viên hợp đồng'
        ]);
    }
}
