<?php $__env->startSection('title', \App\CPU\translate('Verify')); ?>

<?php $__env->startPush('css_or_js'); ?>
    <style>
        @media(max-width:500px){
            #sign_in{
                margin-top: -23% !important;
            }

        }
    </style>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container py-4 py-lg-5 my-4">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card border-0 box-shadow">
                    <div class="card-body">
                        <div class="text-center">
                            <h2 class="h4 mb-1"><?php echo e(\App\CPU\translate('one_step_ahead')); ?></h2>
                            <p class="font-size-sm text-muted mb-4"><?php echo e(\App\CPU\translate('verify_information_to_continue')); ?>.</p>
                        </div>
                        <form class="needs-validation_" id="sign-up-form" action="<?php echo e(route('customer.auth.verify')); ?>"
                              method="post">
                            <?php echo csrf_field(); ?>
                            <div class="col-sm-12">
                                <?php ($email_verify_status = \App\CPU\Helpers::get_business_settings('email_verification')); ?>
                                <?php ($phone_verify_status = \App\CPU\Helpers::get_business_settings('phone_verification')); ?>
                                <div class="form-group">
                                    <?php if(\App\CPU\Helpers::get_business_settings('email_verification')): ?>
                                        <label for="reg-phone" class="text-primary">
                                            *
                                            <?php echo e(\App\CPU\translate('please')); ?>

                                            <?php echo e(\App\CPU\translate('provide')); ?>

                                            <?php echo e(\App\CPU\translate('verification')); ?>

                                            <?php echo e(\App\CPU\translate('token')); ?>

                                            <?php echo e(\App\CPU\translate('sent_in_your_email')); ?>

                                        </label>
                                    <?php elseif(\App\CPU\Helpers::get_business_settings('phone_verification')): ?>
                                        <label for="reg-phone" class="text-primary">
                                            *
                                            <?php echo e(\App\CPU\translate('please')); ?>

                                            <?php echo e(\App\CPU\translate('provide')); ?>

                                            <?php echo e(\App\CPU\translate('OTP')); ?>

                                            <?php echo e(\App\CPU\translate('sent_in_your_phone')); ?>

                                        </label>
                                    <?php else: ?>
                                        <label for="reg-phone" class="text-primary">* <?php echo e(\App\CPU\translate('verification_code')); ?> / <?php echo e(\App\CPU\translate('OTP')); ?></label>
                                    <?php endif; ?>
                                    <input class="form-control" type="text" name="token" required>
                                </div>
                            </div>
                            <input type="hidden" value="<?php echo e($user->id); ?>" name="id">
                            <button type="submit" class="btn btn-outline-primary"><?php echo e(\App\CPU\translate('verify')); ?></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>



<?php $__env->startPush('script'); ?>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.front-end.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mh/code/project.co/Tigatech/umkm-shop/resources/views/customer-view/auth/verify.blade.php ENDPATH**/ ?>