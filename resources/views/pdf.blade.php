<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
   
</head>
<body>
<div class="white-bg">
		    <div class="container">
		      <div class="section-top-border">


		       
              <div class="row">
                 
                  <div class="content">
                    <div class="container-fluid">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="card">
                            <div class="card-header card-header-primary">
                              <h4 class="card-title ">Reg Details</h4>
                              <p class="card-category"> All registrations so far</p>
                            </div>
                            <div class="card-body">
                              <div class="table-responsive">
                                <table class="table">
                                  <thead class=" text-primary">
                                    <tr><th>
                                      ID
                                    </th>
                                    <th>
                                      Passport
                                    </th>
                                    <th>
                                      Name
                                    </th>
                                    <th>
                                      State
                                    </th>
                                    <th>
                                      School
                                    </th>
                                    <th>
                                      Gender
                                    </th>
                                    <th>
                                      Registered
                                    </th>
                                    
                                  </tr></thead>
                                  @foreach($user as $my)
                                  <tbody>
                                    <tr>
                                      <td>
                                         {{$my->id}}
                                      </td>
                                      <td>
                                         {{  $my->passport}}
                                      </td>
                                      <td>
                                          {{$my->firstname . $my->lastname}}
                                      </td>
                                      <td>
                                      {{$my->state}}
                                      </td>
                                      
                                      <td >
                                      {{ $my->school }}
                                      </td>
                                      <td >
                                      {{ $my->gender }}
                                      </td>
                                      <td>
                                      {{ $my->created_at->diffForHumans()}}
                                      </td>
                                    
                                   
                                      
                                      
                                    </tr>
                                  </tbody>
                                    

                                  @endforeach
                                </table>
                              </div>
                            </div>
                            <div class="card-header card-header-primary">
                              <h4 class="card-title ">Information About Your Uniforms/ Health</h4>
                              <p class="card-category"> Your registrations so far</p>
                            </div>    
                             <div class="card-body">
                              <div class="table-responsive">
                                <table class="table">
                                  <thead class=" text-primary">
                                   
                                    <th>
                                      Health Status
                                    </th>
                                    <th>
                                      Peach 
                                    </th>
                                    <th>
                                      White
                                    </th>
                                    <th>
                                     Mint Green
                                    </th>
                                    <th>
                                     Orange
                                    </th>
                                    <th>
                                     Black
                                    </th>
                                    <th>
                                      Navy Blue
                                    </th>
                                    <th>
                                      Ties
                                    </th>
                                  </tr></thead>
                                  @foreach($user as $my)
                                  <tbody>
                                    <tr>
                                      <td>
                                         {{$my->health_status}}
                                      </td>
                                      <td>
                                         {{  $my->p_uniform}}
                                      </td>
                                      <td>
                                          {{$my->w_uniform}}
                                      </td>
                                      <td>
                                      {{$my->m_uniform}}
                                      </td>
                                      <td>
                                      {{$my->o_uniform}}
                                      </td>
                                      
                                      <td >
                                      {{ $my->b_uniform }}
                                      </td>
                                      <td >
                                      {{ $my->n_uniform }}
                                      </td>
                                      <td>
                                      {{ $my->ties}}
                                      </td>
                                    
                                   
                                      <td>
                                      </td>
                                      
                                    </tr>
                                  </tbody>
                                    

                                  @endforeach
                                </table>
                              </div>
                            </div>
                          </div>
                        </div>
                        
                  </div>
                                
                                
                       
                 
               
                </div>
            </div>
        </div>
    </div>  
      
</body>
</html>