@extends('student.layout')
@section('content_header')
@foreach ($student2 as $key => $Sinfo)
<!-- PROFILE HEADER -->
<div class="profile-header">
	<!-- PROFILE HEADER COVER -->
	<figure class="profile-header-cover liquid">
	</figure>
	<!-- /PROFILE HEADER COVER -->
	<!-- PROFILE HEADER INFO -->
	<div class="profile-header-info">
		<!-- USER SHORT DESCRIPTION -->
		<div class="user-short-description big">
			<!-- USER SHORT DESCRIPTION AVATAR -->
			<a class="user-short-description-avatar user-avatar big">
				<!-- USER AVATAR BORDER -->
				<div class="user-avatar-border">
					<!-- HEXAGON -->
					<div class="hexagon-148-164"></div>
					<!-- /HEXAGON -->
				</div>
				<!-- /USER AVATAR BORDER -->

				<!-- USER AVATAR CONTENT -->
				<div class="user-avatar-content">
					<!-- HEXAGON -->
					@if ($Sinfo->student_info_id)
					<div class="hexagon-image-100-110" data-src="{{asset('public/student/img/avatar/'.$Sinfo->info->student_info_avatar)}}"></div>
					@else
					<div class="hexagon-image-100-110" data-src="{{asset('public/student/img/avatar/noavatar.jpg')}}"></div>
					@endif
					<!-- /HEXAGON -->
				</div>
				<!-- /USER AVATAR CONTENT -->

				<!-- USER AVATAR PROGRESS -->
				<div class="user-avatar-progress">
					<!-- HEXAGON -->
					<div class="hexagon-progress-124-136"></div>
					<!-- /HEXAGON -->
				</div>
				<!-- /USER AVATAR PROGRESS -->

				<!-- USER AVATAR PROGRESS BORDER -->
				<div class="user-avatar-progress-border">
					<!-- HEXAGON -->
					<div class="hexagon-border-124-136"></div>
					<!-- /HEXAGON -->
				</div>
				<!-- /USER AVATAR PROGRESS BORDER -->
			</a>
			<!-- /USER SHORT DESCRIPTION AVATAR -->

			<!-- USER SHORT DESCRIPTION AVATAR -->
			<a class="user-short-description-avatar user-short-description-avatar-mobile user-avatar medium" href="profile-timeline.html">
				<!-- USER AVATAR BORDER -->
				<div class="user-avatar-border">
					<!-- HEXAGON -->
					<div class="hexagon-120-132"></div>
					<!-- /HEXAGON -->
				</div>
				<!-- /USER AVATAR BORDER -->

				<!-- USER AVATAR CONTENT -->
				<div class="user-avatar-content">
					<!-- HEXAGON -->
					<div class="hexagon-image-82-90" data-src="img/avatar/01.jpg"></div>
					<!-- /HEXAGON -->
				</div>
				<!-- /USER AVATAR CONTENT -->

				<!-- USER AVATAR PROGRESS -->
				<div class="user-avatar-progress">
					<!-- HEXAGON -->
					<div class="hexagon-progress-100-110"></div>
					<!-- /HEXAGON -->
				</div>
				<!-- /USER AVATAR PROGRESS -->

				<!-- USER AVATAR PROGRESS BORDER -->
				<div class="user-avatar-progress-border">
					<!-- HEXAGON -->
					<div class="hexagon-border-100-110"></div>
					<!-- /HEXAGON -->
				</div>
				<!-- /USER AVATAR PROGRESS BORDER -->
			</a>
			<p class="user-short-description-title">{{$Sinfo->student_name}}</p>
			<p class="user-short-description-text">{{$Sinfo->student_email}}</p>
		</div>
		<!-- /USER SHORT DESCRIPTION -->
		@if($Sinfo->student_info_id)
		<!-- USER STATS -->
		<div class="user-stats">
			<div class="user-stat big">
				<p class="user-stat-title">{{$Sinfo->posted->count()}}</p>
				<p class="user-stat-text">Câu hỏi</p>
			</div>
			<div class="user-stat big">
				<p class="user-stat-title">{{$Sinfo->info->student_info_course}}</p>
				<p class="user-stat-text">Khóa</p>
			</div>
			<div class="user-stat big">
				@if ($Sinfo->info->student_info_gender == 1)
				<p class="user-stat-title">Nam</p>
				@elseif ($Sinfo->info->student_info_gender == 2)
				<p class="user-stat-title">Nữ</p>
				@endif
				<p class="user-stat-text">Giới tính</p>
			</div>
		</div>
		<!-- /USER STATS -->
		@else
		<!-- USER STATS -->
		<div class="user-stats">
			<div class="user-stat big">
				<p class="user-stat-title">{{$Sinfo->posted->count()}}</p>
				<p class="user-stat-text">Câu hỏi</p>
			</div>
			<div class="user-stat big">
				<p class="user-stat-title">-</p>
				<p class="user-stat-text">Khóa</p>
			</div>
			<div class="user-stat big">
				<p class="user-stat-title">-</p>
				<p class="user-stat-text">Giới tính</p>
			</div>
		</div>
		<!-- /USER STATS -->
		@endif

		@if ($Sinfo->student_id==Session::get('student_id'))
		<!-- PROFILE HEADER INFO ACTIONS -->
		<div class="profile-header-info-actions" style="top: 40px;">
			<a href="{{url('/thong-tin-tai-khoan/'.Session::get('student_id'))}}"><p class="profile-header-info-action button secondary">Chỉnh sửa thông tin</p></a>
		</div>
		<!-- /PROFILE HEADER INFO ACTIONS -->
		@endif
	</div>
	<!-- /PROFILE HEADER INFO -->
</div>
<!-- /PROFILE HEADER -->
<!-- GRID -->
<div class="grid grid-2-4-6 mobile-prefer-content">
	<div class="grid-column">
	</div>
	@if($Sinfo->student_info_id)
	<!-- GRID COLUMN -->
	<div class="grid-column">
		<!-- WIDGET BOX -->
		<div class="widget-box">

			<!-- WIDGET BOX TITLE -->
			<p class="widget-box-title">Thông tin của tôi</p>
			<!-- /WIDGET BOX TITLE -->

			<!-- WIDGET BOX CONTENT -->
			<div class="widget-box-content">
				<!-- PARAGRAPH -->
				<p class="paragraph">{{$Sinfo->info->student_info_note}}</p>
				<!-- /PARAGRAPH -->

				<!-- INFORMATION LINE LIST -->
				<div class="information-line-list">
					<!-- INFORMATION LINE -->
					<div class="information-line">
						<!-- INFORMATION LINE TITLE -->
						<p class="information-line-title">Địa chỉ</p>
						<!-- /INFORMATION LINE TITLE -->

						<!-- INFORMATION LINE TEXT -->
						<p class="information-line-text">{{$Sinfo->info->student_info_address}}</p>
						<!-- /INFORMATION LINE TEXT -->
					</div>
					<!-- /INFORMATION LINE -->

					<!-- INFORMATION LINE -->
					<div class="information-line">
						<!-- INFORMATION LINE TITLE -->
						<p class="information-line-title">Ngày sinh</p>
						<!-- /INFORMATION LINE TITLE -->

						<!-- INFORMATION LINE TEXT -->
						<p class="information-line-text">{{$Sinfo->info->student_info_date}}</p>
						<!-- /INFORMATION LINE TEXT -->
					</div>
					<!-- /INFORMATION LINE -->

					<!-- INFORMATION LINE -->
					<div class="information-line">
						<!-- INFORMATION LINE TITLE -->
						<p class="information-line-title">Khoa</p>
						<!-- /INFORMATION LINE TITLE -->

						<!-- INFORMATION LINE TEXT -->
						@if($Sinfo->info->faculty_id==0)
						<p class="information-line-text">-</p>
						@else
						<p class="information-line-text">{{$Sinfo->info->faculty->faculty_name}}</p>
						@endif
						<!-- /INFORMATION LINE TEXT -->
					</div>
					<!-- /INFORMATION LINE -->

					<!-- INFORMATION LINE -->
					<div class="information-line">
						<!-- INFORMATION LINE TITLE -->
						<p class="information-line-title">Chuyên ngành</p>
						<!-- /INFORMATION LINE TITLE -->

						<!-- INFORMATION LINE TEXT -->
						@if($Sinfo->info->specialized_id==0)
						<p class="information-line-text">-</p>
						@else
						<p class="information-line-text">{{$Sinfo->info->specialized->specialized_name}}</p>
						@endif
						<!-- /INFORMATION LINE TEXT -->
					</div>
					<!-- /INFORMATION LINE -->
				</div>
				<!-- /INFORMATION LINE LIST -->
			</div>
			<!-- /WIDGET BOX CONTENT -->
		</div>
		<!-- /WIDGET BOX -->
	</div>
	<!-- /GRID COLUMN -->
	@else
	<!-- GRID COLUMN -->
	<div class="grid-column">
		<!-- WIDGET BOX -->
		<div class="widget-box">

			<!-- WIDGET BOX TITLE -->
			<p class="widget-box-title">Thông tin của tôi</p>
			<!-- /WIDGET BOX TITLE -->

			<!-- WIDGET BOX CONTENT -->
			<div class="widget-box-content">
				<!-- PARAGRAPH -->
				<p class="paragraph"></p>
				<!-- /PARAGRAPH -->

				<!-- INFORMATION LINE LIST -->
				<div class="information-line-list">
					<!-- INFORMATION LINE -->
					<div class="information-line">
						<!-- INFORMATION LINE TITLE -->
						<p class="information-line-title">Địa chỉ</p>
						<!-- /INFORMATION LINE TITLE -->

						<!-- INFORMATION LINE TEXT -->
						<p class="information-line-text">-</p>
						<!-- /INFORMATION LINE TEXT -->
					</div>
					<!-- /INFORMATION LINE -->

					<!-- INFORMATION LINE -->
					<div class="information-line">
						<!-- INFORMATION LINE TITLE -->
						<p class="information-line-title">Ngày sinh</p>
						<!-- /INFORMATION LINE TITLE -->

						<!-- INFORMATION LINE TEXT -->
						<p class="information-line-text">-</p>
						<!-- /INFORMATION LINE TEXT -->
					</div>
					<!-- /INFORMATION LINE -->

					<!-- INFORMATION LINE -->
					<div class="information-line">
						<!-- INFORMATION LINE TITLE -->
						<p class="information-line-title">Khoa</p>
						<!-- /INFORMATION LINE TITLE -->
						<p class="information-line-text">-</p>
					</div>
					<!-- /INFORMATION LINE -->

					<!-- INFORMATION LINE -->
					<div class="information-line">
						<!-- INFORMATION LINE TITLE -->
						<p class="information-line-title">Chuyên ngành</p>
						<!-- /INFORMATION LINE TITLE -->
						<p class="information-line-text">-</p>
					</div>
					<!-- /INFORMATION LINE -->
				</div>
				<!-- /INFORMATION LINE LIST -->
			</div>
			<!-- /WIDGET BOX CONTENT -->
		</div>
		<!-- /WIDGET BOX -->
	</div>
	<!-- /GRID COLUMN -->
	@endif
	<!-- GRID COLUMN -->
	<div class="grid-column">
		@if ($Sinfo->student_id==Session::get('student_id'))
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
		@endif
		@foreach ($student_other_id as $key => $post_info)
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
									@if ($Sinfo->student_info_id)
									<div class="hexagon-image-30-32" data-src="{{asset('public/student/img/avatar/'.$Sinfo->info->student_info_avatar)}}"></div>
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
					@if(Session::get('student_id'))
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
					@else
					<p class="post-comment-heading" style="color: #e3f850;">Bạn cần đăng nhập để có thể bình luận</p>
					@endif
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
						<span>{!! $student_other_id->render("pagination::bootstrap-4") !!}</span>
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
@endforeach
@endsection