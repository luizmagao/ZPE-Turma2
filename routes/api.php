<?php

use App\Http\Controllers\Categories\ListCategoriesController;
use App\Http\Controllers\Categories\PostCategoriesController;
use App\Http\Controllers\Categories\DeleteCategoriesController;
use App\Http\Controllers\Categories\GetCategoriesController;
use App\Http\Controllers\Categories\PutCategoriesController;
use App\Http\Controllers\Posts\PutPostsController;
use App\Http\Controllers\Posts\GetPostsController;
use App\Http\Controllers\Posts\ListPostsController;
use App\Http\Controllers\Posts\PostPostsController;
use App\Http\Controllers\Posts\DeletePostsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// categories REST FULL API
Route::prefix('categories')->group(function () {
    Route::get('', ListCategoriesController::class);
    Route::get('{category}', GetCategoriesController::class)->where(['category' => '[0-9]+']);
    Route::post('', PostCategoriesController::class);
    Route::put('{category}', PutCategoriesController::class)->where(['category' => '[0-9]+']);
    Route::delete('{category}', DeleteCategoriesController::class)->where(['category' => '[0-9]+']);
});

Route::prefix('posts')->group(function () {
    Route::get('', ListPostsController::class);
    Route::get('{posts}', GetPostsController::class);
    Route::post('', PostPostsController::class);
    Route::put('{posts}', PutPostsController::class);
    Route::delete('{posts}', DeletePostsController::class);
});
