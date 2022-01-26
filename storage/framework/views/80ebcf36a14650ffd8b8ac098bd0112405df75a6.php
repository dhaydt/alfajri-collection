

<?php ($overallRating = \App\CPU\ProductManager::get_overall_rating($product->reviews)); ?>

<div class="product-card card pb-3 <?php echo e($product['current_stock']==0?'stock-card':''); ?>"
    style="margin-bottom: 40px; box-shadow: none;">
    <?php if($product['current_stock']<=0): ?> <label style="left: 29%!important; top: 29%!important;"
        class="badge badge-danger stock-out">Stock Out</label>
        <?php endif; ?>

        <div class="card-header inline_product clickable" style="cursor: pointer;max-height: 135px;min-height: 127px">
            <?php if($product->discount > 0): ?>
            <div class="d-flex justify-content-end for-dicount-div discount-hed" style="right: 0;position: absolute">
                <span class="for-discoutn-value">
                    <?php if($product->discount_type == 'percent'): ?>
                    <?php echo e(round($product->discount,2)); ?>%
                    <?php elseif($product->discount_type =='flat'): ?>
                    <?php echo e(\App\CPU\Helpers::currency_converter($product->discount)); ?>

                    <?php endif; ?>
                    OFF
                </span>
            </div>
            <?php else: ?>
            <div class="d-flex justify-content-end for-dicount-div-null">
                <span class="for-discoutn-value-null"></span>
            </div>
            <?php endif; ?>
            <div class="d-flex align-items-center justify-content-center d-block">
                <a href="<?php echo e(route('product',$product->slug)); ?>">
                    <img src="<?php echo e(\App\CPU\ProductManager::product_image_path('thumbnail')); ?>/<?php echo e($product['thumbnail']); ?>"
                        onerror="this.src='<?php echo e(asset('public/assets/front-end/img/image-place-holder.png')); ?>'"
                        style="width: 100%;max-height: 220px">
                </a>
            </div>
        </div>

        <div class="card-body inline_product text-center p-1 clickable"
            style="cursor: pointer; height:5.5rem; max-height: 5.5rem">
            
            <div style="position: relative;" class="product-title1">
                <a href="<?php echo e(route('product',$product->slug)); ?>">
                    <?php echo e(Str::limit($product['name'], 30)); ?>

                </a>
            </div>
            <div class="justify-content-between text-center">
                <div class="product-price text-center">
                    <?php if($product->discount > 0): ?>
                    <strike style="font-size: 12px!important;color: grey!important;">
                        <?php echo e(\App\CPU\Helpers::currency_converter($product->unit_price)); ?>

                    </strike><br>
                    <?php endif; ?>
                    <span class="text-accent">
                        <?php echo e(\App\CPU\Helpers::currency_converter(
                        $product->unit_price-(\App\CPU\Helpers::get_product_discount($product,$product->unit_price))
                        )); ?>

                    </span>
                </div>
            </div>

        </div>
        

        <div class="card-body card-body-hidden" style="padding-bottom: 5px!important; margin-top: -3.875rem;">
            <div class="text-center">
                <?php if(Request::is('product/*')): ?>
                <a class="btn btn-primary btn-sm btn-block mb-2" href="<?php echo e(route('product',$product->slug)); ?>"
                    style="padding: 0.425rem 0.3rem; font-size: .7125rem;">
                    <i class="czi-forward align-middle <?php echo e(Session::get('direction') === " rtl" ? 'ml-1' : 'mr-1'); ?>"></i>
                    <?php echo e(\App\CPU\translate('View')); ?>

                </a>
                <?php else: ?>
                <a class="btn btn-primary btn-sm btn-block mb-2" href="javascript:"
                    
                    onclick="addCart(<?php echo e($product['id']); ?>)"
                    style="padding: 0.425rem 0.3rem; font-size: .7125rem;">
                    <i style="font-weight: 900;font-size: 9px; margin-top: 1px;" class="czi-add align-middle <?php echo e(Session::get('direction') === " rtl" ? 'ml-1' : 'mr-1'); ?>"></i>
                    Keranjang
                </a>
                <?php endif; ?>
            </div>
        </div>
</div>

<?php $__env->startPush('script'); ?>
<script>
    function addCart(val) {
        if (checkAddToCartValidity()) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });
            $.post({
                url: '/cart/add',
                data: {'id' : val, 'quantity': 1},
                beforeSend: function () {
                    $('#loading').show();
                },
                success: function (response) {
                    // console.log(response);
                    if (response.status == 1) {
                        updateNavCart();
                        toastr.success(response.message, {
                            CloseButton: true,
                            ProgressBar: true
                        });
                        $('.call-when-done').click();
                        return false;
                    } else if (response.status == 0) {
                        Swal.fire({
                            icon: 'error',
                            title: 'Cart',
                            text: response.message
                        });
                        return false;
                    }
                },
                complete: function () {
                    $('#loading').hide();
                }
            });
        } else {
            Swal.fire({
                type: 'info',
                title: 'Cart',
                text: 'Please choose all the options'
            });
        }
    }

</script>
<?php $__env->stopPush(); ?>
<?php /**PATH /home/mh/code/project.co/Tigatech/umkm-shop/resources/views/web-views/partials/_single_product_featured.blade.php ENDPATH**/ ?>