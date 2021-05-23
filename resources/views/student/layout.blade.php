<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- bootstrap 4.3.1 -->
	<link rel="stylesheet" href="{{asset('public/student/css/vendor/bootstrap.min.css')}}">
	<!-- styles -->
	<link rel="stylesheet" href="{{asset('public/student/css/styles.min.css')}}">
	<!-- simplebar styles -->
	<link rel="stylesheet" href="{{asset('public/student/css/vendor/simplebar.css')}}">
	<!-- tiny-slider styles -->
	<link rel="stylesheet" href="{{asset('public/student/css/vendor/tiny-slider.css')}}">

	<link rel="stylesheet" href="{{asset('public/student/css/sweetalert.css')}}">

	<link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css')}}">

	<link rel="stylesheet" href="{{asset('public/student/css/raw/styles.css')}}">
	
	<link rel="icon" href="{{asset('public/student/img/vlu.ico')}}">
	<title>Trang chủ</title>
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
	<!-- MENU -->
	<ul class="menu small">
		<!-- MENU ITEM -->
		<li class="menu-item active">
			<!-- MENU ITEM LINK -->
			<a class="menu-item-link text-tooltip-tfr" href="{{url('/')}}" data-title="Trang câu hỏi">
				<!-- MENU ITEM LINK ICON -->
				<svg class="menu-item-link-icon icon-newsfeed">
					<use xlink:href="#svg-newsfeed"></use>
				</svg>
				<!-- /MENU ITEM LINK ICON -->
			</a>
			<!-- /MENU ITEM LINK -->
		</li>
		<!-- /MENU ITEM -->

		<!-- MENU ITEM -->
		<li class="menu-item">
			<!-- MENU ITEM LINK -->
			<a class="menu-item-link text-tooltip-tfr" href="overview.html" data-title="Overview">
				<!-- MENU ITEM LINK ICON -->
				<svg class="menu-item-link-icon icon-overview">
					<use xlink:href="#svg-overview"></use>
				</svg>
				<!-- /MENU ITEM LINK ICON -->
			</a>
			<!-- /MENU ITEM LINK -->
		</li>
		<!-- /MENU ITEM -->

		<!-- MENU ITEM -->
		<li class="menu-item">
			<!-- MENU ITEM LINK -->
			<a class="menu-item-link text-tooltip-tfr" href="groups.html" data-title="Groups">
				<!-- MENU ITEM LINK ICON -->
				<svg class="menu-item-link-icon icon-group">
					<use xlink:href="#svg-group"></use>
				</svg>
				<!-- /MENU ITEM LINK ICON -->
			</a>
			<!-- /MENU ITEM LINK -->
		</li>
		<!-- /MENU ITEM -->

		<!-- MENU ITEM -->
		<li class="menu-item">
			<!-- MENU ITEM LINK -->
			<a class="menu-item-link text-tooltip-tfr" href="members.html" data-title="Members">
				<!-- MENU ITEM LINK ICON -->
				<svg class="menu-item-link-icon icon-members">
					<use xlink:href="#svg-members"></use>
				</svg>
				<!-- /MENU ITEM LINK ICON -->
			</a>
			<!-- /MENU ITEM LINK -->
		</li>
		<!-- /MENU ITEM -->

		<!-- MENU ITEM -->
		<li class="menu-item">
			<!-- MENU ITEM LINK -->
			<a class="menu-item-link text-tooltip-tfr" href="badges.html" data-title="Badges">
				<!-- MENU ITEM LINK ICON -->
				<svg class="menu-item-link-icon icon-badges">
					<use xlink:href="#svg-badges"></use>
				</svg>
				<!-- /MENU ITEM LINK ICON -->
			</a>
			<!-- /MENU ITEM LINK -->
		</li>
		<!-- /MENU ITEM -->

		<!-- MENU ITEM -->
		<li class="menu-item">
			<!-- MENU ITEM LINK -->
			<a class="menu-item-link text-tooltip-tfr" href="quests.html" data-title="Quests">
				<!-- MENU ITEM LINK ICON -->
				<svg class="menu-item-link-icon icon-quests">
					<use xlink:href="#svg-quests"></use>
				</svg>
				<!-- /MENU ITEM LINK ICON -->
			</a>
			<!-- /MENU ITEM LINK -->
		</li>
		<!-- /MENU ITEM -->

		<!-- MENU ITEM -->
		<li class="menu-item">
			<!-- MENU ITEM LINK -->
			<a class="menu-item-link text-tooltip-tfr" href="streams.html" data-title="Streams">
				<!-- MENU ITEM LINK ICON -->
				<svg class="menu-item-link-icon icon-streams">
					<use xlink:href="#svg-streams"></use>
				</svg>
				<!-- /MENU ITEM LINK ICON -->
			</a>
			<!-- /MENU ITEM LINK -->
		</li>
		<!-- /MENU ITEM -->

		<!-- MENU ITEM -->
		<li class="menu-item">
			<!-- MENU ITEM LINK -->
			<a class="menu-item-link text-tooltip-tfr" href="events.html" data-title="Events">
				<!-- MENU ITEM LINK ICON -->
				<svg class="menu-item-link-icon icon-events">
					<use xlink:href="#svg-events"></use>
				</svg>
				<!-- /MENU ITEM LINK ICON -->
			</a>
			<!-- /MENU ITEM LINK -->
		</li>
		<!-- /MENU ITEM -->

		<!-- MENU ITEM -->
		<li class="menu-item">
			<!-- MENU ITEM LINK -->
			<a class="menu-item-link text-tooltip-tfr" href="forums.html" data-title="Forums">
				<!-- MENU ITEM LINK ICON -->
				<svg class="menu-item-link-icon icon-forums">
					<use xlink:href="#svg-forums"></use>
				</svg>
				<!-- /MENU ITEM LINK ICON -->
			</a>
			<!-- /MENU ITEM LINK -->
		</li>
		<!-- /MENU ITEM -->

		<!-- MENU ITEM -->
		<li class="menu-item">
			<!-- MENU ITEM LINK -->
			<a class="menu-item-link text-tooltip-tfr" href="marketplace.html" data-title="Marketplace">
				<!-- MENU ITEM LINK ICON -->
				<svg class="menu-item-link-icon icon-marketplace">
					<use xlink:href="#svg-marketplace"></use>
				</svg>
				<!-- /MENU ITEM LINK ICON -->
			</a>
			<!-- /MENU ITEM LINK -->
		</li>
		<!-- /MENU ITEM -->
	</ul>
	<!-- /MENU -->
</nav>
<!-- /NAVIGATION WIDGET -->

<!-- NAVIGATION WIDGET -->
<nav id="navigation-widget" class="navigation-widget navigation-widget-desktop sidebar left hidden" data-simplebar>
	<!-- MENU -->
	<ul class="menu">
		<!-- MENU ITEM -->
		<li class="menu-item active">
			<!-- MENU ITEM LINK -->
			<a class="menu-item-link" href="{{url('/')}}">
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
			<a class="menu-item-link" href="overview.html">
				<!-- MENU ITEM LINK ICON -->
				<svg class="menu-item-link-icon icon-overview">
					<use xlink:href="#svg-overview"></use>
				</svg>
				<!-- /MENU ITEM LINK ICON -->
				Overview
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
				Groups
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
				Members
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
				Badges
			</a>
			<!-- /MENU ITEM LINK -->
		</li>
		<!-- /MENU ITEM -->

		<!-- MENU ITEM -->
		<li class="menu-item">
			<!-- MENU ITEM LINK -->
			<a class="menu-item-link" href="quests.html">
				<!-- MENU ITEM LINK ICON -->
				<svg class="menu-item-link-icon icon-quests">
					<use xlink:href="#svg-quests"></use>
				</svg>
				<!-- /MENU ITEM LINK ICON -->
				Quests
			</a>
			<!-- /MENU ITEM LINK -->
		</li>
		<!-- /MENU ITEM -->

		<!-- MENU ITEM -->
		<li class="menu-item">
			<!-- MENU ITEM LINK -->
			<a class="menu-item-link" href="streams.html">
				<!-- MENU ITEM LINK ICON -->
				<svg class="menu-item-link-icon icon-streams">
					<use xlink:href="#svg-streams"></use>
				</svg>
				<!-- /MENU ITEM LINK ICON -->
				Streams
			</a>
			<!-- /MENU ITEM LINK -->
		</li>
		<!-- /MENU ITEM -->

		<!-- MENU ITEM -->
		<li class="menu-item">
			<!-- MENU ITEM LINK -->
			<a class="menu-item-link" href="events.html">
				<!-- MENU ITEM LINK ICON -->
				<svg class="menu-item-link-icon icon-events">
					<use xlink:href="#svg-events"></use>
				</svg>
				<!-- /MENU ITEM LINK ICON -->
				Events
			</a>
			<!-- /MENU ITEM LINK -->
		</li>
		<!-- /MENU ITEM -->

		<!-- MENU ITEM -->
		<li class="menu-item">
			<!-- MENU ITEM LINK -->
			<a class="menu-item-link" href="forums.html">
				<!-- MENU ITEM LINK ICON -->
				<svg class="menu-item-link-icon icon-forums">
					<use xlink:href="#svg-forums"></use>
				</svg>
				<!-- /MENU ITEM LINK ICON -->
				Forums
			</a>
			<!-- /MENU ITEM LINK -->
		</li>
		<!-- /MENU ITEM -->

		<!-- MENU ITEM -->
		<li class="menu-item">
			<!-- MENU ITEM LINK -->
			<a class="menu-item-link" href="marketplace.html">
				<!-- MENU ITEM LINK ICON -->
				<svg class="menu-item-link-icon icon-marketplace">
					<use xlink:href="#svg-marketplace"></use>
				</svg>
				<!-- /MENU ITEM LINK ICON -->
				Marketplace
			</a>
			<!-- /MENU ITEM LINK -->
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
				<!-- USER AVATAR CONTENT -->
				<div class="user-avatar-content">
					<!-- HEXAGON -->
					<div class="hexagon-image-30-32" data-src="{{asset('public/student/img/avatar/01.jpg')}}')}}"></div>
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
					<p class="user-avatar-badge-text">24</p>
					<!-- /USER AVATAR BADGE TEXT -->
				</div>
				<!-- /USER AVATAR BADGE -->
			</a>
			<!-- /USER AVATAR -->

			<!-- NAVIGATION WIDGET INFO TITLE -->
			<p class="navigation-widget-info-title"><a href="profile-timeline.html">Marina Valentine</a></p>
			<!-- /NAVIGATION WIDGET INFO TITLE -->

			<!-- NAVIGATION WIDGET INFO TEXT -->
			<p class="navigation-widget-info-text">Welcome Back!</p>
			<!-- /NAVIGATION WIDGET INFO TEXT -->
		</div>
		<!-- /NAVIGATION WIDGET INFO -->

		<!-- NAVIGATION WIDGET BUTTON -->
		<p class="navigation-widget-info-button button small secondary">Logout</p>
		<!-- /NAVIGATION WIDGET BUTTON -->
	</div>
	<!-- /NAVIGATION WIDGET INFO WRAP -->

	<!-- NAVIGATION WIDGET SECTION TITLE -->
	<p class="navigation-widget-section-title">Sections</p>
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
				Newsfeed
			</a>
			<!-- /MENU ITEM LINK -->
		</li>
		<!-- /MENU ITEM -->

		<!-- MENU ITEM -->
		<li class="menu-item">
			<!-- MENU ITEM LINK -->
			<a class="menu-item-link" href="overview.html">
				<!-- MENU ITEM LINK ICON -->
				<svg class="menu-item-link-icon icon-overview">
					<use xlink:href="#svg-overview"></use>
				</svg>
				<!-- /MENU ITEM LINK ICON -->
				Overview
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
				Groups
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
				Members
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
				Badges
			</a>
			<!-- /MENU ITEM LINK -->
		</li>
		<!-- /MENU ITEM -->

		<!-- MENU ITEM -->
		<li class="menu-item">
			<!-- MENU ITEM LINK -->
			<a class="menu-item-link" href="quests.html">
				<!-- MENU ITEM LINK ICON -->
				<svg class="menu-item-link-icon icon-quests">
					<use xlink:href="#svg-quests"></use>
				</svg>
				<!-- /MENU ITEM LINK ICON -->
				Quests
			</a>
			<!-- /MENU ITEM LINK -->
		</li>
		<!-- /MENU ITEM -->

		<!-- MENU ITEM -->
		<li class="menu-item">
			<!-- MENU ITEM LINK -->
			<a class="menu-item-link" href="streams.html">
				<!-- MENU ITEM LINK ICON -->
				<svg class="menu-item-link-icon icon-streams">
					<use xlink:href="#svg-streams"></use>
				</svg>
				<!-- /MENU ITEM LINK ICON -->
				Streams
			</a>
			<!-- /MENU ITEM LINK -->
		</li>
		<!-- /MENU ITEM -->

		<!-- MENU ITEM -->
		<li class="menu-item">
			<!-- MENU ITEM LINK -->
			<a class="menu-item-link" href="events.html">
				<!-- MENU ITEM LINK ICON -->
				<svg class="menu-item-link-icon icon-events">
					<use xlink:href="#svg-events"></use>
				</svg>
				<!-- /MENU ITEM LINK ICON -->
				Events
			</a>
			<!-- /MENU ITEM LINK -->
		</li>
		<!-- /MENU ITEM -->

		<!-- MENU ITEM -->
		<li class="menu-item">
			<!-- MENU ITEM LINK -->
			<a class="menu-item-link" href="forums.html">
				<!-- MENU ITEM LINK ICON -->
				<svg class="menu-item-link-icon icon-forums">
					<use xlink:href="#svg-forums"></use>
				</svg>
				<!-- /MENU ITEM LINK ICON -->
				Forums
			</a>
			<!-- /MENU ITEM LINK -->
		</li>
		<!-- /MENU ITEM -->

		<!-- MENU ITEM -->
		<li class="menu-item">
			<!-- MENU ITEM LINK -->
			<a class="menu-item-link" href="marketplace.html">
				<!-- MENU ITEM LINK ICON -->
				<svg class="menu-item-link-icon icon-marketplace">
					<use xlink:href="#svg-marketplace"></use>
				</svg>
				<!-- /MENU ITEM LINK ICON -->
				Marketplace
			</a>
			<!-- /MENU ITEM LINK -->
		</li>
		<!-- /MENU ITEM -->
	</ul>
	<!-- /MENU -->

	<!-- NAVIGATION WIDGET SECTION TITLE -->
	<p class="navigation-widget-section-title">My Profile</p>
	<!-- /NAVIGATION WIDGET SECTION TITLE -->

	<!-- NAVIGATION WIDGET SECTION LINK -->
	<a class="navigation-widget-section-link" href="hub-profile-info.html">Profile Info</a>
	<!-- /NAVIGATION WIDGET SECTION LINK -->

	<!-- NAVIGATION WIDGET SECTION LINK -->
	<a class="navigation-widget-section-link" href="hub-profile-social.html">Social &amp; Stream</a>
	<!-- /NAVIGATION WIDGET SECTION LINK -->

	<!-- NAVIGATION WIDGET SECTION LINK -->
	<a class="navigation-widget-section-link" href="hub-profile-notifications.html">Notifications</a>

	<!-- NAVIGATION WIDGET SECTION TITLE -->
	<p class="navigation-widget-section-title">Account</p>
	<!-- /NAVIGATION WIDGET SECTION TITLE -->

	<!-- NAVIGATION WIDGET SECTION LINK -->
	<a class="navigation-widget-section-link" href="hub-account-info.html">Account Info</a>
	<!-- /NAVIGATION WIDGET SECTION LINK -->

	<!-- NAVIGATION WIDGET SECTION LINK -->
	<a class="navigation-widget-section-link" href="hub-account-password.html">Change Password</a>
	<!-- /NAVIGATION WIDGET SECTION LINK -->

	<!-- NAVIGATION WIDGET SECTION LINK -->
	<a class="navigation-widget-section-link" href="hub-account-settings.html">General Settings</a>

	<!-- NAVIGATION WIDGET SECTION LINK -->
	<a class="navigation-widget-section-link" href="#">Home</a>

	<!-- NAVIGATION WIDGET SECTION LINK -->
	<a class="navigation-widget-section-link" href="#">Faqs</a>
	<!-- /NAVIGATION WIDGET SECTION LINK -->

	<!-- NAVIGATION WIDGET SECTION LINK -->
	<a class="navigation-widget-section-link" href="#">About Us</a>

	<!-- NAVIGATION WIDGET SECTION LINK -->
	<a class="navigation-widget-section-link" href="#">Contact Us</a>
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

		<nav class="navigation">
			<ul class="menu-main">
				<li class="menu-main-item">
					<a class="menu-main-item-link" style="font-size: 15px;" href="{{url('/')}}">Trang chủ</a>
				</li>
				<li class="menu-main-item">
					<a class="menu-main-item-link" style="font-size: 15px;" href="#">Liên hệ</a>
				</li>
				<li class="menu-main-item">
					<a class="menu-main-item-link" style="font-size: 15px;" href="#">Faqs</a>
				</li>
				<li class="menu-main-item">
					<a class="menu-main-item-link" style="font-size: 15px;" href="#">About us</a>
				</li>
			</ul>
		</nav>
	</div>

	<div class="header-actions search-bar">
		<!-- INTERACTIVE INPUT -->
		<div class="interactive-input dark">
			<input type="text" id="search-main" name="search_main" placeholder="Tìm kiếm câu hỏi">
			<!-- INTERACTIVE INPUT ICON WRAP -->
			<div class="interactive-input-icon-wrap">
				<!-- INTERACTIVE INPUT ICON -->
				<svg class="interactive-input-icon icon-magnifying-glass">
					<use xlink:href="#svg-magnifying-glass"></use>
				</svg>
				<!-- /INTERACTIVE INPUT ICON -->
			</div>
			<!-- /INTERACTIVE INPUT ICON WRAP -->

			<!-- INTERACTIVE INPUT ACTION -->
			<div class="interactive-input-action">
				<!-- INTERACTIVE INPUT ACTION ICON -->
				<svg class="interactive-input-action-icon icon-cross-thin">
					<use xlink:href="#svg-cross-thin"></use>
				</svg>
				<!-- /INTERACTIVE INPUT ACTION ICON -->
			</div>
			<!-- /INTERACTIVE INPUT ACTION -->
		</div>
		<!-- /INTERACTIVE INPUT -->

		<!-- DROPDOWN BOX -->
		<div class="dropdown-box padding-bottom-small header-search-dropdown">
			<!-- DROPDOWN BOX CATEGORY -->
			<div class="dropdown-box-category">
				<!-- DROPDOWN BOX CATEGORY TITLE -->
				<p class="dropdown-box-category-title">Members</p>
				<!-- /DROPDOWN BOX CATEGORY TITLE -->
			</div>
			<!-- /DROPDOWN BOX CATEGORY -->

			<!-- DROPDOWN BOX LIST -->
			<div class="dropdown-box-list small no-scroll">
				<!-- DROPDOWN BOX LIST ITEM -->
				<a class="dropdown-box-list-item" href="profile-timeline.html">
					<!-- USER STATUS -->
					<div class="user-status notification">
						<!-- USER STATUS AVATAR -->
						<div class="user-status-avatar">
							<!-- USER AVATAR -->
							<div class="user-avatar small no-outline">
								<!-- USER AVATAR CONTENT -->
								<div class="user-avatar-content">
									<!-- HEXAGON -->
									<div class="hexagon-image-30-32" data-src="{{asset('public/student/img/avatar/05.jpg')}}"></div>
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
									<p class="user-avatar-badge-text">12</p>
									<!-- /USER AVATAR BADGE TEXT -->
								</div>
								<!-- /USER AVATAR BADGE -->
							</div>
							<!-- /USER AVATAR -->
						</div>
						<!-- /USER STATUS AVATAR -->

						<!-- USER STATUS TITLE -->
						<p class="user-status-title"><span class="bold">Neko Bebop</span></p>
						<!-- /USER STATUS TITLE -->

						<!-- USER STATUS TEXT -->
						<p class="user-status-text">1 friends in common</p>
						<!-- /USER STATUS TEXT -->

						<!-- USER STATUS ICON -->
						<div class="user-status-icon">
							<!-- ICON FRIEND -->
							<svg class="icon-friend">
								<use xlink:href="#svg-friend"></use>
							</svg>
							<!-- /ICON FRIEND -->
						</div>
						<!-- /USER STATUS ICON -->
					</div>
					<!-- /USER STATUS -->
				</a>
				<!-- /DROPDOWN BOX LIST ITEM -->

				<!-- DROPDOWN BOX LIST ITEM -->
				<a class="dropdown-box-list-item" href="profile-timeline.html">
					<!-- USER STATUS -->
					<div class="user-status notification">
						<!-- USER STATUS AVATAR -->
						<div class="user-status-avatar">
							<!-- USER AVATAR -->
							<div class="user-avatar small no-outline">
								<!-- USER AVATAR CONTENT -->
								<div class="user-avatar-content">
									<!-- HEXAGON -->
									<div class="hexagon-image-30-32" data-src="{{asset('public/student/img/avatar/15.jpg')}}"></div>
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
									<p class="user-avatar-badge-text">7</p>
									<!-- /USER AVATAR BADGE TEXT -->
								</div>
								<!-- /USER AVATAR BADGE -->
							</div>
							<!-- /USER AVATAR -->
						</div>
						<!-- /USER STATUS AVATAR -->

						<!-- USER STATUS TITLE -->
						<p class="user-status-title"><span class="bold">Tim Rogers</span></p>
						<!-- /USER STATUS TITLE -->

						<!-- USER STATUS TEXT -->
						<p class="user-status-text">4 friends in common</p>
						<!-- /USER STATUS TEXT -->

						<!-- USER STATUS ICON -->
						<div class="user-status-icon">
							<!-- ICON FRIEND -->
							<svg class="icon-friend">
								<use xlink:href="#svg-friend"></use>
							</svg>
							<!-- /ICON FRIEND -->
						</div>
						<!-- /USER STATUS ICON -->
					</div>
					<!-- /USER STATUS -->
				</a>
				<!-- /DROPDOWN BOX LIST ITEM -->
			</div>
			<!-- /DROPDOWN BOX LIST -->

			<!-- DROPDOWN BOX CATEGORY -->
			<div class="dropdown-box-category">
				<!-- DROPDOWN BOX CATEGORY TITLE -->
				<p class="dropdown-box-category-title">Groups</p>
				<!-- /DROPDOWN BOX CATEGORY TITLE -->
			</div>
			<!-- /DROPDOWN BOX CATEGORY -->

			<!-- DROPDOWN BOX LIST -->
			<div class="dropdown-box-list small no-scroll">
				<!-- DROPDOWN BOX LIST ITEM -->
				<a class="dropdown-box-list-item" href="group-timeline.html">
					<!-- USER STATUS -->
					<div class="user-status notification">
						<!-- USER STATUS AVATAR -->
						<div class="user-status-avatar">
							<!-- USER AVATAR -->
							<div class="user-avatar small no-border">
								<!-- USER AVATAR CONTENT -->
								<div class="user-avatar-content">
									<!-- HEXAGON -->
									<div class="hexagon-image-40-44" data-src="{{asset('public/student/img/avatar/24.jpg')}}"></div>
									<!-- /HEXAGON -->
								</div>
								<!-- /USER AVATAR CONTENT -->
							</div>
							<!-- /USER AVATAR -->
						</div>
						<!-- /USER STATUS AVATAR -->

						<!-- USER STATUS TITLE -->
						<p class="user-status-title"><span class="bold">Cosplayers of the World</span></p>
						<!-- /USER STATUS TITLE -->

						<!-- USER STATUS TEXT -->
						<p class="user-status-text">139 members</p>
						<!-- /USER STATUS TEXT -->

						<!-- USER STATUS ICON -->
						<div class="user-status-icon">
							<!-- ICON GROUP -->
							<svg class="icon-group">
								<use xlink:href="#svg-group"></use>
							</svg>
							<!-- /ICON GROUP -->
						</div>
						<!-- /USER STATUS ICON -->
					</div>
					<!-- /USER STATUS -->
				</a>
				<!-- /DROPDOWN BOX LIST ITEM -->
			</div>
			<!-- /DROPDOWN BOX LIST -->

			<!-- DROPDOWN BOX CATEGORY -->
			<div class="dropdown-box-category">
				<!-- DROPDOWN BOX CATEGORY TITLE -->
				<p class="dropdown-box-category-title">Marketplace</p>
				<!-- /DROPDOWN BOX CATEGORY TITLE -->
			</div>
			<!-- /DROPDOWN BOX CATEGORY -->

			<!-- DROPDOWN BOX LIST -->
			<div class="dropdown-box-list small no-scroll">
				<!-- DROPDOWN BOX LIST ITEM -->
				<a class="dropdown-box-list-item" href="marketplace-product.html">
					<!-- USER STATUS -->
					<div class="user-status no-padding-top">
						<!-- USER STATUS AVATAR -->
						<div class="user-status-avatar">
							<!-- PICTURE -->
							<figure class="picture small round liquid">
								<img src="{{asset('public/student/img/marketplace/items/07.jpg')}}" alt="item-07">
							</figure>
							<!-- /PICTURE -->
						</div>
						<!-- /USER STATUS AVATAR -->

						<!-- USER STATUS TITLE -->
						<p class="user-status-title"><span class="bold">Mercenaries White Frame</span></p>
						<!-- /USER STATUS TITLE -->

						<!-- USER STATUS TEXT -->
						<p class="user-status-text">By Neko Bebop</p>
						<!-- /USER STATUS TEXT -->

						<!-- USER STATUS ICON -->
						<div class="user-status-icon">
							<!-- ICON MARKETPLACE -->
							<svg class="icon-marketplace">
								<use xlink:href="#svg-marketplace"></use>
							</svg>
							<!-- /ICON MARKETPLACE -->
						</div>
						<!-- /USER STATUS ICON -->
					</div>
					<!-- /USER STATUS -->
				</a>
				<!-- /DROPDOWN BOX LIST ITEM -->
			</div>
			<!-- /DROPDOWN BOX LIST -->
		</div>
		<!-- /DROPDOWN BOX -->
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
						<div class="dropdown-box-header-actions">
							<!-- DROPDOWN BOX HEADER ACTION -->
							<p class="dropdown-box-header-action">Đọc tất cả</p>
							<!-- /DROPDOWN BOX HEADER ACTION -->

							<!-- DROPDOWN BOX HEADER ACTION -->
							<p class="dropdown-box-header-action">Cài đặt</p>
							<!-- /DROPDOWN BOX HEADER ACTION -->
						</div>
						<!-- /DROPDOWN BOX HEADER ACTIONS -->
					</div>
					<!-- /DROPDOWN BOX HEADER -->

					<!-- DROPDOWN BOX LIST -->
					<div class="dropdown-box-list" data-simplebar>
						<!-- DROPDOWN BOX LIST ITEM -->
						<div class="dropdown-box-list-item unread">
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

								<!-- USER STATUS TITLE -->
								<p class="user-status-title"><a class="bold" href="profile-timeline.html">Nick Grissom</a> posted a comment on your <a class="highlighted" href="profile-timeline.html">status update</a></p>
								<!-- /USER STATUS TITLE -->

								<!-- USER STATUS TIMESTAMP -->
								<p class="user-status-timestamp">2 minutes ago</p>
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
							</div>
							<!-- /USER STATUS -->
						</div>
						<!-- /DROPDOWN BOX LIST ITEM -->

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
											<div class="hexagon-image-30-32" data-src="{{asset('public/student/img/avatar/07.jpg')}}"></div>
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
											<p class="user-avatar-badge-text">26</p>
											<!-- /USER AVATAR BADGE TEXT -->
										</div>
										<!-- /USER AVATAR BADGE -->
									</div>
									<!-- /USER AVATAR -->
								</a>
								<!-- /USER STATUS AVATAR -->

								<!-- USER STATUS TITLE -->
								<p class="user-status-title"><a class="bold" href="profile-timeline.html">Sarah Diamond</a> left a like <img class="reaction" src="{{asset('public/student/img/reaction/like.png')}}" alt="reaction-like"> reaction on your <a class="highlighted" href="profile-timeline.html">status update</a></p>
								<!-- /USER STATUS TITLE -->

								<!-- USER STATUS TIMESTAMP -->
								<p class="user-status-timestamp">17 minutes ago</p>
								<!-- /USER STATUS TIMESTAMP -->

								<!-- USER STATUS ICON -->
								<div class="user-status-icon">
									<!-- ICON THUMBS UP -->
									<svg class="icon-thumbs-up">
										<use xlink:href="#svg-thumbs-up"></use>
									</svg>
									<!-- /ICON THUMBS UP -->
								</div>
								<!-- /USER STATUS ICON -->
							</div>
							<!-- /USER STATUS -->
						</div>
						<!-- /DROPDOWN BOX LIST ITEM -->

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
											<div class="hexagon-image-30-32" data-src="{{asset('public/student/img/avatar/02.jpg')}}"></div>
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
											<p class="user-avatar-badge-text">13</p>
											<!-- /USER AVATAR BADGE TEXT -->
										</div>
										<!-- /USER AVATAR BADGE -->
									</div>
									<!-- /USER AVATAR -->
								</a>
								<!-- /USER STATUS AVATAR -->

								<!-- USER STATUS TITLE -->
								<p class="user-status-title"><a class="bold" href="profile-timeline.html">Destroy Dex</a> posted a comment on your <a class="highlighted" href="profile-photos.html">photo</a></p>
								<!-- /USER STATUS TITLE -->

								<!-- USER STATUS TIMESTAMP -->
								<p class="user-status-timestamp">31 minutes ago</p>
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
							</div>
							<!-- /USER STATUS -->
						</div>
						<!-- /DROPDOWN BOX LIST ITEM -->

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
											<div class="hexagon-image-30-32" data-src="{{asset('public/student/img/avatar/10.jpg')}}"></div>
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
											<p class="user-avatar-badge-text">5</p>
											<!-- /USER AVATAR BADGE TEXT -->
										</div>
										<!-- /USER AVATAR BADGE -->
									</div>
									<!-- /USER AVATAR -->
								</a>
								<!-- /USER STATUS AVATAR -->

								<!-- USER STATUS TITLE -->
								<p class="user-status-title"><a class="bold" href="profile-timeline.html">The Green Goo</a> left a love <img class="reaction" src="{{asset('public/student/img/reaction/love.png')}}" alt="reaction-love"> reaction on your <a class="highlighted" href="profile-timeline.html">status update</a></p>
								<!-- /USER STATUS TITLE -->

								<!-- USER STATUS TIMESTAMP -->
								<p class="user-status-timestamp">2 hours ago</p>
								<!-- /USER STATUS TIMESTAMP -->

								<!-- USER STATUS ICON -->
								<div class="user-status-icon">
									<!-- ICON THUMBS UP -->
									<svg class="icon-thumbs-up">
										<use xlink:href="#svg-thumbs-up"></use>
									</svg>
									<!-- /ICON THUMBS UP -->
								</div>
								<!-- /USER STATUS ICON -->
							</div>
							<!-- /USER STATUS -->
						</div>
						<!-- /DROPDOWN BOX LIST ITEM -->

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
											<div class="hexagon-image-30-32" data-src="{{asset('public/student/img/avatar/05.jpg')}}"></div>
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
											<p class="user-avatar-badge-text">12</p>
											<!-- /USER AVATAR BADGE TEXT -->
										</div>
										<!-- /USER AVATAR BADGE -->
									</div>
									<!-- /USER AVATAR -->
								</a>
								<!-- /USER STATUS AVATAR -->

								<!-- USER STATUS TITLE -->
								<p class="user-status-title"><a class="bold" href="profile-timeline.html">Neko Bebop</a> posted a comment on your <a class="highlighted" href="profile-timeline.html">status update</a></p>
								<!-- /USER STATUS TITLE -->

								<!-- USER STATUS TIMESTAMP -->
								<p class="user-status-timestamp">3 hours ago</p>
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
							</div>
							<!-- /USER STATUS -->
						</div>
						<!-- /DROPDOWN BOX LIST ITEM -->
					</div>
					<!-- /DROPDOWN BOX LIST -->

					<!-- DROPDOWN BOX BUTTON -->
					<a class="dropdown-box-button secondary" href="hub-profile-notifications.html">View all Notifications</a>
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

						<!-- USER STATUS TITLE -->
						<p class="user-status-title"><span class="bold">Xin chào, @php
						echo Session::get('student_name');
					@endphp !</span></p>
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

		<!-- DROPDOWN NAVIGATION CATEGORY -->
		<p class="dropdown-navigation-category">Cá nhân</p>
		<!-- /DROPDOWN NAVIGATION CATEGORY -->

		<!-- DROPDOWN NAVIGATION LINK -->
		<a class="dropdown-navigation-link" href="hub-profile-info.html">Thông tin cá nhân</a>
		<!-- /DROPDOWN NAVIGATION LINK -->

		<!-- DROPDOWN NAVIGATION LINK -->
		<a class="dropdown-navigation-link" href="hub-profile-social.html">Xã hội &amp; Stream</a>
		<!-- /DROPDOWN NAVIGATION LINK -->

		<!-- DROPDOWN NAVIGATION LINK -->
		<a class="dropdown-navigation-link" href="hub-profile-notifications.html">Thông báo</a>

		<!-- DROPDOWN NAVIGATION CATEGORY -->
		<p class="dropdown-navigation-category">Tài khoản</p>
		<!-- /DROPDOWN NAVIGATION CATEGORY -->

		<!-- DROPDOWN NAVIGATION LINK -->
		<a class="dropdown-navigation-link" href="hub-account-info.html">Thông tin tài khoản</a>
		<!-- /DROPDOWN NAVIGATION LINK -->

		<!-- DROPDOWN NAVIGATION LINK -->
		<a class="dropdown-navigation-link" href="hub-account-password.html">Thay đổi mật khẩu</a>
		<!-- /DROPDOWN NAVIGATION LINK -->

		<!-- DROPDOWN NAVIGATION LINK -->
		<a class="dropdown-navigation-link" href="hub-account-settings.html">Cài đặt chung</a>

		<!-- DROPDOWN NAVIGATION BUTTON -->
		@php
		if(Session::get('student_id')){
			@endphp
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
@yield('content')
<!-- /CONTENT GRID -->

<!-- POPUP PICTURE -->
<div class="popup-picture">
	<!-- POPUP CLOSE BUTTON -->
	<div class="popup-close-button popup-picture-trigger">
		<!-- POPUP CLOSE BUTTON ICON -->
		<svg class="popup-close-button-icon icon-cross">
			<use xlink:href="#svg-cross"></use>
		</svg>
		<!-- /POPUP CLOSE BUTTON ICON -->
	</div>
	<!-- /POPUP CLOSE BUTTON -->

	<!-- WIDGET BOX -->
	<div class="widget-box no-padding">
		<!-- WIDGET BOX SCROLLABLE -->
		<div class="widget-box-scrollable" data-simplebar>
			<!-- WIDGET BOX SETTINGS -->
			<div class="widget-box-settings">
				<!-- POST SETTINGS WRAP -->
				<div class="post-settings-wrap">
					<!-- POST SETTINGS -->
					<div class="post-settings widget-box-post-settings-dropdown-trigger">
						<!-- POST SETTINGS ICON -->
						<svg class="post-settings-icon icon-more-dots">
							<use xlink:href="#svg-more-dots"></use>
						</svg>
						<!-- /POST SETTINGS ICON -->
					</div>
					<!-- /POST SETTINGS -->

					<!-- SIMPLE DROPDOWN -->
					<div class="simple-dropdown widget-box-post-settings-dropdown">
						<!-- SIMPLE DROPDOWN LINK -->
						<p class="simple-dropdown-link">Edit Post</p>
						<!-- /SIMPLE DROPDOWN LINK -->

						<!-- SIMPLE DROPDOWN LINK -->
						<p class="simple-dropdown-link">Delete Post</p>
						<!-- /SIMPLE DROPDOWN LINK -->

						<!-- SIMPLE DROPDOWN LINK -->
						<p class="simple-dropdown-link">Make it Featured</p>
						<!-- /SIMPLE DROPDOWN LINK -->

						<!-- SIMPLE DROPDOWN LINK -->
						<p class="simple-dropdown-link">Report Post</p>
						<!-- /SIMPLE DROPDOWN LINK -->

						<!-- SIMPLE DROPDOWN LINK -->
						<p class="simple-dropdown-link">Report Author</p>
						<!-- /SIMPLE DROPDOWN LINK -->
					</div>
					<!-- /SIMPLE DROPDOWN -->
				</div>
				<!-- /POST SETTINGS WRAP -->
			</div>
			<!-- /WIDGET BOX SETTINGS -->

			<!-- WIDGET BOX STATUS -->
			<div class="widget-box-status">
				<!-- WIDGET BOX STATUS CONTENT -->
				<div class="widget-box-status-content">
					<!-- USER STATUS -->
					<div class="user-status">
						<!-- USER STATUS AVATAR -->
						<a class="user-status-avatar" href="profile-timeline.html">
							<!-- USER AVATAR -->
							<div class="user-avatar small no-outline">
								<!-- USER AVATAR CONTENT -->
								<div class="user-avatar-content">
									<!-- HEXAGON -->
									<div class="hexagon-image-30-32" data-src="{{asset('public/student/img/avatar/01.jpg')}}"></div>
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
									<p class="user-avatar-badge-text">24</p>
									<!-- /USER AVATAR BADGE TEXT -->
								</div>
								<!-- /USER AVATAR BADGE -->
							</div>
							<!-- /USER AVATAR -->
						</a>
						<!-- /USER STATUS AVATAR -->

						<!-- USER STATUS TITLE -->
						<p class="user-status-title medium"><a class="bold" href="profile-timeline.html">Marina Valentine</a></p>
						<!-- /USER STATUS TITLE -->

						<!-- USER STATUS TEXT -->
						<p class="user-status-text small">29 minutes ago</p>
						<!-- /USER STATUS TEXT -->
					</div>
					<!-- /USER STATUS -->

					<!-- WIDGET BOX STATUS TEXT -->
					<p class="widget-box-status-text">Here's a sneak peek of the official box cover art for <a href="#">Machine Wasteland II</a>! Remember that I'll be having a stream showing a preview tommorrow at 9PM PCT!</p>
					<!-- /WIDGET BOX STATUS TEXT -->

					<!-- TAG LIST -->
					<div class="tag-list">
						<!-- TAG ITEM -->
						<a class="tag-item secondary" href="newsfeed.html">Cover</a>
						<!-- /TAG ITEM -->

						<!-- TAG ITEM -->
						<a class="tag-item secondary" href="newsfeed.html">Preview</a>
						<!-- /TAG ITEM -->

						<!-- TAG ITEM -->
						<a class="tag-item secondary" href="newsfeed.html">Art</a>
						<!-- /TAG ITEM -->

						<!-- TAG ITEM -->
						<a class="tag-item secondary" href="newsfeed.html">Machine</a>
						<!-- /TAG ITEM -->

						<!-- TAG ITEM -->
						<a class="tag-item secondary" href="newsfeed.html">Wasteland</a>
						<!-- /TAG ITEM -->
					</div>
					<!-- /TAG LIST -->

					<!-- CONTENT ACTIONS -->
					<div class="content-actions">
						<!-- CONTENT ACTION -->
						<div class="content-action">
							<!-- META LINE -->
							<div class="meta-line">
								<!-- META LINE LIST -->
								<div class="meta-line-list reaction-item-list">
									<!-- REACTION ITEM -->
									<div class="reaction-item">
										<!-- REACTION IMAGE -->
										<img class="reaction-image reaction-item-dropdown-trigger" src="{{asset('public/student/img/reaction/love.png')}}" alt="reaction-love">
										<!-- /REACTION IMAGE -->

										<!-- SIMPLE DROPDOWN -->
										<div class="simple-dropdown padded reaction-item-dropdown">
											<!-- SIMPLE DROPDOWN TEXT -->
											<p class="simple-dropdown-text"><img class="reaction" src="{{asset('public/student/img/reaction/love.png')}}" alt="reaction-love"> <span class="bold">Love</span></p>
											<!-- /SIMPLE DROPDOWN TEXT -->

											<!-- SIMPLE DROPDOWN TEXT -->
											<p class="simple-dropdown-text">Destroy Dex</p>
											<!-- /SIMPLE DROPDOWN TEXT -->

											<!-- SIMPLE DROPDOWN TEXT -->
											<p class="simple-dropdown-text">The Green Goo</p>
											<!-- /SIMPLE DROPDOWN TEXT -->

											<!-- SIMPLE DROPDOWN TEXT -->
											<p class="simple-dropdown-text">Bearded Wonder</p>
											<!-- /SIMPLE DROPDOWN TEXT -->

											<!-- SIMPLE DROPDOWN TEXT -->
											<p class="simple-dropdown-text">Sandra Strange</p>
											<!-- /SIMPLE DROPDOWN TEXT -->

											<!-- SIMPLE DROPDOWN TEXT -->
											<p class="simple-dropdown-text">Matt Parker</p>
											<!-- /SIMPLE DROPDOWN TEXT -->

											<!-- SIMPLE DROPDOWN TEXT -->
											<p class="simple-dropdown-text">James Murdock</p>
											<!-- /SIMPLE DROPDOWN TEXT -->

											<!-- SIMPLE DROPDOWN TEXT -->
											<p class="simple-dropdown-text"><span class="bold">and 14 more...</span></p>
											<!-- /SIMPLE DROPDOWN TEXT -->
										</div>
										<!-- /SIMPLE DROPDOWN -->
									</div>
									<!-- /REACTION ITEM -->

									<!-- REACTION ITEM -->
									<div class="reaction-item">
										<!-- REACTION IMAGE -->
										<img class="reaction-image reaction-item-dropdown-trigger" src="{{asset('public/student/img/reaction/wow.png')}}" alt="reaction-wow">
										<!-- /REACTION IMAGE -->

										<!-- SIMPLE DROPDOWN -->
										<div class="simple-dropdown padded reaction-item-dropdown">
											<!-- SIMPLE DROPDOWN TEXT -->
											<p class="simple-dropdown-text"><img class="reaction" src="{{asset('public/student/img/reaction/wow.png')}}" alt="reaction-wow"> <span class="bold">Wow</span></p>
											<!-- /SIMPLE DROPDOWN TEXT -->

											<!-- SIMPLE DROPDOWN TEXT -->
											<p class="simple-dropdown-text">Jett Spiegel</p>
											<!-- /SIMPLE DROPDOWN TEXT -->
										</div>
										<!-- /SIMPLE DROPDOWN -->
									</div>
									<!-- /REACTION ITEM -->

									<!-- REACTION ITEM -->
									<div class="reaction-item">
										<!-- REACTION IMAGE -->
										<img class="reaction-image reaction-item-dropdown-trigger" src="{{asset('public/student/img/reaction/like.png')}}" alt="reaction-like">
										<!-- /REACTION IMAGE -->

										<!-- SIMPLE DROPDOWN -->
										<div class="simple-dropdown padded reaction-item-dropdown">
											<!-- SIMPLE DROPDOWN TEXT -->
											<p class="simple-dropdown-text"><img class="reaction" src="{{asset('public/student/img/reaction/like.png')}}" alt="reaction-like"> <span class="bold">Like</span></p>
											<!-- /SIMPLE DROPDOWN TEXT -->

											<!-- SIMPLE DROPDOWN TEXT -->
											<p class="simple-dropdown-text">Neko Bebop</p>
											<!-- /SIMPLE DROPDOWN TEXT -->

											<!-- SIMPLE DROPDOWN TEXT -->
											<p class="simple-dropdown-text">Nick Grissom</p>
											<!-- /SIMPLE DROPDOWN TEXT -->

											<!-- SIMPLE DROPDOWN TEXT -->
											<p class="simple-dropdown-text">Sarah Diamond</p>
											<!-- /SIMPLE DROPDOWN TEXT -->
										</div>
										<!-- /SIMPLE DROPDOWN -->
									</div>
									<!-- /REACTION ITEM -->
								</div>
								<!-- /META LINE LIST -->

								<!-- META LINE TEXT -->
								<p class="meta-line-text">24</p>
								<!-- /META LINE TEXT -->
							</div>
							<!-- /META LINE -->
						</div>
						<!-- /CONTENT ACTION -->

						<!-- CONTENT ACTION -->
						<div class="content-action">
							<!-- META LINE -->
							<div class="meta-line">
								<!-- META LINE LINK -->
								<p class="meta-line-link">13 Comments</p>
								<!-- /META LINE LINK -->
							</div>
							<!-- /META LINE -->

							<!-- META LINE -->
							<div class="meta-line">
								<!-- META LINE TEXT -->
								<p class="meta-line-text">0 Shares</p>
								<!-- /META LINE TEXT -->
							</div>
							<!-- /META LINE -->
						</div>
						<!-- /CONTENT ACTION -->
					</div>
					<!-- /CONTENT ACTIONS -->
				</div>
				<!-- /WIDGET BOX STATUS CONTENT -->
			</div>
			<!-- /WIDGET BOX STATUS -->

			<!-- POST OPTIONS -->
			<div class="post-options">
				<!-- POST OPTION WRAP -->
				<div class="post-option-wrap">
					<!-- POST OPTION -->
					<div class="post-option no-text reaction-options-dropdown-trigger">
						<!-- POST OPTION ICON -->
						<svg class="post-option-icon icon-thumbs-up">
							<use xlink:href="#svg-thumbs-up"></use>
						</svg>
						<!-- /POST OPTION ICON -->
					</div>
					<!-- /POST OPTION -->

					<!-- REACTION OPTIONS -->
					<div class="reaction-options small reaction-options-dropdown">
						<!-- REACTION OPTION -->
						<div class="reaction-option text-tooltip-tft" data-title="Like">
							<!-- REACTION OPTION IMAGE -->
							<img class="reaction-option-image" src="{{asset('public/student/img/reaction/like.png')}}" alt="reaction-like">
							<!-- /REACTION OPTION IMAGE -->
						</div>
						<!-- /REACTION OPTION -->

						<!-- REACTION OPTION -->
						<div class="reaction-option text-tooltip-tft" data-title="Love">
							<!-- REACTION OPTION IMAGE -->
							<img class="reaction-option-image" src="{{asset('public/student/img/reaction/love.png')}}" alt="reaction-love">
							<!-- /REACTION OPTION IMAGE -->
						</div>
						<!-- /REACTION OPTION -->

						<!-- REACTION OPTION -->
						<div class="reaction-option text-tooltip-tft" data-title="Dislike">
							<!-- REACTION OPTION IMAGE -->
							<img class="reaction-option-image" src="{{asset('public/student/img/reaction/dislike.png')}}" alt="reaction-dislike">
							<!-- /REACTION OPTION IMAGE -->
						</div>
						<!-- /REACTION OPTION -->

						<!-- REACTION OPTION -->
						<div class="reaction-option text-tooltip-tft" data-title="Happy">
							<!-- REACTION OPTION IMAGE -->
							<img class="reaction-option-image" src="{{asset('public/student/img/reaction/happy.png')}}" alt="reaction-happy">
							<!-- /REACTION OPTION IMAGE -->
						</div>
						<!-- /REACTION OPTION -->

						<!-- REACTION OPTION -->
						<div class="reaction-option text-tooltip-tft" data-title="Funny">
							<!-- REACTION OPTION IMAGE -->
							<img class="reaction-option-image" src="{{asset('public/student/img/reaction/funny.png')}}" alt="reaction-funny">
							<!-- /REACTION OPTION IMAGE -->
						</div>
						<!-- /REACTION OPTION -->

						<!-- REACTION OPTION -->
						<div class="reaction-option text-tooltip-tft" data-title="Wow">
							<!-- REACTION OPTION IMAGE -->
							<img class="reaction-option-image" src="{{asset('public/student/img/reaction/wow.png')}}" alt="reaction-wow">
							<!-- /REACTION OPTION IMAGE -->
						</div>
						<!-- /REACTION OPTION -->

						<!-- REACTION OPTION -->
						<div class="reaction-option text-tooltip-tft" data-title="Angry">
							<!-- REACTION OPTION IMAGE -->
							<img class="reaction-option-image" src="{{asset('public/student/img/reaction/angry.png')}}" alt="reaction-angry">
							<!-- /REACTION OPTION IMAGE -->
						</div>
						<!-- /REACTION OPTION -->

						<!-- REACTION OPTION -->
						<div class="reaction-option text-tooltip-tft" data-title="Sad">
							<!-- REACTION OPTION IMAGE -->
							<img class="reaction-option-image" src="{{asset('public/student/img/reaction/sad.png')}}" alt="reaction-sad">
							<!-- /REACTION OPTION IMAGE -->
						</div>
						<!-- /REACTION OPTION -->
					</div>
					<!-- /REACTION OPTIONS -->
				</div>
				<!-- /POST OPTION WRAP -->

				<!-- POST OPTION -->
				<div class="post-option no-text active">
					<!-- POST OPTION ICON -->
					<svg class="post-option-icon icon-comment">
						<use xlink:href="#svg-comment"></use>
					</svg>
					<!-- /POST OPTION ICON -->
				</div>
				<!-- /POST OPTION -->

				<!-- POST OPTION -->
				<div class="post-option no-text">
					<!-- POST OPTION ICON -->
					<svg class="post-option-icon icon-share">
						<use xlink:href="#svg-share"></use>
					</svg>
					<!-- /POST OPTION ICON -->
				</div>
				<!-- /POST OPTION -->
			</div>
			<!-- /POST OPTIONS -->

			<!-- POST COMMENT LIST -->
			<div class="post-comment-list">
				<!-- POST COMMENT -->
				<div class="post-comment">
					<!-- USER AVATAR -->
					<a class="user-avatar small no-outline" href="profile-timeline.html">
						<!-- USER AVATAR CONTENT -->
						<div class="user-avatar-content">
							<!-- HEXAGON -->
							<div class="hexagon-image-30-32" data-src="{{asset('public/student/img/avatar/05.jpg')}}"></div>
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
							<p class="user-avatar-badge-text">12</p>
							<!-- /USER AVATAR BADGE TEXT -->
						</div>
						<!-- /USER AVATAR BADGE -->
					</a>
					<!-- /USER AVATAR -->

					<!-- POST COMMENT TEXT -->
					<p class="post-comment-text"><a class="post-comment-text-author" href="profile-timeline.html">Neko Bebop</a>It's always a pleasure to do this streams with you! If we have at least half the fun than last time it will be an incredible success!</p>
					<!-- /POST COMMENT TEXT -->

					<!-- CONTENT ACTIONS -->
					<div class="content-actions">
						<!-- CONTENT ACTION -->
						<div class="content-action">
							<!-- META LINE -->
							<div class="meta-line">
								<!-- META LINE LIST -->
								<div class="meta-line-list reaction-item-list small">
									<!-- REACTION ITEM -->
									<div class="reaction-item">
										<!-- REACTION IMAGE -->
										<img class="reaction-image reaction-item-dropdown-trigger" src="{{asset('public/student/img/reaction/happy.png')}}" alt="reaction-happy">
										<!-- /REACTION IMAGE -->

										<!-- SIMPLE DROPDOWN -->
										<div class="simple-dropdown padded reaction-item-dropdown">
											<!-- SIMPLE DROPDOWN TEXT -->
											<p class="simple-dropdown-text"><img class="reaction" src="{{asset('public/student/img/reaction/happy.png')}}" alt="reaction-happy"> <span class="bold">Happy</span></p>
											<!-- /SIMPLE DROPDOWN TEXT -->

											<!-- SIMPLE DROPDOWN TEXT -->
											<p class="simple-dropdown-text">Marcus Jhonson</p>
											<!-- /SIMPLE DROPDOWN TEXT -->
										</div>
										<!-- /SIMPLE DROPDOWN -->
									</div>
									<!-- /REACTION ITEM -->

									<!-- REACTION ITEM -->
									<div class="reaction-item">
										<!-- REACTION IMAGE -->
										<img class="reaction-image reaction-item-dropdown-trigger" src="{{asset('public/student/img/reaction/like.png')}}" alt="reaction-like">
										<!-- /REACTION IMAGE -->

										<!-- SIMPLE DROPDOWN -->
										<div class="simple-dropdown padded reaction-item-dropdown">
											<!-- SIMPLE DROPDOWN TEXT -->
											<p class="simple-dropdown-text"><img class="reaction" src="{{asset('public/student/img/reaction/like.png')}}" alt="reaction-like"> <span class="bold">Like</span></p>
											<!-- /SIMPLE DROPDOWN TEXT -->

											<!-- SIMPLE DROPDOWN TEXT -->
											<p class="simple-dropdown-text">Neko Bebop</p>
											<!-- /SIMPLE DROPDOWN TEXT -->

											<!-- SIMPLE DROPDOWN TEXT -->
											<p class="simple-dropdown-text">Nick Grissom</p>
											<!-- /SIMPLE DROPDOWN TEXT -->

											<!-- SIMPLE DROPDOWN TEXT -->
											<p class="simple-dropdown-text">Sarah Diamond</p>
											<!-- /SIMPLE DROPDOWN TEXT -->
										</div>
										<!-- /SIMPLE DROPDOWN -->
									</div>
									<!-- /REACTION ITEM -->
								</div>
								<!-- /META LINE LIST -->

								<!-- META LINE TEXT -->
								<p class="meta-line-text">4</p>
								<!-- /META LINE TEXT -->
							</div>
							<!-- /META LINE -->

							<!-- META LINE -->
							<div class="meta-line">
								<!-- META LINE LINK -->
								<p class="meta-line-link light reaction-options-small-dropdown-trigger">React!</p>
								<!-- /META LINE LINK -->

								<!-- REACTION OPTIONS -->
								<div class="reaction-options small reaction-options-small-dropdown">
									<!-- REACTION OPTION -->
									<div class="reaction-option text-tooltip-tft" data-title="Like">
										<!-- REACTION OPTION IMAGE -->
										<img class="reaction-option-image" src="{{asset('public/student/img/reaction/like.png')}}" alt="reaction-like">
										<!-- /REACTION OPTION IMAGE -->
									</div>
									<!-- /REACTION OPTION -->

									<!-- REACTION OPTION -->
									<div class="reaction-option text-tooltip-tft" data-title="Love">
										<!-- REACTION OPTION IMAGE -->
										<img class="reaction-option-image" src="{{asset('public/student/img/reaction/love.png')}}" alt="reaction-love">
										<!-- /REACTION OPTION IMAGE -->
									</div>
									<!-- /REACTION OPTION -->

									<!-- REACTION OPTION -->
									<div class="reaction-option text-tooltip-tft" data-title="Dislike">
										<!-- REACTION OPTION IMAGE -->
										<img class="reaction-option-image" src="{{asset('public/student/img/reaction/dislike.png')}}" alt="reaction-dislike">
										<!-- /REACTION OPTION IMAGE -->
									</div>
									<!-- /REACTION OPTION -->

									<!-- REACTION OPTION -->
									<div class="reaction-option text-tooltip-tft" data-title="Happy">
										<!-- REACTION OPTION IMAGE -->
										<img class="reaction-option-image" src="{{asset('public/student/img/reaction/happy.png')}}" alt="reaction-happy">
										<!-- /REACTION OPTION IMAGE -->
									</div>
									<!-- /REACTION OPTION -->

									<!-- REACTION OPTION -->
									<div class="reaction-option text-tooltip-tft" data-title="Funny">
										<!-- REACTION OPTION IMAGE -->
										<img class="reaction-option-image" src="{{asset('public/student/img/reaction/funny.png')}}" alt="reaction-funny">
										<!-- /REACTION OPTION IMAGE -->
									</div>
									<!-- /REACTION OPTION -->

									<!-- REACTION OPTION -->
									<div class="reaction-option text-tooltip-tft" data-title="Wow">
										<!-- REACTION OPTION IMAGE -->
										<img class="reaction-option-image" src="{{asset('public/student/img/reaction/wow.png')}}" alt="reaction-wow">
										<!-- /REACTION OPTION IMAGE -->
									</div>
									<!-- /REACTION OPTION -->

									<!-- REACTION OPTION -->
									<div class="reaction-option text-tooltip-tft" data-title="Angry">
										<!-- REACTION OPTION IMAGE -->
										<img class="reaction-option-image" src="{{asset('public/student/img/reaction/angry.png')}}" alt="reaction-angry">
										<!-- /REACTION OPTION IMAGE -->
									</div>
									<!-- /REACTION OPTION -->

									<!-- REACTION OPTION -->
									<div class="reaction-option text-tooltip-tft" data-title="Sad">
										<!-- REACTION OPTION IMAGE -->
										<img class="reaction-option-image" src="{{asset('public/student/img/reaction/sad.png')}}" alt="reaction-sad">
										<!-- /REACTION OPTION IMAGE -->
									</div>
									<!-- /REACTION OPTION -->
								</div>
								<!-- /REACTION OPTIONS -->
							</div>
							<!-- /META LINE -->

							<!-- META LINE -->
							<div class="meta-line">
								<!-- META LINE LINK -->
								<p class="meta-line-link light">Reply</p>
								<!-- /META LINE LINK -->
							</div>
							<!-- /META LINE -->

							<!-- META LINE -->
							<div class="meta-line">
								<!-- META LINE TIMESTAMP -->
								<p class="meta-line-timestamp">15 min ago</p>
								<!-- /META LINE TIMESTAMP -->
							</div>
							<!-- /META LINE -->

							<!-- META LINE -->
							<div class="meta-line settings">
								<!-- POST SETTINGS WRAP -->
								<div class="post-settings-wrap">
									<!-- POST SETTINGS -->
									<div class="post-settings post-settings-dropdown-trigger">
										<!-- POST SETTINGS ICON -->
										<svg class="post-settings-icon icon-more-dots">
											<use xlink:href="#svg-more-dots"></use>
										</svg>
										<!-- /POST SETTINGS ICON -->
									</div>
									<!-- /POST SETTINGS -->

									<!-- SIMPLE DROPDOWN -->
									<div class="simple-dropdown post-settings-dropdown">
										<!-- SIMPLE DROPDOWN LINK -->
										<p class="simple-dropdown-link">Report Post</p>
										<!-- /SIMPLE DROPDOWN LINK -->
									</div>
									<!-- /SIMPLE DROPDOWN -->
								</div>
								<!-- /POST SETTINGS WRAP -->
							</div>
							<!-- /META LINE -->
						</div>
						<!-- /CONTENT ACTION -->
					</div>
					<!-- /CONTENT ACTIONS -->
				</div>
				<!-- /POST COMMENT -->

				<!-- POST COMMENT -->
				<div class="post-comment unread reply-2">
					<!-- USER AVATAR -->
					<a class="user-avatar small no-outline" href="profile-timeline.html">
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
					</a>
					<!-- /USER AVATAR -->

					<!-- POST COMMENT TEXT -->
					<p class="post-comment-text"><a class="post-comment-text-author" href="profile-timeline.html">Nick Grissom</a>I wouldn't miss it for anything!! Love both streams!</p>
					<!-- /POST COMMENT TEXT -->

					<!-- CONTENT ACTIONS -->
					<div class="content-actions">
						<!-- CONTENT ACTION -->
						<div class="content-action">
							<!-- META LINE -->
							<div class="meta-line">
								<!-- META LINE LIST -->
								<div class="meta-line-list reaction-item-list small">
									<!-- REACTION ITEM -->
									<div class="reaction-item">
										<!-- REACTION IMAGE -->
										<img class="reaction-image reaction-item-dropdown-trigger" src="{{asset('public/student/img/reaction/like.png')}}" alt="reaction-like">
										<!-- /REACTION IMAGE -->

										<!-- SIMPLE DROPDOWN -->
										<div class="simple-dropdown padded reaction-item-dropdown">
											<!-- SIMPLE DROPDOWN TEXT -->
											<p class="simple-dropdown-text"><img class="reaction" src="{{asset('public/student/img/reaction/like.png')}}" alt="reaction-like"> <span class="bold">Like</span></p>
											<!-- /SIMPLE DROPDOWN TEXT -->

											<!-- SIMPLE DROPDOWN TEXT -->
											<p class="simple-dropdown-text">Neko Bebop</p>
											<!-- /SIMPLE DROPDOWN TEXT -->
										</div>
										<!-- /SIMPLE DROPDOWN -->
									</div>
									<!-- /REACTION ITEM -->
								</div>
								<!-- /META LINE LIST -->

								<!-- META LINE TEXT -->
								<p class="meta-line-text">1</p>
								<!-- /META LINE TEXT -->
							</div>
							<!-- /META LINE -->

							<!-- META LINE -->
							<div class="meta-line">
								<!-- META LINE LINK -->
								<p class="meta-line-link light reaction-options-small-dropdown-trigger">React!</p>
								<!-- /META LINE LINK -->

								<!-- REACTION OPTIONS -->
								<div class="reaction-options small reaction-options-small-dropdown">
									<!-- REACTION OPTION -->
									<div class="reaction-option text-tooltip-tft" data-title="Like">
										<!-- REACTION OPTION IMAGE -->
										<img class="reaction-option-image" src="{{asset('public/student/img/reaction/like.png')}}" alt="reaction-like">
										<!-- /REACTION OPTION IMAGE -->
									</div>
									<!-- /REACTION OPTION -->

									<!-- REACTION OPTION -->
									<div class="reaction-option text-tooltip-tft" data-title="Love">
										<!-- REACTION OPTION IMAGE -->
										<img class="reaction-option-image" src="{{asset('public/student/img/reaction/love.png')}}" alt="reaction-love">
										<!-- /REACTION OPTION IMAGE -->
									</div>
									<!-- /REACTION OPTION -->

									<!-- REACTION OPTION -->
									<div class="reaction-option text-tooltip-tft" data-title="Dislike">
										<!-- REACTION OPTION IMAGE -->
										<img class="reaction-option-image" src="{{asset('public/student/img/reaction/dislike.png')}}" alt="reaction-dislike">
										<!-- /REACTION OPTION IMAGE -->
									</div>
									<!-- /REACTION OPTION -->

									<!-- REACTION OPTION -->
									<div class="reaction-option text-tooltip-tft" data-title="Happy">
										<!-- REACTION OPTION IMAGE -->
										<img class="reaction-option-image" src="{{asset('public/student/img/reaction/happy.png')}}" alt="reaction-happy">
										<!-- /REACTION OPTION IMAGE -->
									</div>
									<!-- /REACTION OPTION -->

									<!-- REACTION OPTION -->
									<div class="reaction-option text-tooltip-tft" data-title="Funny">
										<!-- REACTION OPTION IMAGE -->
										<img class="reaction-option-image" src="{{asset('public/student/img/reaction/funny.png')}}" alt="reaction-funny">
										<!-- /REACTION OPTION IMAGE -->
									</div>
									<!-- /REACTION OPTION -->

									<!-- REACTION OPTION -->
									<div class="reaction-option text-tooltip-tft" data-title="Wow">
										<!-- REACTION OPTION IMAGE -->
										<img class="reaction-option-image" src="{{asset('public/student/img/reaction/wow.png')}}" alt="reaction-wow">
										<!-- /REACTION OPTION IMAGE -->
									</div>
									<!-- /REACTION OPTION -->

									<!-- REACTION OPTION -->
									<div class="reaction-option text-tooltip-tft" data-title="Angry">
										<!-- REACTION OPTION IMAGE -->
										<img class="reaction-option-image" src="{{asset('public/student/img/reaction/angry.png')}}" alt="reaction-angry">
										<!-- /REACTION OPTION IMAGE -->
									</div>
									<!-- /REACTION OPTION -->

									<!-- REACTION OPTION -->
									<div class="reaction-option text-tooltip-tft" data-title="Sad">
										<!-- REACTION OPTION IMAGE -->
										<img class="reaction-option-image" src="{{asset('public/student/img/reaction/sad.png')}}" alt="reaction-sad">
										<!-- /REACTION OPTION IMAGE -->
									</div>
									<!-- /REACTION OPTION -->
								</div>
								<!-- /REACTION OPTIONS -->
							</div>
							<!-- /META LINE -->

							<!-- META LINE -->
							<div class="meta-line">
								<!-- META LINE LINK -->
								<p class="meta-line-link light">Reply</p>
								<!-- /META LINE LINK -->
							</div>
							<!-- /META LINE -->

							<!-- META LINE -->
							<div class="meta-line">
								<!-- META LINE TIMESTAMP -->
								<p class="meta-line-timestamp">2 min ago</p>
								<!-- /META LINE TIMESTAMP -->
							</div>
							<!-- /META LINE -->

							<!-- META LINE -->
							<div class="meta-line settings">
								<!-- POST SETTINGS WRAP -->
								<div class="post-settings-wrap">
									<!-- POST SETTINGS -->
									<div class="post-settings post-settings-dropdown-trigger">
										<!-- POST SETTINGS ICON -->
										<svg class="post-settings-icon icon-more-dots">
											<use xlink:href="#svg-more-dots"></use>
										</svg>
										<!-- /POST SETTINGS ICON -->
									</div>
									<!-- /POST SETTINGS -->

									<!-- SIMPLE DROPDOWN -->
									<div class="simple-dropdown post-settings-dropdown">
										<!-- SIMPLE DROPDOWN LINK -->
										<p class="simple-dropdown-link">Report Post</p>
										<!-- /SIMPLE DROPDOWN LINK -->
									</div>
									<!-- /SIMPLE DROPDOWN -->
								</div>
								<!-- /POST SETTINGS WRAP -->
							</div>
							<!-- /META LINE -->
						</div>
						<!-- /CONTENT ACTION -->
					</div>
					<!-- /CONTENT ACTIONS -->
				</div>
				<!-- /POST COMMENT -->

				<!-- POST COMMENT -->
				<div class="post-comment">
					<!-- USER AVATAR -->
					<a class="user-avatar small no-outline" href="profile-timeline.html">
						<!-- USER AVATAR CONTENT -->
						<div class="user-avatar-content">
							<!-- HEXAGON -->
							<div class="hexagon-image-30-32" data-src="{{asset('public/student/img/avatar/02.jpg')}}"></div>
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
							<p class="user-avatar-badge-text">19</p>
							<!-- /USER AVATAR BADGE TEXT -->
						</div>
						<!-- /USER AVATAR BADGE -->
					</a>
					<!-- /USER AVATAR -->

					<!-- POST COMMENT TEXT -->
					<p class="post-comment-text"><a class="post-comment-text-author" href="profile-timeline.html">Destroy Dex</a>YEAHHH!! <a href="profile-timeline.html">@MarinaValentine</a> I really enjoyed your last stream and it also was really funny! Can't wait!</p>
					<!-- /POST COMMENT TEXT -->

					<!-- CONTENT ACTIONS -->
					<div class="content-actions">
						<!-- CONTENT ACTION -->
						<div class="content-action">
							<!-- META LINE -->
							<div class="meta-line">
								<!-- META LINE LINK -->
								<p class="meta-line-link light reaction-options-small-dropdown-trigger">React!</p>
								<!-- /META LINE LINK -->

								<!-- REACTION OPTIONS -->
								<div class="reaction-options small reaction-options-small-dropdown">
									<!-- REACTION OPTION -->
									<div class="reaction-option text-tooltip-tft" data-title="Like">
										<!-- REACTION OPTION IMAGE -->
										<img class="reaction-option-image" src="{{asset('public/student/img/reaction/like.png')}}" alt="reaction-like">
										<!-- /REACTION OPTION IMAGE -->
									</div>
									<!-- /REACTION OPTION -->

									<!-- REACTION OPTION -->
									<div class="reaction-option text-tooltip-tft" data-title="Love">
										<!-- REACTION OPTION IMAGE -->
										<img class="reaction-option-image" src="{{asset('public/student/img/reaction/love.png')}}" alt="reaction-love">
										<!-- /REACTION OPTION IMAGE -->
									</div>
									<!-- /REACTION OPTION -->

									<!-- REACTION OPTION -->
									<div class="reaction-option text-tooltip-tft" data-title="Dislike">
										<!-- REACTION OPTION IMAGE -->
										<img class="reaction-option-image" src="{{asset('public/student/img/reaction/dislike.png')}}" alt="reaction-dislike">
										<!-- /REACTION OPTION IMAGE -->
									</div>
									<!-- /REACTION OPTION -->

									<!-- REACTION OPTION -->
									<div class="reaction-option text-tooltip-tft" data-title="Happy">
										<!-- REACTION OPTION IMAGE -->
										<img class="reaction-option-image" src="{{asset('public/student/img/reaction/happy.png')}}" alt="reaction-happy">
										<!-- /REACTION OPTION IMAGE -->
									</div>
									<!-- /REACTION OPTION -->

									<!-- REACTION OPTION -->
									<div class="reaction-option text-tooltip-tft" data-title="Funny">
										<!-- REACTION OPTION IMAGE -->
										<img class="reaction-option-image" src="{{asset('public/student/img/reaction/funny.png')}}" alt="reaction-funny">
										<!-- /REACTION OPTION IMAGE -->
									</div>
									<!-- /REACTION OPTION -->

									<!-- REACTION OPTION -->
									<div class="reaction-option text-tooltip-tft" data-title="Wow">
										<!-- REACTION OPTION IMAGE -->
										<img class="reaction-option-image" src="{{asset('public/student/img/reaction/wow.png')}}" alt="reaction-wow">
										<!-- /REACTION OPTION IMAGE -->
									</div>
									<!-- /REACTION OPTION -->

									<!-- REACTION OPTION -->
									<div class="reaction-option text-tooltip-tft" data-title="Angry">
										<!-- REACTION OPTION IMAGE -->
										<img class="reaction-option-image" src="{{asset('public/student/img/reaction/angry.png')}}" alt="reaction-angry">
										<!-- /REACTION OPTION IMAGE -->
									</div>
									<!-- /REACTION OPTION -->

									<!-- REACTION OPTION -->
									<div class="reaction-option text-tooltip-tft" data-title="Sad">
										<!-- REACTION OPTION IMAGE -->
										<img class="reaction-option-image" src="{{asset('public/student/img/reaction/sad.png')}}" alt="reaction-sad">
										<!-- /REACTION OPTION IMAGE -->
									</div>
									<!-- /REACTION OPTION -->
								</div>
								<!-- /REACTION OPTIONS -->
							</div>
							<!-- /META LINE -->

							<!-- META LINE -->
							<div class="meta-line">
								<!-- META LINE LINK -->
								<p class="meta-line-link light">Reply</p>
								<!-- /META LINE LINK -->
							</div>
							<!-- /META LINE -->

							<!-- META LINE -->
							<div class="meta-line">
								<!-- META LINE TIMESTAMP -->
								<p class="meta-line-timestamp">27 min ago</p>
								<!-- /META LINE TIMESTAMP -->
							</div>
							<!-- /META LINE -->

							<!-- META LINE -->
							<div class="meta-line settings">
								<!-- POST SETTINGS WRAP -->
								<div class="post-settings-wrap">
									<!-- POST SETTINGS -->
									<div class="post-settings post-settings-dropdown-trigger">
										<!-- POST SETTINGS ICON -->
										<svg class="post-settings-icon icon-more-dots">
											<use xlink:href="#svg-more-dots"></use>
										</svg>
										<!-- /POST SETTINGS ICON -->
									</div>
									<!-- /POST SETTINGS -->

									<!-- SIMPLE DROPDOWN -->
									<div class="simple-dropdown post-settings-dropdown">
										<!-- SIMPLE DROPDOWN LINK -->
										<p class="simple-dropdown-link">Report Post</p>
										<!-- /SIMPLE DROPDOWN LINK -->
									</div>
									<!-- /SIMPLE DROPDOWN -->
								</div>
								<!-- /POST SETTINGS WRAP -->
							</div>
							<!-- /META LINE -->
						</div>
						<!-- /CONTENT ACTION -->
					</div>
					<!-- /CONTENT ACTIONS -->
				</div>
				<!-- /POST COMMENT -->

				<!-- POST COMMENT -->
				<div class="post-comment">
					<!-- USER AVATAR -->
					<a class="user-avatar small no-outline" href="profile-timeline.html">
						<!-- USER AVATAR CONTENT -->
						<div class="user-avatar-content">
							<!-- HEXAGON -->
							<div class="hexagon-image-30-32" data-src="{{asset('public/student/img/avatar/07.jpg')}}"></div>
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
							<p class="user-avatar-badge-text">26</p>
							<!-- /USER AVATAR BADGE TEXT -->
						</div>
						<!-- /USER AVATAR BADGE -->
					</a>
					<!-- /USER AVATAR -->

					<!-- POST COMMENT TEXT -->
					<p class="post-comment-text"><a class="post-comment-text-author" href="profile-timeline.html">Sarah Diamond</a>That sounds awesome Marina! And also thanks a lot for the art sneak peek! I went to the GameCon last week and had a great time playing the game's open demo.</p>
					<!-- /POST COMMENT TEXT -->

					<!-- CONTENT ACTIONS -->
					<div class="content-actions">
						<!-- CONTENT ACTION -->
						<div class="content-action">
							<!-- META LINE -->
							<div class="meta-line">
								<!-- META LINE LINK -->
								<p class="meta-line-link light reaction-options-small-dropdown-trigger">React!</p>
								<!-- /META LINE LINK -->

								<!-- REACTION OPTIONS -->
								<div class="reaction-options small reaction-options-small-dropdown">
									<!-- REACTION OPTION -->
									<div class="reaction-option text-tooltip-tft" data-title="Like">
										<!-- REACTION OPTION IMAGE -->
										<img class="reaction-option-image" src="{{asset('public/student/img/reaction/like.png')}}" alt="reaction-like">
										<!-- /REACTION OPTION IMAGE -->
									</div>
									<!-- /REACTION OPTION -->

									<!-- REACTION OPTION -->
									<div class="reaction-option text-tooltip-tft" data-title="Love">
										<!-- REACTION OPTION IMAGE -->
										<img class="reaction-option-image" src="{{asset('public/student/img/reaction/love.png')}}" alt="reaction-love">
										<!-- /REACTION OPTION IMAGE -->
									</div>
									<!-- /REACTION OPTION -->

									<!-- REACTION OPTION -->
									<div class="reaction-option text-tooltip-tft" data-title="Dislike">
										<!-- REACTION OPTION IMAGE -->
										<img class="reaction-option-image" src="{{asset('public/student/img/reaction/dislike.png')}}" alt="reaction-dislike">
										<!-- /REACTION OPTION IMAGE -->
									</div>
									<!-- /REACTION OPTION -->

									<!-- REACTION OPTION -->
									<div class="reaction-option text-tooltip-tft" data-title="Happy">
										<!-- REACTION OPTION IMAGE -->
										<img class="reaction-option-image" src="{{asset('public/student/img/reaction/happy.png')}}" alt="reaction-happy">
										<!-- /REACTION OPTION IMAGE -->
									</div>
									<!-- /REACTION OPTION -->

									<!-- REACTION OPTION -->
									<div class="reaction-option text-tooltip-tft" data-title="Funny">
										<!-- REACTION OPTION IMAGE -->
										<img class="reaction-option-image" src="{{asset('public/student/img/reaction/funny.png')}}" alt="reaction-funny">
										<!-- /REACTION OPTION IMAGE -->
									</div>
									<!-- /REACTION OPTION -->

									<!-- REACTION OPTION -->
									<div class="reaction-option text-tooltip-tft" data-title="Wow">
										<!-- REACTION OPTION IMAGE -->
										<img class="reaction-option-image" src="{{asset('public/student/img/reaction/wow.png')}}" alt="reaction-wow">
										<!-- /REACTION OPTION IMAGE -->
									</div>
									<!-- /REACTION OPTION -->

									<!-- REACTION OPTION -->
									<div class="reaction-option text-tooltip-tft" data-title="Angry">
										<!-- REACTION OPTION IMAGE -->
										<img class="reaction-option-image" src="{{asset('public/student/img/reaction/angry.png')}}" alt="reaction-angry">
										<!-- /REACTION OPTION IMAGE -->
									</div>
									<!-- /REACTION OPTION -->

									<!-- REACTION OPTION -->
									<div class="reaction-option text-tooltip-tft" data-title="Sad">
										<!-- REACTION OPTION IMAGE -->
										<img class="reaction-option-image" src="{{asset('public/student/img/reaction/sad.png')}}" alt="reaction-sad">
										<!-- /REACTION OPTION IMAGE -->
									</div>
									<!-- /REACTION OPTION -->
								</div>
								<!-- /REACTION OPTIONS -->
							</div>
							<!-- /META LINE -->

							<!-- META LINE -->
							<div class="meta-line">
								<!-- META LINE LINK -->
								<p class="meta-line-link light">Reply</p>
								<!-- /META LINE LINK -->
							</div>
							<!-- /META LINE -->

							<!-- META LINE -->
							<div class="meta-line">
								<!-- META LINE TIMESTAMP -->
								<p class="meta-line-timestamp">39 min ago</p>
								<!-- /META LINE TIMESTAMP -->
							</div>
							<!-- /META LINE -->

							<!-- META LINE -->
							<div class="meta-line settings">
								<!-- POST SETTINGS WRAP -->
								<div class="post-settings-wrap">
									<!-- POST SETTINGS -->
									<div class="post-settings post-settings-dropdown-trigger">
										<!-- POST SETTINGS ICON -->
										<svg class="post-settings-icon icon-more-dots">
											<use xlink:href="#svg-more-dots"></use>
										</svg>
										<!-- /POST SETTINGS ICON -->
									</div>
									<!-- /POST SETTINGS -->

									<!-- SIMPLE DROPDOWN -->
									<div class="simple-dropdown post-settings-dropdown">
										<!-- SIMPLE DROPDOWN LINK -->
										<p class="simple-dropdown-link">Report Post</p>
										<!-- /SIMPLE DROPDOWN LINK -->
									</div>
									<!-- /SIMPLE DROPDOWN -->
								</div>
								<!-- /POST SETTINGS WRAP -->
							</div>
							<!-- /META LINE -->
						</div>
						<!-- /CONTENT ACTION -->
					</div>
					<!-- /CONTENT ACTIONS -->
				</div>
				<!-- /POST COMMENT -->

				<!-- POST COMMENT HEADING -->
				<p class="post-comment-heading">Load More Comments <span class="highlighted">9+</span></p>
				<!-- /POST COMMENT HEADING -->
			</div>
			<!-- /POST COMMENT LIST -->
		</div>
		<!-- /WIDGET BOX SCROLLABLE -->

		<!-- POST COMMENT FORM -->
		<div class="post-comment-form bordered-top">
			<!-- USER AVATAR -->
			<div class="user-avatar small no-outline">
				<!-- USER AVATAR CONTENT -->
				<div class="user-avatar-content">
					<!-- HEXAGON -->
					<div class="hexagon-image-30-32" data-src="{{asset('public/student/img/avatar/01.jpg')}}"></div>
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
					<p class="user-avatar-badge-text">24</p>
					<!-- /USER AVATAR BADGE TEXT -->
				</div>
				<!-- /USER AVATAR BADGE -->
			</div>
			<!-- /USER AVATAR -->

			<!-- FORM -->
			<form class="form">
				<!-- FORM ROW -->
				<div class="form-row">
					<!-- FORM ITEM -->
					<div class="form-item">
						<!-- FORM INPUT -->
						<div class="form-input small">
							<label for="popup-post-reply">Your Reply</label>
							<input type="text" id="popup-post-reply" name="popup_post_reply">
						</div>
						<!-- /FORM INPUT -->
					</div>
					<!-- /FORM ITEM -->
				</div>
				<!-- /FORM ROW -->
			</form>
			<!-- /FORM -->
		</div>
		<!-- /POST COMMENT FORM -->
	</div>
	<!-- /WIDGET BOX -->

	<!-- POPUP PICTURE IMAGE WRAP -->
	<div class="popup-picture-image-wrap">
		<!-- POPUP PICTURE IMAGE -->
		<figure class="popup-picture-image">
			<img src="{{asset('public/student/img/cover/04.jpg')}}" alt="cover-04">
		</figure>
		<!-- /POPUP PICTURE IMAGE -->
	</div>
	<!-- /POPUP PICTURE IMAGE WRAP -->
</div>

<div class="popup-box small popup-event-creation">
	<div class="popup-close-button popup-event-creation-trigger">
		<svg class="popup-close-button-icon icon-cross">
			<use xlink:href="#svg-cross"></use>
		</svg>
	</div>
	<center><p class="popup-box-title">Chỉnh sửa câu hỏi</p></center>
	<form action="" method="post" class="form">
		<div class="form-row">
			<div class="form-item">
				<div class="form-input small">
					<label for="event-name">Tiêu đề</label>
					<input type="text" id="event-name" name="event_name">
				</div>
			</div>
		</div>
		<div class="form-row">
			<div class="form-item">
				<div class="form-select">
					<label for="event-category">Loại câu hỏi</label>
					<select id="event-category" name="event_category">
						<option value="0">Big Events</option>
						<option value="1">Small Events</option>
					</select>
					<svg class="form-select-icon icon-small-arrow">
						<use xlink:href="#svg-small-arrow"></use>
					</svg>
				</div>
			</div>
		</div>
		<div class="form-row">
			<div class="form-item">
				<div class="form-input small">
					<label for="event-description">Nội dung</label>
					<textarea id="event-description" name="event_description"></textarea>
				</div>
			</div>
		</div>
		<div class="popup-box-actions medium void">
			<button class="popup-box-action full button secondary">Chỉnh sửa</button>
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
<script src="{{asset('public/student/js/global/global.charts.')}}js"></script>
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

<script src="{{asset('public/student/js/global/global.maps.js')}}"></script>

<script src="{{asset('public/student/js/sweetalert.min.js')}}"></script>

<script src="{{asset('public/student/js/jquery.min.js')}}"></script>

<script type="text/javascript">
	$(document).ready(function(){
		$('.postQ').click(function(){
			var post_title = $('.title').val();
			var category_id = $('.category').val();
			var post_content = $('.content').val();
			var _token = $('input[name="_token"]').val();
			if(post_title=='' || category_id=='' || post_content==''){
				swal("Vui lòng không để trống!", "", "warning");
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
	});
</script>
</body>
</html>