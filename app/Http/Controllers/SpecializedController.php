<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use App\Models\Specialized;
use App\Models\Faculty;
use App\Models\StudentInfo;
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

    public function specialized_open(){
        $this->AuthLogin();
        $faculty = Faculty::orderBy('faculty_code','ASC')->get();
        return view('admin.pages.specialized.add')->with(compact('faculty'));
    }

    public function specialized_add(Request $request){
        $data = $request->all();
        $specialized = new Specialized();

        $specialized->specialized_name = $data['specialized_name'];
        $specialized->faculty_id = $data['faculty_id'];
        $specialized->specialized_status = $data['specialized_status'];

        if ($data['specialized_name']=='' || $data['faculty_id']==0) {
            Session::put('message','<div class="alert alert-danger">Không được để trống!</div>');
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

    public function specialized_openupdate($specialized_id){
        $this->AuthLogin();
        $specialized_update = Specialized::find($specialized_id);
        $faculty = Faculty::whereNotIn('faculty_id', [$specialized_update->faculty_id])
        ->orderBy('faculty_code','ASC')->get();
        $manage = view('admin.pages.specialized.update')->with(compact('specialized_update', 'faculty'));
        return view('admin.admin_layout')->with('admin.pages.specialized.update', $manage)->with('faculty',$faculty);
    }

    public function specialized_update(Request $request, $specialized_id)
    {
        $this->AuthLogin();
        $data = $request->all();
        $specialized = Specialized::find($specialized_id);

        $specialized->specialized_name = $data['specialized_name'];
        $specialized->faculty_id = $data['faculty_id'];

        if ($data['specialized_name']=='' || $data['faculty_id']==0) {
            Session::put('message','<div class="alert alert-danger">Không được để trống!</div>');
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

    public function specialized_list(){
        $this->AuthLogin();
        $list = Specialized::orderBy('specialized_id', 'DESC')->paginate(5);
        $manage = view('admin.pages.specialized.list')->with('list', $list);
        return view('admin.admin_layout')->with('admin.pages.specialized.list', $manage);
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
}
