<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;

class EmployeeController extends Controller
{
    private $_employeeService;

    public function __construct(){
        $this->_employeeService = $this->getService("EmployeeService");
    }

    public function index() {
        $result = $this->_employeeService->findAll();
        return $result;
    }

    public function list() {
        $employeesList = $this->_employeeService->findAll();
        return View::make("employee/list", compact('employeesList'));
    }    

    public function save(Request $request) {
       
        $result = $this->_employeeService->save($request);
        
        return "saved";
    }

}
