<?php $__env->startSection('title', 'Edit Site'); ?>

<?php $__env->startSection('content'); ?>
					<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

						<!-- begin:: Content Head -->
						<div class="kt-subheader   kt-grid__item" id="kt_subheader">
							<div class="kt-container  kt-container--fluid ">
								<div class="kt-subheader__main">
									<h3 class="kt-subheader__title">
										Edit Site
									</h3>
									<span class="kt-subheader__separator kt-subheader__separator--v"></span>
									<div class="kt-subheader__group" id="kt_subheader_search">
										<span class="kt-subheader__desc" id="kt_subheader_total">
											<?php echo e($site->name); ?> </span>
									</div>
								</div>
								<div class="kt-subheader__toolbar">
									<a href="<?php echo e(url('sites')); ?>" class="btn btn-default btn-bold">
										Back </a>
									<div class="btn-group">
										<button type="button" class="btn btn-brand btn-bold">
											Save Changes </button>
										<button type="button" class="btn btn-brand btn-bold dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										</button>
										<div class="dropdown-menu dropdown-menu-right">
											<ul class="kt-nav">
												<li class="kt-nav__item">
													<a href="#" class="kt-nav__link">
														<i class="kt-nav__link-icon flaticon2-writing"></i>
														<span class="kt-nav__link-text">Save &amp; continue</span>
													</a>
												</li>
												<li class="kt-nav__item">
													<a href="#" class="kt-nav__link">
														<i class="kt-nav__link-icon flaticon2-medical-records"></i>
														<span class="kt-nav__link-text">Save &amp; add new</span>
													</a>
												</li>
												<li class="kt-nav__item">
													<a href="#" class="kt-nav__link">
														<i class="kt-nav__link-icon flaticon2-hourglass-1"></i>
														<span class="kt-nav__link-text">Save &amp; exit</span>
													</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- end:: Content Head -->

						<!-- begin:: Content -->
						<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
							<?php
							if($site->logo != ''){
								$image = asset("siteAssets/".$site->logo);
									// $image = asset("images/no-image.jpg");
							}else{
								$image = asset("images/no-image.jpg");
							}
							// echo $image;
							?>
							<!--begin:: Portlet-->
							<div class="kt-portlet ">
								<div class="kt-portlet__body">
									<div class="kt-widget kt-widget--user-profile-3">
										<div class="kt-widget__top">
											<div class="kt-widget__media kt-hidden-">
												<img src="<?php echo e($image); ?>" alt="image">
											</div>
											<div class="kt-widget__content">
												<div class="kt-widget__head">
													<a href="#" class="kt-widget__title"><?php echo e($site->name); ?></a>
													<div class="kt-widget__action">

													</div>
												</div>
												<div class="kt-widget__info">
													<div class="kt-widget__desc">
													<?php echo e($site->description); ?>

													</div>
													<div class="kt-widget__stats d-flex align-items-center flex-fill">

													</div>
												</div>
											</div>
										</div>
										<!-- <div class="kt-widget__bottom">
											<div class="kt-widget__item">
												<div class="kt-widget__icon">
													<i class="flaticon-piggy-bank"></i>
												</div>
												<div class="kt-widget__details">
													<span class="kt-widget__title">Earnings</span>
													<span class="kt-widget__value"><span>$</span>249,500</span>
												</div>
											</div>
											<div class="kt-widget__item">
												<div class="kt-widget__icon">
													<i class="flaticon-confetti"></i>
												</div>
												<div class="kt-widget__details">
													<span class="kt-widget__title">Expances</span>
													<span class="kt-widget__value"><span>$</span>164,700</span>
												</div>
											</div>
											<div class="kt-widget__item">
												<div class="kt-widget__icon">
													<i class="flaticon-pie-chart"></i>
												</div>
												<div class="kt-widget__details">
													<span class="kt-widget__title">Net</span>
													<span class="kt-widget__value"><span>$</span>84,060</span>
												</div>
											</div>
											<div class="kt-widget__item">
												<div class="kt-widget__icon">
													<i class="flaticon-file-2"></i>
												</div>
												<div class="kt-widget__details">
													<span class="kt-widget__title">73 Tasks</span>
													<a href="#" class="kt-widget__value kt-font-brand">View</a>
												</div>
											</div>
											<div class="kt-widget__item">
												<div class="kt-widget__icon">
													<i class="flaticon-chat-1"></i>
												</div>
												<div class="kt-widget__details">
													<span class="kt-widget__title">648 Comments</span>
													<a href="#" class="kt-widget__value kt-font-brand">View</a>
												</div>
											</div>
											<div class="kt-widget__item">

											</div>
										</div> -->
									</div>
								</div>
							</div>

							<!--end:: Portlet-->

							<!--Begin:: Portlet-->
							<div class="kt-portlet kt-portlet--tabs">
								<div class="kt-portlet__head">
									<div class="kt-portlet__head-toolbar">
										<ul class="nav nav-tabs nav-tabs-space-lg nav-tabs-line nav-tabs-bold nav-tabs-line-3x nav-tabs-line-brand" role="tablist">
											<li class="nav-item">
												<a class="nav-link active" data-toggle="tab" href="#kt_apps_contacts_view_tab_2" role="tab">
													<i class="flaticon2-calendar-3"></i> Site Details
												</a>
											</li>
											<li class="nav-item">
												<a class="nav-link " data-toggle="tab" href="#kt_apps_contacts_view_tab_3" role="tab">
													<i class="flaticon2-user-outline-symbol"></i> Pages
												</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" data-toggle="tab" href="#kt_apps_contacts_view_tab_4" role="tab">
													<i class="flaticon2-gear"></i> Settings
												</a>
											</li>
											<!-- <li class="nav-item">
												<a class="nav-link " data-toggle="tab" href="#kt_apps_contacts_view_tab_1" role="tab">
													<i class="flaticon2-note"></i> Notes
												</a>
											</li> -->
										</ul>
									</div>
								</div>
								<div class="kt-portlet__body">
									<div class="tab-content  kt-margin-t-20">

										<!--Begin:: Tab Content-->
										<div class="tab-pane active  site-form" id="kt_apps_contacts_view_tab_2" role="tabpanel">
											<!--begin: Form Wizard Form-->
											<form action="<?php echo e(route('sites.update',$site->id)); ?>" method="POST" enctype="multipart/form-data">
												<?php echo csrf_field(); ?>
												<?php echo method_field('PUT'); ?>
												<div class="kt-form__body">
													<div class="kt-section kt-section--first">
														<div class="row">
															<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
																<div class="kt-section__body">
																	<input type="hidden" name="oldimage" value="<?php echo e($site->logo); ?>">
																	<div class="form-group row">
																		<label class="col-xl-3 col-lg-3 col-form-label">Site Logo</label>
																		<div class="col-lg-9 col-xl-6">
																			<div class="kt-avatar kt-avatar--outline kt-avatar--circle-" id="kt_apps_user_add_avatar">
																				<div class="kt-avatar__holder" style="background-image: url(<?php echo e($image); ?>);"></div>
																				<label class="kt-avatar__upload" data-toggle="kt-tooltip" title="" data-original-title="Change avatar">
																					<i class="fa fa-pen"></i>
																					<input type="file" name="image" accept=".png, .jpg, .jpeg">
																				</label>
																				<span class="kt-avatar__cancel" data-toggle="kt-tooltip" title="" data-original-title="Cancel avatar">
																					<i class="fa fa-times"></i>
																				</span>
																			</div>
																		</div>
																	</div>
																	<div class="form-group row">
																		<label class="col-xl-3 col-lg-3 col-form-label">Name</label>
																		<div class="col-lg-9 col-xl-6">
																			<input class="form-control" type="text" value="<?php echo e($site->name); ?>" name="name">
																		</div>
																	</div>
																	<div class="form-group row">
																		<label class="col-xl-3 col-lg-3 col-form-label">Description</label>
																		<div class="col-lg-9 col-xl-6">
																		<textarea class="form-control" id="exampleTextarea" rows="3" name="description"><?php echo e($site->description); ?></textarea>
																		</div>
																	</div>
																	<div class="form-group row">
																		<label class="col-xl-3 col-lg-3 col-form-label">URL</label>
																		<div class="col-lg-9 col-xl-6">
																		<input class="form-control" type="url" value="<?php echo e($site->url); ?>" name="url">
																		</div>
																	</div>
																	<div class="form-group row">
																		<label class="col-xl-3 col-lg-3 col-form-label">Select Theme</label>
																		<div class="col-lg-9 col-xl-6">
																			<select class="form-control fieldtype" name="theme_name" id="theme_name">
																				<?php $__currentLoopData = $themes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $theme): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
																					<option <?php if($site->theme == $theme->themeid){ echo "selected='selected'"; } ?> value="<?php echo e($theme->themeid); ?>"><?php echo e($theme->themename); ?></option>
																				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
																			</select>
																		</div>
																	</div>
																	<div class="form-group row">
																		<label class="col-xl-3 col-lg-3 col-form-label">Api Key</label>
																		<div class="col-lg-9 col-xl-6">
																		<input class="form-control" type="text" name="apikey" value="<?php echo e($site->apikey); ?>">
																		</div>
																	</div>
																	<div class="form-group row">
																		<label class="col-xl-3 col-lg-3 col-form-label">Api Secret</label>
																		<div class="col-lg-9 col-xl-6">
																		<input class="form-control" type="text" name="apisecret" value="<?php echo e($site->apisecret); ?>">
																		</div>
																	</div>
																	<div class="form-group row">
																		<label class="col-xl-3 col-lg-3 col-form-label">Api Email</label>
																		<div class="col-lg-9 col-xl-6">
																		<input class="form-control" type="email" name="apiemail" value="<?php echo e($site->apiemail); ?>">
																		</div>
																	</div>
																	<input type="hidden" name="oldimage" value="<?php echo e($site->logo); ?>">
																</div>
															</div>
															<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="tab-pane" id="kt_apps_contacts_view_tab_3" role="tabpanel">
												<div class="kt-form__body">
													<div class="row">
														<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 custom-button">
															<a href="<?php echo e(url('/pages/create',$site->id)); ?>" class="btn btn-label-brand btn-bold" style="float:left;">Add Page</a>
														</div>
														<?php
														if(count($pages) > 0){ ?>
														<?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
															<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
																<div class="pages-list <?php if($page->active == 1): ?> active-page <?php endif; ?>">
																	<div class="page-img">
																		<?php
																			//echo $page->image;
																			if($page->image != ''){
																				$imagepath = asset("public/pageAssets/".$page->image);
																			}else{
																				$imagepath = asset("images/no-image.jpg");
																			}
																		?>
																		<img class="kt-widget__img kt-hidden-" src="<?php echo e($imagepath); ?>" alt="image">
																		<div class="kt-widget__pic kt-widget__pic--danger kt-font-danger kt-font-boldest kt-hidden">
																			JB
																		</div>
																	</div>
																	<div class="page-details">
																		<div class="page-title">
																			<h3>
																				<a href="<?php echo e(url('/frontend/?siteid='.$page->siteid.'&pageid='.$page->id)); ?>" class="kt-widget__username">
																					<?php echo e($page->title); ?>

																				</a>
																			</h3>
																		</div>
																		<?php if($page->active == 1): ?>
																			<span class="active-icon">
																				<svg width="24px" height="23px" viewBox="0 0 24 23" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
																					<g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																						<g id="EC_mobile_v1-Copy-3" transform="translate(-723.000000, -437.000000)">
																							<g id="Group" transform="translate(723.000000, 437.000000)">
																								<rect id="Rectangle" stroke="#00C962" fill="#00C962" x="0.5" y="0.5" width="23" height="22" rx="4"></rect>
																								<path d="M9.46055127,13.1230891 C11.6973834,10.3524513 13.8539165,7.68125439 16.0186023,5 C16.6804925,5.58584804 17.329466,6.16030748 18,6.75384653 C15.2435568,10.1673247 12.4953154,13.5706961 9.72615207,17 C8.14752662,15.4357665 6.58378227,13.8862741 5,12.3169625 C5.59156095,11.6619447 6.17590235,11.0148644 6.80336459,10.3201096 C7.68837316,11.2536801 8.55938466,12.1725096 9.46055127,13.1230891" id="Fill-1" fill="#FFFFFF"></path>
																							</g>
																						</g>
																					</g>
																				</svg>
																			</span>
																		<?php endif; ?>
																		<div class="more-details">
																			<ul>
																				<li>
																					<a href="<?php echo e(url('/frontend/?siteid='.$page->siteid.'&pageid='.$page->id)); ?>" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon-edit"></i>
																						<span class="kt-nav__link-text">Edit</span>
																					</a>
																				</li>

																				<li>
																					<a href="<?php echo e(url('pages/destroy/'.$page->id)); ?>" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon-delete"></i>
																						<span class="kt-nav__link-text">Delete Page</span>
																					</a>
																				</li>
																			</ul>
																			<!-- <div class="kt-widget__action">
																				<a href="<?php echo e(route('pages.edit',$page->id)); ?>"  class="btn btn-label-brand btn-bold btn-sm btn-upper">Edit Page </a>
																			</div> -->
																		</div>
																	</div>
																</div>
															</div>
															<!-- <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
																<div class="kt-portlet kt-portlet--height-fluid">
																	<div class="kt-portlet__head kt-portlet__head--noborder">
																		<div class="kt-portlet__head-label">
																			<h3 class="kt-portlet__head-title">
																			</h3>
																		</div>
																		<div class="kt-portlet__head-toolbar">
																			<a href="<?php echo e(url('/#')); ?>" class="btn btn-clean btn-icon" data-toggle="dropdown">
																				<i class="flaticon-more-1"></i>
																			</a>
																			<div class="dropdown-menu dropdown-menu-right">
																				<ul class="kt-nav">
																					<li class="kt-nav__item">
																						<a href="<?php echo e(url('/frontend/?siteid='.$page->siteid)); ?>" class="kt-nav__link">
																							<i class="kt-nav__link-icon flaticon2-line-chart"></i>
																							<span class="kt-nav__link-text">Edit</span>
																						</a>
																					</li>

																					<li class="kt-nav__item">
																						<a href="<?php echo e(url('pages/destroy/'.$page->id)); ?>" class="kt-nav__link">
																							<i class="kt-nav__link-icon flaticon2-avatar"></i>
																							<span class="kt-nav__link-text">Delete Page</span>
																						</a>
																					</li>

																				</ul>
																			</div>
																		</div>
																	</div>
																	<div class="kt-portlet__body kt-portlet__body--fit-y">
																		<div class="kt-widget kt-widget--user-profile-4">
																			<div class="kt-widget__head">
																				<div class="kt-widget__media">
																					<?php
																					//echo $page->image;
																					if($page->image != ''){
																					$imagepath = asset("public/pageAssets/".$page->image);
																					}else{
																						$imagepath = asset("images/no-image.jpg");
																					}
																					?>
																					<img class="kt-widget__img kt-hidden-" src="<?php echo e($imagepath); ?>" alt="image">
																					<div class="kt-widget__pic kt-widget__pic--danger kt-font-danger kt-font-boldest kt-hidden">
																						JB
																					</div>
																				</div>
																				<div class="kt-widget__content">
																					<div class="kt-widget__section">
																						<a href="<?php echo e(url('/#')); ?>" class="kt-widget__username">
																							<?php echo e($page->title); ?>

																						</a>
																						<div class="kt-widget__button">
																							<span class="btn btn-label-warning btn-sm">
																								<?php if($page->active == 1): ?>
																								Active
																								<?php else: ?>
																								Inactive
																								<?php endif; ?>
																							</span>
																						</div>
																						<div class="kt-widget__action">
																							<a href="<?php echo e(route('pages.edit',$page->id)); ?>"  class="btn btn-label-brand btn-bold btn-sm btn-upper">Edit Page </a>
																						</div>
																						</br>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div> -->
														<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
													<?php }else{ ?>

														<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
															<div class="kt-separator kt-separator--space-lg kt-separator--fit kt-separator--border-solid"></div>
														No page found under this site.
													</div>
													<?php } ?>
													</div>
												</div>

										</div>
										<!--End:: Tab Content-->

										<!--Begin:: Tab Content-->
										<div class="tab-pane" id="kt_apps_contacts_view_tab_4" role="tabpanel">

												<div class="kt-form__body">
													<div class="themesetting">
														<?php
														// print_r($setting); exit;
														if($setting != '' && count($setting) > 1){
														if($site->setting !=''){
															$site_settings = json_decode($site->setting);
															// echo '<pre>';
															// print_r($site_settings); exit;
														$settings = json_decode($setting[0]);
														// echo '<pre>';
														// print_r($settings); exit;

														for ($i=0; $i < count($settings); $i++) {
															?>
															<div class="kt-section kt-section--first">
																<div class="kt-section__body">
																	<div class="row">
																		<label class="col-xl-3"></label>
																		<div class="col-lg-9 col-xl-6">
																			<h3 class="kt-section__title kt-section__title-sm"><?php echo e($settings[$i]->name); ?>:</h3>
																			<input type="hidden" name="module[]" value="<?php echo e($settings[$i]->name); ?>">
																		</div>
																	</div>
																	  <?php for($a=0; $a< count($settings[$i]->groups->fieldname); $a++){ ?>
																		<?php for($a=0; $a< count($settings[$i]->groups->fieldname); $a++){
																			$fieldname = preg_replace('/[^a-zA-Z0-9]/', '', strtolower($settings[$i]->groups->fieldname[$a]));
																			$groupname = preg_replace('/[^a-zA-Z0-9]/', '', strtolower($settings[$i]->name));
																			?>

																				<?php if($settings[$i]->groups->fieldtype[$a] == 'Boolean'): ?>
																				<div class="form-group form-group-sm row">
																					<label class="col-xl-2 col-lg-2 col-form-label align-right"><?php echo e($settings[$i]->groups->fieldname[$a]); ?></label>
																					<div class="col-lg-9 col-xl-6">
																						<span class="kt-switch">
																							<?php
																							// $boolean = 0;
																							if(isset($site_settings->settings->$groupname->$fieldname)){
																								$boolean = $site_settings->settings->$groupname->$fieldname;
																							}else{
																								$boolean = 0;
																							}
																							 ?>
																							<label>
																								<input type="checkbox" <?php if($boolean == 1){ echo "checked='checked'"; } ?> name="settings[<?php echo e($groupname); ?>][<?php echo e($fieldname); ?>]" value="1">
																								<span></span>
																							</label>
																						</span>
																					</div>
																				</div>
																				<?php elseif($settings[$i]->groups->fieldtype[$a] == 'Color Picker'): ?>
																				<?php
																				// $colorpicker = '';
																				if(isset($site_settings->settings->$groupname->$fieldname)){
																					$colorpicker = $site_settings->settings->$groupname->$fieldname;
																				} else{
																					$colorpicker = '';
																				}
																				?>
																				<div class="form-group form-group-sm row">
																					<label class="col-xl-2 col-lg-2 col-form-label align-right"><?php echo e($settings[$i]->groups->fieldname[$a]); ?></label>
																					<div class="col-lg-9 col-xl-6">
																								<input type="text" class="form-control" name="settings[<?php echo e($groupname); ?>][<?php echo e($fieldname); ?>]" value="<?php echo $colorpicker; ?>">
																					</div>
																				</div>

																				<?php elseif($settings[$i]->groups->fieldtype[$a] == 'file'): ?>
																				<?php
																				// echo $site_settings->files->$groupname->$fieldname;
																				// $filename = '';
																				if(isset($site_settings->files->$groupname)){
																					$filename = $site_settings->files->$groupname;
																				} else{
																					$filename = '';
																				}
																				?>
																				<div class="form-group row customfile">
																					<label class="col-xl-2 col-lg-2 col-form-label align-right"><?php echo e($settings[$i]->groups->fieldname[$a]); ?></label>
																					<div class="col-lg-9 col-xl-6">
																						<input type="file" class="custom-file-input" id="customFile" name="settingfile[<?php echo e($groupname); ?>][<?php echo e($fieldname); ?>]">
																						<label class="custom-file-label" for="customFile" style="text-align:left;">Choose file</label>
																						<span class="filename"><?php echo $filename; ?></span>
																						<input type="hidden" class="form-control" name="settingoldfile[<?php echo e($groupname); ?>][<?php echo e($fieldname); ?>]" value="<?php echo e($filename); ?>">
																					</div>
																				</div>
																				<?php else: ?>
																					<?php
																						$inputvalue = '';
																						if(isset($site_settings->settings->$groupname->$fieldname)){
																							$inputvalue = $site_settings->settings->$groupname->$fieldname;
																						} else{
																							$inputvalue = '';
																						}
																					?>
																					<div class="form-group form-group-sm row">
																						<label class="col-xl-2 col-lg-2 col-form-label align-right"><?php echo e($settings[$i]->groups->fieldname[$a]); ?></label>
																						<div class="col-lg-9 col-xl-6">
																							<input type="<?php echo e($settings[$i]->groups->fieldtype[$a]); ?>" class="form-control" name="settings[<?php echo e($groupname); ?>][<?php echo e($fieldname); ?>]" value="<?php echo $inputvalue; ?>">
																						</div>
																					</div>
																				<?php endif; ?>
																		<?php } ?>

																	</div>
																<?php } ?>
																</div>
															<div class="kt-separator kt-separator--border-dashed kt-separator--portlet-fit kt-separator--space-lg"></div>
																	<?php
																	}
																}
															}
														?>
													</div>

												</div>

										</div>
										<!--End:: Tab Content-->

										<div class="kt-separator kt-separator--space-lg kt-separator--fit kt-separator--border-solid"></div>
										<div class="kt-form__actions">

											<button type="submit" class="btn btn-brand btn-bold">Save Changes</button>
											<a href="<?php echo e(url('sites')); ?>" class="btn btn-brand btn-bold">Cancel</a>

										</div>
										</form>

									</div>
								</div>
							</div>

							<!--End:: Portlet-->
						</div>

						<!-- end:: Content -->
					</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/builder.local/resources/views/sites/site-edit.blade.php ENDPATH**/ ?>