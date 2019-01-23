<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class CommentsController extends Controller
{
    public function store(Post $post)
    {
        // Validate data
        $this->validate(request(), [
            'body' => 'required'
        ]);

        // Add a comment to a post
        $post->addComment(request('body'));

        return back();
    }
}
