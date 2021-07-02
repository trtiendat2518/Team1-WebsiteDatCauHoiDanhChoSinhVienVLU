<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Statistic extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'statistic_date','statistic_post', 'statistic_like'
    ];
    protected $primaryKey = 'statistic_id';
    protected $table = 'tbl_statistic';
}
