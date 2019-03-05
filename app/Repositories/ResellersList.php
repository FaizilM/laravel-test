<?php

namespace App\Repositories;

use App\ResellerList;

class ResellersList
{

     /**
     * Find all.
     * 
     * @params 
     * return  model $ResellerList
     */
    public function findAll() {
        return ResellerList::all();
    }

     /**
     * save reseller list.
     * 
     * @params model name "Resellerlist" variable name $Resellerlist
     * return object $Reseller
     */
    public function save(Resellerlist $Resellerlist) {
        return $Resellerlist->save();
    }

     /**
     * Find reseller by id.
     * 
     * @params int $id
     * return ResellerList $id
     */
    public function findById($id){
        return ResellerList::find($id);
    }

      /**
     * Update reseller value.
     * 
     * @params model name "Resellerlist" variable name $Resellerlist
     * return object $Reseller
     */
    public function update(Resellerlist $Resellerlist) {
        return $Resellerlist->update();
    }     

     /**
     * Update status from active state to inactive state.
     * 
     * @params model name "Resellerlist" variable name $Resellerlist
     * return object $Reseller
     */
    public function updateStatus(Resellerlist $Resellerlist){
        return $Resellerlist->update();
    }

}
