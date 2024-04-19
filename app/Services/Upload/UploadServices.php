<?php

namespace App\Services\Upload;

use Illuminate\Support\Facades\Storage;

class UploadServices
{
    protected $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function upload()
    {

        $path = Storage::disk('public')->putFile('image', $this->data['file']);

        return response()->json([
            'file' => '/storage/' . $path
        ]);
    }
}
