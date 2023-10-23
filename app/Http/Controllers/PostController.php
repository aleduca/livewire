<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('posts', ['posts' => Post::all()]);
    }

    public function create()
    {
        return view('post-create');
    }

    public function show(Post $post)
    {
        $post = $post->load('user');

        return view('post', ['post' => $post]);
    }

    public function edit(Post $post)
    {
        return view('post-edit', ['post' => $post]);
    }
}
