<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Post;


class PagesController extends Controller {

    public function getIndex()
    {
        $posts = Post::orderBy('created_at', 'desc')->limit(10)->get();
        return view('blog.pages.welcome')->withPosts($posts);
    }
   
}