@extends('admin.admin_layout')
@section('admin_content')
<div class="table-agile-info">
	<div class="panel panel-default">
		<div class="panel-heading">
			Danh sách sinh viên
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
		<div class="row w3-res-tb">
			<div class="col-sm-7 m-b-xs">
				<table>
					<tbody>
						<tr>
							<form action="{{url('import-sinh-vien')}}" method="POST" enctype="multipart/form-data">
								@csrf
								<td><input type="file" name="file" accept=".xlsx" required=""></td>
								<td><input type="submit" value="Import file Excel " name="import_csv" class="btn btn-warning"></td>
							</form>
							<form action="{{url('export-sinh-vien')}}" method="POST">
								@csrf
								<td><input type="submit" value="Export file Excel" name="export_csv" class="btn btn-success"></td>
							</form>
						</tr>
					</tbody>
				</table>                
			</div>
		</div>
		<div class="table-responsive table-admin">
			<table class="table table-striped b-t b-light" id="myTable">
				<thead class="thead-dark">
					<tr>
						<th style="text-align: center">Họ và tên</th>
						<th style="text-align: center">Email</th>
						<th style="text-align: center">Trạng thái</th>
						<th style="width:10px;"></th>
						<th style="width:10px;"></th>
					</tr>
				</thead>
				<tbody>
					@foreach ($list as $key => $liststudent)
					<tr>
						<td style="text-align: center; color: black">{{$liststudent->student_name}}</td>
						<td style="text-align: center; color: black">{{$liststudent->student_email}}</td>
						<td style="text-align: center">
							<span  class="text-ellipsis">
								@if ($liststudent->student_status=='Verified')
								Đã xác nhận
								@else
								Chưa xác nhận
								@endif
							</span>
						</td>
						<td style="text-align: center">
							<a href="{{URL::to('/cap-nhat-sinh-vien/'.$liststudent->student_id)}}" class="active styling-edit" ui-toggle-class="">
								<i class="fa fa-pencil-square-o text-success text-active"></i>
							</a>
						</td>
						<td>
							<a href="{{URL::to('/xoa-sinh-vien/'.$liststudent->student_id)}}" class="active styling-edit" ui-toggle-class="" onclick="return confirm('Bạn có chắc chắn muốn xóa {{$liststudent->student_name}} không?')">
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