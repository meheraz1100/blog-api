<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ExternalBlogController;
use Illuminate\Support\Facades\Route;

// ১. External API (Public)
Route::get('/external-blogs', [ExternalBlogController::class, 'showInWeb'])->name('external.blogs');

// ২. সকল ইউজারের পোস্টের ফিড (Public Home Page)
Route::get('/', [PostController::class, 'allPosts'])->name('home');
Route::get('/all-blogs', [PostController::class, 'allPosts'])->name('blogs.all');

// ৩. Protected Routes (লগইন করা ইউজারদের জন্য)
Route::middleware(['auth'])->group(function () {
    Route::get('/my-blogs', [PostController::class, 'myPosts'])->name('blogs.my');

    Route::post('/my-blogs/store', [PostController::class, 'store'])
        ->name('blogs.store');

    Route::delete('/posts/{post}', [PostController::class, 'destroy'])
        ->name('blogs.destroy');
});

require __DIR__.'/auth.php';