<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>{{$meta_title}}</title>
  <meta name="description" content="{{$meta_desc}}">
  <meta name="author" content="SEP-TEAM1-FWB">
  <link rel="canonical" href="{{$url_canonical}}">
  <link rel="icon" href="{{asset('public/student/img/vlu.ico')}}">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="apple-touch-icon" href="apple-touch-icon.png">

  <!-- Import Template Icons CSS Files -->
  <link rel="stylesheet" href="{{asset('public/admin/css/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{asset('public/admin/css/simple-line-icons.css')}}">
  <link rel="stylesheet" href="{{asset('public/admin/css/linea-basic.css')}}">
  <link rel="stylesheet" href="{{asset('public/admin/css/pe-icon-7-stroke.css')}}">

  <!-- Import Custom Country Select CSS Files -->
  <link rel="stylesheet" href="{{asset('public/admin/css/countrySelect.min.css')}}">

  <!-- Import Perfect ScrollBar CSS Files -->
  <link rel="stylesheet" href="{{asset('public/admin/css/perfect-scrollbar.css')}}">  

  <!-- Import Bootstrap CSS File -->

  <link rel="stylesheet" href="{{asset('public/admin/css/bootstrap.min.css')}}">

  <!-- Import Owl Carousel CSS File -->

  <link rel="stylesheet" href="{{asset('public/admin/css/owl.carousel.min.css')}}">  

  <!-- Import Template's CSS Files -->
  <link rel="stylesheet" href="{{asset('public/admin/css/presets.css')}}">
  <link rel="stylesheet" href="{{asset('public/admin/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('public/admin/css/index-01.css')}}">
  <link rel="stylesheet" href="{{asset('public/admin/css/responsive.css')}}">


</head>


<body class="index-01">
  <header class="top-header media" style="background-color: #343542;">
    <div class="top-left mr-3">
      <a class="navbar-brand" href="./index.html"><img src="{{asset('public/admin/images/vlulogo2.png')}}" alt="VLU"></a>
    </div>

    <div class="top-right media-body">
      <div class="left-content float-left">
        <a href="#" class="sidenav-toggle mr-2" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
          <i class="fa fa-bars"></i>
        </a><!-- /.sidenav-toggle -->
      </div><!-- /.left-content -->

      <div class="right-content float-right">
        <div class="dropdown user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <h4 class="name">Jonathon Doe</h4>
          </a>
          <ul class="dropdown-menu">
            <li><a href="#"><i class="fa fa-user"></i> Thông tin cá nhân</a></li>
            <li><a href="#"><i class="fa fa-envelope"></i> Inbox</a></li>
            <li><a href="#"><i class="fa fa-gears"></i> Account Setting</a></li>
            <li><a href="{{url('/logout-admin')}}"><i class="fa fa-power-off"></i> Đăng xuất</a></li>
          </ul>
        </div>
      </div><!-- /.right-content -->
    </div><!-- /.top-right -->
  </header><!-- /.top-header -->


  <div class="content-wrapper container-fluid">
    <aside class="left-panel">
      <div class="user-card background-bg">
        <a href="#">
          <div class="avatar mr-3 float-left"><img class="rounded-circle" src="images/avatar/4.jpg" alt="Avatar"></div><!-- /.avatar -->
          <div class="details">
            <h4 class="name">Bobby Payne</h4><!-- /.name -->
            <span class="designation">Designer</span><!-- /.designation -->
          </div><!-- /.details -->
        </a>
      </div>
      <nav class="navbar">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="{{url('/admin-home')}}">
              <i class="fa fa-dashboard"></i> <span class="menu-title">Trang chủ</span>
            </a>
          </li>

          <li class="nav-item header"><span class="menu-title">Sinh viên</span></li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-id-card-o"></i> <span class="menu-title">Tài khoản sinh viên</span>
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="index.html">Thêm mới tài khoản</a>
              <a class="dropdown-item" href="index-02.html">Danh sách tài khoản</a>
            </div>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-university"></i> <span class="menu-title">Quản lý khoa</span>
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="{{url('/them-moi-khoa')}}">Thêm mới khoa</a>
              <a class="dropdown-item" href="{{url('/danh-sach-khoa')}}">Danh sách khoa</a>
            </div>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-suitcase"></i> <span class="menu-title">Quản lý chuyên ngành</span>
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="{{url('/them-moi-chuyen-nganh')}}">Thêm mới chuyên ngành</a>
              <a class="dropdown-item" href="{{url('/danh-sach-chuyen-nganh')}}">Danh sách chuyên ngành</a>
            </div>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-graduation-cap"></i> <span class="menu-title">Quản lý khóa học</span>
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="{{url('/them-moi-nam-hoc')}}">Thêm mới khóa học</a>
              <a class="dropdown-item" href="{{url('/danh-sach-nam-hoc')}}">Danh sách khóa học</a>
            </div>
          </li>

        </ul>
      </nav>
    </aside><!-- /.left-panel -->

    <div class="dashboard-contents">
      <div class="contents-inner">
        @yield('admin_content')
      </div><!-- /.contents-inner -->

      <footer class="site-footer">
        <div class="copyright">
          <div class="float-left">
            Copyright © 2018 <a href="https://demos.jeweltheme.com/hi5dash" target="_blank">hi5dash</a>
          </div>

          <div class="float-right">
            Developed with Love by <a href="https://jeweltheme.com" rel="nofollow">Jewel Theme</a>
          </div>
        </div><!-- /.copyright -->
      </footer><!-- /.site-footer -->
    </div><!-- /.dashboard-contents -->
  </div><!-- /.content-wrapper -->



  <script src="{{asset('public/admin/js/jquery-3.2.1.slim.min.js')}}"></script>
  <script src="{{asset('public/admin/js/plugins.js')}}"></script>

  <!--Morris Chart-->
  <script src="{{asset('public/admin/js/charts/morris/raphael-min.js')}}"></script>
  <script src="{{asset('public/admin/js/charts/morris/morris.js')}}"></script>

  <!--Chartist Chart-->
  <script src="{{asset('public/admin/js/charts/chartist/chartist.min.js')}}"></script>
  <script src="{{asset('public/admin/js/charts/chartist/chartist-plugin-legend.js')}}"></script>

  <!--Sparkline Chart-->
  <script src="{{asset('assets/js/charts/sparkline/jquery.sparkline.min.js')}}"></script>

  <!--Flot Chart-->
  <script src="{{asset('public/admin/js/charts/flot/jquery.flot.js')}}"></script>
  <script src="{{asset('public/admin/js/charts/flot/jquery.flot.pie.js')}}"></script>
  <script src="{{asset('public/admin/js/charts/flot/jquery.flot.resize.js')}}"></script>
  <script src="{{asset('public/admin/js/charts/flot/jquery.flot.spline.js')}}"></script>
  <script src="{{asset('public/admin/js/widgets/charts.init.js')}}"></script>

  <!--For Weather-->
  <script src="{{asset('public/admin/js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('public/admin/js/widgets/weather.js')}}"></script>

  <!--For Calendar-->
  <script src="{{asset('public/admin/js/calendar/moment.js')}}"></script>
  <script src="{{asset('public/admin/js/calendar/fullcalendar.min.js')}}"></script>

  <script src="{{asset('public/admin/js/index/index-01.js')}}"></script>
  <script src="{{asset('public/admin/js/main.js')}}"></script>

  <script>
    $(function() {
      "use strict";

      $('#calendar').fullCalendar();

    });
  </script>

</body>
</html>