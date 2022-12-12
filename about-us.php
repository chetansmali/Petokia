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
   <!--    <link href="images/logo.jpg" rel="shortcut icon"> -->
    <title>Petshop Online Website</title>

    <!-- core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">

</head><!--/head-->

<!--*********************************************START OF NAVIGATION BAR****************************************-->
<body>

      <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="index.php"><h4 class="wow fadeInDown" style="margin-top:20px; color:#FFF;">
                        <!--      <img src="images/logo.jpg"  width="15% "/> --> Petokia</h4></a>
                </div>

                <div class="collapse navbar-collapse navbar-right wow fadeInDown">
                    <ul class="nav navbar-nav">
                         <li><a href="index.php"><i class="fa fa-home"></i>Home</a></li>
                        <li class="active" ><a href="about-us.php">About Us</a></li>
                        <li ><a href="available.php">Available Products</a></li>
                        <li><a href="contacts.php">Contacts</a></li>

                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
       <li id="page_about">
    <div class="title-wrapper">
        <center>
        <h2>About Us</h2>
    </div>
    <h4></h4>
    <center>
    <div class="two_third" style="width:48%;">
    <p style="text-align:justify;">
                    The Petshop operates an online pet shop store selling animal food, accessories
        and products.
          As pet parents ourselves, we want to help every pet parent and their pet meet all their needs through
          our innovative products and services. Our hope is that we can play a meaningful role in bringing pets
          and their humans closer to each other for years and years to come, and through that build a kinder world.
    </p>
  </div>
</center>

    <div class="v_space"></div>
    <center>
      <div class="two_third" style="width:48%;">
     <h4>Customers First </h4>
     <p style="text-align:justify;">
        Building loyalty and good relationship with our customer is our priority.
        The company exist to give the best price without compromising the quality and to
         make each transaction experience easy,safe and
        accessible to online buyers.


    </p>
  </div>

    <div class="v_space"></div>

    <div class="title-wrapper">

    </div>
    <center>
    <div class="two_third" style="width:48%;">
        <h2>Mission</h2>
            <p style="text-align:justify;">
            Our goal is to give our customers the best online shopping experience by giving them the best price and making each transaction  easy,  fast and secured.</p>
    </div>
    <div class="one_third_last" style="width:48%;">
        <h2>Vision</h2>
         <p style="text-align:justify;">
           When the right pet finds you, they can turn a house into a home,
 bring people closer and fill our lives with endless love.
 At Heads Up For Tails, we envision that with our passion and efforts,
 every home can realise the joys of raising pets as family.
        </p>
    </div>
    </div>
    <br>
     <br>
      <br><br>
       <br>
        <br><br>
         <br>
          <br>
    <!-- <iframe height="400" frameborder="0" style="width: 100%;" src="http://maps.google.com/maps?q=13.824586996963804,121.06706139160157&amp;ll=13.824586996963804,121.06706139160157&amp;z=11&amp;output=embed"> </iframe> -->
    <div class="clear"></div>
</li>

<!--*************************************************** FOOTERS **********************************************-->

    <?php include('includes/footer.php');?>

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
