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
        $info->save();
        if($info){
            Session::put('student_info', $info->student_info_id);
            $student = Student::find($student_id);
            $student->student_info_id = Session::get('student_info');
            $student->save();
            
        }
        
    }
}
