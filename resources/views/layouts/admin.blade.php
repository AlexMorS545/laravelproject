<!DOCTYPE html>
<html lang="ru">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin панель</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('assets/css/sb-admin-2.css') }}" rel="stylesheet">

</head>

<body id="page-top">

<div id="wrapper">

{{--    <!-- Sidebar -->--}}
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="index.html">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Admin panel</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Interface
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
               aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-cog"></i>
                <span>Категории</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Редактор категории</h6>
                    <a class="collapse-item" href="buttons.html">Спорт</a>
                    <a class="collapse-item" href="cards.html">Экономика</a>
                    <a class="collapse-item" href="cards.html">Мировые новости</a>
                </div>
            </div>
        </li>

        <!-- Nav Item - Utilities Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
               aria-expanded="true" aria-controls="collapseUtilities">
                <i class="far fa-newspaper"></i>
                <span>Новости</span>
            </a>
            <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                 data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Редактор новостей</h6>
                    <a class="collapse-item" href="utilities-color.html">Спорт</a>
                    <a class="collapse-item" href="utilities-border.html">Экономика</a>
                    <a class="collapse-item" href="utilities-animation.html">Мировые новости</a>
                </div>
            </div>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
{{--    <!-- End of Sidebar -->--}}

{{--    <!-- Content Wrapper -->--}}
    <div id="content-wrapper" class="d-flex flex-column">

{{--        <!-- Main Content -->--}}
        <div id="content">
{{--            <!-- Topbar -->--}}
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
{{--                <!-- Topbar Navbar -->--}}
                <ul class="navbar-nav ml-auto">
{{--                    <!-- Nav Item - User Information -->--}}
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                            <img class="img-profile rounded-circle" src="{{ asset('assets/img/undraw_profile.svg') }}">
                        </a>
                    </li>
                </ul>
            </nav>
{{--            <!-- End of Topbar -->--}}

{{--            <!-- Begin Page Content -->--}}
            <div class="container-fluid">
{{--                <!-- Page Heading -->--}}
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                </div>
            </div>
{{--            <!-- /.container-fluid -->--}}
        </div>
{{--        <!-- End of Main Content -->--}}
{{--        <!-- Footer -->--}}
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; Your Website 2020</span>
                </div>
            </div>
        </footer>
{{--        <!-- End of Footer -->--}}
    </div>
{{--    <!-- End of Content Wrapper -->--}}
</div>
{{--<!-- End of Page Wrapper -->--}}

{{--<!-- Scroll to Top Button-->--}}
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

{{--<!-- Bootstrap core JavaScript-->--}}
<script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

{{--<!-- Core plugin JavaScript-->--}}
<script src="{{ asset('assets/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

{{--<!-- Custom scripts for all pages-->--}}
<script src="{{ asset('assets/js/sb-admin-2.js') }}"></script>

{{--<!-- Page level plugins -->--}}
<script src="{{ asset('assets/vendor/chart.js/Chart.min.js') }}"></script>

</body>

</html>
