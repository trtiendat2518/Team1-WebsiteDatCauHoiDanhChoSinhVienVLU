@extends('admin.admin_layout')
@section('admin_content')
<div class="row">
	<div class="col-lg-12">
		<section class="panel">
			<header class="panel-heading">
				Đổi mật khẩu
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
					<form role="form" action="{{URL::to('/doi-mat-khau-moi-thanh-cong/'.Session::get('admin_id'))}}" method="POST">
						{{csrf_field()}}
						<div class="form-group">
							<label>Mật khẩu cũ</label>
							<input type="password" name="admin_password" class="form-control" placeholder="Nhập mật khẩu hiện tại">
						</div>
						<div class="form-group">
							<label>Mật khẩu mới</label>
							<input type="password" name="admin_newpassword" class="form-control" placeholder="Nhập mật khẩu mới">
						</div>
						<div class="form-group">
							<label>Nhập lại mật khẩu mới</label>
							<input type="password" name="admin_newpassword_confirm" class="form-control" placeholder="Nhập lại mật khẩu mới">
						</div>
						<button type="submit" name="adding_specialized" class="btn btn-primary btn-block">Thay đổi</button>
					</form>
				</div>

			</div>
		</section>

	</div>
</div>
@endsection