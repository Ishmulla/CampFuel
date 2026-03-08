<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="../images/favicon.ico" />
	<title>Dashboard :: CampFuel</title>
	<link rel="stylesheet" type="text/css" href="../css/bulma.css">
	<link rel="stylesheet" type="text/css" href="../css/custom.css">
    <link rel="stylesheet" href="../font-awesome-4.7.0/css/font-awesome.min.css">
     <script src="../js/jquery-3.3.1.min.js"></script>
     <script src="../js/custom.js"></script>
     <script src="../js/bulma.js"></script>
</head>
<body class="is-light">

<!-- HEADER -->
<?php
require 'header_dashboard.php';
?>
<!-- HEADER -->

<!-- ASIDE -->
<div class="custom-aside">
<?php
require 'dashboard_menu.php';
?>
</div>
<!-- ASIDE -->

<!-- MAIN -->
<div class="custom-main">
<!-- MOBILE -->
<?php
require 'mobile_dashboard_menu.php';
?>
<!-- MOBILE -->
<article style="margin:0px 10px 10px 10px ;" class="message is-info">
<div class="message-body">
<h3 class="title is-5">Welcome to CampFuel. Follow the steps below to order your Propane cylinder and other accesories.</h3>
</div>
</article>
<br>
<div class="steps">
<div class="columns">
<div class="column">
<div class="box">
<h4 class="title-is-4">STEP 1</h4>
<br>	
<i class="fa fa-map-marker fa-3x has-text-danger"></i>
<br>
<p>Set your location</p>
</div>
</div>

<div class="column">
<div class="box">
<h4 class="title-is-4">STEP 2</h4>	
<br>	
<i style="color:#209cee;" class="fa fa-shopping-bag"></i>
<i style="color:#ff3860;" class="fa fa-shopping-bag"></i>
<i style="color:#00d1b2;" class="fa fa-shopping-bag"></i>
<p>Select cylinder size, brand and quantity</p>
</div>
</div>	
</div>

<div class="columns">
<div class="column">
<div class="box">
<h4 class="title-is-4">STEP 3</h4>	
<br>
<i class="fa fa-user fa-2x has-text-primary"></i>
<i class="fa fa-user fa-2x has-text-link"></i>
<p>Select seller and wait for delivery</p>
</div>
</div>

<div class="column">
<div class="box">
<h4 class="title-is-4">STEP 4</h4>	
<br>
<i class="fa fa-truck"></i>
<i class="fa fa-long-arrow-right"></i>
<i class="fa fa-money"></i>
<i class="fa fa-long-arrow-right"></i>
<i class="fa fa-check-circle"></i>
<p>Pay on delivery</p>
</div>
</div>	
</div>	<br><br>
</div>


</div>
<!-- MAIN -->

<!-- FOOTER -->
<?php
// require 'footer_resources.php';
?>
<!-- FOOTER -->

</body>
</html>