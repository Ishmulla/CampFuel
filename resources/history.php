<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="../images/favicon.ico" />
	<title>History :: CampFuel</title>
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
<h1 style="color:#a88beb;" class="title is-3 has-text-left">Order history</h1>	
<?php
require '../database/dbconfig.php';
$history=mysqli_query($con,"SELECT * FROM tbl_orders WHERE client_id='$user_id' ORDER BY id DESC");
if (mysqli_num_rows($history)>0) {
?>
<div style="overflow-x:scroll" class="box">
<table class="table is-stripped is-fullwidth is-bordered">
	<thead>
		<th class="has-text-primary"><sup>NO</sup></th>
		<th class="has-text-primary">CYLINDER SIZE</th>
		<th class="has-text-primary">PROPANE BRAND</th>
		<th class="has-text-primary">QUANTITY</th>
		<th class="has-text-primary">SELLER</th>
		<th class="has-text-primary">PRICE</th>
		<th class="has-text-primary">STATUS</th>
	</thead>
	<tbody>
<?php
while ($rowhistory=$history->fetch_assoc()) {
$order_id=$rowhistory['id'];
$inventory_id=$rowhistory['stock_id'];
$quantity=$rowhistory['quantity'];
$status=$rowhistory['order_status'];
// INVENTORY
$inventory=mysqli_query($con,"SELECT * FROM tbl_inventory WHERE id='$inventory_id'");
while ($rowinventory=$inventory->fetch_assoc()) {
$cylinder_size=$rowinventory['cylinder_size'];
$gas_brand=$rowinventory['gas_brand'];
$price=$rowinventory['price']*$quantity;
$merchant_id=$rowinventory['merchant_id'];
// COMPANY
  $name=mysqli_query($con,"SELECT * FROM tbl_companies WHERE merchant_id='$merchant_id'");
  while ($rowname=$name->fetch_assoc()) {
  $company=$rowname['name'];
  }
  $cont=mysqli_query($con,"SELECT * FROM tbl_merchants WHERE id='$merchant_id'");
  while ($rowname=$cont->fetch_assoc()) {
  $contact=$rowname['phone'];
  }
}
// STATUS
 switch ($status) {
 	case '1':
    $order_status="Processing";
 		break;
 	case '2':
 	$order_status="Shipping";
 		break;
 	case '3':
 	$order_status="Awaiting payment";
 		break;
 	case '4':
 	$order_status="Completed";
 		break;
 	case '5':
 	$order_status="Declined";
 		break;
 	default:
 		# code...
 		break;
 }

?>
<tr>
	<td><?php echo $order_id; ?></td>
	<td><?php echo $cylinder_size; ?> (Kgs)</td>
	<td><?php echo $gas_brand; ?></td>
	<td><?php echo $quantity; ?></td>
	<td><?php echo $company; ?><br><i class="fa fa-phone"></i>&nbsp;<?php echo $contact; ?></td>
	<td>Ksh <?php echo $price; ?></td>
	<td>
	<?php
// STATUS
 switch ($status) {
 	case '1':
?>
<p class="has-text-info">Waiting for seller</p>
<?php
 		break;
 	case '2':
?>
<p>Under shipping</p>
<?php
 		break;
 	case '3':
?>
<p class="has-text-primary">Awaiting payment</p>
<!-- <a target="targetframe" onclick="loadgif()" class="button is-success butt" href="confirm_payment.php?order_id=<?php echo $order_id; ?>">CONFIRM PAYMENT</a>  -->
<?php
 		break;
 	case '4':
?>
<p class="has-text-success">Completed</p>
<?php
 		break;
 	case '5':
?>
<p class="has-text-danger">Declined</p>
<?php
 		break;
 	default:
 		# code...
 		break;
 }
	?>		
	</td>
</tr>
<?php

}
?>		
	</tbody>
</table>	
</div>
<?php
}else{
?>
<div class="box">
	<p>You have not made any orders yet</p>
</div>
<?php
}
?>
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