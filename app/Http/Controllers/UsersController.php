<?php

namespace App\Http\Controllers;
use  App\User;
use Auth;
use Illuminate\Http\Request;
use App\SongPresentation;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('profile_index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($id)
    {
        $user = User::find( auth()->user()->id);
        return view('users.index', ['user'=>$user]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = Auth::user();
        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function update(Request $request, User $user)
    { 

        
        $userUpdate = User::where('id',$user->id)
            ->update([

                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'phone' => $request->input('phone'),
                'discipline' => $request->input('discipline'),
                'institution' => $request->input('institution'),
               'gender' => $request->input('gender'),
               'state' => $request->input('state'),
        ]);
        if($userUpdate){
            return redirect()->route('home', ['id'=>Auth::user()->id]);
        
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

    public function profile()
    {
        $user = Auth::user();
        return view('profile',compact('user',$user));
    }
    public function update_avatar(Request $request){
        $request->validate([
            'avatar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $User = Auth::user();
        $avatarName = $User->id.'_avatar'.time().'.'.request()->avatar->getClientOriginalExtension();
        $request->avatar->storeAs('avatars',$avatarName);
        $User->avatar = $avatarName;
        $User->save();
        return back()
            ->with('success','You have successfully uploaded your image.');
    }

    public function user_posts($id)
	{
		//
		$posts = Posts::where('author_id',$id)->where('active','1')->orderBy('created_at','desc')->paginate(5);
		$title = User::find($id)->name;
		return view('home')->withPosts($posts)->withTitle($title);
	}

	public function user_posts_all(Request $request)
	{
		//
		$user = $request->user();
		$posts = Posts::where('author_id',$user->id)->orderBy('created_at','desc')->paginate(5);
		$title = $user->name;
		return view('blog/posts.index')->withPosts($posts)->withTitle($title);
	}
	
	public function user_posts_draft(Request $request)
	{
		//
		$user = $request->user();
		$posts = Posts::where('author_id',$user->id)->where('active','0')->orderBy('created_at','desc')->paginate(5);
		$title = $user->name;
		return view('blog/posts.index')->withPosts($posts)->withTitle($title);
	}

	/**
	 * profile for user
	 */
	public function profiles(Request $request, Id $id) 
	{
		$data['user'] = User::find($id);
		if (!$data['user'])
			return redirect('/home');

		if ($request -> user() && $data['user'] -> id == $request -> user() -> id) {
			$data['author'] = true;
		} else {
			$data['author'] = null;
		}
		$data['comments_count'] = $data['user']->comments->count();
		$data['posts_count'] = $data['user']->posts->count();
		$data['posts_active_count'] = $data['user']->posts->where('active', 1)->count();
		$data['posts_draft_count'] = $data['posts_count'] - $data['posts_active_count'];
		$data['latest_posts'] = $data['user']->posts->where('active', 1)->take(5);
		$data['latest_comments'] = $data['user']->comments->take(5);
		return view('admin.profile', $data);
	}
}
