<?php

namespace App\Repositories;

use App\Employee;

class Employees
{

    public function findAll() {
        return Employee::all();
    }

    public function save(Employee $Employee) {
     
        return $Employee->save();
    }

}
