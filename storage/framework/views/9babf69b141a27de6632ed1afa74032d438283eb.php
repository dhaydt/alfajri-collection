<?php $__env->startSection('title', \App\CPU\translate('Currency')); ?>

<?php $__env->startPush('css_or_js'); ?>

<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <?php ($currency_model=\App\CPU\Helpers::get_business_settings('currency_model')); ?>
    <?php ($default=\App\CPU\Helpers::get_business_settings('system_default_currency')); ?>
    <div class="content container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a
                        href="<?php echo e(route('admin.dashboard')); ?>"><?php echo e(\App\CPU\translate('Dashboard')); ?></a>
                </li>
                <li class="breadcrumb-item" aria-current="page"><?php echo e(\App\CPU\translate('Currency')); ?></li>
            </ol>
        </nav>
        <!-- Page Heading -->

        <div class="row">
            <div class="col-12">
                <div class="alert alert-danger mb-3" role="alert">
                    <?php echo e(\App\CPU\translate('changing_some_settings_will_take_time_to_show_effect_please_clear_session_or_wait_for_60_minutes_else_browse_from_incognito_mode')); ?>

                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="text-center">
                            <i class="tio-money"></i>
                            <?php echo e(\App\CPU\translate('Add New Currency')); ?>

                        </h5>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo e(route('admin.currency.store')); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="text" name="name" class="form-control"
                                               id="name" placeholder="<?php echo e(\App\CPU\translate('Enter currency Name')); ?>">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="symbol" class="form-control"
                                               id="symbol" placeholder="<?php echo e(\App\CPU\translate('Enter currency symbol')); ?>">
                                    </div>
                                </div>

                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="text" name="code" class="form-control"
                                               id="code" placeholder="<?php echo e(\App\CPU\translate('Enter currency code')); ?>">
                                    </div>
                                    <?php if($currency_model=='multi_currency'): ?>
                                        <div class="col-md-6">
                                            <input type="number" min="0" max="1000000"
                                                   name="exchange_rate" step="0.00000001"
                                                   class="form-control" id="exchange_rate"
                                                   placeholder="<?php echo e(\App\CPU\translate('Enter currency exchange rate')); ?>">
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-group text-center">
                                <button type="submit" id="add" class="btn btn-primary text-capitalize"
                                        style="color: white">
                                    <i class="tio-add"></i> <?php echo e(\App\CPU\translate('add')); ?>

                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card h-100">
                    <div class="card-header">
                        <h5 class="text-center">
                            <i class="tio-settings"></i>
                            <?php echo e(\App\CPU\translate('system_default_currency')); ?>

                        </h5>
                    </div>
                    <div class="card-body">
                        <form class="form-inline_" action="<?php echo e(route('admin.currency.system-currency-update')); ?>"
                              method="post">
                            <?php echo csrf_field(); ?>
                            <div class="row">
                                <div class="col-md-12">
                                    <?php ($default=\App\Model\BusinessSetting::where('type', 'system_default_currency')->first()); ?>
                                    <div class="form-group mb-2">
                                        <select style="width: 100%" class="form-control js-example-responsive"
                                                name="currency_id">
                                            <?php $__currentLoopData = App\Model\Currency::where('status', 1)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $currency): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option
                                                    value="<?php echo e($currency->id); ?>" <?php echo e($default->value == $currency->id?'selected':''); ?> ><?php echo e($currency->name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12 mt-3">
                                    <div class="form-group mb-2">
                                        <button type="submit"
                                                class="btn btn-primary mb-2"><?php echo e(\App\CPU\translate('Save')); ?></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>


        <div class="row" style="margin-top: 20px">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row justify-content-between align-items-center flex-grow-1">
                            <div class="col-lg-3 mb-3 mb-lg-0">
                                <div class="flex-start">
                                    <div><h5><?php echo e(\App\CPU\translate('Currency')); ?> <?php echo e(\App\CPU\translate('table')); ?></h5>
                                    </div>
                                    <div class="mx-1"><h5 style="color: red;">(<?php echo e($currencies->total()); ?>)</h5></div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <!-- Search -->
                                <form action="<?php echo e(url()->current()); ?>" method="GET">
                                    <div class="input-group input-group-merge input-group-flush">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="tio-search"></i>
                                            </div>
                                        </div>
                                        <input id="datatableSearch_" type="search" name="search" class="form-control"
                                               placeholder="<?php echo e(\App\CPU\translate('Search Currency Name or Currency Code')); ?>"
                                               aria-label="Search orders" value="<?php echo e($search); ?>" required>
                                        <button type="submit" class="btn btn-primary"><?php echo e(\App\CPU\translate('search')); ?></button>
                                    </div>
                                </form>
                                <!-- End Search -->
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table
                                class="table table-borderless table-thead-bordered table-nowrap table-align-middle card-table">
                                <thead class="thead-light">
                                <tr class="text-center">
                                    <th scope="col"><?php echo e(\App\CPU\translate('SL')); ?>#</th>
                                    <th scope="col"><?php echo e(\App\CPU\translate('currency_name')); ?></th>
                                    <th scope="col"><?php echo e(\App\CPU\translate('currency_symbol')); ?></th>
                                    <th scope="col"><?php echo e(\App\CPU\translate('currency_code')); ?></th>
                                    <?php if($currency_model=='multi_currency'): ?>
                                        <th scope="col"><?php echo e(\App\CPU\translate('exchange_rate')); ?>

                                            (1 <?php echo e(App\Model\Currency::where('id', $default->value)->first()->code); ?>= ?)
                                        </th>
                                    <?php endif; ?>
                                    <th scope="col"><?php echo e(\App\CPU\translate('status')); ?></th>
                                    <th scope="col"><?php echo e(\App\CPU\translate('action')); ?></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $currencies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key =>$data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr class="text-center">
                                        <td><?php echo e($currencies->firstitem()+ $key); ?></td>
                                        <td><?php echo e($data->name); ?></td>
                                        <td><?php echo e($data->symbol); ?></td>
                                        <td><?php echo e($data->code); ?></td>
                                        <?php if($currency_model=='multi_currency'): ?>
                                            <td><?php echo e($data->exchange_rate); ?></td>
                                        <?php endif; ?>
                                        <td>
                                            <?php if($default['value']!=$data->id): ?>
                                                <label class="switch">
                                                    <input type="checkbox" class="status"
                                                           id="<?php echo e($data->id); ?>" <?php if ($data->status == 1) echo "checked" ?>><span
                                                        class="slider round">
                                                    </span>
                                                </label>
                                            <?php else: ?>
                                                <label class="badge badge-info"><?php echo e(\App\CPU\translate('Default')); ?></label>
                                            <?php endif; ?>
                                        </td>
                                        <td>
                                            <?php if($data->code!='USD'): ?>
                                                <a type="button" class="btn btn-primary btn-sm btn-xs edit"
                                                   href="<?php echo e(route('admin.currency.edit',[$data->id])); ?>">
                                                    <i class="tio-edit"></i> <?php echo e(\App\CPU\translate('Edit')); ?>

                                                </a>
                                                <a type="button" class="btn btn-danger btn-sm btn-xs"
                                                   href="<?php echo e(route('admin.currency.delete',[$data->id])); ?>">
                                                    <i class="tio-edit"></i> <?php echo e(\App\CPU\translate('Delete')); ?>

                                                </a>
                                            <?php else: ?>
                                                <button class="btn btn-primary btn-sm btn-xs edit" disabled>
                                                    <i class="tio-edit"></i> <?php echo e(\App\CPU\translate('Edit')); ?>

                                                </button>
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer">
                        <?php echo e($currencies->links()); ?>

                    </div>
                    <?php if(count($currencies)==0): ?>
                        <div class="text-center p-4">
                            <img class="mb-3" src="<?php echo e(asset('public/assets/back-end')); ?>/svg/illustrations/sorry.svg"
                                 alt="Image Description" style="width: 7rem;">
                            <p class="mb-0"><?php echo e(\App\CPU\translate('No data to show')); ?></p>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>

    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>
    <!-- Page level custom scripts -->
    <script src="<?php echo e(asset('public/assets/select2/js/select2.min.js')); ?>"></script>
    <script>
        $(".js-example-theme-single").select2({
            theme: "classic"
        });

        $(".js-example-responsive").select2({
            width: 'resolve'
        });
    </script>

    <script>
        $('#add').on('click', function () {
            var name = $('#name').val();
            var symbol = $('#symbol').val();
            var code = $('#code').val();
            var exchange_rate = $('#exchange_rate').val();
            if (name == "" || symbol == "" || code == "" || exchange_rate == "") {
                alert('<?php echo e(\App\CPU\translate('All input field is required')); ?>');
                return false;
            } else {
                return true;
            }
        });
        $(document).on('change', '.status', function () {
            var id = $(this).attr("id");
            if ($(this).prop("checked") == true) {
                var status = 1;
            } else if ($(this).prop("checked") == false) {
                var status = 0;
            }

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });
            $.ajax({
                url: "<?php echo e(route('admin.currency.status')); ?>",
                method: 'POST',
                data: {
                    id: id,
                    status: status
                },
                success: function (response) {
                    if (response.status === 1) {
                        toastr.success(response.message);
                    } else {
                        toastr.error(response.message);
                    }
                    location.reload();
                }
            });
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.back-end.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mh/code/project.co/Tigatech/umkm-shop/resources/views/admin-views/currency/view.blade.php ENDPATH**/ ?>