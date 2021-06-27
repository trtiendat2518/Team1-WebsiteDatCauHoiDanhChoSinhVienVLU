@extends('admin.admin_layout')
@section('admin_content')
<div class="table-agile-info">
	<div class="panel panel-default">
		<div class="panel-heading">
			Danh sách User
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
				<form action="{{url('/tim-kiem-user')}}" method="post">
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
		<div class="table-responsive table-admin">
			<table class="table table-striped b-t b-light">
				<thead class="thead-dark">
					<tr>
						<th style="text-align: center">Họ và tên</th>
						<th style="text-align: center">Email</th>
						<th style="text-align: center">Vai trò</th>
						<th style="text-align: center">Trạng thái</th>
						<th style="width:30px;"></th>
					</tr>
				</thead>
				<tbody>
					@foreach ($search as $key => $listadmin) 
					<tr>
						<td style="text-align: center; color: black">{{$listadmin->admin_name}}</td>
						<td style="text-align: center; color: black">{{$listadmin->admin_email}}</td>
						<td style="text-align: center">
							<span  class="text-ellipsis">
								@if ($listadmin->admin_role==0)
								Quản trị viên
								@elseif($listadmin->admin_role==1)
								BCN Khoa
								@else
								Trợ lý
								@endif
							</span>
						</td>
						<td style="text-align: center">
							<span  class="text-ellipsis">
								@php
								if ($listadmin->admin_status==0){
									@endphp
									<a href="{{URL::to('/hien-thi-user/'.$listadmin->admin_id)}}">
										<span class="fa-eye-styling fa fa-eye"></span>
									</a>
									@php
								}else{
									@endphp
									<a href="{{URL::to('/an-user/'.$listadmin->admin_id)}}">
										<span class="fa-eye-styling fa fa-eye-slash"></span>
									</a>
									@php
								}
								@endphp
							</span>
						</td>
						<td style="text-align: center">
							<a href="{{URL::to('/cap-nhat-user/'.$listadmin->admin_id)}}" class="active styling-edit" ui-toggle-class="">
								<i class="fa fa-pencil-square-o text-success text-active"></i>
							</a>
							<a href="{{URL::to('/xoa-user/'.$listadmin->admin_id)}}" class="active styling-edit" ui-toggle-class="" onclick="return confirm('Bạn có chắc chắn muốn xóa {{$listadmin->admin_name}} không?')">
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