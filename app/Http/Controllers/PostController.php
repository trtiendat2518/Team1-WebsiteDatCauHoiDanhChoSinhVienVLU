<?php

namespace App\Http\Controllers;
use App\Http\Requests\CreatePostFormRequest;

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
    public function post_new(Request $request){
		$data = $request->all();
		$post = new Post();
		$post->student_id = Session::get('student_id');
    	$post->post_title = $data['post_title'];
    	$post->category_id = $data['category_id'];
		$post->post_content = $data['post_content'];
		date_default_timezone_set('Asia/Ho_Chi_Minh');
		$post->created_at = now();
		$post->save();
    }
    public function post_delete(Request $request){
		$post_del = Post::find($request->input('id'))->delete();
		if($post_del){
			$cmt_del = Comment::where('post_id',$request->input('id'))->delete();
			$like_del = Like::where('post_id',$request->input('id'))->delete();
		}
	}
}
