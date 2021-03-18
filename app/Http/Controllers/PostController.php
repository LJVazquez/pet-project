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
            ->paginate(10);

        return view(
            'posts.index',
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

        return redirect('/posts')->with('message', 'Post creado 🐾');
    }

    public function destroy(Post $post)
    {
        $this->authorize('delete', $post);

        $post->delete();

        return back()->with('message', 'Posteo borrado');
    }

    public function interest(Post $post)
    {
        $post->interest(Auth::user());
        return back();
    }
}
