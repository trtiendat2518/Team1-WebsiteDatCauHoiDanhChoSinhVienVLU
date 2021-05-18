<!DOCTYPE html>
<html><head>
	<meta charset="UTF-8">
	<title>Website Đặt Câu Hỏi VLU</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<link rel="stylesheet" type="text/css" href="{{asset('public/student/css/animate.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('public/student/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('public/student/css/line-awesome.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('public/student/css/line-awesome-font-awesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('public/student/css/all.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('public/student/css/font-awesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('public/student/css/jquery.mCustomScrollbar.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('public/student/css/slick.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('public/student/css/slick-theme.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('public/student/css/style.cs')}}s">
	<link rel="stylesheet" type="text/css" href="{{asset('public/student/css/responsive.css')}}">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js"></script></head>
	<body oncontextmenu="return false;">
		<div class="wrapper">
			<header>
				<div class="container">
					<div class="header-data">
						<div class="logo">
							<a href="index.html" title=""><img src="images/logo.png" alt=""></a>
						</div>
						<div class="search-bar">
							<form>
								<input type="text" name="search" placeholder="Search...">
								<button type="submit"><i class="la la-search"></i></button>
							</form>
						</div>
						<nav>
							<ul>
								<li>
									<a href="{{url('/')}}" title="">
										<span><i class="fa fa-home" aria-hidden="true"></i></span>
										Trang chủ
									</a>
								</li>
								<li>
									<a href="companies.html" title="">
										<span><i class="fa fa-bars" aria-hidden="true"></i></span>
										Loại câu hỏi
									</a>
									<ul>
										<li><a href="companies.html" title="">Companies</a></li>
										<li><a href="company-profile.html" title="">Company Profile</a></li>
									</ul>
								</li>
								<li>
									<a href="{{url('/trang-ca-nhan')}}" title="">
										<span><i class="fa fa-user" aria-hidden="true"></i></span>
										Hồ sơ cá nhân
									</a>
									<ul>
										<li><a href="user-profile.html" title="">User Profile</a></li>
										<li><a href="my-profile-feed.html" title="">my-profile-feed</a></li>
									</ul>
								</li>
								<li>
									<a href="#" title="" class="not-box-open">
										<span><i class="fa fa-bell" aria-hidden="true"></i></span>
										Thông báo
									</a>
									<div class="notification-box noti" id="notification">
										<div class="nt-title">
											<h4>Setting</h4>
											<a href="#" title="">Clear all</a>
										</div>
										<div class="nott-list">
											<div class="notfication-details">
												<div class="noty-user-img">
													<img src="images/resources/ny-img1.png" alt="">
												</div>
												<div class="notification-info">
													<h3><a href="#" title="">Jassica William</a> Comment on your project.</h3>
													<span>2 min ago</span>
												</div>
											</div>
											<div class="notfication-details">
												<div class="noty-user-img">
													<img src="images/resources/ny-img2.png" alt="">
												</div>
												<div class="notification-info">
													<h3><a href="#" title="">Jassica William</a> Comment on your project.</h3>
													<span>2 min ago</span>
												</div>
											</div>
											<div class="notfication-details">
												<div class="noty-user-img">
													<img src="images/resources/ny-img3.png" alt="">
												</div>
												<div class="notification-info">
													<h3><a href="#" title="">Jassica William</a> Comment on your project.</h3>
													<span>2 min ago</span>
												</div>
											</div>
											<div class="notfication-details">
												<div class="noty-user-img">
													<img src="images/resources/ny-img2.png" alt="">
												</div>
												<div class="notification-info">
													<h3><a href="#" title="">Jassica William</a> Comment on your project.</h3>
													<span>2 min ago</span>
												</div>
											</div>
											<div class="view-all-nots">
												<a href="#" title="">View All Notification</a>
											</div>
										</div>
									</div>
								</li>
							</ul>
						</nav>
						<div class="menu-btn">
							<a href="#" title=""><i class="fa fa-bars"></i></a>
						</div>
						<div class="user-account">
							<div class="user-info">
								@php
								$student_id = Session::get('student_id');
								if($student_id){
									@endphp
									<a href="{{asset('/dang-xuat')}}" title=""><i class="fa fa-sign-out" aria-hidden="true"></i> Đăng xuất</a>
									@php
								}else{
									@endphp
									<a href="{{asset('login')}}" title=""><i class="fa fa-sign-in" aria-hidden="true"></i> Đăng nhập</a>
									@php
								}
								@endphp
								
							</div>
							<div class="user-account-settingss" id="users">
								<h3>Online Status</h3>
								<ul class="on-off-status">
									<li>
										<div class="fgt-sec">
											<input type="radio" name="cc" id="c5">
											<label for="c5">
												<span></span>
											</label>
											<small>Online</small>
										</div>
									</li>
									<li>
										<div class="fgt-sec">
											<input type="radio" name="cc" id="c6">
											<label for="c6">
												<span></span>
											</label>
											<small>Offline</small>
										</div>
									</li>
								</ul>
								<h3>Custom Status</h3>
								<div class="search_form">
									<form>
										<input type="text" name="search">
										<button type="submit">Ok</button>
									</form>
								</div>
								<h3>Setting</h3>
								<ul class="us-links">
									<li><a href="profile-account-setting.html" title="">Account Setting</a></li>
									<li><a href="#" title="">Privacy</a></li>
									<li><a href="#" title="">Faqs</a></li>
									<li><a href="#" title="">Terms &amp; Conditions</a></li>
								</ul>
								<h3 class="tc"><a href="sign-in.html" title="">Logout</a></h3>
							</div>
						</div>
					</div>
				</div>
			</header>
			<main>
				<div class="main-section">
					@yield('content')
				</div>
			</main>
			<div class="post-popup pst-pj">
				<div class="post-project">
					<h3>Câu hỏi của bạn</h3>
					<div class="post-project-fields">
						<form>
							<div class="row">
								<div class="col-lg-12">
									<input type="text" name="title" placeholder="Tiêu đề">
								</div>
								<div class="col-lg-12">
									<div class="inp-field">
										<select>
											<option>Loại câu hỏi</option>
											<option>Category 1</option>
											<option>Category 2</option>
											<option>Category 3</option>
										</select>
									</div>
								</div>
								<div class="col-lg-12">
									<textarea style="height: 100%; resize: none;" id="ckeditor1" name="description" placeholder="Nội dung câu hỏi" rows="10"></textarea>
								</div>
								<div class="col-lg-12">
									<center>
										<ul>
											<li><button class="active" type="submit" value="post">Đăng</button></li>
											<li><a href="#" title="">Cancel</a></li>
										</ul>
									</center>
								</div>
							</div>
						</form>
					</div>
					<a href="#" title=""><i class="la la-times-circle-o"></i></a>
				</div>
			</div>
		</div>
		<script type="text/javascript" src="{{asset('public/student/js/jquery.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('public/student/js/popper.js')}}"></script>
		<script type="text/javascript" src="{{asset('public/student/js/bootstrap.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('public/student/js/jquery.mCustomScrollbar.js')}}"></script>
		<script type="text/javascript" src="{{asset('public/student/js/slick.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('public/student/js/scrollbar.js')}}"></script>
		<script type="text/javascript" src="{{asset('public/student/js/script.js')}}"></script>
		<script type="text/javascript" src="{{asset('public/student/js/script.js')}}"></script>
	</body></html>