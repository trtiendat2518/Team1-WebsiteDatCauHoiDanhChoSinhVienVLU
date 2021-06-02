<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use App\Models\Like;
use App\Models\Post;
use App\Models\Student;
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
        if(!$unlike){
            $data = $request->all();
            $like = new Like();
            $like->post_id = $post_id;
            $like->student_id = Session::get('student_id');
            $like->like_quantity = $data['like_quantity'];
            $like->save();
        }
        return response()->json(['liking'=>$post->likes->count()]);
    }
}
