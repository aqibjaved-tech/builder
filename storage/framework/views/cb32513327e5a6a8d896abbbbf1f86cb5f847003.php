<?php $__env->startSection('title', 'Edit Site'); ?>

<?php $__env->startSection('content'); ?>
					<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

						<!-- begin:: Content Head -->
						<div class="kt-subheader   kt-grid__item" id="kt_subheader">
							<div class="kt-container  kt-container--fluid ">
								<!-- <div class="kt-subheader__main">
									<h3 class="kt-subheader__title">
										Edit Theme
									</h3>
									<span class="kt-subheader__separator kt-subheader__separator--v"></span>
									<!-- <div class="kt-subheader__group" id="kt_subheader_search">
										<span class="kt-subheader__desc" id="kt_subheader_total">
											---<?php echo e($theme->name); ?>--- </span>
									</div>
								</div> -->
								<div class="kt-subheader__toolbar">
									<a href="<?php echo e(url('themes')); ?>" class="btn btn-default btn-bold">
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
							if($theme->image != 'null' && $theme->image !=''){
								$image = asset("themeAssets/".$theme->image);
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
													<a href="#" class="kt-widget__title"><?php echo e($theme->name); ?></a>
													<div class="kt-widget__action">

													</div>
												</div>
												<div class="kt-widget__info">
													<div class="kt-widget__desc">
													<?php echo e($theme->description); ?>

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
												<a class="nav-link active" data-toggle="tab" href="#kt_apps_contacts_view_tab_1" role="tab">
													<i class="flaticon2-calendar-3"></i> Theme Details
												</a>
											</li>
											<li class="nav-item">
												<a class="nav-link " data-toggle="tab" href="#kt_apps_contacts_view_tab_2" role="tab">
													<i class="flaticon2-user-outline-symbol"></i> Modules
												</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" data-toggle="tab" href="#kt_apps_contacts_view_tab_3" role="tab">
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
                    <form  method="post" id="edit_project_setting" action="<?php echo e(route('themes.update',$theme->id)); ?>" enctype="multipart/form-data">
                     <?php echo csrf_field(); ?>
                     <?php echo method_field('PUT'); ?>

										<!--Begin:: Tab Content-->
										<div class="tab-pane active  site-form" id="kt_apps_contacts_view_tab_1" role="tabpanel">
											<!--begin: Form Wizard Form-->


												<div class="kt-section kt-section--first">
                          <!--begin: Form Wizard Step 1-->
                          <div class="kt-wizard-v1__content" data-ktwizard-type="step-content" data-ktwizard-state="current">
                              <div class="kt-heading kt-heading--md">Theme Details:</div>
                              <div class="kt-section kt-section--first themes">

                                      <div class="row">
                                          <div class="col-xl-12">
                                              <div class="kt-section__body">
                                                  <div class="form-group row">
                                                      <label class="col-xl-3 col-lg-3 col-form-label">Theme Name</label>
                                                      <div class="col-lg-9 col-xl-9">
                                                          <input class="form-control" type="text" value="<?php echo e($theme->name); ?>" name="name" id="themename" placeholder="Theme Name">
                                                      </div>
                                                  </div>
                                                  <div class="form-group row">
                                                      <label class="col-xl-3 col-lg-3 col-form-label">Description</label>
                                                      <div class="col-lg-9 col-xl-9">
                                                          <textarea class="form-control" rows="3" name="description" id="themedescription"><?php echo e($theme->description); ?></textarea>
                                                      </div>
                                                  </div>
                                                  <!-- <div class="form-group row customfile">
                                                      <label class="col-xl-3 col-lg-3 col-form-label">Favicon</label>
                                                      <div class="col-lg-9 col-xl-6">
                                                          <input type="hidden" name="oldfavicon" value="<?php echo e($theme->favicon); ?>">
                                                          <input type="file" class="form-control custom-file-input" id="customFile" name="favicon">
                                                          <label class="custom-file-label" for="customFile" style="text-align:left;"><?php echo e($theme->favicon); ?></label>
                                                      </div>
                                                  </div> -->
                                                  <?php
                                                  if($theme->favicon != 'null' && $theme->favicon !=''){
                                                    $favicon = asset("themeAssets/".$theme->favicon);
                                                      // $image = asset("images/no-image.jpg");
                                                  }else{
                                                    $favicon = asset("images/no-image.jpg");
                                                  }
                                                   // echo $image;
                                                  ?>
                                                  <input type="hidden" name="oldfavicon" value="<?php echo e($theme->favicon); ?>">
                    															<div class="form-group row">
                                                    <label class="col-xl-3 col-lg-3 col-form-label">Favicon</label>
                                                    <div class="col-lg-9 col-xl-6">
                                                        <div class="kt-avatar kt-avatar--outline kt-avatar--circle-" id="kt_apps_user_add_avatar">
                                                            <div class="kt-avatar__holder" style="background-image: url(<?php echo e($favicon); ?>);" id="favicon_preview"></div>
                                                            <label class="kt-avatar__upload" data-toggle="kt-tooltip" title="" data-original-title="Change avatar">
                                                                <i class="fa fa-pen"></i>
                                                                <input type="file" name="favicon" accept=".png, .jpg, .jpeg" id="favicon_upload">
                                                            </label>
                                                            <span class="kt-avatar__cancel" data-toggle="kt-tooltip" title="" data-original-title="Cancel avatar">
                                                                <i class="fa fa-times"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                  <div class="form-group row">
                                                    <input type="hidden" name="oldimage" value="<?php echo e($theme->image); ?>">
                                                      <label class="col-xl-3 col-lg-3 col-form-label">Image</label>
                                                      <div class="col-lg-9 col-xl-6">
                                                          <div class="kt-avatar kt-avatar--outline kt-avatar--circle-" id="kt_apps_user_add_avatar">
                                                              <div class="kt-avatar__holder" style="background-image: url(<?php echo e($image); ?>);" id="image_preview"></div>
                                                              <label class="kt-avatar__upload" data-toggle="kt-tooltip" title="" data-original-title="Change avatar">
                                                                  <i class="fa fa-pen"></i>
                                                                  <input type="file" name="image" accept=".png, .jpg, .jpeg" id="image_upload">
                                                              </label>
                                                              <span class="kt-avatar__cancel" data-toggle="kt-tooltip" title="" data-original-title="Cancel avatar">
                                                                  <i class="fa fa-times"></i>
                                                              </span>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="form-group row">
                                                      <label class="col-xl-3 col-lg-3 col-form-label">Author Name</label>
                                                      <div class="col-lg-9 col-xl-9">
                                                          <div class="input-group">
                                                              <input type="text" name="authorname" id="authorname" class="form-control" value="<?php echo e($theme->authorname); ?>" placeholder="Author Name" aria-describedby="basic-addon1">
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="form-group row">
                                                      <label class="col-xl-3 col-lg-3 col-form-label">Author Email</label>
                                                      <div class="col-lg-9 col-xl-9">
                                                          <div class="input-group">
                                                              <div class="input-group-prepend"><span class="input-group-text"><i class="la la-at"></i></span></div>
                                                              <input type="text" name="authoremail" id="authoremail" class="form-control" value="<?php echo e($theme->authoremail); ?>" placeholder="Author Email" aria-describedby="basic-addon1">
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="form-group row">
                                                      <label class="col-xl-3 col-lg-3 col-form-label">Author WebSite</label>
                                                      <div class="col-lg-9 col-xl-9">
                                                          <div class="input-group">
                                                              <input type="text" class="form-control" id="authorwebsite" name="authorwebsite" placeholder="Author Website" value="<?php echo e($theme->authorwebsite); ?>">
                                                              <div class="input-group-append"><span class="input-group-text">.com</span></div>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="form-group form-group-last row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">Active</label>
                                                        <div class="col-3">
                                                                <span class="kt-switch kt-switch--lg kt-switch--icon">
                                                                    <label>
                                                                        <input type="checkbox" <?php if($theme->active == 1){ echo "checked"; } ?> name="active" value="1">
                                                                        <span></span>
                                                                    </label>
                                                                </span>
                                                        </div>
                                                    </div>
                                              </div>
                                          </div>
                                      </div>

                              </div>
                          </div>
                          <!--end: Form Wizard Step 1-->

												</div>

											<!--end: Form Wizard Form-->
										</div>

										<div class="tab-pane site-form" id="kt_apps_contacts_view_tab_2" role="tabpanel">

                          <div class="kt-wizard-v1__content" data-ktwizard-type="step-content">
                              <div class="kt-section kt-section--first themes">
                                <div class="row">
																	<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 custom-button">
																			<a href="<?php echo e(url('/modules/create',$theme->id)); ?>" class="btn btn-label-brand btn-bold">Add Module</a>
																	</div>
																	<?php
																	if(count($modules) > 0){ ?>
                                  <?php $__currentLoopData = $modules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $module): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                      <?php
                                      if($module->image != ''){
                                        $image = asset("moduleAssets/".$module->image);
                                          // $image = asset("images/no-image.jpg");
                                      }else{
                                        $image = asset("images/no-image.jpg");
                                      }
                                      // echo $image;
                                      ?>
                                      <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                        <div class="theme-item">
                                          <div class="kt-widget__media">
                                            <img src="<?php echo e($image); ?>">
                                            <div class="overlay-options">
                                              <a href="<?php echo e(route('modules.edit',$module->id)); ?>" class="edit">
                                                <svg width="42px" height="42px" viewBox="0 0 42 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                  <defs>
                                                    <polygon id="path-1" points="0.0715695652 0.234626087 7.43478261 0.234626087 7.43478261 7.56532174 0.0715695652 7.56532174"></polygon>
                                                  </defs>
                                                  <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <g id="EC_mobile_v1-Copy" transform="translate(-586.000000, -368.000000)">
                                                      <g id="Group-2" transform="translate(586.000000, 368.000000)">
                                                        <g id="Group-4">
                                                          <circle id="Oval" fill="#00C962" cx="21" cy="21" r="21"></circle>
                                                          <g id="Group-8" transform="translate(12.000000, 10.000000)">
                                                            <g id="Group-3" transform="translate(10.565217, 0.156717)">
                                                              <mask id="mask-2" fill="white">
                                                                <use xlink:href="#path-1"></use>
                                                              </mask>
                                                              <g id="Clip-2"></g>
                                                              <path d="M3.28652609,0.234626087 C3.46887391,0.280408696 3.65396087,0.317191304 3.83278696,0.373930435 C4.39235217,0.551191304 4.87600435,0.857973913 5.29352609,1.26766957 C5.66996087,1.63706087 6.04835217,2.00527826 6.41148261,2.3871913 C7.07513478,3.08566957 7.49539565,3.88901739 7.4277,4.88645217 C7.40461304,5.22375652 7.3197,5.55832174 7.08335217,5.79701739 C6.48113478,6.40510435 5.85113478,6.9854087 5.24500435,7.56532174 L0.0715695652,2.39188696 C0.0950478261,2.36566957 0.133004348,2.31832174 0.175656522,2.27527826 C0.588091304,1.86245217 1.01422174,1.46214783 1.41022174,1.03366957 C1.78939565,0.623191304 2.2170913,0.31953913 2.77978696,0.234626087 L3.28652609,0.234626087 Z" id="Fill-1" fill="#FFFFFF" mask="url(#mask-2)"></path>
                                                            </g>
                                                            <path d="M0,14.6653435 C0.0524347826,14.7103435 0.108782609,14.7518217 0.157304348,14.8011261 C1.90721739,16.571387 3.65634783,18.3420391 5.40547826,20.1130826 L0,20.1130826 L0,14.6653435 Z" id="Fill-4" fill="#FFFFFF"></path>
                                                            <path d="M9.441,3.91805217 L14.8464783,9.32353043 C12.1546957,12.4731391 9.4503913,15.6364435 6.72847826,18.8208783 C4.93630435,17.0001391 3.15273913,15.1872261 1.35117391,13.3567043 C4.05078261,10.2067043 6.74491304,7.06335652 9.441,3.91805217" id="Fill-6" fill="#FFFFFF"></path>
                                                          </g>
                                                        </g>
                                                      </g>
                                                    </g>
                                                  </g>
                                                </svg>
                                              </a>
                                              <a href="<?php echo e(url('module/destroy/'.$module->id)); ?>" class="delete">
                                                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 486.4 486.4" style="enable-background:new 0 0 486.4 486.4;" xml:space="preserve">
                                                  <g>
                                                    <g>
                                                      <path d="M446,70H344.8V53.5c0-29.5-24-53.5-53.5-53.5h-96.2c-29.5,0-53.5,24-53.5,53.5V70H40.4c-7.5,0-13.5,6-13.5,13.5
                                                        S32.9,97,40.4,97h24.4v317.2c0,39.8,32.4,72.2,72.2,72.2h212.4c39.8,0,72.2-32.4,72.2-72.2V97H446c7.5,0,13.5-6,13.5-13.5
                                                        S453.5,70,446,70z M168.6,53.5c0-14.6,11.9-26.5,26.5-26.5h96.2c14.6,0,26.5,11.9,26.5,26.5V70H168.6V53.5z M394.6,414.2
                                                        c0,24.9-20.3,45.2-45.2,45.2H137c-24.9,0-45.2-20.3-45.2-45.2V97h302.9v317.2H394.6z"/>
                                                      <path d="M243.2,411c7.5,0,13.5-6,13.5-13.5V158.9c0-7.5-6-13.5-13.5-13.5s-13.5,6-13.5,13.5v238.5
                                                        C229.7,404.9,235.7,411,243.2,411z"/>
                                                      <path d="M155.1,396.1c7.5,0,13.5-6,13.5-13.5V173.7c0-7.5-6-13.5-13.5-13.5s-13.5,6-13.5,13.5v208.9
                                                        C141.6,390.1,147.7,396.1,155.1,396.1z"/>
                                                      <path d="M331.3,396.1c7.5,0,13.5-6,13.5-13.5V173.7c0-7.5-6-13.5-13.5-13.5s-13.5,6-13.5,13.5v208.9
                                                        C317.8,390.1,323.8,396.1,331.3,396.1z"/>
                                                    </g>
                                                  </g>
                                                  <g>
                                                  </g>
                                                  <g>
                                                  </g>
                                                  <g>
                                                  </g>
                                                  <g>
                                                  </g>
                                                  <g>
                                                  </g>
                                                  <g>
                                                  </g>
                                                  <g>
                                                  </g>
                                                  <g>
                                                  </g>
                                                  <g>
                                                  </g>
                                                  <g>
                                                  </g>
                                                  <g>
                                                  </g>
                                                  <g>
                                                  </g>
                                                  <g>
                                                  </g>
                                                  <g>
                                                  </g>
                                                  <g>
                                                  </g>
                                                </svg>
                                              </a>
                                            </div>
                                          </div>
                                          <h3><?php echo e($module->name); ?></h3>
                                        </div>
                                      </div>
                                      <!-- <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                        <div class="kt-portlet kt-portlet--height-fluid" style="background:url(<?php echo e($image); ?>); background-size:cover;">
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
                                                    <a href="<?php echo e(route('modules.edit',$module->id)); ?>" class="kt-nav__link">
                                                      <i class="kt-nav__link-icon flaticon2-line-chart"></i>
                                                      <span class="kt-nav__link-text">Edit</span>
                                                    </a>
                                                  </li>

                                                  <li class="kt-nav__item">
                                                    <a href="<?php echo e(url('module/destroy/'.$module->id)); ?>" class="kt-nav__link">
                                                      <i class="kt-nav__link-icon flaticon2-avatar"></i>
                                                      <span class="kt-nav__link-text">Delete Module</span>
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
                                                  <div class="kt-widget__pic kt-widget__pic--danger kt-font-danger kt-font-boldest kt-hidden">
                                                    JB
                                                  </div>
                                                </div>
                                                <div class="kt-widget__content">
                                                  <div class="kt-widget__section">
                                                    <a href="<?php echo e(url('/#')); ?>" class="kt-widget__username">
                                                      <?php echo e($module->name); ?>

                                                    </a>
                                                    <div class="kt-widget__button">
                                                      <span class="btn btn-label-warning btn-sm">Active</span>
                                                    </div>
                                                    <div class="kt-widget__action">
                                                      <a href="<?php echo e(route('modules.edit',$module->id)); ?>"  class="btn btn-label-brand btn-bold btn-sm btn-upper">Edit Module </a>
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
																	No module found under this theme.
																</div>
																<?php } ?>
                                </div>
                              </div>
                          </div>
										</div>
                    <div class="tab-pane site-form" id="kt_apps_contacts_view_tab_3" role="tabpanel">


                          <div class="kt-wizard-v1__content" data-ktwizard-type="step-content">
                              <div class="kt-section kt-section--first">
                                  <div class="kt-wizard-v1__form">
                                      <div class="row">
                                          <div class="col-xl-12">
                                              <div class="kt-section__body">
                                                  <div class="form-group row">
                                                      <div class="col-lg-9 col-xl-6">
                                                          <h3 class="kt-section__title kt-section__title-md">Theme Settings</h3>
                                                      </div>
                                                  </div>
                                                  <div class="btn btn-brand btn-md btn-wide kt-font-bold kt-font-transform-u add-new-group">
                                                      Add New Group
                                                  </div>
                                                  <br>
                                                  <br>


                                                <div class="groups-feilds">
                                                  <?php
                                                  //echo $theme->setting
                                                  if($theme->setting != ''){
                                                  $settings = json_decode($theme->setting);

                                                  $counter = 1;
                                                  for ($i=0; $i<count($settings); $i++) {
                                                  ?>
                                                  <div class="outerdiv">
                                                    <div class="form-group row add_new_groups">
                                                        <div class="col-lg-3 col-xl-3">
                                                            <div class="input-group">
                                                                <input type="text" class="form-control groupname" placeholder="Group Name" name="groupname[]" value="<?php echo e($settings[$i]->name); ?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-9 col-xl-9">
                                                          <div class="btn btn-brand btn-md btn-wide kt-font-bold kt-font-transform-u removegroup">
                                                              -
                                                          </div>
                                                                <!-- <span class="removegroup">X</span> -->
                                                        </div>
                                                    </div>

                                            <?php for($a=0; $a< count($settings[$i]->groups->fieldname); $a++){ ?>
                                                <div class="form-group row add_new_content">
                                                    <div class="col-lg-3 col-xl-3">
                                                        <div class="input-group">
                                                          <input type="text" class="form-control fieldname" name="groupname[]" placeholder="Field Name" aria-describedby="basic-addon1" value="<?php echo e($settings[$i]->groups->fieldname[$a]); ?>">
                                                    </div>
                                                </div>
                                                    <div class="col-lg-3 col-xl-3">
                                                        <select class="form-control fieldtype" name="groupname[]">
                                                            <option <?php if($settings[$i]->groups->fieldtype[$a] == 'text'){ echo "selected='selected'"; } ?>  value="text">Textbox</option>
                                                            <option <?php if($settings[$i]->groups->fieldtype[$a] == 'boolean'){ echo "selected='selected'"; } ?> value="boolean">Boolean</option>
                                                            <option <?php if($settings[$i]->groups->fieldtype[$a] == 'file'){ echo "selected='selected'"; } ?> value="file">Image</option>
                                                            <option <?php if($settings[$i]->groups->fieldtype[$a] == 'colorpicker'){ echo "selected='selected'"; } ?> value="colorpicker">Color Picker</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-3 col-xl-3">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control defaultvalue" placeholder="Default" name="Firstgroup[]" aria-describedby="basic-addon1" value="<?php echo e($settings[$i]->groups->defaultvalue[$a]); ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-xl-3">
                                                        <div class="btn btn-brand btn-md btn-wide kt-font-bold kt-font-transform-u add-new-field">
                                                            +
                                                        </div>
                                                        <div class="btn btn-brand btn-md btn-wide kt-font-bold kt-font-transform-u remove-field">
                                                            -
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php }?>
                                                <hr>
                                              </div>
                                              <?php
                                              }
                                            }else{
                                              ?>
                                              <?php
                                            }
                                              ?>
                                              </div>
                                                  <div class="btn btn-brand btn-md btn-wide kt-font-bold kt-font-transform-u add-new-group">
                                                      Add New Group
                                                  </div>

                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>


										</div>

										<div class="kt-separator kt-separator--space-lg kt-separator--fit kt-separator--border-solid"></div>
										<div class="kt-form__actions">

											<button type="button" id="nextaction" class="btn btn-brand btn-bold">Save Changes</button>
											<a href="<?php echo e(url('themes')); ?>" class="btn btn-brand btn-bold">Cancel</a>

										</div>
										</form>

										<!--End:: Tab Content-->

									</div>
								</div>
							</div>

							<!--End:: Portlet-->
						</div>

						<!-- end:: Content -->
					</div>
<?php $__env->stopSection(); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
  
  // $.uploadPreview({
  //   input_field: "#image-upload",
  //   preview_box: "#image-preview",
  //   label_field: "#image-label"
  // });

  function readURL(input,previewclass) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $(previewclass).css('background-image', 'url('+e.target.result+')');
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#image_upload").change(function () {
        var previewclass = '#image_preview';
        readURL(this,previewclass);
    });

    $("#favicon_upload").change(function () {
        var previewclass = '#favicon_preview';
        readURL(this,previewclass);
    });


  $('#kt_apps_contacts_view_tab_3').css('display','none');
  $('#kt_apps_contacts_view_tab_2').css('display','none');
  $('.nav-link').click(function(){
    var div = $(this).attr('href');
    $('.tab-pane.site-form').css('display','none');
    $(div).css('display','block');
  });
  $(document).on('click','.add-new-field',function(){
    // alert('sdfsf');
    $('.add_new_content:last').clone().find("input:text").val("").end().insertAfter($(this).parent().parent());
  });
  $(document).on('click','.remove-field',function(){
    var size = $(this).parent().parent().parent().find('.add_new_content').length;
    if(size > 1){
      $(this).parent().parent().remove();
    }
  });
  $(document).on('click','.add-new-group',function(){
    // $('.groups-feilds:first').clone().find(".add_new_content:last input:text").val("").end().insertAfter('.groups-feilds:last');
    $.ajax({
        type:'GET',
        url: '<?php echo e(url("widget/addgroup")); ?>',
        success: function(response)
        {
          // alert(response);
            $('.groups-feilds:last').append(response);
        }
    });
    });
    $(document).on('keyup','.groupname',function(){
          var group_value = $(this).val();
          var group_value11 = group_value.toLowerCase().replace(/[^a-z0-9\s]/gi, '').replace(/[_\s]/g, '');
          $(this).parent().parent().parent().parent().find('.add_new_content').find('.fieldname').attr('name','groups['+group_value11+'][fieldname][]');
          $(this).parent().parent().parent().parent().find('.add_new_content').find('.fieldtype').attr('name','groups['+group_value11+'][fieldtype][]');
          $(this).parent().parent().parent().parent().find('.add_new_content').find('.defaultvalue').attr('name','groups['+group_value11+'][defaultvalue][]');
    });
    $(document).on('click','#nextaction',function(e){
      e.preventDefault();
          $('.groupname').each(function(index) {
              var group_value = $(this).val();
              var group_value11 = group_value.toLowerCase().replace(/[^a-z0-9\s]/gi, '').replace(/[_\s]/g, '');
              //alert(group_value11);
              $(this).parent().parent().parent().parent().find('.add_new_content').find('.fieldname').attr('name','groups['+group_value11+'][fieldname][]');
              $(this).parent().parent().parent().parent().find('.add_new_content').find('.fieldtype').attr('name','groups['+group_value11+'][fieldtype][]');
              $(this).parent().parent().parent().parent().find('.add_new_content').find('.defaultvalue').attr('name','groups['+group_value11+'][defaultvalue][]');
          });
          // alert('sdfsdfd');
          // setTimeout(function(){
          $('#edit_project_setting').submit();
        // }, 3000);
    });
    $(document).on('click','.removegroup',function(){
      $(this).parent().parent().parent().remove();
    });
    //alert(lenght);

});
</script>

<?php echo $__env->make('admin.layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pageBuilder\resources\views/themes/theme-edit.blade.php ENDPATH**/ ?>