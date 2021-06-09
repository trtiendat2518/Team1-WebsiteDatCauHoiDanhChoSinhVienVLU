<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use App\Models\Student;
use App\Models\Post;
use App\Models\Category;
use App\Rules\Captcha;
use DB;
use Mail;
use Session;
use Validator;
session_start();

class StudentController extends Controller
{
	public function AuthLogin(){
		$student_id=Session::get('student_id');
		if($student_id){
			return Redirect::to('/');
		}else{
			return Redirect::to('/login')->send();
		}
	}

	public function index_login(){
		$student_id=Session::get('student_id');
		if($student_id){
			return Redirect::to('/');
		}else{
			return view('student.account.login');
		}
	}

	public function index_register(){
		$student_id=Session::get('student_id');
		if($student_id){
			return Redirect::to('/');
		}else{
			return view('student.account.register');
		}
	}

	public function index_forgetpass(){
		return view('student.account.forgetpass');
	}

	public function index_newpass(){
		if(Session::get('token_pass')){
			return view('student.account.newpass');
		}else{
			return view('student.account.forgetpass');
		}	
	}
	
	public function login(Request $request){
		$data = $request->validate([
			'student_email'=>'bail|required|email',
			'student_password'=>'bail|required|min:6|max:32',
			'g-recaptcha-response'=>new Captcha(),
		],[
			'student_email.required'=>'Mail không được để trống',
			'student_email.email'=>'Mail nhập sai định dạng',
			'student_password.required'=>'Mật khẩu không được để trống',
			'student_password.min'=>'Mật khẩu ít nhất có 6 ký tự',
			'student_password.max'=>'Mật khẩu không quá 32 ký tự',
		]);

		$student_email = $data['student_email'];
		$student_password = md5($data['student_password']);
		$student_status = "Verified";

		$check_login_student = Student::where('student_email', $student_email)
		->where('student_password', $student_password)->first();

		if($check_login_student){
			if($check_login_student->student_status != $student_status){
				Session::put('message', '<div class="alert alert-danger">Mail chưa được xác thực! Vui lòng xác thực để tiếp tục đăng nhập</div>');
				return Redirect::to('/login');
			}else{
				$login = Student::where('student_email', $student_email)
				->where('student_password', $student_password)
				->where('student_status', $student_status)
				->first();
				$login_count = $login->count();
				if($login_count){
					Session::put('student_name', $login->student_name);
					Session::put('student_id', $login->student_id);
					Session::put('student_email', $login->student_email);
					return Redirect::to('/');
				}
			}
		}else{
			Session::put('message', '<div class="alert alert-danger">Mail hoặc mật khẩu không đúng!</div>');
			return Redirect::to('login');
		}
	}

	public function register(Request $request){
		$data = $request->validate([
			'student_name'=>'bail|required|alpha_spaces|max:100',
			'student_email'=>'bail|required',
			'student_password'=>'bail|required|min:6|max:32',
			'g-recaptcha-response'=>new Captcha(),
		],[
			'student_name.required'=>'Tên không được để trống',
			'student_name.alpha_spaces'=>'Tên không được chứa ký tự số',
			'student_email.required'=>'Mail không được để trống',
			'student_email.email'=>'Mail nhập sai định dạng',
			'student_password.required'=>'Mật khẩu không được để trống',
			'student_password.min'=>'Mật khẩu ít nhất có 6 ký tự',
			'student_password.max'=>'Mật khẩu không quá 32 ký tự',
		]);

		$student_new = new Student();

		$student_new->student_name = $data['student_name'];
		$student_new->student_email = $data['student_email'];
		$student_new->student_password = $data['student_password'];
		$student_password_confirm = $request->student_password_confirm;

		$check_student_email = Student::where('student_email','=',$data['student_email'])->first();

		if($student_new->student_name=='' || $student_new->student_email=='' || $student_new->student_password=='' || $student_password_confirm==''){
			Session::put('message', '<div class="alert alert-danger">Không được để trống!</div>');
			return Redirect::to('register');
		}else if($check_student_email){
			Session::put('message', '<div class="alert alert-danger">Email đã tồn tại!</div>');
			return Redirect::to('/register');
		} 
		if(preg_match("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@vanlanguni*.vn^",$student_new->student_email)){
			if($student_new->student_password != $student_password_confirm){
				Session::put('message', '<div class="alert alert-danger">Mật khẩu không khớp!</div>');
				return Redirect::to('/register');
			}else{
				$student_new->student_password = md5($student_new->student_password);
				$student_new->student_status = "Not Verify";
				$student_new->save();

				$student_token = md5(rand(1000,9999).time());
				Session::put('token', $student_token);

				$to_name = "BCN Khoa CNTT";
				$to_email = $student_new->student_email;
				$data = array("name"=>"Vui lòng xác thực tài khoản để tiếp tục!", "body"=>"Nhấn xác nhận để tiếp tục");
				Mail::send('mail.send_mail', $data, function($message) use ($to_name, $to_email){
					$message->to($to_email)->subject('Xác thực tài khoản!');
					$message->from($to_email, $to_name);
				});

				Session::put('message', '<div class="alert alert-warning">Đăng ký thành công, vui lòng xác thực mail để tiếp tục đăng nhập!</div>');
				return Redirect::to('/login');
			}
		}else{
			Session::put('message', '<div class="alert alert-danger">Vui lòng nhập Mail Văn Lang!</div>');
			return Redirect::to('/register');
		}
	}

	public function logout(){
		$this->AuthLogin();
		Session::put('student_id', null);
		Session::put('student_name', null);
		Session::put('student_email', null);
		Session::put('student_password', null);     
		return Redirect::to('/');
	}
	
	public function confirm_mail(Request $request){
		$data = $request->all();
		$student_email = $data['student_email'];
		$check_exist = Student::where('student_email', $student_email)->first();
		if(empty($student_email)){
			Session::put('message','<div class="alert alert-danger">Vui lòng nhập mail!</div>');
			return Redirect::to('forgetpass');
		}
		if($check_exist){
			$to_name = "BCN Khoa CNTT";
			$to_email = $check_exist->student_email;
			$data = array("name"=>"Vui lòng xác nhận tài khoản để tiếp tục!", "body"=>"Nhấn xác nhận để tiếp tục");
			Mail::send('mail.send_mail_change_pass', $data, function($message) use ($to_name, $to_email){
				$message->to($to_email)->subject('Quên mật khẩu');
				$message->from($to_email, $to_name);
			});

			Session::put('student_email', $student_email);
			Session::put('message','<div class="alert alert-warning">Xác nhận Mail để tiếp tục đổi mật khẩu mới!</div>');
			return Redirect::to('forgetpass');
		}else{
			Session::put('message','<div class="alert alert-danger">Mail không tồn tại!</div>');
			return Redirect::to('forgetpass');
		}
	}

	public function newpassword(Request $request){
		$data = $request->all();
		$student_email = Session::get('student_email');
		$student_password = $data['student_password'];
		$student_password_confirm = $request->student_password_confirm;

		if(empty($student_password) || empty($student_password_confirm)){
			Session::put('message','<div class="alert alert-danger">Vui lòng điền đầy đủ thông tin!</div>');
			return Redirect::to('newpass');
		}else if($student_password != $student_password_confirm){
			Session::put('message','<div class="alert alert-danger">Mật khẩu không khớp với nhau!</div>');
			return Redirect::to('newpass');
		}else{
			$student = Student::where('student_email', $student_email)->first();
			$student->student_password = md5($student_password);
			$student->save();

			Session::put('token_pass', null);
			Session::put('student_email', null);
			Session::put('message','<div class="alert alert-success">Đổi mật khẩu thành công! Mời bạn đăng nhập.</div>');
			return Redirect::to('login');
		}
	}

	public function show_student_post(Request $request, $student_id){
		$category_post = Category::orderBy('category_id', 'DESC')->get();
		$student_other_id = Post::with('category','student','likes','comments')
		->where('tbl_post.student_id', $student_id)
		->orderBy('tbl_post.created_at','DESC')->paginate(5);
		$student2 = Student::with('info','posted')->where('student_id',$student_id)
		->limit(1)->get();
		$studentSS = Student::with('info')->where('student_id',Session::get('student_id'))
		->limit(1)->get();

		//SEO
		foreach($student2 as $key => $seo){
			$meta_desc = "Trang sinh viên";
			$meta_title = $seo->student_name;
			$url_canonical =$request->url();
		}
		//-----------------------
		
		return view('student.page.student.timeline')->with(compact('meta_desc','meta_title','url_canonical','category_post', 'student_other_id','student2','studentSS'));
	}

	public function changepass(Request $request,$student_id){
		//SEO
		$meta_desc = "Thay đổi mật khẩu";
		$meta_title = "Thay đổi mật khẩu";
		$url_canonical =$request->url();
		//-----------------------
		$student_id = Session::get('student_id');
		$student2 = Student::find($student_id)
		->limit(1)->get();
		return view('student.page.student.changepass')->with(compact('meta_desc','meta_title','url_canonical','student2'));
	}

	public function changenewpass(Request $request,$student_id){
		$data = $request->all();
		$student = Student::find($student_id);
		$student_password = $data['student_password'];
		$student_newpassword = $data['student_newpassword'];
		$student_newpassword_confirm = $request->student_newpassword_confirm;
		if($student_password=='' || $student_newpassword=='' || $student_newpassword_confirm==''){
			Session::put('message','<div class="alert alert-danger">Vui lòng không để trống!</div>');
			return Redirect::to('thay-doi-mat-khau/'.Session::get('student_id'));
		}

		if(md5($student_password)==$student->student_password){
			if($student_newpassword==$student_newpassword_confirm){
				$student->student_password = md5($student_newpassword);
				$student->save();
				Session::put('message','<div class="alert alert-success">Thay đổi mật khẩu thành công!</div>');
				return Redirect::to('thay-doi-mat-khau/'.Session::get('student_id'));
			}else{
				Session::put('message','<div class="alert alert-danger">Xác nhận mật khẩu mới không khớp!</div>');
				return Redirect::to('thay-doi-mat-khau/'.Session::get('student_id'));
			}
		}else{
			Session::put('message','<div class="alert alert-danger">Mật khẩu hiện tại không đúng!</div>');
			return Redirect::to('thay-doi-mat-khau/'.Session::get('student_id'));
		}
	}
}
