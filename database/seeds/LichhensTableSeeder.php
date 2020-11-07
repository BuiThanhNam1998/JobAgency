<?php

use Illuminate\Database\Seeder;

class LichhensTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(\Faker\Generator $faker)
    {
        $trangthai_id = \App\trangthai_lichhen::query()->get()->pluck('id','ten');
        $vaitros = \App\vaitro::query()->get()->pluck('id', 'ten');
        $nhanviens = \App\User::query()->where('vaitro_id', '<>', $vaitros['Ứng viên'])
            ->get()->pluck('id', 'ten');
        $hoso_id = \App\hoso::query()->get()->pluck('id','ten');
//        \App\lichhen::query()->create([
//            'thoigian'=>'2019-10-19 21:18:00',
//            'diadiem'=>'11 Hai Bà Trưng - Hoàn Kiếm - Hà Nội',
//            'mota'=>'Trang phục công sở, đúng thời gian đã quy định',
//            'trangthai_id'=>$trangthai_id['Chờ phỏng vấn'],
//            'hoso_id'=> $faker->randomElement($hoso_id),
//        ]);
//        \App\lichhen::query()->create([
//            'thoigian'=>'2020-10-19 21:18:00',
//            'diadiem'=>'Hai Bà Trưng - Hà Nội',
//            'mota'=>'đúng thời gian đã quy định',
//            'trangthai_id'=>$trangthai_id['Chờ phỏng vấn'],
//            'hoso_id'=>$hoso_id['Nguyễn Văn Nam'],
//        ]);

        $lichhen = \App\lichhen::query()->create([
            'thoigian'=>'2019-10-19 10:18:00',
            'diadiem'=>'Phòng tuyển dụng',
            'mota'=>'Chuẩn bị đủ tài liệu chuyên môn, phiếu đánh giá chuyên môn, đúng thời gian đã quy định',
            'trangthai_id'=>$trangthai_id['Tiếp tục phỏng vấn'],
            'hoso_id'=>$hoso_id['Phạm Nguyên Thành'],
        ]);
        $lichhen->nhanviens()->attach([4,6,9]);
        $lichhen = \App\lichhen::query()->create([
            'thoigian'=>'2019-10-20 14:18:00',
            'diadiem'=>'Phòng tuyển dụng ',
            'mota'=>'Chuẩn bị đủ tài liệu chuyên môn, phiếu đánh giá chuyên môn, đúng thời gian đã quy định',
            'trangthai_id'=>$trangthai_id['Đã hoàn tất, không tham gia phỏng vấn'],
            'hoso_id'=>$hoso_id['Phạm Nguyên Thành'],
        ]);
        $lichhen->nhanviens()->attach([4,6,9]);
        $lichhen = \App\lichhen::query()->create([
            'thoigian'=>'2019-10-26 14:18:00',
            'diadiem'=>'Phòng tuyển dụng ',
            'mota'=>'Chuẩn bị đủ tài liệu chuyên môn, phiếu đánh giá chuyên môn, đúng thời gian đã quy định',
            'trangthai_id'=>$trangthai_id['Đã hoàn tất, được nhận làm việc'],
            'hoso_id'=>$hoso_id['Phạm Nguyên Thành'],
        ]);
        $lichhen->nhanviens()->attach([4,6,9]);


        $lichhen = \App\lichhen::query()->create([
            'thoigian'=>'2019-10-27 11:18:00',
            'diadiem'=>'Phòng tuyển dụng ',
            'mota'=>'Chuẩn bị đủ tài liệu chuyên môn, phiếu đánh giá chuyên môn, đúng thời gian đã quy định',
            'trangthai_id'=>$trangthai_id['Tiếp tục phỏng vấn'],
            'hoso_id'=>$hoso_id['Đinh Nhật Minh'],
        ]);
        $lichhen->nhanviens()->attach([4,6,9]);
        $lichhen = \App\lichhen::query()->create([
            'thoigian'=>'2019-10-30 11:18:00',
            'diadiem'=>'Phòng tuyển dụng ',
            'mota'=>'Chuẩn bị đủ tài liệu chuyên môn, phiếu đánh giá chuyên môn, đúng thời gian đã quy định',
            'trangthai_id'=>$trangthai_id['Đã hoàn tất, được nhận làm việc'],
            'hoso_id'=>$hoso_id['Đinh Nhật Minh'],
        ]);
        $lichhen->nhanviens()->attach([4,6,9]);


        $lichhen = \App\lichhen::query()->create([
            'thoigian'=>'2019-09-26 14:00:00',
            'diadiem'=>'Phòng tuyển dụng ',
            'mota'=>'Chuẩn bị đủ tài liệu chuyên môn, phiếu đánh giá chuyên môn, đúng thời gian đã quy định',
            'trangthai_id'=>$trangthai_id['Tiếp tục phỏng vấn'],
            'hoso_id'=>$hoso_id['Vũ Kim Ngọc'],
        ]);
        $lichhen->nhanviens()->attach([4,6,9]);
        $lichhen = \App\lichhen::query()->create([
            'thoigian'=>'2019-09-28 14:00:00',
            'diadiem'=>'Phòng tuyển dụng ',
            'mota'=>'Chuẩn bị đủ tài liệu chuyên môn, phiếu đánh giá chuyên môn, đúng thời gian đã quy định',
            'trangthai_id'=>$trangthai_id['Đã hoàn tất, không tham gia phỏng vấn'],
            'hoso_id'=>$hoso_id['Vũ Kim Ngọc'],
        ]);
        $lichhen->nhanviens()->attach([4,6,9]);
        $lichhen = \App\lichhen::query()->create([
            'thoigian'=>'2019-10-01 11:00:00',
            'diadiem'=>'Phòng tuyển dụng ',
            'mota'=>'Chuẩn bị đủ tài liệu chuyên môn, phiếu đánh giá chuyên môn, đúng thời gian đã quy định',
            'trangthai_id'=>$trangthai_id['Đã hoàn tất, được nhận làm việc'],
            'hoso_id'=>$hoso_id['Vũ Kim Ngọc'],
        ]);
        $lichhen->nhanviens()->attach([4,6,9]);


        $lichhen = \App\lichhen::query()->create([
            'thoigian'=>'2019-09-26 15:00:00',
            'diadiem'=>'Phòng tuyển dụng ',
            'mota'=>'Chuẩn bị đủ tài liệu chuyên môn, phiếu đánh giá chuyên môn, đúng thời gian đã quy định',
            'trangthai_id'=>$trangthai_id['Tiếp tục phỏng vấn'],
            'hoso_id'=>$hoso_id['Trần Hải Nam'],
        ]);
        $lichhen->nhanviens()->attach([4,6,9]);
        $lichhen = \App\lichhen::query()->create([
            'thoigian'=>'2019-09-28 15:00:00',
            'diadiem'=>'Phòng tuyển dụng ',
            'mota'=>'Chuẩn bị đủ tài liệu chuyên môn, phiếu đánh giá chuyên môn, đúng thời gian đã quy định',
            'trangthai_id'=>$trangthai_id['Đã hoàn tất, được nhận làm việc'],
            'hoso_id'=>$hoso_id['Trần Hải Nam'],
        ]);
        $lichhen->nhanviens()->attach([4,6,9]);


        $lichhen = \App\lichhen::query()->create([
            'thoigian'=>'2019-09-27 15:00:00',
            'diadiem'=>'Phòng tuyển dụng ',
            'mota'=>'Chuẩn bị đủ tài liệu chuyên môn, phiếu đánh giá chuyên môn, đúng thời gian đã quy định',
            'trangthai_id'=>$trangthai_id['Tiếp tục phỏng vấn'],
            'hoso_id'=>$hoso_id['Vũ Nam Anh'],
        ]);
        $lichhen->nhanviens()->attach([4,6,9]);
        $lichhen = \App\lichhen::query()->create([
            'thoigian'=>'2019-09-29 15:00:00',
            'diadiem'=>'Phòng tuyển dụng ',
            'mota'=>'Chuẩn bị đủ tài liệu chuyên môn, phiếu đánh giá chuyên môn, đúng thời gian đã quy định',
            'trangthai_id'=>$trangthai_id['Đã hoàn tất, được nhận làm việc'],
            'hoso_id'=>$hoso_id['Vũ Nam Anh'],
        ]);
        $lichhen->nhanviens()->attach([4,6,9]);



        $lichhen = \App\lichhen::query()->create([
            'thoigian'=>'2019-10-02 10:18:00',
            'diadiem'=>'Phòng tuyển dụng',
            'mota'=>'Chuẩn bị đủ tài liệu chuyên môn, phiếu đánh giá chuyên môn, đúng thời gian đã quy định',
            'trangthai_id'=>$trangthai_id['Tiếp tục phỏng vấn'],
            'hoso_id'=>$hoso_id['Trần Quốc Hải'],
        ]);
        $lichhen->nhanviens()->attach([4,6,9]);
        $lichhen = \App\lichhen::query()->create([
            'thoigian'=>'2019-10-04 14:18:00',
            'diadiem'=>'Phòng tuyển dụng ',
            'mota'=>'Chuẩn bị đủ tài liệu chuyên môn, phiếu đánh giá chuyên môn, đúng thời gian đã quy định',
            'trangthai_id'=>$trangthai_id['Đã hoàn tất, không tham gia phỏng vấn'],
            'hoso_id'=>$hoso_id['Trần Quốc Hải'],
        ]);
        $lichhen->nhanviens()->attach([4,6,9]);
        $lichhen = \App\lichhen::query()->create([
            'thoigian'=>'2019-10-07 14:18:00',
            'diadiem'=>'Phòng tuyển dụng ',
            'mota'=>'Chuẩn bị đủ tài liệu chuyên môn, phiếu đánh giá chuyên môn, đúng thời gian đã quy định',
            'trangthai_id'=>$trangthai_id['Đã hoàn tất, được nhận làm việc'],
            'hoso_id'=>$hoso_id['Trần Quốc Hải'],
        ]);
        $lichhen->nhanviens()->attach([4,6,9]);


        $lichhen = \App\lichhen::query()->create([
            'thoigian'=>'2019-10-04 11:18:00',
            'diadiem'=>'Phòng tuyển dụng ',
            'mota'=>'Chuẩn bị đủ tài liệu chuyên môn, phiếu đánh giá chuyên môn, đúng thời gian đã quy định',
            'trangthai_id'=>$trangthai_id['Đã hoàn tất, từ chối ứng viên'],
            'hoso_id'=>$hoso_id['Vũ Minh Trí'],
        ]);
        $lichhen->nhanviens()->attach([4,6,9]);


        $lichhen = \App\lichhen::query()->create([
            'thoigian'=>'2020-01-20 10:18:00',
            'diadiem'=>'Phòng tuyển dụng ',
            'mota'=>'Chuẩn bị đủ tài liệu chuyên môn, phiếu đánh giá chuyên môn, đúng thời gian đã quy định',
            'trangthai_id'=>$trangthai_id['Đã hoàn tất, từ chối ứng viên'],
            'hoso_id'=>$hoso_id['Đỗ Minh Gia Vũ'],
        ]);
        $lichhen->nhanviens()->attach([5,7,8]);



        $lichhen = \App\lichhen::query()->create([
            'thoigian'=>'2020-01-20 14:15:00',
            'diadiem'=>'Phòng tuyển dụng ',
            'mota'=>'Chuẩn bị đủ tài liệu chuyên môn, phiếu đánh giá chuyên môn, đúng thời gian đã quy định',
            'trangthai_id'=>$trangthai_id['Đã hoàn tất, được nhận làm việc'],
            'hoso_id'=>$hoso_id['Trần Minh Thu'],
        ]);
        $lichhen->nhanviens()->attach([5,7,8]);



        $lichhen = \App\lichhen::query()->create([
            'thoigian'=>'2020-01-30 14:00:00',
            'diadiem'=>'Phòng tuyển dụng ',
            'mota'=>'Chuẩn bị đủ tài liệu chuyên môn, phiếu đánh giá chuyên môn, đúng thời gian đã quy định',
            'trangthai_id'=>$trangthai_id['Đã hoàn tất, được nhận làm việc'],
            'hoso_id'=>$hoso_id['Lê Nguyên Hải Nam'],
        ]);
        $lichhen->nhanviens()->attach([5,7,8]);



        $lichhen = \App\lichhen::query()->create([
            'thoigian'=>'2020-02-25 10:00:00',
            'diadiem'=>'Phòng tuyển dụng ',
            'mota'=>'Chuẩn bị đủ tài liệu chuyên môn, phiếu đánh giá chuyên môn, đúng thời gian đã quy định',
            'trangthai_id'=>$trangthai_id['Đã hoàn tất, được nhận làm việc'],
            'hoso_id'=>$hoso_id['Trần Minh An'],
        ]);
        $lichhen->nhanviens()->attach([1,6,10]);



        $lichhen = \App\lichhen::query()->create([
            'thoigian'=>'2020-02-07 10:00:00',
            'diadiem'=>'Phòng tuyển dụng ',
            'mota'=>'Chuẩn bị đủ tài liệu chuyên môn, phiếu đánh giá chuyên môn, đúng thời gian đã quy định',
            'trangthai_id'=>$trangthai_id['Đã hoàn tất, từ chối ứng viên'],
            'hoso_id'=>$hoso_id['Vũ Ngọc Long'],
        ]);
        $lichhen->nhanviens()->attach([1,6,10]);



        $lichhen = \App\lichhen::query()->create([
            'thoigian'=>'2020-02-20 10:00:00',
            'diadiem'=>'Phòng tuyển dụng ',
            'mota'=>'Chuẩn bị đủ tài liệu chuyên môn, phiếu đánh giá chuyên môn, đúng thời gian đã quy định',
            'trangthai_id'=>$trangthai_id['Đã hoàn tất, được nhận làm việc'],
            'hoso_id'=>$hoso_id['Phạm Quốc Anh'],
        ]);
        $lichhen->nhanviens()->attach([4,5,10]);



        $lichhen = \App\lichhen::query()->create([
            'thoigian'=>'2020-02-22 10:00:00',
            'diadiem'=>'Phòng tuyển dụng ',
            'mota'=>'Chuẩn bị đủ tài liệu chuyên môn, phiếu đánh giá chuyên môn, đúng thời gian đã quy định',
            'trangthai_id'=>$trangthai_id['Đã hoàn tất, được nhận làm việc'],
            'hoso_id'=>$hoso_id['Lê Phú Bình'],
        ]);
        $lichhen->nhanviens()->attach([4,5,10]);


        $lichhen = \App\lichhen::query()->create([
            'thoigian'=>'2020-02-26 09:00:00',
            'diadiem'=>'Phòng tuyển dụng ',
            'mota'=>'Chuẩn bị đủ tài liệu chuyên môn, phiếu đánh giá chuyên môn, đúng thời gian đã quy định',
            'trangthai_id'=>$trangthai_id['Đã hoàn tất, được nhận làm việc'],
            'hoso_id'=>$hoso_id['Lê Quốc Bảo'],
        ]);
        $lichhen->nhanviens()->attach([6,9,12]);



        $lichhen = \App\lichhen::query()->create([
            'thoigian'=>'2019-10-10 09:00:00',
            'diadiem'=>'Phòng tuyển dụng ',
            'mota'=>'Chuẩn bị đủ tài liệu chuyên môn, phiếu đánh giá chuyên môn, đúng thời gian đã quy định',
            'trangthai_id'=>$trangthai_id['Đã hoàn tất, từ chối ứng viên'],
            'hoso_id'=>$hoso_id['Vũ Thái Sơn'],
        ]);
        $lichhen->nhanviens()->attach([9,13]);


        $lichhen = \App\lichhen::query()->create([
            'thoigian'=>'2019-11-03 10:00:00',
            'diadiem'=>'Phòng tuyển dụng ',
            'mota'=>'Chuẩn bị đủ tài liệu chuyên môn, phiếu đánh giá chuyên môn, đúng thời gian đã quy định',
            'trangthai_id'=>$trangthai_id['Đã hoàn tất, từ chối ứng viên'],
            'hoso_id'=>$hoso_id['Đỗ Công Minh'],
        ]);
        $lichhen->nhanviens()->attach([9,13]);


        $lichhen = \App\lichhen::query()->create([
            'thoigian'=>'2019-11-02 10:00:00',
            'diadiem'=>'Phòng tuyển dụng ',
            'mota'=>'Chuẩn bị đủ tài liệu chuyên môn, phiếu đánh giá chuyên môn, đúng thời gian đã quy định',
            'trangthai_id'=>$trangthai_id['Đã hoàn tất, được nhận làm việc'],
            'hoso_id'=>$hoso_id['Đỗ Hà Ngân'],
        ]);
        $lichhen->nhanviens()->attach([9,10,12]);


        $lichhen = \App\lichhen::query()->create([
            'thoigian'=>'2019-08-30 10:00:00',
            'diadiem'=>'Phòng tuyển dụng ',
            'mota'=>'Chuẩn bị đủ tài liệu chuyên môn, phiếu đánh giá chuyên môn, đúng thời gian đã quy định',
            'trangthai_id'=>$trangthai_id['Đã hoàn tất, được nhận làm việc'],
            'hoso_id'=>$hoso_id['Phạm Thanh Xuân'],
        ]);
        $lichhen->nhanviens()->attach([9,10,12]);


        $lichhen = \App\lichhen::query()->create([
            'thoigian'=>'2020-02-19 10:00:00',
            'diadiem'=>'Phòng tuyển dụng ',
            'mota'=>'Chuẩn bị đủ tài liệu chuyên môn, phiếu đánh giá chuyên môn, đúng thời gian đã quy định',
            'trangthai_id'=>$trangthai_id['Đã hoàn tất, được nhận làm việc'],
            'hoso_id'=>$hoso_id['Đinh Xuân Thành'],
        ]);
        $lichhen->nhanviens()->attach([10,13]);


        $lichhen = \App\lichhen::query()->create([
            'thoigian'=>'2020-03-01 10:00:00',
            'diadiem'=>'Phòng tuyển dụng ',
            'mota'=>'Chuẩn bị đủ tài liệu chuyên môn, phiếu đánh giá chuyên môn, đúng thời gian đã quy định',
            'trangthai_id'=>$trangthai_id['Đã hoàn tất, từ chối ứng viên'],
            'hoso_id'=>$hoso_id['Trần Ngọc Vũ'],
        ]);
        $lichhen->nhanviens()->attach([10,13]);

        $lichhen = \App\lichhen::query()->create([
            'thoigian'=>'2020-03-02 10:00:00',
            'diadiem'=>'Phòng tuyển dụng ',
            'mota'=>'Chuẩn bị đủ tài liệu chuyên môn, phiếu đánh giá chuyên môn, đúng thời gian đã quy định',
            'trangthai_id'=>$trangthai_id['Đã hoàn tất, từ chối ứng viên'],
            'hoso_id'=>$hoso_id['Đỗ Anh Vũ'],
        ]);
        $lichhen->nhanviens()->attach([10,13]);


        $lichhen = \App\lichhen::query()->create([
            'thoigian'=>'2020-03-03 10:00:00',
            'diadiem'=>'Phòng tuyển dụng ',
            'mota'=>'Chuẩn bị đủ tài liệu chuyên môn, phiếu đánh giá chuyên môn, đúng thời gian đã quy định',
            'trangthai_id'=>$trangthai_id['Đã hoàn tất, được nhận làm việc'],
            'hoso_id'=>$hoso_id['Vũ Thái Hoàng'],
        ]);
        $lichhen->nhanviens()->attach([10,13]);


        $lichhen = \App\lichhen::query()->create([
            'thoigian'=>'2020-03-03 14:00:00',
            'diadiem'=>'Phòng tuyển dụng ',
            'mota'=>'Chuẩn bị đủ tài liệu chuyên môn, phiếu đánh giá chuyên môn, đúng thời gian đã quy định',
            'trangthai_id'=>$trangthai_id['Đã hoàn tất, được nhận làm việc'],
            'hoso_id'=>$hoso_id['Vũ Ngọc Tình'],
        ]);
        $lichhen->nhanviens()->attach([10,13]);


        $lichhen = \App\lichhen::query()->create([
            'thoigian'=>'2020-03-03 15:30:00',
            'diadiem'=>'Phòng tuyển dụng ',
            'mota'=>'Chuẩn bị đủ tài liệu chuyên môn, phiếu đánh giá chuyên môn, đúng thời gian đã quy định',
            'trangthai_id'=>$trangthai_id['Đã hoàn tất, được nhận làm việc'],
            'hoso_id'=>$hoso_id['Đinh Thái Tuấn'],
        ]);
        $lichhen->nhanviens()->attach([10,13]);


        $lichhen = \App\lichhen::query()->create([
            'thoigian'=>'2020-01-13 10:00:00',
            'diadiem'=>'Phòng tuyển dụng ',
            'mota'=>'Chuẩn bị đủ tài liệu chuyên môn, phiếu đánh giá chuyên môn, đúng thời gian đã quy định',
            'trangthai_id'=>$trangthai_id['Đã hoàn tất, từ chối ứng viên'],
            'hoso_id'=>$hoso_id['Phạm Hồng Hà'],
        ]);
        $lichhen->nhanviens()->attach([04,13]);


        $lichhen = \App\lichhen::query()->create([
            'thoigian'=>'2020-01-14 10:00:00',
            'diadiem'=>'Phòng tuyển dụng ',
            'mota'=>'Chuẩn bị đủ tài liệu chuyên môn, phiếu đánh giá chuyên môn, đúng thời gian đã quy định',
            'trangthai_id'=>$trangthai_id['Đã hoàn tất, từ chối ứng viên'],
            'hoso_id'=>$hoso_id['Phạm Hồng Linh'],
        ]);
        $lichhen->nhanviens()->attach([04,13]);


        $lichhen = \App\lichhen::query()->create([
            'thoigian'=>'2020-01-14 11:00:00',
            'diadiem'=>'Phòng tuyển dụng ',
            'mota'=>'Chuẩn bị đủ tài liệu chuyên môn, phiếu đánh giá chuyên môn, đúng thời gian đã quy định',
            'trangthai_id'=>$trangthai_id['Đã hoàn tất, từ chối ứng viên'],
            'hoso_id'=>$hoso_id['Nguyễn Viết Tùng'],
        ]);
        $lichhen->nhanviens()->attach([06,12]);


        $lichhen = \App\lichhen::query()->create([
            'thoigian'=>'2020-01-14 15:00:00',
            'diadiem'=>'Phòng tuyển dụng ',
            'mota'=>'Chuẩn bị đủ tài liệu chuyên môn, phiếu đánh giá chuyên môn, đúng thời gian đã quy định',
            'trangthai_id'=>$trangthai_id['Đã hoàn tất, không tham gia phỏng vấn'],
            'hoso_id'=>$hoso_id['Đặng Việt Hoàng'],
        ]);
        $lichhen->nhanviens()->attach([06,12]);


        $lichhen = \App\lichhen::query()->create([
            'thoigian'=>'2018-10-12 10:00:00',
            'diadiem'=>'Phòng tuyển dụng ',
            'mota'=>'Chuẩn bị đủ tài liệu chuyên môn, phiếu đánh giá chuyên môn, đúng thời gian đã quy định',
            'trangthai_id'=>$trangthai_id['Đã hoàn tất, không tham gia phỏng vấn'],
            'hoso_id'=>$hoso_id['Hoàng Lưu Ly'],
        ]);
        $lichhen->nhanviens()->attach([06,13]);


        $lichhen = \App\lichhen::query()->create([
            'thoigian'=>'2018-10-12 11:00:00',
            'diadiem'=>'Phòng tuyển dụng ',
            'mota'=>'Chuẩn bị đủ tài liệu chuyên môn, phiếu đánh giá chuyên môn, đúng thời gian đã quy định',
            'trangthai_id'=>$trangthai_id['Đã hoàn tất, không tham gia phỏng vấn'],
            'hoso_id'=>$hoso_id['Hoàng Quốc Vinh'],
        ]);
        $lichhen->nhanviens()->attach([06,13]);


        $lichhen = \App\lichhen::query()->create([
            'thoigian'=>'2020-03-05 10:00:00',
            'diadiem'=>'Phòng tuyển dụng ',
            'mota'=>'Chuẩn bị đủ tài liệu chuyên môn, phiếu đánh giá chuyên môn, đúng thời gian đã quy định',
            'trangthai_id'=>$trangthai_id['Chờ phỏng vấn'],
            'hoso_id'=>$hoso_id['Đinh Khánh Ngọc'],
        ]);
        $lichhen->nhanviens()->attach([04,05,10]);


        $lichhen = \App\lichhen::query()->create([
            'thoigian'=>'2020-03-05 14:00:00',
            'diadiem'=>'Phòng tuyển dụng ',
            'mota'=>'Chuẩn bị đủ tài liệu chuyên môn, phiếu đánh giá chuyên môn, đúng thời gian đã quy định',
            'trangthai_id'=>$trangthai_id['Chờ phỏng vấn'],
            'hoso_id'=>$hoso_id['Phạm Thu Hồng'],
        ]);
        $lichhen->nhanviens()->attach([04,05,10]);


        $lichhen = \App\lichhen::query()->create([
            'thoigian'=>'2020-05-02 14:00:00',
            'diadiem'=>'Phòng tuyển dụng ',
            'mota'=>'Chuẩn bị đủ tài liệu chuyên môn, phiếu đánh giá chuyên môn, đúng thời gian đã quy định',
            'trangthai_id'=>$trangthai_id['Chờ phỏng vấn'],
            'hoso_id'=>$hoso_id['Hồ Quốc Đạt'],
        ]);
        $lichhen->nhanviens()->attach([01,02,03,05,06]);


        $lichhen = \App\lichhen::query()->create([
            'thoigian'=>'2020-05-03 10:00:00',
            'diadiem'=>'Phòng tuyển dụng ',
            'mota'=>'Chuẩn bị đủ tài liệu chuyên môn, phiếu đánh giá chuyên môn, đúng thời gian đã quy định',
            'trangthai_id'=>$trangthai_id['Chờ phỏng vấn'],
            'hoso_id'=>$hoso_id['Nguyễn Hoàng Yến'],
        ]);
        $lichhen->nhanviens()->attach([01,02,03,05,06]);


        $lichhen = \App\lichhen::query()->create([
            'thoigian'=>'2020-05-03 15:00:00',
            'diadiem'=>'Phòng tuyển dụng ',
            'mota'=>'Chuẩn bị đủ tài liệu chuyên môn, phiếu đánh giá chuyên môn, đúng thời gian đã quy định',
            'trangthai_id'=>$trangthai_id['Chờ phỏng vấn'],
            'hoso_id'=>$hoso_id['Phạm Nguyên Hùng'],
        ]);
        $lichhen->nhanviens()->attach([01,02,03,05,06]);


        $lichhen = \App\lichhen::query()->create([
            'thoigian'=>'2020-05-04 10:00:00',
            'diadiem'=>'Phòng tuyển dụng ',
            'mota'=>'Chuẩn bị đủ tài liệu chuyên môn, phiếu đánh giá chuyên môn, đúng thời gian đã quy định',
            'trangthai_id'=>$trangthai_id['Chờ phỏng vấn'],
            'hoso_id'=>$hoso_id['Thái Nam Anh'],
        ]);
        $lichhen->nhanviens()->attach([01,02,03,05,06]);


        $lichhen = \App\lichhen::query()->create([
            'thoigian'=>'2020-05-04 10:00:00',
            'diadiem'=>'Phòng tuyển dụng ',
            'mota'=>'Chuẩn bị đủ tài liệu chuyên môn, phiếu đánh giá chuyên môn, đúng thời gian đã quy định',
            'trangthai_id'=>$trangthai_id['Chờ phỏng vấn'],
            'hoso_id'=>$hoso_id['Văn Tiến Hải'],
        ]);
        $lichhen->nhanviens()->attach([01,02,03,05,06]);


        $lichhen = \App\lichhen::query()->create([
            'thoigian'=>'2020-07-10 10:00:00',
            'diadiem'=>'Phòng tuyển dụng ',
            'mota'=>'Chuẩn bị đủ tài liệu chuyên môn, phiếu đánh giá chuyên môn, đúng thời gian đã quy định',
            'trangthai_id'=>$trangthai_id['Tiếp tục phỏng vấn'],
            'hoso_id'=>$hoso_id['Nguyễn Anh Tú'],
        ]);
        $lichhen->nhanviens()->attach([06,12]);


        $lichhen = \App\lichhen::query()->create([
            'thoigian'=>'2020-07-11 10:00:00',
            'diadiem'=>'Phòng tuyển dụng ',
            'mota'=>'Chuẩn bị đủ tài liệu chuyên môn, phiếu đánh giá chuyên môn, đúng thời gian đã quy định',
            'trangthai_id'=>$trangthai_id['Tiếp tục phỏng vấn'],
            'hoso_id'=>$hoso_id['Đỗ Đức Quang'],
        ]);
        $lichhen->nhanviens()->attach([06,12]);



        $lichhen = \App\lichhen::query()->create([
            'thoigian'=>'2020-07-12 10:00:00',
            'diadiem'=>'Phòng tuyển dụng ',
            'mota'=>'Chuẩn bị đủ tài liệu chuyên môn, phiếu đánh giá chuyên môn, đúng thời gian đã quy định',
            'trangthai_id'=>$trangthai_id['Tiếp tục phỏng vấn'],
            'hoso_id'=>$hoso_id['Võ Anh Hào'],
        ]);
        $lichhen->nhanviens()->attach([06,12]);
    }
}
