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
  <link rel="stylesheet" href="{{asset('public/admin/css/jquery-ui.css')}}">
  <link rel="stylesheet" href="{{asset('public/admin/css/morris.css')}}">
  <link rel="stylesheet" href="{{asset('public/admin/css/jquery.dataTables.min.css')}}">
  <link rel="stylesheet" href="{{asset('public/student/css/sweetalert.css')}}">
</head>


<body class="index-01">
  <header class="top-header media" style="background-color: #343542;">
    <div class="top-left mr-3">
      <a class="navbar-brand" href="{{ url('admin-home') }}"><img src="{{asset('public/admin/images/vlulogo2.png')}}" alt="VLU"></a>
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
          <a href="{{url('/thong-tin-tai-khoan-admin/'.Session::get('admin_id'))}}" class="dropdown-toggle" data-toggle="dropdown">
            @foreach ($info as $key => $val)
            @if ($val->admin_info_id)
            <img src="{{asset('public/admin/images/avatar/'.$val->admin_avatar)}}" class="rounded-circle float-left mr-2" alt="User Image">
            @else
            <img src="{{asset('public/student/img/avatar/noavatar.jpg')}}" class="rounded-circle float-left mr-2" alt="User Image">
            @endif
            @endforeach
            <h4 class="name">@php
            echo Session::get('admin_name')
          @endphp</h4>
        </a>
        <ul class="dropdown-menu">
          <li><a href="{{url('/thong-tin-tai-khoan-admin/'.Session::get('admin_id'))}}"><i class="fa fa-user"></i> Th??ng tin c?? nh??n</a></li>
          <li><a href="{{url('/doi-mat-khau-moi')}}"><i class="fa fa-unlock-alt"></i> ?????i m???t kh???u</a></li>
          <li><a href="{{url('/logout-admin')}}"><i class="fa fa-power-off"></i> ????ng xu???t</a></li>
        </ul>
      </div>
    </div><!-- /.right-content -->
  </div><!-- /.top-right -->
</header><!-- /.top-header -->


<div class="content-wrapper container-fluid">
  <aside class="left-panel">
    <div class="user-card background-bg">
      <a href="{{url('/thong-tin-tai-khoan-admin/'.Session::get('admin_id'))}}">
       <div class="avatar mr-3 float-left">
        @foreach ($info as $key => $val)
        @if ($val->admin_info_id)
        <img class="rounded-circle" src="{{asset('public/admin/images/avatar/'.$val->admin_avatar)}}" alt="Avatar" style="height: 50px;">
        @else
        <img class="rounded-circle" src="{{asset('public/student/img/avatar/noavatar.jpg')}}" alt="Avatar" style="height: 50px;">
        @endif
        @endforeach
      </div>
      <div class="details">
        <h4 class="name">@php
        echo Session::get('admin_name')
      @endphp</h4><!-- /.name -->
      @if(Session::get('admin_role')==0)
      <span class="designation">Qu???n tr??? vi??n</span>
      @elseif(Session::get('admin_role')==1)
      <span class="designation">BCN khoa</span>
      @else
      <span class="designation">Tr??? l??</span>
      @endif
    </div><!-- /.details -->
  </a>
</div>
<nav class="navbar">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="{{url('/admin-home')}}">
        <i class="fa fa-dashboard"></i> <span class="menu-title">Trang ch???</span>
      </a>
    </li>
    @if(Session::get('admin_role')==0)
    <li class="nav-item header"><span class="menu-title">Sinh vi??n</span></li>
    @endif
    @if(Session::get('admin_role')==0)
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fa fa-university"></i> <span class="menu-title">Qu???n l?? khoa</span>
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="{{url('/them-moi-khoa')}}">Th??m m???i khoa</a>
        <a class="dropdown-item" href="{{url('/danh-sach-khoa')}}">Danh s??ch khoa</a>
      </div>
    </li>

    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fa fa-suitcase"></i> <span class="menu-title">Qu???n l?? chuy??n ng??nh</span>
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="{{url('/them-moi-chuyen-nganh')}}">Th??m m???i chuy??n ng??nh</a>
        <a class="dropdown-item" href="{{url('/danh-sach-chuyen-nganh')}}">Danh s??ch chuy??n ng??nh</a>
      </div>
    </li>

    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fa fa-puzzle-piece"></i> <span class="menu-title">Qu???n l?? kh??a h???c</span>
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="{{url('/them-moi-nam-hoc')}}">Th??m m???i kh??a h???c</a>
        <a class="dropdown-item" href="{{url('/danh-sach-nam-hoc')}}">Danh s??ch kh??a h???c</a>
      </div>
    </li>
    @endif

    @if (Session::get('admin_role')==1 || Session::get('admin_role')==2)
    <li class="nav-item header"><span class="menu-title">C??u h???i sinh vi??n</span></li>
    @endif
    @if (Session::get('admin_role')==1)
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fa fa-list"></i> <span class="menu-title">Qu???n l?? danh m???c</span>
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="{{url('/them-moi-danh-muc')}}">Th??m m???i danh m???c</a>
        <a class="dropdown-item" href="{{url('/danh-sach-danh-muc')}}">Danh s??ch danh m???c</a>
      </div>
    </li>
    @endif
    @if(Session::get('admin_role')==1 || Session::get('admin_role')==2)
    <li class="nav-item">
      <a class="nav-link" href="{{url('danh-sach-cau-hoi')}}">
        <i class="fa fa-question-circle"></i> <span class="menu-title">Qu???n l?? c??u h???i</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="{{url('cau-hoi-dang-chu-y')}}">
        <i class="fa fa-warning"></i> <span class="menu-title">C??u h???i ????ng ch?? ??</span>
      </a>
    </li>
    @endif

    @if(Session::get('admin_role')==0 || Session::get('admin_role')==1)
    <li class="nav-item header"><span class="menu-title">T??i kho???n</span></li>
    @endif
    @if (Session::get('admin_role')==0)
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fa fa-users"></i> <span class="menu-title">Qu???n l?? User</span>
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="{{url('/them-moi-user')}}">Th??m m???i User</a>
        <a class="dropdown-item" href="{{url('/danh-sach-user')}}">Danh s??ch c??c User</a>
      </div>
    </li>
    @endif
    @if (Session::get('admin_role')==0 || Session::get('admin_role')==1)
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fa fa-graduation-cap"></i> <span class="menu-title">Qu???n l?? sinh vi??n</span>
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="{{url('/them-moi-sinh-vien')}}">Th??m m???i sinh vi??n</a>
        <a class="dropdown-item" href="{{url('/danh-sach-sinh-vien')}}">Danh s??ch sinh vi??n</a>
      </div>
    </li>
    @endif
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
        Copyright ?? 2018 <a href="https://demos.jeweltheme.com/hi5dash" target="_blank">hi5dash</a>
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
<script src="{{asset('public/admin/js/jquery-ui.js')}}"></script>
<script src="{{asset('public/admin/js/morris.min.js')}}"></script>
<script src="{{asset('public/admin/js/raphael-min.js')}}"></script>
<script src="{{asset('public/student/js/sweetalert.min.js')}}"></script>
<script src="{{asset('public/admin/js/jquery.dataTables.min.js')}}"></script>

<script type="text/javascript">
  $(document).ready( function () {
    $('#myTable').DataTable();
  });
</script>

<script>
  $(function() {
    "use strict";
    $('#calendar').fullCalendar();
  });
</script>

<script type="text/javascript">
  $(function() {
    $( "#datepicker" ).datepicker({
      dateFormat: "yy-mm-dd",
    });
    $( "#datepicker2" ).datepicker({
      dateFormat: "yy-mm-dd",
    });
  });
</script>

<script type="text/javascript">
  $(document).ready(function(){
    chartshow();

    var chart = new Morris.Line({
      element: 'chart_statistic_post',
      lineColors: ['#7e57c2', '#e22424'],
      pointStrokeColors:['black'],
      fillOpacity: 0.3,
      hideHover: 'auto',
      parseTime: false,
      xkey: 'period',
      ykeys: ['post','like'],
      labels: ['C??u h???i','L?????t th??ch']
    });

    $('#btn-dashboard-filter').click(function(){
      var _token = $('input[name="_token"]').val();
      var from_date = $('#datepicker').val();
      var to_date = $('#datepicker2').val();
      if(from_date=='' || to_date==''){
        swal("Vui l??ng kh??ng ????? tr???ng!", "", "warning");
      }else if(from_date>to_date){
        swal("Ng??y kh??ng h???p l???!", "", "error");
      }else{
        $.ajax({
          url:"{{url('/loc-ngay-thang')}}",
          method: "POST",
          dataType: "JSON",
          data: {from_date:from_date, to_date:to_date, _token:_token},
          success:function(data){
            chart.setData(data);
          }
        });
      }
    });

    $('.dashboard-filter').change(function(){
      var dashboard_value = $(this).val();
      var _token = $('input[name="_token"]').val();
      $.ajax({
        url:"{{url('/loc-theo-ngay-thang-nam')}}",
        method: "POST",
        dataType: "JSON",
        data: {dashboard_value:dashboard_value, _token:_token},
        success:function(data){
          chart.setData(data);
        }
      });
    });

    function chartshow(){
      var _token = $('input[name="_token"]').val();
      $.ajax({
        url:"{{url('/hien-thi-thong-ke')}}",
        method: "POST",
        dataType: "JSON",
        data: {_token:_token},
        success:function(data){
          chart.setData(data);
        }
      });
    }
  });
</script>

<script type="text/javascript">
  $(document).ready(function(){
    var colorDanger = "#FF1744";
    Morris.Donut({
      element: 'donut',
      resize: true,
      colors: [
      '#B2EBF2',
      '#80DEEA',
      '#4DD0E1',
      '#00BCD4',
      '#00ACC1',
      '#0097A7',
      '#00838F',
      '#006064'
      ],
      data: [
      {label:"T???ng th??ng tr?????c", value:<?php echo $visitor_lastmonth_count ?>},
      {label:"T???ng th??ng n??y", value:<?php echo $visitor_thismonth_count ?>, color:colorDanger},
      {label:"T???ng c??? n??m", value:<?php echo $visitor_oneyear_count ?>},
      {label:"T???ng truy c???p", value:<?php echo $visitor_total_count ?>}
      ]
    });
  });
</script>

</body>
</html>