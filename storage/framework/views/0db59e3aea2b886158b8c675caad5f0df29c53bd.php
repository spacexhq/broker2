<div class="row">

    <div class="col-md-8 offset-md-2">
        <form action="javascript:void(0)" method="POST" id="trasfer">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="form-group">
                <div class="selectgroup">
                    <label class="selectgroup-item">
                        <input type="radio" name="usertransfer" value="1" class="selectgroup-input"
                            <?php echo e($moresettings->use_transfer ? 'checked' : ''); ?>>
                        <span class="selectgroup-button">On</span>
                    </label>
                    <label class="selectgroup-item">
                        <input type="radio" name="usertransfer" value="0" class="selectgroup-input"
                            <?php echo e($moresettings->use_transfer ? '' : 'checked'); ?>>
                        <span class="selectgroup-button">Off</span>
                    </label>
                </div>
                <small class=" d-block">Turn on if you want to use this feature, otherwise turn if off.</small>
            </div>
            <div class="form-group">
                <h5 class="">Minimum Transfer Amount (<?php echo e($settings->currency); ?>)</h5>
                <input type="number" name="min_transfer" class="form-control  "
                    value="<?php echo e($moresettings->min_transfer); ?>">
            </div>
            <div class="form-group">
                <h5 class="">Charges(%)</h5>
                <input type="number" name="charges" class="form-control  "
                    value="<?php echo e($moresettings->transfer_charges); ?>">
                <small class="">Enter 0 if you don't want any charges</small>
            </div>

            <div class="form-group col-md-6">
                <button type="submit" class="px-4 btn btn-primary">Save Settings</button>
            </div>
        </form>
    </div>
</div>
<?php /**PATH /home/gfzwcacl/public_html/resources/views/admin/Settings/PaymentSettings/transfers.blade.php ENDPATH**/ ?>