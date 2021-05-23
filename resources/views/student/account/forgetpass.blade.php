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

<title>Xác nhận Mail</title>
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
			<!-- /LANDING INFO TEXT -->
		</div>
		<!-- /LANDING INFO -->

		<!-- LANDING FORM -->
		<div class="landing-form">
			<!-- FORM BOX -->
			<div class="form-box login-register-form-element" style="margin-top: -250px;">
				<!-- FORM BOX DECORATION -->
				<img class="form-box-decoration overflowing" src="{{asset('public/student/img/landing/rocket.png')}}" alt="rocket">
				<!-- /FORM BOX DECORATION -->

				<!-- FORM BOX TITLE -->
				<h2 style="color: white;" class="form-box-title">Xác nhận Mail</h2>
				<!-- /FORM BOX TITLE -->
				<!-- FORM -->
				<form action="{{url('/xac-nhan-mail')}}" method="post" class="form">
					<!-- FORM ROW -->
					{{csrf_field()}}
					@php
					$message=Session::get('message');
					if($message){
						echo $message;
						Session::put('message', null);
					}
					@endphp
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
					<div class="form-row">
						<!-- FORM ITEM -->
						<div class="form-item">
							<!-- BUTTON -->
							<button type="submit" class="button medium secondary">Tiếp tục</button>
							<!-- /BUTTON -->
						</div>
						
						<div class="form-item">
							<!-- FORM LINK -->
							<a class="form-link" style="font-size: 16px;" href="{{asset('/login')}}"><center><br>Quay lại đăng nhập</center></a>
							<!-- /FORM LINK -->
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