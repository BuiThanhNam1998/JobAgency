<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Phạm Nguyên Thành">
    <meta name="author" content="">
    @yield('head')
    <!-- Bootstrap Core CSS -->
    <link href="{{asset('bower_components/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{asset('bower_components/metisMenu/dist/metisMenu.min.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{asset('dist/css/sb-admin-2.css')}}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{asset('bower_components/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

    <!-- DataTables CSS -->
    <link href="{{asset('bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css')}}" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="{{asset('bower_components/datatables-responsive/css/dataTables.responsive.css')}}" rel="stylesheet">
    <script src="{{asset('https://kit.fontawesome.com/0ac0ec1e64.js')}}" crossorigin="anonymous"></script>
    <!-- jQuery -->
    <script src="{{asset('bower_components/jquery/dist/jquery.min.js')}}"></script>
    <script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
</head>

<body>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Công ty cổ phần Phần mềm CADS</a>
        </div>
        <!-- /.navbar-header -->

        <ul class="nav navbar-top-links navbar-right">
            <!-- /.dropdown -->
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    {{auth()->user()->name}}
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                    </li>
                    <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                    </li>
                    <li class="divider"></li>
                    <form id="logout-form" action="{{route('logout')}}" method="POST" style="display: none;">@csrf</form>
                    <li><a href="login.html" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                </ul>
                <!-- /.dropdown-user -->
            </li>
            <!-- /.dropdown -->
        </ul>
        <!-- /.navbar-top-links -->

       @include('admin.menu')
    </nav>

    <!-- Page Content -->
    <div id="page-wrapper">
        @yield('content')
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->



<!-- Bootstrap Core JavaScript -->
<script src="{{asset('bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="{{asset('bower_components/metisMenu/dist/metisMenu.min.js')}}"></script>

<!-- Custom Theme JavaScript -->
<script src="{{asset('dist/js/sb-admin-2.js')}}"></script>

<!-- DataTables JavaScript -->
<script src="{{asset('bower_components/DataTables/media/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js')}}"></script>

<!-- Page-Level Demo Scripts - Tables - Use for reference -->
<script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            "searching": false,
            responsive: true,
            language: {
                decimal:        "",
                emptyTable:     "Không có dữ liệu để hiển thị",
                info:           "Hiển thị _START_ đến _END_ của _TOTAL_ đối tượng",
                infoEmpty:      "Hiển thị 0 đến 0 của 0 đối tượng",
                infoFiltered:   "(Đã tìm từ _MAX_ đối tượng)",
                infoPostFix:    "",
                thousands:      ",",
                lengthMenu:     "Hiển thị _MENU_ đối tượng",
                loadingRecords: "Loading...",
                processing:     "Processing...",
                search:         "Tìm kiếm:",
                zeroRecords:    "Không tìm thấy dữ liệu phù hợp",
                paginate: {
                    first:      "Đầu tiên",
                    last:       "Cuối cùng",
                    next:       "Về sau",
                    previous:   "Về Trước"
                },
                aria: {
                    sortAscending:  ": activate to sort column ascending",
                    sortDescending: ": activate to sort column descending"
                }
            },
        });
    });
    $(document).ready(function() {
        $('.js-example-basic-multiple').select2();
    });
</script>

</body>

</html>
