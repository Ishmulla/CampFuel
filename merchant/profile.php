<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="../images/favicon.ico" />
  <title>Profile :: CampFuel</title>
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
require '../resources/info.php';
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

<!-- profile -->
<?php
require '../database/dbconfig.php';

$sqlprof=mysqli_query($con,"SELECT * FROM tbl_merchants WHERE id='$merchant_id'");
while ($rowprof=$sqlprof->fetch_assoc()) {
$name=$rowprof['first_name']." ".$rowprof['last_name'];
$email=$rowprof['email'];
$phone=$rowprof['phone'];
}

?>
<h2  class="title is-3 main-title">Profile manager</h2>
<h2  class="title is-5 main-title">Personal information</h2>
<div class="box main-div">

    <p><b><i class="fa fa-user"></i> Name: </b><?php echo $name; ?></p>
  <!-- <p><b><i class="fa fa-id-card"></i> National ID: </b>33857872</p> -->
  <p><b><i class="fa fa-envelope"></i> Email: </b><?php echo $email; ?></p>
  <p><b><i class="fa fa-phone"></i> Phone: </b><?php echo $phone; ?> <span style="cursor:pointer;" onclick="change_phone()" class="help is-info">Change phone number</span></p>
  <script type="text/javascript">
function change_phone () {
window.location.href='change_phone.php';
}
  </script>
  <p><b><i class="fa fa-lock"></i> Password: </b>******** <span style="cursor:pointer;" onclick="log()" class="help is-info">Use forgot password link at the login page to change password</span></p>
<script type="text/javascript">
  function log() {
window.location.href='logout.php';
}
</script>	
</div>
<!-- profile -->

<!-- company -->
<?php
$sqlcompany=mysqli_query($con,"SELECT * FROM tbl_companies WHERE merchant_id='$merchant_id'");
while ($rowcompany=$sqlcompany->fetch_assoc()) {
$company_name=$rowcompany['name'];
$location=$rowcompany['location'];
$description=$rowcompany['description'];
}
?>
<h2  class="title is-5 main-title">Company details</h2>
<div class="box main-div">
  <p><b><i class="fa fa-building-o"></i> Company name: </b><?php echo $company_name; ?></p>
  <p><b><i class="fa fa-map-marker"></i> Location: </b><?php echo $location; ?></p>
  <p><b><i class="fa fa-bars"></i> Description: </b><?php echo $description; ?></p>
</div>
<!-- company -->

</div>
<!-- MAIN -->

<!-- FOOTER -->
<?php
// require 'footer_resources.php';
?>
<!-- FOOTER -->

</body>
</html>