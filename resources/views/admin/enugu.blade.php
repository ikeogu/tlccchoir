@extends('layouts.admin') 
@section('content') 
<div class="col-md-12" style="padding-top:60px;">
              <div class="card card-plain">
                <div class="card-header card-header-primary">
                  <h4 class="card-title mt-0"> All Registered Members of the Campus Choir</h4>
                  <p class="card-category">From Various state</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead class="">
                        <th>
                          ID
                        </th>
                        <th>
                          Name
                        </th>
                        <th>
                            State
                        </th>
                        <th>
                          Institution
                        </th>
                        <th>
                          Discipline
                        </th>
                        <th>
                          Phone
                        </th>
                        <th>
                          Gender
                        </th>
                        <th>
                          Email
                        </th>
                      </thead>
                      <tbody>
                         @foreach($auser as $user)
                            <tr>
                                <td>
                                    {{$user->id}}
                                </td>
                                <td>
                                {{$user->name}}
                                </td>
                                <td>
                                {{$user->state}}
                                </td>
                                <td>
                                {{$user->institution}}
                                </td>
                                <td>
                                {{$user-> discipline}}
                                </td>
                                <td>
                                {{$user-> phone}}
                                </td>
                                <td>
                                {{$user-> gender}}
                                </td>
                                <td>
                                {{$user-> email}}
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