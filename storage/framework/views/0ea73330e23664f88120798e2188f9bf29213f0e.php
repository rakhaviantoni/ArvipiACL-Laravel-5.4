<?php $__env->startSection('content'); ?>
<!-- <?php echo $__env->make('toast::messages', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
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
                        <th>CEO</th>
                        <th>COO</th>
                        <th>CFO</th>
                        <th>CTO</th>
                        <th>CMO</th>
                        <th>Finance</th>
                        <th>HRD</th>
                        <th>Software Developer</th>
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
                        <td><?php if($user->positionid == '1'): ?>
                          <input type="checkbox" onClick="this.form.submit()" checked><?php else: ?><input type="checkbox" name="newposition" value="1" onClick="this.form.submit()"><?php endif; ?></td>
                        <td><?php if($user->positionid == '2'): ?>
                          <input type="checkbox" onClick="this.form.submit()" checked><?php else: ?><input type="checkbox" name="newposition" value="2" onClick="this.form.submit()"><?php endif; ?></td>
                        <td><?php if($user->positionid == '3'): ?>
                          <input type="checkbox" onClick="this.form.submit()" checked><?php else: ?><input type="checkbox" name="newposition" value="3" onClick="this.form.submit()"><?php endif; ?></td>
                        <td><?php if($user->positionid == '4'): ?>
                          <input type="checkbox" onClick="this.form.submit()" checked><?php else: ?><input type="checkbox" name="newposition" value="4" onClick="this.form.submit()"><?php endif; ?></td>
                        <td><?php if($user->positionid == '5'): ?>
                          <input type="checkbox" onClick="this.form.submit()" checked><?php else: ?><input type="checkbox" name="newposition" value="5" onClick="this.form.submit()"><?php endif; ?></td>
                        <td><?php if($user->positionid == '6'): ?>
                          <input type="checkbox" onClick="this.form.submit()" checked><?php else: ?><input type="checkbox" name="newposition" value="6" onClick="this.form.submit()"><?php endif; ?></td>
                        <td><?php if($user->positionid == '7'): ?>
                          <input type="checkbox" onClick="this.form.submit()" checked><?php else: ?><input type="checkbox" name="newposition" value="7" onClick="this.form.submit()"><?php endif; ?></td>
                        <td><?php if($user->positionid == '8'): ?>
                          <input type="checkbox" onClick="this.form.submit()" checked><?php else: ?><input type="checkbox" name="newposition" value="8" onClick="this.form.submit()"><?php endif; ?></td>
                        <td><?php if($user->positionid == '9'): ?>
                          <input type="checkbox" onClick="this.form.submit()" checked><?php else: ?><input type="checkbox" name="newposition" value="9" onClick="this.form.submit()"><?php endif; ?></td>
                        <td><?php if($user->positionid == '10'): ?>
                          <input type="checkbox" onClick="this.form.submit()" checked><?php else: ?><input type="checkbox" name="newposition" value="10" onClick="this.form.submit()"><?php endif; ?></td>
                        <td><?php if($user->positionid == '11'): ?>
                          <input type="checkbox" onClick="this.form.submit()" checked><?php else: ?><input type="checkbox" name="newposition" value="11" onClick="this.form.submit()"><?php endif; ?></td>
                        <td><?php if($user->positionid == '12'): ?>
                          <input type="checkbox" onClick="this.form.submit()" checked><?php else: ?><input type="checkbox" name="newposition" value="12" onClick="this.form.submit()"><?php endif; ?></td>
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