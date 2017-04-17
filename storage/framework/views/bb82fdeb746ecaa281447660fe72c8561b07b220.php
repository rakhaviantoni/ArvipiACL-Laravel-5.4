<?php $__env->startSection('content'); ?>
<!-- <?php echo $__env->make('toast::messages', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> -->
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <?php if(Session::has('toasts')): ?>
            <?php $__currentLoopData = Session::get('toasts'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $toast): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class="alert alert-<?php echo e($toast['level']); ?>">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

                <?php echo e($toast['message']); ?>

              </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          <?php endif; ?>
          <ul class="breadcrumb">
          <li><a href="<?php echo e(url('/home')); ?>">Dashboard</a></li>
          <li class="active">Users Management</li>
          </ul>
            <div class="panel panel-default">
                <div class="panel-heading">Users Management</div>

                <div class="panel-body">
                  <table class="table table-striped table-hover ">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Username</th>
                        <th>Admin</th>
                        <th>HRD</th>
                        <th>Finance</th>
                        <th>Editorial</th>
                        <th>Marketing</th>
                        <th>Sales</th>
                      </tr>
                      </thead>

                      <tbody>
                      <tr>
                      <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <td><?php echo e($user->name); ?></td>
                        <td><?php echo e($user->username); ?></td>
                        <form action="<?php echo e(url('/home/users/changerole')); ?>" method="POST">
                        <?php echo csrf_field(); ?>

                        <input type="hidden" name="id" value="<?php echo e($user->id); ?>" >
                        <td><?php if($user->role == 'admin'): ?>
                          <input type="checkbox" onClick="this.form.submit()" checked><?php else: ?><input type="checkbox" name="newposition" value="Admin" onClick="this.form.submit()"><?php endif; ?></td>
                        <td><?php if($user->role == 'hrd'): ?>
                          <input type="checkbox" onClick="this.form.submit()" checked><?php else: ?><input type="checkbox" name="newposition" value="Hrd" onClick="this.form.submit()"><?php endif; ?></td>
                        <td><?php if($user->role == 'finance'): ?>
                          <input type="checkbox" onClick="this.form.submit()" checked><?php else: ?><input type="checkbox" name="newposition" value="Finance" onClick="this.form.submit()"><?php endif; ?></td>
                        <td><?php if($user->role == 'editorial'): ?>
                          <input type="checkbox" onClick="this.form.submit()" checked><?php else: ?><input type="checkbox" name="newposition" value="Editorial" onClick="this.form.submit()"><?php endif; ?></td>
                        <td><?php if($user->role == 'marketing'): ?>
                          <input type="checkbox" onClick="this.form.submit()" checked><?php else: ?><input type="checkbox" name="newposition" value="Marketing" onClick="this.form.submit()"><?php endif; ?></td>
                        <td><?php if($user->role == 'sales'): ?>
                          <input type="checkbox" onClick="this.form.submit()" checked><?php else: ?><input type="checkbox" name="newposition" value="Sales" onClick="this.form.submit()"><?php endif; ?></td>
                        </form>
                    </tbody>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>