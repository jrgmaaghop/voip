<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="x_content">

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

  <?php if(isset($data['error'])): ?>
    <div class="alert alert-danger">
      <strong>Whoops!</strong> Wrong password!<br><br>
    </div>
  <?php endif; ?>

  <?php if(isset($data['success'])): ?>
    <div class="alert alert-success">
      <strong>Password </strong> updated!<br><br>
    </div>
  <?php endif; ?>

  <form method="POST" action="<?php echo e(route('passwordupdate')); ?>" class="form-horizontal form-label-left" novalidate>
    <span class="section"></span>
    <?php echo csrf_field(); ?>
    <input type="hidden" name="id" value="<?php echo e(Auth::user()->id); ?>">
    <div class="item form-group">
      <label for="oldpassword" class="control-label col-md-3">Old Password</label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input id="oldpassword" type="password" name="oldpassword" class="form-control col-md-7 col-xs-12" required="required">
      </div>
    </div>
    <div class="item form-group">
      <label for="password" class="control-label col-md-3">Password</label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input id="password" type="password" name="password" data-validate-length="5,30" class="form-control col-md-7 col-xs-12" required="required">
      </div>
    </div>
    <div class="item form-group">
      <label for="confirm-password" class="control-label col-md-3 col-sm-3 col-xs-12">Repeat Password</label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input id="confirm-password" type="password" name="confirm-password" data-validate-linked="password" class="form-control col-md-7 col-xs-12" required="required">
      </div>
    </div>

    <div class="form-group">
      <div class="col-md-6 col-md-offset-3">
        <button type="submit" class="btn btn-primary">Cancel</button>
        <button id="send" type="submit" class="btn btn-success">Submit</button>
      </div>
    </div>
  </form>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <!-- validator -->
    <script src="../vendors/validator/validator.js"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>