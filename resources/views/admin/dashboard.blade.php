@extends('layouts.admin') 
@section('content') 
    
<div class="content" style="padding-top:120px">
        <div class="container-fluid">
          <div class="row">
            <div class="col-xl-4 col-lg-12">
              <div class="card card-chart">
                
                <div class="card-body">
                  <h4 class="card-title">Number of Choristers</h4>
                  <p class="card-category">
                    <span class="text-success"> {{App\User::count()}} </span> .</p>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">access_time</i>  updated
                    {{ App\User::orderBy('updated_at', 'desc')->first()->updated_at->diffForHumans()}}
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-lg-12">
              <div class="card card-chart">
                
                <div class="card-body">
                  <h4 class="card-title">Number of people Coming for Mgbidi</h4>
                  <p class="card-category">{{App\Mgbidi::count()}}</p>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">access_time</i> updated 
                    {{ App\Mgbidi::orderBy('updated_at', 'desc')->first()->updated_at->diffForHumans()}}

                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-lg-12">
              <div class="card card-chart">
                
                <div class="card-body">
                  <h4 class="card-title">Number of Songs</h4>
                  <p class="card-category">{{App\SongPresentation::count()}}</p>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">access_time</i> updated
                    {{ App\SongPresentation::orderBy('updated_at', 'desc')->first()->updated_at->diffForHumans()}}

                  </div>
                </div>
              </div>
            </div>
          </div>
@endsection 
