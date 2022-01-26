<style>
    .discount-hed{
        margin-top: 0;
        right: 0;
        position: absolute;
        z-index: 1;
    }
    span.for-discoutn-value{
        padding: 5px 10px;
        font-size: 14px;
        font-weight: 600;
        text-transform: capitalize;
        border-radius: 0px 0px 0 15px;
    }
    .bandiv{
            min-height: 400px;
            max-height: 400px;
            width: 96%;
            background-color: <?php echo e($web_config['primary_color']); ?>;
            border-radius:10px;
        }
    .bandiv img {
        max-height: 400px;
        min-height: 400px;
    }
    .flash_deal_product {
        cursor: pointer;
        min-height: 335px;
        border-radius: 10px;
        overflow:hidden;
        text-align: center;
    }
    .stock-out{
        z-index: 1;
    }

    .flash_deal_product_details{
        justify-content: center;
        display: flex;
    }

    .flash-product-price {
            color: <?php echo e($web_config['primary_color']); ?> !important;
            margin-top: -2px;
            display: flex;
            flex-direction: column;
        }

    .flash-product-title {
        text-transform: capitalize;
        text-align: center;
        margin-bottom: 5px;
    }
    .deal-product-col {
        margin-left: -105px
    }

    .discount-top-f {
        z-index: 2;
        right: 0;
        font-size: 10px;
        font-weight: 700;
    }

    @media(max-width: 373px){
        .discount-hed{
            right: 7px !important;
        }
    }

    @media (max-width: 600px) {
        span.for-discoutn-value{
            padding: 2px 9px;
            font-size: 12px;
            font-weight: 500;
            border-radius: 0px 0px 0 15px;
            z-index: 1;
        }
        .stock-out {
            left: 15%;
        }
        .css-1xpribl {
            position: relative;
            display: block;
        }

        .css-11glw7t {
            position: absolute;
            top: 0px;
            left: -15px;
            width: 99vw;
            height: 100%;
            background-color: <?php echo e($web_config['primary_color']); ?>;
            user-select: none;
            pointer-events: none;
        }

        .css-12q26bf {
            display: flex;
            padding: 16px 0px 16px 14px;
            margin-left: -4px;
            overflow: scroll;
        }

        .css-7kcjrs {
            position: relative;
            display: block;
            z-index: 2;
            min-width: 140px;
            max-width: 140px;
            padding: 0px 4px;
            visibility: hidden;
            user-select: none;
            pointer-events: none;
        }

        .css-1j7i5nk {
            display: block;
            padding: 0px 4px;
            position: absolute;
            z-index: 1;
            top: 0px;
            left: -4px;
            bottom: 0px;
            min-width: 154px;
            max-width: 154px;
        }

        .css-8pf4d7 {
            position: relative;
            display: flex;
            width: 100%;
            height: 100%;
            -webkit-box-pack: center;
            justify-content: center;
            margin: 0px;
            background-color: transparent;
        }

        .css-8pf4d7 > img {
            display: block;
            object-fit: contain;
            width: 100%;
            height: 100%;
            margin: 0px auto;
        }

        .css-gfx8z3 {
    display: flex;
    position: static;
    overflow: visible;
    background-color: #fff;
    flex-flow: column nowrap;
    height: 100%;
}

        .css-vzo4av {
            position: relative;
            display: block;
            z-index: 2;
            min-width: 140px;
            max-width: 140px;
            padding: 0px 4px;
        }

        .css-1sfomcl {
    background-repeat: no-repeat;
    background-size: 99% 100%;
    height: auto;
    margin: 0px auto;
    position: relative;
    text-align: center;
    display: block;
    width: 100%;
}

.css-1sfomcl > img {
    min-height: 132px;
}

        .css-974ipl {
    position: relative;
    display: flex;
    flex: 1 1 0%;
    flex-direction: column;
    vertical-align: middle;
    height: auto;
    width: 100%;
    padding: 8px;
    overflow: hidden;
    background-color: #fff;
}

        .flash-product-title {
            font-size: 12px;
            text-transform: capitalize;
        }
        .css-974ipl .flash-product-price {
            font-weight: 700;
            font-size: 15px !important;
            text-align: center;
            color: <?php echo e($web_config['primary_color']); ?>;
        }

        .css-13ekl7h {
            position: relative;
            z-index: 0;
            height: 100%;
            min-width: 50%;
            cursor: pointer;
            flex: 1 1 auto;
        }

        .css-13ekl7h>div {
            height: 100%;
        }

        .css-2lm59p {
            display: flex;
            flex-direction: column;
            -webkit-box-pack: justify;
            justify-content: space-between;
            height: 100%;
            box-shadow: 0 1px 6px 0 var(--N700, rgba(49, 53, 59, 0.12));
            border-radius: 9px;
            overflow: hidden;
            padding: 0px;
            margin: 0px;
        }
    }
</style>
<div class="row mb-4 d-none d-md-flex" style="max-height: 400px">
    <div class="banner col-md-3 col-6">
        <a href="/" class="h-100">
            <div class="bandiv">
                <img src="<?php echo e(asset("storage/app/public/company")."/".$web_config['flash_banner']->value); ?>" alt="">
            </div>
        </a>
    </div>
    
    <div class="col-md-10 col-6 d-flex align-items-center deal-product-col">
        <div class="owl-carousel owl-theme mt-2" id="flash-deal-slider">
            <?php $__currentLoopData = $flash_deals->products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$deal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if( $deal->product): ?>
            <?php ($overallRating = \App\CPU\ProductManager::get_overall_rating(isset($deal)?$deal->product->reviews:null)); ?>
            <div class="flash_deal_product rtl"
              onclick="location.href='<?php echo e(route('product',$deal->product->slug)); ?>'">
              
              
              
                <?php if($deal->product->label): ?>
                <div class="d-flex justify-content-end for-dicount-div discount-hed">
                    <span class="for-discoutn-value">
                        <?php echo e($deal->product->label); ?>

                    </span>
                </div>
                <?php else: ?>
                <div class="d-flex justify-content-end for-dicount-div-null">
                    <span class="for-discoutn-value-null"></span>
                </div>
                <?php endif; ?>
              <div class="d-flex flex-column">
                <div class="d-flex align-items-center justify-content-center div-flash">
                    <?php if($deal->product['current_stock'] <= 0): ?>
                        <label class="badge badge-danger stock-out"><?php echo e(\App\CPU\translate('stock_out')); ?></label>
                    <?php endif; ?>
                  <img class="w-100"
                    src="<?php echo e(\App\CPU\ProductManager::product_image_path('thumbnail')); ?>/<?php echo e($deal->product['thumbnail']); ?>"
                    onerror="this.src='<?php echo e(asset('public/assets/front-end/img/image-place-holder.png')); ?>'" />
                </div>
                <div class="flash_deal_product_details pl-2 pr-1 py-2 d-flex align-items-center">
                  <div>
                    <h6 class="flash-product-title">
                      <?php echo e($deal->product['name']); ?>

                    </h6>
                    <div class="flash-product-price">
                        <?php if($deal->product->discount > 0): ?>
                            <strike style="font-size: 14px!important;color: grey!important;">
                              <?php echo e(\App\CPU\Helpers::currency_converter($deal->product->unit_price)); ?>

                            </strike>
                            <?php endif; ?>
                            <?php if($deal->product->discount > 0): ?>
                          <div class="text-center mb-1" style="">
                              <span class="new-discoutn-value">
                                  <?php echo e(\App\CPU\translate('OFF')); ?>

                                  <?php if($deal->product->discount_type == 'percent'): ?>
                                  <?php echo e(round($deal->product->discount)); ?>%
                                  <?php elseif($deal->product->discount_type =='flat'): ?>
                                  <?php echo e(\App\CPU\Helpers::currency_converter($deal->product->discount)); ?>

                                  <?php endif; ?>
                              </span>
                          </div>
                          <?php else: ?>
                          <div class="d-flex justify-content-end for-dicount-div-null">
                              <span class="for-discoutn-value-null"></span>
                          </div>
                          <?php endif; ?>
                          <?php echo e(\App\CPU\Helpers::currency_converter($deal->product->unit_price-\App\CPU\Helpers::get_product_discount($deal->product,$deal->product->unit_price))); ?>

                          </div>
                    
                  </div>
                </div>
              </div>
            </div>
            <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>


    </div>
    </div>


<div class="css-1xpribl d-block d-md-none">
    <div class="css-11glw7t"></div>
    <div class="css-12q26bf" data-testid="tblHomeCarouselProducts">
        <div class="css-7kcjrs"></div>
        <div class="css-1j7i5nk" data-testid="divLeftBanner">
            <picture class="css-8pf4d7" data-testid="divHomeCarouselBanner">
                <img src="<?php echo e(asset("storage/app/public/company")."/".$web_config['flash_banner']->value); ?>" alt="">
            </picture>
        </div>
        <?php $__currentLoopData = $flash_deals->products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$deal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if( $deal->product): ?>
            <?php ($overallRating =
            \App\CPU\ProductManager::get_overall_rating(isset($deal)?$deal->product->reviews:null)); ?>
        <div class="css-vzo4av" onclick="location.href='<?php echo e(route('product',$deal->product->slug)); ?>'">
            <div class="css-13ekl7h" data-testid="master-product-card">
                <div class="css-2lm59p" data-testid="">
                    <div class="pcv3__container css-gfx8z3">
                        <div class="css-zimbi">
                            <?php if($deal->product->label): ?>
                <div class="d-flex justify-content-end for-dicount-div discount-hed" style="right: 0;position: absolute; z-index: 1;">
                    <span class="for-discoutn-value">
                        <?php echo e($deal->product->label); ?>

                    </span>
                </div>
            <?php else: ?>
            <div class="d-flex justify-content-end for-dicount-div-null">
                <span class="for-discoutn-value-null"></span>
            </div>
            <?php endif; ?>

                                <div class="css-1sfomcl" data-testid="imgProduct"><?php if($deal->product['current_stock'] <= 0): ?>
                                    <label class="badge badge-danger stock-out"><?php echo e(\App\CPU\translate('stock_out')); ?></label>
                                <?php endif; ?><img crossorigin="anonymous"
                                    src="<?php echo e(\App\CPU\ProductManager::product_image_path('thumbnail')); ?>/<?php echo e($deal->product['thumbnail']); ?>"
                                    onerror="this.src='<?php echo e(asset('public/assets/front-end/img/image-place-holder.png')); ?>'"
                                        title="" alt=""></div></div>
                        <div class="css-974ipl">
                            <h6 class="flash-product-title">
                                <?php echo e($deal->product['name']); ?>

                              </h6>
                              <div class="flash-product-price">
                                <?php if($deal->product->discount > 0): ?>
                                <strike style="font-size: 12px!important;color: grey!important;">
                                  <?php echo e(\App\CPU\Helpers::currency_converter($deal->product->unit_price)); ?>

                                </strike>
                                <?php endif; ?>
                                  <?php if($deal->product->discount > 0): ?>
                                  <div class="text-center" style="">
                                      <span class="new-discoutn-value mobile-discount">
                                          <?php echo e(\App\CPU\translate('OFF')); ?>

                                          <?php if($deal->product->discount_type == 'percent'): ?>
                                          <?php echo e(round($deal->product->discount)); ?>%
                                          <?php elseif($deal->product->discount_type =='flat'): ?>
                                          <?php echo e(\App\CPU\Helpers::currency_converter($deal->product->discount)); ?>

                                          <?php endif; ?>
                                      </span>
                                  </div>
                                  <?php else: ?>
                                  <div class="d-flex justify-content-end for-dicount-div-null">
                                      <span class="for-discoutn-value-null"></span>
                                  </div>
                                  <?php endif; ?>

                                <?php echo e(\App\CPU\Helpers::currency_converter($deal->product->unit_price-\App\CPU\Helpers::get_product_discount($deal->product,$deal->product->unit_price))); ?>

                              </div>
                                <div class="css-yaxhi2 d-none full" data-productinfo="true">
                                    <div id="" class="css-1ktbh56" data-testid="shopWrapper"><i class="css-1y28ufk"
                                            aria-label="Official Store" data-testid="shop-badge"></i>
                                        <div class="css-1rn0irl"><span class="css-qjiozs"
                                                data-testid="linkShopLocation">Jakarta Barat</span><span
                                                class="css-qjiozs hidden" data-testid="linkShopName"></span></div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php /**PATH /home/mh/code/project.co/Tigatech/umkm-shop/resources/views/web-views/partials/_flash-deal.blade.php ENDPATH**/ ?>