<?php $__env->startSection('content'); ?>

<div class="" style="background-image: url('img/bg7.jpg'); background-size: cover; background-position: ; ">
    <div class="container" >
    
      <div class="row">
        <div class="col-lg-6 col-md-6 ml-auto mr-auto" style="padding-top:123px; padding-bottom:100px;">
          <div class="card card-login" >
          
            <div class="card-header card-header-primary text-center">
                <h4 class="card-title"><?php echo e(__('Login')); ?></h4>
                
            </div>
            <div class="card-body">
                <form method="POST" action="<?php echo e(route('login')); ?>">
                                        <?php echo csrf_field(); ?>

                    <div class="form-group row">
                        <label for="email" class="col-sm-4 col-form-label text-md-right"><?php echo e(__('E-Mail Address')); ?></label>

                        <div class="col-md-9">
                             <input id="email" type="email" class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" name="email" value="<?php echo e(old('email')); ?>" required autofocus>

                            <?php if($errors->has('email')): ?>
                                <span class="invalid-feedback" role="alert">
                                <strong><?php echo e($errors->first('email')); ?></strong>
                                 </span>
                             <?php endif; ?>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Password')); ?></label>

                        <div class="col-md-8">
                         <input id="password" type="password" class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" name="password" required>
                         

                            <?php if($errors->has('password')): ?>
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                                    </span>
                            <?php endif; ?>
                         </div>
                         <div class="col-md-8">
                            <input type="checkbox" onclick="myFunction()">Show Password
                                <script type="text/javascript">
                                    function myFunction() {
                                    var x = document.getElementById("password");
                                    if (x.type === "password") {
                                        x.type = "text";
                                    } else {
                                        x.type = "password";
                                    }
                                    }
                                </script>
                          </div>         
                    </div>

                     
                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <div class="row">
                                <div class= "col-sm-6 col-md-6 col-lg-6">
                                <button type="submit" class="btn btn-primary">
                                    <?php echo e(__('Login')); ?>

                                </button>
                                </div>
                                <div class= "col-sm-6 col-md-6 col-lg-6">
                                <a type="button" class="btn btn-primary" href="<?php echo e(route('register')); ?>">
                                    <?php echo e(__('Signup')); ?>

                                </a>
                                </div>
                            </div>
                            <div>
                                <?php if(Route::has('password.request')): ?>
                                    <a class="btn btn-link" href="<?php echo e(route('password.request')); ?>">
                                        <?php echo e(__('Forgot Your Password?')); ?>

                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
                
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>