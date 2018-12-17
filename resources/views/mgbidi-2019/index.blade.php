@extends('layouts.app')

@section('content')

   <section class="feature-area pt-100 pb-100  relative" style="padding-top: 60px;">
  <center> <h3>All Registered Choristers For Mgbidi 2019 Camp</h3> </center>
  <div class="white-bg">
		    <div class="container">
		      <div class="section-top-border">


		       
              <div class="row">
                 
                  <div class="content">
                    <div class="container-fluid">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="card">
                            <div class="card-header card-header-primary">
                              <h4 class="card-title ">Reg Details</h4>
                              <p class="card-category"> All registrations so far</p>
                            </div>
                            <div class="card-body">
                              <div class="table-responsive">
                                <table class="table">
                                  <thead class=" text-primary">
                                    <tr><th>
                                      ID
                                    </th>
                                    <th>
                                      Passport
                                    </th>
                                    <th>
                                      Name
                                    </th>
                                    <th>
                                      State
                                    </th>
                                    <th>
                                      School
                                    </th>
                                    <th>
                                      Gender
                                    </th>
                                    <th>
                                      Registered
                                    </th>
                                    <th>
                                      Action
                                    </th>
                                  </tr></thead>
                                  @foreach($users as $user)
                                  <tbody>
                                    <tr>
                                      <td>
                                         {{$user->id}}
                                      </td>
                                      
                                      <td>
                                          {{$user->firstname .' '. $user->lastname}}
                                      </td>
                                      <td>
                                      {{$user->state}}
                                      </td>
                                      
                                      <td >
                                      {{ $user->school }}
                                      </td>
                                      <td >
                                      {{ $user->gender }}
                                      </td>
                                      <td>
                                      {{ $user->created_at->diffForHumans()}}
                                      </td>
                                    
                                   
                                      <td><a href="{{action('MgbidiController@downloadPDF', $user->id)}}"> Download PDF</a></td>
                                      
                                    </tr>
                                  </tbody>
                                  @endforeach
                                </table>
                              </div>
                            </div>
                          </div>
                        </div>
                        
                  </div>
                                
                                
                       
                 
               
                </div>
            </div>
        </div>
    </div>  
</section>
         
@endsection