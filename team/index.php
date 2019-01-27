<?php
$host ="10.105.177.5";
$username = "nss";
$password = "nssiitb@2015";
$db = "nss";
$conn = mysqli_connect($host, $username, $password, $db)  or die("Couldn't connect to Server");

$depts=$conn->query("SELECT distinct dept FROM Coreteam1819 ") ;
$mydepts = [];
$t=0;
while($mydept = $depts->fetch_assoc()){
  switch ($mydept['dept']) {
    case 'OC':
      $name = 'Overall Coordinators';
      break;
    case 'EO':
      $name = 'Educational Outreach';
      break;
    case 'SSD':
      $name = 'Sustainable Social Development';
      break;
    case 'GC':
      $name = 'Green Campus';
      break;
    case 'NIC':
      $name = 'National Innovation Cell';
      break;
    case 'Media':
      $name = 'Media & Design';
      break;        
    default:
      $name = 'Web & Finance';
      break;
  }
  $y = array('deptcode' => $mydept['dept'],
             'deptname' => $name 
);
  array_push($mydepts, $y);
}



?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Document</title>
    <!-- <link href="./main.css" rel="stylesheet" /> -->
    <link rel="stylesheet" href="./fontello/icon.css" />
  </head>

  <body>
    <link rel="stylesheet" href="./css/ssd.css" />
    <h1 class="title" >
      NSS Core-Team 2018-19</h1>
    <?php
    foreach ($mydepts as $q) {
      $code = $q['deptcode'];
      $sql1 = $conn->query("SELECT * FROM Coreteam1819 WHERE dept='$code' ORDER BY Name ");
      echo('
      <h1 class="dtitle">'.$q['deptname'].'</h1>
      <div id="ssd">
      ');
      while($details = $sql1->fetch_assoc()){
        echo('
        <div class="member">
        <div class="team-member">
          <img
            src="'.$details['photo'].'"
            alt="'.$details['Name'].'"
          />
          <div class="team-hover">
            <div class="desk">
              <h4>Hi There !</h4>
              <p>introduce yourself</p>
            </div>
            <div class="s-link">
              <i class="icon " aria-hidden="true">&#xf09a;</i>
              <i class="icon " aria-hidden="true">&#xe801;</i>
              <i class="icon " aria-hidden="true">&#xe800;</i>
            </div>
          </div>
        </div>

        <div class="team-title">
          <h5>'.$details['Name'].'</h5>
        </div>
      </div>
        ');
      }
      echo('</div>');
    }
    ?>
    <div id="ssd">
      <!-- member 1 -->
      <div class="member">
        <div class="team-member">
          <img
            src="https://image.freepik.com/free-photo/man-standing-with-a-black-t-shirt_1187-1045.jpg"
            alt="Yash Rajan"
          />
          <div class="team-hover">
            <div class="desk">
              <h4>Hi There !</h4>
              <p>introduce yourself</p>
            </div>
            <div class="s-link">
              <i class="icon " aria-hidden="true">&#xf09a;</i>
              <i class="icon " aria-hidden="true">&#xe801;</i>
              <i class="icon " aria-hidden="true">&#xe800;</i>
            </div>
          </div>
        </div>

        <div class="team-title">
          <h5>Anshul Verma</h5>
          <span>Department Head - SSD</span>
        </div>
      </div>
    </div>




<!--FOOTER -->
    
    <link rel="stylesheet" href="./css/footer.css" />
    <footer id="footer">
      <p class="footer-links">
        <a href="#">Home</a> · <a href="#">Blog</a> · <a href="#">Pricing</a> ·
        <a href="#">About</a> · <a href="#">Faq</a> · <a href="#">Contact</a>
      </p>
      <div id="footer-icons" class="wrapper">
        <ul>
          <li class="facebook">
            <i class="icon fb" aria-hidden="true">&#xf09a;</i>
            <div class="slider"><p>facebook</p></div>
          </li>

          <li class="twitter">
            <i class="icon tweet" aria-hidden="true">&#xf099;</i>
            <div class="slider"><p>twitter</p></div>
          </li>

          <li class="instagram">
            <i class="icon insta" aria-hidden="true">&#xf16d;</i>
            <div class="slider"><p>instagram</p></div>
          </li>

          <li class="google">
            <i class="icon youtubeee" aria-hidden="true">&#xf16a;</i>
            <div class="slider"><p>youtube</p></div>
          </li>

          <li class="whatsapp">
            <i class="icon wordpresssss" aria-hidden="true">&#xf19a;</i>
            <div class="slider"><p>wordpress</p></div>
          </li>
        </ul>
      </div>
    </footer>
  </body>
</html>
