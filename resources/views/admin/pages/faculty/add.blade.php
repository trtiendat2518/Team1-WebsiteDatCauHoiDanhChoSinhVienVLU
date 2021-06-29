@extends('admin.admin_layout')
@section('admin_content')
<div class="row">
	<div class="col-lg-12">
		<section class="panel">
			<header class="panel-heading">
				Thêm mới khoa
			</header>
			<div class="panel-body">
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
				<div class="position-center">
					<form role="form" action="{{URL::to('/them-moi-khoa-thanh-cong')}}" method="POST">
						{{csrf_field()}}
						<div class="form-group">
							<label>Tên khoa</label>
							<input type="text" name="faculty_name" class="form-control" placeholder="Nhập tên khoa">
						</div>
						<div class="form-group">
							<label>Mã khoa</label>
							<input type="text" name="faculty_code" class="form-control" placeholder="Nhập mã khoa">
						</div>
						<div class="form-group">
							<label>Hiển thị</label>
							<select name="faculty_status" class="form-control m-bot15">
								<option value="1">Ẩn</option>
								<option value="0">Hiển thị</option>
							</select>
						</div>
						<button type="submit" name="adding_faculty" class="btn btn-primary btn-block">Tạo mới</button>
					</form>
				</div>

			</div>
		</section>

	</div>
</div>
@endsection