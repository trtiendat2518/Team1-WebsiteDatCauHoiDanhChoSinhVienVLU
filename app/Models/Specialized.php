<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specialized extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'faculty_id','specialized_name'
    ];
    protected $primaryKey = 'specialized_id';
    protected $table = 'tbl_specialized';

    public function specialized_student(){
        return $this->hasMany('App\Models\StudentInfo', 'specialized_id');
    }
    public function faculty(){
        return $this->belongsTo('App\Models\Faculty', 'faculty_id');
    }
}
