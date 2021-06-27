<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'admin_name', 'admin_email', 'admin_password', 'admin_role'
    ];
    protected $primaryKey = 'admin_id';
    protected $table = 'tbl_admin';
}
