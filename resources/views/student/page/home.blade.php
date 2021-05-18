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
						<div class="suggestion-usd">
							<div class="sgt-text">
								<a href="" title="">Câu hỏi HOT<i class="la la-chevron-right"></i></a>
							</div>
						</div>
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
					<div class="user-picy">
						<img src="images/resources/user-pic.png" alt="">
					</div>
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
					<div class="top-profiles">
						<div class="pf-hd">
							<h3>Top Profiles</h3>
							<i class="la la-ellipsis-v"></i>
						</div>
						<div class="profiles-slider slick-initialized slick-slider">
							<span class="slick-previous slick-arrow" style="display: inline;"></span>
							<div class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 6084px; transform: translate3d(-2340px, 0px, 0px);"><div class="user-profy slick-slide slick-cloned" style="width: 460px;" tabindex="-1" data-slick-index="-1" aria-hidden="true">
								<img src="images/resources/user3.png" alt="">
								<h3>John Doe</h3>
								<span>Graphic Designer</span>
								<ul>
									<li><a href="#" title="" class="followw" tabindex="-1">Follow</a></li>
									<li><a href="#" title="" class="envlp" tabindex="-1"><img src="images/envelop.png" alt=""></a></li>
									<li><a href="#" title="" class="hire" tabindex="-1">hire</a></li>
								</ul>
								<a href="#" title="" tabindex="-1">View Profile</a>
							</div>
							<div class="user-profy slick-slide" style="width: 460px;" tabindex="-1" data-slick-index="0" aria-hidden="true">
								<img src="images/resources/user1.png" alt="">
								<h3>John Doe</h3>
								<span>Graphic Designer</span>
								<ul>
									<li><a href="#" title="" class="followw" tabindex="-1">Follow</a></li>
									<li><a href="#" title="" class="envlp" tabindex="-1"><img src="images/envelop.png" alt=""></a></li>
									<li><a href="#" title="" class="hire" tabindex="-1">hire</a></li>
								</ul>
								<a href="#" title="" tabindex="-1">View Profile</a>
							</div><div class="user-profy slick-slide" style="width: 460px;" tabindex="-1" data-slick-index="1" aria-hidden="true">
								<img src="images/resources/user2.png" alt="">
								<h3>John Doe</h3>
								<span>Graphic Designer</span>
								<ul>
									<li><a href="#" title="" class="followw" tabindex="-1">Follow</a></li>
									<li><a href="#" title="" class="envlp" tabindex="-1"><img src="images/envelop.png" alt=""></a></li>
									<li><a href="#" title="" class="hire" tabindex="-1">hire</a></li>
								</ul>
								<a href="#" title="" tabindex="-1">View Profile</a>
							</div><div class="user-profy slick-slide" style="width: 460px;" tabindex="-1" data-slick-index="2" aria-hidden="true">
								<img src="images/resources/user3.png" alt="">
								<h3>John Doe</h3>
								<span>Graphic Designer</span>
								<ul>
									<li><a href="#" title="" class="followw" tabindex="-1">Follow</a></li>
									<li><a href="#" title="" class="envlp" tabindex="-1"><img src="images/envelop.png" alt=""></a></li>
									<li><a href="#" title="" class="hire" tabindex="-1">hire</a></li>
								</ul>
								<a href="#" title="" tabindex="-1">View Profile</a>
							</div><div class="user-profy slick-slide" style="width: 460px;" tabindex="-1" data-slick-index="3" aria-hidden="true">
								<img src="images/resources/user1.png" alt="">
								<h3>John Doe</h3>
								<span>Graphic Designer</span>
								<ul>
									<li><a href="#" title="" class="followw" tabindex="-1">Follow</a></li>
									<li><a href="#" title="" class="envlp" tabindex="-1"><img src="images/envelop.png" alt=""></a></li>
									<li><a href="#" title="" class="hire" tabindex="-1">hire</a></li>
								</ul>
								<a href="#" title="" tabindex="-1">View Profile</a>
							</div><div class="user-profy slick-slide slick-current slick-active" style="width: 460px;" tabindex="0" data-slick-index="4" aria-hidden="false">
								<img src="images/resources/user2.png" alt="">
								<h3>John Doe</h3>
								<span>Graphic Designer</span>
								<ul>
									<li><a href="#" title="" class="followw" tabindex="0">Follow</a></li>
									<li><a href="#" title="" class="envlp" tabindex="0"><img src="images/envelop.png" alt=""></a></li>
									<li><a href="#" title="" class="hire" tabindex="0">hire</a></li>
								</ul>
								<a href="#" title="" tabindex="0">View Profile</a>
							</div><div class="user-profy slick-slide" style="width: 460px;" tabindex="-1" data-slick-index="5" aria-hidden="true">
								<img src="images/resources/user3.png" alt="">
								<h3>John Doe</h3>
								<span>Graphic Designer</span>
								<ul>
									<li><a href="#" title="" class="followw" tabindex="-1">Follow</a></li>
									<li><a href="#" title="" class="envlp" tabindex="-1"><img src="images/envelop.png" alt=""></a></li>
									<li><a href="#" title="" class="hire" tabindex="-1">hire</a></li>
								</ul>
								<a href="#" title="" tabindex="-1">View Profile</a>
							</div><div class="user-profy slick-slide slick-cloned" style="width: 460px;" tabindex="-1" data-slick-index="6" aria-hidden="true">
								<img src="images/resources/user1.png" alt="">
								<h3>John Doe</h3>
								<span>Graphic Designer</span>
								<ul>
									<li><a href="#" title="" class="followw" tabindex="-1">Follow</a></li>
									<li><a href="#" title="" class="envlp" tabindex="-1"><img src="images/envelop.png" alt=""></a></li>
									<li><a href="#" title="" class="hire" tabindex="-1">hire</a></li>
								</ul>
								<a href="#" title="" tabindex="-1">View Profile</a>
							</div><div class="user-profy slick-slide slick-cloned" style="width: 460px;" tabindex="-1" data-slick-index="7" aria-hidden="true">
								<img src="images/resources/user2.png" alt="">
								<h3>John Doe</h3>
								<span>Graphic Designer</span>
								<ul>
									<li><a href="#" title="" class="followw" tabindex="-1">Follow</a></li>
									<li><a href="#" title="" class="envlp" tabindex="-1"><img src="images/envelop.png" alt=""></a></li>
									<li><a href="#" title="" class="hire" tabindex="-1">hire</a></li>
								</ul>
								<a href="#" title="" tabindex="-1">View Profile</a>
							</div><div class="user-profy slick-slide slick-cloned" style="width: 460px;" tabindex="-1" data-slick-index="8" aria-hidden="true">
								<img src="images/resources/user3.png" alt="">
								<h3>John Doe</h3>
								<span>Graphic Designer</span>
								<ul>
									<li><a href="#" title="" class="followw" tabindex="-1">Follow</a></li>
									<li><a href="#" title="" class="envlp" tabindex="-1"><img src="images/envelop.png" alt=""></a></li>
									<li><a href="#" title="" class="hire" tabindex="-1">hire</a></li>
								</ul>
								<a href="#" title="" tabindex="-1">View Profile</a>
							</div><div class="user-profy slick-slide slick-cloned" style="width: 460px;" tabindex="-1" data-slick-index="9" aria-hidden="true">
								<img src="images/resources/user1.png" alt="">
								<h3>John Doe</h3>
								<span>Graphic Designer</span>
								<ul>
									<li><a href="#" title="" class="followw" tabindex="-1">Follow</a></li>
									<li><a href="#" title="" class="envlp" tabindex="-1"><img src="images/envelop.png" alt=""></a></li>
									<li><a href="#" title="" class="hire" tabindex="-1">hire</a></li>
								</ul>
								<a href="#" title="" tabindex="-1">View Profile</a>
							</div><div class="user-profy slick-slide slick-cloned" style="width: 460px;" tabindex="-1" data-slick-index="10" aria-hidden="true">
								<img src="images/resources/user2.png" alt="">
								<h3>John Doe</h3>
								<span>Graphic Designer</span>
								<ul>
									<li><a href="#" title="" class="followw" tabindex="-1">Follow</a></li>
									<li><a href="#" title="" class="envlp" tabindex="-1"><img src="images/envelop.png" alt=""></a></li>
									<li><a href="#" title="" class="hire" tabindex="-1">hire</a></li>
								</ul>
								<a href="#" title="" tabindex="-1">View Profile</a>
							</div><div class="user-profy slick-slide slick-cloned" style="width: 460px;" tabindex="-1" data-slick-index="11" aria-hidden="true">
								<img src="images/resources/user3.png" alt="">
								<h3>John Doe</h3>
								<span>Graphic Designer</span>
								<ul>
									<li><a href="#" title="" class="followw" tabindex="-1">Follow</a></li>
									<li><a href="#" title="" class="envlp" tabindex="-1"><img src="images/envelop.png" alt=""></a></li>
									<li><a href="#" title="" class="hire" tabindex="-1">hire</a></li>
								</ul>
								<a href="#" title="" tabindex="-1">View Profile</a>
							</div></div></div><span class="slick-nexti slick-arrow" style="display: inline;"></span></div>
						</div>
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
								<ul class="descp">
									<li><img src="images/icon8.png" alt=""><span>Epic Coder</span></li>
									<li><img src="images/icon9.png" alt=""><span>India</span></li>
								</ul>
								<ul class="bk-links">
									<li><a href="#" title=""><i class="la la-bookmark"></i></a></li>
									<li><a href="#" title=""><i class="la la-envelope"></i></a></li>
									<li><a href="#" title="" class="bid_now">Bid Now</a></li>
								</ul>
							</div>
							<div class="job_descp">
								<h3>Senior Wordpress Developer</h3>
								<ul class="job-dt">
									<li><a href="#" title="">Full Time</a></li>
									<li><span>$30 / hr</span></li>
								</ul>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam luctus hendrerit metus, ut ullamcorper quam finibus at. Etiam id magna sit amet... <a href="#" title="">view more</a></p>
								<ul class="skill-tags">
									<li><a href="#" title="">HTML</a></li>
									<li><a href="#" title="">PHP</a></li>
									<li><a href="#" title="">CSS</a></li>
									<li><a href="#" title="">Javascript</a></li>
									<li><a href="#" title="">Wordpress</a></li>
								</ul>
							</div>
							<div class="job-status-bar">
								<ul class="like-com">
									<li>
										<a href="#"><i class="fas fa-heart"></i> Like</a>
										<img src="images/liked-img.png" alt="">
										<span>25</span>
									</li>
									<li><a href="#" class="com"><i class="fas fa-comment-alt"></i> Comment 15</a></li>
								</ul>
								<a href="#"><i class="fas fa-eye"></i>Views 50</a>
							</div>
						</div>
						<div class="posty">
							<div class="post-bar no-margin">
								<div class="post_topbar">
									<div class="usy-dt">
										<img src="images/resources/us-pc2.png" alt="">
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
									<ul class="descp">
										<li><img src="images/icon8.png" alt=""><span>Epic Coder</span></li>
										<li><img src="images/icon9.png" alt=""><span>India</span></li>
									</ul>
									<ul class="bk-links">
										<li><a href="#" title=""><i class="la la-bookmark"></i></a></li>
										<li><a href="#" title=""><i class="la la-envelope"></i></a></li>
									</ul>
								</div>
								<div class="job_descp">
									<h3>Senior Wordpress Developer</h3>
									<ul class="job-dt">
										<li><a href="#" title="">Full Time</a></li>
										<li><span>$30 / hr</span></li>
									</ul>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam luctus hendrerit metus, ut ullamcorper quam finibus at. Etiam id magna sit amet... <a href="#" title="">view more</a></p>
									<ul class="skill-tags">
										<li><a href="#" title="">HTML</a></li>
										<li><a href="#" title="">PHP</a></li>
										<li><a href="#" title="">CSS</a></li>
										<li><a href="#" title="">Javascript</a></li>
										<li><a href="#" title="">Wordpress</a></li>
									</ul>
								</div>
								<div class="job-status-bar">
									<ul class="like-com">
										<li>
											<a href="#"><i class="fas fa-heart"></i> Like</a>
											<img src="images/liked-img.png" alt="">
											<span>25</span>
										</li>
										<li><a href="#" class="com"><i class="fas fa-comment-alt"></i> Comment 15</a></li>
									</ul>
									<a href="#"><i class="fas fa-eye"></i>Views 50</a>
								</div>
							</div>
							<div class="comment-section">
								<a href="#" class="plus-ic">
									<i class="la la-plus"></i>
								</a>
								<div class="comment-sec">
									<ul>
										<li>
											<div class="comment-list">
												<div class="bg-img">
													<img src="images/resources/bg-img1.png" alt="">
												</div>
												<div class="comment">
													<h3>John Doe</h3>
													<span><img src="images/clock.png" alt=""> 3 min ago</span>
													<p>Lorem ipsum dolor sit amet, </p>
													<a href="#" title="" class="active"><i class="fa fa-reply-all"></i>Reply</a>
												</div>
											</div>
											<ul>
												<li>
													<div class="comment-list">
														<div class="bg-img">
															<img src="images/resources/bg-img2.png" alt="">
														</div>
														<div class="comment">
															<h3>John Doe</h3>
															<span><img src="images/clock.png" alt=""> 3 min ago</span>
															<p>Hi John </p>
															<a href="#" title=""><i class="fa fa-reply-all"></i>Reply</a>
														</div>
													</div>
												</li>
											</ul>
										</li>
										<li>
											<div class="comment-list">
												<div class="bg-img">
													<img src="images/resources/bg-img3.png" alt="">
												</div>
												<div class="comment">
													<h3>John Doe</h3>
													<span><img src="images/clock.png" alt=""> 3 min ago</span>
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam luctus hendrerit metus, ut ullamcorper quam finibus at.</p>
													<a href="#" title=""><i class="fa fa-reply-all"></i>Reply</a>
												</div>
											</div>
										</li>
									</ul>
								</div>
								<div class="post-comment">
									<div class="cm_img">
										<img src="images/resources/bg-img4.png" alt="">
									</div>
									<div class="comment_box">
										<form>
											<input type="text" placeholder="Post a comment">
											<button type="submit">Send</button>
										</form>
									</div>
								</div>
							</div>
						</div>
						<div class="process-comm">
							<div class="spinner">
								<div class="bounce1"></div>
								<div class="bounce2"></div>
								<div class="bounce3"></div>
							</div>
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
					<div class="widget suggestions full-width">
						<div class="sd-title">
							<h3>Most Viewed People</h3>
							<i class="la la-ellipsis-v"></i>
						</div>
						<div class="suggestions-list">
							<div class="suggestion-usd">
								<img src="images/resources/s1.png" alt="">
								<div class="sgt-text">
									<h4>Jessica William</h4>
									<span>Graphic Designer</span>
								</div>
								<span><i class="la la-plus"></i></span>
							</div>
							<div class="suggestion-usd">
								<img src="images/resources/s2.png" alt="">
								<div class="sgt-text">
									<h4>John Doe</h4>
									<span>PHP Developer</span>
								</div>
								<span><i class="la la-plus"></i></span>
							</div>
							<div class="suggestion-usd">
								<img src="images/resources/s3.png" alt="">
								<div class="sgt-text">
									<h4>Poonam</h4>
									<span>Wordpress Developer</span>
								</div>
								<span><i class="la la-plus"></i></span>
							</div>
							<div class="suggestion-usd">
								<img src="images/resources/s4.png" alt="">
								<div class="sgt-text">
									<h4>Bill Gates</h4>
									<span>C &amp; C++ Developer</span>
								</div>
								<span><i class="la la-plus"></i></span>
							</div>
							<div class="suggestion-usd">
								<img src="images/resources/s5.png" alt="">
								<div class="sgt-text">
									<h4>Jessica William</h4>
									<span>Graphic Designer</span>
								</div>
								<span><i class="la la-plus"></i></span>
							</div>
							<div class="suggestion-usd">
								<img src="images/resources/s6.png" alt="">
								<div class="sgt-text">
									<h4>John Doe</h4>
									<span>PHP Developer</span>
								</div>
								<span><i class="la la-plus"></i></span>
							</div>
							<div class="view-more">
								<a href="#" title="">View More</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
