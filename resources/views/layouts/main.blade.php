<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PT Akar Prima Contact</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href={{ asset('assets-template/plugins/fontawesome-free/css/all.min.css') }}>
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet"
        href={{ asset('assets-template/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}>
    <!-- iCheck -->
    <link rel="stylesheet" href={{ asset('assets-template/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}>
    <!-- JQVMap -->
    <link rel="stylesheet" href={{ asset('assets-template/plugins/jqvmap/jqvmap.min.css') }}>
    <!-- Theme style -->
    <link rel="stylesheet" href={{ asset('assets-template/dist/css/adminlte.min.css') }}>
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href={{ asset('assets-template/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}>
    <!-- Daterange picker -->
    <link rel="stylesheet" href={{ asset('assets-template/plugins/daterangepicker/daterangepicker.css') }}>
    <!-- summernote -->
    <link rel="stylesheet" href={{ asset('assets-template/plugins/summernote/summernote-bs4.min.css') }}>

    {{-- DATATABLE CDN --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.0/css/dataTables.dataTables.css" />

    {{-- Sweetalert2 CDN --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    {{-- Bootstrap Icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>

<body class="hold-transition sidebar-mini layout-fixed">

    {{-- Jquery CDN --}}
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>


    <div class="wrapper">

        <!-- Preloader -->
        {{-- <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="{{ asset('assets-template/dist/img/AdminLTELogo.png') }}"
                alt="AdminLTELogo" height="60" width="60">
        </div> --}}

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
            </ul>


        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                <img src='../assets-template/dist/img/AdminLTELogo.png' alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">AdminLTE 3</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{ asset('assets-template/dist/img/user2-160x160.jpg') }}"
                            class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Setra Nugraha</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item menu-open">
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href={{ route('dashboard') }}
                                        class="nav-link  {{ $title === 'Dashboard' ? 'active' : ' ' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Dashboard</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href={{ route('contact') }}
                                        class="nav-link {{ $title === 'Contact' ? 'active' : ' ' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Contact</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        @yield('content')

        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 3.2.0
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
    <script src={{ asset('assets-template/plugins/jquery/jquery.min.js') }}></script>
    <!-- jQuery UI 1.11.4 -->
    <script src={{ asset('assets-template/plugins/jquery-ui/jquery-ui.min.js') }}></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src={{ asset('assets-template/plugins/bootstrap/js/bootstrap.bundle.min.js') }}></script>
    <!-- ChartJS -->
    <script src={{ asset('assets-template/plugins/chart.js/Chart.min.js') }}></script>
    <!-- Sparkline -->
    <script src={{ asset('assets-template/plugins/sparklines/sparkline.js') }}></script>
    <!-- JQVMap -->
    <script src={{ asset('assets-template/plugins/jqvmap/jquery.vmap.min.js') }}></script>
    <script src={{ asset('assets-template/plugins/jqvmap/maps/jquery.vmap.usa.js') }}></script>
    <!-- jQuery Knob Chart -->
    <script src={{ asset('assets-template/plugins/jquery-knob/jquery.knob.min.js') }}></script>
    <!-- daterangepicker -->
    <script src={{ asset('assets-template/plugins/moment/moment.min.js') }}></script>
    <script src={{ asset('assets-template/plugins/daterangepicker/daterangepicker.js') }}></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src={{ asset('assets-template/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}>
    </script>
    <!-- Summernote -->
    <script src={{ asset('assets-template/plugins/summernote/summernote-bs4.min.js') }}></script>
    <!-- overlayScrollbars -->
    <script src={{ asset('assets-template/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}></script>
    <!-- AdminLTE App -->
    <script src={{ asset('assets-template/dist/js/adminlte.js') }}></script>
    <!-- AdminLTE for demo purposes -->
    <script src={{ asset('assets-template/dist/js/demo.js') }}></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src={{ asset('assets-template/dist/js/pages/dashboard.js') }}></script>
    {{-- DATATABLE CDN --}}
    <script src="https://cdn.datatables.net/2.0.0/js/dataTables.js"></script>

    <script>
        $(document).ready(function() {
            $('#contactsTable').DataTable({
                "pageLength": 7,
                "lengthChange": false
            })
        })
    </script>


</body>

</html>
