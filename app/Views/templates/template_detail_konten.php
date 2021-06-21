
<!DOCTYPE html>
<!--
Template Name: Metronic - Bootstrap 4 HTML, React, Angular 11 & VueJS Admin Dashboard Theme
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: https://1.envato.market/EA4JP
Renew Support: https://1.envato.market/EA4JP
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en">
	<!--begin::Head-->
	<head><base href="../../../">
		<meta charset="utf-8" />
		<title>Detail Pembelajaran</title>
		<meta name="description" content="ECommerce Dashboard 6" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<link rel="canonical" href="https://keenthemes.com/metronic" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Global Theme Styles(used by all pages)-->
		<link href="<?php echo base_url() ?>/assets/metro/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url() ?>/assets/metro/plugins/custom/prismjs/prismjs.bundle.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url() ?>/assets/metro/css/style.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Global Theme Styles-->
		<!--begin::Layout Themes(used by all pages)-->
		<!--end::Layout Themes-->
		<link rel="shortcut icon" href="<?php echo base_url() ?>/assets/metro/media/logos/favicon.ico" />



				<style>
				.search-module{


		width: 100%;
		color: #311b92;
		padding: 8px 20px;
		margin: 8px 0;
		box-sizing: border-box;
		border: none;
		/* border-bottom: 2px solid #f5f5f5; */
		background-color: #d1c4e9;
		border-radius: 5px
		}

		.fab-tip {
		position: fixed;
		right: 115px;
		padding: 0px 0.5rem;
		text-align: left;
		background-color: #323232;
		border-radius: 2px;
		color: #FFF;
		width: auto;
		}
		.fab {
		background: #03A9F4;
		width: 64px;
		z-index: 1000;
		height: 64px;
		border-radius: 50%;
		text-align: center;
		color: #FFF;
		box-shadow: 0px 0px 3px rgba(0, 0, 0, 0.5), 3px 3px 3px rgba(0, 0, 0, 0.25);
		position: fixed;
		bottom: 48px;
		right: 48px;
		font-size: 2.6667em;
		display: inline-block;
		cursor: default;
		}
		.fab span {
		vertical-align: middle;
		}
		.fab.child {
		right: 58.66666667px;
		width: 42.66666667px;
		height: 42.66666667px;
		display: none;
		opacity: 0;
		font-size: 2em;
		}

		</style>

		<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

		<style>


		@import url(http://fonts.googleapis.com/css?family=Source+Sans+Pro);


		@-webkit-keyframes here {
		0% {
		background: #cccc00;
		}
		50% {
		background: inherit;
		}
		}

		@keyframes here {
		0% {
		background: #cccc00;
		}
		50% {
		background: inherit;
		}
		}
		.menu {
		position: absolute;
		right: -78px;
		top: 490px;
		float: left;
		-webkit-filter: url("../css/goo.svg#goo");
		filter: url("../css/goo.svg#goo");
		}
		@media all and (max-width: 765px) {
		.menu {
		display: none !important;
		}
		}
		@media all and (max-width: 1080px) {
		.menu {
		right: -21px;
		z-index: 10;
		}
		}
		@media all and (max-width: 920px) {
		.menu {
		top: 16px;
		right: 32px;
		width: 62px;
		position: fixed;
		z-index: 10;
		height: 62px;
		}
		}

		/*
		CSS accecss : FALSE
		*/
		body.zones {
		-webkit-box-shadow: inset 0 0 0 1px rgba(128, 0, 128, 0.1) !important;
		box-shadow: inset 0 0 0 1px rgba(128, 0, 128, 0.1) !important;
		}
		body.zones:hover {
		-webkit-box-shadow: inset 0 0 0 1px purple !important;
		box-shadow: inset 0 0 0 1px purple !important;
		}
		body.zones * {
		-webkit-box-shadow: inset 0 0 0 1px rgba(255, 0, 0, 0.1) !important;
		box-shadow: inset 0 0 0 1px rgba(255, 0, 0, 0.1) !important;
		}
		body.zones *:hover {
		-webkit-box-shadow: inset 0 0 0 1px red !important;
		box-shadow: inset 0 0 0 1px red !important;
		}
		body.zones * + * {
		-webkit-box-shadow: inset 0 0 0 1px rgba(0, 0, 255, 0.1) !important;
		box-shadow: inset 0 0 0 1px rgba(0, 0, 255, 0.1) !important;
		}
		body.zones * + *:hover {
		-webkit-box-shadow: inset 0 0 0 1px blue !important;
		box-shadow: inset 0 0 0 1px blue !important;
		}
		body.zones * + * + * {
		-webkit-box-shadow: inset 0 0 0 1px rgba(0, 128, 0, 0.1) !important;
		box-shadow: inset 0 0 0 1px rgba(0, 128, 0, 0.1) !important;
		}
		body.zones * + * + *:hover {
		-webkit-box-shadow: inset 0 0 0 1px green !important;
		box-shadow: inset 0 0 0 1px green !important;
		}
		body.zones * + * + * + * {
		-webkit-box-shadow: inset 0 0 0 1px rgba(128, 0, 128, 0.1) !important;
		box-shadow: inset 0 0 0 1px rgba(128, 0, 128, 0.1) !important;
		}
		body.zones * + * + * + *:hover {
		-webkit-box-shadow: inset 0 0 0 1px purple !important;
		box-shadow: inset 0 0 0 1px purple !important;
		}
		body.zones * + * + * + * + * {
		-webkit-box-shadow: inset 0 0 0 1px rgba(255, 0, 0, 0.1) !important;
		box-shadow: inset 0 0 0 1px rgba(255, 0, 0, 0.1) !important;
		}
		body.zones * + * + * + * + *:hover {
		-webkit-box-shadow: inset 0 0 0 1px red !important;
		box-shadow: inset 0 0 0 1px red !important;
		}
		body.zones * + * + * + * + * + * {
		-webkit-box-shadow: inset 0 0 0 1px rgba(0, 0, 255, 0.1) !important;
		box-shadow: inset 0 0 0 1px rgba(0, 0, 255, 0.1) !important;
		}
		body.zones * + * + * + * + * + *:hover {
		-webkit-box-shadow: inset 0 0 0 1px blue !important;
		box-shadow: inset 0 0 0 1px blue !important;
		}
		body.zones * + * + * + * + * + * + * {
		-webkit-box-shadow: inset 0 0 0 1px rgba(0, 128, 0, 0.1) !important;
		box-shadow: inset 0 0 0 1px rgba(0, 128, 0, 0.1) !important;
		}
		body.zones * + * + * + * + * + * + *:hover {
		-webkit-box-shadow: inset 0 0 0 1px green !important;
		box-shadow: inset 0 0 0 1px green !important;
		}
		body.zones.grayscale, body.grayscale {
		-webkit-filter: grayscale(100%);
		filter: grayscale(100%);
		}

		/* -----------------------------------------------

		Protanopia
		*/
		body.zones.protanopia, body.protanopia {
		-webkit-filter: url("css/filters.svg#protanopia") grayscale(0) !important;
		filter: url("<?php echo base_url() ?>/css/filters.svg#protanopia") grayscale(0) !important;
		}
		body _:-moz-tree-row(hover), body.zones.protanopia,
		body _:-moz-tree-row(hover), body.protanopia {
		filter: url("<?php echo base_url() ?>/css/filters.svg#protanopia") grayscale(0) !important;
		}



		/* -----------------------------------------------

		Deuteranopia
		*/
		body.zones.deuteranopia, body.deuteranopia {
		-webkit-filter: url("css/filters.svg#deuteranopia") grayscale(0) !important;
		filter: url("<?php echo base_url() ?>/css/filters.svg#deuteranopia") grayscale(0) !important;
		}
		body _:-moz-tree-row(hover), body.zones.deuteranopia,
		body _:-moz-tree-row(hover), body.deuteranopia {
		filter: url("<?php echo base_url() ?>/css/filters.svg#deuteranopia") grayscale(0) !important;
		}


		/* -----------------------------------------------

		Tritanopia
		*/
		body.zones.tritanopia, body.tritanopia {
		-webkit-filter: url("css/filters.svg#tritanopia") grayscale(0) !important;
		filter: url("<?php echo base_url() ?>/css/filters.svg#tritanopia") grayscale(0) !important;
		}
		body _:-moz-tree-row(hover), body.zones.tritanopia,
		body _:-moz-tree-row(hover), body.tritanopia {
		filter: url("<?php echo base_url() ?>/css/filters.svg#tritanopia") grayscale(0) !important;
		}



		/* -----------------------------------------------

		Achromatopsia
		*/
		body.zones.achromatopsia, body.achromatopsia {
		-webkit-filter: url("css/filters.svg#achromatopsia") grayscale(0) !important;
		filter: url("<?php echo base_url() ?>/css/filters.svg#achromatopsia") grayscale(0) !important;
		}
		body _:-moz-tree-row(hover), body.zones.achromatopsia,
		body _:-moz-tree-row(hover), body.achromatopsia {
		filter: url("<?php echo base_url() ?>/css/filters.svg#achromatopsia") grayscale(0) !important;
		}


		</style>

		<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>





	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="header-mobile-fixed aside-enabled aside-fixed aside-secondary-enabled page-loading">
		<!--begin::Main-->
		<!--begin::Header Mobile-->
		<div id="kt_header_mobile" class="header-mobile">
			<!--begin::Logo-->
			<a href="index.html">
				<img href="<?php echo base_url() ?>alt="Logo"  src="/assets/metro/media/logos/logo-letter-2.png" class="logo-default max-h-30px" />
			</a>
			<!--end::Logo-->



            <div class="d-flex align-items-center">
				<button class="btn p-0 burger-icon burger-icon-left" id="kt_aside_mobile_toggle">
					<span></span>
				</button>
			</div>
			<!--end::Toolbar-->
		</div>
		<!--end::Header Mobile-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="d-flex flex-row flex-column-fluid page">
				
				<!--begin::Wrapper-->
				
					<!--begin::Content-->
					<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<!--begin::Subheader-->
						
						<!--end::Subheader-->
						<!--begin::Entry-->
						<div class="d-flex flex-column-fluid">





							
							<!--begin::Container-->
							<div class="container">
								<!--begin::Page Layout-->
								<div class="d-flex flex-row">
									<!--begin::Layout-->
									<div class="flex-row-fluid">
										<!--begin::Section-->

										<div class="subheader py-3 py-lg-8" id="kt_subheader">
											<div class="d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
												<!--begin::Info-->
												<div class="d-flex align-items-center mr-1">
													<!--begin::Mobile Toggle-->
												
													<!--end::Mobile Toggle-->
													<!--begin::Page Heading-->
													<div class="d-flex align-items-baseline flex-wrap mr-5"> 
														<!--begin::Page Title-->
														<h2 class="font-weight-bolder text-dark mb-7 "style="font-size: 42px;">Detail Pembelajaran</h2> 
														<!--end::Page Title-->
														
													</div>
													<!--end::Page Heading-->
												</div>
												<!--end::Info-->
												
											</div>
										</div>


										<!----->











										<!--begin::Section-->
										<div class="row">
											<div class="col-md-7 col-lg-12 col-xxl-7">
												<!--begin::Engage Widget 14-->
												<div class="card card-custom card-stretch gutter-b">
													<div class="card-body p-15 pb-20">
														<div class="row mb-17">
															<div class="col-xxl-5 mb-11 mb-xxl-0">
																<!--begin::Image-->
																<div class="card card-custom card-stretch">

																	<?php
																	
																		$img = "https://pertaniansehat.com/v01/wp-content/uploads/2015/08/default-placeholder.png"; // gambar default

																		// gambar terdapat upload
																		if ( $materi['media'] ) {
												
																			$img = base_url('assets/images/thumbnail-material/'. $materi['media']);
																		}
																	?>
																	<div class="card-body p-0 rounded px-10 py-15 d-flex align-items-center justify-content-center" style="background-color: #FFCC69;">
																		<img src="<?php echo $img ?>" class="mw-100 w-200px" style="transform: scale(1.6); object-fit: cover" />
																	</div>
																</div>
																<!--end::Image-->
															</div>
															<div class="col-xxl-7 pl-xxl-11">
																<h2 class="font-weight-bolder text-dark mb-7" style="font-size: 32px;"><?php echo $materi['judul'] ?></h2>
																<div class="font-size-h2 mb-7 text-dark-50">From
																<span class="text-info font-weight-boldest ml-2"><?php echo $materi['nama_lengkap'] ?></span></div>
																<div class="line-height-xl"><?php echo $materi['deskripsi'] ?></div>
															</div>
														</div>
														<div class="row mb-6">
															
														</div>
														<!--begin::Buttons-->
														<div class="d-flex">
															
															<?php
															
															
																$text_btn = "";
																$link 	  = "";

																if ( $cek_pendaftaran->getNumRows() > 0 ) {

																	$text_btn = "Lanjutkan Kelas";
																	$link  	  = base_url('dashboard/course/'. $materi['id_materi'].'?page='. $cek_pendaftaran->getRowArray()['index_materi']);
																} else {


																	$text_btn = "Mulai Kelas";
																	$link 	  = base_url('dashboard/course/'. $materi['id_materi'].'?page=start');
																}
															?>
															
															
															<a href="<?php echo $link ?>" class="btn btn-primary font-weight-bolder mr-6 px-6 font-size-sm">
															<span class="svg-icon">
																<!--begin::Svg Icon | path:assets/media/svg/icons/Files/File-plus.svg-->
																<!-- <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<polygon points="0 0 24 0 24 24 0 24" />
																		<path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																		<path d="M11,14 L9,14 C8.44771525,14 8,13.5522847 8,13 C8,12.4477153 8.44771525,12 9,12 L11,12 L11,10 C11,9.44771525 11.4477153,9 12,9 C12.5522847,9 13,9.44771525 13,10 L13,12 L15,12 C15.5522847,12 16,12.4477153 16,13 C16,13.5522847 15.5522847,14 15,14 L13,14 L13,16 C13,16.5522847 12.5522847,17 12,17 C11.4477153,17 11,16.5522847 11,16 L11,14 Z" fill="#000000" />
																	</g>
																</svg> -->
																<!--end::Svg Icon-->
															</span><?php echo $text_btn ?></a>

															<button type="button" class="btn btn-light-primary font-weight-bolder px-8 font-size-sm">
															<a href="/dashboard/index3" class="svg-icon">
                                        Batal
                                        </a>
															<span class="svg-icon">
																<!--begin::Svg Icon | path:assets/media/svg/icons/Files/File-done.svg-->
																<!-- <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<polygon points="0 0 24 0 24 24 0 24" />
																		<path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z M10.875,15.75 C11.1145833,15.75 11.3541667,15.6541667 11.5458333,15.4625 L15.3791667,11.6291667 C15.7625,11.2458333 15.7625,10.6708333 15.3791667,10.2875 C14.9958333,9.90416667 14.4208333,9.90416667 14.0375,10.2875 L10.875,13.45 L9.62916667,12.2041667 C9.29375,11.8208333 8.67083333,11.8208333 8.2875,12.2041667 C7.90416667,12.5875 7.90416667,13.1625 8.2875,13.5458333 L10.2041667,15.4625 C10.3958333,15.6541667 10.6354167,15.75 10.875,15.75 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																		<path d="M10.875,15.75 C10.6354167,15.75 10.3958333,15.6541667 10.2041667,15.4625 L8.2875,13.5458333 C7.90416667,13.1625 7.90416667,12.5875 8.2875,12.2041667 C8.67083333,11.8208333 9.29375,11.8208333 9.62916667,12.2041667 L10.875,13.45 L14.0375,10.2875 C14.4208333,9.90416667 14.9958333,9.90416667 15.3791667,10.2875 C15.7625,10.6708333 15.7625,11.2458333 15.3791667,11.6291667 L11.5458333,15.4625 C11.3541667,15.6541667 11.1145833,15.75 10.875,15.75 Z" fill="#000000" />
																	</g>
																</svg> -->
																<!--end::Svg Icon-->
																
														
														</div>
														<!--end::Buttons-->
													</div>
												</div>
												<!--end::Engage Widget 14-->
											</div>
											<div class="col-md-5 col-lg-12 col-xxl-5">
												<!--begin::List Widget 19-->
				
			<!--end::Content-->
		</div>



						<div class="backdrop_gray"></div>

				<div class="classes_list">

				<div class="fab blue child btn-floating" data-subitem="1">A
					<span class="btn-floating fab-tip" id="normal">Normal</span>
				</div>

				<div class="fab blue child btn-floating" data-tooltip="I am B" data-subitem="2">B
					
					<span class="btn-floating fab-tip" id="zones">Zones</span>
				</div>

				<div class="fab blue child btn-floating" data-subitem="3">C
					<span class="btn-floating fab-tip" id="protanopia">Protanopia</span>
				</div>
				
				<div class="fab blue child btn-floating" data-tooltip="I am D" data-subitem="4">D
					<span class="btn-floating fab-tip" id="tritanopia"> Tritanopia</span>
				</div>
				<div class="fab blue child btn-floating" data-tooltip="I am E" data-subitem="5">E
					<span class="btn-floating fab-tip" id="deuteranopia">Deuteranopia</span>
				</div>
				<div class="fab blue child btn-floating" data-tooltip="I am F" data-subitem="6">F
					<span class="btn-floating fab-tip" id="achromatopsia">Achromatopsia</span>
				</div>
				</div>

				<div class="fab" id="masterfab"><span>+</span></div>

				</div>
				</div>
				</div>

  
				</div>
    
    </div>
    </div>
    </section>




		<!--end::Demo Panel-->
		<script>var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";</script>
		<!--begin::Global Config(global config for global JS scripts)-->
		<script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1200 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#1BC5BD", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#6993FF", "warning": "#FFA800", "danger": "#F64E60", "light": "#F3F6F9", "dark": "#212121" }, "light": { "white": "#ffffff", "primary": "#1BC5BD", "secondary": "#ECF0F3", "success": "#C9F7F5", "info": "#E1E9FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#212121", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#ECF0F3", "gray-300": "#E5EAEE", "gray-400": "#D6D6E0", "gray-500": "#B5B5C3", "gray-600": "#80808F", "gray-700": "#464E5F", "gray-800": "#1B283F", "gray-900": "#212121" } }, "font-family": "Poppins" };</script>
		<!--end::Global Config-->
		<!--begin::Global Theme Bundle(used by all pages)-->
		<script src="<?php echo base_url() ?>/assets/metro/plugins/global/plugins.bundle.js"></script>
		<script src="<?php echo base_url() ?>/assets/metro/plugins/custom/prismjs/prismjs.bundle.js"></script>
		<script src="<?php echo base_url() ?>/assets/metro/js/scripts.bundle.js"></script>
		<!--end::Global Theme Bundle-->

		


				<script>
			
			(function () {
				window.onload = function () {
				window.setTimeout(fadeout, 500);
				}

				function fadeout() {
				document.querySelector('.preloader').style.opacity = '0';
				document.querySelector('.preloader').style.display = 'none';
				}
				window.onscroll = function () {
				var header_navbar = document.querySelector(".navbar-area");
				var sticky = header_navbar.offsetTop;
				var logo = document.querySelector('.navbar-brand img');
				if (window.pageYOffset > sticky) {
					header_navbar.classList.add("sticky");
					logo.src = '<?php echo base_url('assets/saaspal/img/logo/logo2B.svg') ?>';
				} else {
					header_navbar.classList.remove("sticky");
					logo.src = '<?php echo base_url('assets/saaspal/img/logo/logo2.svg') ?>';
				}
				var backToTo = document.querySelector(".scroll-top");
				if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
					backToTo.style.display = "flex";
				} else {
					backToTo.style.display = "none";
				}
				};
				var pageLink = document.querySelectorAll('.page-scroll');
				pageLink.forEach(elem => {
				elem.addEventListener('click', e => {
					e.preventDefault();
					document.querySelector(elem.getAttribute('href')).scrollIntoView({
					behavior: 'smooth',
					offsetTop: 1 - 60,
					});
				});
				});
				
				new WOW().init();
				tns({
				container: '.testimonial-active',
				slideBy: 'page',
				mode: 'gallery',
				autoplay: false,
				mouseDrag: true,
				gutter: 0,
				nav: false,
				controls: true,
				controlsText: ['<i class="lni lni-chevron-left prev"></i>', '<i class="lni lni-chevron-right next"></i>'],
				items: 1,
				});
			})();


			
			</script>










					<!-- Fab -->
					<script>



					$(function(){
						$(".fab,.backdrop_gray").click(function(){
							if($(".backdrop_gray").is(":visible")){
								$(".backdrop_gray").fadeOut(125);
								$(".fab.child")
									.stop()
									.animate({
										bottom	: $("#masterfab").css("bottom"),
										opacity	: 0
									},125,function(){
										$(this).hide();
									});
							}else{
								$(".backdrop_gray").fadeIn(125);
								$(".fab.child").each(function(){
									$(this)
										.stop()
										.show()
										.animate({
											bottom	: (parseInt($("#masterfab").css("bottom")) + parseInt($("#masterfab").outerHeight()) + 70 * $(this).data("subitem") - $(".fab.child").outerHeight()) + "px",
											opacity	: 1
										},125);
								});
							}
						});
					});

					</script>






	<!-- Notif -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>	



		<!-- Colorblind -->
 		<script>
    
    $(document).ready( function () {


        var body = document.body;
        var demos = document.querySelectorAll('.classes_list span');

        //  - - - - - - - - - - - - - - - -
        // Load setting  colorblind
        $.ajax({

          type : "GET", // POST | GET
          url  : "<?php echo base_url('starter/get_colorblind') ?>",
          dataType : "json",
          success: function( data ){

            // alert("Okee perubahan disimpan !");
            // alert("Nilai yang digunakan adalah " + data.colorblind)

            body.className = data.colorblind;
          } 
        });

        //  - - - - - - - - - - - - - - - -



        function hasClass(el, cls) {
          return el.className && new RegExp("(\\s|^)" + cls + "(\\s|$)").test(el.className);
        }


        [].forEach.call(demos, function (button) {

            button.addEventListener('click', function () {

              var c = this.getAttribute('id');
                              
              toastr["info"]("Perubahan Colorblind menjadi " + c + " berhasil disimpan")



              $.ajax({

              type : "GET", // POST | GET
              url  : "<?php echo base_url('starter/change_colorblind') ?>",
              data : "colorblind=" + c,
              success: function(){

                toastr["success"]("Perubahan Colorblind menjadi " + c + " berhasil disimpan")
              } 
              });




              if ( hasClass(body, c)) {
                body.className = '';
                deactiveButton(this);
              } else {
                body.className = c;
                deactiveAllButtons();
                this.className += ' active ';
              }



              // alert(c);

            });
        });


        function deactiveAllButtons () {

          [].forEach.call(demos, function (button) {
            deactiveButton(button);
          });

        }

        function deactiveButton (elem) {
          elem.className = elem.className.replace(' active ', '');
        }


        toastr.options = {
            "closeButton": false,
            "debug": false,
            "newestOnTop": false,
            "progressBar": false,
            "positionClass": "toast-top-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
          }
    });

    </script>
	</body>
	<!--end::Body-->
</html>