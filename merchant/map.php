<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="../images/favicon.ico" />
	<title>Map :: CampFuel</title>
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


<h1 style="color:#a88beb;" class="title is-3 has-text-left">&nbsp;Location map</h1>	

<article style="" class="message is-primary">
<div class="message-body">
<?php
require '../database/dbconfig.php';
$location_id=$_GET['location_id'];
$check=mysqli_query($con,"SELECT * FROM locations WHERE id = '$location_id'");
// location set
while ($rowcheck=$check->fetch_assoc()) {
$description=$rowcheck['description'];
}
?>
<h6 class="title is-6 has-text-left">Location shown by the yellow marker <b>(<?php echo $description; ?>)</b> </h6>
</div>
</article>

<?php

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