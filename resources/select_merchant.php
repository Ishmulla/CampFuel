<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="../images/favicon.ico" />
	<title>Select Seller :: CampFuel</title>
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
<div class="steps">
<h1 style="color:#a88beb;" class="title is-3 has-text-left">Choose seller</h1> 
<article style="" class="message is-primary">
<div class="message-body">
<h6 class="title is-6 has-text-left">Order specifications:<br>CYLINDER SIZE: <?php echo $_GET['cylinder_size']; ?> (Kgs)<br>PROPANE BRAND: <?php echo $_GET['gas_brand']; ?><br>QUANTITY: <?php echo $_GET['quantity']; ?></h6>
</div>
</article>

<hr>

<div class="columns is-multiline">

<?php
require '../database/dbconfig.php';
$cylinder_size=$_GET['cylinder_size'];
$gas_brand=$_GET['gas_brand'];
$quantity=$_GET['quantity'];
$_SESSION['quantity']=$quantity;
$merchant=mysqli_query($con,"SELECT * FROM tbl_inventory WHERE cylinder_size LIKE '%$cylinder_size%' AND gas_brand LIKE '%$gas_brand%' AND quantity>='$quantity' ORDER BY id asc");
if (mysqli_num_rows($merchant)>0) {
?>
<form method="post" action="cart.php">
<div class="control">
  <div class="select is-medium is-primary">
    <select name="inventory_id" required>
<option style="display:none" selected="selected" value="">Select seller</option>
<?php
while ($rowmerchant=$merchant->fetch_assoc()) {
$inventory_id=$rowmerchant['id'];
$merchant_id=$rowmerchant['merchant_id'];
$price=$rowmerchant['price']*$quantity;


  $name=mysqli_query($con,"SELECT * FROM tbl_companies WHERE merchant_id='$merchant_id'");
  while ($rowname=$name->fetch_assoc()) {
  $company=$rowname['name'];
  $_SESSION['company']=$company;
  $_SESSION['merchant_id']=$merchant_id;
  $_SESSION['initial_quantity']=$rowmerchant['quantity'];
  }
  ?>
 
 
  <option value="<?php echo $inventory_id; ?>"><?php echo $company; ?> - Ksh <?php echo $price; ?></option>
  

<?php
}
?>
</select>
  </div>
</div>
<br><button class="button is-primary button-full is-pulled-left">SELECT ME</button>
</form>
<?php
}else{
echo "Merchant fulfilling the above order not found. Try to change quantity or gas brand.";
}
?>
  
</div>


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