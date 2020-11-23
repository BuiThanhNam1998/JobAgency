<?php

use Illuminate\Database\Seeder;

class ReviewTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $schedule_id=\App\Models\Schedule::query()->get()->pluck('id','time');
        $user_id=\App\Models\User::query()->get()->pluck('id','name');
        $grade_id = \App\Models\Grade::query()->get()->pluck('id','name');
        \App\Models\Review::query()->create([
            'schedule_id'=>$schedule_id['2019-10-19 10:18:00'],
            'user_id'=>'4',
            'grade_id'=>$grade_id['Tốt'],
            'point'=>'80',
            'review'=>'Ứng viên đủ điều kiện làm việc'
        ]);
        \App\Models\Review::query()->create([
            'schedule_id'=>$schedule_id['2019-10-19 10:18:00'],
            'user_id'=>'6',
            'grade_id'=>$grade_id['Đạt'],
            'point'=>'65',
            'review'=>'Ứng viên cần được tiếp tục kiểm tra thêm'
        ]);
        \App\Models\Review::query()->create([
            'schedule_id'=>$schedule_id['2019-10-19 10:18:00'],
            'user_id'=>'9',
            'grade_id'=>$grade_id['Đạt'],
            'point'=>'60',
            'review'=>'Ứng viên cần được tiếp tục kiểm tra thêm'
        ]);
        \App\Models\Review::query()->create([
            'schedule_id'=>$schedule_id['2019-10-26 14:18:00'],
            'user_id'=>'4',
            'grade_id'=>$grade_id['Tốt'],
            'point'=>'80',
            'review'=>'Ứng viên đủ điều kiện làm việc'
        ]);
        \App\Models\Review::query()->create([
            'schedule_id'=>$schedule_id['2019-10-26 14:18:00'],
            'user_id'=>'6',
            'grade_id'=>$grade_id['Đạt'],
            'point'=>'79',
            'review'=>'Ứng viên được chấp nhận làm việc'
        ]);
        \App\Models\Review::query()->create([
            'schedule_id'=>$schedule_id['2019-10-26 14:18:00'],
            'user_id'=>'9',
            'grade_id'=>$grade_id['Đạt'],
            'point'=>'80',
            'review'=>'Ứng viên được chấp nhận làm việc'
        ]);


        \App\Models\Review::query()->create([
            'schedule_id'=>$schedule_id['2019-10-27 11:18:00'],
            'user_id'=>'4',
            'grade_id'=>$grade_id['Tốt'],
            'point'=>'65',
            'review'=>'Ứng viên cần được tiếp tục kiểm tra thêm'
        ]);
        \App\Models\Review::query()->create([
            'schedule_id'=>$schedule_id['2019-10-27 11:18:00'],
            'user_id'=>'6',
            'grade_id'=>$grade_id['Đạt'],
            'point'=>'60',
            'review'=>'Ứng viên cần được tiếp tục kiểm tra thêm'
        ]);
        \App\Models\Review::query()->create([
            'schedule_id'=>$schedule_id['2019-10-27 11:18:00'],
            'user_id'=>'9',
            'grade_id'=>$grade_id['Đạt'],
            'point'=>'60',
            'review'=>'Ứng viên cần được tiếp tục kiểm tra thêm'
        ]);
        \App\Models\Review::query()->create([
            'schedule_id'=>$schedule_id['2019-10-30 11:18:00'],
            'user_id'=>'4',
            'grade_id'=>$grade_id['Tốt'],
            'point'=>'80',
            'review'=>'Ứng viên được chấp nhận làm việc'
        ]);
        \App\Models\Review::query()->create([
            'schedule_id'=>$schedule_id['2019-10-30 11:18:00'],
            'user_id'=>'6',
            'grade_id'=>$grade_id['Đạt'],
            'point'=>'79',
            'review'=>'Ứng viên được chấp nhận làm việc'
        ]);
        \App\Models\Review::query()->create([
            'schedule_id'=>$schedule_id['2019-10-30 11:18:00'],
            'user_id'=>'9',
            'grade_id'=>$grade_id['Đạt'],
            'point'=>'80',
            'review'=>'Ứng viên được chấp nhận làm việc'
        ]);


        \App\Models\Review::query()->create([
            'schedule_id'=>$schedule_id['2019-09-26 14:00:00'],
            'user_id'=>'4',
            'grade_id'=>$grade_id['Tốt'],
            'point'=>'65',
            'review'=>'Ứng viên cần được tiếp tục kiểm tra thêm'
        ]);
        \App\Models\Review::query()->create([
            'schedule_id'=>$schedule_id['2019-09-26 14:00:00'],
            'user_id'=>'6',
            'grade_id'=>$grade_id['Đạt'],
            'point'=>'60',
            'review'=>'Ứng viên cần được tiếp tục kiểm tra thêm'
        ]);
        \App\Models\Review::query()->create([
            'schedule_id'=>$schedule_id['2019-09-26 14:00:00'],
            'user_id'=>'9',
            'grade_id'=>$grade_id['Đạt'],
            'point'=>'60',
            'review'=>'Ứng viên cần được tiếp tục kiểm tra thêm'
        ]);
        \App\Models\Review::query()->create([
            'schedule_id'=>$schedule_id['2019-10-01 11:00:00'],
            'user_id'=>'4',
            'grade_id'=>$grade_id['Tốt'],
            'point'=>'80',
            'review'=>'Ứng viên được chấp nhận làm việc'
        ]);
        \App\Models\Review::query()->create([
            'schedule_id'=>$schedule_id['2019-10-01 11:00:00'],
            'user_id'=>'6',
            'grade_id'=>$grade_id['Đạt'],
            'point'=>'79',
            'review'=>'Ứng viên được chấp nhận làm việc'
        ]);
        \App\Models\Review::query()->create([
            'schedule_id'=>$schedule_id['2019-10-01 11:00:00'],
            'user_id'=>'9',
            'grade_id'=>$grade_id['Đạt'],
            'point'=>'80',
            'review'=>'Ứng viên được chấp nhận làm việc'
        ]);



        \App\Models\Review::query()->create([
            'schedule_id'=>$schedule_id['2019-09-26 15:00:00'],
            'user_id'=>'4',
            'grade_id'=>$grade_id['Tốt'],
            'point'=>'65',
            'review'=>'Ứng viên cần được tiếp tục kiểm tra thêm'
        ]);
        \App\Models\Review::query()->create([
            'schedule_id'=>$schedule_id['2019-09-26 15:00:00'],
            'user_id'=>'6',
            'grade_id'=>$grade_id['Đạt'],
            'point'=>'60',
            'review'=>'Ứng viên cần được tiếp tục kiểm tra thêm'
        ]);
        \App\Models\Review::query()->create([
            'schedule_id'=>$schedule_id['2019-09-26 15:00:00'],
            'user_id'=>'9',
            'grade_id'=>$grade_id['Đạt'],
            'point'=>'60',
            'review'=>'Ứng viên cần được tiếp tục kiểm tra thêm'
        ]);
        \App\Models\Review::query()->create([
            'schedule_id'=>$schedule_id['2019-09-28 15:00:00'],
            'user_id'=>'4',
            'grade_id'=>$grade_id['Tốt'],
            'point'=>'80',
            'review'=>'Ứng viên được chấp nhận làm việc'
        ]);
        \App\Models\Review::query()->create([
            'schedule_id'=>$schedule_id['2019-09-28 15:00:00'],
            'user_id'=>'6',
            'grade_id'=>$grade_id['Đạt'],
            'point'=>'79',
            'review'=>'Ứng viên được chấp nhận làm việc'
        ]);
        \App\Models\Review::query()->create([
            'schedule_id'=>$schedule_id['2019-09-28 15:00:00'],
            'user_id'=>'9',
            'grade_id'=>$grade_id['Đạt'],
            'point'=>'80',
            'review'=>'Ứng viên được chấp nhận làm việc'
        ]);



        \App\Models\Review::query()->create([
            'schedule_id'=>$schedule_id['2019-09-27 15:00:00'],
            'user_id'=>'4',
            'grade_id'=>$grade_id['Tốt'],
            'point'=>'65',
            'review'=>'Ứng viên cần được tiếp tục kiểm tra thêm'
        ]);
        \App\Models\Review::query()->create([
            'schedule_id'=>$schedule_id['2019-09-27 15:00:00'],
            'user_id'=>'6',
            'grade_id'=>$grade_id['Đạt'],
            'point'=>'60',
            'review'=>'Ứng viên cần được tiếp tục kiểm tra thêm'
        ]);
        \App\Models\Review::query()->create([
            'schedule_id'=>$schedule_id['2019-09-27 15:00:00'],
            'user_id'=>'9',
            'grade_id'=>$grade_id['Đạt'],
            'point'=>'60',
            'review'=>'Ứng viên cần được tiếp tục kiểm tra thêm'
        ]);
        \App\Models\Review::query()->create([
            'schedule_id'=>$schedule_id['2019-09-29 15:00:00'],
            'user_id'=>'4',
            'grade_id'=>$grade_id['Tốt'],
            'point'=>'80',
            'review'=>'Ứng viên được chấp nhận làm việc'
        ]);
        \App\Models\Review::query()->create([
            'schedule_id'=>$schedule_id['2019-09-29 15:00:00'],
            'user_id'=>'6',
            'grade_id'=>$grade_id['Đạt'],
            'point'=>'79',
            'review'=>'Ứng viên được chấp nhận làm việc'
        ]);
        \App\Models\Review::query()->create([
            'schedule_id'=>$schedule_id['2019-09-29 15:00:00'],
            'user_id'=>'9',
            'grade_id'=>$grade_id['Đạt'],
            'point'=>'80',
            'review'=>'Ứng viên được chấp nhận làm việc'
        ]);




        \App\Models\Review::query()->create([
            'schedule_id'=>$schedule_id['2019-10-02 10:18:00'],
            'user_id'=>'4',
            'grade_id'=>$grade_id['Tốt'],
            'point'=>'80',
            'review'=>'Ứng viên đủ điều kiện làm việc'
        ]);
        \App\Models\Review::query()->create([
            'schedule_id'=>$schedule_id['2019-10-02 10:18:00'],
            'user_id'=>'6',
            'grade_id'=>$grade_id['Đạt'],
            'point'=>'65',
            'review'=>'Ứng viên cần được tiếp tục kiểm tra thêm'
        ]);
        \App\Models\Review::query()->create([
            'schedule_id'=>$schedule_id['2019-10-02 10:18:00'],
            'user_id'=>'9',
            'grade_id'=>$grade_id['Đạt'],
            'point'=>'60',
            'review'=>'Ứng viên cần được tiếp tục kiểm tra thêm'
        ]);
        \App\Models\Review::query()->create([
            'schedule_id'=>$schedule_id['2019-10-07 14:18:00'],
            'user_id'=>'4',
            'grade_id'=>$grade_id['Tốt'],
            'point'=>'80',
            'review'=>'Ứng viên đủ điều kiện làm việc'
        ]);
        \App\Models\Review::query()->create([
            'schedule_id'=>$schedule_id['2019-10-07 14:18:00'],
            'user_id'=>'6',
            'grade_id'=>$grade_id['Đạt'],
            'point'=>'79',
            'review'=>'Ứng viên được chấp nhận làm việc'
        ]);
        \App\Models\Review::query()->create([
            'schedule_id'=>$schedule_id['2019-10-07 14:18:00'],
            'user_id'=>'9',
            'grade_id'=>$grade_id['Đạt'],
            'point'=>'80',
            'review'=>'Ứng viên được chấp nhận làm việc'
        ]);



        \App\Models\Review::query()->create([
            'schedule_id'=>$schedule_id['2019-10-04 11:18:00'],
            'user_id'=>'4',
            'grade_id'=>$grade_id['Không đạt'],
            'point'=>'40',
            'review'=>'Ứng viên không đạt tiêu chí chung'
        ]);
        \App\Models\Review::query()->create([
            'schedule_id'=>$schedule_id['2019-10-04 11:18:00'],
            'user_id'=>'6',
            'grade_id'=>$grade_id['Không đạt'],
            'point'=>'35',
            'review'=>'Ứng viên không đủ năng lực chuyên môn'
        ]);
        \App\Models\Review::query()->create([
            'schedule_id'=>$schedule_id['2019-10-04 11:18:00'],
            'user_id'=>'9',
            'grade_id'=>$grade_id['Không đạt'],
            'point'=>'30',
            'review'=>'Năng lực chuyên môn của ứng viên còn hạn chế'
        ]);



        \App\Models\Review::query()->create([
            'schedule_id'=>$schedule_id['2020-01-20 10:18:00'],
            'user_id'=>'5',
            'grade_id'=>$grade_id['Không đạt'],
            'point'=>'40',
            'review'=>'Ứng viên không đạt tiêu chí chung'
        ]);
        \App\Models\Review::query()->create([
            'schedule_id'=>$schedule_id['2020-01-20 10:18:00'],
            'user_id'=>'7',
            'grade_id'=>$grade_id['Không đạt'],
            'point'=>'35',
            'review'=>'Ứng viên không đủ năng lực chuyên môn'
        ]);
        \App\Models\Review::query()->create([
            'schedule_id'=>$schedule_id['2020-01-20 10:18:00'],
            'user_id'=>'8',
            'grade_id'=>$grade_id['Không đạt'],
            'point'=>'30',
            'review'=>'Năng lực chuyên môn của ứng viên còn hạn chế'
        ]);



        \App\Models\Review::query()->create([
            'schedule_id'=>$schedule_id['2020-01-20 14:15:00'],
            'user_id'=>'5',
            'grade_id'=>$grade_id['Tốt'],
            'point'=>'80',
            'review'=>'Ứng viên đủ điều kiện làm việc'
        ]);
        \App\Models\Review::query()->create([
            'schedule_id'=>$schedule_id['2020-01-20 14:15:00'],
            'user_id'=>'7',
            'grade_id'=>$grade_id['Đạt'],
            'point'=>'79',
            'review'=>'Ứng viên được chấp nhận làm việc'
        ]);
        \App\Models\Review::query()->create([
            'schedule_id'=>$schedule_id['2020-01-20 14:15:00'],
            'user_id'=>'8',
            'grade_id'=>$grade_id['Đạt'],
            'point'=>'80',
            'review'=>'Ứng viên được chấp nhận làm việc'
        ]);



        \App\Models\Review::query()->create([
            'schedule_id'=>$schedule_id['2020-01-30 14:00:00'],
            'user_id'=>'5',
            'grade_id'=>$grade_id['Tốt'],
            'point'=>'80',
            'review'=>'Ứng viên đủ điều kiện làm việc'
        ]);
        \App\Models\Review::query()->create([
            'schedule_id'=>$schedule_id['2020-01-30 14:00:00'],
            'user_id'=>'7',
            'grade_id'=>$grade_id['Đạt'],
            'point'=>'79',
            'review'=>'Ứng viên được chấp nhận làm việc'
        ]);
        \App\Models\Review::query()->create([
            'schedule_id'=>$schedule_id['2020-01-30 14:00:00'],
            'user_id'=>'8',
            'grade_id'=>$grade_id['Đạt'],
            'point'=>'80',
            'review'=>'Ứng viên được chấp nhận làm việc'
        ]);



        \App\Models\Review::query()->create([
            'schedule_id'=>$schedule_id['2020-02-25 10:00:00'],
            'user_id'=>'1',
            'grade_id'=>$grade_id['Tốt'],
            'point'=>'80',
            'review'=>'Ứng viên đủ điều kiện làm việc'
        ]);
        \App\Models\Review::query()->create([
            'schedule_id'=>$schedule_id['2020-02-25 10:00:00'],
            'user_id'=>'6',
            'grade_id'=>$grade_id['Đạt'],
            'point'=>'79',
            'review'=>'Ứng viên được chấp nhận làm việc'
        ]);
        \App\Models\Review::query()->create([
            'schedule_id'=>$schedule_id['2020-02-25 10:00:00'],
            'user_id'=>'10',
            'grade_id'=>$grade_id['Đạt'],
            'point'=>'80',
            'review'=>'Ứng viên được chấp nhận làm việc'
        ]);



        \App\Models\Review::query()->create([
            'schedule_id'=>$schedule_id['2020-02-07 10:00:00'],
            'user_id'=>'1',
            'grade_id'=>$grade_id['Không đạt'],
            'point'=>'40',
            'review'=>'Ứng viên không đạt tiêu chí chung'
        ]);
        \App\Models\Review::query()->create([
            'schedule_id'=>$schedule_id['2020-02-07 10:00:00'],
            'user_id'=>'6',
            'grade_id'=>$grade_id['Không đạt'],
            'point'=>'35',
            'review'=>'Ứng viên không đủ năng lực chuyên môn'
        ]);
        \App\Models\Review::query()->create([
            'schedule_id'=>$schedule_id['2020-02-07 10:00:00'],
            'user_id'=>'10',
            'grade_id'=>$grade_id['Không đạt'],
            'point'=>'30',
            'review'=>'Năng lực chuyên môn của ứng viên còn hạn chế'
        ]);




        \App\Models\Review::query()->create([
            'schedule_id'=>$schedule_id['2020-02-20 10:00:00'],
            'user_id'=>'4',
            'grade_id'=>$grade_id['Tốt'],
            'point'=>'80',
            'review'=>'Ứng viên đủ điều kiện làm việc'
        ]);
        \App\Models\Review::query()->create([
            'schedule_id'=>$schedule_id['2020-02-20 10:00:00'],
            'user_id'=>'5',
            'grade_id'=>$grade_id['Đạt'],
            'point'=>'79',
            'review'=>'Ứng viên được chấp nhận làm việc'
        ]);
        \App\Models\Review::query()->create([
            'schedule_id'=>$schedule_id['2020-02-20 10:00:00'],
            'user_id'=>'10',
            'grade_id'=>$grade_id['Đạt'],
            'point'=>'80',
            'review'=>'Ứng viên được chấp nhận làm việc'
        ]);



        \App\Models\Review::query()->create([
            'schedule_id'=>$schedule_id['2020-02-22 10:00:00'],
            'user_id'=>'4',
            'grade_id'=>$grade_id['Tốt'],
            'point'=>'80',
            'review'=>'Ứng viên đủ điều kiện làm việc'
        ]);
        \App\Models\Review::query()->create([
            'schedule_id'=>$schedule_id['2020-02-22 10:00:00'],
            'user_id'=>'5',
            'grade_id'=>$grade_id['Đạt'],
            'point'=>'79',
            'review'=>'Ứng viên được chấp nhận làm việc'
        ]);
        \App\Models\Review::query()->create([
            'schedule_id'=>$schedule_id['2020-02-22 10:00:00'],
            'user_id'=>'10',
            'grade_id'=>$grade_id['Đạt'],
            'point'=>'80',
            'review'=>'Ứng viên được chấp nhận làm việc'
        ]);



        \App\Models\Review::query()->create([
            'schedule_id'=>$schedule_id['2020-02-26 09:00:00'],
            'user_id'=>'6',
            'grade_id'=>$grade_id['Tốt'],
            'point'=>'80',
            'review'=>'Ứng viên đủ điều kiện làm việc'
        ]);
        \App\Models\Review::query()->create([
            'schedule_id'=>$schedule_id['2020-02-26 09:00:00'],
            'user_id'=>'9',
            'grade_id'=>$grade_id['Đạt'],
            'point'=>'79',
            'review'=>'Ứng viên được chấp nhận làm việc'
        ]);
        \App\Models\Review::query()->create([
            'schedule_id'=>$schedule_id['2020-02-26 09:00:00'],
            'user_id'=>'12',
            'grade_id'=>$grade_id['Đạt'],
            'point'=>'80',
            'review'=>'Ứng viên được chấp nhận làm việc'
        ]);



        \App\Models\Review::query()->create([
            'schedule_id'=>$schedule_id['2019-10-10 09:00:00'],
            'user_id'=>'9',
            'grade_id'=>$grade_id['Không đạt'],
            'point'=>'40',
            'review'=>'Ứng viên không đạt tiêu chí chung'
        ]);
        \App\Models\Review::query()->create([
            'schedule_id'=>$schedule_id['2019-10-10 09:00:00'],
            'user_id'=>'13',
            'grade_id'=>$grade_id['Không đạt'],
            'point'=>'35',
            'review'=>'Ứng viên không đủ năng lực chuyên môn'
        ]);



        \App\Models\Review::query()->create([
            'schedule_id'=>$schedule_id['2019-11-03 10:00:00'],
            'user_id'=>'9',
            'grade_id'=>$grade_id['Không đạt'],
            'point'=>'40',
            'review'=>'Ứng viên không đạt tiêu chí chung'
        ]);
        \App\Models\Review::query()->create([
            'schedule_id'=>$schedule_id['2019-11-03 10:00:00'],
            'user_id'=>'13',
            'grade_id'=>$grade_id['Không đạt'],
            'point'=>'35',
            'review'=>'Ứng viên không đủ năng lực chuyên môn'
        ]);



        \App\Models\Review::query()->create([
            'schedule_id'=>$schedule_id['2019-11-02 10:00:00'],
            'user_id'=>'9',
            'grade_id'=>$grade_id['Tốt'],
            'point'=>'80',
            'review'=>'Ứng viên đủ điều kiện làm việc'
        ]);
        \App\Models\Review::query()->create([
            'schedule_id'=>$schedule_id['2019-11-02 10:00:00'],
            'user_id'=>'10',
            'grade_id'=>$grade_id['Đạt'],
            'point'=>'79',
            'review'=>'Ứng viên được chấp nhận làm việc'
        ]);
        \App\Models\Review::query()->create([
            'schedule_id'=>$schedule_id['2019-11-02 10:00:00'],
            'user_id'=>'12',
            'grade_id'=>$grade_id['Đạt'],
            'point'=>'80',
            'review'=>'Ứng viên được chấp nhận làm việc'
        ]);



        \App\Models\Review::query()->create([
            'schedule_id'=>$schedule_id['2019-08-30 10:00:00'],
            'user_id'=>'9',
            'grade_id'=>$grade_id['Tốt'],
            'point'=>'80',
            'review'=>'Ứng viên đủ điều kiện làm việc'
        ]);
        \App\Models\Review::query()->create([
            'schedule_id'=>$schedule_id['2019-08-30 10:00:00'],
            'user_id'=>'10',
            'grade_id'=>$grade_id['Đạt'],
            'point'=>'79',
            'review'=>'Ứng viên được chấp nhận làm việc'
        ]);
        \App\Models\Review::query()->create([
            'schedule_id'=>$schedule_id['2019-08-30 10:00:00'],
            'user_id'=>'12',
            'grade_id'=>$grade_id['Đạt'],
            'point'=>'80',
            'review'=>'Ứng viên được chấp nhận làm việc'
        ]);



        \App\Models\Review::query()->create([
            'schedule_id'=>$schedule_id['2020-02-19 10:00:00'],
            'user_id'=>'10',
            'grade_id'=>$grade_id['Tốt'],
            'point'=>'80',
            'review'=>'Ứng viên đủ điều kiện làm việc'
        ]);
        \App\Models\Review::query()->create([
            'schedule_id'=>$schedule_id['2020-02-19 10:00:00'],
            'user_id'=>'13',
            'grade_id'=>$grade_id['Đạt'],
            'point'=>'79',
            'review'=>'Ứng viên được chấp nhận làm việc'
        ]);



        \App\Models\Review::query()->create([
            'schedule_id'=>$schedule_id['2020-03-01 10:00:00'],
            'user_id'=>'10',
            'grade_id'=>$grade_id['Không đạt'],
            'point'=>'40',
            'review'=>'Ứng viên không đạt tiêu chí chung'
        ]);
        \App\Models\Review::query()->create([
            'schedule_id'=>$schedule_id['2020-03-01 10:00:00'],
            'user_id'=>'13',
            'grade_id'=>$grade_id['Không đạt'],
            'point'=>'35',
            'review'=>'Ứng viên không đủ năng lực chuyên môn'
        ]);



        \App\Models\Review::query()->create([
            'schedule_id'=>$schedule_id['2020-03-02 10:00:00'],
            'user_id'=>'10',
            'grade_id'=>$grade_id['Không đạt'],
            'point'=>'40',
            'review'=>'Ứng viên không đạt tiêu chí chung'
        ]);
        \App\Models\Review::query()->create([
            'schedule_id'=>$schedule_id['2020-03-02 10:00:00'],
            'user_id'=>'13',
            'grade_id'=>$grade_id['Không đạt'],
            'point'=>'35',
            'review'=>'Ứng viên không đủ năng lực chuyên môn'
        ]);



        \App\Models\Review::query()->create([
            'schedule_id'=>$schedule_id['2020-03-03 10:00:00'],
            'user_id'=>'10',
            'grade_id'=>$grade_id['Tốt'],
            'point'=>'80',
            'review'=>'Ứng viên đủ điều kiện làm việc'
        ]);
        \App\Models\Review::query()->create([
            'schedule_id'=>$schedule_id['2020-03-03 10:00:00'],
            'user_id'=>'13',
            'grade_id'=>$grade_id['Đạt'],
            'point'=>'79',
            'review'=>'Ứng viên được chấp nhận làm việc'
        ]);


        \App\Models\Review::query()->create([
            'schedule_id'=>$schedule_id['2020-03-03 14:00:00'],
            'user_id'=>'10',
            'grade_id'=>$grade_id['Tốt'],
            'point'=>'80',
            'review'=>'Ứng viên đủ điều kiện làm việc'
        ]);
        \App\Models\Review::query()->create([
            'schedule_id'=>$schedule_id['2020-03-03 14:00:00'],
            'user_id'=>'13',
            'grade_id'=>$grade_id['Đạt'],
            'point'=>'79',
            'review'=>'Ứng viên được chấp nhận làm việc'
        ]);



        \App\Models\Review::query()->create([
            'schedule_id'=>$schedule_id['2020-03-03 15:30:00'],
            'user_id'=>'10',
            'grade_id'=>$grade_id['Tốt'],
            'point'=>'80',
            'review'=>'Ứng viên đủ điều kiện làm việc'
        ]);
        \App\Models\Review::query()->create([
            'schedule_id'=>$schedule_id['2020-03-03 15:30:00'],
            'user_id'=>'13',
            'grade_id'=>$grade_id['Đạt'],
            'point'=>'79',
            'review'=>'Ứng viên được chấp nhận làm việc'
        ]);



        \App\Models\Review::query()->create([
            'schedule_id'=>$schedule_id['2020-01-13 10:00:00'],
            'user_id'=>'04',
            'grade_id'=>$grade_id['Không đạt'],
            'point'=>'40',
            'review'=>'Ứng viên không đạt tiêu chí chung'
        ]);
        \App\Models\Review::query()->create([
            'schedule_id'=>$schedule_id['2020-01-13 10:00:00'],
            'user_id'=>'13',
            'grade_id'=>$grade_id['Không đạt'],
            'point'=>'35',
            'review'=>'Ứng viên không đủ năng lực chuyên môn'
        ]);



        \App\Models\Review::query()->create([
            'schedule_id'=>$schedule_id['2020-01-14 10:00:00'],
            'user_id'=>'04',
            'grade_id'=>$grade_id['Không đạt'],
            'point'=>'40',
            'review'=>'Ứng viên không đạt tiêu chí chung'
        ]);
        \App\Models\Review::query()->create([
            'schedule_id'=>$schedule_id['2020-01-14 10:00:00'],
            'user_id'=>'13',
            'grade_id'=>$grade_id['Không đạt'],
            'point'=>'35',
            'review'=>'Ứng viên không đủ năng lực chuyên môn'
        ]);



        \App\Models\Review::query()->create([
            'schedule_id'=>$schedule_id['2020-01-14 11:00:00'],
            'user_id'=>'06',
            'grade_id'=>$grade_id['Không đạt'],
            'point'=>'40',
            'review'=>'Ứng viên không đạt tiêu chí chung'
        ]);
        \App\Models\Review::query()->create([
            'schedule_id'=>$schedule_id['2020-01-14 11:00:00'],
            'user_id'=>'12',
            'grade_id'=>$grade_id['Không đạt'],
            'point'=>'35',
            'review'=>'Ứng viên không đủ năng lực chuyên môn'
        ]);



        \App\Models\Review::query()->create([
            'schedule_id'=>$schedule_id['2020-07-10 10:00:00'],
            'user_id'=>'06',
            'grade_id'=>$grade_id['Tốt'],
            'point'=>'65',
            'review'=>'Ứng viên cần được tiếp tục kiểm tra thêm'
        ]);
        \App\Models\Review::query()->create([
            'schedule_id'=>$schedule_id['2020-07-10 10:00:00'],
            'user_id'=>'12',
            'grade_id'=>$grade_id['Đạt'],
            'point'=>'60',
            'review'=>'Ứng viên cần được tiếp tục kiểm tra thêm'
        ]);



        \App\Models\Review::query()->create([
            'schedule_id'=>$schedule_id['2020-07-11 10:00:00'],
            'user_id'=>'06',
            'grade_id'=>$grade_id['Tốt'],
            'point'=>'65',
            'review'=>'Ứng viên cần được tiếp tục kiểm tra thêm'
        ]);
        \App\Models\Review::query()->create([
            'schedule_id'=>$schedule_id['2020-07-11 10:00:00'],
            'user_id'=>'12',
            'grade_id'=>$grade_id['Đạt'],
            'point'=>'60',
            'review'=>'Ứng viên cần được tiếp tục kiểm tra thêm'
        ]);



        \App\Models\Review::query()->create([
            'schedule_id'=>$schedule_id['2020-07-12 10:00:00'],
            'user_id'=>'06',
            'grade_id'=>$grade_id['Tốt'],
            'point'=>'65',
            'review'=>'Ứng viên cần được tiếp tục kiểm tra thêm'
        ]);
        \App\Models\Review::query()->create([
            'schedule_id'=>$schedule_id['2020-07-12 10:00:00'],
            'user_id'=>'12',
            'grade_id'=>$grade_id['Đạt'],
            'point'=>'60',
            'review'=>'Ứng viên cần được tiếp tục kiểm tra thêm'
        ]);
    }
}
