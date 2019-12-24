<?php $__env->startSection('content'); ?>

          
 <section class="feature-area pt-100 pb-100  relative" style="padding-top: 200px;">
          


         <div class="col-md-10">
              <h3>
                <small>sONG dETAILS</small>
              </h3>
              <!-- Tabs with icons on Card -->
              <div class="card card-nav-tabs">
                <div class="card-header card-header-primary">
                  <!-- colors: "header-primary", "header-info", "header-success", "header-warning", "header-danger" -->
                  <div class="nav-tabs-navigation">
                    <div class="nav-tabs-wrapper">
                      <ul class="nav nav-tabs" data-tabs="tabs">
                        <li class="nav-item">
                          <a class="nav-link active" href="#profile" data-toggle="tab">
                            <i class="material-icons">chat</i><?php echo e($songs->title); ?>

                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#messages" data-toggle="tab">
                            <i class="material-icons">face</i> 	<?php echo e($songs->author); ?>

                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#settings" data-toggle="tab">
                            <i class="material-icons">build</i> <?php echo e($songs->type); ?>

                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#created_at" data-toggle="tab">
                            <i class="material-icons">schedule</i> <?php echo e($songs->created_at->diffForHumans()); ?>

                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card-body ">
                  <div class="tab-content text-center">
                    <div class="tab-pane active" id="profile">
                      <p> <?php echo e($songs->body); ?> </p>
                    </div>
                    <div class="tab-pane" id="messages">
                      <p>This song was written by <?php echo e($songs->author); ?>.</p>
                    </div>
                    <div class="tab-pane" id="settings">
                      <p> This song is classified under <?php echo e($songs->type); ?> songs</p>
                    </div>
                    <div class="tab-pane" id="created_at">
                      <p> This song was written <?php echo e($songs->created_at->diffForHumans()); ?></p>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Tabs with icons on Card -->
           
					
      </div>
	</section>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>