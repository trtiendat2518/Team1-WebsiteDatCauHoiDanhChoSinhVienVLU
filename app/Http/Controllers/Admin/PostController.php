<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CreatePostFormRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use App\Models\Post;
use App\Models\Category;
use App\Models\Like;
use App\Models\Comment;
use App\Models\Nofication;
use App\Models\Reply;
use App\Models\Student;
use App\Imports\PostImport;
use App\Exports\PostExport;
use App\Models\Admin;
use App\Models\Statistic;
use App\Models\Visitor;
use Carbon\Carbon;
use Excel;
use Validator;
use Session;
session_start();

class PostController extends Controller
{
	public function AuthLogin(){
		$admin_id=Session::get('admin_id');
		if($admin_id){
			return Redirect::to('admin-home');
		}else{
			return Redirect::to('admin-login')->send();
		}
	}
	
	public function postadmin_list(Request $request){
		$this->AuthLogin();
		if(Session::get('admin_role')==1 || Session::get('admin_role')==2){
			//SEO
			$meta_desc = "Danh sách câu hỏi";
			$meta_title = "Danh sách câu hỏi";
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
			$list = Post::where('post_like','<',100)->orderBy('created_at', 'DESC')->paginate(5);
			return view('admin.pages.post.list')->with(compact('meta_desc','meta_title','url_canonical','list','info','visitor_count','visitor_lastmonth_count','visitor_thismonth_count','visitor_oneyear_count','visitor_total_count'));
		}else{
			return Redirect::to('admin-home');
		}
	}

	public function postadmin_search(Request $request){
		$this->AuthLogin();
		if(Session::get('admin_role')==1 || Session::get('admin_role')==2){
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
				$search = Post::where('post_title','like','%'.$keywords.'%')->with('category','student')
				->orderBy('tbl_post.created_at','DESC')->get();
				return view('admin.pages.post.search')->with(compact('meta_desc','meta_title','url_canonical','search','info','visitor_count','visitor_lastmonth_count','visitor_thismonth_count','visitor_oneyear_count','visitor_total_count'));
			}
		}else{
			return Redirect::to('admin-home');
		}
	}

	public function postadmin_detail(Request $request, $post_id){
		$this->AuthLogin();
		if(Session::get('admin_role')==1){
      		//SEO
			$meta_desc = "Chi tiết câu hỏi";
			$meta_title = "Chi tiết câu hỏi";
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
			$post_detail = Post::find($post_id);
			return view('admin.pages.post.reply')->with(compact('meta_desc','meta_title','url_canonical','post_detail','info','visitor_count','visitor_lastmonth_count','visitor_thismonth_count','visitor_oneyear_count','visitor_total_count'));
		}else{
			return Redirect::to('admin-home');
		}
	}

	public function postadmin_delete(Request $request, $post_id){
		$this->AuthLogin();
		$postG = Post::where('post_id',$post_id)->get();
		foreach($postG as $key => $val2){
			$date = date('Y-m-d', strtotime($val2->created_at));
			$sumlike = Post::where('created_at','like','%'.$date.'%')->sum('post_like');
			$likepost = Post::where('post_id',$post_id)->sum('post_like');
			$statistic = Statistic::where('statistic_date', $date)->get();
			if($statistic){
				foreach($statistic as $key => $val){
					$del_sta = $val->statistic_post-=1;
					$val->statistic_like = $sumlike-$likepost;
					$val->save();
				}
			}
		}
		$pst = Post::find($post_id);
		$like_del = Like::where('post_id',$post_id)->delete();
		$cmt_del = Comment::where('post_id',$post_id)->delete();
		$del_nofi = Nofication::where('post_id',$post_id)->delete();
		$del_reply = Reply::where('post_id',$post_id)->delete();
		$pst->delete();
		Session::put('message','<div class="alert alert-success">Xóa thành công!</div>');
		return Redirect::to('danh-sach-cau-hoi');
	}

	public function postadmin_import(Request $request){
		$path = $request->file('file')->getRealPath();
		Excel::import(new PostImport, $path);
		return back();
	}

	public function postadmin_export(Request $request){
		return Excel::download(new PostExport , 'post_vlu.xlsx');
	}

	public function postadmin_pin($post_id){
		$this->AuthLogin();
		$all = Post::where('post_pin',1)->get();
		foreach ($all as $key => $value) {
			$value->post_pin=0;
			$value->save();
		}
		$post = Post::find($post_id);
		$post->post_pin=1;
		$post->save();
		Session::put('message','<div class="alert alert-warning">Đã ghim câu hỏi!</div>');
		return Redirect::to('danh-sach-cau-hoi');
	}

	public function postadmin_unpin($post_id){
		$this->AuthLogin();
		$post = Post::find($post_id);
		$post->post_pin=0;
		$post->save();

		Session::put('message','<div class="alert alert-warning">Bỏ ghim câu hỏi!</div>');
		return Redirect::to('danh-sach-cau-hoi'); 
	}

	public function postadmin_listhot(Request $request){
		$this->AuthLogin();
		if(Session::get('admin_role')==1 || Session::get('admin_role')==2){
      		//SEO
			$meta_desc = "Danh sách câu hỏi HOT";
			$meta_title = "Danh sách câu hỏi HOT";
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
			$list = Post::with('category','student')->where('post_like','>',99)
			->orderBy('created_at','DESC')->paginate(5);

			return view('admin.pages.hotpost.list')->with(compact('meta_desc','meta_title','url_canonical','list','info','visitor_count','visitor_lastmonth_count','visitor_thismonth_count','visitor_oneyear_count','visitor_total_count'));
		}else{
			return Redirect::to('admin-home');
		}
	}

	public function postadmin_searchhot(Request $request){
		$this->AuthLogin();
		if(Session::get('admin_role')==1 || Session::get('admin_role')==2){
      		//SEO
			$meta_desc = "Tìm kiếm câu hỏi HOT";
			$meta_title = "Tìm kiếm câu hỏi HOT";
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
				$search = Post::where('post_title','like','%'.$keywords.'%')->where('post_like','>',99)
				->with('category','student')->orderBy('tbl_post.created_at','DESC')->get();
				return view('admin.pages.hotpost.search')->with(compact('meta_desc','meta_title','url_canonical','search','info','visitor_count','visitor_lastmonth_count','visitor_thismonth_count','visitor_oneyear_count','visitor_total_count'));
			}
		}else{
			return Redirect::to('admin-home');
		}
	}

	public function postadmin_detailhot(Request $request, $post_id){
		$this->AuthLogin();
		if(Session::get('admin_role')==1){
      		//SEO
			$meta_desc = "Chi tiết câu hỏi";
			$meta_title = "Chi tiết câu hỏi";
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
			$post_detail = Post::find($post_id);
			return view('admin.pages.hotpost.reply')->with(compact('meta_desc','meta_title','url_canonical','post_detail','info','visitor_count','visitor_lastmonth_count','visitor_thismonth_count','visitor_oneyear_count','visitor_total_count'));
		}else{
			return Redirect::to('admin-home');
		}
	}

	public function postadmin_deletehot(Request $request, $post_id){
		$this->AuthLogin();
		$postG = Post::where('post_id',$post_id)->get();
		foreach($postG as $key => $val2){
			$date = date('Y-m-d', strtotime($val2->created_at));
			$sumlike = Post::where('created_at','like','%'.$date.'%')->sum('post_like');
			$likepost = Post::where('post_id',$post_id)->sum('post_like');
			$statistic = Statistic::where('statistic_date', $date)->get();
			if($statistic){
				foreach($statistic as $key => $val){
					$del_sta = $val->statistic_post-=1;
					$val->statistic_like = $sumlike-$likepost;
					$val->save();
				}
			}
		}
		$pst = Post::find($post_id);
		$like_del = Like::where('post_id',$post_id)->delete();
		$cmt_del = Comment::where('post_id',$post_id)->delete();
		$del_nofi = Nofication::where('post_id',$post_id)->delete();
		$del_reply = Reply::where('post_id',$post_id)->delete();
		$pst->delete();
		Session::put('message','<div class="alert alert-success">Xóa thành công!</div>');
		return Redirect::to('cau-hoi-dang-chu-y');
	}
}
