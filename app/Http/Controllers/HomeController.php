<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use App\Models\Student;
use App\Models\Category;
use App\Models\Post;
use DB;
use Mail;
use Session;
use Validator;
session_start();

class HomeController extends Controller
{
	public function index(){
		$category_post = Category::orderBy('category_id', 'DESC')->get();
		$post = Post::join('tbl_category','tbl_category.category_id','=','tbl_post.category_id')
		->orderBy('post_id','DESC')->paginate(2);
		return view('student.page.home')->with(compact('category_post','post'));
	}
}
