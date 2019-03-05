<?php

namespace App\Services;

use Takeoo\Service\Service;
use App\Repositories\Employees;
use App\Employee;

class EmployeeService 
{
    private $_employees;

    public function __construct(Employees $employees) {
        $this->_employees = $employees;
    }

    public function findAll() {
        return $this->_employees->findAll();
    }

    public function save($request) {
        $employee = new Employee;
        $employee->name = $request->get("name");
        
        return $this->_employees->save($employee);
    
    }

}
