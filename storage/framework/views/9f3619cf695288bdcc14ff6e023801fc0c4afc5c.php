<?php $__env->startSection('title', \App\CPU\translate('Language Translate')); ?>
<?php $__env->startPush('css_or_js'); ?>
    <!-- Custom styles for this page -->
    <link href="<?php echo e(asset('public/assets/back-end')); ?>/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <div class="content container-fluid">
        <!-- Page Heading -->
        <nav aria-label="breadcrumb" style="width:100%; text-align: <?php echo e(Session::get('direction') === "rtl" ? 'right' : 'left'); ?>;">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><?php echo e(\App\CPU\translate('Dashboard')); ?></a>
                </li>
                <li class="breadcrumb-item" aria-current="page"><?php echo e(\App\CPU\translate('Language')); ?></li>
            </ol>
        </nav>

        <div class="row" style="margin-top: 20px">
            <div class="col-md-12">
                <div class="card" style="width:100%; text-align: <?php echo e(Session::get('direction') === "rtl" ? 'right' : 'left'); ?>;">
                    <div class="card-header">
                        <h5><?php echo e(\App\CPU\translate('language_content_table')); ?></h5>
                        <a href="<?php echo e(route('admin.business-settings.language.index')); ?>"
                           class="btn btn-sm btn-danger btn-icon-split float-right">
                            <span class="text text-capitalize"><?php echo e(\App\CPU\translate('back')); ?></span>
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th scope="col"><?php echo e(\App\CPU\translate('SL#')); ?></th>
                                    <th scope="col"><?php echo e(\App\CPU\translate('key')); ?></th>
                                    <th scope="col"><?php echo e(\App\CPU\translate('value')); ?></th>
                                    <th scope="col"></th>
                                
                                </tr>
                                </thead>

                                <tbody>
                                <?php $__currentLoopData = $lang_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $count=>$language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr id="lang-<?php echo e($language['key']); ?>">
                                        <td><?php echo e($count+1); ?></td>
                                        <td>
                                            <input type="text" name="key[]" value="<?php echo e($language['key']); ?>" hidden>
                                            <label><?php echo e($language['key']); ?></label>
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" name="value[]"
                                                   id="value-<?php echo e($count+1); ?>"
                                                   value="<?php echo e($language['value']); ?>">
                                        </td>
                                        <td style="width: 100px">
                                            <button type="button"
                                                    onclick="update_lang('<?php echo e($language['key']); ?>',$('#value-<?php echo e($count+1); ?>').val())"
                                                    class="btn btn-primary">Update
                                            </button>
                                        </td>
                                    <!--<td style="width: 100px">
                                            <button type="button"
                                                    onclick="remove_key('<?php echo e($language['key']); ?>')"
                                                    class="btn btn-danger">Remove
                                            </button>
                                        </td>-->
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>
    <!-- Page level plugins -->
    <script src="<?php echo e(asset('public/assets/back-end')); ?>/vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <!-- Page level custom scripts -->
    <script>
        // Call the dataTables jQuery plugin
        $(document).ready(function () {
            $('#dataTable').DataTable({
                "pageLength": '<?php echo e(\App\CPU\Helpers::pagination_limit()); ?>'
            });
        });

        function update_lang(key, value) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });
            $.ajax({
                url: "<?php echo e(route('admin.business-settings.language.translate-submit',[$lang])); ?>",
                method: 'POST',
                data: {
                    key: key,
                    value: value
                },
                beforeSend: function () {
                    $('#loading').show();
                },
                success: function (response) {
                    toastr.success('<?php echo e(\App\CPU\translate('text_updated_successfully')); ?>');
                },
                complete: function () {
                    $('#loading').hide();
                },
            });
        }

        function remove_key(key) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });
            $.ajax({
                url: "<?php echo e(route('admin.business-settings.language.remove-key',[$lang])); ?>",
                method: 'POST',
                data: {
                    key: key
                },
                beforeSend: function () {
                    $('#loading').show();
                },
                success: function (response) {
                    toastr.success('<?php echo e(\App\CPU\translate('Key removed successfully')); ?>');
                    $('#lang-'+key).hide();
                },
                complete: function () {
                    $('#loading').hide();
                },
            });
        }
    </script>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.back-end.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mh/code/project.co/Tigatech/umkm-shop/resources/views/admin-views/business-settings/language/translate.blade.php ENDPATH**/ ?>