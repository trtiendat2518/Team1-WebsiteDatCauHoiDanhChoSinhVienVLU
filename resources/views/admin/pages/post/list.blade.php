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
			<div class="col-sm-7 m-b-xs">
				<table>
					<tbody>
						<tr>
							<form action="{{url('import-cau-hoi')}}" method="POST" enctype="multipart/form-data">
								@csrf
								<td><input type="file" name="file" accept=".xlsx" required=""></td>
								<td><input type="submit" value="Import file Excel " name="import_csv" class="btn btn-warning"></td>
							</form>
							<form action="{{url('export-cau-hoi')}}" method="POST">
								@csrf
								<td><input type="submit" value="Export file Excel" name="export_csv" class="btn btn-success"></td>
							</form>
						</tr>
					</tbody>
				</table>                
			</div>
			<div class="col-sm-5">
				<form action="{{url('/tim-kiem-cau-hoi')}}" method="post">
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
						<th style="text-align: center">Tiêu đề</th>
						<th style="text-align: center">Loại câu hỏi</th>
						<th style="text-align: center">Trạng thái</th>
						<th style="text-align: center">Ngày đăng</th>
						<th style="text-align: center">Ghim đầu</th>
						<th style="width:30px;"></th>
					</tr>
				</thead>
				<tbody>
					@foreach ($list as $key => $listpost) 
					<tr>
						<td style="text-align: center; color: black"><a href="#">{{$listpost->post_title}}</a></td>
						<td style="text-align: center; color: black">{{$listpost->category->category_name}}</td>
						<td style="text-align: center; color: black">
							@if ($listpost->post_reply=='')
							Chưa trả lời
							@else
							Đã trả lời
							@endif
						</td>
						<td style="text-align: center; color: black">{{$listpost->created_at}}</td>
						<td style="text-align: center">
							<span  class="text-ellipsis">
								@php
								if ($listpost->post_pin==0){
									@endphp
									<a href="{{URL::to('/ghim-cau-hoi/'.$listpost->post_id)}}">
										<span class="fa-eye-styling fa fa-circle-thin"></span>
									</a>
									@php
								}else{
									@endphp
									<a href="{{URL::to('/huy-ghim-cau-hoi/'.$listpost->post_id)}}">
										<span class="fa-eye-styling fa fa-thumb-tack"></span>
									</a>
									@php
								}
								@endphp
							</span>
						</td>
						<td style="text-align: center">
							<a href="{{URL::to('/xem-cau-hoi/'.$listpost->post_id)}}" class="active styling-edit" ui-toggle-class="">
								<i class="fa fa-reply text-success text-active"></i>
							</a>
							<a href="{{URL::to('/xoa-cau-hoi/'.$listpost->post_id)}}" class="active styling-edit" ui-toggle-class="" onclick="return confirm('Bạn có chắc chắn muốn xóa {{$listpost->post_title}} không?')">
								<i class="fa fa-trash text-danger text"></i>
							</a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
		<footer class="panel-footer">
			<center>
				<div>
					<div class="text-right text-center-xs">                
						<ul class="pagination pagination-sm m-t-none m-b-none">
							<span>{!! $list->render("pagination::bootstrap-4") !!}</span>
						</ul>
					</div>
				</div>
			</center>
		</footer>
	</div>
</div>
@endsection