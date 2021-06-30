<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use App\Models\Specialized;
use App\Models\Faculty;
use App\Models\StudentInfo;
use App\Models\Admin;
use Validator;
use Session;
session_start();

class SpecializedController extends Controller
{
    public function AuthLogin(){
        $admin_id=Session::get('admin_id');
        if($admin_id){
            return Redirect::to('admin-home');
        }else{
            return Redirect::to('admin-login')->send();
        }
    }

    public function specialized_open(Request $request){
        $this->AuthLogin();
        //SEO
        $meta_desc = "Thêm mới chuyên ngành";
        $meta_title = "Thêm mới chuyên ngành";
        $url_canonical = $request->url();
        //---------------
        
        $info = Admin::where('admin_id',Session::get('admin_id'))->limit(1)->get();
        $faculty = Faculty::orderBy('faculty_code','ASC')->get();
        return view('admin.pages.specialized.add')->with(compact('faculty','meta_desc','meta_title','url_canonical','info'));
    }

    public function specialized_add(Request $request){
        $data = $request->validate([
           'specialized_name'=>'bail|required|max:50|min:5',
           'faculty_id'=>'bail|required',
           'specialized_status'=>'bail|required',
        ],[
           'specialized_name.required'=>'Tên chuyên ngành không được để trống',
           'specialized_name.min'=>'Tên chuyên ngành ít nhất có 5 ký tự',
           'specialized_name.max'=>'Tên chuyên ngành không quá 50 ký tự',
           'faculty_id.required'=>'Mã chuyên ngành không được để trống',
        ]);
        $specialized = new Specialized();

        $specialized->specialized_name = $data['specialized_name'];
        $specialized->faculty_id = $data['faculty_id'];
        $specialized->specialized_status = $data['specialized_status'];

        $check_name = Specialized::where('specialized_name','=',$specialized->specialized_name)->first();

        if ($data['specialized_name']=='' || $data['faculty_id']==0) {
            Session::put('message','<div class="alert alert-danger">Không được để trống!</div>');
            return Redirect::to('them-moi-chuyen-nganh');
        }else if($check_name){
            Session::put('message','<div class="alert alert-danger">Tên chuyên ngành đã tồn tại!</div>');
            return Redirect::to('them-moi-chuyen-nganh');
        }else{
            $result = $specialized->save(); 
            if($result){
                Session::put('message','<div class="alert alert-success">Thêm mới chuyên ngành thành công!</div>');
                return Redirect::to('danh-sach-chuyen-nganh');
            }else{
                Session::put('message','<div class="alert alert-danger">Không thể thêm mới chuyên ngành!</div>');
                return Redirect::to('them-moi-chuyen-nganh');
            }
        }
    }

    public function specialized_openupdate(Request $request, $specialized_id){
        $this->AuthLogin();
        $info = Admin::where('admin_id',Session::get('admin_id'))->limit(1)->get();
        $specializedId = Specialized::where('specialized_id',$specialized_id)->get();
        foreach ($specializedId as $key => $value){
            //SEO
            $meta_desc = "Cập nhật chuyên ngành ".$value->specialized_name;
            $meta_title = "Cập nhật chuyên ngành ".$value->specialized_name;
            $url_canonical = $request->url();
            //---------------
        }
        $specialized_update = Specialized::find($specialized_id);
        $faculty = Faculty::whereNotIn('faculty_id', [$specialized_update->faculty_id])
        ->orderBy('faculty_code','ASC')->get();
        return view('admin.pages.specialized.update')->with(compact('specialized_update', 'faculty', 'meta_desc','meta_title','url_canonical','info'));
    }

    public function specialized_update(Request $request, $specialized_id)
    {
        $this->AuthLogin();
        $data = $request->validate([
           'specialized_name'=>'bail|required|max:50|min:5',
           'faculty_id'=>'bail|required',
        ],[
           'specialized_name.required'=>'Tên chuyên ngành không được để trống',
           'specialized_name.min'=>'Tên chuyên ngành ít nhất có 5 ký tự',
           'specialized_name.max'=>'Tên chuyên ngành không quá 50 ký tự',
           'faculty_id.required'=>'Mã chuyên ngành không được để trống',
        ]);
        $specialized = Specialized::find($specialized_id);

        $specialized->specialized_name = $data['specialized_name'];
        $specialized->faculty_id = $data['faculty_id'];
        $check_name = Specialized::where('specialized_name','=',$specialized->specialized_name)->first();

        if ($data['specialized_name']=='' || $data['faculty_id']==0) {
            Session::put('message','<div class="alert alert-danger">Không được để trống!</div>');
            return Redirect::to('cap-nhat-chuyen-nganh/'.$specialized_id);
        }else if($check_name){
            Session::put('message','<div class="alert alert-danger">Tên chuyên ngành đã tồn tại!</div>');
            return Redirect::to('cap-nhat-chuyen-nganh/'.$specialized_id);
        }else{
            $result = $specialized->save();
            if($result){
                Session::put('message','<div class="alert alert-success">Cập nhật chuyên ngành thành công!</div>');
                return Redirect::to('danh-sach-chuyen-nganh');
            }else{
                Session::put('message','<div class="alert alert-danger">Không thể cập nhật chuyên ngành!</div>');
                return Redirect::to('cap-nhat-chuyen-nganh/'.$specialized_id);
            } 
        }
    }

    public function specialized_delete($specialized_id){
        $this->AuthLogin(); 
        $del = Specialized::find($specialized_id);
        $info = StudentInfo::where('specialized_id', $specialized_id)->get();
        foreach ($info as $key => $value) {
            $value->specialized_id=0;
            $value->save();
        }
        $del->delete();
        Session::put('message','<div class="alert alert-success">Xóa thành công!</div>');
        return Redirect::to('danh-sach-chuyen-nganh');
    }

    public function specialized_list(Request $request){
        $this->AuthLogin();
        //SEO
        $meta_desc = "Danh sách chuyên ngành";
        $meta_title = "Danh sách chuyên ngành";
        $url_canonical = $request->url();
        //---------------
        $info = Admin::where('admin_id',Session::get('admin_id'))->limit(1)->get();
        $list = Specialized::orderBy('specialized_id', 'DESC')->paginate(5);
        return view('admin.pages.specialized.list')->with(compact('list','meta_desc','meta_title','url_canonical','info'));
    }

    public function specialized_active($specialized_id){
        $this->AuthLogin();
        $specialized = Specialized::find($specialized_id);
        $specialized->specialized_status=1;
        $specialized->save();

        Session::put('message','<div class="alert alert-warning">Đã ẩn trạng thái!</div>');
        return Redirect::to('danh-sach-chuyen-nganh');
    }

    public function specialized_unactive($specialized_id){
        $this->AuthLogin();
        $specialized = Specialized::find($specialized_id);
        $specialized->specialized_status=0;
        $specialized->save();

        Session::put('message','<div class="alert alert-warning">Đã hiển thị trạng thái!</div>');
        return Redirect::to('danh-sach-chuyen-nganh'); 
    }

    public function specialized_search(Request $request){
        $this->AuthLogin();
        //SEO
        $meta_desc = "Tìm kiếm";
        $meta_title = "Tìm kiếm";
        $url_canonical = $request->url();
        //---------------
        $info = Admin::where('admin_id',Session::get('admin_id'))->limit(1)->get();
        $keywords = $request->keywords_submit;
        $search = Specialized::where('specialized_name','like','%'.$keywords.'%')
        ->orderBy('specialized_id','DESC')->get();
        return view('admin.pages.specialized.search')->with(compact('meta_desc','meta_title','url_canonical','search','info'));
    }
}
