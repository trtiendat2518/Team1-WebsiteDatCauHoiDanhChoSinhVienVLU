<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use App\Models\Course;
use App\Models\StudentInfo;
use App\Models\Admin;
use App\Models\Visitor;
use Carbon\Carbon;
use Validator;
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
      if(Session::get('admin_role')==0){
         //SEO
         $meta_desc = "Thêm mới khóa học";
         $meta_title = "Thêm mới khóa học";
         $url_canonical = $request->url();
         //---------------
         $user_ip_address = $request->ip();
         $visitor_current = Visitor::where('visitor_ipaddress',$user_ip_address)->get();
         $visitor_count = $visitor_current->count();
         if($visitor_count<1){
            $visitor = new Visitor();
            $visitor->visitor_ipaddress = $user_ip_address;
            $visitor->visitor_date = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();
            $visitor->save();
         }

         $headmonthlast = Carbon::now('Asia/Ho_Chi_Minh')->subMonth()->startOfMonth()->toDateString();
         $backmonthlast = Carbon::now('Asia/Ho_Chi_Minh')->subMonth()->endOfMonth()->toDateString();
         $headmonthnow = Carbon::now('Asia/Ho_Chi_Minh')->startOfMonth()->toDateString();
         $sub365days = Carbon::now('Asia/Ho_Chi_Minh')->subdays(365)->toDateString();
         $now = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();

         $visitor_lastmonth = Visitor::whereBetween('visitor_date',[$headmonthlast,$backmonthlast])->get();
         $visitor_lastmonth_count = $visitor_lastmonth->count();
         $visitor_thismonth = Visitor::whereBetween('visitor_date',[$headmonthnow,$now])->get();
         $visitor_thismonth_count = $visitor_thismonth->count();
         $visitor_oneyear = Visitor::whereBetween('visitor_date',[$sub365days,$now])->get();
         $visitor_oneyear_count = $visitor_oneyear->count();
         $visitors = Visitor::all();
         $visitor_total_count = $visitors->count();

         $info = Admin::where('admin_id',Session::get('admin_id'))->limit(1)->get();
         return view('admin.pages.course.add')->with(compact('meta_desc','meta_title','url_canonical','info','visitor_count','visitor_lastmonth_count','visitor_thismonth_count','visitor_oneyear_count','visitor_total_count'));
      }else{
         return Redirect::to('admin-home');
      }
   }

   public function course_add(Request $request){
      $data = $request->validate([
         'course_name'=>'bail|required|max:50|min:2|notspecial_spaces|unique:tbl_course',
         'course_status'=>'bail|required',
      ],[
         'course_name.required'=>'Tên khóa học không được để trống',
         'course_name.notspecial_spaces'=>'Tên khóa học không được chứa ký tự đặc biệt',
         'course_name.unique'=>'Tên khóa học đã tồn tại',
         'course_name.min'=>'Tên khóa học ít nhất có 5 ký tự',
         'course_name.max'=>'Tên khóa học không quá 50 ký tự',
      ]);
      $course = new Course();

      $course->course_name = $data['course_name'];
      $course->course_status = $data['course_status'];

      $result = $course->save(); 
      if($result){
         Session::put('message','<div class="alert alert-success">Thêm mới khóa học thành công!</div>');
         return Redirect::to('danh-sach-nam-hoc');
      }else{
         Session::put('message','<div class="alert alert-danger">Không thể thêm mới khóa học!</div>');
         return Redirect::to('them-moi-nam-hoc');
      }
   }

   public function course_openupdate(Request $request,$course_id){
      $this->AuthLogin();
      if(Session::get('admin_role')==0){
         $user_ip_address = $request->ip();
         $visitor_current = Visitor::where('visitor_ipaddress',$user_ip_address)->get();
         $visitor_count = $visitor_current->count();
         if($visitor_count<1){
            $visitor = new Visitor();
            $visitor->visitor_ipaddress = $user_ip_address;
            $visitor->visitor_date = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();
            $visitor->save();
         }

         $headmonthlast = Carbon::now('Asia/Ho_Chi_Minh')->subMonth()->startOfMonth()->toDateString();
         $backmonthlast = Carbon::now('Asia/Ho_Chi_Minh')->subMonth()->endOfMonth()->toDateString();
         $headmonthnow = Carbon::now('Asia/Ho_Chi_Minh')->startOfMonth()->toDateString();
         $sub365days = Carbon::now('Asia/Ho_Chi_Minh')->subdays(365)->toDateString();
         $now = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();

         $visitor_lastmonth = Visitor::whereBetween('visitor_date',[$headmonthlast,$backmonthlast])->get();
         $visitor_lastmonth_count = $visitor_lastmonth->count();
         $visitor_thismonth = Visitor::whereBetween('visitor_date',[$headmonthnow,$now])->get();
         $visitor_thismonth_count = $visitor_thismonth->count();
         $visitor_oneyear = Visitor::whereBetween('visitor_date',[$sub365days,$now])->get();
         $visitor_oneyear_count = $visitor_oneyear->count();
         $visitors = Visitor::all();
         $visitor_total_count = $visitors->count();

         $info = Admin::where('admin_id',Session::get('admin_id'))->limit(1)->get();
         $course_update = Course::find($course_id);
         $courseId = Course::where('course_id',$course_id)->get();
         foreach ($courseId as $key => $value){
         //SEO
            $meta_desc = "Cập nhật khóa học ".$value->course_name;
            $meta_title = "Cập nhật khóa học ".$value->course_name;
            $url_canonical = $request->url();
         //---------------
         }
         return view('admin.pages.course.update')->with(compact('course_update','meta_desc','meta_title','url_canonical','info','visitor_count','visitor_lastmonth_count','visitor_thismonth_count','visitor_oneyear_count','visitor_total_count'));
      }else{
         return Redirect::to('admin-home');
      }
   }

   public function course_update(Request $request, $course_id){
      $this->AuthLogin();
      $data = $request->validate([
         'course_name'=>'bail|required|max:50|min:2|notspecial_spaces|unique:tbl_course',
      ],[
         'course_name.required'=>'Tên khóa học không được để trống',
         'course_name.notspecial_spaces'=>'Tên khóa học không được chứa ký tự đặc biệt',
         'course_name.unique'=>'Tên khóa học đã tồn tại',
         'course_name.min'=>'Tên khóa học ít nhất có 5 ký tự',
         'course_name.max'=>'Tên khóa học không quá 50 ký tự',
      ]);
      $course = Course::find($course_id);

      $course->course_name = $data['course_name'];

      $result = $course->save();
      if($result){
         Session::put('message','<div class="alert alert-success">Cập nhật khóa thành công!</div>');
         return Redirect::to('danh-sach-nam-hoc');
      }else{
         Session::put('message','<div class="alert alert-danger">Không thể cập nhật khóa!</div>');
         return Redirect::to('cap-nhat-nam-hoc/'.$course_id);
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
      if(Session::get('admin_role')==0){
         //SEO
         $meta_desc = "Danh sách khóa học";
         $meta_title = "Danh sách khóa học";
         $url_canonical = $request->url();
         //---------------
         $user_ip_address = $request->ip();
         $visitor_current = Visitor::where('visitor_ipaddress',$user_ip_address)->get();
         $visitor_count = $visitor_current->count();
         if($visitor_count<1){
            $visitor = new Visitor();
            $visitor->visitor_ipaddress = $user_ip_address;
            $visitor->visitor_date = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();
            $visitor->save();
         }

         $headmonthlast = Carbon::now('Asia/Ho_Chi_Minh')->subMonth()->startOfMonth()->toDateString();
         $backmonthlast = Carbon::now('Asia/Ho_Chi_Minh')->subMonth()->endOfMonth()->toDateString();
         $headmonthnow = Carbon::now('Asia/Ho_Chi_Minh')->startOfMonth()->toDateString();
         $sub365days = Carbon::now('Asia/Ho_Chi_Minh')->subdays(365)->toDateString();
         $now = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();

         $visitor_lastmonth = Visitor::whereBetween('visitor_date',[$headmonthlast,$backmonthlast])->get();
         $visitor_lastmonth_count = $visitor_lastmonth->count();
         $visitor_thismonth = Visitor::whereBetween('visitor_date',[$headmonthnow,$now])->get();
         $visitor_thismonth_count = $visitor_thismonth->count();
         $visitor_oneyear = Visitor::whereBetween('visitor_date',[$sub365days,$now])->get();
         $visitor_oneyear_count = $visitor_oneyear->count();
         $visitors = Visitor::all();
         $visitor_total_count = $visitors->count();

         $info = Admin::where('admin_id',Session::get('admin_id'))->limit(1)->get();
         $list = Course::orderBy('course_id', 'DESC')->paginate(5);
         return view('admin.pages.course.list')->with(compact('meta_desc','meta_title','url_canonical','list','info','visitor_count','visitor_lastmonth_count','visitor_thismonth_count','visitor_oneyear_count','visitor_total_count'));
      }else{
         return Redirect::to('admin-home');
      }
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

   public function course_search(Request $request){
      $this->AuthLogin();
      if(Session::get('admin_role')==0){
         //SEO
         $meta_desc = "Tìm kiếm";
         $meta_title = "Tìm kiếm";
         $url_canonical = $request->url();
         //---------------
         $user_ip_address = $request->ip();
         $visitor_current = Visitor::where('visitor_ipaddress',$user_ip_address)->get();
         $visitor_count = $visitor_current->count();
         if($visitor_count<1){
            $visitor = new Visitor();
            $visitor->visitor_ipaddress = $user_ip_address;
            $visitor->visitor_date = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();
            $visitor->save();
         }

         $headmonthlast = Carbon::now('Asia/Ho_Chi_Minh')->subMonth()->startOfMonth()->toDateString();
         $backmonthlast = Carbon::now('Asia/Ho_Chi_Minh')->subMonth()->endOfMonth()->toDateString();
         $headmonthnow = Carbon::now('Asia/Ho_Chi_Minh')->startOfMonth()->toDateString();
         $sub365days = Carbon::now('Asia/Ho_Chi_Minh')->subdays(365)->toDateString();
         $now = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();

         $visitor_lastmonth = Visitor::whereBetween('visitor_date',[$headmonthlast,$backmonthlast])->get();
         $visitor_lastmonth_count = $visitor_lastmonth->count();
         $visitor_thismonth = Visitor::whereBetween('visitor_date',[$headmonthnow,$now])->get();
         $visitor_thismonth_count = $visitor_thismonth->count();
         $visitor_oneyear = Visitor::whereBetween('visitor_date',[$sub365days,$now])->get();
         $visitor_oneyear_count = $visitor_oneyear->count();
         $visitors = Visitor::all();
         $visitor_total_count = $visitors->count();

         $info = Admin::where('admin_id',Session::get('admin_id'))->limit(1)->get();
         
         $keywords = $request->keywords_submit;
         $reg = '"%\'*;<>?^`{|}~/\\#=&';
         $quotes = preg_quote($reg, '/');
         
         if($keywords==''){
            Session::put('message','<div class="alert alert-danger">Không được để trống!</div>');
            return redirect()->back();
         }else if(preg_match('/[' . $quotes . ']/', $keywords)){
            Session::put('message','<div class="alert alert-danger">Không thể tìm kiếm ký tự đặc biệt!</div>');
            return redirect()->back();
         }else{
            $search = Course::where('course_name','like','%'.$keywords.'%')
            ->orderBy('course_id','DESC')->get();
            return view('admin.pages.course.search')->with(compact('meta_desc','meta_title','url_canonical','search','info','visitor_count','visitor_lastmonth_count','visitor_thismonth_count','visitor_oneyear_count','visitor_total_count'));
         }
      }else{
         return Redirect::to('admin-home');
      }
   }
}
