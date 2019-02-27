<?php $__env->startSection('css'); ?>
<!-- bootstrap-wysiwyg -->
  <link href="<?php echo e(asset('vendors/google-code-prettify/bin/prettify.min.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2><small>Criteria for Judging</small></h2>
        <div class="clearfix"></div>
      </div>
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
        <div class="col-md-12 col-sm-12 col-xs-12">
          <form method="POST" action="<?php echo e(route('criteria.store')); ?>" accept-charset="UTF-8" enctype="multipart/form-data" class="form-horizontal form-label-left"  novalidate>
            <?php echo csrf_field(); ?>
            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="round_id">Round <span class="required">*</span>
              </label>
              <div  class="col-md-6 col-sm-6 col-xs-12">
                <select id="round_id" name="round_id" class="form-control col-md-7 col-xs-12" required>
                  <option value="">Select a Round</option>
                  <?php $__currentLoopData = $data['rounds']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $round): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <option value="<?php echo e($key); ?>"><?php echo e($round); ?></option>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
              </div>
            </div>

            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title">Criteria Title <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input id="title" class="form-control col-md-7 col-xs-12" name="title" placeholder="Criteria Title" required="required" type="text" required>
              </div>
            </div>

            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="rating">Rating (%) <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="number" id="rating" name="rating" required="required" data-validate-minmax="0,101" class="form-control col-md-7 col-xs-12" required>
              </div>
            </div>

            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="max_score">Max Score <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="number" id="max_score" name="max_score" required="required" data-validate-minmax="0,11" class="form-control col-md-7 col-xs-12" required>
              </div>
            </div>


            <div class="ln_solid"></div>
            <div class="form-group">
              <div class="col-md-6 col-md-offset-3">
                <a class="btn btn-primary" href="<?php echo e(route('candidates.index')); ?>">Cancel</a>
                <button id="send" type="submit" class="btn btn-success">Submit</button>
              </div>
            </div>
          </form>
        </div>

      </div>
    </div>
  </div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<!-- validator -->
    <script src="<?php echo e(asset('vendors/validator/validator.js')); ?>"></script>
    <!-- bootstrap-wysiwyg -->
    <script src="<?php echo e(asset('vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js')); ?>"></script>
    <script src="<?php echo e(asset('vendors/jquery.hotkeys/jquery.hotkeys.js')); ?>"></script>
    <script src="<?php echo e(asset('vendors/google-code-prettify/src/prettify.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>