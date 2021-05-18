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
}
