<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <title>Gallery</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="shortcut icon"
      href="assets/images/147455559147662-1-128x128-55.png"
      type="image/x-icon"
    />
    <base href="https://gymkhana.iitb.ac.in/~nss/tem/gallery/" target="_blank">
    <meta name="description" content="" />
    <link rel="stylesheet" href="assets/et-line-font-plugin/style.css" />
    <link
      rel="stylesheet"
      href="assets/bootstrap-material-design-font/css/material.css"
    />
    <link rel="stylesheet" href="assets/tether/tether.min.css" />
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/socicon/css/socicon.min.css" />
    <link rel="stylesheet" href="assets/animate.css/animate.min.css" />
    <link rel="stylesheet" href="assets/dropdown/css/style.css" />
    <link rel="stylesheet" href="assets/theme/css/style.css" />
    <link rel="stylesheet" href="assets/mobirise-gallery/style.css" />
    <link rel="stylesheet" href="./slider.css" />
    <script src="./slider.js"></script>
    <link
      rel="stylesheet"
      href="assets/mobirise/css/mbr-additional.css"
      type="text/css"
    />
    <script src="assets/web/assets/jquery/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>

    <style type="text/css">
      /* Paste this css to your style sheet file or under head tag */
      /* This only works with JavaScript, 
if it's not present, don't show loader */
      .no-js #loader {
        display: none;
      }
      .js #loader {
        display: block;
        position: absolute;
        left: 100px;
        top: 0;
      }
      .se-pre-con {
        position: fixed;
        left: 0px;
        top: 0px;
        width: 100%;
        height: 100%;
        z-index: 9999;
        background: url(assets/images/Preloader.gif) center no-repeat #fff;
      }
    </style>

    <script type="text/javascript">
      //paste this code under the head tag or in a separate js file.
      // Wait for window load
      $(window).load(function() {
        // Animate loader off screen
        $('.se-pre-con').fadeOut('slow');
      });
    </script>
    <script type="text/javascript">
      var slideIndex = 0;
      carousel();

      function carousel() {
        var i;
        var x = document.getElementsByClassName('mySlides');
        for (i = 0; i < x.length; i++) {
          x[i].style.display = 'none';
        }
        slideIndex++;
        if (slideIndex > x.length) {
          slideIndex = 1;
        }
        x[slideIndex - 1].style.display = 'block';
        setTimeout(carousel, 1000);
      }
    </script>

    <script>
      (function(i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        (i[r] =
          i[r] ||
          function() {
            (i[r].q = i[r].q || []).push(arguments);
          }),
          (i[r].l = 1 * new Date());
        (a = s.createElement(o)), (m = s.getElementsByTagName(o)[0]);
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m);
      })(
        window,
        document,
        'script',
        'https://www.google-analytics.com/analytics.js',
        'ga'
      );

      ga('create', 'UA-105828259-1', 'auto');
      ga('send', 'pageview');
    </script>
  </head>
  <body>
    <div class="se-pre-con"></div>

    <?php include("./navbar.php"); ?>

    <section
      class="mbr-gallery mbr-section mbr-section-nopadding mbr-slider-carousel"
      id="Gallery-gallery3-0"
      data-filter="false"
      style="background-image: url(./assets/images/vood.jpg) ; padding-top: 1.5rem; padding-bottom: 1.5rem;display:inline-items;"
    >
      <!-- Filter -->

      <div
        class="container"
        id="Gallery-header3-0"
        style="padding-top: 5rem; padding-bottom: 1.5rem;"
      >
        <div class="row">
          <div class="col-xs-12">
            <h3 class="mbr-section-title display-2">Gallery</h3>
          </div>
          <div class="row" style="margin-right: 30px; margin-left: 30px;">
            <div class="col-xs-12 col-md-6">
              <h4>
                <a href="./Memoirs.html" style="color: #202020; ">Memoirs</a>
              </h4>
            </div>
            <div class="col-xs-12 col-md-6" style="text-align: right;">
              <h4>
                <a href="./HoIITB.html" target="_blank" style="color: #202020; "
                  >Invisible Humans of IIT Bombay</a
                >
              </h4>
            </div>
          </div>
        </div>
        <div class="box">
          <ul class="menu">
            <li>
              <div
                href="#lb-Gallery-gallery3-0"
                data-slide-to="0"
                data-toggle="modal"
              >
                <div class="box-set"><a href="#">Hostel 15 Plantations</a></div>
                <div class="img-1">
                  <a hreaf="#"
                    ><img src="assets/images/Gallery/15plant.jpg" alt="Image 1"
                  /></a>
                </div>
              </div>
            </li>
            <li>
              <div
                href="#lb-Gallery-gallery3-0"
                data-slide-to="1"
                data-toggle="modal"
              >
                <div class="box-set">
                  <a href="#">Adult Literacy Program</a>
                </div>
                <a hreaf="#"
                  ><img src="assets/images/Gallery/ALP.jpg" alt="Image 2"
                /></a>
              </div>
            </li>
            <li>
              <div
                href="#lb-Gallery-gallery3-0"
                data-slide-to="2"
                data-toggle="modal"
              >
                <div class="box-set">
                  <a href="#">Library at Aman Day Care Centre</a>
                </div>
                <a hreaf="#"
                  ><img src="assets/images/Gallery/Aman.jpg" alt="Image 3"
                /></a>
              </div>
            </li>
            <li>
              <div
                href="#lb-Gallery-gallery3-0"
                data-slide-to="3"
                data-toggle="modal"
              >
                <div class="box-set box-set-4">
                  <a href="#">Library at Aman Day Care Centre</a>
                </div>
                <a hreaf="#"
                  ><img src="assets/images/Gallery/C01.JPG" alt="Image 4"
                /></a>
              </div>
            </li>
          </ul>
        </div>
        <div class="mbr-gallery-row-main"></div>
        <div>
          <div class="mbr-gallery-row container">
            <div class=" mbr-gallery-layout-default">
              <div>
                <div>
                  <div
                    class="mbr-gallery-item mbr-gallery-item__mobirise3 mbr-gallery-item--p1"
                    data-tags="Green Campus"
                    data-video-url="false"
                  >
                    <div
                      href="#lb-Gallery-gallery3-0"
                      data-slide-to="0"
                      data-toggle="modal"
                    >
                      <img alt="" src="assets/images/Gallery/15plant.jpg" />

                      <span class="icon-focus"></span>
                      <span class="mbr-gallery-title"
                        >Hostel 15 Plantations</span
                      >
                    </div>
                  </div>
                </div>
              </div>
              <div class="clearfix"></div>
            </div>
          </div>

          <div
            data-app-prevent-settings=""
            class="mbr-slider modal fade carousel slide"
            tabindex="-1"
            data-keyboard="true"
            data-interval="false"
            id="lb-Gallery-gallery3-0"
          >
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-body">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img alt="" src="assets/images/Gallery/15plant.jpg" />
                    </div>
                    <div class="carousel-item">
                      <img alt="" src="assets/images/Gallery/ALP.jpg" />
                    </div>
                    <div class="carousel-item">
                      <img alt="" src="assets/images/Gallery/Aman.jpg" />
                    </div>
                    <div class="carousel-item">
                      <img alt="" src="assets/images/Gallery/C01.JPG" />
                    </div>
                  </div>
                  <a
                    class="left carousel-control"
                    role="button"
                    data-slide="prev"
                    href="#lb-Gallery-gallery3-0"
                  >
                    <span class="icon-prev" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a
                    class="right carousel-control"
                    role="button"
                    data-slide="next"
                    href="#lb-Gallery-gallery3-0"
                  >
                    <span class="icon-next" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>

                  <a class="close" href="#" role="button" data-dismiss="modal">
                    <span aria-hidden="true">×</span>
                    <span class="sr-only">Close</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <footer
      class="mbr-small-footer mbr-section mbr-section-nopadding"
      id="page2-footer1-0"
      style="background-color: rgb(50, 50, 50); padding-top: 1.75rem; padding-bottom: 1.75rem;"
    >
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2 text-xs-center">
            <div>
              <a
                class="btn btn-social"
                title="Twitter"
                target="_blank"
                href="https://twitter.com/nss_iitb"
                ><i class="socicon socicon-twitter"></i
              ></a>
              <a
                class="btn btn-social"
                title="Facebook"
                target="_blank"
                href="https://www.facebook.com/nssiitbombay?fref=ts"
                ><i class="socicon socicon-facebook"></i
              ></a>
              <a
                class="btn btn-social"
                title="YouTube"
                target="_blank"
                href="https://www.youtube.com/channel/UCPtcaL4JLfIq2fUGORmn6Yg"
                ><i class="socicon socicon-youtube"></i
              ></a>
              <a
                class="btn btn-social"
                title="WordPress"
                target="_blank"
                href="https://nssiitbblog.wordpress.com/"
                ><span
                  class="socicon socicon-wordpress mbr-iconfont mbr-iconfont-btn"
                ></span
              ></a>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <p class="text-xs-center">Copyright (c) 2017 NSS IIT Bombay</p>
      </div>
    </footer>

    <script src="assets/web/assets/jquery/jquery.min.js"></script>
    <script src="assets/tether/tether.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/smooth-scroll/SmoothScroll.js"></script>
    <script src="assets/viewportChecker/jquery.viewportchecker.js"></script>
    <script src="assets/dropdown/js/script.min.js"></script>
    <script src="assets/touchSwipe/jquery.touchSwipe.min.js"></script>
    <script src="assets/masonry/masonry.pkgd.min.js"></script>
    <script src="assets/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="assets/bootstrap-carousel-swipe/bootstrap-carousel-swipe.js"></script>
    <script src="assets/theme/js/script.js"></script>
    <script src="assets/mobirise-gallery/script.js"></script>

    <input name="animation" type="hidden" />
    <div id="scrollToTop" class="scrollToTop mbr-arrow-up">
      <a style="text-align: center;"><i class="mbr-arrow-up-icon"></i></a>
    </div>
  </body>
</html>
