@extends('layouts.app')

@section('content')

<div class="no-touch body container" style="padding-top:60px;">
    <div class="container-fluid">
        <div class="row">
            
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">song Details</h4>
                        <p class="card-category"> All songs so far</p>
                    </div>
                    <div class="card-body">  
                        <div class="row">
                            <div class="wrap ">
                            @if($images->count())
                                @foreach($images as $image)
                                
                                    <div class="col-lg-3 col-md-4 col-sm-4">
                                        <div class="boxInner">
                                            <img src="{{ url('images/'. $image->image) }}" />
                                            <div class="titleBox">{{ $image->title }}</div>
                                        </div>    
                                    </div>
                                    
                                    
                                @endforeach
                            @endif

                            </div>  
                        
                        </div> <!-- row / end -->
                    </div> 
                </div>
            </div> 
        </div>
    </div>               <!-- container / end -->





<script type="text/javascript">
    $(document).ready(function(){
        $(".fancybox").fancybox({
            openEffect: "none",
            closeEffect: "none"
        });
    });
</script>

@endsection