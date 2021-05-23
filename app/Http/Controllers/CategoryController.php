<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use App\Models\Category;
use App\Models\Post;
use DB;
use Mail;
use Session;
session_start();

class CategoryController extends Controller
{
    public function show_category_post($category_id)
    {
    	$category_post = Category::orderBy('category_id', 'DESC')->get();

    	$category_by_id = Post::orderBy('post_id', 'DESC')
    	->join('tbl_category','tbl_category.category_id','=','tbl_post.category_id')
    	->where('tbl_post.category_id', $category_id)->get();

    	$category_by_name = Category::where('tbl_category.category_id', $category_id)->limit(1)->get();

    	return view('student.page.category.show')->with(compact('category_post', 'category_by_id', 'category_by_name'));
    }
}
