<?php

namespace App\Http\Requests\Upload;

use Illuminate\Foundation\Http\FormRequest;

class UploadRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg'
        ];
    }
}
