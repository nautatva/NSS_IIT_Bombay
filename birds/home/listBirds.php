<link rel="stylesheet" type="text/css" href="../custom/home.css">
    <?php
include('../dbconfig.php');
    $SQL="SELECT commonname FROM birds_of_iitbombay ORDER BY commonname";
    $result = $conn->query($SQL);
    $last = '';
    $no=0;
echo ("<div><div><div>");
    while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
        $mostcommon = $row["commonname"];
        $current = strtolower($row['commonname'][0]);
    
        if ($last != $current) {
            if ($no%6==0) {
                echo( "
                </div></div><div class='clearfix'>" );
            }
            echo 
            (
                "
                </div></div>
                <div class='col-sm-2'>
                <div class='alphabet'>  <p>". strtoupper($current) . "<br />". " </p>   </div>
                <div class='list'>  "
            );
            $last = $current;
            $no++;
        }
        echo
        (
            "<a href='../birdswiki.php?page=$mostcommon'>$mostcommon</a> <br />"
        );
        
        
    }
    echo("</div>       </div>       </div>       <div class='clearfix'></div>");
    $conn->close();
?>
