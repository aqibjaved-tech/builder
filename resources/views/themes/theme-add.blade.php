@extends('admin.layouts.header1')
@section('title', 'Add Theme')
@section('content')
<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
    <!-- begin:: Content Head -->
    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-container  kt-container--fluid ">
            <div class="kt-subheader__main">

                <h3 class="kt-subheader__title">
									Add Theme
								</h3>

                <span class="kt-subheader__separator kt-subheader__separator--v"></span>

                <div class="kt-subheader__group" id="kt_subheader_search">
                    <span class="kt-subheader__desc" id="kt_subheader_total">
											Enter Theme details and submit
										</span>

                </div>

            </div>
            <div class="kt-subheader__toolbar">

                <a href="{{url('themes')}}" class="btn btn-default btn-bold">
										Back
								</a>

                <div class="btn-group">
                    <button type="button" class="btn btn-brand btn-bold">Submit </button>
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
        <div class="kt-portlet">
            <div class="kt-portlet__body kt-portlet__body--fit">
                <div class="kt-grid  kt-wizard-v1 kt-wizard-v1--white" id="kt_apps_projects_add" data-ktwizard-state="step-first">
                    <div class="kt-grid__item">
                        <!--begin: Form Wizard Nav -->
                        <div class="kt-wizard-v1__nav">
                            <div class="kt-wizard-v1__nav-items">
                                <a class="kt-wizard-v1__nav-item" href="#" data-ktwizard-type="step" data-ktwizard-state="current">
                                    <div class="kt-wizard-v1__nav-body">
                                        <div class="kt-wizard-v1__nav-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--xl">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect id="bound" x="0" y="0" width="24" height="24" />
                                                    <path d="M4.875,20.75 C4.63541667,20.75 4.39583333,20.6541667 4.20416667,20.4625 L2.2875,18.5458333 C1.90416667,18.1625 1.90416667,17.5875 2.2875,17.2041667 C2.67083333,16.8208333 3.29375,16.8208333 3.62916667,17.2041667 L4.875,18.45 L8.0375,15.2875 C8.42083333,14.9041667 8.99583333,14.9041667 9.37916667,15.2875 C9.7625,15.6708333 9.7625,16.2458333 9.37916667,16.6291667 L5.54583333,20.4625 C5.35416667,20.6541667 5.11458333,20.75 4.875,20.75 Z" id="check" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                    <path d="M2,11.8650466 L2,6 C2,4.34314575 3.34314575,3 5,3 L19,3 C20.6568542,3 22,4.34314575 22,6 L22,15 C22,15.0032706 21.9999948,15.0065399 21.9999843,15.009808 L22.0249378,15 L22.0249378,19.5857864 C22.0249378,20.1380712 21.5772226,20.5857864 21.0249378,20.5857864 C20.7597213,20.5857864 20.5053674,20.4804296 20.317831,20.2928932 L18.0249378,18 L12.9835977,18 C12.7263047,14.0909841 9.47412135,11 5.5,11 C4.23590829,11 3.04485894,11.3127315 2,11.8650466 Z M6,7 C5.44771525,7 5,7.44771525 5,8 C5,8.55228475 5.44771525,9 6,9 L15,9 C15.5522847,9 16,8.55228475 16,8 C16,7.44771525 15.5522847,7 15,7 L6,7 Z" id="Combined-Shape" fill="#000000" />
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="kt-wizard-v1__nav-label">
                                            Theme Details
                                        </div>
                                    </div>
                                </a>
                                <a class="kt-wizard-v1__nav-item" href="#" data-ktwizard-type="step">
                                    <div class="kt-wizard-v1__nav-body">
                                        <div class="kt-wizard-v1__nav-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--xl">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect id="bound" x="0" y="0" width="24" height="24" />
                                                    <path d="M11,20 L11,17 C11,16.4477153 11.4477153,16 12,16 C12.5522847,16 13,16.4477153 13,17 L13,20 L15.5,20 C15.7761424,20 16,20.2238576 16,20.5 C16,20.7761424 15.7761424,21 15.5,21 L8.5,21 C8.22385763,21 8,20.7761424 8,20.5 C8,20.2238576 8.22385763,20 8.5,20 L11,20 Z" id="Combined-Shape" fill="#000000" opacity="0.3" />
                                                    <path d="M3,5 L21,5 C21.5522847,5 22,5.44771525 22,6 L22,16 C22,16.5522847 21.5522847,17 21,17 L3,17 C2.44771525,17 2,16.5522847 2,16 L2,6 C2,5.44771525 2.44771525,5 3,5 Z M4.5,8 C4.22385763,8 4,8.22385763 4,8.5 C4,8.77614237 4.22385763,9 4.5,9 L13.5,9 C13.7761424,9 14,8.77614237 14,8.5 C14,8.22385763 13.7761424,8 13.5,8 L4.5,8 Z M4.5,10 C4.22385763,10 4,10.2238576 4,10.5 C4,10.7761424 4.22385763,11 4.5,11 L7.5,11 C7.77614237,11 8,10.7761424 8,10.5 C8,10.2238576 7.77614237,10 7.5,10 L4.5,10 Z" id="Combined-Shape" fill="#000000" />
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="kt-wizard-v1__nav-label">
                                            Theme Settings
                                        </div>
                                    </div>
                                </a>
                                <a class="kt-wizard-v1__nav-item" href="#" data-ktwizard-type="step">
                                    <div class="kt-wizard-v1__nav-body">
                                        <div class="kt-wizard-v1__nav-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--xl">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect id="bound" x="0" y="0" width="24" height="24" />
                                                    <path d="M13,18.9450712 L13,20 L14,20 C15.1045695,20 16,20.8954305 16,22 L8,22 C8,20.8954305 8.8954305,20 10,20 L11,20 L11,18.9448245 C9.02872877,18.7261967 7.20827378,17.866394 5.79372555,16.5182701 L4.73856106,17.6741866 C4.36621808,18.0820826 3.73370941,18.110904 3.32581341,17.7385611 C2.9179174,17.3662181 2.88909597,16.7337094 3.26143894,16.3258134 L5.04940685,14.367122 C5.46150313,13.9156769 6.17860937,13.9363085 6.56406875,14.4106998 C7.88623094,16.037907 9.86320756,17 12,17 C15.8659932,17 19,13.8659932 19,10 C19,7.73468744 17.9175842,5.65198725 16.1214335,4.34123851 C15.6753081,4.01567657 15.5775721,3.39010038 15.903134,2.94397499 C16.228696,2.49784959 16.8542722,2.4001136 17.3003976,2.72567554 C19.6071362,4.40902808 21,7.08906798 21,10 C21,14.6325537 17.4999505,18.4476269 13,18.9450712 Z" id="Combined-Shape" fill="#000000" fill-rule="nonzero" />
                                                    <circle id="Oval" fill="#000000" opacity="0.3" cx="12" cy="10" r="6" />
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="kt-wizard-v1__nav-label">
                                            Available Platforms
                                        </div>
                                    </div>
                                </a>
                                <a class="kt-wizard-v1__nav-item" href="#" data-ktwizard-type="step">
                                    <div class="kt-wizard-v1__nav-body">
                                        <div class="kt-wizard-v1__nav-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--xl">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect id="bound" x="0" y="0" width="24" height="24" />
                                                    <path d="M13.2070325,4 C13.0721672,4.47683179 13,4.97998812 13,5.5 C13,8.53756612 15.4624339,11 18.5,11 C19.0200119,11 19.5231682,10.9278328 20,10.7929675 L20,17 C20,18.6568542 18.6568542,20 17,20 L7,20 C5.34314575,20 4,18.6568542 4,17 L4,7 C4,5.34314575 5.34314575,4 7,4 L13.2070325,4 Z" id="Combined-Shape" fill="#000000" />
                                                    <circle id="Oval" fill="#000000" opacity="0.3" cx="18.5" cy="5.5" r="2.5" />
                                                </g>
                                            </svg>
                                        </div>
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
                          <form class="kt-form" method="post" id="kt_apps_projects_add_form" action="{{route('themes.create')}}" enctype="multipart/form-data">
                            <!-- <input type="hidden" name="_method" value="PUT"> -->
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <!--begin: Form Wizard Step 1-->
                            <div class="kt-wizard-v1__content" data-ktwizard-type="step-content" data-ktwizard-state="current">
                                <div class="kt-heading kt-heading--md">Theme Details:</div>
                                <div class="kt-section kt-section--first">
                                    <div class="kt-wizard-v1__form">
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <div class="kt-section__body">
                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">Theme Name</label>
                                                        <div class="col-lg-9 col-xl-9">
                                                            <input class="form-control" type="text" value="{{old('name')}}" name="name" id="themename" placeholder="Theme Name">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">Description</label>
                                                        <div class="col-lg-9 col-xl-9">
                                                            <textarea class="form-control" rows="3" name="description" id="themedescription">{{old('description')}}</textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row customfile">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">Favicon</label>
                                                        <div class="col-lg-9 col-xl-6">
                                                            <input type="file" class="form-control custom-file-input" id="customFile" name="favicon">
                                                            <label class="custom-file-label" for="customFile" style="text-align:left;">Choose file</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">Image</label>
                                                        <div class="col-lg-9 col-xl-9">
                                                            <div class="input-group">
                                                                <input type="file" class="form-control custom-file-input" id="customFile" name="image">
                                                                <label class="custom-file-label" for="customFile" style="text-align:left;">Choose file</label>
                                                            </div>
                                                            <!-- <span class="form-text text-muted">We'll never share your email with anyone else.</span> -->
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">Author Name</label>
                                                        <div class="col-lg-9 col-xl-9">
                                                            <div class="input-group">
                                                                <input type="text" name="authorname" id="authorname" class="form-control" value="{{old('authorname')}}" placeholder="Name" aria-describedby="basic-addon1">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">Author Email</label>
                                                        <div class="col-lg-9 col-xl-9">
                                                            <div class="input-group">
                                                                <div class="input-group-prepend"><span class="input-group-text"><i class="la la-at"></i></span></div>
                                                                <input type="text" name="authoremail" id="authoremail" class="form-control" value="{{old('authoremail')}}" placeholder="Email" aria-describedby="basic-addon1">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">Author WebSite</label>
                                                        <div class="col-lg-9 col-xl-9">
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" id="authorwebsite" name="authorwebsite" placeholder="Website" value="{{old('authorwebsite')}}">
                                                                <div class="input-group-append"><span class="input-group-text">.com</span></div>
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
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end: Form Wizard Step 1-->

                            <!--begin: Form Wizard Step 2-->
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

                                                        <div class="form-group row add_new_groups">
                                                          <div class="col-lg-3 col-xl-3">
                                                              <div class="input-group">
                                                                  <input type="text" class="form-control groupname" placeholder="Group Name" name="groupname[]">
                                                              </div>
                                                          </div>
                                                        </div>
                                                       <div class="form-group row add_new_content">
                                                              <div class="col-lg-3 col-xl-3">
                                                                  <div class="input-group">
                                                                    <input type="text" class="form-control fieldname" name="groupname[]" placeholder="Field Name" aria-describedby="basic-addon1">
                                                              </div>
                                                          </div>
                                                            <div class="col-lg-3 col-xl-3">
                                                                <select class="form-control fieldtype" name="groupname[]">
                                                                    <option>Select Field Type...</option>
                                                                    <option value="text">Textbox</option>
                                                                    <option value="boolean">Boolean</option>
                                                                    <option value="file">Image</option>
                                                                    <option value="colorpicker">Color Picker</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-lg-3 col-xl-3">
                                                                <div class="input-group">
                                                                    <input type="text" class="form-control defaultvalue" placeholder="Default" name="firstgroup[]" aria-describedby="basic-addon1">
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
                                              <hr>
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
                            <!--end: Form Wizard Step 2-->

                            <!--begin: Form Wizard Step 3-->
                            <div class="kt-wizard-v1__content" data-ktwizard-type="step-content">
                                <div class="kt-heading kt-heading--md">Available Platforms</div>
                                <div class="kt-form__section kt-form__section--first">
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
                            </div>
                            <!--end: Form Wizard Step 3-->

                            <!--begin: Form Wizard Step 4-->
                            <div class="kt-wizard-v1__content" data-ktwizard-type="step-content">
                                <div class="kt-heading kt-heading--md">Review your Details and Submit</div>
                                <div class="kt-form__section kt-form__section--first">
                                    <div class="kt-wizard-v1__review">
                                        <div class="kt-wizard-v1__review-item">
                                            <div class="kt-wizard-v1__review-title">
                                                Theme Details
                                            </div>
                                            <div class="kt-wizard-v1__review-content">
                                              <label>Name : </label>
                                              <span id="theme_name"></span>
                                            </div>
                                            <div class="kt-wizard-v1__review-content">
                                              <label>Description : </label>
                                              <span id="theme_description"></span>
                                            </div>
                                            <div class="kt-wizard-v1__review-content">
                                              <label>Author Name : </label>
                                              <span id="author_name"></span>
                                            </div>
                                            <div class="kt-wizard-v1__review-content">
                                              <label>Author Email : </label>
                                              <span id="author_email"></span>
                                            </div>
                                            <div class="kt-wizard-v1__review-content">
                                              <label>Author Website : </label>
                                              <span id="author_website"></span>
                                            </div>
                                        </div>
                                        <!-- <div class="kt-wizard-v1__review-item">
                                            <div class="kt-wizard-v1__review-title">
                                                Theme Settings
                                            </div>
                                            <div class="kt-wizard-v1__review-content">
                                            </div>
                                        </div> -->
                                        <!-- <div class="kt-wizard-v1__review-item">
                                            <div class="kt-wizard-v1__review-title">
                                                Available Platforms
                                            </div>
                                            <div class="kt-wizard-v1__review-content">
                                            </div>
                                        </div> -->

                                    </div>
                                </div>
                            </div>
                            <!--end: Form Wizard Step 4-->

                            <!--begin: Form Actions -->
                            <div class="kt-form__actions">
                                <div class="btn btn-secondary btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u" data-ktwizard-type="action-prev">
                                    Previous
                                </div>
                                <button type="submit" class="btn btn-success btn-md btn-wide kt-font-bold kt-font-transform-u" data-ktwizard-type="action-submit">
                                    Submit
                                </button>
                                <div class="btn btn-brand btn-md btn-wide kt-font-bold kt-font-transform-u" id="nextaction" data-ktwizard-type="action-next">
                                    Next Step
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
    <!-- end:: Content -->
</div>
<script src="{{asset('assets/js/demo3/pages/custom/projects/add-project.js')}}" type="text/javascript"></script>

@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
  $('#nextaction').click(function(){
    // alert($('#themename').val());
    $('#theme_name').text($('#themename').val());
    $('#theme_description').text($('#themedescription').val());
    $('#author_name').text($('#authorname').val());
    $('#author_email').text($('#authoremail').val());
    $('#author_website').text($('#authorwebsite').val());
  });
  // $('.btn.btn-success').click(function(e){
  //   e.stopPropagation();
  //   $('#kt_apps_projects_add_form').submit();
  // });
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
        url: '{{url("widget/addgroup")}}',
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
    $(document).on('click','#nextaction',function(){
          $('.groupname').each(function(index) {
              var group_value = $(this).val();
              var group_value11 = group_value.toLowerCase().replace(/[^a-z0-9\s]/gi, '').replace(/[_\s]/g, '');
              $(this).parent().parent().parent().parent().find('.add_new_content').find('.fieldname').attr('name','groups['+group_value11+'][fieldname][]');
              $(this).parent().parent().parent().parent().find('.add_new_content').find('.fieldtype').attr('name','groups['+group_value11+'][fieldtype][]');
              $(this).parent().parent().parent().parent().find('.add_new_content').find('.defaultvalue').attr('name','groups['+group_value11+'][defaultvalue][]');
          });
    });
    $(document).on('click','.removegroup',function(){
      $(this).parent().parent().parent().remove();
    });

});
</script>
