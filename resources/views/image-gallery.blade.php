@extends('layouts.app')

@section('content')

<div class="no-touch body container" style="padding-top:60px;">
    <div class="container-fluid">
        <div class="row">
            
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">Our Gallery</h4>
                        <p class="card-category"> Are we not cute enough??</p>
                    </div>
                    <div class="card-body">  
                        <div class="row">
                            
                            @if($images->count())
                                @foreach($images as $image)
                                
                                    <div class="col-lg-3 col-md-4 col-sm-4">
                                        <div class="boxInner">
                                            <img src="{{ url('images/'. $image->image) }}" style="max-width: 100%"/>
                                            <div class="titleBox">{{ $image->title }}</div>
                                        </div>    
                                    </div>
                                    
                                    
                                @endforeach
                            @endif

                           
                        
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