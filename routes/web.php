<?php

use App\Livewire\Home;
use App\Livewire\Post;
use App\Livewire\PostEdit;
use App\Livewire\Posts;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class)->name('home');
Route::get('/posts', Posts::class)->name('posts');
Route::get('/post/{post}', Post::class)->name('post.show');
Route::get('/post/edit/{post}', PostEdit::class)->name('post.edit');
// Route::get('/post/create', [PostController::class, 'create']);
// // Route::get('/user/create', [UserController::class, 'create']);
