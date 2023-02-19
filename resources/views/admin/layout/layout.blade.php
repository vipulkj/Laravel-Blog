<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('admin/dist/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/style.css')}}">
<!-- Ionicons -->
    <!-- Ionicons -->
    <!-- <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> -->
    <!-- Tempusdominus Bbootstrap 4 -->
    <!-- <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css"> -->
    <!-- iCheck -->
    <!-- <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css"> -->

    <!-- <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css"> -->
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('admin/dist/css/adminlte.min.css')}}">
    <!-- overlayScrollbars -->
    <!-- <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css"> -->
    <!-- Daterange picker -->
    <!-- <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css"> -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.1/dist/sweetalert2.min.css" integrity="sha256-sWZjHQiY9fvheUAOoxrszw9Wphl3zqfVaz1kZKEvot8=" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap-switch-button@1.1.0/css/bootstrap-switch-button.min.css" rel="stylesheet">

    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
    <script src="https://kit.fontawesome.com/f716c5f45a.js" crossorigin="anonymous"></script>
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="{{ route('changepassword')}}}" class="nav-link" title="Change Password"><i class="fa-solid fa-key"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="{{ route('logout')}}" class="nav-link" title="Logout"> <i class="fa-solid fa-power-off"></i> </a>
                </li>
            </ul>

            

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Messages Dropdown Menu -->            
                    <div class="user-profile-img">
                        <img src="{{ asset('images/user-images/'.Auth::user()->image) }}" alt="" width="50px" height="30px" class="my-2 mx-2"> 
                    </div>
                    <div class="text-center my-2 mx-2">Welcome <span class="text-info">{{ Auth::user()->username }}</span></div>
                
                
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                        <i class="fas fa-bars"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                <img src="{{asset('admin/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">AdminLTE 3</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Alexander Pierce</a>
                    </div>
                </div> -->

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item has-treeview menu-open">
                            <a href="{{ route('index')}}" class="nav-link ">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                    <!-- <i class="right fas fa-angle-left"></i> -->
                                </p>
                            </a>
                        <li class="nav-item has-treeview">
                            <a href="{{ route('tables')}}" class="nav-link">
                                <i class="nav-icon fas fa-table"></i>
                                <p>
                                    Tables
                                    <!-- <i class="fas fa-angle-left right"></i> -->
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="{{ route('post.all')}}" class="nav-link">
                                <i class="nav-icon fas fa-book"></i>
                                <p>
                                    Posts
                                    <!-- <i class="fas fa-angle-left right"></i> -->
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="{{ route('category')}}" class="nav-link">
                                <i class="nav-icon fas fa-book"></i>
                                <p>
                                    Categories
                                    <!-- <i class="fas fa-angle-left right"></i> -->
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="{{ route('user.all')}}" class="nav-link">
                                <i class="nav-icon fas fa-book"></i>
                                <p>
                                    Users
                                    <!-- <i class="fas fa-angle-left right"></i> -->
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="{{ route('comments')}}" class="nav-link">
                                <i class="nav-icon fas fa-book"></i>
                                <p>
                                    Comments
                                    <!-- <i class="fas fa-angle-left right"></i> -->
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="{{ route('view')}}" class="nav-link">
                                <i class="nav-icon fas fa-book"></i>
                                <p>
                                    Comments Reply
                                    <!-- <i class="fas fa-angle-left right"></i> -->
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="{{ route('contacts.request')}}" class="nav-link">
                                <i class="nav-icon fas fa-book"></i>
                                <p>
                                    Contact Requests
                                    <!-- <i class="fas fa-angle-left right"></i> -->
                                </p>
                            </a>
                        </li>


                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->

            <!-- /.content-header -->

            <!-- Main content -->

            @section('container')
            @show


            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer position-fixed">
            <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 3.0.4
            </div>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <!-- <script src="plugins/chart.js/Chart.min.js"></script> -->
    <!-- Sparkline -->
    <!-- <script src="plugins/sparklines/sparkline.js"></script> -->
    <!-- JQVMap -->
    <!-- <script src="plugins/jqvmap/jquery.vmap.min.js"></script> -->
    <!-- <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script> -->
    <!-- jQuery Knob Chart -->
    <!-- <script src="plugins/jquery-knob/jquery.knob.min.js"></script> -->
    <!-- daterangepicker -->
    <!-- <script src="plugins/moment/moment.min.js"></script> -->
    <!-- <script src="plugins/daterangepicker/daterangepicker.js"></script> -->
    <!-- Tempusdominus Bootstrap 4 -->
    <!-- <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script> -->
    <!-- Summernote -->
    <!-- <script src="plugins/summernote/summernote-bs4.min.js"></script> -->
    <!-- overlayScrollbars -->
    <!-- <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script> -->
    <!-- AdminLTE App -->
    <script src="{{ asset('admin/dist/js/adminlte.js')}}"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{ asset('admin/dist/js/pages/dashboard.js')}}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('admin/dist/js/demo.js')}}"></script>

    <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap-switch-button@1.1.0/dist/bootstrap-switch-button.min.js"></script>



    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.1/dist/sweetalert2.all.min.js" integrity="sha256-Y16qmk55km4bhE/z6etpTsUnfIHqh95qR4al28kAPEU=" crossorigin="anonymous"></script>
    @if(Session::has('msg'))
    <script type="text/javascript">
        toastr.info("{{ session('msg')}} ");
    </script>
    @endif

    @if(Session::has('error'))
    <script type="text/javascript">
        toastr.error("{{ session('error')}} ");
    </script>
    @endif
    <script>
        $(document).ready(function() {
            $('#delete').on('click', function(e) {
                e.preventDefault();
                var link = $(this).attr('href');
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = link;
                        Swal.fire(
                            'Deleted!',
                            'Your file has been deleted.',
                            'success'
                        )
                    }
                })
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('.PostStatus').on('change', function(e) {
                var btn = this;
                btn.switchButton('disable');
                var id = $(this).data('id');
                var status = $(this).data('value');

                var url = '{{ url("/admin/post/status")}}';
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    url: url+"/"+id,
                    type: 'post',
                    data : {
                        status : status
                    },
                    success: function(data) {
                        toastr.info(data.msg);
                        btn.switchButton('enable');
                    }
                });
            });
        });
    </script>
</body>

</html>