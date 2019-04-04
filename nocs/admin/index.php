<?php
include("../../dbconfig.php");
    $SQL="SELECT * FROM QueryPortalNOCS ORDER BY ID DESC";
    $result = $conn->query($SQL);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Query Admin</title>
    <style>
        table{
            width: 100%;
            font-family: 'Times New Roman', Times, serif;
        }
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
}
    </style>
    <script>
    function changeclr(colr,id) {
        if(colr == "green"){
            colr = "red";
        }
        else{
            colr = "green";
        }
        document.getElementById('heading').style.background = "blue";
        }
    function reload() {
        location.reload();
    }
</script>
</head>
<body>
    <h1 id="heading"> Queries asked in portal </h1>
    <table method="post">
        <tr>
            <th style="width:10%">LDAP ID</th>
            <th style="width: 50%;"> Query </th>
            <th style="width:20%;"> Mark as Done </th> 
        </tr>
        <?php
            while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
                $mostcommon = $row["ID"];
                $Query = $row["Query"];
                $ldap = $row['LDAPID'];
                $MarkAsDone = $row["Completed"];
                $disp = "";$clr="";
                if($MarkAsDone == 0){
                    $disp = "Mark_as_Done";
                    $clr = "red";
                }
                else{
                    $disp = "Mark_as_Undone";
                    $clr = "green";
                }
                echo
                ("
                    <tr id =$mostcommon style='background: $clr'>
                        <td> $ldap </td>
                        <td> $Query </td>
                        <td > <form method='post' > <input type='submit' name=$mostcommon  value=$disp onclick='reload()' /> </form>  
                        </td>
                    </tr>
                    "
                );
            }
        ?>
    </table>
    <?php
        function func(){
           include("../../../dbconfig.php");
        $mykey = key($_POST);
        $myval = $_POST[$mykey];
        if($myval == 'Mark_as_Done'){
            $mysql = "UPDATE QueryPortalNOCS SET Completed = 1 WHERE ID = '$mykey' ";
        }
        else{
            $mysql = "UPDATE QueryPortalNOCS SET Completed = 0 WHERE ID = '$mykey' ";
        }
        // echo($mykey.$myval.$mysql);
        $res=$conn->query($mysql);
    
        if ($res === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error";
        }
        // return header("Refresh: 0");
        }
        func();       
        ?>
            
</body>
</html>
