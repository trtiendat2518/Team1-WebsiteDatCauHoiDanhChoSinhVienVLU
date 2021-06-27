@extends('admin.admin_layout')
@section('admin_content')
<div class="row">
	<div class="col-lg-12">
		<section class="panel">
			<header class="panel-heading">
				Thêm mới sinh viên
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
					<form role="form" action="{{URL::to('/them-moi-sinh-vien-thanh-cong')}}" method="POST">
						{{csrf_field()}}
						<div class="form-group">
							<label>Họ tên sinh viên</label>
							<input type="text" name="student_name" class="form-control" placeholder="Nhập họ tên của sinh viên">
						</div>
						<div class="form-group">
							<label>Email sinh viên</label>
							<input type="email" name="student_email" class="form-control" placeholder="Nhập email của sinh viên">
						</div>
						<div class="form-group">
							<label>Mật khẩu của sinh viên</label>
							<input type="password" name="student_password" class="form-control" placeholder="******">
						</div>
						<button type="submit" name="adding_student" class="btn btn-primary btn-block">Tạo mới</button>
					</form>
				</div>

			</div>
		</section>

	</div>
</div>
@endsection