<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Admin;
use App\Http\Requests;
use App\Rules\Captcha;
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

    public function index(){
        $this->AuthLogin();
        return view('admin.pages.admin_home');
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
            'admin_email.required'=>'Mail không được để trống',
            'admin_email.email'=>'Mail nhập sai định dạng',
            'admin_password.required'=>'Mật khẩu không được để trống',
            'admin_password.min'=>'Mật khẩu ít nhất có 6 ký tự',
            'admin_password.max'=>'Mật khẩu không quá 32 ký tự',
        ]);

        $admin_email = $data['admin_email'];
        $admin_password = md5($data['admin_password']);
        $check_login_admin = Admin::where('admin_email', $admin_email)
        ->where('admin_password', $admin_password)->first();
        if($check_login_admin){
            Session::put('admin_name', $check_login_admin->admin_name);
            Session::put('admin_id', $check_login_admin->admin_id);
            return Redirect::to('/admin-home');
        }else{
            Session::put('message', '<div class="alert alert-danger">Email hoặc mật khẩu không đúng!</div>');
            return Redirect::to('/admin-login');
        }
    }

    public function logout(){
        Session::put('admin_id', null);
        Session::put('admin_name', null);
        Session::put('admin_email', null);
        Session::put('admin_password', null);     
        return Redirect::to('/admin-login');
    }
}
