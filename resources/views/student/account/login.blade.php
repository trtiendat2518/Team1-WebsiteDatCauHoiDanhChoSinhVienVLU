<!DOCTYPE html>
<html><head>
	<meta charset="UTF-8">
	<title>Đăng nhập</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<link rel="stylesheet" type="text/css" href="{{asset('public/student/css/animate.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('public/student/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('public/student/css/line-awesome.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('public/student/css/line-awesome-font-awesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('public/student/css/all.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('public/student/css/font-awesome.css')}}"> 
	<link rel="stylesheet" type="text/css" href="{{asset('public/student/css/slick.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('public/student/css/slick-theme.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('public/student/css/style.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('public/student/css/responsive.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('public/student/css/font.css')}}">
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
									<img src="{{asset('public/student/images/vlulogo.png')}}" alt="">
								</div>
								<img src="{{asset('public/student/images/cm-main-img.png')}}" alt="">
							</div>
						</div>
						<div class="col-lg-6">
							<div class="login-sec">
								<ul class="sign-control">
									<button class="btn btn-default" style="background: #e44d3a; ;">
										<a href="{{url('/login')}}" style="color: white;" title="">Đăng nhập</a>
									</button>
									<button class="btn btn-default" style="background: white;">
										<a href="{{url('/register')}}" style="color: black;" title="">Đăng ký</a>
									</button>
								</ul>
								<div class="sign_in_sec animated fadeIn current" id="tab-1">
									<h3>Đăng nhập</h3>
									@php
									$message=Session::get('message');
									if($message){
										echo $message;
										Session::put('message', null);
									}
									@endphp
									<form action="{{url('/dang-nhap')}}" method="post">
										{{csrf_field()}}
										@foreach ($errors->all() as $val)
										<div class="alert alert-danger">{{$val}}</div>
										@endforeach
										<div class="row">
											<div class="col-lg-12 no-pdd">
												<div class="sn-field">
													<input type="text" name="student_email" placeholder="...@vanlanguni.vn">
													<i class="fa fa-envelope"></i>
												</div>
											</div>
											<div class="col-lg-12 no-pdd">
												<div class="sn-field">
													<input type="password" name="student_password" placeholder="Mật khẩu">
													<i class="fa fa-lock"></i>
												</div>
											</div>
											<div class="col-lg-12 no-pdd">
												<div class="checky-sec">
													<div class="fgt-sec">
														<input type="checkbox" value="remember" name="cc" id="c1">
														<label for="c1">
															<span></span>
														</label>
														<small>Ghi nhớ</small>
													</div>
													<a href="{{asset('/forgetpass')}}" title="">Quên mật khẩu?</a>
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
					<p><img src="{{asset('public/student/images/copy-icon.png')}}" alt="">Copyright 2019</p>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="{{asset('public/student/js/jquery.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('public/student/js/popper.js')}}"></script>
	<script type="text/javascript" src="{{asset('public/student/js/bootstrap.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('public/student/js/slick.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('public/student/js/script.js')}}"></script>
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>

</body></html>