@extends('admin.admin_layout')
@section('admin_content')
<div class="row">
	<div class="col-lg-12">
		<section class="panel">
			<header class="panel-heading">
				Thêm mới danh mục
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
					<form role="form" action="{{URL::to('/them-moi-danh-muc-thanh-cong')}}" method="POST">
						{{csrf_field()}}
						<div class="form-group">
							<label>Tên danh mục</label>
							<input type="text" name="category_name" class="form-control" placeholder="Nhập tên danh mục">
						</div>
						<div class="form-group">
							<label>Hiển thị</label>
							<select name="category_status" class="form-control m-bot15">
								<option value="1">Ẩn</option>
								<option value="0">Hiển thị</option>
							</select>
						</div>
						<button type="submit" name="adding_category" class="btn btn-primary btn-block">Tạo mới</button>
					</form>
				</div>

			</div>
		</section>

	</div>
</div>
@endsection