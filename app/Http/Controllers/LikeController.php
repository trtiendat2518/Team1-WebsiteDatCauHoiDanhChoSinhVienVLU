<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use App\Models\Like;
use App\Models\Post;
use App\Models\Student;
use App\Models\Nofication;
use DB;
use Mail;
use Session;
use Validator;
session_start();

class LikeController extends Controller
{
    public function like(Request $request, $post_id){
        $post = Post::find($post_id);
        $unlike = Like::where('post_id',$post_id)->where('student_id',Session::get('student_id'))->delete();
        if($unlike){
            $delnofi = Nofication::where('post_id',$post_id)
            ->where('student_id',Session::get('student_id'))
            ->where('nofication_kind','=','Like')->delete();
        }else if(!$unlike){
            $data = $request->all();
            $like = new Like();
            $like->post_id = $post_id;
            $like->student_id = Session::get('student_id');
            $like->like_code = "LIKE".md5(time().rand(1000,9999).$post_id);
            $like->like_quantity = $data['like_quantity'];
            $like->save();

            $nofi = new Nofication();
            $nofi->post_id = $post_id;
            $nofi->student_id = Session::get('student_id');
            $nofi->nofication_kind = "Like";
            $nofi->nofication_code = $like->like_code;
            $nofi->nofication_status = 0;
            date_default_timezone_set('Asia/Ho_Chi_Minh');
            $nofi->nofication_created = now();
            $nofi->save();
        }
        $post->post_like = $post->likes->count();
        $post->save();
        return response()->json(['liking'=>$post->likes->count()]);
    }
}
