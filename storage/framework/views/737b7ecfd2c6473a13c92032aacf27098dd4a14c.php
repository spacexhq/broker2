<?php
if (Auth('admin')->User()->dashboard_style == "light") {
    $text = "dark";
	$bg = "light";
} else {
	$bg = 'dark';
    $text = "light";
}
?>

    <?php $__env->startSection('content'); ?>
        <?php echo $__env->make('admin.topmenu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.manage-users', [])->html();
} elseif ($_instance->childHasBeenRendered('pVTHEnA')) {
    $componentId = $_instance->getRenderedChildComponentId('pVTHEnA');
    $componentTag = $_instance->getRenderedChildComponentTagName('pVTHEnA');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('pVTHEnA');
} else {
    $response = \Livewire\Livewire::mount('admin.manage-users', []);
    $html = $response->html();
    $_instance->logRenderedChild('pVTHEnA', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

	
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/remedycodes/public_html/demo4.remedycodes.com.ng/resources/views/admin/Users/users.blade.php ENDPATH**/ ?>