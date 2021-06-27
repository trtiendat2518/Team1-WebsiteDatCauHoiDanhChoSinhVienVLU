<?php

namespace App\Http\Controllers\Student;

use App\Http\Requests\CreatePostFormRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use App\Models\Post;
use App\Models\Category;
use App\Models\Like;
use App\Models\Comment;
use App\Models\Nofication;
use App\Models\Reply;
use App\Models\Student;
use Session;
session_start();

class PostController extends Controller
{
	//STUDENT
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
		$pst = Post::find($request->input('id'));
		$like_del = Like::where('post_id',$request->input('id'))->delete();
		$cmt_del = Comment::where('post_id',$request->input('id'))->delete();
		$del_nofi = Nofication::where('post_id',$request->input('id'))->delete();
		$del_reply = Reply::where('post_id',$request->input('id'))->delete();
		$pst->delete();
	}

	public function post_detail($post_id, Request $request){
		//SEO
		$meta_desc = "Chi tiết câu hỏi";
        $meta_title = "Chi tiết câu hỏi";
        $url_canonical = $request->url();
		//---------------
		
		$post_detail = Post::where('post_id',$post_id)->with('category','student','likes','comments')->get();
		$studentSS = Student::with('info')->where('student_id',Session::get('student_id'))
		->limit(1)->get();
		$nofi = Nofication::with('postes','studentes')->orderBy('nofication_id','DESC')->limit(5)->get();
		$nofi2 = Nofication::with('postes')->orderBy('nofication_id','DESC')->limit(1)->get();

		return view('student.page.post.detail')->with(compact('meta_desc','meta_title','url_canonical','post_detail','nofi','studentSS','nofi2'));
	}
}
