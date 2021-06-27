<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use App\Models\Reply;
use App\Models\Post;
use Validator;
use Session;
session_start();

class ReplyController extends Controller
{
    public function reply_post(Request $request, $post_id){
        $data = $request->validate([
            'reply_content'=>'bail|required|min:50|max:600',
        ],[
            'reply_content.required'=>'Nội dung không được để trống',
            'reply_content.min'=>'Nội dung ít nhất có 50 ký tự',
            'reply_content.max'=>'Nội dung không quá 600 ký tự',
        ]);

        $post = Post::where('post_id',$post_id)->get();
        foreach ($post as $key => $value) {
            if($value->post_reply==''){
                $reply = new Reply();
                $reply->post_id = $post_id;
                $reply->admin_id = Session::get('admin_id');
                $reply->reply_content = $data['reply_content'];

                if($data['reply_content']==''){
                    Session::put('message','<div class="alert alert-danger">Không được để trống!</div>');
                    return Redirect::to('xem-cau-hoi/'.$post_id);
                }else{
                    $reply->save();

                    $value->post_reply = $reply->reply_content;
                    $value->save();
                    Session::put('message','<div class="alert alert-success">Trả lời thành công!</div>');
                    return Redirect::to('danh-sach-cau-hoi'); 
                }
            }else{
                $replyUp = Reply::where('post_id', $post_id)->get();
                foreach ($replyUp as $key => $value2) {
                    $value2->reply_content = $data['reply_content'];
                    $value2->save();
                    $value->post_reply = $value2->reply_content;
                    $value->save();
                    Session::put('message','<div class="alert alert-success">Cập nhật câu trrả lời thành công!</div>');
                    return Redirect::to('danh-sach-cau-hoi');
                }
            }
        } 
    }

    public function reply_posthot(Request $request, $post_id){
        $data = $request->validate([
            'reply_content'=>'bail|required|min:50|max:600',
        ],[
            'reply_content.required'=>'Nội dung không được để trống',
            'reply_content.min'=>'Nội dung ít nhất có 50 ký tự',
            'reply_content.max'=>'Nội dung không quá 600 ký tự',
        ]);

        $post = Post::where('post_id',$post_id)->get();
        foreach ($post as $key => $value) {
            if($value->post_reply==''){
                $reply = new Reply();
                $reply->post_id = $post_id;
                $reply->admin_id = Session::get('admin_id');
                $reply->reply_content = $data['reply_content'];

                if($data['reply_content']==''){
                    Session::put('message','<div class="alert alert-danger">Không được để trống!</div>');
                    return Redirect::to('xem-cau-hoi-dang-chu-y/'.$post_id);
                }else{
                    $reply->save();

                    $value->post_reply = $reply->reply_content;
                    $value->save();
                    Session::put('message','<div class="alert alert-success">Trả lời thành công!</div>');
                    return Redirect::to('cau-hoi-dang-chu-y'); 
                }
            }else{
                $replyUp = Reply::where('post_id', $post_id)->get();
                foreach ($replyUp as $key => $value2) {
                    $value2->reply_content = $data['reply_content'];
                    $value2->save();
                    $value->post_reply = $value2->reply_content;
                    $value->save();
                    Session::put('message','<div class="alert alert-success">Cập nhật câu trrả lời thành công!</div>');
                    return Redirect::to('cau-hoi-dang-chu-y');
                }
            }
        } 
    }
}