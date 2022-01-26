<div class="mobile-footer d-block d-md-none" id="mobile-footer">
    <div class="unf-bottomnav css-15iqbvc">
        <a class="css-11rf802" href="<?php echo e(route('home')); ?>">
            <div class="css-mw28ox"><img width="24" height="24"
                    src="https://assets.tokopedia.net/assets-tokopedia-lite/v2/atreus/kratos/20f068ca.svg" alt="home"
                    class="css-mw28ox"></div>Home
        </a>
        <a class="css-11rf802" href="<?php echo e(route('wishlists')); ?>">
            <div class="css-mw28ox"><img width="24" height="24"
                    src="https://assets.tokopedia.net/assets-tokopedia-lite/v2/atreus/kratos/eb6fad37.svg"
                    alt="wishlist" class="css-mw28ox"></div>Wish List
        </a>
        <a class="css-11rf802" href="<?php echo e(route('account-oder')); ?>" data-cy="bottomnavFeed" id="bottomnavFeed"
            data-testid="icnFooterFeed">
            <div class="css-mw28ox"><img width="24" height="24"
                    src="https://assets.tokopedia.net/assets-tokopedia-lite/v2/atreus/kratos/66eb4811.svg" alt="feed"
                    class="css-mw28ox"></div>Transaksi
        </a>
        <?php if(auth('customer')->check()): ?>
        <div class="dropdown">
            <a class="css-11rf802" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="text-transform: capitalize">
                <div class="">
                    <div class="">
                        <img style="width: 24px;height: 24px"
                            src="<?php echo e(asset('storage/app/public/profile/'.auth('customer')->user()->image)); ?>"
                            onerror="this.src='<?php echo e(asset('public/assets/front-end/img/image-place-holder.png')); ?>'"
                            class="img-profile rounded-circle">
                    </div>
                </div>
                <?php echo e(auth('customer')->user()->f_name); ?>

            </a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="<?php echo e(route('account-address')); ?>"> <?php echo e(\App\CPU\translate('my_address')); ?> </a>
                <a class="dropdown-item" href="<?php echo e(route('account-tickets')); ?>"> <?php echo e(\App\CPU\translate('my_tickets')); ?> </a>
                <a class="dropdown-item" href="<?php echo e(route('user-account')); ?>"> <?php echo e(\App\CPU\translate('my_profile')); ?></a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?php echo e(route('customer.auth.logout')); ?>"><?php echo e(\App\CPU\translate('logout')); ?></a>
            </div>
        </div>
        <?php else: ?>
        <div class="dropdown">
            <a class="css-11rf802" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="">
                    <div class="">
                        <i class="czi-user" style="font-size: 20px; color: #2e3137;"></i>
                    </div>
                </div>
                Akun
            </a>
            <div class="dropdown-menu bg-white" aria-labelledby="dropdownMenuButton"
                style="text-align: <?php echo e(Session::get('direction') === " rtl" ? 'right' : 'left'); ?>;">
                <a class="dropdown-item" href="<?php echo e(route('customer.auth.login')); ?>">
                    <i class="fa fa-sign-in <?php echo e(Session::get('direction') === " rtl" ? 'ml-2' : 'mr-2'); ?>"></i>
                    <?php echo e(\App\CPU\translate('sign_in')); ?>

                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?php echo e(route('customer.auth.register')); ?>">
                    <i class="fa fa-user-circle <?php echo e(Session::get('direction') === " rtl" ? 'ml-2' : 'mr-2'); ?>"></i><?php echo e(\App\CPU\translate('sign_up')); ?>

                </a>
            </div>
        </div>
        <?php endif; ?>
    </div>
</div>
<?php /**PATH /home/mh/code/project.co/Tigatech/umkm-shop/resources/views/layouts/front-end/partials/_mobile_footer.blade.php ENDPATH**/ ?>