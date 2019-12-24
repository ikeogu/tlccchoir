<?php $__env->startSection('noe'); ?>
<div class="row">
            <div class="">
              <div class="cad card-login" >
                    <div class="content">
                    <?php if(\Session::has('success')): ?>
                            <div class="alert alert-success">
                                <p><?php echo e(\Session::get('success')); ?></p>
                            </div><br />
                    <?php endif; ?>
                    </div>
                
                    <form method="POST" action="<?php echo e(route('shortlist')); ?>" enctype="multipart/form-data">
                              <?php echo csrf_field(); ?>
                        <div class="card-header card-header-primary text-center" style="
                                                            padding-left: 20px;
                                                            padding-right: 5px;
                                                            width: 240px;
                                                            height: 80px;
                                                            margin-left: 20px;">
                            <h4 class="card-title">ShortList Team</h4>
                        </div>
                        <div class="content">
                                <span id="success"></span>
                                <span id="error"></span>
                        </div>
                    <div class="card-body">
                        <div class="input-group">
                        
                             <input type="text" id="name" class="form-control<?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>" name="name" value="<?php echo e(old('name')); ?>" required autofocus placeholder="Team Name...">
                            <?php if($errors->has('name')): ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($errors->first('name')); ?></strong>
                                </span>
                            <?php endif; ?>
                        </div>
                        <br/>
                        <div class="input-group">
                        
                            <input type="text" id="name1" class="form-control " class="form-control<?php echo e($errors->has('number') ? ' is-invalid' : ''); ?>" name="number" value="<?php echo e(old('number')); ?>" required placeholder="Number of Choristers in your team">
        
                            <?php if($errors->has('number')): ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($errors->first('number')); ?></strong>
                                </span>
                            <?php endif; ?> 
                        </div>
                        <br/>
                        <div class="input-group">
                            <input type="hidden"  id="name2" class="form-control<?php echo e($errors->has('state') ? ' is-invalid' : ''); ?>" name="state" value="<?php echo e(old('state')); ?>" required autofocus>
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
                        <br/>
                        <div class="input-group">
                        
                                <input type="text" id="name3" class="form-control" class="form-control<?php echo e($errors->has('african_con') ? ' is-invalid' : ''); ?>" name="african_con" value="<?php echo e(old('african_con')); ?>" required placeholder="Title of Your African Contemporary Song">
    
                                <?php if($errors->has('african_con')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('african_con')); ?></strong>
                                    </span>
                                <?php endif; ?> 
                        </div>
                        <br/>
                        <div class="input-group">
                    
                                    <input type="text" id="name4" class="form-control" class="form-control<?php echo e($errors->has('acappella') ? ' is-invalid' : ''); ?>" name="acappella" value="<?php echo e(old('acappella')); ?>" required placeholder="Title of Your Acappella Song">

                                <?php if($errors->has('acappella')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('acappella')); ?></strong>
                                    </span>
                                <?php endif; ?> 
                        </div>
                        <br/>
                        <div class="input-group">
                    
                            <input type="text" id="name5" class="form-control" class="form-control<?php echo e($errors->has('african_class') ? ' is-invalid' : ''); ?>" name="african_class" value="<?php echo e(old('african_class')); ?>" required placeholder="Title of Your African Classical Spiritual Song">

                            <?php if($errors->has('african_class')): ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($errors->first('african_class')); ?></strong>
                                </span>
                            <?php endif; ?> 
                        </div>
                        <br/>
                        <div class="input-group">
                                <button id="submit" class="btn  btn-round btn-md " style="float:left;margin-left: 10px;">ShortList</button>
                        </div>
                        </div>                 
                     </form>
                </div>
            </div>
        </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.noe_adm', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>