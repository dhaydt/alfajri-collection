<?php $__env->startSection('title',\App\CPU\translate('Shipping Address Choose')); ?>

<?php $__env->startPush('css_or_js'); ?>
    <style>
        #basic-addon1, #basic-addon2 {
            background-color: #f2f3f7;
        }
        .btn-outline {
            border-color: <?php echo e($web_config['primary_color']); ?> ;
        }

        .btn-outline {
            color: #020512;
            border-color: <?php echo e($web_config['primary_color']); ?>   !important;
        }

        .btn-outline:hover {
            color: white;
            background: <?php echo e($web_config['primary_color']); ?>;

        }

        .btn-outline:focus {
            /* border-color: <?php echo e($web_config['primary_color']); ?>   !important; */
        }

        .mobile-shipping {
            margin-top: 20px;
        }

        @media(max-width: 600px){
            .mobile-shipping {
                margin-top: -40px
            }
            #datepicker {
                font-size: 13px;
            }
            #basic-addon1 {
                font-size: 13px;
            }
            #basic-addon2 {
                font-size: 13px;
            }
            .mobile-checkout-shipping{
                position: fixed;
                left: 0;
                right: 0;
                bottom: 0;
                background-color: #fff;
                padding: 10px;
            }
        }
        @media(max-width: 400px){
            .mobile-checkout-shipping a{
                padding: 10px;
            }
        }
    </style>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container pb-5 mb-2 mb-md-4 rtl mobile-shipping" style="text-align: <?php echo e(Session::get('direction') === "rtl" ? 'right' : 'left'); ?>;">
        <div class="row">
            
            <section class="col-lg-8">
                <hr>
                <div class="checkout_details mt-3">
                    <!-- Steps-->
                <?php echo $__env->make('web-views.partials._checkout-steps',['step'=>2], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <!-- Shipping methods table-->
                    
                    <?php ($shipping_addresses=\App\Model\ShippingAddress::where('customer_id',auth('customer')->id())->get()); ?>
                    <form method="post" action="" id="address-form">
                        <?php echo csrf_field(); ?>
                        <div class="card-body" style="padding: 0!important;">
                            <ul class="list-group">
                                <div class="input-group mt-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text" id="basic-addon1">Pengiriman</span>
                                    </div>
                                    <input type="text" class="form-control" autocomplete="off" name="dated" aria-describedby="basic-addon1" id="datepicker">
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="basic-addon2"> <i class="fa fa-calendar"></i> </span>
                                      </div>
                                  </div>
                                  <input type="hidden" id="dateBackend" name="date">
                                <?php $__currentLoopData = $shipping_addresses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$address): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li class="list-group-item mb-2 mt-2"
                                        style="cursor: pointer;background: rgba(245,245,245,0.51)"
                                        onclick="$('#sh-<?php echo e($address['id']); ?>').prop( 'checked', true )">
                                        <input type="radio" name="shipping_method_id"
                                               id="sh-<?php echo e($address['id']); ?>"
                                               value="<?php echo e($address['id']); ?>" <?php echo e($key==0?'checked':''); ?>>
                                        <span class="checkmark" style="margin-<?php echo e(Session::get('direction') === "rtl" ? 'left' : 'right'); ?>: 10px"></span>
                                        <label class="badge"
                                               style="background: <?php echo e($web_config['primary_color']); ?>; color:white !important;"><?php echo e($address['address_type']); ?></label>
                                        <small>
                                            <i class="fa fa-phone"></i> <?php echo e($address['phone']); ?>

                                        </small>
                                        <hr>
                                        <span><?php echo e(\App\CPU\translate('contact_person_name')); ?>: <?php echo e($address['contact_person_name']); ?></span><br>
                                        <span><?php echo e(\App\CPU\translate('address')); ?> : <?php echo e($address['address']); ?>, <?php echo e($address['city']); ?>, <?php echo e($address['zip']); ?>, <?php echo e($address['country']); ?>.</span>
                                    </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <li class="list-group-item mb-2" onclick="anotherAddress()">
                                    <input type="radio" name="shipping_method_id"
                                           id="sh-0" value="0" data-toggle="collapse"
                                           data-target="#collapseThree" <?php echo e($shipping_addresses->count()==0?'checked':''); ?>>
                                    <span class="checkmark" style="margin-<?php echo e(Session::get('direction') === "rtl" ? 'left' : 'right'); ?>: 10px"></span>
                                    <label class="badge"
                                           style="background: <?php echo e($web_config['primary_color']); ?>; color:white !important;">
                                        <i class="fa fa-plus-circle"></i></label>
                                    <button type="button" class="btn btn-outline" data-toggle="collapse"
                                            data-target="#collapseThree"><?php echo e(\App\CPU\translate('Another')); ?> <?php echo e(\App\CPU\translate('address')); ?>

                                    </button>
                                    <div id="accordion">
                                        <div id="collapseThree"
                                             class="collapse <?php echo e($shipping_addresses->count()==0?'show':''); ?>"
                                             aria-labelledby="headingThree"
                                             data-parent="#accordion">
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <label
                                                        for="exampleInputEmail1"><?php echo e(\App\CPU\translate('contact_person_name')); ?>

                                                        <span style="color: red">*</span></label>
                                                    <input type="text" class="form-control"
                                                           name="contact_person_name" <?php echo e($shipping_addresses->count()==0?'required':''); ?>>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1"><?php echo e(\App\CPU\translate('Phone')); ?><span
                                                            style="color: red">*</span></label>
                                                    <input type="text" class="form-control"
                                                           name="phone" <?php echo e($shipping_addresses->count()==0?'required':''); ?>>
                                                </div>
                                                <div class="form-group">
                                                    <label
                                                        for="exampleInputPassword1"><?php echo e(\App\CPU\translate('address')); ?> <?php echo e(\App\CPU\translate('Type')); ?></label>
                                                    <select class="form-control" name="address_type">
                                                        <option
                                                            value="permanent"><?php echo e(\App\CPU\translate('Permanent')); ?></option>
                                                        <option value="home"><?php echo e(\App\CPU\translate('Home')); ?></option>
                                                        <option value="others"><?php echo e(\App\CPU\translate('Others')); ?></option>
                                                    </select>
                                                </div>
                                                
                                                <?php if(auth('customer')->user()->country == 'ID'): ?>

                                                

                                                
                                                <input type="hidden" value="jawa barat" name="province">

                                                <div class="form-group">
                                                    <label for="city"><?php echo e(\App\CPU\translate('City')); ?> <span
                                                            style="color: red">*</span></label>
                                                            
                                                        <input class="form-control" type="text" name="city" placeholder="Masukan kota anda">
                                                        <input class="form-control" type="hidden" name="country" value="ID">
                                                </div>

                                                <div class="form-group">
                                                    <label for="district"><?php echo e(\App\CPU\translate('District')); ?> <span
                                                            style="color: red">*</span></label>
                                                            
                                                        <input type="text" name="district" class="form-control" placeholder="Masukan kecamatan">
                                                </div>
                                                <?php else: ?>
                                                <?php ($country = App\Country::all()); ?>
                                                <div class="form-group">
                                                    <label><?php echo e(\App\CPU\translate('Country')); ?> <span
                                                            style="color: red">*</span></label>
                                                            <select id="country" name="country" class="form-control" <?php echo e($shipping_addresses->count()==0?'required':''); ?>>
                                                                <option value="0" selected>---select country---</option>
                                                                <?php $__currentLoopData = $country; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <option value="<?php echo e($r->country); ?>"><?php echo e($r->country_name); ?></option>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="city"><?php echo e(\App\CPU\translate('City')); ?> <span
                                                            style="color: red">*</span></label>
                                                    <input id="city" type="text" class="form-control"
                                                           name="city" <?php echo e($shipping_addresses->count()==0?'required':''); ?>>
                                                </div>
                                                <?php endif; ?>

                                                <div class="form-group">
                                                    <label
                                                        for="exampleInputEmail1"><?php echo e(\App\CPU\translate('zip_code')); ?> <span
                                                            style="color: red">*</span></label>
                                                    <input type="number" class="form-control"
                                                           name="zip" <?php echo e($shipping_addresses->count()==0?'required':''); ?>>
                                                </div>

                                                <div class="form-group">
                                                    <label
                                                        for="exampleInputEmail1"><?php echo e(\App\CPU\translate('address')); ?> <span
                                                            style="color: red">*</span></label>
                                                    <textarea class="form-control"
                                                              name="address" <?php echo e($shipping_addresses->count()==0?'required':''); ?>></textarea>
                                                </div>
                                                <div class="form-check" style="padding-<?php echo e(Session::get('direction') === "rtl" ? 'right' : 'left'); ?>: 1.25rem;">
                                                    <input type="checkbox" name="save_address" class="form-check-input"
                                                           id="exampleCheck1">
                                                    <label class="form-check-label" for="exampleCheck1" style="padding-<?php echo e(Session::get('direction') === "rtl" ? 'right' : 'left'); ?>: 1.09rem">
                                                        <?php echo e(\App\CPU\translate('save_this_address')); ?>

                                                    </label>
                                                </div>
                                                <button type="submit" class="btn btn-primary" style="display: none"
                                                        id="address_submit"></button>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </form>
                    <div class="d-block d-md-none">
                        <?php echo $__env->make('web-views.partials._order-summary', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                    <!-- Navigation (desktop)-->
                    <div class="row  mobile-checkout-shipping">
                        <div class="col-6">
                            <a class="btn btn-secondary btn-block" href="<?php echo e(route('shop-cart')); ?>">
                                <i class="czi-arrow-<?php echo e(Session::get('direction') === "rtl" ? 'right' : 'left'); ?> mt-sm-0 mx-1"></i>
                                <span class="d-none d-sm-inline"><?php echo e(\App\CPU\translate('shop_cart')); ?></span>
                                <span class="d-inline d-sm-none"><?php echo e(\App\CPU\translate('shop_cart')); ?></span>
                            </a>
                        </div>
                        <div class="col-6">
                            <a class="btn btn-primary btn-block" href="javascript:" onclick="proceed_to_next()">
                                <span class="d-none d-sm-inline"><?php echo e(\App\CPU\translate('proceed_payment')); ?></span>
                                <span class="d-inline d-sm-none"><?php echo e(\App\CPU\translate('Next')); ?></span>
                                <i class="czi-arrow-<?php echo e(Session::get('direction') === "rtl" ? 'left' : 'right'); ?> mt-sm-0 mx-1"></i>
                            </a>
                        </div>
                    </div>
                    <!-- Sidebar-->
                </div>
            </section>
            <div class="d-none d-md-block col-lg-4">
                <?php echo $__env->make('web-views.partials._order-summary', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>
<script>
    $( function() {
            $( "#datepicker" ).datepicker({ minDate: +1, dateFormat: 'DD, dd MM yy' });
            $("#datepicker").on('change', function(){
                var date = $('#datepicker').val()
                var convert = new Date(date)
                var year = convert.getFullYear();
                var dates = convert.getDate();
                var month = ((convert.getMonth() + 1) < 10 ? '0' : '') + (convert.getMonth() + 1);
                var fullDate = year + '-' + month + '-' + dates
                console.log(fullDate)
                $("#dateBackend").attr('value', fullDate)


            })
        }
    );

    $(document).ready(function(){
        //ini ketika provinsi tujuan di klik maka akan eksekusi perintah yg kita mau
        //name select nama nya "provinve_id" kalian bisa sesuaikan dengan form select kalian
        var hari = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"]
        var bulan = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "Sepetember", "Oktober", "November", "Desember"]
        var now = new Date();
        now.setDate(new Date().getDate() + 1)

        var tanggal = now.getDate()
        var day = hari[now.getDay()]
        var month = bulan[now.getMonth()]
        var year = now.getFullYear()
        $("#datepicker").attr('placeholder', day + ', ' + tanggal + " " + month + ' ' + year)
        $("#dateBackend").attr('value', now.getFullYear()+'-'+(now.getMonth() + 1)+'-'+now.getDate());

        $('select[name="state"]').on('change', function(){
            if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)){
                        $('#loading').addClass('loading-mobile');
                    }
            $('#loading').show();
            // kita buat variable provincedid untk menampung data id select province
            console.log($(this).val())
            let prov = $(this).val();
            var array = prov.split(",");
            let provin = $.each(array,function(i){
                console.log(prov);
            // console.log(array[0]);
            return array[0]
            });
            let provinceid = provin[0]
            //kita cek jika id di dpatkan maka apa yg akan kita eksekusi
            if(provinceid){
                // jika di temukan id nya kita buat eksekusi ajax GET
                jQuery.ajax({
                    // url yg di root yang kita buat tadi
                    url:"/city/"+provinceid,
                    // aksion GET, karena kita mau mengambil data
                    type:'GET',
                    // type data json
                    dataType:'json',
                    // jika data berhasil di dapat maka kita mau apain nih
                    success:function(data){
                        console.log(provinceid);
                        // jika tidak ada select dr provinsi maka select kota kososng / empty
                        $('select[name="city"]').empty();
                        // // jika ada kita looping dengan each
                        $.each(data, function(key, value){
                            // console.log(key, value)
                            kota = value.city_name
                            type = value.type
                            id = value.city_id
                            type = value.type
                        // // perhtikan dimana kita akan menampilkan data select nya, di sini saya memberi name select kota adalah kota_id
                        $('select[name="city"]').append(`<option value="${id},${kota},${type}">
                            ${kota} (${type})
                        </option>`);

                        $('select[name="city"]').removeAttr('disabled');
                        $('#loading').hide();
                        if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)){
                        $('#loading').removeClass('loading-mobile');
                    }
                        });
                    }
                });
            }
        });

        $('select[name="city"]').on('change', function(){
            if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)){
                        $('#loading').addClass('loading-mobile');
                    }
            $('#loading').show();
            // kita buat variable provincedid untk menampung data id select province
            console.log($(this).val())
            let cities = $(this).val();
            var array = cities.split(",");
            let city = $.each(array,function(i){
            // console.log(array[0]);
            return array[0]
            });
            let cityId = city[0]
            //kita cek jika id di dpatkan maka apa yg akan kita eksekusi
            if(cityId){
                // jika di temukan id nya kita buat eksekusi ajax GET
                jQuery.ajax({
                    // url yg di root yang kita buat tadi
                    url:"/district/"+cityId,
                    // aksion GET, karena kita mau mengambil data
                    type:'GET',
                    // type data json
                    dataType:'json',
                    // jika data berhasil di dapat maka kita mau apain nih
                    success:function(data){
                        console.log(cityId);
                        // jika tidak ada select dr provinsi maka select kota kososng / empty
                        $('select[name="district"]').empty();
                        // // jika ada kita looping dengan each
                        $.each(data, function(key, value){
                            // console.log(key, value)
                            district = value.subdistrict_name
                            id = value.subdistrict_id
                        // // perhtikan dimana kita akan menampilkan data select nya, di sini saya memberi name select kota adalah kota_id
                        $('select[name="district"]').append(`<option value="${id},${district}">
                            ${district}
                        </option>`);

                        $('select[name="district"]').removeAttr('disabled');
                        $('#loading').hide();
                        if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)){
                        $('#loading').removeClass('loading-mobile');
                    }
                        });
                    }
                });
            }
        });
    });

</script>
    <script>
        function anotherAddress() {
            $('#sh-0').prop('checked', true);
            $("#collapseThree").collapse();
        }
    </script>

    <script>
        function proceed_to_next() {

            let allAreFilled = true;
            document.getElementById("address-form").querySelectorAll("[required]").forEach(function (i) {
                if (!allAreFilled) return;
                if (!i.value) allAreFilled = false;
                if (i.type === "radio") {
                    let radioValueCheck = false;
                    document.getElementById("address-form").querySelectorAll(`[name=${i.name}]`).forEach(function (r) {
                        if (r.checked) radioValueCheck = true;
                    });
                    allAreFilled = radioValueCheck;
                }
            });

            // console.log($('#address-form').serialize());


            if (allAreFilled) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.post({
                    url: '<?php echo e(route('customer.choose-shipping-address')); ?>',
                    method: 'POST',
                    dataType: 'json',
                    data: $('#address-form').serialize(),
                    beforeSend: function () {
                        if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)){
                        $('#loading').addClass('loading-mobile');
                    }
                        $('#loading').show();
                    },
                    success: function (data) {
                        if (data.errors) {
                            for (var i = 0; i < data.errors.length; i++) {
                                toastr.error(data.errors[i].message, {
                                    CloseButton: true,
                                    ProgressBar: true
                                });
                            }
                        } else {
                            location.href = '<?php echo e(route('checkout-payment')); ?>';
                        }
                    },
                    complete: function () {
                        $('#loading').hide();
                        if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)){
                        $('#loading').removeClass('loading-mobile');
                    }
                    },
                    error: function () {
                        toastr.error('<?php echo e(\App\CPU\translate('Something went wrong!')); ?>', {
                            CloseButton: true,
                            ProgressBar: true
                        });
                    }
                });
            } else {
                toastr.error('<?php echo e(\App\CPU\translate('Please fill all required fields')); ?>', {
                    CloseButton: true,
                    ProgressBar: true
                });
            }
        }
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.front-end.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mh/code/project.co/Tigatech/umkm-shop/resources/views/web-views/checkout-shipping.blade.php ENDPATH**/ ?>