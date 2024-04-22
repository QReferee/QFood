<?php

use App\Http\Controllers\Api\v1\News\NewsController;
use App\Http\Controllers\ProfileController;
use App\Models\News;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome');
});

Route::get('/news', function () {
    return Inertia::render('News', [
        'news' => News::query()->orderBy('id', 'desc')->get()
    ]);
})->name('news');

Route::get('/news/{id}', function ($id) {
    return inertia('Post', [
        'post' => \App\Models\News::query()->where('id', $id)->first()
    ]);
})->name('page');

Route::prefix('/admin/admin/')->name('admin.')->group(function () {
    Route::prefix('news')->name('news.')->group(function () {
        Route::get('/', [NewsController::class, 'index'])->name('index');
        Route::get('/create', [NewsController::class, 'create'])->name('create');
        Route::post('/store', [NewsController::class, 'store'])->name('store');
        Route::get('/delete/{id}', [NewsController::class, 'delete'])->name('delete');
    });
});

require __DIR__.'/auth.php';
