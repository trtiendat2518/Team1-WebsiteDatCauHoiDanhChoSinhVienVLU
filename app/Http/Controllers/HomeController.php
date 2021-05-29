<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use App\Models\Student;
use App\Models\Category;
use App\Models\Post;
use App\Models\Comment;
use DB;
use Mail;
use Session;
use Validator;
session_start();

class HomeController extends Controller
{
	public function index(Request $request){
		//SEO
		$meta_desc = "Website đặt câu hỏi dành cho sinh viên Văn Lang";
        $meta_title = "Trang chủ";
        $url_canonical = $request->url();
		//---------------
		
		$category_post = Category::orderBy('category_id', 'DESC')->get();
		$post2 = Post::join('tbl_category','tbl_category.category_id','=','tbl_post.category_id')
		->orderBy('tbl_post.created_at','DESC')->paginate(5);
		$comt = Comment::join('tbl_post','tbl_post.post_id','=','tbl_comment.post_id')
		->join('tbl_student','tbl_student.student_id','=','tbl_comment.student_id')
		->orderBy('comment_id','DESC')->get();
		return view('student.page.home')->with(compact('meta_desc','meta_title','url_canonical','category_post','post2','comt'));
	}

	public function search(Request $request)
	{
		//SEO
		$meta_desc = "Tìm kiếm câu hỏi";
        $meta_title = "Tìm kiếm câu hỏi";
        $url_canonical = $request->url();
		//---------------
		
		$category_post = Category::orderBy('category_id', 'DESC')->get();
		$keywords = $request->keywords_submit;
		$search_product = Post::join('tbl_category','tbl_category.category_id','=','tbl_post.category_id')->where('post_title','like','%'.$keywords.'%')->orderBy('tbl_post.created_at','DESC')->paginate(5); 
		return view('student.page.post.search')->with(compact('meta_desc','meta_title','url_canonical','category_post','search_product'));
	}
}
