@extends('layouts.noe_adm')

@section('noes')
<div class="col-md-8" style="padding-top:60px;padding-right:30px">
    <div class="row">
            <div class="card card-plain " style="margin-left:30px">
              <div class="card card-login" >
                    <div class="content">
                    @if (\Session::has('success'))
                            <div class="alert alert-success">
                                <p>{{ \Session::get('success') }}</p>
                            </div><br />
                    @endif
                    </div>
                
                    <form method="POST" action="{{route('shortlist')}}" enctype="multipart/form-data">
                              @csrf
                        <div class="card-header card-header-primary text-center">
                            <h4 class="card-title">ShortList Team</h4>
                        </div>
                        <div class="content">
                                <span id="success"></span>
                                <span id="error"></span>
                        </div>
                    <div class="card-body">
                        <div class="input-group">
                        
                             <input type="text" id="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus placeholder=" Choral Team Name...">
                            @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                        <br/>
                        <div class="input-group">
                        
                            <input type="text" id="name1" class="form-control " class="form-control{{ $errors->has('number') ? ' is-invalid' : '' }}" name="number" value="{{ old('number') }}" required placeholder="Number of Choral members">
        
                            @if ($errors->has('number'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('number') }}</strong>
                                </span>
                            @endif 
                        </div>
                        <br/>
                        <div class="input-group" >
                            <input type="hidden"  id="name2" class="form-control{{ $errors->has('state') ? ' is-invalid' : '' }}" name="state" value="{{ old('state') }}" required autofocus>
                                <select name="state" class='form-control' style="color:black;">
                                    <option value="" selected="selected">- State-</option>
                                    <option value="Abuja FCT">Abuja FCT</option>
                                    <option value="Abia">Abia</option>
                                    <option value="Adamawa">Adamawa</option>
                                    <option value="Akwa Ibom">Akwa Ibom</option>
                                    <option value="Anambra">Anambra</option>
                                    <option value="Bauchi">Bauchi</option>
                                    <option value="Bayelsa">Bayelsa</option>
                                    <option value="Benue">Benue</option>
                                    <option value="Borno">Borno</option>
                                    <option value="Cross River">Cross River</option>
                                    <option value="Delta">Delta</option>
                                    <option value="Ebonyi">Ebonyi</option>
                                    <option value="Edo">Edo</option>
                                    <option value="Ekiti">Ekiti</option>
                                    <option value="Enugu">Enugu</option>
                                    <option value="Gombe">Gombe</option>
                                    <option value="Imo">Imo</option>
                                    <option value="Jigawa">Jigawa</option>
                                    <option value="Kaduna">Kaduna</option>
                                    <option value="Kano">Kano</option>
                                    <option value="Katsina">Katsina</option>
                                    <option value="Kebbi">Kebbi</option>
                                    <option value="Kogi">Kogi</option>
                                    <option value="Kwara">Kwara</option>
                                    <option value="Lagos">Lagos</option>
                                    <option value="Nassarawa">Nassarawa</option>
                                    <option value="Niger">Niger</option>
                                    <option value="Ogun">Ogun</option>
                                    <option value="Ondo">Ondo</option>
                                    <option value="Osun">Osun</option>
                                    <option value="Oyo">Oyo</option>
                                    <option value="Plateau">Plateau</option>
                                    <option value="Rivers">Rivers</option>
                                    <option value="Sokoto">Sokoto</option>
                                    <option value="Taraba">Taraba</option>
                                    <option value="Yobe">Yobe</option>
                                    <option value="Zamfara">Zamfara</option>
                                    <option value="Outside Nigeria">Outside Nigeria</option>
                                </select>
                                @if ($errors->has('state'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('state') }}</strong>
                                    </span>
                                @endif
                        </div> 
                        <br/>
                        <div class="input-group">
                        
                                <input type="text" id="name3" class="form-control" class="form-control{{ $errors->has('african_con') ? ' is-invalid' : '' }}" name="african_con" value="{{ old('african_con') }}" required placeholder="Title of  African Contemporary Song">
    
                                @if ($errors->has('african_con'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('african_con') }}</strong>
                                    </span>
                                @endif 
                        </div>
                        <br/>
                        <div class="input-group">
                    
                                    <input type="text" id="name4" class="form-control" class="form-control{{ $errors->has('acappella') ? ' is-invalid' : '' }}" name="acappella" value="{{ old('acappella') }}" required placeholder="Title of  Acappella Song">

                                @if ($errors->has('acappella'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('acappella') }}</strong>
                                    </span>
                                @endif 
                        </div>
                        <br/>
                        <div class="input-group">
                    
                            <input type="text" id="name5" class="form-control" class="form-control{{ $errors->has('african_class') ? ' is-invalid' : '' }}" name="african_class" value="{{ old('african_class') }}" required placeholder="Title of  African Classical Spiritual Song">

                            @if ($errors->has('african_class'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('african_class') }}</strong>
                                </span>
                            @endif 
                        </div>
                        <br/>
                        <div class="input-group">
                                <button id="submit" class="btn  btn-round btn-md btn-primary" style="float:left;margin-left: 10px;">ShortList</button>
                        </div>
                        </div>                 
                     </form>
                </div>
            </div>
        </div>
</div>    
@endsection