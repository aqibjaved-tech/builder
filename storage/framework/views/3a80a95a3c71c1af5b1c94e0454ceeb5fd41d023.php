<html lang="en" >
    <!-- begin::Head -->
    <head>
        <meta charset="utf-8"/>

        <title>EXC Page Builder  | Login Page</title>
        <meta name="description" content="Login page example">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!--begin::Fonts -->
        <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js")}}></script>
        <script>
            WebFont.load({
                google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
                active: function() {
                    sessionStorage.fonts = true;
                }
            });
        </script>
        <!--end::Fonts -->



            <!--begin::Page Custom Styles(used by this page) -->
                             <link href=<?php echo e(asset("assets/css/demo3/pages/login/login-6.css")); ?> rel="stylesheet" type="text/css" />
                        <!--end::Page Custom Styles -->

        <!--begin::Global Theme Styles(used by all pages) -->
                    <link href=<?php echo e(asset("assets/vendors/global/vendors.bundle.css")); ?> rel="stylesheet" type="text/css" />
                    <link href=<?php echo e(asset("assets/css/demo3/style.bundle.css")); ?> rel="stylesheet" type="text/css" />
                <!--end::Global Theme Styles -->

        <!--begin::Layout Skins(used by all pages) -->
                <!--end::Layout Skins -->
<link href=<?php echo e(asset("assets/css/demo3/custom.css")); ?>  rel="stylesheet" type="text/css" />
        <link rel="shortcut icon" href="<?php echo e(asset('assets/media/company-logos/fav.png')); ?>" />
    </head>
    <!-- end::Head -->

    <!-- begin::Body -->
    <body  class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--fixed kt-subheader--enabled kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading"  >


    	<!-- begin:: Page -->
	<div class="kt-grid kt-grid--ver kt-grid--root kt-page">
		<div class="kt-grid kt-grid--hor kt-grid--root  kt-login kt-login--v6 kt-login--signin" id="kt_login">
    <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--desktop kt-grid--ver-desktop kt-grid--hor-tablet-and-mobile">
        <div class="kt-grid__item  kt-grid__item--order-tablet-and-mobile-2  kt-grid kt-grid--hor kt-login__aside">
            <div class="kt-login__wrapper">
                <div class="kt-login__container">
                    <div class="kt-login__body">
                        <div class="kt-login__logo">
                            <a href="#">
                                <img src="<?php echo e(asset('assets/media/company-logos/logo.png')); ?>">
                            </a>
                        </div>

                        <div class="kt-login__signin">
                            <div class="kt-login__head">
                                <h3 class="kt-login__title">Sign In To Admin</h3>
                            </div>
                            <?php if($errors->any()): ?>
                              <div class="alert alert-danger">
                                  <ul>
                                      <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                          <li><?php echo e($error); ?></li>
                                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                  </ul>
                              </div>
                            <?php endif; ?>
                            <div class="kt-login__form">
                              <form method="POST" action="<?php echo e(route('login')); ?>">
                                  <?php echo csrf_field(); ?>
                                    <div class="form-group">
                                        <input class="form-control" type="email" placeholder="Email" name="email" autocomplete="off">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control form-control-last" type="password" placeholder="Password" name="password">
                                    </div>
                                    <div class="kt-login__extra">
                                        <label class="kt-checkbox">
                                            <input type="checkbox" name="remember"> Remember me
                                            <span></span>
                                        </label>
                                        <a href="javascript:;" id="kt_login_forgot">Forget Password ?</a>
                                    </div>
                                    <div class="kt-login__actions">
                                        <button id="" type="submit" class="btn btn-brand btn-pill btn-elevate">Sign In</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="kt-login__signup">
                            <div class="kt-login__head">
                                <h3 class="kt-login__title">Sign Up</h3>
                                <div class="kt-login__desc">Enter your details to create your account:</div>
                            </div>
                            <div class="kt-login__form">
                                <form class="kt-form" action="">
                                    <div class="form-group">
                                        <input class="form-control" type="text" placeholder="Fullname" name="fullname">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" type="text" placeholder="Email" name="email" autocomplete="off">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" type="password" placeholder="Password" name="password">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control form-control-last" type="password" placeholder="Confirm Password" name="rpassword">
                                    </div>
                                    <div class="kt-login__extra">
                                        <label class="kt-checkbox">
                                            <input type="checkbox" name="agree"> I Agree the <a href="#">terms and conditions</a>.
                                            <span></span>
                                        </label>
                                    </div>
                                    <div class="kt-login__actions">
                                        <button id="kt_login_signup_submit" class="btn btn-brand btn-pill btn-elevate">Sign Up</button>
                                        <button id="kt_login_signup_cancel" class="btn btn-outline-brand btn-pill">Cancel</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="kt-login__forgot">
                            <div class="kt-login__head">
                                <h3 class="kt-login__title">Forgotten Password ?</h3>
                                <div class="kt-login__desc">Enter your email to reset your password:</div>
                            </div>
                            <div class="kt-login__form">
                                <form class="kt-form" action="">
                                    <div class="form-group">
                                        <input class="form-control" type="text" placeholder="Email" name="email" id="kt_email" autocomplete="off">
                                    </div>
                                    <div class="kt-login__actions">
                                        <button id="kt_login_forgot_submit" class="btn btn-brand btn-pill btn-elevate">Request</button>
                                        <button id="kt_login_forgot_cancel" class="btn btn-outline-brand btn-pill">Cancel</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!--<div class="kt-login__account">-->
                <!--    <span class="kt-login__account-msg">-->
                <!--        Don't have an account yet ?-->
                <!--    </span>&nbsp;&nbsp;-->
                <!--    <a href="javascript:;" id="kt_login_signup" class="kt-login__account-link">Sign Up!</a>-->
                <!--</div>-->
            </div>
        </div>

        <div class="kt-grid__item kt-grid__item--fluid kt-grid__item--center kt-grid kt-grid--ver kt-login__content" style="background-image: url(<?php echo e(asset("assets/media/bg/login-background.png")); ?>)">
            <div class="kt-login__section">
                <div class="kt-login__block">
                    <h3 class="kt-login__title">Exchange Collective Site Builder</h3>
                    <div class="kt-login__desc">
                        Build and Manage your Exchange Collective Storefronts.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>         	</div>

<!-- end:: Page -->


        <!-- begin::Global Config(global config for global JS sciprts) -->
        <script>
            var KTAppOptions = {"colors":{"state":{"brand":"#2c77f4","light":"#ffffff","dark":"#282a3c","primary":"#5867dd","success":"#34bfa3","info":"#36a3f7","warning":"#ffb822","danger":"#fd3995"},"base":{"label":["#c5cbe3","#a1a8c3","#3d4465","#3e4466"],"shape":["#f0f3ff","#d9dffa","#afb4d4","#646c9a"]}}};
        </script>
        <!-- end::Global Config -->

    	<!--begin::Global Theme Bundle(used by all pages) -->
    	    	   <script src=<?php echo e(asset("assets/vendors/global/vendors.bundle.js")); ?> type="text/javascript"></script>
		    	   <script src=<?php echo e(asset("assets/js/demo3/scripts.bundle.js")); ?> type="text/javascript"></script>
				<!--end::Global Theme Bundle -->




            <!--begin::Page Scripts(used by this page) -->
                            <script src=<?php echo e(asset("assets/js/demo3/pages/login/login-general.js")); ?> type="text/javascript"></script>
                        <!--end::Page Scripts -->
            </body>
    <!-- end::Body -->
</html>
<?php /**PATH /home/builder.local/resources/views/auth/login.blade.php ENDPATH**/ ?>