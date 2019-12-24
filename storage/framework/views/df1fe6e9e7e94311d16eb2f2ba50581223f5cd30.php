<?php $__env->startSection('title', '| Home'); ?>

<?php $__env->startSection('content'); ?>
    
    <div class="row">
    <div class="col-md-3 ">
                   
                    <form class="form-inline my-4 my-lg-0">
                        <input class="form-control" type="search" placeholder="Search">
                        <hr>
                        <button class="btn btn-primary" type="submit">Search</button>
                    </form>
        </div>
        <div class="col-md-10 ">

            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <article id="<?php echo e($post->id); ?>" class="">
	                <header class="">
                        <h3 class=""><a href="<?php echo e(url('blog/'.$post->slug)); ?>">
                            <?php echo e($post->title); ?></a>
                        </h3>
                     
                        <div class="">
                            <span class="posted-on"><i class="fa fa-calendar"></i> 
                                <a href="<?php echo e(url('blog/'.$post->slug)); ?>" rel="bookmark">
                                    <time class="entry-date published" datetime=""><?php echo e($post->created_at->diffForHumans()); ?></time>
                                </a>
                            </span>
                            <h4>
                            <span class="byline"> <i class="fa fa-user"></i> <span class="author vcard"><a class="url fn n" href="#"><?php echo e($post->name); ?></a>
                            </span>
                            </h4>
                            
                            
                        </div><!-- .entry-meta -->
                    </header> 
                    
                    <div class="">
                        
                            <a href="#" title="<?php echo e($post->title); ?>" >
                                <img width="730" height="410" src="<?php echo e(asset('images/' . $post->image)); ?>" class="thumbnail col-sm-10 wp-post-image" alt="" />		
                            </a>
                       
                        <div class="col-sm-10">
                            <p><?php echo e(substr($post->body, 0, 250)); ?><?php echo e(strlen($post->body) >250 ? '...' : ""); ?></p>
                        </div>
                        <p><a class="btn btn btn-primary read-more" href="<?php echo e(url('blog/'.$post->slug)); ?>">Continue reading <i class="fa fa-chevron-right"></i></a></p>

                        <a href="<?php echo e(url('blog/'.$post->slug)); ?>" title="<?php echo e($post->title); ?>"></a>
                     </div>

                    <hr class="section-divider">
                </article>
                
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        
        
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.blog', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>