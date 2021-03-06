<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function create()
    {
        return view('posts.make');
    }

    public function store(Request $request)
    {
        $post = $request->validate([
            'title' => 'required',
            'body' => 'required'
        ]);

        Post::create($post);

        return "OK";
    }
}
