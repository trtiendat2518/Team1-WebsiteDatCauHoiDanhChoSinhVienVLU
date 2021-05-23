@extends('admin.admin_layout')
@section('admin_content')
<div class="row">
	<div class="col-12">
		<div class="section-content">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="statistic-box m-0">
						<h4 class="statistic-title float-left">New clients</h4><!-- /.statistic-title -->
						<div class="action-menu dropdown float-right">
							<button class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fa fa-ellipsis-v"></i>
							</button>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="#">Edit</a>
								<a class="dropdown-item" href="#">Remove</a>
								<a class="dropdown-item" href="#">Modify</a>
							</div>
						</div><!-- /.action-menu -->
						<div class="statistic-details">
							<span class="count float-left">1345</span><!-- /.count -->
							<span class="statistic-icon color-success float-right"><i class="pe-7s-users"></i></span><!-- /.statistic-icon -->
						</div><!-- /.statistic-details -->
					</div><!-- /.statistic-box -->
				</div>

				<div class="col-lg-3 col-md-6">
					<div class="statistic-box m-0">
						<h4 class="statistic-title float-left">Order received</h4><!-- /.statistic-title -->
						<div class="action-menu dropdown float-right">
							<button class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fa fa-ellipsis-v"></i>
							</button>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="#">Edit</a>
								<a class="dropdown-item" href="#">Remove</a>
								<a class="dropdown-item" href="#">Modify</a>
							</div>
						</div><!-- /.action-menu -->
						<div class="statistic-details">
							<span class="count float-left">1300</span><!-- /.count -->
							<span class="statistic-icon color-primary float-right"><i class="pe-7s-ticket"></i></span><!-- /.statistic-icon -->
						</div><!-- /.statistic-details -->
					</div><!-- /.statistic-box -->
				</div>

				<div class="col-lg-3 col-md-6">
					<div class="statistic-box m-0">
						<h4 class="statistic-title float-left">Copy sold</h4><!-- /.statistic-title -->
						<div class="action-menu dropdown float-right">
							<button class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fa fa-ellipsis-v"></i>
							</button>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="#">Edit</a>
								<a class="dropdown-item" href="#">Remove</a>
								<a class="dropdown-item" href="#">Modify</a>
							</div>
						</div><!-- /.action-menu -->
						<div class="statistic-details">
							<span class="count float-left">1225</span><!-- /.count -->
							<span class="statistic-icon color-purple float-right"><i class="pe-7s-albums"></i></span><!-- /.statistic-icon -->
						</div><!-- /.statistic-details -->
					</div><!-- /.statistic-box -->
				</div>

				<div class="col-lg-3 col-md-6">
					<div class="statistic-box m-0">
						<h4 class="statistic-title float-left">New Invoices</h4><!-- /.statistic-title -->
						<div class="action-menu dropdown float-right">
							<button class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fa fa-ellipsis-v"></i>
							</button>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="#">Edit</a>
								<a class="dropdown-item" href="#">Remove</a>
								<a class="dropdown-item" href="#">Modify</a>
							</div>
						</div><!-- /.action-menu -->
						<div class="statistic-details">
							<span class="count float-left">1095</span><!-- /.count -->
							<span class="statistic-icon color-danger float-right"><i class="pe-7s-credit"></i></span><!-- /.statistic-icon -->
						</div><!-- /.statistic-details -->
					</div><!-- /.statistic-box -->
				</div>

			</div>
		</div><!-- /.section-content -->
	</div>

	<div class="col-12">
		<div class="section-content">
			<div class="row">
				<div class="col-lg-5 equal-height">
					<div class="left-charts">
						<div class="row">
							<div class="col-12 ">
								<div class="section-contentpadding-0 mt-0 bg-primary show">
									<div class="chart max-240">
										<div class="chart-text">
											<div class="left-text float-left">
												<span class="chart-title">Month’s Sale</span>
												<span class="text">17% higher than last week</span>
											</div>
											<div class="right-text float-right">
												<span class="counter">$8,409</span>
											</div>
										</div><!-- /.chart-text -->

										<div id="flotLine1" class="float-chart pb-2 max-140"></div>

									</div><!-- /.chart -->
								</div><!-- /.section-content -->
							</div>

							<div class="col-12">
								<div class="section-content padding-0 bg-danger show">
									<div class="chart max-240">
										<div class="chart-text">
											<div class="left-text float-left">
												<span class="chart-title">Month’s Sale</span>
												<span class="text">17% higher than last week</span>
											</div>
											<div class="right-text float-right">
												<span class="counter">$8,409</span>
											</div>
										</div><!-- /.chart-text -->

										<div id="sparkline5" class="sparkline-chart max-140">
											3,4,5,7,5,9,10,6,4,5,7,5,9,10,3,4,5,7,5,9,10,6,4,5,7,5,9,3,4,5,7,5,9,10,6,4,5,7,5,9,3,4,5,7,5,9,10,6,4,5,7,5
										</div>

									</div><!-- /.chart -->
								</div><!-- /.section-content -->
							</div>
						</div>
					</div><!-- /.left-charts -->
				</div>

				<div class="col-lg-7 equal-height">
					<div class="right-charts">
						<div class="section-content m-0">
							<div class="content-head">
								<h4 class="content-title">Traffic views</h4><!-- /.content-title -->
								<div class="corner-content float-right">
									<button class="content-settings" data-toggle="tooltip" data-placement="top" title="Settings"><i class="fa fa-cog"></i></button>
									<button class="content-refresh" data-toggle="tooltip" data-placement="top" title="Reload"><i class="fa fa-refresh"></i></button>
									<button class="content-collapse" data-toggle="tooltip" data-placement="top" title="Collapse"><i class="fa fa-angle-down"></i></button>
									<button class="content-close" data-toggle="tooltip" data-placement="top" title="Close"><i class="fa fa-close"></i></button>
								</div><!-- /.corner-content -->
							</div><!-- /.content-head -->

							<div class="content-details show">
								<ul class="devices">
									<li><span class="bg-danger"></span> Desktop</li>
									<li><span class="bg-primary"></span>Mobile</li>
									<li><span class="bg-purple"></span>Tab</li>
								</ul>

								<div id="traffic-chart" class="traffic-chart"></div>

							</div><!-- /.content-details -->
						</div>
					</div><!-- /.right-charts -->
				</div>

			</div>
		</div><!-- /.section-content -->
	</div>

	<div class="col-12">
		<div class="section-content mt-0">
			<div class="weather">
				<div class="row">
					<div class="col-lg-7 equal-height bg-white">
						<div class="city-weather">
							<div class="city-inner background-bg" data-image-src="images/we.jpg">
								<div class="weather-search">
									<form action="#" class="search-form">
										<input type="text" placeholder="City Name">
										<input type="submit">
									</form>
								</div><!-- /.weather-search -->

								<div class="city-details text-center">
									<h4 class="city-name">Paris</h4>
									<span class="time">Wednesday 9:50 PM, November 22, 2018</span>
									<i class="icon icon-weather-wind-halfmoon"></i>
								</div><!-- /.city-details -->

								<div class="weather-status">
									<div class="float-left">
										<h2>Partly cloudy</h2>
									</div>
									<div class="float-right">
										<div class="temparature"><span class="count">15</span> °C</div><!-- /.temparature -->
									</div>
								</div><!-- /.weather-status -->
							</div><!-- /.city-inner -->

							<div class="hourly-forecast">
								<div class="forecast-slider owl-carousel text-center">
									<div class="item">
										<span class="time">9:00 PM</span><!-- /.time -->
										<div class="forecast-icon"><i class="icon icon-weather-rain-halfmoon"></i></div><!-- /.forecast-icon -->
										<div class="temparature"><span class="count">15</span> °C</div><!-- /.temparature -->
									</div><!-- /.item -->
									<div class="item">
										<span class="time">10:00 PM</span><!-- /.time -->
										<div class="forecast-icon"><i class="icon icon-weather-mistyrain-halfmoon"></i></div><!-- /.forecast-icon -->
										<div class="temparature"><span class="count">13</span> °C</div><!-- /.temparature -->
									</div><!-- /.item -->
									<div class="item">
										<span class="time">11:00 PM</span><!-- /.time -->
										<div class="forecast-icon"><i class="icon icon-weather-hail-halfmoon"></i></div><!-- /.forecast-icon -->
										<div class="temparature"><span class="count">17</span> °C</div><!-- /.temparature -->
									</div><!-- /.item -->
									<div class="item">
										<span class="time">12:00 PM</span><!-- /.time -->
										<div class="forecast-icon"><i class="icon icon-weather-snow-halfmoon"></i></div><!-- /.forecast-icon -->
										<div class="temparature"><span class="count">15</span> °C</div><!-- /.temparature -->
									</div><!-- /.item -->
									<div class="item">
										<span class="time">1:00 AM</span><!-- /.time -->
										<div class="forecast-icon"><i class="icon icon-weather-rain-halfmoon"></i></div><!-- /.forecast-icon -->
										<div class="temparature"><span class="count">9</span> °C</div><!-- /.temparature -->
									</div><!-- /.item -->
									<div class="item">
										<span class="time">2:00 AM</span><!-- /.time -->
										<div class="forecast-icon"><i class="icon icon-weather-storm-halfmoon"></i></div><!-- /.forecast-icon -->
										<div class="temparature"><span class="count">11</span> °C</div><!-- /.temparature -->
									</div><!-- /.item -->
								</div><!-- /.forecast-slider -->
							</div><!-- /.hourly-forcast -->
						</div><!-- /.city-weather -->
					</div>

					<div class="col-lg-5 equal-height bg-gray">
						<div class="weekly-forecast">
							<div class="item">
								<div class="float-left"><span class="day-name">Sun</span></div>
								<div class="float-left"><div class="forecast-icon text-center"><i class="icon icon-weather-storm-32"></i></div></div>
								<div class="float-left">
									<div class="temparature text-right">
										<div class="current"><span class="count">15</span> °C</div><!-- /.current -->
										-
										<div class="previous"><span class="count">11</span> °C</div><!-- /.previous -->
									</div><!-- /.temparature -->
								</div>
							</div><!-- /.item -->
							<div class="item">
								<div class="float-left"><span class="day-name">Mon</span></div>
								<div class="float-left"><div class="forecast-icon text-center"><i class="icon icon-weather-cloud-lightning"></i></div></div>
								<div class="float-left">
									<div class="temparature text-right">
										<div class="current"><span class="count">15</span> °C</div><!-- /.current -->
										-
										<div class="previous"><span class="count">11</span> °C</div><!-- /.previous -->
									</div><!-- /.temparature -->
								</div>
							</div><!-- /.item -->
							<div class="item">
								<div class="float-left"><span class="day-name">Tue</span></div>
								<div class="float-left"><div class="forecast-icon text-center"><i class="icon icon-weather-rain"></i></div></div>
								<div class="float-left">
									<div class="temparature text-right">
										<div class="current"><span class="count">15</span> °C</div><!-- /.current -->
										-
										<div class="previous"><span class="count">11</span> °C</div><!-- /.previous -->
									</div><!-- /.temparature -->
								</div>
							</div><!-- /.item -->
							<div class="item">
								<div class="float-left"><span class="day-name">Wed</span></div>
								<div class="float-left"><div class="forecast-icon text-center"><i class="icon icon-weather-sun"></i></div></div>
								<div class="float-left">
									<div class="temparature text-right">
										<div class="current"><span class="count">15</span> °C</div><!-- /.current -->
										-
										<div class="previous"><span class="count">11</span> °C</div><!-- /.previous -->
									</div><!-- /.temparature -->
								</div>
							</div><!-- /.item -->
							<div class="item">
								<div class="float-left"><span class="day-name">Thu</span></div>
								<div class="float-left"><div class="forecast-icon text-center"><i class="icon icon-weather-wind"></i></div></div>
								<div class="float-left">
									<div class="temparature text-right">
										<div class="current"><span class="count">15</span> °C</div><!-- /.current -->
										-
										<div class="previous"><span class="count">11</span> °C</div><!-- /.previous -->
									</div><!-- /.temparature -->
								</div>
							</div><!-- /.item -->
							<div class="item">
								<div class="float-left"><span class="day-name">Fri</span></div>
								<div class="float-left"><div class="forecast-icon text-center"><i class="icon icon-weather-cloud-snowflake"></i></div></div>
								<div class="float-left">
									<div class="temparature text-right">
										<div class="current"><span class="count">15</span> °C</div><!-- /.current -->
										-
										<div class="previous"><span class="count">11</span> °C</div><!-- /.previous -->
									</div><!-- /.temparature -->
								</div>
							</div><!-- /.item -->
							<div class="item">
								<div class="float-left"><span class="day-name">Sat</span></div>
								<div class="float-left"><div class="forecast-icon text-center"><i class="icon icon-weather-tempest"></i></div></div>
								<div class="float-left">
									<div class="temparature text-right">
										<div class="current"><span class="count">15</span> °C</div><!-- /.current -->
										-
										<div class="previous"><span class="count">11</span> °C</div><!-- /.previous -->
									</div><!-- /.temparature -->
								</div>
							</div><!-- /.item -->
						</div><!-- /.weekly-forcast -->
					</div>
				</div>
			</div><!-- /.weather -->
		</div><!-- /.section-content -->
	</div>

	<div class="col-12">
		<div class="row">
			<div class="col-lg-4">
				<div class="section-content pb-1 bg-white mb-0">
					<div class="content-details">
						<div id="calendar"></div>
					</div><!-- /.content-details -->
				</div><!-- /.section-content -->
			</div>

			<div class="col-lg-4">
				<div class="section-content mt-o mb-0">
					<div class="row">
						<div class="col-6 pr-2 equal-height">
							<div class="section-content mt-0">
								<div class="widget-box bg-purple">
									<a href="#">
										<span class="widget-icon top-left"><i class="fa fa-upload"></i></span>
										<div class="widget-text">
											<h3>45</h3>
											<span>Uploads</span>
										</div>
									</a>
								</div><!-- /.widget-box -->
							</div><!-- /.section-content -->
						</div>

						<div class="col-6 pl-2 equal-height">
							<div class="section-content mt-0">
								<div class="widget-box bg-danger">
									<a href="#">
										<span class="widget-icon bottom-right"><i class="fa fa-rss"></i></span>
										<div class="widget-text">
											<h3>385</h3>
											<span>New Subs</span>
										</div>
									</a>
								</div><!-- /.widget-box -->
							</div><!-- /.section-content -->
						</div>

						<div class="col-12 equal-height">
							<div class="section-content bg-white pt-3 pb-3 mt-0">
								<div class="pie-sale-status pt-2 pb-2">
									<div class="row">
										<div class="col-3"><h3 class="sale-title text-right left"><span class="count">65%</span> Channel Sell</h3></div>
										<div class="col-6"><div id="ct-chart-pie" class="ct-chart ct-perfect-fourth"></div></div>
										<div class="col-3"><h3 class="sale-title text-left right"><span class="count">35%</span> Direct Sell</h3></div>
									</div>
								</div><!-- /.pie-sale-status -->
							</div>
						</div>
					</div>
				</div><!-- /.section-content -->
			</div>

			<div class="col-lg-4">
				<div class="section-content advanced-card text-center mb-0">
					<div class="social-box">
						<div class="avatar bg-gradient"><img src="images/avatar/7.jpg" alt="Avatar" class="rounded-circle"></div><!-- /.avatar -->
						<div class="details">
							<h4 class="name"><a href="#">Olivia Perez</a></h4><!-- /.name -->
							<span class="designation">Designer</span><!-- /.designation -->

							<ul class="social-list pt-2 pb-2 flex-justified">
								<li class="text-center"><a href="#"><i class="icon-social-twitter icons"></i> <span class="count">15,000</span></a></li>
								<li class="text-center"><a href="#"><i class="icon-social-facebook icons"></i> <span class="count">9,050</span></a></li>
								<li class="text-center"><a href="#"><i class="icon-social-dribbble icons"></i> <span class="count">11,450</span></a></li>
							</ul>
						</div>
					</div>
				</div><!-- /.section-content -->
			</div>
		</div>
	</div>
</div>
@endsection