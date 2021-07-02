@extends('admin.admin_layout')
@section('admin_content')
<div class="row">
	<div class="col-lg-12">
		<section class="panel">
			<header class="panel-heading">
				Cập nhật khóa {{$course_update->course_name}}
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
					<form role="form" action="{{URL::to('/cap-nhat-nam-hoc-thanh-cong/'.$course_update->course_id)}}" method="POST" style="margin-bottom: 20px" >
						{{csrf_field()}}
						<div class="form-group">
							<label>Tên khóa</label>
							<input type="text" name="course_name" class="form-control" value="{{$course_update->course_name}}">
						</div>
						<button type="submit" name="updating_course" class="btn btn-primary btn-block">Cập nhật</button>
					</form>
					<a href="{{url('/danh-sach-nam-hoc')}}" title="">
						<i class="fa fa-arrow-left" aria-hidden="true"> Quay về danh sách</i>
					</a>
				</div>
			</div>
		</section>
	</div>
</div>
@endsection