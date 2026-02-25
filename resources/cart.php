<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="../images/favicon.ico" />
	<title>Cart :: CampFuel</title>
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
<h1 style="color:#a88beb;" class="title is-3 has-text-left">Confirm order</h1>

<?php
require '../database/dbconfig.php';
$inventory_id=$_POST['inventory_id'];
$inventory=mysqli_query($con,"SELECT * FROM tbl_inventory WHERE id='$inventory_id'");
while ($rowinventory=$inventory->fetch_assoc()) {
$cylinder_size=$rowinventory['cylinder_size'];
$gas_brand=$rowinventory['gas_brand'];
$quantity=$_SESSION['quantity'];
$company=$_SESSION['company'];
$merchant_id=$_SESSION['merchant_id'];
$price=$rowinventory['price']*$quantity;
$_SESSION['pr']=$price;
}
?>

<div style="border:1px solid #a88beb;" class="box">
    <p class="has-text-left"><span class="has-text-weight-semibold">CYLINDER SIZE: </span><?php echo $cylinder_size; ?> (Kgs)</p>
    <p class="has-text-left"><span class="has-text-weight-semibold">GAS BRAND: </span><?php echo $gas_brand; ?></p>	
    <p class="has-text-left"><span class="has-text-weight-semibold">QUANTITY: </span><?php echo $quantity; ?></p>	
    <p class="has-text-left"><span class="has-text-weight-semibold">SELLER: </span><?php echo $company; ?></p>	
    <p class="has-text-left"><span class="has-text-weight-semibold">ESTIMATED BUDGET: </span>Ksh <?php echo $price; ?></p>	
</div>

<p class="help is-info has-text-left">* Pay on delivery</p><br>

   <a target="targetframe" onclick="loadgif()" class="button is-primary is-pulled-left button-full" href="enter_confirmed.php?client_id=<?php echo $user_id; ?>&stock_id=<?php echo $inventory_id; ?>&quantity=<?php echo $quantity; ?>&location_id=<?php echo $_SESSION['location_id']; ?>&merchant_id=<?php echo $_SESSION['merchant_id']; ?>">CONFIRM</a>


</div>


</div>
<!-- MAIN -->

<!-- FOOTER -->
<?php
require 'targetframe.php';
?>
<!-- FOOTER -->

</body>
</html>