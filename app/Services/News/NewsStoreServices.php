<?php

namespace App\Services\News;

use App\Models\News;

class NewsStoreServices
{
    protected $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function create()
    {
        News::query()->create($this->data);
    }
}
