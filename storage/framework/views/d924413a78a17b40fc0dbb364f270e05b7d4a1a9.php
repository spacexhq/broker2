<?php
if (Auth('admin')->User()->dashboard_style == 'light') {
    $bgmenu = 'blue';
    $bg = 'light';
    $text = 'dark';
} else {
    $bgmenu = 'dark';
    $bg = 'dark';
    $text = 'light';
}

?>
<div class="main-header">
    <!-- Logo Header -->
    <div class="logo-header" data-background-color="<?php echo e($bgmenu); ?>">
        <a href="/" class="logo" style="font-size: 27px; color:#fff;">
            <?php echo e($settings->site_name); ?>

        </a>
        <button class="ml-auto navbar-toggler sidenav-toggler" type="button" data-toggle="collapse" data-target="collapse"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">
                <i class="icon-menu "></i>
            </span>
        </button>
        <button class="topbar-toggler more"><i class="icon-options-vertical "></i></button>
        <div class="nav-toggle">
            <button class="btn btn-toggle toggle-sidebar">
                <i class="icon-menu "></i>
            </button>
        </div>

    </div>
    <!-- End Logo Header -->

    <!-- Navbar Header -->
    <nav class="navbar navbar-header navbar-expand-lg" data-background-color="<?php echo e($bgmenu); ?>">

        <div class="container-fluid">
            <div class="collapse" id="search-nav">
                <a href="<?php echo e(route('manageusers')); ?>">
                    <form class="navbar-left navbar-form nav-search mr-md-3" action="javascript:void(0)">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <button type="submit" class="pr-1 btn btn-search">
                                    <i class="fa fa-search search-icon"></i>
                                </button>
                            </div>
                            <input type="text" placeholder="Manage users"
                                class="form-control text-<?php echo e($text); ?> ">
                        </div>
                    </form>
                </a>

                <script>
                    document.getElementById('searchform').addEventListener('subit'
                        searchuser);

                    function searchuser() {
                        console.log('ddj');
                        let url = "<?php echo e(route('manageusers')); ?>";
                        window.location.href = url;
                    }
                </script>
            </div>
            <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
                

                <li class="nav-item dropdown hidden-caret">
                    <a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="text-white fas fa-user"></i>
                    </a>

                    <ul class="dropdown-menu dropdown-user animated fadeIn">
                        <div class="dropdown-user-scroll scrollbar-outer">
                            <li>
                                <a class="dropdown-item" href="<?php echo e(url('admin/dashboard/adminprofile')); ?>">Account
                                    Settings</a>
                                <a class="dropdown-item" href="<?php echo e(url('admin/dashboard/adminchangepassword')); ?>">Change
                                    Password</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?php echo e(route('adminlogout')); ?>"
                                    onclick="event.preventDefault();
                                document.getElementById('logoutform').submit();">
                                    Logout
                                </a>
                                <form id="logoutform" action="<?php echo e(route('adminlogout')); ?>" method="POST"
                                    style="display: none;">
                                    <?php echo e(csrf_field()); ?>

                                </form>
                            </li>
                        </div>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
    <!-- End Navbar -->
</div>


<script type="text/javascript">
    //create investment
    $("#styleform").on('change', function() {
        $.ajax({
            url: "<?php echo e(url('admin/dashboard/changestyle')); ?>",
            type: 'POST',
            data: $("#styleform").serialize(),
            success: function(data) {
                location.reload(true);
            },
            error: function(data) {
                console.log('Something went wrong');
            },

        });
    });
</script>
<?php /**PATH /Users/macbookair/Documents/Brynamics/OnlineTraderSoftware/onlinetrader/resources/views/admin/topmenu.blade.php ENDPATH**/ ?>