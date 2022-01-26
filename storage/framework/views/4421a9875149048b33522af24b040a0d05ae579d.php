
<style>
    .loc-div {
        min-width: 135px !important;
    }
    .span-cat::after{
        display: none;
    }
    .mobile-head .navbar.navbar-dark{
        background-color: <?php echo e($web_config['primary_color']); ?>;
    }

    .cate-mobile::after {
        display: none
    }

    .just-padding {
        padding: 15px;
        border: 1px solid #ccccccb3;
        border-bottom-left-radius: 5px;
        border-bottom-right-radius: 5px;
        height: 100%;
        background-color: white;
    }

    .category-canva{
        position: absolute;
        left: -17vw;
        width: 83vw;
        /* display: block; */
    }

    .mega-right {
        left: 96%;
        top: -80%;
        padding-left: 50px;
        text-align: left;
        position: absolute;
    }
    #nav-global-location-slot {
        border: 2px solid transparent;
        /* padding: 10px;
        margin-right: 40px; */
        transition: .3s;
        cursor: pointer;
        border-radius: 4px;
    }
    #nav-global-location-slot:hover {
        border: 2px solid #0f0f0f;
    }

    .nav-line-1.nav-progressive-content {
        font-size: 14px;
        line-height: 14px;
        transition: .3s;
        height: 14px;
        color: #9d9d9d;
        font-weight: 700;
    }

    .nav-line-2.nav-progressive-content {
        font-size: 16px;
        font-weight: 700;
        transition: .3s;
    }

  .card-body.search-result-box {
    overflow: scroll;
    height: 400px;
    overflow-x: hidden;
  }

  .active .seller {
    font-weight: 700;
  }

  ul.navbar-nav.mega-nav .nav-item .nav-link {
    color: #000 !important;
  }

  .for-count-value {
    position: absolute;

    right: 0.6875rem;
    ;
    width: 1.25rem;
    height: 1.25rem;
    border-radius: 50%;

    color: {
        {
        $web_config['primary_color']
      }
    }

    ;

    font-size: .75rem;
    font-weight: 500;
    text-align: center;
    line-height: 1.25rem;
  }

  .count-value {
    width: 1.25rem;
    height: 1.25rem;
    border-radius: 50%;

    color: {
        {
        $web_config['primary_color']
      }
    }

    ;

    font-size: .75rem;
    font-weight: 500;
    text-align: center;
    line-height: 1.25rem;
  }

  @media (min-width: 992px) {
    .navbar-sticky.navbar-stuck .navbar-stuck-menu.show {
      display: block;
      height: 55px !important;
    }
  }

  @media (min-width: 768px) {
    .navbar-stuck-menu {
      background-color: {
          {
          $web_config['primary_color']
        }
      }

      ;
      line-height: 15px;
      padding-bottom: 6px;
    }

  }

  @media (max-width: 767px) {
    .search_button {
      background-color: transparent !important;
    }

    .search_button .input-group-text i {
      color: {
          {
          $web_config['primary_color']
        }
      }

       !important;
    }

    .navbar-expand-md .dropdown-menu>.dropdown>.dropdown-toggle {
      position: relative;

      padding- {
          {
          Session: :get('direction')==="rtl"? 'left': 'right'
        }
      }

      : 1.95rem;
    }

    .mega-nav1 {
      background: white;

      color: {
          {
          $web_config['primary_color']
        }
      }

       !important;
      border-radius: 3px;
    }

    .mega-nav1 .nav-link {
      color: {
          {
          $web_config['primary_color']
        }
      }

       !important;
    }
  }

  @media (max-width: 768px) {
    .tab-logo {
      width: 10rem;
    }
  }

  @media (max-width: 360px) {
    .mobile-head {
      padding: 3px;
    }
  }

  @media (max-width: 471px) {
    .navbar-brand img {}

    .mega-nav1 {
      background: white;
      color: #000 !important;
      border-radius: 3px;
    }

    .mega-nav1 .nav-link {
      color: #000 !important;
    }
  }
</style>

<header class="box-shadow-sm rtl d-none d-md-block">

  <div class="navbar-sticky bg-light mobile-head">
    <div class="navbar navbar-expand-md navbar-light">
      <div class="container ">
        <!--    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button> -->

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
          aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        

        <a class="navbar-brand d-none d-sm-block mr-0
          flex-shrink-0 tab-logo" href="<?php echo e(route('home')); ?>" style="min-width: 7rem;">
          <img width="250" height="60" style="height: 60px!important;"
                         src="<?php echo e(asset("storage/app/public/company")."/".$web_config['web_logo']->value); ?>"
                         onerror="this.src='<?php echo e(asset('public/assets/front-end/img/image-place-holder.png')); ?>'"
                         alt="<?php echo e($web_config['name']->value); ?>"/>
        </a>
        <a class="navbar-brand d-sm-none <?php echo e(Session::get('direction') === " rtl" ? 'ml-2' : 'mr-2'); ?>"
          href="<?php echo e(route('home')); ?>">
          <img width="100" height="60" style="height: 60px!important;" src="<?php echo e(asset("
            storage/app/public/company")."/".$web_config['mob_logo']->value); ?>"
          onerror="this.src='<?php echo e(asset('public/assets/front-end/img/image-place-holder.png')); ?>'"
          alt="<?php echo e($web_config['name']->value); ?>"/>
        </a>

      <!-- new search -->
          <div id="nav-global-location-slot" data-toggle="tooltip" data-placement="top" title="Location">
                    <span id="nav-global-location-data-modal-action" class="a-declarative nav-progressive-attribute">
                        <a id="nav-global-location-popover-link"
                            class="d-flex align-items-center nav-a nav-a-2 a-popover-trigger a-declarative nav-progressive-attribute"
                            tabindex="0">
                            <img class="mt-1 mr-1" style="height: 20px; width: auto;" src="<?php echo e(asset('public/assets/front-end/img/loc.png')); ?>" alt="">
                            <div class="mr-2 d-flex loc-div flex-column justify-content-center">
                                <span class="nav-line-1 nav-progressive-content">Area pengiriman</span>
                                <span class="nav-line-2 nav-progressive-content d-flex" id="auto-loc">
                                    
                                </span>
                            </div>
                        </a>
                    </span>
                </div>
        <div class="input-group-overlay d-none d-md-block" style="text-align: <?php echo e(Session::get('direction') === "
          rtl" ? 'right' : 'left'); ?>">
          <form action="<?php echo e(route('products')); ?>" type="submit" class="search_form">
            <input class="form-control appended-form-control search-bar-input" type="text" autocomplete="off"
              placeholder="<?php echo e(\App\CPU\translate('search')); ?>" name="name"
              style="border: 2px solid <?php echo e($web_config['primary_color']); ?>; border-radius: 50px; border-top-right-radius: 50px !important; border-bottom-right-radius: 50px !important;">
            <button class="input-group-append-overlay search_button" type="submit"
              style="border-radius: <?php echo e(Session::get('direction') === " rtl" ? '50px 0px 0px 50px; right: unset; left: 0'
              : '0px 50px 50px 0px; left: unset; right: 0'); ?>;">
              <span class="input-group-text" style="font-size: 20px;">
                <i class="czi-search text-white"></i>
              </span>
            </button>
            <input name="data_from" value="search" hidden>
            <input name="page" value="1" hidden>
            <diV class="card search-card"
              style="position: absolute;background: white;z-index: 999;width: 100%;display: none">
              <div class="card-body search-result-box" style="overflow:scroll; height:400px;overflow-x: hidden"></div>
            </diV>
          </form>
        </div>

        <!-- Toolbar-->
        <div class="navbar-toolbar d-flex flex-shrink-0 align-items-center">
          <div class="navbar-tool dropdown <?php echo e(Session::get('direction') === " rtl" ? 'mr-3' : 'ml-3'); ?>">
            <a class="navbar-tool-icon-box bg-secondary dropdown-toggle" href="<?php echo e(route('wishlists')); ?>">
              <span class="navbar-tool-label">
                <span class="countWishlist"><?php echo e(session()->has('wish_list')?count(session('wish_list')):0); ?></span>
              </span>
              <i class="navbar-tool-icon czi-heart"></i>
            </a>
          </div>
          <?php if(auth('customer')->check()): ?>
          <div class="dropdown">
            <a class="navbar-tool ml-2 mr-2 " type="button" data-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false">
              <div class="navbar-tool-icon-box bg-secondary">
                <div class="navbar-tool-icon-box bg-secondary">
                  <img style="width: 40px;height: 40px"
                    src="<?php echo e(asset('storage/app/public/profile/'.auth('customer')->user()->image)); ?>"
                    onerror="this.src='<?php echo e(asset('public/assets/front-end/img/image-place-holder.png')); ?>'"
                    class="img-profile rounded-circle">
                </div>
              </div>
              <div class="navbar-tool-text">
                <small>Hello, <?php echo e(auth('customer')->user()->f_name); ?></small>
                Dashboard
              </div>
            </a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="<?php echo e(route('account-oder')); ?>"> <?php echo e(\App\CPU\translate('my_order')); ?> </a>
              <a class="dropdown-item" href="<?php echo e(route('account-address')); ?>"> <?php echo e(\App\CPU\translate('my_address')); ?> </a>
              <a class="dropdown-item" href="<?php echo e(route('account-tickets')); ?>"> <?php echo e(\App\CPU\translate('my_tickets')); ?> </a>
              <a class="dropdown-item" href="<?php echo e(route('user-account')); ?>"> <?php echo e(\App\CPU\translate('my_profile')); ?></a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="<?php echo e(route('customer.auth.logout')); ?>"><?php echo e(\App\CPU\translate('logout')); ?></a>
            </div>
          </div>
          <?php else: ?>
          <div class="dropdown">
            <a class="navbar-tool <?php echo e(Session::get('direction') === " rtl" ? 'mr-3' : 'ml-3'); ?>" type="button"
              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="navbar-tool-icon-box bg-secondary">
                <div class="navbar-tool-icon-box bg-secondary">
                  <i class="navbar-tool-icon czi-user"></i>
                </div>
              </div>
            </a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"
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
          <div id="cart_items">
            <?php echo $__env->make('layouts.front-end.partials.cart', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
          </div>
        </div>
      </div>
    </div>

    
    <div class="navbar navbar-expand-md navbar-stuck-menu bg-light border-top d-none">
      <div class="container">
        <div class="collapse navbar-collapse" id="navbarCollapse" style="text-align: <?php echo e(Session::get('direction') === "
          rtl" ? 'right' : 'left'); ?>">

        <?php ($categories=\App\CPU\CategoryManager::parents()); ?>
          <ul class="navbar-nav mega-nav pr-2 pl-2 <?php echo e(Session::get('direction') === " rtl" ? 'ml-2' : 'mr-2'); ?>">
                        <!--web-->
                        <li class=" nav-item <?php echo e(!request()->is('/none')?'dropdown':''); ?>">
            <a class="nav-link dropdown-toggle <?php echo e(Session::get('direction') === " rtl" ? 'pr-0' : 'pl-0'); ?>" href="#"
              data-toggle="dropdown">
              <i class="czi-menu align-middle mt-n1"></i>
              <span style="margin-<?php echo e(Session::get('direction') === " rtl" ? 'right' : 'left'); ?>: 5px
                !important;margin-<?php echo e(Session::get('direction')==="rtl" ? 'left' : 'right'); ?>: 5px">
                <?php echo e(\App\CPU\translate('categories')); ?>

              </span>
            </a>
            <?php if(request()->is('/')): ?>
               <ul class="dropdown-menu"
                                    style="right: 0%; margin-top: 7px; box-shadow: none;min-width: 303px !important;<?php echo e(Session::get('direction') === "rtl" ? 'margin-right: 1px!important;text-align: right;' : 'margin-left: 1px!important;text-align: left;'); ?>padding-bottom: 0px!important;">
                                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($key<11): ?>
                                            <li class="dropdown">
                                                <a class="dropdown-item flex-between"
                                                   <?php if ($category->childes->count() > 0) echo "data-toggle='dropdown'"?> href="javascript:"
                                                   onclick="location.href='<?php echo e(route('products',['id'=> $category['id'],'data_from'=>'category','page'=>1])); ?>'">
                                                    <div>
                                                        <img
                                                            src="<?php echo e(asset("storage/app/public/category/$category->icon")); ?>"
                                                            onerror="this.src='<?php echo e(asset('public/assets/front-end/img/image-place-holder.png')); ?>'"
                                                            style="width: 50px; height: 50px; ">
                                                        <span
                                                            class="<?php echo e(Session::get('direction') === "rtl" ? 'pr-3' : 'pl-3'); ?>"><?php echo e($category['name']); ?></span>
                                                    </div>
                                                    <?php if($category->childes->count() > 0): ?>
                                                        <div>
                                                            <i class="czi-arrow-<?php echo e(Session::get('direction') === "rtl" ? 'left' : 'right'); ?>" style="line-height: 3;" ></i>
                                                        </div>
                                                    <?php endif; ?>
                                                </a>
                                                <?php if($category->childes->count()>0): ?>
                                                    <ul class="dropdown-menu"
                                                        style="right: 100%; text-align: <?php echo e(Session::get('direction') === "rtl" ? 'right' : 'left'); ?>;">
                                                        <?php $__currentLoopData = $category['childes']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subCategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <li class="dropdown">
                                                                <a class="dropdown-item flex-between"
                                                                   <?php if ($subCategory->childes->count() > 0) echo "data-toggle='dropdown'"?> href="javascript:"
                                                                   onclick="location.href='<?php echo e(route('products',['id'=> $subCategory['id'],'data_from'=>'category','page'=>1])); ?>'">
                                                                    <div>
                                                                        <span
                                                                            class="<?php echo e(Session::get('direction') === "rtl" ? 'pr-3' : 'pl-3'); ?>"><?php echo e($subCategory['name']); ?></span>
                                                                    </div>
                                                                    <?php if($subCategory->childes->count() > 0): ?>
                                                                        <div>
                                                                            <i class="czi-arrow-<?php echo e(Session::get('direction') === "rtl" ? 'left' : 'right'); ?>" style="line-height: 3;"></i>
                                                                        </div>
                                                                    <?php endif; ?>
                                                                </a>
                                                                <?php if($subCategory->childes->count()>0): ?>
                                                                    <ul class="dropdown-menu"
                                                                        style="right: 100%; text-align: <?php echo e(Session::get('direction') === "rtl" ? 'right' : 'left'); ?>;">
                                                                        <?php $__currentLoopData = $subCategory['childes']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subSubCategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                            <li>
                                                                                <a class="dropdown-item"
                                                                                   href="<?php echo e(route('products',['id'=> $subSubCategory['id'],'data_from'=>'category','page'=>1])); ?>"><?php echo e($subSubCategory['name']); ?></a>
                                                                            </li>
                                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                    </ul>
                                                                <?php endif; ?>
                                                            </li>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </ul>
                                                <?php endif; ?>
                                            </li>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <a class="dropdown-item" href="<?php echo e(route('categories')); ?>"
                                       style="<?php echo e(Session::get('direction') === "rtl" ? 'right' : 'left'); ?>: 29%">
                                        <?php echo e(\App\CPU\translate('view_more')); ?>

                                    </a>
                                </ul>
                            <?php else: ?>
                                <ul class="dropdown-menu"
                                    style="right: 0; text-align: <?php echo e(Session::get('direction') === "rtl" ? 'right' : 'left'); ?>;">
                                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li class="dropdown">
                                            <a class="dropdown-item flex-between <?php if ($category->childes->count() > 0) echo "data-toggle='dropdown"?> "
                                               <?php if ($category->childes->count() > 0) echo "data-toggle='dropdown'"?> href="javascript:"
                                               onclick="location.href='<?php echo e(route('products',['id'=> $category['id'],'data_from'=>'category','page'=>1])); ?>'">
                                                <div>
                                                    <img src="<?php echo e(asset("storage/app/public/category/$category->icon")); ?>"
                                                         onerror="this.src='<?php echo e(asset('public/assets/front-end/img/image-place-holder.png')); ?>'"
                                                         style="width: 50px; height: 50px; ">
                                                    <span
                                                        class="<?php echo e(Session::get('direction') === "rtl" ? 'pr-3' : 'pl-3'); ?>"><?php echo e($category['name']); ?></span>
                                                </div>
                                                <?php if($category->childes->count() > 0): ?>
                                                    <div>
                                                        <i class="czi-arrow-<?php echo e(Session::get('direction') === "rtl" ? 'left' : 'right'); ?>" style="line-height: 3;"></i>
                                                    </div>
                                                <?php endif; ?>
                                            </a>
                                            <?php if($category->childes->count()>0): ?>
                                                <ul class="dropdown-menu"
                                                    style="right: 100%; text-align: <?php echo e(Session::get('direction') === "rtl" ? 'right' : 'left'); ?>;">
                                                    <?php $__currentLoopData = $category['childes']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subCategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <li class="dropdown">
                                                            <a class="dropdown-item flex-between <?php if ($subCategory->childes->count() > 0) echo "data-toggle='dropdown"?> "
                                                               <?php if ($subCategory->childes->count() > 0) echo "data-toggle='dropdown'"?> href="javascript:"
                                                               onclick="location.href='<?php echo e(route('products',['id'=> $subCategory['id'],'data_from'=>'category','page'=>1])); ?>'">
                                                                <div>
                                                                    <span
                                                                        class="<?php echo e(Session::get('direction') === "rtl" ? 'pr-3' : 'pl-3'); ?>"><?php echo e($subCategory['name']); ?></span>
                                                                </div>
                                                                <?php if($subCategory->childes->count() > 0): ?>
                                                                    <div>
                                                                        <i class="czi-arrow-<?php echo e(Session::get('direction') === "rtl" ? 'left' : 'right'); ?>" style="line-height: 3;"></i>
                                                                    </div>
                                                                <?php endif; ?>
                                                            </a>
                                                            <?php if($subCategory->childes->count()>0): ?>
                                                                <ul class="dropdown-menu"
                                                                    style="right: 100%; text-align: <?php echo e(Session::get('direction') === "rtl" ? 'right' : 'left'); ?>;">
                                                                    <?php $__currentLoopData = $subCategory['childes']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subSubCategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                        <li>
                                                                            <a class="dropdown-item"
                                                                               href="<?php echo e(route('products',['id'=> $subSubCategory['id'],'data_from'=>'category','page'=>1])); ?>"><?php echo e($subSubCategory['name']); ?></a>
                                                                        </li>
                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                </ul>
                                                            <?php endif; ?>
                                                        </li>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </ul>
                                            <?php endif; ?>
                                        </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <a class="dropdown-item" href="<?php echo e(route('categories')); ?>"
                                       style="<?php echo e(Session::get('direction') === "rtl" ? 'right' : 'left'); ?>: 29%">
                                        <?php echo e(\App\CPU\translate('view_more')); ?>

                                    </a>
                                </ul>
                            <?php endif; ?>
                        </li>
                    </ul>


          <ul class="navbar-nav mega-nav1 pr-2 pl-2 d-block d-xl-none">
            <!--mobile-->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle <?php echo e(Session::get('direction') === " rtl" ? 'pr-0' : 'pl-0'); ?>" href="#"
                data-toggle="dropdown">
                <i class="czi-menu align-middle mt-n1 d-none <?php echo e(Session::get('direction') === " rtl" ? 'ml-2' : 'mr-2'); ?>"></i>
                <span style="margin-<?php echo e(Session::get('direction') === " rtl" ? 'right' : 'left'); ?>: -8px !important;"><?php echo e(\App\CPU\translate('categories')); ?></span>
              </a>
              <ul class="dropdown-menu" style="right: 0%; text-align: <?php echo e(Session::get('direction') === " rtl" ? 'right'
                : 'left'); ?>;">
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="dropdown">
                  <a class="dropdown-item <?php if ($category->childes->count() > 0) echo " dropdown-toggle"?> "
                    <?php if ($category->childes->count() > 0) echo "data-toggle='dropdown'"?>
                    href="<?php echo e(route('products',['id'=> $category['id'],'data_from'=>'category','page'=>1])); ?>">
                    <img src="<?php echo e(asset("storage/app/public/category/$category->icon")); ?>"
                    onerror="this.src='<?php echo e(asset('public/assets/front-end/img/image-place-holder.png')); ?>'"
                    style="width: 50px; height: 40px; ">
                    <span class="<?php echo e(Session::get('direction') === " rtl" ? 'pr-3' : 'pl-3'); ?>"><?php echo e($category['name']); ?></span>
                  </a>
                  <?php if($category->childes->count()>0): ?>
                  <ul class="dropdown-menu" style="right: 100%; text-align: <?php echo e(Session::get('direction') === " rtl"
                    ? 'right' : 'left'); ?>;">
                    <?php $__currentLoopData = $category['childes']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subCategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="dropdown">
                      <a class="dropdown-item <?php if ($subCategory->childes->count() > 0) echo " dropdown-toggle"?> "
                        <?php if ($subCategory->childes->count() > 0) echo "data-toggle='dropdown'"?>
                        href="<?php echo e(route('products',['id'=> $subCategory['id'],'data_from'=>'category','page'=>1])); ?>">
                        <span class="<?php echo e(Session::get('direction') === " rtl" ? 'pr-3' : 'pl-3'); ?>"><?php echo e($subCategory['name']); ?></span>
                      </a>
                      <?php if($subCategory->childes->count()>0): ?>
                      <ul class="dropdown-menu" style="right: 100%; text-align: <?php echo e(Session::get('direction') === " rtl"
                        ? 'right' : 'left'); ?>;">
                        <?php $__currentLoopData = $subCategory['childes']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subSubCategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li>
                          <a class="dropdown-item"
                            href="<?php echo e(route('products',['id'=> $subSubCategory['id'],'data_from'=>'category','page'=>1])); ?>"><?php echo e($subSubCategory['name']); ?></a>
                        </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </ul>
                      <?php endif; ?>
                    </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </ul>
                  <?php endif; ?>
                </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </ul>
            </li>
          </ul>
          <!-- Primary menu-->
          <ul class="navbar-nav w-100" style="<?php echo e(Session::get('direction') === " rtl" ? 'padding-right: 0px' : ''); ?>">
            <li class="nav-item dropdown <?php echo e(request()->is('/')?'active':''); ?>">
              <a class="nav-link text-dark border-right py-2 mt-2" style="color: black !important"
                href="<?php echo e(route('home')); ?>"><?php echo e(\App\CPU\translate('Home')); ?></a>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-dark border-right py-2 mt-2" style="color: black !important"
                href="#" data-toggle="dropdown"><?php echo e(\App\CPU\translate('brand')); ?></a>
              <ul class="dropdown-menu scroll-bar" style="text-align: <?php echo e(Session::get('direction') === " rtl" ? 'right'
                : 'left'); ?>;">
                <?php $__currentLoopData = \App\CPU\BrandManager::get_brands(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li style="border-bottom: 1px solid #e3e9ef; display:flex; justify-content:space-between; ">
                  <div>
                    <a class="dropdown-item"
                      href="<?php echo e(route('products',['id'=> $brand['id'],'data_from'=>'brand','page'=>1])); ?>">
                      <?php echo e($brand['name']); ?>

                    </a>
                  </div>
                  <div class="align-baseline">
                    <?php if($brand['brand_products_count'] > 0 ): ?>
                    <span class="count-value px-2">( <?php echo e($brand['brand_products_count']); ?> )</span>
                    <?php endif; ?>
                  </div>
                </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </ul>
            </li>
            <?php ($seller_registration=\App\Model\BusinessSetting::where(['type'=>'seller_registration'])->first()->value); ?>
            <?php if($seller_registration): ?>
            <!--   <li class="nav-item">
                                <div class="dropdown">
                                    <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                            style="color: white;margin-top: 5px; padding-<?php echo e(Session::get('direction') === "rtl" ? 'right' : 'left'); ?>: 0">
                                        <b><?php echo e(\App\CPU\translate('Seller')); ?>  <?php echo e(\App\CPU\translate('zone')); ?> </b>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"
                                         style="min-width: 165px !important; text-align: <?php echo e(Session::get('direction') === "rtl" ? 'right' : 'left'); ?>;">
                                        <a class="dropdown-item" href="<?php echo e(route('shop.apply')); ?>">
                                            <b><?php echo e(\App\CPU\translate('Become a')); ?> <?php echo e(\App\CPU\translate('Seller')); ?></b>
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="<?php echo e(route('seller.auth.login')); ?>">
                                            <b><?php echo e(\App\CPU\translate('Seller')); ?>  <?php echo e(\App\CPU\translate('login')); ?> </b>
                                        </a>
                                    </div>
                                </div>
                            </li> -->

            <li class="nav-item dropdown">
              <a class="nav-link text-dark border-right py-2 mt-2" style="color: black !important"
                href="<?php echo e(url('track-order')); ?>">
                <?php echo e(\App\CPU\translate('Track')); ?> <?php echo e(\App\CPU\translate('Order')); ?>

              </a>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link text-dark border-right py-2 mt-2" style="color: black !important"
                href="<?php echo e(route('shop.apply')); ?>">
                <?php echo e(\App\CPU\translate('Become a')); ?> <?php echo e(\App\CPU\translate('Seller')); ?>

              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link text-dark border-right py-2 mt-2" style="color: black !important"
                href="<?php echo e(route('seller.auth.login')); ?>">
                <?php echo e(\App\CPU\translate('Seller')); ?> <?php echo e(\App\CPU\translate('login')); ?>

              </a>
            </li>
            <?php endif; ?>

            <?php ( $short = \App\CPU\Helpers::country()); ?>
                        
                        <li class="nav-item dropdown ml-auto">
                            <a class="nav-link dropdown-toggle text-dark border-right py-2 mt-2" href="#"
                                data-toggle="dropdown" style="color: black !important">
                                <!--<img class="<?php echo e(Session::get('direction') === " rtl" ? 'ml-2' : 'mr-2'); ?>"-->
                                <!--    style="height: 16px; width: auto"-->
                                <!--    src="<?php echo e(asset('public/assets/front-end')); ?>/img/loc.png" alt="Eng">-->
                              <?php if(empty($country)): ?>
                                    <img class="<?php echo e(Session::get('direction') === " rtl" ? 'ml-2' : 'mr-2'); ?>" width="20"
                                        src="<?php echo e(asset('public/assets/front-end')); ?>/img/shop.png"
                                        alt="Eng">
                                    All Country
                                    <?php else: ?>
                                    <img class="<?php echo e(Session::get('direction') === " rtl" ? 'ml-2' : 'mr-2'); ?>" width="20"
                                    src="<?php echo e(asset('public/assets/front-end')); ?>/img/flags/<?php echo e(strtolower($country ?? 'id')); ?>.png"
                                    alt="Eng">

                                <?php echo e($country); ?>

                                <?php endif; ?>
                            </a>
                            <ul class="dropdown-menu scroll-bar">
                                <li>
                                    <a class="dropdown-item pb-1" href="<?php echo e(route('home')); ?>">
                                        <img class="<?php echo e(Session::get('direction') === " rtl" ? 'ml-2' : 'mr-2'); ?>"
                                            width="20"
                                            src="<?php echo e(asset('public/assets/front-end')); ?>/img/shop.png"
                                            alt="flsg" />
                                        <span style="text-transform: capitalize">All Country</span>
                                    </a>
                                <?php $__currentLoopData = $short; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <a class="dropdown-item pb-1" href="<?php echo e(route('shortBy', $data->country)); ?>">
                                        <img class="<?php echo e(Session::get('direction') === " rtl" ? 'ml-2' : 'mr-2'); ?>"
                                            width="20"
                                            src="<?php echo e(asset('public/assets/front-end')); ?>/img/flags/<?php echo e(strtolower($data->country)); ?>.png"
                                            alt="flsg" />
                                        <span style="text-transform: capitalize"><?php echo e($data->country_name); ?></span>
                                    </a>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </li>
                            </ul>
                        </li>

            <?php ( $local = \App\CPU\Helpers::default_lang()); ?>
            <li class="nav-item dropdown ml-auto">
              <a class="nav-link dropdown-toggle text-dark border-right py-2 mt-2" href="#" data-toggle="dropdown"
                style="color: black !important">
                <?php $__currentLoopData = json_decode($language['value'],true); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($data['code']==$local): ?>
                <img class="<?php echo e(Session::get('direction') === " rtl" ? 'ml-2' : 'mr-2'); ?>" width="20"
                  src="<?php echo e(asset('public/assets/front-end')); ?>/img/flags/<?php echo e($data['code']); ?>.png" alt="Eng">
                <?php echo e($data['name']); ?>

                <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </a>
              <ul class="dropdown-menu scroll-bar">
                <?php $__currentLoopData = json_decode($language['value'],true); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key =>$data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($data['status']==1): ?>
                <li>
                  <a class="dropdown-item pb-1" href="<?php echo e(route('lang',[$data['code']])); ?>">
                    <img class="<?php echo e(Session::get('direction') === " rtl" ? 'ml-2' : 'mr-2'); ?>" width="20"
                      src="<?php echo e(asset('public/assets/front-end')); ?>/img/flags/<?php echo e($data['code']); ?>.png"
                      alt="<?php echo e($data['name']); ?>" />
                    <span
                      style="text-transform: capitalize"><?php echo e(\App\CPU\Helpers::get_language_name($data['code'])); ?></span>
                  </a>
                </li>
                <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </ul>
            </li>

            <?php ($currency_model = \App\CPU\Helpers::get_business_settings('currency_model')); ?>
            <?php if($currency_model=='multi_currency'): ?>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-dark" style="color: black !important" href="#"
                data-toggle="dropdown">
                <span><?php echo e(session('currency_code')); ?> <?php echo e(session('currency_symbol')); ?></span>
              </a>
              <ul class="dropdown-menu" style="min-width: 160px!important;">
                <?php $__currentLoopData = \App\Model\Currency::where('status', 1)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $currency): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li style="cursor: pointer" class="dropdown-item" onclick="currency_change('<?php echo e($currency['code']); ?>')">
                  <?php echo e($currency->name); ?>

                </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </ul>
            </li>
            <?php endif; ?>



          </ul>
        </div>
      </div>
    </div>
  </div>
</header>

<?php $__env->startPush('script'); ?>
<script>
    $(document).ready(function(){
        function ObserveInputValue() {
            // console.log($('#cartCount').val());
            $('#cartNumber').text($('#cartCount').val())
        }
        setInterval(function() { ObserveInputValue() }, 2000);
    });
</script>
<script>

fetch('https://ipapi.co/json/')
  .then(function(response) {
    return response.json();
  })
  .then(function(data) {
    console.log('location',data);

            if(data.region !== "West Java"){
                $('#auto-loc').append('Diluar jangkauan').attr('style', 'font-size: 16px; width: 120px;')
            }else{
                $('#auto-loc').append(data.city)
            }
            $('#nav-global-location-slot').attr('data-original-title', data.country_name + ', ' + data.region);
  });
</script>
<?php $__env->stopPush(); ?>
<?php /**PATH /home/mh/code/project.co/Tigatech/umkm-shop/resources/views/layouts/front-end/partials/_header.blade.php ENDPATH**/ ?>