<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;

Route::get('/', [PostController::class, 'index']);

Route::get('/blog/post/{post}/edit', [PostController::class, 'edit']);
Route::post('/blog/post/{post}/edit', [PostController::class, 'store']);

Route::get('/blog/post/add', [PostController::class, 'add']);
Route::post('/blog/post/add', [PostController::class, 'store']);

Route::get('/post/{post}/delete', [PostController::class, 'delete']);

Route::get('/blog/post/{post}', [CommentController::class, 'index']);

Route::get('/blog/post/{post}/comment/add', [CommentController::class, 'add']);
Route::post('/blog/post/{post}/comment/add', [CommentController::class, 'store']);

Route::get('/blog/post/{post}/comment/{comment}/delete', [CommentController::class, 'drop']);

Route::get('/moderate', [CommentController::class, 'moderation']);
Route::get('/moderate/{comment}/approve', [CommentController::class, 'approved']);
Route::get('/moderate/{comment}/delete', [CommentController::class, 'delete']);