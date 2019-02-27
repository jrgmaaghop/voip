<?php $__env->startSection('css'); ?>
<!-- Wait Me Css -->
<link href="<?php echo e(asset('plugins/waitme/waitMe.css')); ?>" rel="stylesheet" />

<!-- Bootstrap Select Css -->
<link href="<?php echo e(asset('plugins/bootstrap-select/css/bootstrap-select.css')); ?>" rel="stylesheet" />
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Role</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="<?php echo e(route('roles.index')); ?>"> Back</a>
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

<div class="row clearfix">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="card">
      <!-- <div class="header">
        <h2>
          VERTICAL LAYOUT
          <small>With floating label</small>
        </h2>
      </div> -->
      <div class="body">
        <?php echo Form::model($role, ['method' => 'PATCH','route' => ['roles.update', $role->id]]); ?>


          <div class="form-group form-float">
            <div class="form-line">
              <?php echo Form::text('name', null, array('class' => 'form-control', 'type' => 'text' )); ?>

              <label class="form-label">Name</label>
            </div>
          </div>
          <hr>
          <strong>Permission:</strong><br/>
          <?php $ctr=0; ?>
          <?php $__currentLoopData = $permission; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

              <?php echo e(Form::checkbox('permission[]', $value->id, in_array($value->id, $rolePermissions) ? true : false, array('class' => 'name', 'id' =>'chkbx'.$ctr))); ?>

              <label for="chkbx<?php echo e($ctr); ?>"><?php echo e($value->name); ?></label>
          <?php $ctr++; ?>
          <br/>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

          <button type="submit" class="btn bg-primary btn-block waves-effect">
            <i class="fa fa-save"></i>
            <span>SAVE</span>
          </button>

        </form>

      </div>
    </div>
  </div>
</div>


<?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>