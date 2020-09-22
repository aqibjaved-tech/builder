<?php $__env->startSection('title', 'Users Lists'); ?>

<?php $__env->startSection('content'); ?>
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

    <div class="kt-portlet kt-portlet--mobile">
        <div class="kt-portlet__head kt-portlet__head--lg">
            <div class="kt-portlet__head-label">
                <h3 class="kt-portlet__head-title">Users</h3>
            </div>
            <div class="kt-portlet__head-toolbar">
                <div class="kt-portlet__head-wrapper">
                    <div class="kt-portlet__head-actions">

                        <a href="<?php echo e(route('users.create')); ?>" class="btn btn-brand btn-elevate btn-icon-sm">
                            <i class="la la-plus"></i> New User
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="kt-portlet__body">
            <!--begin: Datatable -->
            <table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Actions</th>
                    </tr>
                </thead>
								<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $record): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tbody>
                    <tr>
                        <td><?php echo e($record->id); ?></td>
                        <td><?php echo e($record->name); ?></td>
                        <td><?php echo e($record->email); ?></td>
                        <td><?php echo e($record->role); ?></td>
                        <td>
													<a href="<?php echo e(route('users.edit', $record->id)); ?>">Edit</a> | <a href="<?php echo e(route('users.destroy', $record->id)); ?>">Delete</a>
												</td>
                    </tr>
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>

            </table>
            <!--end: Datatable -->
        </div>
    </div>
</div>
<!-- end:: Content -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pageBuilder\resources\views/users/users-list.blade.php ENDPATH**/ ?>