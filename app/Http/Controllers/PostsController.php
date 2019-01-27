<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post = Post::latest()->get();

        return view('blog.posts.index', compact('post'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate data
        $this->validate(request(), [
            'title' => 'required',
            'body' => 'required|min:10'
        ]);

        // dd(request()->all());
        // dd(request(['title', 'body']));

        // Create a new post using the request data
        $post = new Post;

        $post->title = request('title');
        $post->body = request('body');
        $post->type = request('type');
        $post->user_id = Auth::user()->id;
        $post->author = request('author');

        // Save it to the database
        $post->save();

        // Cleaner way
        // Post::create([
        //     'title' => request('title'),
        //     'body' => request('body')
        // ]);
        //
        // Cleanest way
        // Post::create(request(['title', 'body']));

        // And then redirect to the home page
        return redirect('admin/blog')->with('success','Blog Post was succesful');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $id)
    {
        $post =Post::find($id);
        return view('blog.posts.show')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
    
        return view('blog.posts.edit', ['post'=>$post]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $postupdate = Post::findOrFail('id', $id)
        ->update([
            'title'=> $request->input('title'),
            'author' => $request->input('author'),
            'type' => $request->input('type'),
            'body' => $request->input('body'),
                            
        ]);

        if($postupdate){
            return redirect()->route('blog.posts.show', ['post'=> $postupdate])
            ->with('success', 'your Song has been updated Successfully');
        }
        return back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
