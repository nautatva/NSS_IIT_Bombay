<?php
include('../../dbconfig.php');
$conn= mysqli_connect($host, $username, $password, $db);
$conn->set_charset('utf8');
$csvFile = fopen('oli.csv', 'r');
fgetcsv($csvFile);
while(($line = fgetcsv($csvFile)) !== FALSE){
    $prevQuery = "SELECT * FROM OLI WHERE NO = ".$line[0];
    $prevResult = $conn->query($prevQuery);
    $line[6] =  $conn->real_escape_string($line[6]);
    $line[4] =  $conn->real_escape_string($line[4]);
    if($prevResult->num_rows > 0){
        if($conn->query("UPDATE OLI SET LANG = '".$line[1]."', CLASS = '".$line[2]."', SUB = '".$line[3]."', TITLE = '".$line[4]."', YTUBE = '".$line[5]."', DES='".$line[6]."', DLINK = '".$line[7]."', next = '".$line[8]."' WHERE NO = ".$line[0]))
        echo $line[0]." updated<br>";

        else
        echo "Error updating $line[0] $conn->error <br>" ;
       
    }else{
        //insert member data into database      
        if($conn->query("INSERT INTO OLI (NO, LANG, CLASS, SUB, TITLE, YTUBE, DES, DLINK, next) VALUES (".$line[0].",'".$line[1]."','".$line[2]."','".$line[3]."','".$line[4]."','".$line[5]."','".$line[6]."','".$line[7]."','".$line[8]."')"))
            echo $line[0]." inserted<br>";
        else
            echo "Error inserting $line[0] $conn->error <br>" ;
        
    }   
}

?>