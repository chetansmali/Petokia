<?php
    session_start();

    if (!isset($_SESSION['username'])){
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
   <link href="images/logo.jpg" rel="shortcut icon">
    <title>Petokia</title>

    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
<script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>

    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">

</head>

<!--NAVIGATION BAR-->
<body>

      <nav class="navbar navbar-inverse bg-success" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                     <a href="index.php"><h4 class="wow fadeInDown" style="margin-top:20px; color:#FFF;">
                     <img src="images/logo.jpg"  width="15% "/>
                 Petokia</h4></a>
                </div>

                <div class="collapse navbar-collapse navbar-right wow fadeInDown">
                    <ul class="nav navbar-nav">
                         <li class="active"><a href="index.php"><i class="fa fa-home"></i>Home</a></li>
                        <li ><a href="about-us.php">About Us</a></li>
                        <li ><a href="available.php">Available Products</a></li>
                        <li><a href="contacts.php">Contacts</a></li>

                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->

<!-- body  -->
<div>
<div>
  <h2 style="text-align:center; padding-top:50px; padding-bottom:50px;">WELCOM TO PETOKIA </h2>
 <img src="images/img1.jpeg"  width="1520"/>
 <br>
 <br>
 <hr style=" border: 10px solid pink ;
  border-radius: 5px;">
</br>
<p>
  <h2  style="text-align:center;">PET's LOVE</h2>
  <br><center>
The first step to making your cat famous is by building a steady fan base on social media!<br>
You can start by following other animal influencers and learn from what they do.
<br><br>
Don’t stop at clicking photos of your cat in fun poses, wearing a cape and looking like
 he’s ready to take over the world! Push the creative boundaries to bring..
</p></center>
<hr style=" border: 10px solid pink ;
 border-radius: 5px;">
</br>
<img src="images/img2.jpeg"  width="1520"/>
</div>

</div>



<!--*************************************************** FOOTERS **********************************************-->
<footer id="footer" class="midnight-blue wow fadeInDown">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 wow fadeInDown">
               &copy; 2022 <a target="_blank" href="#" title="#">Petokia</a>. All Rights Reserved.
                </div>
                <div class="col-sm-6">
                    <ul class="pull-right wow fadeInDown">
                        <li class="wow fadeInDown"><a href="index.php"><i class="fa fa-home"></i> Home</a></li>

                        <li class="wow fadeInDown"><a href="contacts.php"><i class="fa fa-phone"></i> Contacts</a></li>
                        <li class="wow fadeInDown"><a href="#loginModal" data-toggle="modal" data-target="#loginModal"><i class="fa fa-lock"></i> Admin</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->
 <!----loginModal----->
<?php include('loginModal.php');?>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
</body>
</html>

<?php

} else if(isset($_SESSION['username'])) {

    include('includes/admin.php');

} ?>
