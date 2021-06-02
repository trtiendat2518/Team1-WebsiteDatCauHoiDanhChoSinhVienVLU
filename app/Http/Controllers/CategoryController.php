<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use App\Models\Category;
use App\Models\Post;
use App\Models\Comment;
use DB;
use Mail;
use Session;
session_start();

class CategoryController extends Controller
{
    public function show_category_post(Request $request, $category_id)
    {
    	$category_post = Category::orderBy('category_id', 'DESC')->get();
    	$category_by_id = Post::join('tbl_category','tbl_post.category_id','=','tbl_category.category_id')->where('tbl_post.category_id', $category_id)->orderBy('tbl_post.created_at','DESC')->paginate(5);
    	$category_by_name = Category::where('tbl_category.category_id', $category_id)->limit(1)->get();

    	//SEO
    	foreach ($category_by_id as $key => $value) {
    		$meta_desc = "Loại câu hỏi: ".$value->category_name;
			$meta_title = "Loại câu hỏi: ".$value->category_name;
			$url_canonical =$request->url();
		}
		//-----------------------

    	return view('student.page.category.show')->with(compact('meta_desc','meta_title','url_canonical','category_post', 'category_by_id', 'category_by_name'));
    }
}
