<!DOCTYPE html>
<html lang="en">

<head>
    <title>RentKoro</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap"
        rel="stylesheet">
    <base href="/public">
    <link rel="stylesheet" href="home/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="home/css/animate.css">
    <link rel="stylesheet" href="home/css/owl.carousel.min.css">
    <link rel="stylesheet" href="home/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="home/css/magnific-popup.css">
    <link rel="stylesheet" href="home/css/aos.css">
    <link rel="stylesheet" href="home/css/ionicons.min.css">
    <link rel="stylesheet" href="home/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="home/css/jquery.timepicker.css">
    <link rel="stylesheet" href="home/css/flaticon.css">
    <link rel="stylesheet" href="home/css/icomoon.css">
    <link rel="stylesheet" href="home/css/style.css">
</head>

<body>

    <?php if(session('user')): ?>
    <?php echo $__env->make('home.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php else: ?>
    <?php echo $__env->make('home.header2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
    <!-- END nav -->

    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('home/images/bac1.jpg');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
                <div class="col-md-9 ftco-animate pb-5">
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i
                                    class="ion-ios-arrow-forward"></i></a></span> <span>Cars <i
                                class="ion-ios-arrow-forward"></i></span></p>
                    <h1 class="mb-3 bread">Choose Your Car</h1>
                </div>
            </div>
        </div>
    </section>


    <section class="ftco-section bg-light">
        <?php if(session()->has('message')): ?>

        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
            <?php echo e(session()->get('message')); ?>


        </div>
        <?php endif; ?>

        <div style="padding-left: 500px; padding-bottom: 50px;">
            <form action="<?php echo e(url('product_search')); ?>" method="GET">
                <?php echo csrf_field(); ?>
                <input type="text" name="search" placeholder="Search for Cars">
                <input type="submit" value="search" class="btn btn-outline-primary">
            </form>
        </div>
        <div class="container">

            <?php if($products->isEmpty()): ?>
            <div class="d-flex justify-content-center align-items-center flex-column">
                <div class="alert alert-info" role="alert">
                    No products found.
                </div>
                <a href="<?php echo e(url()->previous()); ?>" class="btn btn-primary mt-3">Go Back</a>
            </div>
            <?php else: ?>

            <div class="row">
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-4">

                    <div class="car-wrap rounded ftco-animate">
                        <div class="img rounded d-flex align-items-end"
                            style="background-image: url('added_products/<?php echo e($product->image); ?>');">
                        </div>
                        <div class="text">
                            <h2 class="mb-0"><a
                                    href="<?php echo e(url('product_details', $product->product_id)); ?>"><?php echo e($product->product_title); ?></a>
                            </h2>
                            <div class="d-flex mb-3">
                                <span class="cat"><?php echo e($product->catagory->catagory_name); ?></span>
                                <p class="price ml-auto">BDT <?php echo e($product->price); ?> <span>/day</span></p>
                            </div>
                            <form action="<?php echo e(url('add_cart',$product->product_id)); ?>" method='Post'>
                                <?php echo csrf_field(); ?>
                                <p>Please Choose total days</p>
                                <div class='row'>
                                    <input type="number" name='days' value="<?php echo e($product->days); ?>"
                                        min="<?php echo e($product->days); ?>">
                                    <input type="submit" value='Book now'>
                                </div>
                            </form>
                            <p class="d-flex mb-0 d-block">
                                <a href="<?php echo e(url('product_details', $product->product_id)); ?>"
                                    class="btn btn-secondary py-2 ml-1">Details</a>
                            </p>
                        </div>
                    </div>

                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <?php endif; ?>
            <div class="row mt-5">
                <div class="col text-center">
                    <div class="block-27">
                        <ul>
                            <li><a href="#">&lt;</a></li>
                            <li class="active"><span>1</span></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">&gt;</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <?php echo $__env->make('home.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00" />
        </svg></div>


    <script src="home/js/jquery.min.js"></script>
    <script src="home/js/jquery-migrate-3.0.1.min.js"></script>
    <script src="home/js/popper.min.js"></script>
    <script src="home/js/bootstrap.min.js"></script>
    <script src="home/js/jquery.easing.1.3.js"></script>
    <script src="home/js/jquery.waypoints.min.js"></script>
    <script src="home/js/jquery.stellar.min.js"></script>
    <script src="home/js/owl.carousel.min.js"></script>
    <script src="home/js/jquery.magnific-popup.min.js"></script>
    <script src="home/js/aos.js"></script>
    <script src="home/js/jquery.animateNumber.min.js"></script>
    <script src="home/js/bootstrap-datepicker.js"></script>
    <script src="home/js/jquery.timepicker.min.js"></script>
    <script src="home/js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false">
    </script>
    <script src="home/js/google-map.js"></script>
    <script src="home/js/main.js"></script>

</body>

</html><?php /**PATH C:\Users\edpay\Desktop\carrental\carrent\resources\views/home/all_product.blade.php ENDPATH**/ ?>