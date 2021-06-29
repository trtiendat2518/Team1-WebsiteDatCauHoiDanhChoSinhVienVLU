@extends('admin.admin_layout')
@section('admin_content')
<div class="row">

	<div class="col-12">
		<div class="section-content">
			<div class="content-details tab-chart pt-5 show">
				<h4 class="content-title float-left">Số lượng câu hỏi</h4><!-- /.content-title -->

				<nav class="float-right">
					<div class="nav nav-tabs" id="nav-tab" role="tablist">
						<a class="nav-item nav-link" id="nav-days" data-toggle="tab" href="#days" role="tab" aria-controls="days" aria-selected="true">Ngày</a>
						<a class="nav-item nav-link active" id="nav-month" data-toggle="tab" href="#months" role="tab" aria-controls="months" aria-selected="false">Tháng</a>
						<a class="nav-item nav-link" id="nav-year" data-toggle="tab" href="#year" role="tab" aria-controls="year" aria-selected="false">Năm</a>
					</div>
				</nav>
				<div class="tab-content" id="nav-tabContent">
					<div class="tab-pane fade" id="days" role="tabpanel" aria-labelledby="nav-days">
						<div id="days-line-chart" class="days-line-chart"></div>
					</div>
					<div class="tab-pane fade show active" id="months" role="tabpanel" aria-labelledby="nav-month">
						<div id="month-line-chart" class="month-line-chart"></div>
					</div>
					<div class="tab-pane fade" id="year" role="tabpanel" aria-labelledby="nav-year">
						<div id="year-line-chart" class="year-line-chart"></div>
					</div>
				</div>
			</div><!-- /.content-details -->
		</div>
	</div>

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
</div>
@endsection