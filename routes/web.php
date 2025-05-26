<?php

use App\Livewire\Home;
use App\Livewire\Login;
use App\Livewire\Post;
use App\Livewire\PostCreate;
use App\Livewire\PostEdit;
use App\Livewire\Posts;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class)->name('home');
Route::get('/posts', Posts::class)->name('posts');
Route::get('/login', Login::class)->name('login');
Route::get('/post/create', PostCreate::class)->name('post.create');
Route::get('/post/{post}', Post::class)->name('post.show');
Route::get('/post/edit/{post}', PostEdit::class)->name('post.edit');
