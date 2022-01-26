<?php $__env->startSection('title',$product['name']); ?>

<?php $__env->startPush('css_or_js'); ?>
    <meta name="description" content="<?php echo e($product->slug); ?>">
    <meta name="keywords" content="<?php $__currentLoopData = explode(' ',$product['name']); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $keyword): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <?php echo e($keyword.' , '); ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>">
    <?php if($product->added_by=='seller'): ?>
        <meta name="author" content="<?php echo e($product->seller->shop?$product->seller->shop->name:$product->seller->f_name); ?>">
    <?php elseif($product->added_by=='admin'): ?>
        <meta name="author" content="<?php echo e($web_config['name']->value); ?>">
    <?php endif; ?>
    <!-- Viewport-->

    <?php if($product['meta_image']!=null): ?>
        <meta property="og:image" content="<?php echo e(asset("storage/product/meta")); ?>/<?php echo e($product->meta_image); ?>"/>
        <meta property="twitter:card"
              content="<?php echo e(asset("storage/product/meta")); ?>/<?php echo e($product->meta_image); ?>"/>
    <?php else: ?>
        <meta property="og:image" content="<?php echo e(asset("storage/product/thumbnail")); ?>/<?php echo e($product->thumbnail); ?>"/>
        <meta property="twitter:card"
              content="<?php echo e(asset("storage/product/thumbnail/")); ?>/<?php echo e($product->thumbnail); ?>"/>
    <?php endif; ?>

    <?php if($product['meta_title']!=null): ?>
        <meta property="og:title" content="<?php echo e($product->meta_title); ?>"/>
        <meta property="twitter:title" content="<?php echo e($product->meta_title); ?>"/>
    <?php else: ?>
        <meta property="og:title" content="<?php echo e($product->name); ?>"/>
        <meta property="twitter:title" content="<?php echo e($product->name); ?>"/>
    <?php endif; ?>
    <meta property="og:url" content="<?php echo e(route('product',[$product->slug])); ?>">

    <?php if($product['meta_description']!=null): ?>
        <meta property="twitter:description" content="<?php echo $product['meta_description']; ?>">
        <meta property="og:description" content="<?php echo $product['meta_description']; ?>">
    <?php else: ?>
        <meta property="og:description"
              content="<?php $__currentLoopData = explode(' ',$product['name']); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $keyword): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <?php echo e($keyword.' , '); ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>">
        <meta property="twitter:description"
              content="<?php $__currentLoopData = explode(' ',$product['name']); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $keyword): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <?php echo e($keyword.' , '); ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>">
    <?php endif; ?>
    <meta property="twitter:url" content="<?php echo e(route('product',[$product->slug])); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('assets/front-end/css/product-details.css')); ?>"/>
    <style>
        .msg-option {
            display: none;
        }

        .chatInputBox {
            width: 100%;
        }

        .go-to-chatbox {
            width: 100%;
            text-align: center;
            padding: 5px 0px;
            display: none;
        }

        .feature_header {
            display: flex;
            justify-content: center;
        }

        .btn-number:hover {
            color: <?php echo e($web_config['secondary_color']); ?>;

        }

        .for-total-price {
            margin- <?php echo e(Session::get('direction') === "rtl" ? 'right' : 'left'); ?>: -30%;
        }

        .feature_header span {
            padding- <?php echo e(Session::get('direction') === "rtl" ? 'right' : 'left'); ?>: 15px;
            font-weight: 700;
            font-size: 25px;
            background-color: #ffffff;
            text-transform: uppercase;
        }

        @media (max-width: 768px) {
            .feature_header span {
                margin-bottom: -40px;
            }

            .for-total-price {
                padding- <?php echo e(Session::get('direction') === "rtl" ? 'right' : 'left'); ?>: 30%;
            }

            .product-quantity {
                padding- <?php echo e(Session::get('direction') === "rtl" ? 'right' : 'left'); ?>: 4%;
            }

            .for-margin-bnt-mobile {
                margin- <?php echo e(Session::get('direction') === "rtl" ? 'left' : 'right'); ?>: 7px;
            }

            .font-for-tab {
                font-size: 11px !important;
            }

            .pro {
                font-size: 13px;
            }
        }

        @media (max-width: 375px) {
            .for-margin-bnt-mobile {
                margin- <?php echo e(Session::get('direction') === "rtl" ? 'left' : 'right'); ?>: 3px;
            }

            .for-discount {
                margin- <?php echo e(Session::get('direction') === "rtl" ? 'right' : 'left'); ?>: 10% !important;
            }

            .for-dicount-div {
                margin-top: -5%;
                margin- <?php echo e(Session::get('direction') === "rtl" ? 'left' : 'right'); ?>: -7%;
            }

            .product-quantity {
                margin- <?php echo e(Session::get('direction') === "rtl" ? 'right' : 'left'); ?>: 4%;
            }

        }

        @media (max-width: 500px) {
            .for-dicount-div {
                margin-top: -4%;
                margin- <?php echo e(Session::get('direction') === "rtl" ? 'left' : 'right'); ?>: -5%;
            }

            .for-total-price {
                margin- <?php echo e(Session::get('direction') === "rtl" ? 'right' : 'left'); ?>: -20%;
            }

            .view-btn-div {

                margin-top: -9%;
                float: <?php echo e(Session::get('direction') === "rtl" ? 'left' : 'right'); ?>;
            }

            .for-discount {
                margin- <?php echo e(Session::get('direction') === "rtl" ? 'right' : 'left'); ?>: 7%;
            }

            .viw-btn-a {
                font-size: 10px;
                font-weight: 600;
            }

            .feature_header span {
                margin-bottom: -7px;
            }

            .for-mobile-capacity {
                margin- <?php echo e(Session::get('direction') === "rtl" ? 'right' : 'left'); ?>: 7%;
            }

            .product_overview .nav-tabs {
                border: none;
            }
        }

        @media(max-width: 600px){
            .detail-mobile {
                margin-top: -22px !important;
            }
            .cz-preview-item.active {
                padding: 0% !important;
            }
            .mobile-btn {
                position: fixed;
                bottom: 0;
                left: 0;
                padding: 0 0 10px 0;
                right: 0;
                background-color: #fff;
                z-index: 1;
            }
        }
        thead {
            color: white;
            background: <?php echo e($web_config['primary_color']); ?>!important;
        }
        th, td {
            border-bottom: 1px solid #ddd;
            padding: 5px;
        }

    </style>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <?php
    $overallRating = \App\CPU\ProductManager::get_overall_rating($product->reviews);
    $rating = \App\CPU\ProductManager::get_rating($product->reviews);
    ?>
    <!-- Page Content-->
    <div class="container mt-4 rtl detail-mobile" style="text-align: <?php echo e(Session::get('direction') === "rtl" ? 'right' : 'left'); ?>;">
        <!-- General info tab-->
        <div class="row" style="direction: ltr">
            <!-- Product gallery-->
            <div class="col-lg-6 col-md-6">
                <div class="cz-product-gallery">
                    <div class="cz-preview">
                        <?php if($product->images!=null): ?>
                            <?php $__currentLoopData = json_decode($product->images); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $photo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div
                                    class="cz-preview-item d-flex align-items-center justify-content-center <?php echo e($key==0?'active':''); ?>"
                                    id="image<?php echo e($key); ?>">
                                    <img class="cz-image-zoom img-responsive"
                                         onerror="this.src='<?php echo e(asset('assets/front-end/img/image-place-holder.png')); ?>'"
                                         src="<?php echo e(asset("storage/product/$photo")); ?>"
                                         data-zoom="<?php echo e(asset("storage/product/$photo")); ?>"
                                         alt="Product image" width="">
                                    <div class="cz-image-zoom-pane"></div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                    </div>
                    <div class="cz d-none">
                        <div class="container">
                            <div class="row">
                                <div class="table-responsive" data-simplebar style="max-height: 515px; padding: 1px;">
                                    <div class="d-flex">
                                        <?php if($product->images!=null): ?>
                                            <?php $__currentLoopData = json_decode($product->images); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $photo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <div class="cz-thumblist">
                                                    <a class="cz-thumblist-item  <?php echo e($key==0?'active':''); ?> d-flex align-items-center justify-content-center "
                                                       href="#image<?php echo e($key); ?>">
                                                        <img
                                                            onerror="this.src='<?php echo e(asset('assets/front-end/img/image-place-holder.png')); ?>'"
                                                            src="<?php echo e(asset("storage/product/$photo")); ?>"
                                                            alt="Product thumb">
                                                    </a>
                                                </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product details-->
            <div class="desktop-detail col-lg-6 col-md-6 mt-md-0 mt-sm-2 mt-2 d-none d-md-block" style="direction: <?php echo e(Session::get('direction')); ?>">
                <div class="details">
                    <h1 class="h3 mb-2"><?php echo e($product->name); ?></h1>
                    <div class="d-flex align-items-center mb-2 pro">
                        <span
                            class="d-inline-block font-size-sm text-body align-middle mt-1 <?php echo e(Session::get('direction') === "rtl" ? 'ml-md-2 ml-sm-0 pl-2' : 'mr-md-2 mr-sm-0 pr-2'); ?>"><?php echo e($overallRating[0]); ?></span>
                       
                        <span
                            class="font-for-tab d-inline-block font-size-sm text-body align-middle mt-1 <?php echo e(Session::get('direction') === "rtl" ? 'mr-1 ml-md-2 ml-1 pr-md-2 pr-sm-1 pl-md-2 pl-sm-1' : 'ml-1 mr-md-2 mr-1 pl-md-2 pl-sm-1 pr-md-2 pr-sm-1'); ?>"><?php echo e($overallRating[1]); ?> <?php echo e(\App\CPU\translate('Reviews')); ?></span>
                        <span style="width: 0px;height: 10px;border: 0.5px solid #707070; margin-top: 6px"></span>
                        <span
                            class="font-for-tab d-inline-block font-size-sm text-body align-middle mt-1 <?php echo e(Session::get('direction') === "rtl" ? 'mr-1 ml-md-2 ml-1 pr-md-2 pr-sm-1 pl-md-2 pl-sm-1' : 'ml-1 mr-md-2 mr-1 pl-md-2 pl-sm-1 pr-md-2 pr-sm-1'); ?>"><?php echo e($countOrder); ?> <?php echo e(\App\CPU\translate('orders')); ?>   </span>
                        <span style="width: 0px;height: 10px;border: 0.5px solid #707070; margin-top: 6px">    </span>
                        <span
                            class=" font-for-tab d-inline-block font-size-sm text-body align-middle mt-1 <?php echo e(Session::get('direction') === "rtl" ? 'mr-1 ml-md-2 ml-0 pr-md-2 pr-sm-1 pl-md-2 pl-sm-1' : 'ml-1 mr-md-2 mr-0 pl-md-2 pl-sm-1 pr-md-2 pr-sm-1'); ?>">  <?php echo e($countWishlist); ?> <?php echo e(\App\CPU\translate('wish')); ?> </span>

                    </div>
                    <div class="mb-3">
                        <span
                            class="h3 font-weight-normal text-accent <?php echo e(Session::get('direction') === "rtl" ? 'ml-1' : 'mr-1'); ?>">
                            <?php echo e(\App\CPU\Helpers::get_price_range($product)); ?>

                        </span>
                        <?php if($product->discount > 0): ?>
                            <strike style="color: <?php echo e($web_config['secondary_color']); ?>;">
                                <?php echo e(\App\CPU\Helpers::currency_converter($product->unit_price)); ?>

                            </strike>
                        <?php endif; ?>
                    </div>

                    <?php if($product->discount > 0): ?>
                        <div class="mb-3">
                            <strong><?php echo e(\App\CPU\translate('discount')); ?> : </strong>
                            <strong id="set-discount-amount"></strong>
                        </div>
                    <?php endif; ?>

                    <div class="mb-3">
                        <strong><?php echo e(\App\CPU\translate('tax')); ?> : </strong>
                        <strong id="set-tax-amount"></strong>
                    </div>
                    <form id="add-to-cart-form" class="mb-2">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="id" value="<?php echo e($product->id); ?>">
                        <div class="position-relative <?php echo e(Session::get('direction') === "rtl" ? 'ml-n4' : 'mr-n4'); ?> mb-3">
                            <?php if(count(json_decode($product->colors)) > 0): ?>
                                <div class="flex-start">
                                    <div class="product-description-label mt-2"><?php echo e(\App\CPU\translate('color')); ?>:
                                    </div>
                                    <div>
                                        <ul class="list-inline checkbox-color mb-1 flex-start <?php echo e(Session::get('direction') === "rtl" ? 'mr-2' : 'ml-2'); ?>"
                                            style="padding-<?php echo e(Session::get('direction') === "rtl" ? 'right' : 'left'); ?>: 0;">
                                            <?php $__currentLoopData = json_decode($product->colors); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $color): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <div>
                                                    <li>
                                                        <input type="radio"
                                                               id="<?php echo e($product->id); ?>-color-<?php echo e($key); ?>"
                                                               name="color" value="<?php echo e($color); ?>"
                                                               <?php if($key == 0): ?> checked <?php endif; ?>>
                                                        <label style="background: <?php echo e($color); ?>;"
                                                               for="<?php echo e($product->id); ?>-color-<?php echo e($key); ?>"
                                                               data-toggle="tooltip"></label>
                                                    </li>
                                                </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </ul>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <?php
                                $qty = 0;
                                if(!empty($product->variation)){
                                foreach (json_decode($product->variation) as $key => $variation) {
                                        $qty += $variation->qty;
                                    }
                                }
                            ?>
                        </div>
                        <?php $__currentLoopData = json_decode($product->choice_options); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $choice): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="row flex-start mx-0">
                                <div
                                    class="product-description-label mt-2 <?php echo e(Session::get('direction') === "rtl" ? 'pl-2' : 'pr-2'); ?>"><?php echo e($choice->title); ?>

                                    :
                                </div>
                                <div>
                                    <ul class="list-inline checkbox-alphanumeric checkbox-alphanumeric--style-1 mb-2 mx-1 flex-start"
                                        style="padding-<?php echo e(Session::get('direction') === "rtl" ? 'right' : 'left'); ?>: 0;">
                                        <?php $__currentLoopData = $choice->options; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div>
                                                <li class="for-mobile-capacity">
                                                    <input type="radio"
                                                           id="<?php echo e($choice->name); ?>-<?php echo e($option); ?>"
                                                           name="<?php echo e($choice->name); ?>" value="<?php echo e($option); ?>"
                                                           <?php if($key == 0): ?> checked <?php endif; ?> >
                                                    <label style="font-size: .6em"
                                                           for="<?php echo e($choice->name); ?>-<?php echo e($option); ?>"><?php echo e($option); ?></label>
                                                </li>
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                </div>
                            </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    <!-- Quantity + Add to cart -->
                        <div class="row no-gutters">
                            <div class="col-2">
                                <div class="product-description-label mt-2"><?php echo e(\App\CPU\translate('Quantity')); ?>:</div>
                            </div>
                            <div class="col-10">
                                <div class="product-quantity d-flex align-items-center">
                                    <div
                                        class="input-group input-group--style-2 <?php echo e(Session::get('direction') === "rtl" ? 'pl-3' : 'pr-3'); ?>"
                                        style="width: 160px;">
                                        <span class="input-group-btn">
                                            <button class="btn btn-number" type="button"
                                                    data-type="minus" data-field="quantity"
                                                    disabled="disabled" style="padding: 10px">
                                                -
                                            </button>
                                        </span>
                                        <input type="text" name="quantity"
                                               class="form-control input-number text-center cart-qty-field"
                                               placeholder="1" value="1" min="1" max="100">
                                        <span class="input-group-btn">
                                            <button class="btn btn-number" type="button" data-type="plus"
                                                    data-field="quantity" style="padding: 10px">
                                               +
                                            </button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row flex-start no-gutters d-none mt-2" id="chosen_price_div">
                            <div class="<?php echo e(Session::get('direction') === "rtl" ? 'ml-2' : 'mr-2'); ?>">
                                <div class="product-description-label"><?php echo e(\App\CPU\translate('total_price')); ?>:</div>
                            </div>
                            <div>
                                <div class="product-price for-total-price">
                                    <strong id="chosen_price"></strong>
                                </div>
                            </div>

                            <div class="col-12">
                                <?php if($product['current_stock']<=0): ?>
                                    <h5 class="mt-3" style="color: red"><?php echo e(\App\CPU\translate('out_of_stock')); ?></h5>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="d-flex justify-content-between mt-2">
                            <button
                                class="btn btn-secondary element-center btn-gap-<?php echo e(Session::get('direction') === "rtl" ? 'left' : 'right'); ?>"
                                onclick="buy_now()"
                                type="button"
                                style="width:37%; height: 45px">
                                <span class="string-limit"><?php echo e(\App\CPU\translate('buy_now')); ?></span>
                            </button>
                            <button
                                class="btn btn-primary element-center btn-gap-<?php echo e(Session::get('direction') === "rtl" ? 'left' : 'right'); ?>"
                                onclick="addToCart()"
                                type="button"
                                style="width:37%; height: 45px">
                                <span class="string-limit"><?php echo e(\App\CPU\translate('add_to_cart')); ?></span>
                            </button>
                            <button type="button" onclick="addWishlist('<?php echo e($product['id']); ?>')"
                                    class="btn btn-dark for-hover-bg"
                                    style="">
                                <i class="fa fa-heart-o <?php echo e(Session::get('direction') === "rtl" ? 'ml-2' : 'mr-2'); ?>"
                                   aria-hidden="true"></i>
                                <span class="countWishlist-<?php echo e($product['id']); ?>"><?php echo e($countWishlist); ?></span>
                            </button>
                        </div>
                    </form>
                    <hr style="padding-bottom: 10px">
                    <div style="text-align:<?php echo e(Session::get('direction') === "rtl" ? 'right' : 'left'); ?>;"
                         class="sharethis-inline-share-buttons"></div>
                </div>
            </div>


     
     <div class="container mt-2 rtl" style="text-align: <?php echo e(Session::get('direction') === "rtl" ? 'right' : 'left'); ?>;">
        <div class="row" style="background: white">
            <div class="col-12">
                <div class="product_overview mt-1">
                    <!-- Tabs-->
                    <ul class="nav nav-tabs d-flex justify-content-center" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link" href="#overview" data-toggle="tab" role="tab"
                               style="color: black !important;">
                                <?php echo e(\App\CPU\translate('OVERVIEW')); ?>

                            </a>
                        </li>
                    </ul>
                    <div class="px-4 pt-lg-3 pb-3 mb-3">
                        <div class="tab-content px-lg-3">
                            <!-- Tech specs tab-->
                            <div class="tab-pane fade show active" id="overview" role="tabpanel">
                                <div class="row pt-2 specification">
                                    <?php if($product->video_url!=null): ?>
                                        <div class="col-12 mb-4">
                                            <iframe width="420" height="315"
                                                    src="<?php echo e($product->video_url); ?>">
                                            </iframe>
                                        </div>
                                    <?php endif; ?>

                                    <?php
                                    $prod = \App\Model\Product::find($product->id);
                                    ?>
                                    <div class="col-lg-12 col-md-12">
                                        
                                        <?php echo $prod->details; ?>

                                    </div>
                                </div>
                            </div>
                            <!-- Reviews tab-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


            <!-- Product details mobile-->
            <div class="mobile-detail col-lg-6 col-md-6 mt-md-0 mt-sm-2 mt-2 d-block d-md-none" style="direction: <?php echo e(Session::get('direction')); ?>">
                <div class="details">
                    <h1 class="h3 mb-2"><?php echo e($product->name); ?></h1>
                    <div class="d-flex align-items-center mb-2 pro">
                        <span
                            class="d-inline-block font-size-sm text-body align-middle mt-1 <?php echo e(Session::get('direction') === "rtl" ? 'ml-md-2 ml-sm-0 pl-2' : 'mr-md-2 mr-sm-0 pr-2'); ?>"><?php echo e($overallRating[0]); ?></span>
                       
                        <span
                            class="font-for-tab d-inline-block font-size-sm text-body align-middle mt-1 <?php echo e(Session::get('direction') === "rtl" ? 'mr-1 ml-md-2 ml-1 pr-md-2 pr-sm-1 pl-md-2 pl-sm-1' : 'ml-1 mr-md-2 mr-1 pl-md-2 pl-sm-1 pr-md-2 pr-sm-1'); ?>"><?php echo e($overallRating[1]); ?> <?php echo e(\App\CPU\translate('Reviews')); ?></span>
                        <span style="width: 0px;height: 10px;border: 0.5px solid #707070; margin-top: 6px"></span>
                        <span
                            class="font-for-tab d-inline-block font-size-sm text-body align-middle mt-1 <?php echo e(Session::get('direction') === "rtl" ? 'mr-1 ml-md-2 ml-1 pr-md-2 pr-sm-1 pl-md-2 pl-sm-1' : 'ml-1 mr-md-2 mr-1 pl-md-2 pl-sm-1 pr-md-2 pr-sm-1'); ?>"><?php echo e($countOrder); ?> <?php echo e(\App\CPU\translate('orders')); ?>   </span>
                        <span style="width: 0px;height: 10px;border: 0.5px solid #707070; margin-top: 6px">    </span>
                        <span
                            class=" font-for-tab d-inline-block font-size-sm text-body align-middle mt-1 <?php echo e(Session::get('direction') === "rtl" ? 'mr-1 ml-md-2 ml-0 pr-md-2 pr-sm-1 pl-md-2 pl-sm-1' : 'ml-1 mr-md-2 mr-0 pl-md-2 pl-sm-1 pr-md-2 pr-sm-1'); ?>">  <?php echo e($countWishlist); ?> <?php echo e(\App\CPU\translate('wish')); ?> </span>

                    </div>
                    <div class="mb-3">
                        <span
                            class="h3 font-weight-normal text-accent <?php echo e(Session::get('direction') === "rtl" ? 'ml-1' : 'mr-1'); ?>">
                            <?php echo e(\App\CPU\Helpers::get_price_range($product)); ?>

                        </span>
                        <?php if($product->discount > 0): ?>
                            <strike style="color: <?php echo e($web_config['secondary_color']); ?>;">
                                <?php echo e(\App\CPU\Helpers::currency_converter($product->unit_price)); ?>

                            </strike>
                        <?php endif; ?>
                    </div>

                    <?php if($product->discount > 0): ?>
                        <div class="mb-3">
                            <strong><?php echo e(\App\CPU\translate('discount')); ?> : </strong>
                            <strong id="set-discount-amount"></strong>
                        </div>
                    <?php endif; ?>

                    <div class="mb-3">
                        <strong><?php echo e(\App\CPU\translate('tax')); ?> : </strong>
                        <strong id="set-tax-amount"></strong>
                    </div>
                    <form id="add-to-cart-form" class="mb-2">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="id" value="<?php echo e($product->id); ?>">
                        <div class="position-relative <?php echo e(Session::get('direction') === "rtl" ? 'ml-n4' : 'mr-n4'); ?> mb-3">
                            <?php if(count(json_decode($product->colors)) > 0): ?>
                                <div class="flex-start">
                                    <div class="product-description-label mt-2"><?php echo e(\App\CPU\translate('color')); ?>:
                                    </div>
                                    <div>
                                        <ul class="list-inline checkbox-color mb-1 flex-start <?php echo e(Session::get('direction') === "rtl" ? 'mr-2' : 'ml-2'); ?>"
                                            style="padding-<?php echo e(Session::get('direction') === "rtl" ? 'right' : 'left'); ?>: 0;">
                                            <?php $__currentLoopData = json_decode($product->colors); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $color): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <div>
                                                    <li>
                                                        <input type="radio"
                                                               id="<?php echo e($product->id); ?>-color-<?php echo e($key); ?>"
                                                               name="color" value="<?php echo e($color); ?>"
                                                               <?php if($key == 0): ?> checked <?php endif; ?>>
                                                        <label style="background: <?php echo e($color); ?>;"
                                                               for="<?php echo e($product->id); ?>-color-<?php echo e($key); ?>"
                                                               data-toggle="tooltip"></label>
                                                    </li>
                                                </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </ul>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <?php
                                $qty = 0;
                                if(!empty($product->variation)){
                                foreach (json_decode($product->variation) as $key => $variation) {
                                        $qty += $variation->qty;
                                    }
                                }
                            ?>
                        </div>
                        <?php $__currentLoopData = json_decode($product->choice_options); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $choice): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="row flex-start mx-0">
                                <div
                                    class="product-description-label mt-2 <?php echo e(Session::get('direction') === "rtl" ? 'pl-2' : 'pr-2'); ?>"><?php echo e($choice->title); ?>

                                    :
                                </div>
                                <div>
                                    <ul class="list-inline checkbox-alphanumeric checkbox-alphanumeric--style-1 mb-2 mx-1 flex-start"
                                        style="padding-<?php echo e(Session::get('direction') === "rtl" ? 'right' : 'left'); ?>: 0;">
                                        <?php $__currentLoopData = $choice->options; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div>
                                                <li class="for-mobile-capacity">
                                                    <input type="radio"
                                                           id="<?php echo e($choice->name); ?>-<?php echo e($option); ?>"
                                                           name="<?php echo e($choice->name); ?>" value="<?php echo e($option); ?>"
                                                           <?php if($key == 0): ?> checked <?php endif; ?> >
                                                    <label style="font-size: .6em"
                                                           for="<?php echo e($choice->name); ?>-<?php echo e($option); ?>"><?php echo e($option); ?></label>
                                                </li>
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                </div>
                            </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    <!-- Quantity + Add to cart -->
                        <div class="row no-gutters">
                            <div class="col-2">
                                <div class="product-description-label mt-2"><?php echo e(\App\CPU\translate('Quantity')); ?>:</div>
                            </div>
                            <div class="col-10">
                                <div class="product-quantity d-flex align-items-center">
                                    <div
                                        class="input-group input-group--style-2 <?php echo e(Session::get('direction') === "rtl" ? 'pl-3' : 'pr-3'); ?>"
                                        style="width: 160px;">
                                        <span class="input-group-btn">
                                            <button class="btn btn-number" type="button"
                                                    data-type="minus" data-field="quantity"
                                                    disabled="disabled" style="padding: 10px">
                                                -
                                            </button>
                                        </span>
                                        <input type="text" name="quantity"
                                               class="form-control input-number text-center cart-qty-field"
                                               placeholder="1" value="1" min="1" max="100">
                                        <span class="input-group-btn">
                                            <button class="btn btn-number" type="button" data-type="plus"
                                                    data-field="quantity" style="padding: 10px">
                                               +
                                            </button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row flex-start no-gutters d-none mt-2" id="chosen_price_div">
                            <div class="<?php echo e(Session::get('direction') === "rtl" ? 'ml-2' : 'mr-2'); ?>">
                                <div class="product-description-label"><?php echo e(\App\CPU\translate('total_price')); ?>:</div>
                            </div>
                            <div>
                                <div class="product-price for-total-price">
                                    <strong id="chosen_price"></strong>
                                </div>
                            </div>

                            <div class="col-12">
                                <?php if($product['current_stock']<=0): ?>
                                    <h5 class="mt-3" style="color: red"><?php echo e(\App\CPU\translate('out_of_stock')); ?></h5>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="mobile-btn">
                            <div class="d-flex justify-content-between mt-2">
                               <div class="container d-flex justify-content-between">
                                <button
                                class="btn btn-secondary element-center btn-gap-<?php echo e(Session::get('direction') === "rtl" ? 'left' : 'right'); ?>"
                                onclick="buy_now()"
                                type="button"
                                style="width:37%; height: 45px">
                                <span class="string-limit"><?php echo e(\App\CPU\translate('buy_now')); ?></span>
                            </button>
                            <button
                                class="btn btn-primary element-center btn-gap-<?php echo e(Session::get('direction') === "rtl" ? 'left' : 'right'); ?>"
                                onclick="addToCart()"
                                type="button"
                                style="width:37%; height: 45px">
                                <span class="string-limit"><?php echo e(\App\CPU\translate('add_to_cart')); ?></span>
                            </button>
                            <button type="button" onclick="addWishlist('<?php echo e($product['id']); ?>')"
                                    class="btn btn-dark for-hover-bg"
                                    style="">
                                <i class="fa fa-heart-o <?php echo e(Session::get('direction') === "rtl" ? 'ml-2' : 'mr-2'); ?>"
                                   aria-hidden="true"></i>
                                <span class="countWishlist-<?php echo e($product['id']); ?>"><?php echo e($countWishlist); ?></span>
                            </button>
                               </div>
                            </div>
                        </form>
                    </div>
                    <hr style="padding-bottom: 10px">
                    <div style="text-align:<?php echo e(Session::get('direction') === "rtl" ? 'right' : 'left'); ?>;"
                         class="sharethis-inline-share-buttons"></div>
                </div>
            </div>
        </div>
    </div>

    
    <?php if($product->added_by=='seller'): ?>
        <div class="container mt-4 rtl d-none" style="text-align: <?php echo e(Session::get('direction') === "rtl" ? 'right' : 'left'); ?>;">
            <div class="row seller_details d-flex align-items-center" id="sellerOption">
                <div class="col-md-6">
                    <div class="seller_shop">
                        <div class="shop_image d-flex justify-content-center align-items-center">
                            <a href="#" class="d-flex justify-content-center">
                                <img style="height: 65px; width: 65px; border-radius: 50%"
                                     src="<?php echo e(asset('storage/shop')); ?>/<?php echo e($product->seller->shop->image); ?>"
                                     onerror="this.src='<?php echo e(asset('assets/front-end/img/image-place-holder.png')); ?>'"
                                     alt="">
                            </a>
                        </div>
                        <div
                            class="shop-name-<?php echo e(Session::get('direction') === "rtl" ? 'right' : 'left'); ?> d-flex justify-content-center align-items-center">
                            <div>
                                <a href="#" class="d-flex align-items-center">
                                    <div
                                        class="title"><?php echo e($product->seller->shop->name); ?></div>
                                </a>
                                <div class="review d-flex align-items-center">
                                    <div class="">
                                        <span
                                            class="d-inline-block font-size-sm text-body align-middle mt-1 <?php echo e(Session::get('direction') === "rtl" ? 'ml-2' : 'mr-2'); ?>"><?php echo e(\App\CPU\translate('Seller')); ?> <?php echo e(\App\CPU\translate('Info')); ?> </span>
                                        <span
                                            class="d-inline-block font-size-sm text-body align-middle mt-1 <?php echo e(Session::get('direction') === "rtl" ? 'mr-2' : 'ml-2'); ?>"></span>
                                    </div>
                                </div>
                                 <div class="review d-flex align-items-center">
                            <div class="w-100 d-flex">
                                <div class="flag">
                                    <img class="<?php echo e(Session::get('direction') === " rtl" ? 'ml-2' : 'mr-2'); ?>" width="20"
                                        src="<?php echo e(asset('assets/front-end')); ?>/img/flags/<?php echo e(strtolower($product->seller->shop->country)); ?>.png"
                                        alt="Eng" style="width: 20px">
                                </div>
                                <?php ($c_name = App\Country::where('country', $product->seller->shop->country)->get()); ?>
                                <span
                                    class="d-inline-block font-size-sm text-body align-middle mt-1 <?php echo e(Session::get('direction') === "
                                    rtl" ? 'ml-2' : 'mr-2'); ?>" style="line-height: 1.2;"><?php echo e($c_name[0]->country_name); ?>

                                </span>
                                <span
                                    class="d-inline-block font-size-sm text-body align-middle mt-1 <?php echo e(Session::get('direction') === "
                                    rtl" ? 'mr-2' : 'ml-2'); ?>"></span>
                            </div>
                        </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-md-6 p-md-0 pt-sm-3">
                    <div class="seller_contact">
                        <div
                            class="d-flex align-items-center <?php echo e(Session::get('direction') === "rtl" ? 'pl-4' : 'pr-4'); ?>">
                            <a href="<?php echo e(route('shopView',[$product->seller->id])); ?>">
                                <button class="btn btn-secondary">
                                    <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                                    <?php echo e(\App\CPU\translate('Visit')); ?>

                                </button>
                            </a>
                        </div>

                        <?php if(auth('customer')->id() == ''): ?>
                            <div class="d-flex align-items-center">
                                <a href="<?php echo e(route('customer.auth.login')); ?>">
                                    <button class="btn btn-primary">
                                        <i class="fa fa-envelope" aria-hidden="true"></i>
                                        <?php echo e(\App\CPU\translate('Contact')); ?> <?php echo e(\App\CPU\translate('Seller')); ?>

                                    </button>
                                </a>
                            </div>
                        <?php else: ?>
                            <div class="d-flex align-items-center" id="contact-seller">
                                <button class="btn btn-primary">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                    <?php echo e(\App\CPU\translate('Contact')); ?> <?php echo e(\App\CPU\translate('Seller')); ?>

                                </button>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="row msg-option" id="msg-option">
                <form action="">
                    <input type="text" class="seller_id" hidden seller-id="<?php echo e($product->seller->id); ?>">
                    <textarea shop-id="<?php echo e($product->seller->shop->id); ?>" class="chatInputBox"
                              id="chatInputBox" rows="5"> </textarea>

                    <button class="btn btn-secondary" style="color: white;"
                            id="cancelBtn"><?php echo e(\App\CPU\translate('cancel')); ?>

                    </button>
                    <button class="btn btn-primary" style="color: white;"
                            id="sendBtn"><?php echo e(\App\CPU\translate('send')); ?></button>
                </form>
            </div>
            <div class="go-to-chatbox" id="go_to_chatbox">
                <a href="<?php echo e(route('chat-with-seller')); ?>" class="btn btn-primary" id="go_to_chatbox_btn">
                    <?php echo e(\App\CPU\translate('go_to')); ?> <?php echo e(\App\CPU\translate('chatbox')); ?> </a>
            </div>
        </div>
    <?php else: ?>
        <div class="container rtl mt-3 d-none" style="text-align: <?php echo e(Session::get('direction') === "rtl" ? 'right' : 'left'); ?>;">
            <div class="row seller_details d-flex align-items-center" id="sellerOption">
                <div class="col-md-6">
                    <div class="seller_shop">
                        <div class="shop_image d-flex justify-content-center align-items-center">
                            <a href="<?php echo e(route('shopView',[0])); ?>" class="d-flex justify-content-center">
                                <img style="height: 65px;width: 65px; border-radius: 50%"
                                     src="<?php echo e(asset("storage/company")); ?>/<?php echo e($web_config['fav_icon']->value); ?>"
                                     onerror="this.src='<?php echo e(asset('assets/front-end/img/image-place-holder.png')); ?>'"
                                     alt="">
                            </a>
                        </div>
                        <div
                            class="shop-name-<?php echo e(Session::get('direction') === "rtl" ? 'right' : 'left'); ?> d-flex justify-content-center align-items-center">
                            <div>
                                <a href="#" class="d-flex align-items-center">
                                    <div
                                        class="title"><?php echo e($web_config['name']->value); ?></div>
                                </a>
                                <div class="review d-flex align-items-center">
                                    <div class="">
                                        <span
                                            class="d-inline-block font-size-sm text-body align-middle mt-1 <?php echo e(Session::get('direction') === "rtl" ? 'ml-2' : 'mr-2'); ?>"><?php echo e(\App\CPU\translate('web_admin')); ?></span>
                                        <span
                                            class="d-inline-block font-size-sm text-body align-middle mt-1 <?php echo e(Session::get('direction') === "rtl" ? 'mr-2' : 'ml-2'); ?>"></span>
                                    </div>
                                </div>
                                <div class="review d-flex align-items-center">
                            <div class="w-100 d-flex">
                                <div class="flag">
                                    <img class="<?php echo e(Session::get('direction') === " rtl" ? 'ml-2' : 'mr-2'); ?>" width="20"
                                        src="<?php echo e(asset('assets/front-end')); ?>/img/flags/id.png" alt="Eng"
                                        style="width: 20px">
                                </div>
                                <span
                                    class="d-inline-block font-size-sm text-body align-middle mt-1 <?php echo e(Session::get('direction') === "
                                    rtl" ? 'ml-2' : 'mr-2'); ?>" style="line-height: 1.2;">Indonesia </span>
                                <span
                                    class="d-inline-block font-size-sm text-body align-middle mt-1 <?php echo e(Session::get('direction') === "
                                    rtl" ? 'mr-2' : 'ml-2'); ?>"></span>
                            </div>
                        </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 p-md-0 pt-sm-3">
                    <div class="seller_contact">

                        <div
                            class="d-flex align-items-center <?php echo e(Session::get('direction') === "rtl" ? 'pl-4' : 'pr-4'); ?>">
                            <a href="<?php echo e(route('shopView',[0])); ?>">
                                <button class="btn btn-secondary">
                                    <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                                    <?php echo e(\App\CPU\translate('Visit')); ?>

                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>



    <!-- Product carousel (You may also like)-->
    
<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>

    <script type="text/javascript">
        cartQuantityInitialize();
        getVariantPrice();
        $('#add-to-cart-form input').on('change', function () {
            getVariantPrice();
        });

        function showInstaImage(link) {
            $("#attachment-view").attr("src", link);
            $('#show-modal-view').modal('toggle')
        }
    </script>

    
    <script>
        $(document).ready(function(){
            if($(window).width() > 767){
                $('.mobile-detail').remove()
            } else {
                $('.desktop-detail').remove()
            }
        })
        $('#contact-seller').on('click', function (e) {
            // $('#seller_details').css('height', '200px');
            $('#seller_details').animate({'height': '276px'});
            $('#msg-option').css('display', 'block');
        });
        $('#sendBtn').on('click', function (e) {
            e.preventDefault();
            let msgValue = $('#msg-option').find('textarea').val();
            let data = {
                message: msgValue,
                shop_id: $('#msg-option').find('textarea').attr('shop-id'),
                seller_id: $('.msg-option').find('.seller_id').attr('seller-id'),
            }
            if (msgValue != '') {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
                });

                $.ajax({
                    type: "post",
                    url: '<?php echo e(route('messages_store')); ?>',
                    data: data,
                    success: function (respons) {
                        console.log('send successfully');
                    }
                });
                $('#chatInputBox').val('');
                $('#msg-option').css('display', 'none');
                $('#contact-seller').find('.contact').attr('disabled', '');
                $('#seller_details').animate({'height': '125px'});
                $('#go_to_chatbox').css('display', 'block');
            } else {
                console.log('say something');
            }
        });
        $('#cancelBtn').on('click', function (e) {
            e.preventDefault();
            $('#seller_details').animate({'height': '114px'});
            $('#msg-option').css('display', 'none');
        });
    </script>

    <script type="text/javascript"
            src="https://platform-api.sharethis.com/js/sharethis.js#property=5f55f75bde227f0012147049&product=sticky-share-buttons"
            async="async"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.front-end.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mh/code/Pak etek/alfajri/resources/views/web-views/products/details.blade.php ENDPATH**/ ?>