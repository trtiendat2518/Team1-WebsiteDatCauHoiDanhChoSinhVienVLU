<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use App\Models\Student;
use App\Models\StudentInfo;
use App\Models\Nofication;
use App\Models\Comment;
use App\Models\Like;
use App\Models\Post;
use App\Models\Reply;
use App\Imports\StudentImport;
use App\Exports\StudentExport;
use App\Models\Admin;
use App\Models\Visitor;
use Carbon\Carbon;
use Excel;
use Validator;
use Session;
session_start();

class StudentController extends Controller
{
	public function AuthLogin(){
		$admin_id=Session::get('admin_id');
		if($admin_id){
			return Redirect::to('admin-home');
		}else{
			return Redirect::to('admin-login')->send();
		}
	}

	public function student_list(Request $request){
		$this->AuthLogin();
		if(Session::get('admin_role')==0 || Session::get('admin_role')==1){
      		//SEO
			$meta_desc = "Danh sách sinh viên";
			$meta_title = "Danh sách sinh viên";
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
			$list = Student::orderBy('student_id', 'DESC')->get();
			return view('admin.pages.alumnus.list')->with(compact('meta_desc','meta_title','url_canonical','list','info','visitor_count','visitor_lastmonth_count','visitor_thismonth_count','visitor_oneyear_count','visitor_total_count'));
		}else{
			return Redirect::to('admin-home');
		}
	}

	public function student_open(Request $request){
		$this->AuthLogin();
		if(Session::get('admin_role')==0 || Session::get('admin_role')==1){
      		//SEO
			$meta_desc = "Thêm mới sinh viên";
			$meta_title = "Thêm mới sinh viên";
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
			return view('admin.pages.alumnus.add')->with(compact('meta_desc','meta_title','url_canonical','info','visitor_count','visitor_lastmonth_count','visitor_thismonth_count','visitor_oneyear_count','visitor_total_count'));
		}else{
			return Redirect::to('admin-home');
		}
	}

	public function student_add(Request $request){
		$data = $request->validate([
			'student_name'=>'bail|required|alpha_spaces|max:100',
			'student_email'=>'bail|required|unique:tbl_student',
			'student_password'=>'bail|required|min:6|max:32',
		],[
			'student_name.required'=>'Tên không được để trống',
			'student_name.alpha_spaces'=>'Tên không được chứa ký tự số hoặc ký tự đặc biệt',
			'student_email.required'=>'Mail không được để trống',
			'student_email.email'=>'Mail nhập sai định dạng',
			'student_email.unique'=>'Mail sinh viên đã tồn tại',
			'student_password.required'=>'Mật khẩu không được để trống',
			'student_password.min'=>'Mật khẩu ít nhất có 6 ký tự',
			'student_password.max'=>'Mật khẩu không quá 32 ký tự',
		]);
		
		$student = new Student();

		$student->student_name = $data['student_name'];
		$student->student_email = $data['student_email'];
		$student->student_password = md5($data['student_password']);
		$student->student_status = 'Verified';

		$result = $student->save(); 
		if($result){
			Session::put('message','<div class="alert alert-success">Thêm mới sinh viên thành công!</div>');
			return Redirect::to('danh-sach-sinh-vien');
		}else{
			Session::put('message','<div class="alert alert-danger">Không thể thêm mới sinh viên!</div>');
			return Redirect::to('them-moi-sinh-vien');
		}
	}

	public function student_openupdate(Request $request,$student_id){
		$this->AuthLogin();
		if(Session::get('admin_role')==0 || Session::get('admin_role')==1){
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
			$student_update = Student::find($student_id);
			$studentId = Student::where('student_id',$student_id)->get();
			foreach ($studentId as $key => $value){
         	//SEO
				$meta_desc = "Cập nhật sinh viên ".$value->student_name;
				$meta_title = "Cập nhật sinh viên ".$value->student_name;
				$url_canonical = $request->url();
         	//---------------
			}
			return view('admin.pages.alumnus.update')->with(compact('student_update','meta_desc','meta_title','url_canonical','info','visitor_count','visitor_lastmonth_count','visitor_thismonth_count','visitor_oneyear_count','visitor_total_count'));
		}else{
			return Redirect::to('admin-home');
		}
	}

	public function student_update(Request $request, $student_id){
		$this->AuthLogin();
		$data = $request->validate([
			'student_password'=>'bail|required|min:6|max:32',
		],[
			'student_password.required'=>'Mật khẩu không được để trống',
			'student_password.min'=>'Mật khẩu ít nhất có 6 ký tự',
			'student_password.max'=>'Mật khẩu không quá 32 ký tự',
		]);
		$student = Student::find($student_id);

		$student->student_password = md5($data['student_password']);

		$result = $student->save();
		if($result){
			Session::put('message','<div class="alert alert-success">Cập nhật sinh viên thành công!</div>');
			return Redirect::to('danh-sach-sinh-vien');
		}else{
			Session::put('message','<div class="alert alert-danger">Không thể cập nhật sinh viên!</div>');
			return Redirect::to('cap-nhat-sinh-vien/'.$student_id);
		}
	}

	public function student_delete(Request $request, $student_id){
		$this->AuthLogin();

		$student = Student::find($student_id);

		$like_del = Like::where('student_id',$student_id)->delete();
		$cmt_del = Comment::where('student_id',$student_id)->delete();
		$del_nofi = Nofication::where('student_id',$student_id)->delete();
		$post = Post::where('student_id',$student_id)->get();
		foreach ($post as $key => $value) {
			$like_del = Like::where('post_id',$value->post_id)->delete();
			$cmt_del = Comment::where('post_id',$value->post_id)->delete();
			$del_nofi = Nofication::where('post_id',$value->post_id)->delete();
			$del_reply = Reply::where('post_id',$value->post_id)->delete();
		}
		$post_del = Post::where('student_id',$student_id)->delete();
		$info_del = StudentInfo::where('student_info_id', $student->student_info_id)->delete();
		$student->delete();
		Session::put('message','<div class="alert alert-success">Xóa thành công!</div>');
		return Redirect::to('danh-sach-sinh-vien');
	}

	public function student_import(Request $request){
		$path = $request->file('file')->getRealPath();
		Excel::import(new StudentImport, $path);
		return back();
	}

	public function student_export(Request $request){
		return Excel::download(new StudentExport , 'student_vlu.xlsx');
	}
}
