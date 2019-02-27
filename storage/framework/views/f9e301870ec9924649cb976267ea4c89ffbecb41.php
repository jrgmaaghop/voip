<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Create New Round</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="<?php echo e(route('rounds.index')); ?>"> Back</a>
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


<div class="x_center">
  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
    <div class="card">
      <div class="body"><br><br>
      <?php echo Form::open(array('route' => 'rounds.store','method'=>'POST')); ?>


          <div class="form-group form-float">
            <div class="form-line">
              <label class="form-label">Round name</label>
              <input type="text" name="name" class="form-control" placeholder="Round name"  required>
            </div>
            <div class="form-line">
              <label class="form-label" for="status">Round name</label>
              <!-- <input type="text" name="name" class="form-control" placeholder="Round name"  required> -->
              <select class="form-control" name="status" id="status" required>
                <option value="">Select Status</option>
                <?php $__currentLoopData = $data['status']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $status): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($key); ?>"><?php echo e($status); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </select>
            </div>
          </div>
          <br>
          <button type="submit" class="btn bg-primary btn-block ">
              <i class="fa fa-save"></i>
              <span>SAVE</span>
          </button>

        </form>

      </div>
    </div>
  </div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>