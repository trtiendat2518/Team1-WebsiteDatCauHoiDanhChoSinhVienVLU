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
}
