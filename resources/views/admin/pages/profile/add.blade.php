@extends('admin.admin_layout')
@section('admin_content')
@foreach ($info as $key => $infoma)
<div class="row">
	<div class="col-md-12">
		@php
		$message = Session::get('message');
		if($message){
			echo $message;
			Session::put('message', null);
		}
		@endphp
		@foreach ($errors->all() as $val)
		<div class="alert alert-danger">{{$val}}</div>
		@endforeach
		<div class="section-content">
			<div class="content-head">
				<h4 class="content-title">Cập nhật hồ sơ tài khoản</h4>
			</div>
			@if($infoma->admin_info_id)
			<div class="content-details show">
				<div class="card company-form">
					<div class="card-body card-block">
						<form action="{{url('/sua-thong-tin-admin/'.$infoma->admin_info_id)}}" method="post" enctype="multipart/form-data">
							@csrf
							<div class="form-group basic-card text-center">
								<div class="row">
									<div class="col-lg-12 col-md-12">
										<div class="social-box">
											<a href="javascript:void(0)">
												<div class="avatar"><img class="rounded-circle" src="{{asset('public/admin/images/avatar/'.$infoma->info->admin_info_avatar)}}" alt="Avatar"></div>
											</div><!-- /.details -->
										</a>
									</div><!-- /.social-box -->
								</div>
							</div>
							<div class="form-group">
								<label class=" form-control-label">Ảnh đại diện mới</label>
								<input type="file" name="admin_info_avatar" class="form-control">
							</div>
							<div class="row">
								<div class="col-6">
									<div class="form-group">
										<label for="city" class=" form-control-label">Họ và tên</label>
										<input type="text" id="city" class="form-control" value="<?php echo Session::get('admin_name') ?>" disabled>
									</div>
								</div>
								<div class="col-6">
									<div class="form-group">
										<label for="postal-code" class=" form-control-label">Chức vụ</label>
										@if(Session::get('admin_role')==0)
										<input type="text" class="form-control" value="Quản trị viên" disabled>
										@elseif(Session::get('admin_role')==1)
										<input type="text" class="form-control" value="BCN khoa" disabled>
										@else
										<input type="text" class="form-control" value="Trợ lý" disabled>
										@endif
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="company" class=" form-control-label">Email</label>
								<input type="text" class="form-control" value="<?php echo Session::get('admin_email') ?>" disabled>
							</div>
							<div class="row">
								<div class="col-6">
									<div class="form-group">
										<label for="city" class=" form-control-label">Ngày sinh</label>
										<input type="date" name="admin_info_date" class="form-control" value="{{$infoma->info->admin_info_date}}">
									</div>
								</div>
								<div class="col-6">
									<div class="form-group">
										<label for="postal-code" class=" form-control-label">Giới tính</label>
										<select class="form-control select2" name="admin_info_gender">
											@if($infoma->info->admin_info_gender==0)
											<option value="0" selected>Nam</option>
											<option value="1">Nữ</option>
											@else
											<option value="0">Nam</option>
											<option value="1" selected>Nữ</option>
											@endif
										</select>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-6">
									<div class="form-group">
										<label for="city" class=" form-control-label">Số điện thoại</label>
										<input type="number" name="admin_info_phone" class="form-control" value="{{$infoma->info->admin_info_phone}}">
									</div>
								</div>
								<div class="col-6">
									<div class="form-group">
										<label for="postal-code" class=" form-control-label">Khoa</label>
										<select class="form-control select2" name="faculty_id">
											@if ($infoma->info->faculty_id==0)
											<option value="0">-</option>
											@else
											<option value="{{$infoma->info->faculty_id}}">{{$infoma->info->faculty->faculty_name}}</option>
											@endif
											@foreach ($faculty as $key => $fct)
											<option value="{{$fct->faculty_id}}">{{$fct->faculty_name}}</option>
											@endforeach
										</select>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label class=" form-control-label">Địa chỉ</label>
								<textarea class="form-control" name="admin_info_address" style="resize: none;" rows="3">{{$infoma->info->admin_info_address}}</textarea>
							</div>
							<button type="submit" name="adding_profile" class="btn btn-primary btn-block">Cập nhật</button>
						</form>
					</div>
				</div>
			</div>
			@else
			<div class="content-details show">
				<div class="card company-form">
					<div class="card-body card-block">
						<form action="{{url('/them-thong-tin-admin/'.Session::get('admin_id'))}}" method="post" enctype="multipart/form-data">
							@csrf
							<div class="form-group">
								<label class=" form-control-label">Ảnh đại diện</label>
								<input type="file" name="admin_info_avatar" class="form-control">
							</div>
							<div class="row">
								<div class="col-6">
									<div class="form-group">
										<label for="city" class=" form-control-label">Họ và tên</label>
										<input type="text" id="city" class="form-control" value="<?php echo Session::get('admin_name') ?>" disabled>
									</div>
								</div>
								<div class="col-6">
									<div class="form-group">
										<label for="postal-code" class=" form-control-label">Chức vụ</label>
										@if(Session::get('admin_role')==0)
										<input type="text" class="form-control" value="Quản trị viên" disabled>
										@elseif(Session::get('admin_role')==1)
										<input type="text" class="form-control" value="BCN khoa" disabled>
										@else
										<input type="text" class="form-control" value="Trợ lý" disabled>
										@endif
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="company" class=" form-control-label">Email</label>
								<input type="text" class="form-control" value="<?php echo Session::get('admin_email') ?>" disabled>
							</div>
							<div class="row">
								<div class="col-6">
									<div class="form-group">
										<label for="city" class=" form-control-label">Ngày sinh</label>
										<input type="date" name="admin_info_date" class="form-control">
									</div>
								</div>
								<div class="col-6">
									<div class="form-group">
										<label for="postal-code" class=" form-control-label">Giới tính</label>
										<select class="form-control select2" name="admin_info_gender">
											<option value="0">Nam</option>
											<option value="1">Nữ</option>
										</select>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-6">
									<div class="form-group">
										<label for="city" class=" form-control-label">Số điện thoại</label>
										<input type="number" name="admin_info_phone" class="form-control">
									</div>
								</div>
								<div class="col-6">
									<div class="form-group">
										<label for="postal-code" class=" form-control-label">Khoa</label>
										<select class="form-control select2" name="faculty_id">
											<option value="">---Chọn khoa---</option>
											@foreach ($faculty as $key => $fct)
											<option value="{{$fct->faculty_id}}">{{$fct->faculty_name}}</option>
											@endforeach
										</select>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label class=" form-control-label">Địa chỉ</label>
								<textarea class="form-control" name="admin_info_address" style="resize: none;" rows="3"></textarea>
							</div>
							<button type="submit" name="adding_profile" class="btn btn-primary btn-block">Cập nhật</button>
						</form>
					</div>
				</div>
			</div>
			@endif
		</div>
	</div>
</div>
@endforeach
@endsection