<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\SongPresentation;
use App\Mgbidi;
use App\ImageGallery;
use  App\Geopoliticalzone;
use App\Auth;
use App\NorthernStates;
use App\EasthernStates;
use App\WesthernStates;
use App\SouthernStates;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('adminhome');
    }

    public function geopoliticalzone()
    {
        $zone = Geopoliticalzone::all();
        return view('admin/geopoliticalzone',['zone'=>$zone]);
       
    }

    public function allmembers(){
        $allusers = User::all();
        return view('admin/allmembers',['allusers'=>$allusers]);
       

    }
    public function allsongs(){
        $allsongs = SongPresentation::all();
        return view('admin/allsongs',['allsongs'=>$allsongs]);
       

    }

    public function mgbidi2019(){
        $mgbidi = Mgbidi::all();
        return view('admin/mgbidi2019',['mgbidi'=>$mgbidi]);
       

    }

    public function delup(){
        $images = ImageGallery::get();
    	return view('admin/deleteuploadedimages',compact('images'));
        

    }

    public function userprofile(){
        $user = User::findOrFail( auth()->user()->id);
        return view('profile', ['user'=>$user]);

    }

    public function north()
    {
        $state = NorthernStates::all();
        
       
        return view('admin/northern',['states'=>$state]);
       
    }
    public function east()
    {
        $state= EasthernStates::all();
        
        
        
        return view('admin/eastern',['states'=>$state]);
       
    }
   

    public function west()
    {
        $state = WesthernStates::all();
        return view('admin/western',['states'=>$state]);
       
    }
    public function south()
    {
        $state = SouthernStates::all();
        return view('admin/southern',['states'=>$state]);
       
    }
    // for south east
    public function abia(){
        $user= User::where('state','abia')->get();
        return view('admin/abia',['auser'=>$user]);
    }
    public function anambra(){
        $user= User::where('state','anambra')->get();
        return view('admin/anambra',['auser'=>$user]);
    }
    public function ebonyi(){
        $user= User::where('state','ebonyi')->get();
        return view('admin/ebonyi',['auser'=>$user]);
    }
    public function enugu(){
        $user= User::where('state','enugu')->get();
        return view('admin/enugu',['auser'=>$user]);
    }
    public function imo(){
        $user= User::where('state','imo')->get();
        return view('admin/imo',['auser'=>$user]);
    }

    // for south south
    public function akwaibom(){
        $user= User::where('state','akwa-ibom')->get();
        return view('admin/akwa-ibom',['auser'=>$user]);
    }
    public function bayelsa(){
        $user= User::where('state','bayelsa')->get();
        return view('admin/bayelsa',['auser'=>$user]);
    }
    public function crossriver(){
        $user= User::where('state','cross-river')->get();
        return view('admin/cross-river',['auser'=>$user]);
    }
    public function delta(){
        $user= User::where('state','delta')->get();
        return view('admin/delta',['auser'=>$user]);
    }
    public function edo(){
        $user= User::where('state','edo')->get();
        return view('admin/edo',['auser'=>$user]);
    }
    public function rivers(){
        $user= User::where('state','rivers')->get();
        return view('admin/rivers',['auser'=>$user]);
    }
    // for south west
    public function lagos(){
        $user= User::where('state','lagos')->get();
        return view('admin/lagos',['auser'=>$user]);
    }
    public function ekiti(){
        $user= User::where('state','ekiti')->get();
        return view('admin/ekiti',['auser'=>$user]);
    }
    public function ogun(){
        $user= User::where('state','ogun')->get();
        return view('admin/ogun',['auser'=>$user]);
    }
    public function ondo(){
        $user= User::where('state','ondo')->get();
        return view('admin/ondo',['auser'=>$user]);
    }
    public function osun(){
        $user= User::where('state','osun')->get();
        return view('admin/osun',['auser'=>$user]);
    }
    public function oyo(){
        $user= User::where('state','oyo')->get();
        return view('admin/oyo',['auser'=>$user]);
    }
    
    //for north state
    public function benue(){
        $user= User::where('state','benue')->get();
        return view('admin/benue',['auser'=>$user]);
    }
    public function kogi(){
        $user= User::where('state','kogi')->get();
        return view('admin/kogi',['auser'=>$user]);
    }
    public function kwara(){
        $user= User::where('state','kwara')->get();
        return view('admin/kwara',['auser'=>$user]);
    }
    public function nassarawa(){
        $user= User::where('state','nassarawa')->get();
        return view('admin/nassarawa',['auser'=>$user]);
    }
    public function niger(){
        $user= User::where('state','niger')->get();
        return view('admin/niger',['auser'=>$user]);
    }
    public function plateau(){
        $user= User::where('state','plateau')->get();
        return view('admin/plateau',['auser'=>$user]);
    }
    public function abuja(){
        $user= User::where('state','abuja')->get();
        return view('admin/abuja',['auser'=>$user]);
    }
    public function adamawa(){
        $user= User::where('state','adamawa')->get();
        return view('admin/adamawa',['auser'=>$user]);
    }
    public function bauchi(){
        $user= User::where('state','bauchi')->get();
        return view('admin/bauchi',['auser'=>$user]);
    }
    public function borno(){
        $user= User::where('state','borno')->get();
        return view('admin/borno',['auser'=>$user]);
    }
    public function gombe(){
        $user= User::where('state','gombe')->get();
        return view('admin/gombe',['auser'=>$user]);
    }
    public function taraba(){
        $user= User::where('state','taraba')->get();
        return view('admin/taraba',['auser'=>$user]);
    }

    public function yobe(){
        $user= User::where('state','yobe')->get();
        return view('admin/yobe',['auser'=>$user]);
    }
    public function jigawa(){
        $user= User::where('state','jigawa')->get();
        return view('admin/jigawa',['auser'=>$user]);
    }
    public function kaduna(){
        $user= User::where('state','kaduna')->get();
        return view('admin/kaduna',['auser'=>$user]);
    }
    public function kano(){
        $user= User::where('state','kano')->get();
        return view('admin/kano',['auser'=>$user]);
    }
    public function kastina(){
        $user= User::where('state','kastina')->get();
        return view('admin/kastina',['auser'=>$user]);
    }
    public function kebbi(){
        $user= User::where('state','kebbi')->get();
        return view('admin/kebbi',['auser'=>$user]);
    }
    public function sokoto(){
        $user= User::where('state','sokoto')->get();
        return view('admin/sokoto',['auser'=>$user]);
    }
    public function zamfara(){
        $user= User::where('state','zamfara')->get();
        return view('admin/zamfara',['auser'=>$user]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
	{
		return View::make('admin.index');
	}
	/**
	 * Store a newly created resource in storage.
	 * POST /admin
	 *
	 * @return Response
	 */
	public function store()
	{  
	  	if ($this->isPostRequest()) {
      		$validator = $this->getLoginValidator();
  
	      	if ($validator->passes()) {
	       		$credentials = $this->getLoginCredentials();
	  
		        if (Auth::attempt($credentials)) {
		        	Session::flash('message', "Welcome Sir!");
		          	return Redirect::to("/");
		        }
	  
		        return Redirect::back()->withErrors([
		          "invalid_credential" => ["Credentials invalid."]
		        ]);
	      	} else {
	        	return Redirect::back()
		          ->withInput()
		          ->withErrors($validator);
	      	}
    	}
  
   		return View::make("admin/blog.index");
	}
	/**
	 * Logout
	 *
	 * @return Response
	 * @author 
	 **/
	public function logout()
	{
		Auth::logout();
		Session::flash('message', "Logout success sir!");
		return Redirect::to('/');
	}
	//Check user's post request
	protected function isPostRequest()
  	{
    	return Input::server("REQUEST_METHOD") == "POST";
  	}
  
  	//Validate
  	protected function getLoginValidator()
  	{
	    return Validator::make(Input::all(), [
	      "email" => "required|email",
	      "password" => "required"
	    ]);
  	}
  	//Get Login Credentials
	protected function getLoginCredentials()
  	{
	    return [
	      "email" => Input::get("email"),
	      "password" => Input::get("password")
	    ];
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
       
       
    }
}
