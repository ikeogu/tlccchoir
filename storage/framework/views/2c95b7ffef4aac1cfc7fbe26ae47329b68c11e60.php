<?php $__env->startSection('content'); ?>
     
    <?php if(auth()->user()->isAdmin == 1): ?>
        <div class= "main main-raised" style="padding-top:150px;">
             
            <div class="card">
                <div class="card-header">
                    <h4>You are an admin</h4>
                    <h5> <a href="/admin">click on Admin</a></h5>
                </div>
            </div>
        </div> 
        <div class="page-header header-filter" data-parallax="true" style="background-image: url('img/city-profile.jpg');"></div>
            <div class="main main-raised">
            <div class="card">
                <div class="card-header">
                <h4>Dashboard</h4>
                <h5> You are logged in!</h5>
                </div>

                <div class="card-body">
                    <div class="row">
                                <?php if($message = Session::get('success')): ?>

                                    <div class="alert alert-success alert-block">

                                        <button type="button" class="close" data-dismiss="alert">×</button>

                                        <strong><?php echo e($message); ?></strong>

                                    </div>

                                <?php endif; ?>

                                <?php if(count($errors) > 0): ?>
                                    <div class="alert alert-danger">
                                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                        <ul>
                                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li><?php echo e($error); ?></li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </ul>
                                    </div>
                                <?php endif; ?>

                    

                    </div>
                    <div class="profile-content">
                        <div class="container">
                        <div class="row">
                            <div class="col-md-6 ml-auto mr-auto">
                            <div class="profile">
                            <div class="row justify-content-center">

                                <div class="profile-header-container">
                                    <div class="profile-header-img">
                                        <img class="rounded-circle" src="avatars/<?php echo e(Auth::user()->avatar); ?>" style="max-width:50%; max-height:50%;"/>
                                        <!-- badge -->
                                        <div class="rank-label-container">
                                            <span class="label label-default rank-label"><?php echo e(Auth::user()->name); ?></span>
                                        </div>
                                    </div>
                                </div>

                                </div>
                                <div class="row justify-content-center" style="padding-top:60px;">
                                    <form action="/profile" method="post" enctype="multipart/form-data">
                                            <?php echo csrf_field(); ?>
                                            

                                            <div class="form-group row">
                                                <label for="passport" class="col-md-8 col-form-label text-md-left"><?php echo e(__('Click on me to change picture')); ?></label>

                                                <div class="col-md-8">
                                                    <input id="passport" type="file" class="form-control<?php echo e($errors->has('passport') ? ' is-invalid' : ''); ?>" name="avatar" required>

                                                        <?php if($errors->has('passport')): ?>
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong><?php echo e($errors->first('passport')); ?></strong>
                                                            </span>
                                                        <?php endif; ?>
                                                </div>

                                                
                                                <button type="submit" class="btn btn-primary">Change Image</button>
                                            </div>
                                        
                                    </form>
                                </div>
                                            
                                        
                            </div>
                            <table class="table table-bordered table-responsive table-striped col-md-6 ml-auto mr-auto">
                                <tr>
                                    <td><h6 class="name">Name:</h6></td>
                                    <td> <h6><?php echo e(Auth::user()->name); ?></h6></td>
                                </tr>
                                <tr>
                                    <td> <h6>Tag :</h6> </td>
                                    <td> <h5>Chorister</h5> </td>
                                </tr>
                                <tr>
                                    <td> <h6 class="name">Email: </h6></td>
                                    <td>  <h6><?php echo e(Auth::user()->email); ?>  </h6></td>
                                </tr>
                                <tr>
                                    <td> <h6 class="name">Institution: </h6></td>
                                    <td> <h6> <?php echo e(Auth::user()->institution); ?></h6> </td>
                                </tr>
                                <tr>
                                    <td> <h6 class="name">Discipline: </h6></td>
                                    <td> <h6> <?php echo e(Auth::user()->discipline); ?></h6> </td>
                                </tr>
                                <tr>
                                    <td> <h6 class="name">State: </h6></td>
                                    <td>  <h6> <?php echo e(Auth::user()->state); ?> </h6></td>
                                </tr>
                                <tr>
                                    <td> <h6 class="name">Gendex: </h6></td>
                                    <td>  <h6> <?php echo e(Auth::user()->gender); ?></h6></td>
                                </tr>
                                <tr>
                                    <td> <h6 class="name">Phone: </h6></td>
                                    <td>  <h6> <?php echo e(Auth::user()->phone); ?> </h6></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            </div>   
    <?php elseif(auth()->user()->isAdmin == NULL): ?> 

        <div class="page-header header-filter" data-parallax="true" style="background-image: url('img/city-profile.jpg');"></div>
            <div class="main main-raised">
            <div class="card">
                <div class="card-header">
                <h4>Dashboard</h4>
                <h5> You are logged in!</h5>
                </div>

                <div class="card-body">
                    <div class="row">
                                <?php if($message = Session::get('success')): ?>

                                    <div class="alert alert-success alert-block">

                                        <button type="button" class="close" data-dismiss="alert">×</button>

                                        <strong><?php echo e($message); ?></strong>

                                    </div>

                                <?php endif; ?>

                                <?php if(count($errors) > 0): ?>
                                    <div class="alert alert-danger">
                                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                        <ul>
                                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li><?php echo e($error); ?></li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </ul>
                                    </div>
                                <?php endif; ?>

                    

                    </div>
                    <div class="profile-content">
                        <div class="container">
                        <div class="row">
                            <div class="col-md-6 ml-auto mr-auto">
                            <div class="profile">
                            <div class="row justify-content-center">

                                <div class="profile-header-container">
                                    <div class="profile-header-img">
                                        <img class="rounded-circle" src="avatars/<?php echo e(Auth::user()->avatar); ?>" style="max-width:50%; max-height:50%;"/>
                                        <!-- badge -->
                                        <div class="rank-label-container">
                                            <span class="label label-default rank-label"><?php echo e(Auth::user()->name); ?></span>
                                        </div>
                                    </div>
                                </div>

                                </div>
                                <div class="row justify-content-center" style="padding-top:60px;">
                                    <form action="/profile" method="post" enctype="multipart/form-data">
                                            <?php echo csrf_field(); ?>
                                            

                                            <div class="form-group row">
                                                <label for="passport" class="col-md-8 col-form-label text-md-left"><?php echo e(__('Click on me to change picture')); ?></label>

                                                <div class="col-md-8">
                                                    <input id="passport" type="file" class="form-control<?php echo e($errors->has('passport') ? ' is-invalid' : ''); ?>" name="avatar" required>

                                                        <?php if($errors->has('passport')): ?>
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong><?php echo e($errors->first('passport')); ?></strong>
                                                            </span>
                                                        <?php endif; ?>
                                                </div>

                                                
                                                <button type="submit" class="btn btn-primary">Change Image</button>
                                            </div>
                                        
                                    </form>
                                </div>
                                            
                                        
                            </div>
                            <table class="table table-bordered table-responsive table-striped col-md-6 ml-auto mr-auto">
                                <tr>
                                    <td><h6 class="name">Name:</h6></td>
                                    <td> <h6><?php echo e(Auth::user()->name); ?></h6></td>
                                </tr>
                                <tr>
                                    <td> <h6>Tag :</h6> </td>
                                    <td> <h5>Chorister</h5> </td>
                                </tr>
                                <tr>
                                    <td> <h6 class="name">Email: </h6></td>
                                    <td>  <h6><?php echo e(Auth::user()->email); ?>  </h6></td>
                                </tr>
                                <tr>
                                    <td> <h6 class="name">Institution: </h6></td>
                                    <td> <h6> <?php echo e(Auth::user()->institution); ?></h6> </td>
                                </tr>
                                <tr>
                                    <td> <h6 class="name">Discipline: </h6></td>
                                    <td> <h6> <?php echo e(Auth::user()->discipline); ?></h6> </td>
                                </tr>
                                <tr>
                                    <td> <h6 class="name">State: </h6></td>
                                    <td>  <h6> <?php echo e(Auth::user()->state); ?> </h6></td>
                                </tr>
                                <tr>
                                    <td> <h6 class="name">Gendex: </h6></td>
                                    <td>  <h6> <?php echo e(Auth::user()->gender); ?></h6></td>
                                </tr>
                                <tr>
                                    <td> <h6 class="name">Phone: </h6></td>
                                    <td>  <h6> <?php echo e(Auth::user()->phone); ?> </h6></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            </div>
        <?php endif; ?>            
                  
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>