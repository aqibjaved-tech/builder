@extends('admin.layouts.header')

@section('title', 'Edit Site')

@section('content')
					<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

						<!-- begin:: Content Head -->
						<div class="kt-subheader   kt-grid__item" id="kt_subheader">
							<div class="kt-container  kt-container--fluid ">
								<div class="kt-subheader__main">
									<h3 class="kt-subheader__title">
										Edit Theme
									</h3>
									<span class="kt-subheader__separator kt-subheader__separator--v"></span>
									<div class="kt-subheader__group" id="kt_subheader_search">
										<span class="kt-subheader__desc" id="kt_subheader_total">
											---{{$theme->name}}--- </span>
									</div>
								</div>
								<div class="kt-subheader__toolbar">
									<a href="{{url('sites')}}" class="btn btn-default btn-bold">
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
							if($theme->image != ''){
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
												<img src="{{$image}}" alt="image">
											</div>
											<div class="kt-widget__content">
												<div class="kt-widget__head">
													<a href="#" class="kt-widget__title">{{$theme->name}}</a>
													<div class="kt-widget__action">

													</div>
												</div>
												<div class="kt-widget__info">
													<div class="kt-widget__desc">
													{{$theme->description}}
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
													<i class="flaticon2-calendar-3"></i> Theme Details
												</a>
											</li>
											<!-- <li class="nav-item">
												<a class="nav-link " data-toggle="tab" href="#kt_apps_contacts_view_tab_3" role="tab">
													<i class="flaticon2-user-outline-symbol"></i> Access Control
												</a>
											</li> -->
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
											<form class="kt-form" method="post" id="kt_apps_projects_add_form" action="{{route('themes.update',$theme->id)}}" enctype="multipart/form-data">
							         @csrf
							         @method('PUT')
												<div class="kt-form__body">

												<div class="kt-section kt-section--first">
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
                                                          <input class="form-control" type="text" value="{{$theme->name}}" name="name" id="themename" placeholder="Theme Name">
                                                      </div>
                                                  </div>
                                                  <div class="form-group row">
                                                      <label class="col-xl-3 col-lg-3 col-form-label">Description</label>
                                                      <div class="col-lg-9 col-xl-9">
                                                          <textarea class="form-control" rows="3" name="description" id="themedescription">{{$theme->description}}</textarea>
                                                      </div>
                                                  </div>
                                                  <div class="form-group row customfile">
                                                      <label class="col-xl-3 col-lg-3 col-form-label">Favicon</label>
                                                      <div class="col-lg-9 col-xl-6">
                                                          <input type="hidden" name="oldfavicon" value="{{$theme->favicon}}">
                                                          <input type="file" class="form-control custom-file-input" id="customFile" name="favicon">
                                                          <label class="custom-file-label" for="customFile" style="text-align:left;">{{$theme->favicon}}</label>
                                                      </div>
                                                  </div>
                                                  <div class="form-group row">
                                                      <label class="col-xl-3 col-lg-3 col-form-label">Image</label>
                                                      <div class="col-lg-9 col-xl-9">
                                                          <div class="input-group">
                                                            <input type="hidden" name="oldimage" value="{{$theme->image}}">
                                                              <input type="file" class="form-control custom-file-input" id="customFile" name="image">
                                                              <label class="custom-file-label" for="customFile" style="text-align:left;">{{$theme->image}}</label>
                                                          </div>
                                                          <!-- <span class="form-text text-muted">We'll never share your email with anyone else.</span> -->
                                                      </div>
                                                  </div>
                                                  <div class="form-group row">
                                                      <label class="col-xl-3 col-lg-3 col-form-label">Author Name</label>
                                                      <div class="col-lg-9 col-xl-9">
                                                          <div class="input-group">
                                                              <input type="text" name="authorname" id="authorname" class="form-control" value="{{$theme->authorname}}" placeholder="Author Name" aria-describedby="basic-addon1">
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="form-group row">
                                                      <label class="col-xl-3 col-lg-3 col-form-label">Author Email</label>
                                                      <div class="col-lg-9 col-xl-9">
                                                          <div class="input-group">
                                                              <div class="input-group-prepend"><span class="input-group-text"><i class="la la-at"></i></span></div>
                                                              <input type="text" name="authoremail" id="authoremail" class="form-control" value="{{$theme->authoremail}}" placeholder="Author Email" aria-describedby="basic-addon1">
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="form-group form-group-last row">
                                                      <label class="col-xl-3 col-lg-3 col-form-label">Author WebSite</label>
                                                      <div class="col-lg-9 col-xl-9">
                                                          <div class="input-group">
                                                              <input type="text" class="form-control" id="authorwebsite" name="authorwebsite" placeholder="Author Website" value="{{$theme->authorwebsite}}">
                                                              <div class="input-group-append"><span class="input-group-text">.com</span></div>
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
												</div>
												</div>

											<!--end: Form Wizard Form-->
										</div>

										<!--End:: Tab Content-->


										<!--Begin:: Tab Content-->
										<div class="tab-pane" id="kt_apps_contacts_view_tab_4" role="tabpanel">

												<div class="kt-form__body">
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
                                                  <div class="btn btn-brand btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u add-new-group">
                                                      Add New Group
                                                  </div>
                                                  <br>
                                                  <br>


                                                <div class="groups-feilds">
                                                  <?php
                                                  if($theme->setting != ''){
                                                  $settings = json_decode($theme->setting);

                                                  $counter = 1;
                                                  for ($i=0; $i<count($settings); $i++) {
                                                  ?>
                                                  <div class="outerdiv">
                                                    <div class="form-group row add_new_groups">
                                                        <div class="col-lg-3 col-xl-3">
                                                            <div class="input-group">
                                                                <input type="text" class="form-control groupname" placeholder="Group Name" name="groupname[]" value="{{$settings[$i]->name}}">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-9 col-xl-9">
                                                          <div class="btn btn-brand btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u removegroup">
                                                              -
                                                          </div>
                                                                <!-- <span class="removegroup">X</span> -->
                                                        </div>
                                                    </div>

                                            <?php for($a=0; $a< count($settings[$i]->groups->fieldname); $a++){ ?>
                                                <div class="form-group row add_new_content">
                                                    <div class="col-lg-3 col-xl-3">
                                                        <div class="input-group">
                                                          <input type="text" class="form-control fieldname" name="groupname[]" placeholder="Field Name" aria-describedby="basic-addon1" value="{{$settings[$i]->groups->fieldname[$a]}}">
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
                                                            <input type="text" class="form-control defaultvalue" placeholder="Default" name="Firstgroup[]" aria-describedby="basic-addon1" value="{{$settings[$i]->groups->defaultvalue[$a]}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-xl-3">
                                                        <div class="btn btn-brand btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u add-new-field">
                                                            +
                                                        </div>
                                                        <div class="btn btn-brand btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u remove-field">
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
                                                  <div class="btn btn-brand btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u add-new-group">
                                                      Add New Group
                                                  </div>

                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <!--end: Form Wizard Step 2-->

												</div>

										</div>
										<div class="kt-separator kt-separator--space-lg kt-separator--fit kt-separator--border-solid"></div>
										<div class="kt-form__actions">

											<button type="button" id="nextaction" class="btn btn-brand btn-bold">Save Changes</button>
											<a href="{{url('sites')}}" class="btn btn-brand btn-bold">Cancel</a>

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
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
  // $('#nextaction').click(function(){
  //   // alert($('#themename').val());
  //   $('#theme_name').text($('#themename').val());
  //   $('#theme_description').text($('#themedescription').val());
  //   $('#author_name').text($('#authorname').val());
  //   $('#author_email').text($('#authoremail').val());
  //   $('#author_website').text($('#authorwebsite').val());
  // });
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
    $(document).on('click','#nextaction',function(e){
      e.preventDefault();
          $('.groupname').each(function(index) {
              var group_value = $(this).val();
              var group_value11 = group_value.toLowerCase().replace(/[^a-z0-9\s]/gi, '').replace(/[_\s]/g, '');
              alert(group_value11);
              $(this).parent().parent().parent().parent().find('.add_new_content').find('.fieldname').attr('name','groups['+group_value11+'][fieldname][]');
              $(this).parent().parent().parent().parent().find('.add_new_content').find('.fieldtype').attr('name','groups['+group_value11+'][fieldtype][]');
              $(this).parent().parent().parent().parent().find('.add_new_content').find('.defaultvalue').attr('name','groups['+group_value11+'][defaultvalue][]');
          });
          // alert('sdfsdfd');
          // setTimeout(function(){
          $('#kt_apps_projects_add_form').submit();
        // }, 3000);
    });
    $(document).on('click','.removegroup',function(){
      $(this).parent().parent().parent().remove();
    });
    //alert(lenght);

});
</script>
