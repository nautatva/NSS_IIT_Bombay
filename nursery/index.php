<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Take away plants from Nursery!</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href=".../assets/portals/style.css" />
  </head>

  <body>
    <script src="../common/jquery.min.js"></script>
    <?php include("../common/navbar/navbar.php");?>
    <section class="portal">
      <div>
        <img class="mainImg" src="./main.jpg" />

        <div class="mainPortal">
          <div class="more">
            <p>
              Hi there!
            </p>
            <a href="../home/">Go to homepage</a>
          </div>

          <div>
            <form method="POST" onsubmit="return check()">
              <div>
                <span>Name</span>
                <input
                  style="border: 1px solid #888888"
                  type="text"
                  name="ldap"
                />
              </div>
              <div>
                <span>Contact Number</span>
                <input
                  style="border: 1px solid #888888"
                  type="text"
                  name="ldap"
                  placeholder="Preferably whatsapp"
                />
              </div>
              <div>
                <span>Email ID</span>
                <input
                  style="border: 1px solid #888888"
                  type="text"
                  name="ldap"
                />
              </div>
              <div>
                <span>Description</span>
                <textarea
                  maxlength="300"
                  style="height:70px;border: 1px solid #888888;"
                  name="query"
                  id="query"
                  placeholder="Any specifics interests?"
                ></textarea>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <?php include("../common/footer/footer.php");?>
    <?php
function test(){
include('../dbconfig.php');
$sql="SELECT * FROM QueryPortalNOCS WHERE mostcommonname='$page'" ;
$ldap = $_POST["ldap"];
$req = 'Nursery';
$qry = $_POST["query"];
$sql = "INSERT INTO `QueryPortalNOCS` (ID, `LDAPID`, `Request Type`, `Query`) 
        VALUES (NULL, '$ldap','$req', '$qry' )";

$res=$conn->query($sql); if ($res === TRUE) { echo "New request created
    successfully"; } else { echo "Error"; } $conn->close(); }
    if(array_key_exists('submit',$_POST)){ test(); } ?>
  </body>
  <script>
    includeNav();
    includeHTML();
  </script>
</html>
