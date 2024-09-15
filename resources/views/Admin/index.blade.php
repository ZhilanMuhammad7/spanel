<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{asset('/images/favicon.ico')}}">

    <title>SPANEL - Dashboard</title>

    <!-- Vendors Style-->
    <link rel="stylesheet" href="{{asset('Admin/css/vendors_css.css')}}">

    <!-- Style-->
    <link rel="stylesheet" href="{{asset('Admin/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('Admin/css/skin_color.css')}}">

</head>

<body class="hold-transition light-skin sidebar-mini theme-primary fixed">

    <div class="wrapper">
        <div id="loader"></div>

        <header class="main-header">
            <div class="d-flex align-items-center logo-box justify-content-start">
                <a href="#" class="waves-effect waves-light nav-link d-none d-md-inline-block mx-10 push-btn bg-transparent" data-toggle="push-menu" role="button" style="background-color: black;">
                    <span class="icon-Align-left"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>
                </a>
                <!-- Logo -->
                <a href="index.html" class="logo">
                    <!-- logo-->
                    <div class="logo-lg">
                        <!-- <span class="light-logo"><img src="../images/logo-dark-text.png" alt="logo"></span> -->
                        <!-- <span class="dark-logo"><img src="../images/logo-light-text.png" alt="logo"></span> -->
                        <span>SPANEL</span>
                    </div>
                </a>
            </div>
            <!-- Header Navbar -->
            <nav class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->
                <div class="app-menu">
                    <ul class="header-megamenu nav">
                        <li class="btn-group nav-item d-md-none">
                            <a href="#" class="waves-effect waves-light nav-link push-btn" data-toggle="push-menu" role="button">
                                <span class="icon-Align-left"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>
                            </a>
                        </li>
                        <li class="btn-group nav-item d-none d-xl-inline-block">
                            <a href="contact_app_chat.html" class="waves-effect waves-light nav-link svg-bt-icon" title="Chat">
                                <i class="icon-Chat"><span class="path1"></span><span class="path2"></span></i>
                            </a>
                        </li>
                        <li class="btn-group nav-item d-none d-xl-inline-block">
                            <a href="mailbox.html" class="waves-effect waves-light nav-link svg-bt-icon" title="Mailbox">
                                <i class="icon-Mailbox"><span class="path1"></span><span class="path2"></span></i>
                            </a>
                        </li>
                        <li class="btn-group nav-item d-none d-xl-inline-block">
                            <a href="extra_taskboard.html" class="waves-effect waves-light nav-link svg-bt-icon" title="Taskboard">
                                <i class="icon-Clipboard-check"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="navbar-custom-menu r-side">
                    <ul class="nav navbar-nav">
                        <!-- Notifications -->
                        <li class="dropdown notifications-menu">
                            <div class="app-menu">
                                <span> Logged in as : admin</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <aside class="main-sidebar">
            <!-- sidebar-->
            <section class="sidebar position-relative">
                <div class="multinav">
                    <div class="multinav-scroll" style="height: 100%;">
                        <!-- sidebar menu-->
                        <ul class="sidebar-menu" data-widget="tree">
                            <li>
                                <a href="#">
                                    <i class="icon-Layout-4-blocks"><span class="path1"></span><span class="path2"></span></i>
                                    <span>Master Data</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i span class="icon-Layout-grid"><span class="path1"></span><span class="path2"></span></i>
                                    <span>Account Setting</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon-Write"><span class="path1"></span><span class="path2"></span></i>
                                    <span>Logout</span>
                                </a>
                            </li>
                            <li class="header">----------------------------------------------</li>
                            <li>
                                <a href="#">
                                    <i class="icon-File"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                    <span>Tabel Pekerja</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon-Chart-pie"><span class="path1"></span><span class="path2"></span></i>
                                    <span>Tabel Kategori</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon-Library"><span class="path1"></span><span class="path2"></span></i>
                                    <span>Tabel Soal</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon-Cart"><span class="path1"></span><span class="path2"></span></i>
                                    <span>Download Soal</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon-User"><span class="path1"></span><span class="path2"></span></i>
                                    <span>Data Gambar</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon-Chat-locked"><span class="path1"></span><span class="path2"></span></i>
                                    <span>Setting Lock Menu Utama</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon-Chat-check"><span class="path1"></span><span class="path2"></span></i>
                                    <span> Update Section Head</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon-Chat-check"><span class="path1"></span><span class="path2"></span></i>
                                    <span> Report Management</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon-Chat-check"><span class="path1"></span><span class="path2"></span></i>
                                    <span> Laporan Hasil</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <div class="container-full">
                <!-- Main content -->
                <section class="content">
                    @yield('content')
                </section>
                <!-- /.content -->
            </div>
        </div>
        <div class="control-sidebar-bg"></div>

    </div>
    <!-- Vendor JS -->
    <script src="{{asset('Admin/js/vendors.min.js')}}"></script>
    <script src="{{asset('Admin/js/pages/chat-popup.js')}}"></script>
    <script src="{{asset('/assets/icons/feather-icons/feather.min.js')}}"></script>

    <script src="{{asset('/assets/vendor_components/apexcharts-bundle/dist/apexcharts.js')}}"></script>
    <script src="{{asset('/assets/vendor_components/moment/min/moment.min.js')}}"></script>
    <script src="{{asset('/assets/vendor_components/fullcalendar/fullcalendar.js')}}"></script>
    <script src="{{asset('/assets/vendor_components/datatable/datatables.min.js')}}"></script>


    <!-- EduAdmin App -->
    <script src="{{asset('Admin/js/template.js')}}"></script>
    <script src="{{asset('Admin/js/pages/dashboard.js')}}"></script>
    <script src="{{asset('Admin/js/pages/calendar.js')}}"></script>
    <script src="{{asset('Admin/js/pages/data-table.js')}}"></script>


</body>

</html>