<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'post_id', 'admin_id', 'reply_content', 'reply_code'
    ];
    protected $primaryKey = 'reply_id';
    protected $table = 'tbl_reply';                
    
    public function post(){
        return $this->belongsTo('App\Models\Post', 'post_id');
    }
}
