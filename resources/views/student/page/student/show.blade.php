@extends('student.layout')
@section('content_header')
<div class="section-banner">
	<img class="section-banner-icon" src="{{asset('public/student/img/banner/newsfeed-icon.png')}}" alt="newsfeed-icon">
	<p class="section-banner-title">Trang cá nhân</p>
	<p class="section-banner-text">@php
	echo Session::get('student_name');
@endphp</p>
</div>
@endsection
@section('content_body')
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
							<textarea id="title" name="title" rows="1" class="title" placeholder="Tiêu đề" style="height: 50%"></textarea>
							<div class="form-row">
								<div class="form-item">
									<div class="form-select">
										<select style="background-color: #21283b; border-radius: 0px;" id="category" class="category" name="category">
											<option value="0" selected>Loại câu hỏi</option>
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
							<textarea id="content" class="content" name="content" placeholder="Nội dung"></textarea>
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
	@foreach ($student_by_id as $key => $post_info)
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
					<p class="user-status-title medium"><a class="bold" href="profile-timeline.html">{{$post_info->student->student_name}}</a></p>
					<p class="user-status-text small">{{ \Carbon\Carbon::parse($post_info->created_at)->diffForHumans() }}</p>
				</div>
				<p style="font-size: 20px;" class="widget-box-status-text">{{$post_info->post_title}}</p>
				<br>
				<p style="white-space: pre-line;" class="widget-box-status-text">{{$post_info->post_content}}</p>

				<div class="tag-list">
					<a class="tag-item secondary" style="font-size: 16px" href="{{url('/cau-hoi-theo-loai/'.$post_info->category_id)}}">{{$post_info->category->category_name}}</a>
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
			
			@if (Session::get('student_id'))
			<div class="post-option showCmt" data-toggle="tab" data-id_a="{{$post_info->post_id}}" id="show_{{$post_info->post_id}}">
				<svg class="post-option-icon icon-comment">
					<use xlink:href="#svg-comment"></use>
				</svg>
				<p class="post-option-text">Bình luận</p>
			</div>
			@endif
			
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
							<div class="hexagon-image-30-32" data-src="{{asset('public/student/img/avatar/01.jpg')}}"></div>
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
					<a class="user-avatar small no-outline" href="profile-timeline.html">
						<div class="user-avatar-content">
							<div class="hexagon-image-30-32" data-src="{{asset('public/student/img/avatar/05.jpg')}}"></div>
						</div>
						<div class="user-avatar-progress">
							<div class="hexagon-progress-40-44"></div>
						</div>
						<div class="user-avatar-progress-border">
							<div class="hexagon-border-40-44"></div>
						</div>
					</a>
					<p class="post-comment-text"><a class="post-comment-text-author" href="profile-timeline.html" style="color: #007bff;">{{$cmt->student->student_name}}</a>
						<span class="user-status-text small">
							{{ \Carbon\Carbon::parse($cmt->created_at)->diffForHumans() }} 
						</span>
						<p>{{$cmt->comment_content}}</p>
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
	<!-- SECTION PAGER BAR -->
	<div class="section-pager-bar" style="width: 360px;">
		<!-- SECTION PAGER -->
		<div class="section-pager">
			<!-- SECTION PAGER ITEM -->
			<div class="section-pager-item active">
				<!-- SECTION PAGER ITEM TEXT -->
				<center>
					<span>{!! $student_by_id->render("pagination::bootstrap-4") !!}</span>
				</center>
				<!-- /SECTION PAGER ITEM TEXT -->
			</div>
			<!-- /SECTION PAGER ITEM -->
		</div>
	</div>
	<!-- /SECTION PAGER -->
</div>
<!-- /GRID COLUMN -->
@endsection