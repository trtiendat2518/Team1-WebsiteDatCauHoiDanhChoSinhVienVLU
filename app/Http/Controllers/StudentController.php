<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use App\Models\Student;
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

	public function logout(){
		$this->AuthLogin();
		Session::put('student_id', null);
		Session::put('student_name', null);
		Session::put('student_email', null);
		Session::put('student_password', null);     
		return Redirect::to('/');
	}

	public function login(Request $request){
		$data = $request->validate([
			'student_email'=>'required|email',
			'student_password'=>'required|min:6|max:32',
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
			'student_name'=>'required',
			'student_email'=>'required',
			'student_password'=>'required|min:6|max:32',
			'g-recaptcha-response'=>new Captcha(),
		],[
			'student_name.required'=>'Tên không được để trống',
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
}
