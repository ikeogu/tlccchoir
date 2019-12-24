<?php $__env->startSection('content'); ?>

<div class="col-sm-8 blog-main">

    <h2>Create a Post</h2>

    <hr>

    <?php echo Form::open(array('route' => 'posts.store', 'data-parsley-validate' => '', 'files' => true)); ?>

                <?php echo e(Form::label('title', 'Title:', ['class' => 'form-spacing-top'])); ?>

                
                <?php echo e(Form::text('title', null, array('class' => 'form-control', 'required' => '', 'minlength' => '3', 'maxlength' => '100'))); ?>


                <?php echo e(Form::label('name', 'Author:', ['class' => 'form-spacing-top'])); ?>

                <?php echo e(Form::text('name', null, array('class' => 'form-control', 'required' => '', 'minlength' => '3', 'maxlength' => '20'))); ?>

                
                <?php echo e(Form::label('slug', 'Slug:')); ?>

                <?php echo e(Form::text('slug', null, ['class' => 'form-control', 'required' => '', 'minlength' => '5', 'maxlength' => '255'])); ?>

               
                <?php echo e(Form::label('category_id', 'Category:')); ?>

                <select class="form-control" name="category_id">
                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>

                <?php echo e(Form::label('tags', 'Tag:')); ?>

                <select class="form-control select2-multi" name="tags[]" multiple="multiple">
                    <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($tag->id); ?>"><?php echo e($tag->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>

                <?php echo e(Form::label('featured_image', 'Upload Featured Image')); ?>

                <?php echo e(Form::file ('featured_image')); ?>


                <?php echo e(Form::label('body', 'Post Body:', ['class' => 'form-spacing-top'])); ?>

                <?php echo e(Form::textarea('body', null, array('class' => 'form-control', 'required' => '', 'minlength' => '3'))); ?>

                
                <?php echo e(Form::submit('Create Post', array('class' => 'btn btn-success btn-lg btn-block'))); ?>

            <?php echo Form::close(); ?>

    <?php echo $__env->make('layouts.errors', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

</div><!-- /.blog-main -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>