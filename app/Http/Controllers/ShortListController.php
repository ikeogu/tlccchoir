<?php

namespace App\Http\Controllers;

use App\ShortList;
use Illuminate\Http\Request;

class ShortListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $teams = ShortList::all();
        return view('Noe2019/shortlist/index',compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('Noe2019/create');
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
        $team = $request->isMethod('put') ?  ShortList::findOrFail($request->short_lists_id) :new  ShortList;
        
        $team->name = $request->input('name');
        $team->number = $request->input('number');
        $team->state= $request->input('state');
        $team->african_con = $request->input('african_con');
        $team->african_class = $request->input('african_class');
        $team->acappella = $request->input('acappella');
      if( $team->save()){
        return redirect()->route('admin')->with('success', ' Team was Successfully ShortListed.');

      }
        return back()->withInput();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ShortList  $shortList
     * @return \Illuminate\Http\Response
     */
    public function show(ShortList $shortList)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ShortList  $shortList
     * @return \Illuminate\Http\Response
     */
    public function edit(ShortList $shortList)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ShortList  $shortList
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ShortList $shortList)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ShortList  $shortList
     * @return \Illuminate\Http\Response
     */
    public function destroy(ShortList $shortList)
    {
        //
    }
}
