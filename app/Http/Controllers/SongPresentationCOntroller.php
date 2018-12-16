<?php

namespace App\Http\Controllers;

use App\SongPresentation;
use App\Controller\Auth;
use Illuminate\Http\Request;
use App\User;

class SongPresentationCOntroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $songPresentation = SongPresentation::all();
        
        return view('songs.index')->with('songs',$songPresentation);
       
       
       
    }
    /*
            $user_id = auth()->user()->id;
            $user = User::finOrFail($user_id);
            return view('song.index')->with('songs' $user->songs);
    */
    public function mysongs(){

        $user_id = auth()->user()->id;
        $user = User::findOrFail($user_id);
        return view('profile_index')->with('songs', $user->songs);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
       
               
        
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         
        $this->validate(request(), [
                      
            'title' => 'required',
            'body' => 'required',
            
            'type' => 'required',
            
            'author' => 'required',
            
        ]);

            $songPresentation = new SongPresentation();
            $songPresentation->title = $request->Input('title');
            $songPresentation->body = $request->Input('body');
            $songPresentation->type = $request->Input('type');
            $songPresentation->user_id = auth()->user()->id;
            $user = User::find($songPresentation->user_id);
            $songPresentation->author = $request->Input('author');
            $user->songs()->save($songPresentation);
            return redirect(route('profile'))->with('success', 'Thanks For Contributing to Our Songs');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SongPresentation  $songPresentation
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
    
        $songPresentation = SongPresentation::find($id);
        
        return view('songs.show')->with('songs', $songPresentation);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SongPresentation  $songPresentation
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $songPresentation = SongPresentation::find($id);
    
        return view('songs.edit', ['songPresentation'=>$songPresentation]);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SongPresentation  $songPresentation
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $songupdate = SongPresentation::findOrFail('id', $id)
        ->update([
            'title'=> $request->input('title'),
            'author' => $request->input('author'),
            'type' => $request->input('type'),
            'body' => $request->input('body'),
                            
        ]);

        if($songupdate){
            return redirect()->route('songs.show', ['songs'=> $songupdate])
            ->with('success', 'your Song has been updated Successfully');
        }
        return back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SongPresentation  $songPresentation
     * @return \Illuminate\Http\Response
     */
    public function destroy(SongPresentation $songPresentation)
    {
        //
    }
}
