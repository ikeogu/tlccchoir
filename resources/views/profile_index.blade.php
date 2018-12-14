@extends('layouts.app')

@section('content')


  <div class="page-header header-filter" data-parallax="true" style="background-image: url('img/city-profile.jpg');"></div>
    <div class="main main-raised">
      <div class="card">
        <div class="card-header">
           <h4>Dashboard</h4>
           <h5> You are logged in!</h5>
        </div>

        <div class="card-body">
            <div class="row">
                        @if ($message = Session::get('success'))

                            <div class="alert alert-success alert-block">

                                <button type="button" class="close" data-dismiss="alert">×</button>

                                <strong>{{ $message }}</strong>

                            </div>

                        @endif

                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        
                            <center> <h3>My Songs</h3> </center>
                            <div class="white-bg">
                                 <div class="container">
                                     <div class="section-top-border">
                                    
                                       
                                    <div class="content">
                                    <div class="container-fluid">
                                        <div class="row">
                                        <div class="col-md-12">
                                                    <div class="card">
                                                        <div class="card-header card-header-primary">
                                                        <h4 class="card-title ">My Song Details</h4>
                                                        <p class="card-category">Your songs so far</p>
                                                        </div>
                                                        <div class="card-body">

                                                        
                                                
                                                  
                                                        <div class="table-responsive">
                                                            <table class="table">
                                                            <thead class=" text-primary">
                                                                <tr>
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
                                                                <th>
                                                                    Action
                                                                </th>
                                                            </tr></thead>
                                            @foreach($songs as $songPresentation)
                                                 
                                                            <tbody>
                                                                <tr>
                                                                
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
                                                                  
                                                                 
                                                                    <td><a href="songs/{{ $songPresentation->id }}/edit" class="btn btn-primary"> Edit</a></td>
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
                            </div>  
</section>
         
@endsection