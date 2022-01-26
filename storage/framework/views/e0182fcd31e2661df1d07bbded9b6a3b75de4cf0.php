<?php $__env->startSection('title',\App\CPU\translate('Track Order')); ?>

<?php $__env->startPush('css_or_js'); ?>
    <meta property="og:image" content="<?php echo e(asset('storage/app/public/company')); ?>/<?php echo e($web_config['web_logo']->value); ?>"/>
    <meta property="og:title" content="<?php echo e($web_config['name']->value); ?> "/>
    <meta property="og:url" content="<?php echo e(env('APP_URL')); ?>">
    <meta property="og:description" content="<?php echo substr($web_config['about']->value,0,100); ?>">

    <meta property="twitter:card" content="<?php echo e(asset('storage/app/public/company')); ?>/<?php echo e($web_config['web_logo']->value); ?>"/>
    <meta property="twitter:title" content="<?php echo e($web_config['name']->value); ?>"/>
    <meta property="twitter:url" content="<?php echo e(env('APP_URL')); ?>">
    <meta property="twitter:description" content="<?php echo substr($web_config['about']->value,0,100); ?>">

    <link rel="stylesheet" media="screen"
          href="<?php echo e(asset('public/assets/front-end')); ?>/vendor/nouislider/distribute/nouislider.min.css"/>
    <style>
        @media(max-width: 600px){
            .mobile-order {
                margin-top: -54px;
            }

            .card.border-0 {
                margin-top: 20px !important;
            }
        }
    </style>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <!-- Page Title (Dark)-->
    <div class="container rtl mobile-order" style="text-align: <?php echo e(Session::get('direction') === "rtl" ? 'right' : 'left'); ?>;">

        <div class="pt-3 pb-3">
            <h2 class="d-none d-md-block"><?php echo e(\App\CPU\translate('my_order')); ?></h2>
        </div>
        <div class="btn-primary">
            <div class="container d-lg-flex justify-content-between py-2 py-lg-3">

                <div
                    class="order-lg-1 <?php echo e(Session::get('direction') === "rtl" ? 'pl-lg-4' : 'pr-lg-4'); ?> text-center text-lg-left">
                    <h4 class="text-light mb-0"><?php echo e(\App\CPU\translate('order_id')); ?>:
                        <span class="h4 font-weight-normal text-light"><?php echo e($orderDetails['id']); ?></span></h4>
                </div>
            </div>
        </div>

    </div>
    <!-- Page Content-->
    <div class="container mb-md-3 rtl" style="text-align: <?php echo e(Session::get('direction') === "rtl" ? 'right' : 'left'); ?>;">
        <!-- Details-->
        <div class="row" style="background: #e2f0ff; margin: 0; width: 100%;">
            <div class="col-sm-4">
                <div class="pt-2 pb-2 text-center rounded-lg">
                    <span
                        class="font-weight-medium text-dark <?php echo e(Session::get('direction') === "rtl" ? 'ml-2' : 'mr-2'); ?>"><?php echo e(\App\CPU\translate('order_status')); ?>:</span><br>
                    <span class="text-uppercase "><?php echo e(str_replace('_',' ',$orderDetails['order_status'])); ?></span>
                    
                </div>
            </div>
            <div class="col-sm-4">
                <div class="pt-2 pb-2 text-center rounded-lg">
                    <span
                        class="font-weight-medium text-dark <?php echo e(Session::get('direction') === "rtl" ? 'ml-2' : 'mr-2'); ?>"><?php echo e(\App\CPU\translate('payment_status')); ?>:</span>
                    <br>
                    <span class="text-uppercase"><?php echo e($orderDetails['payment_status']); ?></span>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="pt-2 pb-2 text-center rounded-lg">
                    <span
                        class="font-weight-medium text-dark <?php echo e(Session::get('direction') === "rtl" ? 'ml-2' : 'mr-2'); ?>"><?php echo e(\App\CPU\translate('estimated_delivery_date')); ?>: </span>
                    <br>
                    <span class="text-uppercase"
                          style="font-weight: 600; color: <?php echo e($web_config['primary_color']); ?>"><?php echo e(Carbon\Carbon::createFromFormat('Y-m-d H:i:s',$orderDetails['updated_at'])->format('Y-m-d')); ?></span>
                </div>
            </div>
        </div>
        <!-- Progress-->
        <div class="card border-0 box-shadow-lg mt-5">
            <div class="card-body pb-2">
                <ul class="nav nav-tabs media-tabs nav-justified">
                    <?php if($orderDetails['order_status']!='returned' && $orderDetails['order_status']!='failed' && $orderDetails['order_status']!='canceled'): ?>

                        <li class="nav-item">
                            <div class="nav-link">
                                <div class="align-items-center">
                                    <div class="media-tab-media"
                                         style="margin: 0 auto; background: #4bcc02; color: white;">
                                        <i class="czi-check"></i>
                                    </div>
                                    <div class="media-body" style="text-align: center;">
                                        <div class="media-tab-subtitle text-muted font-size-xs mb-1"><?php echo e(\App\CPU\translate('first_step')); ?></div>
                                        <h6 class="media-tab-title text-nowrap mb-0"><?php echo e(\App\CPU\translate('order_placed')); ?></h6>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="nav-item ">
                            <div class="nav-link ">
                                <div class="align-items-center">
                                    <div class="media-tab-media"
                                         style="margin: 0 auto; <?php if(($orderDetails['order_status']=='processing') || ($orderDetails['order_status']=='processed') || ($orderDetails['order_status']=='out_for_delivery') || ($orderDetails['order_status']=='delivered')): ?> background: #4bcc02; color: white; <?php endif; ?> ">
                                        <?php if(($orderDetails['order_status']=='processing') || ($orderDetails['order_status']=='processed') || ($orderDetails['order_status']=='out_for_delivery') || ($orderDetails['order_status']=='delivered')): ?>
                                            <i class="czi-check"></i>
                                        <?php endif; ?>
                                    </div>
                                    <div class="media-body" style="text-align: center;">
                                        <div class="media-tab-subtitle text-muted font-size-xs mb-1"><?php echo e(\App\CPU\translate('second_step')); ?></div>
                                        <h6 class="media-tab-title text-nowrap mb-0"><?php echo e(\App\CPU\translate('processing_order')); ?></h6>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="nav-item">
                            <div class="nav-link  ">
                                <div class="align-items-center">
                                    <div class="media-tab-media"
                                         style="margin: 0 auto; <?php if(($orderDetails['order_status']=='processed') || ($orderDetails['order_status']=='out_for_delivery') || ($orderDetails['order_status']=='delivered')): ?> background: #4bcc02; color: white; <?php endif; ?> ">
                                        <?php if(($orderDetails['order_status']=='out_for_delivery') || ($orderDetails['order_status']=='processing') || ($orderDetails['order_status']=='processed') || ($orderDetails['order_status']=='delivered')): ?>
                                            <i class="czi-check"></i>
                                        <?php endif; ?>
                                    </div>
                                    <div class="media-body" style="text-align: center;">
                                        <div class="media-tab-subtitle text-muted font-size-xs mb-1"><?php echo e(\App\CPU\translate('third_step')); ?></div>
                                        <h6 class="media-tab-title text-nowrap mb-0"><?php echo e(\App\CPU\translate('product_on_delivery')); ?></h6>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="nav-item">
                            <div class="nav-link ">
                                <div class="align-items-center">
                                    <div class="media-tab-media"
                                         style="margin: 0 auto; <?php if(($orderDetails['order_status']=='delivered')): ?> background: #4bcc02; color: white; <?php endif; ?>">
                                        <?php if(($orderDetails['order_status']=='delivered')): ?>
                                            <i class="czi-check"></i>
                                        <?php endif; ?>
                                    </div>
                                    <div class="media-body" style="text-align: center;">
                                        <div class="media-tab-subtitle text-muted font-size-xs mb-1"><?php echo e(\App\CPU\translate('fourth_step')); ?></div>
                                        <h6 class="media-tab-title text-nowrap mb-0"><?php echo e(\App\CPU\translate('product_dispatched')); ?></h6>
                                    </div>
                                </div>
                            </div>
                        </li>
                    <?php elseif($orderDetails['order_status']=='returned'): ?>
                        <li class="nav-item">
                            <div class="nav-link" style="text-align: center;">
                                <h1 class="text-warning"><?php echo e(\App\CPU\translate('order_successfully_returned')); ?></h1>
                            </div>
                        </li>
                    <?php elseif($orderDetails['order_status']=='canceled'): ?>
                        <li class="nav-item">
                            <div class="nav-link" style="text-align: center;">
                                <h1 class="text-danger"><?php echo e(\App\CPU\translate('order_hasbeen_cancelled')); ?></h1>
                            </div>
                        </li>
                    <?php else: ?>
                        <li class="nav-item">
                            <div class="nav-link" style="text-align: center;">
                                <h1 class="text-danger"><?php echo e(\App\CPU\translate('sorry_we_can_not_complete_your_order')); ?></h1>
                            </div>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
        <!-- Footer-->
        <div class="d-sm-flex flex-wrap justify-content-between align-items-center text-center pt-3">
            <div class="custom-control custom-checkbox mt-1 d-none d-md-block <?php echo e(Session::get('direction') === "rtl" ? 'ml-3' : 'mr-3'); ?>">
            </div>
            <a class="btn btn-primary btn-sm mt-2 mb-2"
               href="<?php echo e(route('account-order-details', ['id'=>$orderDetails->id])); ?>"><?php echo e(\App\CPU\translate('View')); ?> <?php echo e(\App\CPU\translate('Order')); ?> <?php echo e(\App\CPU\translate('Details')); ?></a>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.front-end.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mh/code/project.co/Tigatech/umkm-shop/resources/views/web-views/order-tracking.blade.php ENDPATH**/ ?>