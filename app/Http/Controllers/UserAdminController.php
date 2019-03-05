<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use Auth;
use Session;
class UserAdminController extends Controller
{
    private $_useradminService;

    public function __construct(){
        $this->_useradminService = $this->getService("UserAdminService");
    }

    public function index() {
        $result = $this->_useradminService->findAll();
        return $result;
    }

    public function list() {
        $useradminsList = $this->_useradminService->findAll();
        return View::make("useradmin/list", compact('useradminsList'));
    }    

    public function findByUsername(Request $request){
      
        $useradmin = $this->_useradminService->findByUsername($request);
        if(count($useradmin)==0){
        $result = array(
            "status"=>"error",
        );       
    }else{
        $result = array(
            "status"=>"success",
            "data"=>$useradmin
        );
        
        // $useradmin = $this->_useradminService->findByUsername($request);
        // Session::put('user', $useradmin);
        // $request->session()->put('key', 'value');
        // Session::put('username',$useradmin);
        // Session::save();
    }
    session()->push('user', $useradmin);
    session('user');
        return json_encode($result);
    }

    // public function logout(Request $request) {
    //     // Auth::logout();
    //     return redirect('/login');
    //   }


    public function save(Request $request) {
        $useradmin = $this->_useradminService->save($request);
        $result = array(
            "status"=>"success",
            "data"=>$useradmin
        ); 
        return json_encode($result);
    }


   
    }

