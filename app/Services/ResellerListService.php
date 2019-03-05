<?php

namespace App\Services;

use Takeoo\Service\Service;
use App\Repositories\ResellersList;
use App\ResellerList;
use Carbon\Carbon;
use App\Utilities\Constants;

class ResellerListService 
{
    private $_resellerlist;

    public function __construct(Resellerslist $resellerlists) {
        $this->_resellerlist = $resellerlists;
    }
    
    /**
     * Find all 
     * 
     * @params Request $request
     * return object $reseller
     */
    public function findAll() {
        return $this->_resellerlist->findAll();
    }

    /**
     * Get the value and pass to repository
     * 
     * @params Request $request
     * return object $reseller
     */
    public function save($request) {
        $reseller = new ResellerList;
        $reseller->reseller_name    = $request->get("reseller_name");
        $reseller->email            = $request->get("email");
        $reseller->phone_no         = $request->get("phone_no");
        $reseller->username         = $request->get("username");
        $reseller->password         = $request->get("password");
        $reseller->confirm_password = $request->get("confirm_password");
        $reseller->website          = $request->get("website");
        $reseller->status           = "ACTIVE"; 
        $this->_resellerlist->save($reseller);
        return $reseller;
    }

    /**
     * Edit reseller by id.
     * 
     * @params int $id
     * return object $reseller
     */
    public function edit($id){
       $reseller = $this->_resellerlist->edit($id);
        return $reseller;
    }

    /**
     * Update reseller list by using findById.
     * 
     * @params Request $request
     * return object $reseller
     */
    public function update($request){
        $reseller = $this->_resellerlist->findById($request->get("id"));
        $reseller->reseller_name    = $request->get("reseller_name");
        $reseller->email            = $request->get("email");
        $reseller->phone_no         = $request->get("phone_no");
        $reseller->website          = $request->get("website");
        $reseller->updated_at       = Carbon::now(); 
        $this->_resellerlist->update($reseller);
        return $reseller;
    }

    /**
     * Update status by using findById.
     * 
     * @params int $request
     * return object $reseller
     */
    public function updateStatus($request){
        $reseller = $this->_resellerlist->findById($request->get("id"));  
        if($request->status="ACTIVE"){
            $reseller->status="INACTIVE";
            $this->_resellerlist->updateStatus($reseller);
        }
        return $reseller;       
    }
}
