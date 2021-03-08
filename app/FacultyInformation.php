<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FacultyInformation extends Model
{
    const DEPARTMENTS = [
            ['id' => 1, 'department_name' => 'Admin'],
            ['id' => 2, 'department_name' => 'BAPS'],
            ['id' => 3, 'department_name' => 'BSA'],
            ['id' => 4, 'department_name' => 'BSAIS'],
            ['id' => 5, 'department_name' => 'BSIS'],
            ['id' => 6, 'department_name' => 'BAEL'],
            ['id' => 7, 'department_name' => 'Support'],
        ];

    public function user ()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
 