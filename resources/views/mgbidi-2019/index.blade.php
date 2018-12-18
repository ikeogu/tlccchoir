@extends('layouts.app')

@section('content')


<div class="col-md-12" style="padding-top:60px;">
              <div class="card card-plain">
                <div class="card-header card-header-primary">
                  <h4 class="card-title mt-0"> All Registered Choristers For Mgbidi 2019 Camp</h4>
                  <p class="card-category">From Various state</p>
                  <h3 class="card-category"><span text="class-success"> {{App\Mgbidi::count()}} Registered </span></h3>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead class="">
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
                      </thead>
                      <tbody>

                        @foreach($users->sortBy('firstname') as $user)
                        
                       
      
                              <tr>
                                            
                                
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
                            
                       @endforeach 
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
     @endsection 