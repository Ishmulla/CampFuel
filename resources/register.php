<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="../images/favicon.ico" />
  <title>Create an account :: CampFuel</title>
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
require 'header_resources.php';
require 'info.php';
?>
<!-- HEADER -->


<!-- MAIN -->
<div class="custom-hero2">
<h1 style="color:#a88beb;" class="title is-3">Propane order</h1> 
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
<!-- CUSTOMER -->
<div class="box customer">
<h2 class="title is-4">Customer Account</h2>
 <form onsubmit="checkpass()" target="targetframe" method="post" action="register_client.php">
<div class="columns">
<div class="column">
 <div class="field">
  <p class="control has-icons-left">
    <input class="input" type="text" name="first_name" placeholder="First Name" required>
    <span class="icon is-small is-left">
      <i class="fa fa-user"></i>
    </span>
  </p>
</div>
<div class="field">
  <p class="control has-icons-left">
    <input class="input" type="text" name="last_name" placeholder="Last Name" required>
    <span class="icon is-small is-left">
      <i class="fa fa-user"></i>
    </span>
  </p>
</div> 
 <div class="field">
  <p class="control has-icons-left">
    <input class="input" type="email" name="email" placeholder="Email" required>
    <span class="icon is-small is-left">
      <i class="fa fa-envelope"></i>
    </span>
  </p>
</div>
<div class="field disappear-mobile">
  <button style="margin-top:20px;" type="submit" class="button is-primary button-full">Register</button>
</div> 
</div>  
<div class="column">
<div class="field">
  <p class="control has-icons-left">
    <input class="input" type="text" name="phone" placeholder="Phone" required>
    <span class="icon is-small is-left">
      <i class="fa fa-phone"></i>
    </span>
  </p>
</div>
<div class="field">
  <p class="control has-icons-left">
    <input id="pass1" class="input" type="password" name="password" placeholder="Password" required>
    <span class="icon is-small is-left">
      <i class="fa fa-lock"></i>
    </span>
  </p>
</div>
<div class="field">
  <p class="control has-icons-left">
    <input id="pass2" class="input" type="password" name="cpassword" placeholder="Confirm Password" required>
    <span class="icon is-small is-left">
      <i class="fa fa-lock"></i>
    </span>
  </p>
</div> 
 <div class="nmatch" style="display:none;color:red"><i class="fa fa-exclamation-triangle"></i> Passwords do not match !</div>
 <div class="field appear-mobile">
  <button style="margin-top:20px;" type="submit" class="button is-primary button-full">Register</button>
</div> 
</div>
</div>

 
 </form>  
  </div>
  <!-- CUSTOMER -->



<!-- MERCHANT -->
<div class="box merchant">
<h2 class="title is-4">Merchant Account</h2>
<h2 class="title is-6">Personal details</h2>
 <form onsubmit="checkpass1()" target="targetframe" method="post" action="register_merchant.php">
<div class="columns">
<div class="column">
 <div class="field">
  <p class="control has-icons-left">
    <input class="input" name="first_name" type="text" placeholder="First Name" required>
    <span class="icon is-small is-left">
      <i class="fa fa-user"></i>
    </span>
  </p>
</div>
<div class="field">
  <p class="control has-icons-left">
    <input class="input" name="last_name" type="text" placeholder="Last Name" required>
    <span class="icon is-small is-left">
      <i class="fa fa-user"></i>
    </span>
  </p>
</div> 
 <div class="field">
  <p class="control has-icons-left">
    <input class="input" name="email" type="email" placeholder="Email" required>
    <span class="icon is-small is-left">
      <i class="fa fa-envelope"></i>
    </span>
  </p>
</div>
 
</div>  
<div class="column">
<div class="field">
  <p class="control has-icons-left">
    <input class="input" name="phone" type="text" placeholder="Phone" required>
    <span class="icon is-small is-left">
      <i class="fa fa-phone"></i>
    </span>
  </p>
</div>
<div class="field">
  <p class="control has-icons-left">
    <input id="pass3" class="input" name="password" type="password" placeholder="Password" required>
    <span class="icon is-small is-left">
      <i class="fa fa-lock"></i>
    </span>
  </p>
</div>
<div class="field">
  <p class="control has-icons-left">
    <input id="pass4" class="input" name="cpassword" type="password" placeholder="Confirm Password" required>
    <span class="icon is-small is-left">
      <i class="fa fa-lock"></i>
    </span>
  </p>
</div> 
<div class="nmatch1" style="display:none;color:red"><i class="fa fa-exclamation-triangle"></i> Passwords do not match !</div>
</div>
</div>

<h2 class="title is-6">Company details</h2>

<div class="columns">
<div class="column">
<div class="field">
  <p class="control has-icons-left">
    <input class="input" name="name" type="text" placeholder="Company Name" required>
    <span class="icon is-small is-left">
      <i class="fa fa-bars"></i>
    </span>
  </p>
</div> 
<div class="field">
  <p class="control has-icons-left">
    <input class="input" name="location" type="text" placeholder="Location" required>
    <span class="icon is-small is-left">
      <i class="fa fa-map-marker"></i>
    </span>
  </p>
</div> 
</div> 
<div class="column">
<div class="field">
  <div class="control">
    <textarea name="description" onkeyup="textAreaAdjust(this)" class="textarea" placeholder="Description/Slogan" required></textarea>
  </div>
</div>

 <div class="field">
  <button type="submit" class="button is-primary button-full">Register</button>
</div>  
</div>
</div>

 
 
 </form>  
  </div>
<!-- MERCHANT -->




</div>
<!-- MAIN -->

  <p onclick="merch()">.</p>
<!-- FOOTER -->
<?php
require 'footer_resources.php';
require 'targetframe.php';
?>
<!-- FOOTER -->

</body>
</html>