<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
 
  
</head>
<body>
<div class="white-bg">
		    <div class="container">
         
		      <div class="section-top-border" style="padding-top:60px;">
              <div>
               <h2> Welcome To Mgbidi 2020</h2>
               <h4>You are Cleared for Now!</h4>
               <h3>Please come with this invoice to the Camp for clearance.</h3>
              </div>
            <div class="content">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-12">
                    <div class="card">
                      <div class="card-header card-header-primary" style="background-color: #cc66ff">
                        <h4 class="card-title ">Registration Details</h4>
                        <p class="card-category"> </p>
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
                      <div class="card-header card-header-primary" style="background-color: #cc66ff">
                        <h4 class="card-title ">Information About Your Uniforms/ Health</h4>
                        <p class="card-category"> Registration Info</p>
                      </div>    
                        <div class="card-body">
                        <div class="table-responsive">
                          <table class="table">
                            <thead class=" text-primary">
                              <tr>
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
                              <th>
                                New Uniform
                              </th>
                              <th> Mgbidi 2020 Food Items</th>
                            </tr></thead>
                            
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
                                  {{ $user->new_uniform}}
                                </td>
                                <td>
                                  {{ $user->food_item}}
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