<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use App\Models\Faculty;
use App\Models\Specialized;
use App\Models\StudentInfo;
use App\Models\Admin;
use Validator;
use Session;
session_start();

class FacultyController extends Controller
{
    public function AuthLogin(){
        $admin_id=Session::get('admin_id');
        if($admin_id){
            return Redirect::to('admin-home');
        }else{
            return Redirect::to('admin-login')->send();
        }
    }

    public function faculty_open(Request $request){
        $this->AuthLogin();
        //SEO
        $meta_desc = "Thêm mới khoa";
        $meta_title = "Thêm mới khoa";
        $url_canonical = $request->url();
        //---------------
        $info = Admin::where('admin_id',Session::get('admin_id'))->limit(1)->get();
        return view('admin.pages.faculty.add')->with(compact('meta_desc','meta_title','url_canonical','info'));
    }

    public function faculty_add(Request $request){
        $data = $request->validate([
           'faculty_name'=>'bail|required|max:50|min:5',
           'faculty_code'=>'bail|required|max:10|min:2',
           'faculty_status'=>'bail|required',
        ],[
           'faculty_name.required'=>'Tên khoa không được để trống',
           'faculty_name.min'=>'Tên khoa ít nhất có 5 ký tự',
           'faculty_name.max'=>'Tên khoa không quá 50 ký tự',
           'faculty_code.required'=>'Mã khoa không được để trống',
           'faculty_code.min'=>'Mã khoa ít nhất có 5 ký tự',
           'faculty_code.max'=>'Mã khoa không quá 50 ký tự',
        ]);
        $faculty = new Faculty();

        $faculty->faculty_name = $data['faculty_name'];
        $faculty->faculty_code = $data['faculty_code'];
        $faculty->faculty_status = $data['faculty_status'];

        if ($data['faculty_name']=='' || $data['faculty_code']=='') {
            Session::put('message','<div class="alert alert-danger">Không được để trống!</div>');
            return Redirect::to('them-moi-khoa');
        }else{
            $result = $faculty->save(); 
            if($result){
                Session::put('message','<div class="alert alert-success">Thêm mới khoa thành công!</div>');
                return Redirect::to('danh-sach-khoa');
            }else{
                Session::put('message','<div class="alert alert-danger">Không thể thêm mới khoa!</div>');
                return Redirect::to('them-moi-khoa');
            }
        }
    }

    public function faculty_openupdate(Request $request, $faculty_id){
        $this->AuthLogin();
        $info = Admin::where('admin_id',Session::get('admin_id'))->limit(1)->get();
        $faculty_update = Faculty::find($faculty_id);
        $facultyId = Faculty::where('faculty_id',$faculty_id)->get();
        foreach ($facultyId as $key => $value){
            //SEO
            $meta_desc = "Cập nhật khoa ".$value->faculty_name;
            $meta_title = "Cập nhật khoa ".$value->faculty_name;
            $url_canonical = $request->url();
            //---------------
        }
        return view('admin.pages.faculty.update')->with(compact('faculty_update','meta_desc','meta_title','url_canonical','info'));
    }

    public function faculty_update(Request $request, $faculty_id)
    {
        $this->AuthLogin();
        $data = $request->validate([
           'faculty_name'=>'bail|required|max:50|min:5',
           'faculty_code'=>'bail|required|max:10|min:2',
        ],[
           'faculty_name.required'=>'Tên khoa không được để trống',
           'faculty_name.min'=>'Tên khoa ít nhất có 5 ký tự',
           'faculty_name.max'=>'Tên khoa không quá 50 ký tự',
           'faculty_code.required'=>'Mã khoa không được để trống',
           'faculty_code.min'=>'Mã khoa ít nhất có 5 ký tự',
           'faculty_code.max'=>'Mã khoa không quá 50 ký tự',
        ]);
        $faculty = Faculty::find($faculty_id);

        $faculty->faculty_name = $data['faculty_name'];
        $faculty->faculty_code = $data['faculty_code'];

        if ($data['faculty_name']=='' || $data['faculty_code']=='') {
            Session::put('message','<div class="alert alert-danger">Không được để trống!</div>');
            return Redirect::to('cap-nhat-khoa/'.$faculty_id);
        }else{
            $result = $faculty->save();
            if($result){
                Session::put('message','<div class="alert alert-success">Cập nhật khoa thành công!</div>');
                return Redirect::to('danh-sach-khoa');
            }else{
                Session::put('message','<div class="alert alert-danger">Không thể cập nhật khoa!</div>');
                return Redirect::to('cap-nhat-khoa/'.$faculty_id);
            } 
        }
    }

    public function faculty_delete($faculty_id){
        $this->AuthLogin(); 
        $del = Faculty::find($faculty_id);
        if($del){
            $info = StudentInfo::where('faculty_id', $faculty_id)->get();
            foreach ($info as $key => $value) {
                $value->faculty_id=0;
                $value->specialized_id=0;
                $value->save();
            }
            Specialized::where('faculty_id', $faculty_id)->delete();
        }
        $del->delete();
        Session::put('message','<div class="alert alert-success">Xóa thành công!</div>');
        return Redirect::to('danh-sach-khoa');
    }

    public function faculty_list(Request $request){
        $this->AuthLogin();
        //SEO
        $meta_desc = "Danh sách khoa";
        $meta_title = "Danh sách khoa";
        $url_canonical = $request->url();
        //---------------
        $info = Admin::where('admin_id',Session::get('admin_id'))->limit(1)->get();
        $list = Faculty::orderBy('faculty_id', 'DESC')->paginate(5);
        return view('admin.pages.faculty.list')->with(compact('list','meta_desc','meta_title','url_canonical','info'));
    }

    public function faculty_active($faculty_id){
        $this->AuthLogin();
        $faculty = Faculty::find($faculty_id);
        $specialized = Specialized::where('faculty_id',$faculty_id)->where('specialized_status',0)->get();
        if($specialized){
            foreach($specialized as $key => $acvtive){
                $acvtive->specialized_status=1;
                $acvtive->save();
            }
        }
        $faculty->faculty_status=1;
        $faculty->save();

        Session::put('message','<div class="alert alert-warning">Đã ẩn trạng thái!</div>');
        return Redirect::to('danh-sach-khoa');
    }

    public function faculty_unactive($faculty_id){
        $this->AuthLogin();
        $faculty = Faculty::find($faculty_id);
        $specialized = Specialized::where('faculty_id',$faculty_id)->where('specialized_status',1)->get();
        if($specialized){
            foreach($specialized as $key => $acvtive){
                $acvtive->specialized_status=0;
                $acvtive->save();
            }
        }
        $faculty->faculty_status=0;
        $faculty->save();

        Session::put('message','<div class="alert alert-warning">Đã hiển thị trạng thái!</div>');
        return Redirect::to('danh-sach-khoa'); 
    }

    public function faculty_search(Request $request){
        $this->AuthLogin();
        //SEO
        $meta_desc = "Tìm kiếm";
        $meta_title = "Tìm kiếm";
        $url_canonical = $request->url();
        //---------------
        
        $info = Admin::where('admin_id',Session::get('admin_id'))->limit(1)->get();
        $keywords = $request->keywords_submit;
        $search = Faculty::where('faculty_name','like','%'.$keywords.'%')
        ->orderBy('faculty_id','DESC')->get();
        return view('admin.pages.faculty.search')->with(compact('meta_desc','meta_title','url_canonical','search','info'));
    }
}
