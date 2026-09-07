<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ExternalBlogController;

Route::apiResource('posts', PostController::class);


// External API Routes
Route::get('external-posts', [ExternalBlogController::class, 'fetchExternalPosts']);
Route::get('external-posts/{id}', [ExternalBlogController::class, 'fetchSingleExternalPost']);
Route::get('/blogs', [ExternalBlogController::class, 'showInWeb']);