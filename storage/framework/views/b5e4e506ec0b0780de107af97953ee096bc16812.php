<?php $__env->startSection('title',ucfirst($data['data_from']).' products'); ?>

<?php $__env->startPush('css_or_js'); ?>
    <meta property="og:image" content="<?php echo e(asset('storage/app/public/company')); ?>/<?php echo e($web_config['web_logo']); ?>"/>
    <meta property="og:title" content="Products of <?php echo e($web_config['name']); ?> "/>
    <meta property="og:url" content="<?php echo e(env('APP_URL')); ?>">
    <meta property="og:description" content="<?php echo substr($web_config['about']->value,0,100); ?>">

    <meta property="twitter:card" content="<?php echo e(asset('storage/app/public/company')); ?>/<?php echo e($web_config['web_logo']); ?>"/>
    <meta property="twitter:title" content="Products of <?php echo e($web_config['name']); ?>"/>
    <meta property="twitter:url" content="<?php echo e(env('APP_URL')); ?>">
    <meta property="twitter:description" content="<?php echo substr($web_config['about']->value,0,100); ?>">

    <style>
        .headerTitle {
            font-size: 26px;
            font-weight: bolder;
            margin-top: 3rem;
        }

        .for-count-value {
            position: absolute;

        <?php echo e(Session::get('direction') === "rtl" ? 'left' : 'right'); ?>: 0.6875 rem;;
            width: 1.25rem;
            height: 1.25rem;
            border-radius: 50%;

            color: black;
            font-size: .75rem;
            font-weight: 500;
            text-align: center;
            line-height: 1.25rem;
        }

        .for-count-value {
            position: absolute;

        <?php echo e(Session::get('direction') === "rtl" ? 'left' : 'right'); ?>: 0.6875 rem;
            width: 1.25rem;
            height: 1.25rem;
            border-radius: 50%;
            color: #fff;
            font-size: 0.75rem;
            font-weight: 500;
            text-align: center;
            line-height: 1.25rem;
        }

        .for-brand-hover:hover {
            color: <?php echo e($web_config['primary_color']); ?>;
        }

        .for-hover-lable:hover {
            color: <?php echo e($web_config['primary_color']); ?>       !important;
        }

        .page-item.active .page-link {
            background-color: <?php echo e($web_config['primary_color']); ?>      !important;
        }

        .page-item.active > .page-link {
            box-shadow: 0 0 black !important;
        }

        .for-shoting {
            font-weight: 600;
            font-size: 18px;
            padding- <?php echo e(Session::get('direction') === "rtl" ? 'left' : 'right'); ?>: 9px;
            color: #030303;
        }

        .sidepanel {
            width: 0;
            position: fixed;
            z-index: 6;
            height: 500px;
            top: 0;
        <?php echo e(Session::get('direction') === "rtl" ? 'right' : 'left'); ?>: 0;
            background-color: #ffffff;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 40px;
        }

        .sidepanel a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 25px;
            color: #818181;
            display: block;
            transition: 0.3s;
        }

        .sidepanel a:hover {
            color: #f1f1f1;
        }

        .sidepanel .closebtn {
            position: absolute;
            top: 0;
        <?php echo e(Session::get('direction') === "rtl" ? 'left' : 'right'); ?>: 25 px;
            font-size: 36px;
        }

        .openbtn {
            font-size: 18px;
            cursor: pointer;
            background-color: transparent !important;
            color: #373f50;
            width: 40%;
            border: none;
        }

        .openbtn:hover {
            background-color: #444;
        }

        .for-display {
            display: block !important;
        }

        @media (max-width: 360px) {
            .openbtn {
                width: 59%;
            }

            .for-shoting-mobile {
                margin- <?php echo e(Session::get('direction') === "rtl" ? 'left' : 'right'); ?>: 0% !important;
            }

            .for-mobile {

                margin- <?php echo e(Session::get('direction') === "rtl" ? 'right' : 'left'); ?>: 10% !important;
            }

        }

        @media (max-width: 500px) {
            .for-mobile {

                margin- <?php echo e(Session::get('direction') === "rtl" ? 'right' : 'left'); ?>: 27%;
            }

            .openbtn:hover {
                background-color: #fff;
            }

            .for-display {
                display: flex !important;
            }

            .for-tab-display {
                display: none !important;
            }

            .openbtn-tab {
                margin-top: 0 !important;
            }

        }

        @media(max-width: 600px){
            .list-product {
                margin-top: -33px;
            }
        }

        @media  screen and (min-width: 500px) {
            .openbtn {
                display: none !important;
            }


        }

        @media  screen and (min-width: 800px) {


            .for-tab-display {
                display: none !important;
            }

        }

        @media (max-width: 768px) {
            .headerTitle {
                font-size: 23px;

            }

            .openbtn-tab {
                margin-top: 3rem;
                display: inline-block !important;
            }

            .for-tab-display {
                display: inline;
            }
        }
    </style>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <!-- Page Title-->
    

    <!-- Page Content-->
    <div class="container pb-5 mb-2 mb-md-4 rtl list-product"
         style="text-align: <?php echo e(Session::get('direction') === "rtl" ? 'right' : 'left'); ?>;">
        <div class="row justify-content-center">
            <!-- Sidebar-->


            <!-- Content  -->
            <section class="col-lg-12">
                <?php if(count($products) > 0): ?>
                    <div class="row" id="ajax-products">
                        <?php echo $__env->make('web-views.products._ajax-products',['products'=>$products], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                <?php else: ?>
                    <div class="text-center pt-5">
                        <h2><?php echo e(\App\CPU\translate('No Product Found')); ?></h2>
                    </div>
                <?php endif; ?>
            </section>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>
    <script>
        function openNav() {
            document.getElementById("mySidepanel").style.width = "50%";
        }

        function closeNav() {
            document.getElementById("mySidepanel").style.width = "0";
        }

        function filter(value) {
            $.get({
                url: '<?php echo e(url('/')); ?>/products',
                data: {
                    id: '<?php echo e($data['id']); ?>',
                    name: '<?php echo e($data['name']); ?>',
                    data_from: '<?php echo e($data['data_from']); ?>',
                    min_price: '<?php echo e($data['min_price']); ?>',
                    max_price: '<?php echo e($data['max_price']); ?>',
                    sort_by: value
                },
                dataType: 'json',
                beforeSend: function () {
                    if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)){
                        $('#loading').addClass('loading-mobile');
                    }
                    $('#loading').show();
                },
                success: function (response) {
                    $('#ajax-products').html(response.view);
                },
                complete: function () {
                    $('#loading').hide();
                    if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)){
                        $('#loading').removeClass('loading-mobile');
                    }
                },
            });
        }

        function searchByPrice() {
            let min = $('#min_price').val();
            let max = $('#max_price').val();
            $.get({
                url: '<?php echo e(url('/')); ?>/products',
                data: {
                    id: '<?php echo e($data['id']); ?>',
                    name: '<?php echo e($data['name']); ?>',
                    data_from: '<?php echo e($data['data_from']); ?>',
                    sort_by: '<?php echo e($data['sort_by']); ?>',
                    min_price: min,
                    max_price: max,
                },
                dataType: 'json',
                beforeSend: function () {
                    if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)){
                        $('#loading').addClass('loading-mobile');
                    }
                    $('#loading').show();
                },
                success: function (response) {
                    $('#ajax-products').html(response.view);
                    $('#paginator-ajax').html(response.paginator);
                },
                complete: function () {
                    if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)){
                        $('#loading').removeClass('loading-mobile');
                    }
                    $('#loading').hide();
                },
            });
        }

        $('#searchByFilterValue, #searchByFilterValue-m').change(function () {
            var url = $(this).val();
            if (url) {
                window.location = url;
            }
            return false;
        });

        $("#search-brand").on("keyup", function () {
            var value = this.value.toLowerCase().trim();
            $("#lista1 div>li").show().filter(function () {
                return $(this).text().toLowerCase().trim().indexOf(value) == -1;
            }).hide();
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.front-end.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mh/code/project.co/Tigatech/umkm-shop/resources/views/web-views/products/view.blade.php ENDPATH**/ ?>