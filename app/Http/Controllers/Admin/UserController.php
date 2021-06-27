<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use App\Models\Admin;
use App\Models\Reply;
use App\Models\Post;
use App\Imports\UserImport;
use App\Exports\UserExport;
use Excel;
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
            'admin_name'=>'bail|required|alpha_spaces|max:50|min:2',
            'admin_email'=>'bail|required|max:255',
            'admin_password'=>'bail|required|min:6|max:32',
            'admin_role'=>'required',
        ],[
            'admin_name.required'=>'Tên không được để trống',
            'admin_name.alpha_spaces'=>'Tên không được chứa ký tự số',
            'admin_name.max'=>'Tên ít nhất có 2 ký tự',
            'admin_name.min'=>'Tên không quá 50 ký tự',
            'admin_email.required'=>'Mail không được để trống',
            'admin_email.email'=>'Mail nhập sai định dạng',
            'admin_email.max'=>'Email không quá 255 ký tự',
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
            'admin_name'=>'bail|required|alpha_spaces|max:50|min:2',
            'admin_email'=>'bail|required|max:255',
            'admin_password'=>'bail|required|min:6|max:32',
            'admin_role'=>'required',
        ],[
            'admin_name.required'=>'Tên không được để trống',
            'admin_name.alpha_spaces'=>'Tên không được chứa ký tự số',
            'admin_name.max'=>'Tên ít nhất có 2 ký tự',
            'admin_name.min'=>'Tên không quá 50 ký tự',
            'admin_email.required'=>'Mail không được để trống',
            'admin_email.email'=>'Mail nhập sai định dạng',
            'admin_email.max'=>'Email không quá 255 ký tự',
            'admin_password.required'=>'Mật khẩu không được để trống',
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

    public function user_active($admin_id){
        $this->AuthLogin();
        $admin = Admin::find($admin_id);
        $admin->admin_status=1;
        $admin->save();

        Session::put('message','<div class="alert alert-warning">Đã vô hiệu hóa tài khoản!</div>');
        return Redirect::to('danh-sach-user');
    }

    public function user_unactive($admin_id){
        $this->AuthLogin();
        $admin = Admin::find($admin_id);
        $admin->admin_status=0;
        $admin->save();

        Session::put('message','<div class="alert alert-warning">Đã kích hoạt tài khoản!</div>');
        return Redirect::to('danh-sach-user'); 
    } 

    public function user_search(Request $request){
        $this->AuthLogin();
        //SEO
        $meta_desc = "Tìm kiếm";
        $meta_title = "Tìm kiếm";
        $url_canonical = $request->url();
        //---------------

        $keywords = $request->keywords_submit;
        $search = Admin::where('admin_name','like','%'.$keywords.'%')
        ->orWhere('admin_email','like','%'.$keywords.'%')
        ->orderBy('admin_id','DESC')->get();
        return view('admin.pages.user.search')->with(compact('meta_desc','meta_title','url_canonical','search'));
    }

    public function user_import(Request $request){
        $path = $request->file('file')->getRealPath();
        Excel::import(new UserImport, $path);
        return back();
    }

    public function user_export(Request $request){
        return Excel::download(new UserExport , 'user_vlu.xlsx');
    }

    public function user_delete(Request $request, $admin_id){
        $this->AuthLogin();

        $admin = Admin::find($admin_id);
        $reply_del = Reply::where('admin_id',$admin_id)->delete();
        $admin->delete();
        Session::put('message','<div class="alert alert-success">Xóa thành công!</div>');
        return Redirect::to('danh-sach-user');
    }
}
