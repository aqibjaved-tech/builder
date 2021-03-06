@extends('admin.layouts.header')

@section('title', 'Edit Module')

@section('content')
					<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
						@if ($errors->any())
							 <div class="alert alert-danger">
									 <strong>Whoops!</strong> There were some problems with your input.<br><br>
									 <ul>
											 @foreach ($errors->all() as $error)
													 <li>{{ $error }}</li>
											 @endforeach
									 </ul>
							 </div>
					 @endif
						<!-- begin:: Content Head -->
						<div class="kt-subheader   kt-grid__item" id="kt_subheader">
							<div class="kt-container  kt-container--fluid ">
								<div class="kt-subheader__main">
									<h3 class="kt-subheader__title">
										Edit Module
									</h3>
									<span class="kt-subheader__separator kt-subheader__separator--v"></span>
									<!-- <div class="kt-subheader__group" id="kt_subheader_search">
										<span class="kt-subheader__desc" id="kt_subheader_total">
											---{{$module->name}}--- </span>
									</div> -->
								</div>
								<div class="kt-subheader__toolbar">
									<a href="{{url('modules/'.$module->themeid)}}" class="btn btn-default btn-bold">
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

							<!--begin:: Portlet-->
							<div class="kt-portlet ">
								<div class="kt-portlet__body">
									<div class="kt-widget kt-widget--user-profile-3">
										<div class="kt-widget__top">
											<?php
											if($module->image != ''){
												$image = asset("public/moduleAssets/".$module->image);
													// $image = asset("images/no-image.jpg");
											}else{
												$image = asset("images/no-image.jpg");
											}
											// echo $image;
											?>
											<div class="kt-widget__media kt-hidden-">
												<img src="{{$image}}" alt="image">
											</div>
											<div class="kt-widget__content">
												<div class="kt-widget__head">
													<a href="javascript:void(0);" class="kt-widget__title">{{$module->name}}</a>
													<div class="kt-widget__action">

													</div>
												</div>
												<div class="kt-widget__info">
													<div class="kt-widget__desc">
													{{$module->description}}
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
													<i class="flaticon2-calendar-3"></i> Module Details
												</a>
											</li>
											<!-- <li class="nav-item">
												<a class="nav-link " data-toggle="tab" href="#kt_apps_contacts_view_tab_3" role="tab">
													<i class="flaticon2-user-outline-symbol"></i> Access Control
												</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" data-toggle="tab" href="#kt_apps_contacts_view_tab_4" role="tab">
													<i class="flaticon2-gear"></i> Settings
												</a>
											</li>
											<li class="nav-item">
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
										<div class="tab-pane active" id="kt_apps_contacts_view_tab_2" role="tabpanel">
											<!--begin: Form Wizard Form-->
											<form action="{{ url('modules/update/'.$module->id) }}" method="POST" enctype="multipart/form-data">
							         @csrf
							         @method('PUT')
											 	<input type="hidden" name="themeid" value="{{$module->themeid}}">
												<div class="kt-form__body">

												<div class="kt-section kt-section--first">
													<div class="kt-section__body">


															<div class="form-group row">
																<label class="col-xl-3 col-lg-3 col-form-label">Name</label>
																<div class="col-lg-9 col-xl-6">
																	<input class="form-control" type="text" name="name" value="{{$module->name}}">
																</div>
															</div>
															<div class="form-group row">
																<label class="col-xl-3 col-lg-3 col-form-label">Description</label>
																<div class="col-lg-9 col-xl-6">
																<textarea class="form-control" id="exampleTextarea" rows="3" name="description">{{$module->description}}</textarea>
																</div>
															</div>
															<div class="form-group row">
																<label class="col-xl-3 col-lg-3 col-form-label">Category</label>
																<div class="col-lg-9 col-xl-6">
																	<select class="form-control" id="exampleSelectd" name="category">
																			<option>{{$module->category}}</option>
																			<option <?php if($module->category == 'Images'){ "selected='selected'"; } ?>>Images</option>
																			<option <?php if($module->category == 'Audio'){ "selected='selected'"; } ?>>Audio</option>
																			<option <?php if($module->category == 'Video'){ "selected='selected'"; } ?>>Video</option>
																			<option <?php if($module->category == 'Columns'){ "selected='selected'"; } ?>>Columns</option>
																			<option <?php if($module->category == 'Product'){ "selected='selected'"; } ?>>Product</option>
																			<option <?php if($module->category == 'CTA'){ "selected='selected'"; } ?>>CTA</option>
																			<option <?php if($module->category == 'Blog'){ "selected='selected'"; } ?>>Blog</option>
																			<option <?php if($module->category == 'Social'){ "selected='selected'"; } ?>>Social</option>
																			<option <?php if($module->category == 'Text'){ "selected='selected'"; } ?>>Text</option>
																		</select>
																</div>
															</div>
															<!-- <div class="form-group row">
																<label class="col-xl-3 col-lg-3 col-form-label">Module Html</label>
																<div class="col-lg-9 col-xl-6"> -->
																	<!-- <textarea class="form-control" id="exampleTextarea" rows="3" name="html">{{$module->html}}</textarea> -->
																<!-- </div>
															</div> -->
															<div class="form-group row">
																<label class="col-form-label col-lg-3 col-sm-12">Module Html</label>
																<div class="col-lg-9 col-md-9 col-sm-12">
																	<textarea hidden class="form-control" id="modulehtml" rows="3" name="html">{{$module->html}}</textarea>

																	<div class="summernote" id="kt_summernote_1"><?php echo htmlspecialchars_decode($module->html,ENT_NOQUOTES); ?></div>
																</div>
															</div>


							<input type="hidden" name="oldimage" value="{{$module->image}}">
							<div class="form-group row">
                                <label class="col-xl-3 col-lg-3 col-form-label">Module Logo</label>
                                <div class="col-lg-9 col-xl-6">
                                    <div class="kt-avatar kt-avatar--outline kt-avatar--circle-" id="kt_apps_user_add_avatar">
                                        <div class="kt-avatar__holder" style="background-image: url({{$image}});" id="logo_preview"></div>
                                        <label class="kt-avatar__upload" data-toggle="kt-tooltip" title="" data-original-title="Change avatar">
                                            <i class="fa fa-pen"></i>
                                            <input type="file" name="image" accept=".png, .jpg, .jpeg" id="logo_upload">
                                        </label>
                                        <span class="kt-avatar__cancel" data-toggle="kt-tooltip" title="" data-original-title="Cancel avatar">
                                            <i class="fa fa-times"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>


														</div>

												</div>
												</div>
												<div class="kt-separator kt-separator--space-lg kt-separator--fit kt-separator--border-solid"></div>
												<div class="kt-form__actions">

													<button type="submit" class="btn btn-brand btn-bold" id="submitbutton">Save Changes</button>
													<a href="{{url('modules/'.$module->themeid)}}" class="btn btn-brand btn-bold">Cancel</a>

												</div>
											</form>

											<!--end: Form Wizard Form-->
										</div>

										<!--End:: Tab Content-->

										<!--Begin:: Tab Content-->
										<div class="tab-pane" id="kt_apps_contacts_view_tab_3" role="tabpanel">
											<form class="kt-form kt-form--label-right">
												<div class="kt-form__body">
													<div class="alert alert-solid-danger alert-bold fade show kt-margin-b-20" role="alert">
														<div class="alert-icon"><i class="fa fa-exclamation-triangle"></i></div>
														<div class="alert-text">Configure user passwords to expire periodically.
															<br>Users will need warning that their passwords are going to expire, or they might inadvertently get locked out of the system!</div>
														<div class="alert-close">
															<button type="button" class="close" data-dismiss="alert" aria-label="Close">
																<span aria-hidden="true"><i class="la la-close"></i></span>
															</button>
														</div>
													</div>
													<div class="kt-section">
														<div class="kt-section__body">
															<div class="row">
																<label class="col-xl-3"></label>
																<div class="col-lg-9 col-xl-6">
																	<h3 class="kt-section__title kt-section__title-sm">Account:</h3>
																</div>
															</div>
															<div class="form-group row">
																<label class="col-xl-3 col-lg-3 col-form-label">Username</label>
																<div class="col-lg-9 col-xl-6">
																	<div class="kt-spinner kt-spinner--sm kt-spinner--success kt-spinner--right kt-spinner--input">
																		<input class="form-control" type="text" value="nick84">
																	</div>
																</div>
															</div>
															<div class="form-group row">
																<label class="col-xl-3 col-lg-3 col-form-label">Email Address</label>
																<div class="col-lg-9 col-xl-6">
																	<div class="input-group">
																		<div class="input-group-prepend"><span class="input-group-text"><i class="la la-at"></i></span></div>
																		<input type="text" class="form-control" value="nick.watson@loop.com" placeholder="Email" aria-describedby="basic-addon1">
																	</div>
																	<span class="form-text text-muted">Email will not be publicly displayed. <a href="#" class="kt-link">Learn more</a>.</span>
																</div>
															</div>
															<div class="form-group row">
																<label class="col-xl-3 col-lg-3 col-form-label">Language</label>
																<div class="col-lg-9 col-xl-6">
																	<select class="form-control">
																		<option>Select Language...</option>
																		<option value="id">Bahasa Indonesia - Indonesian</option>
																		<option value="msa">Bahasa Melayu - Malay</option>
																		<option value="ca">Català - Catalan</option>
																		<option value="cs">Čeština - Czech</option>
																		<option value="da">Dansk - Danish</option>
																		<option value="de">Deutsch - German</option>
																		<option value="en" selected="">English</option>
																		<option value="en-gb">English UK - British English</option>
																		<option value="es">Español - Spanish</option>
																		<option value="eu">Euskara - Basque (beta)</option>
																		<option value="fil">Filipino</option>
																		<option value="fr">Français - French</option>
																		<option value="ga">Gaeilge - Irish (beta)</option>
																		<option value="gl">Galego - Galician (beta)</option>
																		<option value="hr">Hrvatski - Croatian</option>
																		<option value="it">Italiano - Italian</option>
																		<option value="hu">Magyar - Hungarian</option>
																		<option value="nl">Nederlands - Dutch</option>
																		<option value="no">Norsk - Norwegian</option>
																		<option value="pl">Polski - Polish</option>
																		<option value="pt">Português - Portuguese</option>
																		<option value="ro">Română - Romanian</option>
																		<option value="sk">Slovenčina - Slovak</option>
																		<option value="fi">Suomi - Finnish</option>
																		<option value="sv">Svenska - Swedish</option>
																		<option value="vi">Tiếng Việt - Vietnamese</option>
																		<option value="tr">Türkçe - Turkish</option>
																		<option value="el">Ελληνικά - Greek</option>
																		<option value="bg">Български език - Bulgarian</option>
																		<option value="ru">Русский - Russian</option>
																		<option value="sr">Српски - Serbian</option>
																		<option value="uk">Українська мова - Ukrainian</option>
																		<option value="he">עִבְרִית - Hebrew</option>
																		<option value="ur">اردو - Urdu (beta)</option>
																		<option value="ar">العربية - Arabic</option>
																		<option value="fa">فارسی - Persian</option>
																		<option value="mr">मराठी - Marathi</option>
																		<option value="hi">हिन्दी - Hindi</option>
																		<option value="bn">বাংলা - Bangla</option>
																		<option value="gu">ગુજરાતી - Gujarati</option>
																		<option value="ta">தமிழ் - Tamil</option>
																		<option value="kn">ಕನ್ನಡ - Kannada</option>
																		<option value="th">ภาษาไทย - Thai</option>
																		<option value="ko">한국어 - Korean</option>
																		<option value="ja">日本語 - Japanese</option>
																		<option value="zh-cn">简体中文 - Simplified Chinese</option>
																		<option value="zh-tw">繁體中文 - Traditional Chinese</option>
																	</select>
																</div>
															</div>
															<div class="form-group row">
																<label class="col-xl-3 col-lg-3 col-form-label">Time Zone</label>
																<div class="col-lg-9 col-xl-6">
																	<select class="form-control">
																		<option data-offset="-39600" value="International Date Line West">(GMT-11:00) International Date Line West</option>
																		<option data-offset="-39600" value="Midway Island">(GMT-11:00) Midway Island</option>
																		<option data-offset="-39600" value="Samoa">(GMT-11:00) Samoa</option>
																		<option data-offset="-36000" value="Hawaii">(GMT-10:00) Hawaii</option>
																		<option data-offset="-28800" value="Alaska">(GMT-08:00) Alaska</option>
																		<option data-offset="-25200" value="Pacific Time (US &amp; Canada)">(GMT-07:00) Pacific Time (US &amp; Canada)</option>
																		<option data-offset="-25200" value="Tijuana">(GMT-07:00) Tijuana</option>
																		<option data-offset="-25200" value="Arizona">(GMT-07:00) Arizona</option>
																		<option data-offset="-21600" value="Mountain Time (US &amp; Canada)">(GMT-06:00) Mountain Time (US &amp; Canada)</option>
																		<option data-offset="-21600" value="Chihuahua">(GMT-06:00) Chihuahua</option>
																		<option data-offset="-21600" value="Mazatlan">(GMT-06:00) Mazatlan</option>
																		<option data-offset="-21600" value="Saskatchewan">(GMT-06:00) Saskatchewan</option>
																		<option data-offset="-21600" value="Central America">(GMT-06:00) Central America</option>
																		<option data-offset="-18000" value="Central Time (US &amp; Canada)">(GMT-05:00) Central Time (US &amp; Canada)</option>
																		<option data-offset="-18000" value="Guadalajara">(GMT-05:00) Guadalajara</option>
																		<option data-offset="-18000" value="Mexico City">(GMT-05:00) Mexico City</option>
																		<option data-offset="-18000" value="Monterrey">(GMT-05:00) Monterrey</option>
																		<option data-offset="-18000" value="Bogota">(GMT-05:00) Bogota</option>
																		<option data-offset="-18000" value="Lima">(GMT-05:00) Lima</option>
																		<option data-offset="-18000" value="Quito">(GMT-05:00) Quito</option>
																		<option data-offset="-14400" value="Eastern Time (US &amp; Canada)">(GMT-04:00) Eastern Time (US &amp; Canada)</option>
																		<option data-offset="-14400" value="Indiana (East)">(GMT-04:00) Indiana (East)</option>
																		<option data-offset="-14400" value="Caracas">(GMT-04:00) Caracas</option>
																		<option data-offset="-14400" value="La Paz">(GMT-04:00) La Paz</option>
																		<option data-offset="-14400" value="Georgetown">(GMT-04:00) Georgetown</option>
																		<option data-offset="-10800" value="Atlantic Time (Canada)">(GMT-03:00) Atlantic Time (Canada)</option>
																		<option data-offset="-10800" value="Santiago">(GMT-03:00) Santiago</option>
																		<option data-offset="-10800" value="Brasilia">(GMT-03:00) Brasilia</option>
																		<option data-offset="-10800" value="Buenos Aires">(GMT-03:00) Buenos Aires</option>
																		<option data-offset="-9000" value="Newfoundland">(GMT-02:30) Newfoundland</option>
																		<option data-offset="-7200" value="Greenland">(GMT-02:00) Greenland</option>
																		<option data-offset="-7200" value="Mid-Atlantic">(GMT-02:00) Mid-Atlantic</option>
																		<option data-offset="-3600" value="Cape Verde Is.">(GMT-01:00) Cape Verde Is.</option>
																		<option data-offset="0" value="Azores">(GMT) Azores</option>
																		<option data-offset="0" value="Monrovia">(GMT) Monrovia</option>
																		<option data-offset="0" value="UTC">(GMT) UTC</option>
																		<option data-offset="3600" value="Dublin">(GMT+01:00) Dublin</option>
																		<option data-offset="3600" value="Edinburgh">(GMT+01:00) Edinburgh</option>
																		<option data-offset="3600" value="Lisbon">(GMT+01:00) Lisbon</option>
																		<option data-offset="3600" value="London">(GMT+01:00) London</option>
																		<option data-offset="3600" value="Casablanca">(GMT+01:00) Casablanca</option>
																		<option data-offset="3600" value="West Central Africa">(GMT+01:00) West Central Africa</option>
																		<option data-offset="7200" value="Belgrade">(GMT+02:00) Belgrade</option>
																		<option data-offset="7200" value="Bratislava">(GMT+02:00) Bratislava</option>
																		<option data-offset="7200" value="Budapest">(GMT+02:00) Budapest</option>
																		<option data-offset="7200" value="Ljubljana">(GMT+02:00) Ljubljana</option>
																		<option data-offset="7200" value="Prague">(GMT+02:00) Prague</option>
																		<option data-offset="7200" value="Sarajevo">(GMT+02:00) Sarajevo</option>
																		<option data-offset="7200" value="Skopje">(GMT+02:00) Skopje</option>
																		<option data-offset="7200" value="Warsaw">(GMT+02:00) Warsaw</option>
																		<option data-offset="7200" value="Zagreb">(GMT+02:00) Zagreb</option>
																		<option data-offset="7200" value="Brussels">(GMT+02:00) Brussels</option>
																		<option data-offset="7200" value="Copenhagen">(GMT+02:00) Copenhagen</option>
																		<option data-offset="7200" value="Madrid">(GMT+02:00) Madrid</option>
																		<option data-offset="7200" value="Paris">(GMT+02:00) Paris</option>
																		<option data-offset="7200" value="Amsterdam">(GMT+02:00) Amsterdam</option>
																		<option data-offset="7200" value="Berlin">(GMT+02:00) Berlin</option>
																		<option data-offset="7200" value="Bern">(GMT+02:00) Bern</option>
																		<option data-offset="7200" value="Rome">(GMT+02:00) Rome</option>
																		<option data-offset="7200" value="Stockholm">(GMT+02:00) Stockholm</option>
																		<option data-offset="7200" value="Vienna">(GMT+02:00) Vienna</option>
																		<option data-offset="7200" value="Cairo">(GMT+02:00) Cairo</option>
																		<option data-offset="7200" value="Harare">(GMT+02:00) Harare</option>
																		<option data-offset="7200" value="Pretoria">(GMT+02:00) Pretoria</option>
																		<option data-offset="10800" value="Bucharest">(GMT+03:00) Bucharest</option>
																		<option data-offset="10800" value="Helsinki">(GMT+03:00) Helsinki</option>
																		<option data-offset="10800" value="Kiev">(GMT+03:00) Kiev</option>
																		<option data-offset="10800" value="Kyiv">(GMT+03:00) Kyiv</option>
																		<option data-offset="10800" value="Riga">(GMT+03:00) Riga</option>
																		<option data-offset="10800" value="Sofia">(GMT+03:00) Sofia</option>
																		<option data-offset="10800" value="Tallinn">(GMT+03:00) Tallinn</option>
																		<option data-offset="10800" value="Vilnius">(GMT+03:00) Vilnius</option>
																		<option data-offset="10800" value="Athens">(GMT+03:00) Athens</option>
																		<option data-offset="10800" value="Istanbul">(GMT+03:00) Istanbul</option>
																		<option data-offset="10800" value="Minsk">(GMT+03:00) Minsk</option>
																		<option data-offset="10800" value="Jerusalem">(GMT+03:00) Jerusalem</option>
																		<option data-offset="10800" value="Moscow">(GMT+03:00) Moscow</option>
																		<option data-offset="10800" value="St. Petersburg">(GMT+03:00) St. Petersburg</option>
																		<option data-offset="10800" value="Volgograd">(GMT+03:00) Volgograd</option>
																		<option data-offset="10800" value="Kuwait">(GMT+03:00) Kuwait</option>
																		<option data-offset="10800" value="Riyadh">(GMT+03:00) Riyadh</option>
																		<option data-offset="10800" value="Nairobi">(GMT+03:00) Nairobi</option>
																		<option data-offset="10800" value="Baghdad">(GMT+03:00) Baghdad</option>
																		<option data-offset="14400" value="Abu Dhabi">(GMT+04:00) Abu Dhabi</option>
																		<option data-offset="14400" value="Muscat">(GMT+04:00) Muscat</option>
																		<option data-offset="14400" value="Baku">(GMT+04:00) Baku</option>
																		<option data-offset="14400" value="Tbilisi">(GMT+04:00) Tbilisi</option>
																		<option data-offset="14400" value="Yerevan">(GMT+04:00) Yerevan</option>
																		<option data-offset="16200" value="Tehran">(GMT+04:30) Tehran</option>
																		<option data-offset="16200" value="Kabul">(GMT+04:30) Kabul</option>
																		<option data-offset="18000" value="Ekaterinburg">(GMT+05:00) Ekaterinburg</option>
																		<option data-offset="18000" value="Islamabad">(GMT+05:00) Islamabad</option>
																		<option data-offset="18000" value="Karachi">(GMT+05:00) Karachi</option>
																		<option data-offset="18000" value="Tashkent">(GMT+05:00) Tashkent</option>
																		<option data-offset="19800" value="Chennai">(GMT+05:30) Chennai</option>
																		<option data-offset="19800" value="Kolkata">(GMT+05:30) Kolkata</option>
																		<option data-offset="19800" value="Mumbai">(GMT+05:30) Mumbai</option>
																		<option data-offset="19800" value="New Delhi">(GMT+05:30) New Delhi</option>
																		<option data-offset="19800" value="Sri Jayawardenepura">(GMT+05:30) Sri Jayawardenepura</option>
																		<option data-offset="20700" value="Kathmandu">(GMT+05:45) Kathmandu</option>
																		<option data-offset="21600" value="Astana">(GMT+06:00) Astana</option>
																		<option data-offset="21600" value="Dhaka">(GMT+06:00) Dhaka</option>
																		<option data-offset="21600" value="Almaty">(GMT+06:00) Almaty</option>
																		<option data-offset="21600" value="Urumqi">(GMT+06:00) Urumqi</option>
																		<option data-offset="23400" value="Rangoon">(GMT+06:30) Rangoon</option>
																		<option data-offset="25200" value="Novosibirsk">(GMT+07:00) Novosibirsk</option>
																		<option data-offset="25200" value="Bangkok">(GMT+07:00) Bangkok</option>
																		<option data-offset="25200" value="Hanoi">(GMT+07:00) Hanoi</option>
																		<option data-offset="25200" value="Jakarta">(GMT+07:00) Jakarta</option>
																		<option data-offset="25200" value="Krasnoyarsk">(GMT+07:00) Krasnoyarsk</option>
																		<option data-offset="28800" value="Beijing">(GMT+08:00) Beijing</option>
																		<option data-offset="28800" value="Chongqing">(GMT+08:00) Chongqing</option>
																		<option data-offset="28800" value="Hong Kong">(GMT+08:00) Hong Kong</option>
																		<option data-offset="28800" value="Kuala Lumpur">(GMT+08:00) Kuala Lumpur</option>
																		<option data-offset="28800" value="Singapore">(GMT+08:00) Singapore</option>
																		<option data-offset="28800" value="Taipei">(GMT+08:00) Taipei</option>
																		<option data-offset="28800" value="Perth">(GMT+08:00) Perth</option>
																		<option data-offset="28800" value="Irkutsk">(GMT+08:00) Irkutsk</option>
																		<option data-offset="28800" value="Ulaan Bataar">(GMT+08:00) Ulaan Bataar</option>
																		<option data-offset="32400" value="Seoul">(GMT+09:00) Seoul</option>
																		<option data-offset="32400" value="Osaka">(GMT+09:00) Osaka</option>
																		<option data-offset="32400" value="Sapporo">(GMT+09:00) Sapporo</option>
																		<option data-offset="32400" value="Tokyo">(GMT+09:00) Tokyo</option>
																		<option data-offset="32400" value="Yakutsk">(GMT+09:00) Yakutsk</option>
																		<option data-offset="34200" value="Darwin">(GMT+09:30) Darwin</option>
																		<option data-offset="34200" value="Adelaide">(GMT+09:30) Adelaide</option>
																		<option data-offset="36000" value="Canberra">(GMT+10:00) Canberra</option>
																		<option data-offset="36000" value="Melbourne">(GMT+10:00) Melbourne</option>
																		<option data-offset="36000" value="Sydney">(GMT+10:00) Sydney</option>
																		<option data-offset="36000" value="Brisbane">(GMT+10:00) Brisbane</option>
																		<option data-offset="36000" value="Hobart">(GMT+10:00) Hobart</option>
																		<option data-offset="36000" value="Vladivostok">(GMT+10:00) Vladivostok</option>
																		<option data-offset="36000" value="Guam">(GMT+10:00) Guam</option>
																		<option data-offset="36000" value="Port Moresby">(GMT+10:00) Port Moresby</option>
																		<option data-offset="36000" value="Solomon Is.">(GMT+10:00) Solomon Is.</option>
																		<option data-offset="39600" value="Magadan">(GMT+11:00) Magadan</option>
																		<option data-offset="39600" value="New Caledonia">(GMT+11:00) New Caledonia</option>
																		<option data-offset="43200" value="Fiji">(GMT+12:00) Fiji</option>
																		<option data-offset="43200" value="Kamchatka">(GMT+12:00) Kamchatka</option>
																		<option data-offset="43200" value="Marshall Is.">(GMT+12:00) Marshall Is.</option>
																		<option data-offset="43200" value="Auckland">(GMT+12:00) Auckland</option>
																		<option data-offset="43200" value="Wellington">(GMT+12:00) Wellington</option>
																		<option data-offset="46800" value="Nuku'alofa">(GMT+13:00) Nuku'alofa</option>
																	</select>
																</div>
															</div>
															<div class="form-group form-group-last row">
																<label class="col-xl-3 col-lg-3 col-form-label">Communication</label>
																<div class="col-lg-9 col-xl-6">
																	<div class="kt-checkbox-inline">
																		<label class="kt-checkbox">
																			<input type="checkbox" checked=""> Email
																			<span></span>
																		</label>
																		<label class="kt-checkbox">
																			<input type="checkbox" checked=""> SMS
																			<span></span>
																		</label>
																		<label class="kt-checkbox">
																			<input type="checkbox"> Phone
																			<span></span>
																		</label>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="kt-separator kt-separator--border-dashed kt-separator--portlet-fit kt-separator--space-lg"></div>
													<div class="kt-section kt-section--first">
														<div class="kt-section__body">
															<div class="row">
																<label class="col-xl-3"></label>
																<div class="col-lg-9 col-xl-6">
																	<h3 class="kt-section__title kt-section__title-sm">Security:</h3>
																</div>
															</div>
															<div class="form-group row">
																<label class="col-xl-3 col-lg-3 col-form-label">Login verification</label>
																<div class="col-lg-9 col-xl-6">
																	<button type="button" class="btn btn-label-brand btn-bold btn-sm kt-margin-t-5 kt-margin-b-5">Setup login verification</button>
																	<span class="form-text text-muted">
																		After you log in, you will be asked for additional information to confirm your identity and protect your account from being compromised.
																		<a href="#" class="kt-link">Learn more</a>.
																	</span>
																</div>
															</div>
															<div class="form-group row">
																<label class="col-xl-3 col-lg-3 col-form-label">Password reset verification</label>
																<div class="col-lg-9 col-xl-6">
																	<div class="kt-checkbox-single">
																		<label class="kt-checkbox">
																			<input type="checkbox"> Require personal information to reset your password.
																			<span></span>
																		</label>
																	</div>
																	<span class="form-text text-muted">
																		For extra security, this requires you to confirm your email or phone number when you reset your password.
																		<a href="#" class="kt-link">Learn more</a>.
																	</span>
																</div>
															</div>
															<div class="form-group row kt-margin-t-10 kt-margin-b-10">
																<label class="col-xl-3 col-lg-3 col-form-label"></label>
																<div class="col-lg-9 col-xl-6">
																	<button type="button" class="btn btn-label-danger btn-bold btn-sm kt-margin-t-5 kt-margin-b-5">Deactivate your account ?</button>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="kt-separator kt-separator--space-lg kt-separator--fit kt-separator--border-solid"></div>
												<div class="kt-form__actions">
													<div class="row">
														<div class="col-xl-3"></div>
														<div class="col-lg-9 col-xl-6">
															<a href="#" class="btn btn-brand btn-bold">Save changes</a>
															<a href="{{url('sites')}}" class="btn btn-clean btn-bold">Cancel</a>
														</div>
													</div>
												</div>
											</form>
										</div>

										<!--End:: Tab Content-->

										<!--Begin:: Tab Content-->
										<div class="tab-pane" id="kt_apps_contacts_view_tab_4" role="tabpanel">
											<form class="kt-form kt-form--label-right">
												<div class="kt-form__body">
													<div class="kt-section kt-section--first">
														<div class="kt-section__body">
															<div class="row">
																<label class="col-xl-3"></label>
																<div class="col-lg-9 col-xl-6">
																	<h3 class="kt-section__title kt-section__title-sm">Setup Email Notification:</h3>
																</div>
															</div>
															<div class="form-group form-group-sm row">
																<label class="col-xl-3 col-lg-3 col-form-label">Email Notification</label>
																<div class="col-lg-9 col-xl-6">
																	<span class="kt-switch">
																		<label>
																			<input type="checkbox" checked="checked" name="email_notification_1">
																			<span></span>
																		</label>
																	</span>
																</div>
															</div>
															<div class="form-group form-group-last row">
																<label class="col-xl-3 col-lg-3 col-form-label">Send Copy To Personal Email</label>
																<div class="col-lg-9 col-xl-6">
																	<span class="kt-switch">
																		<label>
																			<input type="checkbox" name="email_notification_2">
																			<span></span>
																		</label>
																	</span>
																</div>
															</div>
														</div>
													</div>
													<div class="kt-separator kt-separator--border-dashed kt-separator--portlet-fit kt-separator--space-lg"></div>
													<div class="kt-section kt-section--first">
														<div class="kt-section__body">
															<div class="row">
																<label class="col-xl-3"></label>
																<div class="col-lg-9 col-xl-6">
																	<h3 class="kt-section__title kt-section__title-sm">Activity Related Emails:</h3>
																</div>
															</div>
															<div class="form-group row">
																<label class="col-xl-3 col-lg-3 col-form-label">When To Email</label>
																<div class="col-lg-9 col-xl-6">
																	<div class="kt-checkbox-list">
																		<label class="kt-checkbox">
																			<input type="checkbox"> You have new notifications.
																			<span></span>
																		</label>
																		<label class="kt-checkbox">
																			<input type="checkbox"> You're sent a direct message
																			<span></span>
																		</label>
																		<label class="kt-checkbox">
																			<input type="checkbox" checked="checked"> Someone adds you as a connection
																			<span></span>
																		</label>
																	</div>
																</div>
															</div>
															<div class="form-group form-group-last row">
																<label class="col-xl-3 col-lg-3 col-form-label">When To Escalate Emails</label>
																<div class="col-lg-9 col-xl-6">
																	<div class="kt-checkbox-list">
																		<label class="kt-checkbox kt-checkbox--brand">
																			<input type="checkbox"> Upon new order.
																			<span></span>
																		</label>
																		<label class="kt-checkbox kt-checkbox--brand">
																			<input type="checkbox"> New membership approval
																			<span></span>
																		</label>
																		<label class="kt-checkbox kt-checkbox--brand">
																			<input type="checkbox" checked="checked"> Member registration
																			<span></span>
																		</label>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="kt-separator kt-separator--border-dashed kt-separator--portlet-fit kt-separator--space-lg"></div>
													<div class="kt-section kt-section--first">
														<div class="kt-section__body">
															<div class="row">
																<label class="col-xl-3"></label>
																<div class="col-lg-9 col-xl-6">
																	<h3 class="kt-section__title kt-section__title-sm">Updates From KeenSites:</h3>
																</div>
															</div>
															<div class="form-group row">
																<label class="col-xl-3 col-lg-3 col-form-label">Email You With</label>
																<div class="col-lg-9 col-xl-6">
																	<div class="kt-checkbox-list">
																		<label class="kt-checkbox">
																			<input type="checkbox"> News about Metronic product and feature updates
																			<span></span>
																		</label>
																		<label class="kt-checkbox">
																			<input type="checkbox"> Tips on getting more out of Keen
																			<span></span>
																		</label>
																		<label class="kt-checkbox">
																			<input type="checkbox" checked="checked"> Things you missed since you last logged into Keen
																			<span></span>
																		</label>
																		<label class="kt-checkbox">
																			<input type="checkbox" checked="checked"> News about Metronic on partner products and other services
																			<span></span>
																		</label>
																		<label class="kt-checkbox">
																			<input type="checkbox" checked="checked"> Tips on Metronic business products
																			<span></span>
																		</label>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="kt-separator kt-separator--space-lg kt-separator--fit kt-separator--border-solid"></div>
												<div class="kt-form__actions">
													<div class="row">
														<div class="col-xl-3"></div>
														<div class="col-lg-9 col-xl-6">
															<a href="#" class="btn btn-label-brand btn-bold">Save changes</a>
															<a href="{{url('sites')}}" class="btn btn-clean btn-bold">Cancel</a>
														</div>
													</div>
												</div>
											</form>
										</div>

										<!--End:: Tab Content-->

										<!--Begin:: Tab Content-->
										<div class="tab-pane " id="kt_apps_contacts_view_tab_1" role="tabpanel">
											<div class="kt-container">
												<form>
													<div class="form-group">
														<textarea class="form-control" id="exampleTextarea" rows="3" placeholder="Type notes"></textarea>
													</div>
													<div class="row">
														<div class="col">
															<a href="#" class="btn btn-label-brand btn-bold">Add notes</a>
															<a href="#" class="btn btn-clean btn-bold">Cancel</a>
														</div>
													</div>
												</form>
												<div class="kt-separator kt-separator--space-lg kt-separator--border-dashed"></div>
												<div class="kt-notes kt-scroll kt-scroll--pull" data-scroll="true" style="height: 500px;">
													<div class="kt-notes__items">
														<div class="kt-notes__item">
															<div class="kt-notes__media">
																<img class="kt-hidden-" src="./assets/media/users/100_3.jpg" alt="image">
																<span class="kt-notes__icon kt-font-boldest kt-hidden">
																	<i class="flaticon2-cup"></i>
																</span>
																<h3 class="kt-notes__user kt-font-boldest kt-hidden">
																	N S
																</h3>
															</div>
															<div class="kt-notes__content">
																<div class="kt-notes__section">
																	<div class="kt-notes__info">
																		<a href="#" class="kt-notes__title">
																			New order
																		</a>
																		<span class="kt-notes__desc">
																			9:30AM 16 June, 2015
																		</span>
																		<span class="kt-badge kt-badge--success kt-badge--inline">new</span>
																	</div>
																	<div class="kt-notes__dropdown">
																		<a href="#" class="btn btn-sm btn-icon-md btn-icon" data-toggle="dropdown">
																			<i class="flaticon-more-1 kt-font-brand"></i>
																		</a>
																		<div class="dropdown-menu dropdown-menu-right">
																			<ul class="kt-nav">
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-line-chart"></i>
																						<span class="kt-nav__link-text">Reports</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-send"></i>
																						<span class="kt-nav__link-text">Messages</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
																						<span class="kt-nav__link-text">Charts</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-avatar"></i>
																						<span class="kt-nav__link-text">Members</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-settings"></i>
																						<span class="kt-nav__link-text">Settings</span>
																					</a>
																				</li>
																			</ul>
																		</div>
																	</div>
																</div>
																<span class="kt-notes__body">
																	Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto.
																</span>
															</div>
														</div>
														<div class="kt-notes__item">
															<div class="kt-notes__media">
																<span class="kt-notes__icon">
																	<i class="flaticon2-rocket kt-font-danger"></i>
																</span>
															</div>
															<div class="kt-notes__content">
																<div class="kt-notes__section">
																	<div class="kt-notes__info">
																		<a href="#" class="kt-notes__title">
																			Notification
																		</a>
																		<span class="kt-notes__desc">
																			10:30AM 23 May, 2013
																		</span>
																	</div>
																	<div class="kt-notes__dropdown">
																		<a href="#" class="btn btn-sm btn-icon-md btn-icon" data-toggle="dropdown">
																			<i class="flaticon2-rectangular kt-font-brand"></i>
																		</a>
																		<div class="dropdown-menu dropdown-menu-right">
																			<ul class="kt-nav">
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-line-chart"></i>
																						<span class="kt-nav__link-text">Reports</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-send"></i>
																						<span class="kt-nav__link-text">Messages</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
																						<span class="kt-nav__link-text">Charts</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-avatar"></i>
																						<span class="kt-nav__link-text">Members</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-settings"></i>
																						<span class="kt-nav__link-text">Settings</span>
																					</a>
																				</li>
																			</ul>
																		</div>
																	</div>
																</div>
																<span class="kt-notes__body">
																	Sed ut perspiciatis unde omnis iste natus error sit voluptatem, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto.
																</span>
															</div>
														</div>
														<div class="kt-notes__item">
															<div class="kt-notes__media">
																<h3 class="kt-notes__user kt-font-brand kt-font-boldest">
																	DS
																</h3>
															</div>
															<div class="kt-notes__content">
																<div class="kt-notes__section">
																	<div class="kt-notes__info">
																		<a href="#" class="kt-notes__title">
																			System alert
																		</a>
																		<span class="kt-notes__desc">
																			7:10AM 21 February, 2016
																		</span>
																	</div>
																	<div class="kt-notes__dropdown">
																		<a href="#" class="btn btn-sm btn-icon-md btn-icon" data-toggle="dropdown">
																			<i class="flaticon2-note kt-font-brand"></i>
																		</a>
																		<div class="dropdown-menu dropdown-menu-right">
																			<ul class="kt-nav">
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-line-chart"></i>
																						<span class="kt-nav__link-text">Reports</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-send"></i>
																						<span class="kt-nav__link-text">Messages</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
																						<span class="kt-nav__link-text">Charts</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-avatar"></i>
																						<span class="kt-nav__link-text">Members</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-settings"></i>
																						<span class="kt-nav__link-text">Settings</span>
																					</a>
																				</li>
																			</ul>
																		</div>
																	</div>
																</div>
																<span class="kt-notes__body">
																	Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto.
																</span>
															</div>
														</div>
														<div class="kt-notes__item">
															<div class="kt-notes__media">
																<span class="kt-notes__icon">
																	<i class="flaticon2-poll-symbol kt-font-success"></i>
																</span>
															</div>
															<div class="kt-notes__content">
																<div class="kt-notes__section">
																	<div class="kt-notes__info">
																		<a href="#" class="kt-notes__title">
																			New order
																		</a>
																		<span class="kt-notes__desc">
																			10:30AM 23 May, 2013
																		</span>
																	</div>
																	<div class="kt-notes__dropdown">
																		<a href="#" class="btn btn-sm btn-icon-md btn-icon" data-toggle="dropdown">
																			<i class="flaticon2-gear kt-font-brand"></i>
																		</a>
																		<div class="dropdown-menu dropdown-menu-right">
																			<ul class="kt-nav">
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-line-chart"></i>
																						<span class="kt-nav__link-text">Reports</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-send"></i>
																						<span class="kt-nav__link-text">Messages</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
																						<span class="kt-nav__link-text">Charts</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-avatar"></i>
																						<span class="kt-nav__link-text">Members</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-settings"></i>
																						<span class="kt-nav__link-text">Settings</span>
																					</a>
																				</li>
																			</ul>
																		</div>
																	</div>
																</div>
																<span class="kt-notes__body">
																	Sed ut perspiciatis unde omnis iste natus error sit voluptatem, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto.
																</span>
															</div>
														</div>
														<div class="kt-notes__item">
															<div class="kt-notes__media">
																<span class="kt-notes__icon">
																	<i class="flaticon2-box-1 kt-font-brand"></i>
																</span>
															</div>
															<div class="kt-notes__content">
																<div class="kt-notes__section">
																	<div class="kt-notes__info">
																		<a href="#" class="kt-notes__title">
																			Notification
																		</a>
																		<span class="kt-notes__desc">
																			10:30AM 23 May, 2013
																		</span>
																	</div>
																	<div class="kt-notes__dropdown">
																		<a href="#" class="btn btn-sm btn-icon-md btn-icon" data-toggle="dropdown">
																			<i class="flaticon2-sort kt-font-brand"></i>
																		</a>
																		<div class="dropdown-menu dropdown-menu-right">
																			<ul class="kt-nav">
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-line-chart"></i>
																						<span class="kt-nav__link-text">Reports</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-send"></i>
																						<span class="kt-nav__link-text">Messages</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
																						<span class="kt-nav__link-text">Charts</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-avatar"></i>
																						<span class="kt-nav__link-text">Members</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-settings"></i>
																						<span class="kt-nav__link-text">Settings</span>
																					</a>
																				</li>
																			</ul>
																		</div>
																	</div>
																</div>
																<span class="kt-notes__body">
																	Sed ut perspiciatis unde omnis iste natus error sit voluptatem, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto.
																</span>
															</div>
														</div>
														<div class="kt-notes__item">
															<div class="kt-notes__media">
																<span class="kt-notes__icon">
																	<i class="flaticon2-rocket kt-font-danger"></i>
																</span>
															</div>
															<div class="kt-notes__content">
																<div class="kt-notes__section">
																	<div class="kt-notes__info">
																		<a href="#" class="kt-notes__title">
																			Notification
																		</a>
																		<span class="kt-notes__desc">
																			10:30AM 23 May, 2013
																		</span>
																	</div>
																	<div class="kt-notes__dropdown">
																		<a href="#" class="btn btn-sm btn-icon-md btn-icon" data-toggle="dropdown">
																			<i class="flaticon2-rectangular kt-font-brand"></i>
																		</a>
																		<div class="dropdown-menu dropdown-menu-right">
																			<ul class="kt-nav">
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-line-chart"></i>
																						<span class="kt-nav__link-text">Reports</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-send"></i>
																						<span class="kt-nav__link-text">Messages</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
																						<span class="kt-nav__link-text">Charts</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-avatar"></i>
																						<span class="kt-nav__link-text">Members</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-settings"></i>
																						<span class="kt-nav__link-text">Settings</span>
																					</a>
																				</li>
																			</ul>
																		</div>
																	</div>
																</div>
																<span class="kt-notes__body">
																	Sed ut perspiciatis unde omnis iste natus error sit voluptatem, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto.
																</span>
															</div>
														</div>
														<div class="kt-notes__item kt-notes__item--clean">
															<div class="kt-notes__media">
																<img class="kt-hidden" src="./assets/media/users/100_1.jpg" alt="image">
																<span class="kt-notes__icon kt-font-boldest kt-hidden">
																	<i class="flaticon2-cup"></i>
																</span>
																<h3 class="kt-notes__user kt-font-boldest kt-hidden">
																	M E
																</h3>
																<span class="kt-notes__circle kt-hidden-"></span>
															</div>
															<div class="kt-notes__content">
																<div class="kt-notes__section">
																	<div class="kt-notes__info">
																		<a href="#" class="kt-notes__title">
																			Order
																		</a>
																		<span class="kt-notes__desc">
																			11:40AM 14 March, 2012
																		</span>
																		<span class="kt-badge kt-badge--danger kt-badge--inline">important</span>
																	</div>
																</div>
																<span class="kt-notes__body">
																	Sed ut sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto.
																</span>
															</div>
														</div>
														<div class="kt-notes__item kt-notes__item--clean">
															<div class="kt-notes__media">
																<img class="kt-hidden" src="./assets/media/users/100_1.jpg" alt="image">
																<span class="kt-notes__icon kt-font-boldest kt-hidden">
																	<i class="flaticon2-cup"></i>
																</span>
																<h3 class="kt-notes__user kt-font-boldest kt-hidden">
																	N B
																</h3>
																<span class="kt-notes__circle kt-hidden-"></span>
															</div>
															<div class="kt-notes__content">
																<div class="kt-notes__section">
																	<div class="kt-notes__info">
																		<a href="#" class="kt-notes__title">
																			Remarks
																		</a>
																		<span class="kt-notes__desc">
																			10:30AM 23 April, 2013
																		</span>
																	</div>
																</div>
																<span class="kt-notes__body">
																	Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis.
																</span>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>

										<!--End:: Tab Content-->
									</div>
								</div>
							</div>

							<!--End:: Portlet-->
						</div>

						<!-- end:: Content -->
					</div>
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('#submitbutton').click(function(){
			// event.preventDefault();
			var htmlaread = $('.note-editable').html();
			var ricktex = $('#modulehtml').val(htmlaread);
			// alert($('#modulehtml').val());
		});
		function readURL(input,previewclass) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $(previewclass).css('background-image', 'url('+e.target.result+')');
            }

				reader.readAsDataURL(input.files[0]);
			}
		}

		$("#logo_upload").change(function () {
			var previewclass = '#logo_preview';
			readURL(this,previewclass);
		});
		});
</script>
