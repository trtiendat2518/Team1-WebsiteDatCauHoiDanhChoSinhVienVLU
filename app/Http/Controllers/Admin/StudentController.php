<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use App\Models\Student;
use Session;
session_start();

class StudentController extends Controller
{
	public function AuthLogin_admin(){
		$admin_id=Session::get('admin_id');
		if($admin_id){
			return Redirect::to('admin-home');
		}else{
			return Redirect::to('admin-login')->send();
		}
	}

	public function student_list(Request $request){
		$this->AuthLogin_admin();
      	//SEO
		$meta_desc = "Danh sách sinh viên";
		$meta_title = "Danh sách sinh viên";
		$url_canonical = $request->url();
     	//---------------
		$list = Student::orderBy('student_id', 'DESC')->paginate(5);
		return view('admin.pages.alumnus.list')->with(compact('meta_desc','meta_title','url_canonical','list'));
	}
}
