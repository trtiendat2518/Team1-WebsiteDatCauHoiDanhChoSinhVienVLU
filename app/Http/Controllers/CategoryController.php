<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use App\Models\Category;
use App\Models\Post;
use App\Models\Comment;
use App\Models\Student;
use App\Models\Nofication;
use DB;
use Mail;
use Session;
session_start();

class CategoryController extends Controller
{
	//STUDENT
	public function show_category_post(Request $request, $category_id){
		$category_post = Category::orderBy('category_id', 'DESC')->get();
		$category_by_id = Post::with('category','student','likes','comments')
		->where('tbl_post.category_id', $category_id)
		->orderBy('tbl_post.created_at','DESC')->paginate(5);
		$posthot = Post::with('category','student','likes','comments')
		->orderBy('tbl_post.post_like','DESC')->limit(5)->get();
		$category_by_name = Category::where('tbl_category.category_id', $category_id)->limit(1)->get();
		$studentSS = Student::with('info')->where('student_id',Session::get('student_id'))
		->limit(1)->get();
		$nofi = Nofication::with('postes','studentes')->orderBy('nofication_id','DESC')->limit(5)->get();
		$nofi2 = Nofication::with('postes')->orderBy('nofication_id','DESC')->limit(1)->get();

    	//SEO
		foreach ($category_by_name as $key => $value) {
			$meta_desc = "Loại câu hỏi: ".$value->category_name;
			$meta_title = "Loại câu hỏi: ".$value->category_name;
			$url_canonical =$request->url();
		}
		//-----------------------
		
		return view('student.page.category.show')->with(compact('meta_desc','meta_title','url_canonical','category_post', 'category_by_id', 'category_by_name','studentSS','nofi','nofi2','posthot'));
	}

    //ADMIN
	public function AuthLogin(){
		$admin_id=Session::get('admin_id');
		if($admin_id){
			return Redirect::to('admin-home');
		}else{
			return Redirect::to('admin-login')->send();
		}
	}
	
	public function category_list(Request $request){
    	//SEO
		$meta_desc = "Danh sách danh mục";
		$meta_title = "Danh sách danh mục";
		$url_canonical =$request->url();
    	//--------------------------

		$list = Category::orderBy('category_id', 'DESC')->paginate(5);
		return view('admin.pages.category.list')->with(compact('meta_desc','meta_title','url_canonical','list'));
	}

	public function category_search(Request $request){
		$this->AuthLogin();
      //SEO
		$meta_desc = "Tìm kiếm";
		$meta_title = "Tìm kiếm";
		$url_canonical = $request->url();
      //---------------
		
		$keywords = $request->keywords_submit;
		$search = Category::where('category_name','like','%'.$keywords.'%')
		->orderBy('category_id','DESC')->get();
		return view('admin.pages.category.search')->with(compact('meta_desc','meta_title','url_canonical','search'));
	}

	public function category_open(Request $request){
		$this->AuthLogin();
      //SEO
		$meta_desc = "Thêm mới danh mục";
		$meta_title = "Thêm mới danh mục";
		$url_canonical = $request->url();
      //---------------
		return view('admin.pages.category.add')->with(compact('meta_desc','meta_title','url_canonical'));
	}

	public function category_add(Request $request){
		$data = $request->all();
		$category = new Category();

		$category->category_name = $data['category_name'];
		$category->category_status = $data['category_status'];

		if ($data['category_name']=='') {
			Session::put('message','<div class="alert alert-danger">Không được để trống!</div>');
			return Redirect::to('them-moi-danh-muc');
		}else{
			$result = $category->save(); 
			if($result){
				Session::put('message','<div class="alert alert-success">Thêm mới danh mục thành công!</div>');
				return Redirect::to('danh-sach-danh-muc');
			}else{
				Session::put('message','<div class="alert alert-danger">Không thể thêm mới danh mục học!</div>');
				return Redirect::to('them-moi-danh-muc');
			}
		}
	}

	public function category_openupdate(Request $request,$category_id){
		$this->AuthLogin();
		$category_update = Category::find($category_id);
		$categoryId = Category::where('category_id',$category_id)->get();
		foreach ($categoryId as $key => $value){
         //SEO
			$meta_desc = "Cập nhật danh mục ".$value->category_name;
			$meta_title = "Cập nhật danh mục ".$value->category_name;
			$url_canonical = $request->url();
         //---------------
		}
		return view('admin.pages.category.update')->with(compact('category_update','meta_desc','meta_title','url_canonical'));
	}

	public function category_update(Request $request, $category_id){
		$this->AuthLogin();
		$data = $request->all();
		$category = Category::find($category_id);

		$category->category_name = $data['category_name'];

		if ($data['category_name']=='') {
			Session::put('message','<div class="alert alert-danger">Không được để trống!</div>');
			return Redirect::to('cap-nhat-danh-muc/'.$category_id);
		}else{
			$result = $category->save();
			if($result){
				Session::put('message','<div class="alert alert-success">Cập nhật danh mục thành công!</div>');
				return Redirect::to('danh-sach-danh-muc');
			}else{
				Session::put('message','<div class="alert alert-danger">Không thể cập nhật danh mục!</div>');
				return Redirect::to('cap-nhat-danh-muc/'.$category_id);
			} 
		}
	}

	public function category_active($category_id){
		$this->AuthLogin();
		$category = Category::find($category_id);
		$category->category_status=1;
		$category->save();

		Session::put('message','<div class="alert alert-warning">Đã ẩn trạng thái!</div>');
		return Redirect::to('danh-sach-danh-muc');
	}
	
	public function category_unactive($category_id){
		$this->AuthLogin();
		$category = Category::find($category_id);
		$category->category_status=0;
		$category->save();

		Session::put('message','<div class="alert alert-warning">Đã hiển thị trạng thái!</div>');
		return Redirect::to('danh-sach-danh-muc'); 
	}

	public function category_delete($category_id){
		$this->AuthLogin(); 
		$del = Category::find($category_id);
		$post = Post::where('category_id', $category_id)->get();
		foreach($post as $key => $value){
			$value->category_id=0;
			$value->save();
		}
		$del->delete();
		Session::put('message','<div class="alert alert-success">Xóa thành công!</div>');
		return Redirect::to('danh-sach-danh-muc');
	}
}
