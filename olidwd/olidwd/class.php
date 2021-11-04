<!DOCTYPE html>
<?php 
// Sanitize query parameters
// mlc_security_compliance
$_GET = filter_input_array(INPUT_GET, FILTER_SANITIZE_STRING);
?>
<html lang="en-US">
   <head>
    <meta charset="UTF-8"><link rel="shortcut icon" href="https://nss.iitb.ac.in/assets/images/147455559147662-1-128x128-55.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>All Class <?php echo $_GET["c"];?> Videos</title>
    <link rel="stylesheet" href="css/components.css">
    <link rel="stylesheet" href="css/icons.css">
    <link rel="stylesheet" href="css/responsee.css">
    <link rel="stylesheet" href="css/classPHP.css">
    <link rel="stylesheet" href="https://nss.iitb.ac.in/olidwd/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="https://nss.iitb.ac.in/olidwd/owl-carousel/owl.theme.css">

  <!-- navbar -->
  <link rel="stylesheet" href="../olidwd/common/navbar/navbar.css">  
  <script src="http://code.jquery.com/jquery-2.1.1.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript" src="../olidwd/common/navbar/script.js"></script>
<!-- end -->
    
<!-- Meta data -->
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="website" />
<meta property="og:site_name" content="Open Learning Initiative" />
<meta property="og:title" content="OLI | EO | NSS IIT-Bombay " />
<meta name="og:description" content="Record of videos in regional languages, explaining the concepts that school students would be taught by a teacher."/>
<meta property="og:image" content="https://nss.iitb.ac.in/olidwd/img/banner.jpg" />
<meta property="og:image:width" content="800" />
<meta property="og:image:height" content="450" />
<meta property="og:url" content="https://nss.iitb.ac.in/olidwd/">

    <!-- CUSTOM STYLE -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="https://nss.iitb.ac.in/olidwd/js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="https://nss.iitb.ac.in/olidwd/js/jquery-ui.min.js"></script>    
    <script type="text/javascript" src="https://nss.iitb.ac.in/olidwd/js/validation.js"></script> 
    <style type="text/css">
      #tags ul li {
        display: inline;
      }
    </style>
 </head> 
  <body>
      <!-- navbar added -->
  <?php include('./common/navbar/navbar.html'); ?>
  <!-- end -->

    <!-- MAIN -->
    <main role="main">
      <!-- Main Carousel -->
      <section class=" background-white"> 
        <div>
         
          <div class="item">
            <div class="homeHeadMain"> 
              <div class="text-center text-size-30 homeHeadTitle"> All Class <?php echo $_GET["c"];?> Videos </div>
              <div class ="text-center  text-size-24 homeHead">
             <?php   
              include('../../dbconfig.php');
            $conn= mysqli_connect($host, $username, $password, $db);
            $conn->set_charset('utf8');
            // mlc_security_compliance
            $class = mysqli_real_escape_string($conn, $_GET['c']);
            if($class === '9' || $class === '10')
            $sql = "SELECT * FROM Folderlink WHERE (CLASS='".$class."' OR CLASS='9&10')";
            else 
            $sql = "SELECT * FROM Folderlink WHERE CLASS='".$class."'";
            //echo $sql;
            $result = mysqli_query($conn, $sql);
            $i=0;
            while ($row = mysqli_fetch_assoc($result)) { 
              echo' 
              <a class="s-12 m-12 l-6" target="_blank" href="'.$row['DLINK'].'"><i class="icon-download  iconx"></i>
              Download Class '.$class.' '.$row["SUB"].' videos (in '.$row['LANG'].'). </a>
            ';
            if($i == 1)
            echo ' ';
            $i = 1 - $i;
            }


?>
              
          
               
              </div>
</div>
          
        <?php

            include('../../dbconfig.php');
            // if(is_set["page"])
            $conn= mysqli_connect($host, $username, $password, $db);
            $conn->set_charset('utf8');
            if(!isset($_GET["page"])){
              // mlc_security_compliance
              $class = mysqli_real_escape_string($conn, $_GET['c']);

              if($class === '9' || $class === '10')
              $sql = "SELECT * FROM OLI WHERE (CLASS='".$class."' OR CLASS='9&10')";
              else 
              $sql = "SELECT * FROM OLI WHERE CLASS='".$class."'";
              //echo $sql;
              $result = mysqli_query($conn, $sql);

            
            $rowcount=mysqli_num_rows($result);
            $page = 0;
            }
            else{
              $page = intval($_GET['page']);
              $rowcount = mysqli_real_escape_string($conn, $_GET['t']);
            }
            $offset = $page * 6;
            $class = mysqli_real_escape_string($conn, $_GET['c']);
            if($class === '9' || $class === '10')
            $sql = "SELECT * FROM OLI WHERE (CLASS='".$class."' OR CLASS='9&10') LIMIT $offset, 6";
            else 
            $sql = "SELECT * FROM OLI WHERE CLASS='".$class."' LIMIT $offset, 6";
            //echo $sql;
            $result = mysqli_query($conn, $sql);
           
            while ($row = mysqli_fetch_assoc($result)) {  

                $queryString = parse_url($row['YTUBE'], PHP_URL_QUERY);
                parse_str($queryString, $params);
                echo '
                <div class="item homeHeadContent">
                <div> 
                <div class="s-12 m-12 l-12 headContentGradient">
                  <div class="image-border-radius margin-m-bottom">
                    <div>
                    <div class="s-12 m-12 l-2 margin-m-bottom"><p>&nbsp</p></div>
                      <div class="s-12 m-12 l-2 margin-m-bottom homeContentImgDiv">
                        <a class="image-hover-zoom homeContentImg" href=video.php?id='.$row["ID"].'><img src="https://img.youtube.com/vi/'.$params["v"].'/mqdefault.jpg" alt="" style="padding-left: 0px;"></a>
                      </div>
                      <div class="s-12 m-12 l-6 margin-m-bottom">
                        <a class="text-dark text-primary-hover headContentDetails" href=video.php?id='.$row["ID"].'><h3 class="homeContentTitle">'.$row['TITLE'].'</h3>
                        <p>'.substr($row['DES'],0, 190).'...'.' <br>Class '.$row['CLASS'].', '.$row['SUB'].', '.$row['LANG'].'</p></a>
                    
                       <a class ="headDownload text-primary-hover" target="_blank" href='.$row['DLINK'].'><i class="icon-download background-white iconx"></i>
                 &nbsp &nbsp Download The Video. </a>
                      </div>
                      <div class="s-12 m-12 l-2 margin-m-bottom"><p>&nbsp</p></div>
                    </div>  
                  </div>
                </div>
              
            <p class="text-size-12">&nbsp</p></div>
            </div>
              ';
            }
            echo '
            
                        <div class="item">
                        
                        <div class="s-12 m-12 l-6 ">
                         <div class=" margin-top-30 margin-bottom-0  text-center">
                         ';
                         if($page!=0)
                         echo '<a href="class.php?c='.urlencode($_GET["c"]).'&page='.($page - 1).'&t='.urlencode($rowcount) . '"><button class="button background-primary border-radius text-white text-strong">< Previous Page</button></a>';
                       echo'
                     </div>
                     </div>
                     <div class="s-12 m-12 l-6 ">
                         <div class=" margin-top-30 margin-bottom-0  text-center">
                         ';
                         if($page!=floor($rowcount/6 ))
                         echo '<a href="class.php?c='.urlencode($_GET["c"]).'&page='.($page + 1).'&t='.urlencode($rowcount) . '"><button class="button background-primary border-radius text-white text-strong">Next Page ></button></a>';
                       echo'
                     </div>
                     </div>
                       </div>
             '; 
         ?>
                

             
                
      </section>

      
  <!-- footer -->
  <script src="./common/common.js"></script>
  <div w3-include-html="./common/footer/footer.html"></div>
  <script>includeHTML();</script>
    <script type="text/javascript" src="https://nss.iitb.ac.in/olidwd/js/responsee.js"></script>
    <script type="text/javascript" src="https://nss.iitb.ac.in/olidwd/owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="https://nss.iitb.ac.in/olidwd/js/template-scripts.js"></script>   
    
   </body>
   <link
 href="https://fonts.googleapis.com/css?family=Montserrat"
 rel="stylesheet"
/>
<style>
 body{
   font-family: 'Montserrat', sans-serif;
 }
</style>
   </html>
