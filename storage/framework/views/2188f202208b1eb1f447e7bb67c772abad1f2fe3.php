<?php $__env->startSection('title'); ?>
<?php echo e($title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>


<div class="container">
<?php if( !$posts->count() ): ?>
<strong>There is no post till now. Login and write a new post now!!!</strong>
<?php else: ?>
    <div class="row">
       
                    
         <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="post-preview">
                    <a href="<?php echo e(url('/'.$post->slug)); ?>">
                        <h2 class="post-title">
                        <a href="<?php echo e(url('/'.$post->slug)); ?>"><?php echo e($post->title); ?></a>
                            <?php if(!Auth::guest() && ($post->author_id == Auth::user()->id || Auth::user()->is_admin())): ?>
                                <?php if($post->active == '1'): ?>
                                <button class="btn" style="float: right"><a href="<?php echo e(url('edit/'.$post->slug)); ?>">Edit Post</a></button>
                                <?php else: ?>
                                <button class="btn" style="float: right"><a href="<?php echo e(url('edit/'.$post->slug)); ?>">Edit Draft</a></button>
                                <?php endif; ?>
                            <?php endif; ?>
                        </h2>
                        
                    </a>
                    <p class="post-meta">Posted by
                        <a href="<?php echo e(url('/user/'.$post->author_id)); ?>"><?php echo e($post->author->name); ?></a>
                        <?php echo e($post->created_at->format('M d,Y \a\t h:i a')); ?>

                    </p>
                    <div class="list-group-item">
                        <article>
                            <?php echo str_limit($post->body, $limit = 150, $end = '....... <a href='.url("/".$post->slug).'>Read More</a>'); ?>

                        </article>
                    </div>
                </div>
                <hr>

                
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php echo $posts->render(); ?>

    </div>
    <?php endif; ?>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.blog', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>