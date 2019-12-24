<?php $__env->startSection('content'); ?>


<div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12">
            <table class="table table-striped table-bordered table-responsive">
                <thead>
                    <th>#</th>
                    <th>Author</th>
                    <th>Title</th>
                    <th>Body</th>
                    <th>Created at</th>
                    <th></th>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <th><?php echo e($post->id); ?>

                            <td><?php echo e($post->name); ?></td>
                            <td><?php echo e($post->title); ?></td>
                            <td><?php echo e(substr($post->body, 0, 50)); ?><?php echo e(strlen($post->body) > 50 ? "..." : ""); ?></td>
                            <td><?php echo e(date('M j, Y H:i', strtotime($post->created_at))); ?></td>
                            <td>
                                <div class="row">
                                    <div class="col-sm-6">
                                    <a href="<?php echo e(route('posts.show', $post->id)); ?>" class="btn btn-primary">View</a>
                                    </div>  
                                    <div  class="col-sm-4">  
                                    <a href="<?php echo e(route('posts.edit', $post->id)); ?>" class="btn btn-info">Edit</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
            <div class="text-center"><?php echo $posts->links();; ?></div>
        </div>
    
</div>   
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.blog', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>