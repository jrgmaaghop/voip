<?php $__env->startSection('content'); ?>

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-right">

            <a class="btn btn-primary" href="<?php echo e(route('roles.index')); ?>"> Back</a>

        </div>

        <div class="pull-left">

            <h2> Role:   <?php echo e($role->name); ?></h2>

        </div>


    </div>

</div>

<hr>
<div class="row">

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Permissions:</strong><br>

            <?php if(!empty($rolePermissions)): ?>

                <?php $__currentLoopData = $rolePermissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <label class="label label-success bg-blue-grey" style="font-size:1em;" ><?php echo e($v->name); ?></label> <br><br> 
                    <!-- <h4> <span class="label bg-blue-grey"><?php echo e($v->name); ?></span></h4> -->
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <?php endif; ?>

        </div>

    </div>

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>