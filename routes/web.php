<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/post/create', [PostController::class, 'create']);
Route::get('/post/edit/{post}', [PostController::class, 'edit'])->name('post.edit');
Route::get('/user/create', [UserController::class, 'create']);
Route::get('/posts', [PostController::class, 'index']);
Route::get('/post/{post}', [PostController::class, 'show'])->name('post.show');
