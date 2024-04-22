<?php

namespace App\Http\Controllers\Api\v1\News;

use App\Http\Controllers\Controller;
use App\Http\Requests\News\NewsStoreRequest;
use App\Models\News;
use App\Services\News\NewsStoreServices;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Inertia\Inertia;

class NewsController extends Controller
{
    public function index()
    {
        return Inertia::render('Admin/News', [
            'news' => News::query()->orderBy('id', 'desc')->get()
        ]);
    }

    public function store(NewsStoreRequest $request)
    {
        return (new NewsStoreServices($request->validated()))->create();
    }

    public function create()
    {
        return Inertia::render('Admin/Create');
    }

    public function delete(int $id)
    {
        News::query()->where('id', $id)->delete();
        return to_route('admin.news.index');
    }
}
