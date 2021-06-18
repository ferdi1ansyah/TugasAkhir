
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
	<head><base href="">
		<meta charset="utf-8" />
		<title>Pembelajaran Pipel</title>
		<meta name="description" content="Updates and statistics" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<link rel="canonical" href="https://keenthemes.com/metronic" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Page Vendors Styles(used by this page)-->
		<link href="<?php echo base_url() ?>/assets/metro/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Page Vendors Styles-->
		<!--begin::Global Theme Styles(used by all pages)-->
		<link href="<?php echo base_url() ?>/assets/metro/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url() ?>/assets/metro/plugins/custom/prismjs/prismjs.bundle.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url() ?>/assets/metro/css/style.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Global Theme Styles-->
		<!--begin::Layout Themes(used by all pages)-->
		<!--end::Layout Themes-->
		<link rel="shortcut icon" href="<?php echo base_url() ?>/assets/metro/media/logos/logo-primary.svg" />
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="header-mobile-fixed subheader-enabled aside-enabled aside-fixed aside-secondary-enabled page-loading">
		<!--begin::Main-->
		<!--begin::Header Mobile-->
		<div id="kt_header_mobile" class="header-mobile">
			<!--begin::Logo-->
			<a href="index.html">
				<img alt="Logo" src="<?php echo base_url() ?>/assets/media/logos/logo-letter-2.png" class="logo-default max-h-30px" />
			</a>
			<!--end::Logo-->
			<!--begin::Toolbar-->
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
				<!--begin::Aside-->
				<div class="aside aside-left d-flex aside-fixed" id="kt_aside">
					
					<!--begin::Secondary-->
					<div class="aside-secondary d-flex flex-row-fluid">
						<!--begin::Workspace-->
						<div class="aside-workspace scroll scroll-push my-2">
							<!--begin::Tab Content-->
							<div class="tab-content">
								<!--begin::Tab Pane-->
								<div class="tab-pane p-3 px-lg-7 py-lg-5 fade show active" id="kt_aside_tab_1">
								
									<h3 class="p-2 p-lg-3 my-1 my-lg-3">Part Video</h3>
									<!--begin::List-->
									<div class="list list-hover">
										
										<?php 
										$urutan = 1;
										foreach ( $detail->getResultArray() AS $list ) : ?>
										<!--begin::Item-->
										<div class="list-item hoverable p-2 p-lg-3 mb-2">
											<div class="d-flex align-items-center">
												<!--begin::Symbol-->
												<div class="symbol symbol-40 symbol-light mr-4">
													<span class="symbol-label bg-hover-white">
														<?php 
														
															$img = "";

															if ( $list['tipe_materi'] == "text_content" ) {

																$img = base_url('img/notes.png');
															} else {

																$img = base_url('img/play.png'); // visual
															}
														?>
														<img src="<?php echo $img ?>" class="h-50 align-self-center" />
													</span>
												</div>
												<!--end::Symbol-->
												<!--begin::Text-->
												<div class="d-flex flex-column flex-grow-1 mr-2">
													<span class="text-dark-75 font-size-h6 mb-0"><?php echo $list['judul'] ?></span>
													<a href="<?php echo base_url('dashboard/course/'. $list['id_materi'].'?page='. $list['id_materi_detail']) ?>" class="text-muted text-hover-primary font-weight-bold">Bagian <?php echo $urutan ?></a>
												</div>
												<!--begin::End-->
											</div>
										</div>
										<!--end::Item-->
										<?php $urutan++; endforeach; ?>

                                        <!--Button sidebar-->
										
										<a href="<?php echo base_url('quiz/assignment/'. $id_materi) ?>" onclick="return confirm('Apakah anda ingin memulai kuis dari materi ini ?')" class="btn btn-primary btn-shadow  btn-lg btn-block font-weight-bold mr-2">Ikuti Quiz</a>

											<!--end button sidebar-->
										<!--end::Item-->
									</div>
									<!--end::List-->
								</div>
								<!--end::Tab Pane-->

								</div>

								</div>
								</div>

								</div>
				</div>


				<!--begin::Wrapper-->
				<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
					<!--begin::Content-->
					<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						
						
						<!--begin::Subheader-->
						<div class="subheader py-3 py-lg-8 subheader-transparent" id="kt_subheader">
							<div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
								<!--begin::Info-->
								<div class="d-flex align-items-center mr-1">
									<!--begin::Page Heading-->
									<div class="d-flex align-items-baseline flex-wrap mr-5">
										<!--begin::Page Title-->
										<h2 class="d-flex align-items-center text-dark font-weight-bold my-1 mr-3">Judul Video</h2>
										
										

										<!--end::Page Title-->
									</div>

									
									<!--end::Page Heading-->
								</div>
								<!--end::Info-->

								<!--begin::Toolbar-->
								<div class="d-flex align-items-center flex-wrap">
									<!--begin::Button-->
								
									<!--end::Button-->
									<!--begin::Dropdown-->
									
										<a href="/dashboard/index3" class="btn btn-primary btn-fixed-height font-weight-bold px-2 px-lg-5 mr-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo3\dist/../src/media/svg/icons\Home\Home.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
										<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
											<rect x="0" y="0" width="24" height="24"/>
											<path d="M3.95709826,8.41510662 L11.47855,3.81866389 C11.7986624,3.62303967 12.2013376,3.62303967 12.52145,3.81866389 L20.0429,8.41510557 C20.6374094,8.77841684 21,9.42493654 21,10.1216692 L21,19.0000642 C21,20.1046337 20.1045695,21.0000642 19,21.0000642 L4.99998155,21.0000673 C3.89541205,21.0000673 2.99998155,20.1046368 2.99998155,19.0000673 L2.99999828,10.1216672 C2.99999935,9.42493561 3.36258984,8.77841732 3.95709826,8.41510662 Z M10,13 C9.44771525,13 9,13.4477153 9,14 L9,17 C9,17.5522847 9.44771525,18 10,18 L14,18 C14.5522847,18 15,17.5522847 15,17 L15,14 C15,13.4477153 14.5522847,13 14,13 L10,13 Z" fill="#000000"/>
										</g>
											</svg><!--end::Svg Icon--></span>

																	
											<span class="d-none d-md-inline" btn-shadow>Back To Home</span>
										</a>
										
									</div>
									<!--end::Dropdown-->
									<!--begin::Button-->
									
									<!--end::Button-->
								</div>
								<!--end::Toolbar-->

							</div>
						</div>
						<!--end::Subheader-->



						<!--begin::Entry-->
						<div class="d-flex flex-column-fluid">
							<!--begin::Container-->
							<div class="container">
								<!--begin::Dashboard-->
								<!--begin::Row-->
								<div class="row">

									
								
									<div class="col-md-12">
										<body> 

										<?php
												$link = "";

												if ( $terbuka['link_video'] ) {

													$join = "https://drive.google.com/file/d/";
													$explode = explode('https://drive.google.com/file/d/', $terbuka['link_video']);
													$getLabel = $explode[1];

													$getID = explode('/', $getLabel);
													$link = 'https://drive.google.com/file/d/'. $getID[0].'/preview';


													echo '<iframe src="'.$link.'" style="width: 100%; border-radius: 5px" height="480"></iframe>';
												}
											?>											

											<div class="card card-custom">
												<div class="card-header">
													<div class="card-title">
														
														<h3 class="card-label"><?php echo $terbuka['judul'] ?></h3>
													</div>
												</div>
												<div class="card-body">
												
													<?php if ( !empty($terbuka['sumber_author']) ) {


													echo 'Pemateri : <b>'.$terbuka['sumber_author'].'</b> <br>';
													echo 'Sumber : <a href="'.$terbuka['sumber_link'].'">'.$terbuka['sumber_link'].'</a>';
													} ?> <hr>
													<?php echo $terbuka['materi'] ?>
													
												</div>
												
												<hr>

												

											</div>
											</body> 

										<!--begin::Card-->
										
										<!--end::Card-->

										
									</div>
									<!--end:: Card-->
								</div>

								
							</div>
							<!--end:: Card-->
						</div>


											
									</div>

									

				
				


									

									

									
								

									

									

									
								</div>
							</div>
						</div>

						
									


					</div>
					<!--end::Content-->


				</div>
				<!--end::Wrapper-->

				

				

			</div>
		

			
		
		
						

					

				
			

			

		  
			<!-- Captions are optional -->
			<track kind="captions" label="English captions" src="/path/to/captions.vtt" srclang="en" default />
		  </video>
		<!--end::Demo Panel-->
		<script>var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";</script>
		<!--begin::Global Config(global config for global JS scripts)-->
		<script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1200 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#1BC5BD", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#6993FF", "warning": "#FFA800", "danger": "#F64E60", "light": "#F3F6F9", "dark": "#212121" }, "light": { "white": "#ffffff", "primary": "#1BC5BD", "secondary": "#ECF0F3", "success": "#C9F7F5", "info": "#E1E9FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#212121", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#ECF0F3", "gray-300": "#E5EAEE", "gray-400": "#D6D6E0", "gray-500": "#B5B5C3", "gray-600": "#80808F", "gray-700": "#464E5F", "gray-800": "#1B283F", "gray-900": "#212121" } }, "font-family": "Poppins" };</script>
		<!--end::Global Config-->
		<!--begin::Global Theme Bundle(used by all pages)-->
		<script src="<?php echo base_url() ?>assets/metro/plugins/global/plugins.bundle.js"></script>
		<script src="<?php echo base_url() ?>assets/metro/plugins/custom/prismjs/prismjs.bundle.js"></script>
		<script src="<?php echo base_url() ?>assets/metro/js/scripts.bundle.js"></script>
		<!--end::Global Theme Bundle-->
		<!--begin::Page Vendors(used by this page)-->
		<script src="<?php echo base_url() ?>assets/metro/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
		<!--end::Page Vendors-->
		<!--begin::Page Scripts(used by this page)-->
		<script src="<?php echo base_url() ?>assets/metro/js/pages/widgets.js"></script>
		<!--end::Page Scripts-->
	</body>
	<!--end::Body-->
</html>