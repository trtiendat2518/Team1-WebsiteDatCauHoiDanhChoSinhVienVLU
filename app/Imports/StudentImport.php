<?php

namespace App\Imports;

use App\Models\Student;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class StudentImport implements ToModel, WithValidation, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Student([
            'student_name'=>$row['name'],
            'student_email'=>$row['email'],
            'student_password'=>md5($row['password']),
            'student_status'=>$row['status'],
        ]);
    }

    public function rules(): array
    {
        return [
            'name' => 'alpha_spaces',
            'email' => 'unique:tbl_student,student_email',
        ];
    }

    public function customValidationMessages()
    {
        return [
            'name.alpha_spaces' => 'Tên sinh viên không chứa số và ký tự đặc biệt',
            'email.unique' => 'Email này đã tồn tại',
        ];
    }
}
