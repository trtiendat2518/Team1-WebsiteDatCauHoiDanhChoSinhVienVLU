<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $timestamps = false;
    protected $fillable = [
    	'category_name'
    ];
    protected $primaryKey = 'category_id';
    protected $table = 'tbl_category';

    public function posts(){
        return $this->hasMany('App\Models\Post', 'category_id');
    }
}
