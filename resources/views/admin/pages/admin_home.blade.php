@extends('admin.admin_layout')
@section('admin_content')
<div>
	<form autocomplete="off">
		@csrf
		<div class="col-md-12">
			<div class="section-content">
				<div class="content-head">
					<h4 class="content-title">Thống kê số lượng câu hỏi</h4>
					<div class="corner-content float-right">
						<button class="content-collapse" data-toggle="tooltip" data-placement="top" title="" data-original-title="Collapse"><i class="fa fa-angle-down"></i></button>
					</div>
				</div>

				<div class="content-details show">
					<div class="card company-form">
						<div class="card-body card-block">
							<div class="row">
								<div class="col-4">
									<div class="form-group">
										<label for="fromdate" class="form-control-label">Từ ngày:</label>
										<input type="text" id="datepicker" class="form-control" name="from_date">
									</div>
								</div>
								<div class="col-4">
									<div class="form-group">
										<label for="todate" class="form-control-label">Đến ngày:</label>
										<input type="text" id="datepicker2" class="form-control" name="to_date">
									</div>
								</div>
								<div class="col-4">
									<div class="form-group">
										<label for="todate" class="form-control-label">Lọc Ngày/Tháng/Năm</label>
										<select class="dashboard-filter form-control">
											<option>---Chọn---</option>
											<option value="ngay">7 ngày qua</option>
											<option value="thangnay">Tháng này</option>
											<option value="thangtruoc">Tháng trước</option>
											<option value="nam">1 năm</option>
										</select>
									</div>
								</div>
							</div>
							<div class="form-group">
								<input type="button" class="btn radius btn-sm btn-primary" id="btn-dashboard-filter" value="Lọc kết quả">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-12">
			<div id="chart_statistic_post" style="height: 300px; background: #212529;"></div>
		</div>
	</form>
</div>
<div class="row">
	<div class="col-md-6">
		<div class="col-md-12">
			<div class="section-content">
				<div class="row">
					<div class="col-md-6">
						<div class="statistic-box m-0">
							<h4 class="statistic-title float-left">User</h4>
							<div class="statistic-details">
								@foreach ($info as $val)
								<span class="count float-left">{{$val->count()}}</span>
								@endforeach
								<span class="statistic-icon color-success float-right"><i class="pe-7s-users"></i></span><!-- /.statistic-icon -->
							</div><!-- /.statistic-details -->
						</div><!-- /.statistic-box -->
					</div>

					<div class="col-md-6">
						<div class="statistic-box m-0">
							<h4 class="statistic-title float-left">Sinh viên</h4>
							<div class="statistic-details">
								@foreach ($student as $val2)
								<span class="count float-left">{{$val2->count()}}</span>
								@endforeach
								<span class="statistic-icon color-primary float-right"><i class="pe-7s-study"></i></span><!-- /.statistic-icon -->
							</div><!-- /.statistic-details -->
						</div><!-- /.statistic-box -->
					</div>
				</div>
			</div><!-- /.section-content -->
		</div>
		<div class="col-md-12">
			<div class="section-content">
				<div class="row">
					<div class="col-md-6">
						<div class="statistic-box m-0">
							<h4 class="statistic-title float-left">Câu hỏi</h4>
							<div class="statistic-details">
								@foreach ($post as $val3)
								<span class="count float-left">{{$val3->count()}}</span>
								@endforeach
								<span class="statistic-icon color-purple float-right"><i class="pe-7s-albums"></i></span><!-- /.statistic-icon -->
							</div><!-- /.statistic-details -->
						</div><!-- /.statistic-box -->
					</div>

					<div class="col-md-6">
						<div class="statistic-box m-0">
							<h4 class="statistic-title float-left">Khóa học</h4>
							<div class="statistic-details">
								@foreach ($course as $val4)
								<span class="count float-left">{{$val4->count()}}</span>
								@endforeach
								<span class="statistic-icon color-danger float-right"><i class="pe-7s-medal"></i></span><!-- /.statistic-icon -->
							</div><!-- /.statistic-details -->
						</div><!-- /.statistic-box -->
					</div>
				</div>
			</div><!-- /.section-content -->
		</div>
		<div class="col-md-12">
			<div class="section-content">
				<div class="row">
					<div class="col-md-6">
						<div class="statistic-box m-0">
							<h4 class="statistic-title float-left">Khoa</h4>
							<div class="statistic-details">
								@foreach ($faculty as $va5)
								<span class="count float-left">{{$va5->count()}}</span>
								@endforeach
								<span class="statistic-icon color-success float-right"><i class="pe-7s-portfolio"></i></span><!-- /.statistic-icon -->
							</div><!-- /.statistic-details -->
						</div><!-- /.statistic-box -->
					</div>

					<div class="col-md-6">
						<div class="statistic-box m-0">
							<h4 class="statistic-title float-left">Chuyên ngành</h4>
							<div class="statistic-details">
								@foreach ($specialized as $val6)
								<span class="count float-left">{{$val6->count()}}</span>
								@endforeach
								<span class="statistic-icon color-primary float-right"><i class="pe-7s-plugin"></i></span><!-- /.statistic-icon -->
							</div><!-- /.statistic-details -->
						</div><!-- /.statistic-box -->
					</div>
				</div>
			</div><!-- /.section-content -->
		</div>
	</div>
	<div class="col-md-6">
		<h4 style="text-align: center; font-weight: bold; margin-top: 60px;">Thống kê truy cập</h4>
		<div id="donut" class="morris-donut-inverse"></div>
	</div>
	
</div>
@endsection
