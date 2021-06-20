<!DOCTYPE html>
<html><head>
  <meta charset="UTF-8">
  <title>Đăng nhập</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Đăng nhập Admin VLU">
  <link rel="icon" href="{{asset('public/student/img/vlu.ico')}}">
  <meta name="keywords" content="">
  <link rel="stylesheet" type="text/css" href="{{asset('public/admin/css/login/animate.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('public/admin/css/login/bootstrap.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('public/admin/css/login/line-awesome.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('public/admin/css/login/line-awesome-font-awesome.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('public/admin/css/login/all.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('public/admin/css/login/font-awesome.css')}}"> 
  <link rel="stylesheet" type="text/css" href="{{asset('public/admin/css/login/slick.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('public/admin/css/login/slick-theme.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('public/admin/css/login/style.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('public/admin/css/login/responsive.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('public/admin/css/login/font.css')}}">
</head>
<body class="sign-in" oncontextmenu="return false;">
  <div class="wrapper">
    <div class="sign-in-page">
      <div class="signin-popup">
        <div class="signin-pop">
          <div class="row">
            <div class="col-lg-6">
              <div class="cmp-info">
                <div class="cm-logo">
                  <img src="{{asset('public/admin/images/vlulogo.png')}}" alt="">
                </div>
                <img src="{{asset('public/admin/images/cm-main-img.png')}}" alt="">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="login-sec" style="margin-top: 60px;">
                
                <div class="sign_in_sec animated fadeIn current" id="tab-1">
                  <h3>Đăng nhập tài khoản</h3>
                  @php
                  $message=Session::get('message');
                  if($message){
                    echo $message;
                    Session::put('message', null);
                  }
                  @endphp
                  <form action="{{url('login-admin')}}" method="post">
                    {{csrf_field()}}
                    @foreach ($errors->all() as $val)
                    <div class="alert alert-danger">{{$val}}</div>
                    @endforeach
                    <div class="row">
                      <div class="col-lg-12 no-pdd">
                        <div class="sn-field">
                          <input type="text" name="admin_email" placeholder="Mail Văn Lang" style="color: black;">
                          <i class="fa fa-envelope"></i>
                        </div>
                      </div>
                      <div class="col-lg-12 no-pdd">
                        <div class="sn-field">
                          <input type="password" name="admin_password" placeholder="Mật khẩu" style="color: black;">
                          <i class="fa fa-lock"></i>
                        </div>
                      </div>
                      <div class="col-lg-12 no-pdd" style="margin-top: 20px;">
                        <div class="sn-field">
                          <center>
                            <div class="g-recaptcha" data-sitekey="{{env('CAPTCHA_KEY')}}"></div>
                          </center>
                        </div>
                      </div>
                      <div class="col-lg-12 no-pdd">
                        <center>
                          <button type="submit" value="submit">Đăng nhập</button>
                        </center>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footy-sec">
        <div class="container">
          <ul>
            <li><a href="help-center.html" title="">Help Center</a></li>
            <li><a href="about.html" title="">About</a></li>
            <li><a href="#" title="">Privacy Policy</a></li>
            <li><a href="#" title="">Community Guidelines</a></li>
            <li><a href="#" title="">Cookies Policy</a></li>
            <li><a href="#" title="">Career</a></li>
            <li><a href="forum.html" title="">Forum</a></li>
            <li><a href="#" title="">Language</a></li>
            <li><a href="#" title="">Copyright Policy</a></li>
          </ul>
          <p><img src="{{asset('public/admin/images/copy-icon.png')}}" alt="">Copyright 2019</p>
        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript" src="{{asset('public/admin/js/login/jquery.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('public/admin/js/login/popper.js')}}"></script>
  <script type="text/javascript" src="{{asset('public/admin/js/login/bootstrap.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('public/admin/js/login/slick.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('public/admin/js/login/script.js')}}"></script>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>

</body></html>