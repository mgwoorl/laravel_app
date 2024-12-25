<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;

Route::resource('/', PostController::class);
Route::resource('posts', PostController::class);
Route::post('posts/{post}/comments', [PostController::class, 'storeComment'])->name('comments.store');
Route::resource('comments', CommentController::class)->only(['destroy']);