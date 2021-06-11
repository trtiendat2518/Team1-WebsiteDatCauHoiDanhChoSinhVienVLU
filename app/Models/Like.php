<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'post_id', 'student_id', 'like_code' ,'like_quantity'
    ];
    protected $primaryKey = 'like_id';
    protected $table = 'tbl_like';                
    
    public function post(){
        return $this->belongsTo('App\Models\Post', 'post_id');
    }
    public function student(){
        return $this->belongsTo('App\Models\Student', 'student_id');
    }
}
