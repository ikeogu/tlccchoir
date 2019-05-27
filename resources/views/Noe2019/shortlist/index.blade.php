@extends('layouts.noe_adm')

@section('noes')
<div class="col-md-8" style="padding-top:60px;padding-right:30px">
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
            </div>
        </div>        
	@endsection