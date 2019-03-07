<!DOCTYPE html>
<html lang="en">
  <head>
   
    <title>Let's teach!</title>
    <style type="text/css">
      body {
        font-family: 'Open Sans', sans-serif;
        background-color: #f3f3f5;
      }
      .portal {
        width: 90%;
        max-width: 1024px;
        position: relative;
        margin: 4em auto;
        box-shadow: none;
      }
      .portal div {
        width: 95%;
        margin: auto;
      }
      .head {
        font-size: 32px;
        text-transform: uppercase;
        font-weight: 700;
        color: #bbbbc7;
        margin: 0;
        padding: 0;
        border: 0;
        vertical-align: baseline;
        margin-bottom: 1em;
      }
      .more {
        display: flex;
        justify-content: space-between;
      }
      .more p {
        color: #a9c056;
        font-size: 24px;
        font-size: 1.5rem;
        font-weight: 300;
        margin: 0;
      }
      .more a {
        color: #561b8c;
      }
      .mainPortal {
        background: #ffffff;
        margin-bottom: 6px;
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.08);
        -webkit-transition: box-shadow 0.2s;
        -moz-transition: box-shadow 0.2s;
        padding: 24px;
      }
      form {
        font-size: 20px;
        color: #0088cc;
        margin-left: 24px;
        margin-top: 24px;
      }
      .mainImg {
        width: 100%;
        /* max-height: 300px; */
        object-fit: cover;
        object-position: center;
      }
    </style>
  </head>

  <body>
    <?php include("../common/navbar/navbar.php");?>
    <section class="portal">
      <div>
        <img class="mainImg" src="./main.png" />
        <div class="mainPortal">
          <div class="more">
            <p>
              Hi there!
            </p>
            <a href="../home/">Go to homepage</a>
          </div>

          <div>
            <form method="POST" onsubmit="return check()">
              <table>
                <tr>
                  <td>
                    Name
                  </td>
                  <td>
                    <input
                      style="border: 1px solid #888888"
                      type="text"
                      name="ldap"
                    />
                  </td>
                </tr>
                <tr>
                  <td style="padding-right: 20px;">
                    Details
                  </td>
                  <td>
                    <textarea
                      maxlength="300"
                      style="resize:none;width:600px;height:70px;border: 1px solid #888888;"
                      name="query"
                      id="query"
                      placeholder="Your contact details? Any specifics we must know?"
                    ></textarea>
                  </td>
                </tr>
                <tr>
                  <td></td>
                  <td>
                    <input
                      type="submit"
                      style="margin-left:200px;border: 1px solid #888888;"
                      name="submit"
                      value="Submit"
                    />
                  </td>
                </tr>
              </table>
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
$req = 'Teach';
$qry = $_POST["query"];
$sql = "INSERT INTO `QueryPortalNOCS` (ID, `LDAPID`, `Request Type`, `Query`) 
        VALUES (NULL, '$ldap','$req', '$qry' )";

$res=$conn->query($sql); if ($res === TRUE) { echo "New request created
    successfully"; } else { echo "Error"; } $conn->close(); }
    if(array_key_exists('submit',$_POST)){ test(); } ?>
  </body>
  <script>includeHTML()</script>
</html>
