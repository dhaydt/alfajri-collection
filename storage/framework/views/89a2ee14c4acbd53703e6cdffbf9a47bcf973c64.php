<style>
    /* .just-padding {
        padding: 15px;
        border: 1px solid #ccccccb3;
        border-bottom-left-radius: 5px;
        border-bottom-right-radius: 5px;
        height: 100%;
        background-color: white;
    } */
    .carousel-banner-row {
            height: 369px;
        }
    .carousel-inner{
        border-radius: 20px;
        height: 100%;
    }
    .carousel-item {
        width: 100%;
    }

    .carousel-item img{
        width: 100%;
        height: auto;
        /* margin-top: -90px; */
    }
    @media(max-width: 600px){
        .row.rtl {
        }
        .carousel-banner-row {
            height: 154px;
            position: relative;
        }
        .carousel.slide {
            position: absolute;
            top: 0;
            bottom: 0;
            left: -7px;
            right: -7px;
        }

        .carousel-indicators {
            bottom: -22px
        }

        .indicators {
            width: 20px !important;
        }

        .carousel-inner {
            border-radius: 5px;
            height: 100%;
        }


        .carousel-inner .carousel-item a img{
            transition: .3s;
            height: auto;
            border-radius: 5px;
            width: 100%;
            /* margin-top: -20px; */
        }
    }

    @media(max-width: 500px){
        .carousel-banner-row {
            height: 145px;
        }

        .carousel-indicators {
            bottom: -13px
        }

        .carousel-inner .carousel-item a img{
            height: 145px;
        }
    }
    @media(max-width: 380px){
        .carousel-banner-row {
            height: 125px;
        }
        .carousel-inner {
            height: 125px;
            width: auto;
        }

        .carousel-inner .carousel-item a img{
            height: 125px;
        }

    }
</style>

<div class="row rtl mb-2">
    <div class="col-xl-12 col-md-12 carousel-banner-row">
        <?php ($main_banner=\App\Model\Banner::where('banner_type','Main Banner')->where('published',1)->orderBy('id','desc')->get()); ?>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <?php $__currentLoopData = $main_banner; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li data-target="#carouselExampleIndicators" class="indicators" data-slide-to="<?php echo e($key); ?>"
                        class="<?php echo e($key==0?'active':''); ?>">
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ol>
            <div class="carousel-inner">
                <?php $__currentLoopData = $main_banner; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="carousel-item h-100 <?php echo e($key==0?'active':''); ?>">
                        <a href="//<?php echo e($banner['url']); ?>">
                            <img class="d-block"
                                 onerror="this.src='<?php echo e(asset('public/assets/front-end/img/image-place-holder.png')); ?>'"
                                 src="<?php echo e(asset('storage/app/public/banner')); ?>/<?php echo e($banner['photo']); ?>"
                                 alt="">
                        </a>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
               data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only"><?php echo e(\App\CPU\translate('Previous')); ?></span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
               data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only"><?php echo e(\App\CPU\translate('Next')); ?></span>
            </a>
        </div>

        
    </div>
    <!-- Banner group-->
</div>


<script>
    $(function () {
        $('.list-group-item').on('click', function () {
            $('.glyphicon', this)
                .toggleClass('glyphicon-chevron-right')
                .toggleClass('glyphicon-chevron-down');
        });
    });
</script>
<?php /**PATH /home/mh/code/project.co/Tigatech/Ongoing/grosa/resources/views/web-views/partials/_home-top-slider.blade.php ENDPATH**/ ?>