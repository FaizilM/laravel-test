<?php

namespace App\Repositories;

use App\Student;

class Students
{

    public function findAll() {
        return Student::all();
    }

    public function save(Student $student) {
        return $student->save();
    }

}
