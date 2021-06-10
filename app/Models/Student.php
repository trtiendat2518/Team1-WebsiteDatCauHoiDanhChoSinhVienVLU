<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public $timestamps = false;
    protected $fillable = [
    	'student_info_id', 'student_avatar', 'student_name', 'student_email', 'student_password', 'student_course', 'student_status'
    ];
    protected $primaryKey = 'student_id';
    protected $table = 'tbl_student';

    public function comments(){
        return $this->hasMany('App\Models\Comment', 'student_id');
    }
    public function info(){
        return $this->belongsTo('App\Models\StudentInfo', 'student_info_id');
    }   
    public function posted(){
        return $this->hasMany('App\Models\Post', 'student_id');
    }
}
