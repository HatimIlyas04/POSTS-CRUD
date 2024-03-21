<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;

Route::resource('posts', PostController::class);

Route::resource('comments', CommentController::class)->only(['store']);
Route::get('comments/create/{postId}', [CommentController::class, 'create'])->name('comments.create');
