
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon.png">
	<link rel="icon" type="image/png" href="img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Mgbidi Registrtation</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

	<!--     Fonts and icons     -->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.css" rel="stylesheet">

	<!-- CSS Files -->
    <link href="../css/bootstrap.min.css" rel="stylesheet" />
	<link href="../css/gsdk-bootstrap-wizard.css" rel="stylesheet" />

	
</head>

<body>
<div class="image-container set-full-height" style="background-image: url('../img/happy-new-year.jpg')">
    <!--   Creative Tim Branding   -->
    
    <div class="content">
        <a href="/">
            Previous
       </a>
        <div class="brand col-8">
            <marquee direction="right" >
                <h2 class="text-white">  Welcome to Mgbidi 2020!</h2>
             </marquee>
            <marquee direction="left"  >
                <h2 class="text-white">What God Has Determined shall be Done!</h2>
            </marquee>
        </div>
        <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div><br />
        <?php endif; ?>
        <?php if(\Session::has('success')): ?>
        <div class="alert alert-success">
            <p><?php echo e(\Session::get('success')); ?></p>
        </div><br />
        <?php endif; ?>
    </div>
	<!--  Made With Get Shit Done Kit  -->
		<a href="#" class="made-with-mk">
			<div class="brand">Choir</div>
			<div class="made-with"> Mgbidi <strong> 2020 </strong></div>
		</a>

    <!--   Big container   -->
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">

                <!--      Wizard container        -->
                <div class="wizard-container">

                    <div class="card wizard-card" data-color="orange" id="wizardProfile">
                         <form method="POST" action="<?php echo e(route('mgbidi2020.store')); ?>" enctype="multipart/form-data">
                          <?php echo csrf_field(); ?>
                    <!--        You can switch ' data-color="orange" '  with one of the next bright colors: "blue", "green", "orange", "red"          -->

                            <div class="wizard-header">
                                <h3>
                                <b>MGBIDI</b> 2020 <br>
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
                                        <h4 class="info-text"> Let's start with the basic information.</h4>
                                        
                                        <div class="col-sm-10 col-sm-offset-1">
                                            <div class="form-group">
                                                <label>First Name </label>
                                                <input name="firstname" type="text" class="form-control wf" placeholder="Andrew...">
                                            </div>
                                            <div class="form-group">
                                                <label>Last Name </label>
                                                <input name="lastname" type="text" class="form-control wf" placeholder="Smith...">
                                            </div>
                                            <div class="form-group">
                                                <label>Phone</label>
                                                <input name="phone" type="number" class="form-control wf" placeholder="0813344..">
                                            </div>
                                        </div>
                                        <div class="col-sm-10 col-sm-offset-1">
                                            <div class="form-group">
                                                <label>Email </label>
                                                <input name="email" type="email" class="form-control wf" placeholder="andrew@creative-tim.com">
                                            </div>
                                        </div>
                                        <div class="col-sm-10 col-sm-offset-1">
                                            <div class="form-group">
                                                <label>School </label>
                                                <input name="school" type="text" class="form-control wf" placeholder="School..">
                                            </div>
                                        </div>
                                        <div class="col-sm-10 col-sm-offset-1">
                                            <div class="form-group">
                                                <label>State </label>
                                                <input name="state" type="text" class="form-control wf" placeholder="Abia..">
                                            </div>
                                        </div>
                                        <div class="col-sm-10 col-sm-offset-1">
                                            <div class="form-group">
                                                    <label>Gender</label><br>
                                                    <select name="gender" class="form-control wf">
                                                        <option value="Female">Female </option>
                                                        <option value="Male"> Male </option>
                                                        <option value="Other"> Other </option>
                                                    
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                
                                <div class="tab-pane" id="account">
                                    <h4 class="info-text"> Define  Health Status. </h4>
                                    <div class="row">

                                            <div class="form-group p-5">
                                                <label>How do you feel?</label><br>
                                                <select name="health_status" class="form-control wf">
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
                                            <div class="form-group ">
                                                <label>Peach</label><br>
                                                <select name="p_uniform" class="form-control wf">
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
                                                <select name="m_uniform" class="form-control wf">
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
                                                <select name="w_uniform" class="form-control wf">
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
                                                <select name="o_uniform" class="form-control wf">
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
                                                <select name="b_uniform" class="form-control wf">
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
                                                <select name="n_uniform" class="form-control wf">
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
                                                <select name="ties" class="form-control wf">
                                                    <option value="Yes I have (Female)"> Yes I have (Female)  </option>
                                                    <option value="Yes I have (Male)"> Yes I have (Male) </option>
                                                    <option value="I Don't have (Female)">  I Don't have (Female)</option>
                                                    <option value="I Don't have (Male)">  I Don't have (Male)</option>
                                                
                                                </select>
                                            </div>
                                            
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>New Uniform</label><br>
                                                <select name="new_uniform" class="form-control wf">
                                                    <option value="Yes I have Paid."> Yes, I have paid.</option>
                                                    <option value=" I have not Paid.">  I have not paid</option>
 
                                                </select>
                                            </div>
                                            
                                        </div> 
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Mgbidi Food Items</label><br>
                                                <select name="food_item" class="form-control wf">
                                                    <option value="Yes I have Paid."> Yes, I have paid.</option>
                                                    <option value=" I have not Paid.">  I have not paid</option>
 
                                                </select>
                                            </div>
                                            
                                        </div> 
                                         
                                    </div>
                                    
                                </div>
                            </div>
                          
                            <div class="wizard-footer height-wizard">
                                <div class="pull-right">
                                    <input type='button' class='btn btn-next btn-fill btn-warning btn-wd btn-sm' name='next' value='Next' />
                                    <button type="submit" class='btn btn-finish btn-fill btn-warning btn-wd btn-sm' name='finish' value="finish">Finish</button>

                                </div>

                                <div class="pull-left">
                                    <input type='button' class='btn btn-previous btn-fill btn-info btn-wd btn-sm' name='previous' value='Previous' />
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
