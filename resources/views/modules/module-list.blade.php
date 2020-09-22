@extends('admin.layouts.header')

@section('title', 'Module Lists')

@section('content')
<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
	<!-- begin:: Content Head -->
	<div class="kt-subheader   kt-grid__item" id="kt_subheader">
		<div class="kt-container  kt-container--fluid ">
			<div class="kt-subheader__main">
				<h3 class="kt-subheader__title">
					Module
				</h3>
				<span class="kt-subheader__separator kt-subheader__separator--v"></span>
				<div class="kt-subheader__group" id="kt_subheader_search">
					<span class="kt-subheader__desc" id="kt_subheader_total">
						{{$modules->total()}} Total </span>
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
				<a href="{{url('/modules/create',$themeid)}}" class="btn btn-label-brand btn-bold">Add Module</a>
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
							{!! $modules->links() !!}
							<div class="kt-pagination__toolbar">
							<input type="hidden" id="currentUrl" value="{{URL::current()}}">
								@if($modules->total() > 10)
									
									<select class="form-control kt-font-brand" style="width: 60px" id="number_records">
										<option <?php if($num == 10){ echo "selected='selected'"; } ?> value="10">10</option>
										<option <?php if($num == 20){ echo "selected='selected'"; } ?> value="20">20</option>
										<option  <?php if($num == 30){ echo "selected='selected'"; } ?> value="30">30</option>
										<option  <?php if($num == 50){ echo "selected='selected'"; } ?> value="50">50</option>
										<option  <?php if($num == 100){ echo "selected='selected'"; } ?> value="100">100</option>
									</select>
								@endif
								<span class="pagination__desc">
									Displaying {{$modules->count()}} of {{$modules->total()}} records
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
		<div class="themes modules">
			<div class="row">
				@foreach($modules as $module)
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
							<img src="{{$image}}">
							<div class="overlay-options">
								<a href="{{ url('modules/edit',$module->id) }}" class="edit">
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
								<a href="{{ url('module/destroy/'.$module->id) }}" class="delete">
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
						<h3>{{$module->name}}</h3>
					</div>
				</div>
				@endforeach
			</div>
		</div>
		<!--End::Section-->
		
	</div>
	<!-- end:: Content -->
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

<script type="text/javascript">
$(document).ready(function(){
	$('#number_records').change(function(){

		// function getUrlParameter(name){
		// 	var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
		// 	if (results==null){
		// 		return null;
		// 	}
		// 	else{
		// 		return results[1] || 0;
		// 	}
		// }

		var parameterVal = $(this).val();
		var url = $('#currentUrl').val();    

		// if (getUrlParameter('page') !='null'){
		// 	url += '&num='+parameterVal;
		// }else if(getUrlParameter('num') !='null'){
		// 		alert(getUrlParameter('num'));
		// }else{
			url += '?num='+parameterVal;
		// }
// alert(url);
			window.location.href = url;
	})
});
</script>

@endsection
