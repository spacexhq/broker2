<!DOCTYPE html>
<html lang="en">

<head>
    <script type="text/javascript" src="https://js.stripe.com/v3/"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title><?php echo e($settings->site_name); ?> | <?php echo $__env->yieldContent('title'); ?></title>
    <?php $__env->startSection('styles'); ?>
        <link rel="icon" href="<?php echo e(asset('storage/app/public/' . $settings->favicon)); ?>" type="image/png" />
        <!-- Font Awesome 5 -->
        <link rel="stylesheet"
            href="<?php echo e(asset('themes/purposeTheme/assets/libs/%40fortawesome/fontawesome-pro/css/all.min.css')); ?>">
        <!-- Page CSS -->
        <link rel="stylesheet" href="<?php echo e(asset('themes/purposeTheme/assets/libs/fullcalendar/dist/fullcalendar.min.css')); ?>">
        <!-- Purpose CSS -->
        <link rel="stylesheet" href="<?php echo e(asset('themes/purposeTheme/assets/css/' . $settings->website_theme)); ?>"
            id="stylesheet">
        <link rel="stylesheet" href="<?php echo e(asset('themes/purposeTheme/assets/css/style.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('themes/purposeTheme/assets/libs/animate.css/animate.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('themes/purposeTheme/assets/libs/sweetalert2/dist/sweetalert2.min.css')); ?>">
        <script src="<?php echo e(asset('themes/purposeTheme/assets/libs/sweetalert/sweetalert.min.js')); ?> "></script>
        <link rel="stylesheet" type="text/css"
            href="https://cdn.datatables.net/v/bs4/dt-1.10.21/af-2.3.5/b-1.6.3/b-flash-1.6.3/b-html5-1.6.3/b-print-1.6.3/r-2.2.5/datatables.min.css" />
        <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.2/css/buttons.dataTables.min.css">

        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.1/dist/alpine.min.js" defer></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />

        <link rel="stylesheet" href="<?php echo e(asset('themes/purposeTheme/assets/libs/flatpickr/dist/flatpickr.min.css')); ?>">
    <?php echo $__env->yieldSection(); ?>
    <?php echo \Livewire\Livewire::styles(); ?>

</head>

<body class="application application-offset">
    <script>
        <?php echo $settings->tawk_to; ?>

    </script>
    <!-- Application container -->
    <div class="container-fluid container-application">
        
        <?php echo $__env->make('user.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- Content -->
        <div class="main-content position-relative">
            <!-- Main nav -->
            <?php echo $__env->make('user.topmenu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <!-- Page content -->
            <div class="page-content">
                <?php echo $__env->yieldContent('content'); ?>
            </div>
            <!-- Footer -->
            <div class="pt-5 pb-4 footer footer-light sticky-bottom" id="footer-main">
                <div class="text-center row text-sm-left align-items-sm-center">
                    <div class="col-sm-6">
                        <p class="mb-0 text-sm">All Rights Reserved &copy; <?php echo e($settings->site_name); ?>

                            <?php echo e(date('Y')); ?></p>
                    </div>
                    <?php if($settings->google_translate == 'on'): ?>
                        <div class="text-right col-sm-6 text-md-center">
                            <div id="google_translate_element"></div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

    <?php $__env->startSection('scripts'); ?>
        <!-- Scripts -->
        <!-- Core JS - includes jquery, bootstrap, popper, in-view and sticky-kit -->
        <script src="<?php echo e(asset('themes/purposeTheme/assets/js/purpose.core.js')); ?>"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
        <!-- Bootstrap Notify -->
        <script src="<?php echo e(asset('themes/purposeTheme/assets/libs/bootstrap-notify/bootstrap-notify.min.js')); ?> "></script>
        <!-- Page JS -->
        <script src="<?php echo e(asset('themes/purposeTheme/assets/libs/progressbar.js/dist/progressbar.min.js')); ?>"></script>
        <script src="<?php echo e(asset('themes/purposeTheme/assets/libs/apexcharts/dist/apexcharts.min.js')); ?>"></script>
        <script src="<?php echo e(asset('themes/purposeTheme/assets/libs/moment/min/moment.min.js')); ?>"></script>
        <script src="<?php echo e(asset('themes/purposeTheme/assets/libs/fullcalendar/dist/fullcalendar.min.js')); ?>"></script>
        <script src="<?php echo e(asset('themes/purposeTheme/assets/libs/sweetalert/sweetalert.min.js')); ?> "></script>
        <!-- Purpose JS -->
        <script src="<?php echo e(asset('themes/purposeTheme/assets/js/purpose.js')); ?>"></script>
        <script type="text/javascript"
            src="https://cdn.datatables.net/v/bs4/dt-1.10.21/af-2.3.5/b-1.6.3/b-flash-1.6.3/b-html5-1.6.3/b-print-1.6.3/r-2.2.5/datatables.min.js">
        </script>
        
        <script src="<?php echo e(asset('themes/purposeTheme/assets/libs/flatpickr/dist/flatpickr.min.js')); ?>"></script>

    <?php echo $__env->yieldSection(); ?>

    <script src="<?php echo e(asset('themes/purposeTheme/assets/js/scriptfile.js')); ?>"></script>
    <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
    </script>

    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'en'
            }, 'google_translate_element');
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
        integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
        integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous">
    </script>
    <?php echo \Livewire\Livewire::scripts(); ?>

</body>

</html>
<?php /**PATH /Users/macbookair/Documents/Brynamics/OnlineTraderSoftware/onlinetrader/resources/views/layouts/dash.blade.php ENDPATH**/ ?>