<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use App\Models\Faculty;
use App\Models\Admin;
use App\Models\AdminInfo;
use App\Models\Visitor;
use Carbon\Carbon;
use Validator;
use Session;
session_start();

class AdminInfoController extends Controller
{
    public function admininfo_profile(Request $request, $admin_id){
        //SEO
        $meta_desc = "Cập nhật hồ sơ";
        $meta_title = "Cập nhật hồ sơ";
        $url_canonical =$request->url();
        //--------------------------
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
        $admin = Admin::find($admin_id)->limit(1)->get();
        foreach ($info as $key => $value) {
            if($value->admin_info_id){
                if($value->info->faculty_id==0){
                    $faculty = Faculty::where('faculty_status',0)->orderBy('faculty_name','ASC')->get();
                }else{
                    $facultyId = $value->info->faculty->faculty_id;
                    $faculty = Faculty::where('faculty_status',0)->whereNotIn('faculty_id', [$facultyId])
                    ->orderBy('faculty_name','ASC')->get();
                }
            }else{
                $faculty = Faculty::where('faculty_status',0)->orderBy('faculty_name','ASC')->get();
            }
        }

        return view('admin.pages.profile.add')->with(compact('meta_desc','meta_title','url_canonical','admin','faculty','info','visitor_count','visitor_lastmonth_count','visitor_thismonth_count','visitor_oneyear_count','visitor_total_count'));
    }

    public function admininfo_create(Request $request, $admin_id){
        $admin_id = Session::get('admin_id');
        $data = $request->validate([
            'admin_info_date'=>'bail|required',
            'admin_info_phone'=>'bail|required|min:10|max:10',
            'faculty_id'=>'bail|required',
            'admin_info_address'=>'bail|required|max:200',
        ],[
            'admin_info_date.required'=>'Ngày sinh không được để trống',
            'admin_info_phone.required'=>'Số điện thoại không được để trống',
            'faculty_id.required'=>'Vui lòng chọn khoa',
            'admin_info_address.required'=>'Địa chỉ không được để trống',
            'admin_info_phone.min'=>'Số điện thoại phải có 10 ký tự số',
            'admin_info_phone.max'=>'Số điện thoại phải có 10 ký tự số',
            'admin_info_address.max'=>'Địa chỉ không vượt quá 200 ký tự',
        ]);
        $info = new AdminInfo();

        $info->faculty_id = $data['faculty_id'];
        $info->admin_info_gender = $request->admin_info_gender;
        $info->admin_info_date = $data['admin_info_date'];
        $info->admin_info_phone = $data['admin_info_phone'];
        $info->admin_info_address = $data['admin_info_address'];
        $get_image = $request->file('admin_info_avatar');

        if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image = $name_image.rand(0, 9999).time().'.'.$get_image->getClientOriginalExtension();
            $get_image->move('public/admin/images/avatar', $new_image);
            $info->admin_info_avatar = $new_image;
            $info->save();

            Session::put('admin_info', $info->admin_info_id);
            $admin = Admin::find($admin_id);
            $admin->admin_info_id = Session::get('admin_info');
            $admin->admin_avatar = $info->admin_info_avatar;
            $admin->save(); 

            Session::put('message','<div class="alert alert-success">Cập nhật hồ sơ thành công!</div>');
            Session::put('admin_info', null);
            return Redirect::to('/thong-tin-tai-khoan-admin'.'/'.Session::get('admin_id'));
        }else{
            Session::put('message','<div class="alert alert-danger">Hình ảnh không được để trống!</div>');
            return Redirect::to('/thong-tin-tai-khoan-admin'.'/'.Session::get('admin_id'));
        }
    }

    public function admininfo_update(Request $request, $admin_info_id){      
        $data = $request->validate([
            'admin_info_date'=>'bail|required',
            'admin_info_phone'=>'bail|required|min:10|max:10',
            'faculty_id'=>'bail|required',
            'admin_info_address'=>'bail|required|max:200',
        ],[
            'admin_info_date.required'=>'Ngày sinh không được để trống',
            'admin_info_phone.required'=>'Số điện thoại không được để trống',
            'faculty_id.required'=>'Vui lòng chọn khoa',
            'admin_info_address.required'=>'Địa chỉ không được để trống',
            'admin_info_phone.min'=>'Số điện thoại phải có 10 ký tự số',
            'admin_info_phone.max'=>'Số điện thoại phải có 10 ký tự số',
            'admin_info_address.max'=>'Địa chỉ không vượt quá 200 ký tự',
        ]);
        $info = AdminInfo::find($admin_info_id);
        $info->faculty_id = $data['faculty_id'];
        $info->admin_info_gender = $request->admin_info_gender;
        $info->admin_info_date = $data['admin_info_date'];
        $info->admin_info_phone = $data['admin_info_phone'];
        $info->admin_info_address = $data['admin_info_address'];
        $get_image = $request->file('admin_info_avatar');

        if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image = $name_image.rand(0, 9999).time().'.'.$get_image->getClientOriginalExtension();
            $get_image->move('public/admin/images/avatar', $new_image);
            $info->admin_info_avatar = $new_image;
            $info->save();

            Session::put('admin_info', $info->admin_info_id);
            $admin_id = Session::get('admin_id');
            $admin = admin::find($admin_id);
            $admin->admin_avatar = $info->admin_info_avatar;
            $admin->save();

            Session::put('message','<div class="alert alert-success">Cập nhật thông tin chi tiết thành công!</div>');
            return Redirect::to('/thong-tin-tai-khoan-admin'.'/'.Session::get('admin_id'));
        }else if($data['admin_info_avatar'] =''){
            Session::put('message','<div class="alert alert-danger">Hình ảnh không được để trống!</div>');
            return Redirect::to('/thong-tin-tai-khoan-admin'.'/'.Session::get('admin_id'));
        }else{
            $info->save();
            Session::put('message','<div class="alert alert-success">Cập nhật thông tin chi tiết thành công!</div>');
            return Redirect::to('/thong-tin-tai-khoan-admin'.'/'.Session::get('admin_id'));
        }
    }
}
