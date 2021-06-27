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
use Session;
session_start();

class CategoryController extends Controller
{
	public function show_category_post(Request $request, $category_id){
		$category_post = Category::orderBy('category_id', 'DESC')->get();
		$category_by_id = Post::with('category','student','likes','comments')
		->where('tbl_post.category_id', $category_id)
		->orderBy('tbl_post.created_at','DESC')->paginate(5);
		$posthot = Post::with('category','student','likes','comments')
		->orderBy('tbl_post.post_like','DESC')->limit(5)->get();
		$category_by_name = Category::where('tbl_category.category_id', $category_id)->limit(1)->get();
		$studentSS = Student::with('info')->where('student_id',Session::get('student_id'))
		->limit(1)->get();
		$nofi = Nofication::with('postes','studentes')->orderBy('nofication_id','DESC')->limit(5)->get();
		$nofi2 = Nofication::with('postes')->orderBy('nofication_id','DESC')->limit(1)->get();

    	//SEO
		foreach ($category_by_name as $key => $value) {
			$meta_desc = "Loại câu hỏi: ".$value->category_name;
			$meta_title = "Loại câu hỏi: ".$value->category_name;
			$url_canonical =$request->url();
		}
		//-----------------------
		
		return view('student.page.category.show')->with(compact('meta_desc','meta_title','url_canonical','category_post', 'category_by_id', 'category_by_name','studentSS','nofi','nofi2','posthot'));
	}
}
