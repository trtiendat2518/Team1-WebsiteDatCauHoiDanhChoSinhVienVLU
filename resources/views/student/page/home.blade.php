@extends('student.layout')
@section('content')
<div class="container">
	<div class="main-section-data">
		<div class="row">
			<div class="col-lg-3 col-md-4 pd-left-none no-pd">
				<div class="main-left-sidebar no-margin">
					@php
					if(Session::get('student_name')){
						@endphp
						<div class="user-data full-width">
							<div class="user-profile">
								<div class="username-dt">
								</div>
								<div class="user-specs">
									<h3>@php
									echo Session::get('student_name');
								@endphp</h3>
								<span>Sinh viên Đại học Văn Lang</span>
							</div>
						</div>
						<ul class="user-fw-status">
							<li>
								<h4>Số lượng câu hỏi đã đăng</h4>
								<span>34</span>
							</li>
							<li>
								<a href="my-profile.html" title="">View Profile</a>
							</li>
						</ul>
					</div>
					@php
				}else{
					@endphp
					<div class="user-data full-width">
						<div class="user-profile">
							<div class="username-dt"></div>
							<div class="user-specs" style="padding: 0px;">
								<img src="{{asset('public/student/images/vluhome.png')}}" alt="">
							</div>
						</div>
					</div>
					@php
				}
				@endphp
				<div class="suggestions full-width">
					<div class="sd-title">
						<h3>Loại câu hỏi</h3>
						<i class="la la-ellipsis-v"></i>
					</div>
					<div class="suggestions-list">						
						@foreach ($category_post as $key => $val)
						<div class="suggestion-usd">
							<div class="sgt-text">
								<a href="{{url('/cau-hoi-theo-loai/'.$val->category_id)}}" title=""><i class="la la-chevron-right" style="color: black;">{{$val->category_name}}</i></a>
							</div>
						</div>
						@endforeach					
						<div class="view-more">
							<a href="#" title="">View More</a>
						</div>
					</div>
				</div>
				<div class="tags-sec full-width">
					<ul>
						<li><a href="#" title="">Help Center</a></li>
						<li><a href="#" title="">About</a></li>
						<li><a href="#" title="">Privacy Policy</a></li>
						<li><a href="#" title="">Community Guidelines</a></li>
						<li><a href="#" title="">Cookies Policy</a></li>
						<li><a href="#" title="">Career</a></li>
						<li><a href="#" title="">Language</a></li>
						<li><a href="#" title="">Copyright Policy</a></li>
					</ul>
					<div class="cp-sec">
						<img src="images/logo2.png" alt="">
						<p><img src="images/cp.png" alt="">Copyright 2019</p>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-6 col-md-8 no-pd">
			<div class="main-ws-sec">
				<div class="post-topbar">
					<div class="form-group">
						<center>
							<input type="submit" style="background: #e44d3a; color: white;" class="btn btn-default post_project" id="btnpost" name="btnpost" value="Đăng câu hỏi">
						</center>
					</div>
				</div>
				<div class="posts-section">
					<div class="post-bar">
						<div class="post_topbar">
							<div class="usy-dt">
								<img src="images/resources/us-pic.png" alt="">
								<div class="usy-name">
									<h3>John Doe</h3>
									<span><img src="images/clock.png" alt="">3 min ago</span>
								</div>
							</div>
							<div class="ed-opts">
								<a href="#" title="" class="ed-opts-open"><i class="la la-ellipsis-v"></i></a>
								<ul class="ed-options">
									<li><a href="#" title="">Edit Post</a></li>
									<li><a href="#" title="">Unsaved</a></li>
									<li><a href="#" title="">Unbid</a></li>
									<li><a href="#" title="">Close</a></li>
									<li><a href="#" title="">Hide</a></li>
								</ul>
							</div>
						</div>
						<div class="epi-sec">
							<ul class="bk-links">
								<li><a href="#" title=""><i class="la la-bookmark"></i></a></li>
							</ul>
						</div>
						<div class="job_descp">
							<h3>Senior Wordpress Developer</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam luctus hendrerit metus, ut ullamcorper quam finibus at. Etiam id magna sit amet... <a href="#" title="">view more</a></p>
							<ul class="skill-tags">
								<li><a href="#" title="">HTML</a></li>
							</ul>
						</div>
						<div class="job-status-bar">
							<ul class="like-com">
								<li>
									<a href="#"><i class="fa fa-heart"></i> 25</a>
								</li>
								<li>
									<a href="#"><i class="fa fa-comment"></i> 50</a>
								</li>
							</ul>
							<a href="#"><i class="fa fa-eye"></i> 50</a>
						</div>
					</div>
					
				</div>
			</div>
			<div class="col-lg-3 pd-right-none no-pd">
				<div class="right-sidebar">
					<div class="widget widget-about">
						<img src="images/wd-logo.png" alt="">
						<h3>Một sinh viên văn minh</h3>
						<span>Và là chủ của những câu hỏi hay</span>
						<div class="sign_link">
							@php
							if(Session::get('student_id')){
								@endphp
								<img src="{{asset('public/student/images/vluhome.png')}}" alt="">
								@php
							}else{
								@endphp
								<span class="alert alert-warning">Bạn cần đăng nhập để có thể đặt câu hỏi, like và bình luận các câu hỏi</span>
								@php
							}
							@endphp
						</div>
					</div>
					<div class="widget widget-jobs">
						<div class="sd-title">
							<h3>Top Jobs</h3>
							<i class="la la-ellipsis-v"></i>
						</div>
						<div class="jobs-list">
							<div class="job-info">
								<div class="job-details">
									<h3>Senior Product Designer</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
								</div>
								<div class="hr-rate">
									<span>$25/hr</span>
								</div>
							</div>
							<div class="job-info">
								<div class="job-details">
									<h3>Senior UI / UX Designer</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
								</div>
								<div class="hr-rate">
									<span>$25/hr</span>
								</div>
							</div>
							<div class="job-info">
								<div class="job-details">
									<h3>Junior Seo Designer</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
								</div>
								<div class="hr-rate">
									<span>$25/hr</span>
								</div>
							</div>
							<div class="job-info">
								<div class="job-details">
									<h3>Senior PHP Designer</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
								</div>
								<div class="hr-rate">
									<span>$25/hr</span>
								</div>
							</div>
							<div class="job-info">
								<div class="job-details">
									<h3>Senior Developer Designer</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
								</div>
								<div class="hr-rate">
									<span>$25/hr</span>
								</div>
							</div>
						</div>
					</div>
					<div class="widget widget-jobs">
						<div class="sd-title">
							<h3>Most Viewed This Week</h3>
							<i class="la la-ellipsis-v"></i>
						</div>
						<div class="jobs-list">
							<div class="job-info">
								<div class="job-details">
									<h3>Senior Product Designer</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
								</div>
								<div class="hr-rate">
									<span>$25/hr</span>
								</div>
							</div>
							<div class="job-info">
								<div class="job-details">
									<h3>Senior UI / UX Designer</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
								</div>
								<div class="hr-rate">
									<span>$25/hr</span>
								</div>
							</div>
							<div class="job-info">
								<div class="job-details">
									<h3>Junior Seo Designer</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
								</div>
								<div class="hr-rate">
									<span>$25/hr</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>
@endsection
