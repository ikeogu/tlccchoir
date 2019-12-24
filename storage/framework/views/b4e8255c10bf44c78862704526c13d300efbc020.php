<?php $__env->startSection('content'); ?>
         

<?php $__env->startSection('title', '| View Post'); ?>

<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-md-8">
        <img src="<?php echo e(asset('images/'.$post->image)); ?>" height="400" width="100%" alt="Image not working." />
        <hr>
        <h1><?php echo e($post->title); ?></h1>
        <p class="lead"><?php echo e($post->body); ?></p>
        <hr>
        <div class="tags">
            <?php $__currentLoopData = $post->tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <button class="btn btn-md btn-primary"><?php echo e($tag->name); ?></button>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
    <div class="col-md-4">
        <div class="well">
            <dl class="dl-horizontal">
                <dt>Url Slug<dt>
                <dd><a href="<?php echo e(url('blog/'.$post->slug)); ?>"><?php echo e(url('blog/'.$post->slug)); ?></a></dd>
            </dl>
            <dl class="dl-horizontal">
                <label>Category</label>
                <p><?php echo e($post->category->name); ?></p>
            </dl>
            <dl class="dl-horizontal">
                <label>Created At:</label>
                <p><?php echo e(date('M j, Y H:i', strtotime($post->created_at))); ?></p>
            </dl>
            <dl class="dl-horizontal">
                <label>Last Updated:</label>
                <p><?php echo e(date('M j, Y H:i', strtotime($post->updated_at))); ?></p>
            </dl>
            <hr>
            <div class="row">
                <div class="col-sm-6">
                    <?php echo Html::linkRoute('posts.edit', 'Edit', array($post->id), array('class' => 'btn btn-primary btn-block')); ?>

                </div>
                <div class="col-sm-6">
                    <?php echo Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'DELETE']); ?>

                    <?php echo Form::submit('Delete', ['class' => 'btn btn-danger btn-block']); ?>

                    <?php echo Form::close(); ?>

                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <?php echo e(Html::linkRoute('posts.index', 'See all Posts', [], ['class' => 'btn btn-secondary btn-block btn-h1-spacing'])); ?>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.blog', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>