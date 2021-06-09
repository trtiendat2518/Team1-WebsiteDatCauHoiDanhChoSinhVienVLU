<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use App\Models\Student;
use App\Models\StudentInfo;
use DB;
use Session;
session_start();

class StudentInfoController extends Controller
{
    public function studentinfo_profile(Request $request){
        //SEO
        $meta_desc = "Thông tin tài khoản";
        $meta_title = "Thông tin tài khoản";
        $url_canonical =$request->url();
        //-----------------------
        
        $student2 = Student::with('info')->where('student_id',Session::get('student_id'))
        ->limit(1)->get();
        return view('student.page.student.profile')->with(compact('meta_desc','meta_title','url_canonical','student2'));
    }

    public function studentinfo_create(Request $request, $student_id){
        $student_id = Session::get('student_id');
        $data = $request->all();
        $info = new StudentInfo();
        $info->student_info_date = $data['student_info_date'];
        $info->student_info_gender = $data['student_info_gender'];
        $info->student_info_faculty = $data['student_info_faculty'];
        $info->student_info_specialized = $data['student_info_specialized'];
        $info->student_info_course = $data['student_info_course'];
        $info->student_info_address = $data['student_info_address'];
        $info->student_info_note = $data['student_info_note'];
        $get_image = $request->file('student_info_avatar');

        if($data['student_info_date']=='' || $data['student_info_gender']==0 || $data['student_info_faculty']=='' || $data['student_info_specialized']=='' || $data['student_info_course']=='' || $data['student_info_address']==''){
            Session::put('message','<div class="alert alert-danger">Các thông tin không được để trống!</div>');
            return Redirect::to('/thong-tin-tai-khoan'.'/'.Session::get('student_id'));
        }

        if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image = $name_image.rand(0, 9999).time().'.'.$get_image->getClientOriginalExtension();
            $get_image->move('public/student/img/avatar', $new_image);
            $info->student_info_avatar = $new_image;
            $info->save();

            Session::put('student_info', $info->student_info_id);
            $student = Student::find($student_id);
            $student->student_info_id = Session::get('student_info');
            $student->student_avatar = $info->student_info_avatar;
            $student->save(); 

            Session::put('message','<div class="alert alert-success">Thêm thông tin chi tiết thành công!</div>');
            return Redirect::to('/thong-tin-tai-khoan'.'/'.Session::get('student_id'));
        }else{
            Session::put('message','<div class="alert alert-danger">Hình ảnh không được để trống!</div>');
            return Redirect::to('/thong-tin-tai-khoan'.'/'.Session::get('student_id'));
        }
    }

    public function studentinfo_update(Request $request, $student_info_id){      
        $data = $request->all();
        $info = StudentInfo::find($student_info_id);
        $info->student_info_date = $data['student_info_date'];
        $info->student_info_gender = $data['student_info_gender'];
        $info->student_info_faculty = $data['student_info_faculty'];
        $info->student_info_specialized = $data['student_info_specialized'];
        $info->student_info_course = $data['student_info_course'];
        $info->student_info_address = $data['student_info_address'];
        $info->student_info_note = $data['student_info_note'];
        $get_image = $request->file('student_info_avatar');

        if($data['student_info_date']=='' || $data['student_info_gender']==0 || $data['student_info_faculty']=='' || $data['student_info_specialized']=='' || $data['student_info_course']=='' || $data['student_info_address']==''){
            Session::put('message','<div class="alert alert-danger">Các thông tin không được để trống!</div>');
            return Redirect::to('/thong-tin-tai-khoan'.'/'.Session::get('student_id'));
        }

        if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image = $name_image.rand(0, 9999).time().'.'.$get_image->getClientOriginalExtension();
            $get_image->move('public/student/img/avatar', $new_image);
            $info->student_info_avatar = $new_image;
            $info->save();

            Session::put('student_info', $info->student_info_id);
            $student_id = Session::get('student_id');
            $student = Student::find($student_id);
            $student->student_avatar = $info->student_info_avatar;
            $student->save();

            Session::put('message','<div class="alert alert-success">Cập nhật thông tin chi tiết thành công!</div>');
            return Redirect::to('/thong-tin-tai-khoan'.'/'.Session::get('student_id'));
        }else{
            Session::put('message','<div class="alert alert-danger">Hình ảnh không được để trống!</div>');
            return Redirect::to('/thong-tin-tai-khoan'.'/'.Session::get('student_id'));
        }
    }
}
