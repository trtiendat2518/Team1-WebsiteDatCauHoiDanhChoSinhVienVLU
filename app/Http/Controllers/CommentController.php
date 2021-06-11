<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use App\Models\Comment;
use App\Models\Post;
use App\Models\Student;
use App\Models\Nofication;
use DB;
use Mail;
use Session;
use Validator;
session_start();

class CommentController extends Controller
{
	public function comment_post(Request $request, $post_id)
	{
		$post = Post::find($post_id);
		$data = $request->all();

		$cmt = new Comment();
		$cmt->post_id = $post_id;
		$cmt->student_id = Session::get('student_id');
		$cmt->comment_code = "COMMENT".md5(time().rand(1000,9999).$post_id);
		$cmt->comment_content = $data['comment_content'];
		date_default_timezone_set('Asia/Ho_Chi_Minh');
		$cmt->created_at = now();
		$cmt->save();
		if($cmt){
			$nofi = new Nofication();
            $nofi->post_id = $post_id;
            $nofi->student_id = Session::get('student_id');
			$nofi->nofication_mine = md5($post->student_id);
            $nofi->nofication_kind = "Comment";
            $nofi->nofication_code = $cmt->comment_code;
            $nofi->nofication_status = 0;
            date_default_timezone_set('Asia/Ho_Chi_Minh');
            $nofi->nofication_created = now();
            $nofi->save();
		}
	}

	public function comment_delete(Request $request)
	{
		$cmt = Comment::find($request->input('id'));
		$delnofi = Nofication::where('student_id',Session::get('student_id'))
			->where('nofication_code',$cmt->comment_code)->delete();
		$cmt->delete();
	}
}
