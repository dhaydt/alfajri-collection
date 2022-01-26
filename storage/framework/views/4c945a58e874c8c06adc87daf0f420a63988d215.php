<?php $__env->startSection('title',\App\CPU\translate('Choose Payment Method')); ?>

<?php $__env->startPush('css_or_js'); ?>
    <style>
        .payment-type {
            background-color: transparent;
            border: none;
        }

        .payment-type span {
            border-bottom: none;
        }

        .payment-type .card-body {
            padding-bottom: 0.25rem;
        }
        .stripe-button-el {
            display: none !important;
        }

        .razorpay-payment-button {
            display: none !important;
        }

        .mobile-payment {
            margin-top: 20px;
        }
        .indomaret {
            max-width: 200px;
            margin-top: -15px !important;
            min-width: 200px;
        }

        @media(max-width: 400px){
            button.btn .indomaret {
                max-width: 125px;
                margin-top: -8px !important;
                min-width: 125px;
                margin-left: -4px;
            }
        }

        @media(max-width: 600px){
            .payment-type.wallet, .payment-type.virtual {
                height: 250px;
            }

            .payment-type.retail, .payment-type.other {
                height: 145px;
            }

            .payment-type.other {
                margin-bottom: 20px;
            }
            .indomaret {
                max-width: 140px;
                margin-top: -8px !important;
                min-width: 140px;
            }
            .card-body {
                display: flex;
                align-items: center;
                height: 80px !important;
            }

            .card-body .btn-block {
                padding: 0;
                margin-top: -11px;
            }
            .mobile-payment {
                margin-top: -40px;
            }
            .mobile-checkout-payment{
                position: fixed;
                left: 0;
                right: 0;
                bottom: 0;
                padding: 10px;
                background-color: #fff;
            }
        }
    </style>

    
    <script src="https://polyfill.io/v3/polyfill.min.js?version=3.52.1&features=fetch"></script>
    <script src="https://js.stripe.com/v3/"></script>
    
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <!-- Page Content-->
    <div class="container pb-5 mb-2 mb-md-4 rtl"
         style="text-align: <?php echo e(Session::get('direction') === "rtl" ? 'right' : 'left'); ?>;">
        <div class="row mobile-payment">
            

            <section class="col-lg-8">
                <div class="checkout_details mt-3">
                <?php echo $__env->make('web-views.partials._checkout-steps',['step'=>3], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <!-- Payment methods accordion-->
                <?php ($ship = App\Model\CartShipping::where('cart_group_id', session()->get('cart_group_id'))->first()); ?>
                <?php if($ship->shipping_cost !== "0.00"): ?>
                <h2 class="h6 pb-3 mb-2 mt-2"><?php echo e(\App\CPU\translate('choose_payment')); ?></h2>

                <div class="row justify-content-center">
                    <?php ($user = auth('customer')->user()); ?>
                <div class="payment-type wallet card w-100">
                    <span class="card-header py-1">E-Wallet</span>
                   <div class="card-body pb-1 row">
                        <div class="col-md-6 mb-4 col-6" style="cursor: pointer">
                            <div class="card">
                                <div class="card-body" style="height: 100px">
                                    <a class="btn btn-block"
                                        href="<?php echo e(route('checkout-complete',['payment_method'=>'OVO'])); ?>">
                                        <img width="150" style="margin-top: -10px"
                                                src="<?php echo e(asset('public/assets/front-end/img/ovo.png')); ?>"/>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 mb-4 col-6" style="cursor: pointer">
                            <div class="card">
                                <div class="card-body" style="height: 100px">
                                    <a class="btn btn-block"
                                        href="<?php echo e(route('checkout-complete',['payment_method'=>'DANA'])); ?>">
                                    <img width="150" style="margin-top: -10px"
                                        src="<?php echo e(asset('public/assets/front-end/img/dana.png')); ?>"/>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 mb-4 col-6" style="cursor: pointer">
                            <div class="card">
                                <div class="card-body" style="height: 100px">
                                    <a class="btn btn-block"
                                        href="<?php echo e(route('checkout-complete',['payment_method'=>'SHOPEEPAY'])); ?>">
                                    <img width="200" style="margin-top: 0px"
                                        src="<?php echo e(asset('public/assets/front-end/img/shopee-ready.png')); ?>"/>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 mb-4 col-6" style="cursor: pointer">
                            <div class="card">
                                <div class="card-body" style="height: 100px">
                                    <a class="btn btn-block"
                                        href="<?php echo e(route('checkout-complete',['payment_method'=>'LINKAJA'])); ?>">
                                    <img width="150" style="margin-top: -4px"
                                        src="<?php echo e(asset('public/assets/front-end/img/link-ready.png')); ?>"/>
                                    </a>
                                </div>
                            </div>
                        </div>
                   </div>
                </div>

                
                <div class="card virtual payment-type w-100">
                    <span class="card-header py-1">
                        <?php echo e(\App\CPU\translate('virtual_account')); ?>

                    </span>
                    <div class="card-body row">
                        <div class="col-md-6 mb-4 col-6" style="cursor: pointer">
                            <div class="card">
                                <div class="card-body" style="height: 100px">
                                    <a class="btn btn-block"
                                        href="<?php echo e(route('checkout-complete',['payment_method'=>'BCA'])); ?>">
                                        <img width="150" style="margin-top: -10px"
                                          src="<?php echo e(asset('public/assets/front-end/img/bca.png')); ?>"/>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 mb-4 col-6" style="cursor: pointer">
                            <div class="card">
                                <div class="card-body" style="height: 100px">
                                    <a class="btn btn-block"
                                        href="<?php echo e(route('checkout-complete',['payment_method'=>'BNI'])); ?>">
                                        <img width="150" style="margin-top: -10px"
                                        src="<?php echo e(asset('public/assets/front-end/img/bni.png')); ?>"/>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 mb-4 col-6" style="cursor: pointer">
                            <div class="card">
                                <div class="card-body" style="height: 100px">
                                    <a class="btn btn-block"
                                        href="<?php echo e(route('checkout-complete',['payment_method'=>'BRI'])); ?>">
                                        <img width="150" style="margin-top: -10px"
                                        src="<?php echo e(asset('public/assets/front-end/img/bri.png')); ?>"/>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 mb-4 col-6" style="cursor: pointer">
                            <div class="card">
                                <div class="card-body" style="height: 100px">
                                    <a class="btn btn-block"
                                        href="<?php echo e(route('checkout-complete',['payment_method'=>'MANDIRI'])); ?>">
                                        <img width="150" style="margin-top: -10px"
                                        src="<?php echo e(asset('public/assets/front-end/img/mandiri.png')); ?>"/>
                                    </a>
                                </div>
                            </div>
                        </div>

                        
                    </div>
                </div>

                
                <div class="card retail payment-type w-100">
                    <span class="card-header py-1">Retail</span>
                    <div class="card-body row">
                        <div class="col-md-6 mb-4 col-6" style="cursor: pointer">
                            <div class="card">
                                <div class="card-body" style="height: 100px">
                                    <a class="btn btn-block"
                                        href="<?php echo e(route('checkout-complete',['payment_method'=>'INDOMARET'])); ?>">
                                        <img width="150" style="margin-top: -10px"
                                        src="<?php echo e(asset('public/assets/front-end/img/indo.png')); ?>"/>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 mb-4 col-6" style="cursor: pointer">
                            <div class="card">
                                <div class="card-body" style="height: 100px">
                                    <a class="btn btn-block"
                                        href="<?php echo e(route('checkout-complete',['payment_method'=>'ALFAMART'])); ?>">
                                        <img width="150" style="margin-top: -10px"
                                        src="<?php echo e(asset('public/assets/front-end/img/alfa.png')); ?>"/>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                
                <div class="card other payment-type w-100">
                    <span class="card-header py-1"><?php echo e(\App\CPU\translate('other')); ?></span>
                    <div class="card-body row">
                        <div class="col-md-6 mb-4 col-6" style="cursor: pointer">
                            <div class="card">
                                <div class="card-body" style="height: 100px">
                                    <a class="btn btn-block"
                                        href="<?php echo e(route('checkout-complete',['payment_method'=>'QRIS'])); ?>">
                                        <img width="150" style="margin-top: -10px"
                                        src="<?php echo e(asset('public/assets/front-end/img/qris-ready.png')); ?>"/>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <?php ($config=\App\CPU\Helpers::get_business_settings('cash_on_delivery')); ?>
                        <?php if($config['status']): ?>
                            <div class="col-md-6 mb-4 col-6" style="cursor: pointer">
                                <div class="card">
                                    <div class="card-body" style="height: 100px">
                                        <a class="btn btn-block"
                                        href="<?php echo e(route('checkout-complete',['payment_method'=>'cash_on_delivery'])); ?>">
                                            <img width="150" style="margin-top: -10px"
                                                src="<?php echo e(asset('public/assets/front-end/img/cod.png')); ?>"/>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>


                    <?php ($coupon_discount = session()->has('coupon_discount') ? session('coupon_discount') : 0); ?>
                    <?php ($amount = \App\CPU\CartManager::cart_grand_total() - $coupon_discount); ?>

                    <?php ($config=\App\CPU\Helpers::get_business_settings('stripe')); ?>
                    <?php if($config['status']): ?>
                        <div class="col-md-6 mb-4" style="cursor: pointer">
                            <div class="card">
                                <div class="card-body" style="height: 100px">
                                    <button class="btn btn-block" type="button" id="checkout-button">
                                        <i class="czi-card"></i> <?php echo e(\App\CPU\translate('Credit / Debit card ( Stripe )')); ?>

                                    </button>
                                    <script type="text/javascript">
                                        // Create an instance of the Stripe object with your publishable API key
                                        var stripe = Stripe('<?php echo e($config['published_key']); ?>');
                                        var checkoutButton = document.getElementById("checkout-button");
                                        checkoutButton.addEventListener("click", function () {
                                            fetch("<?php echo e(route('pay-stripe')); ?>", {
                                                method: "GET",
                                            }).then(function (response) {
                                                console.log(response)
                                                return response.text();
                                            }).then(function (session) {
                                                /*console.log(JSON.parse(session).id)*/
                                                return stripe.redirectToCheckout({sessionId: JSON.parse(session).id});
                                            }).then(function (result) {
                                                if (result.error) {
                                                    alert(result.error.message);
                                                }
                                            }).catch(function (error) {
                                                console.error("<?php echo e(\App\CPU\translate('Error')); ?>:", error);
                                            });
                                        });
                                    </script>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>

                    <?php ($config=\App\CPU\Helpers::get_business_settings('razor_pay')); ?>
                    <?php ($inr=\App\Model\Currency::where(['symbol'=>'₹'])->first()); ?>
                    <?php ($usd=\App\Model\Currency::where(['code'=>'USD'])->first()); ?>
                    <?php if(isset($inr) && isset($usd) && $config['status']): ?>
                        <div class="col-md-6 mb-4" style="cursor: pointer">
                            <div class="card">
                                <div class="card-body" style="height: 100px">
                                    <form action="<?php echo route('payment-razor'); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <!-- Note that the amount is in paise = 50 INR -->
                                        <!--amount need to be in paisa-->
                                        <script src="https://checkout.razorpay.com/v1/checkout.js"
                                                data-key="<?php echo e(\Illuminate\Support\Facades\Config::get('razor.razor_key')); ?>"
                                                data-amount="<?php echo e((round(\App\CPU\Convert::usdToinr($amount)))*100); ?>"
                                                data-buttontext="Pay <?php echo e((\App\CPU\Convert::usdToinr($amount))*100); ?> INR"
                                                data-name="<?php echo e(\App\Model\BusinessSetting::where(['type'=>'company_name'])->first()->value); ?>"
                                                data-description=""
                                                data-image="<?php echo e(asset('storage/app/public/company/'.\App\Model\BusinessSetting::where(['type'=>'company_web_logo'])->first()->value)); ?>"
                                                data-prefill.name="<?php echo e(auth('customer')->user()->f_name); ?>"
                                                data-prefill.email="<?php echo e(auth('customer')->user()->email); ?>"
                                                data-theme.color="#ff7529">
                                        </script>
                                    </form>
                                    <button class="btn btn-block" type="button"
                                            onclick="$('.razorpay-payment-button').click()">
                                        <img width="150"
                                             src="<?php echo e(asset('public/assets/front-end/img/razor.png')); ?>"/>
                                    </button>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>


                    <?php ($config=\App\CPU\Helpers::get_business_settings('paystack')); ?>
                    <?php if($config['status']): ?>
                        <div class="col-md-6 mb-4" style="cursor: pointer">
                            <div class="card">
                                <div class="card-body" style="height: 100px">
                                    <?php ($config=\App\CPU\Helpers::get_business_settings('paystack')); ?>
                                    <?php ($order=\App\Model\Order::find(session('order_id'))); ?>
                                    <form method="POST" action="<?php echo e(route('paystack-pay')); ?>" accept-charset="UTF-8"
                                          class="form-horizontal"
                                          role="form">
                                        <?php echo csrf_field(); ?>
                                        <div class="row">
                                            <div class="col-md-8 col-md-offset-2">
                                                <input type="hidden" name="email"
                                                       value="<?php echo e(auth('customer')->user()->email); ?>"> 
                                                <input type="hidden" name="orderID"
                                                       value="<?php echo e(session('cart_group_id')); ?>">
                                                <input type="hidden" name="amount"
                                                       value="<?php echo e(\App\CPU\Convert::usdTozar($amount*100)); ?>"> 
                                                <input type="hidden" name="quantity" value="1">
                                                <input type="hidden" name="currency"
                                                       value="ZAR">
                                                <input type="hidden" name="metadata"
                                                       value="<?php echo e(json_encode($array = ['key_name' => 'value',])); ?>"> 
                                                <input type="hidden" name="reference"
                                                       value="<?php echo e(Paystack::genTranxRef()); ?>"> 
                                                <p>
                                                    <button class="paystack-payment-button" style="display: none"
                                                            type="submit"
                                                            value="Pay Now!"></button>
                                                </p>
                                            </div>
                                        </div>
                                    </form>
                                    <button class="btn btn-block" type="button"
                                            onclick="$('.paystack-payment-button').click()">
                                        <img width="100"
                                             src="<?php echo e(asset('public/assets/front-end/img/paystack.png')); ?>"/>
                                    </button>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>


                    <?php ($myr=\App\Model\Currency::where(['code'=>'MYR'])->first()); ?>
                    <?php ($usd=\App\Model\Currency::where(['code'=>'usd'])->first()); ?>
                    <?php ($config=\App\CPU\Helpers::get_business_settings('senang_pay')); ?>
                    <?php if(isset($myr) && isset($usd) && $config['status']): ?>
                        <div class="col-md-6 mb-4" style="cursor: pointer">
                            <div class="card">
                                <div class="card-body" style="height: 100px">
                                    <?php ($config=\App\CPU\Helpers::get_business_settings('senang_pay')); ?>
                                    <?php ($user=auth('customer')->user()); ?>
                                    <?php ($secretkey = $config['secret_key']); ?>
                                    <?php ($data = new \stdClass()); ?>
                                    <?php ($data->merchantId = $config['merchant_id']); ?>
                                    <?php ($data->detail = 'payment'); ?>
                                    <?php ($data->order_id = session('cart_group_id')); ?>
                                    <?php ($data->amount = \App\CPU\Convert::usdTomyr($amount)); ?>
                                    <?php ($data->name = $user->f_name.' '.$user->l_name); ?>
                                    <?php ($data->email = $user->email); ?>
                                    <?php ($data->phone = $user->phone); ?>
                                    <?php ($data->hashed_string = md5($secretkey . urldecode($data->detail) . urldecode($data->amount) . urldecode($data->order_id))); ?>

                                    <form name="order" method="post"
                                          action="https://<?php echo e(env('APP_MODE')=='live'?'app.senangpay.my':'sandbox.senangpay.my'); ?>/payment/<?php echo e($config['merchant_id']); ?>">
                                        <input type="hidden" name="detail" value="<?php echo e($data->detail); ?>">
                                        <input type="hidden" name="amount" value="<?php echo e($data->amount); ?>">
                                        <input type="hidden" name="order_id" value="<?php echo e($data->order_id); ?>">
                                        <input type="hidden" name="name" value="<?php echo e($data->name); ?>">
                                        <input type="hidden" name="email" value="<?php echo e($data->email); ?>">
                                        <input type="hidden" name="phone" value="<?php echo e($data->phone); ?>">
                                        <input type="hidden" name="hash" value="<?php echo e($data->hashed_string); ?>">
                                    </form>

                                    <button class="btn btn-block" type="button"
                                            onclick="document.order.submit()">
                                        <img width="100"
                                             src="<?php echo e(asset('public/assets/front-end/img/senangpay.png')); ?>"/>
                                    </button>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>


                    <?php ($config=\App\CPU\Helpers::get_business_settings('paymob_accept')); ?>
                    <?php if($config['status']): ?>
                        <div class="col-md-6 mb-4" style="cursor: pointer">
                            <div class="card">
                                <div class="card-body" style="height: 100px">
                                    <form class="needs-validation" method="POST" id="payment-form-paymob"
                                          action="<?php echo e(route('paymob-credit')); ?>">
                                        <?php echo e(csrf_field()); ?>

                                        <button class="btn btn-block" type="submit">
                                            <img width="150"
                                                 src="<?php echo e(asset('public/assets/front-end/img/paymob.png')); ?>"/>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>


                    <?php ($config=\App\CPU\Helpers::get_business_settings('bkash')); ?>
                    <?php if(isset($config)  && $config['status']): ?>
                        <div class="col-md-6 mb-4" style="cursor: pointer">
                            <div class="card">
                                <div class="card-body" style="height: 100px">
                                    <button class="btn btn-block" id="bKash_button" onclick="BkashPayment()">
                                        <img width="100" src="<?php echo e(asset('public/assets/front-end/img/bkash.png')); ?>"/>
                                    </button>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>

                    <?php ($config=\App\CPU\Helpers::get_business_settings('paytabs')); ?>
                    <?php if(isset($config)  && $config['status']): ?>
                        <div class="col-md-6 mb-4" style="cursor: pointer">
                            <div class="card">
                                <div class="card-body" style="height: 100px">
                                    <button class="btn btn-block"
                                            onclick="location.href='<?php echo e(route('paytabs-payment')); ?>'"
                                            style="margin-top: -11px">
                                        <img width="150"
                                             src="<?php echo e(asset('public/assets/front-end/img/paytabs.png')); ?>"/>
                                    </button>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
                <?php else: ?>
                <?php ($shippingMethod=\App\CPU\Helpers::get_business_settings('shipping_method')); ?>
                <?php ($cart=\App\Model\Cart::where(['customer_id' => auth('customer')->id()])->get()->groupBy('cart_group_id')); ?>
                <div class="row">
                    <!-- List of items-->
                    <div class="cart_information px-4 col-md-12 mb-4">
                            <!-- Payment methods accordion-->
                            <h2 class="h6 w-100 mt-5" style="color: red; font-size: 12px;"><?php echo e(\App\CPU\translate('Because_you_changed_the_address')); ?></h2>
                            <h2 class="h6 pb-3 mb-2"><?php echo e(\App\CPU\translate('Please_choose_the_shipping_method_again')); ?></h2>
                            <?php $__currentLoopData = $cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $group_key=>$group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php $__currentLoopData = $group; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart_key=>$cartItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                    <?php if($cart_key==$group->count()-1): ?>
                                    <!-- choosen shipping method-->
                            <?php ($choosen_shipping=\App\Model\CartShipping::where(['cart_group_id'=>$cartItem['cart_group_id']])->first()); ?>
                            <?php if(isset($choosen_shipping)==false): ?>
                            <?php ($choosen_shipping['shipping_method_id']=0); ?>
                            <?php endif; ?>

                            <?php if($shippingMethod=='sellerwise_shipping'): ?>
                            <?php ($shippings=\App\CPU\Helpers::get_shipping_methods($cartItem['seller_id'],$cartItem['seller_is'],$cartItem['product_id'])); ?>
                            <div class="row">
                                
                                <div class="col-12">
                                    <select class="form-control"
                                        onchange="set_shipping_id(this.value,'<?php echo e($cartItem['cart_group_id']); ?>')">
                                        <option><?php echo e(\App\CPU\translate('choose_shipping_method')); ?></option>
                                        <?php if($shippings[0][0][0]['costs']): ?>
                                        <?php $__currentLoopData = $shippings[0][0][0]['costs']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ship): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        
                                        <option value="<?php echo e('JNE-'.$ship['service'].','.$ship['cost'][0]['value']); ?>"
                                            <?php echo e($choosen_shipping['shipping_method_id']==$ship['service']?'selected':''); ?>>
                                            <?php echo e("JNE - ".''.$ship['service'].' ( '.$ship['cost'][0]['etd'].' Days)
                                           '.\App\CPU\Helpers::currency_converter(\App\CPU\Convert::idrTousd($ship['cost'][0]['value']))); ?>

                                        </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endif; ?>

                                        <?php if($shippings[0][1][0]['costs']): ?>
                                        <?php $__currentLoopData = $shippings[0][1][0]['costs']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ship): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        
                                       <option value="<?php echo e('TIKI- '.$ship['service'].','.$ship['cost'][0]['value']); ?>"
                                            <?php echo e($choosen_shipping['shipping_method_id']==$ship['service']?'selected':''); ?>>
                                            <?php echo e("TIKI - ".''.$ship['service'].' ( '.$ship['cost'][0]['etd'].' Days)
                                           '.\App\CPU\Helpers::currency_converter(\App\CPU\Convert::idrTousd($ship['cost'][0]['value']))); ?>

                                        </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endif; ?>

                                        <?php if($shippings[0][2][0]['costs']): ?>
                                        <?php $__currentLoopData = $shippings[0][2][0]['costs']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ship): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        
                                        <option value="<?php echo e('SiCepat- '.$ship['service'].','.$ship['cost'][0]['value']); ?>"
                                            <?php echo e($choosen_shipping['shipping_method_id']==$ship['service']?'selected':''); ?>>
                                            <?php echo e("SiCepat - ".''.$ship['service'].' ( '.$ship['cost'][0]['etd'].' Days)
                                           '.\App\CPU\Helpers::currency_converter(\App\CPU\Convert::idrTousd($ship['cost'][0]['value']))); ?>

                                        </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endif; ?>
                                        <?php $__currentLoopData = $shippings[1]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $shipping): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($shipping['id']); ?>"
                                            <?php echo e($choosen_shipping['shipping_method_id']==$shipping['id']?'selected':''); ?>>
                                            <?php echo e($shipping['title'].' ( '.$shipping['duration'].' )
                                            '.\App\CPU\Helpers::currency_converter($shipping['cost'])); ?>

                                        </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>
                            <?php endif; ?>
                            <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <div class="mt-3"></div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                <?php ($coupon_discount = session()->has('coupon_discount') ? session('coupon_discount') : 0); ?>
                <?php ($amount = \App\CPU\CartManager::cart_grand_total() - $coupon_discount); ?>
                <?php endif; ?>

                    <!-- Navigation (desktop)-->
                    <div class="row mobile-checkout-payment">
                        <div class="col-4 d-none d-md-block"></div>
                        <div class="col-12 col-md-4">
                            <a class="btn btn-secondary btn-block" href="<?php echo e(route('checkout-details')); ?>">
                                <span class="d-none d-sm-inline"><?php echo e(\App\CPU\translate('Back to Shipping')); ?></span>
                                <span class="d-inline d-sm-none"><?php echo e(\App\CPU\translate('Back')); ?></span>
                            </a>
                        </div>
                        <div class="col-4 d-none d-md-block"></div>
                    </div>
                </div>
            </section>
            <!-- Sidebar-->
            <div class="d-none d-md-block col-lg-4">
                <?php echo $__env->make('web-views.partials._order-summary', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>

    <?php if(env('APP_MODE')=='live'): ?>
        <script id="myScript"
                src="https://scripts.pay.bka.sh/versions/1.2.0-beta/checkout/bKash-checkout.js"></script>
    <?php else: ?>
        <script id="myScript"
                src="https://scripts.sandbox.bka.sh/versions/1.2.0-beta/checkout/bKash-checkout-sandbox.js"></script>
    <?php endif; ?>

    <script>
        setTimeout(function () {
            $('.stripe-button-el').hide();
            $('.razorpay-payment-button').hide();
        }, 10)
    </script>


<script>
    cartQuantityInitialize();

    function set_shipping_id(id, cart_group_id) {
        $.get({
            url: '<?php echo e(url('/')); ?>/customer/set-shipping-method',
            dataType: 'json',
            data: {
                id: id,
                cart_group_id: cart_group_id
            },
            beforeSend: function () {
                if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)){
                        $('#loading').addClass('loading-mobile');
                    }
                $('#loading').show();
            },
            success: function (data) {
                location.reload();
            },
            complete: function () {
                $('#loading').hide();
                if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)){
                        $('#loading').removeClass('loading-mobile');
                    }
            },
        });
    }
</script>


    <script type="text/javascript">
        function BkashPayment() {
            if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)){
                        $('#loading').addClass('loading-mobile');
                    }
            $('#loading').show();
            // get token
            $.ajax({
                url: "<?php echo e(route('bkash-get-token')); ?>",
                type: 'POST',
                contentType: 'application/json',
                success: function (data) {
                    $('#loading').hide();
                    if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)){
                        $('#loading').removeClass('loading-mobile');
                    }
                    $('pay-with-bkash-button').trigger('click');
                    if (data.hasOwnProperty('msg')) {
                        showErrorMessage(data) // unknown error
                    }
                },
                error: function (err) {
                    $('#loading').hide();
                    showErrorMessage(err);
                }
            });
        }

        let paymentID = '';
        bKash.init({
            paymentMode: 'checkout',
            paymentRequest: {},
            createRequest: function (request) {
                setTimeout(function () {
                    createPayment(request);
                }, 2000)
            },
            executeRequestOnAuthorization: function (request) {
                $.ajax({
                    url: '<?php echo e(route('bkash-execute-payment')); ?>',
                    type: 'POST',
                    contentType: 'application/json',
                    data: JSON.stringify({
                        "paymentID": paymentID
                    }),
                    success: function (data) {
                        if (data) {
                            if (data.paymentID != null) {
                                BkashSuccess(data);
                            } else {
                                showErrorMessage(data);
                                bKash.execute().onError();
                            }
                        } else {
                            $.get('<?php echo e(route('bkash-query-payment')); ?>', {
                                payment_info: {
                                    payment_id: paymentID
                                }
                            }, function (data) {
                                if (data.transactionStatus === 'Completed') {
                                    BkashSuccess(data);
                                } else {
                                    createPayment(request);
                                }
                            });
                        }
                    },
                    error: function (err) {
                        bKash.execute().onError();
                    }
                });
            },
            onClose: function () {
                // for error handle after close bKash Popup
            }
        });

        function createPayment(request) {
            // because of createRequest function finds amount from this request
            request['amount'] = "<?php echo e(round(\App\CPU\Convert::usdTobdt($amount),2)); ?>"; // max two decimal points allowed
            $.ajax({
                url: '<?php echo e(route('bkash-create-payment')); ?>',
                data: JSON.stringify(request),
                type: 'POST',
                contentType: 'application/json',
                success: function (data) {
                    $('#loading').hide();
                    if (data && data.paymentID != null) {
                        paymentID = data.paymentID;
                        bKash.create().onSuccess(data);
                    } else {
                        bKash.create().onError();
                    }
                },
                error: function (err) {
                    $('#loading').hide();
                    showErrorMessage(err.responseJSON);
                    bKash.create().onError();
                }
            });
        }

        function BkashSuccess(data) {
            $.post('<?php echo e(route('bkash-success')); ?>', {
                payment_info: data
            }, function (res) {
                <?php if(session()->has('payment_mode') && session('payment_mode') == 'app'): ?>
                    location.href = '<?php echo e(route('payment-success')); ?>';
                <?php else: ?>
                    location.href = '<?php echo e(route('order-placed')); ?>';
                <?php endif; ?>
            });
        }

        function showErrorMessage(response) {
            let message = 'Unknown Error';
            if (response.hasOwnProperty('errorMessage')) {
                let errorCode = parseInt(response.errorCode);
                let bkashErrorCode = [2001, 2002, 2003, 2004, 2005, 2006, 2007, 2008, 2009, 2010, 2011, 2012, 2013, 2014,
                    2015, 2016, 2017, 2018, 2019, 2020, 2021, 2022, 2023, 2024, 2025, 2026, 2027, 2028, 2029, 2030,
                    2031, 2032, 2033, 2034, 2035, 2036, 2037, 2038, 2039, 2040, 2041, 2042, 2043, 2044, 2045, 2046,
                    2047, 2048, 2049, 2050, 2051, 2052, 2053, 2054, 2055, 2056, 2057, 2058, 2059, 2060, 2061, 2062,
                    2063, 2064, 2065, 2066, 2067, 2068, 2069, 503,
                ];
                if (bkashErrorCode.includes(errorCode)) {
                    message = response.errorMessage
                }
            }
            Swal.fire("Payment Failed!", message, "error");
        }
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.front-end.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mh/code/project.co/Tigatech/umkm-shop/resources/views/web-views/checkout-payment.blade.php ENDPATH**/ ?>