<?php $__env->startSection('title',\App\CPU\translate('Order Details')); ?>

<?php $__env->startPush('css_or_js'); ?>
    <style>
        .page-item.active .page-link {
            background-color: <?php echo e($web_config['primary_color']); ?>            !important;
        }

        .page-item.active > .page-link {
            box-shadow: 0 0 black !important;
        }

        .widget-categories .accordion-heading > a:hover {
            color: #FFD5A4 !important;
        }

        .widget-categories .accordion-heading > a {
            color: #FFD5A4;
        }

        body {
            font-family: 'Titillium Web', sans-serif
        }

        .card {
            border: none
        }


        .totals tr td {
            font-size: 13px
        }

        .footer span {
            font-size: 12px
        }

        .product-qty span {
            font-size: 14px;
            color: #6A6A6A;
        }

        .spanTr {
            color: #FFFFFF;
            font-weight: 900;
            font-size: 13px;

        }

        .spandHeadO {
            color: #FFFFFF !important;
            font-weight: 400;
            font-size: 13px;

        }

        .font-name {
            font-weight: 600;
            font-size: 12px;
            color: #030303;
        }

        .amount {
            font-size: 15px;
            color: #030303;
            font-weight: 600;
            margin- <?php echo e(Session::get('direction') === "rtl" ? 'right' : 'left'); ?>: 60px;

        }

        a {
            color: <?php echo e($web_config['primary_color']); ?>;
            cursor: pointer;
            text-decoration: none;
            background-color: transparent;
        }

        a:hover {
            cursor: pointer;
        }

        @media (max-width: 768px) {
            .for-tab-img {
                width: 100% !important;
            }

            .for-glaxy-name {
                display: none;
            }
        }

        @media (max-width: 360px) {
            .for-mobile-glaxy {
                display: flex !important;
            }

            .for-glaxy-mobile {
                margin- <?php echo e(Session::get('direction') === "rtl" ? 'left' : 'right'); ?>: 6px;
            }

            .for-glaxy-name {
                display: none;
            }
        }

        @media (max-width: 600px) {
            .sidebar_heading {
                background: #1B7FED;
            }

            .sidebar_heading h1 {
                text-align: center;
                color: aliceblue;
                padding-bottom: 17px;
                font-size: 19px;
            }
            .for-mobile-glaxy {
                display: flex !important;
                position: fixed;
                justify-content: center;
                bottom: 57px;
                padding: 10px;
                background-color: #fff;
                width: 100%;
                left: 0;
            }

            .for-glaxy-mobile {
                margin- <?php echo e(Session::get('direction') === "rtl" ? 'left' : 'right'); ?>: 6px;
            }

            .for-glaxy-name {
                display: none;
            }

            .order_table_tr {
                display: grid;
            }

            .order_table_td {
                border-bottom: 1px solid #fff !important;
            }

            .order_table_info_div {
                width: 100%;
                display: flex;
            }

            .order_table_info_div_2 {
                width: 49%;
                text-align: <?php echo e(Session::get('direction') === "rtl" ? 'left' : 'right'); ?>        !important;
            }

            .spandHeadO {
                font-size: 16px;
                margin- <?php echo e(Session::get('direction') === "rtl" ? 'right' : 'left'); ?>: 16px;
            }

            .spanTr {
                font-size: 16px;
                margin- <?php echo e(Session::get('direction') === "rtl" ? 'left' : 'right'); ?>: 16px;
                margin-top: 10px;
            }

            .amount {
                margin- <?php echo e(Session::get('direction') === "rtl" ? 'right' : 'left'); ?>: 0px;
                font-size: 13px;
            }

            .order_table_info_div_1 {
                width: 50%;
            }

            .mobile-order {
                margin-top: -26px !important;
            }

        }
    </style>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>

    <!-- Page Content-->
    <div class="container mobile-order pb-5 mb-2 mb-md-4 mt-3 rtl"
         style="text-align: <?php echo e(Session::get('direction') === "rtl" ? 'right' : 'left'); ?>;">
        <div class="row">
            <!-- Sidebar-->
            <?php echo $__env->make('web-views.partials._profile-aside', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            
            <section class="col-lg-9 col-md-9">
                <div class="row d-none d-md-block">
                    <div class="col-md-6 mb-4">
                        <a class="page-link" href="<?php echo e(route('account-oder')); ?>">
                            <i class="czi-arrow-<?php echo e(Session::get('direction') === "rtl" ? 'right ml-2' : 'left mr-2'); ?>"></i><?php echo e(\App\CPU\translate('back')); ?>

                        </a>
                    </div>
                </div>


                <div class="card box-shadow-sm">
                    <?php if(\App\CPU\Helpers::get_business_settings('order_verification')): ?>
                        <div class="card-header">
                            <h4><?php echo e(\App\CPU\translate('order_verification_code')); ?> : <?php echo e($order['verification_code']); ?></h4>
                        </div>
                    <?php endif; ?>
                    <div class="payment mb-3  table-responsive">
                        <?php if(isset($order['seller_id']) != 0): ?>
                            <?php ($shopName=\App\Model\Shop::where('seller_id', $order['seller_id'])->first()); ?>
                        <?php endif; ?>
                        <table class="table table-borderless">
                            <thead>
                            <tr class="order_table_tr" style="background: <?php echo e($web_config['primary_color']); ?>">
                                <td class="order_table_td">
                                    <div class="order_table_info_div">
                                        <div class="order_table_info_div_1 py-2">
                                            <span class="d-block spandHeadO"><?php echo e(\App\CPU\translate('order_no')); ?>: </span>
                                        </div>
                                        <div class="order_table_info_div_2">
                                            <span class="spanTr"> <?php echo e($order->id); ?> </span>
                                        </div>
                                    </div>
                                </td>
                                <td class="order_table_td">
                                    <div class="order_table_info_div">
                                        <div class="order_table_info_div_1 py-2">
                                            <span
                                                class="d-block spandHeadO"><?php echo e(\App\CPU\translate('order_date')); ?>: </span>
                                        </div>
                                        <div class="order_table_info_div_2">
                                            <span
                                                class="spanTr"> <?php echo e(date('d M, Y',strtotime($order->created_at))); ?> </span>
                                        </div>
                                    </div>
                                </td>

                                <?php if(isset($order->delivery_date)): ?>
                                <td class="order_table_td">
                                    <div class="order_table_info_div">
                                        <div class="order_table_info_div_1 py-2">
                                            <span
                                            class="d-block spandHeadO"><?php echo e(\App\CPU\translate('delivery_date')); ?>: </span>
                                        </div>
                                        <div class="order_table_info_div_2">
                                            <span
                                            class="spanTr"> <?php echo e(date('d M, Y',strtotime($order->delivery_date))); ?> </span>
                                        </div>
                                    </div>
                                </td>
                                <?php endif; ?>

                                <td class="order_table_td">
                                    <div class="order_table_info_div">
                                        <div class="order_table_info_div_1 py-2">
                                            <span
                                                class="d-block spandHeadO"><?php echo e(\App\CPU\translate('shipping_address')); ?>: </span>
                                        </div>

                                        <?php if($order->shippingAddress): ?>
                                            <?php ($shipping=$order->shippingAddress); ?>
                                        <?php else: ?>
                                            <?php ($shipping=json_decode($order['shipping_address_data'])); ?>
                                        <?php endif; ?>

                                        <div class="order_table_info_div_2">
                                            <span class="spanTr">
                                                <?php if($shipping): ?>
                                                    <?php echo e($shipping->address); ?>

                                                    , <?php echo e($shipping->city); ?>

                                                    , <?php echo e($shipping->zip); ?><?php ($c_name = App\Country::where('country', $shipping->country)->first()); ?>
                                                    , <?php echo e($c_name->country_name); ?>

                                                <?php endif; ?>
                                            </span>
                                        </div>
                                    </div>
                                </td>
                                <td class="order_table_td">
                                    <div class="order_table_info_div">
                                        <div class="order_table_info_div_1 py-2">
                                            <span
                                                class="d-block spandHeadO"><?php echo e(\App\CPU\translate('Status')); ?>: </span>
                                        </div>

                                        <div class="order_table_info_div_2">
                                            <span class="spanTr">
                                                <?php if($order->payment_status == 'paid'): ?>
                                                <span class="text-success capitalize">
                                                    <?php echo e(\App\CPU\translate($order->payment_status)); ?>

                                                </span>
                                                <?php else: ?>
                                                <span class="text-info">
                                                    <?php echo e(\App\CPU\translate($order->payment_status)); ?>

                                                </span>
                                                <?php endif; ?>
                                            </span>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            </thead>
                        </table>

                        <table class="table table-borderless">
                            <tbody>
                            <?php $__currentLoopData = $order->details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$detail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php ($product=json_decode($detail->product_details,true)); ?>
                                <tr>
                                    <div class="row">
                                        <div class="col-md-6"
                                             onclick="location.href='<?php echo e(route('product',$product['slug'])); ?>'">
                                            <td width="20%" class="for-tab-img">
                                                <img class="d-block"
                                                     onerror="this.src='<?php echo e(asset('public/assets/front-end/img/image-place-holder.png')); ?>'"
                                                     src="<?php echo e(\App\CPU\ProductManager::product_image_path('thumbnail')); ?>/<?php echo e($product['thumbnail']); ?>"
                                                     alt="VR Collection" width="60">
                                            </td>
                                            <td width="80%" class="for-glaxy-name" style="vertical-align:middle">
                                                <a href="<?php echo e(route('product',[$product['slug']])); ?>">
                                                    <?php echo e(isset($product['name']) ? $product['name'] : ''); ?>

                                                </a><br>
                                               <span><?php echo e(\App\CPU\translate('variant')); ?> : </span>
                                                <?php echo e($detail->variant); ?><br>
                                                <span><?php echo e(\App\CPU\translate('Seller')); ?> : </span>
                                                <?php ($shop=App\Model\Shop::where('seller_id', $detail->seller_id)->first()); ?>
                                                
                                                <?php echo e(env('APP_NAME')); ?>

                                            </td>
                                        </div>
                                        <div class="col-md-6">
                                            <td width="100%">
                                                <div
                                                    class="text-<?php echo e(Session::get('direction') === "rtl" ? 'left' : 'right'); ?>">
                                                    <span
                                                        class="font-weight-bold amount"><?php echo e(\App\CPU\Helpers::currency_converter($detail->price)); ?> </span>
                                                    <br>
                                                    <span><?php echo e(\App\CPU\translate('qty')); ?>: <?php echo e($detail->qty); ?></span>

                                                </div>
                                            </td>
                                        </div>
                                    </div>
                                    <td>
                                        
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php ($summary=\App\CPU\OrderManager::order_summary($order)); ?>
                            </tbody>
                        </table>
                    </div>
                </div>

                
                <div class="row d-flex justify-content-end">
                    <div class="col-md-8 col-lg-5">
                        <table class="table table-borderless">
                            <tbody class="totals">
                            <tr>
                                <td>
                                    <div class="text-<?php echo e(Session::get('direction') === "rtl" ? 'right' : 'left'); ?>"><span
                                            class="product-qty "><?php echo e(\App\CPU\translate('Item')); ?></span></div>
                                </td>
                                <td>
                                    <div class="text-<?php echo e(Session::get('direction') === "rtl" ? 'left' : 'right'); ?>">
                                        <span><?php echo e($order->details->count()); ?></span>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <div class="text-<?php echo e(Session::get('direction') === "rtl" ? 'right' : 'left'); ?>"><span
                                            class="product-qty "><?php echo e(\App\CPU\translate('Subtotal')); ?></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-<?php echo e(Session::get('direction') === "rtl" ? 'left' : 'right'); ?>">
                                        <span><?php echo e(\App\CPU\Helpers::currency_converter($summary['subtotal'])); ?></span>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <div class="text-<?php echo e(Session::get('direction') === "rtl" ? 'right' : 'left'); ?>"><span
                                            class="product-qty "><?php echo e(\App\CPU\translate('text_fee')); ?></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-<?php echo e(Session::get('direction') === "rtl" ? 'left' : 'right'); ?>">
                                        <span><?php echo e(\App\CPU\Helpers::currency_converter($summary['total_tax'])); ?></span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="text-<?php echo e(Session::get('direction') === "rtl" ? 'right' : 'left'); ?>"><span
                                            class="product-qty "><?php echo e(\App\CPU\translate('Shipping')); ?> <?php echo e(\App\CPU\translate('Fee')); ?></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-<?php echo e(Session::get('direction') === "rtl" ? 'left' : 'right'); ?>">
                                        <span><?php echo e(\App\CPU\Helpers::currency_converter($summary['total_shipping_cost'])); ?></span>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <div class="text-<?php echo e(Session::get('direction') === "rtl" ? 'right' : 'left'); ?>"><span
                                            class="product-qty "><?php echo e(\App\CPU\translate('Discount')); ?> <?php echo e(\App\CPU\translate('on_product')); ?></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-<?php echo e(Session::get('direction') === "rtl" ? 'left' : 'right'); ?>">
                                        <span>- <?php echo e(\App\CPU\Helpers::currency_converter($summary['total_discount_on_product'])); ?></span>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <div class="text-<?php echo e(Session::get('direction') === "rtl" ? 'right' : 'left'); ?>"><span
                                            class="product-qty "><?php echo e(\App\CPU\translate('Coupon')); ?> <?php echo e(\App\CPU\translate('Discount')); ?></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-<?php echo e(Session::get('direction') === "rtl" ? 'left' : 'right'); ?>">
                                        <span>- <?php echo e(\App\CPU\Helpers::currency_converter($order->discount_amount)); ?></span>
                                    </div>
                                </td>
                            </tr>

                            <tr class="border-top border-bottom">
                                <td>
                                    <div class="text-<?php echo e(Session::get('direction') === "rtl" ? 'right' : 'left'); ?>"><span
                                            class="font-weight-bold"><?php echo e(\App\CPU\translate('Total')); ?></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-<?php echo e(Session::get('direction') === "rtl" ? 'left' : 'right'); ?>"><span
                                            class="font-weight-bold amount "><?php echo e(\App\CPU\Helpers::currency_converter($order->order_amount)); ?></span>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="justify-content-around d-flex mt-4 for-mobile-glaxy ">
                    <?php if($order->payment_status != 'unpaid' || $order->payment_method == 'cash_on_delivery'): ?>
                    <a href="<?php echo e(route('generate-invoice',[$order->id])); ?>" class="btn btn-primary for-glaxy-mobile col-md-5"
                       style="">
                        <?php echo e(\App\CPU\translate('generate_invoice')); ?>

                    </a>
                    <a class="btn btn-secondary col-md-5" type="button"
                       href="<?php echo e(route('track-order.result',['order_id'=>$order['id']])); ?>"
                       style="color: white">
                        <?php echo e(\App\CPU\translate('Track')); ?> <?php echo e(\App\CPU\translate('Order')); ?>

                    </a>
                    <?php endif; ?>
                    <?php if($order->order_status != 'canceled'): ?>
                    <?php if($order->payment_status == 'unpaid' && $order->payment_method != 'cash_on_delivery'): ?>
                    <a class="col-md-12">
                        <form class="needs-validation" target="_blank" method="POST" id="payment-form"
                    action="<?php echo e(route('xendit-payment.vaInvoice')); ?>">
                        <input type="hidden" name="type" value="<?php echo e($order->payment_method); ?>">
                        <input type="hidden" name="order_id" value="<?php echo e($order->id); ?>">
                        <?php echo e(csrf_field()); ?>

                        <button class="btn btn-danger w-100" type="submit">
                            <?php echo e(\App\CPU\translate('pay_now')); ?>

                        </button>
                    </form>
                    </a>
                    <?php endif; ?>
                    <?php endif; ?>
                </div>
            </section>
        </div>
    </div>

    <!-- Modal -->
    <?php $__currentLoopData = $order->details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$detail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($order->order_status=='delivered'): ?>
            <?php ($product=json_decode($detail->product_details,true)); ?>
            <div class="modal fade rtl" style="text-align: <?php echo e(Session::get('direction') === "rtl" ? 'right' : 'left'); ?>;"
                 id="review-<?php echo e($detail->id); ?>" tabindex="-1" role="dialog"
                 aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">
                                <?php echo e($product['name']); ?>

                            </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="<?php echo e(route('review.store')); ?>" method="post" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="modal-body">

                                <div class="form-group">
                                    <label for="exampleInputEmail1"><?php echo e(\App\CPU\translate('rating')); ?></label>
                                    <select class="form-control" name="rating">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1"><?php echo e(\App\CPU\translate('comment')); ?></label>
                                    <input name="product_id" value="<?php echo e($detail->product_id); ?>" hidden>
                                    <textarea class="form-control" name="comment"></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1"><?php echo e(\App\CPU\translate('attachment')); ?></label>
                                    <div class="row coba"></div>
                                </div>

                            </div>
                            <div class="modal-footer mobile-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo e(\App\CPU\translate('close')); ?></button>
                                <button type="submit" class="btn btn-primary"><?php echo e(\App\CPU\translate('submit')); ?></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startPush('script'); ?>
    <script src="<?php echo e(asset('public/assets/front-end/js/spartan-multi-image-picker.js')); ?>"></script>
    <script type="text/javascript">
        $(function () {
            $(".coba").spartanMultiImagePicker({
                fieldName: 'fileUpload[]',
                maxCount: 5,
                rowHeight: '150px',
                groupClassName: 'col-md-4',
                maxFileSize: '',
                placeholderImage: {
                    image: '<?php echo e(asset('public/assets/front-end/img/image-place-holder.png')); ?>',
                    width: '100%'
                },
                dropFileLabel: "<?php echo e(\App\CPU\translate('drop_here')); ?>",
                onAddRow: function (index, file) {

                },
                onRenderedPreview: function (index) {

                },
                onRemoveRow: function (index) {

                },
                onExtensionErr: function (index, file) {
                    toastr.error('<?php echo e(\App\CPU\translate('input_png_or_jpg')); ?>', {
                        CloseButton: true,
                        ProgressBar: true
                    });
                },
                onSizeErr: function (index, file) {
                    toastr.error('<?php echo e(\App\CPU\translate('file_size_too_big')); ?>', {
                        CloseButton: true,
                        ProgressBar: true
                    });
                }
            });
        });
    </script>
    <script>
        function review_message() {
            toastr.info('<?php echo e(\App\CPU\translate('you_can_review_after_the_product_is_delivered!')); ?>', {
                CloseButton: true,
                ProgressBar: true
            });
        }
    </script>
<?php $__env->stopPush(); ?>


<?php echo $__env->make('layouts.front-end.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mh/code/project.co/Tigatech/umkm-shop/resources/views/web-views/users-profile/account-order-details.blade.php ENDPATH**/ ?>