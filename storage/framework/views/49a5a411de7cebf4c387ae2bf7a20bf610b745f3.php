<?php $__env->startSection('css'); ?>
<link href="<?php echo e(asset('vendors/datatables.net-bs/css/dataTables.bootstrap.min.css')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="col-md-12 col-sm-12 col-xs-12">
  <h2>Users Management</h2>
  <?php if($message = Session::get('success')): ?>
  <div class="alert alert-success">
    <p><?php echo e($message); ?></p>
  </div>
  <?php endif; ?>

  <div class="x_panel">
    <div class="x_title">
      <h2>List<small>of Users</small></h2>
      <div class="pull-right">
          <a class="btn btn-success" href="<?php echo e(route('users.create')); ?>"> Create New User</a>
      </div>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
      <table id="datatable-buttons" class="table table-striped table-bordered">
        <thead>
          <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Roles</th>
            <th>Actions</th>
          </tr>
        </thead>


        <tbody>
          <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
              <td><?php echo e($user->name); ?></td>
              <td><?php echo e($user->email); ?></td>
              <td>
                <?php if(!empty($user->getRoleNames())): ?>
                  <?php $__currentLoopData = $user->getRoleNames(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <label class="label label-success"><?php echo e($v); ?></label>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
              </td>
              <td>
                 <a class="btn btn-info btn-xs" href="<?php echo e(route('users.show',$user->id)); ?>" data-toggle="tooltip" data-placement="top" title="View"><span class="fa fa-eye"></span></a>
                 <a class="btn btn-primary btn-xs" href="<?php echo e(route('users.edit',$user->id)); ?>" data-toggle="tooltip" data-placement="top" title="Edit"><span class="fa fa-pencil"></span></a>
                  <?php echo Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']); ?>

                  <button type="submit" name="button" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Delete"><span class="fa fa-trash"></span></button>
                  <?php echo Form::close(); ?>

              </td>
            </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
      </table>
    </div>
  </div>
</div>



<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script src="<?php echo e(asset('vendors/datatables.net/js/jquery.dataTables.min.js')); ?>"></script>
<script src="<?php echo e(asset('vendors/datatables.net-bs/js/dataTables.bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(asset('vendors/datatables.net-buttons/js/dataTables.buttons.min.js')); ?>"></script>
<script src="<?php echo e(asset('vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(asset('vendors/datatables.net-buttons/js/buttons.flash.min.js')); ?>"></script>
<script src="<?php echo e(asset('vendors/datatables.net-buttons/js/buttons.html5.min.js')); ?>"></script>
<script src="<?php echo e(asset('vendors/datatables.net-buttons/js/buttons.print.min.js')); ?>"></script>
<script src="<?php echo e(asset('vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js')); ?>"></script>
<script src="<?php echo e(asset('vendors/datatables.net-keytable/js/dataTables.keyTable.min.js')); ?>"></script>
<script src="<?php echo e(asset('vendors/datatables.net-responsive/js/dataTables.responsive.min.js')); ?>"></script>
<script src="<?php echo e(asset('vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js')); ?>"></script>
<script src="<?php echo e(asset('vendors/datatables.net-scroller/js/dataTables.scroller.min.js')); ?>"></script>
<script src="<?php echo e(asset('vendors/jszip/dist/jszip.min.js')); ?>"></script>
<script src="<?php echo e(asset('vendors/pdfmake/build/pdfmake.min.js')); ?>"></script>
<script src="<?php echo e(asset('vendors/pdfmake/build/vfs_fonts.js')); ?>"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>