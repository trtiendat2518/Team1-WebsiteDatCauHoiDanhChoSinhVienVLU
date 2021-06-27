<?php

namespace App\Imports;

use App\Models\Student;
use Maatwebsite\Excel\Concerns\ToModel;

class StudentImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Student([
            'student_name'=>$row[0],
            'student_email'=>$row[1],
            'student_password'=>$row[2],
            'student_status'=>$row[3],
        ]);
    }
}
