<?php $__env->startSection('title', \App\CPU\translate('Brand List')); ?>

<?php $__env->startPush('css_or_js'); ?>

<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <div class="content container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-2">
            <h1 class="h3 mb-0 text-black-50"><?php echo e(\App\CPU\translate('brand_list')); ?> <span style="color: rgb(252, 59, 10);">(<?php echo e($br->total()); ?>)</span></h1>
        </div>

        <div class="row" style="margin-top: 20px">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <!-- Search -->
                        <form action="<?php echo e(url()->current()); ?>" method="GET">
                            <div class="input-group input-group-merge input-group-flush">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="tio-search"></i>
                                    </div>
                                </div>
                                <input id="datatableSearch_" type="search" name="search" class="form-control"
                                    placeholder="<?php echo e(\App\CPU\translate('Search')); ?> <?php echo e(\App\CPU\translate('Brands')); ?>" aria-label="Search orders" value="<?php echo e($search); ?>" required>
                                <button type="submit" class="btn btn-primary"><?php echo e(\App\CPU\translate('Search')); ?></button>
                            </div>
                        </form>
                        <!-- End Search -->
                    </div>
                    <div class="card-body" style="padding: 0">
                        <div class="table-responsive">
                            <table style="text-align: <?php echo e(Session::get('direction') === "rtl" ? 'right' : 'left'); ?>;"
                                class="table table-borderless table-thead-bordered table-nowrap table-align-middle card-table">
                                <thead class="thead-light">
                                <tr>
                                    <th scope="col" style="width: 100px">
                                        <?php echo e(\App\CPU\translate('brand')); ?> <?php echo e(\App\CPU\translate('ID')); ?>

                                    </th>
                                    <th scope="col"><?php echo e(\App\CPU\translate('name')); ?></th>
                                    <th scope="col"><?php echo e(\App\CPU\translate('image')); ?></th>
                                    <th scope="col" style="width: 100px" class="text-center">
                                        <?php echo e(\App\CPU\translate('action')); ?>

                                    </th>
                                </tr>
                                </thead>
                                <tbody>

                                <?php $__currentLoopData = $br; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td class="text-center"><?php echo e($br->firstItem()+$k); ?></td>
                                        <td><?php echo e($b['name']); ?></td>
                                        <td>
                                            <img style="width: 60px;height: 60px"
                                                 onerror="this.src='<?php echo e(asset('assets/front-end/img/image-place-holder.png')); ?>'"
                                                 src="<?php echo e(asset('storage/brand')); ?>/<?php echo e($b['image']); ?>">
                                        </td>
                                        <td>
                                            <a class="btn btn-primary btn-sm"
                                               href="<?php echo e(route('admin.brand.update',[$b['id']])); ?>">
                                                <i class="tio-edit"></i> <?php echo e(\App\CPU\translate('Edit')); ?>

                                            </a>
                                            <a class="btn btn-danger btn-sm delete"
                                               id="<?php echo e($b['id']); ?>">
                                                <i class="tio-add-to-trash"></i> <?php echo e(\App\CPU\translate('Delete')); ?>

                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </tbody>
                            </table>

                        </div>
                    </div>
                    <div class="card-footer">
                        <?php echo e($br->links()); ?>

                    </div>
                    <?php if(count($br)==0): ?>
                        <div class="text-center p-4">
                            <img class="mb-3" src="<?php echo e(asset('assets/back-end')); ?>/svg/illustrations/sorry.svg" alt="Image Description" style="width: 7rem;">
                            <p class="mb-0"><?php echo e(\App\CPU\translate('No_data_to_show')); ?></p>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>
    <script>
        $(document).on('click', '.delete', function () {
            var id = $(this).attr("id");
            Swal.fire({
                title: '<?php echo e(\App\CPU\translate('Are_you_sure_delete_this_brand')); ?>?',
                text: "<?php echo e(\App\CPU\translate('You_will_not_be_able_to_revert_this')); ?>!",
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: '<?php echo e(\App\CPU\translate('Yes')); ?>, <?php echo e(\App\CPU\translate('delete_it')); ?>!'
            }).then((result) => {
                if (result.value) {
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                        }
                    });
                    $.ajax({
                        url: "<?php echo e(route('admin.brand.delete')); ?>",
                        method: 'POST',
                        data: {id: id},
                        success: function () {
                            toastr.success('<?php echo e(\App\CPU\translate('Brand_deleted_successfully')); ?>');
                            location.reload();
                        }
                    });
                }
            })
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.back-end.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mh/code/Pak etek/alfajri/resources/views/admin-views/brand/list.blade.php ENDPATH**/ ?>