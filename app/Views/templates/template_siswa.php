<!DOCTYPE html>
<html class="no-js" lang="">

<!-- Mirrored from preview.uideck.com/items/saaspal/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 10 May 2021 04:21:31 GMT -->

<head>
  <meta charset="utf-8" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>Pipel - Pipel Edukasi dan pembelajaran </title>
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url() ?>/assets/saaspal/img/favicon.png" />

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo base_url() ?>/assets/saaspal/css/bootstrap-5.0.0-alpha-2.min.css" />
  <link rel="stylesheet" href="<?php echo base_url() ?>/assets/saaspal/css/LineIcons.2.0.css" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo base_url() ?>/assets/saaspal/css/tiny-slider.css" />
  <link rel="stylesheet" href="<?php echo base_url() ?>/assets/saaspal/css/animate.css" />
  <link rel="stylesheet" href="<?php echo base_url() ?>/assets/saaspal/css/main.css" />



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
  text-align: right;
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

<body>
  <!--[if lte IE 9]>
      <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="https://browsehappy.com/">upgrade your browser</a> to improve
        your experience and security.
      </p>
    <![endif]-->

  <div class="preloader">
    <div class="loader">
      <div class="ytp-spinner">
        <div class="ytp-spinner-container">
          <div class="ytp-spinner-rotator">
            <div class="ytp-spinner-left">
              <div class="ytp-spinner-circle"></div>
            </div>
            <div class="ytp-spinner-right">
              <div class="ytp-spinner-circle"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-----navbar-->

  <header class="header">
    <div class="navbar-area">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-12">
            <nav class="navbar navbar-expand-lg">
              <a class="navbar-brand" href="#">
                <img src="<?php echo base_url() ?>/assets/saaspal/img/logo/logo2.svg" alt="Logo" />
              </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="toggler-icon"></span>
                <span class="toggler-icon"></span>
                <span class="toggler-icon"></span>
              </button>
              <div class="subscribe-wrapper
    <form action=" #" class="subscribe-form">
                <input type="text"  name="search-module" class="search-module" id="subs-email" placeholder="Search">
                
                </form>

              </div>
              <ul id="nav" class="navbar-nav ml-auto">

                <li class="nav-item">
                  <a class="page-scroll" href="#home">Home</a>
                </li>

                        <li class="nav-item">
                  <a class="page-scroll" href="#course">Course</a>
                </li>
              </ul>
              <ul class="navbar-nav">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/fox.jpg"
                      width="40" height="40" class="rounded-circle">
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                 
                    <center> <a class="text-secondary" href="/dashboard/main">Dashboard</a>
                   <center> <a class="text-secondary" href="/login/proseslogout">Log Out</a>
                  </div>
                </li>
              </ul>
          </div>

          </nav>

        </div>
      </div>

    </div>

    </div>

  </header>



  <!----navbar-->





  <section id="home" class="hero-section">
    <div class="container">
      <div class="row align-items-center position-relative">
        <div class="col-lg-6">
          <div class="hero-content">
            <h1 class="wow fadeInUp" data-wow-delay=".4s">Selamat Belajar secara nyaman tanpa halangan</h1>
            <p class="wow fadeInUp" data-wow-delay=".6s">
             Yuk belajar dengan pipel dengan para expert di bidang aksesbilitas dan lainnya
            </p>
            <a href="javascript:void(0)" class="main-btn border-btn btn-hover wow fadeInUp" data-wow-delay=".6s"> Scroll Kebawah
              </a>
            <a href="#course" class="scroll-bottom"> <i class="lni lni-arrow-down"></i></a>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="hero-img wow fadeInUp" data-wow-delay=".5s">
            <img src="<?php echo base_url() ?>/assets/saaspal/img/hero/hero-img-siswa.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>


  <!----Kelas Koneten-->

  <!----Kelas Koneten-->


  


  <section id="course" class="pricing-section pt-60 pb-120">
  
  
    <div class="container mb-2">
        <h3 class="mb-25 wow fadeInUp">Materi Kelas</p></h3>

        <div class="tab-content mt-4" id="pills-tabContent">
          <div class="tab-pane fade show active" id="pills-month" role="tabpanel" aria-labelledby="pills-month-tab">
            <div class="d-flex flex-wrap justify-content-between">


              <?php foreach ( $materi->getResultArray() AS $row ) : ?>
              
              <div class="col-lg-4 row col-md-8 col-sm-4">
              <div class="single-pricing">

                  <a href="<?php echo base_url('dashboard/detail/'. $row['id_materi']) ?>">
                  <div class="content">

                    <?php
                    
                        $img = "https://pertaniansehat.com/v01/wp-content/uploads/2015/08/default-placeholder.png"; // gambar default

                        // gambar terdapat upload
                        if ( $row['media'] ) {

                            $img = base_url('assets/images/thumbnail-material/'. $row['media']);
                        }
                    ?>
                    <img src="<?php echo $img ?>" class="card-img-top" alt="Thumnail" style="object-fit: cover; height: 150px">

                    <h3><?php echo $row['judul'] ?></h3>
                    <p class="card-text"><?php echo $row['deskripsi'] ?>.</p>
                  </div>
                  </a>

                </div>

              </div>
              <?php endforeach; ?>

            







            </div>

          </div>
        </div>

    </div>

  
  </section>





      <section id="contact" class="subscribe-section pt-120">
        <div class="container">
          <div class="subscribe-wrapper img-bg">
            <div class="row align-items-center">
              <div class="col-xl-6 col-lg-7">
                <div class="section-title mb-15">
                  <h1 class="text-white mb-25">Silahkan Download Materi Aksesbilitas</h1>
                  <p class="text-white pr-5">Download Sumber Belajar materi materi yang saya dapatkan dari expert dan praktiksir</p>
                </div>
              </div>
              <div class="col-xl-6 col-lg-5">
                <form action="#" class="subscribe-form">

                  <button type="submit" class="btn-light" texr="main">Mulai Download</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>



      <footer class="footer">
        <div class="container">
          <div class="widget-wrapper">
            <div class="row">
              <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="footer-widget">
                  <div class="logo mb-30">
                    <a href="index-2.html"> <img src="<?php echo base_url() ?>/assets/saaspal/img/logo/logo2.svg"
                        alt=""> </a>
                  </div>
                  <p class="desc mb-30 text-white">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed dinonumy
                    eirmod tempor invidunt.</p>
                  <ul class="socials">
                    <li>
                      <a href="jvascript:void(0)"> <i class="lni lni-facebook-original"></i> </a>
                    </li>
                    <li>
                      <a href="jvascript:void(0)"> <i class="lni lni-twitter-original"></i> </a>
                    </li>
                    <li>
                      <a href="jvascript:void(0)"> <i class="lni lni-instagram-original"></i> </a>
                    </li>
                    <li>
                      <a href="jvascript:void(0)"> <i class="lni lni-linkedin-original"></i> </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-xl-2 col-lg-2 col-md-6">
                <div class="footer-widget">
                  <h3>About Us</h3>
                  <ul class="links">
                    <li> <a href="javascript:void(0)">Home</a> </li>
                    <li> <a href="javascript:void(0)">Feature</a> </li>
                    <li> <a href="javascript:void(0)">About</a> </li>
                    <li> <a href="javascript:void(0)">Testimonials</a> </li>
                  </ul>
                </div>
              </div>
              <div class="col-xl-3 col-lg-3 col-md-6">
                <div class="footer-widget">
                  <h3>Features</h3>
                  <ul class="links">
                    <li> <a href="javascript:void(0)">How it works</a> </li>
                    <li> <a href="javascript:void(0)">Privacy policy</a> </li>
                    <li> <a href="javascript:void(0)">Terms of service</a> </li>
                    <li> <a href="javascript:void(0)">Refund policy</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-xl-3 col-lg-3 col-md-6">
                <div class="footer-widget">
                  <h3>Other Products</h3>
                  <ul class="links">
                    <li> <a href="jvascript:void(0)">Accounting Software</a> </li>
                    <li> <a href="jvascript:void(0)">Billing Software</a> </li>
                    <li> <a href="jvascript:void(0)">Booking System</a> </li>
                    <li> <a href="jvascript:void(0)">Tracking System</a> </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </footer>


      <!-- <a href="#" class="scroll-top btn-hover">
        <i class="lni lni-chevron-up"></i>
      </a> -->


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

      <script src="<?php echo base_url() ?>/assets/saaspal/js/bootstrap.5.0.0.alpha-2-min.js"></script>
      <script src="<?php echo base_url() ?>/assets/saaspal/js/tiny-slider.js"></script>
      <script src="<?php echo base_url() ?>/assets/saaspal/js/wow.min.js"></script>
      
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

<!-- Mirrored from preview.uideck.com/items/saaspal/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 10 May 2021 04:21:37 GMT -->

</html>
