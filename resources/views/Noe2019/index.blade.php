@extends('layouts.noe')

@section('noe')
    

   
          
      <section id="about-us" class="about-us-layout">
        <h1 class="title">About NOE</h1>
        <figure>
            <img src="/img/caption.jpg" alt="Laptop">
        </figure>
        <article>
            <h2>NOTES OF ENAHKORRE </h2>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim, deleniti similique qui molestiae libero sunt totam
                animi placeat dolores vero atque possimus nisi, officia quas, praesentium ex voluptate illum rem obcaecati
                ipsam. Consequuntur.
            </p>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim, deleniti similique qui molestiae libero sunt totam
                animi placeat dolores vero atque possimus nisi, officia quas, praesentium ex voluptate illum rem obcaecati
                ipsam. Consequuntur.
            </p>
        </article>
    </section>

   
    <section id="our-services" >
        <h1>Info</h1>
       
        <section>
            
                    <div class="cad">
                        <div class="card-header">
                               
                                <ion-icon class="icon-yel" name="compass" md="md-compass"></ion-icon>
                                <h3>Venue</h3>
                        </div>
                        <div class="card-body">
                                
                            <h4>SOPS THEATRE</h4>
                            <h4>FEDERAL UNIVERSITY OF TECHNOLOGY</h4>
                            <h4>OWERRI (FUTO)</h4>
                            <H5>IMO STATE</H5>
                        </div>
                          
                    </div>
                  
                    <div class="cad">
                        <div class="card-header">
                                <span><a><i class="fas fa-map-marker-alt"></i></a></span>
                                <h3>Award</h3>
                        </div>
                        <div class="card-body">
                            <h4>1st Prize</h4>
                            <h4>2nd prize</h4>
                            <h4>3rd price</h4>
                            
                        </div>
                            
                    </div>
                   
                    <div class="cad">
                        <div class="card-header">
                                <span><a><i class="fas fa-map-marker-alt"></i></a></span>
                                <h3>creteria</h3>
                        </div>
                        <div class="card-body">
                            <h4>SOPS THEATRE</h4>
                            <h4>FEDERAL UNIVERSITY OF TECHNOLOGY</h4>
                            <h4>OWERRI (FUTO)</h4>
                            <H5>IMO STATE</H5>
                        </div>
                            
                    </div>
               
           
        </section>
    </section>
    
    <section id="testimonials">
        <h1>Judges</h1>
        <section class="profiles">
            <article class="profile-active">
                <img src="/img/bass.jpg" alt="Profile pic of Jane Doe">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi, repellendus in tempore expedita accusantium
                    assumenda minus quaerat perferendis placeat veniam nostrum unde odio incidunt nisi?</p>
                <p>
                    <span>Jane Doe</span>, CEO, company.</p>
            </article>
            <article>
                <img src="/img/bg3.jpg" alt="Profile pic of John Doe">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi, expedita accusantium assumenda veniam nostrum
                    unde odio incidunt nisi?
                </p>
                <p>
                    <span>John Doe</span>, CEO, company.</p>
            </article>
            <article>
                <img src="/img/bass.jpg" alt="Profile pic of Jack Doe">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis reprehenderit totam nemo quo. Itaque,
                    repudiandae. Assumenda sit vitae veniam? Numquam iste culpa maiores. Excepturi, alias quae et perferendis
                    voluptatem inventore.</p>
                <p>
                    <span>Jack Doe</span>, CEO, company.</p>
            </article>
        </section>

        <section class="indicators">
            <div class="active" onclick="changeInfo(0)"></div>
            <div onclick="changeInfo(1)"></div>
            <div onclick="changeInfo(2)"></div>
        </section>
    </section>  
    
    <section id="gallery">
        <h1>Gallery</h1>
        <h2>Lorem ipsum, dolor sit amet consectetur adipisicing. Lorem ipsum dolor.</h2>

        <nav class="gallery--btns">
            <button class="btn-all btn-active">All</button>
            <button class="btn-lorem">Event</button>
            <button class="btn-dolar">Spot</button>
            <button class="btn-ipsum">Pick</button>
        </nav>

        <section class="imgs">
            <section class="lorem">
                 <img src="/img/1.jpg" alt="Bird on a tree"> 
                <div data-index="0">
                    <p>Lorem Ipsum</p>
                </div>
            </section>
            <section class="dolar">
                <img src="/img/7.jpg" alt="Boat at night">
                <div data-index="1">
                    <p>Dolar Sit</p>
                </div>
            </section>
            <section class="lorem">
                <img src="/img/9.jpg" alt="Dog sitting">
                <div data-index="2">
                    <p>Lorem Ipsum</p>
                </div>
            </section>
            <section class="dolar">
                <img src="/img/11.jpg" alt="Fox sitting">
                <div data-index="3">
                    <p>Dolar Sit</p>
                </div>
            </section>
            <section class="ipsum">
            <img src="/img/12.jpg" alt="Island">
                <div data-index="4">
                    <p>Ipsum Elit</p>
                </div>
            </section>
            <section class="lorem">
            <img src="/img/bg3.jpg" alt="Flowers on a table">
                <div data-index="5">
                    <p>Lorem Ipsum</p>
                </div>
            </section>
            <section class="ipsum">
            <img src="/img/bg7.jpg" alt="Village during the day">
                <div data-index="6">
                    <p>Ipsum Elit</p>
                </div>
            </section>
            <section class="lorem">
            <img src="/img/chior.jpg" alt="City of Prague at night">
                <div data-index="7">
                    <p>Lorem Ipsum</p>
                </div>
            </section>
            
        </section>
    </section>

    <section id="modal">
        <section class="modal-background">
            <div class="close-btn">&times;</div>
            <figure>
                <img class="img-main">
            </figure>
            <figure class="modal-gallery">
                <img src="/img/1.jpg" alt="Bird on a tree">
                <img src="/img/7.jpg" alt="Boat at night">
                <img src="/img/9.jpg" alt="Dog sitting">
                <img src="/img/11.jpg" alt="Fox sitting">
                <img src="/img/12.jpg" alt="Island">
                <img src="/img/bg3.jpg" alt="Flowers on a table">
                <img src="/img/bg7.jpg" alt="Village during the day">
                <img src="/img/chior.jpg" alt="City of Prague at night">
                <img src="/img/ven4.jpg" alt="Ducks in a pond">
                <img src="/img/ven3.jpg" alt="Squirrel in the snow">
                <img src="/img/ven2.jpg" alt="Lemon slice">
                <img src="/img/cover.jpg" alt="Small church at night">
            </figure>
            <section class="modal-btns">
                <button class="modal-btn prev-btn">&lt;</button>
                <button class="modal-btn next-btn">&gt;</button>
            </section>
        </section>
    </section>

    <section id="parallax">
        
        <section class="info">
            <article>
                <h4>8</h4>
                <p>Chiors</p>
            </article>
            <article>
                <h4>1</h4>
                <p>Nation</p>
            </article>
            <article>
                <h4>1</h4>
                <p>Stage</p>
            </article>
            <article>
                <h4>1</h4>
                <p>Night</p>
            </article>
            <article>
                <h4>1</h4>
                <p>God</p>
            </article>
            <article>
                <h4>A</h4>
                <p>Million Praise</p>
            </article>
        </section>
    </section>

   

    <section id="contact">
        
        <h2>Let's see what your Team got!</h2>
        <div class="row">
            <div class="">
              <div class="cad card-login" >
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
                  @if (Session::has('success'))
                  <div class="alert alert-success">
                      <p>{{ Session::get('success') }}</p>
                  </div><br />
                  @endif
                </div>
                <form method="POST" action="{{ route('reg') }}" enctype="multipart/form-data">
                              @csrf
                  <div class="card-header card-header-primary text-center" style="
                                                            padding-left: 20px;
                                                            padding-right: 5px;
                                                            width: 240px;
                                                            height: 80px;
                                                            margin-left: 20px;">
                    <h4 class="card-title">Register your Team</h4>
                    
                  </div>
                  
                  <div class="card-body">
                    <div class="input-group">
                      
                      <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus placeholder="Team Name...">
                      @if ($errors->has('name'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('name') }}</strong>
                          </span>
                      @endif
                    </div>
                    <div class="input-group">
                     
                      <input type="text" class="form-control" class="form-control{{ $errors->has('number') ? ' is-invalid' : '' }}" name="number" value="{{ old('number') }}" required placeholder="Number of Choristers in your team">
    
                        @if ($errors->has('number'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('number') }}</strong>
                            </span>
                        @endif 
                    </div>
                    <div class="input-group">
                      <input type="hidden" class="form-control{{ $errors->has('state') ? ' is-invalid' : '' }}" name="state" value="{{ old('state') }}" required autofocus>
                          <select name="state" class='form-control'>
                            <option value="" selected="selected">- State-</option>
                            <option value="Abuja FCT">Abuja FCT</option>
                            <option value="Abia">Abia</option>
                            <option value="Adamawa">Adamawa</option>
                            <option value="Akwa Ibom">Akwa Ibom</option>
                            <option value="Anambra">Anambra</option>
                            <option value="Bauchi">Bauchi</option>
                            <option value="Bayelsa">Bayelsa</option>
                            <option value="Benue">Benue</option>
                            <option value="Borno">Borno</option>
                            <option value="Cross River">Cross River</option>
                            <option value="Delta">Delta</option>
                            <option value="Ebonyi">Ebonyi</option>
                            <option value="Edo">Edo</option>
                            <option value="Ekiti">Ekiti</option>
                            <option value="Enugu">Enugu</option>
                            <option value="Gombe">Gombe</option>
                            <option value="Imo">Imo</option>
                            <option value="Jigawa">Jigawa</option>
                            <option value="Kaduna">Kaduna</option>
                            <option value="Kano">Kano</option>
                            <option value="Katsina">Katsina</option>
                            <option value="Kebbi">Kebbi</option>
                            <option value="Kogi">Kogi</option>
                            <option value="Kwara">Kwara</option>
                            <option value="Lagos">Lagos</option>
                            <option value="Nassarawa">Nassarawa</option>
                            <option value="Niger">Niger</option>
                            <option value="Ogun">Ogun</option>
                            <option value="Ondo">Ondo</option>
                            <option value="Osun">Osun</option>
                            <option value="Oyo">Oyo</option>
                            <option value="Plateau">Plateau</option>
                            <option value="Rivers">Rivers</option>
                            <option value="Sokoto">Sokoto</option>
                            <option value="Taraba">Taraba</option>
                            <option value="Yobe">Yobe</option>
                            <option value="Zamfara">Zamfara</option>
                            <option value="Outside Nigeria">Outside Nigeria</option>
                          </select>
                            @if ($errors->has('state'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('state') }}</strong>
                                </span>
                            @endif
                        </div>              
                      </div>
                      <div class="input-group">
                        <button class="btn  btn-round btn-md " style="float:left;margin-left: 10px;">Register</button>
                      </div>
                  </div>
                </form>
            </div>
          </div>
        </div>

        <section class="media-icons">
            <ion-icon class="icon-pnk" name="logo-facebook"></ion-icon>
            <ion-icon class="icon-pnk" name="logo-twitter"></ion-icon>
            <ion-icon class="icon-pnk" name="logo-googleplus"></ion-icon>
            <ion-icon class="icon-pnk" name="logo-linkedin"></ion-icon>
        </section>
    </section>
    <!-- Swiper -->
  
@endsection