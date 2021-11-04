<?php
            // Sanitize query parameters
            // mlc_security_compliance
            $_GET = filter_input_array(INPUT_GET, FILTER_SANITIZE_STRING);

            include('../../dbconfig.php');
            $conn= mysqli_connect($host, $username, $password, $db);
	    $conn->set_charset('utf8');

            $sub = mysqli_real_escape_string($conn, $_GET['sub']);
            $lang = mysqli_real_escape_string($conn, $_GET['lang']);
	    $class = mysqli_real_escape_string($conn, $_GET['class']);

            $sql = "SELECT * FROM Folderlink WHERE CLASS='".$class."' AND SUB='".$sub."' AND LANG='".$lang."'";
            $result = mysqli_query($conn, $sql);
            
            
                        while ($row = mysqli_fetch_assoc($result)) {
                          $playurl = $row["DLINK"];
                        }
            // TODO : Get the playlist URL
            
        ?>


<!DOCTYPE html>
<html lang="en-US">
   <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>  <?php
              if(($class === '9' || $class === '10') && $sub == "Maths"){
                  echo "Class 9 and 10 Maths - " . $lang ." ";
              }
              else
                echo "Class " . $class ." ". $sub . " - " . $lang . " ";
              
              ?>
               Playlist</title>
    <link rel="stylesheet" href="css/components.css">
    <link rel="stylesheet" href="css/icons.css">
    <link rel="stylesheet" href="css/responsee.css">
    <link rel="stylesheet" href="css/classPHP.css">
    <link rel="stylesheet" href="css/class_sub_langPHP.css">
    <link rel="stylesheet" href="https://nss.iitb.ac.in/olidwd/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="https://nss.iitb.ac.in/olidwd/owl-carousel/owl.theme.css">

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
      <section class="background-white">  
        <div>
          <div class="item">
            <div class="homeHeadMain"> 
              <div class="text-center text-size-30 homeHeadTitle"> 
                <?php
                if(($class === '9' || $class === '10') && $sub == "Maths"){
                    echo "Class 9 and 10 Maths - " . $lang;
                }
                else
                  echo "Class " . $class ." ". $sub . " - " . $lang;
                
                ?>
              </div>
              <div class ="text-center text-size-24  homeHead"><a  target="_blank" href=<?php echo $playurl;?>><i class="icon-download  iconx"></i>
                  Download The Entire Playlist. </a><br><br></div>
              
                
                  <div class="margin">
            <?php



            include('../../dbconfig.php');
           
            $conn= mysqli_connect($host, $username, $password, $db);
            $conn->set_charset('utf8');
            if(!isset($_GET["page"])){
              
              if($class === '9' || $class === '10') {
		      $sql = "SELECT * FROM OLI WHERE (CLASS='".$class."' OR CLASS='9&10') AND SUB = '".$sub."' AND LANG = '".$lang."'";
              }
              else {
		      $sql = "SELECT * FROM OLI WHERE CLASS='".$class."' AND SUB='".$sub."' AND LANG='".$lang."'";
	      }
                // echo $sql;
              $result = mysqli_query($conn, $sql);


            $rowcount=mysqli_num_rows($result);
            $page = 0;
            }
            else{
            $page = intval($_GET["page"]);
            $rowcount = mysqli_real_escape_string($conn, $_GET["t"]);
            }
	    $offset = $page * 6;

            if($class === '9' || $class === '10') {
		    $sql = "SELECT * FROM OLI WHERE (CLASS='".$class."' OR CLASS='9&10') AND SUB = '".$sub."' AND LANG = '".$lang."' LIMIT $offset, 6";
	    } else { 
		    $sql = "SELECT * FROM OLI WHERE CLASS='".$class."' AND SUB='".$sub."' AND LANG='".$lang."' LIMIT $offset, 6";
	    }
            $result = mysqli_query($conn, $sql);

            while ($row = mysqli_fetch_assoc($result)) {
            //echo $row;   


                $queryString = parse_url($row['YTUBE'], PHP_URL_QUERY);
                //var_dump($queryString);
                parse_str($queryString, $params);
                //var_dump($params);
                
              //echo 'https://img.youtube.com/vi/'.$params["v"].'/mqdefault.jpg';
            echo '<div class="item homeHeadContent">
                <div class="s-12 m-12 l-12 headContentGradient">
                  <div class="image-border-radius margin-m-bottom">
                    <div>
                    <div class="s-12 m-12 l-2 margin-m-bottom"><p>&nbsp</p></div>
                      <div class="s-12 m-12 l-2 margin-m-bottom homeContentImgDiv">
                        <a class="image-hover-zoom homeContentImg" href=video.php?id='.$row["ID"].'><img src="https://img.youtube.com/vi/'.$params["v"].'/mqdefault.jpg" alt="" style="padding-left: 0px;"></a>
                      </div>
                      <div class="s-12 m-12 l-6 margin-m-bottom">
                        <a class="text-dark text-primary-hover headContentDetails" href=video.php?id='.$row["ID"].'><h3 class="homeContentTitle">'.$row['TITLE'].'</h3>
                        <p>'.substr($row['DES'],0,190).'...'.'</p>
                        <p> Class '.$row['CLASS'].', '.$sub.', '.$lang.'</p></a>
                    
                       <a class ="headDownload text-primary-hover" target="_blank" href='.$row['DLINK'].'><i class="icon-download background-white iconx"></i>
                 &nbsp &nbsp Download The Video. </a>
                      </div>
                      <div class="s-12 m-12 l-2 margin-m-bottom"><p>&nbsp</p></div>
                    </div>  
                  </div>
                </div>
              
            <p class="text-size-12">&nbsp<br><br></p></div>
            </div>
            </div>
			       ';
       
            }
            echo '

                        <div class="item">
                        
                        <div class="s-12 m-12 l-6 ">
                        <div class=" margin-top-30 margin-bottom-0  text-center">
                        ';
                        if($page!=0)
                        echo '<a href="class_sub_lang.php?class='.urlencode($_GET["class"]).'&sub='.urlencode($_GET["sub"]).'&lang='.urlencode($_GET["lang"]).'&page='.($page - 1).'&t='.urlencode($rowcount) . '"><button class="button background-primary border-radius text-white text-strong">< Previous Page </button></a>';
                      echo'
                    </div>
                    </div>
                    <div class="s-12 m-12 l-6 ">
                        <div class=" margin-top-30 margin-bottom-0  text-center">
                        ';
                        if($page!=floor($rowcount/6 ))
                        echo '<a href="class_sub_lang.php?class='.urlencode($_GET["class"]).'&sub='.urlencode($_GET["sub"]).'&lang='.urlencode($_GET["lang"]).'&page='.($page + 1).'&t='.urlencode($rowcount) . '"><button class="button background-primary border-radius text-white text-strong"> Next Page > </button></a>';
                      echo'
                    </div>
                    </div>
                      </div>
            '; 
          


            ?>
		
		
      <!-- <div class="item">
           <div class="s-12 m-12 l-6 ">
            <div class=" margin-top-30 margin-bottom-0  text-center">
        </div>
        </div>
        <div class="s-12 m-12 l-6 ">
            <div class=" margin-top-30 margin-bottom-0  text-center">
            
          <a href="./C10MathsBen01.html"><button class="button background-primary border-radius text-white text-strong">Next Page > </button></a>
        </div>
        </div> -->
          
             </section>
  <!-- footer -->
  <script src="./common/common.js"></script>
  <div w3-include-html="./common/footer/footer.html"></div>
  <script>includeHTML();</script>
   
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
