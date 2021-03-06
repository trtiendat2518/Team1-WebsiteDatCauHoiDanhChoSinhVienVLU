<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public $timestamps = false;
    protected $fillable = [
    	'student_id', 'post_title', 'category_id', 'post_content','post_like', 'post_pin', 'post_reply', 'created_at'
    ];
    protected $primaryKey = 'post_id';
    protected $table = 'tbl_post';

    public function comments(){
        return $this->hasMany('App\Models\Comment', 'post_id')->orderBy('comment_id','DESC');
    }
    public function student(){
        return $this->belongsTo('App\Models\Student','student_id');
    }
    public function likes(){
        return $this->hasMany('App\Models\Like', 'post_id');
    }
    public function category(){
        return $this->belongsTo('App\Models\Category','category_id');
    }
}
