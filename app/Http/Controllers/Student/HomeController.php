<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use App\Models\Category;
use App\Models\Post;
use App\Models\Student;
use App\Models\Nofication;
use App\Models\Like;
use App\Models\Comment;
use Carbon\Carbon;
use Mail;
use Session;
session_start();

class HomeController extends Controller
{
	public function index(Request $request){
		//SEO
		$meta_desc = "Website đặt câu hỏi dành cho sinh viên Văn Lang";
		$meta_title = "Trang chủ";
		$url_canonical = $request->url();
		//---------------
		$mylike = Like::where('student_id',Session::get('student_id'))->get();
		$mylike_count = $mylike->count();
		$mycmt = Comment::where('student_id',Session::get('student_id'))->get();
		$mycmt_count = $mycmt->count();
		$mypost = Post::where('student_id',Session::get('student_id'))->get();
		$mypost_count = $mypost->count();

		$category_post = Category::orderBy('category_id', 'DESC')->get();
		$postpin = Post::with('category','student','likes','comments')->where('post_pin',1)->limit(1)->get();
		$post2 = Post::with('category','student','likes','comments')->where('post_pin',0)
		->orderBy('tbl_post.created_at','DESC')->paginate(5);
		$posthot = Post::with('category','student','likes','comments')
		->orderBy('tbl_post.post_like','DESC')->limit(10)->get();
		$studentSS = Student::with('info')->where('student_id',Session::get('student_id'))
		->limit(1)->get();
		$nofi = Nofication::with('postes','studentes')->orderBy('nofication_id','DESC')->limit(5)->get();
		$nofi2 = Nofication::with('postes')->where('nofication_status',0)->limit(1)->get();

		return view('student.page.home')->with(compact('meta_desc','meta_title','url_canonical','category_post','post2','studentSS','nofi','nofi2','posthot','postpin','mypost_count','mylike_count','mycmt_count'));
	}

	public function search(Request $request){
		//SEO
		$meta_desc = "Tìm kiếm câu hỏi";
		$meta_title = "Tìm kiếm câu hỏi";
		$url_canonical = $request->url();
		//---------------
		$mylike = Like::where('student_id',Session::get('student_id'))->get();
		$mylike_count = $mylike->count();
		$mycmt = Comment::where('student_id',Session::get('student_id'))->get();
		$mycmt_count = $mycmt->count();
		$mypost = Post::where('student_id',Session::get('student_id'))->get();
		$mypost_count = $mypost->count();
		
		$category_post = Category::orderBy('category_id', 'DESC')->get();
		$keywords = $request->keywords_submit;
		$search_product = Post::where('post_title','like','%'.$keywords.'%')
		->with('category','student','likes','comments')
		->orderBy('tbl_post.created_at','DESC')->get();
		$posthot = Post::with('category','student','likes','comments')
		->orderBy('tbl_post.post_like','DESC')->limit(10)->get();
		$studentSS = Student::with('info')->where('student_id',Session::get('student_id'))
		->limit(1)->get();
		$nofi = Nofication::with('postes','studentes')->orderBy('nofication_id','DESC')->limit(5)->get();
		$nofi2 = Nofication::with('postes')->where('nofication_status',0)->limit(1)->get();
		
		return view('student.page.post.search')->with(compact('meta_desc','meta_title','url_canonical','category_post','search_product','studentSS','nofi','nofi2','posthot','mypost_count','mylike_count','mycmt_count'));
	}
}
