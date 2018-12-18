@extends('layouts.app')

@section('content')

<style>
.body {
       margin: 0;
       padding: 0;
       background: #EEE;
       font: 10px/13px 'Lucida Sans',sans-serif;
    }
    .wrap {
       overflow: hidden;
       margin: 10px;
    }
    .box {
       float: left;
       position: relative;
       width: 20%;
       padding-bottom: 20%;
    }
    .boxInner {
       position: absolute;
       left: 10px;
       right: 10px;
       top: 10px;
       bottom: 10px;
       overflow: hidden;
    }
    .boxInner img {
       width: 100%;
    }
    .boxInner .titleBox {
       position: absolute;
       bottom: 0;
       left: 0;
       right: 0;
       margin-bottom: -50px;
       background: #000;
       background: rgba(0, 0, 0, 0.5);
       color: #FFF;
       padding: 10px;
       text-align: center;
       -webkit-transition: all 0.3s ease-out;
       -moz-transition: all 0.3s ease-out;
       -o-transition: all 0.3s ease-out;
       transition: all 0.3s ease-out;
    }
    body.no-touch .boxInner:hover .titleBox, body.touch .boxInner.touchFocus .titleBox {
       margin-bottom: 0;
    }
   





.white {
    color: purple;
}
</style>

<div class="no-touch body" style="padding-top:60px;">
    

         <div class="wrap">
            @if($images->count())
                @foreach($images as $image)
               
                    <div class="box">
                        <div class="boxInner">
                            <img src="{{ url('images/'. $image->image) }}" />
                            <div class="titleBox">{{ $image->title }}</div>
                        </div>    
                    </div>
                   
                   
                @endforeach
            @endif

         </div>  
       <!-- list-group / end -->
    </div> <!-- row / end -->
</div> <!-- container / end -->





<script type="text/javascript">
    $(document).ready(function(){
        $(".fancybox").fancybox({
            openEffect: "none",
            closeEffect: "none"
        });
    });
</script>

@endsection