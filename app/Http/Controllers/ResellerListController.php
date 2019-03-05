<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Utilities\Constants;
use View;

class ResellerListController extends Controller
{
    private $_resellerlistService;

    public function __construct(){
        $this->_resellerlistService = $this->getService("ResellerListService");
    }

    /**
     * Find all 
     * 
     * @params Request $request
     * return object $reseller
     */
    public function index() {
        $result = $this->_resellerlistService->findAll();
        return $result;
    }

    /**
     * Display reseller list in browser
     * 
     * return URL "/list" and Viewname "resellersList"
     */
    public function list() {
        $resellersList = $this->_resellerlistService->findAll();
        return View::make("resellerlist/list", compact('resellersList'));
    }    

    /**
     * Save the reseller value
     * 
     * @params Request $request
     * return object $reseller
     */
    public function save(Request $request) {
        $reseller = $this->_resellerlistService->save($request);
        return json_encode($reseller);   
    }

    /**
     * Find reseller by id.
     * 
     * @params int $id
     * return object $reseller
     */
    public function edit($id){  
        $reseller = $this->_resellerlistService->edit($id);
        return json_encode($reseller);
    }

    /**
     * Update reseller list
     * 
     * @params Request $request
     * return object $reseller
     */
    public function update(Request $request){
        $reseller = $this->_resellerlistService->update($request);
        return json_encode($reseller);
    }

    /**
     * Update status in reseller list
     * 
     * @params Request $request
     * return object $reseller
     */
    public function updateStatus(Request $request ){
        $reseller = $this->_resellerlistService->updateStatus($request);
        return json_encode($reseller);
    }
}
