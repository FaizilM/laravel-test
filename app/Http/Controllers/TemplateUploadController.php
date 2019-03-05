<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Utilities\Constants;
use View;
use \File;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use App\TemplateUpload;

class TemplateUploadController extends Controller{
    private $_templateuploadService;

    public function __construct(){
        $this->_templateuploadService = $this->getService("TemplateUploadService");
    }

    public function save(Request $request) {
        $template = $this->_templateuploadService->save($request);
        return json_encode($template);   
    }

    

    // public function saveFile(Request $request){
       
    //                 $File = $request -> file('file'); //line 1
    //                 $sub_path = 'files/images'; //line 2
    //                 $real_name = $File -> getClientOriginalName(); //line 3
                  
    //                 $destination_path = public_path($sub_path);  //line 4
                      
    //                 $File->move($destination_path,  $real_name);  //line 5
    //                 return response()->json('File Save');
    // }
    // public function upload(Request $request){
    //     // $menu = new Menu;
    //     // $input = Input::all();




    //     return $request->all();
    //     exit;

    //     $uploadedFile = $request->file('file');
    //     $theme_upload = $uploadedFile->getClientOriginalName();
    //     Storage::disk('local')-putFileAs(
    //         'files/images/',$theme_upload,
    //         $uploadedFile,$theme_upload
    //     );
    //     $upload = new TemplateUpload;
    //     if(strpos($theme_upload, '.gif')){
    //         $upload->theme_upload_name = $theme_upload;
    //     }elseif(strpos($theme_upload,'.jpg')){
    //         $upload->thumbnail_name = $theme_upload;
    //     }else{
    //         $upload->theme_name = $theme_upload;
    //     }
    //     $upload->save();
    //     return response()->json([
    //         'id' => $upload->id
    //     ]);
       
    // }

    public function upload(Request $request)
    {
      $uploadedFile = $request->file('file');
      $theme_upload = $uploadedFile->getClientOriginalName();
      Storage::disk('local')->putFileAs(
          'files/images/'.$theme_upload,
          $uploadedFile,$theme_upload
      );
    $upload = new TemplateUpload;
        // theme already not exist
           // check the format

    if(strpos($theme_upload, '.gif')) {
        $upload->theme_upload_name = $theme_upload;
        
    } elseif(strpos($theme_upload, '.jpg')) {
        $upload->thumbnail_name = $theme_upload;
    }else{
        $upload->theme_name = $theme_upload;
    }

    $upload->save();

    return response()->json([
        'id' => $upload->id
    ]);
}
   
      
    


}

?>