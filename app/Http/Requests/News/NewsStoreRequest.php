<?php

namespace App\Http\Requests\News;

use Illuminate\Foundation\Http\FormRequest;

class NewsStoreRequest extends FormRequest
{


    public function rules(): array
    {
        return [
            'description' => ['required'],
            'image' => ['required'],
            'name' => ['required'],
            'summary' => ['required'],
        ];
    }
}
