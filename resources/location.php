<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="../images/favicon.ico" />
	<title>Location :: CampFuel</title>
	<link rel="stylesheet" type="text/css" href="../css/bulma.css">
	<link rel="stylesheet" type="text/css" href="../css/custom.css">
    <link rel="stylesheet" href="../font-awesome-4.7.0/css/font-awesome.min.css">
     <script src="../js/jquery-3.3.1.min.js"></script>
     <script src="../js/custom.js"></script>
     <script src="../js/bulma.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
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
<?php
require '../database/dbconfig.php';
$check=mysqli_query($con,"SELECT * FROM locations WHERE user_id = '$user_id'");
if (mysqli_num_rows($check)>0) {
// location set
while ($rowcheck=$check->fetch_assoc()) {
$description=$rowcheck['description'];
?>
<article style="" class="message is-primary">
<div class="message-body">
<h6 class="title is-6 has-text-left"><i class="fa fa-map-marker"></i>&nbsp;Your location is set to: <b><?php echo $description; ?></b></h6>
<h6 class="title is-6 has-text-left">Click on the map to change</h6>
</div>
</article>
<?php
}}else{
?>
<article style="" class="message is-primary">
<div class="message-body">
<h6 class="title is-6 has-text-left"><i class="fa fa-map-marker"></i>&nbsp;Click on the map to set your location</h6>
</div>
</article>
<?php
}
require 'user-map.php';
?>


</div>
<!-- MAIN -->

<!-- FOOTER -->
<?php
// require 'footer_resources.php';
?>
<!-- FOOTER -->

</body>
</html>