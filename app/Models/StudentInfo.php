<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentInfo extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'student_info_avatar', 'student_info_gender', 'student_info_date', 'student_info_address', 'course_id', 'faculty_id', 'specialized_id', 'student_info_note'
    ];
    protected $primaryKey = 'student_info_id';
    protected $table = 'tbl_student_info';

    public function student(){
        return $this->belongsTo('App\Models\Student', 'student_id');
    }
}
