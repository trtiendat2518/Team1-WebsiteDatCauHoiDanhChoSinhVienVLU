@extends('admin.admin_layout')
@section('admin_content')
<div class="row">
	<div class="col-lg-12">
		<section class="panel">
			<header class="panel-heading">
				Thêm mới User
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
					<form role="form" action="{{URL::to('/them-moi-user-thanh-cong')}}" method="POST">
						{{csrf_field()}}
						<div class="form-group">
							<label>Họ và tên User</label>
							<input type="text" name="admin_name" class="form-control" placeholder="Nhập tên User">
						</div>
						<div class="form-group">
							<label>Email User</label>
							<input type="email" name="admin_email" class="form-control" placeholder="Nhập email User">
						</div>
						<div class="form-group">
							<label>Mật khẩu</label>
							<input type="password" name="admin_password" class="form-control" placeholder="******">
						</div>
						<div class="form-group">
							<label>Vai trò User</label>
							<select name="admin_role" class="form-control m-bot15">
								<option value="0">Quản trị viên</option>
								<option value="1">BCN Khoa</option>
								<option value="2">Trợ lý</option>
							</select>
						</div>
						<button type="submit" name="adding_user" class="btn btn-primary btn-block">Tạo mới</button>
					</form>
				</div>

			</div>
		</section>

	</div>
</div>
@endsection