<?php $__env->startSection('content'); ?>
  <h2>Role Management</h2>
  <?php if($message = Session::get('success')): ?>
      <div class="alert alert-success">
          <p><?php echo e($message); ?></p>
      </div>
  <?php endif; ?>
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Role List</h2>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('role-create')): ?>
        <div class="pull-right">
            <a class="btn btn-success" href="<?php echo e(route('roles.create')); ?>"> Create New Role</a>
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
                <th class="column-title">Label</th>
                <th class="column-title no-link last"><span class="nobr">Action</span></th>
              </tr>
            </thead>
            <tbody>
              <?php $i=0; ?>
              <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <td><?php echo e(++$i); ?></td>
                  <td><?php echo e($role->name); ?></td>
                  <td class=" last">
                    <a class="btn btn-default btn-xs"  href="<?php echo e(route('roles.show',$role->id)); ?>"  data-toggle="tooltip" data-placement="top" title="View"> <span class="fa fa-eye"></span> </a>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('role-edit')): ?>
                      <a class="btn btn-info btn-xs" href="<?php echo e(route('roles.edit',$role->id)); ?>"  data-toggle="tooltip" data-placement="top" title="Edit">  <span class="fa fa-pencil"></span> </a>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('role-delete')): ?>
                      <?php echo Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']); ?>

                          <button type="submit" name="button" class="btn btn-danger btn-xs"  data-toggle="tooltip" data-placement="top" title="Delete"><span class="fa fa-trash"></span></button>
                      <?php echo Form::close(); ?>

                    <?php endif; ?>
                  </td>
                </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
          </table>
        </div>


      </div>
    </div>
  </div>
  

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>