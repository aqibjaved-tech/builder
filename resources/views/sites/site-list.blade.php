@extends('admin.layouts.header')

@section('title', 'Site Lists')

@section('content')
					<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
						@if ($message = Session::get('success'))
					        <div class="alert alert-success">
					            <p>{{ $message }}</p>
					        </div>
					   @endif
						<!-- begin:: Content Head -->
						<div class="kt-subheader   kt-grid__item" id="kt_subheader">
							<div class="kt-container  kt-container--fluid ">
								<div class="kt-subheader__main">
									<h3 class="kt-subheader__title">
										Sites
									</h3>
									<span class="kt-subheader__separator kt-subheader__separator--v"></span>
									<div class="kt-subheader__group" id="kt_subheader_search">
										<span class="kt-subheader__desc" id="kt_subheader_total">
											{{$sites->count()}} Total </span>
										<form class="kt-margin-l-20" id="kt_subheader_search_form">
											<div class="kt-input-icon kt-input-icon--right kt-subheader__search">
												<input type="text" class="form-control" placeholder="Search..." id="generalSearch">
												<span class="kt-input-icon__icon kt-input-icon__icon--right">
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
									<a href="{{url('/#')}}" class="">
									</a>
									<a href="{{url('/sites/create')}}" class="btn btn-label-brand btn-bold">Add Site</a>
								</div>
							</div>
						</div>

						<!-- end:: Content Head -->

						<!-- begin:: Content -->
						<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

							<!--Begin::Section-->
							<div class="row">
								<div class="col-xl-12">

									<!--begin:: Components/Pagination/Default-->
									<div class="kt-portlet">
										<div class="kt-portlet__body">

											<!--begin: Pagination-->
											<div class="kt-pagination kt-pagination--brand">
												{!! $sites->links() !!}
												<div class="kt-pagination__toolbar">
													@if($sites->total() > 10)
													<select class="form-control kt-font-brand" style="width: 60px">
														<option value="10">10</option>
														<option value="20">20</option>
														<option value="30">30</option>
														<option value="50">50</option>
														<option value="100">100</option>
													</select>
													@endif
													<span class="pagination__desc">
														Displaying {{$sites->count()}} of {{$sites->total()}} records
													</span>
												</div>
											</div>

											<!--end: Pagination-->
										</div>
									</div>

									<!--end:: Components/Pagination/Default-->
								</div>
							</div>

							<!--End::Section-->

							<!--Begin::Section-->
							<div class="row">
								@foreach($sites as $site)
									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
										<div class="pages-list @if($site->active == 1) active-page @endif">
											<div class="page-img">
												<?php
													if($site->logo != ''){
														$siteimage = asset("siteAssets/".$site->logo);
													}else{
														$siteimage = asset("images/no-image.jpg");
													}
												?>
												<img class="kt-widget__img kt-hidden-" src="{{$siteimage}}" alt="image">
												<div class="kt-widget__pic kt-widget__pic--danger kt-font-danger kt-font-boldest kt-hidden">
													JB
												</div>
											</div>
											<div class="page-details">
												<div class="page-title">
													<h3>
														<a href="{{route('sites.edit',$site->id)}}" class="kt-widget__username">
															{{$site->name}}
														</a>
													</h3>
												</div>
												@if($site->active == 1)
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
												@endif
												<div class="more-details">
													<ul>
														<li>
															<a href="{{ url('pages/index',$site->id) }}" class="kt-nav__link">
																<i class="kt-nav__link-icon flaticon2-copy"></i>
																<span class="kt-nav__link-text">Pages</span>
															</a>
														</li>
														<li>
															<a href="{{ route('sites.edit',$site->id) }}" class="kt-nav__link">
																<i class="kt-nav__link-icon flaticon-edit"></i>
																<span class="kt-nav__link-text">Edit Site</span>
															</a>
														</li>

														<li>
															<a href="{{url('site/destroy/'.$site->id)}}" class="kt-nav__link">
																<i class="kt-nav__link-icon flaticon-delete"></i>
																<span class="kt-nav__link-text">Delete Site</span>
															</a>
														</li>
													</ul>
													<!-- <div class="kt-widget__action">
														<a href="{{ route('sites.edit',$site->id) }}"  class="btn btn-label-brand btn-bold btn-sm btn-upper">Edit Page </a>
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
													<a href="{{url('/#')}}" class="btn btn-clean btn-icon" data-toggle="dropdown">
														<i class="flaticon-more-1"></i>
													</a>
													<div class="dropdown-menu dropdown-menu-right">
														<ul class="kt-nav">
															<li class="kt-nav__item">
																<a href="{{ url('pages/index',$site->id) }}" class="kt-nav__link">
																	<i class="kt-nav__link-icon flaticon2-copy"></i>
																	<span class="kt-nav__link-text">Pages</span>
																</a>
															</li>
															<li class="kt-nav__item">
																<a href="{{ route('sites.edit',$site->id) }}" class="kt-nav__link">
																	<i class="kt-nav__link-icon flaticon2-edit"></i>
																	<span class="kt-nav__link-text">Edit</span>
																</a>
															</li>
															<li class="kt-nav__item">
																<a href="{{url('site/destroy/'.$site->id)}}" class="kt-nav__link">
																	<i class="kt-nav__link-icon flaticon2-delete"></i>
																	<span class="kt-nav__link-text">Delete Site</span>
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
															if($site->logo != ''){
															$siteimage = asset("siteAssets/".$site->logo);
															}else{
																$siteimage = asset("images/no-image.jpg");
															}
															?>
															<img class="kt-widget__img kt-hidden-" src="{{$siteimage}}" alt="image">
															<div class="kt-widget__pic kt-widget__pic--danger kt-font-danger kt-font-boldest kt-hidden">
																JB
															</div>
														</div>
														<div class="kt-widget__content">
															<div class="kt-widget__section">
																<a href="{{url('/#')}}" class="kt-widget__username">
																	{{$site->name}}
																</a>
																<div class="kt-widget__button">
																	<span class="btn btn-label-warning btn-sm">Active</span>
																</div>
																<div class="kt-widget__action">
																	<a href="{{ route('sites.edit',$site->id) }}"  class="btn btn-label-brand btn-bold btn-sm btn-upper">Edit Site </a>
																</div>
																</br>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div> -->
								@endforeach
							</div>

							<!--End::Section-->

							<!--Begin::Section-->
							<div class="row">
								<div class="col-xl-12">

									<!--begin:: Components/Pagination/Default-->
									<div class="kt-portlet">
										<div class="kt-portlet__body">

											<!--begin: Pagination-->
											<div class="kt-pagination kt-pagination--brand">
												{!! $sites->links() !!}
												<div class="kt-pagination__toolbar">
													@if($sites->total() > 10)
													<select class="form-control kt-font-brand" style="width: 60px">
														<option value="10">10</option>
														<option value="20">20</option>
														<option value="30">30</option>
														<option value="50">50</option>
														<option value="100">100</option>
													</select>
													@endif
													<span class="pagination__desc">
														Displaying {{$sites->count()}} of {{$sites->total()}} records
													</span>
												</div>
											</div>

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
@endsection
