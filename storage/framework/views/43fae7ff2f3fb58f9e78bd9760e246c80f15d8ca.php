	<!-- begin: Header Menu -->
    <?php
  // echo url()->segment(1);
  // function currentUrl(){
    $currentUrl = Request::segment(1);
    $site_activeclass = '';
    $theme_activeclass = '';
    $dashboard_activeclass = '';
    if($currentUrl == 'sites'){
      $site_activeclass = 'kt-menu__item--active';
      // return $site_activeclass;
    }
    if($currentUrl == 'pages'){
      $site_activeclass = 'kt-menu__item--active';
      // return $site_activeclass;
    }
    if($currentUrl == 'themes'){
      $theme_activeclass = 'kt-menu__item--active';
      // return $site_activeclass;
    }
    if($currentUrl == 'modules'){
      $theme_activeclass = 'kt-menu__item--active';
      // return $site_activeclass;
    }
    if($currentUrl == ''){
      $dashboard_activeclass = 'kt-menu__item--active';
      // return $dashboard_activeclass;
    }

  // }

   ?>
    <button class="kt-header-menu-wrapper-close" id="kt_header_menu_mobile_close_btn"><i class="la la-close"></i></button>
    <div class="kt-header-menu-wrapper" id="kt_header_menu_wrapper">
        <div id="kt_header_menu" class="kt-header-menu kt-header-menu-mobile  kt-header-menu--layout-tab ">
            <ul class="kt-menu__nav ">
                <li class="kt-menu__item <?php echo $dashboard_activeclass; ?>" aria-haspopup="true">
                  <a href="<?php echo e(url('/')); ?>" class="kt-menu__link "><span class="kt-menu__link-text">Dashboard</span></a>
                </li>

                <li class="kt-menu__item <?php echo $theme_activeclass; ?>" aria-haspopup="true">
                  <a href="<?php echo e(url('themes')); ?>" class="kt-menu__link "><span class="kt-menu__link-text">Themes</span>
                  </a>
                </li>

                <li class="kt-menu__item <?php echo $site_activeclass; ?>" aria-haspopup="true">
                  <a href="<?php echo e(url('sites')); ?>" class="kt-menu__link "><span class="kt-menu__link-text">Sites</span>
                  </a>
                </li>

            </ul>
        </div>
    </div>

    <!-- end: Header Menu -->
<?php /**PATH /home/builder.local/resources/views/admin/layouts/navigation.blade.php ENDPATH**/ ?>