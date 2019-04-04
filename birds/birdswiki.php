<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

        <link rel="apple-touch-icon" href="img/favicon.png">
        <!-- Place favicon.ico in the root directory -->
        <link rel="shortcut icon" href="./img/favicon.png" />
        <link rel="stylesheet" href="./css/birds.css">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="./css/scrollToTop.css">
        <link rel="stylesheet" href="./css/common/fontello/icon.css">

      <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">

        <!-- Bootstrap -->
  		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    
    <body style="background-image: url('https://gymkhana.iitb.ac.in/~nss/team/bg.jpg');">  

    <!-- Scroll to top -->
    <a class="scrollToTop Vinvert" href="#" title="Click for Top">
      <span><i class="icon icon-up-open-mini"><b> &#xe802; click here to go top</b></i></span>
    </a>

    <!-- navbar -->
    
    <div w3-include-nav="../../birds/common/navbar/navbar.html"></div>
    <!-- <link rel="import" href="common/navbar/navbar.html"> -->
    <!-- <link rel="import" href="common/footer/footer.html"> -->


<!-- PHP SQL -->
<?php

if (isset($_GET['page'])) {

$page=$_GET['page'];
include('dbconfig.php');
$SQL="SELECT * FROM birds_of_iitbombay WHERE commonname='$page'" ;
$result = $conn->query($SQL);

	// output data of each row
    while($row = $result->fetch_assoc()) 
    {
    $commonname=$row["commonname"];
    $scientificName=$row["Scientific Name"];
    $family=$row["Family"];
    $identification=$row["Identification"];
    $bioMetrices=$row["BioMetrices"];
    $redList=$row["IUCN Red List Status"];
    $populationTrend=$row["Current Population Trend"];
    $graphicDist=$row["Geographic Distribution"];
    $habitat=$row["Habitat"];
    $breeding=$row["Breeding"];
    $diet=$row["Diet"];
    $food=$row["Food"];
    $call=$row["Call (Identification of Voice)"];
    $lifeSpan=$row["Average Lifespan in Wild"];
  }
} else {
    echo "please try again";
}

$string = str_replace(' ', '', $page);
?>
    
<!-- Content -->
<section id="content">
      <!-- <div class="fullscreen-video-wrap">
            <video src="./assets/Birds Flying video background.mp4" autoplay="true" loop="true"></video>
        </div> -->
      <div class="birdName">
        <span style="font-size:4.5rem;"><?php echo $commonname; ?>
      </div>
      <div class="partOne-content">
        <div class="shortContentLayout">
          <div class="shortContentLayoutOne">
            <div class="shortContent">
              <div class="shortTitleContent">Common Name of The Bird</div>
              <div class="shortDetailsContent"><?php echo $commonname; ?>
                <!-- <span style="font-size:1.5rem;">p</span>urple rumped sunbird -->
              </div>
            </div>
            <div class="shortContent">
              <div class="shortTitleContent">Scientific Name</div>
              <div class="shortDetailsContent"><?php echo $scientificName; ?></div>
            </div>
            <div class="shortContent">
              <div class="shortTitleContent">Family</div>
              <div class="shortDetailsContent"><?php echo $family; ?></div>
            </div>
          </div>
          <div class="shortContentLayoutOne">
            <div class="birdImage">
              <img src="./assets/19549122498_1320c0dffd_k.jpg" id="img" />
            </div>
          </div>
          <div class="shortContentLayoutOne">
            <div class="shortContent">
              <div class="shortTitleContent">BioMetrics</div>
              <div class="shortDetailsContent"><?php echo $bioMetrices; ?></div>
            </div>
            <div class="shortContent">
              <div class="shortTitleContent">IUCN Red List Status</div>
              <div class="shortDetailsContent"><?php echo $redList; ?></div>
            </div>
            <div class="shortContent">
              <div class="shortTitleContent">Current Population Trend</div>
              <div class="shortDetailsContent"><?php echo $populationTrend; ?></div>
            </div>
          </div>
        </div>
        <div class="moderateContentMain">
        <div class="moderateContent">
          <div class="titleContent">Average Lifespan in Wild</div>
          <div class="detailsContent"><?php echo $lifeSpan; ?></div>
        </div>
        <div class="moderateContent">
          <div class="titleContent">Identification Sound</div>
          <div class="detailsContent">
            <audio controls style="margin-top: 1rem;">
              <source src="horse.ogg" type="audio/ogg">
              <source src="http://www.evilhat.com/fudge/robsounds/barkingdogs.mp3" preload="auto" controls='controls' type="audio/mpeg">Your browser does not support the audio element.
            </audio>
          </div>
        </div>
        <div class="moderateContent">
          <div class="titleContent">Diet</div>
          <div class="detailsContent"><?php echo $diet; ?></div>
        </div>
        </div>
      </div>

      <div class="partTwo-content">
        <div class="largeContentLayoutOne">
          <div class="largeContent">
            <div class="largeTitleContent">Food</div>
            <div class="largeDetailsContent"><?php echo $food; ?></div>
          </div>
          <div class="largeContent">
            <div class="largeTitleContent">Call [Identification of Voice]</div>
            <div class="largeDetailsContent"><?php echo $call; ?></div>
          </div>
        </div>
      </div>

      <div class="partTwo-content">
        <!-- <div>
                <div class="moderateContent">
                    <div class="moderateContentLayoutOne">
                        <div class="titleContent">Food</div>
                        <div class="detailsContent">purple rumped sunbirds have nectar as their main diet. Although they might feed on insects especially while feeding their young ones. Thus their diet may be called omnivorous even though it mainly contains plant nectar</div>
                    </div>
                    <div class="moderateContentLayoutTwo">
                        <div class="titleContent">Call<br> (Identification of Voice)</div>
                        <div class="detailsContent">Their calls consist of rapid rattles followed by ringing metallic notes [ptisee ptsit or sharp twittering like tityou, trrrtit]</div>
                    </div>
                </div>
            </div> -->
        <div class="largeContentLayoutOne">
          <div class="largeContent">
            <div class="largeTitleContent">Identification</div>
            <div class="largeDetailsContent"><?php echo $identification; ?></div>
          </div>
          <div class="largeContent">
            <div class="largeTitleContent">Geographic Distribution</div>
            <div class="largeDetailsContent"><?php echo $graphicDist; ?></div>
          </div>
        </div>
      </div>

      <div class="partTwo-content">
        <!-- <div>
                    <div class="moderateContent">
                        
                    </div>
                </div> -->
        <div class="largeContentLayoutOne">
          <div class="largeContent">
            <div class="largeTitleContent">Habitat</div>
            <div class="largeDetailsContent"><?php echo $habitat; ?></div>
          </div>
          <div class="largeContent">
            <div class="largeTitleContent">Breeding</div>
            <div class="largeDetailsContent"><?php echo $breeding; ?></div>
          </div>
        </div>
      </div>
    </section>
  
    <!-- footer -->
    <div w3-include-nav="../../birds/common/footer/footer.html"></div>

  <!-- <script src="homeNew/js/plugin.js"></script>
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
    includeHTML();
  </script>

  <script>
    var link = document.querySelector('link[rel="import"]');
    var content = link.import;
    var el = content.querySelector('#nav');
    document.body.appendChild(el.cloneNode(true));
    includeHTML();
  </script> -->
  <script>
    includeNav();
    includeHTML();
 </script>

  <script type="text/javascript" src="../../birds/common/common.js"></script>

<!-- W3-Include-html  JS Script code-->
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet"/>
        </section>
        <!-- font awesome -->
  		<!-- <link rel="stylesheet" href="css/customfa.css"> -->
  		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">

        
        <script src="js/vendor/modernizr-3.5.0.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.2.1.min.js"><\/script>')</script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>