<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'faculty_code','faculty_name'
    ];
    protected $primaryKey = 'faculty_id';
    protected $table = 'tbl_faculty';

    public function faculty_student(){
        return $this->hasMany('App\Models\StudentInfo', 'faculty_id');
    }
}
