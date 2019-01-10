<?php
$host ="10.105.177.5";
$username = "nss";
$password = "nssiitb@2015";
$db = "nss";
$dept = 'GC';

$conn = mysqli_connect($host, $username, $password, $db)  or die("Couldn't connect to Server");

$sql="SELECT * FROM department_data WHERE department = '$dept'" ;
$sql1="SELECT * FROM department_basics WHERE department = '$dept'" ;
$sql2="SELECT * FROM Coreteam1819 WHERE dept = '$dept'" ;
$sql3="SELECT * FROM AA1819 WHERE dept = '$dept'" ;

$result = $conn->query($sql);
$basic = $conn->query($sql1);
$heads = $conn->query($sql2);
$AAs = $conn->query($sql3);
?>
<!DOCTYPE html>
<html lang="en">

<head>
<?php header("Location: https://gymkhana.iitb.ac.in/~nss/tem/depts?dept=GC"); ?>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Green Campus - NSS, IIT Bombay</title>

    <!-- Bootstrap Core CSS -->
    <link href="../statics/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../statics/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Theme CSS -->
    <link href="../statics/css/theme.css" rel="stylesheet">
    <link href="./gc.css" rel="stylesheet">
    
    <!-- custom CSS -->
    <link href="../statics/css/custom.css" rel="stylesheet">

    <!-- caroual CSS -->
    <!-- <link href="../statics/css/slideshow.css" rel="stylesheet"> -->
    <!-- Colors -->

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <!-- <a class="navbar-brand page-scroll" href="#page-top">Start Bootstrap</a> -->
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right nav-distribute">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#EO">Educational Outreach</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#GC">Green Campus</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#SSD">Sustainable Social Development</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#DnM">Technicals</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <?php
                    $department = mysqli_fetch_assoc( $basic );
                    echo('
    <header id="welcome" class="scrollify full" style="background-image:url('.$department['main_image'].')">
        <div class="container">
            <div class="intro-text">
                
                    <div class="intro-lead-in">' . $department['name'] . '</div>
                    <div class="intro-heading">
                        <div id="typed-strings"> <span>' . $department['one_liner'] . '</span>
                        </div>
                        <span id="typed"></span>
                    </div>
                 </div>
        </div>
    </header>
    ');
    ?>

    <!-- About -->
    <section id="aboutdept" class="full scrollify">
        <?php    
        echo('<div class=" full perfect-center" style="' . $department['color'] . '">
    
        <h1 class="section-heading">' . $department['name'] . '</h1>
        <h3 class="section-subheading text-muted restrict600">' . $department['description'] . '
        </h3>');
        ?>
        <div>
            <!-- <div class="h3 text-center">
                Know more...
            </div> -->
            <div class="space-between restrict600">
                <a href="#initiatives" class="page-scroll btn btn-xl">Initiatives</a>
                <a href="#team" class="page-scroll btn btn-xl">Team</a>
            </div>
        </div>
        </div>
    </section>


    <section id="initiatives" class="scrollify">
        <div id="portfolio" class="bg-light-gray">
            <div class="container">
                <div class="row flex-wrap-center">
                    <!-- portfolio item is to be repeated -->
                    <?php
                    $a = "";
                    $i=0;
                        while( $row = mysqli_fetch_assoc( $result ) ){
                            $i = $i+1;
                            echo('<div class="portfolio-item">
                            <a href="#portfolioModal'.$i.'" class="portfolio-link" data-toggle="modal">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content">
                                        <i class="fa fa-plus fa-3x"></i>
                                    </div>
                                </div>
                                <img src="' . $row['thumbnail'] . '" class="img-responsive" alt="">
                            </a>
                            <div class="portfolio-caption">
                                <h4>' . $row['initiative'] . '</h4>
                                <p class="text-muted"> ' . $row['des_short'] . '</p>
                            </div>
                        </div>'); 
                        
                        $a=$a.'<div class="portfolio-modal modal fade" id="portfolioModal'.$i.'" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="close-modal" data-dismiss="modal">
                                        <div class="lr">
                                            <div class="rl">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-8 col-lg-offset-2">
                                                <div class="modal-body">
                                                    <!-- Project Details Go Here -->
                                                    <h2>' . $row['initiative'] . '</h2>
                                                    <!-- <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p> -->
                                                    <img class="img-responsive img-centered" src='. $row['thumbnail'] .' alt="">
                                                    <p>' . $row['des_short'] . '</p>
                                                    <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i>
                                                        Close Project</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>';
                        }
                    ?>
                    <!-- portfolio item closed -->
                </div>
            </div>
        </div>
    </section>

    <section id="team" class="scrollify">
        <div class="mbr-section article mbr-section__container" id="EO-content6-1" style="background-color: rgb(255, 255, 255); padding-top: 20px; padding-bottom: 20px;">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading">Meet our team</h2>
                </div>
                <div class="team" style="font-family: 'Droid Sans', Sans-serif;">
                    <div class="lead" style="font-family: 'Droid Sans', Sans-serif;">

                        <h4>Department Heads</h4>
                        <table>
                            <?php
                    $head = mysqli_fetch_assoc( $heads );
                    while ($head) {
                        echo('
                        <tr>
                                    <td><span style="font-size: 1.37rem;   line-height: 1.5;">
                                            <li>' . $head['COL 1'] . '</li>
                                        </span></td>
                                    <td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
                                        &nbsp;</td>
                                    
                                    <td><span style="font-size: 1.37rem; line-height: 1.5; "><a href="tel: +91-' . $head['COL 7'] . '">' . $head['COL 7'] . '</a></span></td>
                              </tr>
                        ');
                    $head = mysqli_fetch_assoc( $heads );
                        
                    }                
                    ?>
                        </table>
                    </div>

                    <div class="lead" style="font-family: 'Droid Sans', Sans-serif;">
                        <h4>Activity Associates</h4>
                        <table>

                            <?php
                        $aa = mysqli_fetch_assoc( $AAs );
                        while ($aa) {
        $name=$aa['name'];
        $contact=$aa['contact'];
        echo
        (
          "<tr>
              <td><span style='font-size: 1.37rem;   line-height: 1.5;'><li>$name</span></td>
             
              <td><span style='font-size: 1.37rem; line-height: 1.5; '><a href='tel: +91-$contact'>$contact</a></span></td></li>
            </tr>"
        );
        $aa = mysqli_fetch_assoc( $AAs );
      }
?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; NSS, IIT Bombay, 2018</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li><a href="#">Privacy Policy</a>
                        </li>
                        <li><a href="#">Terms of Use</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>



    <!-- Portfolio Modals -->
    <!-- Use the modals below to showcase details about your portfolio projects! -->
    <?php echo($a) ?>

</body>

<!-- jQuery -->
<script src="../statics/vendor/jquery/jquery.min.js"></script>

<!-- Custom Javascript -->
<script src="../statics/js/custom.js"></script>

<!-- Plugins == (Easing.js, Bootstrap.min.js, Theme javascript, typed.min.js, Scrollify) -->
<script src="../statics/js/plugins.js"></script>

<!-- javascript for slideshow -->
<script src="../statics/js/slideshow.js"></script>

<script>
    // scrollify config
    $(function () {
        $.scrollify({
            section: ".scrollify",
            setHeights: false,
        });
    });

    // Typed JS config
    document.addEventListener('DOMContentLoaded', function () {

        var typed = new Typed("#typed", {
            stringsElement: '#typed-strings',
            typeSpeed: 90,
            backSpeed: 500,
            backDelay: 500,
            startDelay: 1000,
            loop: false,
            contentType: 'text', // or text
            loopCount: null,
            callback: function () { foo(); },
            resetCallback: function () { newTyped(); }
        });
    });
</script>

</html>