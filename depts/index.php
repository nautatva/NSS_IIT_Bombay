<?php
include("../../dbconfig.php");
$dept = strtoupper($_GET['dept']);
$year = '1819';
if ($dept=='EO') {
    $name = "Educational Outreach";
    $tabname = $name;
}
else if($dept=='GC'){
    $name = "Green Campus";
    $tabname = $name;
}
else if($dept=='SSD'){
  $dept = 'SSD';
  $name = "Sustainable Social Development";
  $tabname = $name;
}
else if($dept=='MEDIA'){
  $dept = 'Media';
  $name = "Media and Design";
  $tabname = $name;
}
else if($dept=='WEB'){
  $dept = 'Web';
  $name = "";
  $tabname = "Web";
}
else {
  http_response_code(404);
  include 'error/404.php';
  exit;
}

$sql="SELECT * FROM department_data WHERE department = '$dept' ORDER BY orderOnPage " ;
$sql1="SELECT * FROM department_basics WHERE department = '$dept'" ;
$sql2="SELECT * FROM Coreteam WHERE dept = '$dept' AND year = '$year' ORDER BY name" ;
$sql3="SELECT * FROM AAs WHERE dept = '$dept' AND year = '$year' ORDER BY name" ;
$result = $conn->query($sql); $basic = $conn->query($sql1); $heads =
$conn->query($sql2); $AAs = $conn->query($sql3); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link
      rel="icon"
      type="image/png"
      sizes="192x192"
      href="../assets/NSS/logo192.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="128x128"
      href="../assets/NSS/logo128.png"
    />
    <link
      rel="apple-touch-icon"
      sizes="128x128"
      href="../assets/NSS/logo128.png"
    />
    <link
      rel="apple-touch-icon"
      sizes="192x192"
      href="../assets/NSS/logo192.png"
    />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <meta name="description" content="" />
    <meta name="author" content="" />

    <title><?php echo $tabname ?> - NSS, IIT Bombay</title>

    <meta name="theme-color" content="">

    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Montserrat"
      defer=""
    />

    <!-- Bootstrap Core CSS -->
    <link
      href="./statics/vendor/bootstrap/css/bootstrap.min.css"
      rel="stylesheet"
    />

    <!-- Custom Fonts -->
    <link
      href="./statics/vendor/font-awesome/css/font-awesome.min.css"
      rel="stylesheet"
      type="text/css"
    />

    <!-- Theme CSS -->
    <link href="./statics/css/theme.css" rel="stylesheet" />
    <link href="./statics/css/<?php echo $dept ?>.css" rel="stylesheet" />

    <!-- custom CSS -->
    <link href="./statics/css/custom.css" rel="stylesheet" />

    <!-- Colors -->
  </head>

  <body id="page-top" class="index">
    <!-- Navigation -->
    <nav
      id="mainNav"
      class="navbar navbar-default navbar-custom navbar-fixed-top"
    >
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
          <button
            type="button"
            class="navbar-toggle"
            data-toggle="collapse"
            data-target="#bs-example-navbar-collapse-1"
          >
            <span class="sr-only">Toggle navigation</span> Menu
            <i class="fa fa-bars"></i>
          </button>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right nav-distribute">
            <li class="hidden"><a href="#page-top"></a></li>
            <li class="page-scroll">
              <a href="https://gymkhana.iitb.ac.in/~nss/home/">Home</a>
            </li>
            <li>
              <a class="page-scroll" type="button" data-toggle="dropdown"
                >departments <span class="caret"></span
              ></a>
              <ul class="dropdown-menu">
                <li>
                  <a
                    class="EO-nav"
                    href="https://gymkhana.iitb.ac.in/~nss/depts/EO/"
                    >Educational Outreach</a
                  >
                </li>
                <li>
                  <a
                    class="GC-nav"
                    href="https://gymkhana.iitb.ac.in/~nss/depts/GC/"
                    >Green Campus</a
                  >
                </li>
                <li>
                  <a
                    class="SSD-nav"
                    href="https://gymkhana.iitb.ac.in/~nss/depts/SSD/"
                    >Sustainable Social Development</a
                  >
                </li>
                <li>
                  <a
                    class="Media-nav"
                    href="https://gymkhana.iitb.ac.in/~nss/depts/Media/"
                    >Media and Design</a
                  >
                </li>
                <li>
                  <a
                    class="Web-nav"
                    href="https://gymkhana.iitb.ac.in/~nss/depts/Web/"
                    >Web</a
                  >
                </li>
              </ul>
            </li>

            <li>
              <a class="page-scroll" type="button" data-toggle="dropdown"
                >Blogs and portals <span class="caret"></span
              ></a>
              <ul class="dropdown-menu">
                <li>
                  <a
                    href="https://nssiitbblog.wordpress.com/category/green-campus/prakriti/"
                    >Prakriti</a
                  >
                </li>
                <li>
                  <a
                    href="https://nssiitbblog.wordpress.com/category/parivartan/"
                    >Parivartan</a
                  >
                </li>
                <li>
                  <a
                    href="https://nssiitbblog.wordpress.com/category/jigyasa-a-quest-to-learn/"
                    >Jigyasa</a
                  >
                </li>
                <li>
                  <a
                    href="https://www.youtube.com/playlist?list=PL7jZaz9RpobeLA6ZE5e-Is4HoLkADcdbj"
                    >Greenopedia</a
                  >
                </li>
                <li>
                  <a
                    href="https://www.youtube.com/channel/UCiRgHJGPSMsMI3hcQKrm4yA"
                    >Open Learning Initiative - OLI</a
                  >
                </li>
                <li>
                  <a
                    href="https://www.youtube.com/channel/UCskd3K0NyyHqZ1t7AMAYACQ"
                    >Tarang</a
                  >
                </li>
                <li>
                  <a
                    href="https://www.youtube.com/channel/UC2iPnxGyKViqjV37f3r6uJw"
                    >Voice For Purpose - VFP</a
                  >
                </li>
                <li>
                  <a href="https://gymkhana.iitb.ac.in/~nss/greenopedia/home/"
                    >Greenopedia</a
                  >
                </li>
                <li>
                  <a href="https://gymkhana.iitb.ac.in/~nss/olidwd/"
                    >OLI Video Downloader</a
                  >
                </li>
                <li>
                  <a href="https://gymkhana.iitb.ac.in/~nss/nocs"
                    >NOCS portal</a
                  >
                </li>
                <li>
                  <a href="https://gymkhana.iitb.ac.in/~nss/teach/"
                    >Let's Teach!</a
                  >
                </li>
                <li>
                  <a href="https://gymkhana.iitb.ac.in/~nss/donation/"
                    >Make a Donation</a
                  >
                </li>
                <li>
                  <a href="https://gymkhana.iitb.ac.in/~nss/nursery/">
                    Nursery For All</a
                  >
                </li>
                <li>
                  <a href="https://gymkhana.iitb.ac.in/~nss/artimp/"
                    >The Artistic Impact</a
                  >
                </li>
              </ul>
            </li>

            <li>
              <a class="page-scroll" type="button" data-toggle="dropdown"
                >About us <span class="caret"></span
              ></a>
              <ul class="dropdown-menu">
                <li>
                  <a href="https://gymkhana.iitb.ac.in/~nss/team/"
                    >Current Team</a
                  >
                </li>
                <li>
                  <a href="https://gymkhana.iitb.ac.in/~nss/history/"
                    >History of NSS IITB</a
                  >
                </li>
                <li>
                  <a href="https://gymkhana.iitb.ac.in/~nss/news"
                    >Media Coverage</a
                  >
                </li>
                <li>
                  <a href="https://gymkhana.iitb.ac.in/~nss/SoC/"
                    >Stories of Change</a
                  >
                </li>
                <li>
                  <a href="https://gymkhana.iitb.ac.in/~nss/experiences/"
                    >My NSS Experiences</a
                  >
                </li>
                <!-- <li>
                    <a href="#">Words from OC</a>
                  </li> -->
                <li>
                  <a href="https://gymkhana.iitb.ac.in/~nss/gallery/"
                    >Gallery</a
                  >
                </li>
                <li>
                  <a href="https://gymkhana.iitb.ac.in/~nss/ContactUs/">
                    Contact Us
                  </a>
                </li>
              </ul>
            </li>

            <li>
              <a class="page-scroll" type="button" data-toggle="dropdown"
                >More <span class="caret"></span
              ></a>
              <ul class="dropdown-menu">
                <!-- Impacting lives -->
                <li>
                  <a href="https://gymkhana.iitb.ac.in/~nss/memoirs"
                    >Memoirs</a
                  >
                </li>
                <li>
                  <a href="https://gymkhana.iitb.ac.in/~nss/reports/17_18/"
                    >Annual Report 2017-18</a
                  >
                </li>
                <li>
                  <a
                    href="https://gymkhana.iitb.ac.in/~nss/assets/annual_report/AR1617.pdf" target="_blank"
                    >Annual Report 2016-17</a
                  >
                </li>
                <li>
                  <a
                    href="https://gymkhana.iitb.ac.in/~nss/assets/annual_report/AR1516.pdf" target="_blank"
                    >Annual Report 2015-16</a
                  >
                </li>
                <li>
                  <a
                    href="https://gymkhana.iitb.ac.in/~nss/assets/annual_report/AR1415.pdf" target="_blank"
                    >Annual Report 2014-15</a
                  >
                </li>
                <li>
                  <a
                    href="https://gymkhana.iitb.ac.in/~nss/assets/annual_report/AR1314.pdf" target="_blank"
                    >Annual Report 2013-14</a
                  >
                </li>
                <li>
                  <a
                    href="https://gymkhana.iitb.ac.in/~nss/assets/annual_report/AR1213.pdf" target="_blank"
                    >Annual Report 2012-13</a
                  >
                </li>
                <li>
                  <a href="https://gymkhana.iitb.ac.in/~nss/IH">
                    Invisible Humans of IIT Bombay
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <?php
    
                    $department = mysqli_fetch_assoc( $basic );
                    echo('

    <header id="welcome" class="scrollify full"
      style="background-image:url('.$department['main_image'].')">');

      echo('
      <div class="container">
        <div class="intro-text">
          <div class="intro-lead-in">' . $department['name'] . '</div>
          <div class="intro-heading">
            <div id="typed-strings">
              <span>' . $department['one_liner'] . '</span>
            </div>
            <span id="typed"></span>
          </div>
        </div>

        <h4 class="section-subheading department-description restrict600">
          ' . $department['description'] . '
        </h4>

        <div>
          <div class="space-between restrict600">
            <a href="#initiatives" class="page-scroll btn btn-xl"
              >Initiatives</a
            >
            <a href="#team" class="page-scroll btn btn-xl">Team</a>
          </div>
        </div>
      </div>
    </header>
    '); ?>

    <section id="initiatives" class="scrollify">
      <div id="portfolio" class="bg-light-gray">
        <h1>Initiatives</h1>
        <div class="container">
          <div class="flex-wrap-center">
            <!-- portfolio item is to be repeated -->
            <?php
                    $a = "";
                    $i=0;
                        while( $row = mysqli_fetch_assoc( $result ) ){
                          if ($row['orderOnPage']!=0) {
                            $i = $i+1;
                            echo('
            <div class="portfolio-item">
              <a
                href="#portfolioModal'.$i.'"
                class="portfolio-link"
                data-toggle="modal"
              >
                <div class="portfolio-hover">
                  <div class="portfolio-hover-content">
                    <i class="fa fa-plus fa-3x"></i>
                  </div>
                </div>
                <img
                  src="' . $row['thumbnail']. '"
                  class="img-responsive"
                  alt=""
                />
                <div class="portfolio-caption">
                  <h4>' . $row['initiative'] . '</h4>
                  <p class="text-muted">' . $row['des_short'] . '</p>
                </div>
              </a>
            </div>
            '); $a=$a.'
            <div
              class="portfolio-modal modal fade"
              id="portfolioModal'.$i.'"
              tabindex="-1"
              role="dialog"
              aria-hidden="true"
            >
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="close-modal" data-dismiss="modal">
                    <div class="lr"><div class="rl"></div></div>
                  </div>
                  <div class="container">
                    <div class="row">
                      <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                          <!-- Project Details Go Here -->
                          <h2>' . $row['initiative'] . '</h2>
                          <!-- <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p> -->

                          '.($row['initiative']!="Video Making"?"<img":"<video width='80%' autoplay='autoplay' controls='controls'><source type='video/mp4'").'
                         class="img-responsive img-centered" src='.
                        ($row['gif'] ? $row['gif'] : $row['thumbnail']) .' alt="">
                        
                       '. ($row['initiative']!="Video Making"?"":"</source></video>").'

                          <p>' . $row['des_long'] . '</p>
                          <button
                            type="button"
                            class="btn btn-primary"
                            data-dismiss="modal"
                          >
                            <i class="fa fa-times"></i> Close
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            '; }} ?>
            <!-- portfolio item closed -->
          </div>
        </div>
      </div>
    </section>

    <section id="team" class="scrollify">
      <div
        class="mbr-section article mbr-section__container"
        id="EO-content6-1"
        style="background-color: rgb(255, 255, 255); padding-top: 20px; padding-bottom: 20px;"
      >

        <div class="text-center">
          <h2 class="section-heading">Meet our team</h2>
        </div>
        <div class="team">
          <div class="lead">
            <h4>Department Heads</h4>
            <table>
              <?php
                    $head = mysqli_fetch_assoc( $heads );
                    while ($head) {
                      $name=$head['name'];
        $contact=$head['contact'];
                      echo('
              <tr>
                <td>
                  <ul
                    style="
                  padding: 0;
              "
                  >
                    <li class="name">'.$name.'</li>
                  </ul>
                </td>
                <td>
                  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;
                  &nbsp; &nbsp; &nbsp;
                </td>
                <td class="contact">
                  <a href="tel: +91-$contact">'.$contact.'</a>
                </td>
              </tr>
              '); $head = mysqli_fetch_assoc( $heads ); }
              ?>
            </table>
          </div>

          <div class="lead">
            <h4>Activity Associates</h4>
            <table>
              <?php
                        $aa = mysqli_fetch_assoc( $AAs );
                        while ($aa) {
        $name=$aa['name'];
        $contact=$aa['contact'];
        echo
        ('
              <tr>
                <td>
                  <ul
                    style="
                  padding: 0;
              "
                  >
                    <li class="name">'.$name.'</li>
                  </ul>
                </td>
                <td>
                  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;
                  &nbsp; &nbsp; &nbsp;
                </td>
                <td class="contact">
                  <a href="tel: +91-$contact">'.$contact.'</a>
                </td>
              </tr>
              ' ); $aa = mysqli_fetch_assoc( $AAs ); }

              ?>
            </table>
          </div>
        </div>

        <?php
          if ($dept=='SSD' && $year == '1819') {
            echo('
        <div class="team">
          <div class="lead">
            <h4>NIC Head</h4>
            <table>
              ');

              // NIC 
              $sql2="SELECT * FROM Coreteam WHERE dept = 'NIC' AND year = '$year' ORDER BY name" ;
              $heads = $conn->query($sql2); 
              $head = mysqli_fetch_assoc( $heads ); while ($head) { $name=$head['name'];
              $contact=$head['contact']; echo('
              <tr>
                <td>
                  <ul
                    style="
          padding: 0;
      "
                  >
                    <li class="name">'.$name.'</li>
                  </ul>
                </td>
                <td>
                  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;
                  &nbsp; &nbsp; &nbsp;
                </td>
                <td class="contact">
                  <a href="tel: +91-$contact">'.$contact.'</a>
                </td>
              </tr>
              '); $head = mysqli_fetch_assoc( $heads ); } echo('
            </table>
          </div>
          '); echo('
          <div class="lead">
            <h4>Activity Associates - NIC</h4>
            <table>
              '); $sql3="SELECT * FROM AAs WHERE dept = 'NIC' AND year = '$year'
              ORDER BY name" ; $AAs = $conn->query($sql3); $aa =
              mysqli_fetch_assoc( $AAs ); while ($aa) { $name=$aa['name'];
              $contact=$aa['contact']; echo ( '
              <tr>
                <td>
                  <ul
                    style="
            padding: 0;
        "
                  >
                    <li class="name">'.$name.'</li>
                  </ul>
                </td>
                <td>
                  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;
                  &nbsp; &nbsp; &nbsp;
                </td>
                <td class="contact">
                  <a href="tel: +91-$contact">'.$contact.'</a>
                </td>
              </tr>
              ' ); $aa = mysqli_fetch_assoc( $AAs ); } echo('
            </table>
          </div>
          '); }

          ?>
        </div>
      </div>
    </section>

    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <span class="copyright"
              >Copyright &copy; NSS, IIT Bombay, 2019</span
            >
          </div>
          <div class="col-md-4"></div>
          <div class="col-md-4">
            <ul class="list-inline social-buttons">
              <li>
                <a href="https://twitter.com/nss_iitb?lang=en"
                  ><i class="fa fa-twitter"></i
                ></a>
              </li>
              <li>
                <a href="https://www.facebook.com/pg/nssiitbombay/"
                  ><i class="fa fa-facebook"></i
                ></a>
              </li>
              <li>
                <a href="https://www.instagram.com/nssiitb/"
                  ><i class="fa fa-instagram"></i
                ></a>
              </li>
              <li>
                <a href="https://nssiitbblog.wordpress.com/"
                  ><i class="fa fa-wordpress"></i
                ></a>
              </li>
              <li>
                <a
                  href="https://www.youtube.com/channel/UCPtcaL4JLfIq2fUGORmn6Yg"
                  ><i class="fa fa-youtube"></i
                ></a>
              </li>
              <!-- <li>
                <a href="#"><i class="fa fa-github"></i></a>
              </li> -->
            </ul>
          </div>
        </div>
      </div>
    </footer>

    <!-- Portfolio Modals -->
    <!-- Use the modals below to showcase details about your portfolio projects! -->
    <?php echo($a) ?>
  </body>

  <!-- jQuery -->
  <script src="../common/jquery.min.js"></script>

  <!-- Custom Javascript -->
  <script src="./statics/js/custom.js"></script>

  <!-- Plugins == (Easing.js, Bootstrap.min.js, Theme javascript, typed.min.js, Scrollify) -->
  <script src="./statics/js/plugins.js"></script>

  <!-- javascript for slideshow -->
  <script src="./statics/js/slideshow.js"></script>

  <script>
    // scrollify config
    // $(function() {
    //   $.scrollify({
    //     section: '.scrollify',
    //     setHeights: false
    //   });
    // });
    // Typed JS config
    document.addEventListener('DOMContentLoaded', function() {
      var typed = new Typed('#typed', {
        stringsElement: '#typed-strings',
        typeSpeed: 90,
        backSpeed: 500,
        backDelay: 500,
        startDelay: 1000,
        loop: false,
        contentType: 'text', // or text
        loopCount: null,
        callback: function() {
          foo();
        },
        resetCallback: function() {
          newTyped();
        }
      });
    });
  </script>
  <script>
    $(document).ready(function() {
      $('.dropdown-submenu a.test').on('click', function(e) {
        $(this)
          .next('ul')
          .toggle();
        e.stopPropagation();
        e.preventDefault();
      });
    });
  </script>
  <link
    href="https://fonts.googleapis.com/css?family=Great+Vibes"
    rel="stylesheet"
  />
</html>
