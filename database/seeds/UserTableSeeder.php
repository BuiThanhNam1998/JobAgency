<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker\Generator $faker)
    {
        $role = \App\Modesl\Role::query()->get()->pluck('id', 'name');

        \App\Models\User::query()->create([
            'name' => 'Nguyễn Hoàng Anh - GĐQL',
            'email' => 'cads.nguyenhoanganh.01@gmail.com',
            'password' => bcrypt("12345678"),
            'role_id' => $role['Quản trị viên'],
        ]);
        \App\Models\User::query()->create([
            'name' => 'Hoàng Ngọc Mạnh - GĐTC',
            'email' => 'cads.hoangngocmanh.02@gmail.com',
            'password' => bcrypt("12345678"),
            'role_id' => $role['Quản trị viên'],
        ]);
        \App\Models\User::query()->create([
            'name' => 'Đỗ Ngọc Minh - trưởng phòng nhân sự',
            'email' => 'cads.dongocminh.03@gmail.com',
            'password' => bcrypt("12345678"),
            'role_id' => $role['Quản trị viên'],
        ]);
        \App\Models\User::query()->create([
            'name' => 'Đặng Thị Huyền - phó phòng nhân sự',
            'email' => 'cads.dangthihuyen.04@gmail.com',
            'password' => bcrypt("12345678"),
            'role_id' => $role['Quản trị viên'],
        ]);
        \App\Models\User::query()->create([
            'name' => 'Nguyễn Thành Nam - trưởng phòng dự án',
            'email' => 'cads.nguyenthanhnam.05n@gmail.com',
            'password' => bcrypt("12345678"),
            'role_id' => $role['Nhân viên'],
        ]);
        \App\Models\User::query()->create([
            'name' => 'Đỗ Văn Mạnh - trưởng phòng phát triển SP',
            'email' => 'cads.dovanmanh.06@gmail.com',
            'password' => bcrypt("12345678"),
            'role_id' => $role['Nhân viên'],
        ]);
        \App\Models\User::query()->create([
            'name' => 'Nguyễn Minh Thu - trưởng phòng kế toán',
            'email' => 'cads.nguyenminhthu.07@gmail.com',
            'password' => bcrypt("12345678"),
            'role_id' => $role['Nhân viên'],
        ]);
        \App\Models\User::query()->create([
            'name' => 'Đỗ Ngọc Long - trưởng phòng kỹ thuật',
            'email' => 'cads.dongoclong.08@gmail.com',
            'password' => bcrypt("12345678"),
            'role_id' => $role['Nhân viên'],
        ]);
        \App\Models\User::query()->create([
            'name' => 'Đặng Minh Trí - phó phòng kỹ thuật',
            'email' => 'cads.dangminhtri.09@gmail.com',
            'password' => bcrypt("12345678"),
            'role_id' => $role['Nhân viên'],
        ]);
        \App\Models\User::query()->create([
            'name' => 'Nguyễn Văn Hà - phó phòng phát triển SP',
            'email' => 'cads.nguyenvanha.10@gmail.com',
            'password' => bcrypt("12345678"),
            'role_id' => $role['Nhân viên'],
        ]);
        \App\Models\User::query()->create([
            'name' => 'Trần Minh Thành - phó phòng kế toán',
            'email' => 'cads.tranminhthanh.11@gmail.com',
            'password' => bcrypt("12345678"),
            'role_id' => $role['Nhân viên'],
        ]);
        \App\Models\User::query()->create([
            'name' => 'Vũ Trọng Cường - nhân viên tuyển dụng',
            'email' => 'cads.vutrongcuong.12@gmail.com',
            'password' => bcrypt("12345678"),
            'role_id' => $role['Nhân viên'],
        ]);
        \App\Models\User::query()->create([
            'name' => 'Đặng Gia Hải - nhân viên tuyển dụng ',
            'email' => 'cads.danggiahai.13@gmail.com',
            'password' => bcrypt("12345678"),
            'role_id' => $role['Nhân viên'],
        ]);
        \App\Models\User::query()->create([
            'name' => 'Phạm Nguyên Thành',
            'email' => 'phamnguyenthanh-hn@gmail.com',
            'password' => bcrypt("12345678"),
            'role_id' => $role['Ứng viên'],
        ]);
        \App\Models\User::query()->create([
            'name' => 'Đinh Nhật Minh',
            'email' => 'dinhnhatminh92@gmail.com',
            'password' => bcrypt("12345678"),
            'role_id' => $role['Ứng viên'],
        ]);
        \App\Models\User::query()->create([
            'name' => 'Vũ Kim Ngọc',
            'email' => 'vukimngoc2309@gmail.com',
            'password' => bcrypt("12345678"),
            'role_id' => $role['Ứng viên'],
        ]);
        \App\Models\User::query()->create([
            'name' => 'Trần Hải Nam',
            'email' => 'tranhainam0907@gmail.com',
            'password' => bcrypt("12345678"),
            'role_id' => $role['Ứng viên'],
        ]);
        \App\Models\User::query()->create([
            'name' => 'Vũ Nam Anh',
            'email' => 'namanh0790@gmail.com',
            'password' => bcrypt("12345678"),
            'role_id' => $role['Ứng viên'],
        ]);
        \App\Models\User::query()->create([
            'name' => 'Trần Quốc Hải',
            'email' => 'haitranquoc-qn@gmail.com',
            'password' => bcrypt("12345678"),
            'role_id' => $role['Ứng viên'],
        ]);
        \App\Models\User::query()->create([
            'name' => 'Vũ Minh Trí',
            'email' => 'minhtri080799@gmail.com',
            'password' => bcrypt("12345678"),
            'role_id' => $role['Ứng viên'],
        ]);
        \App\Models\User::query()->create([
            'name' => 'Đỗ Minh Gia Vũ',
            'email' => 'dominhgiavu0708@gmail.com',
            'password' => bcrypt("12345678"),
            'role_id' => $role['Ứng viên'],
        ]);
        \App\Models\User::query()->create([
            'name' => 'Trần Minh Thu',
            'email' => 'tranminhthu0712@gmail.com',
            'password' => bcrypt("12345678"),
            'role_id' => $role['Ứng viên'],
        ]);
        \App\Models\User::query()->create([
            'name' => 'Lê Nguyên Hải Nam',
            'email' => 'hainam.bn.0708@gmail.com',
            'password' => bcrypt("12345678"),
            'role_id' => $role['Ứng viên'],
        ]);
        \App\Models\User::query()->create([
            'name' => 'Trần Minh An',
            'email' => 'anminhtran90@gmail.com',
            'password' => bcrypt("12345678"),
            'role_id' => $role['Ứng viên'],
        ]);
        \App\Models\User::query()->create([
            'name' => 'Vũ Ngọc Long',
            'email' => 'ngoclong.tn60@gmail.com',
            'password' => bcrypt("12345678"),
            'role_id' => $role['Ứng viên'],
        ]);
        \App\Models\User::query()->create([
            'name' => 'Thái Hồng Anh',
            'email' => 'honganhthai-tn@gmail.com',
            'password' => bcrypt("12345678"),
            'role_id' => $role['Ứng viên'],
        ]);
        \App\Models\User::query()->create([
            'name' => 'An Thu Lê',
            'email' => 'thuan090998-hnn@gmail.com',
            'password' => bcrypt("12345678"),
            'role_id' => $role['Ứng viên'],
        ]);
        \App\Models\User::query()->create([
            'name' => 'Anh Vân Phạm',
            'email' => 'vananh.070896@gmail.com',
            'password' => bcrypt("12345678"),
            'role_id' => $role['Ứng viên'],
        ]);
        \App\Models\User::query()->create([
            'name' => 'Anh Quốc Phạm',
            'email' => 'anhquoc.vn.95-tn@gmail.com',
            'password' => bcrypt("12345678"),
            'role_id' => $role['Ứng viên'],
        ]);
        \App\Models\User::query()->create([
            'name' => 'Bình Lê',
            'email' => 'binhle0709-bg@gmail.com',
            'password' => bcrypt("12345678"),
            'role_id' => $role['Ứng viên'],
        ]);
        \App\Models\User::query()->create([
            'name' => 'Bảo Quốc Lê',
            'email' => 'lequocbao.92@gmail.com',
            'password' => bcrypt("12345678"),
            'role_id' => $role['Ứng viên'],
        ]);
        \App\Models\User::query()->create([
            'name' => 'Vũ Thái Sơn',
            'email' => 'vuthaison.92@gmail.com',
            'password' => bcrypt("12345678"),
            'role_id' => $role['Ứng viên'],
        ]);
        \App\Models\User::query()->create([
            'name' => 'Đỗ Hà Ngân',
            'email' => 'nganha0708@gmail.com',
            'password' => bcrypt("12345678"),
            'role_id' => $role['Ứng viên'],
        ]);
        \App\Models\User::query()->create([
            'name' => 'Đỗ Công Minh',
            'email' => 'congminh0704@gmail.com',
            'password' => bcrypt("12345678"),
            'role_id' => $role['Ứng viên'],
        ]);
        for($i = 1; $i <= 8; $i++) {
            \App\Models\User::query()->create([
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => bcrypt("12345678"),
                'role_id' => $role['Ứng viên'],
            ]);
        }
    }
}
