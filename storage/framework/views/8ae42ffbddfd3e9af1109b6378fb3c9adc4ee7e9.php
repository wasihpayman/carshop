<section class="ftco-section ftco-no-pt bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 heading-section text-center ftco-animate mb-5">
                <span class="subheading">What we offer</span>
                <h2 class="mb-2">Featured Vehicles</h2>
            </div>
        </div>
        <div class="row">

            <div class="col-md-12">
                <div class="carousel-car owl-carousel">
                    <?php $__currentLoopData = $product_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <div class="item">
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
                                <p class="d-flex mb-0 d-block">
                                    <a href="<?php echo e(url('product_details', $product->product_id)); ?>"
                                        class="btn btn-secondary py-2 ml-1">Details</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>
            </div>

        </div>
    </div>
</section><?php /**PATH C:\Users\edpay\Desktop\codes for sale\carrental\carrent\resources\views/home/product.blade.php ENDPATH**/ ?>