<?php namespace App\Http\Controllers;

use App\Posts;
use App\User;
use Redirect;
use App\Http\Controllers\Controller;
use App\Http\Requests\PostFormRequest;

use Illuminate\Http\Request;

// note: use true and false for active posts in postgresql database
// here '0' and '1' are used for active posts because of mysql database

class PostController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$blogs = Post::orderBy('id', 'DESC')->paginate(10);
		return View::make('posts.index', compact('blogs'));
	}
	/**
	 * Show the form for creating a new resource.
	 * GET /posts/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('posts.create');
	}
	/**
	 * Store a newly created resource in storage.
	 * POST /posts
	 *
	 * @return Response
	 */
	public function store()
	{
		$rules = array(
            'title'     => 'required',
            'body'      => 'required',
        );
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            return Redirect::to('/admin/posts/create')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // store
            $blog = new Post;
            $blog->title       = Input::get('title');
            $blog->body      = Input::get('body');
            $blog->save();
            // redirect
            Session::flash('message', 'Successfully posted your blog!');
            return Redirect::to('/admin/posts');
        }
	}
	/**
	 * Display the specified resource.
	 * GET /posts/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$post = Post::find($id);
        return View::make('posts.show')
            ->with('post', $post);
	}
	/**
	 * Show the form for editing the specified resource.
	 * GET /posts/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        $post = Post::find($id);
        return View::make('posts.edit')
            ->with('post', $post);
	}
	/**
	 * Update the specified resource in storage.
	 * PUT /posts/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$rules = array(
            'title'       => 'required',
            'body'      => 'required'
        );
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            return Redirect::to('/admin/posts/create')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // store
            $blog = Post::find($id);
            $blog->title       = Input::get('title');
            $blog->body      = Input::get('body');
            $blog->save();
            // redirect
            Session::flash('message', 'Successfully updated your blog!');
            return Redirect::to('/admin/posts');
        }
	}
	/**
	 * Remove the specified resource from storage.
	 * DELETE /posts/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$post = Post::find($id);
        $post->delete();
        // redirect
        Session::flash('message', 'Successfully deleted!');
        return Redirect::to('/admin/posts');
	}

	public function showWelcome()
	{
		$blogs = Post::orderBy('id', 'DESC')->paginate(10);
		return View::make('blog/posts', compact('blogs'));
	}
	public function showBlogDetail($id)
	{
		$blog = Post::with('comments')->find($id);
        return View::make('blog/post', compact('blog'));
	}
}
