<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use App\Models\Like;
use App\Models\Post;
use App\Models\Student;
use App\Models\Nofication;
use Session;
session_start();

class NoficationController extends Controller
{
    public function nofication_list(Request $request){
        //SEO
        $meta_desc = "Website đặt câu hỏi dành cho sinh viên Văn Lang";
        $meta_title = "Trang chủ";
        $url_canonical = $request->url();
        //---------------
        $nofi2 = Nofication::where('nofication_mine',md5(Session::get('student_id')))
        ->where('nofication_status',0)->get();
        $nofi2_count = $nofi2->count();
        
        $nofi = Nofication::with('postes','studentes')->orderBy('nofication_id','DESC')->limit(5)->get();
        $list = Nofication::with('postes','studentes')->orderBy('nofication_created','DESC')
        ->paginate(10);
        $studentSS = Student::with('info')->where('student_id',Session::get('student_id'))
        ->limit(1)->get();

        return view('student.page.nofication.list')->with(compact('meta_desc','meta_title','url_canonical','list','nofi','nofi2','studentSS','nofi2_count'));
    }

    public function nofication_readone($nofication_id){
        $nofi = Nofication::find($nofication_id);
        $nofi->nofication_status=1;
        $nofi->save();
    }

    public function nofication_delnofi(Request $request){
        Nofication::find($request->input('id'))->delete();
    }
    
    public function nofication_readall(){
        $minde_id = md5(Session::get('student_id'));
        $nofi = Nofication::where('nofication_status',0)->where('nofication_mine',$minde_id)->get();
        
        foreach($nofi as $val){
            $val->nofication_status=1;
            $val->save();
        }
    }
}
