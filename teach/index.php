<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Let's teach!</title>
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
    <link rel="stylesheet" href="../assets/portals/style.css" />
    <script src="../common/jquery.min.js"></script>
  </head>

  <body>
    <?php include("../common/navbar/navbar.php");?>
    <section class="portal">
      <div>
        <img class="mainImg" src="./main.jpg" />
        <div class="mainPortal">
          <div class="more">
            <p>
            
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
                  name="name"
                  placeholder="Name"
                />
              </div>
              <div>
                <span>Contact Number</span>
                <input
                  style="border: 1px solid #888888"
                  type="text"
                  name="contact"
                  placeholder="Preferably whatsapp"
                />
              </div>
              <div>
                <span>Email ID</span>
                <input
                  style="border: 1px solid #888888"
                  type="text"
                  name="email"
                  placeholder="Email"
                />
              </div>
              <div>
                <span>Description</span>
                <textarea
                  maxlength="300"
                  style="height:70px;border: 1px solid #888888;"
                  name="description"
                  id="query"
                  placeholder="Any specifics interests?"
                ></textarea>
              </div>
              <input type="submit" name="submit" value="Submit" />
            </form>
          </div>
        </div>
      </div>
    </section>
    <?php include("../common/footer/footer.php");?>

    <?php
function test(){
include('../../dbconfig.php');
$name = $_POST["name"];
$contact = $_POST["contact"];
$email = $_POST["email"];
$description= $_POST["description"];
$sql = "INSERT INTO `teach` (`Name`, `ContactNo`, `email`,`description`) 
        VALUES ('$name','$contact', '$email', '$description' )";


$res=$conn->query($sql);

if ($res === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error";
}

$conn->close();


}
if(array_key_exists('submit',$_POST)){
    test();
}
?>

?>
  </body>
  <script>
    includeNav();
    includeHTML();
  </script>
</html>
