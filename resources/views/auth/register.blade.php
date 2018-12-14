@extends('layouts.app')

@section('content')
<div class="" style="background-image: url('img/bg7.jpg'); background-size: cover; background-position: ; ">
    <div class="container" >
    
      <div class="row">
        <div class="col-lg-4 col-md-6 ml-auto mr-auto" style="padding-top:123px; padding-bottom:100px;">
          <div class="card card-login" >
          <div class="content">
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div><br />
                            @endif
                            @if (\Session::has('success'))
                            <div class="alert alert-success">
                                <p>{{ \Session::get('success') }}</p>
                            </div><br />
                            @endif
                        </div>
          <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf
              <div class="card-header card-header-primary text-center">
                <h4 class="card-title">Be A Member</h4>
                
              </div>
              
              <div class="card-body">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">face</i>
                    </span>
                  </div>
                  <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus placeholder="Full Name...">
                  @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                </div>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">mail</i>
                    </span>
                  </div>
                  <input type="email" class="form-control" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required placeholder="Email...">

                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif 
                </div>
                
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">face</i>
                    </span>
                  </div>
                    <input type="text" class="form-control{{ $errors->has('state') ? ' is-invalid' : '' }}" name="state" value="{{ old('state') }}" required autofocus placeholder="State...">
                                @if ($errors->has('state'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('state') }}</strong>
                                    </span>
                                @endif
                  </div>              
                </div>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">book</i>
                    </span>
                  </div>
                  <input type="text" class="form-control{{ $errors->has('discipline') ? ' is-invalid' : '' }}" name="discipline" value="{{ old('discipline') }}" required autofocus placeholder="Discipline...">
                  @if ($errors->has('discipline'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('discipline') }}</strong>
                                    </span>
                                @endif
                </div>

                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">home</i>
                    </span>
                  </div>
                  <input type="text" class="form-control{{ $errors->has('institution') ? ' is-invalid' : '' }}" name="institution" value="{{ old('institution') }}" required autofocus placeholder="Institution...">
                  @if ($errors->has('institution'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('institution') }}</strong>
                                    </span>
                                @endif
                </div>
                <div class="input-group">
                  
                  
                  <input type="hidden" class="form-control{{ $errors->has('gender') ? ' is-invalid' : '' }}" name="gender" value="{{ old('gender') }}" required autofocus placeholder="gender...">
                  <select name='gender' class='form-control'>
                   <OPTION > Gender</OPTION>
                    <option value="female">Female</option>
                    <option value="male">Male</option>
                 </select>

                  @if ($errors->has('gender'))
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('gender') }}</strong>
                              </span>
                          @endif

                   <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">phone</i>
                    </span>
                  </div>
                  <input type="text" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ old('phone') }}" required autofocus placeholder="Phone...">
                      @if ($errors->has('phone'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('phone') }}</strong>
                                        </span>
                      @endif       
                </div> 
                
                
                  
                

                <div class="form-group row">
                   <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeHolder=" Password">

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                    </div>
                    <div class="col-md-6">
                           

                            
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeHolder="Confirm Password">
                    </div>
                </div>
               
                
                       
             </div>
              <div class="footer text-center">
              <button class="btn btn-primary btn-round">Register</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
@endsection
