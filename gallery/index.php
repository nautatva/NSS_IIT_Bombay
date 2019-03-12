<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <title>Gallery</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <meta name="description" content="" />
    <link rel="stylesheet" href="./css/bootstrap.min.css" />

    <link rel="stylesheet" href="./css/custom.css" />

    <link rel="stylesheet" href="./slider.css" />

    <link rel="stylesheet" href="./et-line-font-plugin/style.css" />

    <link rel="stylesheet" href="./mobirise-gallery/style.css" />

    <script src="./js/jquery.min.js"></script>
  </head>
  <body>
    <div class="se-pre-con"></div>

    <!-- <?php include("./navbar.php"); ?> -->

    <section
      class="mbr-gallery mbr-section mbr-section-nopadding mbr-slider-carousel"
      id="Gallery-gallery3-0"
      data-filter="false"
      style="background-image: url(./vood.jpg) ; padding-top: 1.5rem; padding-bottom: 1.5rem;display:inline-items;"
    >
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
                    ><img src="../assets/gallery/15plant.jpg" alt="Image 1"
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
                  ><img src="../assets/gallery/ALP.jpg" alt="Image 2"
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
                  ><img src="../assets/gallery/Aman.jpg" ; alt="Image 3"
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
                  <a href="#">Winning entry for Click for Change</a>
                </div>
                <a hreaf="#"
                  ><img src="../assets/gallery/C01.JPG" ; alt="Image 4"
                /></a>
              </div>
            </li>
          </ul>
        </div>
        <div class="mbr-gallery-row-main"></div>
        <?php
        $parentdir = "../assets/gallery/EO/";
        $EOfolders = scandir($parentdir);
        $i=0;
        foreach ($EOfolders as $folder) {
            if ($folder[0] == "."){
                continue;
            }
            $dir = $parentdir.$folder.'/';
            echo('<h2>'.$folder.'</h2>');
            $subfolder = scandir($dir);
            echo('
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
                      href="#lb-Gallery-gallery3-'.$i.'"
                      data-slide-to="0"
                      data-toggle="modal"
                    >
                      <img
                        alt=""
                        src="'.$dir.$subfolder[2].'"
                      />

                      <span class="icon-focus"></span>
                      <span class="mbr-gallery-title"
                        >'.$folder.'</span
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
            id="lb-Gallery-gallery3-'.$i.'"
          >
            <div class="modal-dialog">
              <div class="moda l-content">
                <div class="modal-body">
                  <div class="carousel-inner">
                  ');
                  $j = 0;
                  foreach($subfolder as $myimg){
                      if($myimg[0] == "."){
                          continue;
                      }
                      $imgdir = $dir.$myimg;
                      if($j==0){
                        echo('<div class="carousel-item active">
                        <img alt="Helloji" src="'.$imgdir.'" />
                              </div>');
                        $j+=1;
                      }
                      else{
                      echo('<div class="carousel-item">
                      <img alt="Helloji" src="'.$imgdir.'" />
                            </div>'
                );
                $j+=1;}
            };
                echo('
                  </div>
                  <a
                    class="left carousel-control"
                    role="button"
                    data-slide="prev"
                    href="#lb-Gallery-gallery3-'.$i.'"
                  >
                    <span class="icon-prev" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a
                    class="right carousel-control"
                    role="button"
                    data-slide="next"
                    href="#lb-Gallery-gallery3-'.$i.'"
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
        </div>');
        $i = $i+1;
        };
    ?>
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
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
    <script src="./js/tether.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/script.min.js"></script>

    <script src="./mobirise-gallery/script.js"></script>

    <input name="animation" type="hidden" />
    <div id="scrollToTop" class="scrollToTop mbr-arrow-up">
      <a style="text-align: center;"><i class="mbr-arrow-up-icon"></i></a>
    </div>
  </body>
</html>