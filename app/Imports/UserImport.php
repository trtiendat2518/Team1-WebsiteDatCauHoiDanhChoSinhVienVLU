<?php

namespace App\Imports;

use App\Models\Admin;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class UserImport implements ToModel, WithValidation, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Admin([
            'admin_name'=>$row['name'],
            'admin_email'=>$row['email'],
            'admin_password'=>md5($row['password']),
            'admin_role'=>$row['role'],
        ]);
    }

    public function rules(): array
    {
        return [
            'name' => 'alpha_spaces',
            'email' => 'unique:tbl_admin,admin_email',
        ];
    }

    public function customValidationMessages()
    {
        return [
            'name.alpha_spaces' => 'Tên user không chứa số và ký tự đặc biệt',
            'email.unique' => 'Email này đã tồn tại',
        ];
    }
}
