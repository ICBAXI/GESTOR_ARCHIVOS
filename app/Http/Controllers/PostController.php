<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Requests\SavePostRequest;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::get();

        return view('posts.index', ['posts' => $posts]);
    }

    public function show(Post $post)
    {
        return view('posts.show', ['post' => $post]);
    }

    public function create()
    {
        return view('posts.create', ['post' => new Post]);
    }

    public function store(SavePostRequest $request)
    {

        Post::create($request->validated());

        session()->flash('status', 'Post Created!');

        return to_route('post.index');

    }

    public function edit(Post $post)
    {
        return view('posts.edit', ['post' => $post]);
    }

    public function update(SavePostRequest $request, Post $post)
    {

        $post->update($request->validated());

        session()->flash('status', 'Post Updated!');

        return to_route('posts.show', $post);
    }
}