@extends('admin.admin_layout')
@section('admin_content')
<div class="row">
	<div class="col-lg-12">
		<section class="panel">
			<header class="panel-heading">
				Cập nhật danh mục {{$category_update->category_name}}
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
					<form role="form" action="{{URL::to('/cap-nhat-danh-muc-thanh-cong/'.$category_update->category_id)}}" method="POST" style="margin-bottom: 20px" >
						{{csrf_field()}}
						<div class="form-group">
							<label>Tên loại câu hỏi cũ</label>
							<input type="text" class="form-control" value="{{$category_update->category_name}}" disabled>
						</div>
						<div class="form-group">
							<label>Tên loại câu hỏi mới</label>
							<input type="text" name="category_name" class="form-control">
						</div>
						<button type="submit" name="updating_category" class="btn btn-primary btn-block">Cập nhật</button>
					</form>
					<a href="{{url('/danh-sach-danh-muc')}}" title="">
						<i class="fa fa-arrow-left" aria-hidden="true"> Quay về danh sách</i>
					</a>
				</div>
			</div>
		</section>
	</div>
</div>
@endsection