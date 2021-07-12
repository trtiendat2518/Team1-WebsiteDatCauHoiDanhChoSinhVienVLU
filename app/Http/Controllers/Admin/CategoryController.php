<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use App\Models\Category;
use App\Models\Post;
use App\Models\Admin;
use App\Models\Visitor;
use Carbon\Carbon;
use Validator;
use Session;
session_start();

class CategoryController extends Controller
{
	public function AuthLogin(){
		$admin_id=Session::get('admin_id');
		if($admin_id){
			return Redirect::to('admin-home');
		}else{
			return Redirect::to('admin-login')->send();
		}
	}
	
	public function category_list(Request $request){
		$this->AuthLogin();
		if (Session::get('admin_role')==1) {
    		//SEO
			$meta_desc = "Danh sách danh mục";
			$meta_title = "Danh sách danh mục";
			$url_canonical =$request->url();
    		//--------------------------
			$user_ip_address = $request->ip();
			$visitor_current = Visitor::where('visitor_ipaddress',$user_ip_address)->get();
			$visitor_count = $visitor_current->count();
			if($visitor_count<1){
				$visitor = new Visitor();
				$visitor->visitor_ipaddress = $user_ip_address;
				$visitor->visitor_date = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();
				$visitor->save();
			}

			$headmonthlast = Carbon::now('Asia/Ho_Chi_Minh')->subMonth()->startOfMonth()->toDateString();
			$backmonthlast = Carbon::now('Asia/Ho_Chi_Minh')->subMonth()->endOfMonth()->toDateString();
			$headmonthnow = Carbon::now('Asia/Ho_Chi_Minh')->startOfMonth()->toDateString();
			$sub365days = Carbon::now('Asia/Ho_Chi_Minh')->subdays(365)->toDateString();
			$now = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();

			$visitor_lastmonth = Visitor::whereBetween('visitor_date',[$headmonthlast,$backmonthlast])->get();
			$visitor_lastmonth_count = $visitor_lastmonth->count();
			$visitor_thismonth = Visitor::whereBetween('visitor_date',[$headmonthnow,$now])->get();
			$visitor_thismonth_count = $visitor_thismonth->count();
			$visitor_oneyear = Visitor::whereBetween('visitor_date',[$sub365days,$now])->get();
			$visitor_oneyear_count = $visitor_oneyear->count();
			$visitors = Visitor::all();
			$visitor_total_count = $visitors->count();

			$info = Admin::where('admin_id',Session::get('admin_id'))->limit(1)->get();
			$list = Category::orderBy('category_id', 'DESC')->paginate(5);
			return view('admin.pages.category.list')->with(compact('meta_desc','meta_title','url_canonical','list','info','visitor_count','visitor_lastmonth_count','visitor_thismonth_count','visitor_oneyear_count','visitor_total_count'));
		}else{
			return Redirect::to('admin-home');
		}
	}

	public function category_search(Request $request){
		$this->AuthLogin();
		if(Session::get('admin_role')==1){
      		//SEO
			$meta_desc = "Tìm kiếm";
			$meta_title = "Tìm kiếm";
			$url_canonical = $request->url();
      		//---------------
			$user_ip_address = $request->ip();
			$visitor_current = Visitor::where('visitor_ipaddress',$user_ip_address)->get();
			$visitor_count = $visitor_current->count();
			if($visitor_count<1){
				$visitor = new Visitor();
				$visitor->visitor_ipaddress = $user_ip_address;
				$visitor->visitor_date = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();
				$visitor->save();
			}

			$headmonthlast = Carbon::now('Asia/Ho_Chi_Minh')->subMonth()->startOfMonth()->toDateString();
			$backmonthlast = Carbon::now('Asia/Ho_Chi_Minh')->subMonth()->endOfMonth()->toDateString();
			$headmonthnow = Carbon::now('Asia/Ho_Chi_Minh')->startOfMonth()->toDateString();
			$sub365days = Carbon::now('Asia/Ho_Chi_Minh')->subdays(365)->toDateString();
			$now = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();

			$visitor_lastmonth = Visitor::whereBetween('visitor_date',[$headmonthlast,$backmonthlast])->get();
			$visitor_lastmonth_count = $visitor_lastmonth->count();
			$visitor_thismonth = Visitor::whereBetween('visitor_date',[$headmonthnow,$now])->get();
			$visitor_thismonth_count = $visitor_thismonth->count();
			$visitor_oneyear = Visitor::whereBetween('visitor_date',[$sub365days,$now])->get();
			$visitor_oneyear_count = $visitor_oneyear->count();
			$visitors = Visitor::all();
			$visitor_total_count = $visitors->count();

			$info = Admin::where('admin_id',Session::get('admin_id'))->limit(1)->get();
			$data = $request->validate([
				'keywords_submit'=>'bail|required|max:50|notspecial_spaces'
			],[
				'keywords_submit.required'=>'Không được để trống',
				'keywords_submit.notspecial_spaces'=>'Không thể tìm kiếm ký tự đặc biệt',
				'keywords_submit.max'=>'Độ dài không quá 50 ký tự',
			]);
			$keywords = $data['keywords_submit'];
			$search = Category::where('category_name','like','%'.$keywords.'%')
			->orderBy('category_id','DESC')->get();
			return view('admin.pages.category.search')->with(compact('meta_desc','meta_title','url_canonical','search','info','visitor_count','visitor_lastmonth_count','visitor_thismonth_count','visitor_oneyear_count','visitor_total_count'));
		}else{
			return Redirect::to('admin-home');
		}
	}

	public function category_open(Request $request){
		$this->AuthLogin();
		if(Session::get('admin_role')==1){
      		//SEO
			$meta_desc = "Thêm mới danh mục";
			$meta_title = "Thêm mới danh mục";
			$url_canonical = $request->url();
      		//---------------
			$user_ip_address = $request->ip();
			$visitor_current = Visitor::where('visitor_ipaddress',$user_ip_address)->get();
			$visitor_count = $visitor_current->count();
			if($visitor_count<1){
				$visitor = new Visitor();
				$visitor->visitor_ipaddress = $user_ip_address;
				$visitor->visitor_date = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();
				$visitor->save();
			}

			$headmonthlast = Carbon::now('Asia/Ho_Chi_Minh')->subMonth()->startOfMonth()->toDateString();
			$backmonthlast = Carbon::now('Asia/Ho_Chi_Minh')->subMonth()->endOfMonth()->toDateString();
			$headmonthnow = Carbon::now('Asia/Ho_Chi_Minh')->startOfMonth()->toDateString();
			$sub365days = Carbon::now('Asia/Ho_Chi_Minh')->subdays(365)->toDateString();
			$now = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();

			$visitor_lastmonth = Visitor::whereBetween('visitor_date',[$headmonthlast,$backmonthlast])->get();
			$visitor_lastmonth_count = $visitor_lastmonth->count();
			$visitor_thismonth = Visitor::whereBetween('visitor_date',[$headmonthnow,$now])->get();
			$visitor_thismonth_count = $visitor_thismonth->count();
			$visitor_oneyear = Visitor::whereBetween('visitor_date',[$sub365days,$now])->get();
			$visitor_oneyear_count = $visitor_oneyear->count();
			$visitors = Visitor::all();
			$visitor_total_count = $visitors->count();

			$info = Admin::where('admin_id',Session::get('admin_id'))->limit(1)->get();
			return view('admin.pages.category.add')->with(compact('meta_desc','meta_title','url_canonical','info','visitor_count','visitor_lastmonth_count','visitor_thismonth_count','visitor_oneyear_count','visitor_total_count'));
		}else{
			return Redirect::to('admin-home');
		}
	}

	public function category_add(Request $request){
		$data = $request->validate([
			'category_name'=>'bail|required|max:50|min:5|notspecial_spaces',
			'category_status'=>'bail|required',
		],[
			'category_name.required'=>'Tên danh mục không được để trống',
			'category_name.notspecial_spaces'=>'Tên danh mục không được chứa ký tự đặc biệt',
			'category_name.min'=>'Tên danh mục ít nhất có 5 ký tự',
			'category_name.max'=>'Tên danh mục không quá 50 ký tự',
		]);
		$category = new Category();

		$category->category_name = $data['category_name'];
		$category->category_status = $data['category_status'];

		$check_name = Category::where('category_name','=',$category->category_name)->first();


		if ($data['category_name']=='') {
			Session::put('message','<div class="alert alert-danger">Không được để trống!</div>');
			return Redirect::to('them-moi-danh-muc');
		}else if($check_name){
			Session::put('message','<div class="alert alert-danger">Tên danh mục đã tồn tại!</div>');
			return Redirect::to('them-moi-danh-muc');
		}else{
			$result = $category->save(); 
			if($result){
				Session::put('message','<div class="alert alert-success">Thêm mới danh mục thành công!</div>');
				return Redirect::to('danh-sach-danh-muc');
			}else{
				Session::put('message','<div class="alert alert-danger">Không thể thêm mới danh mục học!</div>');
				return Redirect::to('them-moi-danh-muc');
			}
		}
	}

	public function category_openupdate(Request $request,$category_id){
		$this->AuthLogin();
		if(Session::get('admin_role')==1){
			$user_ip_address = $request->ip();
			$visitor_current = Visitor::where('visitor_ipaddress',$user_ip_address)->get();
			$visitor_count = $visitor_current->count();
			if($visitor_count<1){
				$visitor = new Visitor();
				$visitor->visitor_ipaddress = $user_ip_address;
				$visitor->visitor_date = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();
				$visitor->save();
			}

			$headmonthlast = Carbon::now('Asia/Ho_Chi_Minh')->subMonth()->startOfMonth()->toDateString();
			$backmonthlast = Carbon::now('Asia/Ho_Chi_Minh')->subMonth()->endOfMonth()->toDateString();
			$headmonthnow = Carbon::now('Asia/Ho_Chi_Minh')->startOfMonth()->toDateString();
			$sub365days = Carbon::now('Asia/Ho_Chi_Minh')->subdays(365)->toDateString();
			$now = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();

			$visitor_lastmonth = Visitor::whereBetween('visitor_date',[$headmonthlast,$backmonthlast])->get();
			$visitor_lastmonth_count = $visitor_lastmonth->count();
			$visitor_thismonth = Visitor::whereBetween('visitor_date',[$headmonthnow,$now])->get();
			$visitor_thismonth_count = $visitor_thismonth->count();
			$visitor_oneyear = Visitor::whereBetween('visitor_date',[$sub365days,$now])->get();
			$visitor_oneyear_count = $visitor_oneyear->count();
			$visitors = Visitor::all();
			$visitor_total_count = $visitors->count();
			
			$info = Admin::where('admin_id',Session::get('admin_id'))->limit(1)->get();
			$category_update = Category::find($category_id);
			$categoryId = Category::where('category_id',$category_id)->get();
			foreach ($categoryId as $key => $value){
         	//SEO
				$meta_desc = "Cập nhật danh mục ".$value->category_name;
				$meta_title = "Cập nhật danh mục ".$value->category_name;
				$url_canonical = $request->url();
         	//---------------
			}
			return view('admin.pages.category.update')->with(compact('category_update','meta_desc','meta_title','url_canonical','info','visitor_count','visitor_lastmonth_count','visitor_thismonth_count','visitor_oneyear_count','visitor_total_count'));
		}else{
			return Redirect::to('admin-home');
		}
	}

	public function category_update(Request $request, $category_id){
		$this->AuthLogin();
		$data = $request->validate([
			'category_name'=>'bail|required|max:50|min:5|notspecial_spaces',
		],[
			'category_name.required'=>'Tên danh mục không được để trống',
			'category_name.notspecial_spaces'=>'Tên danh mục không được chứa ký tự đặc biệt',
			'category_name.min'=>'Tên danh mục ít nhất có 5 ký tự',
			'category_name.max'=>'Tên danh mục không quá 50 ký tự',
		]);
		$category = Category::find($category_id);

		$category->category_name = $data['category_name'];

		$check_name = Category::where('category_name','=',$category->category_name)->first();

		if ($data['category_name']=='') {
			Session::put('message','<div class="alert alert-danger">Không được để trống!</div>');
			return Redirect::to('cap-nhat-danh-muc/'.$category_id);
		}else if($check_name){
			Session::put('message','<div class="alert alert-danger">Tên danh mục đã tồn tại!</div>');
			return Redirect::to('cap-nhat-danh-muc/'.$category_id);
		}else{
			$result = $category->save();
			if($result){
				Session::put('message','<div class="alert alert-success">Cập nhật danh mục thành công!</div>');
				return Redirect::to('danh-sach-danh-muc');
			}else{
				Session::put('message','<div class="alert alert-danger">Không thể cập nhật danh mục!</div>');
				return Redirect::to('cap-nhat-danh-muc/'.$category_id);
			} 
		}
	}

	public function category_active($category_id){
		$this->AuthLogin();
		$category = Category::find($category_id);
		$category->category_status=1;
		$category->save();

		Session::put('message','<div class="alert alert-warning">Đã ẩn trạng thái!</div>');
		return Redirect::to('danh-sach-danh-muc');
	}
	
	public function category_unactive($category_id){
		$this->AuthLogin();
		$category = Category::find($category_id);
		$category->category_status=0;
		$category->save();

		Session::put('message','<div class="alert alert-warning">Đã hiển thị trạng thái!</div>');
		return Redirect::to('danh-sach-danh-muc'); 
	}

	public function category_delete($category_id){
		$this->AuthLogin(); 
		$del = Category::find($category_id);
		$post = Post::where('category_id', $category_id)->get();
		foreach($post as $key => $value){
			$value->category_id=0;
			$value->save();
		}
		$del->delete();
		Session::put('message','<div class="alert alert-success">Xóa thành công!</div>');
		return Redirect::to('danh-sach-danh-muc');
	}
}
