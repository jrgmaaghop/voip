<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<h2>Criteria</h2>
<?php if($message = Session::get('success')): ?>
    <div class="alert alert-success">
        <p><?php echo e($message); ?></p>
    </div>
<?php endif; ?>
<div class="col-md-12 col-sm-12 col-xs-12">
  <div class="x_panel">
    <div class="x_title">
      <h2>Criteria for Judging</h2>
      <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('criteria-create')): ?>
      <div class="pull-right">
          <a class="btn btn-success" href="<?php echo e(route('criteria.create')); ?>"> Add Criteria</a>
      </div>
      <?php endif; ?>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
      <div class="table-responsive">
        <table class="table table-hover">
          <thead>
            <tr class="headings">
              <th class="column-title">#</th>
              <th class="column-title">Round</th>
              <th class="column-title">Title</th>
              <th class="column-title">Rate</th>
              <th class="column-title">Max Score</th>
              <th class="column-title no-link last"><span class="nobr">Action</span></th>
            </tr>
          </thead>
          <tbody>
            <?php $i=0; ?>
            <?php if($data['criterias']->count()>0): ?>
              <?php $__currentLoopData = $data['criterias']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $criteria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <td><?php echo e(++$i); ?></td>
                  <td><?php echo e($criteria->round); ?></td>
                  <td><?php echo e($criteria->title); ?></td>
                  <td><?php echo e($criteria->rate); ?></td>
                  <td><?php echo e($criteria->max_score); ?></td>
                  <td class=" last">
                      <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('criteria-edit')): ?>
                      <a class="btn btn-info btn-xs" href="<?php echo e(route('criteria.edit',$criteria->id)); ?>"  data-toggle="tooltip" data-placement="top" title="Edit">  <span class="fa fa-pencil"></span> </a>
                      <?php endif; ?>
                      <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('criteria-delete')): ?>

                      <?php echo Form::open(['method' => 'DELETE','route' => ['criteria.destroy', $criteria->id],'style'=>'display:inline']); ?>

                          <button type="submit" name="button" class="btn btn-danger btn-xs"  data-toggle="tooltip" data-placement="top" title="Delete"><span class="fa fa-trash"></span></button>
                      <?php echo Form::close(); ?>

                      <?php endif; ?>

                  </td>
                </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php else: ?>
              <tr>
                <td colspan="6" class="text-center text-warning">No Record Found</td>
              </tr>
            <?php endif; ?>


          </tbody>
        </table>
      </div>


    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>