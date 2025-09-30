<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
{
$posts = Post::all();  
    return view('posts.index', ['posts' => $posts]);
}

public function create()
{
    return view('posts.create');
}
public function store(Request $request)
{
    $validated = $request->validate([
        'title' => 'required|max:255',
        'content' => 'required',
    ]);

    \App\Models\Post::create([
        'title' => $validated['title'],
        'content' => $validated['content'],
    ]);

    return redirect('/posts');
}
public function show($id)
{
    $post = \App\Models\Post::findOrFail($id);  
    return view('posts.show', compact('post'));
}
}
