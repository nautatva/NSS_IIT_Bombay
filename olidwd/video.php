<!DOCTYPE html>
<html lang="en-US">
  <head>


<?php 
$id = $_GET['id'];
include('../../dbconfig.php');
$conn= mysqli_connect($host, $username, $password, $db);
$sql = "SELECT * FROM OLI WHERE id=".$id;
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
$queryString = parse_url($row['YTUBE'], PHP_URL_QUERY);
parse_str($queryString, $params);
$title = $row['TITLE'];
$sub = $row['SUB'];
$des = $row["DES"];
$lang= $row['LANG'];
$dlink = $row['DLINK'];
$class = $row['CLASS'];
$ytube = $row['YTUBE'];
$next = $row['next'];
}
$newURL = 'https://gymkhana.iitb.ac.in/~nss/olidwd/';
if ($lang=='') {
  header('Location: '.$newURL);
}

?>

    <meta charset="UTF-8"><link rel="shortcut icon" href="https://gymkhana.iitb.ac.in/~nss/assets/images/147455559147662-1-128x128-55.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $title;?></title>
    <link rel="stylesheet" href="css/components.css">
    <link rel="stylesheet" href="css/icons.css">
    <link rel="stylesheet" href="css/responsee.css">
    <link rel="stylesheet" href="https://gymkhana.iitb.ac.in/~nss/olidwd/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="https://gymkhana.iitb.ac.in/~nss/olidwd/owl-carousel/owl.theme.css">

    <!-- CUSTOM STYLE -->
    
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="https://gymkhana.iitb.ac.in/~nss/olidwd/js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="https://gymkhana.iitb.ac.in/~nss/olidwd/js/jquery-ui.min.js"></script>    
    <script type="text/javascript" src="https://gymkhana.iitb.ac.in/~nss/olidwd/js/validation.js"></script> 
    <style type="text/css">
      #tags ul li {
        display: inline;
      }
    </style>
    
<script> 
$(function(){
  $("#header").load("header.html"); 
  
});
</script> 
  </head>  
  
  <body>
  
    <!-- HEADER -->
    <div id="header"></div>
    
    <!-- MAIN -->
    <main role="main">
      <!-- Main Carousel -->
        <section class="section background-white"> 
        <div class="line">
          <div class="margin">
            <div class="s-12 m-12 l-6 margin-m-bottom">
              <style>.embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style><div class='embed-container'>
              <?php 
              echo '<iframe src="https://www.youtube.com/embed/'.$params["v"].'?list='.$params["list"].'" frameborder="0" allowfullscreen></iframe></div>';
             ?>
              <a class="text-more-info text-primary-hover" target="_blank" href=<?php echo $ytube;?>>Watch on YouTube</a> 

            </div>

            
            <div class="margin">
            <div class="s-12 m-12 l-6 margin-m-bottom">
             <h1 class="heading"><?php echo $title;?></h1>
             <p class="text-size-20"><?php echo $des;?></p>
             <p></p>
             <div class="margin-top-15 tags"> <ul>
                 <?php
                 echo '
             <li><a href="class.php?c='.$class.'">Class '.$class.'</a></li>
               <li><a href="sub.php?s='.$sub.'">'.$sub.'</a></li>
               <li><a href="lang.php?l='.$lang.'">'.$lang.'</a></li>
             </ul>';
             ?>
             </div>
             <div class="margin-top-15 s-12 m-12 l-6 background-primary text-strong">
               <a target="_blank" href=<?php echo $dlink;?>> <i class="icon-download background-white icon2x"></i>
                 &nbsp &nbsp Download The Video. </a>
             </div>
                             
            </div>
          </div>
          <div>
           <div class="s-12 m-12 l-6 ">

                        <div class=" margin-top-30 margin-bottom-0  text-center">
                        <?php
                        if($next == 1 || $next == 2)
                        echo'<a href="video.php?id='.($id - 1).'"><button class="button background-primary border-radius text-white text-strong"> < Previous Video </button></a>';
                        
                       echo '
        </div></div>
        <div class="s-12 m-12 l-6 ">
            <div class=" margin-top-30 margin-bottom-0  text-center">';

            if($next == 1 || $next == 0)
                        echo'<a href="video.php?id='.($id + 1).'"><button class="button background-primary border-radius text-white text-strong">Next Video > </button></a>';
               echo'
                        </div>
        </div>';
        ?>
          </div>
</div>
        
      </section>
     
    
      
     <section class="section background-white"><div class="s-12 m-12 l-12"></br><center><h3>To learn more about what <b>NSS, IIT Bombay</b> does, click <a href="https://gymkhana.iitb.ac.in/~nss"><b>here</b></a></h3></center></div> <!-- Section 1 --></section>
  
    <!-- FOOTER -->
    <footer> </center><section class="padding background-dark">
        <div class="line">
          <div class="s-12 l-6">
            <p class="text-size-12">Copyright 2018, NSS IIT Bombay</p>
            
          </div>
          
        </div>
      </section>
    </footer>
    <script type="text/javascript" src="https://gymkhana.iitb.ac.in/~nss/olidwd/js/responsee.js"></script>
    <script type="text/javascript" src="https://gymkhana.iitb.ac.in/~nss/olidwd/owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="https://gymkhana.iitb.ac.in/~nss/olidwd/js/template-scripts.js"></script>   
    
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
