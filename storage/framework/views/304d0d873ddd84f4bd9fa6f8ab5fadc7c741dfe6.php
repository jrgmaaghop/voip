<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <!-- <h2>New Entry</h2> -->
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="<?php echo e(route('home')); ?>"> Back</a>
        </div>
    </div>
</div>


<?php if(count($errors) > 0): ?>
  <div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
       <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         <li><?php echo e($error); ?></li>
       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
  </div>
<?php endif; ?>



<?php echo Form::open(array('route' => 'store','method'=>'POST')); ?>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Office:</strong>
            <?php echo Form::text('office', null, array('placeholder' => 'Office name','class' => 'form-control')); ?>

        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Description:</strong>
            <?php echo Form::text('desc', null, array('placeholder' => 'Description','class' => 'form-control')); ?>

        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Local: </strong>
            <?php echo Form::text('local', null, array('placeholder' => 'Local (0000)','class' => 'form-control')); ?>

        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary btn-block">
          <i class="fa fa-save"></i>
          <span>SAVE</span>
        </button>
    </div>
</div>
<?php echo Form::close(); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>