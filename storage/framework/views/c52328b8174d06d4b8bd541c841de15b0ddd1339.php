<style>
    .close {
        z-index: 99;
        background: white !important;
        padding: 3px 8px !important;
        margin: -23px -12px -1rem auto !important;
        border-radius: 50%;
    }

    .modal-dialog {
        max-height: 100vh;
    }

    .modal-body{
        padding: 3px !important;
        cursor: pointer
    }

    .modal-body img {

    }

    .modal-content {
        background: none;
        border: none
    }

    @media(max-width: 570px){
        .modal-header .close{
            padding: 0px 6px 4px 6px !important;
        }
        .modal-content {
            max-width: 85%;
            margin-left: 21px;
        }

        .modal-header .close span {
            margin-top: -5px;
        }

        .modal-dialog.modal-dialog-centered{
            margin: auto;
        }
    }


</style>
<?php ($banner=\App\Model\Banner::inRandomOrder()->where(['published'=>1,'banner_type'=>'Popup Banner'])->first()); ?>
<?php if(isset($banner)): ?>
    <div class="modal fade" id="popup-modal">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header" style="padding: 1px;border-bottom: 0px!important;">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body"
                     onclick="location.href='<?php echo e($banner['url']); ?>'">
                    <img class="d-block"
                         onerror="this.src='<?php echo e(asset('public/assets/front-end/img/image-place-holder.png')); ?>'"
                         src="<?php echo e(asset('storage/app/public/banner')); ?>/<?php echo e($banner['photo']); ?>"
                         alt="">
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>
<?php /**PATH /home/mh/code/project.co/Tigatech/umkm-shop/resources/views/layouts/front-end/partials/_modals.blade.php ENDPATH**/ ?>