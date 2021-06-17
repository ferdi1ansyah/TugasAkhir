<!DOCTYPE html>

<html lang="en">
<!--begin::Head-->

<head>
    <base href="">
    <meta charset="utf-8" />
    <title>Pembelajaran Pipel</title>
    <meta name="description" content="Updates and statistics" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="canonical" href="https://keenthemes.com/metronic" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Page Vendors Styles(used by this page)-->
    <link href="<?php echo base_url() ?>/assets/metro/plugins/custom/fullcalendar/fullcalendar.bundle.css"
        rel="stylesheet" type="text/css" />
    <!--end::Page Vendors Styles-->
    <!--begin::Global Theme Styles(used by all pages)-->
    <link href="<?php echo base_url() ?>/assets/metro/plugins/global/plugins.bundle.css" rel="stylesheet"
        type="text/css" />
    <link href="<?php echo base_url() ?>/assets/metro/plugins/custom/prismjs/prismjs.bundle.css" rel="stylesheet"
        type="text/css" />
    <link href="<?php echo base_url() ?>/assets/metro/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Global Theme Styles-->
    <!--begin::Layout Themes(used by all pages)-->
    <!--end::Layout Themes-->
    <link rel="shortcut icon" href="<?php echo base_url() ?>/assets/metro/media/logos/logo-primary.svg" />
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body"
    class="header-mobile-fixed subheader-enabled aside-enabled aside-fixed aside-secondary-enabled page-loading">
    <!--begin::Main-->
    <!--begin::Header Mobile-->
    <div id="kt_header_mobile" class="header-mobile">
        <!--begin::Logo-->
        <a href="index.html">
            <img alt="Logo" src="<?php echo base_url() ?>/assets/media/logos/logo-letter-2.png"
                class="logo-default max-h-30px" />
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
                                        
                                        foreach( $preview->getResultArray() AS $row ) :
                                        
                                        
                                        
                                        
                                           
                                        $terjawab = false; 
                                        $icon = '<svg  style="font-size: 10px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20px" height="20px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24"/>
                                                    <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10"/>
                                                    <rect fill="#000000" x="11" y="7" width="2" height="8" rx="1"/>
                                                    <rect fill="#000000" x="11" y="16" width="2" height="2" rx="1"/>
                                                </g>
                                            </svg><!--end::Svg Icon-->';
                                        if ( count($cart->contents()) > 0 ) {


                                            foreach ( $cart->contents() AS $trackSoal )  {

                                                if ( $trackSoal['id'] == $row['id_kuis_soal'] ) {

                                                    $terjawab = true;
                                                    $icon = '<!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo4/dist/../src/media/svg/icons/Navigation/Check.svg-->
                                                    <svg  style="font-size: 10px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20px" height="20px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <polygon points="0 0 24 0 24 24 0 24"/>
                                                                    <path d="M6.26193932,17.6476484 C5.90425297,18.0684559 5.27315905,18.1196257 4.85235158,17.7619393 C4.43154411,17.404253 4.38037434,16.773159 4.73806068,16.3523516 L13.2380607,6.35235158 C13.6013618,5.92493855 14.2451015,5.87991302 14.6643638,6.25259068 L19.1643638,10.2525907 C19.5771466,10.6195087 19.6143273,11.2515811 19.2474093,11.6643638 C18.8804913,12.0771466 18.2484189,12.1143273 17.8356362,11.7474093 L14.0997854,8.42665306 L6.26193932,17.6476484 Z" fill="#000000" fill-rule="nonzero" transform="translate(11.999995, 12.000002) rotate(-180.000000) translate(-11.999995, -12.000002) "/>
                                                                </g>
                                                            </svg><!--end::Svg Icon-->';
                                                }
                                            }
                                        }
                                        
                                    ?>

                                    <!--begin::Item-->
                                    <div class="list-item hoverable p-2 p-lg-3 mb-2">
                                        <div class="d-flex align-items-center">
                                            <!--begin::Text-->
                                            <div class="d-flex flex-column flex-grow-1 mr-2">
                                                <span
                                                    class="text-dark-75 font-size-h6 mb-0"><?php  echo 'Soal '. $urutan ?></span>
                                                <a href="<?php echo base_url('quiz/assignment/'. $row['id_materi'].'?soal='. $row['id_kuis_soal']) ?>"
                                                    class="text-muted text-hover-primary font-weight-bold"><?php echo $icon ?><?php echo ($terjawab) ? 'Sudah' : 'Belum' ?>
                                                    Terjawab</a>
                                            </div>
                                            <!--begin::End-->
                                        </div>
                                    </div>
                                    <!--end::Item-->
                                    <?php  $urutan++; endforeach; ?>

                                    <!--Button sidebar-->
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
           



            <!--begin::Entry-->
            <div class="d-flex flex-column-fluid">
                <!--begin::Container-->
                <div class="container">
                    <!--begin::Dashboard-->
                    <!--begin::Row-->
                    <div class="row">



                        <?php 

                                    // if ( $preview->getNumRows() > 0 ) {

                                        $request = \Config\Services::request();
                                        $tampilSoalById = $request->getGet('soal');
                                        
                                        $id = "";
                                        if ( $tampilSoalById ) {

                                            $id = $tampilSoalById;
                                        }
                                        $nomor = 1;
                                        foreach ( $preview->getResultArray() AS $row ) {
                                            
                                            if ( empty( $id ) ) {

                                                $id = $row['id_kuis_soal'];
                                            }

                                            if ( $row['id_kuis_soal'] == $id ) {




                                                $jawaban  = "";
                                                $rowid = "";
                                                if ( count($cart->contents()) > 0 ) {


                                                    foreach ( $cart->contents() AS $trackSoal )  {

                                                        if ( $row['id_kuis_soal'] == $trackSoal['id'] ) {

                                                            $jawaban = $trackSoal['name']; // jawaban yang tersimpan
                                                            $rowid = $trackSoal['rowid'];
                                                        }

                                                    }

                                                }

                                    ?>

                        <div class="col-md-12">

                            <form action="<?php echo base_url('quiz/answer/'. $id_materi.'/'. $row['id_kuis_soal']) ?>" method="POST">

                                <div class="card card-custom">
                                    <div class="card-header">
                                        <div class="card-title">

                                            <h3 class="card-label"><?php echo $row['isi_soal'] ?></h3>
                                            <input type="hidden" name="rowid" value="<?php echo $rowid ?>">
                                        </div>
                                    </div>
                                    <div class="card-body">

                                        <div style="font-weight: 400">
                                            <div class="row">
                                                <div class="col-md-11">
                                                    
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" id="customRadioInline1A" name="pilihan" class="custom-control-input" value="a" <?php echo ($jawaban == "a") ? 'checked' : '' ?> required="">
                                                        <label class="custom-control-label" for="customRadioInline1A">A. <?php echo $row['soal_a'] ?></label>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col-md-11">
                                                    
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" id="customRadioInline1B" name="pilihan" class="custom-control-input" value="b" <?php echo ($jawaban == "b") ? 'checked' : '' ?> required="">
                                                        <label class="custom-control-label" for="customRadioInline1B">B. <?php echo $row['soal_b'] ?></label>
                                                    </div>
                                                </div>
    
                                            </div>
                                            <div class="row">
                                                <div class="col-md-11">

                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" id="customRadioInline1C" name="pilihan" class="custom-control-input" value="c" <?php echo ($jawaban == "c") ? 'checked' : '' ?> required="">
                                                        <label class="custom-control-label" for="customRadioInline1C">C. <?php echo $row['soal_c'] ?></label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-11">
                                                    
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" id="customRadioInline1D" name="pilihan" class="custom-control-input" value="d" <?php echo ($jawaban == "d") ? 'checked' : '' ?> required="">
                                                        <label class="custom-control-label" for="customRadioInline1D">D. <?php echo $row['soal_d'] ?></label>
                                                    </div>
                                                
                                                
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row">
                                    
                                            <div class="col-md-12 text-right">
                                                
                                                <button class="btn btn-outline-success btn-sm">Simpan Jawaban</button>
                                                <?php if ( $nomor == $preview->getNumRows() && ( count($cart->contents()) > 0 ) ) { ?>

                                                    <a href="<?php echo base_url('quiz/finishAssignment/'. $id_materi) ?>" class="btn btn-primary btn-sm">Finish</a>

                                                <?php }  ?>
                                            </div>
                                        </div>
                                    </div>

                                    <hr>




                                </div>
                            </form>

                            <!--begin::Card-->

                            <!--end::Card-->


                        </div>
                        <!--end:: Card-->

                        <?php } $nomor++; } ?>
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
    <script>
        var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";
    </script>
    <!--begin::Global Config(global config for global JS scripts)-->
    <script>
        var KTAppSettings = {
            "breakpoints": {
                "sm": 576,
                "md": 768,
                "lg": 992,
                "xl": 1200,
                "xxl": 1200
            },
            "colors": {
                "theme": {
                    "base": {
                        "white": "#ffffff",
                        "primary": "#1BC5BD",
                        "secondary": "#E5EAEE",
                        "success": "#1BC5BD",
                        "info": "#6993FF",
                        "warning": "#FFA800",
                        "danger": "#F64E60",
                        "light": "#F3F6F9",
                        "dark": "#212121"
                    },
                    "light": {
                        "white": "#ffffff",
                        "primary": "#1BC5BD",
                        "secondary": "#ECF0F3",
                        "success": "#C9F7F5",
                        "info": "#E1E9FF",
                        "warning": "#FFF4DE",
                        "danger": "#FFE2E5",
                        "light": "#F3F6F9",
                        "dark": "#D6D6E0"
                    },
                    "inverse": {
                        "white": "#ffffff",
                        "primary": "#ffffff",
                        "secondary": "#212121",
                        "success": "#ffffff",
                        "info": "#ffffff",
                        "warning": "#ffffff",
                        "danger": "#ffffff",
                        "light": "#464E5F",
                        "dark": "#ffffff"
                    }
                },
                "gray": {
                    "gray-100": "#F3F6F9",
                    "gray-200": "#ECF0F3",
                    "gray-300": "#E5EAEE",
                    "gray-400": "#D6D6E0",
                    "gray-500": "#B5B5C3",
                    "gray-600": "#80808F",
                    "gray-700": "#464E5F",
                    "gray-800": "#1B283F",
                    "gray-900": "#212121"
                }
            },
            "font-family": "Poppins"
        };
    </script>
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