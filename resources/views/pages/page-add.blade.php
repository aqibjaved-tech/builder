@extends('admin.layouts.header1')

@section('title', 'Add Page')

<!--begin::Page Custom Styles(used by this page) -->
<link href={{ asset("assets/css/demo3/pages/wizard/wizard-1.css")}} rel="stylesheet" type="text/css" />
<!--end::Page Custom Styles -->

@section('content')
    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

        <!-- begin:: Content Head -->
        <div class="kt-subheader   kt-grid__item" id="kt_subheader">
            <div class="kt-container  kt-container--fluid ">
                <div class="kt-subheader__main">
                    <h3 class="kt-subheader__title">
                        Add Page
                    </h3>
                    <span class="kt-subheader__separator kt-subheader__separator--v"></span>
                    <div class="kt-subheader__group" id="kt_subheader_search">
										<span class="kt-subheader__desc" id="kt_subheader_total">
											Enter Page details and submit </span>
                    </div>
                </div>
                <div class="kt-subheader__toolbar">
                    <a href="{{url('pages',$siteid)}}" class="btn btn-default btn-bold">
                        Back </a>
                    <div class="btn-group">
                        <button type="button" class="btn btn-brand btn-bold">
                            Submit </button>
                        <button type="button" class="btn btn-brand btn-bold dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <ul class="kt-nav">
                                <li class="kt-nav__item">
                                    <a href="{{url('#')}}" class="kt-nav__link">
                                        <i class="kt-nav__link-icon flaticon2-writing"></i>
                                        <span class="kt-nav__link-text">Save &amp; continue</span>
                                    </a>
                                </li>
                                <li class="kt-nav__item">
                                    <a href="{{url('#')}}" class="kt-nav__link">
                                        <i class="kt-nav__link-icon flaticon2-medical-records"></i>
                                        <span class="kt-nav__link-text">Save &amp; add new</span>
                                    </a>
                                </li>
                                <li class="kt-nav__item">
                                    <a href="{{url('#')}}" class="kt-nav__link">
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
            <div class="kt-portlet">
                <div class="kt-portlet__body kt-portlet__body--fit">
                    <div class="kt-grid  kt-wizard-v1 kt-wizard-v1--white" id="kt_apps_page_add" data-ktwizard-state="step-first">
                        <div class="kt-grid__item">

                            <!--begin: Form Wizard Nav -->
                            <div class="kt-wizard-v1__nav">
                                <div class="kt-wizard-v1__nav-items">
                                    <a class="kt-wizard-v1__nav-item" href="{{url('#')}}" data-ktwizard-type="step" data-ktwizard-state="current">
                                        <div class="kt-wizard-v1__nav-body">
                                            <div class="kt-wizard-v1__nav-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--xl">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect id="bound" x="0" y="0" width="24" height="24" />
                                                        <path d="M4.875,20.75 C4.63541667,20.75 4.39583333,20.6541667 4.20416667,20.4625 L2.2875,18.5458333 C1.90416667,18.1625 1.90416667,17.5875 2.2875,17.2041667 C2.67083333,16.8208333 3.29375,16.8208333 3.62916667,17.2041667 L4.875,18.45 L8.0375,15.2875 C8.42083333,14.9041667 8.99583333,14.9041667 9.37916667,15.2875 C9.7625,15.6708333 9.7625,16.2458333 9.37916667,16.6291667 L5.54583333,20.4625 C5.35416667,20.6541667 5.11458333,20.75 4.875,20.75 Z" id="check" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                        <path d="M2,11.8650466 L2,6 C2,4.34314575 3.34314575,3 5,3 L19,3 C20.6568542,3 22,4.34314575 22,6 L22,15 C22,15.0032706 21.9999948,15.0065399 21.9999843,15.009808 L22.0249378,15 L22.0249378,19.5857864 C22.0249378,20.1380712 21.5772226,20.5857864 21.0249378,20.5857864 C20.7597213,20.5857864 20.5053674,20.4804296 20.317831,20.2928932 L18.0249378,18 L12.9835977,18 C12.7263047,14.0909841 9.47412135,11 5.5,11 C4.23590829,11 3.04485894,11.3127315 2,11.8650466 Z M6,7 C5.44771525,7 5,7.44771525 5,8 C5,8.55228475 5.44771525,9 6,9 L15,9 C15.5522847,9 16,8.55228475 16,8 C16,7.44771525 15.5522847,7 15,7 L6,7 Z" id="Combined-Shape" fill="#000000" />
                                                    </g>
                                                </svg> </div>
                                            <div class="kt-wizard-v1__nav-label">
                                                Page Details
                                            </div>
                                        </div>
                                    </a>
                                    <a class="kt-wizard-v1__nav-item" href="{{url('#')}}" data-ktwizard-type="step">
                                        <div class="kt-wizard-v1__nav-body">
                                            <div class="kt-wizard-v1__nav-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--xl">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect id="bound" x="0" y="0" width="24" height="24" />
                                                        <path d="M11,20 L11,17 C11,16.4477153 11.4477153,16 12,16 C12.5522847,16 13,16.4477153 13,17 L13,20 L15.5,20 C15.7761424,20 16,20.2238576 16,20.5 C16,20.7761424 15.7761424,21 15.5,21 L8.5,21 C8.22385763,21 8,20.7761424 8,20.5 C8,20.2238576 8.22385763,20 8.5,20 L11,20 Z" id="Combined-Shape" fill="#000000" opacity="0.3" />
                                                        <path d="M3,5 L21,5 C21.5522847,5 22,5.44771525 22,6 L22,16 C22,16.5522847 21.5522847,17 21,17 L3,17 C2.44771525,17 2,16.5522847 2,16 L2,6 C2,5.44771525 2.44771525,5 3,5 Z M4.5,8 C4.22385763,8 4,8.22385763 4,8.5 C4,8.77614237 4.22385763,9 4.5,9 L13.5,9 C13.7761424,9 14,8.77614237 14,8.5 C14,8.22385763 13.7761424,8 13.5,8 L4.5,8 Z M4.5,10 C4.22385763,10 4,10.2238576 4,10.5 C4,10.7761424 4.22385763,11 4.5,11 L7.5,11 C7.77614237,11 8,10.7761424 8,10.5 C8,10.2238576 7.77614237,10 7.5,10 L4.5,10 Z" id="Combined-Shape" fill="#000000" />
                                                    </g>
                                                </svg> </div>
                                            <div class="kt-wizard-v1__nav-label">
                                                Page Settings
                                            </div>
                                        </div>
                                    </a>
                                    <a class="kt-wizard-v1__nav-item" href="{{url('#')}}" data-ktwizard-type="step">
                                        <div class="kt-wizard-v1__nav-body">
                                            <div class="kt-wizard-v1__nav-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--xl">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect id="bound" x="0" y="0" width="24" height="24" />
                                                        <path d="M13,18.9450712 L13,20 L14,20 C15.1045695,20 16,20.8954305 16,22 L8,22 C8,20.8954305 8.8954305,20 10,20 L11,20 L11,18.9448245 C9.02872877,18.7261967 7.20827378,17.866394 5.79372555,16.5182701 L4.73856106,17.6741866 C4.36621808,18.0820826 3.73370941,18.110904 3.32581341,17.7385611 C2.9179174,17.3662181 2.88909597,16.7337094 3.26143894,16.3258134 L5.04940685,14.367122 C5.46150313,13.9156769 6.17860937,13.9363085 6.56406875,14.4106998 C7.88623094,16.037907 9.86320756,17 12,17 C15.8659932,17 19,13.8659932 19,10 C19,7.73468744 17.9175842,5.65198725 16.1214335,4.34123851 C15.6753081,4.01567657 15.5775721,3.39010038 15.903134,2.94397499 C16.228696,2.49784959 16.8542722,2.4001136 17.3003976,2.72567554 C19.6071362,4.40902808 21,7.08906798 21,10 C21,14.6325537 17.4999505,18.4476269 13,18.9450712 Z" id="Combined-Shape" fill="#000000" fill-rule="nonzero" />
                                                        <circle id="Oval" fill="#000000" opacity="0.3" cx="12" cy="10" r="6" />
                                                    </g>
                                                </svg> </div>
                                            <div class="kt-wizard-v1__nav-label">
                                                Available Platforms
                                            </div>
                                        </div>
                                    </a>
                                    <a class="kt-wizard-v1__nav-item" href="{{url('#')}}" data-ktwizard-type="step">
                                        <div class="kt-wizard-v1__nav-body">
                                            <div class="kt-wizard-v1__nav-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--xl">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect id="bound" x="0" y="0" width="24" height="24" />
                                                        <path d="M13.2070325,4 C13.0721672,4.47683179 13,4.97998812 13,5.5 C13,8.53756612 15.4624339,11 18.5,11 C19.0200119,11 19.5231682,10.9278328 20,10.7929675 L20,17 C20,18.6568542 18.6568542,20 17,20 L7,20 C5.34314575,20 4,18.6568542 4,17 L4,7 C4,5.34314575 5.34314575,4 7,4 L13.2070325,4 Z" id="Combined-Shape" fill="#000000" />
                                                        <circle id="Oval" fill="#000000" opacity="0.3" cx="18.5" cy="5.5" r="2.5" />
                                                    </g>
                                                </svg> </div>
                                            <div class="kt-wizard-v1__nav-label">
                                                Review and Submit
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <!--end: Form Wizard Nav -->
                        </div>
                        <div class="kt-grid__item kt-grid__item--fluid kt-wizard-v1__wrapper">

                            <!--begin: Form Wizard Form-->

                            <!--begin: Form Wizard Form-->
                            <form method="post" id="kt_apps_page_add_form" class="kt-form kt-form--label-right" action="{{url('pages/create/')}}" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="siteid" value="{{$siteid}}">
                                <input type="hidden" name="exc_siteid" value="{{$exc_siteid}}">
                                <div class="kt-form__body">
                                    <div class="kt-wizard-v1__content" data-ktwizard-type="step-content" data-ktwizard-state="current">
                                        <div class="kt-heading kt-heading--md">Site Details:</div>
                                        <div class="kt-section kt-section--first">

                                            <div class="kt-section__body">
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
                                                <div class="form-group row">
                                                    <label class="col-xl-3 col-lg-3 col-form-label">Page Title</label>
                                                    <div class="col-lg-9 col-xl-6">
                                                        <input class="form-control" type="text" name="title" value="{{old('title')}}">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-xl-3 col-lg-3 col-form-label">Page Type</label>
                                                    <div class="col-lg-9 col-xl-6">
                                                        <select class="form-control" id="exampleSelectd" name="type">
                                                            <option>Home Page</option>
                                                            <option>Content</option>
                                                            <option>Collection</option>
                                                            <option>Product</option>
                                                            <option>Cart</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-xl-3 col-lg-3 col-form-label">Page Staus</label>
                                                    <div class="col-lg-9 col-xl-6">
                                                        <select class="form-control" id="exampleSelectd" name="status">
                                                            <option>Publish</option>
                                                            <option>Draft</option>
                                                            <option>Trash</option>
                                                            <option>Archive</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group row customfile">
                                                    <label class="col-xl-3 col-lg-3 col-form-label">Image</label>
                                                    <div class="col-lg-9 col-xl-6">
                                                        <input type="file" class="custom-file-input" id="customFile" name="image">
                                                        <label class="custom-file-label" for="customFile" style="text-align:left;">Choose file</label>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-xl-3 col-lg-3 col-form-label">File Path</label>
                                                    <div class="col-lg-9 col-xl-6">
                                                        <input class="form-control" type="text" name="filepath" value="{{old('filepath')}}">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-xl-3 col-lg-3 col-form-label">File Content</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <textarea hidden class="form-control" id="filecontent" rows="3" name="html"></textarea>

                                                        <div class="summernote" id="kt_summernote_1"></div>
                                                    </div>
                                                </div>

                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">Select Page Module</label>
                                                        <div class="col-lg-9 col-xl-6">
                                                            <div class="row">
                                                                <div class="col-md-6 col-xs-12">
                                                                    <button type="button" class="btn btn-brand" data-toggle="modal" data-target="#kt_modal_KTDatatable_local">Choose Page Module</button>
                                                                </div>
                                                                <input type="hidden" id="theme_name" name="module_name" value="">
                                                                <div class="col-md-6 col-xs-12">
                                                                    <div class="kt-avatar kt-avatar--outline kt-avatar--circle-" id="kt_apps_user_add_avatar">
                                                                        <?php $image = asset("images/no-image.jpg"); ?>
                                                                        <div class="kt-avatar__holder" id="theme_thumbnail" style="background-image: url({{$image}});"></div>
                                                                        <label class="kt-avatar__upload active-icon">
                                                                            <i class="fa fa-check"></i>
                                                                            <!-- <input type="file" name="image" accept=".png, .jpg, .jpeg"> -->
                                                                        </label>
                                                                        <!-- <span class="kt-avatar__cancel" data-toggle="kt-tooltip" title="" data-original-title="Cancel avatar">
                                                                                <i class="fa fa-times"></i>
                                                                        </span> -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div id="kt_modal_KTDatatable_local" class="modal fade" role="dialog" aria-hidden="true">
                                                        <div class="modal-dialog modal-xl">
                                                            <div class="modal-content" style="min-height: 590px;">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title">
                                                                        Select Module
                                                                    </h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="themes">
                                                                        <!--begin: Search Form -->
                                                                        <div class="kt-form kt-form--label-right">
                                                                            <div class="row align-items-center">
                                                                                <div class="col-xl-12">
                                                                                    <div class="row align-items-center">
                                                                                        @foreach ($themes as $theme)
                                                                                            <?php
                                                                                            if($theme->image !='' && $theme->image !='null'){
                                                                                                $background = asset("moduleAssets/".$theme->image);
                                                                                            }else{
                                                                                                $background = asset("images/no-image.jpg");
                                                                                            }
                                                                                            ?>
                                                                                            <div class="col-md-6 col-xs-12">
                                                                                                <div class="theme-item" id="{{$theme->id}}">
                                                                                                    <div class="active-theme">
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
                                                                                                    </div>
                                                                                                    <div class="kt-widget__media">
                                                                                                        <img class="kt-widget__img kt-hidden-" src="{{$background}}" alt="{{$theme->name}}">
                                                                                                    </div>
                                                                                                    <h3>{{$theme->name}}</h3>
                                                                                                </div>
                                                                                            </div>
                                                                                        @endforeach
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--end: Search Form -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                    <label class="col-xl-3 col-lg-3 col-form-label">Schedule Action</label>
                                                    <div class="col-lg-9 col-xl-6">
                                                        <select class="form-control" id="exampleSelectd" name="scheduleaction">
                                                            <option>Publish</option>
                                                            <option>Draft</option>
                                                            <option>Trash</option>
                                                            <option>Archive</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-xl-3 col-lg-3 col-form-label">Schedule Date</label>
                                                    <div class="col-lg-9 col-xl-6">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" name="sceduledate" placeholder="Schedule Date" id="kt_datepicker_4_1" />
                                                            <div class="input-group-append">
																								<span class="input-group-text">
																									<i class="la la-bullhorn"></i>
																								</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group form-group-last row">
                                                    <label class="col-xl-3 col-lg-3 col-form-label">Active</label>
                                                    <div class="col-3">
																							<span class="kt-switch kt-switch--lg kt-switch--icon">
																								<label>
																									<input type="checkbox" <?php if(old('active') == 1){ echo "checked"; } ?> name="active" value="{{(old('active'))?old('active'):1}}">
																									<span></span>
																								</label>
																							</span>
                                                    </div>
                                                </div>
                                                <div class="form-group form-group-last row">
                                                    <label class="col-xl-3 col-lg-3 col-form-label"></label>
                                                </div>

                                            </div>
                                        </div>
                                    </div>


                                    <!--begin: Form Wizard Step 2-->
                                    <!-- <div class="kt-wizard-v1__content" data-ktwizard-type="step-content">

                                    </div> -->
                                    <!--end: Form Wizard Step 2-->
                                    <!--begin: Form Wizard Step 3-->
                                    <!-- <div class="kt-wizard-v1__content" data-ktwizard-type="step-content">
                                            <div class="kt-heading kt-heading-md">Available Platforms</div>
                                            <div class="kt-form__section kt-form__section-first">
                                                    <div class="kt-wizard-v1__form">
                                                        <div class="form-group row">
                                                        <label class="col-3 col-form-label">Platforms</label>
                                                            <div class="col-9">
                                                                <div class="kt-checkbox-list">
                                                                    <label class="kt-checkbox">
                                                                        <input type="checkbox" value="For Exchange Collective" name="platforms"> For Exchange Collective
                                                                        <span></span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                    </div>
                                                    </div>
                                            </div>
                                    </div> -->
                                    <!--end: Form Wizard Step 3-->
                                    <!--begin: Form Actions -->
                                    <div class="kt-form__actions">
                                        <div class="btn btn-secondary btn-md btn-wide kt-font-bold kt-font-transform-u" data-ktwizard-type="action-prev">
                                            Previous
                                        </div>
                                        <button type="submit" class="btn btn-success btn-md btn-wide kt-font-bold kt-font-transform-u" data-ktwizard-type="action-submit" id="submitbutton">
                                            Submit
                                        </button>
                                        <div class="btn btn-brand btn-md btn-wide kt-font-bold kt-font-transform-u" id="nextaction" data-ktwizard-type="action-next">
                                            Next Step
                                        </div>
                                    </div>
                                    <!--end: Form Actions -->
                            </form>
                        </div>
                    </div>
                    <div class="kt-separator kt-separator--space-lg kt-separator--fit kt-separator--border-solid"></div>


                    <!--end: Form Wizard Form-->
                </div>
            </div>
        </div>
    </div>
    </div>


    <script src="{{asset('assets/js/demo3/pages/custom/projects/add-page.js')}}" type="text/javascript"></script>

@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('#submitbutton').click(function(event){
            event.preventDefault();
            var htmlaread = $('.note-editable').html();
            var ricktex = $('#filecontent').val(htmlaread);
            // alert($('#filecontent').val());
        });

        $('.theme-item').click(function(){
            $('.theme-item').removeClass('active');
            $(this).addClass('active');
            $('.close').click();

            var theme_name = $(this).attr('id');
            var src = $(this).find('img').attr('src');
            $('#theme_thumbnail').css("background-image", "url("+src+")");
            $('#theme_name').val(theme_name);
        });

    });
</script>
