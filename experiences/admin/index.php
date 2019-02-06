<?php
$host ="10.105.177.5";
$username = "nss";
$password = "nssiitb@2015";
$db = "nss";

$conn = mysqli_connect($host, $username, $password, $db)  or die("Couldn't connect to Server");
    $SQL="SELECT * FROM QueryPortalNOCS";
    $result = $conn->query($SQL);
    $no=0;
    while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
        $mostcommon = $row["LDAP ID"];
        $Query = $row["Query"];
        echo
        (
            "<p>$mostcommon: $Query</p> <br/>"
        );
    }
    $conn->close();
?>
