<?php

namespace App\Http\Middleware;

use Closure;
use Response;
use Session;
class CheckUserSession
{   
   

    public function handle($request , Closure $next)
    {           
        if (!$request->session()->exists('user')) {
            // user value cannot be found in session
            
            return json_encode(array('error'=>"session not exist"));
        }
        
        return ($next($request));
       
    }
    }
    // {  
    //     if(!isset($_SERVER['password'])){  
    //         return Response::json(array('error'=>'Please set custom header'));  
    //     }  
  
    //     if($_SERVER['password'] != 'password'){  
    //         return Response::json(array('error'=>'wrong custom header'));  
    //     }  
  
    //     return $next($request);  
    // } 


?>