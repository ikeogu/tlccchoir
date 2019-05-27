<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Noe_Team;
use Session;
use View;


class NoeTeam extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //List of Teams
        $teams = Noe_Team::all();
        dd($teams);
       
        return view('Noe2019/index', compact('teams'));
    }
    public function allteam()
    {
        //List of Teams
        $teams = Noe_Team::all();
             
        return view('Noe2019/allteam', compact('teams'));
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
    public function admin()
    {
        $teams = Noe_Team::all();
        return view('Noe2019/allteam',compact('teams'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, array('name' => 'required|max:255', 'number' => 'required|max:3','state' => 'required|max:40'));
        $team = $request->isMethod('put') ?  Noe_Team::findOrFail($request->noe_team_id) :new  Noe_Team;
        
        $team->name = $request->input('name');
        $team->number = $request->input('number');
        $team->state= $request->input('state');
        $team->african_con = $request->input('african_con');
        $team->african_class = $request->input('african_class');
        $team->acappella = $request->input('acappella');
      if( $team->save()){
        return redirect()->route('noe')->with('success', 'Welcome to NOE_2019. Team Registered Successfully.');

      }
        return back()->withInput();
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $team = Noe_Team::findOrFail($id);
       return view('Noe2019/show')->with('team', $team);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Noe_Team $noe_team)
    {
        
        $team = Noe_Team::find($noe_team)->first();
        
        if($team->delete()){
           
            return redirect()->route('allteam')->with('success', 'Team Removed');
        }
       
    }
}
