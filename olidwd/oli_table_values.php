<?php
include("dbconfig.php");
$conn= mysqli_connect($host, $username, $password);
echo "HI";
if (!$conn) {
    echo 'Cannot connect to sql: ' . mysqli_error();
}
$db_selected = mysqli_select_db('oli', $conn);

if (!$db_selected) {
    $sql = 'CREATE DATABASE oli';
    if (mysqli_query( $conn, $sql)) {
        echo "Database oli created successfully\n";
    } else {
        echo 'Error creating database: ' . mysqli_error($conn) . "\n";
    }
  }
  else
  echo 'Database oli exists';
  mysqli_close($conn);


?>