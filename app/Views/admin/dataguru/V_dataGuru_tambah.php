

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
		<title>Metronic Live preview | Keenthemes</title>
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
		<link rel="shortcut icon" href="<?php echo base_url() ?>/assets/metro/media/logos/favicon.ico" />
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="header-mobile-fixed subheader-enabled page-loading">
		<!--begin::Main-->
		<!--begin::Header Mobile-->
		<div id="kt_header_mobile" class="header-mobile">
			<!--begin::Logo-->
			<a href="index.html">
				<img alt="Logo" src="<?php echo base_url() ?>/assets/metro/media/logos/logo-letter-2.png" class="logo-default max-h-30px" />
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
		
						
						<!--begin::Subheader-->
						<div class="subheader py-3 py-lg-8 subheader-transparent" id="kt_subheader">
							<div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
								<!--begin::Info-->
								<div class="d-flex align-items-center mr-1">
									<!--begin::Page Heading-->
									<div class="d-flex align-items-baseline flex-wrap mr-5">
										<!--begin::Page Title-->
										<h2 class="d-flex align-items-center text-dark font-weight-bold my-1 mr-3">Tambah Data Guru</h2>
										<!--end::Page Title-->
									</div>
									<!--end::Page Heading-->
								</div>
								<!--end::Info-->

								<!--begin::Toolbar-->
								
									
									</a>
								
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
							


                                <div class="row justify-content-center">
                                    <!-- start col -->
                                    <div class="col-md-8">
                                    
                                    
                                    

                                        <!--begin::Card-->
										<div class="card card-custom example example-compact">
											<div class="card-header">
												<h3 class="card-title">Masukan Data Guru</h3>
												<div class="card-toolbar">
													
												</div>
											</div>
											<!--begin::Form-->
											<form class="form" action="/dataguru/prosesTambahGuru" method="POST">
												<div class="card-body">
													<div class="form-group">
														<label>Nama Lengkap</label>
														<input type="text" name="nama" class="form-control" placeholder="" />
														<span class="form-text text-muted">Isikan nama lengkap anda</span>
													</div>
													<div class="separator separator-dashed my-5"></div>
													<div class="form-group">
														<label>Asal Sekolah</label>
														<input type="text" name="asalsekolah" class="form-control" placeholder="" />
														<span class="form-text text-muted">Isikan asal sekolah anda</span>
													</div>

													<div class="separator separator-dashed my-5"></div>
													<div class="form-group">
														<label>Pendidikan</label>
														<input type="text" name="pendidikan" class="form-control" placeholder="" />
														<span class="form-text text-muted">Isikan pendidikan terakhir anda</span>
													</div>


													<div class="separator separator-dashed my-5"></div>
													<div class="form-group">
														<label>Email</label>
														<input type="email" name="email" class="form-control" placeholder="" />
														<span class="form-text text-muted">Isikan alamat email anda</span>
													</div>

													<div class="separator separator-dashed my-5"></div>
													<div class="form-group">
														<label>Telepon</label>
														<input type="text" name="telp" class="form-control" placeholder="" />
														<span class="form-text text-muted">Isikan nomor telepon anda</span>
													</div>

													<div class="separator separator-dashed my-5"></div>
													<div class="form-group">
														<label>Foto</label>
														<input type="File" name="foto" class="form-control" placeholder="" />
														<span class="form-text text-muted"></span>
													</div>


													 <!--begin::Card-->

													 <hr>
										
												<h3 class="card-title">Keahlian</h3>
												
												<label for="">Keahlian</label>

												<select name="mapel_kategori" class ="form-control"id="">
        <?php foreach( $mapel_kategori->getResultArray() AS $mapel ) :
            
            $id_mapel_kategori      = $mapel['id_mapel_kategori'];
            $id_mapel_subkategori   = $mapel['id_mapel_subkategori'];

            $value = $id_mapel_kategori.'-'.$id_mapel_subkategori;
        ?>
        <option value="<?php echo $value ?>"><?php echo $mapel['nama_mapel'].' '.$mapel['nama_submapel'] ?></option>
        <?php endforeach; ?>
    </select><br><br>


	<hr>
										
										<h3 class="card-title">Akun Guru</h3>
										


										<div class="form-group">
														<label>Username</label>
														<input type="text" name="username" class="form-control" placeholder="" />
														<span class="form-text text-muted">Masukkan username anda</span>
													</div>

													<div class="form-group">
														<label>Kata Sandi</label>
														<input type="text" name="password" class="form-control" placeholder="" />
														<span class="form-text text-muted">Masukkan password anda</span>
													</div>

													
													<label for="">Status Akun</label>
    <br>
    <div class="checkbox-inline">
	
	<label class="checkbox checkbox-rounded">
	<input type="radio" id="aktif" checked="checked" name="status_akun" value="aktif" />
	<span></span>Aktif</label>

	<label class="checkbox checkbox-rounded">
	<input type="radio" id="nonaktif" checked="checked" name="status_akun" value="nonaktif" />
	<span></span>Non Aktif</label>
	</div>





										



													<!--begin: Code-->
													<div class="example-code mt-10">
														<ul class="example-nav nav nav-tabs nav-bold nav-tabs-line nav-tabs-line-2x">
															<li class="nav-item">
																<a class="nav-link active" data-toggle="tab" href="#example_code_html_2">HTML</a>
															</li>
														</ul>
														<div class="tab-content">
															<div class="tab-pane active" id="example_code_html_2" role="tabpanel">
																<div class="example-highlight">
																	<pre style="height:400px">
                                                                    <code class="language-html">
                                                                            &lt;form class="form"&gt;
                                                                            &lt;div class="card-body"&gt;
                                                                            &lt;div class="form-group"&gt;
                                                                            &lt;label&gt;Full Name:&lt;/label&gt;
                                                                            &lt;input type="email" class="form-control" placeholder="Enter full name"/&gt;
                                                                            &lt;span class="form-text text-muted"&gt;Please enter your full name&lt;/span&gt;
                                                                            &lt;/div&gt;

                                                                            &lt;div class="separator separator-dashed my-5"&gt;&lt;/div&gt;

                                                                            &lt;div class="form-group"&gt;
                                                                            &lt;label&gt;Email address:&lt;/label&gt;
                                                                            &lt;input type="email" class="form-control" placeholder="Enter email"/&gt;
                                                                            &lt;span class="form-text text-muted"&gt;We'll never share your email with anyone else&lt;/span&gt;
                                                                            &lt;/div&gt;

                                                                            &lt;div class="separator separator-dashed my-5"&gt;&lt;/div&gt;

                                                                            &lt;div class="form-group"&gt;
                                                                            &lt;label&gt;Subscription&lt;/label&gt;
                                                                            &lt;div class="input-group"&gt;
                                                                                &lt;div class="input-group-prepend"&gt;&lt;span class="input-group-text" &gt;$&lt;/span&gt;&lt;/div&gt;
                                                                                &lt;input type="text" class="form-control" placeholder="99.9"/&gt;
                                                                            &lt;/div&gt;
                                                                            &lt;/div&gt;

                                                                            &lt;div class="separator separator-dashed my-5"&gt;&lt;/div&gt;

                                                                            &lt;div class="form-group"&gt;
                                                                            &lt;label&gt;Communication:&lt;/label&gt;
                                                                            &lt;div class="checkbox-list"&gt;
                                                                                &lt;label class="checkbox"&gt;
                                                                                &lt;input type="checkbox"/&gt;
                                                                                &lt;span&gt;&lt;/span&gt;
                                                                                Email
                                                                                &lt;/label&gt;
                                                                                &lt;label class="checkbox"&gt;
                                                                                &lt;input type="checkbox"/&gt;
                                                                                &lt;span&gt;&lt;/span&gt;
                                                                                SMS
                                                                                &lt;/label&gt;
                                                                                &lt;label class="checkbox"&gt;
                                                                                &lt;input type="checkbox"/&gt;
                                                                                &lt;span&gt;&lt;/span&gt;
                                                                                Phone
                                                                                &lt;/label&gt;
                                                                            &lt;/div&gt;
                                                                            &lt;/div&gt;
                                                                            &lt;/div&gt;
                                                                            &lt;div class="card-footer"&gt;
                                                                            &lt;button type="reset" class="btn btn-primary mr-2"&gt;Submit&lt;/button&gt;
                                                                            &lt;button type="reset" class="btn btn-secondary"&gt;Cancel&lt;/button&gt;
                                                                            &lt;/div&gt;
                                                                            &lt;/form&gt;
                                                                            </code>
                                                                    </pre>
																</div>
															</div>
														</div>
													</div>
													<!--end: Code-->
												</div>
												<div class="card-footer">
													<button type="submit" class="btn btn-primary mr-2">Submit</button>
													<a href="/dataguru/index" class="btn btn-secondary">Cancel</a>
												</div>
											</form>
											<!--end::Form-->
										</div>
										<!--end::Card-->



									</div>
                                    <!-- End col -->
                                
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
		<script src="<?php echo base_url() ?>/assets/metro/plugins/global/plugins.bundle.js"></script>
		<script src="<?php echo base_url() ?>/assets/metro/plugins/custom/prismjs/prismjs.bundle.js"></script>
		<script src="<?php echo base_url() ?>/assets/metro/js/scripts.bundle.js"></script>
		<!--end::Global Theme Bundle-->
		<!--begin::Page Vendors(used by this page)-->
		<script src="<?php echo base_url() ?>/assets/metro/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
		<!--end::Page Vendors-->
		<!--begin::Page Scripts(used by this page)-->
		<script src="<?php echo base_url() ?>/assets/metro/js/pages/widgets.js"></script>
		<!--end::Page Scripts-->

        <script src="<?php echo base_url() ?>/assets/scripts/app/app-blog-overview.1.1.0.min.js"></script>
	</body>
	<!--end::Body-->
</html>