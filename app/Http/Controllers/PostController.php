<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use App\Models\Post;
use App\Models\Category;
use DB;
use Session;
use Validator;
session_start();

class PostController extends Controller
{
    public function post_new(Request $request)
    {
    	$data = $request->all();
    	$post = new Post();

    	$post->post_student = Session::get('student_name');
    	$post->post_title = $data['post_title'];
		$post->category_id = $data['category_post'];
		$post->post_content = $data['post_content'];

		if($post->post_title=='' || $post->category_id=='' || $post->post_content==''){
			Session::put('message','<div class="alert alert-danger">Đặt câu hỏi không thành công!</div>');
			return Redirect::to('/');
		}else{
			$post->save();
			Session::put('message','<div class="alert alert-success">Đặt câu hỏi thành công!</div>');
			return Redirect::to('/');
		}
    }

    public function post_delete($post_id)
	{
		Post::find($post_id)->delete();
		Session::put('message','<div class="alert alert-success">Xóa thành công!</div>');
		return Redirect::to('/');
	}
}
