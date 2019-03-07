<?php
$host ="10.105.177.5";
$username = "nss";
$password = "nssiitb@2015";
$db = "nss";
$conn = mysqli_connect($host, $username, $password, $db)  or die("Couldn't connect to Server");

$depts=$conn->query("SELECT distinct dept FROM Coreteam1819 ") ; $mydepts = [];
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Team 2018-19</title>
    <!-- <link href="./main.css" rel="stylesheet" /> -->
    <link rel="stylesheet" href="./fontello/icon.css" />
  </head>

  <body>
  <?php include("../common/navbar/navbar.php");?>
    <link rel="stylesheet" href="./css/team.css" />
    <h1 class="title">
      NSS Core-Team 2018-19
    </h1>
    <?php
    foreach ($mydepts as $q) {
      $code = $q['deptcode'];
      $sql1 = $conn->query("SELECT * FROM Coreteam1819 WHERE dept='$code' ORDER
    BY Name "); echo('
    <h1 class="dtitle hideme">'.$q['deptname'].'</h1>
    <div class="card hideme">
      '); while($details = $sql1->fetch_assoc()){ echo('
      <div class="member">
        <div class="team-member">
          <img src="'.$details['photo'].'" alt="'.$details['name'].'" />
          <div class="team-hover">
            <div class="desk">
              <h4>Hi There !</h4>
              <p>"'.$details['intro'].'"</p>
            </div>
            <div class="s-link">
              <i class="icon " aria-hidden="true">&#xf09a;</i>
              <i class="icon " aria-hidden="true">&#xe801;</i>
              <i class="icon " aria-hidden="true">&#xe800;</i>
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
  <script>includeHTML()</script>
</html>
