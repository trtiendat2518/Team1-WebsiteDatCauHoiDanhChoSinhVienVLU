<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public $timestamps = false;
    protected $fillable = [
    	'post_id', 'student_id', 'comment_content', 'created_at'
    ];
    protected $primaryKey = 'comment_id';
    protected $table = 'tbl_comment';                
    
    public function post(){
    	return $this->belongsTo('App\Models\Post', 'post_id');
    }
    public function student(){
    	return $this->belongsTo('App\Models\Student', 'student_id');
    }
}
