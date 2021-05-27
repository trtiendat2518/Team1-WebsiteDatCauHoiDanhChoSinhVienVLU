<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public $timestamp = false;
    protected $fillable = [
    	'student_name', 'student_email', 'student_password', 'student_course', 'student_status', 'updated_at', 'created_at'
    ];
    protected $primaryKey = 'student_id';
    protected $table = 'tbl_student';

    public function comments(){
        return $this->hasMany('App\Models\Comment', 'student_id');
    }
}
