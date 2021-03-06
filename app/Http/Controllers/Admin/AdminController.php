<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Student;
use App\Models\Post;
use App\Models\Course;
use App\Models\Faculty;
use App\Models\Specialized;
use App\Models\Visitor;
use App\Http\Requests;
use App\Rules\Captcha;
use Carbon\Carbon;
use Session;
use Validator;
use Illuminate\Support\Facades\Redirect;
session_start();

class AdminController extends Controller
{
    public function AuthLogin(){
        $admin_id=Session::get('admin_id');
        if($admin_id){
            return Redirect::to('admin-home');
        }else{
            return Redirect::to('admin-login')->send();
        }
    }

    public function index(Request $request){
        $this->AuthLogin();
        //SEO
        $meta_desc = "Admin VLU";
        $meta_title = "Dashboard";
        $url_canonical = $request->url();
        //-------------
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
        $student = Student::orderBy('student_id')->limit(1)->get();
        $post = Post::orderBy('post_id')->limit(1)->get();
        $faculty = Faculty::orderBy('faculty_id')->limit(1)->get();
        $specialized = Specialized::orderby('specialized_id')->limit(1)->get();
        $course = Course::orderBy('course_id')->limit(1)->get();
        return view('admin.pages.admin_home')->with(compact('meta_desc','meta_title','url_canonical','info','student','post','faculty','specialized','course','visitor_count','visitor_lastmonth_count','visitor_thismonth_count','visitor_oneyear_count','visitor_total_count'));
    }

    public function index_login(){
        $admin_id=Session::get('admin_id');
        if($admin_id){
            return Redirect::to('admin-home');
        }else{
            return view('admin.account.login');
        }
    }

    public function login(Request $request){
        $data = $request->validate([
            'admin_email'=>'required|email',
            'admin_password' =>'required|min:6|max:32',
            'g-recaptcha-response'=>new Captcha(),
        ],[
            'admin_email.required'=>'Mail kh??ng ???????c ????? tr???ng',
            'admin_email.email'=>'Mail nh???p sai ?????nh d???ng',
            'admin_password.required'=>'M???t kh???u kh??ng ???????c ????? tr???ng',
            'admin_password.min'=>'M???t kh???u ??t nh???t c?? 6 k?? t???',
            'admin_password.max'=>'M???t kh???u kh??ng qu?? 32 k?? t???',
        ]);

        $admin_email = $data['admin_email'];
        $admin_password = md5($data['admin_password']);
        $check_login_admin = Admin::where('admin_email', $admin_email)
        ->where('admin_password', $admin_password)->first();

        if($check_login_admin){
            $check_status = Admin::where('admin_email', $admin_email)->where('admin_status',0)->first();
            if($check_status){
                Session::put('admin_email',$check_login_admin->admin_email);
                Session::put('admin_name', $check_login_admin->admin_name);
                Session::put('admin_id', $check_login_admin->admin_id);
                Session::put('admin_role', $check_login_admin->admin_role);
                return Redirect::to('/admin-home');
            }else{
                Session::put('message', '<div class="alert alert-danger">T??i kho???n ???? b??? v?? hi???u h??a!</div>');
                return Redirect::to('/admin-login');
            }
        }else{
            Session::put('message', '<div class="alert alert-danger">Email ho???c m???t kh???u kh??ng ????ng!</div>');
            return Redirect::to('/admin-login');
        }
    }

    public function logout(){
        Session::put('admin_id', null);
        Session::put('admin_name', null);
        Session::put('admin_email', null);
        Session::put('admin_password', null);
        Session::put('admin_role', null);
        Session::put('admin_info', null);     
        return Redirect::to('/admin-login');
    }

    public function admin_openchangepass(Request $request){
        //SEO
        $meta_desc = "Thay ?????i m???t kh???u";
        $meta_title = "Thay ?????i m???t kh???u";
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
        return view('admin.pages.profile.changepass')->with(compact('meta_desc','meta_title','url_canonical','info','visitor_count','visitor_lastmonth_count','visitor_thismonth_count','visitor_oneyear_count','visitor_total_count'));;
    }

    public function admin_changepass(Request $request, $admin_id){
        $data = $request->validate([
            'admin_password'=>'required|min:6|max:32',
            'admin_newpassword' =>'required|min:6|max:32',
        ],[
            'admin_password.required'=>'M???t kh???u kh??ng ???????c ????? tr???ng',
            'admin_password.min'=>'M???t kh???u ??t nh???t c?? 6 k?? t???',
            'admin_password.max'=>'M???t kh???u kh??ng qu?? 32 k?? t???',
            'admin_newpassword.required'=>'M???t kh???u m???i kh??ng ???????c ????? tr???ng',
            'admin_newpassword.min'=>'M???t kh???u m???i ??t nh???t c?? 6 k?? t???',
            'admin_newpassword.max'=>'M???t kh???u m???i kh??ng qu?? 32 k?? t???',
        ]);

        $admin_password = $data['admin_password'];
        $admin_newpassword = $data['admin_newpassword'];
        $admin_newpassword_confirm = $request->admin_newpassword_confirm;

        $check = Admin::find($admin_id);
        if(md5($admin_password)!=$check->admin_password){
            Session::put('message', '<div class="alert alert-danger">M???t kh???u hi???n t???i kh??ng ????ng!</div>');
            return Redirect::to('/doi-mat-khau-moi');
        }else{
            if($admin_newpassword!=$admin_newpassword_confirm){
                Session::put('message', '<div class="alert alert-danger">X??c nh???n m???t kh???u m???i kh??ng kh???p!</div>');
                return Redirect::to('/doi-mat-khau-moi');
            }else{
                $check->admin_password = md5($admin_newpassword);
                $check->save();

                Session::put('message', '<div class="alert alert-success">Thay ?????i m???t kh???u th??nh c??ng!</div>');
                return Redirect::to('/doi-mat-khau-moi');
            }
        }
    }
}
