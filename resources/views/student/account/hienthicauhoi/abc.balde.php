<footer class="panel-footer" style="background: #fff0;">
	<div class="row">
		<div class="col-sm-7 text-right text-center-xs">                
			<ul class="pagination m-t-none m-b-none" style="background: #fff0;">
				<span>{!! $post->render("pagination::bootstrap-4") !!}</span>
			</ul>
		</div>
	</div>
</footer>

	public function index(){
		$category_post = Category::orderBy('category_id', 'DESC')->get();
		$post = Post::join('tbl_category','tbl_category.category_id','=','tbl_post.category_id')
		->orderBy('post_id','DESC')->paginate(2);
		return view('student.page.home')->with(compact('category_post','post'));
	}