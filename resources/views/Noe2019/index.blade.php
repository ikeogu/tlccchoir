@extends('layouts.noe')

@section('noe')
    

   
          
      <section id="about-us" class="about-us-layout">
        <h1 class="title">About NOE</h1>
        <figure>
            <img src="/img/caption.jpg" alt="Laptop" height="250" width="250">
        </figure>
        <article>
            <h2>NOTES OF ENHAKKORE </h2>

            <p> NOE~ stands for Notes of Enhakkore. it is a programme which was coined out in line of the No. 4 vision of TLCCF.<br/>
                'Enhakkore' was gotten from the Bible. Its translated to mean "Fountain of the Crier" or in simplier terms "Revival".<br/>
               
            </p>

            <p> NOE started in Imo State as Choir competition between  TLCCF schools in Imo state, but has since grown to the South East region <br/> and in time to come to the whole country and beyound.
            </p>
        </article>
    </section>

   
    <section id="our-services" >
        <h1>Info</h1>
       
        <section>
            
                    <div class="cad">
                        <div class="card-header">
                               
                            <h3>Venue</h3>
                        </div>
                        <div class="card-body">
                            <article>
                                <img src="/img/point.png" height="120" width="80"/>
                            </article>  
                            <p>SOPS THEATRE</p>
                            <p>FEDERAL UNIVERSITY OF TECHNOLOGY</p>
                            <p>OWERRI (FUTO)</p>
                            <p>IMO STATE</p>
                        </div>
                          
                    </div>
                  
                    <div class="cad">
                        <div class="card-header">
                                <span><a><i class="fas fa-map-marker-alt"></i></a></span>
                                <h3>Award</h3>
                        </div>
                        <div class="card-body">
                            <article>
                                <img src="/img/cup.png"  height="180" width="250"/>
                            </article>
                            <h4>Best Choir of the Night </h4>
                            <h4>Best Keyboardist of the Night</h4>
                            
                            
                        </div>
                            
                    </div>
                   
                    <div class="cad">
                        <div class="card-header">
                                
                                <h3>Creteria</h3>
                        </div>
                        <div class="card-body">
                                <article>
                                    <img src="/img/ham.jpg"  height="180" width="250"/>
                                </article>
                            <article>
                            <blockquote>

                               
                                <strong>The choral groups must be Campus choir members of TLCCF.</strong><br/>
                               <strong>A total number of 30 choral groups indicated intrest in this year's concert.<br/> However, choral groups will be shortlisted to either 5 or 8 finalists<br/> (Depending on the choice of the music selection committee) which will participate that night.</strong>
                            </blockquote>
                               <br>
                           
                                <strong>Songs to Sing </strong>
                                <hr>
                               <H5>African Contemporary Song</H5>
                                <h5>Acapella (Composed From Bible Verse)</h5>
                               <h5>African Classical Spiritual Song</h5>
                            
                            </article>

                        </div>
                            
                    </div>
                    <div class="cad">
                        <div class="card-header">
                               
                               <h3>Help Desk</h3>
                        </div>
                        <div class="card-body">
                             <article>
                                <img src="/img/phone.jpg"  height="200" width="250"/>
                            </article> 

                            <h4>07065513034</h4>
                            <h4>07039350143</h4>
                           
                        </div>
                          
                    </div>
               
           
        </section>
    </section>
    
    <section id="testimonials">
        <h1>Judges</h1>
        <section class="profiles">
            <article class="profile-active">
                <img src="/img/m3.jpg" alt="Profile pic of Jane Doe">
                <p>Chief Judge, South East and South South Regional Choirmaster of TLCCF</p>
                <p>
                    <span>Bro.</span> Solomon, Olubiyi.</p>
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
            <img src="/img/Choir.jpg" alt="City of Prague at night">
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
                <img src="/img/Choir.jpg" alt="City of Prague at night">
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
                <p>Choirs</p>
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

  
   <section>
         <div class="card card-plain">
            <div class="card-header card-header-primary">
              <h4 class="card-title mt-0"> {{App\Noe_Team::count()}} Registered Choral Groups For NOE 2019 </h4>
              <p class="card-category">From Various state</p>
              
            </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead class="">
                         <th>
                        S/NO
                      	</th>
                     	  <th>
                         Group Name
                      	</th>
                         <th>
                           Number
                         </th>
                          <th>
                            State
                          </th>
                          <th>
                             Title of Acappella Song
                          </th>
													<th>
														Title of African Classical Song

													</th>
													<th>
														Title of Acappella Contemporary Song

													</th>
													<th>
														Listen to Acappella Song
												 </th>
												 <th>
													 Lissten to African Classical Song

												 </th>
												 <th>
													 Listen to African Contemporary Song

												 </th>
                      </thead>
                      <tbody>

                        @foreach($team as $user)
                         <tr>
                                            
                              <td>
                                    {{$user->id}}
                                </td>
                                <td>
                                    {{$user->name}}
                                </td>
                                <td>
                                {{$user->number}}
                                </td>
                                
                                <td >
                                {{ $user->state }}
                                </td>
                                <td >
                                {{ $user->acappella}}
                                </td>
                                <td>
                                    {{ $user->african_class}}
                                </td>
                                <td>
                                    {{ $user->african_con}}
                                </td>
                            
                                 @foreach($user->musics as $music)    
                                <td>
                                    <audio controls>
                                        <source src="{{$music->acappella_url}}" type="audio/mpeg"></source>
                                    </audio>
                                </td>
                                <td>
                                    <audio controls>
                                        <source src="public/african_class/{{$music->african_class_song}}" type="audio/mpeg"></source>
                                    </audio>
                                
                                </td>
                                <td>
                                    <audio controls>
                                        <source src="public/african_con/{{$music->african_con_song}} type="audio/mpeg"></source>
                                    </audio>
                                </td>                        
                            </tr>   
                            @endforeach 
                       @endforeach 
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
   </section>
	 <section id="registered">
		<div class="card card-plain">
			<div class="card-header card-header-primary">
				<h4 class="card-title mt-0"> {{App\ShortList::count()}} ShortListed Choral Groups For NOE 2019 </h4>
				<p class="card-category">From Various state</p>
				
			</div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-hover">
								<thead class="">
                                    <th>
									 S/NO
									</th>
									 <th>
									 Group Name
									</th>
									 <th>
										 Number
									 </th>
										<th>
											State
										</th>
										<th>
											 Title of Acappella Song
										</th>
										<th>
											Title of African Classical Song

										</th>
										<th>
											Title of Acappella Contemporary Song

										</th>
								</thead>
								<tbody>
                                    @foreach($teams as $user)
                        
                       
      
                                    <tr>
									<td>
                                        {{$user->id}}
                                    </td>          
                                    
                                    <td>
                                        {{$user->name}}
                                    </td>
                                    <td>
                                    {{$user->number}}
                                    </td>
                                    
                                    <td >
                                    {{ $user->state }}
                                    </td>
                                    <td >
                                    {{ $user->acappella}}
                                    </td>
                                    <td>
                                        {{ $user->african_class}}
                                    </td>
                                    <td>
                                        {{ $user->african_con}}
                                    </td>
                                </tr>   
                                
                                @endforeach 
						        </tbody>
							</table>
						</div>
					</div>
				</div>
	</section>
    <section id="contact">
        
        <h2>Let's see what your Team got!</h2>
        <div class="row">
            <div class="">
              <div class="cad card-login" >
                    <div class="content">
                    @if (\Session::has('success'))
                            <div class="alert alert-success">
                                <p>{{ \Session::get('success') }}</p>
                            </div><br />
                    @endif
                    </div>
                
                    <form method="POST" action="{{route('reg')}}" enctype="multipart/form-data">
                              @csrf
                        <div class="card-header card-header-primary text-center" style="
                                                            padding-left: 20px;
                                                            padding-right: 5px;
                                                            width: 240px;
                                                            height: 80px;
                                                            margin-left: 20px;">
                            <h4 class="card-title">Register your Team</h4>
                        </div>
                        <div class="content">
                                <span id="success"></span>
                                <span id="error"></span>
                        </div>
                    <div class="card-body">
                        
                        
                             <input type="text" id="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus placeholder="Team Name...">
                            @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                       
                        <br/>
                        
                        
                            <input type="text" id="name1" class="form-control " class="form-control{{ $errors->has('number') ? ' is-invalid' : '' }}" name="number" value="{{ old('number') }}" required placeholder="Number of Choristers in your team">
        
                            @if ($errors->has('number'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('number') }}</strong>
                                </span>
                            @endif 
                        
                        <br/>
                       
                            <input type="hidden"  id="name2" class="form-control{{ $errors->has('state') ? ' is-invalid' : '' }}" name="state" value="{{ old('state') }}" required autofocus>
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
                         
                        <br/>
                        
                        
                                <input type="text" id="name3" class="form-control" class="form-control{{ $errors->has('african_con') ? ' is-invalid' : '' }}" name="african_con" value="{{ old('african_con') }}" required placeholder="Title of Your African Contemporary Song">
    
                                @if ($errors->has('african_con'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('african_con') }}</strong>
                                    </span>
                                @endif 
                        
                        <br/>
                        
                                    <input type="text" id="name4" class="form-control" class="form-control{{ $errors->has('acappella') ? ' is-invalid' : '' }}" name="acappella" value="{{ old('acappella') }}" required placeholder="Title of Your Acappella Song">

                                @if ($errors->has('acappella'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('acappella') }}</strong>
                                    </span>
                                @endif 
                       
                        <br/>
                        
                    
                            <input type="text" id="password" class="form-control" class="form-control{{ $errors->has('african_class') ? ' is-invalid' : '' }}" name="african_class" value="{{ old('african_class') }}" required placeholder="Title of Your African Classical Spiritual Song">

                            @if ($errors->has('african_class'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('african_class') }}</strong>
                                </span>
                            @endif 
                        

                        <br/>
			                      
                                <button id="submit" class="btn  btn-round btn-md " style="float:left;margin-left: 10px;">Register</button>
                        
                        </div>                 
                     </form>
                </div>
            </div>
        </div>
				<br>
        <section id="testimonials">
            <h2>Submit Songs with Lyrics</h2>
            <div class="row">
							<div class="">
								<div class="cad card-login" >
									<div class="content">
									@if (\Session::has('success'))
													<div class="alert alert-success">
															<p>{{ \Session::get('success') }}</p>
													</div><br />
									@endif
									</div>
									<div class="col-md-12">
									<div class="panel with-nav-tabs panel-yellow justify">
											<div class="panel-heading">
												<ul class="nav nav-tabs">
														<li class="active"><a href="#Acappella" data-toggle="tab">Acapella</a></li>
														<li class=""><a href="#classical" data-toggle="tab">Classical </a></li>
														<li><a href="#contem" data-toggle="tab">Contemporary</a></li>
														
												</ul>
											</div>
											<div class="panel-body">
													<div class="tab-content">
															<div class="tab-pane fade active in" id="Acappella">
																<form method="POST" action="{{route('aca')}}" enctype="multipart/form-data">
																				@csrf
																		<div class="card-header card-header-primary text-center" style="
																																				padding-left: 20px;
																																				padding-right: 5px;
																																				width: 240px;
																																				height: 80px;
																																				margin-left: 20px;">
																				<h4 class="card-title">Submit Acappella Song</h4>
																		</div>
																
																		<div class="card-body">
																			<select class="form-control" name="neo_team_id">
   
																				<option>Select Your Team</option>
																					
																				@foreach ($team as $key)
																					<option value="{{ $key->id }}" > 
																							{{ $key->name }} 
																					</option>
																				@endforeach    
																			</select>
																			<br>
																				<div class=" ">
																						<select class="form-control"name="category">
																								<option value="acappella_Song">Acappella Song</option>
																							
																						</select>
																				</div>
																					<br>
																				<div class=" ">
																					<input type="file" name="acappella_song" class="form-control">
																					
																				</div>
																				<br>
																				<div class=" ">
																				
																				<textarea type="text"  class="form-control" name="acappella_lyrics" value="" required="" autofocus="" placeholder="Acappella Song Lyrics" style="margin: 0px; width: 277px; height: 207px;"> </textarea>
																						@if ($errors->has('acappella_lyrics'))
																								<span class="invalid-feedback" role="alert">
																										<strong>{{ $errors->first('acappella_lyrics') }}</strong>
																								</span>
																						@endif
																				</div>
																				<br/>
																				<div class=" ">
																								<button id="submit" class="btn  btn-round btn-md " style="float:left;margin-left: 10px;">Submit</button>
																				</div>

																		</div>
																</form>
															</div>
															<div class="tab-pane fade " id="classical">
																<form method="POST" action="{{route('cla')}}" enctype="multipart/form-data">
																				@csrf
																		<div class="card-header card-header-primary text-center" style="
																																				padding-left: 20px;
																																				padding-right: 5px;
																																				width: 240px;
																																				height: 80px;
																																				margin-left: 20px;">
																				<h4 class="card-title">Submit Classical Song</h4>
																		</div>
																
																		<div class="card-body">
																				
																				<select class="form-control" name="neo_team_id">
   
																					<option>Select Your Team</option>
																						
																					@foreach ($team as $key)
																						<option value="{{ $key->id }}" > 
																								{{ $key->name }} 
																						</option>
																					@endforeach    
																				</select>
																				<br>
																				<select class="form-control"name="category1">
																						
																						<option value="African_Classical_Spiritual_Song">African Classical Spiritual Song</option> 
																						
																				</select>
																			
																				<br>
																				<div class=" ">
																					<input type="file" class="form-control" name="african_class_song">
																				</div>
																				<br>
																				<div class=" ">
																				
																						<textarea type="text" id="name" class="form-control{{ $errors->has('african_class_lyrics') ? ' is-invalid' : '' }}" name="african_class_lyrics" value="{{ old('african_class_lyrics') }}" required autofocus placeholder="African Classical Song Lyrics" style="margin: 0px; width: 277px; height: 207px;"> </textarea>
																						@if ($errors->has('african_class_lyrics'))
																								<span class="invalid-feedback" role="alert">
																										<strong>{{ $errors->first('african_class_lyrics') }}</strong>
																								</span>
																						@endif
																				</div>
																				<br/>
																			<div class=" ">
																							<button id="submit" class="btn  btn-round btn-md " style="float:left;margin-left: 10px;">Submit</button>
																			</div>	
																		</div>
																	
																</form>
															</div>

															<div class="tab-pane fade" id="contem">
																<form method="POST" action="{{route('con')}}" enctype="multipart/form-data">
																				@csrf
																		<div class="card-header card-header-primary text-center" style="
																																				padding-left: 20px;
																																				padding-right: 5px;
																																				width: 240px;
																																				height: 80px;
																																				margin-left: 20px;">
																				<h4 class="card-title">Submit Contemporary Song</h4>
																		</div>
																
																		<div class="card-body">

																		<select class="form-control" name="neo_team_id">
   
																			<option>Select Your Team</option>
																				
																			@foreach ($team as $key)
																				<option value="{{ $key->id }}" > 
																						{{ $key->name }} 
																				</option>
																			@endforeach    
																		</select>
																		<br>
																				<div class=" ">
																						<select class="form-control"name="category2">
																								<option value="African_Contemporary_Song">African Contemporary Song</option>
																						</select>
																				</div>
																				<br>
																				<div class=" ">
																					<input type="file" class="form-control" name="african_con_song">

																				</div>
																				<br>
																				<div class=" ">
																				
																						<textarea type="text"  class="form-control{{ $errors->has('african_con_lyrics') ? ' is-invalid' : '' }}" name="african_con_lyrics" value="{{ old('african_con_lyrics') }}" required autofocus placeholder=" African Contemporary Song Lyric" style="margin: 0px; width: 277px; height: 207px;"> </textarea>
																						@if ($errors->has('african_con_lyrics'))
																								<span class="invalid-feedback" role="alert">
																										<strong>{{ $errors->first('african_con_lyrics') }}</strong>
																								</span>
																						@endif
																				</div>
																				<br/>
																			
																				<div class=" ">
																								<button id="submit" class="btn  btn-round btn-md " style="float:left;margin-left: 10px;">Submit</button>
																				</div>
																		</div>
																</form>
															</div>
														
													</div>
											</div>
									</div>
								</div>
							</div>
						</div>	
                   
                       
        </section>
       
        <section class="media-icons">
            <ion-icon class="icon-pnk" name="logo-facebook"></ion-icon>
            <ion-icon class="icon-pnk" name="logo-twitter"></ion-icon>
            <ion-icon class="icon-pnk" name="logo-googleplus"></ion-icon>
            <ion-icon class="icon-pnk" name="logo-linkedin" > </ion-icon>
        </section>
    </section>
	
@endsection