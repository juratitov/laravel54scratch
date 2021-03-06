<?php

namespace App\Http\Controllers;

use App\Post;

class CommentsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function addComment(Post $post)
    {

        $this->validate(request(), [
            'body' => 'required|min:2'
        ]);

        $post->addComment(request('body'));

        return back();
    }
}
