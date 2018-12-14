@extends('layouts.app')

@section('content')


  <div class="page-header header-filter clear-filter purple-filter" style="background-image: url('img/1.jpg');">
    <div class="container">
      <div class="row">
      
        <div class="col-md-6">
          <h3>Welcome to</h3>
          <h2 class="title">The Lord's Chosen.</h2>
          <h1 class="title">Campus Choir</h1>
          <h3>We are <strong> One Holy Family </strong>made of gifted intellectuals. </h3>
          
          
        </div>
      </div>
    </div>
  </div>
  <div class="main main-raised">
    <div class="container">
      <div class="section text-center ">
      <div class="content">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div><br />
        @endif
        @if (\Session::has('success'))
        <div class="alert alert-success">
            <p>{{ \Session::get('success') }}</p>
        </div><br />
        @endif
    </div>
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto">
            <h2 class="title">Our Visions</h2>
            <h5 class="description">The Lord's Chosen has been
                        divinely endowed to awaken 
                        the conscience of human
                        race towards the realization 
                        of this vital grace of God,
                        which enables us to make
                        heaven at last. John 14:1-3
                        says, let not your heart be 
                        toubled: ye believe in GOD,
                        believe also in me.
            </h5>
          </div>
        </div>
        <div class="features">
          <div class="row">
            <div class="col-md-4 blockquote undefined">
              <div class="info">
                <div class="icon icon-info">
                  <i class="material-icons">edit</i>
                </div>
                <h4 class="info-title">Frist vision</h4>
                <strong><p>To discourage cultism and prostitution on Campus Prov16:15.</p></strong>
              </div>
            </div>
            <div class="col-md-4 blockquote undefined">

              <div class="info">
                <div class="icon icon-success">
                  <i class="material-icons">edit</i>
                </div>
                <h4 class="info-title">Second Vision</h4>
                <strong><p>To deliver and turn student frim the power of the dark(satan)
                  into the power of light(God) Acts26:18.</p></strong>
              </div>
            </div>
            <div class="col-md-4 blockquote undefined">
              <div class="info">
                <div class="icon icon-danger">
                  <i class="material-icons">edit</i>
                </div>
                <h4 class="info-title">Third Vision</h4>
                <strong><p>To preach the Gospel to sinners thereby expanding God's kingdom
                      on Campus mark16:15 and
                To discover talents and gifts on campus for the perfection of the Saints,
                work of the ministry and edifying the body of christ EPH4:8.</p></strong>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="section" id="carousel">
      <div class="container">
        <div class="row">
          <div class="col-md-8 mr-auto ml-auto">
            <!-- Carousel Card -->
            <div class="card card-raised card-carousel">
              <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="3000">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1" class=""></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2" class=""></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="img/9.jpg" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                      <h4>
                        <i class="material-icons">location_on</i>salvation song on stage
                      </h4>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="img/1.jpg" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block">
                      <h4>
                        <i class="material-icons">location_on</i> Rivival Song
                      </h4>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="img/11.jpg" alt="Third slide">
                    <div class="carousel-caption d-none d-md-block">
                      <h4>
                        <i class="material-icons">location_on</i> The Grace 
                      </h4>
                    </div>
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <i class="material-icons">keyboard_arrow_left</i>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <i class="material-icons">keyboard_arrow_right</i>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
            <!-- End Carousel Card -->
          </div>
        </div>
      </div>
    </div>
    <div class="section text-center">
      <h2 class="title">Here is our team</h2>
        <div class="team">
          <div class="row">
            <div class="col-md-4">
              <div class="team-player">
                <div class="card card-plain">
                  <div class="col-md-6 ml-auto mr-auto">
                    <img src="img/ch.jpg" alt="Thumbnail Image" class="img-raised rounded-circle img-fluid">
                  </div>
                  <h4 class="card-title">National Choir Master
                    <br>
                    <small class="card-description text-muted">Brother Chuks</small>
                  </h4>
                  <div class="card-body">
                    <p class="card-description"></p>
                  </div>
                  <div class="card-footer justify-content-center">
                    <a href="#pablo" class="btn btn-link btn-just-icon"><i class="fa fa-twitter"></i></a>
                    <a href="#pablo" class="btn btn-link btn-just-icon"><i class="fa fa-instagram"></i></a>
                    <a href="#pablo" class="btn btn-link btn-just-icon"><i class="fa fa-facebook-square"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="team-player">
                <div class="card card-plain">
                  <div class="col-md-6 ml-auto mr-auto">
                    <img src="img/em.jpg" alt="Thumbnail Image" class="img-raised rounded-circle img-fluid">
                  </div>
                  <h4 class="card-title">National Teno Leader
                    <br>
                    <small class="card-description text-muted">Brother Nester</small>
                  </h4>
                  <div class="card-body">
                    <p class="card-description"></p>
                  </div>
                  <div class="card-footer justify-content-center">
                    <a href="#pablo" class="btn btn-link btn-just-icon"><i class="fa fa-twitter"></i></a>
                    <a href="#pablo" class="btn btn-link btn-just-icon"><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="team-player">
                <div class="card card-plain">
                  <div class="col-md-6 ml-auto mr-auto">
                    <img src="img/3.jpg" alt="Thumbnail Image" class="img-raised rounded-circle img-fluid">
                  </div>
                  <h4 class="card-title">
                    <br>
                    <small class="card-description text-muted">Sister</small>
                  </h4>
                  <div class="card-body">
                    <p class="card-description"></p>
                  </div>
                  <div class="card-footer justify-content-center">
                    <a href="#pablo" class="btn btn-link btn-just-icon"><i class="fa fa-twitter"></i></a>
                    <a href="#pablo" class="btn btn-link btn-just-icon"><i class="fa fa-instagram"></i></a>
                    <a href="#pablo" class="btn btn-link btn-just-icon"><i class="fa fa-facebook-square"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="section section-contacts">
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto">
            <h2 class="text-center title">Work with us</h2>
            <h4 class="text-center description">Divide details about your product or agency work into parts. Write a few lines about each one and contact us about any further collaboration. We will responde get back to you in a couple of hours.</h4>
            <form class="contact-form">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Your Name</label>
                    <input type="email" class="form-control">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Your Email</label>
                    <input type="email" class="form-control">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="exampleMessage" class="bmd-label-floating">Your Message</label>
                <textarea type="email" class="form-control" rows="4" id="exampleMessage"></textarea>
              </div>
              <div class="row">
                <div class="col-md-4 ml-auto mr-auto text-center">
                  <button class="btn btn-primary btn-raised">
                    Send Message
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  
@endsection
