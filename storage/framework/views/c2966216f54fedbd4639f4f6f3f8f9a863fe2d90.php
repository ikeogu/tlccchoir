<?php if( Session::has("success") ): ?>
<div class="alert alert-success alert-block" role="alert">
    <button class="close" data-dismiss="alert"></button>
    <?php echo e(Session::get("success")); ?>

</div>
<?php endif; ?>


<?php if( Session::has("error") ): ?>
<div class="alert alert-danger alert-block" role="alert">
    <button class="close" data-dismiss="alert"></button>
    <?php echo e(Session::get("error")); ?>

</div>
<?php endif; ?>