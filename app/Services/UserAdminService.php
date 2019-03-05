<?php

namespace App\Services;

use Takeoo\Service\Service;
use App\Repositories\UserAdmins;
use App\UserAdmin;

class UserAdminService 
{
    private $_useradmins;

    public function __construct(UserAdmins $useradmins) {
        $this->_useradmins = $useradmins;
    }

    public function findAll() {
        return $this->_useradmins->findAll();
    }

    public function findByUsername($request){
        $username = $request->get("username");
        $password = $request->get("password");
        return $this->_useradmins->findByUsername($username,$password);
    }
    
    public function save($request) {
        $useradmin = new UserAdmin;
        $useradmin->username = $request->get("username");
        $useradmin->password = $request->get("password");
        $this->_useradmins->save($useradmin);
        return $useradmin; 
    }

}
