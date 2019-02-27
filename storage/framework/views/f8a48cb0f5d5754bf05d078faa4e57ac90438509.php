<?php $__env->startSection('content'); ?>

<div class="col-md-12 col-sm-12 col-xs-12">
  <?php if($message = Session::get('success')): ?>
  <div class="alert alert-success">
    <p><?php echo e($message); ?></p>
  </div>
  <?php endif; ?>
  <div class="x_panel">
    <!-- <div class="x_title">
      <h2><?php echo date('l');?><small><?php echo date('M-d-Y');?> &nbsp <?php echo date('h:i:sa') ?></small></h2>
      <div class="clearfix"></div>
    </div> -->
    <div class="x_content">

      <div class="bs-example" data-example-id="simple-jumbotron">
        <div class="row">
          <table id="datatable-buttons" class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>Unit/Office</th>
                <th>Description</th>
                <th>Local</th>
                <?php if(auth()->guard()->guest()): ?>
                <?php else: ?>
                <th>Actions</th>
                <?php endif; ?>
              </tr>
            </thead>
            <tbody>
              <?php $__currentLoopData = $data['offices']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $office): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <td><?php echo e($office->office); ?></td>
                  <td><?php echo e($office->desc); ?></td>
                  <td><?php echo e($office->local); ?></td>
                  <?php if(auth()->guard()->guest()): ?>
                  <?php else: ?>
                  <td>
                    <a href="<?php echo e(route('edit',$office->id)); ?>" class="btn btn-xs btn-info"> <span class="fa fa-pencil"></span> </a>
                    <!-- <a href="#" class="btn btn-xs btn-danger"> <span class="fa fa-trash"></span> </a> -->
                    <?php echo Form::open(['method' => 'DELETE','route' => ['directory.destroy', $office->id],'style'=>'display:inline']); ?>

                    <button type="submit" name="button" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Delete"><span class="fa fa-trash"></span></button>
                    <?php echo Form::close(); ?>

                  </td>
                  <?php endif; ?>
                </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
          </table>
        </div>
      </div>

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