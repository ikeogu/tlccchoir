<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;

class BlogController extends Controller
{

    public function getIndex() {
        $posts = Post::paginate(10);

        return view('blog.index')->withPosts($posts);
    }
    
    public function getSingle($slug) {
       
       
    //fetch from the DB based on slug
        $post = Post::where('slug', '=', $slug)->first();
    //return the view and pass in the post object
        $comments = $post->comments;
        return view('blog.single')->withPost($post)->withComments($comments);
    }

   
    
}
