@extends('layouts.admin') 
@section('content') 
<div class="col-md-12" style="padding-top:60px;">
              <div class="card card-plain">
                <div class="card-header card-header-primary">
                  <h4 class="card-title mt-0"> All Registered Members of the Campus Choir</h4>
                  <p class="card-category">From Various state</p>
                  <p class="card-category"><span class="text-success">{{App\Mgbidi::count()}} </span>Registered</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead class="card-header-primary">
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
                          School
                        </th>
                        <th>
                          Gender
                        </th>
                        <th>
                         Health Status
                        </th>
                        <th>
                           Peach 
                        </th>
                        <th>
                          Mint Green
                        </th>
                        <th>
                          White
                        </th>
                        <th>
                          Orange
                        </th>
                        <th>
                          Ties/Head Ties
                        </th>
                        <th>
                          Phone
                        </th>
                        <th>
                          Email
                        </th>
                        <th>
                          Comment
                        </th>

                      </thead>
                      <tbody>
                         @foreach($mgbidi as $user)
                            <tr>
                                <td>
                                    {{$user->id}}
                                </td>
                                <td>
                                {{ $user->firstname .  $user->lastname  }}
                                </td>
                                <td>
                                {{$user->state}}
                                </td>
                                <td>
                                {{$user->school}}
                                </td>
                                <td>
                                {{$user-> gender}}
                                </td>
                                <td>
                                {{$user-> health_status}}
                                </td>
                                <td>
                                {{$user-> p_uniform}}
                                </td>
                                <td>
                                {{$user-> m_uniform}}
                                </td>
                                <td>
                                {{$user-> w_uniform}}
                                </td>
                                <td>
                                {{$user-> o_uniform}}
                                </td>
                                <td>
                                {{$user-> ties}}
                                </td>
                                <td>
                                {{$user-> phone}}
                                </td>
                                <td>
                                {{$user-> email}}
                                </td>
                                <td>
                                {{$user-> coment}}
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