@extends('admin.admin_layout')
@section('admin_content')
<div class="table-agile-info">
	<div class="panel panel-default">
		<div class="panel-heading">
			Danh sách câu hỏi HOT
		</div>
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
		<div class="table-responsive table-admin">
			<table class="table table-striped b-t b-light" id="myTable">
				<thead class="thead-dark">
					<tr>
						<th style="text-align: center">Tiêu đề</th>
						<th style="text-align: center">Loại câu hỏi</th>
						<th style="text-align: center">Trạng thái</th>
						<th style="text-align: center; width:80px;">Ghim đầu</th>
						<th style="width:10px;"></th>
						<th style="width:10px;"></th>
					</tr>
				</thead>
				<tbody>
					@foreach ($list as $key => $listpost) 
					<tr>
						<td style="text-align: center; color: black">{{$listpost->post_title}}</td>
						@if ($listpost->category_id==0)
						<td style="text-align: center; color: black">Danh mục đã bị xóa</td>
						@else
						<td style="text-align: center; color: black">{{$listpost->category->category_name}}</td>
						@endif
						<td style="text-align: center; color: black">
							@if ($listpost->post_reply=='')
							Chưa trả lời
							@else
							Đã trả lời
							@endif
						</td>
						<td style="text-align: center">
							<span  class="text-ellipsis">
								@php
								if ($listpost->post_pin==0){
									@endphp
									<a href="{{URL::to('/ghim-cau-hoi-dang-chu-y/'.$listpost->post_id)}}">
										<span class="fa-eye-styling fa fa-circle-thin"></span>
									</a>
									@php
								}else{
									@endphp
									<a href="{{URL::to('/huy-ghim-cau-hoi-dang-chu-y/'.$listpost->post_id)}}">
										<span class="fa-eye-styling fa fa-thumb-tack"></span>
									</a>
									@php
								}
								@endphp
							</span>
						</td>
						<td style="text-align: center">
							@if (Session::get('admin_role')==1)
							<a href="{{URL::to('/xem-cau-hoi-dang-chu-y/'.$listpost->post_id)}}" class="active styling-edit" ui-toggle-class="">
								<i class="fa fa-reply text-success text-active"></i>
							</a>
							@endif
						</td>
						<td>
							<a href="{{URL::to('/xoa-cau-hoi-dang-chu-y/'.$listpost->post_id)}}" class="active styling-edit" ui-toggle-class="" onclick="return confirm('Bạn có chắc chắn muốn xóa {{$listpost->post_name}} không?')">
								<i class="fa fa-trash text-danger text"></i>
							</a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection