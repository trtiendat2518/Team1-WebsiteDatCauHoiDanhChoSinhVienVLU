<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use App\Models\Student;
use Session;
use Mail;
session_start();

class MailController extends Controller
{
    public function verifymail()
    {
        $student_token = Session::get('token');
        $check_student = Student::orderby('student_id','DESC')->first();
        if($student_token){
            $check_student->student_status="Verified";
            $check_student->save();
            Session::put('token', null);
            Session::put('message','<div class="alert alert-success">Xác nhận Email thành công!</div>');
            return Redirect::to('/login');
        }
        else{
            Session::put('message','<div class="alert alert-danger">Lỗi!</div>');
            return Redirect::to('login');
        }
    }

    public function verifychangepassword(Request $request){
        $student_email = Session::get('student_email');
        $check_student = Student::where('student_email', $student_email)->first();
        if($check_student){
            $student_token_password = md5(time().rand(1000,9999));
            Session::put('token_pass', $student_token_password);
            Session::put('message','<div class="alert alert-success">Xác nhận Mail thành công! Mời bạn nhập mật khẩu mới.</div>');
            return Redirect::to('/newpass');
        }
        else{
            Session::put('message','<div class="alert alert-danger">Lỗi!</div>');
            return Redirect::to('/forgetpass');
        }
    }
}
