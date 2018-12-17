@extends('layouts.admin') 
@section('content') 
  
      <!-- End Navbar -->
      <div class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-8">
                <div class="card">
                  <div class="card-header card-header-primary">
                    <h4 class="card-title">Edit Profile</h4>
                    <p class="card-category"> My profile</p>
                  </div>
                  <div class="card-body">
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
              <div class="col-md-4">
                <div class="card card-profile">
                  <div class="card-avatar">
                    <a href="#pablo">
                      <img class="img" src="/storage/avatars/{{Auth::user()->avatar }}" />
                    </a>
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
                  <div class="card-body">
                    <h6 class="card-category">Adminr</h6>
                    <h4 class="card-title">Chorister</h4>
                    <p class="card-description">
                      Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                    </p>
                    <a href="#pablo" class="btn btn-primary btn-round">Follow</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection        