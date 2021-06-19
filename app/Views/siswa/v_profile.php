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

<head>
	<base href="../../">
	<meta charset="utf-8" />
	<title>Nav Panels | Keenthemes</title>
	<meta name="description" content="Nav panels examples" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<link rel="canonical" href="https://keenthemes.com/metronic" />
	<!--begin::Fonts-->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
	<!--end::Fonts-->
	<!--begin::Global Theme Styles(used by all pages)-->
	<link href="/assets/metro/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
	<link href="/assets/metro/plugins/custom/prismjs/prismjs.bundle.css" rel="stylesheet" type="text/css" />
	<link href="/assets/metro/css/style.bundle.css" rel="stylesheet" type="text/css" />
	<!--end::Global Theme Styles-->
	<!--begin::Layout Themes(used by all pages)-->
	<!--end::Layout Themes-->
	<link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
</head>


<?php

	$session = \Config\Services::session();
?>

<div class="flex-row-fluid ml-lg-8">
	<!--begin::Card-->
	<div class="card card-custom card-stretch">
		<!--begin::Header-->
		<div class="card-header py-3">
			<div class="card-title align-items-start flex-column">
				<h3 class="card-label font-weight-bolder text-dark">Personal Information</h3>
				<span class="text-muted font-weight-bold font-size-sm mt-1">Update your personal informaiton</span>
			</div>
			<div class="card-toolbar">
				
				<a href="<?php echo base_url('dashboard/main') ?>" class="btn btn-secondary">Batal</a>
			</div>
		</div>
		<!--end::Header-->

		<?php
		
			echo $session->getFlashdata('pesan');
		?>

		<!--begin::Form-->
		<form class="form" action="<?php echo base_url('dashboard/prosespengubahanprofile') ?>" method="POST">
			<!--begin::Body-->
			<div class="card-body">
				<div class="row">
					<label class="col-xl-3"></label>
					<div class="col-lg-9 col-xl-6">
						<h5 class="font-weight-bold mb-6">Customer Info</h5>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-xl-3 col-lg-3 col-form-label">Nama Lengkap</label>
					<div class="col-lg-9 col-xl-6">
						<input class="form-control form-control-lg form-control-solid" name="nama_lengkap" type="text" value="<?php echo $edit['nama_lengkap'] ?>" />
					</div>
				</div>
				<div class="form-group row">
					<label class="col-xl-3 col-lg-3 col-form-label">Domisili</label>
					<div class="col-lg-9 col-xl-6">
						<input class="form-control form-control-lg form-control-solid" type="text" name="domisili" value="<?php echo $edit['domisili'] ?>" />
					</div>
				</div>
				<div class="form-group row">
					<label class="col-xl-3 col-lg-3 col-form-label">Email</label>
					<div class="col-lg-9 col-xl-6">
						<input class="form-control form-control-lg form-control-solid" type="email" name="email" value="<?php echo $edit['email'] ?>" />
						<span class="form-text text-muted">If you want your invoices addressed to a company. Leave blank
							to use your full name.</span>
					</div>
				</div>
				<div class="row">
					<label class="col-xl-3"></label>
					<div class="col-lg-9 col-xl-6">
						<h5 class="font-weight-bold mt-10 mb-6">Contact Info</h5>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-xl-3 col-lg-3 col-form-label">Contact Phone</label>
					<div class="col-lg-9 col-xl-6">
						<div class="input-group input-group-lg input-group-solid">
							<div class="input-group-prepend">
								<span class="input-group-text">
									<i class="la la-phone"></i>
								</span>
							</div>
							<input type="number" name="telp" class="form-control form-control-lg form-control-solid" value="<?php echo $edit['telp'] ?>"
								placeholder="Phone" />
						</div>
						<span class="form-text text-muted">We'll never share your email with anyone else.</span>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-xl-3 col-lg-3 col-form-label">Address</label>
					<div class="col-lg-9 col-xl-6">
						<div class="input-group input-group-lg input-group-solid">
							<div class="input-group-prepend">
								<span class="input-group-text">
									<i class="la la-at"></i>
								</span>
							</div>
							<input type="text" name="alamat" class="form-control form-control-lg form-control-solid"
							value="<?php echo $edit['alamat'] ?>" placeholder="Email" />
						</div>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-xl-3 col-lg-3 col-form-label">Pendidikan Sekarang</label>
					<div class="col-lg-9 col-xl-6">
						<div class="input-group input-group-lg input-group-solid">
							<input type="text" name="pendidikan_sekarang" class="form-control form-control-lg form-control-solid"
								placeholder="Username" value="<?php echo $edit['pendidikan_sekarang'] ?>" />
							<div class="input-group-append">
								<span class="input-group-text">.com</span>
							</div>
						</div>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-xl-3 col-lg-3 col-form-label">Asal Sekolah</label>
					<div class="col-lg-9 col-xl-6">
						<div class="input-group input-group-lg input-group-solid">
							<input type="text" name="asal_sekolah" class="form-control form-control-lg form-control-solid"
								placeholder="Username" value="<?php echo $edit['asal_sekolah'] ?>" />
							<div class="input-group-append">
								<span class="input-group-text">.com</span>
							</div>
						</div>
					</div>
				</div>


				<div class="form-group row">
					<button class="btn btn-primary">Simpan Perubahan</button>
				</div>
			</div>
			<!--end::Body-->
		</form>
		<!--end::Form-->
	</div>
</div>