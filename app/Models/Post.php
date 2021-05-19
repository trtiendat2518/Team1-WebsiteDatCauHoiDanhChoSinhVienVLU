<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public $timestamp = false;
    protected $fillable = [
    	'post_student', 'post_title', 'category_id', 'post_content', 'updated_at', 'created_at'
    ];
    protected $primaryKey = 'post_id';
    protected $table = 'tbl_post';
}
