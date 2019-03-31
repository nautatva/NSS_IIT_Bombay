<?php
include('dbconfig.php');
$conn= mysqli_connect($host, $username, $password, $db);
if (!$conn) {
    echo 'Cannot connect to sql: ' . mysqli_error($conn);
}

$query = "SELECT ID FROM USERS";
$result = mysqli_query($conn, $query);

if(empty($result)) {
                $query = "CREATE TABLE OLI (
                          ID int(11) AUTO_INCREMENT PRIMARY KEY,
                          NO int(11),
                          LANG varchar(20),
                          CLASS varchar(10),
                          SUB varchar(15),
                          TITLE varchar(500),
                          DES varchar(1500),
                          YTUBE varchar(100),
                          DLINK varchar(100),
                          next int(1)
                          )";
                $result = mysqli_query($conn, $query);
                if($result)
                echo "Successful";
                else
                echo "Error: ". mysqli_error($conn);

}
else 
echo "Table exists";
?>
