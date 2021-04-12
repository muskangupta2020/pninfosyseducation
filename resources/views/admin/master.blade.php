<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>PN-EDUCATION | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{url('backend/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="{{url('backend/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{url('backend/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{url('backend/plugins/jqvmap/jqvmap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{url('backend/dist/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{url('backend/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{url('backend/plugins/daterangepicker/daterangepicker.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{url('backend/plugins/summernote/summernote-bs4.css')}}">
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
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

  </nav>
  <!-- /.navbar -->
  <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-#3E8EF7-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link" style="background-color: white">
                <img src="{{ url('../backend/dist/img/logo.jpg')}}" alt="PN-EDUCATION"
                    class="brand-image img-responsive" style="opacity: .8">
                <span class="brand-text font-weight-bold text-primary">PNINFOSYS</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar" class="text-dark" style="overflow: auto;margin-top: 35px;background-image: linear-gradient(#fff,#076585);color: #020c51">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{ url('../backend/dist/img/user7-128x128.jpg')}}" class="img-circle elevation-2"
                            alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Muskan Gupta</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2" style="color: #021f3e">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item" >
                            <a href="{{ url('admin') }}" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p class="text-dark">
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('admin/category') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p class="text-dark">
                                    Category
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('admin/course') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p class="text-dark">
                                    Course
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('admin/c_display') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p class="text-dark">
                                    Courses Display
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('admin/banner') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p class="text-dark">
                                    Banner
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('admin/navbarfooter') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p class="text-dark">
                                    Footer & Header
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('admin/team') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p class="text-dark">
                                    Our Team
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('admin/intern') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p class="text-dark">
                                    Interns
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('admin/placement') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p class="text-dark">
                                    Placements
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('admin/contact') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p class="text-dark">
                                    Contact
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('admin/workshop') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p class="text-dark">
                                    Workshops
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('admin/workshopimage') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p class="text-dark">
                                    Workshops Data
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('admin/workshop_display') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p class="text-dark">
                                    Workshops Data Display
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('admin/coupan') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p class="text-dark">
                                    Coupans
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
            <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
               <i class="fa fa-sign-out" aria-hidden="true"></i>&nbsp;
              <p> {{ __('Logout') }}</p>

            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
            </form>

          </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>


@section("content")
@show
  





 <footer class="main-footer">
    <strong>Copyright &copy; 2020-2021 <a href="http://adminlte.io">PN-INFOSYS</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
     
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
<script src="{{url( 'backend/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{url( 'backend/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.btton)
</script>
<!-- Bootstrap 4 -->
<script src="{{url( 'backend/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{url( 'backend/plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{url( 'backend/plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{url( 'backend/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{url( 'backend/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{url( 'backend/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{url( 'backend/plugins/moment/moment.min.js')}}"></script>
<script src="backend/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{url( 'backend/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{url( 'backend/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{url( 'backend/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{url( 'backend/dist/js/adminlte.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{url( 'backend/dist/js/pages/dashboard.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{url( 'backend/dist/js/demo.js')}}"></script>
</body>
</html>


