<?php $__env->startSection('content'); ?>

    <div class="" style="background-image: url('img/bg7.jpg'); background-size: cover; background-position: ; ">
        <div class="container" >
             <div class="row">
                <div class="col-lg-6 col-md-6 ml-auto mr-auto" style="padding-top:200px; padding-bottom:100px;">
                    <div class="card card-login" >
                        <div class="card-header card-header-primary text-center">
                            <h4 class="card-title"><?php echo e(__('Update Song')); ?></h4>
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
                                <div class="col-lg-8 col-md-8">
                                   <h3 class="mb-30">Song Details</h3>
                                    <form  method="POST" action="<?php echo e(route('songs.update', [$songPresentation->id])); ?>" enctype="multipart/form-data">
                                        <?php echo e(csrf_field()); ?>

                                        
                                        <div class="mt-10">
                                            <input id="title" type="text"    class="form-control" name="name" value="<?php echo e($songPresentation->title); ?>" required autofocus>
                                                <?php if($errors->has('title')): ?>
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong><?php echo e($errors->first('title')); ?></strong>
                                                        </span>
                                                <?php endif; ?>
                                        </div>
                            
                                        <div class="mt-10">
                                            <input id="author" type="text" class="form-control<?php echo e($errors->has('author') ? ' is-invalid' : ''); ?>" name="author" value="<?php echo e($songPresentation->author); ?>">
                                                <?php if($errors->has('phone')): ?>
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong><?php echo e($errors->first('author')); ?></strong>
                                                    </span>
                                                <?php endif; ?>
                                        </div>
                                        <div class="mt-10">
                                            <input id="type" type="text" class="form-control<?php echo e($errors->has('type') ? ' is-invalid' : ''); ?>" name="type" value="<?php echo e($songPresentation->type); ?>" >
                                            <?php if($errors->has('type')): ?>
                                                <span class="invalid-feedback" role="alert">
                                                    <strong><?php echo e($errors->first('type')); ?></strong>
                                                </span>
                                            <?php endif; ?>
                                        </div>
                            
                            
                                        <div class="input-group-icon mt-10">
                                            <textarea id="body" type="text" class="form-control<?php echo e($errors->has('body') ? ' is-invalid' : ''); ?>" name="body" value="<?php echo e($songPresentation->body); ?>" rows="7" maxlength="5000">
                                            <?php echo e($songPresentation->body); ?>

                                            </textarea>
                                            <?php if($errors->has('body')): ?>
                                                <span class="invalid-feedback" role="alert">
                                                    <strong><?php echo e($errors->first('body')); ?></strong>
                                                </span>
                                            <?php endif; ?>
                                        </div>
                                        
                            
                                        <div class="form-group row mb-0">
                                            <button class="btn btn-primary" type="submit"> <?php echo e(__('Update')); ?></button>
                                        </div>							
                                                        
                                    </form>
                                </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>             
        
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>