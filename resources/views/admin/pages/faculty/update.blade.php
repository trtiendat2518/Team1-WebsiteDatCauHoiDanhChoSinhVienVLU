@extends('admin.admin_layout')
@section('admin_content')
<div class="row">
	<div class="col-lg-12">
		<section class="panel">
			<header class="panel-heading">
				Cập nhật khoa {{$faculty_update->faculty_name}}
			</header>
			<div class="panel-body">
				@php
				$message = Session::get('message');
				if($message){
					echo $message;
					Session::put('message', null);
				}
				@endphp
				<div class="position-center">
					<form role="form" action="{{URL::to('/cap-nhat-khoa-thanh-cong/'.$faculty_update->faculty_id)}}" method="POST" style="margin-bottom: 20px" >
						{{csrf_field()}}
						<div class="form-group">
							<label>Tên khoa</label>
							<input type="text" name="faculty_name" class="form-control" value="{{$faculty_update->faculty_name}}">
						</div>
						<div class="form-group">
							<label>Mã khoa</label>
							<input type="text" name="faculty_code" class="form-control" value="{{$faculty_update->faculty_code}}">
						</div>
						<button type="submit" name="updating_faculty" class="btn btn-primary btn-block">Cập nhật</button>
					</form>
					<a href="{{url('/danh-sach-khoa')}}" title="">
						<i class="fa fa-arrow-left" aria-hidden="true"> Quay về danh sách</i>
					</a>
				</div>
			</div>
		</section>
	</div>
</div>
@endsection