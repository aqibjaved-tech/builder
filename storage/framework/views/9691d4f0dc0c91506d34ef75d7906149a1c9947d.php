<?php $__env->startSection('title', 'Theme Lists'); ?>
<?php $__env->startSection('content'); ?>
<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

						<!-- begin:: Content Head -->
						<div class="kt-subheader   kt-grid__item" id="kt_subheader">
							<div class="kt-container  kt-container--fluid ">
								<div class="kt-subheader__main">
									<h3 class="kt-subheader__title">
										Themes
									</h3>
									<span class="kt-subheader__separator kt-subheader__separator--v"></span>
									<div class="kt-subheader__group" id="kt_subheader_search">
										<span class="kt-subheader__desc" id="kt_subheader_total">
										<?php echo e($themes->total()); ?> Total </span>
										<form method="post" class="kt-margin-l-20" id="kt_subheader_search_form" action="<?php echo e(url('themes/search')); ?>">
											<input type="hidden" name="_token" id="csrf-token" value="<?php echo e(Session::token()); ?>" />
											<div class="kt-input-icon kt-input-icon--right kt-subheader__search">
												<input type="text" class="form-control" placeholder="Search..." id="generalSearch" name="search">
												<span class="kt-input-icon__icon kt-input-icon__icon--right" id="themesearch">
													<span>
														<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
															<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																<rect id="bound" x="0" y="0" width="24" height="24" />
																<path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" id="Path-2" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																<path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" id="Path" fill="#000000" fill-rule="nonzero" />
															</g>
														</svg>

														<!--<i class="flaticon2-search-1"></i>-->
													</span>
												</span>
											</div>
										</form>
									</div>
								</div>
								<div class="kt-subheader__toolbar displayblock">
									<a href="<?php echo e(url('/#')); ?>" class="">
									</a>
									<a href="<?php echo e(url('/themes/create')); ?>" class="btn btn-label-brand btn-bold">Add Theme</a>
								</div>
							</div>
						</div>

						<!-- end:: Content Head -->
					<?php if($message = Session::get('success')): ?>
				        <div class="alert alert-success">
				            <p><?php echo e($message); ?></p>
				        </div>
				   <?php endif; ?>
						<!-- begin:: Content -->
						<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

							<!--Begin::Section-->
							<div class="row">
								<div class="col-xl-12">

									<!--begin:: Components/Pagination/Default-->
									<?php if($themes->count() > 0): ?>
									<div class="kt-portlet">
										<div class="kt-portlet__body">

											<!--begin: Pagination-->

											<div class="kt-pagination kt-pagination--brand">
												<ul class="kt-pagination__links">
												<?php echo $themes->links(); ?>

												</ul>
												<div class="kt-pagination__toolbar">
													<?php if($themes->total() > 10): ?>
													<select class="form-control kt-font-brand" style="width: 60px" id="number_records">
														<option value="10">10</option>
														<option value="20">20</option>
														<option value="30">30</option>
														<option value="50">50</option>
														<option value="100">100</option>
													</select>
													<?php endif; ?>
													<span class="pagination__desc">
														Displaying <?php echo e($themes->count()); ?> of <?php echo e($themes->total()); ?> records
													</span>
												</div>
											</div>


											<!--end: Pagination-->
										</div>
									</div>
	<?php endif; ?>
									<!--end:: Components/Pagination/Default-->
								</div>
							</div>

							<!--End::Section-->

							<!--Begin::Section-->
							<div class="row">
							    <?php if($themes->count() > 0): ?>
								<?php $__currentLoopData = $themes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $theme): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<?php
								if($theme->image !=''){
									$background = 'background : url({{ asset("themeAssets/".$theme->image)}}); background-size:cover;';
								}else{
									$background = 'background : transparent;';
								}
							  ?>
								<div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
									<div class="kt-portlet kt-portlet--height-fluid" style="<?php echo e($background); ?>">
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
															<a href="<?php echo e(route('themes.edit',$theme->id)); ?>" class="kt-nav__link">
																<i class="kt-nav__link-icon flaticon2-edit"></i>
																<span class="kt-nav__link-text">Edit</span>
															</a>
														</li>
														<li class="kt-nav__item">
															<a href="<?php echo e(url('themes/duplicate',$theme->id)); ?>" class="kt-nav__link">
																<i class="kt-nav__link-icon flaticon2-copy"></i>
																<span class="kt-nav__link-text">Duplicate</span>
															</a>
														</li>
														<!-- <li class="kt-nav__item">
															<a href="<?php echo e(url('sites/create')); ?>" class="kt-nav__link">
																<i class="kt-nav__link-icon flaticon2-link"></i>
																<span class="kt-nav__link-text">Create New Site</span>
															</a>
														</li> -->
														<li class="kt-nav__item">
															<a href="<?php echo e(url('modules',$theme->id)); ?>" class="kt-nav__link">
																<i class="kt-nav__link-icon flaticon2-link"></i>
																<span class="kt-nav__link-text">Modules</span>
															</a>
														</li>

														<li class="kt-nav__item">
															<a href="<?php echo e(url('themes/destroy/'.$theme->id)); ?>" class="kt-nav__link">
																<i class="kt-nav__link-icon flaticon2-delete"></i>
																<span class="kt-nav__link-text">Delete Theme</span>
															</a>
														</li>

													</ul>
												</div>
											</div>
										</div>
										<div class="kt-portlet__body kt-portlet__body--fit-y">

											<!--begin::Widget -->
											<div class="kt-widget kt-widget--user-profile-4">
												<div class="kt-widget__head">
													<div class="kt-widget__media">
														<?php
														if($theme->favicon != 'null'){
															$favicon = asset("themeAssets/".$theme->favicon);
														}else{
															$favicon = asset("images/no-image.jpg");
														}
														 ?>
														<img class="kt-widget__img kt-hidden-" src="<?php echo e($favicon); ?>" alt="image">
														<div class="kt-widget__pic kt-widget__pic--danger kt-font-danger kt-font-boldest kt-hidden">
															JB
														</div>
													</div>
													<div class="kt-widget__content">
														<div class="kt-widget__section">
															<a href="<?php echo e(route('themes.edit',$theme->id)); ?>" class="kt-widget__username">
																<?php echo e($theme->name); ?>

															</a>
															<div class="kt-widget__button">
																
																	<?php if($theme->active == 1): ?>
																	<span class="btn btn-label-success btn-sm">
																	Active
																	</span>
																	<?php else: ?>
																	<span class="btn btn-label-warning btn-sm">
																	Inactive
																	</span>
																	
																	<?php endif; ?>
																
															</div>
															<div class="kt-widget__action">
																<a href="<?php echo e(route('themes.edit',$theme->id)); ?>"  class="btn btn-label-brand btn-bold btn-sm btn-upper">Edit Theme </a>
															</div>
														</br>
														</div>
													</div>
												</div>
											</div>

											<!--end::Widget -->
										</div>
									</div>
								</div>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								<?php else: ?>
								<div class="col-xl-12">
								    <div class="kt-pagination kt-pagination--brand">

								No Record Found!
								</div>
								</div>
								<?php endif; ?>
							</div>

							<!--End::Section-->

							<!--Begin::Section-->
							<div class="row">
								<div class="col-xl-12">

									<!--begin:: Components/Pagination/Default-->
										<?php if($themes->count() > 0): ?>
									<div class="kt-portlet">
										<div class="kt-portlet__body">

											<!--begin: Pagination-->

											<div class="kt-pagination kt-pagination--brand">
												<?php echo $themes->links(); ?>

												<div class="kt-pagination__toolbar">
													<?php if($themes->total() > 10): ?>
													<select class="form-control kt-font-brand" style="width: 60px">
														<option value="10">10</option>
														<option value="20">20</option>
														<option value="30">30</option>
														<option value="50">50</option>
														<option value="100">100</option>
													</select>
													<?php endif; ?>
													<span class="pagination__desc">
														Displaying <?php echo e($themes->count()); ?> of <?php echo e($themes->total()); ?> records
													</span>
												</div>

											</div>
                                            <?php endif; ?>
											<!--end: Pagination-->
										</div>
									</div>

									<!--end:: Components/Pagination/Default-->
								</div>
							</div>

							<!--End::Section-->
						</div>

						<!-- end:: Content -->
					</div>
					<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
					<script type="text/javascript">
					$(document).ready(function(){
						$('#themesearch').click(function(){
							//alert('sdfsd');
							$('#kt_subheader_search_form').submit();
						});
						$('#number_records').change(function(){
							localStorage.setItem('selected', $(this).val());
  							location.reload();
						})
					});
					</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/builder.local/resources/views/themes/theme-list.blade.php ENDPATH**/ ?>