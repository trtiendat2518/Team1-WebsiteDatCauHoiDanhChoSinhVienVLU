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
use Validator;
session_start();

class PostController extends Controller
{
    public function post_new(Request $request){
		$data = $request->all();
		$post = new Post();
		$post->post_student_name = Session::get('student_name');
    	$post->post_student_email = Session::get('student_email');
    	$post->post_title = $data['post_title'];
    	$post->category_id = $data['category_id'];
		$post->post_content = $data['post_content'];
		$post->save();
    }
}
