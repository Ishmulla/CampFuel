<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="../images/favicon.ico" />
	<title>Stock :: CampFuel</title>
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
require '../resources/info.php';
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
<article style="" class="message is-primary">
<div class="message-body">
<h6 class="title is-6 has-text-left">Fill in the form below to add stock.</h6>
</div>
</article>
<form target="targetframe" onsubmit="loadgif()" method="post" action="add_inventory.php">
<div  class="columns">

<div class="column">
<div class="box">
<h4 class="title-is-4 is-bold has-text-primary"><b>CYLINDER SIZE (Kgs)</b></h4>	

 <div class="field">
  <p class="control">
    <input class="input" type="text" name="cylinder_size" placeholder="e.g 6" required>
  </p>
</div>

</div>	
</div>

<div class="column">
<div class="box">
<h4 class="title-is-4 is-bold has-text-primary"><b>GAS BRAND NAME</b></h4>	

 <div class="field">
  <p class="control">
    <input class="input" type="text" name="gas_brand" placeholder="e.g Total" required>
  </p>
</div>

</div>	
</div>

<div class="column">
<div class="box">
<h4 class="title-is-4 is-bold has-text-primary"><b>PRICE (KSH)</b></h4>  

 <div class="field">
  <p class="control">
    <input class="input" type="text" name="price" placeholder="e.g 900" required>
  </p>
</div>

</div>  
</div>

<div class="column">
<div class="box">
<h4 class="title-is-4 is-bold has-text-primary"><b>QUANTITY</b></h4>  

 <div class="field">
  <p class="control">
    <input class="input" type="text" name="quantity" placeholder="e.g 15" required>
  </p>
</div>

</div>  
</div>






</div>	
<button class="button is-primary button-full is-pulled-left">SUBMIT</button><br><br>
</form>	

<div class="divider"></div>
<h2  class="title is-4 has-text-left has-text-weight-bold">Available stock</h2>

<div style="overflow-x:scroll" class="box">

<?php
require '../database/dbconfig.php';
$inventory=mysqli_query($con,"SELECT * FROM tbl_inventory WHERE merchant_id='$merchant_id' ORDER BY id desc");
if (mysqli_num_rows($inventory)>0) {
// show inventory
?>
<table class="table is-fullwidth is-striped">
<thead>
<tr>
<th>BRAND</th>  
<th>CYLINDER SIZE (kgs)</th>
<th>PRICE (Ksh)</th>
<th>QUANTITY</th>
<th>ACTION</th>
</tr>
</thead>
<tbody>
<?php
while ($rowinventory=$inventory->fetch_assoc()) {
$inventory_id=$rowinventory['id'];
$gas_brand=$rowinventory['gas_brand'];
$cylinder_size=$rowinventory['cylinder_size'];
$price=$rowinventory['price'];
$quantity=$rowinventory['quantity'];
?>
<tr>
  <td><?php echo $gas_brand; ?></td>
  <td><?php echo $cylinder_size; ?></td>
  <td><?php echo $price; ?></td>
  <td><?php echo $quantity; ?></td>
  <td>
    <a class="button is-warning butt has-tooltip-active" data-tooltip="Edit"  href="edit_stock.php?id=<?php echo $inventory_id;?>"><i class="fa fa-edit"></i>&nbsp;Edit</a>
    <a class="button is-danger has-tooltip-danger" data-tooltip="Delete" target="targetframe" onclick="loadgif()" href="delete_stock.php?id=<?php echo $inventory_id;?>"><i class="fa fa-trash"></i>&nbsp;Delete</a>
  </td>
</tr>
<?php
}

?>
</tbody>
</table> 
<?php
// show inventory
}else{
?>
<p>No data to display</p>
<?php
}
?>
</div><br>


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