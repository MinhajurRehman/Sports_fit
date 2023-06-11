<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" type="image/x-icon" href="{{ url('Admins/images/logos.png') }}">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sports Fit Admin</title>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- Custom fonts for this template-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet"
        type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ url('Admins/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <!-- Custom styles for this page -->
    <link href="{{ url('Admins/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <img src="{{ url('Admins/images/logo.png') }}">



            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="{{ url('/Admins/Dashboard') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                FORMS
            </div>


            <!-- Nav Item - Forms -->
            <li class="nav-item">
                <a class="nav-link" href="{{ url('latestgames/get') }}">
                    <i class="fas fa-fw fa-list"></i>
                    <span>Match Details</span></a>
            </li>

            <!-- Nav Item - Forms -->
            <li class="nav-item">
                <a class="nav-link" href="{{ url('upcomingevents/get') }}">
                    <i class="fas fa-fw fa-list"></i>
                    <span>Upcoming Events</span></a>
            </li>

            <!-- Nav Item - Forms -->
            <li class="nav-item">
                <a class="nav-link" href="{{ url('news/get') }}">
                    <i class="fas fa-fw fa-list"></i>
                    <span>Latest News</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                TABLES
            </div>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="{{ url('folder/read') }}">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tables of Membership</span></a>
            </li>


            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="{{ url('latestgames/show') }}">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tables of Match details</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="{{ url('upcomingevents/show') }}">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Upcoming Event Data</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="{{ url('news/show') }}">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Latest news Data</span></a>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

              <!-- Heading -->
            <div class="sidebar-heading">
              Store
            </div>

              <!-- Nav Item - Tables -->
              <li class="nav-item">
                <a class="nav-link" href="{{ url('news/show') }}">
                    <i class="fas fa-fw fa-list"></i>
                    <span>Products</span></a>
            </li>

             <!-- Divider -->
             <hr class="sidebar-divider d-none d-md-block">

            <div class="sidebar-heading">
                Store Show Data
              </div>

               <!-- Nav Item - Tables -->
               <li class="nav-item">
                <a class="nav-link" href="{{ url('news/show') }}">
                    <i class="fas fa-fw fa-table"></i>
                    <span>list of Products</span></a>
            </li>

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>



        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <h1><b><i class="fa fa-users-viewfinder"></i></b></h1>

                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <h5>ADMIN PANEL</h5>
                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li>
                            <a href="{{ url('/Logout') }}">
                                <button class="btn btn-danger">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </button>
                            </a>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->
