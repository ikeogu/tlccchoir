@extends('layouts.admin') 
@section('content') 
<div class="container" style="padding-top:120px">

<h3>Delete Images on Image Gallery</h3>

    {!! csrf_field() !!}


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


    @if ($message = Session::get('success'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
    </div>
    @endif

                            @if($images->count())
                                @foreach($images as $image)
                                
                                    <div class="col-lg-3 col-md-4 col-sm-4">
                                        <div class="boxInner">
                                            <img src="{{ url('images/'. $image->image) }}" style="max-width: 100%"/>
                                            <div class="titleBox">{{ $image->title }}</div>
                                        </div>    
                                    </div>
                                    
                                    

                
                                    <form action="{{ url('admin/deleteuploadedimages',$image->id) }}" method="POST">

                                    <input type="hidden" name="_method" value="delete">
                                    {!! csrf_field() !!}
                                    <button type="submit" class="close-icon btn btn-danger"><i class="glyphicon glyphicon-remove"></i>Delete</button>
                                    </form>
                                   


                                @endforeach
                            @endif


    
@endsection