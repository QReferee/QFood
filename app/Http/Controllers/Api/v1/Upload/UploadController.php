<?php

namespace App\Http\Controllers\Api\v1\Upload;

use App\Http\Controllers\Controller;
use App\Http\Requests\Upload\UploadRequest;
use App\Services\Upload\UploadServices;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function upload(UploadRequest $request)
    {
        return (new UploadServices($request->all()))->upload();
    }
}
