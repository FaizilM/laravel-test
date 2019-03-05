<?php

namespace App\Repositories;

use App\UserAdmin;

class UserAdmins
{

    public function findAll() {
        return UserAdmin::all();
    }

    public function save(UserAdmin $UserAdmin) {
     
        return $UserAdmin->save();
    }

    public function findByUsername($username,$password){
        
        return UserAdmin::where('username',$username)->where('password',$password)->get();

    }   

}
