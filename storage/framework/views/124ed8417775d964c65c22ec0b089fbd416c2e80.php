<?php $__env->startSection('title',\App\CPU\translate('My Address')); ?>

<?php $__env->startPush('css_or_js'); ?>
    <link rel="stylesheet" media="screen"
          href="<?php echo e(asset('public/assets/front-end')); ?>/vendor/nouislider/distribute/nouislider.min.css"/>

    <style>
        .headerTitle {
            font-size: 24px;
            font-weight: 600;
            margin-top: 1rem;
        }

        .modal-dialog .modal-content{
            background-color: #fff;
        }

        .mobile-address {
            margin-top: 1rem;
        }

        body {
            font-family: 'Titillium Web', sans-serif
        }

        .product-qty span {
            font-size: 14px;
            color: #6A6A6A;
        }

        .font-nameA {

            display: inline-block;
            margin-top: 5px !important;
            font-size: 13px !important;
            color: #030303;
        }

        .font-name {
            font-weight: 600;
            font-size: 15px;
            padding-bottom: 6px;
            color: #030303;
        }

        .modal-footer {
            border-top: none;
        }

        .cz-sidebar-body h3:hover + .divider-role {
            border-bottom: 3px solid <?php echo e($web_config['primary_color']); ?> !important;
            transition: .2s ease-in-out;
        }

        label {
            font-size: 15px;
            margin-bottom: 8px;
            color: #030303;

        }

        .nav-pills .nav-link.active {
            box-shadow: none;
            color: #ffffff !important;
        }

        .modal-header {
            border-bottom: none;
        }

        .nav-pills .nav-link {
            padding-top: .575rem;
            padding-bottom: .575rem;
            background-color: #ffffff;
            color: #050b16 !important;
            font-size: .9375rem;
            border: 1px solid #e4dfdf;
        }

        .nav-pills .nav-link :hover {
            padding-top: .575rem;
            padding-bottom: .575rem;
            background-color: #ffffff;
            color: #050b16 !important;
            font-size: .9375rem;
            border: 1px solid #e4dfdf;
        }

        .nav-pills .nav-link.active, .nav-pills .show > .nav-link {
            color: #fff;
            background-color: <?php echo e($web_config['primary_color']); ?>;
        }

        .iconHad {
            color: <?php echo e($web_config['primary_color']); ?>;
            padding: 4px;
        }

        .iconSp {
            margin-top: 0.70rem;
        }

        .fa-lg {
            padding: 4px;
        }

        .fa-trash {
            color: #FF4D4D;
        }

        .namHad {
            color: #030303;
            position: absolute;
            padding-<?php echo e(Session::get('direction') === "rtl" ? 'right' : 'left'); ?>: 13px;
            padding-top: 8px;
        }

        .donate-now {
            list-style-type: none;
            margin: 25px 0 0 0;
            padding: 0;
        }

        .donate-now li {
            float: left;
            margin: <?php echo e(Session::get('direction') === "rtl" ? '0 0 0 5px' : '0 5px 0 0'); ?>;
            width: 100px;
            height: 40px;
            position: relative;
            padding: 22px;
            text-align: center;
        }

        .donate-now label,
        .donate-now input {
            display: block;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
        }

        .donate-now input[type="radio"] {
            opacity: 0.01;
            z-index: 100;
        }

        .donate-now input[type="radio"]:checked + label,
        .Checked + label {
            background: <?php echo e($web_config['primary_color']); ?>;
            color: white !important;
            border-radius: 7px;
        }

        .donate-now label {
            padding: 5px;
            border: 1px solid #CCC;
            cursor: pointer;
            z-index: 90;
        }

        .donate-now label:hover {
            background: #DDD;
        }

        #edit{
            cursor: pointer;
        }

        @media (max-width: 600px) {
            .modal-dialog .modal-content {
                max-width: 100%;
                margin-left: 0;
            }
            .modal-header {
                padding-bottom: 5px;
            }
            .modal-body{
                margin-top: -27px;
            }
            .modal-body .col-md-12 {
                justify-content: center;
            }
            .sidebar_heading h1 {
                text-align: center;
                color: aliceblue;
                padding-bottom: 17px;
                font-size: 19px;
            }
            .mobile-address{
                margin-top: -82px;
            }
            .mobile-footer-address{
                position: fixed;
                bottom: 62px;
                left: 0;
                right: 0;;
                background-color: #fff;
                padding: 10px;
                justify-content: center;
            }
        }
    </style>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>

    <div class="modal fade rtl" style="text-align: <?php echo e(Session::get('direction') === "rtl" ? 'right' : 'left'); ?>;" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog  modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="row">
                        <div class="col-md-12"><h5 class="modal-title font-name "><?php echo e(\App\CPU\translate('add_new_address')); ?></h5></div>
                    </div>
                </div>
                <div class="modal-body">
                    <form action="<?php echo e(route('address-store')); ?>" method="post">
                        <?php echo csrf_field(); ?>

                        <div class="col-md-12" style="display: flex">
                            <!-- Nav pills -->

                            <ul class="donate-now">
                                <li>
                                    <input type="radio" id="a25" name="addressAs" value="permanent"/>
                                    <label for="a25" class="component"><?php echo e(\App\CPU\translate('permanent')); ?></label>
                                </li>
                                <li>
                                    <input type="radio" id="a50" name="addressAs" value="home"/>
                                    <label for="a50" class="component"><?php echo e(\App\CPU\translate('Home')); ?></label>
                                </li>
                                <li>
                                    <input type="radio" id="a75" name="addressAs" value="office" checked="checked"/>
                                    <label for="a75" class="component"><?php echo e(\App\CPU\translate('Office')); ?></label>
                                </li>

                            </ul>
                        </div>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div id="home" class="container tab-pane active"><br>


                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="name"><?php echo e(\App\CPU\translate('contact_person_name')); ?></label>
                                        <input class="form-control" type="text" id="name" name="name" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="address"><?php echo e(\App\CPU\translate('address')); ?></label>
                                        <input class="form-control" type="text" id="address" name="address" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="address-city"><?php echo e(\App\CPU\translate('City')); ?></label>
                                        <input class="form-control" type="text" id="address-city" name="city" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="zip"><?php echo e(\App\CPU\translate('zip_code')); ?></label>
                                        <input class="form-control" type="number" id="zip" name="zip" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="state"><?php echo e(\App\CPU\translate('State')); ?></label>
                                        <input type="text" class="form-control" id="state" name="state" placeholder="" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="country"><?php echo e(\App\CPU\translate('Country')); ?></label>
                                        <input type="text" class="form-control" id="country" name="country"
                                               placeholder="" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="firstName"><?php echo e(\App\CPU\translate('Phone')); ?></label>
                                        <input class="form-control" type="text" id="phone" name="phone" required>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo e(\App\CPU\translate('close')); ?></button>
                                <button type="submit" class="btn btn-primary"><?php echo e(\App\CPU\translate('Add')); ?> <?php echo e(\App\CPU\translate('Informations')); ?>  </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>

    <!-- Modal mobile -->

    <!-- Page Content-->
    <div class="container pb-5 mb-2 mb-md-4 rtl mobile-address" style="text-align: <?php echo e(Session::get('direction') === "rtl" ? 'right' : 'left'); ?>;">
        <div class="row">
            <!-- Sidebar-->
        <?php echo $__env->make('web-views.partials._profile-aside', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- Content  -->
            <section class="col-lg-9 mt-3 col-md-9">

                <!-- Addresses list-->
                <div class="row">
                    <div class="col-lg-12 col-md-12 justify-content-between overflow-hidden d-none d-md-flex">
                        <div class="col-sm-4">
                            <h1 class="h3  mb-0 folot-left headerTitle"><?php echo e(\App\CPU\translate('ADDRESSES')); ?></h1>
                        </div>
                        <div class="mt-2 col-sm-4">
                            <button type="submit" class="btn btn-primary float-right" data-toggle="modal"
                                data-target="#exampleModal"><?php echo e(\App\CPU\translate('add_new_address')); ?>

                            </button>
                        </div>
                    </div>
                    <?php $__currentLoopData = $shippingAddresses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $shippingAddress): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <section class="col-lg-6 col-md-6 mb-4 mt-5">
                            <div class="card" style="text-transform: capitalize;">
                                
                                    <div class="card-header" style="padding: 5px;">
                                        <i class="fa fa-thumb-tack fa-2x iconHad" aria-hidden="true"></i>
                                        <span class="namHad"> <?php echo e($shippingAddress['address_type']); ?> <?php echo e(\App\CPU\translate('address')); ?> </span>
                                        
                                        <span class="float-right iconSp">
                                            <a class="" id="edit" data-toggle="modal" data-target="#editAddress_<?php echo e($shippingAddress->id); ?>">
                                                <i class="fa fa-edit fa-lg"></i>
                                            </a>

                                            <a class="" href="<?php echo e(route('address-delete',['id'=>$shippingAddress->id])); ?>" onclick="return confirm('<?php echo e(\App\CPU\translate('Are you sure you want to Delete')); ?>?');" id="delete">
                                                <i class="fa fa-trash fa-lg"></i>
                                            </a>
                                        </span>
                                    </div>
                                        

                                    
                                    <div class="modal fade" id="editAddress_<?php echo e($shippingAddress->id); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog  modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                <div class="row">
                                                    <div class="col-md-12"> <h5 class="modal-title font-name "><?php echo e(\App\CPU\translate('update')); ?> <?php echo e(\App\CPU\translate('address')); ?>  </h5></div>
                                                </div>
                                                </div>
                                                <div class="modal-body">
                                                    <form id="updateForm">
                                                        <?php echo csrf_field(); ?>
                                                        <div class="pb-3" style="display: flex">
                                                            <!-- Nav pills -->
                                                            <input type="hidden" id="defaultValue" class="add_type" value="<?php echo e($shippingAddress->address_type); ?>">
                                                            <ul class="donate-now">
                                                                <li class="address_type_li">
                                                                    <input type="radio" class="address_type" id="a25" name="addressAs" value="permanent"  <?php echo e($shippingAddress->address_type == 'permanent' ? 'checked' : ''); ?> />
                                                                    <label for="a25" class="component"><?php echo e(\App\CPU\translate('permanent')); ?></label>
                                                                </li>
                                                                <li class="address_type_li">
                                                                    <input type="radio" class="address_type" id="a50" name="addressAs" value="home" <?php echo e($shippingAddress->address_type == 'home' ? 'checked' : ''); ?> />
                                                                    <label for="a50" class="component"><?php echo e(\App\CPU\translate('Home')); ?></label>
                                                                </li>
                                                                <li class="address_type_li">
                                                                    <input type="radio" class="address_type" id="a75" name="addressAs" value="office" <?php echo e($shippingAddress->address_type == 'office' ? 'checked' : ''); ?>/>
                                                                    <label for="a75" class="component"><?php echo e(\App\CPU\translate('Office')); ?></label>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <!-- Tab panes -->
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="person_name"><?php echo e(\App\CPU\translate('contact_person_name')); ?></label>
                                                                <input class="form-control" type="text" id="person_name"
                                                                    name="name"
                                                                    value="<?php echo e($shippingAddress->contact_person_name); ?>"
                                                                    required>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="own_address"><?php echo e(\App\CPU\translate('address')); ?></label>
                                                                <input class="form-control" type="text" id="own_address"
                                                                    name="address"
                                                                    value="<?php echo e($shippingAddress->address); ?>" required>
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="city"><?php echo e(\App\CPU\translate('City')); ?></label>

                                                                <input class="form-control" type="text" id="city" name="city" value="<?php echo e($shippingAddress->city); ?>" required>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="zip_code"><?php echo e(\App\CPU\translate('zip_code')); ?></label>
                                                                <input class="form-control" type="number" id="zip_code" name="zip" value="<?php echo e($shippingAddress->zip); ?>" required>
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                            <label for="own_state"><?php echo e(\App\CPU\translate('State')); ?></label>
                                                                <input type="text" class="form-control" name="state" value="<?php echo e($shippingAddress->state); ?>" id="own_state"  placeholder="" required>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                            <label for="own_country"><?php echo e(\App\CPU\translate('Country')); ?></label>
                                                                <input type="text" class="form-control" id="own_country" name="country" value="<?php echo e($shippingAddress->country); ?>" placeholder="" required>
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-12">
                                                            <label for="own_phone"><?php echo e(\App\CPU\translate('Phone')); ?></label>
                                                                <input class="form-control" type="text" id="own_phone" name="phone" value="<?php echo e($shippingAddress->phone); ?>" required="required">
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="closeB btn btn-secondary" data-dismiss="modal"><?php echo e(\App\CPU\translate('close')); ?></button>
                                                            <button type="submit" class="btn btn-primary" id="addressUpdate" data-id="<?php echo e($shippingAddress->id); ?>"><?php echo e(\App\CPU\translate('update')); ?>  </button>
                                                        </div>
                                                    </form>
                                            </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-body" style="padding: <?php echo e(Session::get('direction') === "rtl" ? '0 13px 15px 15px' : '0 15px 15px 13px'); ?>;">
                                        <div class="font-name"><span><?php echo e($shippingAddress['contact_person_name']); ?></span>
                                        </div>
                                        <div><span class="font-nameA"> <strong><?php echo e(\App\CPU\translate('Phone')); ?>  :</strong>  <?php echo e($shippingAddress['phone']); ?></span>
                                        </div>
                                        <div><span class="font-nameA"> <strong><?php echo e(\App\CPU\translate('Province')); ?>  :</strong>  <?php echo e($shippingAddress['province']); ?></span>
                                        </div>
                                        <div><span class="font-nameA"> <strong><?php echo e(\App\CPU\translate('City')); ?>  :</strong>  <?php echo e($shippingAddress['city']); ?></span>
                                        </div>
                                        <div><span class="font-nameA"> <strong><?php echo e(\App\CPU\translate('District')); ?>  :</strong>  <?php echo e($shippingAddress['district']); ?></span>
                                        </div>
                                        <div><span class="font-nameA"> <strong> <?php echo e(\App\CPU\translate('zip_code')); ?> :</strong> <?php echo e($shippingAddress['zip']); ?></span>
                                        </div>
                                        <div><span class="font-nameA"> <strong><?php echo e(\App\CPU\translate('address')); ?> :</strong> <?php echo e($shippingAddress['address']); ?></span>
                                        </div>
                                        <?php ($c_name = App\Country::where('country', $shippingAddress['country'])->first()); ?>
                                        <div><span class="font-nameA"> <strong><?php echo e(\App\CPU\translate('Country')); ?> :</strong> <?php echo e($c_name->country_name); ?></span>
                                        </div>


                                    </div>
                                <div class="mobile-footer-address d-flex d-md-none">
                                        <button type="submit" class="btn btn-primary float-right" data-toggle="modal"
                                            data-target="#exampleModal"><?php echo e(\App\CPU\translate('add_new_address')); ?>

                                    </div>
                                </div>
                            </div>
                        </section>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>

            </section>

        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>
    <script>
        $(document).ready(function (){
            $('.address_type_li').on('click', function (e) {
                // e.preventDefault();
                $('.address_type_li').find('.address_type').removeAttr('checked', false);
                $('.address_type_li').find('.component').removeClass('active_address_type');
                $(this).find('.address_type').attr('checked', true);
                $(this).find('.address_type').removeClass('add_type');
                $('#defaultValue').removeClass('add_type');
                $(this).find('.address_type').addClass('add_type');

                $(this).find('.component').addClass('active_address_type');
            });
        })

        $('#addressUpdate').on('click', function(e){
            e.preventDefault();
            let addressAs, address, name, zip, city, state, country, phone;

            addressAs = $('.add_type').val();

            address = $('#own_address').val();
            name = $('#person_name').val();
            zip = $('#zip_code').val();
            city = $('#city').val();
            state = $('#own_state').val();
            country = $('#own_country').val();
            phone = $('#own_phone').val();

            let id = $(this).attr('data-id');

            if (addressAs != '' && address != '' && name != '' && zip != '' && city != '' && state != '' && country != '' && phone != '') {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
                });
                $.ajax({
                    url: "<?php echo e(route('address-update')); ?>",
                    method: 'POST',
                    data: {
                        id : id,
                        addressAs: addressAs,
                        address: address,
                        name: name,
                        zip: zip,
                        city: city,
                        state: state,
                        country: country,
                        phone: phone
                    },
                    success: function () {
                        toastr.success('<?php echo e(\App\CPU\translate('Address Update Successfully')); ?>.');
                        location.reload();
                        // $('#name').val('');
                        // $('#link').val('');
                        // $('#icon').val('');
                        // $('#image-set').val('');

                    }
                });
            }else{
                toastr.error('<?php echo e(\App\CPU\translate('All input field required')); ?>.');
            }

        });
    </script>
    <style>
        .modal-backdrop {
            z-index: 0 !important;
            display: none;
        }
    </style>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.front-end.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mh/code/project.co/Tigatech/umkm-shop/resources/views/web-views/users-profile/account-address.blade.php ENDPATH**/ ?>