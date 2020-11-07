<?php

use Illuminate\Database\Seeder;

class DanhgiasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lichhen_id=\App\lichhen::query()->get()->pluck('id','thoigian');
        $user_id=\App\User::query()->get()->pluck('id','name');
        $trinhdo_id = \App\Trinhdo::query()->get()->pluck('id','ten');
        \App\Danhgia::query()->create([
            'lichhen_id'=>$lichhen_id['2019-10-19 10:18:00'],
            'user_id'=>'4',
            'trinhdo_id'=>$trinhdo_id['Tốt'],
            'diemchuyenmon'=>'80',
            'nhanxet'=>'Ứng viên đủ điều kiện làm việc'
        ]);
        \App\Danhgia::query()->create([
            'lichhen_id'=>$lichhen_id['2019-10-19 10:18:00'],
            'user_id'=>'6',
            'trinhdo_id'=>$trinhdo_id['Đạt'],
            'diemchuyenmon'=>'65',
            'nhanxet'=>'Ứng viên cần được tiếp tục kiểm tra thêm'
        ]);
        \App\Danhgia::query()->create([
            'lichhen_id'=>$lichhen_id['2019-10-19 10:18:00'],
            'user_id'=>'9',
            'trinhdo_id'=>$trinhdo_id['Đạt'],
            'diemchuyenmon'=>'60',
            'nhanxet'=>'Ứng viên cần được tiếp tục kiểm tra thêm'
        ]);
        \App\Danhgia::query()->create([
            'lichhen_id'=>$lichhen_id['2019-10-26 14:18:00'],
            'user_id'=>'4',
            'trinhdo_id'=>$trinhdo_id['Tốt'],
            'diemchuyenmon'=>'80',
            'nhanxet'=>'Ứng viên đủ điều kiện làm việc'
        ]);
        \App\Danhgia::query()->create([
            'lichhen_id'=>$lichhen_id['2019-10-26 14:18:00'],
            'user_id'=>'6',
            'trinhdo_id'=>$trinhdo_id['Đạt'],
            'diemchuyenmon'=>'79',
            'nhanxet'=>'Ứng viên được chấp nhận làm việc'
        ]);
        \App\Danhgia::query()->create([
            'lichhen_id'=>$lichhen_id['2019-10-26 14:18:00'],
            'user_id'=>'9',
            'trinhdo_id'=>$trinhdo_id['Đạt'],
            'diemchuyenmon'=>'80',
            'nhanxet'=>'Ứng viên được chấp nhận làm việc'
        ]);


        \App\Danhgia::query()->create([
            'lichhen_id'=>$lichhen_id['2019-10-27 11:18:00'],
            'user_id'=>'4',
            'trinhdo_id'=>$trinhdo_id['Tốt'],
            'diemchuyenmon'=>'65',
            'nhanxet'=>'Ứng viên cần được tiếp tục kiểm tra thêm'
        ]);
        \App\Danhgia::query()->create([
            'lichhen_id'=>$lichhen_id['2019-10-27 11:18:00'],
            'user_id'=>'6',
            'trinhdo_id'=>$trinhdo_id['Đạt'],
            'diemchuyenmon'=>'60',
            'nhanxet'=>'Ứng viên cần được tiếp tục kiểm tra thêm'
        ]);
        \App\Danhgia::query()->create([
            'lichhen_id'=>$lichhen_id['2019-10-27 11:18:00'],
            'user_id'=>'9',
            'trinhdo_id'=>$trinhdo_id['Đạt'],
            'diemchuyenmon'=>'60',
            'nhanxet'=>'Ứng viên cần được tiếp tục kiểm tra thêm'
        ]);
        \App\Danhgia::query()->create([
            'lichhen_id'=>$lichhen_id['2019-10-30 11:18:00'],
            'user_id'=>'4',
            'trinhdo_id'=>$trinhdo_id['Tốt'],
            'diemchuyenmon'=>'80',
            'nhanxet'=>'Ứng viên được chấp nhận làm việc'
        ]);
        \App\Danhgia::query()->create([
            'lichhen_id'=>$lichhen_id['2019-10-30 11:18:00'],
            'user_id'=>'6',
            'trinhdo_id'=>$trinhdo_id['Đạt'],
            'diemchuyenmon'=>'79',
            'nhanxet'=>'Ứng viên được chấp nhận làm việc'
        ]);
        \App\Danhgia::query()->create([
            'lichhen_id'=>$lichhen_id['2019-10-30 11:18:00'],
            'user_id'=>'9',
            'trinhdo_id'=>$trinhdo_id['Đạt'],
            'diemchuyenmon'=>'80',
            'nhanxet'=>'Ứng viên được chấp nhận làm việc'
        ]);


        \App\Danhgia::query()->create([
            'lichhen_id'=>$lichhen_id['2019-09-26 14:00:00'],
            'user_id'=>'4',
            'trinhdo_id'=>$trinhdo_id['Tốt'],
            'diemchuyenmon'=>'65',
            'nhanxet'=>'Ứng viên cần được tiếp tục kiểm tra thêm'
        ]);
        \App\Danhgia::query()->create([
            'lichhen_id'=>$lichhen_id['2019-09-26 14:00:00'],
            'user_id'=>'6',
            'trinhdo_id'=>$trinhdo_id['Đạt'],
            'diemchuyenmon'=>'60',
            'nhanxet'=>'Ứng viên cần được tiếp tục kiểm tra thêm'
        ]);
        \App\Danhgia::query()->create([
            'lichhen_id'=>$lichhen_id['2019-09-26 14:00:00'],
            'user_id'=>'9',
            'trinhdo_id'=>$trinhdo_id['Đạt'],
            'diemchuyenmon'=>'60',
            'nhanxet'=>'Ứng viên cần được tiếp tục kiểm tra thêm'
        ]);
        \App\Danhgia::query()->create([
            'lichhen_id'=>$lichhen_id['2019-10-01 11:00:00'],
            'user_id'=>'4',
            'trinhdo_id'=>$trinhdo_id['Tốt'],
            'diemchuyenmon'=>'80',
            'nhanxet'=>'Ứng viên được chấp nhận làm việc'
        ]);
        \App\Danhgia::query()->create([
            'lichhen_id'=>$lichhen_id['2019-10-01 11:00:00'],
            'user_id'=>'6',
            'trinhdo_id'=>$trinhdo_id['Đạt'],
            'diemchuyenmon'=>'79',
            'nhanxet'=>'Ứng viên được chấp nhận làm việc'
        ]);
        \App\Danhgia::query()->create([
            'lichhen_id'=>$lichhen_id['2019-10-01 11:00:00'],
            'user_id'=>'9',
            'trinhdo_id'=>$trinhdo_id['Đạt'],
            'diemchuyenmon'=>'80',
            'nhanxet'=>'Ứng viên được chấp nhận làm việc'
        ]);



        \App\Danhgia::query()->create([
            'lichhen_id'=>$lichhen_id['2019-09-26 15:00:00'],
            'user_id'=>'4',
            'trinhdo_id'=>$trinhdo_id['Tốt'],
            'diemchuyenmon'=>'65',
            'nhanxet'=>'Ứng viên cần được tiếp tục kiểm tra thêm'
        ]);
        \App\Danhgia::query()->create([
            'lichhen_id'=>$lichhen_id['2019-09-26 15:00:00'],
            'user_id'=>'6',
            'trinhdo_id'=>$trinhdo_id['Đạt'],
            'diemchuyenmon'=>'60',
            'nhanxet'=>'Ứng viên cần được tiếp tục kiểm tra thêm'
        ]);
        \App\Danhgia::query()->create([
            'lichhen_id'=>$lichhen_id['2019-09-26 15:00:00'],
            'user_id'=>'9',
            'trinhdo_id'=>$trinhdo_id['Đạt'],
            'diemchuyenmon'=>'60',
            'nhanxet'=>'Ứng viên cần được tiếp tục kiểm tra thêm'
        ]);
        \App\Danhgia::query()->create([
            'lichhen_id'=>$lichhen_id['2019-09-28 15:00:00'],
            'user_id'=>'4',
            'trinhdo_id'=>$trinhdo_id['Tốt'],
            'diemchuyenmon'=>'80',
            'nhanxet'=>'Ứng viên được chấp nhận làm việc'
        ]);
        \App\Danhgia::query()->create([
            'lichhen_id'=>$lichhen_id['2019-09-28 15:00:00'],
            'user_id'=>'6',
            'trinhdo_id'=>$trinhdo_id['Đạt'],
            'diemchuyenmon'=>'79',
            'nhanxet'=>'Ứng viên được chấp nhận làm việc'
        ]);
        \App\Danhgia::query()->create([
            'lichhen_id'=>$lichhen_id['2019-09-28 15:00:00'],
            'user_id'=>'9',
            'trinhdo_id'=>$trinhdo_id['Đạt'],
            'diemchuyenmon'=>'80',
            'nhanxet'=>'Ứng viên được chấp nhận làm việc'
        ]);



        \App\Danhgia::query()->create([
            'lichhen_id'=>$lichhen_id['2019-09-27 15:00:00'],
            'user_id'=>'4',
            'trinhdo_id'=>$trinhdo_id['Tốt'],
            'diemchuyenmon'=>'65',
            'nhanxet'=>'Ứng viên cần được tiếp tục kiểm tra thêm'
        ]);
        \App\Danhgia::query()->create([
            'lichhen_id'=>$lichhen_id['2019-09-27 15:00:00'],
            'user_id'=>'6',
            'trinhdo_id'=>$trinhdo_id['Đạt'],
            'diemchuyenmon'=>'60',
            'nhanxet'=>'Ứng viên cần được tiếp tục kiểm tra thêm'
        ]);
        \App\Danhgia::query()->create([
            'lichhen_id'=>$lichhen_id['2019-09-27 15:00:00'],
            'user_id'=>'9',
            'trinhdo_id'=>$trinhdo_id['Đạt'],
            'diemchuyenmon'=>'60',
            'nhanxet'=>'Ứng viên cần được tiếp tục kiểm tra thêm'
        ]);
        \App\Danhgia::query()->create([
            'lichhen_id'=>$lichhen_id['2019-09-29 15:00:00'],
            'user_id'=>'4',
            'trinhdo_id'=>$trinhdo_id['Tốt'],
            'diemchuyenmon'=>'80',
            'nhanxet'=>'Ứng viên được chấp nhận làm việc'
        ]);
        \App\Danhgia::query()->create([
            'lichhen_id'=>$lichhen_id['2019-09-29 15:00:00'],
            'user_id'=>'6',
            'trinhdo_id'=>$trinhdo_id['Đạt'],
            'diemchuyenmon'=>'79',
            'nhanxet'=>'Ứng viên được chấp nhận làm việc'
        ]);
        \App\Danhgia::query()->create([
            'lichhen_id'=>$lichhen_id['2019-09-29 15:00:00'],
            'user_id'=>'9',
            'trinhdo_id'=>$trinhdo_id['Đạt'],
            'diemchuyenmon'=>'80',
            'nhanxet'=>'Ứng viên được chấp nhận làm việc'
        ]);




        \App\Danhgia::query()->create([
            'lichhen_id'=>$lichhen_id['2019-10-02 10:18:00'],
            'user_id'=>'4',
            'trinhdo_id'=>$trinhdo_id['Tốt'],
            'diemchuyenmon'=>'80',
            'nhanxet'=>'Ứng viên đủ điều kiện làm việc'
        ]);
        \App\Danhgia::query()->create([
            'lichhen_id'=>$lichhen_id['2019-10-02 10:18:00'],
            'user_id'=>'6',
            'trinhdo_id'=>$trinhdo_id['Đạt'],
            'diemchuyenmon'=>'65',
            'nhanxet'=>'Ứng viên cần được tiếp tục kiểm tra thêm'
        ]);
        \App\Danhgia::query()->create([
            'lichhen_id'=>$lichhen_id['2019-10-02 10:18:00'],
            'user_id'=>'9',
            'trinhdo_id'=>$trinhdo_id['Đạt'],
            'diemchuyenmon'=>'60',
            'nhanxet'=>'Ứng viên cần được tiếp tục kiểm tra thêm'
        ]);
        \App\Danhgia::query()->create([
            'lichhen_id'=>$lichhen_id['2019-10-07 14:18:00'],
            'user_id'=>'4',
            'trinhdo_id'=>$trinhdo_id['Tốt'],
            'diemchuyenmon'=>'80',
            'nhanxet'=>'Ứng viên đủ điều kiện làm việc'
        ]);
        \App\Danhgia::query()->create([
            'lichhen_id'=>$lichhen_id['2019-10-07 14:18:00'],
            'user_id'=>'6',
            'trinhdo_id'=>$trinhdo_id['Đạt'],
            'diemchuyenmon'=>'79',
            'nhanxet'=>'Ứng viên được chấp nhận làm việc'
        ]);
        \App\Danhgia::query()->create([
            'lichhen_id'=>$lichhen_id['2019-10-07 14:18:00'],
            'user_id'=>'9',
            'trinhdo_id'=>$trinhdo_id['Đạt'],
            'diemchuyenmon'=>'80',
            'nhanxet'=>'Ứng viên được chấp nhận làm việc'
        ]);



        \App\Danhgia::query()->create([
            'lichhen_id'=>$lichhen_id['2019-10-04 11:18:00'],
            'user_id'=>'4',
            'trinhdo_id'=>$trinhdo_id['Không đạt'],
            'diemchuyenmon'=>'40',
            'nhanxet'=>'Ứng viên không đạt tiêu chí chung'
        ]);
        \App\Danhgia::query()->create([
            'lichhen_id'=>$lichhen_id['2019-10-04 11:18:00'],
            'user_id'=>'6',
            'trinhdo_id'=>$trinhdo_id['Không đạt'],
            'diemchuyenmon'=>'35',
            'nhanxet'=>'Ứng viên không đủ năng lực chuyên môn'
        ]);
        \App\Danhgia::query()->create([
            'lichhen_id'=>$lichhen_id['2019-10-04 11:18:00'],
            'user_id'=>'9',
            'trinhdo_id'=>$trinhdo_id['Không đạt'],
            'diemchuyenmon'=>'30',
            'nhanxet'=>'Năng lực chuyên môn của ứng viên còn hạn chế'
        ]);



        \App\Danhgia::query()->create([
            'lichhen_id'=>$lichhen_id['2020-01-20 10:18:00'],
            'user_id'=>'5',
            'trinhdo_id'=>$trinhdo_id['Không đạt'],
            'diemchuyenmon'=>'40',
            'nhanxet'=>'Ứng viên không đạt tiêu chí chung'
        ]);
        \App\Danhgia::query()->create([
            'lichhen_id'=>$lichhen_id['2020-01-20 10:18:00'],
            'user_id'=>'7',
            'trinhdo_id'=>$trinhdo_id['Không đạt'],
            'diemchuyenmon'=>'35',
            'nhanxet'=>'Ứng viên không đủ năng lực chuyên môn'
        ]);
        \App\Danhgia::query()->create([
            'lichhen_id'=>$lichhen_id['2020-01-20 10:18:00'],
            'user_id'=>'8',
            'trinhdo_id'=>$trinhdo_id['Không đạt'],
            'diemchuyenmon'=>'30',
            'nhanxet'=>'Năng lực chuyên môn của ứng viên còn hạn chế'
        ]);



        \App\Danhgia::query()->create([
            'lichhen_id'=>$lichhen_id['2020-01-20 14:15:00'],
            'user_id'=>'5',
            'trinhdo_id'=>$trinhdo_id['Tốt'],
            'diemchuyenmon'=>'80',
            'nhanxet'=>'Ứng viên đủ điều kiện làm việc'
        ]);
        \App\Danhgia::query()->create([
            'lichhen_id'=>$lichhen_id['2020-01-20 14:15:00'],
            'user_id'=>'7',
            'trinhdo_id'=>$trinhdo_id['Đạt'],
            'diemchuyenmon'=>'79',
            'nhanxet'=>'Ứng viên được chấp nhận làm việc'
        ]);
        \App\Danhgia::query()->create([
            'lichhen_id'=>$lichhen_id['2020-01-20 14:15:00'],
            'user_id'=>'8',
            'trinhdo_id'=>$trinhdo_id['Đạt'],
            'diemchuyenmon'=>'80',
            'nhanxet'=>'Ứng viên được chấp nhận làm việc'
        ]);



        \App\Danhgia::query()->create([
            'lichhen_id'=>$lichhen_id['2020-01-30 14:00:00'],
            'user_id'=>'5',
            'trinhdo_id'=>$trinhdo_id['Tốt'],
            'diemchuyenmon'=>'80',
            'nhanxet'=>'Ứng viên đủ điều kiện làm việc'
        ]);
        \App\Danhgia::query()->create([
            'lichhen_id'=>$lichhen_id['2020-01-30 14:00:00'],
            'user_id'=>'7',
            'trinhdo_id'=>$trinhdo_id['Đạt'],
            'diemchuyenmon'=>'79',
            'nhanxet'=>'Ứng viên được chấp nhận làm việc'
        ]);
        \App\Danhgia::query()->create([
            'lichhen_id'=>$lichhen_id['2020-01-30 14:00:00'],
            'user_id'=>'8',
            'trinhdo_id'=>$trinhdo_id['Đạt'],
            'diemchuyenmon'=>'80',
            'nhanxet'=>'Ứng viên được chấp nhận làm việc'
        ]);



        \App\Danhgia::query()->create([
            'lichhen_id'=>$lichhen_id['2020-02-25 10:00:00'],
            'user_id'=>'1',
            'trinhdo_id'=>$trinhdo_id['Tốt'],
            'diemchuyenmon'=>'80',
            'nhanxet'=>'Ứng viên đủ điều kiện làm việc'
        ]);
        \App\Danhgia::query()->create([
            'lichhen_id'=>$lichhen_id['2020-02-25 10:00:00'],
            'user_id'=>'6',
            'trinhdo_id'=>$trinhdo_id['Đạt'],
            'diemchuyenmon'=>'79',
            'nhanxet'=>'Ứng viên được chấp nhận làm việc'
        ]);
        \App\Danhgia::query()->create([
            'lichhen_id'=>$lichhen_id['2020-02-25 10:00:00'],
            'user_id'=>'10',
            'trinhdo_id'=>$trinhdo_id['Đạt'],
            'diemchuyenmon'=>'80',
            'nhanxet'=>'Ứng viên được chấp nhận làm việc'
        ]);



        \App\Danhgia::query()->create([
            'lichhen_id'=>$lichhen_id['2020-02-07 10:00:00'],
            'user_id'=>'1',
            'trinhdo_id'=>$trinhdo_id['Không đạt'],
            'diemchuyenmon'=>'40',
            'nhanxet'=>'Ứng viên không đạt tiêu chí chung'
        ]);
        \App\Danhgia::query()->create([
            'lichhen_id'=>$lichhen_id['2020-02-07 10:00:00'],
            'user_id'=>'6',
            'trinhdo_id'=>$trinhdo_id['Không đạt'],
            'diemchuyenmon'=>'35',
            'nhanxet'=>'Ứng viên không đủ năng lực chuyên môn'
        ]);
        \App\Danhgia::query()->create([
            'lichhen_id'=>$lichhen_id['2020-02-07 10:00:00'],
            'user_id'=>'10',
            'trinhdo_id'=>$trinhdo_id['Không đạt'],
            'diemchuyenmon'=>'30',
            'nhanxet'=>'Năng lực chuyên môn của ứng viên còn hạn chế'
        ]);




        \App\Danhgia::query()->create([
            'lichhen_id'=>$lichhen_id['2020-02-20 10:00:00'],
            'user_id'=>'4',
            'trinhdo_id'=>$trinhdo_id['Tốt'],
            'diemchuyenmon'=>'80',
            'nhanxet'=>'Ứng viên đủ điều kiện làm việc'
        ]);
        \App\Danhgia::query()->create([
            'lichhen_id'=>$lichhen_id['2020-02-20 10:00:00'],
            'user_id'=>'5',
            'trinhdo_id'=>$trinhdo_id['Đạt'],
            'diemchuyenmon'=>'79',
            'nhanxet'=>'Ứng viên được chấp nhận làm việc'
        ]);
        \App\Danhgia::query()->create([
            'lichhen_id'=>$lichhen_id['2020-02-20 10:00:00'],
            'user_id'=>'10',
            'trinhdo_id'=>$trinhdo_id['Đạt'],
            'diemchuyenmon'=>'80',
            'nhanxet'=>'Ứng viên được chấp nhận làm việc'
        ]);



        \App\Danhgia::query()->create([
            'lichhen_id'=>$lichhen_id['2020-02-22 10:00:00'],
            'user_id'=>'4',
            'trinhdo_id'=>$trinhdo_id['Tốt'],
            'diemchuyenmon'=>'80',
            'nhanxet'=>'Ứng viên đủ điều kiện làm việc'
        ]);
        \App\Danhgia::query()->create([
            'lichhen_id'=>$lichhen_id['2020-02-22 10:00:00'],
            'user_id'=>'5',
            'trinhdo_id'=>$trinhdo_id['Đạt'],
            'diemchuyenmon'=>'79',
            'nhanxet'=>'Ứng viên được chấp nhận làm việc'
        ]);
        \App\Danhgia::query()->create([
            'lichhen_id'=>$lichhen_id['2020-02-22 10:00:00'],
            'user_id'=>'10',
            'trinhdo_id'=>$trinhdo_id['Đạt'],
            'diemchuyenmon'=>'80',
            'nhanxet'=>'Ứng viên được chấp nhận làm việc'
        ]);



        \App\Danhgia::query()->create([
            'lichhen_id'=>$lichhen_id['2020-02-26 09:00:00'],
            'user_id'=>'6',
            'trinhdo_id'=>$trinhdo_id['Tốt'],
            'diemchuyenmon'=>'80',
            'nhanxet'=>'Ứng viên đủ điều kiện làm việc'
        ]);
        \App\Danhgia::query()->create([
            'lichhen_id'=>$lichhen_id['2020-02-26 09:00:00'],
            'user_id'=>'9',
            'trinhdo_id'=>$trinhdo_id['Đạt'],
            'diemchuyenmon'=>'79',
            'nhanxet'=>'Ứng viên được chấp nhận làm việc'
        ]);
        \App\Danhgia::query()->create([
            'lichhen_id'=>$lichhen_id['2020-02-26 09:00:00'],
            'user_id'=>'12',
            'trinhdo_id'=>$trinhdo_id['Đạt'],
            'diemchuyenmon'=>'80',
            'nhanxet'=>'Ứng viên được chấp nhận làm việc'
        ]);



        \App\Danhgia::query()->create([
            'lichhen_id'=>$lichhen_id['2019-10-10 09:00:00'],
            'user_id'=>'9',
            'trinhdo_id'=>$trinhdo_id['Không đạt'],
            'diemchuyenmon'=>'40',
            'nhanxet'=>'Ứng viên không đạt tiêu chí chung'
        ]);
        \App\Danhgia::query()->create([
            'lichhen_id'=>$lichhen_id['2019-10-10 09:00:00'],
            'user_id'=>'13',
            'trinhdo_id'=>$trinhdo_id['Không đạt'],
            'diemchuyenmon'=>'35',
            'nhanxet'=>'Ứng viên không đủ năng lực chuyên môn'
        ]);



        \App\Danhgia::query()->create([
            'lichhen_id'=>$lichhen_id['2019-11-03 10:00:00'],
            'user_id'=>'9',
            'trinhdo_id'=>$trinhdo_id['Không đạt'],
            'diemchuyenmon'=>'40',
            'nhanxet'=>'Ứng viên không đạt tiêu chí chung'
        ]);
        \App\Danhgia::query()->create([
            'lichhen_id'=>$lichhen_id['2019-11-03 10:00:00'],
            'user_id'=>'13',
            'trinhdo_id'=>$trinhdo_id['Không đạt'],
            'diemchuyenmon'=>'35',
            'nhanxet'=>'Ứng viên không đủ năng lực chuyên môn'
        ]);



        \App\Danhgia::query()->create([
            'lichhen_id'=>$lichhen_id['2019-11-02 10:00:00'],
            'user_id'=>'9',
            'trinhdo_id'=>$trinhdo_id['Tốt'],
            'diemchuyenmon'=>'80',
            'nhanxet'=>'Ứng viên đủ điều kiện làm việc'
        ]);
        \App\Danhgia::query()->create([
            'lichhen_id'=>$lichhen_id['2019-11-02 10:00:00'],
            'user_id'=>'10',
            'trinhdo_id'=>$trinhdo_id['Đạt'],
            'diemchuyenmon'=>'79',
            'nhanxet'=>'Ứng viên được chấp nhận làm việc'
        ]);
        \App\Danhgia::query()->create([
            'lichhen_id'=>$lichhen_id['2019-11-02 10:00:00'],
            'user_id'=>'12',
            'trinhdo_id'=>$trinhdo_id['Đạt'],
            'diemchuyenmon'=>'80',
            'nhanxet'=>'Ứng viên được chấp nhận làm việc'
        ]);



        \App\Danhgia::query()->create([
            'lichhen_id'=>$lichhen_id['2019-08-30 10:00:00'],
            'user_id'=>'9',
            'trinhdo_id'=>$trinhdo_id['Tốt'],
            'diemchuyenmon'=>'80',
            'nhanxet'=>'Ứng viên đủ điều kiện làm việc'
        ]);
        \App\Danhgia::query()->create([
            'lichhen_id'=>$lichhen_id['2019-08-30 10:00:00'],
            'user_id'=>'10',
            'trinhdo_id'=>$trinhdo_id['Đạt'],
            'diemchuyenmon'=>'79',
            'nhanxet'=>'Ứng viên được chấp nhận làm việc'
        ]);
        \App\Danhgia::query()->create([
            'lichhen_id'=>$lichhen_id['2019-08-30 10:00:00'],
            'user_id'=>'12',
            'trinhdo_id'=>$trinhdo_id['Đạt'],
            'diemchuyenmon'=>'80',
            'nhanxet'=>'Ứng viên được chấp nhận làm việc'
        ]);



        \App\Danhgia::query()->create([
            'lichhen_id'=>$lichhen_id['2020-02-19 10:00:00'],
            'user_id'=>'10',
            'trinhdo_id'=>$trinhdo_id['Tốt'],
            'diemchuyenmon'=>'80',
            'nhanxet'=>'Ứng viên đủ điều kiện làm việc'
        ]);
        \App\Danhgia::query()->create([
            'lichhen_id'=>$lichhen_id['2020-02-19 10:00:00'],
            'user_id'=>'13',
            'trinhdo_id'=>$trinhdo_id['Đạt'],
            'diemchuyenmon'=>'79',
            'nhanxet'=>'Ứng viên được chấp nhận làm việc'
        ]);



        \App\Danhgia::query()->create([
            'lichhen_id'=>$lichhen_id['2020-03-01 10:00:00'],
            'user_id'=>'10',
            'trinhdo_id'=>$trinhdo_id['Không đạt'],
            'diemchuyenmon'=>'40',
            'nhanxet'=>'Ứng viên không đạt tiêu chí chung'
        ]);
        \App\Danhgia::query()->create([
            'lichhen_id'=>$lichhen_id['2020-03-01 10:00:00'],
            'user_id'=>'13',
            'trinhdo_id'=>$trinhdo_id['Không đạt'],
            'diemchuyenmon'=>'35',
            'nhanxet'=>'Ứng viên không đủ năng lực chuyên môn'
        ]);



        \App\Danhgia::query()->create([
            'lichhen_id'=>$lichhen_id['2020-03-02 10:00:00'],
            'user_id'=>'10',
            'trinhdo_id'=>$trinhdo_id['Không đạt'],
            'diemchuyenmon'=>'40',
            'nhanxet'=>'Ứng viên không đạt tiêu chí chung'
        ]);
        \App\Danhgia::query()->create([
            'lichhen_id'=>$lichhen_id['2020-03-02 10:00:00'],
            'user_id'=>'13',
            'trinhdo_id'=>$trinhdo_id['Không đạt'],
            'diemchuyenmon'=>'35',
            'nhanxet'=>'Ứng viên không đủ năng lực chuyên môn'
        ]);



        \App\Danhgia::query()->create([
            'lichhen_id'=>$lichhen_id['2020-03-03 10:00:00'],
            'user_id'=>'10',
            'trinhdo_id'=>$trinhdo_id['Tốt'],
            'diemchuyenmon'=>'80',
            'nhanxet'=>'Ứng viên đủ điều kiện làm việc'
        ]);
        \App\Danhgia::query()->create([
            'lichhen_id'=>$lichhen_id['2020-03-03 10:00:00'],
            'user_id'=>'13',
            'trinhdo_id'=>$trinhdo_id['Đạt'],
            'diemchuyenmon'=>'79',
            'nhanxet'=>'Ứng viên được chấp nhận làm việc'
        ]);


        \App\Danhgia::query()->create([
            'lichhen_id'=>$lichhen_id['2020-03-03 14:00:00'],
            'user_id'=>'10',
            'trinhdo_id'=>$trinhdo_id['Tốt'],
            'diemchuyenmon'=>'80',
            'nhanxet'=>'Ứng viên đủ điều kiện làm việc'
        ]);
        \App\Danhgia::query()->create([
            'lichhen_id'=>$lichhen_id['2020-03-03 14:00:00'],
            'user_id'=>'13',
            'trinhdo_id'=>$trinhdo_id['Đạt'],
            'diemchuyenmon'=>'79',
            'nhanxet'=>'Ứng viên được chấp nhận làm việc'
        ]);



        \App\Danhgia::query()->create([
            'lichhen_id'=>$lichhen_id['2020-03-03 15:30:00'],
            'user_id'=>'10',
            'trinhdo_id'=>$trinhdo_id['Tốt'],
            'diemchuyenmon'=>'80',
            'nhanxet'=>'Ứng viên đủ điều kiện làm việc'
        ]);
        \App\Danhgia::query()->create([
            'lichhen_id'=>$lichhen_id['2020-03-03 15:30:00'],
            'user_id'=>'13',
            'trinhdo_id'=>$trinhdo_id['Đạt'],
            'diemchuyenmon'=>'79',
            'nhanxet'=>'Ứng viên được chấp nhận làm việc'
        ]);



        \App\Danhgia::query()->create([
            'lichhen_id'=>$lichhen_id['2020-01-13 10:00:00'],
            'user_id'=>'04',
            'trinhdo_id'=>$trinhdo_id['Không đạt'],
            'diemchuyenmon'=>'40',
            'nhanxet'=>'Ứng viên không đạt tiêu chí chung'
        ]);
        \App\Danhgia::query()->create([
            'lichhen_id'=>$lichhen_id['2020-01-13 10:00:00'],
            'user_id'=>'13',
            'trinhdo_id'=>$trinhdo_id['Không đạt'],
            'diemchuyenmon'=>'35',
            'nhanxet'=>'Ứng viên không đủ năng lực chuyên môn'
        ]);



        \App\Danhgia::query()->create([
            'lichhen_id'=>$lichhen_id['2020-01-14 10:00:00'],
            'user_id'=>'04',
            'trinhdo_id'=>$trinhdo_id['Không đạt'],
            'diemchuyenmon'=>'40',
            'nhanxet'=>'Ứng viên không đạt tiêu chí chung'
        ]);
        \App\Danhgia::query()->create([
            'lichhen_id'=>$lichhen_id['2020-01-14 10:00:00'],
            'user_id'=>'13',
            'trinhdo_id'=>$trinhdo_id['Không đạt'],
            'diemchuyenmon'=>'35',
            'nhanxet'=>'Ứng viên không đủ năng lực chuyên môn'
        ]);



        \App\Danhgia::query()->create([
            'lichhen_id'=>$lichhen_id['2020-01-14 11:00:00'],
            'user_id'=>'06',
            'trinhdo_id'=>$trinhdo_id['Không đạt'],
            'diemchuyenmon'=>'40',
            'nhanxet'=>'Ứng viên không đạt tiêu chí chung'
        ]);
        \App\Danhgia::query()->create([
            'lichhen_id'=>$lichhen_id['2020-01-14 11:00:00'],
            'user_id'=>'12',
            'trinhdo_id'=>$trinhdo_id['Không đạt'],
            'diemchuyenmon'=>'35',
            'nhanxet'=>'Ứng viên không đủ năng lực chuyên môn'
        ]);



        \App\Danhgia::query()->create([
            'lichhen_id'=>$lichhen_id['2020-07-10 10:00:00'],
            'user_id'=>'06',
            'trinhdo_id'=>$trinhdo_id['Tốt'],
            'diemchuyenmon'=>'65',
            'nhanxet'=>'Ứng viên cần được tiếp tục kiểm tra thêm'
        ]);
        \App\Danhgia::query()->create([
            'lichhen_id'=>$lichhen_id['2020-07-10 10:00:00'],
            'user_id'=>'12',
            'trinhdo_id'=>$trinhdo_id['Đạt'],
            'diemchuyenmon'=>'60',
            'nhanxet'=>'Ứng viên cần được tiếp tục kiểm tra thêm'
        ]);



        \App\Danhgia::query()->create([
            'lichhen_id'=>$lichhen_id['2020-07-11 10:00:00'],
            'user_id'=>'06',
            'trinhdo_id'=>$trinhdo_id['Tốt'],
            'diemchuyenmon'=>'65',
            'nhanxet'=>'Ứng viên cần được tiếp tục kiểm tra thêm'
        ]);
        \App\Danhgia::query()->create([
            'lichhen_id'=>$lichhen_id['2020-07-11 10:00:00'],
            'user_id'=>'12',
            'trinhdo_id'=>$trinhdo_id['Đạt'],
            'diemchuyenmon'=>'60',
            'nhanxet'=>'Ứng viên cần được tiếp tục kiểm tra thêm'
        ]);



        \App\Danhgia::query()->create([
            'lichhen_id'=>$lichhen_id['2020-07-12 10:00:00'],
            'user_id'=>'06',
            'trinhdo_id'=>$trinhdo_id['Tốt'],
            'diemchuyenmon'=>'65',
            'nhanxet'=>'Ứng viên cần được tiếp tục kiểm tra thêm'
        ]);
        \App\Danhgia::query()->create([
            'lichhen_id'=>$lichhen_id['2020-07-12 10:00:00'],
            'user_id'=>'12',
            'trinhdo_id'=>$trinhdo_id['Đạt'],
            'diemchuyenmon'=>'60',
            'nhanxet'=>'Ứng viên cần được tiếp tục kiểm tra thêm'
        ]);
    }
}
