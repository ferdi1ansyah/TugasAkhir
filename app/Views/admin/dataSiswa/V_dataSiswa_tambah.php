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
		<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="d-flex flex-row flex-column-fluid page">
				<!--begin::Aside-->
				


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
										<h2 class="d-flex align-items-center text-dark font-weight-bold my-1 mr-3">Tambah Data Siswa</h2>
										<!--end::Page Title-->
									</div>
									<!--end::Page Heading-->
								</div>
								<!--end::Info-->

								<!--begin::Toolbar-->
								<div class="d-flex align-items-center flex-wrap">
									<!--begin::Button-->
									
										
									
									</a>
									
											<!--end::Svg Icon-->
										</span>
									</a>
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
							


                                <div class="row justify-content-center">
                                    <!-- start col -->
                                    <div class="col-md-8">
                                    
                                    
                                    

                                        <!--begin::Card-->
										<div class="card card-custom example example-compact">
											<div class="card-header">
												<h3 class="card-title">Masukan Data Siswa</h3>
												<div class="card-toolbar">
													
												</div>
											</div>
											<!--begin::Form-->
											<form class="form" action="/datasiswa/prosesTambahSiswa" method="POST">
												<div class="card-body">
													<div class="form-group">
														<label>Nama Lengkap</label>
														<input type="text" name="nama" class="form-control" placeholder="" />
														<span class="form-text text-muted">Isikan nama lengkap anda</span>
													</div>

													<div class="separator separator-dashed my-5"></div>
													<div class="form-group">
														<label for="exampleSelectd">Jenis Kelamin</label>
														<select class="form-control" name="gender"  id="exampleSelectd">
															<option value="L">Laki Laki</option>
															<option Value="P">Perempuan</option>
															
														</select>
													</div>
													

                                                    <div class="separator separator-dashed my-5"></div>
													<div class="form-group">
														<label>Domisili</label>
														<input type="text" name="domisili" class="form-control" placeholder="" />
														<span class="form-text text-muted">Isikan domisili anda</span>
													</div>

                                                    <div class="separator separator-dashed my-5"></div>
													<div class="form-group">
														<label>Tanggal Lahir</label>
														<input type="date" name="tanggal_lahir" class="form-control" placeholder="" />
														<span class="form-text text-muted">Isikan tanggal lahir anda</span>
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
														<label>Alamat</label>
														<input type="text" name="alamat" class="form-control" placeholder="" />
														<span class="form-text text-muted">Isikan alamat / tempat tinggal anda</span>
													</div>


                                                    <div class="separator separator-dashed my-5"></div>
													<div class="form-group">
														<label>Pendidikan Sekarang</label>
														<input type="text" name="pendidikan_sekarang" class="form-control" placeholder="" />
														<span class="form-text text-muted">Isikan pendidikan yang ditempuh sekarang</span>
													</div>


													<div class="separator separator-dashed my-5"></div>
													<div class="form-group">
														<label>Asal Sekolah:</label>
														<input type="text" name="asal_sekolah" class="form-control" placeholder="" />
														<span class="form-text text-muted">Isikan asal sekolah anda</span>
													</div>

													<div class="separator separator-dashed my-5"></div>
													<div class="form-group">
														<label>Foto</label>
														<input type="File" name="foto" class="form-control" placeholder="" />
														<span class="form-text text-muted"></span>
													</div>


													 <!--begin::Card-->

													 <hr>
<!-- 										
												<h3 class="card-title">Keahlian</h3>
												
												<label for="">Keahlian</label>

												<select name="mapel_kategori" id="">
        <?php foreach( $mapel_kategori->getResultArray() AS $mapel ) :
            
            $id_mapel_kategori      = $mapel['id_mapel_kategori'];
            $id_mapel_subkategori   = $mapel['id_mapel_subkategori'];

            $value = $id_mapel_kategori.'-'.$id_mapel_subkategori;
        ?>
        <option value="<?php echo $value ?>"><?php echo $mapel['nama_mapel'].' '.$mapel['nama_submapel'] ?></option>
        <?php endforeach; ?>
    </select><br><br>


	<hr> -->
										
										<h3 class="card-title">Akun Siswa</h3>
										


										<div class="form-group">
														<label>Username</label>
														<input type="text" name="username" class="form-control" placeholder="" />
														<span class="form-text text-muted">Isikan username anda</span>
													</div>

													<div class="form-group">
														<label>Kata Sandi</label>
														<input type="text" name="password" class="form-control" placeholder="" />
														<span class="form-text text-muted">Isikan password anda</span>
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
													<a href="/datasiswa/index" class="btn btn-secondary">Cancel</a>
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
		
