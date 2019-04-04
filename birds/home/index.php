<!DOCTYPE html>
<html lang="en" xml:lang="en" xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Birds of IIT-Bombay</title>
    <meta
      name="description"
      content="Birds of IIT-Bombay is a initiative by students of IIT Bombay under intiatives of NSS. Here is the database of the trees which can be found in IIT Bombay."
    />
    <meta name="application-name" content="Birds of IIT-Bombay" />
    <!-- Required bootstrap -->
    <link
      rel="stylesheet"
      type="text/css"
      media="screen"
      href="../../birds/custom/css/bootstrap.min.css"
    />
    <link rel="stylesheet" type="text/css" media="screen" href="./custom/custom.css"/>

    <!-- Favicon -->
    <link rel="icon" href="./img/favicon.png" sizes="160x160" type="image/png"/>

    <!-- Meta data -->
    <!-- For Facebook -->
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Home &middot; Birds of IIT-Bombay" />
    <meta
      property="og:image"
      content="./Main.jpg"
    />
    <meta property="og:image:width" content="800" />
    <meta property="og:image:height" content="450" />
    <meta
      name="og:description"
      content="Birds of IIT-Bombay is a initiative by students of IIT Bombay under intiatives of NSS. Here is the database of the trees which can be found in IIT Bombay."
    />
    <!--
      <meta property="og:url" content="https://gymkhana.iitb.ac.in/~nss/greenopedia/home/" />
    -->
    <meta property="og:site_name" content="Birds of IIT-Bombay" />
  </head>

  <body>
  <?php include_once('./navbar.php'); ?>
  <!-- <div w3-include-nav="../../birds/common/navbar/navbar.html"></div> -->
    <div class="clearfix"></div>
    <div style="background-color: #D9D6BA;">
      <picture class="col-sm-6">
        <source style=" max-width:100%;" type="image/webp" srcset="./img/Main.jpg" />
        <img id="descriptionImageIndex" style="width: 100%;" src="./img/Main.jpg" alt="Institute campus"/>
      </picture>

      <div class="col-sm-4" id="descriptionIndex">
        <p class="head3">Birds of IIT-Bombay</p>
        <p class="bodytext">
          'Birds of IIT-Bombay' is an initiative by Green Campus department of NSS IIT
          Bombay. It is an effort to know and appreciate the rich floral
          biodiversity present inside IIT Bombay campus, covering more than 80
          plant species. Delve in to know about some amazing facts about these
          plants, followed by short information about different parts of plants!
        </p>
      </div>
      <div class="clearfix"></div>
    </div>
    
    <div>
      <?php include_once('listBirds.php');?>
    </div>
    <div stlye="padding=5px; background:lightgrey">
      <u
        class="head3"
        style="text-decoration: underline; font-size:20px; padding-bottom:10px;"
        >About Green Campus:</u
      >
      <p class="bodytext">
        Green Campus handles the genre of preserving and rejuvenating flora and
        fauna. We feel the ecstasy of being in close relation with nature.
      </p>
    </div>
    <?php include_once('./footer.php'); ?>
  </body>

  <script
    src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"
  ></script>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script src="../../birds/custom/js/bootstrap.min.js"></script>
  <script
    async
    src="https://www.googletagmanager.com/gtag/js?id=UA-105828259-2"
  ></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-105828259-2');
  </script>

<!-- <script src="../../birds/common/common.js"></script>
  <script>
    includeNav();
    includeHTML();
  </script> -->
</html>
