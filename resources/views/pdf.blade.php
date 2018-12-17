<!DOCTYPE html>
<html>
<head>
   
  
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
                                 
                                  <tbody>
                                    <tr>
                                      <td>
                                         {{$user->id}}
                                      </td>
                                      
                                      <td>
                                          {{$user->firstname . $user->lastname}}
                                      </td>
                                      <td>
                                      {{$user->state}}
                                      </td>
                                      
                                      <td >
                                      {{ $user->school }}
                                      </td>
                                      <td >
                                      {{ $user->gender }}
                                      </td>
                                      <td>
                                      {{ $user->created_at->diffForHumans()}}
                                      </td>
                                    
                                   
                                      
                                      
                                    </tr>
                                  </tbody>
                                    

                                
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
                                  @foreach($user as $user)
                                  <tbody>
                                    <tr>
                                      <td>
                                         {{$user->health_status}}
                                      </td>
                                      <td>
                                         {{  $user->p_uniform}}
                                      </td>
                                      <td>
                                          {{$user->w_uniform}}
                                      </td>
                                      <td>
                                      {{$user->m_uniform}}
                                      </td>
                                      <td>
                                      {{$user->o_uniform}}
                                      </td>
                                      
                                      <td >
                                      {{ $user->b_uniform }}
                                      </td>
                                      <td >
                                      {{ $user->n_uniform }}
                                      </td>
                                      <td>
                                      {{ $user->ties}}
                                      </td>
                                    
                                   
                                      <td>
                                      </td>
                                      
                                    </tr>
                                  </tbody>
                                    

                                 
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