@extends('admin.admin_layout')
@section('admin_content')
<div class="row">
	<div class="col-lg-12">
		<section class="panel">
			<header class="panel-heading">
				Cập nhật User {{$admin_update->admin_name}}
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
					<form role="form" action="{{URL::to('/cap-nhat-user-thanh-cong/'.$admin_update->admin_id)}}" method="POST" style="margin-bottom: 20px" >
						{{csrf_field()}}
						<div class="form-group">
							<label>Họ tên User</label>
							<input type="text" name="admin_name" class="form-control" value="{{$admin_update->admin_name}}">
						</div>
						<div class="form-group">
							<label>Email User</label>
							<input type="email" name="admin_email" class="form-control" value="{{$admin_update->admin_email}}">
						</div>
						<div class="form-group">
							<label>Mật khẩu của User</label>
							<input type="password" name="admin_password" class="form-control" placeholder="******">
						</div>
						<div class="form-group">
							<label>Vai trò User</label>
							<select name="admin_role" class="form-control m-bot15">
								@if ($admin_update->admin_role==0)
								<option value="0" selected>Quản trị viên</option>
								<option value="1">BCN Khoa</option>
								<option value="2">Trợ lý</option>
								@elseif($admin_update->admin_role==1)
								<option value="0">Quản trị viên</option>
								<option value="1" selected>BCN Khoa</option>
								<option value="2">Trợ lý</option>
								@else
								<option value="0">Quản trị viên</option>
								<option value="1">BCN Khoa</option>
								<option value="2" selected>Trợ lý</option>
								@endif
							</select>
						</div>
						<button type="submit" name="updating_admin" class="btn btn-primary btn-block">Cập nhật</button>
					</form>
					<a href="{{url('/danh-sach-user')}}" title="">
						<i class="fa fa-arrow-left" aria-hidden="true"> Quay về danh sách</i>
					</a>
				</div>
			</div>
		</section>
	</div>
</div>
@endsection