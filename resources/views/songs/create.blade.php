@extends('layouts.app')

@section('content')


      <div class="" style="background-image: url('img/bg7.jpg'); background-size: cover; ">
        <div class="container" >
             <div class="row">
                <div class="col-lg-6 col-md-6 ml-auto mr-auto" style="padding-top:80px; ">
                    <div class="card card-login" >
                        <div class="card-header card-header-primary text-center">
                            <h4 class="card-title">{{ __('Write Song') }}</h4>
                        </div>  

              

                        <div class="row">
                            <div class="blockquote undefined">

                                        <h2>Why You Should Teach us your Song.</h2>
                                        <hr >
                                        <p class="description">Song is't meant for a person execpt in some cases loved ones, but there is fulfillment of the heart when you have an audience listening to your song and for it to gain popularity based on the assimilation of your audience plus the Melody.</p>
                                    
                            </div>
                        </div>


            <div class="container">
                <div class="title-area">
                    <h2 class="text-white">Song Form</h2>
                </div>
                <div class="col-md-offset-2 col-md-8 col-sm-4 col-md-offset-2" style="text-align: center;">
                    <h3>Please fill in the forms to send us your song</h3>
                    <div class="separator line-separator">♦</div>
                    <form action="{{route('songs.store')}}" method="POST" >
                     @csrf
                      <div class="form-group">
                            <h4>Title of the Song</h4>
                            <input type="text" class="form-control" name="title" required="">
                        </div>
                      <div class="form-group">
                        <h4>Author</h4>
                        <input type="text" class="form-control" name="author" required="">
                       
                      </div>
                </div>

                
                    <hr>
                      <div class="form-group">
                        <h4>What Type Of Song:</h4>
                        <select name="type" class="form-control">
                            <option value="Rivival Song"> Rivival Song  </option>
                            <option value="Salvation Song"> Salvation Song </option>
                            <option value="Marriage Song"> Marriage Song </option>
                        </select>                          
                      </div>
                                 
                            
               
                    
                    <hr>

                      <div class="form-group">
                        <h4>Here you go!.</h4>
                        <textarea class="form-control" rows="7" maxlength="5000" name="body" required="">                        
                       </textarea>
                        </div>
                    

                    <div class="button-get-started">
                         <input class="btn btn-primary btn-fill btn-lg " role="button" name="click" type="submit" aria-pressed="true">
                    </div>
                  </form>  
                </div>

          </div>
     </div>   
</div>
</div>
</div>
    
 @endsection          

