@extends('admin.admin_layout')
@section('admin_content')
<div class="row">
	<div class="col-lg-12">
		<section class="panel">
			<header class="panel-heading">
				Thêm mới chuyên ngành
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
					<form role="form" action="{{URL::to('/them-moi-chuyen-nganh-thanh-cong')}}" method="POST">
						{{csrf_field()}}
						<div class="form-group">
							<label>Tên chuyên ngành</label>
							<input type="text" name="specialized_name" class="form-control" placeholder="Nhập tên chuyên ngành">
						</div>
						<div class="form-group">
							<label>Khoa</label>
							<select name="faculty_id" class="form-control m-bot15">
								<option value="0"></option>
								@foreach ($faculty as $key => $pcz)
									<option value="{{$pcz->faculty_id}}">{{$pcz->faculty_name}}</option>
								@endforeach
							</select>
						</div>
						<div class="form-group">
							<label>Hiển thị</label>
							<select name="specialized_status" class="form-control m-bot15">
								<option value="1">Ẩn</option>
								<option value="0">Hiển thị</option>
							</select>
						</div>
						<button type="submit" name="adding_specialized" class="btn btn-primary btn-block">Tạo mới</button>
					</form>
				</div>

			</div>
		</section>

	</div>
</div>
@endsection