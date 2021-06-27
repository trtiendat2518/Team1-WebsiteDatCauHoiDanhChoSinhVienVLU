<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use App\Models\Admin;
use Validator;
use Session;
session_start();

class UserController extends Controller
{
    public function AuthLogin(){
        $admin_id=Session::get('admin_id');
        if($admin_id){
            return Redirect::to('admin-home');
        }else{
            return Redirect::to('admin-login')->send();
        }
    }

    public function user_open(Request $request){
        $this->AuthLogin();
      //SEO
        $meta_desc = "Thêm mới User";
        $meta_title = "Thêm mới User";
        $url_canonical = $request->url();
      //---------------
        return view('admin.pages.user.add')->with(compact('meta_desc','meta_title','url_canonical'));
    }

    public function user_add(Request $request){
        $data = $request->validate([
            'admin_name'=>'bail|required|alpha_spaces|max:100',
            'admin_email'=>'bail|required',
            'admin_password'=>'bail|required|min:6|max:32',
            'admin_role'=>'required',
        ],[
            'admin_name.required'=>'Tên không được để trống',
            'admin_name.alpha_spaces'=>'Tên không được chứa ký tự số',
            'admin_email.required'=>'Mail không được để trống',
            'admin_email.email'=>'Mail nhập sai định dạng',
            'admin_password.required'=>'Mật khẩu không được để trống',
            'admin_password.min'=>'Mật khẩu ít nhất có 6 ký tự',
            'admin_password.max'=>'Mật khẩu không quá 32 ký tự',
        ]);
        
        $admin = new Admin();

        $admin->admin_name = $data['admin_name'];
        $admin->admin_email = $data['admin_email'];
        $admin->admin_password = md5($data['admin_password']);
        $admin->admin_role = $data['admin_role'];

        if ($data['admin_name']=='' || $data['admin_email']=='' || $data['admin_password']=='') {
            Session::put('message','<div class="alert alert-danger">Không được để trống!</div>');
            return Redirect::to('them-moi-user');
        }else{
            $result = $admin->save(); 
            if($result){
                Session::put('message','<div class="alert alert-success">Thêm mới sinh viên thành công!</div>');
                return Redirect::to('danh-sach-user');
            }else{
                Session::put('message','<div class="alert alert-danger">Không thể thêm mới sinh viên!</div>');
                return Redirect::to('them-moi-user');
            }
        }
    }

    public function user_list(Request $request){
        $this->AuthLogin();
        //SEO
        $meta_desc = "Danh sách User";
        $meta_title = "Danh sách User";
        $url_canonical = $request->url();
        //---------------
        $list = Admin::orderBy('admin_id', 'DESC')->paginate(5);
        return view('admin.pages.user.list')->with(compact('meta_desc','meta_title','url_canonical','list'));
    }

    public function user_openupdate(Request $request,$admin_id){
        $this->AuthLogin();
        $admin_update = Admin::find($admin_id);
        $adminId = Admin::where('admin_id',$admin_id)->get();
        foreach ($adminId as $key => $value){
         //SEO
            $meta_desc = "Cập nhật User ".$value->admin_name;
            $meta_title = "Cập nhật User ".$value->admin_name;
            $url_canonical = $request->url();
         //---------------
        }
        return view('admin.pages.user.update')->with(compact('admin_update','meta_desc','meta_title','url_canonical'));
    }

    public function user_update(Request $request, $admin_id){
        $this->AuthLogin();
        $data = $request->validate([
            'admin_name'=>'bail|required|alpha_spaces|max:100',
            'admin_email'=>'bail|required',
            'admin_password'=>'bail|required|min:6|max:32',
            'admin_role'=>'required',
        ],[
            'admin_name.required'=>'Tên không được để trống',
            'admin_name.alpha_spaces'=>'Tên không được chứa ký tự số',
            'admin_email.required'=>'Mail không được để trống',
            'admin_email.email'=>'Mail nhập sai định dạng',
            'admin_password.min'=>'Mật khẩu ít nhất có 6 ký tự',
            'admin_password.max'=>'Mật khẩu không quá 32 ký tự',
        ]);
        $admin = Admin::find($admin_id);

        $admin->admin_name = $data['admin_name'];
        $admin->admin_email = $data['admin_email'];
        $admin->admin_password = md5($data['admin_password']);
        $admin->admin_role = $data['admin_role'];

        if ($data['admin_name']=='' || $data['admin_email']=='' || $data['admin_password']=='') {
            Session::put('message','<div class="alert alert-danger">Không được để trống!</div>');
            return Redirect::to('cap-nhat-user/'.$admin_id);
        }else{
            $result = $admin->save();
            if($result){
                Session::put('message','<div class="alert alert-success">Cập nhật sinh viên thành công!</div>');
                return Redirect::to('danh-sach-user');
            }else{
                Session::put('message','<div class="alert alert-danger">Không thể cập nhật sinh viên!</div>');
                return Redirect::to('cap-nhat-user/'.$admin_id);
            } 
        }
    }
}
