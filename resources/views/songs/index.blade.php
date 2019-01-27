@extends('layouts.app')

@section('content')

   <section class="feature-area pt-100 pb-100  relative" style="padding-top: 60px;">
  <center> <h3>All Songs</h3> </center>
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
                              <h4 class="card-title ">song Details</h4>
                              <p class="card-category"> All songs so far</p>
                            </div>
                            <div class="card-body">
                              <div class="table-responsive">
                                <table class="table table-hover">
                                  <thead class="text-primary">
                                    <th>
                                      ID
                                    </th>
                                    <th>
                                      Song Title
                                    </th>
                                    <th>
                                      Song Writter
                                    </th>
                                    <th>
                                      Type
                                    </th>
                                    <th>
                                      Song
                                    </th>
                                    <th>
                                      Created At
                                    </th>
                                    <th>
                                      Action
                                    </th>
                                  </thead>
                                  @foreach($songs as $songPresentation)
                                  <tbody>
                                    <tr>
                                      <td>
                                         {{$songPresentation->id}}
                                      </td>
                                      <td>
                                         {{  $songPresentation->title}}
                                      </td>
                                      <td>
                                          {{$songPresentation->author}}
                                      </td>
                                      <td>
                                      {{$songPresentation->type}}
                                      </td>
                                      
                                      <td class="text-primary">
                                      {{ str_limit($songPresentation->body, $limit = 50, $end = '...') }}
                                      </td>
                                      <td>
                                      {{$songPresentation->created_at->diffForHumans()}}
                                      </td>
                                    
                                   
                                      <td><a href="songs/{{ $songPresentation->id }}" class="btn btn-primary">View</a></td>
                                      
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