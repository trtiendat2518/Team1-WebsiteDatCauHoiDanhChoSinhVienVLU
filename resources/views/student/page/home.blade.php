@extends('student.layout')
@section('content')
<div class="content-grid">
	<!-- SECTION BANNER -->
	<div class="section-banner">
		<!-- SECTION BANNER ICON -->
		<img class="section-banner-icon" src="{{asset('public/student/img/banner/newsfeed-icon.png')}}" alt="newsfeed-icon">
		<!-- /SECTION BANNER ICON -->

		<!-- SECTION BANNER TITLE -->
		<p class="section-banner-title">Trang câu hỏi</p>
		<!-- /SECTION BANNER TITLE -->

		<!-- SECTION BANNER TEXT -->
		<p class="section-banner-text">Hãy là những người hỏi văn minh!</p>
		<!-- /SECTION BANNER TEXT -->
	</div>
	<!-- /SECTION BANNER -->

	<!-- GRID -->
	<div class="grid grid-3-6-3 mobile-prefer-content">
		<!-- GRID COLUMN -->
		<div class="grid-column">
			<!-- WIDGET BOX -->
			<div class="widget-box">
				<p class="widget-box-title">Loại câu hỏi</p>
				<div class="widget-box-content">
					<div class="user-status-list">
						@foreach ($category_post as $key => $val)
						<div class="user-status request-small">
							<a class="user-status-avatar" href="profile-timeline.html">
								<div class="user-avatar small no-outline">
									<div class="user-avatar-content">
										<div class="hexagon-image-30-32" data-src="{{asset('public/student/img/avatar/ques.png')}}"></div>
									</div>
								</div>
							</a>
							<p class="user-status-title"><a class="bold" href="{{url('/cau-hoi-theo-loai/'.$val->category_id)}}">{{$val->category_name}}</a></p>
							<p class="user-status-text small">24.5K profile views</p>
						</div>
						@endforeach
					</div>
				</div>
			</div>
			<a class="banner-promo" href="https://www.vanlanguni.edu.vn/" target="_blank">
				<img src="{{asset('public/student/img/banner/banner-default.jpg')}}" alt="banner-promo">
			</a>
			<!-- /BANNER PROMO -->
		</div>
		<!-- /GRID COLUMN -->

		<!-- GRID COLUMN -->
		<div class="grid-column">
			<!-- QUICK POST -->
			<div class="quick-post">
				<!-- QUICK POST HEADER -->
				<div class="quick-post-header">
					<!-- OPTION ITEMS -->
					<div class="option-items">
						<!-- OPTION ITEM -->
						<div class="option-item active">
							<!-- OPTION ITEM ICON -->
							<svg class="option-item-icon icon-status">
								<use xlink:href="#svg-status"></use>
							</svg>
							<!-- /OPTION ITEM ICON -->

							<!-- OPTION ITEM TITLE -->
							<p class="option-item-title">Câu hỏi</p>
							<!-- /OPTION ITEM TITLE -->
						</div>
					</div>
				</div>
				<div class="quick-post-body">
					<form class="form">
						@csrf
						<div class="form-row">
							<div class="form-item">
								<div class="form-textarea">
									<textarea minlength="10" maxlength="70" id="title" name="title" rows="1" class="title" placeholder="Tiêu đề" style="height: 50%"></textarea>
									<div class="form-row">
										<div class="form-item">
											<div class="form-select">
												<select style="background-color: #21283b; border-radius: 0px;" id="category" class="category" name="category">
													<option value="0">---Loại câu hỏi---</option>
													@foreach ($category_post as $key => $cate)
													<option value="{{$cate->category_id}}">{{$cate->category_name}}</option>
													@endforeach
												</select>
												<svg class="form-select-icon icon-small-arrow">
													<use xlink:href="#svg-small-arrow"></use>
												</svg>
											</div>
										</div>
									</div>
									<textarea minlength="50" maxlength="500" id="content" class="content" name="content" placeholder="Nội dung tối đa 500 ký tự"></textarea>
								</div>
							</div>
						</div>
						@php
						if(Session::get('student_id')){
							@endphp
							<button class="postQ button quick-post-footer-actions secondary" name="postQ" type="button">Đăng</button>
							@php
						}else{
							@endphp
							<a href="{{url('/login')}}" class=" button quick-post-footer-actions secondary btn-block" type="button">Đăng</a>
							@php
						}
						@endphp
					</form>
				</div>
			</div>

			<div class="simple-tab-items">
				<form class="form">
					<div class="form-select">
						<select id="newsfeed-filter-category" name="newsfeed_filter_category">
							<option value="0">Gần đây</option>
							<option value="1">Hot</option>
							<option value="2">Quan tâm</option>
							<option value="3">Xem nhiều</option>
						</select>
						<svg class="form-select-icon icon-small-arrow">
							<use xlink:href="#svg-small-arrow"></use>
						</svg>
					</div>
				</form>
				<p class="simple-tab-item active">Gần đây</p>
				<p class="simple-tab-item">Hot</p>
				<p class="simple-tab-item">Quan tâm</p>
				<p class="simple-tab-item">Xem nhiều</p>
			</div>
			@foreach ($post2 as $key => $post_info)
			<div class="widget-box no-padding">
				@php
				if(Session::get('student_email')==$post_info->post_student_email){
					@endphp
					<div class="widget-box-settings">
						<div class="post-settings-wrap">
							<div class="post-settings widget-box-post-settings-dropdown-trigger">
								<svg class="post-settings-icon icon-more-dots">
									<use xlink:href="#svg-more-dots"></use>
								</svg>
							</div>
							<div class="simple-dropdown widget-box-post-settings-dropdown">
								{{-- <a href="javascript:void(0)" type="button" class="postE simple-dropdown-link section-filters-bar-actions popup-event-creation-trigger" onclick="getPost({{$post_info->post_id}})" >Chỉnh sửa</a>
								<p></p> --}}
								<a href="javascript:void(0)" type="button" class="postD simple-dropdown-link" id="postD" data-id_post="{{$post_info->post_id}}">Xóa câu hỏi</a>
							</div>
						</div>
					</div>
					@php
				}
				@endphp
				<div class="widget-box-status">
					<div class="widget-box-status-content">
						<div class="user-status">
							<a class="user-status-avatar" href="profile-timeline.html">
								<div class="user-avatar small no-outline">
									<div class="user-avatar-content">
										<div class="hexagon-image-30-32" data-src="{{asset('public/student/img/avatar/04.jpg')}}"></div>
									</div>
									<div class="user-avatar-progress">
										<div class="hexagon-progress-40-44"></div>
									</div>
									<div class="user-avatar-progress-border">
										<div class="hexagon-border-40-44"></div>
									</div>
								</div>
							</a>
							<p class="user-status-title medium"><a class="bold" href="profile-timeline.html">{{$post_info->post_student_name}}</a></p>
							<p class="user-status-text small">{{ \Carbon\Carbon::parse($post_info->created_at)->diffForHumans() }}</p>
						</div>
						<p style="font-size: 20px;" class="widget-box-status-text">{{$post_info->post_title}}</p>
						<br>
						<p style="white-space: pre-line;" class="widget-box-status-text">{{$post_info->post_content}}</p>

						<div class="tag-list">
							<a class="tag-item secondary" style="font-size: 16px" href="{{url('/cau-hoi-theo-loai/'.$post_info->category_id)}}">{{$post_info->category_name}}</a>
						</div>

						<div class="content-actions">
							<div class="content-action">
								<div class="meta-line">
									<div class="meta-line-list reaction-item-list">
										<div class="reaction-item">
											<img class="reaction-image reaction-item-dropdown-trigger" src="{{asset('public/student/img/reaction/like.png')}}" alt="reaction-like">
											<div class="simple-dropdown padded reaction-item-dropdown">
												<p class="simple-dropdown-text"><img class="reaction" src="{{asset('public/student/img/reaction/like.png')}}" alt="reaction-like"> <span class="bold">Like</span></p>
											</div>
										</div>
									</div>
									<p class="meta-line-text">11</p>
								</div>
							</div>
							<div class="content-action">
								<div class="meta-line">
									<p class="meta-line-link">{{$post_info->comments()->count()}} Lượt bình luận</p>
								</div>
								<div class="meta-line">
									<p class="meta-line-text">1 Câu trả lời</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="post-options">
					<div class="post-option-wrap">
						<div class="post-option reaction-options-dropdown-trigger">
							<svg class="post-option-icon icon-thumbs-up">
								<use xlink:href="#svg-thumbs-up"></use>
							</svg>
							<p class="post-option-text">Thích</p>
						</div>
						<div class="reaction-options reaction-options-dropdown">
							<div class="reaction-option text-tooltip-tft" data-title="Like">
								<img class="reaction-option-image" src="{{asset('public/student/img/reaction/like.png')}}" alt="reaction-like">
							</div>
						</div>
					</div>
					<div class="post-option showCmt" data-toggle="tab" data-id_a="{{$post_info->post_id}}" id="show_{{$post_info->post_id}}">
						<svg class="post-option-icon icon-comment">
							<use xlink:href="#svg-comment"></use>
						</svg>
						<p class="post-option-text">Bình luận</p>
					</div>
					<div class="post-option">
						<svg class="post-option-icon icon-share">
							<use xlink:href="#svg-share"></use>
						</svg>
						<p class="post-option-text">Câu trả lời của Khoa</p>
					</div>
				</div>
				<!-- POST COMMENT LIST -->
				<div id="commentId_{{$post_info->post_id}}" style="display: none;" class="post-comment-list ">
					<!-- POST COMMENT HEADING -->
					<p class="post-comment-heading">Xem thêm...</p>
					<!-- /POST COMMENT HEADING -->
					<!-- POST COMMENT -->
					@foreach ($post_info->comments as $key => $cmt)
					<div class="post-comment">
						<!-- USER AVATAR -->
						@if (Session::get('student_id')==$cmt->student->student_id)
						<div class="widget-box-settings">
							<div class="post-settings-wrap">
								<div class="post-settings widget-box-post-settings-dropdown-trigger">
									<svg class="post-settings-icon icon-more-dots">
										<use xlink:href="#svg-more-dots"></use>
									</svg>
								</div>
								<div class="simple-dropdown widget-box-post-settings-dropdown">
									<a href="javascript:void(0)" type="button" class="postCD simple-dropdown-link" id="postCD" data-id_cmt="{{$cmt->comment_id}}">Xóa bình luận</a>
								</div>
							</div>
						</div>
						@endif
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
						</a>
						<p class="post-comment-text"><a class="post-comment-text-author" href="profile-timeline.html" style="color: #007bff;">{{$cmt->student->student_name}}</a>
							<span style="font-size: 10px;">{{ \Carbon\Carbon::parse($cmt->created_at)->diffForHumans() }}</span>
							<p>{{$cmt->comment_content}}</p>
						</p>
					</div>
					@endforeach
					<!-- /POST COMMENT -->
					<!-- POST COMMENT FORM -->
					<div class="post-comment-form">
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
						</div>
						<!-- /USER AVATAR -->

						<!-- FORM -->
						<form class="form">
							@csrf
							<!-- FORM ROW -->
							<div class="form-row">
								<!-- FORM ITEM -->
								<div class="form-item">
									<!-- FORM INPUT -->
									<div class="form-input small" style="margin-bottom: 50px;">
										<label for="post-reply">Bình luận của bạn</label>
										<textarea class="cmtcontent_{{$post_info->post_id}}" name="comment_content" rows="5" id="post-reply"></textarea>
										@php
										if(Session::get('student_id')){
											@endphp
											<button style="margin-top: 110px; width: 90px;" type="button" data-id_post="{{$post_info->post_id}}" class="postC button secondary">Gửi</button>
											@php
										}else{
											@endphp
											<a href="{{url('/login')}}" style="margin-left: 360px; width: 90px;" type="button" class="button secondary">Gửi</a>
											@php
										}
										@endphp
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
				<!-- /POST COMMENT LIST -->
			</div>
			@endforeach
			<!-- SECTION PAGER BAR -->
			<div class="section-pager-bar" style="width: 360px;">
				<!-- SECTION PAGER -->
				<div class="section-pager">
					<!-- SECTION PAGER ITEM -->
					<div class="section-pager-item active">
						<!-- SECTION PAGER ITEM TEXT -->
						<center>
							<span>{!! $post2->render("pagination::bootstrap-4") !!}</span>
						</center>

						<!-- /SECTION PAGER ITEM TEXT -->
					</div>
					<!-- /SECTION PAGER ITEM -->
				</div>
			</div>
			<!-- /SECTION PAGER -->
		</div>
		<!-- /GRID COLUMN -->

		<!-- GRID COLUMN -->
		<div class="grid-column">
			<!-- STATS BOX SLIDER -->
			<div class="stats-box-slider">
				<!-- STATS BOX SLIDER CONTROLS -->
				<div class="stats-box-slider-controls">
					<!-- STATS BOX SLIDER CONTROLS TITLE -->
					<p class="stats-box-slider-controls-title">Stats Box</p>
					<!-- /STATS BOX SLIDER CONTROLS TITLE -->

					<!-- SLIDER CONTROLS -->
					<div id="stats-box-slider-controls" class="slider-controls">
						<!-- SLIDER CONTROL -->
						<div class="slider-control negative left">
							<!-- SLIDER CONTROL ICON -->
							<svg class="slider-control-icon icon-small-arrow">
								<use xlink:href="#svg-small-arrow"></use>
							</svg>
							<!-- /SLIDER CONTROL ICON -->
						</div>
						<!-- /SLIDER CONTROL -->

						<!-- SLIDER CONTROL -->
						<div class="slider-control negative right">
							<!-- SLIDER CONTROL ICON -->
							<svg class="slider-control-icon icon-small-arrow">
								<use xlink:href="#svg-small-arrow"></use>
							</svg>
							<!-- /SLIDER CONTROL ICON -->
						</div>
						<!-- /SLIDER CONTROL -->
					</div>
					<!-- /SLIDER CONTROLS -->
				</div>
				<!-- /STATS BOX SLIDER CONTROLS -->

				<!-- STATS BOX SLIDER ITEMS -->
				<div id="stats-box-slider-items" class="stats-box-slider-items">
					<!-- STATS BOX -->
					<div class="stats-box stat-profile-views">
						<!-- STATS BOX VALUE WRAP -->
						<div class="stats-box-value-wrap">
							<!-- STATS BOX VALUE -->
							<p class="stats-box-value">87.365</p>
							<!-- /STATS BOX VALUE -->

							<!-- STATS BOX DIFF -->
							<div class="stats-box-diff">
								<!-- STATS BOX DIFF ICON -->
								<div class="stats-box-diff-icon positive">
									<!-- ICON PLUS SMALL -->
									<svg class="icon-plus-small">
										<use xlink:href="#svg-plus-small"></use>
									</svg>
									<!-- /ICON PLUS SMALL -->
								</div>
								<!-- /STATS BOX DIFF ICON -->

								<!-- STATS BOX DIFF VALUE -->
								<p class="stats-box-diff-value">3.2%</p>
								<!-- /STATS BOX DIFF VALUE -->
							</div>
							<!-- /STATS BOX DIFF -->
						</div>
						<!-- /STATS BOX VALUE WRAP -->

						<!-- STATS BOX TITLE -->
						<p class="stats-box-title">Profile Views</p>
						<!-- /STATS BOX TITLE -->

						<!-- STATS BOX TEXT -->
						<p class="stats-box-text">In the last month</p>
						<!-- /STATS BOX TEXT -->
					</div>
					<!-- /STATS BOX -->

					<!-- STATS BOX -->
					<div class="stats-box stat-posts-created">
						<!-- STATS BOX VALUE WRAP -->
						<div class="stats-box-value-wrap">
							<!-- STATS BOX VALUE -->
							<p class="stats-box-value">294</p>
							<!-- /STATS BOX VALUE -->

							<!-- STATS BOX DIFF -->
							<div class="stats-box-diff">
								<!-- STATS BOX DIFF ICON -->
								<div class="stats-box-diff-icon positive">
									<!-- ICON PLUS SMALL -->
									<svg class="icon-plus-small">
										<use xlink:href="#svg-plus-small"></use>
									</svg>
									<!-- /ICON PLUS SMALL -->
								</div>
								<!-- /STATS BOX DIFF ICON -->

								<!-- STATS BOX DIFF VALUE -->
								<p class="stats-box-diff-value">0.4%</p>
								<!-- /STATS BOX DIFF VALUE -->
							</div>
							<!-- /STATS BOX DIFF -->
						</div>
						<!-- /STATS BOX VALUE WRAP -->

						<!-- STATS BOX TITLE -->
						<p class="stats-box-title">Posts Created</p>
						<!-- /STATS BOX TITLE -->

						<!-- STATS BOX TEXT -->
						<p class="stats-box-text">In the last month</p>
						<!-- /STATS BOX TEXT -->
					</div>
					<!-- /STATS BOX -->

					<!-- STATS BOX -->
					<div class="stats-box stat-reactions-received">
						<!-- STATS BOX VALUE WRAP -->
						<div class="stats-box-value-wrap">
							<!-- STATS BOX VALUE -->
							<p class="stats-box-value">2560</p>
							<!-- /STATS BOX VALUE -->

							<!-- STATS BOX DIFF -->
							<div class="stats-box-diff">
								<!-- STATS BOX DIFF ICON -->
								<div class="stats-box-diff-icon negative">
									<!-- ICON MINUS SMALL -->
									<svg class="icon-minus-small">
										<use xlink:href="#svg-minus-small"></use>
									</svg>
									<!-- /ICON MINUS SMALL -->
								</div>
								<!-- /STATS BOX DIFF ICON -->

								<!-- STATS BOX DIFF VALUE -->
								<p class="stats-box-diff-value">1.8%</p>
								<!-- /STATS BOX DIFF VALUE -->
							</div>
							<!-- /STATS BOX DIFF -->
						</div>
						<!-- /STATS BOX VALUE WRAP -->

						<!-- STATS BOX TITLE -->
						<p class="stats-box-title">Reactions Received</p>
						<!-- /STATS BOX TITLE -->

						<!-- STATS BOX TEXT -->
						<p class="stats-box-text">In the last month</p>
						<!-- /STATS BOX TEXT -->
					</div>
					<!-- /STATS BOX -->

					<!-- STATS BOX -->
					<div class="stats-box stat-comments-received">
						<!-- STATS BOX VALUE WRAP -->
						<div class="stats-box-value-wrap">
							<!-- STATS BOX VALUE -->
							<p class="stats-box-value">947</p>
							<!-- /STATS BOX VALUE -->

							<!-- STATS BOX DIFF -->
							<div class="stats-box-diff">
								<!-- STATS BOX DIFF ICON -->
								<div class="stats-box-diff-icon positive">
									<!-- ICON PLUS SMALL -->
									<svg class="icon-plus-small">
										<use xlink:href="#svg-plus-small"></use>
									</svg>
									<!-- /ICON PLUS SMALL -->
								</div>
								<!-- /STATS BOX DIFF ICON -->

								<!-- STATS BOX DIFF VALUE -->
								<p class="stats-box-diff-value">4.5%</p>
								<!-- /STATS BOX DIFF VALUE -->
							</div>
							<!-- /STATS BOX DIFF -->
						</div>
						<!-- /STATS BOX VALUE WRAP -->

						<!-- STATS BOX TITLE -->
						<p class="stats-box-title">Comments Received</p>
						<!-- /STATS BOX TITLE -->

						<!-- STATS BOX TEXT -->
						<p class="stats-box-text">In the last month</p>
						<!-- /STATS BOX TEXT -->
					</div>
					<!-- /STATS BOX -->
				</div>
				<!-- /STATS BOX SLIDER ITEMS -->
			</div>
			<!-- /STATS BOX SLIDER -->

			<!-- WIDGET BOX -->
			<div class="widget-box">
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
							<p class="simple-dropdown-link">Widget Settings</p>
							<!-- /SIMPLE DROPDOWN LINK -->
						</div>
						<!-- /SIMPLE DROPDOWN -->
					</div>
					<!-- /POST SETTINGS WRAP -->
				</div>
				<!-- /WIDGET BOX SETTINGS -->

				<!-- WIDGET BOX TITLE -->
				<p class="widget-box-title">Friends Activity</p>
				<!-- /WIDGET BOX TITLE -->

				<!-- WIDGET BOX CONTENT -->
				<div class="widget-box-content">
					<!-- USER STATUS LIST -->
					<div class="user-status-list">
						<!-- USER STATUS -->
						<div class="user-status">
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
							<p class="user-status-title"><a class="bold" href="profile-timeline.html">Neko Bebop</a> commented on Destroy Dex's <a class="highlighted" href="profile-timeline.html">photo</a></p>
							<!-- /USER STATUS TITLE -->

							<!-- USER STATUS TIMESTAMP -->
							<p class="user-status-timestamp">3 minutes ago</p>
							<!-- /USER STATUS TIMESTAMP -->
						</div>
						<!-- /USER STATUS -->

						<!-- USER STATUS -->
						<div class="user-status">
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
							<p class="user-status-title"><a class="bold" href="profile-timeline.html">Nick Grissom</a> liked Marina Valentine's <a class="highlighted" href="profile-timeline.html">status update</a></p>
							<!-- /USER STATUS TITLE -->

							<!-- USER STATUS TIMESTAMP -->
							<p class="user-status-timestamp">12 minutes ago</p>
							<!-- /USER STATUS TIMESTAMP -->
						</div>
						<!-- /USER STATUS -->

						<!-- USER STATUS -->
						<div class="user-status">
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
							<p class="user-status-title"><a class="bold" href="profile-timeline.html">The Green Goo</a> liked Nick Grissom's <a class="highlighted" href="profile-timeline.html">video</a></p>
							<!-- /USER STATUS TITLE -->

							<!-- USER STATUS TIMESTAMP -->
							<p class="user-status-timestamp">17 minutes ago</p>
							<!-- /USER STATUS TIMESTAMP -->
						</div>
						<!-- /USER STATUS -->

						<!-- USER STATUS -->
						<div class="user-status">
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
							<p class="user-status-title"><a class="bold" href="profile-timeline.html">Nick Grissom</a> changed his <a class="highlighted" href="profile-timeline.html">profile picture</a></p>
							<!-- /USER STATUS TITLE -->

							<!-- USER STATUS TIMESTAMP -->
							<p class="user-status-timestamp">33 minutes ago</p>
							<!-- /USER STATUS TIMESTAMP -->
						</div>
						<!-- /USER STATUS -->

						<!-- USER STATUS -->
						<div class="user-status">
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
										<p class="user-avatar-badge-text">19</p>
										<!-- /USER AVATAR BADGE TEXT -->
									</div>
									<!-- /USER AVATAR BADGE -->
								</div>
								<!-- /USER AVATAR -->
							</a>
							<!-- /USER STATUS AVATAR -->

							<!-- USER STATUS TITLE -->
							<p class="user-status-title"><a class="bold" href="profile-timeline.html">Destroy Dex</a> commented on Rosie Sakura's <a class="highlighted" href="profile-timeline.html">profile</a></p>
							<!-- /USER STATUS TITLE -->

							<!-- USER STATUS TIMESTAMP -->
							<p class="user-status-timestamp">41 minutes ago</p>
							<!-- /USER STATUS TIMESTAMP -->
						</div>
						<!-- /USER STATUS -->
					</div>
					<!-- /USER STATUS LIST -->
				</div>
				<!-- WIDGET BOX CONTENT -->
			</div>
			<!-- /WIDGET BOX -->
		</div>
		<!-- /GRID COLUMN -->
	</div>
	<!-- /GRID -->
</div>
@endsection