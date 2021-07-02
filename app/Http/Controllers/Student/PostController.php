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
use App\Models\Statistic;
use Carbon\Carbon;
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

		$time = date('Y-m-d', strtotime($post->created_at));
		$sumlike = Post::where('created_at','like','%'.$time.'%')->sum('post_like');

		$statistic = Statistic::where('statistic_date', $time)->first();
		if($statistic){
			$statisticGet = Statistic::where('statistic_date', $time)->get();
			foreach($statisticGet as $key => $val) {
				$val->statistic_post+=1;
				$val->statistic_like = $sumlike;
				$val->save();
			}
		}else{
			$newS = new Statistic();
			$newS->statistic_date = $time;
			$newS->statistic_post = 1;
			$newS->statistic_like = $sumlike;
			$newS->save();
		}
	}

	public function post_delete(Request $request){
		$postG = Post::where('post_id',$request->input('id'))->get();
		foreach($postG as $key => $val2){
			$date = date('Y-m-d', strtotime($val2->created_at));
			$sumlike = Post::where('created_at','like','%'.$date.'%')->sum('post_like');
			$likepost = Post::where('post_id',$request->input('id'))->sum('post_like');
			$statistic = Statistic::where('statistic_date', $date)->get();
			if($statistic){
				foreach($statistic as $key => $val){
					$del_sta = $val->statistic_post-=1;
					$val->statistic_like = $sumlike-$likepost;
					$val->save();
				}
			}
		}
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
		$nofi2 = Nofication::with('postes')->where('nofication_status',0)->limit(1)->get();

		return view('student.page.post.detail')->with(compact('meta_desc','meta_title','url_canonical','post_detail','nofi','studentSS','nofi2'));
	}
}
