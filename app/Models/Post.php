<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
    	'post_student', 'post_title', 'category_id', 'post_content', 'updated_at', 'created_at'
    ];
    protected $primaryKey = 'post_id';
    protected $table = 'tbl_post';

    public function comments(){
        return $this->hasMany('App\Models\Comment', 'post_id')->orderBy('comment_id','DESC');
    }
    public function student(){
        return $this->belongsTo('App\Models\Student','post_student_name');
    }
}
