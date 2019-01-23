@extends('layouts.admin') 
@section('content') 
<div class="col-md-12" style="padding-top:60px;">
              <div class="card card-plain">
                <div class="card-header card-header-primary">
                  <h4 class="card-title mt-0"> All Registered Members of the Campus Choir</h4>
                  <p class="card-category">South West states</p>
                  
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead class="card-header-primary">
                        <th>
                          ID
                        </th>
                        <th>
                         State
                        </th>
                       
                      </thead>
                      <tbody>
                         @foreach($states as $state)
                            <tr>
                              <td>
                                <a href="{{route($state->route)}}">  {{$state->id}} </a>
                                </td>
                                <td>
                                <a href="{{route($state->route)}}">  {{ $state->name }} </a> 
                              </td>
                               
                                
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