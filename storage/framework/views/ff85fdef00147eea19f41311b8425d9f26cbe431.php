<?php $__env->startSection('content'); ?>


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
                        
                            <center> <h3>My Songs</h3> </center>
                            <div class="white-bg">
                                 <div class="container">
                                     <div class="section-top-border">
                                    
                                       
                                    <div class="content">
                                    <div class="container-fluid">
                                        <div class="row">
                                        <div class="col-md-12">
                                                    <div class="card">
                                                        <div class="card-header card-header-primary">
                                                        <h4 class="card-title ">My Song Details</h4>
                                                        <p class="card-category">Your songs so far</p>
                                                        </div>
                                                        <div class="card-body">

                                                        
                                                
                                                  
                                                        <div class="table-responsive">
                                                            <table class="table">
                                                            <thead class=" text-primary">
                                                                <tr>
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
                                                                <th>
                                                                    Action
                                                                </th>
                                                            </tr></thead>
                                            <?php $__currentLoopData = $songs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $songPresentation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                 
                                                            <tbody>
                                                                <tr>
                                                                
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
                                                                  
                                                                 
                                                                    <td><a href="songs/<?php echo e($songPresentation->id); ?>/edit" class="btn btn-primary"> Edit</a></td>
                                                                </tr>
                                                            
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>   
                                                        </tbody>
                                                            </table>
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