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

		// $check = Comment::join('tbl_post','tbl_post.post_id','=','tbl_comment.post_id')
		// ->join('tbl_student','tbl_student.student_id','=','tbl_comment.student_id')
		// ->where('post_id', $post_id);
		// $data = array();
		// $data['post_id'] = $post_id;
		// $data['student_id'] = Session::get('student_id');
		// $data['comment_content'] = $request->comment_content;
		// DB::table('tbl_comment')->insert($data);
		return Redirect::to('/');
	}
}
