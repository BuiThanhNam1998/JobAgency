<?php

use Illuminate\Database\Seeder;

class ScheduleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(\Faker\Generator $faker)
    {
        $status_id = \App\Models\ScheduleStatus::query()->get()->pluck('id','name');
        $role = \App\Models\Role::query()->get()->pluck('id', 'name');
        $user = \App\Models\User::query()->where('role_id', '<>', $role['Ứng viên'])
            ->get()->pluck('id', 'name');
        $profile_id = \App\Models\Profile::query()->get()->pluck('id','name');

        $schedule = \App\Models\Schedule::query()->create([
            'time'=>'2019-10-19 10:18:00',
            'place'=>'Phòng tuyển dụng',
            'description'=>'Chuẩn bị đủ tài liệu chuyên môn, phiếu đánh giá chuyên môn, đúng thời gian đã quy định',
            'status_id'=>$status_id['Tiếp tục phỏng vấn'],
            'profile_id'=>$profile_id['Phạm Nguyên Thành'],
        ]);
        $schedule->users()->attach([4,6,9]);
        $schedule = \App\Models\Schedule::query()->create([
            'time'=>'2019-10-20 14:18:00',
            'place'=>'Phòng tuyển dụng ',
            'description'=>'Chuẩn bị đủ tài liệu chuyên môn, phiếu đánh giá chuyên môn, đúng thời gian đã quy định',
            'status_id'=>$status_id['Đã hoàn tất, không tham gia phỏng vấn'],
            'profile_id'=>$profile_id['Phạm Nguyên Thành'],
        ]);
        $schedule->users()->attach([4,6,9]);
        $schedule = \App\Models\Schedule::query()->create([
            'time'=>'2019-10-26 14:18:00',
            'place'=>'Phòng tuyển dụng ',
            'description'=>'Chuẩn bị đủ tài liệu chuyên môn, phiếu đánh giá chuyên môn, đúng thời gian đã quy định',
            'status_id'=>$status_id['Đã hoàn tất, được nhận làm việc'],
            'profile_id'=>$profile_id['Phạm Nguyên Thành'],
        ]);
        $schedule->users()->attach([4,6,9]);


        $schedule = \App\Models\Schedule::query()->create([
            'time'=>'2019-10-27 11:18:00',
            'place'=>'Phòng tuyển dụng ',
            'description'=>'Chuẩn bị đủ tài liệu chuyên môn, phiếu đánh giá chuyên môn, đúng thời gian đã quy định',
            'status_id'=>$status_id['Tiếp tục phỏng vấn'],
            'profile_id'=>$profile_id['Đinh Nhật Minh'],
        ]);
        $schedule->users()->attach([4,6,9]);
        $schedule = \App\Models\Schedule::query()->create([
            'time'=>'2019-10-30 11:18:00',
            'place'=>'Phòng tuyển dụng ',
            'description'=>'Chuẩn bị đủ tài liệu chuyên môn, phiếu đánh giá chuyên môn, đúng thời gian đã quy định',
            'status_id'=>$status_id['Đã hoàn tất, được nhận làm việc'],
            'profile_id'=>$profile_id['Đinh Nhật Minh'],
        ]);
        $schedule->users()->attach([4,6,9]);


        $schedule = \App\Models\Schedule::query()->create([
            'time'=>'2019-09-26 14:00:00',
            'place'=>'Phòng tuyển dụng ',
            'description'=>'Chuẩn bị đủ tài liệu chuyên môn, phiếu đánh giá chuyên môn, đúng thời gian đã quy định',
            'status_id'=>$status_id['Tiếp tục phỏng vấn'],
            'profile_id'=>$profile_id['Vũ Kim Ngọc'],
        ]);
        $schedule->users()->attach([4,6,9]);
        $schedule = \App\Models\Schedule::query()->create([
            'time'=>'2019-09-28 14:00:00',
            'place'=>'Phòng tuyển dụng ',
            'description'=>'Chuẩn bị đủ tài liệu chuyên môn, phiếu đánh giá chuyên môn, đúng thời gian đã quy định',
            'status_id'=>$status_id['Đã hoàn tất, không tham gia phỏng vấn'],
            'profile_id'=>$profile_id['Vũ Kim Ngọc'],
        ]);
        $schedule->users()->attach([4,6,9]);
        $schedule = \App\Models\Schedule::query()->create([
            'time'=>'2019-10-01 11:00:00',
            'place'=>'Phòng tuyển dụng ',
            'description'=>'Chuẩn bị đủ tài liệu chuyên môn, phiếu đánh giá chuyên môn, đúng thời gian đã quy định',
            'status_id'=>$status_id['Đã hoàn tất, được nhận làm việc'],
            'profile_id'=>$profile_id['Vũ Kim Ngọc'],
        ]);
        $schedule->users()->attach([4,6,9]);


        $schedule = \App\Models\Schedule::query()->create([
            'time'=>'2019-09-26 15:00:00',
            'place'=>'Phòng tuyển dụng ',
            'description'=>'Chuẩn bị đủ tài liệu chuyên môn, phiếu đánh giá chuyên môn, đúng thời gian đã quy định',
            'status_id'=>$status_id['Tiếp tục phỏng vấn'],
            'profile_id'=>$profile_id['Trần Hải Nam'],
        ]);
        $schedule->users()->attach([4,6,9]);
        $schedule = \App\Models\Schedule::query()->create([
            'time'=>'2019-09-28 15:00:00',
            'place'=>'Phòng tuyển dụng ',
            'description'=>'Chuẩn bị đủ tài liệu chuyên môn, phiếu đánh giá chuyên môn, đúng thời gian đã quy định',
            'status_id'=>$status_id['Đã hoàn tất, được nhận làm việc'],
            'profile_id'=>$profile_id['Trần Hải Nam'],
        ]);
        $schedule->users()->attach([4,6,9]);


        $schedule = \App\Models\Schedule::query()->create([
            'time'=>'2019-09-27 15:00:00',
            'place'=>'Phòng tuyển dụng ',
            'description'=>'Chuẩn bị đủ tài liệu chuyên môn, phiếu đánh giá chuyên môn, đúng thời gian đã quy định',
            'status_id'=>$status_id['Tiếp tục phỏng vấn'],
            'profile_id'=>$profile_id['Vũ Nam Anh'],
        ]);
        $schedule->users()->attach([4,6,9]);
        $schedule = \App\Models\Schedule::query()->create([
            'time'=>'2019-09-29 15:00:00',
            'place'=>'Phòng tuyển dụng ',
            'description'=>'Chuẩn bị đủ tài liệu chuyên môn, phiếu đánh giá chuyên môn, đúng thời gian đã quy định',
            'status_id'=>$status_id['Đã hoàn tất, được nhận làm việc'],
            'profile_id'=>$profile_id['Vũ Nam Anh'],
        ]);
        $schedule->users()->attach([4,6,9]);



        $schedule = \App\Models\Schedule::query()->create([
            'time'=>'2019-10-02 10:18:00',
            'place'=>'Phòng tuyển dụng',
            'description'=>'Chuẩn bị đủ tài liệu chuyên môn, phiếu đánh giá chuyên môn, đúng thời gian đã quy định',
            'status_id'=>$status_id['Tiếp tục phỏng vấn'],
            'profile_id'=>$profile_id['Trần Quốc Hải'],
        ]);
        $schedule->users()->attach([4,6,9]);
        $schedule = \App\Models\Schedule::query()->create([
            'time'=>'2019-10-04 14:18:00',
            'place'=>'Phòng tuyển dụng ',
            'description'=>'Chuẩn bị đủ tài liệu chuyên môn, phiếu đánh giá chuyên môn, đúng thời gian đã quy định',
            'status_id'=>$status_id['Đã hoàn tất, không tham gia phỏng vấn'],
            'profile_id'=>$profile_id['Trần Quốc Hải'],
        ]);
        $schedule->users()->attach([4,6,9]);
        $schedule = \App\Models\Schedule::query()->create([
            'time'=>'2019-10-07 14:18:00',
            'place'=>'Phòng tuyển dụng ',
            'description'=>'Chuẩn bị đủ tài liệu chuyên môn, phiếu đánh giá chuyên môn, đúng thời gian đã quy định',
            'status_id'=>$status_id['Đã hoàn tất, được nhận làm việc'],
            'profile_id'=>$profile_id['Trần Quốc Hải'],
        ]);
        $schedule->users()->attach([4,6,9]);


        $schedule = \App\Models\Schedule::query()->create([
            'time'=>'2019-10-04 11:18:00',
            'place'=>'Phòng tuyển dụng ',
            'description'=>'Chuẩn bị đủ tài liệu chuyên môn, phiếu đánh giá chuyên môn, đúng thời gian đã quy định',
            'status_id'=>$status_id['Đã hoàn tất, từ chối ứng viên'],
            'profile_id'=>$profile_id['Vũ Minh Trí'],
        ]);
        $schedule->users()->attach([4,6,9]);


        $schedule = \App\Models\Schedule::query()->create([
            'time'=>'2020-01-20 10:18:00',
            'place'=>'Phòng tuyển dụng ',
            'description'=>'Chuẩn bị đủ tài liệu chuyên môn, phiếu đánh giá chuyên môn, đúng thời gian đã quy định',
            'status_id'=>$status_id['Đã hoàn tất, từ chối ứng viên'],
            'profile_id'=>$profile_id['Đỗ Minh Gia Vũ'],
        ]);
        $schedule->users()->attach([5,7,8]);



        $schedule = \App\Models\Schedule::query()->create([
            'time'=>'2020-01-20 14:15:00',
            'place'=>'Phòng tuyển dụng ',
            'description'=>'Chuẩn bị đủ tài liệu chuyên môn, phiếu đánh giá chuyên môn, đúng thời gian đã quy định',
            'status_id'=>$status_id['Đã hoàn tất, được nhận làm việc'],
            'profile_id'=>$profile_id['Trần Minh Thu'],
        ]);
        $schedule->users()->attach([5,7,8]);



        $schedule = \App\Models\Schedule::query()->create([
            'time'=>'2020-01-30 14:00:00',
            'place'=>'Phòng tuyển dụng ',
            'description'=>'Chuẩn bị đủ tài liệu chuyên môn, phiếu đánh giá chuyên môn, đúng thời gian đã quy định',
            'status_id'=>$status_id['Đã hoàn tất, được nhận làm việc'],
            'profile_id'=>$profile_id['Lê Nguyên Hải Nam'],
        ]);
        $schedule->users()->attach([5,7,8]);



        $schedule = \App\Models\Schedule::query()->create([
            'time'=>'2020-02-25 10:00:00',
            'place'=>'Phòng tuyển dụng ',
            'description'=>'Chuẩn bị đủ tài liệu chuyên môn, phiếu đánh giá chuyên môn, đúng thời gian đã quy định',
            'status_id'=>$status_id['Đã hoàn tất, được nhận làm việc'],
            'profile_id'=>$profile_id['Trần Minh An'],
        ]);
        $schedule->users()->attach([1,6,10]);



        $schedule = \App\Models\Schedule::query()->create([
            'time'=>'2020-02-07 10:00:00',
            'place'=>'Phòng tuyển dụng ',
            'description'=>'Chuẩn bị đủ tài liệu chuyên môn, phiếu đánh giá chuyên môn, đúng thời gian đã quy định',
            'status_id'=>$status_id['Đã hoàn tất, từ chối ứng viên'],
            'profile_id'=>$profile_id['Vũ Ngọc Long'],
        ]);
        $schedule->users()->attach([1,6,10]);



        $schedule = \App\Models\Schedule::query()->create([
            'time'=>'2020-02-20 10:00:00',
            'place'=>'Phòng tuyển dụng ',
            'description'=>'Chuẩn bị đủ tài liệu chuyên môn, phiếu đánh giá chuyên môn, đúng thời gian đã quy định',
            'status_id'=>$status_id['Đã hoàn tất, được nhận làm việc'],
            'profile_id'=>$profile_id['Phạm Quốc Anh'],
        ]);
        $schedule->users()->attach([4,5,10]);



        $schedule = \App\Models\Schedule::query()->create([
            'time'=>'2020-02-22 10:00:00',
            'place'=>'Phòng tuyển dụng ',
            'description'=>'Chuẩn bị đủ tài liệu chuyên môn, phiếu đánh giá chuyên môn, đúng thời gian đã quy định',
            'status_id'=>$status_id['Đã hoàn tất, được nhận làm việc'],
            'profile_id'=>$profile_id['Lê Phú Bình'],
        ]);
        $schedule->users()->attach([4,5,10]);


        $schedule = \App\Models\Schedule::query()->create([
            'time'=>'2020-02-26 09:00:00',
            'place'=>'Phòng tuyển dụng ',
            'description'=>'Chuẩn bị đủ tài liệu chuyên môn, phiếu đánh giá chuyên môn, đúng thời gian đã quy định',
            'status_id'=>$status_id['Đã hoàn tất, được nhận làm việc'],
            'profile_id'=>$profile_id['Lê Quốc Bảo'],
        ]);
        $schedule->users()->attach([6,9,12]);



        $schedule = \App\Models\Schedule::query()->create([
            'time'=>'2019-10-10 09:00:00',
            'place'=>'Phòng tuyển dụng ',
            'description'=>'Chuẩn bị đủ tài liệu chuyên môn, phiếu đánh giá chuyên môn, đúng thời gian đã quy định',
            'status_id'=>$status_id['Đã hoàn tất, từ chối ứng viên'],
            'profile_id'=>$profile_id['Vũ Thái Sơn'],
        ]);
        $schedule->users()->attach([9,13]);


        $schedule = \App\Models\Schedule::query()->create([
            'time'=>'2019-11-03 10:00:00',
            'place'=>'Phòng tuyển dụng ',
            'description'=>'Chuẩn bị đủ tài liệu chuyên môn, phiếu đánh giá chuyên môn, đúng thời gian đã quy định',
            'status_id'=>$status_id['Đã hoàn tất, từ chối ứng viên'],
            'profile_id'=>$profile_id['Đỗ Công Minh'],
        ]);
        $schedule->users()->attach([9,13]);


        $schedule = \App\Models\Schedule::query()->create([
            'time'=>'2019-11-02 10:00:00',
            'place'=>'Phòng tuyển dụng ',
            'description'=>'Chuẩn bị đủ tài liệu chuyên môn, phiếu đánh giá chuyên môn, đúng thời gian đã quy định',
            'status_id'=>$status_id['Đã hoàn tất, được nhận làm việc'],
            'profile_id'=>$profile_id['Đỗ Hà Ngân'],
        ]);
        $schedule->users()->attach([9,10,12]);


        $schedule = \App\Models\Schedule::query()->create([
            'time'=>'2019-08-30 10:00:00',
            'place'=>'Phòng tuyển dụng ',
            'description'=>'Chuẩn bị đủ tài liệu chuyên môn, phiếu đánh giá chuyên môn, đúng thời gian đã quy định',
            'status_id'=>$status_id['Đã hoàn tất, được nhận làm việc'],
            'profile_id'=>$profile_id['Phạm Thanh Xuân'],
        ]);
        $schedule->users()->attach([9,10,12]);


        $schedule = \App\Models\Schedule::query()->create([
            'time'=>'2020-02-19 10:00:00',
            'place'=>'Phòng tuyển dụng ',
            'description'=>'Chuẩn bị đủ tài liệu chuyên môn, phiếu đánh giá chuyên môn, đúng thời gian đã quy định',
            'status_id'=>$status_id['Đã hoàn tất, được nhận làm việc'],
            'profile_id'=>$profile_id['Đinh Xuân Thành'],
        ]);
        $schedule->users()->attach([10,13]);


        $schedule = \App\Models\Schedule::query()->create([
            'time'=>'2020-03-01 10:00:00',
            'place'=>'Phòng tuyển dụng ',
            'description'=>'Chuẩn bị đủ tài liệu chuyên môn, phiếu đánh giá chuyên môn, đúng thời gian đã quy định',
            'status_id'=>$status_id['Đã hoàn tất, từ chối ứng viên'],
            'profile_id'=>$profile_id['Trần Ngọc Vũ'],
        ]);
        $schedule->users()->attach([10,13]);

        $schedule = \App\Models\Schedule::query()->create([
            'time'=>'2020-03-02 10:00:00',
            'place'=>'Phòng tuyển dụng ',
            'description'=>'Chuẩn bị đủ tài liệu chuyên môn, phiếu đánh giá chuyên môn, đúng thời gian đã quy định',
            'status_id'=>$status_id['Đã hoàn tất, từ chối ứng viên'],
            'profile_id'=>$profile_id['Đỗ Anh Vũ'],
        ]);
        $schedule->users()->attach([10,13]);


        $schedule = \App\Models\Schedule::query()->create([
            'time'=>'2020-03-03 10:00:00',
            'place'=>'Phòng tuyển dụng ',
            'description'=>'Chuẩn bị đủ tài liệu chuyên môn, phiếu đánh giá chuyên môn, đúng thời gian đã quy định',
            'status_id'=>$status_id['Đã hoàn tất, được nhận làm việc'],
            'profile_id'=>$profile_id['Vũ Thái Hoàng'],
        ]);
        $schedule->users()->attach([10,13]);


        $schedule = \App\Models\Schedule::query()->create([
            'time'=>'2020-03-03 14:00:00',
            'place'=>'Phòng tuyển dụng ',
            'description'=>'Chuẩn bị đủ tài liệu chuyên môn, phiếu đánh giá chuyên môn, đúng thời gian đã quy định',
            'status_id'=>$status_id['Đã hoàn tất, được nhận làm việc'],
            'profile_id'=>$profile_id['Vũ Ngọc Tình'],
        ]);
        $schedule->users()->attach([10,13]);


        $schedule = \App\Models\Schedule::query()->create([
            'time'=>'2020-03-03 15:30:00',
            'place'=>'Phòng tuyển dụng ',
            'description'=>'Chuẩn bị đủ tài liệu chuyên môn, phiếu đánh giá chuyên môn, đúng thời gian đã quy định',
            'status_id'=>$status_id['Đã hoàn tất, được nhận làm việc'],
            'profile_id'=>$profile_id['Đinh Thái Tuấn'],
        ]);
        $schedule->users()->attach([10,13]);


        $schedule = \App\Models\Schedule::query()->create([
            'time'=>'2020-01-13 10:00:00',
            'place'=>'Phòng tuyển dụng ',
            'description'=>'Chuẩn bị đủ tài liệu chuyên môn, phiếu đánh giá chuyên môn, đúng thời gian đã quy định',
            'status_id'=>$status_id['Đã hoàn tất, từ chối ứng viên'],
            'profile_id'=>$profile_id['Phạm Hồng Hà'],
        ]);
        $schedule->users()->attach([04,13]);


        $schedule = \App\Models\Schedule::query()->create([
            'time'=>'2020-01-14 10:00:00',
            'place'=>'Phòng tuyển dụng ',
            'description'=>'Chuẩn bị đủ tài liệu chuyên môn, phiếu đánh giá chuyên môn, đúng thời gian đã quy định',
            'status_id'=>$status_id['Đã hoàn tất, từ chối ứng viên'],
            'profile_id'=>$profile_id['Phạm Hồng Linh'],
        ]);
        $schedule->users()->attach([04,13]);


        $schedule = \App\Models\Schedule::query()->create([
            'time'=>'2020-01-14 11:00:00',
            'place'=>'Phòng tuyển dụng ',
            'description'=>'Chuẩn bị đủ tài liệu chuyên môn, phiếu đánh giá chuyên môn, đúng thời gian đã quy định',
            'status_id'=>$status_id['Đã hoàn tất, từ chối ứng viên'],
            'profile_id'=>$profile_id['Nguyễn Viết Tùng'],
        ]);
        $schedule->users()->attach([06,12]);


        $schedule = \App\Models\Schedule::query()->create([
            'time'=>'2020-01-14 15:00:00',
            'place'=>'Phòng tuyển dụng ',
            'description'=>'Chuẩn bị đủ tài liệu chuyên môn, phiếu đánh giá chuyên môn, đúng thời gian đã quy định',
            'status_id'=>$status_id['Đã hoàn tất, không tham gia phỏng vấn'],
            'profile_id'=>$profile_id['Đặng Việt Hoàng'],
        ]);
        $schedule->users()->attach([06,12]);


        $schedule = \App\Models\Schedule::query()->create([
            'time'=>'2018-10-12 10:00:00',
            'place'=>'Phòng tuyển dụng ',
            'description'=>'Chuẩn bị đủ tài liệu chuyên môn, phiếu đánh giá chuyên môn, đúng thời gian đã quy định',
            'status_id'=>$status_id['Đã hoàn tất, không tham gia phỏng vấn'],
            'profile_id'=>$profile_id['Hoàng Lưu Ly'],
        ]);
        $schedule->users()->attach([06,13]);


        $schedule = \App\Models\Schedule::query()->create([
            'time'=>'2018-10-12 11:00:00',
            'place'=>'Phòng tuyển dụng ',
            'description'=>'Chuẩn bị đủ tài liệu chuyên môn, phiếu đánh giá chuyên môn, đúng thời gian đã quy định',
            'status_id'=>$status_id['Đã hoàn tất, không tham gia phỏng vấn'],
            'profile_id'=>$profile_id['Hoàng Quốc Vinh'],
        ]);
        $schedule->users()->attach([06,13]);


        $schedule = \App\Models\Schedule::query()->create([
            'time'=>'2020-03-05 10:00:00',
            'place'=>'Phòng tuyển dụng ',
            'description'=>'Chuẩn bị đủ tài liệu chuyên môn, phiếu đánh giá chuyên môn, đúng thời gian đã quy định',
            'status_id'=>$status_id['Chờ phỏng vấn'],
            'profile_id'=>$profile_id['Đinh Khánh Ngọc'],
        ]);
        $schedule->users()->attach([04,05,10]);


        $schedule = \App\Models\Schedule::query()->create([
            'time'=>'2020-03-05 14:00:00',
            'place'=>'Phòng tuyển dụng ',
            'description'=>'Chuẩn bị đủ tài liệu chuyên môn, phiếu đánh giá chuyên môn, đúng thời gian đã quy định',
            'status_id'=>$status_id['Chờ phỏng vấn'],
            'profile_id'=>$profile_id['Phạm Thu Hồng'],
        ]);
        $schedule->users()->attach([04,05,10]);


        $schedule = \App\Models\Schedule::query()->create([
            'time'=>'2020-05-02 14:00:00',
            'place'=>'Phòng tuyển dụng ',
            'description'=>'Chuẩn bị đủ tài liệu chuyên môn, phiếu đánh giá chuyên môn, đúng thời gian đã quy định',
            'status_id'=>$status_id['Chờ phỏng vấn'],
            'profile_id'=>$profile_id['Hồ Quốc Đạt'],
        ]);
        $schedule->users()->attach([01,02,03,05,06]);


        $schedule = \App\Models\Schedule::query()->create([
            'time'=>'2020-05-03 10:00:00',
            'place'=>'Phòng tuyển dụng ',
            'description'=>'Chuẩn bị đủ tài liệu chuyên môn, phiếu đánh giá chuyên môn, đúng thời gian đã quy định',
            'status_id'=>$status_id['Chờ phỏng vấn'],
            'profile_id'=>$profile_id['Nguyễn Hoàng Yến'],
        ]);
        $schedule->users()->attach([01,02,03,05,06]);


        $schedule = \App\Models\Schedule::query()->create([
            'time'=>'2020-05-03 15:00:00',
            'place'=>'Phòng tuyển dụng ',
            'description'=>'Chuẩn bị đủ tài liệu chuyên môn, phiếu đánh giá chuyên môn, đúng thời gian đã quy định',
            'status_id'=>$status_id['Chờ phỏng vấn'],
            'profile_id'=>$profile_id['Phạm Nguyên Hùng'],
        ]);
        $schedule->users()->attach([01,02,03,05,06]);


        $schedule = \App\Models\Schedule::query()->create([
            'time'=>'2020-05-04 10:00:00',
            'place'=>'Phòng tuyển dụng ',
            'description'=>'Chuẩn bị đủ tài liệu chuyên môn, phiếu đánh giá chuyên môn, đúng thời gian đã quy định',
            'status_id'=>$status_id['Chờ phỏng vấn'],
            'profile_id'=>$profile_id['Thái Nam Anh'],
        ]);
        $schedule->users()->attach([01,02,03,05,06]);


        $schedule = \App\Models\Schedule::query()->create([
            'time'=>'2020-05-04 10:00:00',
            'place'=>'Phòng tuyển dụng ',
            'description'=>'Chuẩn bị đủ tài liệu chuyên môn, phiếu đánh giá chuyên môn, đúng thời gian đã quy định',
            'status_id'=>$status_id['Chờ phỏng vấn'],
            'profile_id'=>$profile_id['Văn Tiến Hải'],
        ]);
        $schedule->users()->attach([01,02,03,05,06]);


        $schedule = \App\Models\Schedule::query()->create([
            'time'=>'2020-07-10 10:00:00',
            'place'=>'Phòng tuyển dụng ',
            'description'=>'Chuẩn bị đủ tài liệu chuyên môn, phiếu đánh giá chuyên môn, đúng thời gian đã quy định',
            'status_id'=>$status_id['Tiếp tục phỏng vấn'],
            'profile_id'=>$profile_id['Nguyễn Anh Tú'],
        ]);
        $schedule->users()->attach([06,12]);


        $schedule = \App\Models\Schedule::query()->create([
            'time'=>'2020-07-11 10:00:00',
            'place'=>'Phòng tuyển dụng ',
            'description'=>'Chuẩn bị đủ tài liệu chuyên môn, phiếu đánh giá chuyên môn, đúng thời gian đã quy định',
            'status_id'=>$status_id['Tiếp tục phỏng vấn'],
            'profile_id'=>$profile_id['Đỗ Đức Quang'],
        ]);
        $schedule->users()->attach([06,12]);



        $schedule = \App\Models\Schedule::query()->create([
            'time'=>'2020-07-12 10:00:00',
            'place'=>'Phòng tuyển dụng ',
            'description'=>'Chuẩn bị đủ tài liệu chuyên môn, phiếu đánh giá chuyên môn, đúng thời gian đã quy định',
            'status_id'=>$status_id['Tiếp tục phỏng vấn'],
            'profile_id'=>$profile_id['Võ Anh Hào'],
        ]);
        $schedule->users()->attach([06,12]);
    }
}
