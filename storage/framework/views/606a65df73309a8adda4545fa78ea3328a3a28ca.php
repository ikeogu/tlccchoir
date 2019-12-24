<?php $__env->startSection('title'); ?>
Edit Post
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>


	<div class="container">
		<div class="col-md-12">
			<h1>Edit <?php echo e($post->title); ?></h1>
      
      <?php echo e(Form::model($post, array('route' => array('posts.update', $post->id), 'method' => 'PUT'))); ?>

  				<div class="form-group">
  					<?php if(!empty($errors->first('title'))): ?>
  						<div class="alert alert-danger"><?php echo e($errors->first('title')); ?></div>
  					<?php endif; ?>
    				<?php echo e(Form::label('title', 'Post Title')); ?>

    				<?php echo e(Form::text('title', $value = $post->title, array('class' => 'form-control', 'placeholder' => 'Your Blog Post Title'))); ?>

  				</div>
				  <div class="form-group">
  					<?php if(!empty($errors->first('author'))): ?>
  						<div class="alert alert-danger"><?php echo e($errors->first('author')); ?></div>
  					<?php endif; ?>
    				<?php echo e(Form::label('author', 'Post Author')); ?>

    				<?php echo e(Form::text('author', $value = $post->author, array('class' => 'form-control', 'placeholder' => 'Your Blog Post Author'))); ?>

  				</div>  

  				<div class="form-group">
  					<?php if(!empty($errors->first('body'))): ?>
  						<div class="alert alert-danger"><?php echo e($errors->first('body')); ?></div>
  					<?php endif; ?>
    				<?php echo e(Form::label('body', 'Blog Body/Content')); ?>

    				<?php echo e(Form::textarea('body', $value =$post->body, array('class' => 'form-control', 'rows' => '7'))); ?>

  				</div>
  				<?php echo e(Form::submit('Publish Your Blog Post', array('class' => 'btn btn-default'))); ?>

			<?php echo e(Form::close()); ?>

		</div>
	</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.blog', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>