<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class ExploreController extends Controller
{
    public function __invoke()
    {
        $posts = Post::latest()->paginate('5');

        return view('explore.index', ['posts' => $posts]);
    }
}
