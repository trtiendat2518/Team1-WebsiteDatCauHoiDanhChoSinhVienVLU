@extends('admin.admin_layout')
@section('admin_content')
<div class="row">
	<div class="col-lg-12">
		<section class="panel">
			<header class="panel-heading">
				Cập nhật sinh viên {{$student_update->student_name}}
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
					<form role="form" action="{{URL::to('/cap-nhat-sinh-vien-thanh-cong/'.$student_update->student_id)}}" method="POST" style="margin-bottom: 20px" >
						{{csrf_field()}}
						<div class="form-group">
							<label>Họ tên sinh viên</label>
							<input type="text" class="form-control" value="{{$student_update->student_name}}" disabled>
						</div>
						<div class="form-group">
							<label>Email sinh viên</label>
							<input type="email" class="form-control" value="{{$student_update->student_email}}" disabled>
						</div>
						<div class="form-group">
							<label>Mật khẩu của sinh viên</label>
							<input type="password" name="student_password" class="form-control" placeholder="******">
						</div>
						<button type="submit" name="updating_student" class="btn btn-primary btn-block">Cập nhật</button>
					</form>
					<a href="{{url('/danh-sach-sinh-vien')}}" title="">
						<i class="fa fa-arrow-left" aria-hidden="true"> Quay về danh sách</i>
					</a>
				</div>
			</div>
		</section>
	</div>
</div>
@endsection