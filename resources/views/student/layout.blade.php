<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- SEO website -->
	<meta name="description" content="{{$meta_desc}}">
	<meta name="author" content="SEP-TEAM1-FWB">
	<link rel="canonical" href="{{$url_canonical}}">
	<!-- bootstrap 4.3.1 -->
	<link rel="stylesheet" href="{{asset('public/student/css/vendor/bootstrap.min.css')}}">
	<!-- styles -->
	<link rel="stylesheet" href="{{asset('public/student/css/styles.min.css')}}">
	<!-- simplebar styles -->
	<link rel="stylesheet" href="{{asset('public/student/css/vendor/simplebar.css')}}">
	<!-- tiny-slider styles -->
	<link rel="stylesheet" href="{{asset('public/student/css/vendor/tiny-slider.css')}}">
	<link rel="stylesheet" href="{{asset('public/student/css/raw/styles.css')}}">
	<link rel="stylesheet" href="{{asset('public/student/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('public/student/css/sweetalert.css')}}">
	<link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css')}}">
	<!-- favicon -->
	<link rel="icon" href="{{asset('public/student/img/vlu.ico')}}">
	<title>{{$meta_title}}</title>
</head>
<body">

	<!-- PAGE LOADER -->
	<div class="page-loader">
		<!-- PAGE LOADER DECORATION -->
		<div class="page-loader-decoration">
			<!-- ICON LOGO -->
			<img src="{{asset('public/student/img/vlu.ico')}}" alt="">
			<!-- /ICON LOGO -->
		</div>
		<!-- /PAGE LOADER DECORATION -->

		<!-- PAGE LOADER INFO -->
		<div class="page-loader-info">
			<!-- PAGE LOADER INFO TITLE -->
			<p class="page-loader-info-title">Văn Lang</p>
			<!-- /PAGE LOADER INFO TITLE -->

			<!-- PAGE LOADER INFO TEXT -->
			<p class="page-loader-info-text">Đang tải...</p>
			<!-- /PAGE LOADER INFO TEXT -->
		</div>
		<!-- /PAGE LOADER INFO -->

		<!-- PAGE LOADER INDICATOR -->
		<div class="page-loader-indicator loader-bars">
			<div class="loader-bar"></div>
			<div class="loader-bar"></div>
			<div class="loader-bar"></div>
			<div class="loader-bar"></div>
			<div class="loader-bar"></div>
			<div class="loader-bar"></div>
			<div class="loader-bar"></div>
			<div class="loader-bar"></div>
		</div>
		<!-- /PAGE LOADER INDICATOR -->
	</div>
	<!-- /PAGE LOADER -->

	<!-- NAVIGATION WIDGET -->
	<nav id="navigation-widget-small" class="navigation-widget navigation-widget-desktop closed sidebar left delayed">
		<ul class="menu small">
			<li class="menu-item active">
				<a class="menu-item-link text-tooltip-tfr" href="{{url('/')}}" data-title="Trang câu hỏi">
					<svg class="menu-item-link-icon icon-newsfeed">
						<use xlink:href="#svg-newsfeed"></use>
					</svg>
				</a>
			</li>
			@if (Session::get('student_id'))
			<li class="menu-item">
				<a class="menu-item-link text-tooltip-tfr" href="{{url('/trang-sinh-vien/'.Session::get('student_id'))}}" data-title="Trang cá nhân">
					<svg class="menu-item-link-icon icon-timeline">
						<use xlink:href="#svg-timeline"></use>
					</svg>
				</a>
			</li>
			@endif
			<li class="menu-item">
				<a class="menu-item-link text-tooltip-tfr" href="members.html" data-title="Liên hệ">
					<svg class="menu-item-link-icon icon-members">
						<use xlink:href="#svg-send-message"></use>
					</svg>
				</a>
			</li>
			<li class="menu-item">
				<a class="menu-item-link text-tooltip-tfr" href="members.html" data-title="FAQs">
					<svg class="menu-item-link-icon icon-forum">
						<use xlink:href="#svg-forum"></use>
					</svg>
				</a>
			</li>
			<li class="menu-item">
				<a class="menu-item-link text-tooltip-tfr" href="members.html" data-title="About us">
					<svg class="menu-item-link-icon icon-members">
						<use xlink:href="#svg-profile"></use>
					</svg>
				</a>
			</li>
		</ul>
	</nav>
	<nav id="navigation-widget" class="navigation-widget navigation-widget-desktop sidebar left hidden" data-simplebar>
		<ul class="menu">
			<li class="menu-item active">
				<a class="menu-item-link" href="{{url('/')}}">
					<svg class="menu-item-link-icon icon-newsfeed">
						<use xlink:href="#svg-newsfeed"></use>
					</svg>
					Trang câu hỏi
				</a>
			</li>
			<li class="menu-item">
				<a class="menu-item-link" href="{{url('/trang-sinh-vien/'.Session::get('student_id'))}}">
					<svg class="menu-item-link-icon icon-members">
						<use xlink:href="#svg-timeline"></use>
					</svg>
					Trang cá nhân
				</a>
			</li>
			<li class="menu-item">
				<a class="menu-item-link" href="members.html">
					<svg class="menu-item-link-icon icon-members">
						<use xlink:href="#svg-send-message"></use>
					</svg>
					Liên hệ
				</a>
			</li>
			<li class="menu-item">
				<a class="menu-item-link" href="members.html">
					<svg class="menu-item-link-icon icon-members">
						<use xlink:href="#svg-forum"></use>
					</svg>
					FAQs
				</a>
			</li>
			<li class="menu-item">
				<a class="menu-item-link" href="members.html">
					<svg class="menu-item-link-icon icon-members">
						<use xlink:href="#svg-profile"></use>
					</svg>
					About us
				</a>
			</li>
			<!-- /MENU ITEM -->
		</ul>
		<!-- /MENU -->
	</nav>
	<!-- /NAVIGATION WIDGET -->

	<!-- NAVIGATION WIDGET -->
	<nav id="navigation-widget-mobile" class="navigation-widget navigation-widget-mobile sidebar left hidden" data-simplebar>
		<!-- NAVIGATION WIDGET CLOSE BUTTON -->
		<div class="navigation-widget-close-button">
			<!-- NAVIGATION WIDGET CLOSE BUTTON ICON -->
			<svg class="navigation-widget-close-button-icon icon-back-arrow">
				<use xlink:href="#svg-back-arrow"></use>
			</svg>
			<!-- NAVIGATION WIDGET CLOSE BUTTON ICON -->
		</div>
		<!-- /NAVIGATION WIDGET CLOSE BUTTON -->

		<!-- NAVIGATION WIDGET INFO WRAP -->
		<div class="navigation-widget-info-wrap">
			<!-- NAVIGATION WIDGET INFO -->
			<div class="navigation-widget-info">
				<!-- USER AVATAR -->
				<a class="user-avatar small no-outline" href="profile-timeline.html">
					<!-- USER AVATAR PROGRESS -->
					<div class="user-avatar-progress">
						<!-- HEXAGON -->
						<div class="hexagon-progress-40-44"></div>
						<!-- /HEXAGON -->
					</div>
					<!-- /USER AVATAR PROGRESS -->

					<!-- USER AVATAR PROGRESS BORDER -->
					<div class="user-avatar-progress-border">
						<!-- HEXAGON -->
						<div class="hexagon-border-40-44"></div>
						<!-- /HEXAGON -->
					</div>
					<!-- /USER AVATAR PROGRESS BORDER -->
				</a>
				<!-- /USER AVATAR -->

				<!-- NAVIGATION WIDGET INFO TITLE -->
				<p class="navigation-widget-info-title"><a href="profile-timeline.html">@php
				echo Session::get('student_name');
			@endphp</a></p>
			<!-- /NAVIGATION WIDGET INFO TITLE -->

			<!-- NAVIGATION WIDGET INFO TEXT -->
			<p class="navigation-widget-info-text">Chào mừng bạn trở lại!</p>
			<!-- /NAVIGATION WIDGET INFO TEXT -->
		</div>
		<!-- /NAVIGATION WIDGET INFO -->

		<!-- NAVIGATION WIDGET BUTTON -->
		<p class="navigation-widget-info-button button small secondary">Đăng xuất</p>
		<!-- /NAVIGATION WIDGET BUTTON -->
	</div>
	<!-- /NAVIGATION WIDGET INFO WRAP -->

	<!-- NAVIGATION WIDGET SECTION TITLE -->
	<p class="navigation-widget-section-title">Menu</p>
	<!-- /NAVIGATION WIDGET SECTION TITLE -->

	<!-- MENU -->
	<ul class="menu">
		<!-- MENU ITEM -->
		<li class="menu-item active">
			<!-- MENU ITEM LINK -->
			<a class="menu-item-link" href="newsfeed.html">
				<!-- MENU ITEM LINK ICON -->
				<svg class="menu-item-link-icon icon-newsfeed">
					<use xlink:href="#svg-newsfeed"></use>
				</svg>
				<!-- /MENU ITEM LINK ICON -->
				Trang câu hỏi
			</a>
			<!-- /MENU ITEM LINK -->
		</li>
		<!-- /MENU ITEM -->

		<!-- MENU ITEM -->
		<li class="menu-item">
			<!-- MENU ITEM LINK -->
			<a class="menu-item-link" href="{{url('/trang-sinh-vien/'.Session::get('student_id'))}}">
				<!-- MENU ITEM LINK ICON -->
				<svg class="menu-item-link-icon icon-overview">
					<use xlink:href="#svg-overview"></use>
				</svg>
				<!-- /MENU ITEM LINK ICON -->
				Trang cá nhân
			</a>
			<!-- /MENU ITEM LINK -->
		</li>
		<!-- /MENU ITEM -->

		<!-- MENU ITEM -->
		<li class="menu-item">
			<!-- MENU ITEM LINK -->
			<a class="menu-item-link" href="groups.html">
				<!-- MENU ITEM LINK ICON -->
				<svg class="menu-item-link-icon icon-group">
					<use xlink:href="#svg-group"></use>
				</svg>
				<!-- /MENU ITEM LINK ICON -->
				Liên hệ
			</a>
			<!-- /MENU ITEM LINK -->
		</li>
		<!-- /MENU ITEM -->

		<!-- MENU ITEM -->
		<li class="menu-item">
			<!-- MENU ITEM LINK -->
			<a class="menu-item-link" href="members.html">
				<!-- MENU ITEM LINK ICON -->
				<svg class="menu-item-link-icon icon-members">
					<use xlink:href="#svg-members"></use>
				</svg>
				<!-- /MENU ITEM LINK ICON -->
				FAQs
			</a>
			<!-- /MENU ITEM LINK -->
		</li>
		<!-- /MENU ITEM -->

		<!-- MENU ITEM -->
		<li class="menu-item">
			<!-- MENU ITEM LINK -->
			<a class="menu-item-link" href="badges.html">
				<!-- MENU ITEM LINK ICON -->
				<svg class="menu-item-link-icon icon-badges">
					<use xlink:href="#svg-badges"></use>
				</svg>
				<!-- /MENU ITEM LINK ICON -->
				About us
			</a>
			<!-- /MENU ITEM LINK -->
		</li>
		<!-- /MENU ITEM -->
	</ul>
	<!-- /MENU -->
	@if (Session::get('student_id'))
	<!-- NAVIGATION WIDGET SECTION TITLE -->
	<p class="navigation-widget-section-title">Cá nhân</p>
	<!-- /NAVIGATION WIDGET SECTION TITLE -->

	<!-- NAVIGATION WIDGET SECTION LINK -->
	<a class="navigation-widget-section-link" href="{{url('/thong-tin-tai-khoan/'.Session::get('student_id'))}}">Thông tin tài khoản</a>
	<!-- /NAVIGATION WIDGET SECTION LINK -->

	<!-- NAVIGATION WIDGET SECTION LINK -->
	<a class="navigation-widget-section-link" href="{{url('/tat-ca-thong-bao')}}">Thông báo</a>

	<!-- NAVIGATION WIDGET SECTION LINK -->
	<a class="navigation-widget-section-link" href="{{url('/thay-doi-mat-khau/'.Session::get('student_id'))}}">Đổi mật khẩu</a>
	<!-- /NAVIGATION WIDGET SECTION LINK -->
	@endif
</nav>
<!-- /NAVIGATION WIDGET -->

<!-- HEADER -->
<header class="header">
	<!-- HEADER ACTIONS -->
	<div class="header-actions">
		<!-- HEADER BRAND -->
		<div class="header-brand">
			<!-- LOGO -->
			<div class="logo">
				<a href="{{url('/')}}" title="">
					<img src="{{asset('public/student/img/vlu.ico')}}" alt="">
				</a>
			</div>
			<!-- /LOGO -->

			<!-- HEADER BRAND TEXT -->
			<h1 class="header-brand-text">VLU</h1>
			<!-- /HEADER BRAND TEXT -->
		</div>
		<!-- /HEADER BRAND -->
	</div>
	<!-- /HEADER ACTIONS -->

	<!-- HEADER ACTIONS -->
	<div class="header-actions">
		<!-- SIDEMENU TRIGGER -->
		<div class="sidemenu-trigger navigation-widget-trigger">
			<!-- ICON GRID -->
			<svg class="icon-grid">
				<use xlink:href="#svg-grid"></use>
			</svg>
			<!-- /ICON GRID -->
		</div>
		<!-- /SIDEMENU TRIGGER -->

		<!-- MOBILEMENU TRIGGER -->
		<div class="mobilemenu-trigger navigation-widget-mobile-trigger">
			<!-- BURGER ICON -->
			<div class="burger-icon inverted">
				<!-- BURGER ICON BAR -->
				<div class="burger-icon-bar"></div>
				<!-- /BURGER ICON BAR -->

				<!-- BURGER ICON BAR -->
				<div class="burger-icon-bar"></div>
				<!-- /BURGER ICON BAR -->

				<!-- BURGER ICON BAR -->
				<div class="burger-icon-bar"></div>
				<!-- /BURGER ICON BAR -->
			</div>
			<!-- /BURGER ICON -->
		</div>
	</div>

	<div style="width: 70%;">
		<form action="{{url('/tim-kiem')}}" method="post">
			@csrf
			<div class="interactive-input dark">
				<input type="text" id="search-main" name="keywords_submit" placeholder="Tìm kiếm câu hỏi">
				<button type="submit" class="interactive-input-icon-wrap">
					<svg class="interactive-input-icon icon-magnifying-glass">
						<use xlink:href="#svg-magnifying-glass"></use>
					</svg>
				</button>
				<div class="interactive-input-action">
					<svg class="interactive-input-action-icon icon-cross-thin">
						<use xlink:href="#svg-cross-thin"></use>
					</svg>
				</div>
			</div>
		</form>
	</div>

	<!-- HEADER ACTIONS -->
	<div class="header-actions">
		<!-- ACTION LIST -->
		<div class="action-list dark">
			<!-- ACTION LIST ITEM WRAP -->
			<div class="action-list-item-wrap">
				<!-- ACTION LIST ITEM -->
				<div class="action-list-item unread header-dropdown-trigger">
					<!-- ACTION LIST ITEM ICON -->
					<svg class="action-list-item-icon icon-notification">
						<use xlink:href="#svg-notification"></use>
					</svg>
					<!-- /ACTION LIST ITEM ICON -->
				</div>
				<!-- /ACTION LIST ITEM -->

				<!-- DROPDOWN BOX -->
				<div class="dropdown-box header-dropdown">
					<!-- DROPDOWN BOX HEADER -->
					<div class="dropdown-box-header">
						<!-- DROPDOWN BOX HEADER TITLE -->
						<p class="dropdown-box-header-title">Thông báo</p>
						<!-- /DROPDOWN BOX HEADER TITLE -->

						<!-- DROPDOWN BOX HEADER ACTIONS -->
						<div class="dropdown-box-header-actions readallnofi">
							<!-- DROPDOWN BOX HEADER ACTION -->
							<p class="dropdown-box-header-action">Đọc tất cả</p>
							<!-- /DROPDOWN BOX HEADER ACTION -->
						</div>
						<!-- /DROPDOWN BOX HEADER ACTIONS -->
					</div>
					<!-- /DROPDOWN BOX HEADER -->

					<!-- DROPDOWN BOX LIST -->
					<div class="dropdown-box-list" data-simplebar>
						@foreach($nofi as $key => $nofication)
						@if ($nofication->postes->student_id==Session::get('student_id') && $nofication->nofication_status==0)
						<!-- DROPDOWN BOX LIST ITEM -->
						<div class="dropdown-box-list-item unread">
							<!-- USER STATUS -->
							<div class="user-status notification">
								<!-- USER STATUS AVATAR -->
								<a class="user-status-avatar" href="{{url('/trang-sinh-vien/'.$nofication->studentes->student_id)}}">
									<!-- USER AVATAR -->
									<div class="user-avatar small no-outline">
										@if ($nofication->studentes->student_info_id)
										<div class="hexagon-image-40-44" data-src="{{asset('public/student/img/avatar/'.$nofication->studentes->student_avatar)}}"></div>
										@else
										<div class="hexagon-image-40-44" data-src="{{asset('public/student/img/avatar/noavatar.jpg')}}"></div>
										@endif

										<!-- USER AVATAR PROGRESS -->
										<div class="user-avatar-progress">
											<!-- HEXAGON -->
											<div class="hexagon-progress-40-44"></div>
											<!-- /HEXAGON -->
										</div>
										<!-- /USER AVATAR PROGRESS -->

										<!-- USER AVATAR PROGRESS BORDER -->
										<div class="user-avatar-progress-border">
											<!-- HEXAGON -->
											<div class="hexagon-border-40-44"></div>
											<!-- /HEXAGON -->
										</div>
										<!-- /USER AVATAR PROGRESS BORDER -->
									</div>
									<!-- /USER AVATAR -->
								</a>
								<!-- /USER STATUS AVATAR -->
								@if ($nofication->nofication_kind=='Like')
								<!-- USER STATUS TITLE -->
								<p class="user-status-title"><a class="bold" href="{{url('/trang-sinh-vien/'.$nofication->studentes->student_id)}}">{{$nofication->studentes->student_name}}</a> đã thích bài viết <a class="highlighted" href="profile-timeline.html">{{$nofication->postes->post_title}}</a> của bạn</p>
								<!-- /USER STATUS TITLE -->

								<!-- USER STATUS TIMESTAMP -->
								<p class="user-status-timestamp">{{ \Carbon\Carbon::parse($nofication->nofication_created)->diffForHumans() }}</p>
								<!-- /USER STATUS TIMESTAMP -->

								<!-- USER STATUS ICON -->
								<div class="user-status-icon">
									<!-- ICON COMMENT -->
									<svg class="icon-thumbs-up">
										<use xlink:href="#svg-thumbs-up"></use>
									</svg>
									<!-- /ICON COMMENT -->
								</div>
								<!-- /USER STATUS ICON -->
								@elseif($nofication->nofication_kind=='Comment')
								<!-- USER STATUS TITLE -->
								<p class="user-status-title"><a class="bold" href="{{url('/trang-sinh-vien/'.$nofication->studentes->student_id)}}">{{$nofication->studentes->student_name}}</a> đã bình luận vào bài viết <a class="highlighted" href="profile-timeline.html">{{$nofication->postes->post_title}}</a> của bạn</p>
								<!-- /USER STATUS TITLE -->

								<!-- USER STATUS TIMESTAMP -->
								<p class="user-status-timestamp">{{ \Carbon\Carbon::parse($nofication->nofication_created)->diffForHumans() }}</p>
								<!-- /USER STATUS TIMESTAMP -->

								<!-- USER STATUS ICON -->
								<div class="user-status-icon">
									<!-- ICON COMMENT -->
									<svg class="icon-comment">
										<use xlink:href="#svg-comment"></use>
									</svg>
									<!-- /ICON COMMENT -->
								</div>
								<!-- /USER STATUS ICON -->
								@else
								<!-- USER STATUS TITLE -->
								<p class="user-status-title">Khoa đã trả lời câu hỏi <a class="highlighted" href="profile-timeline.html">{{$nofication->postes->post_title}}</a> của bạn</p>
								<!-- /USER STATUS TITLE -->

								<!-- USER STATUS TIMESTAMP -->
								<p class="user-status-timestamp">{{ \Carbon\Carbon::parse($nofication->nofication_created)->diffForHumans() }}</p>
								<!-- /USER STATUS TIMESTAMP -->

								<!-- USER STATUS ICON -->
								<div class="user-status-icon">
									<!-- ICON COMMENT -->
									<svg class="icon-thumbs-up">
										<use xlink:href="#svg-thumbs-up"></use>
									</svg>
									<!-- /ICON COMMENT -->
								</div>
								<!-- /USER STATUS ICON -->
								<!-- USER STATUS ICON -->
								<div class="user-status-icon">
									<!-- ICON COMMENT -->
									<svg class="icon-quests">
										<use xlink:href="#svg-quests"></use>
									</svg>
									<!-- /ICON COMMENT -->
								</div>
								<!-- /USER STATUS ICON -->
								@endif
							</div>
							<!-- /USER STATUS -->
						</div>
						<!-- /DROPDOWN BOX LIST ITEM -->
						@elseif ($nofication->postes->student_id==Session::get('student_id') && $nofication->nofication_status==1)
						<!-- DROPDOWN BOX LIST ITEM -->
						<div class="dropdown-box-list-item">
							<!-- USER STATUS -->
							<div class="user-status notification">
								<!-- USER STATUS AVATAR -->
								<a class="user-status-avatar" href="profile-timeline.html">
									<!-- USER AVATAR -->
									<div class="user-avatar small no-outline">
										<!-- USER AVATAR CONTENT -->
										<div class="user-avatar-content">
											<!-- HEXAGON -->
											<div class="hexagon-image-30-32" data-src="{{asset('public/student/img/avatar/03.jpg')}}"></div>
											<!-- /HEXAGON -->
										</div>
										<!-- /USER AVATAR CONTENT -->

										<!-- USER AVATAR PROGRESS -->
										<div class="user-avatar-progress">
											<!-- HEXAGON -->
											<div class="hexagon-progress-40-44"></div>
											<!-- /HEXAGON -->
										</div>
										<!-- /USER AVATAR PROGRESS -->

										<!-- USER AVATAR PROGRESS BORDER -->
										<div class="user-avatar-progress-border">
											<!-- HEXAGON -->
											<div class="hexagon-border-40-44"></div>
											<!-- /HEXAGON -->
										</div>
										<!-- /USER AVATAR PROGRESS BORDER -->

										<!-- USER AVATAR BADGE -->
										<div class="user-avatar-badge">
											<!-- USER AVATAR BADGE BORDER -->
											<div class="user-avatar-badge-border">
												<!-- HEXAGON -->
												<div class="hexagon-22-24"></div>
												<!-- /HEXAGON -->
											</div>
											<!-- /USER AVATAR BADGE BORDER -->

											<!-- USER AVATAR BADGE CONTENT -->
											<div class="user-avatar-badge-content">
												<!-- HEXAGON -->
												<div class="hexagon-dark-16-18"></div>
												<!-- /HEXAGON -->
											</div>
											<!-- /USER AVATAR BADGE CONTENT -->

											<!-- USER AVATAR BADGE TEXT -->
											<p class="user-avatar-badge-text">16</p>
											<!-- /USER AVATAR BADGE TEXT -->
										</div>
										<!-- /USER AVATAR BADGE -->
									</div>
									<!-- /USER AVATAR -->
								</a>
								<!-- /USER STATUS AVATAR -->
								@if ($nofication->nofication_kind=='Like')
								<!-- USER STATUS TITLE -->
								<p class="user-status-title"><a class="bold" href="profile-timeline.html">{{$nofication->studentes->student_name}}</a> đã thích bài viết <a class="highlighted" href="profile-timeline.html">{{$nofication->postes->post_title}}</a> của bạn</p>
								<!-- /USER STATUS TITLE -->

								<!-- USER STATUS TIMESTAMP -->
								<p class="user-status-timestamp">{{ \Carbon\Carbon::parse($nofication->nofication_created)->diffForHumans() }}</p>
								<!-- /USER STATUS TIMESTAMP -->

								<!-- USER STATUS ICON -->
								<div class="user-status-icon">
									<!-- ICON COMMENT -->
									<svg class="icon-thumbs-up">
										<use xlink:href="#svg-thumbs-up"></use>
									</svg>
									<!-- /ICON COMMENT -->
								</div>
								<!-- /USER STATUS ICON -->
								@elseif($nofication->nofication_kind=='Comment')
								<!-- USER STATUS TITLE -->
								<p class="user-status-title"><a class="bold" href="profile-timeline.html">{{$nofication->studentes->student_name}}</a> đã bình luận vào bài viết <a class="highlighted" href="profile-timeline.html">{{$nofication->postes->post_title}}</a> của bạn</p>
								<!-- /USER STATUS TITLE -->

								<!-- USER STATUS TIMESTAMP -->
								<p class="user-status-timestamp">{{ \Carbon\Carbon::parse($nofication->nofication_created)->diffForHumans() }}</p>
								<!-- /USER STATUS TIMESTAMP -->

								<!-- USER STATUS ICON -->
								<div class="user-status-icon">
									<!-- ICON COMMENT -->
									<svg class="icon-comment">
										<use xlink:href="#svg-comment"></use>
									</svg>
									<!-- /ICON COMMENT -->
								</div>
								<!-- /USER STATUS ICON -->
								@else
								<!-- USER STATUS TITLE -->
								<p class="user-status-title">Khoa đã trả lời câu hỏi <a class="highlighted" href="profile-timeline.html">{{$nofication->postes->post_title}}</a> của bạn</p>
								<!-- /USER STATUS TITLE -->

								<!-- USER STATUS TIMESTAMP -->
								<p class="user-status-timestamp">{{ \Carbon\Carbon::parse($nofication->nofication_created)->diffForHumans() }}</p>
								<!-- /USER STATUS TIMESTAMP -->

								<!-- USER STATUS ICON -->
								<div class="user-status-icon">
									<!-- ICON COMMENT -->
									<svg class="icon-thumbs-up">
										<use xlink:href="#svg-thumbs-up"></use>
									</svg>
									<!-- /ICON COMMENT -->
								</div>
								<!-- /USER STATUS ICON -->
								<!-- USER STATUS ICON -->
								<div class="user-status-icon">
									<!-- ICON COMMENT -->
									<svg class="icon-quests">
										<use xlink:href="#svg-quests"></use>
									</svg>
									<!-- /ICON COMMENT -->
								</div>
								<!-- /USER STATUS ICON -->
								@endif
							</div>
							<!-- /USER STATUS -->
						</div>
						<!-- /DROPDOWN BOX LIST ITEM -->
						@endif
						@endforeach
					</div>
					<!-- /DROPDOWN BOX LIST -->

					<!-- DROPDOWN BOX BUTTON -->
					<a class="dropdown-box-button secondary" href="{{url('/tat-ca-thong-bao')}}">Xem tất cả thông báo</a>
					<!-- /DROPDOWN BOX BUTTON -->
				</div>
				<!-- /DROPDOWN BOX -->
			</div>
			<!-- /ACTION LIST ITEM WRAP -->
		</div>
		<!-- /ACTION LIST -->

		<!-- ACTION ITEM WRAP -->
		<div class="action-item-wrap">
			<!-- ACTION ITEM -->
			<div class="action-item dark header-settings-dropdown-trigger">
				<!-- ACTION ITEM ICON -->
				<svg class="action-item-icon icon-settings">
					<use xlink:href="#svg-settings"></use>
				</svg>
				<!-- /ACTION ITEM ICON -->
			</div>
			<!-- /ACTION ITEM -->

			<!-- DROPDOWN NAVIGATION -->
			<div class="dropdown-navigation header-settings-dropdown">
				<!-- DROPDOWN NAVIGATION HEADER -->
				<div class="dropdown-navigation-header">
					<!-- USER STATUS -->
					<div class="user-status" style="padding: 0px;">
						@php
						if(Session::get('student_id')){
							@endphp
							<!-- USER STATUS TITLE -->
							<p class="user-status-title"><span class="bold">Xin chào, @php
							echo Session::get('student_name');
						@endphp !</span></p>
						@php
					}else{
						@endphp
						<p class="user-status-title"><span class="bold">Xin chào,
						Bạn cần đăng nhập để sử dụng các tính năng !</span></p>
						@php
					}
					@endphp
					<!-- /USER STATUS TITLE -->

					<!-- USER STATUS TEXT -->
					<p class="user-status-text small"><a style="word-wrap: break-word;" href="profile-timeline.html">@php
					echo Session::get('student_email');
				@endphp</a></p>
				<!-- /USER STATUS TEXT -->
			</div>
			<!-- /USER STATUS -->
		</div>
		<!-- /DROPDOWN NAVIGATION HEADER -->
		@php
		if(Session::get('student_id')){
			@endphp
			<!-- DROPDOWN NAVIGATION CATEGORY -->
			<p class="dropdown-navigation-category">Cá nhân</p>
			<!-- /DROPDOWN NAVIGATION CATEGORY -->

			<!-- DROPDOWN NAVIGATION LINK -->
			<a class="dropdown-navigation-link" href="{{url('/thong-tin-tai-khoan/'.Session::get('student_id'))}}">Thông tin tài khoản</a>
			<!-- /DROPDOWN NAVIGATION LINK -->

			<!-- DROPDOWN NAVIGATION LINK -->
			<a class="dropdown-navigation-link" href="{{url('/tat-ca-thong-bao')}}">Thông báo</a>
			<!-- /DROPDOWN NAVIGATION LINK -->

			<!-- DROPDOWN NAVIGATION LINK -->
			<a class="dropdown-navigation-link" href="{{url('/thay-doi-mat-khau/'.Session::get('student_id'))}}">Thay đổi mật khẩu</a>

			<!-- DROPDOWN NAVIGATION BUTTON -->
			<a href="{{url('/dang-xuat')}}" title="">
				<button class="dropdown-navigation-button button small secondary">Đăng xuất</button>
			</a>
			@php
		}else{
			@endphp
			<a href="{{url('login')}}" title="">
				<button class="dropdown-navigation-button button small secondary">Đăng nhập</button>
			</a>
			@php
		}
		@endphp
		<!-- /DROPDOWN NAVIGATION BUTTON -->
	</div>
	<!-- /DROPDOWN NAVIGATION -->
</div>
<!-- /ACTION ITEM WRAP -->
</div>
<!-- /HEADER ACTIONS -->
</header>
<!-- /HEADER -->

<!-- FLOATY BAR -->
<aside class="floaty-bar">
	<!-- BAR ACTIONS -->
	<div class="bar-actions">
		<!-- PROGRESS STAT -->
		<div class="progress-stat">
			<!-- BAR PROGRESS WRAP -->
			<div class="bar-progress-wrap">
				<!-- BAR PROGRESS INFO -->
				<p class="bar-progress-info">Next: <span class="bar-progress-text"></span></p>
				<!-- /BAR PROGRESS INFO -->
			</div>
			<!-- /BAR PROGRESS WRAP -->

			<!-- PROGRESS STAT BAR -->
			<div id="logged-user-level-cp" class="progress-stat-bar"></div>
			<!-- /PROGRESS STAT BAR -->
		</div>
		<!-- /PROGRESS STAT -->
	</div>
	<!-- /BAR ACTIONS -->

	<!-- BAR ACTIONS -->
	<div class="bar-actions">
		<!-- ACTION LIST -->
		<div class="action-list dark">
			<!-- ACTION LIST ITEM -->
			<a class="action-list-item" href="marketplace-cart.html">
				<!-- ACTION LIST ITEM ICON -->
				<svg class="action-list-item-icon icon-shopping-bag">
					<use xlink:href="#svg-shopping-bag"></use>
				</svg>
				<!-- /ACTION LIST ITEM ICON -->
			</a>
			<!-- /ACTION LIST ITEM -->

			<!-- ACTION LIST ITEM -->
			<a class="action-list-item" href="hub-profile-requests.html">
				<!-- ACTION LIST ITEM ICON -->
				<svg class="action-list-item-icon icon-friend">
					<use xlink:href="#svg-friend"></use>
				</svg>
				<!-- /ACTION LIST ITEM ICON -->
			</a>
			<!-- /ACTION LIST ITEM -->

			<!-- ACTION LIST ITEM -->
			<a class="action-list-item" href="hub-profile-messages.html">
				<!-- ACTION LIST ITEM ICON -->
				<svg class="action-list-item-icon icon-messages">
					<use xlink:href="#svg-messages"></use>
				</svg>
				<!-- /ACTION LIST ITEM ICON -->
			</a>
			<!-- /ACTION LIST ITEM -->

			<!-- ACTION LIST ITEM -->
			<a class="action-list-item unread" href="hub-profile-notifications.html">
				<!-- ACTION LIST ITEM ICON -->
				<svg class="action-list-item-icon icon-notification">
					<use xlink:href="#svg-notification"></use>
				</svg>
				<!-- /ACTION LIST ITEM ICON -->
			</a>
			<!-- /ACTION LIST ITEM -->
		</div>
		<!-- /ACTION LIST -->

		<!-- ACTION ITEM WRAP -->
		<a class="action-item-wrap" href="hub-profile-info.html">
			<!-- ACTION ITEM -->
			<div class="action-item dark">
				<!-- ACTION ITEM ICON -->
				<svg class="action-item-icon icon-settings">
					<use xlink:href="#svg-settings"></use>
				</svg>
				<!-- /ACTION ITEM ICON -->
			</div>
			<!-- /ACTION ITEM -->
		</a>
		<!-- /ACTION ITEM WRAP -->
	</div>
	<!-- /BAR ACTIONS -->
</aside>
<!-- /FLOATY BAR -->

<!-- CONTENT GRID -->


<div class="content-grid">
	@yield('content_header')
	@yield('content_body')
</div>
<!-- /CONTENT GRID -->

<!-- FOOTER WRAP-->
<footer class="footer-wrap">
	<!-- FOOTER -->
	<div class="footer content-grid" style="transform: translate(0px, 0px); margin-top: 50px;  transition: transform 0.4s ease-in-out 0s;">
		<!-- FOOTER TOP -->
		<div class="footer-top">
			<!-- FOOTER INFO -->
			<div class="footer-info">
				<!-- FOOTER INFO BRAND -->
				<div class="footer-info-brand">
					<!-- FOOTER INFO BRAND IMAGE -->
					<img class="footer-info-brand-image" src="https://odindesignthemes.com/vikinger-theme/wp-content/uploads/2020/09/vkfooterlogo.png" alt="brand-image">
					<!-- /FOOTER INFO BRAND IMAGE -->

					<!-- FOOTER INFO BRAND INFO -->
					<div class="footer-info-brand-info">
						<!-- FOOTER INFO BRAND TITLE -->
						<p class="footer-info-brand-title">Vikinger</p>
						<!-- /FOOTER INFO BRAND TITLE -->

						<!-- FOOTER INFO BRAND SUBTITLE -->
						<p class="footer-info-brand-subtitle" style="color: white;">BuddyPress Social Community</p>
						<!-- /FOOTER INFO BRAND SUBTITLE -->
					</div>
					<!-- FOOTER INFO BRAND INFO -->
				</div>
				<!-- /FOOTER INFO BRAND -->

				<!-- FOOTER INFO TEXT -->
				<p class="footer-info-text" style="color: white;">Vikinger Social Community was created in 2020, designed to be a new and exciting way to bring people together!</p>
				<!-- /FOOTER INFO TEXT -->


				<!-- SOCIAL ITEMS -->
				<div class="social-items ">
					<!-- SOCIAL ITEM -->
					<a class="social-item facebook " href="https://www.facebook.com/Odin-Design-Themes-and-Templates-1985202918413398/" target="_blank">

						<!-- ICON SVG -->
						<svg class="icon-facebook social-item-icon">
							<use href="#svg-facebook"></use>
						</svg>
						<!-- ICON SVG -->  
					</a>
					<!-- /SOCIAL ITEM -->
					<!-- SOCIAL ITEM -->
					<a class="social-item twitter " href="https://twitter.com/odindesign_tw" target="_blank">

						<!-- ICON SVG -->
						<svg class="icon-twitter social-item-icon">
							<use href="#svg-twitter"></use>
						</svg>
						<!-- ICON SVG -->  
					</a>
					<!-- /SOCIAL ITEM -->
					<!-- SOCIAL ITEM -->
					<a class="social-item instagram " href="https://www.instagram.com/odindesign_themes/" target="_blank">

						<!-- ICON SVG -->
						<svg class="icon-instagram social-item-icon">
							<use href="#svg-instagram"></use>
						</svg>
						<!-- ICON SVG -->  
					</a>
					<!-- /SOCIAL ITEM -->
					<!-- SOCIAL ITEM -->
					<a class="social-item youtube " href="https://youtube.com/channel/UCae_4SDcDGCgHHW6wd7aBAg" target="_blank">

						<!-- ICON SVG -->
						<svg class="icon-youtube social-item-icon">
							<use href="#svg-youtube"></use>
						</svg>
						<!-- ICON SVG -->  
					</a>
					<!-- /SOCIAL ITEM -->
				</div>
				<!-- /SOCIAL ITEMS -->      
			</div>
			<!-- /FOOTER INFO -->

			<!-- FOOTER NAVIGATION -->
			<div class="footer-navigation">

				<!-- NAVIGATION SECTION -->
				<div class="navigation-section">
					<!-- NAVIGATION SECTION TITLE -->
					<p class="navigation-section-title">BuddyPress</p>
					<!-- /NAVIGATION SECTION TITLE -->

					<!-- NAVIGATION SECTION LINKS -->
					<div class="navigation-section-links">
						<!-- NAVIGATION SECTION LINK -->
						<a class="navigation-section-link" href="https://odindesignthemes.com/vikinger-theme/members/odindesign-themes/">Profile Timeline</a>
						<!-- /NAVIGATION SECTION LINK -->
						<!-- NAVIGATION SECTION LINK -->
						<a class="navigation-section-link" href="https://odindesignthemes.com/vikinger-theme/members/odindesign-themes/about/">Profile About</a>
						<!-- /NAVIGATION SECTION LINK -->
						<!-- NAVIGATION SECTION LINK -->
						<a class="navigation-section-link" href="https://odindesignthemes.com/vikinger-theme/members/odindesign-themes/friends/">Profile Friends</a>
						<!-- /NAVIGATION SECTION LINK -->
						<!-- NAVIGATION SECTION LINK -->
						<a class="navigation-section-link" href="https://odindesignthemes.com/vikinger-theme/members/odindesign-themes/groups/">Profile Groups</a>
						<!-- /NAVIGATION SECTION LINK -->
						<!-- NAVIGATION SECTION LINK -->
						<a class="navigation-section-link" href="https://odindesignthemes.com/vikinger-theme/members/odindesign-themes/posts/">Profile Blog Posts</a>
						<!-- /NAVIGATION SECTION LINK -->
						<!-- NAVIGATION SECTION LINK -->
						<a class="navigation-section-link" href="https://odindesignthemes.com/vikinger-theme/members/odindesign-themes/photos/">Profile Photos</a>
						<!-- /NAVIGATION SECTION LINK -->
						<!-- NAVIGATION SECTION LINK -->
						<a class="navigation-section-link" href="https://odindesignthemes.com/vikinger-theme/activity/">Activity</a>
						<!-- /NAVIGATION SECTION LINK -->
						<!-- NAVIGATION SECTION LINK -->
						<a class="navigation-section-link" href="https://odindesignthemes.com/vikinger-theme/members/">Members</a>
						<!-- /NAVIGATION SECTION LINK -->
						<!-- NAVIGATION SECTION LINK -->
						<a class="navigation-section-link" href="https://odindesignthemes.com/vikinger-theme/groups/">Groups</a>
						<!-- /NAVIGATION SECTION LINK -->
					</div>
					<!-- /NAVIGATION SECTION LINKS -->
				</div>
				<!-- /NAVIGATION SECTION -->
				<!-- NAVIGATION SECTION -->
				<div class="navigation-section">
					<!-- NAVIGATION SECTION TITLE -->
					<p class="navigation-section-title">GamiPress</p>
					<!-- /NAVIGATION SECTION TITLE -->

					<!-- NAVIGATION SECTION LINKS -->
					<div class="navigation-section-links">
						<!-- NAVIGATION SECTION LINK -->
						<a class="navigation-section-link" href="https://odindesignthemes.com/vikinger-theme/badges/">Badges</a>
						<!-- /NAVIGATION SECTION LINK -->
						<!-- NAVIGATION SECTION LINK -->
						<a class="navigation-section-link" href="https://odindesignthemes.com/vikinger-theme/members/odindesign-themes/badges/">Profile Badges</a>
						<!-- /NAVIGATION SECTION LINK -->
						<!-- NAVIGATION SECTION LINK -->
						<a class="navigation-section-link" href="https://odindesignthemes.com/vikinger-theme/quests/">Quests</a>
						<!-- /NAVIGATION SECTION LINK -->
						<!-- NAVIGATION SECTION LINK -->
						<a class="navigation-section-link" href="https://odindesignthemes.com/vikinger-theme/members/odindesign-themes/quests/">Profile Quests</a>
						<!-- /NAVIGATION SECTION LINK -->
						<!-- NAVIGATION SECTION LINK -->
						<a class="navigation-section-link" href="https://odindesignthemes.com/vikinger-theme/ranks/">Ranks</a>
						<!-- /NAVIGATION SECTION LINK -->
						<!-- NAVIGATION SECTION LINK -->
						<a class="navigation-section-link" href="https://odindesignthemes.com/vikinger-theme/members/odindesign-themes/ranks/">Profile Rank</a>
						<!-- /NAVIGATION SECTION LINK -->
						<!-- NAVIGATION SECTION LINK -->
						<a class="navigation-section-link" href="https://odindesignthemes.com/vikinger-theme/credits/">Credits</a>
						<!-- /NAVIGATION SECTION LINK -->
						<!-- NAVIGATION SECTION LINK -->
						<a class="navigation-section-link" href="https://odindesignthemes.com/vikinger-theme/members/odindesign-themes/credits/">Profile Credits</a>
						<!-- /NAVIGATION SECTION LINK -->
					</div>
					<!-- /NAVIGATION SECTION LINKS -->
				</div>
				<!-- /NAVIGATION SECTION -->
				<!-- NAVIGATION SECTION -->
				<div class="navigation-section">
					<!-- NAVIGATION SECTION TITLE -->
					<p class="navigation-section-title">bbPress</p>
					<!-- /NAVIGATION SECTION TITLE -->

					<!-- NAVIGATION SECTION LINKS -->
					<div class="navigation-section-links">
						<!-- NAVIGATION SECTION LINK -->
						<a class="navigation-section-link" href="https://odindesignthemes.com/vikinger-theme/forums/">Forums</a>
						<!-- /NAVIGATION SECTION LINK -->
						<!-- NAVIGATION SECTION LINK -->
						<a class="navigation-section-link" href="https://odindesignthemes.com/vikinger-theme/forums/forum/animation-watchtower/">SubForums</a>
						<!-- /NAVIGATION SECTION LINK -->
						<!-- NAVIGATION SECTION LINK -->
						<a class="navigation-section-link" href="https://odindesignthemes.com/vikinger-theme/forums/topic/lets-discuss-the-current-state-of-the-comics-cinematic-universe/">Open Topic</a>
						<!-- /NAVIGATION SECTION LINK -->
						<!-- NAVIGATION SECTION LINK -->
						<a class="navigation-section-link" href="https://odindesignthemes.com/vikinger-theme/members/odindesign-themes/forums/">Profile Forum Activity</a>
						<!-- /NAVIGATION SECTION LINK -->
						<!-- NAVIGATION SECTION LINK -->
						<a class="navigation-section-link" href="https://odindesignthemes.com/vikinger-theme/members/odindesign-themes/forums/replies/">Profile Forum Replies</a>
						<!-- /NAVIGATION SECTION LINK -->
						<!-- NAVIGATION SECTION LINK -->
						<a class="navigation-section-link" href="https://odindesignthemes.com/vikinger-theme/members/odindesign-themes/forums/engagements/">Profile Forum Engagement</a>
						<!-- /NAVIGATION SECTION LINK -->
						<!-- NAVIGATION SECTION LINK -->
						<a class="navigation-section-link" href="https://odindesignthemes.com/vikinger-theme/members/odindesign-themes/forums/favorites/">Profile Forum Favorites</a>
						<!-- /NAVIGATION SECTION LINK -->
					</div>
					<!-- /NAVIGATION SECTION LINKS -->
				</div>
				<!-- /NAVIGATION SECTION -->
				<!-- NAVIGATION SECTION -->
				<div class="navigation-section">
					<!-- NAVIGATION SECTION TITLE -->
					<p class="navigation-section-title">More Links</p>
					<!-- /NAVIGATION SECTION TITLE -->

					<!-- NAVIGATION SECTION LINKS -->
					<div class="navigation-section-links">
						<!-- NAVIGATION SECTION LINK -->
						<a class="navigation-section-link" href="https://odindesignthemes.com/vikinger-theme/groups/cosplayers-of-the-world/">Group Timeline</a>
						<!-- /NAVIGATION SECTION LINK -->
						<!-- NAVIGATION SECTION LINK -->
						<a class="navigation-section-link" href="https://odindesignthemes.com/vikinger-theme/groups/cosplayers-of-the-world/members/">Group Members</a>
						<!-- /NAVIGATION SECTION LINK -->
						<!-- NAVIGATION SECTION LINK -->
						<a class="navigation-section-link" href="https://odindesignthemes.com/vikinger-theme/groups/cosplayers-of-the-world/photos/">Group Photos</a>
						<!-- /NAVIGATION SECTION LINK -->
						<!-- NAVIGATION SECTION LINK -->
						<a class="navigation-section-link" href="https://odindesignthemes.com/vikinger-theme/landing/">Landing</a>
						<!-- /NAVIGATION SECTION LINK -->
						<!-- NAVIGATION SECTION LINK -->
						<a class="navigation-section-link" href="https://odindesignthemes.com/vikinger-theme/blog/">Blog</a>
						<!-- /NAVIGATION SECTION LINK -->
						<!-- NAVIGATION SECTION LINK -->
						<a class="navigation-section-link" href="https://odindesignthemes.com/vikinger-theme/groups/gaming-watchtower/">Private Group</a>
						<!-- /NAVIGATION SECTION LINK -->
					</div>
					<!-- /NAVIGATION SECTION LINKS -->
				</div>
			</div>
			<!-- /FOOTER NAVIGATION -->
		</div>
		<!-- /FOOTER TOP -->

		<!-- FOOTER BOTTOM -->
		<div class="footer-bottom">
			<!-- FOOTER BOTTOM TEXT -->
			<p class="footer-bottom-text">© 2020, Vikinger Theme by <a href="https://themeforest.net/user/odin_design" target="_blank">Odin_Design</a></p>
			<!-- /FOOTER BOTTOM TEXT -->

			<!-- FOOTER BOTTOM TEXT -->
			<p class="footer-bottom-text">BuddyPress + GamiPress</p>
			<!-- /FOOTER BOTTOM TEXT -->
		</div>
		<!-- /FOOTER BOTTOM -->
	</div>
	<!-- /FOOTER -->
</footer>
<!-- /FOOTER WRAP-->

<div class="popup-box small popup-event-creation" style="max-width: 650px; z-index:600;">
	<div class="popup-close-button popup-event-creation-trigger">
		<svg class="popup-close-button-icon icon-cross">
			<use xlink:href="#svg-cross"></use>
		</svg>
	</div>
	<center><p class="popup-box-title">Câu trả lời của BCN Khoa</p></center>
	<form class="form">
		@csrf
		
		<div class="form-row">
			<div class="form-item">
				<div class="form-input small">
					<p style="background-color: #1d2333; padding: 0 6px; font-size: 14px; top: -6px; left: 12px; color: #9aa4bf;">Nội dung</p>
					<textarea  id="formContent" rows="10" style="height: 350px; width: 600px;" name="post_reply" disabled></textarea>
				</div>
			</div>
		</div>
		<div class="popup-box-actions medium void">
			
		</div>
	</form>
</div>

<!-- app -->
<script src="{{asset('public/student/js/utils/app.js')}}"></script>
<!-- page loader -->
<script src="{{asset('public/student/js/utils/page-loader.js')}}"></script>
<!-- simplebar -->
<script src="{{asset('public/student/js/vendor/simplebar.min.js')}}"></script>
<!-- liquidify -->
<script src="{{asset('public/student/js/utils/liquidify.js')}}"></script>
<!-- XM_Plugins -->
<script src="{{asset('public/student/js/vendor/xm_plugins.min.js')}}"></script>
<!-- tiny-slider -->
<script src="{{asset('public/student/js/vendor/tiny-slider.min.js')}}"></script>
<!-- chartJS -->
<script src="{{asset('public/student/js/vendor/Chart.bundle.min.js')}}"></script>
<!-- global.hexagons -->
<script src="{{asset('public/student/js/global/global.hexagons.js')}}"></script>
<!-- global.tooltips -->
<script src="{{asset('public/student/js/global/global.tooltips.js')}}"></script>
<!-- global.popups -->
<script src="{{asset('public/student/js/global/global.popups.js')}}"></script>
<!-- global.charts -->
<script src="{{asset('public/student/js/global/global.charts.js')}}"></script>
<!-- header -->
<script src="{{asset('public/student/js/header/header.js')}}"></script>
<!-- sidebar -->
<script src="{{asset('public/student/js/sidebar/sidebar.js')}}"></script>
<!-- content -->
<script src="{{asset('public/student/js/content/content.js')}}"></script>
<!-- form.utils -->
<script src="{{asset('public/student/js/form/form.utils.js')}}"></script>
<!-- SVG icons -->
<script src="{{asset('public/student/js/utils/svg-loader.js')}}"></script>

<script src="{{asset('public/student/js/sweetalert.min.js')}}"></script>
<script src="{{asset('public/student/js/jquery.min.js')}}"></script>

<script>
	function getPost(post_id){
		$.get('{{url('/xem-cau-tra-loi-khoa/')}}'+'/'+post_id, function(post_d){
			$("#formContent").val(post_d.post_reply);
		});
	}
</script>

<script type="text/javascript">
	$(document).ready(function(){
		$('.postQ').click(function(){
			var dm = "dm", 
			du = "đụ", 
			cc = "cc",
			cl = "cl", 
			cac = "cặc", 
			lon = "lồn",
			dit = "địt",
			dmm = "dmm",
			cdl = "cdl",
			clgv = "clgv",
			clm = "clm",
			deo = "đéo",
			dcm = "dcm",
			vl = "vl",
			vai = "vãi",
			di = "đĩ";
			var post_title = $('.title').val();
			var category_id = $('.category').val();
			var post_content = $('.content').val();
			var _token = $('input[name="_token"]').val();

			if(post_title=='' || category_id==0 || post_content==''){
				swal("Vui lòng không để trống!", "", "warning");
			}else if(post_content.includes(dm)||post_content.includes(du)||post_content.includes(cc)||post_content.includes(cac)||post_content.includes(lon)||post_content.includes(dit)||post_content.includes(dmm)||post_content.includes(cdl)||post_content.includes(clgv)||post_content.includes(clm)||post_content.includes(deo)||post_content.includes(di)||post_content.includes(dcm)||post_content.includes(vai)||post_content.includes(vl)){
				swal("Nội dung có chứa từ không phù hợp!", "", "error");
			}else if(post_title.includes(dm)||post_title.includes(du)||post_title.includes(cc)||post_title.includes(cac)||post_title.includes(lon)||post_title.includes(dit)||post_title.includes(dmm)||post_title.includes(cdl)||post_title.includes(clgv)||post_title.includes(clm)||post_title.includes(deo)||post_title.includes(di)
				||post_title.includes(dcm)||post_title.includes(vai)||post_title.includes(vl)){
				swal("Nội dung có chứa từ không phù hợp!", "", "error");
			}else{
				$.ajax({
					url:'{{ url('/dang-cau-hoi') }}',
					method: 'POST',
					data: {post_title:post_title, category_id:category_id, post_content:post_content, _token:_token},
					success:function(data){
						swal("Đăng thành công!", "", "success");
					}
				});
				window.setTimeout(function(){
					location.reload();
				},3000);
			}
		});
		$('.postD').click(function(){
			var id = $(this).data('id_post');
			swal({
				title: "Bạn có chắc chắn muốn xóa?",
				text: "",
				type: "warning",
				showCancelButton: true,
				confirmButtonClass:"btn-danger",
				cancelButtonText: "Không",
				confirmButtonClass: "btn-success",
				confirmButtonText: "Chắc chắn!",
				closeOnConfirm: false,
				closeOnCancel: false
			},
			function(isConfirm){
				if (isConfirm) {
					$.ajax({
						url: '{{url('/xoa-cau-hoi/')}}',
						method:'GET',
						data:{id:id},
						success:function(response){						
							swal("Bạn đã xóa thành công!", "", "success");
						}
					});
					window.setTimeout(function(){
						location.reload();
					},2000);
				}else{
					swal("Hủy bỏ xóa", "", "error");
				}
				
			});
		});
	});
</script>

<script type="text/javascript">
	$(document).ready(function(){
		$('.postC').click(function(){
			var id = $(this).data('id_post');
			var dm = "dm", 
			du = "đụ", 
			cc = "cc",
			cl = "cl", 
			cac = "cặc", 
			lon = "lồn",
			dit = "địt",
			dmm = "dmm",
			cdl = "cdl",
			clgv = "clgv",
			clm = "clm",
			deo = "đéo",
			dcm = "dcm",
			vl = "vl",
			vai = "vãi",
			di = "đĩ";
			var comment_content = $('.cmtcontent_'+id).val();
			var _token = $('input[name="_token"]').val();
			if(comment_content==''){
				swal("Vui lòng không để trống!", "", "warning");
			}else if(comment_content.includes(dm)||comment_content.includes(du)||comment_content.includes(cc)||comment_content.includes(cac)||comment_content.includes(lon)||comment_content.includes(dit)||comment_content.includes(dmm)||comment_content.includes(cdl)||comment_content.includes(clgv)||comment_content.includes(clm)||comment_content.includes(deo)||comment_content.includes(di)||comment_content.includes(dcm)||comment_content.includes(vai)||comment_content.includes(vl)){
				swal("Nội dung có chứa từ không phù hợp!", "", "error");
			}else{
				$.ajax({
					url:'{{ url('/binh-luan/') }}'+'/'+id,
					method: 'POST',
					data: {comment_content:comment_content, id:id, _token:_token},
					success:function(data){
						swal("", "", "success");
					}
				});
				window.setTimeout(function(){
					location.reload();
				},3000);
			}
		});

		$('.postCD').click(function(){
			var id = $(this).data('id_cmt');
			swal({
				title: "Bạn có chắc chắn muốn xóa?",
				text: "",
				type: "warning",
				showCancelButton: true,
				confirmButtonClass:"btn-danger",
				cancelButtonText: "Không",
				confirmButtonClass: "btn-success",
				confirmButtonText: "Chắc chắn!",
				closeOnConfirm: false,
				closeOnCancel: false
			},
			function(isConfirm){
				if (isConfirm) {
					$.ajax({
						url: '{{url('/xoa-binh-luan/')}}',
						method:'GET',
						data:{id:id},
						success:function(response){						
							swal("Bạn đã xóa thành công!", "", "success");
						}
					});
					window.setTimeout(function(){
						location.reload();
					},2000);
				}else{
					swal("Hủy bỏ xóa", "", "error");
				}
				
			});
		});
	});
</script>

<script type="text/javascript">
	$(document).ready(function(){
		$('.showCmt').click(function(){
			var id = $(this).data('id_a');
			$(".lineCmt_"+id).slice(0,3).show();
			$("#commentId_"+id).toggle();
			$('.loadM_'+id).click(function (e) {
				e.preventDefault();
				$(".lineCmt_"+id+":hidden").slice(0, 3).slideDown();
				if ($(".lineCmt_"+id+":hidden").length == 0) {
					$('.loadM_'+id).css('visibility', 'hidden');
				}
				$('html,body').animate({
					scrollTop: $(this).offset().top
				}, 1000);
			});
		});
	});
</script>

<script type="text/javascript" language="javascript">
	$(document).ready(function(){
		$('.postL').click(function(e){
			e.preventDefault();
			var id = $(this).data('id_like');
			var like_quantity = 1;
			var elm = $(this).parents('.optionsocial');
			var _token = $('input[name="_token"]').val();
			$.ajax({
				url:'{{ url('/thich-bai-viet/') }}'+'/'+id,
				method: 'POST',
				data: {like_quantity:like_quantity, id:id, _token:_token},
				success:function(data){
					elm.find('.likelike').text(data.liking);
					if (elm.find('.likeunlike').hasClass('active')){
						elm.find('.likeunlike').removeClass('active');
					}else{
						elm.find('.likeunlike').addClass('active');
					}
					if (elm.find('.unlikelike').hasClass('active')){
						elm.find('.unlikelike').removeClass('active');
					}else{
						elm.find('.unlikelike').addClass('active');
					}
				}
			})
		});
	});
</script>

<script type="text/javascript" language="javascript">
	$(document).ready(function(){
		$('.btnReadnofi').click(function(e){
			var id = $(this).data('id_readnofi');
			var elm = $(this).parents('.account-hub-content');
			var _token = $('input[name="_token"]').val();
			$.ajax({
				url:'{{ url('/danh-dau-da-doc/') }}'+'/'+id,
				method: 'POST',
				data: {id:id, _token:_token},
				success:function(data){
					if (elm.find('.nofi_'+id).hasClass('unread')){
						elm.find('.nofi_'+id).removeClass('unread');
					}
				}
			})
		});

		$('.btnDelnofi').click(function(e){
			var id = $(this).data('id_delnofi');
			var elm = $(this).parents('.account-hub-content');
			var _token = $('input[name="_token"]').val();
			$.ajax({
				url:'{{ url('/xoa-thong-bao') }}',
				method: 'GET',
				data: {id:id, _token:_token},
			})
			window.setTimeout(function(){
				location.reload();
			},500);
		});

		$('.btnReadall').click(function(e){
			var elm = $(this).parents('.account-hub-content');
			var _token = $('input[name="_token"]').val();
			$.ajax({
				url:'{{ url('/doc-tat-ca') }}',
				method: 'POST',
				data: {_token:_token},
				success:function(data){
					if (elm.find('.notification-box').hasClass('unread')){
						elm.find('.notification-box').removeClass('unread');
					}
				}
			})
		});

		$('.readallnofi').click(function(e){
			var elm = $(this).parents('.header-dropdown');
			var _token = $('input[name="_token"]').val();
			$.ajax({
				url:'{{ url('/doc-tat-ca') }}',
				method: 'POST',
				data: {_token:_token},
				success:function(data){
					if (elm.find('.dropdown-box-list-item').hasClass('unread')){
						elm.find('.dropdown-box-list-item').removeClass('unread');
					}
				}
			})
		});
	});
</script>

</body>
</html>