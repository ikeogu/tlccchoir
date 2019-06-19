<?php

namespace App\Http\Controllers;

use App\Music;
use App\Noe_Team;
use Cloudder;
use Cloudinary;
use Illuminate\Http\Request;

class MusicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(Request $request)
    {
        $request->validate([
           
            'acappella_lyrics' => 'required|string|max:100000',
            'african_class_lyrics' => 'required|string|max:100000',
            'african_con_lyrics' => 'required|string|max:100000',
        ]);
       

        if($request->hasFile('acappella_song')){

            $fileNameWithExt = $request->file('acappella_song')->getClientOriginalName();
            //get just file name
            $filename = pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            //get just extension
            $extension = $request->file('acappella_song')->getClientOriginalExtension();
            //file name to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //upload image
            $acappella = $request->file('acappella_song')->storeAs('audio', $fileNameToStore);

    
           
           $ace = Cloudinary\Uploader::upload($acappella,  array("resource_type" => "auto"));
              
            $acappella_url = data_get($ace,'url');
          
            
        }else{
            $acappella_url = 'nosong.mp3';
        }
        if($request->hasFile( 'african_class_song' )){
            $fileNameWithExt = $request->file('african_class_song')->getClientOriginalName();
            //get just file name
            $filename = pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            //get just extension
            $extension = $request->file('african_class_song')->getClientOriginalExtension();
            //file name to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //upload image
            $acappella = $request->file('african_class_song')->storeAs('audio', $fileNameToStore);

           $ace = Cloudinary\Uploader::upload($acappella,  array("resource_type" => "auto"));
              
           $african_class_song_url = data_get($ace,'url');
        }else{
            $african_class_song_url = 'nosong.mp3';
        }

        if($request->hasFile( 'african_con_song' )){
            $fileNameWithExt = $request->file('african_con_song')->getClientOriginalName();
            //get just file name
            $filename = pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            //get just extension
            $extension = $request->file('african_con_song')->getClientOriginalExtension();
            //file name to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //upload image
            $acappella = $request->file('african_con_song')->storeAs('audio', $fileNameToStore);

           $ace = Cloudinary\Uploader::upload($acappella,  array("resource_type" => "auto"));
              
           $african_con_song_url = data_get($ace,'url');
        }else{
            $african_con_song_url = 'nosong.mp3';
        }

        $song = new Music();
        $tea_id = $request->input('neo_team_id');
        $team = Noe_Team::find($tea_id);
        
        $song->noe__team_id = $team->id;
        $song->team()->associate($team);
        $song->category = $request->input('category');
        $song->acappella_lyrics = $request->input('acappella_lyrics');
        $song->acappella_song = $acappella_url;
       
        $song->category1 = $request->input('category1');
        $song->african_class_lyrics = $request->input('african_class_lyrics');
        $song->african_class_song = $african_class_song_url;


        $song->category2 = $request->input('category2');
        $song->african_con_lyrics = $request->input('african_con_lyrics');
        $song->african_con_song = $african_con_song_url;

        
      if($team->musics()->saveMany([$song])){
       // return redirect(route('noe'))->response()->json(['success'=>'You have successfully upload file.']);
        return redirect(route('noe'))->with('success', ' Songs sent  Successfully.');

      }
        return back()->withInput();
       
    }

   

   
    /**
     * Display the specified resource.
     *
     * @param  \App\Music  $music
     * @return \Illuminate\Http\Response
     */
    public function show(Music $music)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Music  $music
     * @return \Illuminate\Http\Response
     */
    public function edit(Music $music)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Music  $music
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Music $music)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Music  $music
     * @return \Illuminate\Http\Response
     */
    public function destroy(Music $music)
    {
        //
    }
}
