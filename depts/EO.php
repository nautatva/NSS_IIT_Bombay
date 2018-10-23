<?php

$host ="localhost";
$username = "root";
$password = "password";
$db = "nss";
$conn = mysqli_connect($host, $username, $password, $db)  or die("Couldn't connect to Server");

$sql="SELECT * FROM department_data WHERE department = 'EO'" ;
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Departments - NSS, IIT Bombay</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Theme CSS -->
    <link href="css/agency.css" rel="stylesheet">

    <!-- custom CSS -->
    <link href="css/custom.css" rel="stylesheet">

    <!-- caroual CSS -->
    <link href="css/slideshow.css" rel="stylesheet">

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
    <header id="welcome" class="scrollify">
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in">Welcome To Our Studio!</div>
                <div class="intro-heading">
                    <div id="typed-strings"> <span>Educational Outreach</span>
                    </div>
                    <span id="typed"></span>
                </div>

                <a href="#services" class="page-scroll btn btn-xl">Tell Me More</a>
            </div>
        </div>
    </header>

    <!-- About -->
    <section id="aboutdept" class="full scrollify">
        <div class=" EO full perfect-center">
            <h1 class="section-heading">Educational Outreach</h1>
            <h3 class="section-subheading text-muted restrict600">"Education is our birthright, but not all
                have the
                privilege. We teach the underprivileged and also let them inculcate cultural skills and sound
                morals.
                You get to interact with children and relive your childhood. You leave a positive impact on
                someone's life and be their role model"
            </h3>
            <div>
                <div class="h3 text-center">
                    Know more...
                </div>
                <div class="space-between restrict600">
                    <a href="#initiatives" class="page-scroll btn btn-xl">Initiatives</a>
                    <a href="#team" class="page-scroll btn btn-xl">Team</a>
                </div>
            </div>
        </div>
    </section>

    <section id="team" class="scrollify">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading">Meet our team</h2>
            </div>
            <div class="team">
                <div class="heads">
                    <div class="team-member">
                        <!-- <img src="img/team/1.jpg" class="img-responsive img-circle" alt=""> -->
                        <h4>Aditya Saurabh</h4>
                        <p class="text-muted">Department Head</p>
                    </div>
                    <div class="team-member">
                        <!-- <img src="img/team/2.jpg" class="img-responsive img-circle" alt=""> -->
                        <h4>Yash Kadam</h4>
                        <p class="text-muted">Department Head</p>
                    </div>
                </div>
                <div class="AA">
                    <div class="team-member">
                        <!-- <img src="img/team/1.jpg" class="img-responsive img-circle" alt=""> -->
                        <h4>Aditya Saurabh</h4>
                        <p class="text-muted">Department Head</p>
                    </div>
                    <div class="team-member">
                        <!-- <img src="img/team/2.jpg" class="img-responsive img-circle" alt=""> -->
                        <h4>Yash Kadam</h4>
                        <p class="text-muted">Department Head</p>
                    </div>
                </div>
            </div>
            <p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing
                elit.
                Aut
                eaque,
                laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias
                ut
                unde.</p>
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
                                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
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
<script src="vendor/jquery/jquery.min.js"></script>

<!-- Custom Javascript -->
<script src="./js/custom.js"></script>

<!-- Plugins == (Easing.js, Bootstrap.min.js, Theme javascript, typed.min.js, Scrollify) -->
<script src="./js/plugins.js"></script>

<!-- javascript for slideshow -->
<script src="js/slideshow.js"></script>

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