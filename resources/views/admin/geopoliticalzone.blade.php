@extends('layouts.admin') 
@section('content') 
    
    <div class="content" style="padding-top:120px">
        <div class="container-fluid">
        
            <div class="row">
            @foreach ($zone as $gzone)
            
                <div class="col-xl-4 col-lg-6 col-sm-6 col-md-6">
                    <div class="card card-chart">
                
                        <div class="card-body">
                        <a href="{{route($gzone->route)}}">
                            <h4 class="card-title">Geopolitical Zones</h4>
                            <p class="card-category">
                                <span class="text-success"> {{ $gzone->name}} </span> </p>
                            </div>
                            <div class="card-footer">
                            <div class="stats">
                                Number of states
                            {{$gzone->states}}
                            </div>
                        </a>
                        </div>
                    </div>    
                </div>
               
                @endforeach      
            </div>
          
        </div>   
    </div>
@endsection         
