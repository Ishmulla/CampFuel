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

<?php
$id=$_GET['id'];
require '../database/dbconfig.php';
$inventory=mysqli_query($con,"SELECT * FROM tbl_inventory WHERE id='$id'");
while ($rowinventory=$inventory->fetch_assoc()) {
$cylinder_size=$rowinventory['cylinder_size'];
$gas_brand=$rowinventory['gas_brand'];
$price=$rowinventory['price'];
$quantity=$rowinventory['quantity'];
}
?>


<div class="steps">
<article style="" class="message is-primary">
<div class="message-body">
<h6 class="title is-6 has-text-left">Fill in the form below and save to edit stock</h6>
</div>
</article>
<form target="targetframe" onsubmit="loadgif()" method="post" action="edit_inventory.php?id=<?php echo $id; ?>">
<div  class="columns">

<div class="column">
<div class="box">
<h4 class="title-is-4 is-bold has-text-primary"><b>CYLINDER SIZE (Kgs)</b></h4>	

 <div class="field">
  <p class="control">
    <input class="input" type="text" value="<?php echo $cylinder_size; ?>" name="cylinder_size" placeholder="e.g 6" required>
  </p>
</div>

</div>	
</div>

<div class="column">
<div class="box">
<h4 class="title-is-4 is-bold has-text-primary"><b>GAS BRAND NAME</b></h4>	

 <div class="field">
  <p class="control">
    <input class="input" type="text" value="<?php echo $gas_brand; ?>" name="gas_brand" placeholder="e.g Total" required>
  </p>
</div>

</div>	
</div>

<div class="column">
<div class="box">
<h4 class="title-is-4 is-bold has-text-primary"><b>PRICE (KSH)</b></h4>  

 <div class="field">
  <p class="control">
    <input class="input" type="text" value="<?php echo $price; ?>" name="price" placeholder="e.g 900" required>
  </p>
</div>

</div>  
</div>

<div class="column">
<div class="box">
<h4 class="title-is-4 is-bold has-text-primary"><b>QUANTITY</b></h4>  

 <div class="field">
  <p class="control">
    <input class="input" type="text" value="<?php echo $quantity; ?>" name="quantity" placeholder="e.g 15" required>
  </p>
</div>

</div>  
</div>






</div>	
<button class="button is-primary button-full is-pulled-left">SUBMIT CHANGES</button><br><br>
</form>	

<div class="divider"></div>





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