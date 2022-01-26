<?php $__env->startSection('title', \App\CPU\translate('Brand Edit')); ?>

<?php $__env->startPush('css_or_js'); ?>
    <link href="<?php echo e(asset('assets/back-end')); ?>/css/select2.min.css" rel="stylesheet"/>
    <link href="<?php echo e(asset('assets/back-end/css/croppie.css')); ?>" rel="stylesheet">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
<div class="content container-fluid">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><?php echo e(\App\CPU\translate('Dashboard')); ?></a></li>
            <li class="breadcrumb-item" aria-current="page"><?php echo e(\App\CPU\translate('Brand')); ?> <?php echo e(\App\CPU\translate('Update')); ?></li>
        </ol>
    </nav>

    <!-- Content Row -->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h1 class="h3 mb-0 text-black-50"><?php echo e(\App\CPU\translate('Brand')); ?> <?php echo e(\App\CPU\translate('Update')); ?></h1>
                </div>
                <div class="card-body" style="text-align: <?php echo e(Session::get('direction') === "rtl" ? 'right' : 'left'); ?>;">
                    <form action="<?php echo e(route('admin.brand.update',[$b['id']])); ?>" method="post" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <?php ($language=\App\Model\BusinessSetting::where('type','pnc_language')->first()); ?>
                            <?php ($language = $language->value ?? null); ?>
                            <?php ($default_lang = 'en'); ?>

                            <?php ($default_lang = json_decode($language)[0]); ?>
                            <ul class="nav nav-tabs mb-4">
                                <?php $__currentLoopData = json_decode($language); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li class="nav-item">
                                        <a class="nav-link lang_link <?php echo e($lang == $default_lang? 'active':''); ?>"
                                           href="#"
                                           id="<?php echo e($lang); ?>-link"><?php echo e(\App\CPU\Helpers::get_language_name($lang).'('.strtoupper($lang).')'); ?></a>
                                    </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        <div class="row">
                            <div class="col-md-6">
                                <?php $__currentLoopData = json_decode($language); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php
                                        if (count($b['translations'])) {
                                            $translate = [];
                                            foreach ($b['translations'] as $t) {
                                                if ($t->locale == $lang && $t->key == "name") {
                                                    $translate[$lang]['name'] = $t->value;
                                                }
                                            }
                                        }
                                        ?>
                                    <div class="form-group <?php echo e($lang != $default_lang ? 'd-none':''); ?> lang_form"
                                            id="<?php echo e($lang); ?>-form">
                                        <label for="name"><?php echo e(\App\CPU\translate('name')); ?> (<?php echo e(strtoupper($lang)); ?>)</label>
                                        <input type="text" name="name[]" value="<?php echo e($lang==$default_lang?$b['name']:($translate[$lang]['name']??'')); ?>"
                                                class="form-control" id="name"
                                                placeholder="<?php echo e(\App\CPU\translate('Ex')); ?> : <?php echo e(\App\CPU\translate('LUX')); ?>" <?php echo e($lang == $default_lang? 'required':''); ?>>
                                    </div>
                                    <input type="hidden" name="lang[]" value="<?php echo e($lang); ?>">
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <div class="form-group">
                                    <label for="brand"><?php echo e(\App\CPU\translate('brand_logo')); ?></label><span class="badge badge-soft-danger">( <?php echo e(\App\CPU\translate('ratio')); ?> 1:1 )</span>
                                    <br>
                                    <div class="custom-file" style="text-align: left">
                                        <input type="file" name="image" id="customFileUpload" class="custom-file-input"
                                            accept=".jpg, .png, .jpeg, .gif, .bmp, .tif, .tiff|image/*">
                                        <label class="custom-file-label" for="customFileUpload"><?php echo e(\App\CPU\translate('choose')); ?> <?php echo e(\App\CPU\translate('file')); ?></label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-2">
                                <center>
                                <img style="border-radius: 10px; max-height:200px;" id="viewer"
                                    src="<?php echo e(asset('storage/brand')); ?>/<?php echo e($b['image']); ?>" alt="banner image"/>
                            </center>
                            </div>
                        </div>


                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary"><?php echo e(\App\CPU\translate('update')); ?></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!--modal-->
    <?php echo $__env->make('shared-partials.image-process._image-crop-modal',['modal_id'=>'brand-image-modal','width'=>1000,'margin_left'=>'-53%'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!--modal-->
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>
<script>
        $(".lang_link").click(function (e) {
            e.preventDefault();
            $(".lang_link").removeClass('active');
            $(".lang_form").addClass('d-none');
            $(this).addClass('active');

            let form_id = this.id;
            let lang = form_id.split("-")[0];
            console.log(lang);
            $("#" + lang + "-form").removeClass('d-none');
            if (lang == '<?php echo e($default_lang); ?>') {
                $(".from_part_2").removeClass('d-none');
            } else {
                $(".from_part_2").addClass('d-none');
            }
        });

        $(document).ready(function () {
            $('#dataTable').DataTable();
        });
    </script>
    <script src="<?php echo e(asset('assets/back-end')); ?>/js/select2.min.js"></script>
    <script>
        $(".js-example-theme-single").select2({
            theme: "classic"
        });

        $(".js-example-responsive").select2({
            width: 'resolve'
        });
    </script>

    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#viewer').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#customFileUpload").change(function () {
            readURL(this);
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.back-end.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mh/code/Pak etek/alfajri/resources/views/admin-views/brand/edit.blade.php ENDPATH**/ ?>