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
						<a class="sidebar-menu-link" href="{{url('/thong-tin-tai-khoan/'.Session::get('student_id'))}}">Thông tin cá nhân</a>

						<!-- SIDEBAR MENU LINK -->
						<a class="sidebar-menu-link" href="{{url('/tat-ca-thong-bao')}}">Tất cả thông báo</a>
						<!-- /SIDEBAR MENU LINK -->

						<!-- SIDEBAR MENU LINK -->
						<a class="sidebar-menu-link active" style="color: #007bff;">Thay đổi mật khẩu</a>
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
				<h2 class="section-title" style="color: white;">Thay đổi mật khẩu</h2>
				<!-- /SECTION TITLE -->
			</div>
			<!-- /SECTION HEADER INFO -->
		</div>
		<!-- /SECTION HEADER -->

		<!-- GRID COLUMN -->
		<div class="grid-column">
			<!-- WIDGET BOX -->
			<div class="widget-box">
				<!-- WIDGET BOX CONTENT -->
				<div class="widget-box-content">
					<!-- FORM -->
					<form class="form" method="post" action="{{url('/doi-mat-khau/'.Session::get('student_id'))}}">
						@csrf
						<!-- FORM ROW -->
						<div class="form-row">
							@php
							$message = Session::get('message');
							if($message){
								echo $message;
								Session::put('message', null);
							}
							@endphp
							<!-- FORM ITEM -->
							<div class="form-item">
								<!-- FORM INPUT -->
								<div class="form-input small">
									<label for="account-current-password">Nhập mật khẩu hiện tại</label>
									<input type="password" id="account-current-password" name="student_password">
								</div>
								<!-- /FORM INPUT -->
							</div>
							<!-- /FORM ITEM -->
						</div>
						<!-- /FORM ROW -->

						<!-- FORM ROW -->
						<div class="form-row split">
							<!-- FORM ITEM -->
							<div class="form-item">
								<!-- FORM INPUT -->
								<div class="form-input small">
									<label for="account-new-password">Mật khẩu mới</label>
									<input type="password" id="account-new-password" name="student_newpassword">
								</div>
								<!-- /FORM INPUT -->
							</div>
							<!-- /FORM ITEM -->

							<!-- FORM ITEM -->
							<div class="form-item">
								<!-- FORM INPUT -->
								<div class="form-input small">
									<label for="account-new-password-confirm">Nhập lại mật khẩu mới</label>
									<input type="password" id="account-new-password-confirm" name="student_newpassword_confirm">
								</div>
								<!-- /FORM INPUT -->
							</div>
							<!-- /FORM ITEM -->
						</div>
						<!-- /FORM ROW -->

						<!-- FORM ROW -->
						<div class="form-row split">
							<!-- FORM ITEM -->
							<div class="form-item">
								<!-- BUTTON -->
								<input type="submit" class="button full primary" value="Thay đổi ngay">
								<!-- /BUTTON -->
							</div>
							<!-- /FORM ITEM -->
						</div>
						<!-- /FORM ROW -->
					</form>
					<!-- /FORM -->
				</div>
				<!-- WIDGET BOX CONTENT -->
			</div>
			<!-- /WIDGET BOX -->
		</div>
		<!-- /GRID COLUMN -->
	</div>
	<!-- /GRID COLUMN -->
</div>
<!-- /GRID -->
@endsection