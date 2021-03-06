<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use App\Models\Student;
use App\Models\StudentInfo;
use App\Models\Nofication;
use App\Models\Faculty;
use App\Models\Specialized;
use App\Models\Course;
use Validator;
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
        $studentSS = Student::with('info')->where('student_id',Session::get('student_id'))
        ->limit(1)->get();
        $student2 = Student::with('info')->where('student_id',Session::get('student_id'))->limit(1)->get();
       
        foreach ($student2 as $key => $value) {
            if($value->student_info_id ){
                if($value->info->faculty_id==0 && $value->info->specialized_id==0 && $value->info->course_id==0){
                    $faculty = Faculty::where('faculty_status',0)->orderBy('faculty_name','ASC')->get();
                    $specialized = Specialized::where('specialized_status',0)->orderBy('faculty_id','ASC')->get();
                    $course = Course::where('course_status',0)->orderBy('course_name','ASC')->get();
                }else if($value->info->faculty_id==0 && $value->info->specialized_id==0){
                    $courseId = $value->info->course->course_id;

                    $faculty = Faculty::where('faculty_status',0)->orderBy('faculty_name','ASC')->get();
                    $specialized = Specialized::where('specialized_status',0)->orderBy('faculty_id','ASC')->get();
                    $course = Course::where('course_status',0)->whereNotIn('course_id', [$courseId])
                    ->orderBy('course_name','ASC')->get();
                }else if($value->info->specialized_id==0 && $value->info->course_id==0){
                    $facultyId = $value->info->faculty->faculty_id;

                    $faculty = Faculty::where('faculty_status',0)->whereNotIn('faculty_id', [$facultyId])
                    ->orderBy('faculty_name','ASC')->get();
                    $specialized = Specialized::where('specialized_status',0)->orderBy('faculty_id','ASC')->get();
                    $course = Course::where('course_status',0)->orderBy('course_name','ASC')->get();
                }else if($value->info->faculty_id==0 && $value->info->course_id==0){
                    $specializedId = $value->info->specialized->specialized_id;

                    $faculty = Faculty::where('faculty_status',0)->orderBy('faculty_name','ASC')->get();
                    $specialized = Specialized::where('specialized_status',0)->whereNotIn('specialized_id', [$specializedId])->orderBy('faculty_id','ASC')->get();
                    $course = Course::where('course_status',0)->orderBy('course_name','ASC')->get();
                }else if($value->info->faculty_id==0){
                    $specializedId = $value->info->specialized->specialized_id;
                    $courseId = $value->info->course->course_id;

                    $faculty = Faculty::where('faculty_status',0)->orderBy('faculty_name','ASC')->get();
                    $specialized = Specialized::where('specialized_status',0)->whereNotIn('specialized_id', [$specializedId])->orderBy('faculty_id','ASC')->get();
                    $course = Course::where('course_status',0)->whereNotIn('course_id', [$courseId])
                    ->orderBy('course_name','ASC')->get();
                }else if($value->info->specialized_id==0){
                    $facultyId = $value->info->faculty->faculty_id;
                    $courseId = $value->info->course->course_id;

                    $faculty = Faculty::where('faculty_status',0)->whereNotIn('faculty_id', [$facultyId])
                    ->orderBy('faculty_name','ASC')->get();
                    $specialized = Specialized::where('specialized_status',0)->orderBy('faculty_id','ASC')->get();
                    $course = Course::where('course_status',0)->whereNotIn('course_id', [$courseId])
                    ->orderBy('course_name','ASC')->get();
                }else if($value->info->course_id==0){
                    $facultyId = $value->info->specialized->faculty_id;
                    $specializedId = $value->info->specialized->specialized_id;

                    $faculty = Faculty::where('faculty_status',0)->whereNotIn('faculty_id', [$facultyId])
                    ->orderBy('faculty_name','ASC')->get();
                    $specialized = Specialized::where('specialized_status',0)->whereNotIn('specialized_id', [$specializedId])->orderBy('faculty_id','ASC')->get();
                    $course = Course::where('course_status',0)->orderBy('course_name','ASC')->get();
                }else{
                    $facultyId = $value->info->faculty->faculty_id;
                    $specializedId = $value->info->specialized->specialized_id;
                    $courseId = $value->info->course->course_id;

                    $faculty = Faculty::where('faculty_status',0)->whereNotIn('faculty_id', [$facultyId])
                    ->orderBy('faculty_name','ASC')->get();
                    $specialized = Specialized::where('specialized_status',0)->whereNotIn('specialized_id', [$specializedId])->orderBy('faculty_id','ASC')->get();
                    $course = Course::where('course_status',0)->whereNotIn('course_id', [$courseId])
                    ->orderBy('course_name','ASC')->get();
                }
            }else{
                $faculty = Faculty::where('faculty_status',0)->orderBy('faculty_name','ASC')->get();
                $specialized = Specialized::where('specialized_status',0)->orderBy('faculty_id','ASC')->get();
                $course = Course::where('course_status',0)->orderBy('course_name','ASC')->get();
            }
        }
       
        $nofi = Nofication::with('postes','studentes')->orderBy('nofication_id','DESC')->limit(5)->get();
        $nofi2 = Nofication::where('nofication_mine',md5(Session::get('student_id')))
        ->where('nofication_status',0)->get();
        $nofi2_count = $nofi2->count();

        return view('student.page.student.profile')->with(compact('meta_desc','meta_title','url_canonical','student2','nofi','nofi2','faculty','specialized','course','studentSS','nofi2_count'));
    }

    public function studentinfo_create(Request $request, $student_id){
        $student_id = Session::get('student_id');
        $data = $request->all();
        $info = new StudentInfo();
        $info->student_info_date = $data['student_info_date'];
        $info->student_info_gender = $data['student_info_gender'];
        $info->faculty_id = $data['faculty_id'];
        $info->specialized_id = $data['specialized_id'];
        $info->course_id = $data['course_id'];
        $info->student_info_address = $data['student_info_address'];
        $info->student_info_note = $data['student_info_note'];
        $get_image = $request->file('student_info_avatar');

        if($data['student_info_date']=='' || $data['student_info_gender']==0 || $data['faculty_id']==0 || $data['specialized_id']==0 || $data['course_id']==0 || $data['student_info_address']==''){
            Session::put('message','<div class="alert alert-danger">Các thông tin không được để trống!</div>');
            return Redirect::to('/thong-tin-tai-khoan'.'/'.Session::get('student_id'));
        }

        $faculty = Faculty::where('faculty_id',$info->faculty_id)->first();
        $specialized = Specialized::where('specialized_id',$info->specialized_id)->first();

        if($faculty->faculty_code != $specialized->faculty->faculty_code){
            Session::put('message','<div class="alert alert-danger">Khoa và Chuyên ngành không khớp!</div>');
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
        $info->faculty_id = $data['faculty_id'];
        $info->specialized_id = $data['specialized_id'];
        $info->course_id = $data['course_id'];
        $info->student_info_address = $data['student_info_address'];
        $info->student_info_note = $data['student_info_note'];
        $get_image = $request->file('student_info_avatar');

        if($data['student_info_date']=='' || $data['student_info_gender']==0 || $data['faculty_id']==0 || $data['specialized_id']==0 || $data['course_id']==0 || $data['student_info_address']==''){
            Session::put('message','<div class="alert alert-danger">Các thông tin không được để trống!</div>');
            return Redirect::to('/thong-tin-tai-khoan'.'/'.Session::get('student_id'));
        }

        $faculty = Faculty::where('faculty_id',$info->faculty_id)->first();
        $specialized = Specialized::where('specialized_id',$info->specialized_id)->first();

        if($faculty->faculty_code != $specialized->faculty->faculty_code){
            Session::put('message','<div class="alert alert-danger">Khoa và Chuyên ngành không khớp!</div>');
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
        }else if($data['student_info_avatar'] =''){
            Session::put('message','<div class="alert alert-danger">Hình ảnh không được để trống!</div>');
            return Redirect::to('/thong-tin-tai-khoan'.'/'.Session::get('student_id'));
        }else{
            $info->save();
            Session::put('message','<div class="alert alert-success">Cập nhật thông tin chi tiết thành công!</div>');
            return Redirect::to('/thong-tin-tai-khoan'.'/'.Session::get('student_id'));
        }
    }
}
