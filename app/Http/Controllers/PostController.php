<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index()
    {
        $following = Auth::user()->following;
        $followingIDs = $following->pluck('id');
        $posts = Post::whereIn('user_id', $followingIDs)
            ->orWhere('user_id', Auth::id())
            ->latest()
            ->get();

        return view(
            'timeline.home',
            [
                'posts' => $posts,
                'following' => $following
            ]
        );
    }

    public function store(Request $request, Post $post)
    {
        $request->validate([
            'body' => 'required|max:255'
        ]);

        Post::create([
            'user_id' => Auth::id(),
            'body' => $request->body
        ]);

        return redirect('/')->with('message', 'Post creado 🐾');
    }
}
