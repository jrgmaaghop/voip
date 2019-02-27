<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">

<head>
  <meta charset="UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
  <title><?php echo e(config('app.name', 'ATI HRIS')); ?>  <?php if(isset($data['page_title'])): ?> | <?php echo e($data['page_title']); ?> <?php endif; ?> </title>
  <!-- Favicon-->
  <link rel="icon" href="<?php echo e(asset('favicon.ico')); ?>" type="image/x-icon">

  <!-- Bootstrap -->
  <link href="<?php echo e(asset('vendors/bootstrap/dist/css/bootstrap.min.css')); ?>" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="<?php echo e(asset('vendors/font-awesome/css/font-awesome.min.css')); ?>" rel="stylesheet">
  <!-- NProgress -->
  <link href="<?php echo e(asset('vendors/nprogress/nprogress.css')); ?>" rel="stylesheet">

  <!-- Custom Theme Style -->
  <link href=" <?php echo e(asset('build/css/custom.min.css')); ?>" rel="stylesheet">

  <?php echo $__env->yieldContent('css'); ?>

</head>

<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <?php echo $__env->make('includes.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <?php echo $__env->make('includes.topbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <!-- page content -->
      <div class="right_col" role="main">
        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3><?php if(isset($data['page_title'])): ?> <?php echo e($data['page_title']); ?> <?php endif; ?></h3>
            </div>
          </div>
          <div class="clearfix"></div>

          <?php echo $__env->yieldContent('content'); ?>
        </div>
      </div>
      <!-- /page content -->

      <!-- footer content -->
      <footer>
        <div class="pull-right">
          ATI 8 HRIS
        </div>
        <div class="clearfix"></div>
      </footer>
      <!-- /footer content -->
    </div>
    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
      <?php echo csrf_field(); ?>
    </form>
  </div>

  <!-- jQuery -->
  <script src="<?php echo e(asset('vendors/jquery/dist/jquery.min.js')); ?>"></script>
  <!-- Bootstrap -->
  <script src="<?php echo e(asset('vendors/bootstrap/dist/js/bootstrap.min.js')); ?>"></script>
  <!-- FastClick -->
  <script src="<?php echo e(asset('vendors/fastclick/lib/fastclick.js')); ?>"></script>
  <!-- NProgress -->
  <script src="<?php echo e(asset('vendors/nprogress/nprogress.js')); ?>"></script>

  <!-- Custom Theme Scripts -->
  <script src="<?php echo e(asset('build/js/custom.min.js')); ?>"></script>

  <?php echo $__env->yieldContent('script'); ?>
</body>

</html>
