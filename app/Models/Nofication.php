<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nofication extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'post_id', 'student_id', 'nofication_kind', 'nofication_code', 'nofication_status'
    ];
    protected $primaryKey = 'nofication_id';
    protected $table = 'tbl_nofication';  

    public function postes(){
        return $this->belongsTo('App\Models\Post', 'post_id');
    }
    public function studentes(){
        return $this->belongsTo('App\Models\Student', 'student_id');
    }              
}
