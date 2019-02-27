<?php $__env->startSection('css'); ?>
<!-- Datatables -->
    <link href="<?php echo e(asset('vendors/datatables.net-bs/css/dataTables.bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="x_panel">
  <table>
    <thead>
      
    </thead>
    <tbody>

    </tbody>
  </table>
</div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('script'); ?>
<!-- Datatables -->
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