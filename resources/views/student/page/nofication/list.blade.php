@extends('student.layout')
@section('content_header')
<!-- SECTION BANNER -->
<div class="section-banner">
	<img class="section-banner-icon" src="{{asset('public/student/img/banner/accounthub-icon.png')}}" alt="accounthub-icon">
	<p class="section-banner-title">Thông tin tài khoản</p>
	<p class="section-banner-text">Cập nhật thêm thông tin tài khoản để mọi người biết rõ hơn về bạn</p>
</div>
<!-- /SECTION BANNER -->

<!-- GRID -->
<div class="grid grid-3-9 medium-space">
	<!-- GRID COLUMN -->
	<div class="account-hub-sidebar">
		<!-- SIDEBAR BOX -->
		<div class="sidebar-box no-padding">
			<!-- SIDEBAR MENU -->
			<div class="sidebar-menu">
				<!-- SIDEBAR MENU ITEM -->
				<div class="sidebar-menu-item">
					<!-- SIDEBAR MENU HEADER -->
					<div class="sidebar-menu-header accordion-trigger-linked">
						<!-- SIDEBAR MENU HEADER ICON -->
						<svg class="sidebar-menu-header-icon icon-profile">
							<use xlink:href="#svg-profile"></use>
						</svg>
						<!-- /SIDEBAR MENU HEADER ICON -->

						<!-- SIDEBAR MENU HEADER TITLE -->
						<p class="sidebar-menu-header-title">Thông tin</p>
						<!-- /SIDEBAR MENU HEADER TITLE -->
					</div>
					<!-- /SIDEBAR MENU HEADER -->

					<!-- SIDEBAR MENU BODY -->
					<div class="sidebar-menu-body accordion-content-linked accordion-open">
						<!-- SIDEBAR MENU LINK -->
						<a class="sidebar-menu-link " href="{{url('/thong-tin-tai-khoan/'.Session::get('student_id'))}}">Thông tin cá nhân</a>

						<!-- SIDEBAR MENU LINK -->
						<a class="sidebar-menu-link active" style="color: #007bff;">Tất cả thông báo</a>
						<!-- /SIDEBAR MENU LINK -->

						<!-- SIDEBAR MENU LINK -->
						<a class="sidebar-menu-link" href="{{url('/thay-doi-mat-khau/'.Session::get('student_id'))}}">Thay đổi mật khẩu</a>
						<!-- /SIDEBAR MENU LINK -->

					</div>
					<!-- /SIDEBAR MENU BODY -->
				</div>
				<!-- /SIDEBAR MENU ITEM -->
			</div>
			<!-- /SIDEBAR MENU -->
		</div>
		<!-- /SIDEBAR BOX -->
	</div>
	<!-- /GRID COLUMN -->

	<!-- GRID COLUMN -->
	<div class="account-hub-content">
		<!-- SECTION HEADER -->
		<div class="section-header">
			<!-- SECTION HEADER INFO -->
			<div class="section-header-info">
				<!-- SECTION PRETITLE -->
				<p class="section-pretitle">Thông tin</p>
				<!-- /SECTION PRETITLE -->

				<!-- SECTION TITLE -->
				<h2 class="section-title" style="color: white;">Tất cả thông báo</h2>
				<!-- /SECTION TITLE -->
			</div>
			<!-- /SECTION HEADER INFO -->

			<!-- SECTION HEADER ACTIONS -->
			<div class="section-header-actions">
				<!-- SECTION HEADER ACTION -->
				<p class="section-header-action">Đọc tất cả</p>
			</div>
			<!-- /SECTION HEADER ACTIONS -->
		</div>
		<!-- /SECTION HEADER -->

		<!-- NOTIFICATION BOX LIST -->
		<div class="notification-box-list">
			@foreach ($list as $key => $list_nofi)
			@if($list_nofi->postes->student_id==Session::get('student_id') && $list_nofi->nofication_status==0)
			<div class="notification-box unread nofi_{{$list_nofi->nofication_id}}">
				<!-- USER STATUS -->
				<div class="user-status notification">
					<!-- USER STATUS AVATAR -->
					<a class="user-status-avatar" href="profile-timeline.html">
						<!-- USER AVATAR -->
						<div class="user-avatar small no-outline">
							<!-- USER AVATAR CONTENT -->
							<div class="user-avatar-content">
								<!-- HEXAGON -->
								<div class="hexagon-image-30-32" data-src="img/avatar/03.jpg"></div>
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
						</div>
						<!-- /USER AVATAR -->
					</a>
					<!-- /USER STATUS AVATAR -->

					<!-- /USER STATUS AVATAR -->
					@if ($list_nofi->nofication_kind=='Like')
					<!-- USER STATUS TITLE -->
					<p class="user-status-title"><a class="bold" href="profile-timeline.html">{{$list_nofi->studentes->student_name}}</a> đã thích bài viết <a class="highlighted" href="profile-timeline.html">{{$list_nofi->postes->post_title}}</a> của bạn</p>
					<!-- /USER STATUS TITLE -->

					<!-- USER STATUS TIMESTAMP -->
					<p class="user-status-timestamp">{{ \Carbon\Carbon::parse($list_nofi->nofication_created)->diffForHumans() }}</p>
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
					@elseif($list_nofi->nofication_kind=='Comment')
					<!-- USER STATUS TITLE -->
					<p class="user-status-title"><a class="bold" href="profile-timeline.html">{{$list_nofi->studentes->student_name}}</a> đã bình luận vào bài viết <a class="highlighted" href="profile-timeline.html">{{$list_nofi->postes->post_title}}</a> của bạn</p>
					<!-- /USER STATUS TITLE -->

					<!-- USER STATUS TIMESTAMP -->
					<p class="user-status-timestamp">{{ \Carbon\Carbon::parse($list_nofi->nofication_created)->diffForHumans() }}</p>
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
					<p class="user-status-title">Khoa đã trả lời câu hỏi <a class="highlighted" href="profile-timeline.html">{{$list_nofi->postes->post_title}}</a> của bạn</p>
					<!-- /USER STATUS TITLE -->

					<!-- USER STATUS TIMESTAMP -->
					<p class="user-status-timestamp">{{ \Carbon\Carbon::parse($list_nofi->nofication_created)->diffForHumans() }}</p>
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

				<!-- NOTIFICATION BOX CLOSE BUTTON -->
				<div class="notification-box-close-button btnDelnofi" data-id_delnofi="{{$list_nofi->nofication_id}}">
					<!-- NOTIFICATION BOX CLOSE BUTTON ICON -->
					<svg class="notification-box-close-button-icon icon-cross">
						<use xlink:href="#svg-cross"></use>
					</svg>
					<!-- /NOTIFICATION BOX CLOSE BUTTON ICON -->
				</div>
				<!-- /NOTIFICATION BOX CLOSE BUTTON -->

				<!-- MARK UNREAD BUTTON -->
				<div class="mark-unread-button btnReadnofi" data-id_readnofi="{{$list_nofi->nofication_id}}">
				</div>
				<!-- /MARK UNREAD BUTTON -->
			</div>
			@elseif($list_nofi->postes->student_id==Session::get('student_id') && $list_nofi->nofication_status==1)
			<div class="notification-box">
				<!-- USER STATUS -->
				<div class="user-status notification">
					<!-- USER STATUS AVATAR -->
					<a class="user-status-avatar" href="profile-timeline.html">
						<!-- USER AVATAR -->
						<div class="user-avatar small no-outline">
							<!-- USER AVATAR CONTENT -->
							<div class="user-avatar-content">
								<!-- HEXAGON -->
								<div class="hexagon-image-30-32" data-src="img/avatar/03.jpg"></div>
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
						</div>
						<!-- /USER AVATAR -->
					</a>
					<!-- /USER STATUS AVATAR -->

					<!-- /USER STATUS AVATAR -->
					@if ($list_nofi->nofication_kind=='Like')
					<!-- USER STATUS TITLE -->
					<p class="user-status-title"><a class="bold" href="profile-timeline.html">{{$list_nofi->studentes->student_name}}</a> đã thích bài viết <a class="highlighted" href="profile-timeline.html">{{$list_nofi->postes->post_title}}</a> của bạn</p>
					<!-- /USER STATUS TITLE -->

					<!-- USER STATUS TIMESTAMP -->
					<p class="user-status-timestamp">{{ \Carbon\Carbon::parse($list_nofi->nofication_created)->diffForHumans() }}</p>
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
					@elseif($list_nofi->nofication_kind=='Comment')
					<!-- USER STATUS TITLE -->
					<p class="user-status-title"><a class="bold" href="profile-timeline.html">{{$list_nofi->studentes->student_name}}</a> đã bình luận vào bài viết <a class="highlighted" href="profile-timeline.html">{{$list_nofi->postes->post_title}}</a> của bạn</p>
					<!-- /USER STATUS TITLE -->

					<!-- USER STATUS TIMESTAMP -->
					<p class="user-status-timestamp">{{ \Carbon\Carbon::parse($list_nofi->nofication_created)->diffForHumans() }}</p>
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
					<p class="user-status-title">Khoa đã trả lời câu hỏi <a class="highlighted" href="profile-timeline.html">{{$list_nofi->postes->post_title}}</a> của bạn</p>
					<!-- /USER STATUS TITLE -->

					<!-- USER STATUS TIMESTAMP -->
					<p class="user-status-timestamp">{{ \Carbon\Carbon::parse($list_nofi->nofication_created)->diffForHumans() }}</p>
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

				<!-- NOTIFICATION BOX CLOSE BUTTON -->
				<div class="notification-box-close-button">
					<!-- NOTIFICATION BOX CLOSE BUTTON ICON -->
					<svg class="notification-box-close-button-icon icon-cross">
						<use xlink:href="#svg-cross"></use>
					</svg>
					<!-- /NOTIFICATION BOX CLOSE BUTTON ICON -->
				</div>
				<!-- /NOTIFICATION BOX CLOSE BUTTON -->
			</div>
			@endif
			@endforeach
		</div>
		<!-- /NOTIFICATION BOX LIST -->

		<!-- SECTION PAGER BAR -->
		<div class="section-pager-bar" style="width: 360px;">
			<!-- SECTION PAGER -->
			<div class="section-pager">
				<!-- SECTION PAGER ITEM -->
				<div class="section-pager-item active">
					<!-- SECTION PAGER ITEM TEXT -->
					<center>
						<span>{!! $list->render("pagination::bootstrap-4") !!}</span>
					</center>

					<!-- /SECTION PAGER ITEM TEXT -->
				</div>
				<!-- /SECTION PAGER ITEM -->
			</div>
		</div>
		<!-- /SECTION PAGER -->
	</div>
	<!-- /GRID COLUMN -->
</div>
<!-- /GRID -->
@endsection