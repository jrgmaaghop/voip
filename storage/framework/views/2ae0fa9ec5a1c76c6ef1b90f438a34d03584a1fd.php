<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

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
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <!-- page content -->
        <div class="col-md-12">
          <div class="col-middle">
            <div class="text-center">
              <h1 class="error-number text-danger">Sorry!</h1>
              <h2>You don't have permission to access this level</h2>
              <p>Contact administrator for additional access level.</a>
              </p>
              <div class="mid_center">
                <a class="btn btn-info btn-lg" href="<?php echo e(route('home')); ?>"> <i class="fa fa-arrow-left"></i> Go to back <i class="fa fa-home"></i> page </a>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
      </div>
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
  </body>
</html>
