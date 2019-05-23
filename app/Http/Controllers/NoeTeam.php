<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Noe_Team;
use Session;
use App\Http\Resources\NoeResource;

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
        $teams = Neo_Team::paginate(20);
        return NoeResource::collection($teams);
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
        $this->validate($request, array('name' => 'required|max:255', 'number' => 'required|max:3','state' => 'required|max:40'));
        $team = $request->isMethod('put') ?  Noe_Team::findOrFail($request->noe_team_id) :new  Noe_Team;
        
        $team->name = $request->input('name');
        $team->number = $request->input('number');
        $team->state= $request->input('state');
        if($team->save()){
            
            return redirect(route('noe'))->with('success', 'Welcome to NOE_2019. Team Registered Successfully.');
        }

        
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
       return new NoeResource($team);
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
    public function destroy($id)
    {
        $team = Noe_Team::findOrFail($id);
        if($team->delete()){
            return new NoeResource($team);
        }
       
    }
}
