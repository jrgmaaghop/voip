<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<h2>Rounds</h2>
<?php if($message = Session::get('success')): ?>
    <div class="alert alert-success">
        <p><?php echo e($message); ?></p>
    </div>
<?php endif; ?>
<div class="col-md-12 col-sm-12 col-xs-12">
  <div class="x_panel">
    <div class="x_title">
      <h2>Rounds</h2>
      <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('round-create')): ?>
      <div class="pull-right">
          <a class="btn btn-success" href="<?php echo e(route('rounds.create')); ?>"> Create New Round</a>
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
              <th class="column-title">Title</th>
              <th class="column-title">Status</th>
              <th class="column-title no-link last"><span class="nobr">Action</span></th>
            </tr>
          </thead>
          <tbody>
            <?php $i=0; ?>
            <?php if($data['rounds']->count()>0): ?>
              <?php $__currentLoopData = $data['rounds']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $round): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <td><?php echo e(++$i); ?></td>
                  <td><?php echo e($round->title); ?></td>
                  <?php ($round->status=='Active')?$cls="text-success":$cls="text-danger"  ?>
                  <td class="<?php echo e($cls); ?>"> <i class="fa fa-circle"></i> <?php echo e($round->status); ?></td>
                  <td class=" last">
                      <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('round-edit')): ?>
                      <a class="btn btn-info btn-xs" href="<?php echo e(route('rounds.edit',$round->id)); ?>"  data-toggle="tooltip" data-placement="top" title="Edit">  <span class="fa fa-pencil"></span> </a>
                      <?php endif; ?>
                      <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('round-delete')): ?>

                      <?php echo Form::open(['method' => 'DELETE','route' => ['rounds.destroy', $round->id],'style'=>'display:inline']); ?>

                          <button type="submit" name="button" class="btn btn-danger btn-xs"  data-toggle="tooltip" data-placement="top" title="Delete"><span class="fa fa-trash"></span></button>
                      <?php echo Form::close(); ?>

                      <?php endif; ?>

                  </td>
                </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php else: ?>
              <tr>
                <td colspan="3" class="text-center text-warning">No Record Found</td>
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