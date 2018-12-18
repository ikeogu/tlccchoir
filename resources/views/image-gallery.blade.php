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
   
    #myImg {
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
}

/* Caption of Modal Image */
#caption {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  text-align: center;
  color: #ccc;
  padding: 10px 0;
  height: 150px;
}

/* Add Animation */
.modal-content, #caption {  
  -webkit-animation-name: zoom;
  -webkit-animation-duration: 0.6s;
  animation-name: zoom;
  animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
  from {-webkit-transform:scale(0)} 
  to {-webkit-transform:scale(1)}
}

@keyframes zoom {
  from {transform:scale(0)} 
  to {transform:scale(1)}
}

/* The Close Button */
.close {
  position: absolute;
  top: 15px;
  right: 35px;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}

.close:hover,
.close:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
  .modal-content {
    width: 100%;
  }
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
                            <img id="myImg" src="{{ url('images/'. $image->image) }}" alt="{{ $image->title }}" style="width:100%;max-width:300px">

                            <!-- The Modal -->
                            <div id="myModal" class="modal">
                            <span class="close">&times;</span>
                            <img class="modal-content" id="img01">
                            <div id="caption"></div>
                            </div>
                      </div>    
                    </div>
                   
                    

                @endforeach
            @endif

         </div>  
       <!-- list-group / end -->
    </div> <!-- row / end -->
</div> <!-- container / end -->





<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}
</script>


@endsection