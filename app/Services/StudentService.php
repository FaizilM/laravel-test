<?php

namespace App\Services;

use Takeoo\Service\Service;
use App\Repositories\Students;
use App\Student;

class StudentService 
{
    private $_students;

    public function __construct(Students $students) {
        $this->_students = $students;
    }

    public function findAll() {
        return $this->_students->findAll();
    }

    public function save($request) {
        $student = new Student;
        $student->name = $request->get("name");
        $student->password = $request->get("password");
        $student->email = $request->get("email");
        return $this->_students->save($student);
    }

}
