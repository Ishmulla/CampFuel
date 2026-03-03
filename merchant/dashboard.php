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
<h3 class="title is-5">Welcome to CampFuel. Here is how it works...</h3>
</div>
</article>
<br>
<div class="steps">
<div class="columns">
<div class="column">
<div class="box">
<h4 class="title-is-4">STEP 1</h4>
<br>	
<i class="fa fa-barcode fa-3x"></i>
<br>
<p>Add your stock at the left menu</p>
</div>
</div>

<div class="column">
<div class="box">
<h4 class="title-is-4">STEP 2</h4>	
<br>	
<i style="color:#209cee;" class="fa fa-bell fa-2x"></i>
<p>Wait for notifications for new orders</p>
</div>
</div>	
</div>

<div class="columns">
<div class="column">
<div class="box">
<h4 class="title-is-4">STEP 3</h4>	
<br>
<i class="fa fa-thumbs-up fa-2x has-text-primary"></i>
<p>Confirm to fulfil new orders</p>
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
<p>Get paid on delivery</p>
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