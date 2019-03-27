<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
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
    <title>Memoirs NSS IIT Bombay</title>
    <style>
      body {
        margin: 2rem;
      }
      #info {
        margin: auto;
        text-align: center;
        max-width: 1024px;
      }
      .divider {
        margin: auto;
        text-align: center;
      }
      .reverse {
        -webkit-transform: scaleY(-1);
        transform: scaleY(-1);
      }
    </style>
    <script src="../common/jquery.min.js"></script>
  </head>
  <body>
    <?php include("../common/navbar/navbar.php"); ?>

    <link rel="stylesheet" href="./carousal.css" />
    <script src="./plugin.js"></script>
    <!-- javascript in plugin.js responsive slides -->
    <div class="divider" style="margin-top:3rem;">
      <img height="50px" src="./divider.png" />
    </div>
    <div id="info">
      <span style="font-family: 'Great Vibes', cursive; font-size:30px;"
        >Memoirs</span
      >
      <br />
      Not all emotions need numerous words to express themselves. Sentiments
      such as selflessness, gratitude, dedication can be conveyed using few
      words as well. We celebrate the spirit of NSS by bringing to you real life
      stories of people who have been associated with NSS, stories that have
      kept us going against all odds, stories that have become a part of us.
    </div>
    <div class="divider">
      <img class="reverse" height="50px" src="./divider.png" />
    </div>

    <section class="responsive-slider">
      <ul class="rslides" id="slider">
        <li>
          <img src="./memoirs/Memoir (1).png" />
        </li>
        <li>
          <img src="./memoirs/Memoir (2).png" />
        </li>
        <li>
          <img src="./memoirs/Memoir (3).png" />
        </li>

        <!-- <?php
  for ($i=1; $i <= 30; $i++) { 
    echo
    (
      ' -->

        <li>
          <img src="./memoirs/Memoir ('.$i.').jpg" />
        </li>

        <!-- ' ); } ?> -->
      </ul>
    </section>

    <?php include("../common/footer/footer.php");?>
  </body>
  <link
    href="https://fonts.googleapis.com/css?family=Great+Vibes"
    rel="stylesheet"
    defer
  />
  <script>
    $(function() {
      $('#slider').responsiveSlides({
        auto: false,
        pager: false,
        nav: true,
        speed: 500,
        namespace: 'slider-callback'
      });
    });
  </script>
  <script>
    includeNav();
    includeHTML();
  </script>
</html>
