@extends('student.layout')
@section('content_header')
<!-- SECTION BANNER -->
<div class="section-banner">
	<!-- SECTION BANNER ICON -->
	<img class="section-banner-icon" src="{{asset('public/student/img/banner/newsfeed-icon.png')}}" alt="newsfeed-icon">
	<!-- /SECTION BANNER ICON -->

	<!-- SECTION BANNER TITLE -->
	<p class="section-banner-title">Kết quả tìm kiếm</p>
	<!-- /SECTION BANNER TITLE -->

	<!-- SECTION BANNER TEXT -->
	<p class="section-banner-text">Hãy là những người hỏi văn minh!</p>
	<!-- /SECTION BANNER TEXT -->
</div>
<!-- /SECTION BANNER -->
@endsection
@section('content_body')
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
					@if ($val->category_status==0)
					<div class="user-status request-small">
						<a class="user-status-avatar" href="{{url('/cau-hoi-theo-loai/'.$val->category_id)}}">
							<div class="user-avatar small no-outline">
								<div class="user-avatar-content">
									<div class="hexagon-image-30-32" data-src="{{asset('public/student/img/avatar/ques.png')}}"></div>
								</div>
							</div>
						</a>
						<p class="user-status-title"><a class="bold" href="{{url('/cau-hoi-theo-loai/'.$val->category_id)}}">{{$val->category_name}}</a></p>
						<p class="user-status-text small">Có {{$val->posts()->count()}} câu hỏi</p>
					</div>
					@endif
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
												@if ($cate->category_status==0)
												<option value="{{$cate->category_id}}">{{$cate->category_name}}</option>
												@endif
												@endforeach
											</select>
											<svg class="form-select-icon icon-small-arrow">
												<use xlink:href="#svg-small-arrow"></use>
											</svg>
										</div>
									</div>
								</div>
								<textarea minlength="50" maxlength="500" id="content" class="content" name="content" placeholder="Nội dung tối đa 500 ký tự..."></textarea>
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
		
		@foreach ($search_product as $key => $post_info)
		<div class="widget-box no-padding optionsocial">
			@php
			if(Session::get('student_email')==$post_info->student->student_email){
				@endphp
				<div class="widget-box-settings">
					<div class="post-settings-wrap">
						<div class="post-settings widget-box-post-settings-dropdown-trigger">
							<svg class="post-settings-icon icon-more-dots">
								<use xlink:href="#svg-more-dots"></use>
							</svg>
						</div>
						<div class="simple-dropdown widget-box-post-settings-dropdown">
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
						<a class="user-status-avatar" href="{{url('/trang-sinh-vien/'.$post_info->student_id)}}">
							<div class="user-avatar small no-outline">
								<div class="user-avatar-content">
									@if ($post_info->student->student_info_id)
									<div class="hexagon-image-30-32" data-src="{{asset('public/student/img/avatar/'.$post_info->student->student_avatar)}}"></div>
									@else
									<div class="hexagon-image-30-32" data-src="{{asset('public/student/img/avatar/noavatar.jpg')}}"></div>
									@endif
								</div>
								<div class="user-avatar-progress">
									<div class="hexagon-progress-40-44"></div>
								</div>
								<div class="user-avatar-progress-border">
									<div class="hexagon-border-40-44"></div>
								</div>
							</div>
						</a>
						<p class="user-status-title medium"><a class="bold" href="{{url('/trang-sinh-vien/'.$post_info->student_id)}}">{{$post_info->student->student_name}}</a></p>
						<p class="user-status-text small">{{ \Carbon\Carbon::parse($post_info->created_at)->diffForHumans() }}</p>
					</div>
					<p style="font-size: 20px; word-wrap:break-word;" class="widget-box-status-text">{{$post_info->post_title}}</p>
					<br>
					<p style="white-space: pre-line; word-wrap:break-word;" class="read-more widget-box-status-text">{{$post_info->post_content}}</p>

					<div class="tag-list">
						@if ($post_info->category_id==0)
						<a class="tag-item secondary" style="font-size: 16px" href="javascript:void(0)">Loại câu hỏi đã bị xóa</a>
						@else
						<a class="tag-item secondary" style="font-size: 16px" href="{{url('/cau-hoi-theo-loai/'.$post_info->category_id)}}">{{$post_info->category->category_name}}</a>
						@endif
					</div>

					<div class="content-actions">
						<div class="content-action">
							<div class="meta-line">
								<div class="meta-line-list reaction-item-list">
									<div class="reaction-item">
										<img class="reaction-image" src="{{asset('public/student/img/reaction/like.png')}}" alt="reaction-like">
									</div>
								</div>
								<p class="meta-line-text likelike">{{$post_info->post_like}}</p>
							</div>
						</div>
						<div class="content-action">
							<div class="meta-line">
								<p class="meta-line-link">{{$post_info->comments()->count()}} Lượt bình luận</p>
							</div>
							@if ($post_info->post_reply=='')
							<div class="meta-line">
								<p class="meta-line-text">Chưa có câu trả lời</p>
							</div>
							@else
							<div class="meta-line">
								<p class="meta-line-text">Đã trả lời</p>
							</div>
							@endif
						</div>
					</div>
				</div>
			</div>
			<div class="post-options">
				@php
				if ($post_info->likes->contains('student_id',Session::get('student_id')) && $post_info->likes->contains('post_id',$post_info->post_id) && $post_info->likes->contains('like_quantity',1)){
					@endphp
					<div class="post-option-wrap postL" data-id_like="{{$post_info->post_id}}">
						<div class="post-option likeunlike active">
							<svg class="post-option-icon icon-thumbs-up">
								<use xlink:href="#svg-thumbs-up"></use>
							</svg>
							<p class="post-option-text">Thích</p>
						</div>
					</div>
					@php
				}else if(Session::get('student_id')){
					@endphp
					<div class="post-option-wrap postL" data-id_like="{{$post_info->post_id}}">
						<div class="post-option unlikelike">
							<svg class="post-option-icon icon-thumbs-up">
								<use xlink:href="#svg-thumbs-up"></use>
							</svg>
							<p class="post-option-text">Thích</p>
						</div>
					</div>
					@php
				}
				@endphp
				
				<div class="post-option showCmt" data-toggle="tab" data-id_a="{{$post_info->post_id}}" id="show_{{$post_info->post_id}}">
					<svg class="post-option-icon icon-comment">
						<use xlink:href="#svg-comment"></use>
					</svg>
					<p class="post-option-text">Bình luận</p>
				</div>
				
				@if ($post_info->post_reply=='')
				<div class="post-option">
					<svg class="post-option-icon icon-share">
						<use xlink:href="#svg-quests"></use>
					</svg>
					<p class="post-option-text">Đợi khoa trả lời nhé</p>
				</div>
				@else
				<div class="post-option popup-event-creation-trigger" onclick="getPost({{$post_info->post_id}})">
					<svg class="post-option-icon icon-share">
						<use xlink:href="#svg-quests"></use>
					</svg>
					<p class="post-option-text">Câu trả lời của Khoa</p>
				</div>
				@endif
			</div>
			<!-- POST COMMENT LIST -->
			<div id="commentId_{{$post_info->post_id}}" style="display: none;"  class="post-comment-list ">
				<div class="post-comment-form">
					@php
					if(Session::get('student_id')){
						@endphp
						<div class="user-avatar small no-outline">
							<div class="user-avatar-content">
								@foreach ($studentSS as $avaSS)
								@if ($avaSS->student_info_id)
								<div class="hexagon-image-30-32" data-src="{{asset('public/student/img/avatar/'.$avaSS->info->student_info_avatar)}}"></div>
								@else
								<div class="hexagon-image-30-32" data-src="{{asset('public/student/img/avatar/noavatar.jpg')}}"></div>
								@endif
								@endforeach
							</div>
							<div class="user-avatar-progress">
								<div class="hexagon-progress-40-44"></div>
							</div>
							<div class="user-avatar-progress-border">
								<div class="hexagon-border-40-44"></div>
							</div>
						</div>
						<form class="form">
							@csrf
							<div class="form-row">
								<div class="form-item">
									<div class="form-input small">
										<label style="margin-top: 20px; margin-left: 80px;" for="post-reply">Bình luận của bạn</label>
										<textarea style="height: 0%; width: 70%; margin-top: 20px; margin-left: 80px;" class="cmtcontent_{{$post_info->post_id}}" name="comment_content" rows="2" id="post-reply"></textarea>
										<button style="margin-top: 60px; line-height: 0px; height: 30px; margin-right: 10px" type="button" data-id_post="{{$post_info->post_id}}" class="postC button secondary">Gửi</button>
									</div>
								</div>
							</div>
						</form>
						@php
					}else{
						@endphp
						<p class="post-comment-heading" style="color: #e3f850;">Bạn cần đăng nhập để có thể bình luận</p>
						@php
					}
					@endphp
				</div>
				<div id="all_cmt">
					<input type="hidden" name="postId" class="postId" value="{{$post_info->post_id}}">
					@foreach ($post_info->comments as $key => $cmt)
					<div style="display: none;" class="post-comment lineCmt_{{$post_info->post_id}}" id="lineCmt_{{$post_info->post_id}}">
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
						<a class="user-avatar small no-outline" href="{{url('/trang-sinh-vien/'.$post_info->student_id)}}">
							<div class="user-avatar-content">
								@if ($cmt->student->student_info_id)
								<div class="hexagon-image-30-32" data-src="{{asset('public/student/img/avatar/'.$cmt->student->student_avatar)}}"></div>
								@else
								<div class="hexagon-image-30-32" data-src="{{asset('public/student/img/avatar/noavatar.jpg')}}"></div>
								@endif
							</div>
							<div class="user-avatar-progress">
								<div class="hexagon-progress-40-44"></div>
							</div>
							<div class="user-avatar-progress-border">
								<div class="hexagon-border-40-44"></div>
							</div>
						</a>
						<p class="post-comment-text"><a class="post-comment-text-author" href="{{url('/trang-sinh-vien/'.$cmt->student->student_id)}}" style="color: #007bff;">{{$cmt->student->student_name}}</a>
							<span class="user-status-text small">
								{{ \Carbon\Carbon::parse($cmt->created_at)->diffForHumans() }} 
							</span>
							<p style="white-space: pre-line; word-wrap:break-word;">{{$cmt->comment_content}}</p>
						</p>
					</div>
					@endforeach
				</div>
				@if ($post_info->comments()->count() > 3)
				<p class="post-comment-heading loadM_{{$post_info->post_id}}">Xem thêm...</p>
				@endif
			</div>
			<!-- /POST COMMENT LIST -->
		</div>
		@endforeach
	</div>
	<!-- /GRID COLUMN -->
	<!-- /GRID COLUMN -->
	<div class="grid-column">
		<!-- STATS BOX SLIDER -->
		<div class="stats-box-slider">
			<!-- STATS BOX SLIDER CONTROLS -->
			<div class="stats-box-slider-controls">
				<!-- STATS BOX SLIDER CONTROLS TITLE -->
				<p class="stats-box-slider-controls-title">Thống kê</p>
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
						<p class="stats-box-value"><?php echo $mypost_count; ?></p>
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
							<p class="stats-box-diff-value">0.0%</p>
							<!-- /STATS BOX DIFF VALUE -->
						</div>
						<!-- /STATS BOX DIFF -->
					</div>
					<!-- /STATS BOX VALUE WRAP -->

					<!-- STATS BOX TITLE -->
					<p class="stats-box-title">Tổng tất cả</p>
					<!-- /STATS BOX TITLE -->

					<!-- STATS BOX TEXT -->
					<p class="stats-box-text">Số lượng câu hỏi của tôi</p>
					<!-- /STATS BOX TEXT -->
				</div>
				<!-- /STATS BOX -->

				<!-- STATS BOX -->
				<div class="stats-box stat-posts-created">
					<!-- STATS BOX VALUE WRAP -->
					<div class="stats-box-value-wrap">
						<!-- STATS BOX VALUE -->
						<p class="stats-box-value"><?php echo $mylike_count; ?></p>
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
							<p class="stats-box-diff-value">0.0%</p>
							<!-- /STATS BOX DIFF VALUE -->
						</div>
						<!-- /STATS BOX DIFF -->
					</div>
					<!-- /STATS BOX VALUE WRAP -->

					<!-- STATS BOX TITLE -->
					<p class="stats-box-title">Tổng tất cả</p>
					<!-- /STATS BOX TITLE -->

					<!-- STATS BOX TEXT -->
					<p class="stats-box-text">Số lượng đã thích</p>
					<!-- /STATS BOX TEXT -->
				</div>
				<!-- /STATS BOX -->

				<!-- STATS BOX -->
				<div class="stats-box stat-reactions-received">
					<!-- STATS BOX VALUE WRAP -->
					<div class="stats-box-value-wrap">
						<!-- STATS BOX VALUE -->
						<p class="stats-box-value"><?php echo $mycmt_count; ?></p>
						<!-- /STATS BOX VALUE -->

						<!-- STATS BOX DIFF -->
						<div class="stats-box-diff">
							<!-- STATS BOX DIFF ICON -->
							<div class="stats-box-diff-icon negative">
								<!-- ICON MINUS SMALL -->
								<svg class="icon-plus-small">
									<use xlink:href="#svg-plus-small"></use>
								</svg>
								<!-- /ICON MINUS SMALL -->
							</div>
							<!-- /STATS BOX DIFF ICON -->

							<!-- STATS BOX DIFF VALUE -->
							<p class="stats-box-diff-value">0.0%</p>
							<!-- /STATS BOX DIFF VALUE -->
						</div>
						<!-- /STATS BOX DIFF -->
					</div>
					<!-- /STATS BOX VALUE WRAP -->

					<!-- STATS BOX TITLE -->
					<p class="stats-box-title">Tổng tất cả</p>
					<!-- /STATS BOX TITLE -->

					<!-- STATS BOX TEXT -->
					<p class="stats-box-text">Số lượng đã bình luận</p>
					<!-- /STATS BOX TEXT -->
				</div>
				<!-- /STATS BOX -->
			</div>
			<!-- /STATS BOX SLIDER ITEMS -->
		</div>
		<!-- /STATS BOX SLIDER -->

		<!-- WIDGET BOX -->
		<div class="widget-box">
			<!-- WIDGET BOX TITLE -->
			<p class="widget-box-title">TOP Câu Hỏi</p>
			<!-- /WIDGET BOX TITLE -->

			<!-- WIDGET BOX CONTENT -->
			<div class="widget-box-content">
				<!-- USER STATUS LIST -->
				<div class="user-status-list">
					@foreach ($posthot as $key => $hot)
					<!-- USER STATUS -->
					<div class="user-status">
						<!-- USER STATUS AVATAR -->
						<a class="user-status-avatar" href="{{url('/trang-sinh-vien/'.$hot->student_id)}}">
							<!-- USER AVATAR -->
							<div class="user-avatar small no-outline">
								<!-- USER AVATAR CONTENT -->
								<div class="user-avatar-content">
									@if ($hot->student->student_info_id)
									<div class="hexagon-image-30-32" data-src="{{asset('public/student/img/avatar/'.$hot->student->student_avatar)}}"></div>
									@else
									<div class="hexagon-image-30-32" data-src="{{asset('public/student/img/avatar/noavatar.jpg')}}"></div>
									@endif
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

						<!-- USER STATUS TITLE -->
						<p class="user-status-title">Bài viết <a class="highlighted" href="{{url('/chi-tiet-cau-hoi/'.$hot->post_id)}}">{{$hot->post_title}}</a> của <a class="bold" href="{{url('/trang-sinh-vien/'.$hot->student_id)}}">{{$hot->student->student_name}}</a></p>
						<!-- /USER STATUS TITLE -->
					</div>
					<!-- /USER STATUS -->
					@endforeach
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
@endsection
