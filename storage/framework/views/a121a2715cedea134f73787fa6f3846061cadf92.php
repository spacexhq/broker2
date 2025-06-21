<form method="POST" action="<?php echo e(route('updateuserpass')); ?>">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label class="">Old Password</label>
            <input type="password" name="current_password" class="form-control " required>
        </div>
        <div class="form-group col-md-6">
            <label class="">New Password</label>
            <input type="password" name="password" class="form-control " required>
        </div>
        <div class="form-group col-md-6">
            <label class="">Confirm New Password</label>
            <input type="password" name="password_confirmation" class=" form-control" required>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Update Password</button>
</form>
<div class="mt-4">
    <a href="<?php echo e(route('twofa')); ?>" class="text-decoration-none"><?php echo e(__('Advance Account Settings')); ?> <i class="fas fa-arrow-right"></i> </a>
</div><?php /**PATH /Users/macbookair/Documents/Brynamics/OnlineTraderSoftware/onlinetrader/resources/views/profile/update-password-form.blade.php ENDPATH**/ ?>