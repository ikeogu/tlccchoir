@extends('layouts.admin') 
@section('content') 
<div class="col-md-12" style="padding-top:60px;">
              <div class="card card-plain">
                <div class="card-header card-header-primary">
                  <h4 class="card-title mt-0"> List of Songs in Campus Choir</h4>
                  <p class="card-category">From Various Song Writters</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead class="">
                       
                        <th>
                            ID
                        </th>
                        <th>
                          Title
                        </th>
                        <th>
                          Author
                        </th>
                        <th>
                          Type
                        </th>
                        <th>
                          SOng
                        </th>
                        <th>
                          Written
                        </th>
                      </thead>
                      <tbody>
                         @foreach($allsongs as $song)
                            <tr>
                                <td>
                                    {{$song->id}}
                                </td>
                                <td>
                                {{$song->title}}
                                </td>
                                <td>
                                {{$song->author}}
                                </td>
                                <td>
                                {{$song->type}}
                                </td>
                                <td>
                                {{ str_limit($song->body, $limit = 50, $end = '...') }}
                                </td>
                                <td>
                                {{$song-> created_at->diffForHumans()}}
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