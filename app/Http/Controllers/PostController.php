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
session_start();

class PostController extends Controller
{
	public function post_update(Request $request, $post_id){
		$data = $request->all();
		$post = Post::find($post_id);

    	$post->post_title = $data['post_title'];
		$post->category_id = $data['category_post'];
		$post->post_content = $data['post_content'];

		$result = $post->save();
		if($result){
			Session::put('message','<div class="alert alert-success">Cập nhật thành công!</div>');
			return Redirect::to('/');
		}else{
			Session::put('message','<div class="alert alert-danger">Không thể cập nhật!</div>');
			return Redirect::to('/');
		} 
	}
}
