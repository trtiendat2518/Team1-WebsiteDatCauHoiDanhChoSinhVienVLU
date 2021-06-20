@extends('admin.admin_layout')
@section('admin_content')
<div class="table-agile-info">
	<div class="panel panel-default">
		<div class="panel-heading">
			Danh sách câu hỏi
		</div>
		@php
		$message = Session::get('message');
		if($message){
			echo $message;
			Session::put('message', null);
		}     
		@endphp
		<div class="row w3-res-tb">
			<div class="col-sm-5">
				<form action="{{url('/tim-kiem-chuyen-nganh')}}" method="post">
					@csrf
					<div class="input-group">
						<input type="text" class="input-sm form-control" name="keywords_submit" placeholder="Từ khóa, nội dung muốn tìm">
						<span class="input-group-btn">
							<button style="background-color: #b6b7b9;" class="btn btn-sm btn-default" type="submit">Tìm kiếm</button>
						</span>
					</div>
				</form>
			</div>
		</div>
		<div class="table-responsive">
			<table class="table table-striped b-t b-light">
				<thead>
					<tr>
						<th style="text-align: center">Khoa</th>
						<th style="text-align: center">Tên chuyên ngành</th>
						<th style="text-align: center">Hiển thị</th>
						<th style="width:30px;"></th>
					</tr>
				</thead>
				<tbody>
					@foreach ($search as $key => $listspecialized) 
					<tr>
						<td style="text-align: center; color: black">{{$listspecialized->faculty->faculty_name}}</td>
						<td style="text-align: center; color: black">{{$listspecialized->specialized_name}}</td>
						<td style="text-align: center">
							<span  class="text-ellipsis">
								@php
								if ($listspecialized->specialized_status==0){
									@endphp
									<a href="{{URL::to('/hien-thi-chuyen-nganh/'.$listspecialized->specialized_id)}}">
										<span class="fa-eye-styling fa fa-eye"></span>
									</a>
									@php
								}else{
									@endphp
									<a href="{{URL::to('/an-chuyen-nganh/'.$listspecialized->specialized_id)}}">
										<span class="fa-eye-styling fa fa-eye-slash"></span>
									</a>
									@php
								}
								@endphp
							</span>
						</td>
						<td style="text-align: center">
							<a href="{{URL::to('/cap-nhat-chuyen-nganh/'.$listspecialized->specialized_id)}}" class="active styling-edit" ui-toggle-class="">
								<i class="fa fa-pencil-square-o text-success text-active"></i>
							</a>
							<a href="{{URL::to('/xoa-chuyen-nganh/'.$listspecialized->specialized_id)}}" class="active styling-edit" ui-toggle-class="" onclick="return confirm('Bạn có chắc chắn muốn xóa {{$listspecialized->specialized_name}} không?')">
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