<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminInfo extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'faculty_id', 'admin_info_avatar', 'admin_info_gender', 'admin_info_date', 'admin_info_phone', 'admin_info_address'
    ];
    protected $primaryKey = 'admin_info_id';
    protected $table = 'tbl_admin_info';

    public function admin(){
        return $this->belongsTo('App\Models\Admin', 'admin_id');
    }
    public function faculty(){
        return $this->belongsTo('App\Models\Faculty','faculty_id');
    }
}
