<?php $__env->startSection('content'); ?>

   <section class="feature-area pt-100 pb-100  relative" style="padding-top: 60px;">
  <center> <h3>All Songs</h3> </center>
  <div class="white-bg">
		    <div class="container">
		      <div class="section-top-border">


		       
              <div class="row">
                 
                  <div class="content">
                    <div class="container-fluid">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="card">
                            <div class="card-header card-header-primary">
                              <h4 class="card-title ">song Details</h4>
                              <p class="card-category"> All songs so far</p>
                            </div>
                            <div class="card-body">
                              <div class="table-responsive">
                                <table class="table">
                                  <thead class=" text-primary">
                                    <tr><th>
                                      ID
                                    </th>
                                    <th>
                                      Song Title
                                    </th>
                                    <th>
                                      Song Writter
                                    </th>
                                    <th>
                                      Type
                                    </th>
                                    <th>
                                      Song
                                    </th>
                                    <th>
                                      Created At
                                    </th>
                                    <th>
                                      Action
                                    </th>
                                  </tr></thead>
                                  <?php $__currentLoopData = $songs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $songPresentation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  <tbody>
                                    <tr>
                                      <td>
                                         <?php echo e($songPresentation->id); ?>

                                      </td>
                                      <td>
                                         <?php echo e($songPresentation->title); ?>

                                      </td>
                                      <td>
                                          <?php echo e($songPresentation->author); ?>

                                      </td>
                                      <td>
                                      <?php echo e($songPresentation->type); ?>

                                      </td>
                                      
                                      <td class="text-primary">
                                      <?php echo e(str_limit($songPresentation->body, $limit = 50, $end = '...')); ?>

                                      </td>
                                      <td>
                                      <?php echo e($songPresentation->created_at->diffForHumans()); ?>

                                      </td>
                                    
                                   
                                      <td><a href="songs/<?php echo e($songPresentation->id); ?>" class="btn btn-primary">View</a></td>
                                      
                                    </tr>
                                  </tbody>
                                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
</section>
         
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>