
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon.png">
	<link rel="icon" type="image/png" href="img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Mgbdi Registrtation</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

	<!--     Fonts and icons     -->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.css" rel="stylesheet">

	<!-- CSS Files -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" />
	<link href="{{asset('css/gsdk-bootstrap-wizard.css')}}" rel="stylesheet" />

	
</head>

<body>
<div class="image-container set-full-height" style="background-image: url('../img/wizard.jpg')">
    <!--   Creative Tim Branding   -->
    <a href="#">
         <div class="logo-container">
            <div class="logo">
                <img src="../img/logo.jpg" height="60px" width="60px">
            </div>
            <div class="brand">
                Campus Choir
            </div>
        </div>
    </a>
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
	<!--  Made With Get Shit Done Kit  -->
		<a href="#" class="made-with-mk">
			<div class="brand">Choir</div>
			<div class="made-with"> Mgbidi <strong> 2019 </strong></div>
		</a>

    <!--   Big container   -->
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">

                <!--      Wizard container        -->
                <div class="wizard-container">

                    <div class="card wizard-card" data-color="orange" id="wizardProfile">
                    <form method="POST" action="{{ route('mgbidi-2019.store') }}" enctype="multipart/form-data">
                        @csrf
                    <!--        You can switch ' data-color="orange" '  with one of the next bright colors: "blue", "green", "orange", "red"          -->

                            <div class="wizard-header">
                                <h3>
                                <b>MGBIDI</b> 2019 <br>
                                <small>This information will let us know more about you.</small>
                                <small>During Camping.</small>
                                </h3>
                            </div>

                            <div class="wizard-navigation">
                                <ul>
                                    <li><a href="#about" data-toggle="tab">About</a></li>
                                    <li><a href="#account" data-toggle="tab">Health</a></li>
                                    <li><a href="#address" data-toggle="tab">Uniforms</a></li>
                                    
                            
                                </ul>

                            </div>

                            <div class="tab-content">
                                <div class="tab-pane" id="about">
                                    <div class="row">
                                        <h4 class="info-text"> Let's start with the basic information (with validation)</h4>
                                        <div class="col-sm-4 col-sm-offset-1">
                                            <div class="picture-container">
                                                <div class="picture">
                                                    <img src="../img/default-avatar.png" class="picture-src" id="wizardPicturePreview" title=""/>
                                                    <input type="file" id="wizard-picture" name="passport">
                                                </div>
                                                <h6>Choose Picture</h6>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>First Name <small>(required)</small></label>
                                                <input name="firstname" type="text" class="form-control" placeholder="Andrew...">
                                            </div>
                                            <div class="form-group">
                                                <label>Last Name <small>(required)</small></label>
                                                <input name="lastname" type="text" class="form-control" placeholder="Smith...">
                                            </div>
                                            <div class="form-group">
                                                <label>Phone<small>(required)</small></label>
                                                <input name="phone" type="text" class="form-control" placeholder="0813344..">
                                            </div>
                                        </div>
                                        <div class="col-sm-10 col-sm-offset-1">
                                            <div class="form-group">
                                                <label>Email <small>(required)</small></label>
                                                <input name="email" type="email" class="form-control" placeholder="andrew@creative-tim.com">
                                            </div>
                                        </div>
                                        <div class="col-sm-10 col-sm-offset-1">
                                            <div class="form-group">
                                                <label>School <small>(required)</small></label>
                                                <input name="school" type="text" class="form-control" placeholder="School..">
                                            </div>
                                        </div>
                                        <div class="col-sm-10 col-sm-offset-1">
                                            <div class="form-group">
                                                <label>State <small>(required)</small></label>
                                                <input name="state" type="text" class="form-control" placeholder="Abia..">
                                            </div>
                                        </div>
                                        <div class="col-sm-10 col-sm-offset-1">
                                                <div class="form-group">
                                                    <label>Gender</label><br>
                                                    <select name="gender" class="form-control">
                                                        <option value="Female">Female </option>
                                                        <option value="Male"> Male </option>
                                                        <option value="Other"> Other </option>
                                                    
                                                    </select>
                                                </div>
                                            </div>
                                    </div>
                                </div>

                                <div class="tab-pane" id="account">
                                    <h4 class="info-text"> Define your Health Status. </h4>
                                    <div class="row">

                                            <div class="form-group">
                                                <label>How Do You Feel?</label><br>
                                                <select name="health_status" class="form-control">
                                                    <option value="I am Very Sound"> I am Very Sound  </option>
                                                    <option value="I Can withstand it"> I Can withstand it </option>
                                                    <option value="I am not Strong">  I am not Strong</option>
                                                    
                                                </select>
                                            </div>
                                            

                                            
                                        

                                    </div>
                                </div>
                                <div class="tab-pane" id="address">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h4 class="info-text"> Let's Know more about your Uniforms. </h4>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Peach</label><br>
                                                <select name="p_uniform" class="form-control">
                                                    <option value="Yes I have (Female)"> Yes I have (Female)  </option>
                                                    <option value="Yes I have (Male)"> Yes I have (Male) </option>
                                                    <option value="I Don't have (Female)">  I Don't have (Female)</option>
                                                    <option value="I Don't have (Male)">  I Don't have (Male)</option>
                                                
                                                
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                        <div class="form-group">
                                                <label>Mint Green</label><br>
                                                <select name="m_uniform" class="form-control">
                                                    <option value="Yes I have (Female)"> Yes I have (Female)  </option>
                                                    <option value="Yes I have (Male)"> Yes I have (Male) </option>
                                                    <option value="I Don't have (Female)">  I Don't have (Female)</option>
                                                    <option value="I Don't have (Male)">  I Don't have (Male)</option>
                                                
                                                
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 ">
                                        <div class="form-group">
                                                <label>White</label><br>
                                                <select name="w_uniform" class="form-control">
                                                    <option value="Yes I have (Female)"> Yes I have (Female)  </option>
                                                    <option value="Yes I have (Male)"> Yes I have (Male) </option>
                                                    <option value="I Don't have (Female)">  I Don't have (Female)</option>
                                                    <option value="I Don't have (Male)">  I Don't have (Male)</option>
                                                
                                                
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Orange</label><br>
                                                <select name="o_uniform" class="form-control">
                                                    <option value="Yes I have (Female)"> Yes I have (Female)  </option>
                                                    <option value="Yes I have (Male)"> Yes I have (Male) </option>
                                                    <option value="I Don't have (Female)">  I Don't have (Female)</option>
                                                    <option value="I Don't have (Male)">  I Don't have (Male)</option>
                                                
                                                </select>
                                            </div>
                                            
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Black Trouser or Skirt</label><br>
                                                <select name="b_uniform" class="form-control">
                                                    <option value="Yes I have (Female)"> Yes I have (Female)  </option>
                                                    <option value="Yes I have (Male)"> Yes I have (Male) </option>
                                                    <option value="I Don't have (Female)">  I Don't have (Female)</option>
                                                    <option value="I Don't have (Male)">  I Don't have (Male)</option>
                                                
                                                </select>
                                            </div>
                                            
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Navy blue Trouser or Skirt</label><br>
                                                <select name="n_uniform" class="form-control">
                                                    <option value="Yes I have (Female)"> Yes I have (Female)  </option>
                                                    <option value="Yes I have (Male)"> Yes I have (Male) </option>
                                                    <option value="I Don't have (Female)">  I Don't have (Female)</option>
                                                    <option value="I Don't have (Male)">  I Don't have (Male)</option>
                                                
                                                </select>
                                            </div>
                                            
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>All Ties or Head ties</label><br>
                                                <select name="ties" class="form-control">
                                                    <option value="Yes I have (Female)"> Yes I have (Female)  </option>
                                                    <option value="Yes I have (Male)"> Yes I have (Male) </option>
                                                    <option value="I Don't have (Female)">  I Don't have (Female)</option>
                                                    <option value="I Don't have (Male)">  I Don't have (Male)</option>
                                                
                                                </select>
                                            </div>
                                            <div class="col-sm-9">
                                                <div class="form-group">
                                                    <label>Anything You want us to Know!</label>
                                                    <div class="input-group">
                                                        <textarea type="text"  class="form-control" name="comment" placeholder="Comment">
                                                        </textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>   
                                    </div>
                                    
                                </div>
                            </div>
                          
                            <div class="wizard-footer height-wizard">
                                <div class="pull-right">
                                    <input type='button' class='btn btn-next btn-fill btn-warning btn-wd btn-sm' name='next' value='Next' />
                                    <button type="submit" class='btn btn-finish btn-fill btn-warning btn-wd btn-sm' name='finish' value="finish"></button>

                                </div>

                                <div class="pull-left">
                                    <input type='button' class='btn btn-previous btn-fill btn-default btn-wd btn-sm' name='previous' value='Previous' />
                                </div>
                                <div class="clearfix"></div>
                            </div>

                        </form>
                    </div>
                </div> <!-- wizard container -->
            </div>
        </div><!-- end row -->
    </div> <!--  big container -->

    <div class="footer">
        <div class="container">
             Made with <i class="fa fa-heart heart"></i> by <a href="#">Creative Tim</a>.  
        </div>
    </div>

</div>

</body>

	<!--   Core JS Files   -->
	<script src=" /js/jquery-2.2.4.min.js" type="text/javascript"></script>
	<script src=" /js/bootstrap.min.js" type="text/javascript"></script>
	<script src=" /js/jquery.bootstrap.wizard.js" type="text/javascript"></script>

	<!--  Plugin for the Wizard -->
	<script src=" /js/gsdk-bootstrap-wizard.js"></script>

	<!--  More information about jquery.validate here: http://jqueryvalidation.org/	 -->
	<script src=" /js/jquery.validate.min.js"></script>

</html>
