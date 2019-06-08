<?php

namespace App\Http\Controllers;

use App\Music;
use App\Noe_Team;
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
        ]);
        $song = $request->isMethod('put') ?  Music::findOrFail($request->music_id) :new Music();

        if($request->hasFile( 'acappella_song' )){
            //get file name with extension
            $fileNameWithExt = $request->file('acappella_song')->getClientOriginalName();
            //get just file name
            $filename = pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            //get just extension
            $extension =  $request->file('acappella_song')->getClientOriginalExtension();
            //file name to store
            $fileNameToSave = $filename.'_'.time().'.'.$extension;
            //upload image
            $path =  $request->file('acappella_song')->storeAs('public/acappella_songs', $fileNameToSave);
        }else{
            $fileNameToSave = 'nosong.mp3';
        }
         
        $tea_id = $request->input('neo_team_id');
        $team = Noe_Team::find($tea_id);
        $song->noe__team_id = $team->id;
        $song->team()->associate($team);
        $song->category = $request->input('category');
        $song->acappella_lyrics = $request->input('acappella_lyrics');
        $song->acappella_song = $fileNameToSave;
       

      if($team->musics()->saveMany([$song])){
       // return redirect(route('noe'))->response()->json(['success'=>'You have successfully upload file.']);
        return redirect(route('noe'))->with('success', 'Acappella Song sent  Successfully.');

      }
        return back()->withInput();
       
    }

    public function store_class(Request $request)
    {
        $request->validate([
            
            'african_class_lyrics' => 'required|string|max:100000',
        ]);
        $song = $request->isMethod('put') ?  Music::findOrFail($request->music_id) :new Music();

        if($request->hasFile( 'african_class_song' )){
            //get file name with extension
            $fileNameWithExt = $request->file('african_class_song')->getClientOriginalName();
            //get just file name
            $filename = pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            //get just extension
            $extension =  $request->file('african_class_song')->getClientOriginalExtension();
            //file name to store
            $fileNameToSave = $filename.'_'.time().'.'.$extension;
            //upload image
            $path =  $request->file('african_class_song')->storeAs('public/african_class_songs', $fileNameToSave);
        }else{
            $fileNameToSave = 'nosong.mp3';
        }
        
        $tea_id = $request->input('neo_team_id');
        $team = Noe_Team::find($tea_id);
        $song->noe_team = $team->id;
        $song->category = $request->input('category1');
        $song->african_class_lyrics = $request->input('african_class_lyrics');
        $song->african_class_song = $fileNameToSave;

      if($team->musics()->save($song)){
        return redirect(route('noe'))->with('success', 'African Classical Song sent  Successfully.');

      }
        return back()->withInput();
       
    }

    public function store_con(Request $request)
    {
        $request->validate([
           
            'african_con_lyrics' => 'required|string|max:100000',
        ]);
        $song = $request->isMethod('put') ?  Music::findOrFail($request->music_id) :new Music();

        if($request->hasFile( 'african_con_song' )){
            //get file name with extension
            $fileNameWithExt = $request->file('african_con_song')->getClientOriginalName();
            //get just file name
            $filename = pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            //get just extension
            $extension =  $request->file('african_con_song')->getClientOriginalExtension();
            //file name to store
            $fileNameToSave = $filename.'_'.time().'.'.$extension;
            //upload image
            $path =  $request->file('african_con_song')->storeAs('public/african_con_songs', $fileNameToSave);
        }else{
            $fileNameToSave = 'nosong.mp3';
        }
        
        $tea_id = $request->input('neo_team_id');
        $team = Noe_Team::find($tea_id);
        $song->noe_team = $team->id;
        $song->category = $request->input('category2');
        $song->african_con_lyrics = $request->input('african_con_lyrics');
        $song->african_con_song = $fileNameToSave;

      if($team->musics()->save($song)){
        return redirect(route('noe'))->with('success', 'African Contemporary Song sent  Successfully.');

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
