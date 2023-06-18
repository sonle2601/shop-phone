<?php

namespace App\Http\Service;


class UploadService {
    public function upload($request ){
        if($request->hasFile('ProImage')){
            return true;
        }else{
            return 100;
        }
    }
}