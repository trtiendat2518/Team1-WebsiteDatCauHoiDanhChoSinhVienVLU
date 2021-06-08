@extends('student.layout')
@section('content_header')
<!-- SECTION BANNER -->
<div class="section-banner">
	<img class="section-banner-icon" src="{{asset('public/student/img/banner/accounthub-icon.png')}}" alt="accounthub-icon">
	<p class="section-banner-title">Thông tin tài khoản</p>
	<p class="section-banner-text">Cập nhật thêm thông tin tài khoản để mọi người biết rõ hơn về bạn</p>
</div>
<!-- /SECTION BANNER -->
@php
	foreach($student2 as $key => $st){
		if($st->student_info_id){
@endphp
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
						<a class="sidebar-menu-link active" style="color: #007bff;">Thông tin cá nhân</a>

						<!-- SIDEBAR MENU LINK -->
						<a class="sidebar-menu-link" href="hub-profile-notifications.html">Tất cả thông báo</a>
						<!-- /SIDEBAR MENU LINK -->

						<!-- SIDEBAR MENU LINK -->
						<a class="sidebar-menu-link" href="hub-account-password.html">Thay đổi mật khẩu</a>
						<!-- /SIDEBAR MENU LINK -->

					</div>
					<!-- /SIDEBAR MENU BODY -->
				</div>
				<!-- /SIDEBAR MENU ITEM -->
			</div>
			<!-- /SIDEBAR MENU -->

			<!-- SIDEBAR BOX FOOTER -->
			<div class="sidebar-box-footer">
				<p class="button primary postIU" data-id_studentu="{{$st->info->student_info_id}}">Cập nhật!</p>
			</div>
			<!-- /SIDEBAR BOX FOOTER -->
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
				<h2 class="section-title" style="color: white;">Thông tin cá nhân</h2>
				<!-- /SECTION TITLE -->
			</div>
			<!-- /SECTION HEADER INFO -->
		</div>
		<!-- /SECTION HEADER -->

		<!-- GRID COLUMN -->
		<div class="grid-column">
			<!-- GRID -->
			<div class="grid grid-3-3-3 centered">

				<!-- UPLOAD BOX -->
				<div class="upload-box">
					<!-- UPLOAD BOX ICON -->
					<svg class="upload-box-icon icon-members">
						<use xlink:href="#svg-members"></use>
					</svg>
					<!-- /UPLOAD BOX ICON -->
					<p class="upload-box-title">Thay đổi ảnh đại diện</p>
					<!-- UPLOAD BOX TITLE -->
					<center>
						<input style="width: 35%;" type="file" class="upload-box-title">
					</center>
					<!-- /UPLOAD BOX TITLE -->
				</div>
				<!-- /UPLOAD BOX -->
			</div>
			<!-- /GRID -->

			<!-- WIDGET BOX -->
			<div class="widget-box">
				<!-- WIDGET BOX TITLE -->
				<p class="widget-box-title">Thông tin chi tiết</p>
				<!-- /WIDGET BOX TITLE -->

				<!-- WIDGET BOX CONTENT -->
				<div class="widget-box-content">
					<!-- FORM -->
					<form class="form">
						<!-- FORM ROW -->
						<div class="form-row split">
							<!-- FORM ITEM -->
							<div class="form-item">
								<!-- FORM INPUT -->
								<div class="form-input small active">
									<label for="profile-name">Họ tên</label>
									<input type="text" value="<?php echo Session::get('student_name') ?>" disabled>
								</div>
								<!-- /FORM INPUT -->
							</div>
							<!-- /FORM ITEM -->
							<!-- FORM ITEM -->
							<div class="form-item">
								<!-- FORM INPUT -->
								<div class="form-input small active">
									<label for="profile-public-email">Email</label>
									<input type="text" value="<?php echo Session::get('student_email') ?>" disabled>
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
								<!-- FORM INPUT DECORATED -->
								<div class="form-input-decorated">
									<!-- FORM INPUT -->
									<div class="form-input small active">
										<label for="profile-birthday">Ngày sinh</label>
										<input type="date" id="profile-birthday" name="student_info_date" class="Sdate" value="{{$st->info->student_info_date}}">
									</div>
									<!-- /FORM INPUT -->

									<!-- FORM INPUT ICON -->
									<svg class="form-input-icon icon-events">
										<use xlink:href="#svg-events"></use>
									</svg>
									<!-- /FORM INPUT ICON -->
								</div>
								<!-- /FORM INPUT DECORATED -->
							</div>
							<!-- /FORM ITEM -->
							<!-- FORM ITEM -->
							<div class="form-item">
								<!-- FORM SELECT -->
								<div class="form-select">
									<label for="profile-country">Giới tính</label>
									<select id="profile-country" name="student_info_gender" class="Sgender">
										@if ($st->info->student_info_gender == 1)
										<option value="0"></option>
										<option value="1" selected="">Nam</option>
										<option value="2">Nữ</option>
										@elseif ($st->info->student_info_gender == 2)
										<option value="0"></option>
										<option value="1">Nam</option>
										<option value="2" selected>Nữ</option>
										@else
										<option value="0" selected></option>
										<option value="1">Nam</option>
										<option value="2">Nữ</option>
										@endif
									</select>
									<!-- FORM SELECT ICON -->
									<svg class="form-select-icon icon-small-arrow">
										<use xlink:href="#svg-small-arrow"></use>
									</svg>
									<!-- /FORM SELECT ICON -->
								</div>
								<!-- /FORM SELECT -->
							</div>
							<!-- /FORM ITEM -->
						</div>
						<!-- /FORM ROW -->

						<!-- FORM ROW -->
						<div class="form-row split">
							<div class="form-item">
								<div class="form-input small active">
									<label for="profile-faculty">Khoa</label>
									<input type="text" id="student_info_faculty" name="student_info_faculty" class="Sfaculty" value="{{$st->info->student_info_faculty}}">
								</div>
							</div>
							<div class="form-item">
								<div class="form-input small active">
									<label for="profile-specialized">Chuyên ngành</label>
									<input type="text" id="student_info_specialized" name="student_info_specialized" class="Sspecialized" value="{{$st->info->student_info_specialized}}">
								</div>
							</div>
							<div class="form-item">
								<div class="form-input small active">
									<label for="profile-course">Khóa hiện tại</label>
									<input type="text" id="student_info_course" name="student_info_course" class="Scourse" value="{{$st->info->student_info_course}}">
								</div>
							</div>
						</div>
						<div class="form-row split">
							<div class="form-item">
								<div class="form-input small active">
									<label for="profile-course">Địa chỉ</label>
									<input type="text" id="student_info_address" name="student_info_address" class="Saddress" value="{{$st->info->student_info_address}}">
								</div>
							</div>
						</div>
						<!-- /FORM ROW -->

						<!-- FORM ROW -->
						<div class="form-row split">
							<div class="form-item">
								<div class="form-input small full">
									<textarea id="profile-description" name="student_info_note" placeholder="Giới thiệu về bản thân..." class="Snote">{{$st->info->student_info_note}}</textarea>
								</div>
							</div>
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
@php
		}else{
@endphp
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
						<a class="sidebar-menu-link active" style="color: #007bff;">Thông tin cá nhân</a>

						<!-- SIDEBAR MENU LINK -->
						<a class="sidebar-menu-link" href="hub-profile-notifications.html">Tất cả thông báo</a>
						<!-- /SIDEBAR MENU LINK -->

						<!-- SIDEBAR MENU LINK -->
						<a class="sidebar-menu-link" href="hub-account-password.html">Thay đổi mật khẩu</a>
						<!-- /SIDEBAR MENU LINK -->

					</div>
					<!-- /SIDEBAR MENU BODY -->
				</div>
				<!-- /SIDEBAR MENU ITEM -->
			</div>
			<!-- /SIDEBAR MENU -->

			<!-- SIDEBAR BOX FOOTER -->
			<div class="sidebar-box-footer">
				<p class="button primary postI" data-id_student="<?php echo Session::get('student_id') ?>">Lưu!</p>
			</div>
			<!-- /SIDEBAR BOX FOOTER -->
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
				<h2 class="section-title" style="color: white;">Thông tin cá nhân</h2>
				<!-- /SECTION TITLE -->
			</div>
			<!-- /SECTION HEADER INFO -->
		</div>
		<!-- /SECTION HEADER -->

		<!-- GRID COLUMN -->
		<div class="grid-column">
			<!-- GRID -->
			<div class="grid grid-3-3-3 centered">

				<!-- UPLOAD BOX -->
				<div class="upload-box">
					<!-- UPLOAD BOX ICON -->
					<svg class="upload-box-icon icon-members">
						<use xlink:href="#svg-members"></use>
					</svg>
					<!-- /UPLOAD BOX ICON -->
					<p class="upload-box-title">Thay đổi ảnh đại diện</p>
					<!-- UPLOAD BOX TITLE -->
					<center>
						<input style="width: 35%;" type="file" class="upload-box-title">
					</center>
					<!-- /UPLOAD BOX TITLE -->
				</div>
				<!-- /UPLOAD BOX -->
			</div>
			<!-- /GRID -->

			<!-- WIDGET BOX -->
			<div class="widget-box">
				<!-- WIDGET BOX TITLE -->
				<p class="widget-box-title">Thông tin chi tiết</p>
				<!-- /WIDGET BOX TITLE -->

				<!-- WIDGET BOX CONTENT -->
				<div class="widget-box-content">
					<!-- FORM -->
					<form class="form">
						<!-- FORM ROW -->
						<div class="form-row split">
							<!-- FORM ITEM -->
							<div class="form-item">
								<!-- FORM INPUT -->
								<div class="form-input small active">
									<label for="profile-name">Họ tên</label>
									<input type="text" value="<?php echo Session::get('student_name') ?>" disabled>
								</div>
								<!-- /FORM INPUT -->
							</div>
							<!-- /FORM ITEM -->
							<!-- FORM ITEM -->
							<div class="form-item">
								<!-- FORM INPUT -->
								<div class="form-input small active">
									<label for="profile-public-email">Email</label>
									<input type="text" value="<?php echo Session::get('student_email') ?>" disabled>
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
								<!-- FORM INPUT DECORATED -->
								<div class="form-input-decorated">
									<!-- FORM INPUT -->
									<div class="form-input small active">
										<label for="profile-birthday">Ngày sinh</label>
										<input type="date" id="profile-birthday" name="student_info_date" class="Sdate">
									</div>
									<!-- /FORM INPUT -->

									<!-- FORM INPUT ICON -->
									<svg class="form-input-icon icon-events">
										<use xlink:href="#svg-events"></use>
									</svg>
									<!-- /FORM INPUT ICON -->
								</div>
								<!-- /FORM INPUT DECORATED -->
							</div>
							<!-- /FORM ITEM -->
							<!-- FORM ITEM -->
							<div class="form-item">
								<!-- FORM SELECT -->
								<div class="form-select">
									<label for="profile-country">Giới tính</label>
									<select id="profile-country" name="student_info_gender" class="Sgender">
										<option value="0"></option>
										<option value="1">Nam</option>
										<option value="2">Nữ</option>
									</select>
									<!-- FORM SELECT ICON -->
									<svg class="form-select-icon icon-small-arrow">
										<use xlink:href="#svg-small-arrow"></use>
									</svg>
									<!-- /FORM SELECT ICON -->
								</div>
								<!-- /FORM SELECT -->
							</div>
							<!-- /FORM ITEM -->
						</div>
						<!-- /FORM ROW -->

						<!-- FORM ROW -->
						<div class="form-row split">
							<div class="form-item">
								<div class="form-input small active">
									<label for="profile-faculty">Khoa</label>
									<input type="text" id="student_info_faculty" name="student_info_faculty" class="Sfaculty">
								</div>
							</div>
							<div class="form-item">
								<div class="form-input small active">
									<label for="profile-specialized">Chuyên ngành</label>
									<input type="text" id="student_info_specialized" name="student_info_specialized" class="Sspecialized">
								</div>
							</div>
							<div class="form-item">
								<div class="form-input small active">
									<label for="profile-course">Khóa hiện tại</label>
									<input type="text" id="student_info_course" name="student_info_course" class="Scourse">
								</div>
							</div>
						</div>
						<div class="form-row split">
							<div class="form-item">
								<div class="form-input small active">
									<label for="profile-course">Địa chỉ</label>
									<input type="text" id="student_info_address" name="student_info_address" class="Saddress">
								</div>
							</div>
						</div>
						<!-- /FORM ROW -->

						<!-- FORM ROW -->
						<div class="form-row split">
							<div class="form-item">
								<div class="form-input small full">
									<textarea id="profile-description" name="student_info_note" placeholder="Giới thiệu về bản thân..." class="Snote"></textarea>
								</div>
							</div>
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
@php
		}
	}
@endphp
@endsection