<?php

namespace App\Http\Controllers;

use App\Mgbidi2020;
use Illuminate\Http\Request;
use file;
use PDF;

use Illuminate\Support\Facades\DB;
class Mgbidi2020Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $user = [];

        // Mgbidi2020::all()
        //      ->filter(function(Mgbidi2020  $mgbidi2020) use (&$user) {
        //          $details = sprintf("%s.%s.%s",
        //               $mgbidi2020->firstname,
        //               $mgbidi2020->lastname,
        //               $mgbidi2020->email);
         
        //          if (in_array($details, $user)) {
        //              // details is a duplicate
        //              return  $mgbidi2020;
        //          }
         
        //          $user[] = $details;
        //      })->map(function(Mgbidi2020  $mgbidi2020) {
        //           $mgbidi2020->delete();
        //      });
         $users=  Mgbidi2020::all();
       return view('mgbidi2020/index',['users'=>$users]);
    }

    // 


    private function validateData(){
        return  request()->validate([

            
            'firstname'=>'required',
            'lastname'=>'required',
             'email'=>'required|email',
             'phone'=>'required',
              'school' =>'required',
               'state'=>'required',
                'gender'=>'required',
                'health_status'=>'required',
                 'p_uniform'=>'required',
    
            'm_uniform'=>'required',
             'w_uniform'=>'required',
             'o_uniform'=>'required',
              'b_uniform'=>'required',
              'n_uniform'=>'required',
               'ties'=>'required',
              
               'new_uniform'=>'required',
               'food_item'=>'required',
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('mgbidi2020/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        Mgbidi2020::create($this->validateData());
        return redirect(route('mgbidi2020.index'))->with('success', 'Welcome to Mgbidi 2020.  Registration was successful.');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mgbidi2020   $mgbidi20202020
     * @return \Illuminate\Http\Response
     */
    public function show(Mgbidi2020  $mgbidi20202020)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mgbidi2020   $mgbidi20202020
     * @return \Illuminate\Http\Response
     */
    public function edit(Mgbidi2020  $mgbidi20202020)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mgbidi2020   $mgbidi20202020
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mgbidi2020  $mgbidi20202020)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mgbidi2020   $mgbidi20202020
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mgbidi2020  $mgbidi20202020)
    {
        //
    }
    
    public function downloadPDF($id){
        $user = Mgbidi2020::find($id);
          
          
        $pdf = PDF::loadView('pdf', compact('user'));
        return $pdf->download('mgbidi_2020_registration.pdf');
  
      }
      public function prev($id){
       
          
          
        $user = Mgbidi2020::find($id);
        return PDF::loadView('pdf', compact('user'));
        //return response()->file($pdf);
  
      }

   
}
