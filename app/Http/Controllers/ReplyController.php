<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use App\Models\Reply;
use App\Models\Post;
use DB;
use Session;
session_start();

class ReplyController extends Controller
{
    public function post_reply($post_id){
        return $post_d = Post::find($post_id);
    }
}
