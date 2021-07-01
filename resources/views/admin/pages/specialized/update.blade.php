@extends('admin.admin_layout')
@section('admin_content')
<div class="row">
	<div class="col-lg-12">
		<section class="panel">
			<header class="panel-heading">
				Cập nhật chuyên ngành {{$specialized_update->specialized_name}}
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
					<form role="form" action="{{URL::to('/cap-nhat-chuyen-nganh-thanh-cong/'.$specialized_update->specialized_id)}}" method="POST" style="margin-bottom: 20px" >
						{{csrf_field()}}
						<div class="form-group">
							<label>Tên chuyên ngành</label>
							<input type="text" name="specialized_name" class="form-control" value="{{$specialized_update->specialized_name}}">
						</div>
						<div class="form-group">
							<label>Khoa</label>
							<select name="faculty_id" class="form-control m-bot15">
								<option value="{{$specialized_update->faculty->faculty_id}}">{{$specialized_update->faculty->faculty_name}}</option>
								@foreach ($faculty as $key => $pcz)
									<option value="{{$pcz->faculty_id}}">{{$pcz->faculty_name}}</option>
								@endforeach
							</select>
						</div>
						<button type="submit" name="updating_specialized" class="btn btn-primary btn-block">Cập nhật</button>
					</form>
					<a href="{{url('/danh-sach-chuyen-nganh')}}" title="">
						<i class="fa fa-arrow-left" aria-hidden="true"> Quay về danh sách</i>
					</a>
				</div>
			</div>
		</section>
	</div>
</div>
@endsection