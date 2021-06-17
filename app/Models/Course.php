<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'course_name'
    ];
    protected $primaryKey = 'course_id';
    protected $table = 'tbl_course';

    public function course_student(){
        return $this->hasMany('App\Models\StudentInfo', 'course_id');
    }
}
