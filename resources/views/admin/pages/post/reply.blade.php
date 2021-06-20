@extends('admin.admin_layout')
@section('admin_content')
<div class="row">
	<div class="col-lg-12">
		<section class="panel">
			<header class="panel-heading">
				Chi tiết câu hỏi {{$post_detail->post_title}}
			</header>
			<div class="panel-body">
				<div class="position-center">
					<form role="form" style="margin-bottom: 20px" >
						{{csrf_field()}}
						<div class="form-group">
							<label>Ngày đăng</label>
							<input type="text" name="post_name" class="form-control" value="{{$post_detail->created_at}}" disabled>
						</div>
						<div class="form-group">
							<label>Sinh viên</label>
							<input type="text" name="post_name" class="form-control" value="{{$post_detail->student->student_name}}" disabled>
						</div>
						<div class="form-group">
							<label>Tiêu đề</label>
							<input type="text" name="post_name" class="form-control" value="{{$post_detail->post_title}}" disabled>
						</div>
						<div class="form-group">
							<label>Loại câu hỏi</label>
							<input type="text" name="post_name" class="form-control" value="{{$post_detail->category->category_name}}" disabled>
						</div>
						<div class="form-group">
							<label>Nội dung</label>
							<textarea rows="6" type="text" name="post_code" class="form-control" style="resize: none;white-space: pre-line;" disabled>{{$post_detail->post_content}}</textarea>
						</div>
					</form>
				</div>
			</div>
		</section>
	</div>
</div>
<br>
<div class="row">
	<div class="col-lg-12">
		<section class="panel">
			<header class="panel-heading">
				Trả lời câu hỏi {{$post_detail->post_title}}
			</header>
			@php
			$message = Session::get('message');
			if($message){
				echo $message;
				Session::put('message', null);
			}     
			@endphp
			<div class="panel-body">
				<div class="position-center">
					<form role="form" action="{{URL::to('/tra-loi-cau-hoi/'.$post_detail->post_id)}}" method="POST" style="margin-bottom: 20px" >
						{{csrf_field()}}
						<div class="form-group">
							<label>Nội dung</label>
							<textarea rows="7" type="text" name="reply_cpntent" class="form-control" style="resize: none; white-space: pre-line;"></textarea>
						</div>
						<button type="submit" name="reply_post" class="btn btn-primary btn-block">Trả lời</button>
					</form>
					<a href="{{url('/danh-sach-cau-hoi')}}" title="">
						<i class="fa fa-arrow-left" aria-hidden="true"> Quay về danh sách</i>
					</a>
				</div>
			</div>
		</section>
	</div>
</div>
@endsection