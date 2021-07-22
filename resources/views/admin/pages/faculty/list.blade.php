@extends('admin.admin_layout')
@section('admin_content')
<div class="table-agile-info">
	<div class="panel panel-default">
		<div class="panel-heading">
			Danh sách khoa
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
						<th style="text-align: center">Tên khoa</th>
						<th style="text-align: center">Mã khoa</th>
						<th style="text-align: center">Hiển thị</th>
						<th style="width: 10px;"></th>
						<th style="width: 10px;"></th>
					</tr>
				</thead>
				<tbody>
					@foreach ($list as $key => $listfaculty) 
					<tr>
						<td style="text-align: center; color: black">{{$listfaculty->faculty_name}}</td>
						<td style="text-align: center; color: black">{{$listfaculty->faculty_code}}</td>
						<td style="text-align: center">
							<span  class="text-ellipsis">
								@php
								if ($listfaculty->faculty_status==0){
									@endphp
									<a href="{{URL::to('/hien-thi-khoa/'.$listfaculty->faculty_id)}}">
										<span class="fa-eye-styling fa fa-eye"></span>
									</a>
									@php
								}else{
									@endphp
									<a href="{{URL::to('/an-khoa/'.$listfaculty->faculty_id)}}">
										<span class="fa-eye-styling fa fa-eye-slash"></span>
									</a>
									@php
								}
								@endphp
							</span>
						</td>
						<td style="text-align: center">
							<a href="{{URL::to('/cap-nhat-khoa/'.$listfaculty->faculty_id)}}" class="active styling-edit" ui-toggle-class="">
								<i class="fa fa-pencil-square-o text-success text-active"></i>
							</a>
						</td>
						<td style="text-align: center">
							<a href="{{URL::to('/xoa-khoa/'.$listfaculty->faculty_id)}}" class="active styling-edit" ui-toggle-class="" onclick="return confirm('Bạn có chắc chắn muốn xóa {{$listfaculty->faculty_name}} không?')">
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