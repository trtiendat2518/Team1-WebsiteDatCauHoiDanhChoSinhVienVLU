<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use App\Models\Comment;
use App\Models\Post;
use App\Models\Student;
use DB;
use Mail;
use Session;
use Validator;
session_start();

class CommentController extends Controller
{
	public function comment_post(Request $request, $post_id)
	{
		$data = $request->all();

		$cmt = new Comment();
		$cmt->post_id = $post_id;
		$cmt->student_id = Session::get('student_id');
		$cmt->comment_content = $data['comment_content'];
		$cmt->save();
	}

	public function comment_delete(Request $request)
	{
		Comment::find($request->input('id'))->delete();
	}
}
