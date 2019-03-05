<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;

class StudentController extends Controller
{
    private $_studentService;

    public function __construct(){
        $this->_studentService = $this->getService("StudentService");
    }

    public function index() {
        $result = $this->_studentService->findAll();
        return $result;
    }

    public function indexWeb() {
        $studentsList = $this->_studentService->findAll();
        return View::make("student/list", compact('studentsList'));
    }    

    public function save(Request $request) {
        print_r($request->all());
        exit;
        $result = $this->_studentService->save($request);
        return "saved";
    }

}
