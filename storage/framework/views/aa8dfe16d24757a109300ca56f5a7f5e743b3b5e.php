<style>
    .banner_dynamic{
        height: 72px;
        width: 100%;
        position: relative;
    }
    .banner_dynamic img{
        height: 100%;
        width: 100%;
        background-color: #fff;
    }
    .downloadApp {
        border: none;
        position: absolute;
        right: 110px;
        top: 20px;
        width: 90px;
        border-radius: 8px;
        font-weight: 700;
        letter-spacing: 1px;
    }

    .googleApp {
        border: none;
        position: absolute;
        right: 10px;
        top: 20px;
        width: 90px;
        border-radius: 8px;
        font-weight: 700;
        letter-spacing: 1px;
    }
    .closeBan {
        position: absolute;
        left: 0;
        color: #6c727c;
        font-size: 32px;
        font-weight: 600;
        margin-top: 0;
    }
    @media(max-width: 375px){
        .downloadApp, .googleApp{
            width: 90px;
            max-width: 90px;
        }
    }


</style>

<?php ($main_banner=\App\Model\Banner::where('banner_type','Header Banner')->where('published',1)->orderBy('id','desc')->first()); ?>
<?php if(isset($main_banner)): ?>
<div class="banner_dynamic" id="bannerDynamic">
    <img src="<?php echo e(asset('storage/banner/'.$main_banner['photo'])); ?>" alt="">
    <button type="button" class="closeBan btn" aria-label="Close" onclick="closeBanner()">
        <span aria-hidden="true">&times;</span>
    </button>
    <a class="downloadApp" target="_blank"  href="<?php echo e($main_banner['url2']); ?>" role="button"><img
        src="<?php echo e(asset("assets/front-end/png/apple_app.png")); ?>"
        alt="" style="height: 30px!important;">
    </a>
    <a class="googleApp" target="_blank"  href="<?php echo e($main_banner['url']); ?>" role="button"><img
            src="<?php echo e(asset("assets/front-end/png/google_app.png")); ?>"
            alt="" style="height: 30px!important;">
    </a>
</div>
<?php endif; ?>
<?php /**PATH /home/mh/code/Pak etek/alfajri/resources/views/layouts/front-end/partials/_banner_dynamic.blade.php ENDPATH**/ ?>