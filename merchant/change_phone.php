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

<h2  class="title is-3 main-title">Change phone number</h2>
<div class="box main-div">

 <form target="targetframe" onsubmit="loadgif()" method="post" action="submit_change_phone.php">
 <!-- ...................... -->
<div class="field">
  <p class="control has-icons-left">
    <input class="input" type="text" name="phone_number" placeholder="New Phone" required>
    <span class="icon is-small is-left">
      <i class="fa fa-phone"></i>
    </span>
  </p>
</div>
                                    <button type="submit" class="button is-primary">
                                        <span class="text">Change phone</span>
                                    </button>
<!-- ........................ -->  
 </form>

</div>
<!-- profile -->

</div>
<!-- MAIN -->

<!-- FOOTER -->
<?php
require 'targetframe.php';
?>
<!-- FOOTER -->

</body>
</html>