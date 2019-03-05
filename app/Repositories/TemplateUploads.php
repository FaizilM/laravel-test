<?php

namespace App\Repositories;

use App\TemplateUpload;

class TemplateUploads
{

    public function save(Templateupload $Templateupload) {
        return $Templateupload->save();
    }

    public function saveFile(Templateupload $Templateupload){
        
    }
}

?>