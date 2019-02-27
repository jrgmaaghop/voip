<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <a class="btn btn-success pull-right" href="<?php echo e(route('candidates.create')); ?>">Add Candidates</a>
    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-6 ">
        <div class="x_panel">
          <div class="x_title bg-info text-info">
            <h2>Men's Category</h2>
            <div class="clearfix"></div>
          </div>

          <div class="x_content">
            <div class="row">
              <div class="clearfix"></div>

              <?php $__currentLoopData = $data['candidates_men']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <!-- start info -->
              <div class="col-md-12 col-sm-12 col-xs-12 profile_details">
                <div class="well profile_view">
                  <div class="col-sm-12">
                    <h4 class="brief"><strong>Candidate # <?php echo e($c->no); ?></strong></h4>
                    <div class="left col-xs-7">
                      <h2><?php echo e($c->name); ?></h2>
                      <p><strong>About: </strong> </p>
                      <ul class="list-unstyled">
                        <li><i class="fa fa-paw"></i> Team: <?php echo e($c->team); ?> </li>
                        <li><i class="fa fa-building"></i> Status: <?php echo e($c->status); ?> </li>
                      </ul>
                    </div>
                    <div class="right col-xs-5 text-center">
                      <img src="<?php echo e(asset('/images/candidates')); ?>/<?php echo e($c->picture); ?>" alt="" class="img-circle img-responsive">
                    </div>
                  </div>
                  <div class="col-xs-12 bottom text-center">
                      <a href="<?php echo e(route('candidates.edit',$c->id)); ?>" class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" title="Edit">
                        <i class="fa fa-pencil" data-toggle="tooltip" > </i> Edit
                      </a>
                      <?php echo Form::open(['method' => 'DELETE','route' => ['candidates.destroy', $c->id],'style'=>'display:inline']); ?>

                          <button type="submit" name="button" class="btn btn-danger btn-xs"  data-toggle="tooltip" data-placement="top" title="Delete"><span class="fa fa-trash"></span> Delete</button>
                      <?php echo Form::close(); ?>

                  </div>
                </div>
              </div>
              <!-- end info -->
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="x_panel">
          <div class="x_title bg-danger text-danger">
            <h2>Women's Category</h2>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <div class="row">
              <div class="clearfix"></div>

              <?php $__currentLoopData = $data['candidates_women']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <!-- start info -->
              <div class="col-md-12 col-sm-12 col-xs-12 profile_details">
                <div class="well profile_view">
                  <div class="col-sm-12">
                    <h4 class="brief"><strong>Candidate # <?php echo e($c->no); ?></strong></h4>
                    <div class="left col-xs-7">
                      <h2><?php echo e($c->name); ?></h2>
                      <p><strong>About: </strong> </p>
                      <ul class="list-unstyled">
                        <li><i class="fa fa-paw"></i> Team: <?php echo e($c->team); ?> </li>
                        <li><i class="fa fa-building"></i> Status: <?php echo e($c->status); ?> </li>
                      </ul>
                    </div>
                    <div class="right col-xs-5 text-center">
                      <img src="<?php echo e(asset('/images/candidates')); ?>/<?php echo e($c->picture); ?>" alt="" class="img-circle img-responsive">
                    </div>
                  </div>
                  <div class="col-xs-12 bottom text-center">
                      <a href="<?php echo e(route('candidates.edit',$c->id)); ?>" class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" title="Edit">
                        <i class="fa fa-pencil" > </i> Edit
                      </a>
                      <!-- <button type="button" class="btn btn-danger btn-sm">
                        <i class="fa fa-trash"> </i> Delete
                      </button> -->
                      <?php echo Form::open(['method' => 'DELETE','route' => ['candidates.destroy', $c->id],'style'=>'display:inline']); ?>

                          <button type="submit" name="button" class="btn btn-danger btn-xs"  data-toggle="tooltip" data-placement="top" title="Delete"><span class="fa fa-trash"></span> Delete</button>
                      <?php echo Form::close(); ?>


                  </div>
                </div>
              </div>
              <!-- end info -->
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
          </div>
        </div>
      </div>
    </div>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('script'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>