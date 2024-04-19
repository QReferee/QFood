<?php

use App\Http\Controllers\Api\v1\News\NewsController;
use App\Http\Controllers\Api\v1\Telegram\TelegramController;
use App\Http\Controllers\Api\v1\Upload\UploadController;
use Illuminate\Support\Facades\Route;


Route::prefix('v1')->group(function () {
    Route::prefix('telegram')->group(function () {
        Route::post('notification', [TelegramController::class, 'notification']);
    });

    Route::prefix('news')->group(function () {
        Route::get('/', [NewsController::class, 'index']);
    });

    Route::post('/upload', [UploadController::class, 'upload']);
});
