<?php $__env->startSection('title', 'Add User'); ?>
<?php $__env->startSection('content'); ?>
<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
		<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

		<div class="kt-portlet">
				<div class="kt-portlet__body kt-portlet__body--fit">
						<div class="kt-grid">
								<div class="kt-grid__item kt-grid__item--fluid kt-wizard-v4__wrapper">
										<!--begin: Form Wizard Form-->
										<form class="kt-form" id="kt_apps_user_add_user_form" novalidate="novalidate">
												<!--begin: Form Wizard Step 1-->
												<div class="kt-wizard-v4__content" data-ktwizard-type="step-content" data-ktwizard-state="current">
														<div class="kt-heading kt-heading--md">User's Profile Details:</div>
														<div class="kt-section kt-section--first">
																<div class="kt-wizard-v4__form">
																		<div class="row">
																				<div class="col-xl-12">
																						<div class="kt-section__body">
																								<div class="form-group row">
																										<label class="col-xl-3 col-lg-3 col-form-label">Avatar</label>
																										<div class="col-lg-9 col-xl-6">
																												<div class="kt-avatar kt-avatar--outline kt-avatar--circle" id="kt_apps_user_add_avatar">
																														<div class="kt-avatar__holder" style="background-image: url(./assets/media/users/300_10.jpg)"></div>
																														<label class="kt-avatar__upload" data-toggle="kt-tooltip" title="" data-original-title="Change avatar">
																																<i class="fa fa-pen"></i>
																																<input type="file" name="kt_apps_user_add_user_avatar">
																														</label>
																														<span class="kt-avatar__cancel" data-toggle="kt-tooltip" title="" data-original-title="Cancel avatar"><i class="fa fa-times"></i></span>
																												</div>
																										</div>
																								</div>
																								<div class="form-group row">
																										<label class="col-xl-3 col-lg-3 col-form-label">First Name</label>
																										<div class="col-lg-9 col-xl-9">
																												<input class="form-control" type="text" value="Anna" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABHklEQVQ4EaVTO26DQBD1ohQWaS2lg9JybZ+AK7hNwx2oIoVf4UPQ0Lj1FdKktevIpel8AKNUkDcWMxpgSaIEaTVv3sx7uztiTdu2s/98DywOw3Dued4Who/M2aIx5lZV1aEsy0+qiwHELyi+Ytl0PQ69SxAxkWIA4RMRTdNsKE59juMcuZd6xIAFeZ6fGCdJ8kY4y7KAuTRNGd7jyEBXsdOPE3a0QGPsniOnnYMO67LgSQN9T41F2QGrQRRFCwyzoIF2qyBuKKbcOgPXdVeY9rMWgNsjf9ccYesJhk3f5dYT1HX9gR0LLQR30TnjkUEcx2uIuS4RnI+aj6sJR0AM8AaumPaM/rRehyWhXqbFAA9kh3/8/NvHxAYGAsZ/il8IalkCLBfNVAAAAABJRU5ErkJggg==&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;">
																										</div>
																								</div>
																								<div class="form-group row">
																										<label class="col-xl-3 col-lg-3 col-form-label">Last Name</label>
																										<div class="col-lg-9 col-xl-9">
																												<input class="form-control" type="text" value="Krox">
																										</div>
																								</div>

																								<div class="form-group row">
																										<label class="col-xl-3 col-lg-3 col-form-label">Email Address</label>
																										<div class="col-lg-9 col-xl-9">
																												<div class="input-group">
																														<div class="input-group-prepend"><span class="input-group-text"><i class="la la-at"></i></span></div>
																														<input type="text" class="form-control" value="anna.krox@loop.com" placeholder="Email" aria-describedby="basic-addon1">
																												</div>
																										</div>
																								</div>
																								
																						</div>
																				</div>
																		</div>
																</div>
														</div>
												</div>
												<!--end: Form Wizard Step 1-->

												<div class="kt-form__actions">

														<div class="btn btn-success btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u" data-ktwizard-type="action-submit">
																Submit
														</div>
												</div>
												<!--end: Form Actions -->
										</form>
										<!--end: Form Wizard Form-->
								</div>
						</div>
				</div>
		</div>
</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.header1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pageBuilder\resources\views/users/user-add.blade.php ENDPATH**/ ?>