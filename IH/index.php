<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="generator" content="Mobirise v3.6.4, mobirise.com">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="assets/images/147455559147662-1-128x128-55.png" type="image/x-icon">
    <meta name="description" content="President">
    <title>Invisible Humans of IIT Bombay</title>
    <link rel="stylesheet" href="assets/et-line-font-plugin/style.css">
    <link rel="stylesheet" href="assets/bootstrap-material-design-font/css/material.css">
    <link rel="stylesheet" href="assets/tether/tether.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/socicon/css/socicon.min.css">

    <link rel="stylesheet" href="assets/dropdown/css/style.css">
    <link rel="stylesheet" href="assets/theme/css/style.css">
    <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">

</head>



<body>

    <?php include("../common/navbar/navbar.php"); ?>
    <section class="mbr-section mbr-section__container" id="page7-header3-0" style="background-color: gray; padding-top: 6.5rem;">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h3 class="mbr-section-title display-2" style="padding-top: 0.5rem;">Invisible Humans of IIT Bombay</h3>
                    <p style="text-align: center;">We bring to light stories of the campus residents who have been
                        responsible for the smooth functioning of this institute.</p>
                </div>
            </div>
        </div>
    </section>
<?php
$file = fopen("invisiblehumans.txt","r");
for ($i=1; $i <= 46; $i++) {
$line = fgets($file);
$img = "<div class='mbr-table-cell mbr-valign-top col-md-6'>
<div class='mbr-figure'><img src='../assets/InvisibleHumans/$i.jpg' alt='Invisible Humans'></div>
</div>";
if($i%2==0){
echo("

<section class='mbr-section mbr-after-navbar' id='EO-msg-box5-0' style='background-color: rgb(20,20,20); padding-top: 20px; padding-bottom: 20px;'>
        <div class='container'>
            <div class='row'>
                <div class='mbr-table-md-up'>
                    <div class='mbr-table-cell mbr-right-padding-md-up col-md-6 text-xs-center text-md-right'>
                        <div class='lead'>
                            $line
                        </div>
                    </div>
                    $img
                </div>
            </div>
        </div>
    </section>

");
}
else{
    echo("

<section class='mbr-section mbr-after-navbar' id='EO-msg-box5-0' style='background-color: rgb(20,20,20); padding-top: 20px; padding-bottom: 20px;'>
        <div class='container'>
            <div class='row'>
                <div class='mbr-table-md-up'>
                    $img
                    <div class='mbr-table-cell mbr-right-padding-md-up col-md-6 text-xs-center text-md-right'>
                        <div class='lead'>
                            $line
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

");

}
}
?>
    <section class="mbr-section mbr-section__container" id="page7-header3-0" style="background-color: rgb(255, 255, 255); padding-top: 1.75rem;">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h4 class="mbr-section-title " style="font-size: 2rem; padding-top: 0.5rem;">Visit our <a href="https://www.facebook.com/nssiitbombay/photos/?tab=album&album_id=988090541219125">facebook
                            page</a> for more..</h4>

                </div>
            </div>
        </div>
    </section>
    <?php include("../common/footer/footer.php"); ?>
</body>

    <script src="assets/web/assets/jquery/jquery.min.js"></script>
    <script src="assets/tether/tether.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/smooth-scroll/SmoothScroll.js"></script>
    <script src="assets/viewportChecker/jquery.viewportchecker.js"></script>
    <script src="assets/dropdown/js/script.min.js"></script>
    <script src="assets/touchSwipe/jquery.touchSwipe.min.js"></script>
    <script src="assets/theme/js/script.js"></script>


    <input name="animation" type="hidden">
    <div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i class="mbr-arrow-up-icon"></i></a></div>
<script>
    includeNav();
    includeHTML();
</script>

</html>