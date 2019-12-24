<?php $__env->startSection('title', "| $post->title"); ?>
<?php $__env->startSection('content'); ?>
<div class="row" style="margin:20px;">
    <div class="col-md-9 align-center" >
    <img src="<?php echo e(asset('images/' . $post->image)); ?>" height="400" width="100%" alt="Image not working."/>
        <h2><?php echo e($post->title); ?></h2>
        <p><?php echo e($post->body); ?></p>
        <hr>
        <p>Posted in: <?php echo e($post->category->name); ?></p>
    </div>
</div>
    <hr>

    
    <div class="container">
        <div class="section text-center ">
            <div class="content">
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
            </div>
        </div>  
    </div>    
    <div class="row " style="margin:20px;">
        <div class="comment-form" class="col-md-8 ">
            <?php echo e(Form::open(['route' => ['comment.store', $post->id], 'method' => 'POST'])); ?>

                <div class="row">
                    <div class="col-md-6">
                        <?php echo e(Form::label('name', "Name:")); ?>

                        <?php echo e(Form::text('name', null, ['class' => 'form-control'])); ?>

                    </div>
                    <div class="col-md-6">
                        <?php echo e(Form::label('email', 'Email:')); ?>

                        <?php echo e(Form::text('email', null, ['class' => 'form-control'])); ?>

                    </div>
                    <div class="col-md-12">
                        <?php echo e(Form::label('comment', "Comment:")); ?>

                        <?php echo e(Form::textarea('comment', null, ['class' => 'form-control', 'rows' => '5' ])); ?>


                        <?php echo e(Form::submit('Add Comment', ['class' => 'btn btn-primary  btn-spacing-top'])); ?>

                    </div>
                </div>
            <?php echo e(Form::close()); ?>

        </div>
    </div>
    <hr>
    <div class="row" style="margin:20px;">
            <?php if($comments): ?>
            <?php echo e($comments->count()); ?> Comments
            <div>
                <?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="panel-body">
                        
                            <div class="" >
                                <h5><?php echo e($comment->name); ?></h5>
                                <blockquote><?php echo e($comment->comment); ?></blockquote>
                            </div>
                            
                        
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.blog', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>