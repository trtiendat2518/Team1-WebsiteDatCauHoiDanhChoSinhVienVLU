<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- bootstrap 4.3.1 -->
	<link rel="stylesheet" href="{{asset('public/student/css/vendor/bootstrap.min.css')}}">
	<!-- styles -->
	<link rel="stylesheet" href="{{asset('public/student/css/styles.min.css')}}">
	<link rel="stylesheet" href="{{asset('public/student/css/raw/styles.css')}}">
	<!-- favicon -->
	<link rel="icon" href="{{asset('public/student/img/vlu.ico')}}">
</head> 

<title>Đăng ký</title>
</head>
<body>

	<!-- LANDING -->
	<div class="landing">
		<!-- LANDING INFO -->
		<div class="landing-info">
			<!-- LOGO -->
			<div class="logo">
				<!-- ICON LOGO VIKINGER -->
				<a href="{{url('/')}}" title=""><img src="{{asset('public/student/img/vlu.ico')}}" alt=""></a>
				<!-- /ICON LOGO VIKINGER -->
			</div>
			<!-- /LOGO -->

			<!-- LANDING INFO PRETITLE -->
			<h2 class="landing-info-pretitle">Welcome to</h2>
			<!-- /LANDING INFO PRETITLE -->

			<!-- LANDING INFO TITLE -->
			<h1 class="landing-info-title">VLU</h1>
			<!-- /LANDING INFO TITLE -->

			<!-- LANDING INFO TEXT -->
			<p class="landing-info-text">Website này sẽ cùng bạn giải đáp những thắc mắc khi bạn đang trong gia đình Văn Lang!</p>

			<div class="tab-switch">
				<a href="{{url('login')}}">
					<button class="submit tab-switch-button login-register-form-trigger">Đăng nhập</button>
				</a>
				<a href="{{url('register')}}">
					<button class="submit tab-switch-button login-register-form-trigger">Đăng ký</button>
				</a>
			</div>
		</div>
		<!-- /LANDING INFO -->

		<!-- LANDING FORM -->
		<div class="landing-form">
			<!-- FORM BOX -->
			
			<!-- /FORM BOX -->

			<!-- FORM BOX -->
			<div class="form-box login-register-form-element">
				<!-- FORM BOX DECORATION -->
				<img class="form-box-decoration" src="{{asset('public/student/img/landing/rocket.png')}}" alt="rocket">
				<!-- /FORM BOX DECORATION -->

				<!-- FORM BOX TITLE -->
				<h2 style="color: white;" class="form-box-title">Tạo tài khoản!</h2>
				<!-- /FORM BOX TITLE -->
				@php
				$message=Session::get('message');
				if($message){
					echo $message;
					Session::put('message', null);
				}
				@endphp
				<!-- FORM -->
				<form action="{{url('/dang-ky')}}" method="post" class="form">
					<!-- FORM ROW -->
					{{csrf_field()}}
					@foreach ($errors->all() as $val)
					<div class="alert alert-danger">{{$val}}</div>
					@endforeach
					<div class="form-row">
						<!-- FORM ITEM -->
						<div class="form-item">
							<!-- FORM INPUT -->
							<div class="form-input">
								<label for="register-email">Email</label>
								<input class="fa fa-envelope" type="text" name="student_email" id="register-email">
							</div>
							<!-- /FORM INPUT -->
						</div>
						<!-- /FORM ITEM -->
					</div>
					<!-- /FORM ROW -->

					<!-- FORM ROW -->
					<div class="form-row">
						<!-- FORM ITEM -->
						<div class="form-item">
							<!-- FORM INPUT -->
							<div class="form-input">
								<label for="register-username">Họ tên</label>
								<input type="text" name="student_name" id="register-username">
							</div>
							<!-- /FORM INPUT -->
						</div>
						<!-- /FORM ITEM -->
					</div>
					<!-- /FORM ROW -->

					<!-- FORM ROW -->
					<div class="form-row">
						<!-- FORM ITEM -->
						<div class="form-item">
							<!-- FORM INPUT -->
							<div class="form-input">
								<label for="register-password">Mật khẩu</label>
								<input type="password" name="student_password" id="register-password">
							</div>
							<!-- /FORM INPUT -->
						</div>
						<!-- /FORM ITEM -->
					</div>
					<!-- /FORM ROW -->

					<!-- FORM ROW -->
					<div class="form-row">
						<!-- FORM ITEM -->
						<div class="form-item">
							<!-- FORM INPUT -->
							<div class="form-input">
								<label for="register-password-repeat">Nhập lại mật khẩu</label>
								<input type="password" name="student_password_confirm" id="register-password-repeat">
							</div>
							<!-- /FORM INPUT -->
						</div>
						<!-- /FORM ITEM -->
					</div>
					<!-- /FORM ROW -->
					<br>
					<div class="col-lg-12 no-pdd">
						<div class="sn-field">
							<center>
								<div class="g-recaptcha" data-sitekey="{{env('CAPTCHA_KEY')}}"></div>
							</center>
						</div>
					</div>
					<br>
					<!-- FORM ROW -->
					<div class="form-row">
						<!-- FORM ITEM -->
						<div class="form-item">
							<!-- BUTTON -->
							<button class="button medium primary">Đăng ký!</button>
							<!-- /BUTTON -->
						</div>
						<!-- /FORM ITEM -->
					</div>
					<!-- /FORM ROW -->
				</form>
				<!-- /FORM -->
			</div>
			<!-- /FORM BOX -->
			<div class="form-box login-register-form-element">
				<!-- FORM BOX DECORATION -->
				<img class="form-box-decoration overflowing" src="{{asset('public/student/img/landing/rocket.png')}}" alt="rocket">
				<!-- /FORM BOX DECORATION -->

				<!-- FORM BOX TITLE -->
				<h2 class="form-box-title">Đăng nhập tài khoản</h2>
				<!-- /FORM BOX TITLE -->
				<!-- FORM -->
				<form action="{{url('/dang-nhap')}}" method="post" class="form">
					<!-- FORM ROW -->
					{{csrf_field()}}
					@php
					$message=Session::get('message');
					if($message){
						echo $message;
						Session::put('message', null);
					}
					@endphp
					@foreach ($errors->all() as $val)
					<div class="alert alert-danger">{{$val}}</div>
					@endforeach
					<div class="form-row">
						<!-- FORM ITEM -->
						<div class="form-item">
							<!-- FORM INPUT -->
							<div class="form-input">
								<label for="login-username">Email</label>
								<input type="text" name="student_email" id="login-username">
							</div>
							<!-- /FORM INPUT -->
						</div>
						<!-- /FORM ITEM -->
					</div>
					<!-- /FORM ROW -->

					<!-- FORM ROW -->
					<div class="form-row">
						<!-- FORM ITEM -->
						<div class="form-item">
							<!-- FORM INPUT -->
							<div class="form-input">
								<label for="login-password">Mật khẩu</label>
								<input type="password" name="student_password" id="login-password">
							</div>
							<!-- /FORM INPUT -->
						</div>
						<!-- /FORM ITEM -->
					</div>
					<!-- /FORM ROW -->

					<!-- FORM ROW -->
					<div class="form-row space-between">
						<!-- FORM ITEM -->
						<div class="form-item">
							<!-- CHECKBOX WRAP -->
							<div class="checkbox-wrap">
								<input type="checkbox" id="login-remember" name="login_remember" checked>
								<!-- CHECKBOX BOX -->
								<div class="checkbox-box">
									<!-- ICON CROSS -->
									<svg class="icon-cross">
										<use xlink:href="#svg-cross"></use>
									</svg>
									<!-- /ICON CROSS -->
								</div>
								<!-- /CHECKBOX BOX -->
								<label for="login-remember">Ghi nhớ</label>
							</div>
							<!-- /CHECKBOX WRAP -->
						</div>
						<!-- /FORM ITEM -->

						<!-- FORM ITEM -->
						<div class="form-item">
							<!-- FORM LINK -->
							<a class="form-link" href="{{asset('/forgetpass')}}">Quên mật khẩu?</a>
							<!-- /FORM LINK -->
						</div>
						<!-- /FORM ITEM -->
					</div>
					<!-- /FORM ROW -->
					<div class="col-lg-12 no-pdd" style="margin-top: 20px;">
						<div class="sn-field">
							<center>
								<div class="g-recaptcha" data-sitekey="{{env('CAPTCHA_KEY')}}"></div>
							</center>
						</div>
					</div>
					<br>
					<!-- FORM ROW -->
					<div class="form-row">
						<!-- FORM ITEM -->
						<div class="form-item">
							<!-- BUTTON -->
							<button type="submit" class="button medium secondary">Đăng nhập!</button>
							<!-- /BUTTON -->
						</div>
						<!-- /FORM ITEM -->
					</div>
					<!-- /FORM ROW -->
				</form>
				<!-- /FORM -->
			</div>
		</div>
		<!-- /LANDING FORM -->
	</div>
	<!-- /LANDING -->

	<!-- app -->
	<script src="{{asset('public/student/js/utils/app.js')}}"></script>
	<!-- XM_Plugins -->
	<script src="{{asset('public/student/js/vendor/xm_plugins.min.js')}}"></script>
	<!-- form.utils -->
	<script src="{{asset('public/student/js/form/form.utils.js')}}"></script>
	<!-- landing.tabs -->
	<script src="{{asset('public/student/js/landing/landing.tabs.js')}}"></script>
	<!-- SVG icons -->
	<script src="{{asset('public/student/js/utils/svg-loader.js')}}"></script>
	<script src="https://www.google.com/recaptcha/api.js" async defer></script> 
</body>
</html>