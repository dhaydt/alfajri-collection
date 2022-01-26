<style>
    @media(max-width:600px) {
        .mobile-search-col {
            display: flex;
            align-items: center;
            padding-right: 0;
            justify-content: center;
        }
        .input-group-overlay{
            width: 100%;
            /* margin-right: -10px; */
        }
        .search-card-mobile {
            position: absolute;
            background: white;
            z-index: 999;
            width: 100%;
            display: none
        }

        .search-mobile-input {
            background-color: #dfdfdf;
            height: 36px;
            font-size: 13px;
        }
        .search_button{
            height: 36px;
            width: 42px;
        }

        .search_button span {
            font-size: 14px !important;
            padding: 6px ;
        }

        .search-card-mobile .card-body{
            overflow:scroll;
            height:400px;
            overflow-x: hidden;
            max-height: 17.5rem;
            min-height: 17.5rem;
            padding: 15px;
        }

        .search-card-mobile .card-body .list-group-item {
            padding: 5px;
        }

        .search-card-mobile .card-body .list-group-item a {
            font-size: 14px;
        }
        .mobile-head {
            position: fixed;
            width: 100vw;
            top: 0;
            z-index: 11;
        }

        .bg-dark {
            padding: 0 !important;
        }

        .nav-title {
            font-size: 18px;
            text-transform: uppercase;
            font-weight: 700;
            line-height: 2;
            color: #fff;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .arrow {
            line-height: 2.1;
            color: #fff !important;
            font-size: 17px;
        }
        .navbar-sticky .navbar.navbar-expand-md.navbar-dark .container{
            display: flex;
            justify-content: end;
        }
        .navbar-toolbar {
            justify-content: center;
        }
        .navbar-tool.dropdown .navbar-tool-icon-box {
            background-color: transparent !important;
            height: 36px;
            width: 36px;
        }
        .navbar-tool-icon{
            font-size: 24px;
            line-height: 36px;
        }
        .mobile-cart-col{
            padding-left: 0;
        }

        #loc-mobile {
            padding: 0.25rem 1.5rem 0.25rem 1.5rem !important;
        }
    }
</style>
<?php ($cat = session()->get('category')); ?>
<?php if(isset($cat)): ?>
<div class="navbar-sticky bg-dark mobile-head">
    <div class="navbar navbar-expand-md navbar-dark p-2" style="height: 52px">
        <div class="container">
            <div class="row w-100">
                <div class="col-2 d-flex justify-content-center">
                    <a class="arrow" href="<?php echo e(route('home')); ?>"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                    
                </div>
                <div class="col-10 nav-title">
                    <?php if(isset($cat['brand_name'])): ?>
                    <?php echo e($cat['brand_name']); ?>

                    <?php else: ?>
                    <?php echo e($cat['name']); ?>

                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    
                
    <?php else: ?>
    <div class="navbar-sticky bg-dark mobile-head">
        <?php if(session()->get('hide_banner') !== true): ?>
        <?php if(Route::current()->getName() == 'home'): ?>
        <?php echo $__env->make('layouts.front-end.partials._banner_dynamic', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endif; ?>
        <?php endif; ?>
        <div class="navbar navbar-expand-md navbar-dark p-2">
            <div class="container ">
                <div class="row w-100">

                    <div class="col-md-6 col-sm-10 col-10 mobile-search-col">
                        <div class="input-group-overlay" style="text-align: <?php echo e(Session::get('direction') === " rtl"
                            ? 'right' : 'left'); ?>">
                            <form action="<?php echo e(route('products')); ?>" type="submit" class="search_form">
                                <input class="form-control search-mobile-input appended-form-control search-bar-input" type="text"
                                    autocomplete="off" placeholder="<?php echo e(\App\CPU\translate('search')); ?>" name="name"
                                    style="border: 2px solid white; border-radius: 50px; border-top-right-radius: 50px !important; border-bottom-right-radius: 50px !important;">
                                <button class="input-group-append-overlay search_button" type="submit"
                                    style="border: 2px solid white;background-color: <?php echo e($web_config['primary_color']); ?> !important; border-radius: <?php echo e(Session::get('direction') === "
                                    rtl" ? '50px 0px 0px 50px; right: unset; left: 0'
                                    : '0px 50px 50px 0px; left: unset; right: 0'); ?>;">
                                    <span class="input-group-text" style="font-size: 20px;">
                                        <i class="czi-search text-white"></i>
                                    </span>
                                </button>
                                <input name="data_from" value="search" hidden>
                                <input name="page" value="1" hidden>
                                <diV class="card search-card-mobile">
                                    <div class="card-body search-result-box-mobile"></div>
                                </diV>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-2 col-2 mobile-cart-col">
                        <!-- Toolbar-->
                        <div class="navbar-toolbar d-flex flex-shrink-0 align-items-center">
                            <a class="navbar-tool navbar-stuck-toggler" href="#">
                                <span class="navbar-tool-tooltip">Expand menu</span>
                                <div class="navbar-tool-icon-box">
                                    <i class="navbar-tool-icon czi-menu"></i>
                                </div>
                            </a>
                            
                            
                            <div id="cart_items">
                                <?php echo $__env->make('layouts.front-end.partials.cart_mobile', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-nav" style="background-color: #f2f3f7">
            <div id="loc-mobile" class="d-flex container p-2 px-4" data-toggle="tooltip" data-placement="top"
                title="Location">
                <span id="nav-global-location-data-modal-action" class="a-declarative nav-progressive-attribute">
                    <a id="nav-global-location-popover-link"
                        class="d-flex align-items-center nav-a nav-a-2 a-popover-trigger a-declarative nav-progressive-attribute"
                        tabindex="0">

                    </a>
                </span>
                <div class="mr-2 d-flex align-items-center justify-content-center">
                    <span class="nav-line-1 nav-progressive-content mr-2" style="color: #5a5757">Area pengiriman</span>
                    <img class="mr-1" style="height: 14px; width: auto;"
                        src="<?php echo e(asset('public/assets/front-end/img/loc.png')); ?>" alt="">
                    <span class="nav-line-2 nav-progressive-content d-flex" id="auto-loc-mobile">
                        
                    </span>
                </div>
            </div>
        </div>
        <?php endif; ?>

        <script>
            fetch('https://ipapi.co/json/')
  .then(function(response) {
    return response.json();
  })
  .then(function(data) {
    console.log('location mobile',data);

            if(data.region !== "West Java"){
                $('#auto-loc-mobile').append('Diluar jangkauan').attr('style', 'font-size: 16px; width: 120px;color: #5a5757;')
            }else{
                $('#auto-loc-mobile').append(data.city)
            }
            $('#loc-mobile').attr('data-original-title', data.country_name + ', ' + data.region);
  });
        </script>
<?php /**PATH /home/mh/code/project.co/Tigatech/Ongoing/grosa/resources/views/layouts/front-end/partials/_mobile_header.blade.php ENDPATH**/ ?>