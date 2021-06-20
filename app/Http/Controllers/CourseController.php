<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use App\Models\Course;
use App\Models\StudentInfo;
use Session;
session_start();

class CourseController extends Controller
{
   public function AuthLogin(){
      $admin_id=Session::get('admin_id');
      if($admin_id){
         return Redirect::to('admin-home');
      }else{
         return Redirect::to('admin-login')->send();
      }
   }

   public function course_open(Request $request){
      $this->AuthLogin();
      //SEO
      $meta_desc = "Thêm mới khóa học";
      $meta_title = "Thêm mới khóa học";
      $url_canonical = $request->url();
      //---------------
      return view('admin.pages.course.add')->with(compact('meta_desc','meta_title','url_canonical'));
   }

   public function course_add(Request $request){
      $data = $request->all();
      $course = new Course();

      $course->course_name = $data['course_name'];
      $course->course_status = $data['course_status'];

      if ($data['course_name']=='') {
         Session::put('message','<div class="alert alert-danger">Không được để trống!</div>');
         return Redirect::to('them-moi-nam-hoc');
      }else{
         $result = $course->save(); 
         if($result){
            Session::put('message','<div class="alert alert-success">Thêm mới khóa học thành công!</div>');
            return Redirect::to('them-moi-nam-hoc');
         }else{
            Session::put('message','<div class="alert alert-danger">Không thể thêm mới khóa học!</div>');
            return Redirect::to('them-moi-nam-hoc');
         }
      }
   }

   public function course_openupdate(Request $request,$course_id){
      $this->AuthLogin();
      $course_update = Course::find($course_id);
      $courseId = Course::where('course_id',$course_id)->get();
      foreach ($courseId as $key => $value){
         //SEO
         $meta_desc = "Cập nhật khóa học ".$value->course_name;
         $meta_title = "Cập nhật khóa học ".$value->course_name;
         $url_canonical = $request->url();
         //---------------
      }
      return view('admin.pages.course.update')->with(compact('course_update','meta_desc','meta_title','url_canonical'));
   }

   public function course_update(Request $request, $course_id){
      $this->AuthLogin();
      $data = $request->all();
      $course = Course::find($course_id);

      $course->course_name = $data['course_name'];

      if ($data['course_name']=='') {
         Session::put('message','<div class="alert alert-danger">Không được để trống!</div>');
         return Redirect::to('cap-nhat-nam-hoc/'.$course_id);
      }else{
         $result = $course->save();
         if($result){
           Session::put('message','<div class="alert alert-success">Cập nhật khóa thành công!</div>');
           return Redirect::to('danh-sach-nam-hoc');
         }else{
            Session::put('message','<div class="alert alert-danger">Không thể cập nhật khóa!</div>');
            return Redirect::to('cap-nhat-nam-hoc/'.$course_id);
         } 
      }
   }

   public function course_delete($course_id){
      $this->AuthLogin(); 
      $del = Course::find($course_id);
      $info = StudentInfo::where('course_id', $course_id)->get();
      foreach($info as $key => $value){
         $value->course_id=0;
         $value->save();
      }
      $del->delete();
      Session::put('message','<div class="alert alert-success">Xóa thành công!</div>');
      return Redirect::to('danh-sach-nam-hoc');
   }

   public function course_list(Request $request){
      $this->AuthLogin();
      //SEO
      $meta_desc = "Danh sách khóa học";
      $meta_title = "Danh sách khóa học";
      $url_canonical = $request->url();
      //---------------
      $list = Course::orderBy('course_id', 'DESC')->paginate(5);
      return view('admin.pages.course.list')->with(compact('meta_desc','meta_title','url_canonical','list'));
   }

   public function course_active($course_id){
      $this->AuthLogin();
      $course = Course::find($course_id);
      $course->course_status=1;
      $course->save();

      Session::put('message','<div class="alert alert-warning">Đã ẩn trạng thái!</div>');
      return Redirect::to('danh-sach-nam-hoc');
   }
   public function course_unactive($course_id){
      $this->AuthLogin();
      $course = Course::find($course_id);
      $course->course_status=0;
      $course->save();

      Session::put('message','<div class="alert alert-warning">Đã hiển thị trạng thái!</div>');
      return Redirect::to('danh-sach-nam-hoc'); 
   }
}
