<?php

namespace App\Imports;

use App\Models\Admin;
use Maatwebsite\Excel\Concerns\ToModel;

class UserImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Admin([
            'admin_name'=>$row[0],
            'admin_email'=>$row[1],
            'admin_password'=>$row[2],
            'admin_role'=>$row[3],
        ]);
    }
}
