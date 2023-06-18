<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Service\UploadService;

class LoadFileController extends Controller
{
    protected $upload;

    public function __construct(UploadService $upload){
        $this->upload = $upload;
    }

    public function upload(Request $request ){
        $this->upload->upload($request);
    }
}