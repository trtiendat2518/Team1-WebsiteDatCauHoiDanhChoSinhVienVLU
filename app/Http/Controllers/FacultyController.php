<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use App\Models\Faculty;
use App\Models\Specialized;
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

    public function faculty_open(){
        $this->AuthLogin();
        return view('admin.pages.faculty.add');
    }

    public function faculty_add(Request $request){
        $data = $request->all();
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

    public function faculty_openupdate($faculty_id){
        $this->AuthLogin();
        $faculty_update = Faculty::find($faculty_id);
        $manage = view('admin.pages.faculty.update')->with('faculty_update', $faculty_update);
        return view('admin.admin_layout')->with('admin.pages.faculty.update', $manage);
    }

    public function faculty_update(Request $request, $faculty_id)
    {
        $this->AuthLogin();
        $data = $request->all();
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
            Specialized::where('faculty_id', $faculty_id)->delete();
        }
        $del->delete();
        Session::put('message','<div class="alert alert-success">Xóa thành công!</div>');
        return Redirect::to('danh-sach-khoa');
    }

    public function faculty_list(){
        $this->AuthLogin();
        $list = Faculty::orderBy('faculty_id', 'DESC')->paginate(5);
        $manage = view('admin.pages.faculty.list')->with('list', $list);
        return view('admin.admin_layout')->with('admin.pages.faculty.list', $manage);
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
}
