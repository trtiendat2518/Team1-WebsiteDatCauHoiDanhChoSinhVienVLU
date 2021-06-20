<?php

namespace App\Imports;

use App\Models\Post;
use Maatwebsite\Excel\Concerns\ToModel;

class PostImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Post([
            'student_id'=>$row[0],
            'post_title'=>$row[1],
            'category_id'=>$row[2],
            'post_content'=>$row[3],
            'post_like'=>$row[4],
            'post_reply'=>$row[5],
            'post_pin'=>$row[6],
            'created_at'=>$row[7],
        ]);
    }
}
