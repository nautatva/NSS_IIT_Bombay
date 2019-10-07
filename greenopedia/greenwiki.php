<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

        <link
      rel="icon"
      type="image/png"
      sizes="192x192"
      href="../assets/NSS/logo192.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="128x128"
      href="../assets/NSS/logo128.png"
    />
    <link
      rel="apple-touch-icon"
      sizes="128x128"
      href="../assets/NSS/logo128.png"
    />
    <link
      rel="apple-touch-icon"
      sizes="192x192"
      href="../assets/NSS/logo192.png"
    />
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">

    	<link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">

        <!-- Bootstrap -->
  		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    </head>
    <body>
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please upgrade your browser to improve your experience and security.</p>
        <![endif]-->
     <!-- Navigation Bar -->
<nav class="navbar navbar-default" style="background-color: #BCBB9C; box-shadow: 0px 1px 12px black;">
            <div>
            	<div style="padding-left: 5%; padding-right: 5%; padding-top: 1%;">
	                <div class="navbar-header">
				      <a class="navbar-brand logo" style="font-size: 28px; margin-top: -5px; margin-left: 25px; color: #575B52" href="https://nautatva.github.io/NSS_IIT_Bombay/home/" style="/*font-family: 'Merriweather', sans-serif*/">NSS IIT Bombay</a>
				    </div>
				    <ul class="nav navbar-nav navbar-right">
		  		        <li class="active nav-link"><a href="./home">Greenopedia</a></li>
				        <li><a href="https://gymkhana.iitb.ac.in/~nss/GC.php">Green Campus</a>
	                    </li>
				        <li><a href="https://nautatva.github.io/NSS_IIT_Bombay/team/">About Us</a>
	                        </li>
				        <li><a href="https://gymkhana.iitb.ac.in/~nss/ContactUs.html" style="margin-right: 0px;">Contact Us</a></li>
				    </ul>
				</div>
			</div>
		</nav>        
<?php

if (isset($_GET['page'])) {

$page=$_GET['page'];
include('../../dbconfig.php');
$SQL="SELECT * FROM greenopedia WHERE mostcommonname='$page'" ;
$result = $conn->query($SQL);

	// output data of each row
    while($row = $result->fetch_assoc()) 
    {
    $scientificName=$row["scientificname"];
    $planttype= $row["type"];
    $plantdes= $row["description"];
    $comname1=$row["common1"];    $comname2=$row["common2"];	$comname3=$row["common3"];    $comname4=$row["common4"];	
    $leaf1=$row["leaves1"];	$leaf2=$row["leaves2"];	$leaf3=$row["leaves3"];	$leaf4=$row["leaves4"]; 
    $treebark1=$row["bark1"];	$treebark2=$row["bark2"];	$treebark3=$row["bark3"];	$treebark4=$row["bark4"];
    $flower1=$row["flowers1"];	$flower2=$row["flowers2"];	$flower3=$row["flowers3"];	$flower4=$row["flowers4"];
    $fruit1=$row["fruits1"];	$fruit2=$row["fruits2"];	$fruit3=$row["fruits3"];	$fruit4=$row["fruits4"];
    $video=$row["link1"]; $location=$row["location"]; $map = $row["map"];}

} else {
    echo "please try again";
}

$string = str_replace(' ', '', $page);
?>


<!-- Content -->
        <section>
            <div class="container-fluid">
                <div class="col-md-5">
                    <div class = "imgbox" style="padding-bottom: 30px;">
                        <div class = "natureimg" style="background-image: url(<?php echo("../assets/greenopedia/$string.jpg"); ?>);"></div>
                    </div>
                </div>
                <div class="col-md-6">
                	<div>    
                	    <span class="alphabet">Common Name:</span> <span class="list"><?php echo $page; ?></span>
                	    <br>
                	    <span class="alphabet">Scientific Name:</span> <span class="list"><?php echo $scientificName; ?></span>
                        <br>
                	    <span class="alphabet">Type:</span> <span class="list"><?php echo $planttype; ?></span>
                        <br>
                	     <div>
                            <p class="blog_des" style=" font-weight: 300; font-size: 19px; padding-bottom: 30px;">
                            	<?php echo $plantdes; ?><br><b>Location: </b><?php echo $location; echo "<br>"; ?>
                        
                            </p>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                        <div class="col-md-1" style="margin-left: -2%"></div>
           				<div class="col-md-2 alphabet" style="border: 0px solid black; padding-top: 0px;margin-bottom: 10px;">
        					<span style="text-align: center">Known as</span>
        				    <ul class="list" style="list-style-type: none; padding-left:5px ;font-size: 13px;">
                                <li><?php echo $comname1; ?></li>
                                <li><?php echo $comname2; ?></li>
                                <li><?php echo $comname3; ?></li>
                                <li><?php echo $comname4; ?></li>
                            </ul>
                        </div>

                        <div class="col-md-2 alphabet" style="border: 0px solid black; padding-top: 0px; margin-bottom: 10px;">
	                        <span style="text-align: center;">Leaves</span>
	   							<ul class="list" style="list-style-type: none; padding-left:5px ;font-size: 13px;">
	                                <li><?php echo $leaf1; ?></li>
	                                <li><?php echo $leaf2; ?></li>
	                                <li><?php echo $leaf3; ?></li>
	                                <li><?php echo $leaf4; ?></li>
                                </ul>
                        </div>
                        <div class="col-md-2 alphabet" style="border: 0px solid black; padding-top: 0px;margin-bottom: 10px;">
	                        <span style="text-align: center;">Bark</span>
	   							<ul class="list" style="list-style-type: none; padding-left:5px ;font-size: 13px;">
	                                <li><?php echo $treebark1; ?></li>
									<li><?php echo $treebark2; ?></li>
	                                <li><?php echo $treebark3; ?></li>
	                                <li><?php echo $treebark4; ?></li>
                                </ul>
                        </div>
                        <div class="col-md-2 alphabet" style="border: 0px solid black; padding-top: 0px;margin-bottom: 10px;">
	                        <span style="text-align: center;">Flowers</span>
	   							<ul class="list" style="list-style-type: none; padding-left:5px ;font-size: 13px;">
	                                <li><?php echo $flower1; ?></li>
	                                <li><?php echo $flower2; ?></li>
	                                <li><?php echo $flower3; ?></li>
	                                <li><?php echo $flower4; ?></li>
                                </ul>
                        </div>
                        <div class="col-md-2 alphabet" style="border: 0px solid black; padding-top: 0px;margin-bottom: 10px;">
                            <span style="text-align: center;">Fruits</span>
                                <ul class="list" style="list-style-type: none; padding-left:5px ;font-size: 13px;">
                                    <li><?php echo $fruit1; ?></li>
                                    <li><?php echo $fruit2; ?></li>
                                    <li><?php echo $fruit3; ?></li>
                                    <li><?php echo $fruit4; ?></li>
                                </ul>
                        </div>
                        </div> 
                        <br>
                        <p style="display:flex; justify-content:center;">
                        <?php echo $video; echo "<br>"; ?>
                        </p>
                        <p style="display:flex; justify-content:center;">
                        <?php echo $map; echo "<br>"; ?>
                        </p>
                        
             
        </section>
        
        <!-- font awesome -->
  		<!-- <link rel="stylesheet" href="css/customfa.css"> -->
  		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
          <footer id="myFooter">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                            <p class="alphabet-footer" style="margin-top: 2.2vh; padding-bottom: 2vh;">NSS IIT Bombay</p>
                    </div>
                </div>
            </div>
            <div class="social-networks">
                <a href="#" class="facebook"><i class="fab fa-facebook"></i></a>
                <a href="#" class="wordpress"><i class="fab fa-wordpress"></i></a>
                <a href="#" class="youtube"><i class="fab fa-youtube"></i></a>
                <a href="#" class="twitter"><i class="fab fa-twitter"></i></a>
            </div>
        </footer>

        <script src="js/vendor/modernizr-3.5.0.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.2.1.min.js"><\/script>')</script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
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