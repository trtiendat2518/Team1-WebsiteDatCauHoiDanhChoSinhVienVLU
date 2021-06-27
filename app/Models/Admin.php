<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'admin_info_id', 'admin_name', 'admin_email', 'admin_password', 'admin_role', 'admin_status'
    ];
    protected $primaryKey = 'admin_id';
    protected $table = 'tbl_admin';

    public function info(){
        return $this->belongsTo('App\Models\AdminInfo', 'admin_info_id');
    }
}
