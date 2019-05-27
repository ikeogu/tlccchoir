@extends('layouts.noe_adm')

@section('noes')
<div class="row">
    <div class="col-1" style="padding-top:30px;;" >
    </div>
    <div class="col-11" style="padding-top:30px;" >

        <div class="card card-plain">
            <div class="card-header card-header-primary">
              <h4 class="card-title mt-0"> {{App\Noe_Team::count()}} Registered Choral Groups For NOE 2019 </h4>
              <p class="card-category">From Various state</p>
              
            </div>
            <div class="card-body">
                <div class="table-responsive">
                <table class="table table-hover">
                    <thead class="">
                        <th>
                        Group Name
                    </th>
                        <th>
                        Number
                        </th>
                        <th>
                        State
                        </th>
                        <th>
                            Title of Acappella Song
                        </th>
                                                <th>
                                                    Title of African Classical Song

                                                </th>
                                                <th>
                                                    Title of Acappella Contemporary Song

                                                </th>
                    </thead>
                    <tbody>

                    @foreach($teams as $user)
                    
                    
    
                            <tr>
                                        
                            
                            <td>
                                {{$user->name}}
                            </td>
                            <td>
                            {{$user->number}}
                            </td>
                            
                            <td >
                            {{ $user->state }}
                            </td>
                            <td >
                            {{ $user->acappella}}
                            </td>
                            <td>
                                {{ $user->african_class}}
                            </td>
                            <td>
                                {{ $user->african_con}}
                            </td>
                            
                                <td><a href="noe_team/{{ $user->id }}" class="btn btn-primary btn-md">View</a></td>                       
                            </tr>   
                        
                    @endforeach 
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection