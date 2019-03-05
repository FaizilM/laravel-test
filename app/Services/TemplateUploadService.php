<?php

namespace App\Services;

use Takeoo\Service\Service;
use App\Repositories\TemplateUploads;
use App\TemplateUpload;
use Illuminate\Http\Request;



class TemplateUploadService 
{
    private $_templateuploadlist;

    public function __construct(TemplateUploads $templateuploads) {
        $this->_templateuploadlist = $templateuploads;
    }

    public function save($request) {
       
        // $template = new TemplateUpload;
        // $template->theme_name        = $request->get("theme_name");
        // $template->theme_upload_name = $request->get("theme_upload_name")['themeFilename'];
        // $template->thumbnail_name    = $request->get("thumbnail_name")['thumbnailFilename'];
        // $this->_templateuploadlist->save($template);
        // return $template;
    }

    // public function saveFile($request){
  
    //     $File = $request -> file('file'); //line 1
    //           $sub_path = 'files'; //line 2
    //           $real_name = $File -> getClientOriginalName(); //line 3
            
    //           $destination_path = public_path($sub_path);  //line 4
                
    //           $File->move($destination_path,  $real_name);  //line 5
    //           return response()->json('File Save');
             
    //       }

    




}    

?>