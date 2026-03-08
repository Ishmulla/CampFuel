<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="images/favicon.ico" />
	<title>Camp Fuel :: Home</title>
	<link rel="stylesheet" type="text/css" href="css/bulma.css">
	<link rel="stylesheet" type="text/css" href="css/custom.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
     <script src="js/jquery-3.3.1.min.js"></script>
     <script src="js/custom.js"></script>
     <script src="js/bulma.js"></script>
</head>
<body class="is-light">
<!-- feature branch test for authentication cleanup -->
<!-- HEADER -->
<?php
require 'resources/header_guest.php';
require 'resources/info.php';
?>
<!-- HEADER -->


<!-- MAIN -->
<div class="custom-hero">
	
<div class="columns is-centered">
<div class="column disappear-mobile">
<img src="images/gases_resized.png">	
</div>	
<div class="column">
<h1 style="color:#a88beb;" class="title is-3">Propane order</h1>
<!-- <i><h4 class="title is-6"><i class="fa fa-map-marker"></i> Moi University environs</h4></i><br> -->
<div class="control" style="margin-bottom:10px;">
  <label class="radio">
    <input onclick="customer()" type="radio" name="answer"checked>
    Customer
  </label>
  <label class="radio">
    <input onclick="merchant()" type="radio" name="answer">
    Merchant
  </label>
</div>

<div class="customer">
 <form method="post" target="targetframe" onsubmit="loadgif()" action="resources/client_login.php">
<div class="field">
  <p class="control has-icons-left">
    <input class="input" type="email" name="email" placeholder="Customer Email" required>
    <span class="icon is-small is-left">
      <i class="fa fa-envelope"></i>
    </span>
  </p>
</div>
<div class="field">
  <p class="control has-icons-left">
    <input class="input" type="password" name="password" placeholder="Password" required>
    <span class="icon is-small is-left">
      <i class="fa fa-lock"></i>
    </span>
  </p>
</div> 
<a href="resources/forgot_password.php">Forgot password ?</a><br><br>
<div class="field">
  <button type="submit" class="button is-primary button-full"><i class="fa fa-sign-in" aria-hidden="true"></i>&nbsp;Login</button>
</div>  
 </form>  
</div>

<div class="merchant">
 <form method="post" target="targetframe" onsubmit="loadgif()" action="resources/merchant_login.php">
<div class="field">
  <p class="control has-icons-left">
    <input class="input" type="email" name="email" placeholder="Merchant Email" required>
    <span class="icon is-small is-left">
      <i class="fa fa-envelope"></i>
    </span>
  </p>
</div>
<div class="field">
  <p class="control has-icons-left">
    <input class="input" type="password" name="password" placeholder="Password" required>
    <span class="icon is-small is-left">
      <i class="fa fa-lock"></i>
    </span>
  </p>
</div> 
<a href="resources/merchant_forgot_password.php">Forgot password ?</a><br><br>
<div class="field">
  <button type="submit" class="button is-primary button-full"><i class="fa fa-sign-in" aria-hidden="true"></i>&nbsp;Login</button>
</div>  
 </form>  
</div>




</div>
</div>

</div>
<!-- MAIN -->

<!-- FOOTER -->
<?php
require 'resources/footer_guest.php';
require 'resources/targetframe_guest.php';
?>
<!-- FOOTER -->
</body>
</html>
