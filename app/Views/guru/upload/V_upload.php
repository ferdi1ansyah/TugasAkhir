?php

$this->extend('templates/template_guru');

?>

<?php $this->section('content') ?>


<div class="main-content-container container-fluid px-4">

	<!---deskripsi--!>
    <!--begin::Card-->
    <div class="card card-custom">
											<div class="card-header">
												<div class="card-title">
													<span class="card-icon">
														<i class="flaticon2-line-chart text-primary"></i>
													</span>
													<h3 class="card-label">Card Icon
													<small>sub title</small></h3>
												</div>
											</div>
											<div class="card-body">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.</div>
										</div>
										<!--end::Card-->

                                        <!---deskripsi--!>

                            <!--buat soal ---!>
                                        <!--begin::Card-->
										<div class="card card-custom bg-success">
											<div class="card-header border-0">
												<div class="card-title">
													<span class="card-icon">
														<i class="flaticon2-chat-1 text-white"></i>
													</span>
													<h3 class="card-label text-white">Success Background Color</h3>
												</div>
												<div class="card-toolbar">
													<a href="#" class="btn btn-sm btn-white font-weight-bold">
													<i class="flaticon2-cube"></i>Settings</a>
												</div>
											</div>
											<div class="separator separator-solid separator-white opacity-20"></div>
											<div class="card-body text-white">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.</div>
										</div>
										<!--end::Card-->

                                        <!---buat soal-----!>


                                       <!---Upload video---!>

                                        <!--begin::Card-->
										<div class="card card-custom card-stretch">
											<div class="card-header">
												<div class="card-title">
													<h3 class="card-label">Upload</h3>
												</div>
											</div>
											<div class="card-body">
												<div class="uppy" id="kt_uppy_4">
													<div class="uppy-drag"></div>
													<div class="uppy-informer"></div>
													<div class="uppy-progress"></div>
													<div class="uppy-thumbnails"></div>
													<button class="uppy-btn btn btn-light-primary font-weight-bold btn-sm mt-4">Upload File(s)</button>
												</div>
											</div>
										</div>
										<!--end::Card-->



                                        <!-----Upload Video-----!>

</div>




<?php $this->endSection() ?>