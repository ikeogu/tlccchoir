<?php $__env->startSection('content'); ?>
<div class="" style="background-image: url('../img/bg7.jpg'); background-size: cover; background-position: ; ">
    <div class="container" >
    
      <div class="row">
        <div class="col-lg-4 col-md-6 ml-auto mr-auto" style="padding-top:123px; padding-bottom:100px;">
          <div class="card card-login" >
            <div class="content">
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
            <form method="PATCH"  action="<?php echo e(route('users.update', $user->id)); ?>" enctype="multipart/form-data">
             csrf_token() 
                
              <div class="card-header card-header-primary text-center">
                <h4 class="card-title">Edit Profile</h4>
                
              </div>
              
              <div class="card-body">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">face</i>
                    </span>
                  </div>
                  <input type="text" class="form-control<?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>" name="name" value="<?php echo e($user->name); ?>" >
                  <?php if($errors->has('name')): ?>
                      <span class="invalid-feedback" role="alert">
                          <strong><?php echo e($errors->first('name')); ?></strong>
                      </span>
                  <?php endif; ?>
                </div>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">mail</i>
                    </span>
                  </div>
                  <input type="email" class="form-control" class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" name="email" value="<?php echo e($user->email); ?>" >

                    <?php if($errors->has('email')): ?>
                        <span class="invalid-feedback" role="alert">
                            <strong><?php echo e($errors->first('email')); ?></strong>
                        </span>
                    <?php endif; ?> 
                </div>
                
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">face</i>
                    </span>
                  </div>
                    <input type="hidden" class="form-control<?php echo e($errors->has('state') ? ' is-invalid' : ''); ?>" name="state" value="<?php echo e($user->state); ?>" required autofocus>
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
                      <?php if($errors->has('state')): ?>
                          <span class="invalid-feedback" role="alert">
                              <strong><?php echo e($errors->first('state')); ?></strong>
                          </span>
                      <?php endif; ?>
                  </div>              
                </div>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">book</i>
                    </span>
                  </div>
                  <input type="text" class="form-control<?php echo e($errors->has('discipline') ? ' is-invalid' : ''); ?>" name="discipline" value="<?php echo e($user->discipline); ?>">
                  <?php if($errors->has('discipline')): ?>
                      <span class="invalid-feedback" role="alert">
                          <strong><?php echo e($errors->first('discipline')); ?></strong>
                      </span>
                  <?php endif; ?>
                </div>

                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">home</i>
                    </span>
                  </div>
                  <input type="text" class="form-control<?php echo e($errors->has('institution') ? ' is-invalid' : ''); ?>" name="institution" value="<?php echo e($user->institution); ?>" >
                  <?php if($errors->has('institution')): ?>
                      <span class="invalid-feedback" role="alert">
                          <strong><?php echo e($errors->first('institution')); ?></strong>
                      </span>
                  <?php endif; ?>
                </div>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">person</i>
                    </span>
                  </div>
                  
                  <input type="hidden" class="form-control<?php echo e($errors->has('gender') ? ' is-invalid' : ''); ?>" name="gender" value="<?php echo e($user->gender); ?>" required autofocus placeholder="gender...">
                  <select name='gender' class='form-control'>
                   <OPTION > Gender</OPTION>
                    <option value="female">Female</option>
                    <option value="male">Male</option>
                 </select>

                  <?php if($errors->has('gender')): ?>
                      <span class="invalid-feedback" role="alert">
                          <strong><?php echo e($errors->first('gender')); ?></strong>
                      </span>
                  <?php endif; ?>

                  <div class="input-group-prepend">
                  <span class="input-group-text">
                      <i class="material-icons">phone</i>
                    </span>
                  </div>
                  <input type="text" class="form-control<?php echo e($errors->has('phone') ? ' is-invalid' : ''); ?>" name="phone" value="<?php echo e($user->phone); ?>"  >
                      <?php if($errors->has('phone')): ?>
                        <span class="invalid-feedback" role="alert">
                            <strong><?php echo e($errors->first('phone')); ?></strong>
                        </span>
                      <?php endif; ?>       
                </div> 
                
                
                  
                   
                    <div class="footer text-center">
                      <button class="btn btn-primary btn-round">Update</button>
                    </div>
                </div>
               
              
            </form>
          </div>
        </div>
      </div>
    </div>
<?php $__env->stopSection(); ?>

                  


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>