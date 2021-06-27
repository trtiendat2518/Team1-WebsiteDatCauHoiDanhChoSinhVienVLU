<?php

namespace App\Http\Controllers\Admin;

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
use App\Imports\PostImport;
use App\Exports\PostExport;
use Excel;
use Session;
session_start();

class PostController extends Controller
{
	public function AuthLogin(){
		$admin_id=Session::get('admin_id');
		if($admin_id){
			return Redirect::to('admin-home');
		}else{
			return Redirect::to('admin-login')->send();
		}
	}
	
	public function postadmin_list(Request $request){
		$this->AuthLogin();
      	//SEO
		$meta_desc = "Danh sách câu hỏi";
		$meta_title = "Danh sách câu hỏi";
		$url_canonical = $request->url();
      	//---------------
		$list = Post::orderBy('created_at', 'DESC')->paginate(5);
		return view('admin.pages.post.list')->with(compact('meta_desc','meta_title','url_canonical','list'));
	}

	public function postadmin_search(Request $request){
		$this->AuthLogin();
      	//SEO
		$meta_desc = "Tìm kiếm";
		$meta_title = "Tìm kiếm";
		$url_canonical = $request->url();
      	//---------------
      	
      	$keywords = $request->keywords_submit;
		$search = Post::where('post_title','like','%'.$keywords.'%')->with('category','student')
		->orderBy('tbl_post.created_at','DESC')->get();
		return view('admin.pages.post.search')->with(compact('meta_desc','meta_title','url_canonical','search'));
	}

	public function postadmin_detail(Request $request, $post_id){
		$this->AuthLogin();
      	//SEO
		$meta_desc = "Chi tiết câu hỏi";
		$meta_title = "Chi tiết câu hỏi";
		$url_canonical = $request->url();
      	//---------------
      	
      	$post_detail = Post::find($post_id);
		return view('admin.pages.post.reply')->with(compact('meta_desc','meta_title','url_canonical','post_detail'));
	}

	public function postadmin_delete(Request $request, $post_id){
		$this->AuthLogin();
      	
      	$pst = Post::find($post_id);
		$like_del = Like::where('post_id',$post_id)->delete();
		$cmt_del = Comment::where('post_id',$post_id)->delete();
		$del_nofi = Nofication::where('post_id',$post_id)->delete();
		$del_reply = Reply::where('post_id',$post_id)->delete();
		$pst->delete();
		Session::put('message','<div class="alert alert-success">Xóa thành công!</div>');
        return Redirect::to('danh-sach-cau-hoi');
	}

	public function postadmin_import(Request $request){
		$path = $request->file('file')->getRealPath();
        Excel::import(new PostImport, $path);
        return back();
	}

	public function postadmin_export(Request $request){
		return Excel::download(new PostExport , 'post_vlu.xlsx');
	}

	public function postadmin_pin($post_id){
		$this->AuthLogin();
		$all = Post::where('post_pin',1)->get();
		foreach ($all as $key => $value) {
			$value->post_pin=0;
			$value->save();
		}
		$post = Post::find($post_id);
		$post->post_pin=1;
		$post->save();
		Session::put('message','<div class="alert alert-warning">Đã ghim câu hỏi!</div>');
		return Redirect::to('danh-sach-cau-hoi');
	}

	public function postadmin_unpin($post_id){
		$this->AuthLogin();
		$post = Post::find($post_id);
		$post->post_pin=0;
		$post->save();

		Session::put('message','<div class="alert alert-warning">Bỏ ghim câu hỏi!</div>');
		return Redirect::to('danh-sach-cau-hoi'); 
	}

	public function postadmin_listhot(Request $request){
		$this->AuthLogin();
      	//SEO
		$meta_desc = "Danh sách câu hỏi HOT";
		$meta_title = "Danh sách câu hỏi HOT";
		$url_canonical = $request->url();
      	//---------------

		$list = Post::with('category','student')->where('post_like','>',99)
		->orderBy('created_at','DESC')->paginate(5);

		return view('admin.pages.hotpost.list')->with(compact('meta_desc','meta_title','url_canonical','list'));
	}

	public function postadmin_searchhot(Request $request){
		$this->AuthLogin();
      	//SEO
		$meta_desc = "Tìm kiếm câu hỏi HOT";
		$meta_title = "Tìm kiếm câu hỏi HOT";
		$url_canonical = $request->url();
      	//---------------
      	
		$keywords = $request->keywords_submit;
		$search = Post::where('post_title','like','%'.$keywords.'%')->where('post_like','>',99)
		->with('category','student')->orderBy('tbl_post.created_at','DESC')->get();
		return view('admin.pages.hotpost.search')->with(compact('meta_desc','meta_title','url_canonical','search'));
	}

	public function postadmin_detailhot(Request $request, $post_id){
		$this->AuthLogin();
      	//SEO
		$meta_desc = "Chi tiết câu hỏi";
		$meta_title = "Chi tiết câu hỏi";
		$url_canonical = $request->url();
      	//---------------

		$post_detail = Post::find($post_id);
		return view('admin.pages.hotpost.reply')->with(compact('meta_desc','meta_title','url_canonical','post_detail'));
	}

	public function postadmin_deletehot(Request $request, $post_id){
		$this->AuthLogin();

		$pst = Post::find($post_id);
		$like_del = Like::where('post_id',$post_id)->delete();
		$cmt_del = Comment::where('post_id',$post_id)->delete();
		$del_nofi = Nofication::where('post_id',$post_id)->delete();
		$del_reply = Reply::where('post_id',$post_id)->delete();
		$pst->delete();
		Session::put('message','<div class="alert alert-success">Xóa thành công!</div>');
		return Redirect::to('cau-hoi-dang-chu-y');
	}
}