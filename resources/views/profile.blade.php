@extends('layouts.app')

@section('content')
     
    @if(auth()->user()->isAdmin == 1)
        <div class= "main main-raised" style="padding-top:300px;">
             
            <div class="card">
                <div class="card-header">
                    <h4>You are an admin</h4>
                    <h5> <a href="/admin">click on Admin</a></h5>
                </div>
            </div>
        </div> 
        <div class="page-header header-filter" data-parallax="true" style="background-image: url('img/city-profile.jpg');"></div>
            <div class="main main-raised">
            <div class="card">
                <div class="card-header">
                <h4>Dashboard</h4>
                <h5> You are logged in!</h5>
                </div>

                <div class="card-body">
                    <div class="row">
                                @if ($message = Session::get('success'))

                                    <div class="alert alert-success alert-block">

                                        <button type="button" class="close" data-dismiss="alert">×</button>

                                        <strong>{{ $message }}</strong>

                                    </div>

                                @endif

                                @if (count($errors) > 0)
                                    <div class="alert alert-danger">
                                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                    

                    </div>
                    <div class="profile-content">
                        <div class="container">
                        <div class="row">
                            <div class="col-md-6 ml-auto mr-auto">
                            <div class="profile">
                            <div class="row justify-content-center">

                                <div class="profile-header-container">
                                    <div class="profile-header-img">
                                        <img class="rounded-circle" src="avatars/{{Auth::user()->avatar }}" style="max-width:50%; max-height:50%;"/>
                                        <!-- badge -->
                                        <div class="rank-label-container">
                                            <span class="label label-default rank-label">{{Auth::user()->name}}</span>
                                        </div>
                                    </div>
                                </div>

                                </div>
                                <div class="row justify-content-center" style="padding-top:60px;">
                                    <form action="/profile" method="post" enctype="multipart/form-data">
                                            @csrf
                                            

                                            <div class="form-group row">
                                                <label for="passport" class="col-md-8 col-form-label text-md-left">{{ __('Click on me to change picture') }}</label>

                                                <div class="col-md-8">
                                                    <input id="passport" type="file" class="form-control{{ $errors->has('passport') ? ' is-invalid' : '' }}" name="avatar" required>

                                                        @if ($errors->has('passport'))
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('passport') }}</strong>
                                                            </span>
                                                        @endif
                                                </div>

                                                
                                                <button type="submit" class="btn btn-primary">Change Image</button>
                                            </div>
                                        
                                    </form>
                                </div>
                                            
                                        
                            </div>
                            <table class="table table-bordered table-responsive table-striped col-md-6 ml-auto mr-auto">
                                <tr>
                                    <td><h3 class="name">Name:</h3></td>
                                    <td> <h3>{{ Auth::user()->name }}</h3></td>
                                </tr>
                                <tr>
                                    <td> <h6>Tag :</h6> </td>
                                    <td> <h5>Chorister</h5> </td>
                                </tr>
                                <tr>
                                    <td> <h3 class="name">Email: </h3></td>
                                    <td>  <h3>{{Auth::user()->email}}  </h3></td>
                                </tr>
                                <tr>
                                    <td> <h3 class="name">Institution: </h3></td>
                                    <td> <h3> {{Auth::user()->institution }}</h3> </td>
                                </tr>
                                <tr>
                                    <td> <h3 class="name">Discipline: </h3></td>
                                    <td> <h3> {{Auth::user()->discipline}}</h3> </td>
                                </tr>
                                <tr>
                                    <td> <h3 class="name">State: </h3></td>
                                    <td>  <h3> {{Auth::user()->state}} </h3></td>
                                </tr>
                                <tr>
                                    <td> <h3 class="name">Gendex: </h3></td>
                                    <td>  <h3> {{Auth::user()->gender}}</h3></td>
                                </tr>
                                <tr>
                                    <td> <h3 class="name">Phone: </h3></td>
                                    <td>  <h3> {{Auth::user()->phone}} </h3></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            </div>   
    @elseif(auth()->user()->isAdmin == NULL) 

        <div class="page-header header-filter" data-parallax="true" style="background-image: url('img/city-profile.jpg');"></div>
            <div class="main main-raised">
            <div class="card">
                <div class="card-header">
                <h4>Dashboard</h4>
                <h5> You are logged in!</h5>
                </div>

                <div class="card-body">
                    <div class="row">
                                @if ($message = Session::get('success'))

                                    <div class="alert alert-success alert-block">

                                        <button type="button" class="close" data-dismiss="alert">×</button>

                                        <strong>{{ $message }}</strong>

                                    </div>

                                @endif

                                @if (count($errors) > 0)
                                    <div class="alert alert-danger">
                                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                    

                    </div>
                    <div class="profile-content">
                        <div class="container">
                        <div class="row">
                            <div class="col-md-6 ml-auto mr-auto">
                            <div class="profile">
                            <div class="row justify-content-center">

                                <div class="profile-header-container">
                                    <div class="profile-header-img">
                                        <img class="rounded-circle" src="avatars/{{Auth::user()->avatar }}" style="max-width:50%; max-height:50%;"/>
                                        <!-- badge -->
                                        <div class="rank-label-container">
                                            <span class="label label-default rank-label">{{Auth::user()->name}}</span>
                                        </div>
                                    </div>
                                </div>

                                </div>
                                <div class="row justify-content-center" style="padding-top:60px;">
                                    <form action="/profile" method="post" enctype="multipart/form-data">
                                            @csrf
                                            

                                            <div class="form-group row">
                                                <label for="passport" class="col-md-8 col-form-label text-md-left">{{ __('Click on me to change picture') }}</label>

                                                <div class="col-md-8">
                                                    <input id="passport" type="file" class="form-control{{ $errors->has('passport') ? ' is-invalid' : '' }}" name="avatar" required>

                                                        @if ($errors->has('passport'))
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('passport') }}</strong>
                                                            </span>
                                                        @endif
                                                </div>

                                                
                                                <button type="submit" class="btn btn-primary">Change Image</button>
                                            </div>
                                        
                                    </form>
                                </div>
                                            
                                        
                            </div>
                            <table class="table table-bordered table-responsive table-striped col-md-6 ml-auto mr-auto">
                                <tr>
                                    <td><h3 class="name">Name:</h3></td>
                                    <td> <h3>{{ Auth::user()->name }}</h3></td>
                                </tr>
                                <tr>
                                    <td> <h6>Tag :</h6> </td>
                                    <td> <h5>Chorister</h5> </td>
                                </tr>
                                <tr>
                                    <td> <h3 class="name">Email: </h3></td>
                                    <td>  <h3>{{Auth::user()->email}}  </h3></td>
                                </tr>
                                <tr>
                                    <td> <h3 class="name">Institution: </h3></td>
                                    <td> <h3> {{Auth::user()->institution }}</h3> </td>
                                </tr>
                                <tr>
                                    <td> <h3 class="name">Discipline: </h3></td>
                                    <td> <h3> {{Auth::user()->discipline}}</h3> </td>
                                </tr>
                                <tr>
                                    <td> <h3 class="name">State: </h3></td>
                                    <td>  <h3> {{Auth::user()->state}} </h3></td>
                                </tr>
                                <tr>
                                    <td> <h3 class="name">Gendex: </h3></td>
                                    <td>  <h3> {{Auth::user()->gender}}</h3></td>
                                </tr>
                                <tr>
                                    <td> <h3 class="name">Phone: </h3></td>
                                    <td>  <h3> {{Auth::user()->phone}} </h3></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            </div>
        @endif            
                  
@endsection
