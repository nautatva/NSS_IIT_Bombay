<?php
include("../dbconfig.php");
$year = '1819';

$depts=$conn->query("SELECT distinct dept FROM Coreteam ") ; $mydepts = [];
$t=0; while($mydept = $depts->fetch_assoc()){ switch ($mydept['dept']) { case
'OC': $name = 'Overall Coordinators'; break; case 'EO': $name = 'Educational
Outreach'; break; case 'SSD': $name = 'Sustainable Social Development'; break;
case 'GC': $name = 'Green Campus'; break; case 'NIC': $name = 'National
Innovation Cell'; break; case 'Media': $name = 'Media & Design'; break; default:
$name = 'Web & Finance'; break; } $y = array('deptcode' => $mydept['dept'],
'deptname' => $name ); array_push($mydepts, $y); } ?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="UTF-8" />
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Team 2018-19 NSS IIT Bombay</title>
    <!-- <link href="./main.css" rel="stylesheet" /> -->
    <link rel="stylesheet" href="./fontello/icon.css" />

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
    <script src="../common/jquery.min.js"></script>
  </head>

  <body style="background-image: url('./bg.jpg');">
    <?php include("../common/navbar/navbar.php");?>
    <link rel="stylesheet" href="./css/team.css" />
    <h1 class="title">
      NSS Core-Team 2018-19
    </h1>
    <?php
    foreach ($mydepts as $q) {
      $code = $q['deptcode'];
      $sql1 = $conn->query("SELECT * FROM Coreteam WHERE (dept='$code' AND year
    = '$year') ORDER BY Name "); echo('
    <h1 class="dtitle hideme">'.$q['deptname'].'</h1>
    <div class="card hideme">
      '); while($details = $sql1->fetch_assoc()){ echo('
      <div class="member">
        <div class="team-member">
          <img src="'.$details['photo'].'" alt="'.$details['name'].'" />
          <div class="team-hover">
            <div class="desk">
              <p>"'.$details['intro'].'"</p>
            </div>
            <div class="s-link">
              <a href="'.$details['fb'].'">
                <i class="icon" aria-hidden="true">&#xf09a;</i>
              </a>
              <a href="tel:'.$details['contact'].'">
                <i class="icon" aria-hidden="true">&#xe801;</i>
              </a>
              <a href="mailto:'.$details['email'].'">
                <i class="icon" aria-hidden="true">&#xe800;</i>
              </a>
            </div>
          </div>
        </div>

        <div class="team-title">
          <h5>'.$details['name'].'</h5>
        </div>
      </div>
      '); } echo('
    </div>
    '); } ?>

    <?php include("../common/footer/footer.php");?>
  </body>
  <script>
    includeNav();
    includeHTML();
  </script>
</html>
