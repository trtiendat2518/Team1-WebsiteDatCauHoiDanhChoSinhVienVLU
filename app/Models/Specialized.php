<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specialized extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'faculty_code','specialized_name'
    ];
    protected $primaryKey = 'specialized_id';
    protected $table = 'tbl_specialized';

    public function specialized_student(){
        return $this->hasMany('App\Models\StudentInfo', 'specialized_id');
    }
}
