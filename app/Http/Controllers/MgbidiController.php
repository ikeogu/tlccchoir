<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mgbidi;
use file;
use PDF;


class MgbidiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = Mgbidi::all();

        return view('mgbidi-2019/index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mgbidi-2019.create');
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
            'firstname' => 'required','string',
            'lastname' => 'required','string',
            'school' => 'required','string',
            'state' => 'required','string',
            'health_status' => 'required','string',
            'phone' => 'required','string',
            'p_uniform' => 'required','string',
            'o_uniform' => 'required','string',
            'b_uniform' => 'required','string',
            'm_uniform' => 'required','string',
            'ties' => 'required','string',
           
            'email' => 'required','string',
            'comment'=>'required','string',
            
        ]);
       
        if($request->hasFile('passport')){
            //get file name with extension
            $fileNameWithExt = $request->file('passport')->getClientOriginalName();
            //get just file name
            $filename = pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            //get just extension
            $extension = $request->file('passport')->getClientOriginalExtension();
            //file name to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //upload image
            $path = $request->file('passport')->storeAs('public/', $fileNameToStore);
        }else{
            $fileNameToStore = 'noimage.jpg';
        }
        $mgbidi = new Mgbidi();
        $mgbidi->passport = $fileNameToStore;
        $mgbidi->firstname = $request->Input('firstname');
        $mgbidi->lastname = $request->Input('lastname');
        
        $mgbidi->email = $request->Input('email');
        $mgbidi->phone= $request->Input('phone');
        $mgbidi->school = $request->Input('school');
        $mgbidi->gender = $request->Input('gender');
        $mgbidi->health_status = $request->Input('health_status');
        $mgbidi->state = $request->Input('state');
        $mgbidi->p_uniform = $request->Input('p_uniform');
        
        $mgbidi->m_uniform = $request->Input('m_uniform');
        $mgbidi->w_uniform = $request->Input('w_uniform');
        $mgbidi->o_uniform = $request->Input('o_uniform');
        $mgbidi->b_uniform = $request->Input('b_uniform');
        $mgbidi->n_uniform = $request->Input('n_uniform');
        $mgbidi->ties = $request->Input('ties');
        $mgbidi->comment = $request->Input('comment');
        
        $mgbidi->save();
         
           
        return redirect(route('homepage'))->with('success', 'Welcome to Mgbidi2019.Your  Registration was successful.');
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
        //
    }

     public function downloadPDF($id){
      $user = Mgbidi::find($id);
        
        
      $pdf = PDF::loadView('pdf', compact('user'));
      return $pdf->download('mgbidi_2019_registration.pdf');

    }
}
