<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="<?php echo e(url('/guestuser')); ?>">Rent<span>Koro</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
            aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a href="<?php echo e(url('/')); ?>" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="<?php echo e(url('all_catagories')); ?>" class="nav-link">Catagories</a></li>
                <li class="nav-item"><a href="<?php echo e(url('/all_cars')); ?>" class="nav-link">Cars</a></li>
                <li class="nav-item"><a href="<?php echo e(url('contact')); ?>" class="nav-link">Contact</a></li>
                <div style="padding-right: 10px; padding-top:5px;">
                    <form action="<?php echo e(url('product_search')); ?>" method="GET">
                        <?php echo csrf_field(); ?>
                        <input type="text" name="search" placeholder="Search for Cars">
                        <input type="submit" value="search" class="btn btn-outline-primary">
                    </form>
                </div>
                <li class="nav-item"><a href="<?php echo e(url('/userlogin')); ?>" class="btn btn-success">Login/Signup</a></li>
                <li class="nav-item dropdown border-left">
                    <a class="nav-link count-indicator dropdown-toggle" id="accountOptionsDropdown" href="#"
                        data-toggle="dropdown">
                        <!-- Change the icon here (e.g., to a key icon) -->
                        <i class="mdi mdi-key"></i>
                        <span class="count bg-danger"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                        aria-labelledby="accountOptionsDropdown">
                        <h6 class="p-3 mb-0">Other Account options</h6>
                        <div class="dropdown-divider"></div>
                        <!-- Add options for user login, user sign up, vendor login, and vendor signup -->
                        <a class="dropdown-item preview-item" href="<?php echo e(url('/adminlogin')); ?>">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-dark rounded-circle">
                                    <i class="mdi mdi-login text-success"></i>
                                </div>
                            </div>
                            <div class="preview-item-content">
                                <p class="preview-subject mb-1">Admin Login</p>
                                <p class="text-muted ellipsis mb-0"> Click here to log in as a user </p>
                            </div>
                        </a>
                        <a class="dropdown-item preview-item" href="<?php echo e(url('/adminsignup')); ?>">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-dark rounded-circle">
                                    <i class="mdi mdi-account-plus text-primary"></i>
                                </div>
                            </div>
                            <div class="preview-item-content">
                                <p class="preview-subject mb-1">Admin Sign Up</p>
                                <p class="text-muted ellipsis mb-0"> New user? Sign up here </p>
                            </div>
                        </a>
                        <a class="dropdown-item preview-item" href="<?php echo e(url('/vendorlogin')); ?>">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-dark rounded-circle">
                                    <i class="mdi mdi-login-variant text-warning"></i>
                                </div>
                            </div>
                            <div class="preview-item-content">
                                <p class="preview-subject mb-1">Vendor Login</p>
                                <p class="text-muted ellipsis mb-0"> Click here to log in as a vendor </p>
                            </div>
                        </a>
                        <a class="dropdown-item preview-item" href="<?php echo e(url('/vendorsignup')); ?>">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-dark rounded-circle">
                                    <i class="mdi mdi-account-plus text-danger"></i>
                                </div>
                            </div>
                            <div class="preview-item-content">
                                <p class="preview-subject mb-1">Vendor Sign Up</p>
                                <p class="text-muted ellipsis mb-0"> New vendor? Sign up here </p>
                            </div>
                        </a>
                </li>
            </ul>
        </div>
    </div>
</nav><?php /**PATH C:\Users\edpay\Desktop\carrental\carrent\resources\views/home/header2.blade.php ENDPATH**/ ?>