<?php

use App\Http\Controllers\Api\v1\News\NewsController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome');
});

Route::get('/news', function () {
    return view('news', [
        'news' => \App\Models\News::query()->get()
    ]);
});

Route::get('/news/{id}', function ($id) {
    return view('post', [
        'news' => \App\Models\News::query()->where('id', $id)->get()
    ]);
});

Route::prefix('/admin/admin/')->name('admin.')->group(function () {
    Route::prefix('news')->name('news.')->group(function () {
        Route::get('/', [NewsController::class, 'index'])->name('index');
        Route::get('/create', [NewsController::class, 'create'])->name('create');
        Route::post('/store', [NewsController::class, 'store'])->name('store');
        Route::get('/delete/{id}', [NewsController::class, 'delete'])->name('delete');
    });
});

require __DIR__.'/auth.php';
