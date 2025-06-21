<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('admin.topmenu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="main-panel ">
        <div class="content ">
            <div class="page-inner">
                <div class="my-2 mb-4">
                    <h1 class="title1 ">Manage All Task</h1>
                </div>
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.danger-alert','data' => []]); ?>
<?php $component->withName('danger-alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.success-alert','data' => []]); ?>
<?php $component->withName('success-alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive" data-example-id="hoverable-table">
                                    <table id="ShipTable" class="table table-hover ">
                                        <thead>
                                            <tr>
                                                <th>Task Title</th>
                                                <th>Assigned To</th>
                                                <th>From Date</th>
                                                <th>To Date</th>
                                                <th>Status</th>
                                                <th>Date Created</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td><?php echo e($task->title); ?></td>
                                                    <td><?php echo e($task->tuser->firstName); ?> <?php echo e($task->tuser->lastName); ?></td>
                                                    <td><?php echo e($task->start_date); ?></td>
                                                    <td><?php echo e($task->end_date); ?></td>
                                                    <td>
                                                        <?php if($task->status == 'Pending'): ?>
                                                            <span class="badge badge-danger"><?php echo e($task->status); ?></span>
                                                        <?php else: ?>
                                                            <span class=" badge badge-success"><?php echo e($task->status); ?></span>
                                                        <?php endif; ?>
                                                    </td>
                                                    <td><?php echo e($task->created_at->toDayDateTimeString()); ?></td>
                                                    <td>
                                                        <?php if($task->status == 'Pending'): ?>
                                                            <a class="btn btn-success btn-sm m-1 text-white"
                                                                data-toggle="modal"
                                                                data-target="#edittaskModal<?php echo e($task->id); ?>">Edit</a>
                                                        <?php endif; ?>

                                                        <a href="<?php echo e(url('admin/dashboard/deltask')); ?>/<?php echo e($task->id); ?>"
                                                            class="btn btn-danger btn-sm m-1">Delete</a>
                                                    </td>
                                                </tr>

                                                <div id="edittaskModal<?php echo e($task->id); ?>" class="modal fade"
                                                    role="dialog">
                                                    <div class="modal-dialog">

                                                        <!-- Modal content-->
                                                        <div class="modal-content">
                                                            <div class="modal-header ">
                                                                <h4 class="modal-title">Edit this Task</h4>
                                                                <button type="button" class="close "
                                                                    data-dismiss="modal">&times;</button>
                                                            </div>
                                                            <div class="modal-body ">
                                                                <form method="post" action="<?php echo e(route('updatetask')); ?>"
                                                                    enctype="multipart/form-data">
                                                                    <div class="form-group">
                                                                        <div class=" ">
                                                                            <h5 class=" ">Task Title</h5>
                                                                            <input type="text" name="tasktitle"
                                                                                value="<?php echo e($task->title); ?>"
                                                                                class="form-control  " required>
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <div class=" ">
                                                                            <h5 class=" ">Note </h5>
                                                                            <textarea name="note" id="" rows="5" class="form-control  " required><?php echo e($task->note); ?></textarea>
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <h5 class=" ">Task Delegations</h5>
                                                                        <select class="form-control  " name="delegation"
                                                                            required>
                                                                            <option value="<?php echo e($task->designation); ?>">
                                                                                <?php echo e($task->tuser->firstName); ?>

                                                                                <?php echo e($task->tuser->lastName); ?></option>
                                                                            <?php $__currentLoopData = $admin; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                <option value="<?php echo e($user->id); ?>">
                                                                                    <?php echo e($user->firstName); ?>

                                                                                    <?php echo e($user->lastName); ?>

                                                                                </option>
                                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                        </select>
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <div class="form-row">
                                                                            <div class="col-md-6">
                                                                                <h5 class=" ">From</h5>
                                                                                <input type="date" name="start_date"
                                                                                    value="<?php echo e($task->start_date); ?>"
                                                                                    class="form-control  " required>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <h5 class=" ">To</h5>
                                                                                <input type="date"
                                                                                    value="<?php echo e($task->end_date); ?>"
                                                                                    name="end_date" class="form-control  "
                                                                                    required>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <h5 class=" ">Priority</h5>
                                                                        <select class="form-control  " name="priority"
                                                                            required>
                                                                            <option value="<?php echo e($task->priority); ?>">
                                                                                <?php echo e($task->priority); ?></option>
                                                                            <option>Immediately</option>
                                                                            <option>High</option>
                                                                            <option>Medium</option>
                                                                            <option>Low</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <input type="hidden" name="id"
                                                                            value="<?php echo e($task->id); ?>">
                                                                        <input type="hidden" name="_token"
                                                                            value="<?php echo e(csrf_token()); ?>">
                                                                        <input type="submit" class="btn btn-primary"
                                                                            value="Apply Change">
                                                                    </div>


                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /send all users email Modal -->
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/remedycodes/public_html/pro.remedycodes.online/resources/views/admin/mtask.blade.php ENDPATH**/ ?>