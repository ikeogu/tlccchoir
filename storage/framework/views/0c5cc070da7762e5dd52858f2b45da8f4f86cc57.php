<?php $__env->startSection('content'); ?>

<style>
.body {
       margin: 0;
       padding: 0;
       background: #EEE;
       font: 10px/13px 'Lucida Sans',sans-serif;
    }
    .wrap {
       overflow: hidden;
       margin: 10px;
    }
    .box {
       float: left;
       position: relative;
       width: 20%;
       padding-bottom: 20%;
    }
    .boxInner {
       position: absolute;
       left: 10px;
       right: 10px;
       top: 10px;
       bottom: 10px;
       overflow: hidden;
    }
    .boxInner img {
       width: 100%;
    }
    .boxInner .titleBox {
       position: absolute;
       bottom: 0;
       left: 0;
       right: 0;
       margin-bottom: -50px;
       background: #000;
       background: rgba(0, 0, 0, 0.5);
       color: #FFF;
       padding: 10px;
       text-align: center;
       -webkit-transition: all 0.3s ease-out;
       -moz-transition: all 0.3s ease-out;
       -o-transition: all 0.3s ease-out;
       transition: all 0.3s ease-out;
    }
    body.no-touch .boxInner:hover .titleBox, body.touch .boxInner.touchFocus .titleBox {
       margin-bottom: 0;
    }
    @media  only screen and (max-width : 480px) {
       /* Smartphone view: 1 tile */
       .box {
          width: 100%;
          padding-bottom: 100%;
       }
    }
    @media  only screen and (max-width : 650px) and (min-width : 481px) {
       /* Tablet view: 2 tiles */
       .box {
          width: 50%;
          padding-bottom: 50%;
       }
    }
    @media  only screen and (max-width : 1050px) and (min-width : 651px) {
       /* Small desktop / ipad view: 3 tiles */
       .box {
          width: 33.3%;
          padding-bottom: 33.3%;
       }
    }
    @media  only screen and (max-width : 1290px) and (min-width : 1051px) {
       /* Medium desktop: 4 tiles */
       .box {
          width: 25%;
          padding-bottom: 25%;
       }
    }
    
    .selectableImageContainer {
    border: 1px solid #CCC;
    padding: 5px;
    margin: 7px;
    float: left;
    width: 212px;
    text-align: center;
}

.zoom_toolbar_button {
    height: 32px;
    width: 32px;
    float: right;
    border-radius: 4px;
    margin-left: 2px;
    margin-top: 8px;
    cursor: pointer;
    border: 1px solid #000000;
    padding: 6px 0 0 3px;
}

.approved_image_toolbar_button {
    background-color: #8bc249;
    height: 32px;
    width: 32px;
    float: right;
    border-radius: 4px;
    margin-left: 2px;
    margin-top: 8px;
    cursor: pointer;
    padding: 6px 0 0 3px;
}

.disapproved_image_toolbar_button {
    background-color: #bb232a;
    height: 32px;
    width: 32px;
    float: right;
    border-radius: 4px;
    margin-left: 2px;
    margin-top: 8px;
    cursor: pointer;
    padding: 6px 0 0 1px;
}

.reviewIssuesButton {
    margin-left: 20px;
    color: #ffffff;
    background-color: #00aeef;
}

.markAllReviewed {
    background-color: #00aeef;
    margin-bottom: 20px;
    margin-top: 10px;
    color: #ffffff;
}

.white {
    color: purple;
}
</style>

<div class="no-touch body" style="padding-top:60px;">
    <div class="wrap">


            <?php if($images->count()): ?>
                <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               
                    <div class="box">
                        <div class="boxInner">
                            <img src="/storage/public/images/<?php echo e($image->image); ?>" />
                            <div class="titleBox"><?php echo e($image->title); ?></div>
                    </div>
                    <?php if(auth()->user()->isAdmin == 1): ?>
                    <form action="<?php echo e(url('image-gallery',$image->id)); ?>" method="POST">

                    <input type="hidden" name="_method" value="delete">
                    <?php echo csrf_field(); ?>

                    <button type="submit" class="close-icon btn btn-danger"><i class="glyphicon glyphicon-remove"></i>Delete</button>
                    </form>
                    <?php endif; ?>
                </div> <!-- col-6 / end -->
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>


        </div> <!-- list-group / end -->
    </div> <!-- row / end -->
</div> <!-- container / end -->





<script type="text/javascript">
    $(document).ready(function(){
        $(".fancybox").fancybox({
            openEffect: "none",
            closeEffect: "none"
        });
    });
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>