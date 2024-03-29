<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title><?php echo e(config('app.name', 'ATI HRIS')); ?></title>
    <!-- Favicon-->
    <link rel="icon" href="<?php echo e(asset('favicon.ico')); ?>" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href=" <?php echo e(asset('plugins/bootstrap/css/bootstrap.css')); ?>" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href=" <?php echo e(asset('plugins/node-waves/waves.css')); ?>" rel="stylesheet" />

    <!-- Animation Css -->
    <link href=" <?php echo e(asset('plugins/animate-css/animate.css')); ?>" rel="stylesheet" />

    <!-- Custom Css -->
    <link href=" <?php echo e(asset('css/style.css')); ?>" rel="stylesheet">
    <?php echo $__env->yieldContent('css'); ?>

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href=" <?php echo e(asset('css/themes/all-themes.css')); ?>" rel="stylesheet" />
</head>

<body class="theme-indigo">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->

    <!-- Top Bar -->
    <?php echo $__env->make('includes.topbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <!-- #Top Bar -->
    <!-- Sidebar -->
    <?php echo $__env->make('includes.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <!-- #Sidebar -->

    <section class="content">
        <div class="container-fluid">
            <!-- <div class="block-header">
                <h2>BLANK PAGE</h2>
            </div> -->

            <?php echo $__env->yieldContent('content'); ?>

        </div>
    </section>

    <!-- Jquery Core Js -->
    <script src=" <?php echo e(asset('plugins/jquery/jquery.min.js')); ?>"></script>

    <!-- Bootstrap Core Js -->
    <script src=" <?php echo e(asset('plugins/bootstrap/js/bootstrap.js')); ?>"></script>

    <!-- Select Plugin Js -->
    <script src=" <?php echo e(asset('plugins/bootstrap-select/js/bootstrap-select.js')); ?>"></script>

    <!-- Slimscroll Plugin Js -->
    <script src=" <?php echo e(asset('plugins/jquery-slimscroll/jquery.slimscroll.js')); ?>"></script>

    <!-- Waves Effect Plugin Js -->
    <script src=" <?php echo e(asset('plugins/node-waves/waves.js')); ?>"></script>

    <!-- Custom Js -->
    <script src=" <?php echo e(asset('js/admin.js')); ?>"></script>

    <!-- Demo Js -->
    <script src=" <?php echo e(asset('js/demo.js')); ?>"></script>
    <?php echo $__env->yieldContent('script'); ?>
</body>

</html>
