<?php

namespace App\Imports;

use App\Models\Post;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class PostImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Post([
            'student_id'=>$row['student_id'],
            'post_title'=>$row['title'],
            'category_id'=>$row['category_id'],
            'post_content'=>$row['content'],
            'created_at'=>$row['date'],
        ]);
    }
}
