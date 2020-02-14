<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Helper\FileHelper;
use App\Helper\ConstantsHelper as Constants;
use Illuminate\Http\Request;

class FileController extends Controller
{

    public function doUpload(Request $r){
        $f = new FileHelper;
        $fh = $f->ValidateFile($r->all());
        if($fh == 'OK'){
            $u = (Constants::file_up_encrypt) ?
                 $f->UploadEnc($r['directory'], 
                               $r['file'])

                               :
            
                 $f->UploadNonEnc($r['directory'], 
                                  $r['file'], 
                                  $r->file('file')->getClientOriginalName());
                return $u;
            }
        return $fh;
     }


    public function fileDelete(Request $r)
    {
        $f = new FileHelper;
        $fh = $f->ValidateDelete($r->all());
        if($fh == 'OK'){

            $u = $f->DeleteFile($r['directory'], 
                                $r['file']);
            return $u;
        }
        return $fh;



    }

    public function fileReplace()
    {

    }
}
