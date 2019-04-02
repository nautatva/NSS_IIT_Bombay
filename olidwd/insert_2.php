<?php
include('../dbconfig.php');
$conn= mysqli_connect($host, $username, $password, $db);
echo mysqli_connect_error();
$csvFile = fopen('drive.csv', 'r');
fgetcsv($csvFile);
while(($line = fgetcsv($csvFile)) !== FALSE){
    // print_r($line);
    // echo "<br>";
    //echo $line[0] ."<br>";
    $prevQuery = "SELECT * FROM Folderlink WHERE NO = ".$line[0];
    //echo $prevQuery.'<br>';
    $prevResult = $conn->query($prevQuery);
    //echo $prevResult->num_rows.'<br>';
    // $line[6] =  mysqli_real_escape_string($line[6]);
    if($prevResult->num_rows > 0){
        echo $line[0]." updated<br>";
        $conn->query("UPDATE Folderlink SET LANG = '".$line[1]."', CLASS = '".$line[2]."', SUB = '".$line[3]."', DLINK = '".$line[4]."' WHERE NO = ".$line[0]);
    }else{
        echo $line[0]." inserted<br>";
        
                //insert member data into database
        echo "INSERT INTO Folderlink (NO, LANG, CLASS, SUB, DLINK) VALUES (".$line[0].",'".$line[1]."','".$line[2]."','".$line[3]."','".$line[4]."')";
        $conn->query("INSERT INTO Folderlink (NO, LANG, CLASS, SUB, DLINK) VALUES (".$line[0].",'".$line[1]."','".$line[2]."','".$line[3]."','".$line[4]."')");
        // if($conn){
        //     echo "Error".$conn->error;
        // }
        // else{
        //     echo "Error".$conn->error; 
        // }
    }   
}

?>
