<?php

use Illuminate\Database\Seeder;

class TintuyendungsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        $nganhs = \App\nganhs::query()->get()->pluck('id', 'ten');
//        $trangthai_id = \App\trangthai_tintuyendung::query()->get()->pluck('id','ten');
//        \App\tintuyendung::query()->create([
//            'mota'=>'Tuyển gấp 50 nhân viên',
//            'tieude'=>'Tuyển kỹ sư có kinh nghiệm',
//            'nganh_id'=>$nganhs['Công nghệ thông tin'],
//            'trangthai_id'=>$trangthai_id['Đang tuyển']
//        ]);
        $nganhs = \App\nganh::query()->get()->pluck('id', 'ten');
        $trangthai_id = \App\trangthai_tintuyendung::query()->get()->pluck('id','ten');
        \App\tintuyendung::query()->create([
            'mota'=>'Một quản trị viên cơ sở dữ liệu chuyên nghiệp (DBA) sẽ giữ cho cơ sở dữ liệu luôn hoạt động trơn tru để hỗ trợ FAB đúc 24/7.
                     Mục tiêu là cung cấp một luồng thông tin liền mạch trong toàn công ty, xem xét cả cấu trúc dữ liệu phụ trợ và khả năng truy cập frontend cho người dùng cuối
                     Xây dựng hệ thống cơ sở dữ liệu có tính sẵn sàng và chất lượng cao tùy thuộc vào vai trò chuyên biệt của mỗi người dùng cuối
                     Làm quen với API ngôn ngữ lập trình
                     Kỹ năng giải quyết vấn đề và khả năng suy nghĩ thuật toán
                     Ít nhất 7 ~ 10 năm quản trị và hỗ trợ SQL Server
                     Kỹ năng lập trình (java / C #) là một lợi thế
                     Kiến thức về DB2 và các RDBMS khác là một lợi thế',
            'tieude'=>'Kỹ sư hệ thống CNTT (DBA)',
            'nganh_id'=>$nganhs['Công nghệ thông tin'],
            'trangthai_id'=>$trangthai_id['Đang tuyển'],
            'ngaydang'=>'2019-08-18',
            'anh'=>'kysuhethongcntt.PNG',
            'luong'=>'13000000'
        ]);

        \App\tintuyendung::query()->create([
            'mota'=>'Có kinh nghiệm về quản trị hệ thống máy chủ & Linux
                     Có kinh nghiệm quản trị và hỗ trợ giải pháp bảo mật điểm cuối
                     Có kinh nghiệm về tường lửa, IDS / IPS và công nghệ proxy web',
            'tieude'=>'Kỹ sư an ninh mạng',
            'nganh_id'=>$nganhs['Công nghệ thông tin'],
            'trangthai_id'=>$trangthai_id['Đang tuyển'],
            'ngaydang'=>'2019-08-18',
            'anh'=>'kysuanninhmang.PNG',
            'luong'=>'13000000'
        ]);

        \App\tintuyendung::query()->create([
            'mota'=>'HR Generalist có kinh nghiệm trong một phòng nhân sự thương mại, với sự hiểu biết về luật lao động địa phương và thực tiễn tốt nhất
                    Có kinh nghiệm trong ngành CNTT / công nghệ cao
                    Phải có kỹ năng hành chính và tổ chức mạnh mẽ
                    Kỹ năng quản lý dự án mạnh
                    Kỹ năng giao tiếp tuyệt vời, cả hai văn bản và lời nói
                    Kỹ năng tư duy phân tích và sáng tạo tốt, khả năng suy nghĩ đã được chứng minh để giải quyết vấn đề và truyền đạt ý tưởng tốt
                    Một kỹ năng trình bày, giao tiếp và lập kế hoạch rất cao
                    Kinh nghiệm làm việc trong môi trường nhóm đòi hỏi cao với khả năng cân bằng các thời hạn và ưu tiên xung đột ',
            'tieude'=>'Nhân sự tổng hợp - Bảo hiểm',
            'nganh_id'=>$nganhs['Nhân viên khối nhân sự chung'],
            'trangthai_id'=>$trangthai_id['Hết hạn'],
            'ngaydang'=>'2019-08-18',
            'anh'=>'tuyendung.PNG',
            'luong'=>'10500000'
        ]);

        \App\tintuyendung::query()->create([
            'mota'=>'Học cách sử dụng các khái niệm chuyên nghiệp. Áp dụng các chính sách và quy trình của công ty để giải quyết các vấn đề thường lệ
                     Hoạt động trên các vấn đề phạm vi hạn chế. Theo các quy trình và thủ tục tiêu chuẩn
                     Thông thường nhận được hướng dẫn chi tiết về tất cả các công việc
                     Điểm đầu vào điển hình cho sinh viên tốt nghiệp đại học',
            'tieude'=>'Nhân viên kiểm soát tín dụng cao cấp',
            'nganh_id'=>$nganhs['Nhân viên khối nhân sự chung'],
            'trangthai_id'=>$trangthai_id['Hết hạn'],
            'ngaydang'=>'2019-08-18',
            'anh'=>'tuyendung.PNG',
            'luong'=>'10500000'
        ]);

        \App\tintuyendung::query()->create([
            'mota'=>'Bằng cử nhân với hơn 15 năm kinh nghiệm trong tiếp thị sản phẩm Điện tử tiêu dùng (tốt nhất là sản phẩm hiển thị / video) được yêu cầu
                     Kiến thức mạnh mẽ về các kênh phân phối bán lẻ CE của Việt Nam
                     Kỹ năng đàm phán, lãnh đạo và trình bày nghề nghiệp mẫu mực
                     Các kỹ năng mạnh mẽ của Microsoft Office Suite (Excel, Word, PowerPoint, Outlook)
                     Sáng tạo, không sẵn sàng chấp nhận hiện trạng và làm việc để xây dựng sự hỗ trợ và đồng thuận cho các ý tưởng giữa các nhóm được đánh giá cao.
                     Khả năng làm việc tốt trong các tổ chức rộng lớn hơn
                     Kỹ năng quan hệ tuyệt vời',
            'tieude'=>'Giám đốc tiếp thị sản phẩm trong nước',
            'nganh_id'=>$nganhs['Giám đốc kinh doanh'],
            'trangthai_id'=>$trangthai_id['Hết hạn'],
            'ngaydang'=>'2019-01-18',
            'anh'=>'giamdoctiepthisanpham.PNG',
            'luong'=>'20500000'
        ]);

        \App\tintuyendung::query()->create([
            'mota'=>'Phối hợp lãnh đạo và vận hành các sáng kiến và dự án đa chức năng để giải quyết các nhu cầu kinh doanh cụ thể (ví dụ: hội thảo Nâng cấp và Chuyển đổi)
                    Xây dựng các tường thuật chính và xây dựng kế hoạch dự án để tổ chức, theo dõi và quản lý các dự án trong suốt cả năm
                    Công việc đòi hỏi giao tiếp rõ ràng, kỹ năng tổ chức cũng như cách tiếp cận theo hướng đầu ra để cung cấp tác động đáng kể cho doanh nghiệp',
            'tieude'=>'Giám đốc, Kế hoạch và Chiến lược hoạt động',
            'nganh_id'=>$nganhs['Giám đốc nhân sự'],
            'trangthai_id'=>$trangthai_id['Đang tuyển'],
            'ngaydang'=>'2018-09-18',
            'anh'=>'giamdoctiepthisanpham.PNG',
            'luong'=>'20500000'
        ]);

        \App\tintuyendung::query()->create([
            'mota'=>'Nhạy bén, định hướng kết quả, người làm bất cứ điều gì cần thiết để hoàn thành công việc đúng hạn.
                     Hơn 7 năm kinh nghiệm làm việc với hơn 5 năm quản lý sản phẩm. Kinh nghiệm trong không gian quảng cáo kỹ thuật số là một điểm cộng lớn.
                     Ưu tiên có kinh nghiệm xây dựng DMP hoặc kinh nghiệm liên quan với việc xây dựng hồ sơ người dùng, mô hình hóa dữ liệu, xây dựng đối tượng và phân khúc.
                     Tốt nghiệp cử nhân về Khoa học Máy tính.
                     Kinh nghiệm làm việc với một nhóm kỹ thuật phân phối địa lý là một lợi thế.
                     Kinh nghiệm phát triển Agile bao gồm thực thi như một PO và làm việc với các công cụ quản lý sản phẩm nhanh như Jira và Pivotal Tracker.',
            'tieude'=>'Giám đốc sản phẩm, sản phẩm dữ liệu',
            'nganh_id'=>$nganhs['Giám đốc sản phẩm'],
            'trangthai_id'=>$trangthai_id['Hết hạn'],
            'ngaydang'=>'2018-01-18',
            'anh'=>'giamdoctiepthisanpham.PNG',
            'luong'=>'20500000'
        ]);

        \App\tintuyendung::query()->create([
            'mota'=>'Hơn 7 năm kinh nghiệm quản lý sản phẩm phần mềm trước với sự hiểu biết sâu sắc về quy trình phát triển sản phẩm phần mềm.
                     Hiểu biết sâu sắc và toàn diện về trải nghiệm người dùng dịch vụ di động (ví dụ: giá cả, công nghệ, hành vi người dùng)
                     Hồ sơ theo dõi đã được chứng minh trong một buổi giới thiệu sản phẩm thành công và hoạt động liên tục với quyền sở hữu P ​​& L. Ưu tiên có kinh nghiệm trong việc thực hiện các chiến dịch thu thập và duy trì người dùng dựa trên dữ liệu.
                     Kỹ năng giao tiếp và trình bày bằng lời nói tuyệt vời để truyền đạt hiệu quả ý tưởng đến các bên liên quan cũng như đội ngũ quản lý.
                     Lãnh đạo mạnh mẽ và chú ý đến chi tiết để dẫn dắt sự hợp tác đa chức năng giữa UX và các nhóm kỹ thuật.
                     Khả năng viết PRD và thiết kế giao diện người dùng đơn giản và trực quan để giao tiếp bằng văn bản hiệu quả.',
            'tieude'=>'Giám đốc sản phẩm Sr',
            'nganh_id'=>$nganhs['Giám đốc sản phẩm'],
            'trangthai_id'=>$trangthai_id['Hết hạn'],
            'ngaydang'=>'2018-03-18',
            'anh'=>'giamdoctiepthisanpham.PNG',
            'luong'=>'20500000'
        ]);

        \App\tintuyendung::query()->create([
            'mota'=>'10-15 năm kinh nghiệm trong chiến lược, tư vấn, phân tích / tối ưu hóa chuỗi cung ứng , mô hình tài chính và / hoặc thiết kế lại quy trình
                     Yêu cầu bằng cử nhân; MBA là một lợi thế
                     Hiểu biết về lý thuyết và thực hành hàng tồn kho và lão luyện trong thực tiễn tốt nhất trong chuỗi cung ứng là một lợi thế
                     Kinh nghiệm đã được chứng minh tạo điều kiện cho việc thực hiện các dự án chuỗi cung ứng chính hoặc các dự án khác
                     Đánh giá nghiêm túc các vấn đề phức tạp, đưa ra các khuyến nghị rõ ràng và súc tích.
                     Xác định và tạo điều kiện ưu tiên cho các sáng kiến để tăng hiệu quả chuỗi cung ứng và tạo ra giá trị lâu dài cho cả doanh nghiệp và khách hàng.
                     Phát triển và đảm bảo tuân thủ các quy trình, quy trình và thực hành quản lý chuỗi cung ứng.
                     Các kỹ năng giải quyết vấn đề nâng cao với khả năng làm việc đa chức năng để giải quyết các vấn đề và tạo ra kết quả giữa các khu vực bầu cử có khả năng xung đột. ',
            'tieude'=>'Giám đốc chiến lược chuỗi cung ứng',
            'nganh_id'=>$nganhs['Giám đốc sản xuất'],
            'trangthai_id'=>$trangthai_id['Hết hạn'],
            'ngaydang'=>'2018-01-18',
            'anh'=>'giamdoctiepthisanpham.PNG',
            'luong'=>'20000000'
        ]);

        \App\tintuyendung::query()->create([
            'mota'=>'Thể hiện mức độ cao của hiệu suất đa nhiệm & cài đặt ưu tiên
                     Khả năng đọc,phân tích và giải thích các nghiên cứu dữ liệu
                     Khả năng trả lời các câu hỏi hoặc khiếu nại thông thường từ khách hàng, nhà phân phối
                     Kỹ năng giao tiếp tuyệt vời và khả năng diễn đạt rõ ràng sáng kiến ​​tiếp thị
                     Khả năng làm việc dưới sự giám sát tối thiểu
                     Sáng kiến và khả năng làm việc trong môi trường đa văn hóa',
            'tieude'=>'Giám đốc sản xuất',
            'nganh_id'=>$nganhs['Giám đốc sản xuất'],
            'trangthai_id'=>$trangthai_id['Hết hạn'],
            'ngaydang'=>'2019-08-18',
            'anh'=>'giamdoctiepthisanpham.PNG',
            'luong'=>'21000000'
        ]);

        \App\tintuyendung::query()->create([
            'mota'=>'Có kinh nghiệm chuyên môn với sự hiểu biết đầy đủ về các lĩnh vực chuyên ngành; giải quyết một loạt các vấn đề theo những cách sáng tạo
                     Hoạt động trên các vấn đề thuộc phạm vi đa dạng trong đó phân tích dữ liệu yêu cầu đánh giá các yếu tố nhận dạng. Thể hiện sự phán đoán tốt trong việc lựa chọn phương pháp và kỹ thuật để có được giải pháp
                     Thông thường nhận được ít hướng dẫn về công việc hàng ngày và nhận hướng dẫn chung về bài tập mới
                     Thông thường yêu cầu tối thiểu 5 năm kinh nghiệm liên quan và bằng Cử nhân, hoặc 3 năm và bằng Thạc sĩ; hoặc bằng tiến sĩ không có kinh nghiệm',
            'tieude'=>'Phân tích yêu cầu chính',
            'nganh_id'=>$nganhs['Kinh doanh, sản xuất'],
            'trangthai_id'=>$trangthai_id['Đang tuyển'],
            'ngaydang'=>'2020-01-18',
            'luong'=>'12000000',
            'anh'=>'phantichyeeucauchinh.PNG'
        ]);

        \App\tintuyendung::query()->create([
            'mota'=>'Bằng cấp chuyên môn về thuế hoặc kế toán như Steuerfachangestellte (m / w / d) hoặc Bilanzbuchhalter (m / w / d) là bắt buộc.
                     2-3 năm kinh nghiệm Thuế gián tiếp tại nhà hoặc trong một công ty tư vấn / kế toán thuế.
                     Kiến thức vững chắc về các quy định Thuế gián tiếp của EU.
                     Kinh nghiệm với thuế VAT nhập khẩu và hải quan là một điểm cộng lớn.
                     Lệnh Excel và SAP tốt.
                     Cảm giác tuyệt vời về tính chính xác, tính toàn vẹn và cam kết.
                     Có khả năng làm việc độc lập trong môi trường kinh doanh đòi hỏi khắt khe với lịch trình chặt chẽ.',
            'tieude'=>'Chuyên gia, Thuế',
            'nganh_id'=>$nganhs['Kinh doanh, sản xuất'],
            'trangthai_id'=>$trangthai_id['Hết hạn'],
            'ngaydang'=>'2020-01-18',
            'anh'=>'chuyengiathue.PNG',
            'luong'=>'22000000'
        ]);

        \App\tintuyendung::query()->create([
            'mota'=>'BSEE, Kỹ sư máy tính hoặc có thể so sánh và hơn 5 năm kinh nghiệm
                     Kiến thức nâng cao về kiến ​​trúc thiết kế CPU và / hoặc GPU
                     Kỹ năng RTL cơ bản - có thể đọc và hiểu thiết kế RTL
                     Có kinh nghiệm về các công cụ xác minh System Verilog, UVM và Verdi
                     Thành thạo ngôn ngữ kịch bản (TCL / Python)
                     Kỹ năng giao tiếp tuyệt vời và có thể làm việc với các nhóm chức năng chéo để thực hiện kế hoạch xác minh
                     Ứng cử viên ưu tiên sẽ sở hữu những điều sau đây:
                     Khả năng mạnh mẽ để đọc đặc tả thiết kế cấp cao và RTL để tạo / thực hiện kế hoạch xác minh.',
            'tieude'=>'Kỹ sư xác nhận thiết kế (hợp đồng)',
            'nganh_id'=>$nganhs['Kỹ sư hợp đồng'],
            'trangthai_id'=>$trangthai_id['Đang tuyển'],
            'ngaydang'=>'2020-02-18',
            'luong'=>'12000000',
            'anh'=>'kysuhopdong-tichhopthietke.PNG'
        ]);

        \App\tintuyendung::query()->create([
            'mota'=>'BSEE, Kỹ sư máy tính hoặc có thể so sánh và hơn 5 năm kinh nghiệm với Verilog và System Verilog
                     3 năm kinh nghiệm với các công cụ Spylass (Lint, CDC) và Spylass DFT
                     Kinh nghiệm với tổng hợp Trình biên dịch thiết kế
                     Trải nghiệm với các ngôn ngữ script (Perl / Tcl / Python)
                     Kinh nghiệm trong Python Pandas Khung dữ liệu được thêm vào cộng',
            'tieude'=>'Kỹ sư hợp đồng - Tích hợp thiết kế',
            'nganh_id'=>$nganhs['Kỹ sư hợp đồng'],
            'trangthai_id'=>$trangthai_id['Đang tuyển'],
            'ngaydang'=>'2020-02-18',
            'luong'=>'12500000',
            'anh'=>'kysuhopdong-tichhopthietke.PNG'
        ]);

        \App\tintuyendung::query()->create([
            'mota'=>'Có kinh nghiệm chuyên môn với sự hiểu biết đầy đủ về các lĩnh vực chuyên ngành; giải quyết một loạt các vấn đề theo những cách sáng tạo
                     Hoạt động trên các vấn đề thuộc phạm vi đa dạng trong đó phân tích dữ liệu yêu cầu đánh giá các yếu tố nhận dạng. Thể hiện sự phán đoán tốt trong việc lựa chọn phương pháp và kỹ thuật để có được giải pháp
                     Thông thường nhận được ít hướng dẫn về công việc hàng ngày và nhận hướng dẫn chung về bài tập mới',
            'tieude'=>'Nhân viên bán hàng',
            'nganh_id'=>$nganhs['Nhân viên kinh doanh'],
            'trangthai_id'=>$trangthai_id['Đang tuyển'],
            'ngaydang'=>'2020-02-18',
            'luong'=>'8000000',
            'anh'=>'nhanvienbanhang.PNG'
        ]);

        \App\tintuyendung::query()->create([
            'mota'=>'Theo đuổi bằng đại học về Marketing, Kinh doanh, Công nghệ hoặc có liên quan
                     Kỹ năng Excel trung cấp
                     Kỹ năng PowerPoint trung cấp
                     Kỹ năng phân tích mạnh mẽ
                     Tiếp thị và / hoặc Tư vấn kinh nghiệm là một lợi thế
                     Kinh nghiệm kỹ thuật là một lợi thế
                     Kĩ năng giao tiếp tốt ',
            'tieude'=>'Tiếp thị sản phẩm phần mềm',
            'nganh_id'=>$nganhs['Nhân viên kinh doanh'],
            'trangthai_id'=>$trangthai_id['Đang tuyển'],
            'ngaydang'=>'2020-02-18',
            'luong'=>'8500000',
            'anh'=>'tiepthisanphamphanmem.PNG'
        ]);

        \App\tintuyendung::query()->create([
            'mota'=>' Hơn 10 năm kinh nghiệm quản lý chương trình hoặc tương đương.
                      Tối thiểu 5 năm kinh nghiệm trong ngành viễn thông hoặc tương đương.
                      Hiểu và áp dụng các phương pháp và phương pháp hay nhất của PMI.
                      Kỹ năng giao tiếp và báo cáo tuyệt vời.
                      Quản lý xung đột, đàm phán và các kỹ năng ảnh hưởng.
                      Năng lực đầy đủ với bộ MS Office.
                      Bằng lái xe Việt Nam hợp lệ.
                      Một số du lịch sẽ được yêu cầu tùy thuộc vào bài tập.
                      Nói tiếng Pháp là một tài sản',
            'tieude'=>'Quản lý chương trình cao cấp (Mạng) Hợp đồng 12 tháng',
            'nganh_id'=>$nganhs['Cán bộ, nhân viên hợp đồng'],
            'trangthai_id'=>$trangthai_id['Đang tuyển'],
            'ngaydang'=>'2020-02-18',
            'luong'=>'12600000',
            'anh'=>'quanlychuongtrinhcaocap(mang).PNG'
        ]);

        \App\tintuyendung::query()->create([
            'mota'=>'Bằng cử nhân Khoa học Máy tính hoặc tương đương;
                     5 năm kinh nghiệm SysAdmin, DevOps hoặc SRE có liên quan.
                     Các nền tảng dựa trên đám mây mở rộng như Amazon Web Services (AWS) để phát triển và duy trì kiến ​​trúc có tính khả dụng cao và có khả năng mở rộng
                     Kỹ năng xử lý sự cố / gỡ lỗi mạnh mẽ và niềm đam mê giải quyết vấn đề
                     Hướng các dự án từ thiết kế và lập kế hoạch đến thực hiện
                     Hiểu biết sâu sắc về các công nghệ web và internet hiện tại như Nginx, Tomcat, NodeJS, PHP, Elaticsearch, Memcache, CDN
                     Quản lý các máy chủ tích hợp liên tục như Jenkins, CircleCI & Spinnaker
                     Có kinh nghiệm quản trị, triển khai và quản lý các hệ thống Ubuntu, Red Hat hoặc CentOS
                     Thành thạo các ngôn ngữ script phổ biến (python, shell)
                     Trải nghiệm với các công nghệ cơ sở dữ liệu như MySQL, MongoDB
                     Trải nghiệm với cơ sở hạ tầng đám mây và hệ thống quản lý cấu hình như Ansible, Terraform.
                     Có kinh nghiệm về Docker, Kubernetes, EKS (bao gồm sự cho phép, lưu lượng truy cập, quản lý bảo mật)
                     Trải nghiệm với các công cụ tổng hợp nhật ký như ELK, SumoLogic, Cloudwatch',
            'tieude'=>'Điều hành đám mây (Hợp đồng 8 tháng)',
            'nganh_id'=>$nganhs['Cán bộ, nhân viên hợp đồng'],
            'trangthai_id'=>$trangthai_id['Đang tuyển'],
            'ngaydang'=>'2020-02-26',
            'luong'=>'11800000',
            'anh'=>'dieuhanhdammay.PNG'
        ]);

        \App\tintuyendung::query()->create([
            'mota'=>'Xử lý, giám sát và hiểu đơn đặt hàng cho đến khi quá trình giao hàng
                     Quản lý trạng thái giao hàng - sở hữu các yêu cầu về trạng thái giao hàng và theo dõi chủ động
                     Chủ động gọi cho Quản lý tài khoản chính để quản lý các sự cố phân phối
                     Duy trì mối quan hệ làm việc mạnh mẽ với các bộ phận nội bộ để hợp tác trong các dự án đa chức năng (Đội ngũ bán hàng, tiếp thị sản phẩm, SOD và Logistics)
                     Chủ động đánh dấu mối quan tâm trong hiệu suất bán hàng và sắp xếp nhóm về các cơ hội để giải quyết.
                     Chuẩn bị báo cáo hàng ngày, hàng tuần và hàng tháng để hỗ trợ Hoạt động kinh doanh bán hàng
                     Xem xét các xu hướng kinh doanh tìm kiếm cơ hội và tóm tắt những phát hiện đó cho đơn vị kinh doanh.
                     Phân tích bán hàng và cung cấp thông tin chi tiết, phản hồi và cơ hội
                     Chắt lọc dữ liệu vào thông tin chi tiết có thể hành động, xây dựng trường hợp kinh doanh và tổng hợp dữ liệu vào bản trình bày cho nhiều khách hàng nội bộ khác nhau',
            'tieude'=>'Chuyên viên đặt hàng',
            'nganh_id'=>$nganhs['Nhân viên kỹ thuật'],
            'trangthai_id'=>$trangthai_id['Hết hạn'],
            'ngaydang'=>'2019-08-18',
            'luong'=>'21600000',
            'anh'=>'chuyenviendathang.PNG'
        ]);

        \App\tintuyendung::query()->create([
            'mota'=>'Quản trị viên FOM sẽ báo cáo cho Giám đốc Quyền của FOM (Vận hành & Bảo trì Cơ sở) và cung cấp hỗ trợ hành chính cho ba bộ phận trong tổ chức.
                     Vai trò này có một loạt các trách nhiệm liên quan đến nó, và phục vụ để hỗ trợ các nhóm và giúp các bộ phận của chúng tôi điều hành.
                     Phải có thái độ tích cực, hỗ trợ và chủ động tìm cách cải thiện hoạt động của bộ phận.
                     Thể hiện các kỹ năng giao tiếp hiệu quả, kỹ năng lắng nghe và lái xe để vượt qua để đáp ứng thời hạn.
                     Yêu cầu các kỹ năng phân tích đã được chứng minh trong việc diễn giải dữ liệu để đảm bảo tính chính xác và toàn vẹn của dữ liệu.
                     Yêu cầu kỹ năng giao tiếp bằng lời nói và bằng văn bản tuyệt vời; kỹ năng quan hệ tuyệt vời; và chứng minh trình độ tin học.
                     Chạy các báo cáo (để bao gồm hóa đơn và ngân sách) và duy trì và theo dõi dữ liệu trong bảng tính.
                     Duy trì và theo dõi các bản cập nhật cho hồ sơ, SOP và NDA.
                     Quản lý Chương trình trên tàu cho tất cả các đội và gửi các gói chào mừng, danh sách kiểm tra trên tàu và khảo sát.
                     Phê duyệt Yêu cầu truy cập khu vực và thẻ thông qua ảnh cho tất cả các đội.',
            'tieude'=>'Bảo trì vận hành cơ sở',
            'nganh_id'=>$nganhs['Nhân viên kỹ thuật'],
            'trangthai_id'=>$trangthai_id['Đang tuyển'],
            'ngaydang'=>'2019-08-18',
            'luong'=>'12000000',
            'anh'=>'baotrivanhanhcoso.PNG'
        ]);

        \App\tintuyendung::query()->create([
            'mota'=>'Sáng tạo, phân tích, tò mò và chơi theo nhóm.
                     Thích làm việc trên các công nghệ phức tạp.
                     Đam mê Thiết kế và tầm quan trọng của nghề thủ công trong quá trình sáng tạo.
                     Có thể đồng cảm với người dùng để hiểu điểm đau của họ và giải quyết nhu cầu của họ.
                     Khả năng suy nghĩ ra khỏi hộp.
                     Ngoài việc có kinh nghiệm nghiên cứu về UX mạnh mẽ, hiểu rõ về quy trình thiết kế UX và UI.
                     Quan trọng nhất là bạn là một người tự khởi nghiệp có tổ chức và chủ động, có thể làm việc độc lập và cũng có thể cộng tác với các nhà thiết kế khác và người đứng đầu UX Design.',
            'tieude'=>'Thiết kế sản phẩm',
            'nganh_id'=>$nganhs['Nhân viên sản phẩm'],
            'trangthai_id'=>$trangthai_id['Đang tuyển'],
            'ngaydang'=>'2019-08-18',
            'luong'=>'12500000',
            'anh'=>'thietkesanpham.PNG'
        ]);

        \App\tintuyendung::query()->create([
            'mota'=>'Nền tảng giáo dục: Tốt nhất là thạc sĩ / cử nhân với chuyên ngành Kinh tế / Marketing.
                     Kiến thức máy tính: Kỹ năng tốt về tự động hóa văn phòng chính.
                     Kiến thức ngôn ngữ: Tiếng Anh viết và nói rất tốt.
                     Yêu cầu đi lại: 5%
                     Khác: kỹ năng phân tích mạnh mẽ.',
            'tieude'=>'Hỗ trợ tiếp thị sản phẩm',
            'nganh_id'=>$nganhs['Nhân viên sản phẩm'],
            'trangthai_id'=>$trangthai_id['Đang tuyển'],
            'ngaydang'=>'2019-08-18',
            'luong'=>'7000000',
            'anh'=>'hotrotiepthisanpham.PNG'
        ]);

        \App\tintuyendung::query()->create([
            'mota'=>'Học cách sử dụng các khái niệm chuyên nghiệp. Áp dụng các chính sách và quy trình của công ty để giải quyết các vấn đề thường lệ
                     Hoạt động trên các vấn đề phạm vi hạn chế. Theo các quy trình và thủ tục tiêu chuẩn
                     Thông thường nhận được hướng dẫn chi tiết về tất cả các công việc
                     Điểm đầu vào điển hình cho sinh viên tốt nghiệp đại học',
            'tieude'=>'Sản xuất hậu cần',
            'nganh_id'=>$nganhs['Nhân viên sản xuất'],
            'trangthai_id'=>$trangthai_id['Hết hạn'],
            'ngaydang'=>'2019-08-18',
            'luong'=>'8000000',
            'anh'=>'sanxuathaucan.PNG'
        ]);

        \App\tintuyendung::query()->create([
            'mota'=>'Bằng tốt nghiệp trung học hoặc tương đương (GED)
                     Tối thiểu 5 năm kinh nghiệm với sửa chữa khuôn hoặc xây dựng mới
                     Kinh nghiệm hàn ưa thích, không bắt buộc
                     Có khả năng, có hoặc không có chỗ ở hợp lý, để làm việc bất kỳ ca và làm thêm giờ
                     Khả năng đứng trong thời gian dài',
            'tieude'=>'Tuyển kỹ sư có kinh nghiệm',
            'nganh_id'=>$nganhs['Nhân viên sản xuất'],
            'trangthai_id'=>$trangthai_id['Đang tuyển'],
            'ngaydang'=>'2019-08-18',
            'luong'=>'11500000',
            'anh'=>'tuyenkysu.PNG'
        ]);

        \App\tintuyendung::query()->create([
            'mota'=>'Quản lý mục tiêu bán hàng tối ưu sẽ thúc đẩy sự phát triển của đơn vị kinh doanh và thúc đẩy tinh thần của nhân viên.
                     Xem lại chiến lược bán hàng tối ưu sẽ cho phép đáp ứng mục tiêu bán hàng bằng cách phân tích dữ liệu thị trường, sản phẩm và đối thủ được chỉ định.
                     [Hỗ trợ bán hàng] Quản lý hỗ trợ vật chất và nhân lực cho một khu vực hoặc tổ chức kinh doanh có liên quan và những nỗ lực của họ để đáp ứng mục tiêu bán hàng.
                     [Giám sát bán hàng, xác định cơ hội và quản lý rủi ro] Theo dõi tình trạng bán hàng và hoạt động cũng như các vấn đề khác và loại bỏ các yếu tố rủi ro thông qua giao tiếp.',
            'tieude'=>'Quản lý bán hàng',
            'nganh_id'=>$nganhs['Quản lý kinh doanh'],
            'trangthai_id'=>$trangthai_id['Đang tuyển'],
            'ngaydang'=>'2018-08-18',
            'luong'=>'16500000',
            'anh'=>'quanlybanhang.PNG'
        ]);

        \App\tintuyendung::query()->create([
            'mota'=>'Bằng cử nhân - Kinh doanh, Công nghệ thông tin, Kỹ thuật hoặc chuyên ngành liên quan (bắt buộc)
                     Hơn 6 năm kinh nghiệm trong quản lý dự án, tái cấu trúc quy trình, tư vấn hoặc các lĩnh vực liên quan
                     MBA / MS - Kinh doanh và chuyên ngành liên quan (ưu tiên)
                     Kinh nghiệm quản lý dự án quy mô lớn với thực hành Agile
                     Có kinh nghiệm về quản lý chương trình / danh mục đầu tư / PMO
                     Có kinh nghiệm trong quản lý CRM cho các kênh tương tác của khách hàng
                     Kiến thức về các nguyên tắc, công cụ và kỹ thuật cải tiến hiệu suất
                     Kiến thức về thay đổi chính sách và quy trình mới
                     Kiến thức về quy trình vận hành và thực hiện thực tế
                     Kiến thức về các kênh truyền thông đúng và các điểm ra quyết định.
                     Kiến thức về quyền riêng tư và bảo mật dữ liệu của khách hàng
                     Tư vấn nội bộ và kinh nghiệm chiến lược công ty',
            'tieude'=>'Quản lý kế hoạch dự án chiến lược',
            'nganh_id'=>$nganhs['Quản lý kinh doanh'],
            'trangthai_id'=>$trangthai_id['Đang tuyển'],
            'ngaydang'=>'2019-08-18',
            'luong'=>'16500000',
            'anh'=>'quanlykehoachchienluoc.PNG'
        ]);

        \App\tintuyendung::query()->create([
            'mota'=>'8 năm + kinh nghiệm liên quan làm việc chặt chẽ với các bên liên quan kinh doanh.
                     Đã chứng minh thành công trong việc thiết kế và thực hiện chiến lược L & D phù hợp với các ưu tiên của kế hoạch kinh doanh.
                     Có kinh nghiệm trong quản lý dự án và thay đổi.
                     Kinh nghiệm làm việc với Hệ thống thông tin quản lý học tập.
                     Kinh nghiệm với việc thực hiện và theo dõi KPI L & D.
                     Kết quả định hướng và có thể tạo điều kiện thay đổi có lợi cho tổ chức và mục tiêu của nó.
                     Kinh nghiệm đáng kể về thiết kế và thực hiện các can thiệp hỗ trợ thay đổi văn hóa.
                     Kinh nghiệm đã được chứng minh về thiết kế và triển khai các can thiệp L & D / OD. Khả năng xác định ý nghĩa của các kế hoạch chiến lược và đáp ứng với các can thiệp và giải pháp OD thích hợp.
                     Kinh nghiệm phát triển các giải pháp học tập kết hợp bao gồm đào tạo, tạo thuận lợi, học tập điện tử và huấn luyện.
                     Kinh nghiệm đã được chứng minh về phát triển và triển khai chính sách L & D / OD.
                     Kinh nghiệm nâng cao sự gắn kết của nhân viên và thay đổi văn hóa.
                     Có khả năng lập kế hoạch và cung cấp các sự kiện và chương trình đào tạo và phát triển phức tạp.
                     Một sự hiểu biết thấu đáo về các vấn đề tác động đến văn hóa tổ chức, các giá trị và hiệu suất và các thực tiễn mới và mới nổi.',
            'tieude'=>'Quản lý tổ chức, học tập và phát triển',
            'nganh_id'=>$nganhs['Quản lý nhân sự'],
            'trangthai_id'=>$trangthai_id['Đang tuyển'],
            'ngaydang'=>'2020-01-10',
            'luong'=>'15000000',
            'anh'=>'quanlutochuc,hoctap.PNG'
        ]);

        \App\tintuyendung::query()->create([
            'mota'=>'Kinh nghiệm cần có:
                     Bằng cử nhân Kinh doanh tổng hợp, Nhân sự hoặc lĩnh vực liên quan
                     Hơn 4 năm kinh nghiệm trong lĩnh vực nhân sự và lập kế hoạch
                     Yêu cầu ưu tiên:
                     Bằng thạc sĩ kinh doanh, quản lý hoạt động, tài chính, chuỗi cung ứng, hậu cần hoặc lĩnh vực liên quan
                     Có kinh nghiệm về hàng tiêu dùng đóng gói (CPG) VÀ các ngành công nghiệp di động',
            'tieude'=>'Kế hoạch nhân sự',
            'nganh_id'=>$nganhs['Quản lý nhân sự'],
            'trangthai_id'=>$trangthai_id['Đang tuyển'],
            'ngaydang'=>'2020-01-10',
            'luong'=>'11000000',
            'anh'=>'kehoachnhansu.PNG'
        ]);

        \App\tintuyendung::query()->create([
            'mota'=>'Có nhiều kinh nghiệm, sử dụng các khái niệm chuyên nghiệp và mục tiêu của công ty để giải quyết các vấn đề phức tạp theo cách sáng tạo và hiệu quả
                     Làm việc trên các vấn đề phức tạp trong đó phân tích tình huống hoặc dữ liệu yêu cầu đánh giá sâu các biến. Bài tập phán đoán trong việc lựa chọn phương pháp, kỹ thuật và tiêu chí đánh giá để thu được kết quả. Xác định phương thức và quy trình trên bài tập mới và điều phối các nhiệm vụ của người khác
                     Có thể quản lý một nhóm như điều phối các hoạt động liên quan đến chi phí, phương pháp và nhân sự
                     Thông thường cần ít nhất 8 năm kinh nghiệm liên quan và bằng Cử nhân; hoặc 6 năm và bằng thạc sĩ; hoặc bằng tiến sĩ với 3 năm',
            'tieude'=>'Quản lý sản phẩm',
            'nganh_id'=>$nganhs['Quản lý sản phẩm'],
            'trangthai_id'=>$trangthai_id['Hết hạn'],
            'ngaydang'=>'2020-01-10',
            'luong'=>'11000000',
            'anh'=>'quanlysanpham.PNG'
        ]);

        \App\tintuyendung::query()->create([
            'mota'=>'Bằng cử nhân / Thạc sĩ về Quản lý chuỗi cung ứng, Điện tử, Kỹ thuật, Khoa học máy tính hoặc một lộ trình tương đương.
                    Hơn 5 năm kinh nghiệm có liên quan trong môi trường công nghệ cao quốc tế của một công ty đa quốc gia.
                    Kinh nghiệm trong ngành Bán dẫn / Điện tử là lợi thế.
                    Phương pháp tiếp cận dịch vụ khách hàng / tâm trí.
                    Kỹ năng số và phân tích tuyệt vời với mức độ chính xác cao và chú ý đến các chi tiết.
                    Có khả năng tổ chức, ưu tiên và đa nhiệm vụ dưới sự giám sát tối thiểu.
                    Người chơi nhóm chủ động với khả năng làm việc trong môi trường đa văn hóa
                    Kỹ năng giao tiếp và thuyết trình mạnh mẽ
                    Thông thạo tiếng Anh (viết & nói). Tiếng Đức sẽ được coi là cộng cũng như các ngôn ngữ châu Âu khác.',
            'tieude'=>'Quản lý kế hoạch sản phẩm',
            'nganh_id'=>$nganhs['Quản lý sản phẩm'],
            'trangthai_id'=>$trangthai_id['Đang tuyển'],
            'ngaydang'=>'2020-01-10',
            'luong'=>'10000000',
            'anh'=>'quanlykehoachsanpham.PNG'
        ]);

        \App\tintuyendung::query()->create([
            'mota'=>'Suy nghĩ sáng tạo
                     Tự tạo động lực và tự khởi động
                     Kỹ năng giao tiếp tuyệt vời với khả năng trình bày cho các thành viên chính trong nhóm
                     Tuyệt vời chú ý đến chi tiết
                     Linh hoạt & thích ứng với khả năng làm việc trong các nhóm chức năng chéo
                     Khả năng làm việc với tốc độ khuôn mặt, với độ chính xác trong môi trường thay đổi
                     Kiên trì, đam mê, sáng tạo và định hướng
                     Đồng đội tuyệt vời
                     Khả năng đưa ra quyết định với nhận thức đầy đủ về các tác động và sự đánh đổi kinh doanh rộng hơn',
            'tieude'=>'Chuyên gia, đào tạo kỹ thuật',
            'nganh_id'=>$nganhs['Quản lý sản xuất'],
            'trangthai_id'=>$trangthai_id['Hết hạn'],
            'ngaydang'=>'2020-01-10',
            'luong'=>'22000000',
            'anh'=>'chuyengia,daotaokythuat.PNG'
        ]);

        \App\tintuyendung::query()->create([
            'mota'=>'Bằng cử nhân với tối thiểu 4-7 năm hoặc kinh nghiệm trong lĩnh vực liên quan.
                     Ưu tiên nền tảng Kỹ thuật và Quản trị Kinh doanh (MBA), nhưng không bắt buộc
                     Hiểu biết sâu sắc về các khái niệm và chức năng kỹ thuật
                     Hiểu biết về tổ chức và xây dựng hiệu quả các mối quan hệ trong và ngoài tổ chức và định hướng nhóm
                     Năng lực làm việc dưới áp lực với tinh thần khẩn trương và tập trung vào khách hàng
                     Khả năng tương tác và có được sự hợp tác của các thành viên nhóm chức năng chéo khác nhau bao gồm Kỹ thuật,
                     Quản lý kế hoạch sản phẩm và tiếp thị
                     Theo dõi hồ sơ quản lý rủi ro phối hợp với các nhóm dự án và kinh nghiệm trong các chiến lược quản lý chuỗi cung ứng
                     Kỹ năng máy tính tuyệt vời
                     Kỹ năng nói, viết và thuyết trình tuyệt vời',
            'tieude'=>'Chuyên gia tìm nguồn cung ứng',
            'nganh_id'=>$nganhs['Quản lý sản xuất'],
            'trangthai_id'=>$trangthai_id['Hết hạn'],
            'ngaydang'=>'2018-01-10',
            'luong'=>'19000000',
            'anh'=>'chuyenviendathang.PNG'
        ]);

        \App\tintuyendung::query()->create([
            'mota'=>'Hơn 6 năm trong truyền thông xã hội / tiếp thị kỹ thuật số (ưu tiên kinh nghiệm đại lý) bao gồm phát triển và thực hiện chiến lược
                     Kinh nghiệm làm việc với các thương hiệu toàn cầu (công nghệ và FMCG trải nghiệm tiền thưởng)
                     Khả năng nhận được tóm tắt tiếp thị và cung cấp các chiến dịch truyền thông xã hội chiến lược để đáp ứng các mục tiêu
                     Hiểu biết rộng hơn về các nguyên tắc tiếp thị
                     Hiểu biết sâu sắc về các số liệu truyền thông xã hội, xu hướng và các sản phẩm / công cụ xã hội
                     Có nhiều kinh nghiệm trong hoạt động truyền thông xã hội trả tiền inc. phân khúc đối tượng, tối ưu hóa, vv cũng như báo cáo và điểm chuẩn hiệu quả để chứng minh ROI
                     Mối quan hệ mạnh mẽ với nền tảng và khả năng mang lại kết quả tốt nhất với tất cả các đối tác
                     Khả năng phát triển các phương thức và điểm chuẩn tốt nhất trên phương tiện truyền thông xã hội
                     Phương pháp lấy khách hàng làm trung tâm',
            'tieude'=>'Quản lý phương tiện truyền thông xã hội',
            'nganh_id'=>$nganhs['Thông tin, truyền thông'],
            'trangthai_id'=>$trangthai_id['Đang tuyển'],
            'ngaydang'=>'2018-01-10',
            'luong'=>'16500000',
            'anh'=>'quanlyphuongtientruyenthongxahoi.PNG'
        ]);

        \App\tintuyendung::query()->create([
            'mota'=>'Bằng cử nhân là bắt buộc.
                     Người quản lý phải có tối thiểu 6 (sáu) năm kinh nghiệm làm việc trong môi trường có nhịp độ nhanh và kiến ​​thức / kinh nghiệm làm việc với những người có ảnh hưởng DC và cộng đồng chính sách công.
                     Người quản lý phải có khả năng giải thích các vấn đề kinh doanh và chính sách công phức tạp cho nhiều đối tượng khác nhau. Do đó, anh ta cũng phải có khả năng duy trì kiến ​​thức vượt trội về các vấn đề chính sách công của công ty, đặc biệt là khi áp dụng cho một công ty có trụ sở nước ngoài đang kinh doanh tại Mỹ
                     Dịch vụ khách hàng tuyệt vời và kỹ năng giao tiếp và khả năng làm việc với nhiều thành phần khác nhau, bao gồm các quan chức chính sách cấp cao, học giả, giám đốc điều hành, nhà cung cấp, nhà thầu, nhân viên và nhiều bên khác. Khả năng làm việc với các giám đốc điều hành cấp cao, cả bên trong và bên ngoài.
                     Chú ý đến chi tiết và kỹ năng tổ chức đặc biệt.
                     Có một sự hiểu biết tốt về các phương tiện / địa điểm truyền thông và chính sách dựa trên chính sách.
                     Khả năng làm việc như một cá nhân hoặc một phần của nhóm dựa trên nhu cầu của từng sự kiện, chương trình hoặc dự án.',
            'tieude'=>'Truyền thông chiến lược, Quan hệ công',
            'nganh_id'=>$nganhs['Thông tin, truyền thông'],
            'trangthai_id'=>$trangthai_id['Đang tuyển'],
            'ngaydang'=>'2018-01-10',
            'luong'=>'15000000',
            'anh'=>'truyeenthongchienluoc,quanhecongchung.PNG'
        ]);

        \App\tintuyendung::query()->create([
            'mota'=>' Phát triển chuyên môn chuyên nghiệp bằng cách tuân thủ các chính sách và quy trình của công ty
                      Hoạt động trên các vấn đề có phạm vi vừa phải trong đó phân tích tình huống hoặc dữ liệu yêu cầu xem xét về các yếu tố khác nhau
                      Bài tập phán đoán trong các quy trình và thực hành được xác định để xác định hành động phù hợp
                      Thông thường nhận được hướng dẫn chung về công việc thường xuyên với hướng dẫn chi tiết về các dự án hoặc bài tập mới
                      Thường yêu cầu bằng cử nhân với kinh nghiệm tối thiểu 2 năm liên quan hoặc bằng cấp cao mà không có kinh nghiệm',
            'tieude'=>'Nhà phân tích nghiên cứu',
            'nganh_id'=>$nganhs['Tư vấn, thị trường'],
            'trangthai_id'=>$trangthai_id['Đang tuyển'],
            'ngaydang'=>'2020-01-10',
            'anh'=>'nhaphantichnghiencuu.PNG',
            'luong'=>'18000000'
        ]);

        \App\tintuyendung::query()->create([
            'mota'=>'Có kinh nghiệm chuyên môn với sự hiểu biết đầy đủ về các lĩnh vực chuyên ngành; giải quyết một loạt các vấn đề theo những cách sáng tạo
                     Hoạt động trên các vấn đề thuộc phạm vi đa dạng trong đó phân tích dữ liệu yêu cầu đánh giá các yếu tố nhận dạng. Thể hiện sự phán đoán tốt trong việc lựa chọn phương pháp và kỹ thuật để có được giải pháp
                     Thông thường nhận được ít hướng dẫn về công việc hàng ngày và nhận hướng dẫn chung về bài tập mới
                     Thông thường yêu cầu tối thiểu 5 năm kinh nghiệm liên quan và bằng Cử nhân, hoặc 3 năm và bằng Thạc sĩ; hoặc bằng tiến sĩ không có kinh nghiệm',
            'tieude'=>'Chuyên viên phân tích kinh doanh trực tuyến',
            'nganh_id'=>$nganhs['Tư vấn, thị trường'],
            'trangthai_id'=>$trangthai_id['Đang tuyển'],
            'ngaydang'=>'2020-01-10',
            'anh'=>'chuyenvienphantichkinhdoanhtructuyen.PNG',
            'luong'=>'16500000'
        ]);
    }
}
