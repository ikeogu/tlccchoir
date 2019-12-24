<?php $__env->startSection('noes'); ?>

          
 <section class="feature-area pt-100 pb-100  relative" style="padding-top: 40px;">
          


         <div class="col-md-10">
              
              <!-- Tabs with icons on Card -->
              <div class="card card-nav-tabs">
                <div class="card-header card-header-primary">
                  <!-- colors: "header-primary", "header-info", "header-success", "header-warning", "header-danger" -->
                  <h3>
                    <small><?php echo e($team->name); ?></small>
                </h3>
                 <li style="text-align:right; ">
                    
                         <a href="#" class="btn btn-danger btn-md" onclick="
                         var result = confirm('Are you sure you want to Delete Team?');
                         if(result){
                             event.preventDefault();
                             document.getElementById('delete-form').submit();
                         }"> Delete <?php echo e($team->name); ?></a>
                        
                    </li>
                    <form id="delete-form" action="<?php echo e(route('noe_team.destroy',[$team->id])); ?>" method="POST" style="display:none">
                    <?php echo csrf_field(); ?>
                         <input type="hidden" name="_method" value="delete">
                         
                        </form>
                  </div>
                </div>
                <div class="card-body ">
                  <div class=" text-center" style=" color:white">
                    <div class="" >
                      <p><?php echo e($team->name); ?> </p>
                    </div>
                    <div >
                      <p> <?php echo e($team->number); ?>.</p>
                    </div>
                    <div >
                      <p> <?php echo e($team->state); ?>.</p>
                    </div>
                    <div >
                      <p> <?php echo e($team->acappella); ?> </p>
                    </div>
                    <div >
                      <p> <?php echo e($team->african_class); ?> </p>
                    </div>
                    <div >
                      <p> <?php echo e($team->african_con); ?> </p>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Tabs with icons on Card -->
           
					
      </div>
	</section>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.noe_adm', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>