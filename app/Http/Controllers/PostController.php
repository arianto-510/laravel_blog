<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest();
        if (request('search')) {
            $posts->where('title', 'like', '%' . request('search') . '%');
        };
        return view('pages.post', [
            'title' => 'All Post',
            'posts' => $posts->with(['category'])->get()
        ]);
    }

    public function show(Post $post)
    {
        return view('pages.blog', [
            'title' => $post->title,
            'post' => $post
        ]);
    }
}
